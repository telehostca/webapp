<?php
/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email as SymfonyEmail;
use Symfony\Component\Mime\Address as SymfonyAddress;

_auth();
$ui->assign('selected_navigation', 'invoices');
$ui->assign('_title', $_L['Sales'] . '- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
AppEvent::trigger('invoices');

$sales_all_data = has_access($user->roleid, 'sales', 'all_data');

$data = request()->all();

switch ($action) {
    case 'add':
    case 'edit':
    case 'credit-note':
        $customers_all_data = has_access(
            $user->roleid,
            'customers',
            'all_data'
        );

        $extraHtml = '';

        $app->emit('invoices_add');

        $extra_fields = '';
        $extra_jq = '';

        AppEvent::trigger('add_invoice');

        $ui->assign('extra_fields', $extra_fields);

        $recurring = false;

        $p_cid = '';

        $invoice = false;
        $contact = false;
        $items = false;

        if ($action == 'add') {
            if (isset($routes['2']) && $routes['2'] == 'recurring') {
                $recurring = true;
            }

            if (
                isset($routes['3']) &&
                $routes['3'] != '' &&
                $routes['3'] != '0'
            ) {
                $p_cid = $routes['3'];
                $p_d = ORM::for_table('crm_accounts')->find($p_cid);
                if (!$p_d) {
                    $p_cid = '';
                }
            }
        } elseif ($action == 'edit') {
            $id = route(2);
            $invoice = Invoice::find($id);

            $p_cid = $invoice->userid;

            if ($invoice->r != 0) {
                $recurring = true;
            }
        }

        if ($invoice) {
            $contact = Contact::find($invoice->userid);
            $items = InvoiceItem::where('invoiceid', $invoice->id)
                ->orderBy('id', 'asc')
                ->get();
        }
        $ui->assign('p_cid', $p_cid);

        $ui->assign('recurring', $recurring);



        $c = Contact::select(['id','account','company','email','phone','code'])->where('type','like', '%Customer%')
            ->orderBy('id', 'desc');

        if (!$customers_all_data) {
            $c->where('o', $user->id);
        }

        $c = $c->get()->toArray();

        $ui->assign('c', $c);
        $t = ORM::for_table('sys_tax')->find_array();
        $ui->assign('t', $t);
        $ui->assign('idate', date('Y-m-d'));

        $tax_default = ORM::for_table('sys_tax')
            ->where('is_default', 1)
            ->first();

        $tax_system = $config['tax_system'];

        switch ($tax_system) {
            case 'India':
                $states = Tax::indianStates();

                break;

            default:
                $states = [];
        }

        $pos = route(4);

        $project_id = route(5, false);

        if ($project_id !== '' && $project_id !== '0') {
        }

        AppEvent::trigger('add_invoice_rendering_form');

        $project = false;

        $project_id = $invoice ? $invoice->pid : route(5, false);

        if ($project_id) {
            $project = Project::find($project_id);
        }

        $staffs = User::all()->keyBy('id')->all();

        $invoice_groups = [];

        if(!empty($config['invoice_group']))
        {
            $invoice_groups = InvoiceGroup::all();
        }

        $services = [];

        if(!empty($config['invoice_single_service']))
        {
            $services = Item::all();
        }

        view('invoice', [
            'pos' => $pos,
            'tax_default' => $tax_default,
            'states' => $states,
            'extraHtml' => $extraHtml,
            'currencies' => getActiveCurrencies(),
            'invoice' => $invoice,
            'contact' => $contact,
            'items' => $items,
            'project' => $project,
            'staffs' => $staffs,
            'action' => $action,
            'invoice_groups' => $invoice_groups,
            'services' => $services,
        ]);

        break;


    case 'pos-receipt':
    case 'pos-pdf':
    case 'pos-print':
        case 'delivery-label':
        case 'delivery-label-pdf':
        case 'delivery-label-print':

    $barcode_generator = new Picqer\Barcode\BarcodeGeneratorPNG();

        $today = date('Y-m-d H:i:s');

        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find($id);
        if ($d) {
            $invoice = Invoice::find($id);

            $render = route(4, 'invoice');

            $items = ORM::for_table('sys_invoiceitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_many();
            $ui->assign('items', $items);
            //find related transactions
            $trs_c = ORM::for_table('sys_transactions')
                ->where('iid', $id)
                ->count();
//
            $trs = ORM::for_table('sys_transactions')
                ->where('iid', $id)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('trs', $trs);
            $ui->assign('trs_c', $trs_c);
            $a = ORM::for_table('crm_accounts')->find($d['userid']);
            $ui->assign('a', $a);
            $ui->assign('d', $d);



            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            $i_due = $d['credit'] != '0.00' ? $i_total - $i_credit : $d['total'];

            $ui->assign('i_due', $i_due);

            $cf = ORM::for_table('crm_customfields')
                ->where('showinvoice', 'Yes')
                ->order_by_asc('id')
                ->find_many();
            $ui->assign('cf', $cf);
//
            $x_html = '';

            AppEvent::trigger('view_invoice');

            $ui->assign('x_html', $x_html);

            $inv_files = Invoice::files($id);

            $inv_files_c = count($inv_files);

            $ui->assign('inv_files_c', $inv_files_c);

            $ui->assign('inv_files', $inv_files);
//
//            //

            if (!isset($_SESSION['uid'])) {
                $ip = get_client_ip();
                // log invoice access log

                $country = $_L['Unknown'];
                $city = $_L['Unknown'];
                $lat = '';
                $lon = '';

                $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

                $browser = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

                if ($config['maxmind_installed'] == 1) {
                    $l_data = Ip2Location::getDetails($ip);

                    $country = $l_data['country'];
                    $city = $l_data['city'];
                    $lat = $l_data['lat'];
                    $lon = $l_data['lon'];
                }

                $ial = ORM::for_table('ib_invoice_access_log')->create();
                $ial->iid = $id;
                $ial->ip = $ip;
                $ial->browser = $browser;
                $ial->referer = $referer;
                $ial->country = $country;
                $ial->city = $city;
                $ial->viewed_at = $today;
                $ial->customer = $d->account;
                $ial->save();
            }

            //

            $company = $a->cid != '' || $a->cid != 0 ? Company::find($a->cid) : false;

            // find the quote

            $quote = false;

            if ($d->quote_id != '0') {
                $quote = ORM::for_table('sys_quotes')->find($d->quote_id);
            }
//
            $plugin_extra_js = '';

            $invoice_url =
                U . 'client/iview/' . $d->id . '/token_' . $d->vtoken;

            $qr_code = (new \chillerlan\QRCode\QRCode())->render($invoice_url);

            $qr_code_admin_url = (new \chillerlan\QRCode\QRCode())->render(U.'invoices/view/'.$d->id);

            $app->emit('client_viewing_invoice', [&$d, &$a]);

            $currencies_all = Currency::getAllCurrencies();

            if (isset($currencies_all[$d->currency_iso_code])) {
                $data_a_sign = $currencies_all[$d->currency_iso_code]['symbol'];
                $data_a_sep =
                    $currencies_all[$d->currency_iso_code][
                    'thousands_separator'
                    ];
                $data_a_dec =
                    $currencies_all[$d->currency_iso_code]['decimal_mark'];

                $data_p_sign = $currencies_all[$d->currency_iso_code] == true ? 'p' : 's';
            } else {
                $data_a_sign = $config['currency_code'];
                $data_a_sep = $config['thousands_sep'];
                $data_a_dec = $config['dec_point'];
                $data_p_sign = $config['currency_symbol_position'];
            }

            $payment_gateways = PaymentGateway::where('status', 'Active')
                ->orderBy('sorder', 'asc')
                ->get();

            $payment_gateways_by_processor = $payment_gateways
                ->keyBy('processor')
                ->toArray();

            $format_currency_override = [];

            if (isset($config['decimal_places_products_and_services'])) {
                $format_currency_override['precision'] =
                    $config['decimal_places_products_and_services'];
            }

            $data = [

                'invoice' => $invoice,
                'company' => $company,
                'quote' => $quote,

                'plugin_extra_js' => $plugin_extra_js,
                'data_a_sign' => $data_a_sign,
                'data_a_sep' => $data_a_sep,
                'data_a_dec' => $data_a_dec,
                'data_p_sign' => $data_p_sign,
                'payment_gateways' => $payment_gateways,
                'payment_gateways_by_processor' => $payment_gateways_by_processor,
                'render' => $render,
                'format_currency_override' => $format_currency_override,
                'qr_code' => $qr_code,
                'barcode_generator' => $barcode_generator,
                'qr_code_admin_url' => $qr_code_admin_url,
            ];

            if($action == 'pos-receipt'){
                \view('invoice_pos_receipt', $data);
            }
            elseif ($action == 'pos-pdf' || $action == 'delivery-label-pdf')
            {
                $pdf_c = '';
                $ib_w_font = 'dejavusanscondensed';
                if ($config['pdf_font'] == 'default') {
                    $pdf_c = 'c';
                    $ib_w_font = 'Helvetica';
                }

                try {
                    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => [80,400],'margin_left' => 5,'margin_right' => 5,'margin_top' => 5,'margin_bottom' => 5,'margin_header' => 0,'margin_footer' => 0]);
                    $mpdf->SetTitle($config['CompanyName'] . ' Invoice');
                    $mpdf->SetAuthor($config['CompanyName']);
                    $mpdf->SetDisplayMode('fullpage');

                    if ($config['rtl'] == 1) {
                        $mpdf->SetDirectionality('rtl');
                    }

                    if ($config['pdf_font'] == 'AdobeCJK') {
                        $mpdf->useAdobeCJK = true;
                        $mpdf->autoScriptToLang = true;
                        $mpdf->autoLangToFont = true;
                    }

                    if($action == 'pos-pdf')
                    {
                        $html = view_render('invoice_pos_receipt_pdf', $data);
                    }
                    elseif ($action == 'delivery-label-pdf')
                    {
                        $html = view_render('invoice_delivery_label_pdf', $data);
                    }


                    $mpdf->WriteHTML($html);

                    $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D

                } catch (\Exception $e) {
                    dd(
                        'An error occurred, probably related to your server! : ',
                        $e->getMessage(),
                        "\n"
                    );
                }
            }
            elseif($action == 'pos-print'){
                view('invoice_pos_receipt_pdf', $data);
            }

            elseif($action == 'delivery-label'){
                view('invoice_delivery_label', $data);
            }

            elseif($action == 'delivery-label-print'){
                view('invoice_delivery_label_pdf', $data);
            }


        }

        break;

    case 'view':
        $extraHtml = '';
        $id = $routes['2'];
        $app->emit('invoices_view', [&$id]);

        $d = Invoice::find($id);
        if ($d) {

            $invoice = $d;

            if (!$sales_all_data && $d->aid != $user->id) {
                permissionDenied();
            }

            $items = ORM::for_table('sys_invoiceitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_many();
            $ui->assign('items', $items);


            $trs_c = Transaction::where('iid',$id)->count();


            $trs = ORM::for_table('sys_transactions')
                ->where('iid', $id)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('trs', $trs);
            $ui->assign('trs_c', $trs_c);

            $emls_c = EmailLog::where('iid',$id)->count();

            $emls = ORM::for_table('sys_email_logs')
                ->where('iid', $id)
                ->order_by_desc('id')
                ->find_many();
            $ui->assign('emls', $emls);
            $ui->assign('emls_c', $emls_c);

            $a = Contact::find($d->userid);

            $customer = $a;

            $ui->assign('a', $a);
            $ui->assign('d', $d);
            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            $i_due = $d['credit'] != '0.00' ? $i_total - $i_credit : $d['total'];

            $ui->assign('i_due', $i_due);
            $cf = ORM::for_table('crm_customfields')
                ->where('showinvoice', 'Yes')
                ->order_by_asc('id')
                ->find_many();
            $ui->assign('cf', $cf);

            $x_html = '';
            AppEvent::trigger('view_invoice');
            $ui->assign('x_html', $x_html);

            $upload_max_size = ini_get('upload_max_filesize');
            $post_max_size = ini_get('post_max_size');
            $ui->assign('upload_max_size', $upload_max_size);
            $ui->assign('post_max_size', $post_max_size);

            // count attachments

            $inv_files = Invoice::files($id);
            $inv_files_c = count($inv_files);
            $ui->assign('inv_files_c', $inv_files_c);
            $ui->assign('inv_files', $inv_files);


            $access_logs = InvoiceAccessLog::where('iid',$id)->orderBy('id','desc')->get();

            $ui->assign('access_logs', $access_logs);

            $currency_rate = 1;

            // find the company

            $company = $a->cid != '' || $a->cid != 0 ? Company::find($a->cid) : false;

            // find the quote

            $quote = false;

            if ($d->quote_id != '0') {
                $quote = ORM::for_table('sys_quotes')->find($d->quote_id);
            }

            $currencies_all = Currency::getAllCurrencies();

            if (isset($currencies_all[$d->currency_iso_code])) {
                $data_a_sign = $currencies_all[$d->currency_iso_code]['symbol'];
                $data_a_sep =
                    $currencies_all[$d->currency_iso_code][
                        'thousands_separator'
                    ];
                $data_a_dec =
                    $currencies_all[$d->currency_iso_code]['decimal_mark'];

                $data_p_sign = $currencies_all[$d->currency_iso_code] == true ? 'p' : 's';
            } else {
                $data_a_sign = $config['currency_code'];
                $data_a_sep = $config['thousands_sep'];
                $data_a_dec = $config['dec_point'];
                $data_p_sign = $config['currency_symbol_position'];
            }

            $format_currency_override = [];

            if (isset($config['decimal_places_products_and_services'])) {
                $format_currency_override['precision'] =
                    $config['decimal_places_products_and_services'];
            }

            $staffs = User::all()->keyBy('id')->all();
            $sms_templates = SMSTemplate::all();

            $sms_templates_transformed = [];


            foreach ($sms_templates as $sms_template) {

                if($sms_template->tpl == 'Invoice Created')
                {
                    $sms_templates_transformed['created'] = Invoice::genSMS($invoice, 'created', $customer);
                }
                elseif($sms_template->tpl == 'Invoice Payment Reminder')
                {
                    $sms_templates_transformed['reminder'] = Invoice::genSMS($invoice, 'reminder', $customer);
                }
                elseif($sms_template->tpl == 'Invoice Payment Confirmation')
                {
                    $sms_templates_transformed['confirmation'] = Invoice::genSMS($invoice, 'confirmation', $customer);
                }
                elseif($sms_template->tpl == 'Invoice Overdue Notice')
                {
                    $sms_templates_transformed['overdue'] = Invoice::genSMS($invoice, 'overdue', $customer);
                }
                elseif ($sms_template->tpl == 'Invoice Refund Confirmation')
                {
                    $sms_templates_transformed['refund'] = Invoice::genSMS($invoice, 'refund', $customer);
                }

            }


            view('invoices_view', [
                'currencies' => Currency::all(),
                'currency_rate' => $currency_rate,
                'company' => $company,
                'quote' => $quote,
                'extraHtml' => $extraHtml,
                'data_a_sign' => $data_a_sign,
                'data_a_sep' => $data_a_sep,
                'data_a_dec' => $data_a_dec,
                'data_p_sign' => $data_p_sign,
                'format_currency_override' => $format_currency_override,
                'staffs' => $staffs,
                'sms_templates_transformed' => $sms_templates_transformed,
            ]);


        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'add-post':
        $invoice_id = _post('invoice_id');

        $data = request()->all();

        $invoice = false;
        $creating = false;
        $document_type = $data['document_type'] ?? 'invoice';


        if ($invoice_id != '') {
            $invoice = Invoice::find($invoice_id);
        }

        $app->emit('invoices_add_post');

        $cid = _post('cid');

        // find user with cid

        $u = ORM::for_table('crm_accounts')->find($cid);
        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');

        $show_quantity_as = _post('show_quantity_as');

        // find currency

        $currency_id = _post('currency');
        $currency_find = Currency::where('iso_code', $currency_id)->first();
        if ($currency_find) {
            $currency = $currency_find->id;
            $currency_symbol = $currency_find->symbol;
            $currency_rate = $currency_find->rate;
        } else {
            $currency = 0;
            $currency_symbol = $config['currency_code'];
            $currency_rate = 1.0;
        }

        if (isset($data['amount'])) {
            $amount = $data['amount'];
        } else {
            $msg .= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        $idate = _post('idate');
        $its = strtotime($idate);

        $duedate = _post('duedate');

        $dd = '';

        if (!$invoice) {
            $creating = true;
            if ($duedate == 'due_on_receipt') {
                $dd = $idate;
            } elseif ($duedate == 'days3') {
                $dd = date('Y-m-d', strtotime('+3 days', $its));
            } elseif ($duedate == 'days5') {
                $dd = date('Y-m-d', strtotime('+5 days', $its));
            } elseif ($duedate == 'days7') {
                $dd = date('Y-m-d', strtotime('+7 days', $its));
            } elseif ($duedate == 'days10') {
                $dd = date('Y-m-d', strtotime('+10 days', $its));
            } elseif ($duedate == 'days15') {
                $dd = date('Y-m-d', strtotime('+15 days', $its));
            } elseif ($duedate == 'days30') {
                $dd = date('Y-m-d', strtotime('+30 days', $its));
            } elseif ($duedate == 'days45') {
                $dd = date('Y-m-d', strtotime('+45 days', $its));
            } elseif ($duedate == 'days60') {
                $dd = date('Y-m-d', strtotime('+60 days', $its));
            } else {
                $msg .= 'Invalid Date <br /> ';
            }

            if ($dd === '' || $dd === '0') {
                $msg .= 'Date Parsing Error <br /> ';
            }
        } else {
            $dd = $duedate;
        }

        $repeat = _post('repeat');
        $nd = $idate;
        if ($repeat == '0') {
            $r = '0';
        } elseif ($repeat == 'daily') {
            $r = '+1 day';
            $nd = date('Y-m-d', strtotime('+1 day', $its));
        } elseif ($repeat == 'week1') {
            $r = '+1 week';
            $nd = date('Y-m-d', strtotime('+1 week', $its));
        } elseif ($repeat == 'weeks2') {
            $r = '+2 weeks';
            $nd = date('Y-m-d', strtotime('+2 weeks', $its));
        } elseif ($repeat == 'weeks3') {
            $r = '+3 weeks';
            $nd = date('Y-m-d', strtotime('+3 weeks', $its));
        } elseif ($repeat == 'weeks4') {
            $r = '+4 weeks';
            $nd = date('Y-m-d', strtotime('+4 weeks', $its));
        } elseif ($repeat == 'month1') {
            $r = '+1 month';
            $nd = date('Y-m-d', strtotime('+1 month', $its));
        } elseif ($repeat == 'months2') {
            $r = '+2 months';
            $nd = date('Y-m-d', strtotime('+2 months', $its));
        } elseif ($repeat == 'months3') {
            $r = '+3 months';
            $nd = date('Y-m-d', strtotime('+3 months', $its));
        } elseif ($repeat == 'months6') {
            $r = '+6 months';
            $nd = date('Y-m-d', strtotime('+6 months', $its));
        } elseif ($repeat == 'year1') {
            $r = '+1 year';
            $nd = date('Y-m-d', strtotime('+1 year', $its));
        } elseif ($repeat == 'years2') {
            $r = '+2 years';
            $nd = date('Y-m-d', strtotime('+2 years', $its));
        } elseif ($repeat == 'years3') {
            $r = '+3 years';
            $nd = date('Y-m-d', strtotime('+3 years', $its));
        } else {
            $msg .= 'Date Parsing Error <br /> ';
        }

        if ($msg == '') {
            $business_number = _post('business_number');

            if (
                $business_number != '' &&
                $u->business_number != $business_number
            ) {
                $u->business_number = $business_number;
                $u->save();
            }

            $is_same_state = 1;

            if ($config['tax_system'] == 'India') {
                $place_of_supply = _post('place_of_supply');

                $is_same_state = $place_of_supply == $config['business_location'] ? 1 : 0;
            }

            $qty = $data['qty'];
            $item_number = $data['item_code'];

            $taxed = isset($data['taxed']) ? $data['taxed'] : false;

            $sTotal = '0';
            $taxTotal = '0';
            $i = '0';
            $a = [];

            $taxval = '0.00';
            $taxname = '';
            $taxrate = '0.00';

            $taxed_amount = 0.0;
            $lamount = 0.0;

            $discounts = $data['discount'];

            $discount_type = _post('discount_type');

            $total_discount = 0.0;

            $sub_total_without_discount = 0.0;

            foreach ($amount as $samount) {
                $samount = createFromCurrency($samount, $currency_id);

                $a[$i] = $samount;
                $sqty = $qty[$i];
                $sqty = createFromCurrency($sqty, $currency_id);

                $lTaxRate = $taxed[$i];

                $line_discount = $discounts[$i];

                $line_discount = createFromCurrency(
                    $line_discount,
                    $currency_id
                );

                $line_total = $samount * $sqty;

                $line_total_without_discount = $line_total;

                if ($discount_type == 'p') {
                    $line_discount = $line_total * ($line_discount / 100);
                }

                $line_total -= $line_discount;

                $total_discount += $line_discount;

                $sTotal += $line_total;
                $lamount = $line_total;

                $lTaxVal = ($lamount * $lTaxRate) / 100;

                $taxed_amount += $lTaxVal;

                $sub_total_without_discount += $line_total_without_discount;

                $i++;
            }

            $invoicenum = _post('invoicenum');
            $cn = _post('cn');
            $fTotal = $sTotal;

            $discount_type = _post('discount_type');
            $discount_value = '0.00';

            $fTotal += $taxed_amount;

            $status = _post('status');
            if ($status != 'Draft') {
                $status = 'Unpaid';
            }

            $receipt_number = _post('receipt_number');

            $title = _post('title');

            $datetime = date("Y-m-d H:i:s");

            if (!$invoice) {
                $invoice = new Invoice();

                $vtoken = strtolower(Str::random(20));
                $ptoken = strtolower(Str::random(20));

                $invoice->vtoken = $vtoken;
                $invoice->ptoken = $ptoken;

                $invoice->type = $document_type == 'credit-note' ? 'Credit Note' : 'Invoice';

            }

            $group_id = 0;
            $service_id = 0;

            if(!empty($config['invoice_group']))
            {
                $group_id = _post('group_id');
                $invoice->group_id = $group_id;
            }

            if(!empty($config['invoice_single_service']))
            {
                $service_id = _post('service_id');
                $invoice->service_id = $service_id;
            }

            $invoice->userid = $cid;
            $invoice->account = $u['account'];
            $invoice->date = $idate;
            $invoice->duedate = $dd;
            $invoice->datepaid = $datetime;
            $invoice->subtotal = $sub_total_without_discount;
            $invoice->discount_type = $discount_type;
            $invoice->discount_value = $discount_value;
            $invoice->discount = $total_discount;
            $invoice->total = $fTotal;
            $invoice->tax = $taxed_amount;
            $invoice->taxname = '';
            $invoice->taxrate = 0.0;
            $invoice->status = $status;
            $invoice->notes = $notes;
            $invoice->r = $r;
            $invoice->nd = $nd;
            $invoice->aid = $data['aid'] ?? $user->id;
            $invoice->is_same_state = $is_same_state;
            $invoice->show_quantity_as = $show_quantity_as;
            $invoice->invoicenum = $invoicenum;
            $invoice->cn = $cn;
            $invoice->tax2 = '0.00';
            $invoice->taxrate2 = '0.00';
            $invoice->paymentmethod = '';
            $invoice->currency = $currency;
            $invoice->currency_symbol = $currency_symbol;
            $invoice->currency_rate = $currency_rate;
            $invoice->currency_iso_code = $currency_id;
            $invoice->receipt_number = $receipt_number;
            $invoice->title = $title;
            $invoice->pid = _post('pid', 0);
            $invoice->save();

            $invoiceid = $invoice->id;
            $description = $data['desc'];

            $tax_code = isset($data['tax_code']) ? $data['tax_code'] : [];

            $i = '0';

            if ($invoice) {
                InvoiceItem::where('invoiceid', $invoice->id)->delete();
            }

            $staff_id = $data['staff_id'] ?? [];


            $invoicing_allow_staff_selection_for_each_item = $config['invoicing_allow_staff_selection_for_each_item'] ?? false;

            foreach ($description as $item) {
                $samount = $a[$i];

                $actual_line_discount = 0;

                if ($item == '' && $samount == '0.00') {
                    $i++;
                    continue;
                }

                $tax_rate = $taxed[$i];

                $sqty = $qty[$i];
                $sqty = createFromCurrency($sqty, $currency_id);

                $line_discount = $discounts[$i];
                $line_discount = createFromCurrency(
                    $line_discount,
                    $currency_id
                );

                $line_total = $samount * $sqty;

                if ($discount_type == 'p') {
                    $actual_line_discount =
                        $line_total * ($line_discount / 100);
                }

                $line_total -= $actual_line_discount;

                $sTotal += $line_total;
                $lamount = $line_total;

                $lTaxVal = ($lamount * $lTaxRate) / 100;

                $taxed_amount += $lTaxVal;

                $d = new InvoiceItem();
                $d->invoiceid = $invoiceid;
                $d->userid = $cid;
                $d->description = $item;
                $d->qty = $sqty;
                $d->amount = $samount;
                $d->total = $line_total;

                if ($tax_rate == '' || $tax_rate == '0') {
                    $tax_rate = 0.0;
                    $d->taxed = '0';
                } else {
                    $tax_rate = $taxed[$i];
                    $d->taxed = '1';
                }

                $d->tax_rate = $tax_rate;

                $item_taxed_amount = round(
                    ($tax_rate * ($sqty * $samount)) / 100,
                    2
                );

                $d->type = '';
                $d->relid = '0';
                $d->itemcode = $item_number[$i];
                $d->taxamount = $item_taxed_amount;
                $d->duedate = date('Y-m-d');
                $d->paymentmethod = '';
                $d->notes = '';

                $d->discount_type = $discount_type;
                $d->discount_amount = $line_discount;

                $d->tax_code = isset($tax_code[$i]) ? $tax_code[$i] : '';

                if($invoicing_allow_staff_selection_for_each_item)
                {
                    $d->staff_id = $staff_id[$i] ?? 0;
                }

                $d->save();

                Inventory::decreaseByItemNumber($item_number[$i], $sqty);

                $item_r = Item::where('name', $item)->first();
                if ($item_r) {
                    $item_r->sold_count += $sqty;
                    $item_r->total_amount += $samount;
                    $item_r->save();
                }

                $i++;
            }

            $code = _post('cn');

            if ($creating) {

                if($document_type == 'credit-note'){
                    update_option(
                        'credit_note_code_current_number',
                        current_number_would_be($cn)
                    );
                }
                else{
                    update_option(
                        'invoice_code_current_number',
                        current_number_would_be($cn)
                    );
                }


            }

            $app->emit('invoices_add_post_done', [$invoiceid]);

            echo $invoiceid;
        } else {
            echo $msg;
        }

        break;

    case 'list':
    case 'credit-notes':
        $all_data = has_access($user->roleid, 'sales', 'all_data');

        $has_delete_access = false;

        if (has_access($user->roleid, 'sales', 'delete')) {
            $has_delete_access = true;
        }

        $tab = route(3, 'filter');

        $tabs_with_data_tables = [
            'unpaid',
            'paid',
            'cancelled',
            'partially_paid',
            'all',
        ];

    $invoice_groups = [];
    $selected_group_id = 0;
    $services = [];

    if(!empty($config['invoice_group']))
    {
        $selected_group_id = route(2,0);
        $invoice_groups = InvoiceGroup::all()->keyBy('id')->all();
    }

    if(!empty($config['invoice_single_service']))
    {
        $services = Item::all()->keyBy('id')->all();
    }

    $staffs = User::all()
        ->keyBy('id')
        ->all();

        if (in_array($tab, $tabs_with_data_tables)) {
            $paginator = [];
            $mode_css = '';
            $mode_js = '';
            $total_invoice = new Invoice();

            if (!$all_data) {
                $total_invoice = $total_invoice->where('aid', $user->id);
            }

            $total_invoice = $total_invoice->count();

            $ui->assign('total_invoice', $total_invoice);

            $invoices = [];

            $invoices = new Invoice();

            $type = 'Invoice';
            if($action == 'credit-notes'){
                $type = 'Credit Note';
            }

            $invoices = $action == 'credit-notes' ? $invoices->where('type', 'Credit Note') : $invoices->where('type', 'Invoice');

            if (!empty($tab)) {
                if ($tab === 'paid') {
                    $invoices = $invoices->where('status', 'Paid');
                } elseif ($tab === 'unpaid') {
                    $invoices = $invoices->where('status', 'Unpaid');
                } elseif ($tab === 'partially_paid') {
                    $invoices = $invoices->where('status', 'Partially Paid');
                } elseif ($tab === 'cancelled') {
                    $invoices = $invoices->where('status', 'Cancelled');
                }
            }

            if (!$all_data) {
                $invoices = $invoices->where('aid', $user->id);
            }

            $invoices = $invoices->orderBy('id', 'desc')->get();

            $ui->assign('d', $invoices);

            $paid = ORM::for_table('sys_invoices');

            if (!$all_data) {
                $paid->where('aid', $user->id);
            }

            $paid = Invoice::where('status', 'Paid')->where('type',$type)->count();

            $unpaid = Invoice::where('status', 'Unpaid')->where('type',$type);

            if (!$all_data) {
                $unpaid = $unpaid->where('aid', $user->id);
            }

            $unpaid = $unpaid->count();

            $partially_paid = Invoice::where('status', 'Partially Paid')->where('type',$type);

            if (!$all_data) {
                $partially_paid = $partially_paid->where('aid', $user->id);
            }

            $partially_paid = $partially_paid->count();

            $cancelled = Invoice::where('status', 'Cancelled')->where('type',$type);

            if (!$all_data) {
                $cancelled = $cancelled->where('aid', $user->id);
            }

            $cancelled = $cancelled->count();

            $arr = [
                'Paid' => $paid,
                'Unpaid' => $unpaid,
                'Partially Paid' => $partially_paid,
                'Cancelled' => $cancelled,
            ];

            $p = Misc::array_percentage($arr);
            $invoice_paid_amount = Invoice::where('status', 'Paid')->where('type',$type);

            if (!$all_data) {
                $invoice_paid_amount->where('aid', $user->id);
            }

            $invoices_all = Invoice::where('type',$type);
            if (!$all_data) {
                $invoices_all->where('aid', $user->id);
            }

            $invoices_all = $invoices_all->get();

            $currencies = Currency::all()->keyBy('iso_code')->all();

            $invoice_paid_amount = 0.00;
            $invoice_unpaid_amount = 0.00;
            $invoice_partially_paid_amount = 0.00;
            $invoice_cancelled_amount = 0.00;

            foreach($invoices_all as $invoice){
                $invoice_total = $invoice->total*$invoice->currency_rate;
                $credit = $invoice->credit*$invoice->currency_rate;

                if($invoice->status == 'Paid'){
                    $invoice_paid_amount += $invoice_total;
                }

                if($invoice->status == 'Unpaid'){
                    $invoice_unpaid_amount += $invoice_total;
                }

                if($invoice->status == 'Partially Paid'){
                    $invoice_partially_paid_amount += $credit;
                }

                if($invoice->status == 'Cancelled'){
                    $invoice_cancelled_amount += $invoice_total;
                }

            }

            $contact_groups = ContactGroup::all()->keyBy('id')->all();

            $contacts = Contact::all()
                ->keyBy('id')
                ->all();




            \view('invoices_list', [
                'paid' => $paid,
                'unpaid' => $unpaid,
                'partially_paid' => $partially_paid,
                'cancelled' => $cancelled,
                'invoice_paid_amount' => $invoice_paid_amount,
                'invoice_unpaid_amount' => $invoice_unpaid_amount,
                'invoice_cancelled_amount' => $invoice_cancelled_amount,
                'invoice_partially_paid_amount' => $invoice_partially_paid_amount,
                'p' => $p,
                'contacts' => $contacts,
                'tab' => $tab,
                'invoice_groups' => $invoice_groups,
                'selected_group_id' => $selected_group_id,
                'services' => $services,
                'action' => $action,
                'staffs' => $staffs,
            ]);
        }
        elseif ($tab === 'filter') {

            $customers = Contact::customers();


            $contact_groups = ContactGroup::all()
                ->keyBy('id')
                ->all();

            \view('invoices_filter', [
                'customers' => $customers,
                'has_delete_access' => $has_delete_access,
                'action' => $action,
                'staffs' => $staffs,
                'contact_groups' => $contact_groups,
                'invoice_groups' => $invoice_groups,
                'selected_group_id' => $selected_group_id,
                'services' => $services,
            ]);
        }

        break;

    case 'list-recurring':
        $d = ORM::for_table('sys_invoices')
            ->where_not_equal('r', '0')
            ->order_by_desc('id')
            ->find_many();
        $ui->assign('d', $d);

        view('list-recurring-invoices');

        break;

    case 'edit-post':
        AppEvent::trigger('invoices/edit-post/');
        $cid = _post('cid');
        $iid = _post('iid');
        $show_quantity_as = _post('show_quantity_as');

        // find user with cid

        $u = ORM::for_table('crm_accounts')->find($cid);
        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');
        if (isset($data['amount'])) {
            $amount = $data['amount'];
        } else {
            $msg .= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        // find currency

        $currency_id = _post('currency');
        $currency_find = Currency::where('iso_code', $currency_id)->first();
        if ($currency_find) {
            $currency = $currency_find->id;
            $currency_symbol = $currency_find->symbol;
            $currency_rate = $currency_find->rate;
        } else {
            $currency = 0;
            $currency_symbol = $config['currency_code'];
            $currency_rate = 1.0;
        }

        $idate = _post('idate');
        $its = strtotime($idate);
        $duedate = _post('ddate');
        $repeat = _post('repeat');
        $nd = $idate;
        if ($repeat == '0') {
            $r = '0';
        } elseif ($repeat == 'daily') {
            $r = '+1 day';
            $nd = date('Y-m-d', strtotime('+1 day', $its));
        } elseif ($repeat == 'week1') {
            $r = '+1 week';
            $nd = date('Y-m-d', strtotime('+1 week', $its));
        } elseif ($repeat == 'weeks2') {
            $r = '+2 weeks';
            $nd = date('Y-m-d', strtotime('+2 weeks', $its));
        } elseif ($repeat == 'weeks3') {
            $r = '+3 weeks';
            $nd = date('Y-m-d', strtotime('+3 weeks', $its));
        } elseif ($repeat == 'weeks4') {
            $r = '+4 weeks';
            $nd = date('Y-m-d', strtotime('+4 weeks', $its));
        } elseif ($repeat == 'month1') {
            $r = '+1 month';
            $nd = date('Y-m-d', strtotime('+1 month', $its));
        } elseif ($repeat == 'months2') {
            $r = '+2 months';
            $nd = date('Y-m-d', strtotime('+2 months', $its));
        } elseif ($repeat == 'months3') {
            $r = '+3 months';
            $nd = date('Y-m-d', strtotime('+3 months', $its));
        } elseif ($repeat == 'months6') {
            $r = '+6 months';
            $nd = date('Y-m-d', strtotime('+6 months', $its));
        } elseif ($repeat == 'year1') {
            $r = '+1 year';
            $nd = date('Y-m-d', strtotime('+1 year', $its));
        } elseif ($repeat == 'years2') {
            $r = '+2 years';
            $nd = date('Y-m-d', strtotime('+2 years', $its));
        } elseif ($repeat == 'years3') {
            $r = '+3 years';
            $nd = date('Y-m-d', strtotime('+3 years', $its));
        } else {
            $msg .= 'Date Parsing Error <br /> ';
        }

        if ($msg == '') {
            $business_number = _post('business_number');

            if (
                $business_number != '' &&
                $u->business_number != $business_number
            ) {
                $u->business_number = $business_number;
                $u->save();
            }

            $is_same_state = 1;

            if ($config['tax_system'] == 'India') {
                $place_of_supply = _post('place_of_supply');

                $is_same_state = $place_of_supply == $config['business_location'] ? 1 : 0;
            }

            $qty = $data['qty'];
            $item_number = $data['item_code'];
            $taxed = isset($data['taxed']) ? $data['taxed'] : false;

            $sTotal = '0';
            $taxTotal = '0';
            $i = '0';
            $a = [];
            $taxval = '0.00';
            $taxname = '';
            $taxrate = '0.00';

            $taxed_amount = 0.0;
            $lamount = 0.0;

            $taxval = '0.00';
            $taxname = '';

            foreach ($amount as $samount) {
                $samount = Finance::amount_fix($samount);
                $a[$i] = $samount;
                $sqty = $qty[$i];
                $sqty = Finance::amount_fix($sqty);

                $lTaxRate = $taxed[$i];

                $lTaxRate = Finance::amount_fix($lTaxRate);

                $sTotal += $samount * $sqty;
                $lamount = $samount * $sqty;

                $lTaxVal = ($lamount * $lTaxRate) / 100;

                $taxed_amount += $lTaxVal;

                $i++;
            }

            $invoicenum = _post('invoicenum');
            $cn = _post('cn');
            $fTotal = $sTotal;

            $discount_amount = _post('discount_amount');
            $discount_type = _post('discount_type');
            $discount_value = '0.00';
            if ($discount_amount == '0' || $discount_amount == '') {
                $actual_discount = '0.00';
            } elseif ($discount_type == 'f') {
                $actual_discount = $discount_amount;
                $discount_value = $discount_amount;
            } else {
                $discount_type = 'p';
                $actual_discount = ($sTotal * $discount_amount) / 100;
                $discount_value = $discount_amount;
            }

            $actual_discount = number_format(
                (float) $actual_discount,
                2,
                '.',
                ''
            );
            $fTotal = $fTotal + $taxed_amount - $actual_discount;

            $status = _post('status');

            $receipt_number = _post('receipt_number');

            $title = _post('title');

            $d = ORM::for_table('sys_invoices')->find($iid);
            if ($d) {
                $d->userid = $cid;
                $d->account = $u['account'];
                $d->date = $idate;
                $d->duedate = $duedate;
                $d->discount_type = $discount_type;
                $d->discount_value = $discount_value;
                $d->discount = $actual_discount;
                $d->subtotal = $sTotal;
                $d->total = $fTotal;
                $d->tax = $taxed_amount;
                $d->taxname = '';
                $d->taxrate = 0.0;
                $d->notes = $notes;
                $d->r = $r;
                $d->nd = $nd;
                $d->invoicenum = $invoicenum;
                $d->cn = $cn;

                if ($status == 'Draft') {
                    $d->status = 'Draft';
                } elseif ($status == 'Published') {
                    $d->status = 'Unpaid';
                } else {
                }

                $d->currency = $currency;
                $d->currency_symbol = $currency_symbol;
                $d->currency_rate = $currency_rate;
                $d->show_quantity_as = $show_quantity_as;

                $d->currency_iso_code = $currency_id;

                $d->receipt_number = $receipt_number;

                $d->title = $title;

                $d->save();

                $invoiceid = $iid;
                $description = $data['desc'];
                $i = '0';
                $inventory_items_adjust = ORM::for_table('sys_invoiceitems')
                    ->where('invoiceid', $iid)
                    ->find_array();
                foreach ($inventory_items_adjust as $i_adjust) {
                    Inventory::increaseByItemNumber(
                        $i_adjust['itemcode'],
                        $i_adjust['qty']
                    );
                }

                $x = ORM::for_table('sys_invoiceitems')
                    ->where('invoiceid', $iid)
                    ->delete_many();

                foreach ($description as $item) {
                    $samount = $a[$i];
                    $samount = Finance::amount_fix($samount);
                    if ($item == '' && $samount == '0.00') {
                        $i++;
                        continue;
                    }

                    $tax_rate = $taxed[$i];

                    $sqty = $qty[$i];
                    $sqty = Finance::amount_fix($sqty);
                    $ltotal = $samount * $sqty;
                    $d = ORM::for_table('sys_invoiceitems')->create();
                    $d->invoiceid = $invoiceid;
                    $d->userid = $cid;
                    $d->description = $item;
                    $d->qty = $sqty;
                    $d->amount = $samount;
                    $d->total = $ltotal;
                    if ($tax_rate == '' || $tax_rate == '0') {
                        $tax_rate = 0.0;
                        $d->taxed = '0';
                    } else {
                        $tax_rate = $taxed[$i];
                        $d->taxed = '1';
                    }

                    $item_taxed_amount = round(
                        ($tax_rate * 100) / ($sqty * $samount),
                        2
                    );

                    $d->type = '';
                    $d->relid = '0';
                    $d->itemcode = $item_number[$i];
                    $d->taxamount = $item_taxed_amount;
                    $d->tax_rate = $tax_rate;
                    $d->duedate = date('Y-m-d');
                    $d->paymentmethod = '';
                    $d->notes = '';
                    $d->save();

                    // decrease inventory

                    Inventory::decreaseByItemNumber($item_number[$i], $sqty);
                    $i++;
                }

                $app->emit('invoices_edit_post_done', [$invoiceid]);
                echo $invoiceid;
            }
        } else {
            echo $msg;
        }

        break;

    case 'delete':
        AppEvent::trigger('invoices/delete/');
        $id = $routes['2'];
        if (APP_STAGE == 'Demo') {
            r2(
                U . 'accounts/list',
                'e',
                'Sorry! Deleting Account is disabled in the demo mode.'
            );
        }

        $d = ORM::for_table('crm_accounts')->find($id);
        if ($d) {
            $d->delete();
            r2(U . 'accounts/list', 's', $_L['account_delete_successful']);
        }

        break;

    case 'print':
        AppEvent::trigger('invoices/print/');
        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find($id);
        if ($d) {
            // find all activity for this user

            $items = ORM::for_table('sys_invoiceitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_many();

            // find the user

            $a = ORM::for_table('crm_accounts')->find($d['userid']);
            require APP_SYSTEM_PATH . '/lib/invoices/render.php';
        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'pdf':
        AppEvent::trigger('invoices/pdf/');
        $id = $routes['2'];
        $d = ORM::for_table('sys_invoices')->find($id);
        if ($d) {
            // find all activity for this user

            $items = ORM::for_table('sys_invoiceitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_many();
            $trs_c = ORM::for_table('sys_transactions')
                ->where('iid', $id)
                ->count();
            $trs = ORM::for_table('sys_transactions')
                ->where('iid', $id)
                ->order_by_desc('id')
                ->find_many();

            // find the user

            $a = ORM::for_table('crm_accounts')->find($d['userid']);
            $i_credit = $d['credit'];
            $i_due = '0.00';
            $i_total = $d['total'];
            $i_due = $d['credit'] != '0.00' ? $i_total - $i_credit : $d['total'];

            $i_due = number_format(
                $i_due,
                2,
                $config['dec_point'],
                $config['thousands_sep']
            );
            $cf = ORM::for_table('crm_customfields')
                ->where('showinvoice', 'Yes')
                ->order_by_asc('id')
                ->find_many();
            $dispid = $d['cn'] != '' ? $d['cn'] : $d['id'];

            $in = $d['invoicenum'] . $dispid;
            define('_MPDF_PATH', 'system/lib/mpdf/');
            require APP_SYSTEM_PATH . '/lib/mpdf/mpdf.php';

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if ($config['pdf_font'] == 'default') {
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }

            $mpdf = new mPDF($pdf_c, 'A4', '', '', 20, 15, 15, 25, 10, 10);
            $mpdf->SetProtection(['print']);
            $mpdf->SetTitle($config['CompanyName'] . ' Invoice');
            $mpdf->SetAuthor($config['CompanyName']);
            $mpdf->SetWatermarkText(ib_lan_get_line($d['status']));
            $mpdf->showWatermarkText = true;
            $mpdf->watermark_font = $ib_w_font;
            $mpdf->watermarkTextAlpha = 0.1;
            $mpdf->SetDisplayMode('fullpage');
            if ($config['pdf_font'] == 'AdobeCJK') {
                $mpdf->useAdobeCJK = true;
                $mpdf->autoScriptToLang = true;
                $mpdf->autoLangToFont = true;
            }

            AppEvent::trigger('invoices/before_pdf_render/');
            ob_start();
            require APP_SYSTEM_PATH . '/lib/invoices/pdf-x2.php';

            $html = ob_get_contents();
            ob_end_clean();
            $mpdf->WriteHTML($html);
            $pdf_return = 'inline';
            $r_type = isset($routes[3]) ? $routes[3] : 'inline';

            if ($r_type == 'dl') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); // D
            } elseif ($r_type == 'inline') {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); // D
            } elseif ($r_type == 'store') {
                $mpdf->Output('storage/temp/Invoice_' . $in . '.pdf', 'F'); // D
            } else {
                $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); // D
            }
        }

        break;

    case 'markpaid':
        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find($iid);
        if ($d) {
            // previous status
            $prev_status = $d->status;

            if ($prev_status == 'Cancelled') {
                // update the inventory again

                $items = InvoiceItem::where('invoiceid', $iid)->get();

                foreach ($items as $item) {
                    if ($item->itemcode != '') {
                        Inventory::decreaseByItemNumber(
                            $item->itemcode,
                            $item->qty
                        );
                    }
                }
                //
            }

            //

            $d->status = 'Paid';
            $d->save();
            AppEvent::trigger('invoices/markpaid/', $invoice = $d);
            _msglog('s', 'Invoice marked as Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markunpaid':
        AppEvent::trigger('invoices/markunpaid/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find($iid);
        if ($d) {
            // previous status
            $prev_status = $d->status;

            if ($prev_status == 'Cancelled') {
                // update the inventory again

                $items = InvoiceItem::where('invoiceid', $iid)->get();

                foreach ($items as $item) {
                    if ($item->itemcode != '') {
                        Inventory::decreaseByItemNumber(
                            $item->itemcode,
                            $item->qty
                        );
                    }
                }
                //
            }

            //

            $d->status = 'Unpaid';
            $d->save();
            _msglog('s', 'Invoice marked as Un Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markcancelled':
        AppEvent::trigger('invoices/markcancelled/');

        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find($iid);
        if ($d) {
            $d->status = 'Cancelled';
            $d->save();

            $items = InvoiceItem::where('invoiceid', $iid)->get();

            foreach ($items as $item) {
                if ($item->itemcode != '') {
                    Inventory::increaseByItemNumber(
                        $item->itemcode,
                        $item->qty
                    );
                }
            }

            $invoice = $d;
            $app->emit('invoice_cancelled', [&$invoice]);

            _msglog('s', 'Invoice marked as Cancelled');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markpartiallypaid':
        AppEvent::trigger('invoices/markpartiallypaid/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_invoices')->find($iid);
        if ($d) {
            $d->status = 'Partially Paid';
            $d->save();
            _msglog('s', 'Invoice marked as Partially Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'set-status':

        $invoice_id = _post('invoice_id');
        $invoice = Invoice::find($invoice_id);
        if($invoice)
        {
            $invoice->status = _post('status');
            $invoice->save();
            _msglog('s', __('Data updated.'));
        }

        break;

    case 'set-purchase-status':

        $invoice_id = _post('invoice_id');
        $invoice = Invoice::find($invoice_id);
        if($invoice)
        {
            $invoice->purchase_status = _post('status');
            $invoice->save();
            _msglog('s', __('Data updated.'));
        }

        break;

        case 'set-shipping-status':

            $invoice_id = _post('invoice_id');
            $invoice = Invoice::find($invoice_id);
            if($invoice)
            {
                $invoice->shipping_status = _post('status');
                $invoice->save();
                _msglog('s', __('Data updated.'));
            }

            break;

    case 'add-payment':
        $customers_all_data = has_access(
            $user->roleid,
            'customers',
            'all_data'
        );

        AppEvent::trigger('invoices/add-payment/');
        $sid = $routes['2'];
        $d = Invoice::find($sid);
        if ($d) {
            $itotal = $d['total'];
            $ic = $d['credit'];
            $np = $itotal - $ic;
            $a_opt = '';

            $a = ORM::for_table('sys_accounts');

            if (!$customers_all_data) {
                $a->where('o', $user->id);
            }

            $a = $a->find_many();

            foreach ($a as $acs) {
                $a_opt .=
                    '<option value="' .
                    $acs['id'] .
                    '">' .
                    $acs['account'] .
                    '</option>';
            }

            $pms_opt = '';

            $pms = ORM::for_table('sys_pmethods')
                ->order_by_asc('sorder')
                ->find_many();
            foreach ($pms as $pm) {
                $pms_opt .=
                    '<option value="' .
                    $pm['name'] .
                    '">' .
                    $pm['name'] .
                    '</option>';
            }

            $cats_opt = '';
            $cats = ORM::for_table('sys_cats')
                ->where('type', 'Income')
                ->order_by_asc('sorder')
                ->find_many();
            foreach ($cats as $cat) {
                $cats_opt .=
                    '<option value="' .
                    $cat['id'] .
                    '">' .
                    $cat['name'] .
                    '</option>';
            }

            $currency_opt = '';
            $currencies = Currency::all();

            $currency_iso_code = $d['currency_iso_code'];

            $currency = Currency::getAllCurrencies();

            $invoice_display_id = Invoice::getInvoiceNumberById($sid);

            $currency_symbol = $config['currency_code'];
            $currency_decimal_point = $config['dec_point'];
            $thousands_separator = $config['thousands_sep'];

            if (isset($currency[$currency_iso_code])) {
                $selected_currency = $currency[$currency_iso_code];
                $currency_symbol = $selected_currency['symbol'];
                $currency_decimal_point = $selected_currency['decimal_mark'];
                $thousands_separator =
                    $selected_currency['thousands_separator'];
            }

            $currency_opt =
                '<div class="mb-3">
    <label for="amount">' .
                $_L['Amount'] .
                ' [' .
                $currency_iso_code .
                ']</label>
    <input type="text" id="amount" name="amount" class="form-control amount"   data-a-sign="' .
                $currency_symbol .
                ' " data-a-dec="' .
                $currency_decimal_point .
                '" data-a-sep="' .
                $thousands_separator .
                '"
data-d-group="3" value="">
  </div>';

            $secondary_currency = secondary_currency();
            $payment_amount = $np;
            $invoice_currency = $d['currency_symbol'] == '' ? $config['currency_code'] : $d['currency_symbol'];

            echo '<div class="mx-auto" style="max-width: 650px;">
<div class="panel mb-0 rounded-0">
<div class="panel-hdr">
<h2>#' .
                $invoice_display_id .
                '</h2>
</div>
<div class="panel-container">
<div class="panel-content">

<h3>' .
                $_L['Invoice Total'] .
                ': <span class="amount" data-a-sign="' .
                $invoice_currency .
                ' ">' .
                $d['total'] .
                '</span></h3>
<hr>
<form class="form-horizontal" role="form" id="form_add_payment" method="post">
<div class="mb-3">
    <label for="subject">' .
                $_L['Account'] .
                '</label>
    <select id="account" name="account">
                            <option value="">' .
                $_L['Choose an Account'] .
                '</option>

' .
                $a_opt .
                '

                        </select>
  </div>

<div class="mb-3">
    <label for="date">' .
                $_L['Date'] .
                '</label>
    <input type="text" class="form-control datepicker"  value="' .
                date('Y-m-d') .
                '" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
  </div>

<div class="mb-3">
    <label for="description">' .
                $_L['Description'] .
                '</label>
    <input type="text" id="description" name="description" class="form-control" value="' .
                $invoice_display_id .
                ' ' .
                $_L['Payment'] .
                '">
  </div>
  
  
' .
                $currency_opt .
                '



  
  
<div class="mb-3">
    <label for="cats">' .
                $_L['Category'] .
                '</label>
    <select id="cats" name="cats">
                             <option value="0">' .
                $_L['Uncategorized'] .
                '</option>

' .
                $cats_opt .
                '

                        </select>
  </div>
  <div class="mb-3">
    <label for="payer_name">' .
                $_L['Payer'] .
                '</label>
    <input type="text" id="payer_name" name="payer_name" class="form-control" value="' .
                $d['account'] .
                '" disabled>
  </div>
  

   <div class="mb-3">
    <label for="subject">' .
                $_L['Method'] .
                '</label>
    <select id="pmethod" name="pmethod">
                                <option value="">' .
                $_L['Select Payment Method'] .
                '</option>


                                ' .
                $pms_opt .
                '


                            </select>
  </div>
  
  <div class="mb-3">
                                    <label for="ref">'.$_L['Ref'].'#</label>
                                    <input type="text" class="form-control" id="ref" name="ref">
                                    
                                </div>

<input type="hidden" name="iid" value="' .
                $d['id'] .
                '">
<input type="hidden" name="payer" value="' .
                $d['userid'] .
                '">
<input type="hidden" name="currency" value="' .
                $d['currency_iso_code'] .
                '">
<button id="save_payment" class="btn btn-primary">' .
                $_L['Save'] .
                '</button>
</form>






</div>
</div>
</div>
</div>';
        } else {
            exit('Invoice Not Found');
        }

        break;



    case 'add-payment-post':
        AppEvent::trigger('invoices/add-payment-post/');
        $msg = '';
        $iid = _post('iid');
        $account = _post('account');

        if ($account == '') {
            $msg .= $_L['Select An Account'] . '<br />';
        }

        $date = _post('date');
        $amount = _post('amount');

        $currency_iso_code = _post('currency');

        $i = ORM::for_table('sys_invoices')->find($iid);

        if(empty($currency_iso_code))
        {
            $currency_iso_code = $i['currency_iso_code'] ?? $config['home_currency'];
        }

        $amount = createFromCurrency($amount, $currency_iso_code);

        $rate = 1.00;

        if(!empty($currency_iso_code) && ($currency_iso_code != $config['home_currency'])){
            $find_currency = Currency::where('iso_code',$currency_iso_code)->first();
            if($find_currency)
            {
                $rate = $find_currency->rate;
            }
        }

        $payerid = _post('payer');
        $pmethod = _post('pmethod');
        $ref = _post('ref');
        if ($payerid == '') {
            $payerid = '0';
        }

        $payer = '';

        if ($payerid != '0') {
            $payer_find = Contact::find($payerid);

            if ($payer_find) {
                $payer = $payer_find->account;
            }
        }

        $currencies = Currency::all();
        $tr_currency = '0';
        $tr_currency_symbol = '';
        $tr_currency_rate = '1.0000';

        $cat = _post('cats',0);
        $category_name = '';
        $cat_id = 0;
        if(!empty($cat)) {
            $catetory = TransactionCategory::find($cat);
            if($catetory)
            {
                $category_name = $catetory->name;
                $cat_id = $catetory->id;
            }
        }



        $invoice = Invoice::find($iid);

        $currency_iso_code = $config['home_currency'];

        if ($invoice && $invoice->currency_iso_code) {
            $currency_iso_code = $invoice->currency_iso_code;
        }

        if ($payerid == '') {
            $msg .= 'Payer Not Found<br />';
        }

        $description = _post('description');

        if ($description == '') {
            $msg .= $_L['description_error'] . '<br />';
        }

        if ($account == '') {
            $msg .= 'Please choose an Account<br />';
        }

        if (is_numeric($amount) == false) {
            $msg .= $_L['amount_error'] . '<br />';
        }

        if ($msg == '') {
            $account_find = Account::find($account);
            $d = new Transaction();
            $d->account = $account_find->account;
            $d->account_id = $account_find->id;
            $d->type = 'Income';
            $d->payerid = $payerid;
            $d->amount = $amount;
            $d->category = $category_name;
            $d->cat_id = $cat_id;
            $d->method = $pmethod;
            $d->ref = $ref;
            $d->tags = '';
            $d->description = $description;
            $d->date = $date;
            $d->dr = '0.00';
            $d->cr = $amount;

            $d->iid = $iid;
            $d->currency = $tr_currency;
            $d->currency_symbol = $tr_currency_symbol;
            $d->currency_rate = $rate;

            $d->currency_iso_code = $currency_iso_code;

            $d->payer = $payer;
            $d->payee = '';

            $d->status = 'Cleared';
            $d->tax = '0.00';
            $d->aid = $user->id;

            $d->vid = _raid(8);

            $d->updated_at = date('Y-m-d H:i:s');

            $d->save();
            $tid = $d->id;
            _log(
                'New Deposit: ' .
                    $description .
                    ' [TrID: ' .
                    $tid .
                    ' | Amount: ' .
                    $amount .
                    ']',
                'Admin',
                $user->id
            );
            _msglog('s', 'Transaction Added Successfully');

            $i = ORM::for_table('sys_invoices')->find($iid);
            if ($i) {
                $pc = $i['credit'];
                $it = $i['total'];
                $dp = $it - $pc;
                $i->status = $dp == $amount || $dp < $amount ? 'Paid' : 'Partially Paid';
                $i->credit = $pc + $amount;
                $i->save();
            }

            echo $tid;
        } else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }

        break;

    case 'mail_invoice_':
        AppEvent::trigger('invoices/mail_invoice_/');
        $sid = $routes['2'];
        $etpl = $routes['3'];
        $d = ORM::for_table('sys_invoices')->find($sid);
        if ($d) {
            $a = ORM::for_table('crm_accounts')->find($d['userid']);
            $msg = Invoice::gen_email($sid, $etpl);
            if ($msg) {
                $subj = $msg['subject'];
                $message_o = $msg['body'];
                $email = $msg['email'];
                $name = $msg['name'];
            } else {
                $subj = '';
                $message_o = '';
                $email = '';
                $name = '';
            }

            $dispid = $d['cn'] != '' ? $d['cn'] : $d['id'];

            $in = $d['invoicenum'] . $dispid;

            if ($a['secondary_email'] != '') {
                $email = $a['secondary_email'];
            }

            $inv_files = Invoice::files($sid);

            $attachments_html = '';

            if (count($inv_files) > 0) {
                $attach_file_option = '';
                foreach ($inv_files as $inv_file) {
                    $attach_file_option .=
                        '<div class="checkbox c-checkbox">
                          <label>
                            <input type="checkbox" name="attach_file[]" value="' .
                        $inv_file->id .
                        '" checked><span class="fa fa-check"></span>  <i class="fa fa-paperclip"></i> ' .
                        $inv_file->title .
                        '
                          </label>
                        </div>';
                }

                $attachments_html =
                    ' <div class="hr-line-dashed"></div>
  
  <div class="mb-3">
    <label for="attach_pdf">Other Files</label>
    ' .
                    $attach_file_option .
                    '
  </div>';
            }

            echo '


<div class="mx-auto" style="max-width: 650px;">
    <div class="panel mb-0 rounded-0">
    
    <div class="panel-hdr">
    <h3>' .
                $_L['Invoice'] .
                ' #' .
                $d['id'] .
                '</h3>
</div>

<div class="panel-container">
<div class="panel-content">
<form class="form-horizontal" role="form" id="email_form" method="post">


<div class="mb-3">
    <label for="toemail">' .
                $_L['To'] .
                '</label>
    <input type="email" id="toemail" name="toemail" class="form-control" value="' .
                $email .
                '">
  </div>

  <div class="mb-3">
    <label for="ccemail">' .
                $_L['Cc'] .
                '</label>
    <input type="email" id="ccemail" name="ccemail" class="form-control" value="">
  </div>

  <div class="mb-3">
    <label for="bccemail">' .
                $_L['Bcc'] .
                '</label>
    <input type="email" id="bccemail" name="bccemail" class="form-control" value="">
      <span class="help-block"><a href="#" id="send_bcc_to_admin">' .
                $_L['Send Bcc to Admin'] .
                '</a></span>
  </div>

    <div class="mb-3">
    <label for="subject">' .
                $_L['Subject'] .
                '</label>
    <input type="text" id="subject" name="subject" class="form-control" value="' .
                $subj .
                '">
  </div>

  <div class="mb-3">
    <label for="subject" class="mb-3">' .
                $_L['Message Body'] .
                '</label>
    <textarea class="form-control sysedit" rows="3" name="message" id="message">' .
                $message_o .
                '</textarea>
      <input type="hidden" id="toname" name="toname" value="' .
                $name .
                '">
      <input type="hidden" id="i_cid" name="i_cid" value="' .
                $a['id'] .
                '">
      <input type="hidden" id="i_iid" name="i_iid" value="' .
                $d['id'] .
                '">
  </div>


<div class="mb-3">

    <label for="attach_pdf"></label>
    <div class="custom-checkbox c-checkbox">
                          <label>
                            <input type="checkbox" name="attach_pdf" id="attach_pdf" value="Yes" checked> ' .
                $_L['Invoice'] .
                '_' .
                $in .
                '.pdf
                          </label>
                        </div>
  </div>
  
' .
                $attachments_html .
                '

<button id="send" class="btn btn-primary">' .
                $_L['Send'] .
                '</button>
</form>
</div>
</div>
    
</div>

</div>




';
        } else {
            exit('Invoice Not Found');
        }

        break;

    case 'send_email':
        Event::trigger('invoices/send_email/');
        $msg = '';
        $email = _post('toemail');
        $cc = _post('ccemail');
        $bcc = _post('bccemail');
        $subject = _post('subject');
        $toname = _post('toname');
        $cid = _post('i_cid');
        $iid = _post('i_iid');
        $d = ORM::for_table('sys_invoices')->find($iid);
        $dispid = $d['cn'] != '' ? $d['cn'] : $d['id'];

        $in = $d['invoicenum'] . $dispid;
        $message = $data['message'];

        $attach_pdf = _post('attach_pdf');
        $attachment_path = '';
        $attachment_file = '';
        if ($attach_pdf == 'Yes') {
            Invoice::pdf($iid, 'store');
            $attachment_path =
                'storage/temp/' . __('Invoice') . '_' . $in . '.pdf';
            $attachment_file = __('Invoice') . '_' . $in . '.pdf';
            ray($attachment_file, $attachment_path);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg .= 'Invalid Email <br />';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $cc = '';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $bcc = '';
        }

        if ($subject == '') {
            $msg .= 'Subject is Required <br />';
        }

        if ($message == '') {
            $msg .= 'Message is Required <br />';
        }

        if ($msg == '') {
            $email_config = EmailConfig::first();

//            if ($email_config) {
//                if ($email_config->method == 'smtp') {
//                    $transport = (new Swift_SmtpTransport(
//                        $email_config->host,
//                        $email_config->port,
//                        $email_config->secure
//                    ))
//                        ->setUsername($email_config->username)
//                        ->setPassword($email_config->password)
//                        ->setStreamOptions([
//                            'ssl' => [
//                                'allow_self_signed' => true,
//                                'verify_peer' => false,
//                            ],
//                        ]);
//                } else {
//                    $transport = new Swift_SendmailTransport(
//                        '/usr/sbin/sendmail -bs'
//                    );
//                }
//
//                $mailer = new Swift_Mailer($transport);
//
//                $receiver = [];
//
//                $receiver[] = [
//                    $email => $toname,
//                ];
//
//                $message_object = (new Swift_Message($subject))
//                    ->setFrom([$config['sysEmail'] => $config['CompanyName']])
//                    ->setTo([$email => $toname])
//                    ->setBody($message, 'text/html');
//
//                if (!empty($cc)) {
//                    $message_object->setCc([$cc]);
//                }
//
//                if (!empty($bcc)) {
//                    $message_object->setBcc([$bcc]);
//                }
//
//                if ($attachment_path != '') {
//                    $message_object->attach(
//                        Swift_Attachment::fromPath($attachment_path)
//                    );
//                }
//
//                if (isset($data['attach_file'])) {
//                    $other_files = $data['attach_file'];
//
//                    foreach ($other_files as $other_file) {
//                        $file = Document::find($other_file);
//
//                        if ($file) {
//                            $message_object->attach(
//                                Swift_Attachment::fromPath(
//                                    'storage/docs/' . $file->file_path
//                                )->setFilename(
//                                    $file->title . '.' . $file->file_mime_type
//                                )
//                            );
//                        }
//                    }
//                }
//
//                $result = $mailer->send($message_object);
//            }

            if ($email_config) {
                // Set up transport based on SMTP or Sendmail method
                if ($email_config->method == 'smtp') {
                    $dsn = sprintf(
                        'smtp://%s:%s@%s:%d?encryption=%s',
                        urlencode($email_config->username),
                        urlencode($email_config->password),
                        $email_config->host,
                        $email_config->port,
                        $email_config->secure
                    );
                    $transport = Transport::fromDsn($dsn);
                } else {
                    $transport = Transport::fromDsn('sendmail://default');
                }

                $mailer = new Mailer($transport);

                // Create the email message
                $email_message = (new SymfonyEmail())
                    ->from(new SymfonyAddress($config['sysEmail'], $config['CompanyName']))
                    ->to(new SymfonyAddress($email, $toname))
                    ->subject($subject)
                    ->html($message);

                // Add CC and BCC if provided
                if (!empty($cc)) {
                    $email_message->cc($cc);
                }

                if (!empty($bcc)) {
                    $email_message->bcc($bcc);
                }

                // Attach main attachment if provided
                if ($attachment_path != '') {
                    $email_message->attachFromPath($attachment_path);
                }

                // Attach additional files from data if available
                if (isset($data['attach_file'])) {
                    $other_files = $data['attach_file'];
                    foreach ($other_files as $other_file) {
                        $file = Document::find($other_file);
                        if ($file) {
                            $file_path = 'storage/docs/' . $file->file_path;
                            $filename = $file->title . '.' . $file->file_mime_type;
                            $email_message->attachFromPath($file_path, $filename);
                        }
                    }
                }

                // Send the email and get the result
                $mailer->send($email_message);
            }


            Email::_log($user->id, $email, $subject, $message, $iid);

            echo $_L['Email Sent'];
        } else {
            echo $msg;
        }

        break;

    case 'stop_recurring':
        AppEvent::trigger('invoices/stop_recurring/');
        $id = $routes['2'];
        $id = str_replace('sid', '', $id);
        $d = ORM::for_table('sys_invoices')->find($id);
        if ($d) {
            $d->r = '0';
            $d->save();
            r2(U . 'invoices/list-recurring', 's', $_L['Data Updated']);
        } else {
            echo 'Invoice not found';
        }

        break;

    case 'export_csv':
        $fileName = 'transactions_' . time() . '.csv';
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Expires: 0");
        header("Pragma: public");
        $fh = @fopen('php://output', 'w');
        $headerDisplayed = false;

        // $results = ORM::for_table('crm_Accounts')->find_array();

        $results = db_find_array('sys_invoices');
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

    case 'payments':
        $d = ORM::for_table('sys_transactions')
            ->where_not_equal('iid', '0')
            ->limit(2500)
            ->find_array();
        $ui->assign('d', $d);
        view('payments');
        break;

    case 'clone':
        $id = route(2);
        $new_id = Invoice::cloneInvoice($id);
        if ($new_id) {
            r2(U . 'invoices/edit/' . $new_id, 's', $_L['Cloned successfully']);
        }

        break;

    case 's':
        is_dev();
        $t = new Schema('ib_invoice_access_log');
        $t->drop();
        $t->add('lid', 'int', '11', '0');
        $t->add('cid', 'int', '11', '0');
        $t->add('iid', 'int', '11', '0');
        $t->add('company_id', 'int', '11', '0');
        $t->add('customer', 'varchar', '200');
        $t->add('ip', 'varchar', '50');
        $t->add('browser', 'varchar', '200');
        $t->add('referer', 'varchar', '200');
        $t->add('city', 'varchar', '200');
        $t->add('postal_code', 'varchar', '50');
        $t->add('country', 'varchar', '200');
        $t->add('country_iso', 'varchar', '20');
        $t->add('viewed_at', 'varchar', '200');
        $t->add('lat', 'varchar', '100');
        $t->add('lon', 'varchar', '100');
        $t->save();
        add_option('maxmind_installed', '0');
        add_option('maxmind_db_version', '');
        break;

    case 'pos':
        $extra_fields = '';
        $extra_jq = '';
        $ui->assign('extra_fields', $extra_fields);
        $recurring = isset($routes['2']) && $routes['2'] == 'recurring';

        $currencies = Currency::all();
        $ui->assign('recurring', $recurring);
        $ui->assign('currencies', $currencies);
        if (isset($routes['3']) && $routes['3'] != '') {
            $p_cid = $routes['3'];
            $p_d = ORM::for_table('crm_accounts')->find($p_cid);
            if ($p_d) {
                $ui->assign('p_cid', $p_cid);
            }
        } else {
            $ui->assign('p_cid', '');
        }

        $c = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->select('company')
            ->select('email')
            ->order_by_desc('id')
            ->find_many();
        $ui->assign('c', $c);
        $t = ORM::for_table('sys_tax')->find_many();
        $ui->assign('t', $t);
        $ui->assign('idate', date('Y-m-d'));
        AppEvent::trigger('add_invoice_rendering_form');
        view('pos');
        break;

    case 'sms_invoice_':
        $sid = $routes['2'];
        $mtpl = $routes['3'];

        $sms = Invoice::genSMS($sid, $mtpl);

        if ($sms) {
            $message = $sms['sms'];
            $to = $sms['to'];
        } else {
            $message = '';
            $to = '';
        }
        view('modal_sms_invoice', [
            'message' => $message,
            'to' => $to,
            'invoice_id' => $sid,
        ]);

        break;

    case 'create-from-ticket':
        if (!has_access($user->roleid, 'sales', 'all_data')) {
            permissionDenied();
        }

        $ticket_id = route(2);

        $receipt_number = _post('receipt_number');

        $save = Invoice::fromTicket($ticket_id, [
            'receipt_number' => $receipt_number,
        ]);

        if ($save['success']) {
            api_response([
                'success' => true,
                'url' => U . 'invoices/edit/' . $save['invoice'],
                's',
                'Invoice created, now you can edit the invoice.',
            ]);
        } else {
            api_response([
                'success' => true,
                'url' => U . 'tickets/admin/view/' . $ticket_id,
                'e',
                $save['error'],
            ]);
        }

        break;

    case 'filter':
        $data = request()->all();
        $report_range = $data['reportrange'];
        $report_range = explode('-', $report_range);
        $from = trim($report_range[0]);
        $to = trim($report_range[1]);

        $invoice_group_id = null;

        if(!empty($config['invoice_group']))
        {
            $invoice_group_id = $data['invoice_group_id'] ?? null;
        }


        $staff_id = $data['staff_id'] ?? null;

        $invoices = Invoice::whereBetween('date', [$from, $to]);

        $type = $data['type'] ?? null;

        $invoices = $type == 'credit-notes' ? $invoices->where('type', 'Credit Note') : $invoices->where('type', 'Invoice');

        if (!empty($data['customer'])) {
            $customer = (int) $data['customer'];
            if ($customer !== 0) {
                $invoices = $invoices->where('userid', $customer);
            }
        }

        if (!empty($data['status'])) {
            $status = $data['status'];
            $invoices = $invoices->where('status', $status);
        }

        if(!empty($config['invoice_items_purchasing'])){
            if (!empty($data['purchase_status'])) {
                if($data['purchase_status'] == 'Unknown')
                {
                    $invoices = $invoices->whereNull('purchase_status');
                }
                else{
                    $invoices = $invoices->where('purchase_status', $data['purchase_status']);
                }
            }
        }

        if(!empty($config['invoice_items_shipping'])){
            if (!empty($data['shipping_status'])) {
                if($data['shipping_status'] == 'Unknown')
                {
                    $invoices = $invoices->whereNull('shipping_status');
                }
                else{
                    $invoices = $invoices->where('shipping_status', $data['shipping_status']);
                }
            }
        }

        if(!empty($staff_id))
        {
            $invoices = $invoices->where('aid', $staff_id);
        }

        if(!empty($invoice_group_id))
        {
            $invoices = $invoices->where('group_id', $invoice_group_id);
        }

        if(!empty($config['invoice_single_service']))
        {
            $service_id = $data['service_id'] ?? null;
            if($service_id)
            {
                $invoices = $invoices->where('service_id', $service_id);
            }
        }

        $group_id = $data['group_id'] ?? null;

        $contact_ids = [];

        if(!empty($group_id))
        {
            $contact_ids = Contact::where('gid', $group_id)
                ->select('id')
                ->get()
                ->pluck('id')
                ->toArray();

        }

        if (!empty($contact_ids)) {
            $invoices = $invoices->whereIn('userid', $contact_ids);
        }


        $invoices = $invoices->orderBy('id', 'desc')->get();

        $invoices_by_currency = $invoices->groupBy('currency_iso_code')->all();
        // Total by currency
        $total_by_currency = [];
        foreach ($invoices_by_currency as $currency => $invoices) {
            $total_by_currency[$currency] = $invoices->sum('total');
        }

        $total_invoices_found = $invoices->count();

        $customers = Contact::customers()
            ->keyBy('id')
            ->all();

        $has_delete_access = false;
        if (has_access($user->roleid, 'sales', 'delete')) {
            $has_delete_access = true;
        }

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


        view('invoices_filter_result', [
            'invoices' => $invoices,
            'customers' => $customers,
            'has_delete_access' => $has_delete_access,
            'type' => $type,
            'invoice_groups' => $invoice_groups,
            'services' => $services,
            'staffs' => $staffs,
            'total_invoices_found' => $total_invoices_found,
            'total_by_currency' => $total_by_currency,
        ]);
        break;

    case 'mass-delete':
        if (!has_access($user->roleid, 'sales', 'all_data')) {
            permissionDenied();
        }
        if (!has_access($user->roleid, 'sales', 'delete')) {
            permissionDenied();
        }

        $data = request()->all();
        $ids = $data['invoice_ids'] ?? '';
        $ids = explode(',', $ids);
        foreach ($ids as $id) {
            $id = (int) $id;
            if ($id !== 0) {
                $invoice = Invoice::find($id);
                if ($invoice) {
                    InvoiceItem::where('invoiceid', $id)->delete();
                    $invoice->delete();
                }
            }
        }

        r2(U . 'invoices/list', 's', $_L['delete_successful']);

        break;

    case 'save-purchase-info':

        $data = request()->all();
        $invoice_id = (int) $data['invoice_id'];

        $invoice = Invoice::find($invoice_id);

        $purchase_cost = $data['purchase_cost'] ?? 0;
        $purchase_cost = (float) $purchase_cost;
        $staff_id = $data['staff_id'] ?? 0;
        $staff_id = (int) $staff_id;

        if ($invoice) {

            $invoice->purchase_id = $data['purchase_id'] ?? null;
            $invoice->purchase_date = (empty($data['purchase_date']) ? null : $data['purchase_date']);
            $invoice->purchase_cost = (empty($data['purchase_cost']) ? null : $data['purchase_cost']);
            $invoice->purchase_staff_id = $staff_id;
            $invoice->purchase_notes = $data['purchase_notes'] ?? null;
            $invoice->save();

            redirect_to('invoices/view/' . $invoice_id);

        }

        break;

        case 'save-shipping-info':

            $data = request()->all();
            $invoice_id = (int) $data['invoice_id'];

            $invoice = Invoice::find($invoice_id);

            $shipping_cost = $data['shipping_cost'] ?? 0;
            $shipping_cost = (float) $shipping_cost;

            if ($invoice) {

                $invoice->shipping_date = (empty($data['shipping_date']) ? null : $data['shipping_date']);
                $invoice->shipping_cost = (empty($data['shipping_cost']) ? null : $data['shipping_cost']);
                $invoice->shipping_weight = $data['shipping_weight'] ?? null;
                $invoice->shipping_notes = $data['shipping_notes'] ?? null;
                $invoice->save();

                redirect_to('invoices/view/' . $invoice_id);

            }

            break;

    default:
        echo 'action not defined';
}
