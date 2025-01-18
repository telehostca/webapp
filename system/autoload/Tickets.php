<?php
require APP_SYSTEM_PATH . '/lib/misc/smsdriver.php';

class Tickets
{
    public function get_department($did)
    {
        $dname = '';

        $d = ORM::for_table('sys_ticketdepartments')->find($did);

        if ($d) {
            $dname = $d->dname;
        }

        return $dname;
    }

    public static function sendReplyNotification($tid, $message)
    {
        $d = ORM::for_table('sys_tickets')->find($tid);

        if ($d && $d->email == '') {
            return false;
        }

        return false;
    }

    public function create(
        $cid = 0,
        $admin = 0,
        $flag = 0,
        $source = 'Web',
        $data = false,
        $extras = false,
        $ticket_prefix = false,
        $send_email = true
    ) {
        global $config, $_L;
        $msg = '';

        $ib_now = date('Y-m-d H:i:s');

        if (!$ticket_prefix) {
            $ticket_prefix = $config['ticket_code_prefix'] != '' ? $config['ticket_code_prefix'] : strtoupper(Str::random(3));
        }

        if ($config['ticket_code_current_number'] != '') {
            $ticket_code_number = str_pad(
                $config['ticket_code_current_number'],
                $config['number_pad'],
                '0',
                STR_PAD_LEFT
            );
            update_option(
                'ticket_code_current_number',
                current_number_would_be($config['ticket_code_current_number'])
            );
        } else {
            $ticket_code_number = _raid(8);
        }

        $tid = $ticket_prefix . '-' . $ticket_code_number;

        if (isset($data['did'])) {
            $did = $data['did'] == '' ? 0 : $data['did'];
        } else {
            $did = _post('department');
        }

        $dname = $this->get_department($did);

        $account = '';
        $email = '';
        $last_reply = '';

        if ($cid != 0) {
            $d = ORM::for_table('crm_accounts')->find($cid);

            if ($d) {
                $account = $d->account;
                $email = $d->email;
                $last_reply = $d->account;
            }
        } else {
            $account = _post('account');

            $first_name = '';
            $middle_name = '';
            $last_name = '';

            $email = _post('email');
            $last_reply = $account;
            if ($account == '') {
                $account = 'Web';
            }

            $account_e = explode(' ', $account);

            if (isset($account_e[0])) {
                $first_name = $account_e[0];
            }

            if (isset($account_e[1])) {
                $last_name = $account_e[1];
            }

            if (isset($account_e[3])) {
                $middle_name = $last_name;
                $last_name = $account_e[3];
            }

            if ($last_name == '') {
                $last_name = $first_name;
            }

            $e_user = ORM::for_table('crm_accounts')
                ->where('email', $email)
                ->first();

            if ($e_user && $email != '') {
                $cid = $e_user->id;
            } else {
                $l_add['first_name'] = $first_name;
                $l_add['last_name'] = $last_name;
                $l_add['middle_name'] = $middle_name;
                $l_add['email'] = _post('email');
                $l_add['phone'] = _post('phone');
            }
        }

        $message = isset($data['message']) ? $data['message'] : ib_post('message');

        $subject = isset($data['subject']) ? $data['subject'] : ib_post('subject');

        if ($subject == '') {
            $msg .= 'Subject is required. <br>';
        }

        if ($message == '') {
            $msg .= 'Message is required. <br>';
        }

        $urgency = isset($data['urgency']) ? $data['urgency'] : _post('urgency');

        if ($msg == '') {
            $d = ORM::for_table('sys_tickets')->create();
            $d->tid = $tid;
            $d->did = $did;
            $d->dname = $dname;
            $d->userid = $cid;
            $d->account = $account;
            $d->email = $email;
            $d->created_at = $ib_now;
            $d->updated_at = $ib_now;
            $d->subject = $subject;
            $d->message = $message;
            $d->status = 'Open';
            $d->urgency = $urgency;
            $d->admin = $admin;
            $d->attachments = ib_post('attachments');
            $d->last_reply = $last_reply;
            $d->flag = $flag;
            $d->is_spam = 0;
            $d->client_read = 'No';
            $d->admin_read = 'No';
            $d->source = $source;
            $d->ttype = _post('ttype'); //  Question Incident Problem Feature Request
            $d->tstart = '';
            $d->tend = '';
            $d->ttotal = '';
            $d->todo = '';
            $d->tags = '';
            $d->notes = '';
            $d->c1 = _post('c1');
            $d->c2 = _post('c2');

            if ($extras) {
                foreach ($extras as $key => $value) {
                    $d->$key = $value;
                }
            }

            $d->save();

            $ticket_id = $d->id();

            $admin_view_link = U . 'tickets/admin/view/' . $d->id;

            if (
                isset($config['create_task_from_ticket']) &&
                $config['create_task_from_ticket'] == 1
            ) {
                Tasks::create([
                    'title' => $tid,
                    'description' => $message,
                    'cid' => $cid,
                    'priority' => $urgency,
                    'rel_type' => 'Ticket',
                    'rel_id' => $ticket_id,
                    'tid' => $ticket_id,
                ]);
            }

            $ret_val = [
                "success" => "Yes",
                "msg" => "Ticket Created Successfully",
                "account" => $account,
                "email" => $email,
                "subject" => $subject,
                "body" => $message,
                "id" => $d->id(),
                "tid" => $tid,
                "urgency" => $urgency,
            ];

            $eml = ORM::for_table('sys_email_templates')
                ->where('tplname', 'Tickets:Client Ticket Created')
                ->where('send', 'Yes')
                ->first();
            if ($eml) {
                $client_view_link = U . 'client/tickets/view/' . $d->tid . '/';

                $eml_subject = new Template($eml->subject);
                $eml_subject->set('business_name', $config['CompanyName']);
                $eml_subject->set('subject', $subject);
                $eml_subject->set('ticket_subject', $subject);
                $subj = $eml_subject->output();

                $eml_message = new Template($eml->message);
                $eml_message->set('client_name', $account);
                $eml_message->set('client_email', $email);
                $eml_message->set('priority', $urgency);
                $eml_message->set('urgency', $urgency);
                $eml_message->set('subject', $subject);
                $eml_message->set('subject', $subject);
                $eml_message->set('ticket_subject', $subject);
                $eml_message->set('status', $urgency);
                $eml_message->set('ticket_status', $d->status);
                $eml_message->set('ticket_urgency', $urgency);
                $eml_message->set('ticket_priority', $urgency);
                $eml_message->set('ticket_id', '#' . $tid);
                $eml_message->set('message', $message);
                $eml_message->set('business_name', $config['CompanyName']);
                $eml_message->set('ticket_link', $client_view_link);
                $message_o = $eml_message->output();

                if ($send_email) {
                }
            }

            $eml = ORM::for_table('sys_email_templates')
                ->where('tplname', 'Tickets:Admin Ticket Created')
                ->where('send', 'Yes')
                ->first();

            if ($eml) {
                $eml_subject = new Template($eml->subject);
                $eml_subject->set('business_name', $config['CompanyName']);
                $eml_subject->set('subject', $subject);
                $eml_subject->set('ticket_subject', $subject);
                $subj = $eml_subject->output();

                $eml_message = new Template($eml->message);
                $eml_message->set('client_name', $account);
                $eml_message->set('client_email', $email);
                $eml_message->set('priority', $urgency);
                $eml_message->set('urgency', $urgency);
                $eml_message->set('status', $urgency);
                $eml_message->set('ticket_status', $d->status);
                $eml_message->set('ticket_urgency', $urgency);
                $eml_message->set('ticket_priority', $urgency);
                $eml_message->set('ticket_id', '#' . $tid);
                $eml_message->set('message', $message);
                $eml_message->set('business_name', $config['CompanyName']);
                $eml_message->set('admin_view_link', $admin_view_link);
                $message_o = $eml_message->output();

                $users = User::all();

                foreach ($users as $user) {
                    if ($user->email_notify) {
                    }
                }
            }

            $staffs = User::all();

            $sms_message =
                $account .
                ' | ' .
                $subject .
                '. ' .
                $_L['View'] .
                ': ' .
                $admin_view_link;

            foreach ($staffs as $staff) {
                if (
                    $staff->sms_notify &&
                    $staff->phonenumber != '' &&
                    has_access($staff->roleid, 'support', 'view')
                ) {
                    spSendSMS($staff->phonenumber, $sms_message);
                }
            }

            if (
                isset($config['ticket_create_task_automatically']) &&
                $config['ticket_create_task_automatically'] == 1
            ) {
                $data['aid'] = $admin;

                $user = User::find($admin);

                if ($user) {
                    $data['created_by'] = $user->fullname;
                }

                $task = Tasks::create($data);
            }

            AppEvent::trigger('tickets/created/', $ret_val);
        } else {
            $ret_val = [
                "success" => "No",
                "msg" => $msg,
            ];
        }

        return $ret_val;
    }

    public static function gen_link_attachments($attachments)
    {
        $html = '';

        $a = explode(',', $attachments);

        foreach ($a as $l) {
            $html .=
                '<img src="' .
                APP_URL .
                '/storage/tickets/' .
                $l .
                '" class="img-thumbnail" alt="Cinque Terre" width="300"> ';
        }

        return $html;
    }

    public function add_reply($admin = 0, $sendEmail = true)
    {
        global $config;
        global $_L;
        $msg = '';
        $is_admin = false;

        $ib_now = date('Y-m-d H:i:s');

        $tid = _post('f_tid');

        $ret_val = [
            "success" => "No",
        ];

        $account = '';
        $email = '';
        $last_reply = false;
        $replied_by = '';
        $reply_type = _post('reply_type', 'Public');

        $message = ib_post('message');
        if ($message == '') {
            $msg .= 'Message is required. <br>';
        }

        $t = ORM::for_table('sys_tickets')->find($tid);
        if ($t) {
            $t->updated_at = $ib_now;

            $t->save();

            $cid = $t->userid;
        } else {
            $cid = 0;
        }

        $adm = ORM::for_table('sys_users')->find($admin);
        if ($adm) {
            $is_admin = true;
            $email = $t->email;
            $account = $t->account;
            $replied_by = $adm->fullname;

            $last_reply = $adm->fullname;
            $reply_account = $adm->fullname;
            $reply_email = $adm->email;
        } else {
            $d = ORM::for_table('sys_ticketdepartments')->find($t->did);

            $email = $d->email;
            $account = '';

            $reply_account = $t->account;
            $reply_email = $t->email;
            $last_reply = $t->account;
        }

        if ($msg == '') {
            $d = ORM::for_table('sys_ticketreplies')->create();
            $d->tid = $tid;
            $d->userid = $cid;
            $d->account = $reply_account;
            $d->reply_type = $reply_type;
            $d->email = $reply_email;
            $d->created_at = $ib_now;
            $d->updated_at = $ib_now;
            $d->message = $message;
            $d->replied_by = $last_reply;
            $d->admin = $admin;
            $d->attachments = ib_post('attachments');
            $d->client_read = '';
            $d->admin_read = '';
            $d->save();

            $ret_val = [
                "success" => "Yes",
                "msg" => "Ticket Updated Successfully",
                "id" => $d->id(),
                "tid" => $tid,
            ];

            if ($sendEmail) {
                if ($is_admin) {
                    $eml = ORM::for_table('sys_email_templates')
                        ->where('tplname', 'Tickets:Admin Response')
                        ->where('send', 'Yes')
                        ->first();

                    $email = $t->email;

                    if ($eml) {
                        $client_view_link =
                            U . 'client/tickets/view/' . $t->tid . '/';

                        $eml_subject = new Template($eml->subject);
                        $eml_subject->set(
                            'business_name',
                            $config['CompanyName']
                        );
                        $eml_subject->set('subject', $t->subject);
                        $eml_subject->set('ticket_subject', $t->subject);
                        $subj = $eml_subject->output();

                        $eml_message = new Template($eml->message);
                        $eml_message->set('client_name', $account);
                        $eml_message->set('client_email', $email);
                        $eml_message->set('priority', $t->urgency);
                        $eml_message->set('urgency', $t->urgency);
                        $eml_message->set('ticket_subject', $t->subject);
                        $eml_message->set('status', $t->urgency);
                        $eml_message->set('ticket_status', $t->status);
                        $eml_message->set('ticket_urgency', $t->urgency);
                        $eml_message->set('ticket_priority', $t->urgency);
                        $eml_message->set('ticket_id', $t->tid);
                        $eml_message->set('ticket_message', $message);
                        $eml_message->set(
                            'business_name',
                            $config['CompanyName']
                        );
                        $eml_message->set('ticket_link', $client_view_link);
                        $message_o = $eml_message->output();

                        if ($reply_type !== 'internal') {
                            Email::sendEmail(
                                $config,
                                $_L,
                                $t->account,
                                $email,
                                $subj,
                                $message_o,
                                $cid
                            );
                        }
                    }
                } else {
                    $eml = ORM::for_table('sys_email_templates')
                        ->where('tplname', 'Tickets:Client Response')
                        ->where('send', 'Yes')
                        ->first();

                    if (APP_STAGE == 'Dev') {
                        Logger::write('Sending email to admin.');
                    }

                    if ($eml) {
                        if (APP_STAGE == 'Dev') {
                            Logger::write('Sending email to admin..');
                        }

                        $client_view_link =
                            U . 'client/tickets/view/' . $t->tid . '/';

                        $ticket_link = U . 'tickets/admin/view/' . $t->id;

                        $eml_subject = new Template($eml->subject);
                        $eml_subject->set(
                            'business_name',
                            $config['CompanyName']
                        );
                        $eml_subject->set('subject', $t->subject);
                        $eml_subject->set('ticket_subject', $t->subject);
                        $subj = $eml_subject->output();

                        $eml_message = new Template($eml->message);
                        $eml_message->set('client_name', $account);
                        $eml_message->set('client_email', $email);
                        $eml_message->set('priority', $t->urgency);
                        $eml_message->set('urgency', $t->urgency);
                        $eml_message->set('ticket_subject', $t->subject);
                        $eml_message->set('status', $t->urgency);
                        $eml_message->set('ticket_status', $t->status);
                        $eml_message->set('ticket_urgency', $t->urgency);
                        $eml_message->set('ticket_priority', $t->urgency);
                        $eml_message->set('ticket_id', $t->tid);
                        $eml_message->set('ticket_message', $message);
                        $eml_message->set(
                            'business_name',
                            $config['CompanyName']
                        );
                        $eml_message->set('ticket_link', $ticket_link);
                        $message_o = $eml_message->output();

                        $users = User::all();

                        foreach ($users as $user) {
                            if ($user->email_notify) {
                                Email::sendEmail(
                                    $config,
                                    $_L,
                                    '',
                                    $user->username,
                                    $subj,
                                    $message_o,
                                    $cid
                                );
                            }
                        }
                    }
                }
            }
        } else {
            $ret_val = [
                "success" => "No",
                "msg" => $msg,
            ];
        }

        return $ret_val;
    }

    public static function addPredefinedReply($data = [])
    {
        $msg = '';

        $id = '';

        $success = 'No';

        if (!isset($data['title']) || $data['title'] == '') {
            $msg .= 'Title is required. <br>';
        }

        if (!isset($data['message']) || $data['message'] == '') {
            $msg .= 'Message is required. <br>';
        }

        if ($msg == '') {
            $d = ORM::for_table('sys_canned_responses')->create();

            $d->title = $data['title'];
            $d->message = $data['message'];
            $d->save();

            $success = 'Yes';

            $id = $d->id();

            $msg = 'Added Successfully';
        }

        return [
            "success" => $success,
            "msg" => $msg,
            "id" => $id,
        ];
    }

    public static function deletePredefinedReply($id)
    {
        $d = ORM::for_table('sys_canned_responses')->find($id);

        if ($d) {
            $d->delete();

            return true;
        }

        return false;
    }

    public static function departments()
    {
        return ORM::for_table('sys_ticketdepartments')
            ->select('dname', 'value')
            ->find_array();
    }
}
