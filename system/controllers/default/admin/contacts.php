<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}
if (!isset($myCtrl)) {
    $myCtrl = 'contacts';
}
_auth();
$workspace_id = $_SESSION['workspace_id'] ?? 0;
$ui->assign('selected_navigation', 'contacts');
$ui->assign('_title', $_L['Customers'] . ' - ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
$data = request()->all();
switch ($action) {
    case 'add':
        AppEvent::trigger('contacts/add/');

        $type = route(2);

        $title_type = $_L['Add Customer'];
        $contact_type = 'customer';

        $db_type = 'Customer';

        if ($type == 'supplier') {
            $type_title = $_L['Add Supplier'];
            $contact_type = 'supplier';
            $db_type = 'Supplier';
            $ui->assign('selected_navigation', 'suppliers');
            $predict_customer_number = predict_next_serial($config, 'supplier');
        } else {
            $predict_customer_number = predict_next_serial($config, 'customer');
        }

        if (!has_access($user->roleid, 'customers', 'create')) {
            permissionDenied();
        }

        $ui->assign('countries', Countries::all($config['country'])); // may add this $config['country_code']

        $fs = ORM::for_table('crm_customfields')
            ->where('ctype', 'crm')
            ->order_by_asc('id')
            ->find_many();
        $ui->assign('fs', $fs);

        // find all companies

        $companies = ORM::for_table('sys_companies')
            ->select('id')
            ->select('company_name')
            ->order_by_desc('id')
            ->find_array();

        $ui->assign('companies', $companies);

        // find all groups

        $gs = ORM::for_table('crm_groups')
            ->order_by_asc('sorder')
            ->find_array();

        $ui->assign('gs', $gs);

        $g_selected_id = route(3);
        $c_selected_id = route(4);

        if ($g_selected_id !== '' && $g_selected_id !== '0') {
            $ui->assign('g_selected_id', $g_selected_id);
        } else {
            $ui->assign('g_selected_id', '');
        }

        if ($c_selected_id !== '' && $c_selected_id !== '0') {
            $ui->assign('c_selected_id', $c_selected_id);
        } else {
            $ui->assign('c_selected_id', '');
        }
        $tags = Tags::get_all('Contacts');
        $ui->assign('tags', $tags);

        $currencies = Currency::all();

        $ui->assign('currencies', $currencies);

        $owners = getOwners($user);

        view('contacts_add', [
            'contact_type' => $contact_type,
            'title_type' => $title_type,
            'db_type' => $db_type,
            'predict_customer_number' => $predict_customer_number,
            'owners' => $owners,
        ]);

        break;

    case 'summary':
        $extra_html_0 = '';
        $extra_html_1 = '';
        $extra_html_2 = '';

        AppEvent::trigger('contacts/summary/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $ti = ORM::for_table('sys_transactions')
                ->where('payerid', $cid)
                ->sum('cr');
            if ($ti == '') {
                $ti = '0';
            }
            $ui->assign('ti', $ti);
            $te = ORM::for_table('sys_transactions')
                ->where('payeeid', $cid)
                ->sum('dr');
            if ($te == '') {
                $te = '0';
            }

            $ui->assign('te', $te);
            $ui->assign('d', $d);

            $cf = ORM::for_table('crm_customfields')
                ->where('ctype', 'crm')
                ->order_by_asc('id')
                ->find_many();
            $ui->assign('cf', $cf);

            // Find Profit

            if ($ti > $te) {
                $happened = $_L['Profit'];
                $css_class = 'green';

                $d_amount = $ti - $te;
            } else {
                $happened = $_L['Loss'];
                $css_class = 'danger';
                $d_amount = $te - $ti;
            }

            $ui->assign('happened', $happened);
            $ui->assign('css_class', $css_class);
            $ui->assign('d_amount', $d_amount);

            // $customer = $d;

            AppEvent::trigger('contacts/summary_display/');

            $staffs = User::all()->keyBy('id')->all();

            $ui->assign('extra_html_0', $extra_html_0);
            $ui->assign('extra_html_1', $extra_html_1);
            $ui->assign('extra_html_2', $extra_html_2);

            view('ajax-contact-summary',[

                'staffs' => $staffs,
            ]);
        }

        break;

    case 'activity':
        AppEvent::trigger('contacts/activity/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $ac = ORM::for_table('sys_activity')
                ->where('cid', $cid)
                ->limit(30)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('ac', $ac);

            view('ajax-contact-activity');
        }

        break;

    case 'invoices':
        AppEvent::trigger('contacts/invoices/');

        $cid = _post('cid');
        $ui->assign('cid', $cid);
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $invoices_summary = Invoice::getInvoicesSummaryForCustomer($d->id);

            $invoice_groups = [];

            if(!empty($config['invoice_group']))
            {
                $invoice_groups = InvoiceGroup::all()->keyBy('id')->all();
            }

            $services = [];

            if(!empty($config['invoice_single_service']))
            {
                $services = Item::all()->keyBy('id')->all();
            }

            $staffs = User::all()->keyBy('id')->all();

            view('ajax-contact-invoices', [
                'total_invoice_amount' =>
                    $invoices_summary['total_invoiced_amount'],
                'total_paid_amount' => $invoices_summary['total_paid_amount'],
                'total_unpaid_amount' =>
                    $invoices_summary['total_unpaid_amount'],
                'invoices' => $invoices_summary['invoices'],
                'invoice_groups' => $invoice_groups,
                'services' => $services,
                'staffs' => $staffs,
            ]);
        }

        break;

    case 'purchases':
        AppEvent::trigger('contacts/purchases/');

        $cid = _post('cid');
        $ui->assign('cid', $cid);
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $i = ORM::for_table('sys_purchases')
                ->where('userid', $cid)
                ->find_many();

            $total_invoice_amount = Purchase::where('userid', $cid)->sum(
                'total'
            );
            $total_paid_amount = Purchase::where('userid', $cid)
                ->paid()
                ->sum('total');
            $total_unpaid_amount = Purchase::where('userid', $cid)
                ->unpaid()
                ->sum('total');

            $ui->assign('i', $i);

            view('ajax-contact-purchases', [
                'total_invoice_amount' => $total_invoice_amount,
                'total_paid_amount' => $total_paid_amount,
                'total_unpaid_amount' => $total_unpaid_amount,
            ]);
        }

        break;

    case 'quotes':
        AppEvent::trigger('contacts/quotes/');

        $cid = _post('cid');
        $ui->assign('cid', $cid);
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $i = ORM::for_table('sys_quotes')
                ->where('userid', $cid)
                ->find_many();
            $ui->assign('i', $i);

            view('ajax-contact-quotes');
        }

        break;

    case 'transactions':
        AppEvent::trigger('contacts/transactions/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $tr = ORM::for_table('sys_transactions')
                ->where_raw('(`payerid` = ? OR `payeeid` = ?)', [$cid, $cid])
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('tr', $tr);

            view('ajax-contact-transactions');
        }

        break;

    case 'email':
        AppEvent::trigger('contacts/email/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $e = ORM::for_table('sys_email_logs')
                ->where('userid', $cid)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('d', $d);
            $ui->assign('e', $e);

            view('ajax-contact-emails');
        }

        break;

    case 'edit':
        AppEvent::trigger('contacts/edit/');

        if (!has_access($user->roleid, 'customers', 'edit')) {
            permissionDenied();
        }

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $fs = ORM::for_table('crm_customfields')
                ->where('ctype', 'crm')
                ->order_by_asc('id')
                ->find_many();
            $ui->assign('fs', $fs);
            $ui->assign('countries', Countries::all($d['country']));
            $ui->assign('d', $d);
            $tags = Tags::get_all('Contacts');
            $ui->assign('tags', $tags);
            $dtags = explode(',', ($d['tags'] ?? ''));
            $ui->assign('dtags', $dtags);

            // find all groups

            $gs = ORM::for_table('crm_groups')
                ->order_by_asc('sorder')
                ->find_array();

            $ui->assign('gs', $gs);

            $companies = ORM::for_table('sys_companies')
                ->select('id')
                ->select('company_name')
                ->order_by_desc('id')
                ->find_array();

            $ui->assign('companies', $companies);

            $g_selected_id = route(4);

            if ($g_selected_id !== '' && $g_selected_id !== '0') {
                $ui->assign('g_selected_id', $g_selected_id);
            } else {
                $ui->assign('g_selected_id', '');
            }

            $c_selected_id = route(5);

            if ($c_selected_id !== '' && $c_selected_id !== '0') {
                $ui->assign('c_selected_id', $c_selected_id);
            } else {
                $ui->assign('c_selected_id', '');
            }

            $currencies = Currency::all();

            $ui->assign('currencies', $currencies);
            $owners = getOwners($user);

            view('ajax-contact-edit', [
                'owners' => $owners,
            ]);
        }

        break;

    case 'add-activity-post':
        AppEvent::trigger('contacts/add-activity-post/');

        $cid = _post('cid');
        $msg = $data['msg'];
        $icon = $data['icon'];
        $icon = trim($icon);

        $icon = str_replace('<a href="#"><i class="', '', $icon);
        $icon = str_replace('"></i></a>', '', $icon);
        if ($icon == '') {
            $icon = 'fal fa-check';
        }

        if ($msg == '') {
            echo $_L['description_error'];
        } else {
            $d = ORM::for_table('sys_activity')->create();
            $d->cid = $cid;
            $d->msg = $msg;
            $d->icon = $icon;
            $d->stime = time();
            $d->sdate = date('Y-m-d');
            $d->o = $user->id;
            $d->oname = $user['fullname'];
            $d->save();

            echo $cid;
        }

        break;

    case 'activity-delete':
        AppEvent::trigger('contacts/activity-delete/');

        $id = $routes['3'];
        $d = ORM::for_table('sys_activity')->find($id);
        $d->delete();
        $cid = $routes['2'];
        r2(
            U . 'contacts/view/' . $cid . '/activity',
            's',
            $_L['Deleted Successfully']
        );
        break;

    case 'view':
        AppEvent::trigger('contacts/view/');

        $id = $routes['2'];

        $contact = $d = Contact::find($id);

        // check self data only

        $is_supplier = false;

        $po_count = 0;

        if ($d) {
            if (!has_access($user->roleid, 'customers', 'all_data') && $d->o != $user->id) {
                permissionDenied();
            }

            if ($d->type == 'Supplier') {
                $is_supplier = true;

                $ui->assign('selected_navigation', 'suppliers');

                $po_count = ORM::for_table('sys_purchases')
                    ->where('userid', $id)
                    ->count();

                if ($po_count == '') {
                    $po_count = 0;
                }
            }

            $extra_tab = '';
            $extra_jq = '';

            $tab = route(3);

            if ($tab === '' || $tab === '0') {
                $tab = 'summary';
            }

            $ui->assign('tab', $tab);

            AppEvent::trigger('contacts/view/_on_start');

            $ui->assign('extra_tab', $extra_tab);

            // invoice count

            $inv_count = ORM::for_table('sys_invoices')
                ->where('userid', $id)
                ->count();

            if ($inv_count == '') {
                $inv_count = 0;
            }

            $ui->assign('inv_count', $inv_count);

            $quote_count = ORM::for_table('sys_quotes')
                ->where('userid', $id)
                ->count();

            if ($quote_count == '') {
                $quote_count = 0;
            }

            $ui->assign('quote_count', $quote_count);

            $ui->assign('d', $d);

            AppEvent::trigger('contacts/view/_on_display');

            view('account-profile-alt', [
                'is_supplier' => $is_supplier,
                'po_count' => $po_count,
                'body_extra_class' => 'layout-composed',
                'contact' => $contact,
            ]);
        } else {
            r2(U . 'customers/list/', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'add-post':
        $account = _post('account');

        $type_customer = _post('customer');
        $type_supplier = _post('supplier');

        $type = $type_customer . ',' . $type_supplier;
        $type = trim($type, ',');

        if ($type == '') {
            $type = 'Customer';
        }

        $company_id = _post('cid');

        $company = '';
        $cid = 0;

        $email = _post('email');
        $username = _post('username');
        $phone = _post('phone');
        $currency = _post('currency');

        $address = _post('address');
        $city = _post('city');
        $state = _post('state');
        $zip = _post('zip');
        $country = _post('country');

        $code = _post('code');

        $secondary_email = _post('secondary_email');

        if ($company_id != '') {
            if ($company_id != '0') {
                $company_db = db_find_one('sys_companies', $company_id);

                if ($company_db) {
                    $company = $company_db->company_name;
                    $cid = $company_id;
                }
            }
        } elseif (_post('company') != '') {
            // create compnay
            $company = _post('company');
            $c = new Company();

            $c->company_name = $company;
            $c->email = $email;
            $c->phone = $phone;

            $c->address1 = $address;
            $c->city = $city;
            $c->state = $state;
            $c->zip = $zip;
            $c->country = $country;

            $c->save();

            $cid = $c->id;
        } else {
        }

        if ($currency == '') {
            $currency = '0';
        }

        $tags = isset($data['tags']) && $data['tags'] != '' ? $data['tags'] : '';

        $msg = '';

        //check if tag is already exisit

        if ($account == '') {
            $msg .= $_L['Account Name is required'] . ' <br>';
        }

        if ($email != '') {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg .= $_L['Invalid Email'] . ' <br>';
            }
            $f = ORM::for_table('crm_accounts')
                ->where('email', $email)
                ->first();

            if ($f) {
                $msg .= $_L['Email already exist'] . ' <br>';
            }
        }

        if ($secondary_email != '') {
            if (!filter_var($secondary_email, FILTER_VALIDATE_EMAIL)) {
                $msg .= $_L['Invalid Email'] . ' <br>';
            }
        } else {
            $secondary_email = '';
        }

        if ($phone != '') {
            $f = ORM::for_table('crm_accounts')
                ->where('phone', $phone)
                ->first();

            if ($f) {
                $msg .= $_L['Phone number already exist'] . ' <br>';
            }
        }

        $gid = (int) _post('group');

        $gname = '';

        if($gid)
        {
            $group = ContactGroup::find($gid);
            if($group)
            {
                $gname = $group->gname;
            }
            else{
                $gid = 0;
            }
        }

        $password = _post('password');
        $cpassword = _post('cpassword');

        $u_password = '';

        if ($password != '') {
            if ($password !== $cpassword) {
                $msg .= 'Passwords does not match<br>';
            }

            $u_password = $password;
            $password = Password::_crypt($password);
        }

        if ($msg == '') {
            Tags::save($tags, 'Contacts');

            $data = [];

            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');

            $owner_id = _post('owner_id');

            $d = ORM::for_table('crm_accounts')->create();

            $d->account = $account;
            $d->email = $email;
            $d->phone = $phone;
            $d->address = $address;
            $d->city = $city;
            $d->zip = $zip;
            $d->state = $state;
            $d->country = $country;
            $d->tags = Arr::arr_to_str($tags);

            $d->fname = '';
            $d->lname = '';
            $d->company = $company;
            $d->jobtitle = '';
            $d->cid = $cid;
            $d->o = $owner_id;
            $d->balance = '0.00';
            $d->status = 'Active';
            $d->notes = '';
            $d->password = $password;
            $d->token = '';
            $d->ts = '';
            $d->img = '';
            $d->web = '';
            $d->facebook = '';
            $d->google = '';
            $d->linkedin = '';

            $d->gname = $gname;
            $d->gid = $gid;


            $d->currency = $currency;


            $d->created_at = $data['created_at'];

            $d->type = $type;


            $d->business_number = _post('business_number');

            $d->fax = _post('fax');

            $drive = time() . Misc::random_string(12);

            $d->drive = $drive;

            $d->code = $code;

            $d->secondary_email = $secondary_email;

            $d->o = $user->id;

            $d->save();

            $cid = $d->id();

            if ($type == 'Supplier') {
                update_option(
                    'supplier_code_current_number',
                    current_number_would_be($code)
                );
            } else {
                update_option(
                    'customer_code_current_number',
                    current_number_would_be($code)
                );
            }

            _log(
                $_L['New Contact Added'] .
                    ' ' .
                    $account .
                    ' [CID: ' .
                    $cid .
                    ']',
                'Admin',
                $user->id
            );

            $fs = ORM::for_table('crm_customfields')
                ->where('ctype', 'crm')
                ->order_by_asc('id')
                ->find_many();
            foreach ($fs as $f) {
                $fvalue = _post('cf' . $f['id']);
                $fc = ORM::for_table('crm_customfieldsvalues')->create();
                $fc->fieldid = $f['id'];
                $fc->relid = $cid;
                $fc->fvalue = $fvalue;
                $fc->save();
            }

            AppEvent::trigger('contacts/add-post/_on_finished');

            $send_client_signup_email = _post('send_client_signup_email');

            if (
                $email !== '' &&
                $send_client_signup_email === 'on' &&
                $u_password !== ''
            ) {
                Email::send_client_welcome_email(
                    [
                        'account' => $account,
                        'email' => $email,
                        'password' => $u_password,
                    ],
                    true
                );
            }

            $app->emit('customer.added', [$d]);

            echo $cid;

        } else {
            echo $msg;
        }
        break;

    case 'list':
        AppEvent::trigger('contacts/list/');

        $show_company_column = false;
        $show_group_column = false;

        $group_id = (int) route(3);

        $has_delete_permission = true;
        $has_edit_permission = true;

        if (!has_access($user->roleid, 'customers', 'delete')) {
            $has_delete_permission = false;
        }

        if (!has_access($user->roleid, 'customers', 'edit')) {
            $has_edit_permission = false;
        }

        if (
            isset($config['contact_list_show_company_column']) &&
            $config['contact_list_show_company_column'] == 1
        ) {
            $show_company_column = true;
        }

        if (
            isset($config['contact_list_show_group_column']) &&
            $config['contact_list_show_group_column'] == 1
        ) {
            $show_group_column = true;
        }

        $contacts = Contact::orderBy('id', 'desc');

        $type = route(2,'customer');

        if ($type == 'supplier') {
            $ui->assign('selected_navigation', 'suppliers');
            $contacts = $contacts->where(function ($query) {
                $query
                    ->where('type', 'Supplier')
                    ->orWhere('type', 'Customer,Supplier');
            });
        } else {
            $contacts = $contacts->where(function ($query) {
                $query
                    ->where('type', 'Customer')
                    ->orWhere('type', 'Customer,Supplier');
            });
        }

        if (!has_access($user->roleid, 'customers', 'all_data')) {
            $contacts = $contacts->where('o', $user->id);
        }

        if ($group_id) {
            $contacts = $contacts->where('gid', $group_id);
        }

        $ui->assign(
            'companies',
            db_find_array('sys_companies', ['id', 'company_name'])
        );

        $name = _post('name');

        $contacts = $contacts->get();

        $groups = ContactGroup::get()->keyBy('id')->all();


        view('contacts_list', [
            'type' => $type,
            'show_company_column' => $show_company_column,
            'show_group_column' => $show_group_column,
            'name' => $name,
            'contacts' => $contacts,
            'has_edit_permission' => $has_edit_permission,
            'has_delete_permission' => $has_delete_permission,
            'groups' => $groups,
            'group_id' => $group_id,
        ]);

        break;

    case 'edit-post':
        AppEvent::trigger('contacts/edit-post/');

        if (!has_access($user->roleid, 'customers', 'edit')) {
            permissionDenied();
        }

        $id = _post('fcid');
        $d = ORM::for_table('crm_accounts')->find($id);
        if ($d) {
            $old_account = $d->account;

            $account = _post('account');
            // $company = _post('company');

            $company_id = _post('company_id');

            $company = '';
            $cid = 0;

            if ($company_id != '' || $company_id != '0') {
                $company_db = db_find_one('sys_companies', $company_id);

                if ($company_db) {
                    $company = $company_db->company_name;
                    $cid = $company_id;
                }
            }

            $email = _post('edit_email');

            $tags = isset($data['tags']) ? $data['tags'] : '';

            $currency = _post('currency', '0');

            if ($currency == '') {
                $currency = '0';
            }

            $phone = _post('phone');
            $address = _post('address');
            $city = _post('city');
            $state = _post('state');
            $zip = _post('zip');
            $country = _post('country');

            $username = _post('username');

            $type_customer = _post('customer');
            $type_supplier = _post('supplier');

            $type = $type_customer . ',' . $type_supplier;
            $type = trim($type, ',');

            if ($type == '') {
                $type = 'Customer';
            }

            $msg = '';

            if ($account == '') {
                $msg .= $_L['Account Name is required'] . ' <br>';
            }
            //            if($tags != ''){
            //                $pieces = explode(',', $tags);
            //                foreach($pieces as $element)
            //                {
            //                    $tg = ORM::for_table('sys_tags')->where('text',$element)->where('type','Contacts')->first();
            //                    if(!$tg){
            //                        $tc = ORM::for_table('sys_tags')->create();
            //                        $tc->text = $element;
            //                        $tc->type = 'Contacts';
            //                        $tc->save();
            //                    }
            //                }
            //            }

            // Sadia ================= From V 2.4

            Tags::save($tags, 'Contacts');

            //check email already exist

            //            if($address == ''){
            //                $msg .= 'Address is required <br>';
            //            }
            //            if($city == ''){
            //                $msg .= 'City is required <br>';
            //            }
            //            if($state == ''){
            //                $msg .= 'State is required <br>';
            //            }
            //            if($zip == ''){
            //                $msg .= 'ZIP is required <br>';
            //            }
            //            if($country == ''){
            //                $msg .= 'Country is required <br>';
            //            }
            if ($email != '') {
                if ($email != $d['email']) {
                    $f = ORM::for_table('crm_accounts')
                        ->where('email', $email)
                        ->first();

                    if ($f) {
                        $msg .= $_L['Email already exist'] . ' <br>';
                    }
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $msg .= $_L['Invalid Email'] . ' <br>';
                }
            }
            //            if($phone != ''){
            //                if(!is_numeric($phone)){
            //                    $msg .= $_L['Invalid Phone'].' <br>';
            //                }
            //            }

            $gid = _post('group');

            $secondary_email = _post('secondary_email');

            if (!filter_var($secondary_email, FILTER_VALIDATE_EMAIL)) {
                $secondary_email = '';
            }
            $gname = '';

            if ($gid != '') {
                $g = db_find_one('crm_groups', $gid);
                if ($g) {
                    $gname = $g['gname'];
                }
            } else {
                $gid = 0;
                $gname = '';
            }

            $owner_id = _post('owner_id', 0);

            $password = _post('password');

            if ($msg == '') {
                $d = ORM::for_table('crm_accounts')->find($id);
                $d->account = $account;
                $d->company = $company;
                $d->cid = $company_id;
                $d->o = $owner_id;

                $d->email = $email;
                $d->tags = Arr::arr_to_str($tags);
                $d->phone = $phone;
                $d->address = $address;
                $d->city = $city;
                $d->zip = $zip;
                $d->state = $state;
                $d->country = $country;

                $d->type = $type;

                $d->username = $username;

                // v 4.2

                $d->gname = $gname;
                $d->gid = $gid;

                // build 4550

                $d->currency = $currency;

                //

                $d->fax = _post('fax');

                $d->code = _post('code');

                $d->secondary_email = $secondary_email;

                if ($config['show_business_number']) {
                    $d->business_number = _post('business_number');
                }

                if ($password != '') {
                    $d->password = Password::_crypt($password);
                }

                $d->save();

                //delete existing records
                $exf = ORM::for_table('crm_customfieldsvalues')
                    ->where('relid', $id)
                    ->delete_many();
                $fs = ORM::for_table('crm_customfields')
                    ->order_by_asc('id')
                    ->find_many();
                foreach ($fs as $f) {
                    $fvalue = _post('cf' . $f['id']);
                    $fc = ORM::for_table('crm_customfieldsvalues')->create();
                    $fc->fieldid = $f['id'];
                    $fc->relid = $id;
                    $fc->fvalue = $fvalue;
                    $fc->save();
                }

                // check account name changed

                if ($account != $old_account) {
                    // change invoice account

                    //                    $inv = ORM::for_table('sys_invoices')->where('account',$old_account);
                    //                    $inv->account = $account;
                    //                    $inv->save();

                    $sql = "update sys_invoices set account='$account' where account='$old_account'";

                    ORM::execute($sql);
                }

                _msglog('s', $_L['account_updated_successfully']);

                echo $id;
            } else {
                echo $msg;
            }
        } else {
            r2(U . 'contacts/list', 'e', $_L['Account_Not_Found']);
        }

        break;
    case 'delete':
        if (!has_access($user->roleid, 'customers', 'delete')) {
            permissionDenied();
        }

        AppEvent::trigger('contacts/delete/');

        $id = $routes['2'];
        if (APP_STAGE == 'Demo') {
            r2(
                U . 'contacts/list/',
                'e',
                'Sorry! Deleting Account is disabled in the demo mode.'
            );
        }
        $d = Contact::find($id);
        if ($d) {
            $d->delete();
            r2(U . 'contacts/list/', 's', $_L['account_delete_successful']);
        }

        break;

    case 'more':
        AppEvent::trigger('contacts/more/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $ui->assign('countries', Countries::all($d['country']));
            $ui->assign('d', $d);
            view('ajax-contact-more');
        }

        break;

    case 'edit-more':
        AppEvent::trigger('contacts/edit-more/');

        $id = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($id);
        if ($d) {
            $img = _post('picture');
            $facebook = _post('facebook');
            $google = _post('google');
            $linkedin = _post('linkedin');

            $msg = '';

            $img = str_replace(APP_URL . '/', '', $img);

            //check email already exist

            if ($msg === '') {
                $d = ORM::for_table('crm_accounts')->find($id);

                $d->img = $img;
                $d->facebook = $facebook;
                $d->google = $google;
                $d->linkedin = $linkedin;
                $d->save();
                echo $d->id();
            } else {
                echo $msg;
            }
        } else {
            r2(U . 'contacts/list/', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'edit-notes':
        AppEvent::trigger('contacts/edit-notes/');

        $id = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($id);
        if ($d) {
            $notes = _post('notes');

            $msg = '';

            //check email already exist

            if ($msg === '') {
                $d = ORM::for_table('crm_accounts')->find($id);

                $d->notes = $notes;
                $d->save();
                echo $d->id();
            } else {
                echo $msg;
            }
        } else {
            r2(U . 'contacts/list/', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'set-boolean':
        $key = _post('key');
        $contact_id = _post('contact_id');
        $value = _post('value');

        $contact = Contact::find($contact_id);

        if ($contact && $key === 'is_primary_contact') {
            $contact->is_primary_contact = $value;
        }

        $contact->save();

        break;

    case 'render-address':
        AppEvent::trigger('contacts/render-address/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        $address = $d['address'];
        $city = $d['city'];
        $state = $d['state'];
        $zip = $d['zip'];
        $country = $d['country'];
        echo "$address
$city
$state $zip
$country
";
        break;

    case 'json-single-contact':
        $cid = _post('cid');

        $contact = Contact::find($cid);

        $address_full = '';
        $business_number = '';

        if ($contact) {
            $address_full = getContactFormattedAddress(
                $config,
                $contact,
                false
            );

            $business_number = $contact->business_number;
        }

        jsonResponse([
            'address_full' => $address_full,
            'business_number' => $business_number,
        ]);

        break;

    case 'send_email':
        AppEvent::trigger('contacts/send_email/');

        $msg = '';
        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        $email = $d['email'];
        $toname = $d['account'];
        $subject = _post('subject');
        if ($subject == '') {
            $msg .= $_L['Subject is Empty'] . ' <br>';
        }
        $message = $data['message'];
        if ($message == '') {
            $msg .= $_L['Message is Empty'] . ' <br>';
        }
        if ($msg === '') {
            //send email

            Email::sendEmail(
                $config,
                $_L,
                $toname,
                $email,
                $subject,
                $message,
                $cid
            );

            echo $cid;
        } else {
            echo $msg;
        }
        break;

    case 'modal_add':
        AppEvent::trigger('contacts/modal_add/');

        $ui->assign('countries', Countries::all($config['country'])); // may add this $config['country_code']

        view('modal_add_contact');

        break;

    case 'set_view_mode':
        AppEvent::trigger('contacts/set_view_mode/');

        //        if(isset($routes['2']) AND ($routes['2'] != 'tbl')){
        //            $mode = 'card';
        //        }
        //        else{
        //            $mode = 'tbl';
        //        }

        $mode = isset($routes[2]) && $routes[2] != '' ? $routes['2'] : 'tbl';

        $available_mode = ["tbl", "card", "search"];
        if (in_array($mode, $available_mode)) {
            update_option('contact_set_view_mode', $mode);
        }

        r2(U . 'contacts/list/');

        break;

    case 'export_csv':
        $fileName = 'contacts_' . time() . '.csv';

        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Expires: 0");
        header("Pragma: public");

        $fh = @fopen('php://output', 'w');

        $headerDisplayed = false;

        // $results = ORM::for_table('crm_Accounts')->find_array();
        $results = db_find_array('crm_accounts', [
            'id',
            'account',
            'company',
            'phone',
            'email',
            'address',
            'city',
            'state',
            'zip',
            'country',
            'balance',
            'tags',
        ]);

        foreach ($results as $data) {
            // Add a header row if it hasn't been added yet
            if (!$headerDisplayed) {
                // Use the keys from $data as the titles
                fputcsv($fh, array_keys($data));
                $headerDisplayed = true;
            }

            // Put the data into the stream
            fputcsv($fh, $data);
        }
        // Close the file
        fclose($fh);

        break;

    case 'dev_demo_data':
        // this only work with dev mode
        is_dev();

        break;

    case 'import_csv':
        view('contacts_import');

        break;

    case 'csv_upload':
        $uploader = new Uploader();
        $uploader->setDir('storage/temp/');
        // $uploader->sameName(true);
        $uploader->setExtensions(['csv']); //allowed extensions list//
        if ($uploader->uploadFile('file')) {
            //txtFile is the filebrowse element name //
            $uploaded = $uploader->getUploadName(); //get uploaded file name, renames on upload//

            $_SESSION['uploaded'] = $uploaded;
        } else {
            //upload failed
            _msglog('e', $uploader->getMessage()); //get upload error message
        }

        break;

    case 'csv_uploaded':
        if (isset($_SESSION['uploaded'])) {
            $uploaded = $_SESSION['uploaded'];

            // _msglog('s',$uploaded);

            //            $csvData = file_get_contents('storage/temp/'.$uploaded);
            //            $lines = explode(PHP_EOL, $csvData);
            //            $contacts = array();
            //            foreach ($lines as $line) {
            //                $contacts[] = str_getcsv($line);
            //            }

            $csv = new parseCSV();
            $csv->auto('storage/temp/' . $uploaded);

            $contacts = $csv->data;

            $cn = 0;

            foreach ($contacts as $contact) {
                $data = [];
                $data['account'] = $contact['Full Name'];
                $data['email'] = $contact['Email'];
                $data['phone'] = $contact['Phone'];
                $data['address'] = $contact['Address'];
                $data['city'] = $contact['City'];
                $data['zip'] = $contact['Zip'];
                $data['state'] = $contact['State'];
                $data['country'] = $contact['Country'];
                $data['company'] = $contact['Company'];

                $save = Contacts::add($data);

                if (is_numeric($save)) {
                    $cn++;
                }
            }

            _msglog('s', $cn . ' Contacts Imported');

            //            ob_start();
            //            var_dump($contacts);
            //            $result = ob_get_clean();
            //
            //            _msglog('s',$result);
        } else {
            _msglog('e', 'An Error Occurred while uploading the files');
        }

        break;

    case 'groups':
        // find all groups

        $gs = ORM::for_table('crm_groups')
            ->order_by_asc('sorder')
            ->find_array();

        $ui->assign('gs', $gs);


        view('crm_groups');

        break;

    case 'add_group':
        $group_name = _post('group_name');

        if ($group_name != '') {
            //check same group already exist

            $c = ORM::for_table('crm_groups')
                ->where('gname', $group_name)
                ->first();

            if ($c) {
                ib_die('A Group with same name already exist');
            }

            $d = ORM::for_table('crm_groups')->create();
            $d->gname = $group_name;
            $d->color = '';
            $d->discount = '';
            $d->parent = '';
            $d->pid = 0;
            $d->exempt = '';
            $d->description = '';
            $d->separateinvoices = '';
            $d->sorder = 0;

            $d->save();

            echo $d->id();
        } else {
            echo 'Group Name is required';
        }

        break;

    case 'find_by_group':
        $gid = route(2);

        if ($gid !== '' && $gid !== '0') {
            $g = ORM::for_table('crm_groups')->find($gid);

            if ($g) {
                $d = ORM::for_table('crm_accounts')
                    ->where('gid', $gid)
                    ->order_by_desc('id')
                    ->find_array();

                $ids = [];

                foreach ($d as $id_single) {
                    $ids[] = $id_single['id'];
                }

                $ui->assign('d', $d);
                $ui->assign('gid', $gid);

                view('contacts_find_by_group');
            }
        }

        break;

    case 'group_edit':
        $id = _post('id');
        $id = str_replace('e', '', $id);
        $gname = _post('gname');

        $d = ORM::for_table('crm_groups')->find($id);

        if ($d) {
            // update all gname in contacts

            $o_gname = $d->gname;

            ORM::execute(
                "update crm_accounts set gname='$gname' where gname='$o_gname'"
            );

            $d->gname = $gname;

            $d->save();

            echo $d->id;
        }

        break;

    case 'group_email':
        $gid = route(2);

        if ($gid !== '' && $gid !== '0') {
            // find group

            $ds = ORM::for_table('crm_accounts')
                ->where('gid', $gid)
                ->where_not_equal('email', '')
                ->select('account')
                ->select('email')
                ->order_by_desc('id')
                ->find_array();

            $ui->assign('ds', $ds);

            $ui->assign(
                'xheader',
                Asset::css([
                    's2/css/select2.min',
                    'sn/summernote',
                    'sn/summernote-bs3',
                    'sn/summernote-application',
                ])
            );

            view('contacts_group_email');
        }

        break;

    case 'group_email_post':


        $emails = $data['emails'];
        $subject = $data['subject'];
        $message = $data['message'];
        $cc = $data['cc'] ?? null;
        $bcc = $data['bcc'] ?? null;

        $email_config = EmailConfig::first();
        $contacts = Contact::all()->keyBy('email')->all();

        if ($email_config) {
            if ($email_config->method == 'smtp') {
                $transport = (new Swift_SmtpTransport(
                    $email_config->host,
                    $email_config->port,
                    $email_config->secure
                ))
                    ->setUsername($email_config->username)
                    ->setPassword($email_config->password)
                    ->setStreamOptions([
                        'ssl' => [
                            'allow_self_signed' => true,
                            'verify_peer' => false,
                        ],
                    ]);
            } else {
                $transport = new Swift_SendmailTransport(
                    '/usr/sbin/sendmail -bs'
                );
            }

            $mailer = new Swift_Mailer($transport);

            $receiver = [];

            $message_object = (new Swift_Message($subject))
                ->setFrom([$config['sysEmail'] => $config['CompanyName']])
                ->setBody($message, 'text/html');

            if (!empty($cc)) {
                $message_object->setCc([$cc]);
            }

            if (!empty($bcc)) {
                $message_object->setBcc([$bcc]);
            }

            foreach ($emails as $email)
            {
                $toname = $email;

                if (isset($contacts[$email])) {
                    $toname = $contacts[$email]->account;
                }

                $send = $message_object->setTo([$email => $toname]);

                $result = $mailer->send($send);

                Email::_log($user->id, $email, $subject, $message);
            }


        }



        break;

    case 'companies':
        $ui->assign(
            '_title',
            $_L['Companies'] . ' - ' . $config['CompanyName']
        );

        $companies = Company::orderBy('id', 'desc');

        if (!has_access($user->roleid, 'companies', 'all_data')) {
            $companies = $companies->where('aid', $user->id);
        }

        $companies = $companies->get();

        $ui->assign('companies', $companies);

        view('companies');

        break;

    case 'modal_add_company':
        $id = route(2);

        $company = false;

        if ($id != '') {
            $id = str_replace('ae', '', $id);
            $id = str_replace('be', '', $id);
            $id = str_replace('me', '', $id);

            $company = Company::find($id);
        }

        $val = [];

        if ($company) {
            $f_type = 'edit';
            $val['company_name'] = $company->company_name;
            $val['code'] = $company->code;
            $val['url'] = $company->url;
            $val['email'] = $company->email;
            $val['phone'] = $company->phone;
            $val['logo_url'] = $company->logo_url;
            $val['cid'] = $id;
            $val['fax'] = $company->fax;
            $val['business_number'] = $company->business_number;

            $val['address1'] = $company->address1;
            $val['city'] = $company->city;
            $val['zip'] = $company->zip;
            $val['state'] = $company->state;
            $val['country'] = $company->country;

            $countries = Countries::all($company->country);

            //            $val[''] = $company->;
        } else {
            $f_type = 'create';
            $val['company_name'] = '';
            $val['code'] = predict_next_serial($config, 'company');
            $val['url'] = 'http://';
            $val['email'] = '';
            $val['phone'] = '';
            $val['logo_url'] = '';
            $val['cid'] = '';
            $val['fax'] = '';
            $val['business_number'] = '';
            $val['address1'] = '';
            $val['city'] = '';
            $val['zip'] = '';
            $val['state'] = '';
            $val['country'] = '';
            //  $val[''] = '';

            $countries = Countries::all($config['country']);
        }

        $ui->assign('f_type', $f_type);
        $ui->assign('val', $val);

        view('modal_add_company', [
            'countries' => $countries,
        ]);

        break;

    case 'add_company_post':
        $data = ib_posted_data();

        $code = _post('code');

        $data = request()->all();

        $logo_path = $data['logo_url'] ?? '';

        if (
            !empty($data['logo_url']) &&
            strpos($data['logo_url'], 'http') === 0
        ) {
            if (!filter_var($data['logo_url'], FILTER_VALIDATE_URL)) {
                i_close('Invalid logo url');
            }

            if (APP_STAGE === 'Live') {
                try {
                    $parse_url = parse_url($data['logo_url']);
                    $path = $parse_url['path'] ?? '';
                    $ext = (new SplFileInfo($path))->getExtension();
                    $logo_path = md5(time()) . '.' . $ext;
                    $client = new \GuzzleHttp\Client();
                    $client->request('GET', $data['logo_url'], [
                        'sink' => 'storage/companies/' . $logo_path,
                    ]);
                } catch (\Exception $e) {
                    i_close($e->getMessage());
                }
            }
        }

        $creating = false;
        if (isset($data['f_type']) && $data['f_type'] == 'edit') {
            $company = Company::find($data['cid']);

            if (!$company) {
                i_close('Company Not Found');
            }
        } else {
            $company = new Company();

            $creating = true;
        }

        if ($data['company_name'] == '') {
            i_close($_L['Company Name is required']);
        }

        if (
            $data['email'] != '' &&
            !filter_var($data['email'], FILTER_VALIDATE_EMAIL)
        ) {
            i_close($_L['Invalid Email']);
        }

        if ($data['url'] == 'http') {
            $data['url'] = '';
        }

        $company->company_name = $data['company_name'];

        $company->code = $code;

        $company->url = $data['url'];
        $company->email = $data['email'];
        $company->phone = $data['phone'];

        if (isset($data['business_number'])) {
            $company->business_number = $data['business_number'];
        }

        $company->address1 = $data['address1'];
        $company->city = $data['city'];
        $company->state = $data['state'];
        $company->zip = $data['zip'];
        $company->country = $data['country'];

        $company->aid = $user->id;

        $company->logo_url = $logo_path;

        $company->save();

        if ($creating) {
            update_option(
                'company_code_current_number',
                current_number_would_be($code)
            );
        }

        echo $company->id;

        break;

    case 'modal_edit_activity':
        $id = route(2);

        $id = str_replace('activity_', '', $id);

        $d = ORM::for_table('sys_activity')->find($id);

        if ($d) {
            $ui->assign('d', $d);
            view('modal_edit_activity');
        }

        break;

    case 'edit_activity_post':
        $edit_activity_id = _post('edit_activity_id');

        $d = ORM::for_table('sys_activity')->find($edit_activity_id);

        if ($d) {
            $message_text = $data['message_text'];
            $icon = $data['edit_activity_type'];
            $icon = str_replace('<a href="#"><i class="', '', $icon);
            $icon = str_replace('"></i></a>', '', $icon);
            if ($icon == '') {
                $icon = 'fa fa-check';
            }
            $d->icon = $icon;
            $d->msg = $message_text;
            $d->save();
            echo $d->id();
        }

        break;

    case 'orders':
        // Event::trigger('contacts/orders/');

        $cid = _post('cid');
        $d = ORM::for_table('crm_accounts')->find($cid);
        if ($d) {
            $d = ORM::for_table('sys_orders')
                ->where('cid', $cid)
                ->find_array();
            $ui->assign('d', $d);
            view('contacts_orders');
        } else {
        }

        break;

    case 'files':
        AppEvent::trigger('contacts/files/');

        $cid = _post('cid');

        $ui->assign('cid', $cid);

        // find all available files for this client

        $file_ids = ORM::for_table('ib_doc_rel')
            ->where('rtype', 'contact')
            ->where('rid', $cid)
            ->find_array();

        $ids = [];

        foreach ($file_ids as $f) {
            $ids[] = $f['did'];
        }

        $d = empty($ids) ? [] : ORM::for_table('sys_documents')
            ->where_in('id', $ids)
            ->find_many();

        // select all files

        $files = ORM::for_table('sys_documents')->find_array();

        $ui->assign('files', $files);

        $ui->assign('d', $d);

        view('contacts_files');

        break;

    case 'assign_file':
        $cid = _post('cid');

        $did = _post('did');

        // find the customer

        // check if exist

        $check = ORM::for_table('ib_doc_rel')
            ->where('rtype', 'contact')
            ->where('rid', $cid)
            ->where('did', $did)
            ->first();

        if ($check) {
            i_close('This file is already available for this contact.');
        }

        $d = ORM::for_table('ib_doc_rel')->create();
        $d->rtype = 'contact';
        $d->rid = $cid;
        $d->did = $did;
        $d->save();

        echo $cid;

        break;

    case 'remove_file':
        $cid = route(2);
        $did = route(3);

        $d = ORM::for_table('ib_doc_rel')
            ->where('rtype', 'contact')
            ->where('rid', $cid)
            ->where('did', $did)
            ->first();

        if ($d) {
            $d->delete();
        }

        r2(U . 'contacts/view/' . $cid . '/files/', 's', $_L['Data Updated']);

        break;

    case 'gen_auto_login':
        $id = route(2);

        $d = ORM::for_table('crm_accounts')->find($id);

        if ($d) {
            $d->autologin = Misc::random_string(20) . $id . time();
            $d->save();
            r2(
                U . 'contacts/view/' . $id . '/summary/',
                's',
                $_L['Created Successfully']
            );
        } else {
            echo 'Contact Not Found.';
        }

        break;

    case 'revoke_auto_login':
        $id = route(2);

        $d = ORM::for_table('crm_accounts')->find($id);

        if ($d) {
            $d->autologin = '';
            $d->save();

            r2(
                U . 'contacts/view/' . $id . '/summary/',
                's',
                $_L['Data Updated']
            );
        } else {
            echo 'Contact Not Found.';
        }

        break;

    case 'modal_view_company':
        $id = route(2);
        $id = str_replace('ae', '', $id);

        $extra_links = '';

        $company = ORM::for_table('sys_companies')->find($id);

        if ($company) {
            $ui->assign('company', $company);

            AppEvent::trigger('contacts/modal_view_company/');

            $ui->assign('extra_links', $extra_links);

            view('modal_view_company');
        } else {
            echo 'Company Not Found';
        }

        break;

    case 'company_memo':
        $cid = _post('cid');

        $d = ORM::for_table('sys_companies')->find($cid);

        if ($d) {
            echo '<textarea class="form-control" id="v_memo" name="v_memo" rows="6">' .
                $d->notes .
                '</textarea> <button type="button" id="memo_update" class="btn btn-primary btn-block mt-sm act_memo_update mt-3">' .
                $_L['Save'] .
                '</button>';
        }

        break;

    case 'company_update_notes':
        $id = _post('id');

        $d = ORM::for_table('sys_companies')->find($id);

        if ($d) {
            $memo = $data['memo'];
            $d->notes = $memo;
            $d->save();
        }

        echo $_L['Data Updated'];

        break;

    case 'company_customers':
        $cid = _post('cid');

        $customers = Contact::where('cid', $cid)
            ->get()
            ->toArray();

        $tr_customers = '';

        foreach ($customers as $customer) {
            $tr_customers .=
                '<tr>
         <th scope="row"><a href="' .
                U .
                'contacts/view/' .
                $customer['id'] .
                '">' .
                $customer['id'] .
                '</a></th>
         <td><a href="' .
                U .
                'contacts/view/' .
                $customer['id'] .
                '">' .
                $customer['account'] .
                '</a></td>
         <td>' .
                $customer['email'] .
                '</td>
         <td>' .
                $customer['phone'] .
                '</td>
      </tr>';
        }

        if ($tr_customers == '') {
            $tr_customers =
                '<tr><td colspan="4">' .
                $_L['No Data Available'] .
                '</td></tr>';
        }

        echo '
<h4>' .
            $_L['Customers'] .
            '</h4>
<hr>
<a class="btn btn-primary" href="' .
            U .
            'contacts/add/0/' .
            $cid .
            '">' .
            $_L['Add Customer'] .
            '</a>
<hr>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>#</th>
         <th>' .
            $_L['Name'] .
            '</th>
         <th>' .
            $_L['Email'] .
            '</th>
         <th>' .
            $_L['Phone'] .
            '</th>
      </tr>
   </thead>
   <tbody>
      ' .
            $tr_customers .
            '
   </tbody>
</table>';

        break;

    case 'company_summary':
        $cid = _post('cid');

        $cid = str_replace('ae', '', $cid);

        $d = ORM::for_table('sys_companies')->find($cid);

        if ($d) {
            $url = $d->url;

            if ($url == 'http://') {
                $url = '';
            }

            echo '<p>

                            <strong>' .
                $_L['Company Name'] .
                ': </strong>  ' .
                $d->company_name .
                '<br>
                            <strong>' .
                $_L['URL'] .
                ': </strong>  ' .
                $url .
                '<br>
                            <strong>' .
                $_L['Email'] .
                ': </strong>  ' .
                ($d->email != ''
                    ? '<a href="#" class="send_email">' . $d->email . '</a>'
                    : '') .
                '<br>
                            <strong>' .
                $_L['Phone'] .
                ': </strong>  ' .
                $d->phone .
                '<br>
                         
                            
                            



                        </p>

                        

                        <a href="#" class="btn btn-primary cedit" id="me' .
                $d->id .
                '">' .
                $_L['Edit'] .
                '</a>
                        
                        
                        <hr>
                        
                        <a href="#" class="btn btn-primary li_memo">' .
                $_L['Memo'] .
                '</a>
                        
                        <hr>
                        
                        ' .
                $d->notes .
                '
                        
                        ';
        }

        break;

    case 'company_invoices':
        $cid = _post('cid');
        $d = ORM::for_table('sys_companies')->find($cid);

        if ($d) {
            // find all customers with that company_id

            $customers = Contacts::findByCompany($cid);

            //  var_dump($invoices);

            if ($customers) {
                $invoices = ORM::for_table('sys_invoices')
                    ->where_in('userid', $customers)
                    ->find_array();

                $dt = '';

                foreach ($invoices as $invoice) {
                    $dt .=
                        '<tr>
            <td><a href="' .
                        U .
                        'invoices/view/' .
                        $invoice['id'] .
                        '/">' .
                        $invoice['invoicenum'] .
                        ' ' .
                        ($invoice['cn'] != ''
                            ? $invoice['cn']
                            : $invoice['id']) .
                        '</a> </td>
            <td><a href="' .
                        U .
                        'contacts/view/' .
                        $invoice['userid'] .
                        '/">' .
                        $invoice['account'] .
                        '</a></td>
            <td class="amount" data-a-dec="." data-a-sep="," data-a-pad="true" data-p-sign="p" data-a-sign="$ " data-d-group="3">' .
                        formatCurrency(
                            $invoice['total'],
                            $invoice['currency_iso_code'] ?? false
                        ) .
                        '</td>
            <td>' .
                        $invoice['date'] .
                        '</td>
            <td>' .
                        $invoice['duedate'] .
                        '</td>
            <td>' .
                        $invoice['status'] .
                        '</td>
            <td>
                <a href="' .
                        U .
                        'invoices/view/' .
                        $invoice['id'] .
                        '/" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> </a>
                <a href="' .
                        U .
                        'invoices/edit/' .
                        $invoice['id'] .
                        '/" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
            </td>
        </tr>';
                }

                $tds = $dt == '' ? '<tr><td colspan="7">' .
                $_L['No Data Available'] .
                '</td> </tr>' : $dt;
            } else {
                $tds =
                    '<tr><td colspan="7">' .
                    $_L['No Data Available'] .
                    '</td> </tr>';
            }

            echo '<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>
        <th>#</th>
        <th>' .
                $_L['Customer'] .
                '</th>
        <th>' .
                $_L['Amount'] .
                '</th>
        <th>' .
                $_L['Invoice Date'] .
                '</th>
        <th>' .
                $_L['Due Date'] .
                '</th>
        <th>' .
                $_L['Status'] .
                '</th>
        <th class="text-right">' .
                $_L['Manage'] .
                '</th>
    </tr>
    </thead>
    <tbody>

            
           ' .
                $tds .
                ' 
    

    </tbody>
</table>';
        }

        break;

    case 'company_quotes':
        $cid = _post('cid');
        $d = ORM::for_table('sys_companies')->find($cid);

        if ($d) {
            // find all customers with that company_id

            $customers = Contacts::findByCompany($cid);

            //  var_dump($invoices);

            if ($customers) {
                $quotes = ORM::for_table('sys_quotes')
                    ->where_in('userid', $customers)
                    ->find_array();

                $dt = '';

                foreach ($quotes as $quote) {
                    $dt .=
                        '<tr>
            <td>' .
                        $quote['id'] .
                        ' </td>
            <td><a href="' .
                        U .
                        'contacts/view/' .
                        $quote['userid'] .
                        '/">' .
                        $quote['account'] .
                        '</a></td>
            <td><a href="' .
                        U .
                        'quotes/view/' .
                        $quote['id'] .
                        '/">' .
                        $quote['subject'] .
                        '</a></td>
            <td class="amount" data-a-dec="." data-a-sep="," data-a-pad="true" data-p-sign="p" data-a-sign="$ " data-d-group="3">' .
                        formatCurrency(
                            $quote['total'],
                            $quote['currency_iso_code'] ?? false
                        ) .
                        '</td>
            <td>' .
                        $quote['datecreated'] .
                        '</td>
            <td>' .
                        $quote['validuntil'] .
                        '</td>
            <td>' .
                        $quote['stage'] .
                        '</td>
            <td>
                <a href="' .
                        U .
                        'quotes/view/' .
                        $quote['id'] .
                        '/" class="btn btn-primary btn-xs"><i class="fa fa-check"></i></a>
                <a href="' .
                        U .
                        'quotes/edit/' .
                        $quote['id'] .
                        '/" class="btn btn-info btn-xs"><i class="fa fa-repeat"></i></a>
            </td>
        </tr>';
                }

                $tds = $dt == '' ? '<tr><td colspan="8">' .
                $_L['No Data Available'] .
                '</td> </tr>' : $dt;
            } else {
                $tds =
                    '<tr><td colspan="8">' .
                    $_L['No Data Available'] .
                    '</td> </tr>';
            }

            echo '<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>
        <th>#</th>
        <th>' .
                $_L['Customer'] .
                '</th>
        <th>' .
                $_L['Subject'] .
                '</th>
        <th>' .
                $_L['Amount'] .
                '</th>
        <th>' .
                $_L['Date Created'] .
                '</th>
        <th>' .
                $_L['Expiry Date'] .
                '</th>
        <th>' .
                $_L['Stage'] .
                '</th>
        <th class="text-right">' .
                $_L['Manage'] .
                '</th>
    </tr>
    </thead>
    <tbody>

            
           ' .
                $tds .
                ' 
    

    </tbody>
</table>';
        }

        break;

    case 'company_orders':
        $cid = _post('cid');
        $d = ORM::for_table('sys_companies')->find($cid);

        if ($d) {
            // find all customers with that company_id

            $customers = Contacts::findByCompany($cid);

            //  var_dump($invoices);

            if ($customers) {
                $orders = ORM::for_table('sys_orders')
                    ->where_in('cid', $customers)
                    ->find_array();

                $dt = '';

                foreach ($orders as $order) {
                    $dt .=
                        '<tr>
           
            <td><a href="' .
                        U .
                        'orders/view/' .
                        $order['id'] .
                        '">' .
                        $order['ordernum'] .
                        '</a> </td>
            <td>' .
                        date($config['df'], strtotime($order['date_added'])) .
                        '</td>
            <td><a href="' .
                        U .
                        'contacts/view/' .
                        $order['cid'] .
                        '">' .
                        $order['cname'] .
                        '</a> </td>
            <td>' .
                        $order['amount'] .
                        '</td>
            <td>' .
                        $order['status'] .
                        '</td>
            
            
        </tr>';
                }

                $tds = $dt == '' ? '<tr><td colspan="5">' .
                $_L['No Data Available'] .
                '</td> </tr>' : $dt;
            } else {
                $tds =
                    '<tr><td colspan="6">' .
                    $_L['No Data Available'] .
                    '</td> </tr>';
            }

            echo '<table class="table table-bordered table-responsive table-hover sys_table" style="width: 100%;">
    <thead>
    <tr>
        
                        <th>' .
                $_L['Order'] .
                ' #</th>
                        <th>' .
                $_L['Date'] .
                '</th>
                        <th>' .
                $_L['Customer'] .
                '</th>
                        <th>' .
                $_L['Total'] .
                '</th>
                        <th>' .
                $_L['Status'] .
                '</th>
                        
    </tr>
    </thead>
    <tbody>

            
           ' .
                $tds .
                ' 
    

    </tbody>
</table>';
        }

        break;

    case 'company_files':
        break;

    case 'company_transactions':
        $cid = _post('cid');
        $d = ORM::for_table('sys_companies')->find($cid);

        if ($d) {
            // find all customers with that company_id

            $customers = Contacts::findByCompany($cid);

            //  var_dump($invoices);

            if ($customers) {
                $transactions_payer = ORM::for_table('sys_transactions')
                    ->where_in('payerid', $customers)
                    ->find_array();
                $transactions_payee = ORM::for_table('sys_transactions')
                    ->where_in('payeeid', $customers)
                    ->find_array();

                $transactions = array_merge(
                    $transactions_payer,
                    $transactions_payee
                );

                $dt = '';

                foreach ($transactions as $transaction) {
                    $dt .=
                        '<tr>
            <td>' .
                        $transaction['id'] .
                        ' </td>
            <td>' .
                        $transaction['date'] .
                        '</td>
            <td>' .
                        $transaction['account'] .
                        '</td>
            <td>' .
                        $transaction['type'] .
                        '</td>
          
            <td class="amount" data-a-dec="." data-a-sep="," data-a-pad="true" data-p-sign="p" data-a-sign="$ " data-d-group="3">' .
                        $transaction['amount'] .
                        '</td>
            <td>' .
                        $transaction['description'] .
                        '</td>
            <td>' .
                        $transaction['dr'] .
                        '</td>
            <td>' .
                        $transaction['cr'] .
                        '</td>
            <td>' .
                        $transaction['bal'] .
                        '</td>
            <td>
                <a href="' .
                        U .
                        'transactions/manage/' .
                        $transaction['id'] .
                        '/" class="btn btn-primary btn-xs"><i class="fa fa-check"></i></a>
                
            </td>
        </tr>';
                }

                $tds = $dt == '' ? '<tr><td colspan="10">' .
                $_L['No Data Available'] .
                '</td> </tr>' : $dt;
            } else {
                $tds =
                    '<tr><td colspan="10">' .
                    $_L['No Data Available'] .
                    '</td> </tr>';
            }

            echo '<table class="table table-bordered table-responsive table-hover sys_table">
    <thead>
    <tr>
        <th>#</th>
        <th>' .
                $_L['Date'] .
                '</th>
        <th>' .
                $_L['Account'] .
                '</th>
        <th>' .
                $_L['Type'] .
                '</th>
        <th>' .
                $_L['Amount'] .
                '</th>
        <th>' .
                $_L['Description'] .
                '</th>
        <th>' .
                $_L['Dr'] .
                '</th>
        <th>' .
                $_L['Cr'] .
                '</th>
        <th>' .
                $_L['Balance'] .
                '</th>
        <th class="text-right">' .
                $_L['Manage'] .
                '</th>
    </tr>
    </thead>
    <tbody>

            
           ' .
                $tds .
                ' 
    

    </tbody>
</table>';
        }

        break;

    case 'json_list':
        $show_company_column = false;
        $show_group_column = false;

        if (
            isset($config['contact_list_show_company_column']) &&
            $config['contact_list_show_company_column'] == 1
        ) {
            $show_company_column = true;
        }

        if (
            isset($config['contact_list_show_group_column']) &&
            $config['contact_list_show_group_column'] == 1
        ) {
            $show_group_column = true;
        }

        $columns = [];

        $columns[] = '';
        $columns[] = 'id';
        $columns[] = 'img';
        $columns[] = 'account';

        if ($show_company_column) {
            $columns[] = 'company';
        }

        if ($show_group_column) {
            $columns[] = 'gname';
        }

        $columns[] = 'email';
        $columns[] = 'phone';
        $columns[] = '';

        $order_by = $data['order'];

        $o_c_id = $order_by[0]['column'];
        $o_type = $order_by[0]['dir'];

        $a_order_by = $columns[$o_c_id];

        $d = ORM::for_table('crm_accounts');

        $d->select('id');
        $d->select('account');
        $d->select('code');
        $d->select('img');

        if ($show_company_column) {
            $d->select('company');
        }

        if ($show_group_column) {
            $d->select('gname');
        }

        $d->select('email');
        $d->select('phone');

        $account = _post('account');

        if ($account != '') {
            $d->where_like('account', "%$account%");
        }

        $email = _post('email');

        if ($email != '') {
            $d->where_like('email', "%$email%");
        }

        $company = _post('company');

        if ($company != '') {
            $d->where_like('company', "%$company%");
        }

        $group = _post('group');

        if ($group != '') {
            $d->where_like('gname', "%$group%");
        }

        $phone = _post('phone');

        if ($phone != '') {
            $d->where_like('phone', "%$phone%");
        }

        $type = route(2);

        if ($type == 'supplier') {
            $d->where_like('type', "%Supplier%");
        } else {
            $d->where_like('type', "%Customer%");
        }

        if (!has_access($user->roleid, 'customers', 'all_data')) {
            $d->where('o', $user->id);
        }

        $iTotalRecords = $d->count();

        $iDisplayLength = (int) $_REQUEST['length'];
        $iDisplayLength =
            $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = (int) $_REQUEST['start'];
        $sEcho = (int) $_REQUEST['draw'];

        $records = [];
        $records["data"] = [];

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        if ($o_type == 'desc') {
            $d->order_by_desc($a_order_by);
        } else {
            $d->order_by_asc($a_order_by);
        }

        $d->limit($iDisplayLength);
        $d->offset($iDisplayStart);
        $x = $d->find_array();

        $i = $iDisplayStart;

        $colors = Colors::colorNames();

        foreach ($x as $xs) {
            $full_name = $xs['account'];

            if ($xs['img'] == '') {
                $css_bg = $colors[array_rand($colors)];

                $full_name_e = explode(' ', $full_name);

                $fn_count = count($full_name_e);

                $first_name = $fn_count == 0 ? '' : $full_name_e[0];

                $first_name_letter = $first_name == '' ? 'N' : $first_name[0];

                if (isset($full_name_e[1])) {
                    $last_name = $full_name_e[1];
                    $last_name_letter = isset($last_name[0]) ? $last_name[0] : '';
                } else {
                    $last_name_letter = '';
                }

                $two_l = strtoupper(
                    htmlentities($first_name_letter . $last_name_letter)
                );

                if ($two_l == '') {
                    $two_l = 'NA';
                }

                $img =
                    '<span class="ib_avatar ib_bg_' .
                    $css_bg .
                    '">' .
                    $two_l .
                    '</span>';
            } else {
                $img =
                    '<img src="' .
                    APP_URL .
                    '/' .
                    $xs['img'] .
                    '" class="img-thumbnail img-responsive" style="max-height: 32px;" alt="' .
                    $full_name .
                    '">';
            }

            $phone = $xs['phone'] == '' ? $_L['n_a'] : $xs['phone'];

            if ($xs['code'] != '') {
                $contact_details =
                    htmlentities($xs['account']) . ' <br> ' . $xs['code'];
            } else {
                $contact_details = htmlentities($xs['account']);
            }

            if ($show_group_column && $show_company_column) {
                $records["data"][] = [
                    0 =>
                        '<input id="row_' .
                        $xs['id'] .
                        '" type="checkbox" value="" name=""  class="i-checks"/>',
                    1 => $xs['id'],
                    2 =>
                        '<a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '">' .
                        $img .
                        '</a>',
                    3 => $contact_details,
                    4 => htmlentities($xs['company']),
                    5 => htmlentities($xs['gname']),
                    6 => htmlentities($xs['email']),
                    7 => htmlentities($xs['phone']),
                    8 =>
                        '
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '" class="btn btn-primary btn-xs cview" id="vid' .
                        $xs['id'] .
                        '"><i class="fa fa-search"></i> </a>
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '/edit/" class="btn btn-warning btn-xs cedit" id="eid' .
                        $xs['id'] .
                        '"><i class="glyphicon glyphicon-pencil"></i> </a>
                <a href="#" class="btn btn-danger btn-xs cdelete" id="uid' .
                        $xs['id'] .
                        '"><i class="fa fa-trash"></i> </a>
                ',

                    9 => $xs['id'],

                    "DT_RowId" => 'dtr_' . $xs['id'],
                ];
            } elseif (
                $show_company_column == false &&
                $show_group_column == true
            ) {
                $records["data"][] = [
                    0 =>
                        '<input id="row_' .
                        $xs['id'] .
                        '" type="checkbox" value="" name=""  class="i-checks"/>',
                    1 => $xs['id'],
                    2 =>
                        '<a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '">' .
                        $img .
                        '</a>',
                    3 => $contact_details,
                    4 => htmlentities($xs['gname']),
                    5 => htmlentities($xs['email']),
                    6 => htmlentities($xs['phone']),
                    7 =>
                        '
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '" class="btn btn-primary btn-xs cview" id="vid' .
                        $xs['id'] .
                        '"><i class="fa fa-search"></i> </a>
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '/edit/" class="btn btn-warning btn-xs cedit" id="eid' .
                        $xs['id'] .
                        '"><i class="glyphicon glyphicon-pencil"></i> </a>
                <a href="#" class="btn btn-danger btn-xs cdelete" id="uid' .
                        $xs['id'] .
                        '"><i class="fa fa-trash"></i> </a>
                ',

                    9 => $xs['id'],

                    "DT_RowId" => 'dtr_' . $xs['id'],
                ];
            } elseif (
                $show_company_column == true &&
                !$show_group_column
            ) {
                $records["data"][] = [
                    0 =>
                        '<input id="row_' .
                        $xs['id'] .
                        '" type="checkbox" value="" name=""  class="i-checks"/>',
                    1 => $xs['id'],
                    2 =>
                        '<a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '">' .
                        $img .
                        '</a>',
                    3 => $contact_details,
                    4 => htmlentities($xs['company']),
                    5 => htmlentities($xs['email']),
                    6 => htmlentities($xs['phone']),
                    7 =>
                        '
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '" class="btn btn-primary btn-xs cview" id="vid' .
                        $xs['id'] .
                        '"><i class="fa fa-search"></i> </a>
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '/edit/" class="btn btn-warning btn-xs cedit" id="eid' .
                        $xs['id'] .
                        '"><i class="glyphicon glyphicon-pencil"></i> </a>
                <a href="#" class="btn btn-danger btn-xs cdelete" id="uid' .
                        $xs['id'] .
                        '"><i class="fa fa-trash"></i> </a>
                ',

                    9 => $xs['id'],

                    "DT_RowId" => 'dtr_' . $xs['id'],
                ];
            } else {
                $records["data"][] = [
                    0 =>
                        '<input id="row_' .
                        $xs['id'] .
                        '" type="checkbox" value="" name=""  class="i-checks"/>',
                    1 => $xs['id'],
                    2 =>
                        '<a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '">' .
                        $img .
                        '</a>',
                    3 => $contact_details,
                    4 => htmlentities($xs['email']),
                    5 => htmlentities($xs['phone']),
                    6 =>
                        '
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '" class="btn btn-primary btn-xs cview" id="vid' .
                        $xs['id'] .
                        '"><i class="fa fa-search"></i> </a>
                <a href="' .
                        U .
                        'contacts/view/' .
                        $xs['id'] .
                        '/edit/" class="btn btn-warning btn-xs cedit" id="eid' .
                        $xs['id'] .
                        '"><i class="glyphicon glyphicon-pencil"></i> </a>
                <a href="#" class="btn btn-danger btn-xs cdelete" id="uid' .
                        $xs['id'] .
                        '"><i class="fa fa-trash"></i> </a>
                ',

                    9 => $xs['id'],

                    "DT_RowId" => 'dtr_' . $xs['id'],
                ];
            }
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        // var_dump($records);

        //   exit;

        api_response($records);

        break;

    case 'set_group':
        $ids_raw = $data['ids'];
        $gid = _post('gid');

        $g = ORM::for_table('crm_groups')->find($gid);

        if ($g) {
            $gid = $g->id;
            $gname = $g->gname;
        } else {
            $gid = '0';
            $gname = '';
        }

        foreach ($ids_raw as $id_single) {
            $id = str_replace('row_', '', $id_single);
            $c = ORM::for_table('crm_accounts')
                ->select('id')
                ->find($id);
            if ($c) {
                $c->gid = $gid;
                $c->gname = $gname;
                $c->save();
            }
        }

        echo $_L['Data Updated'];

        break;

    case 'add_fund':
        $amount = _post('amount');
        $cid = _post('cid');

        $customer = ORM::for_table('crm_accounts')->find($cid);

        if ($customer) {
            //            if(v::numeric()->between(0, 999999999999)->validate($amount)){
            //
            //                $prev_balance = $customer->balance;
            //
            //                $new_balance = $prev_balance+$amount;
            //
            //                $customer->balance = $new_balance;
            //                $customer->save();
            //
            //                _log('Amount '.$amount.' Added by Admin ['.$user->fullname.']'.' Customer - '.$customer->account.' Previous Balance: '.$prev_balance.' New Balance: '.$new_balance,'Client',$customer->id);
            //
            //            }

            if (is_numeric($amount)) {
                $prev_balance = $customer->balance;

                $new_balance = $prev_balance + $amount;

                $customer->balance = $new_balance;
                $customer->save();

                _log(
                    $_L['Amount'] .
                        ' ' .
                        $amount .
                        ' Added by Admin [' .
                        $user->fullname .
                        ']' .
                        ' Customer - ' .
                        $customer->account .
                        ' Previous Balance: ' .
                        $prev_balance .
                        ' New Balance: ' .
                        $new_balance,
                    'Client',
                    $customer->id
                );

                r2(
                    U . 'contacts/view/' . $cid . '/summary/',
                    's',
                    $_L['added_successful']
                );
            } else {
                r2(
                    U . 'contacts/view/' . $cid . '/summary/',
                    'e',
                    $_L['amount_error']
                );
            }
        }

        break;

    case 'return_fund':
        $amount = _post('amount');
        $cid = _post('cid');

        $customer = ORM::for_table('crm_accounts')->find($cid);

        if ($customer) {
            if (is_numeric($amount)) {
                $prev_balance = $customer->balance;

                $new_balance = $prev_balance - $amount;

                $customer->balance = $new_balance;
                $customer->save();

                _log(
                    'Amount ' .
                        $amount .
                        ' Balance returned by Admin [' .
                        $user->fullname .
                        ']' .
                        ' Customer - ' .
                        $customer->account .
                        ' Previous Balance: ' .
                        $prev_balance .
                        ' New Balance: ' .
                        $new_balance,
                    'Client',
                    $customer->id
                );

                r2(
                    U . 'contacts/view/' . $cid . '/summary/',
                    's',
                    $_L['added_successful']
                );
            } else {
                r2(
                    U . 'contacts/view/' . $cid . '/summary/',
                    'e',
                    $_L['amount_error']
                );
            }
        }

        break;

    case 'log':
        $cid = _post('cid');

        $logs = ORM::for_table('sys_logs')
            ->where('type', 'Client')
            ->where('userid', $cid)
            ->limit(1000)
            ->order_by_desc('id')
            ->find_array();

        $tr = '';

        foreach ($logs as $log) {
            $tr .=
                '<tr>
            <td class="mnt"><span class="mmnt">' .
                strtotime($log['date']) .
                '</span></td>
            <td>' .
                $log['ip'] .
                '</td>
            <td>' .
                $log['description'] .
                '</td>
           
        </tr>';
        }

        echo '<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>
        <th width="150px">' .
            $_L['Time'] .
            '</th>
        <th width="150px">' .
            $_L['IP'] .
            '</th>
        <th>' .
            $_L['Description'] .
            '</th>
        
    </tr>
    </thead>
    <tbody>

        ' .
            $tr .
            '
            
    

    </tbody>
</table>';

        break;

    case 'options':
        $ib_options = [];
        $ib_options['add_fund'] = false;

        echo json_encode($ib_options);

        break;

    case 'get_company_details':
        $cid = route(2);

        $company = Company::find($cid);

        if ($company) {
            api_response($company);
        } else {
            api_response([
                'message' => 'Company Not Found',
                'success' => false,
            ]);
        }

        break;

    case 'client-password-manager':
        $cid = _post('cid');

        $passwords = PasswordManager::where('client_id', $cid)->get();

        view('profile_client_password_manager', [
            'passwords' => $passwords,
        ]);

        break;

    case 'credit_card_info':
        $cid = _post('cid');

        $contact = Contact::find($cid);

        //

        $credit_card = CreditCard::where('contact_id', $cid)->first();

        view('profile_client_credit_card_info', [
            'cid' => $cid,
            'contact' => $contact,
            'credit_card' => $credit_card,
        ]);

        break;

    case 'save_credit_card':
        $cid = _post('contact_id');

        $contact = Contact::find($cid);

        if ($contact) {
            $credit_card = CreditCard::where('contact_id', $cid)->first();

            if (!$credit_card) {
                $credit_card = new CreditCard();
            }

            $credit_card->contact_id = $cid;
            $credit_card->card_type = '';
            $credit_card->card_holder_name = _post('card-holder-name');
            $credit_card->card_number = _post('card-number');
            $credit_card->expiry_month = _post('expiry-month');
            $credit_card->expiry_year = _post('expiry-year');
            $credit_card->cvv = _post('cvv');

            $credit_card->save();

            echo $contact->id;
        }

        break;

    case 'drive':

        $contacts = Contact::select('id', 'account')
            ->get()
            ->groupBy('id')
            ->toArray();

        $files = Document::where('cid', '!=', 0)
            ->orderBy('id', 'desc')
            ->get();

        view('contacts_drive', [
            'files' => $files,
            'contacts' => $contacts,
        ]);

        break;

    default:
        echo 'action not defined';
}
