<?php

class Update
{
    public static function dbChanges()
    {
        global $config;

        $current_build = 3;

        $s_version = $config['s_version'];

        $message = '';

        $updates = [
            1 => [],
            2 => [],

            3 => [],

            4 => [],

            5 => [],

            6 => [],

            7 => [],
        ];

        $max = max(array_keys($updates));

        if ($s_version != $max) {
            $next_key = $s_version + 1;

            foreach ($updates[$next_key] as $statement) {
                DB::statement($statement);
            }

            switch ($next_key) {
                case 1:
                    break;

                case 2:
                    break;

                case 3:
                    break;

                case 4:
                    break;

                case 5:
                    break;

                case 6:
                    break;

                case 7:
                    break;
            }

            update_option('s_version', $next_key);

            $resp = [
                'continue' => true,
                'message' => $message . 'Updated to Schema: ' . $next_key,
            ];
        } else {
            update_option('build', $current_build);

            $resp = [
                'continue' => false,
                'message' => 'No more update is available',
            ];
        }

        return $resp;
    }

    public static function singleCommand()
    {
        global $config, $file_build;

        $message = '';

        if ($file_build > 1000) {
            // After the build 1000
        } else {
            // Before the 1000 build

            if ($file_build < 500) {
                $t = new Schema('app_sms');
                $t->add('req_time', 'datetime');
                $t->add('sent_time', 'datetime');
                $t->add('sms_from');
                $t->add('sms_to');
                $t->add('sms');
                $t->add('driver');
                $t->add('resp');
                $t->add('status', 'varchar', 200);
                $t->add('stype', 'varchar', 200, 'Sent');
                $t->add('cid', 'int', 11);
                $t->add('aid', 'int', 11);
                $t->add('company_id', 'int', 11);
                $t->add('iid', 'int', 11);
                $t->add('trid', 'int', 11);
                $t->add('lid', 'int', 11);
                $t->add('oid', 'int', 11);
                $t->save();

                $t = new Schema('app_sms_drivers');
                $t->add('dname', 'varchar', 200);
                $t->add('handler', 'varchar', 200);
                $t->add('weburl', 'varchar', 200);
                $t->add('description');
                $t->add('url', 'varchar', 200);
                $t->add('incoming_url', 'varchar', 200);
                $t->add('method', 'varchar', 50);
                $t->add('username', 'varchar', 200);
                $t->add('password', 'varchar', 200);
                $t->add('api_key', 'varchar', 200);
                $t->add('api_secret', 'varchar', 200);
                $t->add('route', 'varchar', 200);
                $t->add('sender_id', 'varchar', 100);
                $t->add('balance', 'decimal', '14,2');
                $t->add('placeholder');
                $t->add('status', 'varchar', 100);
                $t->add('is_active', 'int', 1, '0');
                $t->add_primary_data(
                    '(`id`, `dname`, `handler`, `weburl`, `description`, `url`, `incoming_url`, `method`, `username`, `password`, `api_key`, `api_secret`, `route`, `sender_id`, `balance`, `placeholder`, `status`, `is_active`) VALUES (NULL, \'custom\', \'custom\', \'http://www.example.com\', \'Your Custom Gateway\', \'http://api.example.com\', \'http://www.example.com/incoming/\', \'GET\', \'your_username\', \'your_password\', \'your_api_key\', \'your_api_secret\', \'1\', \'CloudOnex\', \'1.00\', \'{{url}}/send.php?username={{username}}&password={{password}}&from={{from}}&to={{to}}&message={{message}}\', \'Sandbox\', \'0\'), (NULL, \'test\', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, \'0\')'
                );
                $t->save();

                $t = new Schema('app_sms_templates');
                $t->add('tpl', 'varchar', '200');
                $t->add('sms');
                $t->add('status', 'varchar', 200);
                $t->save();
            }

            if (!db_table_exist('clx_projects')) {
                ORM::execute('CREATE TABLE `clx_projects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `created_by_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `proposal_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `contact_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `project_manager_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `estimate_finish_date` date DEFAULT NULL,
  `actual_finish_date` date DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci,
  `currency` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` decimal(16,8) DEFAULT NULL,
  `budget` decimal(16,8) DEFAULT NULL,
  `logged_seconds` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `total_expense` decimal(16,8) DEFAULT NULL,
  `owner_id` int(10) UNSIGNED DEFAULT NULL,
  `manager_id` int(10) UNSIGNED DEFAULT NULL,
  `contact_can_view_task` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_create_task` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_edit_task` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_comment` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_view_time` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_upload_file` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_discuss` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_view_timesheet` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_view_activity_log` tinyint(1) NOT NULL DEFAULT \'0\',
  `contact_can_view_members` tinyint(1) NOT NULL DEFAULT \'0\',
  `tab_tasks` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_timesheet` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_milestones` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_files` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_discussions` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_gantt_view` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_tickets` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_invoices` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_proposals` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_members` tinyint(1) NOT NULL DEFAULT \'1\',
  `tab_calendar` tinyint(1) NOT NULL DEFAULT \'1\',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
            }

            if (!db_column_exist('clx_projects', 'summary')) {
                ORM::execute(
                    'ALTER TABLE `clx_projects` ADD `summary` varchar(161) NULL DEFAULT NULL AFTER `name`, ADD `featured_image` varchar(161) NULL DEFAULT NULL AFTER `summary`, ADD `members` TEXT NULL DEFAULT NULL AFTER `featured_image`'
                );
            }

            if (!db_table_exist('lead_forms')) {
                ORM::execute('CREATE TABLE `lead_forms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_source_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `lead_status_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `notify_ids` text COLLATE utf8mb4_unicode_ci,
  `captcha` tinyint(1) NOT NULL DEFAULT \'0\',
  `submit_button_name` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_duplicate` tinyint(1) NOT NULL DEFAULT \'1\',
  `create_task` tinyint(1) NOT NULL DEFAULT \'0\',
  `webhook_url` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_email` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

                ORM::execute(
                    'ALTER TABLE `crm_leads` ADD `form_id` INT(11) NOT NULL DEFAULT \'0\' AFTER `source`'
                );
            }

            if (!db_column_exist('crm_accounts', 'is_primary_contact')) {
                ORM::execute(
                    'ALTER TABLE `crm_accounts` ADD `is_primary_contact` TINYINT(1) NOT NULL DEFAULT \'0\' AFTER `email`'
                );
            }

            if ($file_build < 500) {
            }

            if (!db_table_exist('widgets')) {
                ORM::execute('CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT \'1\',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
            }

            if (!db_column_exist('sys_transactions', 'code')) {
                ORM::execute(
                    'ALTER TABLE `sys_transactions` ADD `code` VARCHAR(100) NULL DEFAULT NULL'
                );
            }

            if (!db_table_exist('sys_purchases')) {
                ORM::execute('CREATE TABLE `sys_purchases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `supplier_id` int(10) DEFAULT NULL,
  `supplier_name` varchar(200) DEFAULT NULL,
  `account` varchar(200) NOT NULL,
  `cn` varchar(100) NOT NULL DEFAULT \'\',
  `invoicenum` text NOT NULL,
  `date` date DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `datepaid` datetime DEFAULT NULL,
  `subtotal` decimal(18,2) NOT NULL,
  `discount_type` varchar(1) NOT NULL DEFAULT \'f\',
  `discount_value` decimal(14,2) NOT NULL DEFAULT \'0.00\',
  `discount` decimal(14,2) NOT NULL DEFAULT \'0.00\',
  `credit` decimal(10,2) NOT NULL DEFAULT \'0.00\',
  `taxname` varchar(100) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `tax2` decimal(10,2) DEFAULT NULL,
  `total` decimal(18,2) NOT NULL DEFAULT \'0.00\',
  `taxrate` decimal(10,2) DEFAULT NULL,
  `taxrate2` decimal(10,2) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `vtoken` varchar(20) NOT NULL,
  `ptoken` varchar(20) NOT NULL,
  `r` varchar(100) NOT NULL DEFAULT \'0\',
  `nd` date DEFAULT NULL,
  `eid` int(10) NOT NULL DEFAULT \'0\',
  `ename` varchar(200) NOT NULL DEFAULT \'\',
  `vid` int(11) NOT NULL DEFAULT \'0\',
  `currency` int(11) NOT NULL DEFAULT \'0\',
  `currency_symbol` varchar(10) DEFAULT NULL,
  `currency_prefix` varchar(10) DEFAULT NULL,
  `currency_suffix` varchar(10) DEFAULT NULL,
  `currency_rate` decimal(11,4) NOT NULL DEFAULT \'1.0000\',
  `recurring` tinyint(1) NOT NULL DEFAULT \'0\',
  `recurring_ends` date DEFAULT NULL,
  `last_recurring_date` date DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `sale_agent` int(11) NOT NULL DEFAULT \'0\',
  `last_overdue_reminder` date DEFAULT NULL,
  `allowed_payment_methods` text,
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(50) DEFAULT NULL,
  `billing_country` varchar(100) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `q_hide` tinyint(1) NOT NULL DEFAULT \'0\',
  `show_quantity_as` varchar(100) DEFAULT NULL,
  `pid` int(11) NOT NULL DEFAULT \'0\',
  `is_credit_invoice` int(1) NOT NULL DEFAULT \'0\',
  `aid` int(11) NOT NULL DEFAULT \'0\',
  `aname` varchar(200) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `receipt_number` varchar(200) DEFAULT NULL,
  `stage` varchar(200) DEFAULT \'Pending\',
  `subject` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');

                ORM::execute('CREATE TABLE `sys_purchaseitems` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoiceid` int(10) NOT NULL DEFAULT \'0\',
  `userid` int(10) NOT NULL,
  `type` text NOT NULL,
  `relid` int(10) NOT NULL,
  `itemcode` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `qty` varchar(20) NOT NULL DEFAULT \'1\',
  `amount` decimal(14,2) NOT NULL DEFAULT \'0.00\',
  `taxed` int(1) NOT NULL,
  `tax_rate` decimal(16,2) DEFAULT NULL,
  `tax_name` varchar(200) DEFAULT NULL,
  `taxamount` decimal(10,2) NOT NULL DEFAULT \'0.00\',
  `total` decimal(14,2) NOT NULL DEFAULT \'0.00\',
  `duedate` date DEFAULT NULL,
  `paymentmethod` text NOT NULL,
  `notes` text NOT NULL,
  `business_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');

                if (!db_table_exist('sys_status')) {
                    ORM::execute('CREATE TABLE `sys_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sorder` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
                }

                $message .= 'Updating Permissions...' . PHP_EOL;
                addPermission('Purchase', 'purchase');
                addPermission('Suppliers', 'suppliers');
                addPermission('SMS', 'sms');
                addPermission('Support', 'support');
                addPermission('Knowledgebase', 'kb');
                $message .= 'Done!' . PHP_EOL;

                addSmsTemplate(
                    'Quote Accepted: Admin Notification',
                    'Quote - {{quote_id}} has been accepted. You can view this Quote- {{quote_url}}'
                );

                addSmsTemplate(
                    'Quote Cancelled: Admin Notification',
                    'Quote - {{quote_id}} has been Cancelled. You can view this Quote- {{quote_url}}'
                );

                $t = new Schema('crm_accounts');
                $t->add_column();
                $t->add('drive', 'varchar', 50);
                $x = $t->save();

                if ($x === true) {
                    $message .= 'Done!' . PHP_EOL;
                } else {
                    $message .= 'Column already exist, skipped!' . PHP_EOL;
                }

                if (!db_table_exist('app_password_manager')) {
                    ORM::execute('CREATE TABLE `app_password_manager` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
                }

                if (!db_table_exist('expense_types')) {
                    ORM::execute('CREATE TABLE `expense_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sorder` int(11) DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin');
                }

                if (!db_column_exist('sys_users', 'sms_notify')) {
                    ORM::execute(
                        'ALTER TABLE `sys_users` ADD `sms_notify` INT(1) NOT NULL DEFAULT \'0\', ADD `email_notify` INT(1) NOT NULL DEFAULT \'0\', ADD `slack_notify` INT(1) NOT NULL DEFAULT \'0\''
                    );
                }

                if (!db_column_exist('sys_invoices', 'quote_id')) {
                    ORM::execute(
                        'ALTER TABLE `sys_invoices` ADD `quote_id` INT(11) NOT NULL DEFAULT \'0\' AFTER `vid`'
                    );
                }

                if (!db_column_exist('sys_tax', 'is_default')) {
                    ORM::execute(
                        'ALTER TABLE `sys_tax` ADD `is_default` INT(1) NOT NULL DEFAULT \'0\''
                    );
                }

                if (!db_column_exist('sys_tax', 'created_at')) {
                    ORM::execute(
                        'ALTER TABLE `sys_tax` ADD `created_at` TIMESTAMP NULL DEFAULT NULL, ADD `updated_at` TIMESTAMP NULL DEFAULT NULL'
                    );
                }

                if (!db_column_exist('sys_invoiceitems', 'tax_rate')) {
                    ORM::execute(
                        'ALTER TABLE `sys_invoiceitems` ADD `tax_name` VARCHAR(200) NULL DEFAULT NULL AFTER `taxed`, ADD `tax_rate` DECIMAL(16,2) NULL DEFAULT NULL AFTER `tax_name`'
                    );
                }
            }

            if (!db_column_exist('sys_pg', 'account_id')) {
                ORM::execute(
                    'ALTER TABLE `sys_pg` ADD `account_id` INT(11) UNSIGNED NULL DEFAULT NULL, ADD `created_at` TIMESTAMP NULL DEFAULT NULL, ADD `updated_at` TIMESTAMP NULL DEFAULT NULL'
                );
            }

            if (!db_table_exist('relations')) {
                ORM::execute('CREATE TABLE `relations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
                $message .= 'Created relations table...' . PHP_EOL;
            }

            addOption('invoice_receipt_number', '0');
            addOption('allow_customer_registration', '1');
            addOption('fax_field', '0');
            addOption('show_business_number', '0');
            addOption('label_business_number', 'Business Number');
            addOption('sms', '1');
            addOption('sms_request_method', 'POST');
            addOption('sms_auth_header', '');
            addOption('sms_req_url', '');
            addOption('sms_notify_admin_new_deposit', '0');
            addOption('sms_notify_customer_signed_up', '0');
            addOption('sms_notify_customer_invoice_created', '0');
            addOption('sms_notify_customer_invoice_paid', '0');
            addOption('sms_notify_customer_payment_received', '0');
            addOption('sms_api_handler', 'Nexmo');
            addOption('sms_auth_username', '');
            addOption('sms_auth_password', '');
            addOption('sms_sender_name', 'CLX');
            addOption('sms_http_params', '');
            addOption('purchase_invoice_payment_status', '0');
            addOption('quote_confirmation_email', '1');
            addOption('client_drive', '0');
            addOption('s_version', '4');
            addOption('latest_file', '');
            addOption('invoice_show_watermark', '1');
            addOption('show_country_flag', '1');
            addOption('drive', '1');

            addOption('tax_system', 'default');
            addOption('pos', '1');
            addOption('password_manager', '1');
            addOption('update_manager', '1');

            addOption('business_location', 'default');

            addPermission('Password Manager', 'password_manager');

            if (!db_table_exist('credit_cards')) {
                ORM::execute('CREATE TABLE `credit_cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) unsigned NOT NULL,
  `card_type` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_month` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_year` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvv` char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
                $message .= 'Created credit cards table...' . PHP_EOL;
            }

            if (!db_table_exist('clx_shared_preferences')) {
                ORM::execute('CREATE TABLE `clx_shared_preferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `relation_type` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(10) unsigned NOT NULL,
  `key` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

                $message .= 'Created shared_preferences table...' . PHP_EOL;
            }

            if (!db_table_exist('clx_integrations')) {
                ORM::execute('CREATE TABLE `clx_integrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT \'1\',
  `is_default` tinyint(1) NOT NULL DEFAULT \'0\',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

                $message .= 'Created integrations table...' . PHP_EOL;
            }

            if (!db_column_exist('sys_invoices', 'ticket_id')) {
                ORM::execute(
                    'ALTER TABLE `sys_invoices` ADD `ticket_id` INT(11) NULL DEFAULT 0 AFTER `quote_id`, ADD `title` VARCHAR(200) NULL DEFAULT NULL AFTER `account`'
                );

                ORM::execute(
                    'ALTER TABLE `sys_purchases` ADD `title` VARCHAR(200) NULL DEFAULT NULL AFTER `account`'
                );

                $message .= 'Invoice table updated...' . PHP_EOL;

                addOption('show_sidebar_header', '1');
                addOption('top_bar_is_dark', '1');
            }

            if (!db_column_exist('sys_accounts', 'owner_id')) {
                ORM::execute(
                    'ALTER table sys_accounts add `owner_id` int(10) unsigned DEFAULT NULL after `status`'
                );
            }

            updateOption('cache_id', time());

            ORM::execute(
                'ALTER TABLE `sys_transactions` CHANGE `type` `type` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL'
            );

            if (!db_column_exist('sys_tickets', 'c1')) {
                ORM::execute('ALTER TABLE `sys_tickets` 
 ADD `c1` VARCHAR (255) NULL DEFAULT NULL,
 ADD `c2` varchar(161) NULL DEFAULT NULL,
 ADD `c3` varchar(161) NULL DEFAULT NULL,
 ADD `c4` varchar(161) NULL DEFAULT NULL,
 ADD `c5` text');

                ORM::execute('ALTER TABLE `sys_invoices` ADD `c1` VARCHAR (255) NULL DEFAULT NULL,
 ADD `c2` varchar(161) NULL DEFAULT NULL,
 ADD `c3` varchar(161) NULL DEFAULT NULL,
 ADD `c4` varchar(161) NULL DEFAULT NULL,
 ADD `c5` text,
 ADD `signature_data_source` text,
 ADD `signature_data_base64` text,
 ADD `signature_data_svg` text');
            }

            add_option('slack_webhook_url', '');

            if (!db_column_exist('sys_transactions', 'currency_iso_code')) {
                ORM::execute(
                    'ALTER TABLE `sys_transactions` ADD `account_id` INT(11) NOT NULL DEFAULT \'0\' AFTER `account`, ADD `currency_iso_code` CHAR(3) NULL DEFAULT NULL AFTER `iid`'
                );

                ORM::execute(
                    'ALTER TABLE `sys_invoiceitems` ADD `tax_code` VARCHAR(200) NULL DEFAULT NULL AFTER `itemcode`, ADD `tax1` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `taxamount`, ADD `tax2` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax1`, ADD `tax3` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax2`, ADD `discount_type` VARCHAR(100) NULL DEFAULT NULL AFTER `tax3`, ADD `discount_amount` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `discount_type`'
                );

                // Set all previous currency to home currency

                ORM::execute(
                    'UPDATE `sys_transactions` SET `currency_iso_code` =\'' .
                        $config['home_currency'] .
                        '\' WHERE `currency_iso_code` IS NULL'
                );

                ORM::execute(
                    'ALTER TABLE `sys_invoices` ADD `currency_iso_code` CHAR(3) NULL DEFAULT NULL AFTER `currency`, ADD `tax1_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax2`, ADD `tax2_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax1_total`, ADD `tax3_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax2_total`, ADD `tax_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax3_total`'
                );

                // Update Account Id

                $transactions = Transaction::all();

                $accounts = Account::all()
                    ->keyBy('account')
                    ->all();

                foreach ($transactions as $transaction) {
                    if (isset($accounts[$transaction->account])) {
                        $transaction->account_id =
                            $accounts[$transaction->account]->id;
                        $transaction->save();
                    }
                }

                $currencies = Currency::all()
                    ->keyBy('id')
                    ->all();

                $invoices = Invoice::all();

                foreach ($invoices as $invoice) {
                    if (isset($currencies[$invoice->currency])) {
                        $invoice->currency_iso_code =
                            $currencies[$invoice->currency]->iso_code;
                        $invoice->save();
                    }
                }

                ORM::execute(
                    'ALTER TABLE `sys_purchaseitems` ADD `tax_code` VARCHAR(200) NULL DEFAULT NULL AFTER `itemcode`, ADD `tax1` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `taxamount`, ADD `tax2` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax1`, ADD `tax3` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax2`, ADD `discount_type` VARCHAR(100) NULL DEFAULT NULL AFTER `tax3`, ADD `discount_amount` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `discount_type`'
                );

                ORM::execute(
                    'ALTER TABLE `sys_purchases` ADD `currency_iso_code` CHAR(3) NULL DEFAULT NULL AFTER `currency`, ADD `tax1_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax2`, ADD `tax2_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax1_total`, ADD `tax3_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax2_total`, ADD `tax_total` DECIMAL(16,4) NOT NULL DEFAULT \'0.00\' AFTER `tax3_total`'
                );

                $invoices = Purchase::all();

                foreach ($invoices as $invoice) {
                    if (isset($currencies[$invoice->currency])) {
                        $invoice->currency_iso_code =
                            $currencies[$invoice->currency]->iso_code;
                        $invoice->save();
                    }
                }
            }

            if (!db_column_exist('sys_invoices', 'is_same_state')) {
                ORM::execute(
                    'ALTER TABLE `sys_invoices` ADD `is_same_state` TINYINT(1) NULL DEFAULT \'1\''
                );

                ORM::execute(
                    'ALTER TABLE `sys_items` ADD `tax_code` VARCHAR(200) NULL DEFAULT NULL'
                );
            }

            if (!isset($config['number_pad'])) {
                $message .= 'Adding support for codes..' . PHP_EOL;

                add_option('number_pad', '5');

                add_option('customer_code_prefix', 'CUS-');
                add_option('customer_code_template', '');
                add_option('customer_code_current_number', '1');

                add_option('supplier_code_prefix', 'SUP-');
                add_option('supplier_code_template', '');
                add_option('supplier_code_current_number', '1');

                add_option('income_code_prefix', 'INC-');
                add_option('income_code_template', '');
                add_option('income_code_current_number', '1');

                add_option('expense_code_prefix', 'EXP-');
                add_option('expense_code_template', '');
                add_option('expense_code_current_number', '1');

                add_option('invoice_code_prefix', 'INV-');
                add_option('invoice_code_template', '');
                add_option('invoice_code_current_number', '1');

                add_option('quotation_code_prefix', 'QUOTE-');
                add_option('quotation_code_template', '');
                add_option('quotation_code_current_number', '1');

                add_option('purchase_code_prefix', 'PO-');
                add_option('purchase_code_template', '');
                add_option('purchase_code_current_number', '1');

                add_option('contact_display_name_string', 'Display Name');

                ORM::execute(
                    'ALTER TABLE `crm_accounts` ADD `code` VARCHAR(100) NULL DEFAULT NULL, ADD `display_name` VARCHAR(200) NULL DEFAULT NULL'
                );

                if (!db_column_exist('sys_transactions', 'code')) {
                    ORM::execute(
                        'ALTER TABLE `sys_transactions` ADD `code` VARCHAR(100) NULL DEFAULT NULL'
                    );
                }

                ORM::execute(
                    'ALTER TABLE `sys_purchases` ADD `code` VARCHAR(100) NULL DEFAULT NULL'
                );
                ORM::execute(
                    'ALTER TABLE `sys_invoices` ADD `code` VARCHAR(100) NULL DEFAULT NULL'
                );
                ORM::execute(
                    'ALTER TABLE `sys_quotes` ADD `code` VARCHAR(100) NULL DEFAULT NULL'
                );
            }

            if (!isset($config['contact_extra_field'])) {
                add_option('contact_extra_field', 'Display Name');
            }

            if (!isset($config['company_code_prefix'])) {
                add_option('company_code_prefix', 'COMP-');
                add_option('company_code_template', '');
                add_option('company_code_current_number', '1');
                ORM::execute(
                    'ALTER TABLE `sys_companies` ADD `code` VARCHAR(100) NULL DEFAULT NULL AFTER `company_name`'
                );
            }

            if (!isset($config['invoice_po_field'])) {
            }

            if (!isset($config['ticket_code_prefix'])) {
                add_option('ticket_code_prefix', '');
                add_option('ticket_code_template', '');
                add_option('ticket_code_current_number', '');
            }

            if (!db_column_exist('crm_accounts', 'secondary_email')) {
                ORM::execute(
                    'ALTER TABLE `crm_accounts` ADD `secondary_email` VARCHAR(200) NULL DEFAULT NULL, ADD `secondary_phone` VARCHAR(200) NULL DEFAULT NULL'
                );
            }

            if (!db_column_exist('sys_users', 'job_title')) {
                ORM::execute('ALTER TABLE `sys_users`  
  ADD `job_title` VARCHAR(150) NULL DEFAULT NULL, 
  ADD `date_hired` DATE NULL DEFAULT NULL, 
  ADD `department_id` INT(11) NULL DEFAULT \'0\', 
  ADD `manager_id` INT(11) NULL DEFAULT \'0\', 
  ADD `pay_frequency` VARCHAR(150) NULL DEFAULT NULL,
  ADD `currency` CHAR(3) NULL DEFAULT NULL,
  ADD `amount` DECIMAL(16, 2) NOT NULL DEFAULT \'0.00\', 
  ADD `employee_id` VARCHAR(150) NULL DEFAULT NULL,
  ADD `legal_name_title` VARCHAR(150) NULL DEFAULT NULL,
  ADD `legal_name_first` VARCHAR(150) NULL DEFAULT NULL,
  ADD `legal_name_mi` VARCHAR(150) NULL DEFAULT NULL,
  ADD `legal_name_last` VARCHAR(150) NULL DEFAULT NULL,
  ADD `banking_name` VARCHAR(150) NULL DEFAULT NULL,
  ADD `ssn` VARCHAR(150) NULL DEFAULT NULL,
  ADD `gender` VARCHAR(150) NULL DEFAULT NULL,
  ADD `date_of_birth` DATE NULL DEFAULT NULL, 
  ADD `marital_status` VARCHAR(150) NULL DEFAULT NULL,
  ADD `ethnicity` VARCHAR(150) NULL DEFAULT NULL,
  ADD `is_citizen` TINYINT(1) NOT NULL DEFAULT \'1\',
  ADD `has_i9_form` VARCHAR(150) NULL DEFAULT NULL,
  ADD `work_authorization_expires` DATE NULL DEFAULT NULL, 
  ADD `address_line_1` VARCHAR(150) NULL DEFAULT NULL,
  ADD `address_line_2` VARCHAR(150) NULL DEFAULT NULL,
  ADD `city` VARCHAR(150) NULL DEFAULT NULL,
  ADD `state` VARCHAR(150) NULL DEFAULT NULL,
  ADD `zip` VARCHAR(150) NULL DEFAULT NULL,
  ADD `country` VARCHAR(150) NULL DEFAULT NULL,
  ADD `work_phone` VARCHAR(150) NULL DEFAULT NULL,
  ADD `work_mobile` VARCHAR(150) NULL DEFAULT NULL,
  ADD `work_fax` VARCHAR(150) NULL DEFAULT NULL,
  ADD `cc_email` VARCHAR(150) NULL DEFAULT NULL,
  ADD `other` VARCHAR(150) NULL DEFAULT NULL,
  ADD `emergency_contact_name_1` VARCHAR(150) NULL DEFAULT NULL,
  ADD `emergency_contact_phone_1` VARCHAR(150) NULL DEFAULT NULL,
  ADD `emergency_contact_relation_1` VARCHAR(150) NULL DEFAULT NULL,
  ADD `emergency_contact_name_2` VARCHAR(150) NULL DEFAULT NULL,
  ADD `emergency_contact_phone_2` VARCHAR(150) NULL DEFAULT NULL,
  ADD `emergency_contact_relation_2` VARCHAR(150) NULL DEFAULT NULL,
  ADD `last_day_worked` DATE NULL DEFAULT NULL, 
  ADD `last_day_on_benefits` DATE NULL DEFAULT NULL, 
  ADD `last_day_on_payroll` DATE NULL DEFAULT NULL, 
  ADD `termination_type` VARCHAR(150) NULL DEFAULT NULL,
  ADD `termination_reason` VARCHAR(150) NULL DEFAULT NULL,
  ADD `is_recommended` TINYINT(1) NOT NULL DEFAULT \'1\',
  ADD `is_active` TINYINT(1) NOT NULL DEFAULT \'1\',
  ADD `facebook` VARCHAR(150) NULL DEFAULT NULL,
  ADD `google` VARCHAR(150) NULL DEFAULT NULL,
  ADD `linkedin` VARCHAR(150) NULL DEFAULT NULL,
  ADD `skype` VARCHAR(150) NULL DEFAULT NULL,
  ADD `twitter` VARCHAR(150) NULL DEFAULT NULL,
  ADD `summary` text NULL DEFAULT NULL
  ');
            }

            if (!db_table_exist('bills')) {
                $message .= 'Creating Bills Table ...' . PHP_EOL;
                $message .= '...' . PHP_EOL;
                ORM::execute('CREATE TABLE `bills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_account_id` int(10) unsigned DEFAULT NULL,
  `contact_id` int(10) unsigned DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `next_date` date NOT NULL,
  `last_paid_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `currency` CHAR(3),
  `net_amount` decimal(16,8) NOT NULL,
  `recurring_type` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remind_days_before` smallint(5) unsigned NOT NULL DEFAULT \'0\',
  `add_transaction_automatically` tinyint(1) NOT NULL DEFAULT \'0\',
  `is_active` tinyint(1) NOT NULL DEFAULT \'1\',
  `is_paid` tinyint(1) NOT NULL DEFAULT \'0\',
  `is_skipped` tinyint(1) NOT NULL DEFAULT \'0\',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
                $message .= 'Bills Table Created!' . PHP_EOL;
            }

            if (!db_column_exist('sys_transactions', 'staff_id')) {
                ORM::execute(
                    'ALTER TABLE `sys_transactions` ADD COLUMN `staff_id` int(11) NULL DEFAULT NULL AFTER `aid`'
                );
            }

            if ($file_build < 418) {
                ORM::execute(
                    'ALTER TABLE `clx_shared_preferences` CHANGE `value` `value` TEXT NULL DEFAULT NULL'
                );
            }

            if (!db_column_exist('sys_logs', 'related_to')) {
                ORM::execute('alter table sys_logs
	add related_to varchar(100) default null null, add related_id int(10) default null null');
                $message .= 'System logs table updated...' . PHP_EOL;
            }

            if (!db_table_exist('shipping_addresses')) {
                $message .= 'Creating Shipping Address Table ...' . PHP_EOL;
                $message .= '...' . PHP_EOL;
                ORM::execute('CREATE TABLE `shipping_addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT \'0\',
  `label` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT \'0\',
  `is_active` tinyint(1) NOT NULL DEFAULT \'1\',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
');
                $message .= 'Shipping Address Table Created!' . PHP_EOL;
            }

            addPermission('Projects', 'projects');

            if ($file_build < 538) {
                ORM::execute(
                    'ALTER TABLE `crm_accounts` CHANGE `signed_up_ip` `signed_up_ip` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL'
                );
            }

            if (!db_column_exist('sys_transactions', 'project_id')) {
                ORM::execute(
                    'ALTER TABLE `sys_transactions` ADD `project_id` INT(11) NOT NULL DEFAULT \'0\' AFTER `account_id`'
                );
                $message .= 'Added project_id on transactions!' . PHP_EOL;
            }

            if (empty($config['file_public_key'])) {
                update_option(
                    'file_public_key',
                    'd050d069-c43d-4c7c-a478-8c9917c3ac2f'
                );
            }
        }

        addPermission('Assets', 'assets');

        if (!db_column_exist('app_password_manager', 'admin_id')) {
            DB::statement(
                'ALTER TABLE `app_password_manager` ADD `admin_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\' AFTER `client_id`'
            );
        }

        //        if (!db_table_exist('hr_departments')) {
        //            DB::schema()->create('hr_departments', function ($table) {
        //                $table->increments('id');
        //                $table->string('name');
        //                $table->unsignedInteger('manager_id')->default(0);
        //                $table->unsignedInteger('admin_id')->default(0);
        //                $table->unsignedInteger('contact_id')->default(0);
        //                $table->unsignedInteger('parent_id')->default(0);
        //                $table->text('description')->nullable();
        //                $table->timestamps();
        //            });
        //        }

        $message .= '... Done!' . PHP_EOL;

        if (!db_table_exist('contracts')) {
            #Version 7

            $sql = <<<'EOD'

ALTER TABLE `sys_invoices` ADD `type` VARCHAR(100) NULL DEFAULT 'Invoice' AFTER `userid`, ADD `related_to` VARCHAR(100) NULL DEFAULT NULL AFTER `type`, ADD `relation_id` INT(11) NOT NULL DEFAULT '0' AFTER `related_to`;

ALTER TABLE `sys_documents` ADD `related_to` VARCHAR(100) NULL DEFAULT NULL AFTER `title`, ADD `relation_id` INT(11) NOT NULL DEFAULT '0' AFTER `related_to`;


CREATE TABLE `contracts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `owner_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `contact_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `project_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `invoice_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `subscription_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `party_one_first_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_one_last_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_one_email` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_one_sign` text COLLATE utf8mb4_unicode_ci,
  `party_one_sign_ip_address` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_one_sign_date` date DEFAULT NULL,
  `party_one_signed` tinyint(1) NOT NULL DEFAULT '0',
  `party_two_first_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_two_last_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_two_email` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_two_sign` text COLLATE utf8mb4_unicode_ci,
  `party_two_sign_ip_address` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_two_sign_date` date DEFAULT NULL,
  `party_two_signed` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `owner_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `contact_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `plan_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `contract_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `invoice_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `next_renewal_date` date DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `terms` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_gateway_api_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_gateway_plan` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `paused` tinyint(1) NOT NULL DEFAULT '0',
  `cancelled` tinyint(1) NOT NULL DEFAULT '0',
  `terminated` tinyint(1) NOT NULL DEFAULT '0',
  `tax_included` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `subscription_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `tax_1` decimal(8,2) DEFAULT NULL,
  `tax_2` decimal(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `features` text COLLATE utf8mb4_unicode_ci,
  `thank_you_message` text COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_body` text COLLATE utf8mb4_unicode_ci,
  `payment_gateway_api_name` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_gateway_plan` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_pricing_id` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `tax_included` tinyint(1) NOT NULL DEFAULT '0',
  `show_in_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `contact_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `related_to` varchar(161) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `show_in_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `short_urls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `short` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_url` varchar(161) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `short_url_accesses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url_id` int(10) UNSIGNED NOT NULL,
  `ip` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_agent` varchar(161) COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `country` char(2) COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


EOD;

            DB::unprepared($sql);
        }

        if(!db_column_exist('subscriptions','quantity')) {

            DB::schema()->table('subscriptions', function ($table) {
                $table->string('uuid',36)->nullable()->after('id');
                $table->string('currency',3)->nullable()->after('status');
                $table->integer('quantity')->default(0)->after('currency');
                $table->decimal('price', 16, 4)->nullable()->after('quantity');
                $table->decimal('tax1', 16, 4)->nullable()->after('price');
                $table->decimal('tax1_rate', 16, 4)->nullable()->after('tax1');
                $table->decimal('tax2', 16, 4)->nullable()->after('tax1_rate');
                $table->decimal('tax2_rate', 16, 4)->nullable()->after('tax2');
                $table->decimal('tax', 16, 4)->nullable()->after('tax2_rate');
                $table->decimal('sub_total', 16, 4)->nullable()->after('tax');
                $table->decimal('discount_on_subtotal', 16, 4)->nullable()->after('sub_total');
                $table->decimal('discount_on_total', 16, 4)->nullable()->after('discount_on_subtotal');
                $table->boolean('pro_rata')->default(0)->after('discount_on_total');
                $table->decimal('pro_rata_amount', 16, 4)->nullable()->after('pro_rata');
                $table->decimal('total', 16, 4)->nullable()->after('pro_rata_amount');
                $table->text('log')->nullable()->after('show_in_customer');
                $table->string('access_token', 36)->nullable()->after('log');
            });

            DB::schema()->create('subscription_plan_prices', function ($table) {
                $table->increments('id');
                $table->integer('subscription_plan_id')->unsigned();
                $table->string('term',100)->nullable();
                $table->string('currency',3)->nullable();
                $table->decimal('price', 16, 4)->nullable();
                $table->timestamps();
            });

            $subscriptions = Subscription::all();

            foreach($subscriptions as $subscription) {
                $subscription->uuid = Str::uuid();
                $subscription->access_token = Str::random();
                $subscription->quantity = 1;
                $subscription->currency = $config['home_currency'];
                $subscription->save();
            }

        }

        if(!db_column_exist('sys_items','tax1_rate')) {
            DB::schema()->table('sys_items', function ($table) {
                $table->decimal('tax1_rate', 16, 4)->nullable()->after('unit_price');
            });
        }

        if(!db_column_exist('sys_items','tax2_rate')) {
            DB::schema()->table('sys_items', function ($table) {
                $table->decimal('tax2_rate', 16, 4)->nullable()->after('tax1_rate');
            });
        }

        if(!db_column_exist('sys_items','show_in_catalog')) {

            DB::schema()->table('sys_items', function ($table) {
                $table->boolean('show_in_catalog')->default(1)->after('sales_price');
            });

        }

        if(!db_column_exist('sys_transactions','employee_id')) {

            DB::schema()->table('sys_transactions', function ($table) {
                $table->unsignedInteger('employee_id')->default(0)->after('project_id');
                $table->unsignedInteger('item_id')->default(0)->after('employee_id');
                $table->unsignedInteger('invoice_id')->default(0)->after('item_id');
                $table->unsignedInteger('asset_id')->default(0)->after('invoice_id');
                $table->string('item')->nullable()->after('description');
            });

        }

        if (!db_table_exist('posts')) {
            DB::schema()->create('posts', function ($table) {
                $table->id();
                $table->unsignedInteger('parent_id')->default(0);
                $table->unsignedInteger('collection_id')->default(0);
                $table->unsignedInteger('single_category_id')->default(0);
                $table->string('type', 100);
                $table->string('template', 50)->nullable();
                $table->string('header_type', 50)->nullable();
                $table->string('api_name')->nullable();
                $table->string('slug');
                $table->string('name')->nullable();
                $table->string('title');
                $table->string('seo_title')->nullable();
                $table->text('excerpt')->nullable();
                $table->text('lead_text')->nullable();
                $table->text('keywords')->nullable();
                $table->text('meta_tag')->nullable();
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
                $table->longText('markdown')->nullable();
                $table->longText('content')->nullable();
                $table->longText('head')->nullable();
                $table->longText('js')->nullable();
                $table->string('featured_image')->nullable();
                $table->string('featured_video')->nullable();
                $table->string('youtube_video_id')->nullable();
                $table->string('vimeo_video_id')->nullable();
                $table->string('canonical_url')->nullable();
                $table->unsignedInteger('reading_time')->default(0);
                $table->boolean('is_published')->default(0);
                $table->boolean('is_home_page')->default(0);
                $table->boolean('is_system_page')->default(0);
                $table->boolean('is_pinned')->default(0);
                $table->boolean('show_date')->default(1);
                $table->boolean('allow_comment')->default(0);
                $table->boolean('is_page')->default(0);
                $table->unsignedInteger('author_id')->default(0);
                $table->unsignedInteger('sort_order')->default(0);
                $table->unsignedInteger('item_id')->default(0);
                $table->boolean('is_cached')->default(0);
                $table->boolean('seo_index')->default(1);
                $table->text('settings')->nullable();
                $table->string('og_title')->nullable();
                $table->string('og_description')->nullable();
                $table->string('og_image')->nullable();
                $table->string('twitter_card')->nullable();
                $table->string('twitter_title')->nullable();
                $table->string('twitter_description')->nullable();
                $table->string('twitter_image')->nullable();
                $table->timestamps();
            });

            DB::schema()->create('media_files', function ($table) {
                $table->id();
                $table->string('uuid', 36)->nullable();
                $table->unsignedInteger('admin_id')->default(0);
                $table->unsignedInteger('contact_id')->default(0);
                $table->unsignedInteger('directory_id')->default(0);
                $table->unsignedInteger('size')->default(0);
                $table->unsignedSmallInteger('width')->default(0);
                $table->unsignedSmallInteger('height')->default(0);
                $table->string('folder')->nullable();
                $table->string('title')->nullable();
                $table->string('path');
                $table->string('mime_type',)->nullable();
                $table->string('extension', 10)->nullable();
                $table->text('description')->nullable();
                $table->string('access_key', 36)->nullable();
                $table->timestamps();
            });
        }

        $product = 'business_suite';
        if(empty($config['product']))
        {
            if(db_table_exist('hosting_plans'))
            {
                $product = 'hostbilling';
            }

            updateOption('product',$product,true);

        }

        updateOption('build', $file_build);


        if(!db_column_exist('sys_invoiceitems','item_id')) {
            DB::schema()->table('sys_invoiceitems', function ($table) {
                $table->unsignedInteger('item_id')->default(0)->after('invoiceid');
            });
        }

        if(!db_table_exist('faqs')) {
            DB::schema()->create('faqs', function ($table) {
                $table->id();
                $table->text('question');
                $table->text('answer');
                $table->boolean('is_active')->default(true);
                $table->integer('display_order')->default(0);
                $table->timestamps();
            });
        }

        if(!db_column_exist('hosting_orders','service_start_date')) {
            DB::schema()->table('hosting_orders', function ($table) {
                $table->date('service_start_date')->nullable()->after('total');
                $table->date('service_end_date')->nullable()->after('service_start_date');
                $table->string('region',100)->nullable()->after('ip');
                $table->string('nameserver_1',100)->nullable()->after('nameservers');
                $table->string('nameserver_2',100)->nullable()->after('nameserver_1');
                $table->string('nameserver_3',100)->nullable()->after('nameserver_2');
                $table->string('nameserver_4',100)->nullable()->after('nameserver_3');
                $table->string('os',100)->nullable()->after('nameserver_4');
                $table->text('notes')->nullable()->after('addons');
            });
        }

        if(!db_table_exist('menus')) {
            DB::schema()->create('menus', function ($table) {
                $table->id();
                $table->unsignedInteger('parent_id')->default(0);
                $table->string('name');
                $table->string('link')->nullable();
                $table->unsignedInteger('display_order')->default(0);
                $table->string('icon')->nullable();
                $table->string('type')->nullable();
                $table->string('target')->nullable();
                $table->boolean('is_active')->default(true);
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }
        Update::createPrimaryData();
        return $message;
    }

    public static function downloadTheLatestVersion($config, $manifest, $user)
    {
        $message = '';
        $success = false;
        //Download the latest version
        try {
            $full_name = $user->fullname ?? 'Unknown';
            $full_name_array = explode(' ', $full_name);
            $first_name = $full_name_array[0] ?? 'Unknown';
            $last_name = $full_name_array[1] ?? 'Unknown';
            $message .=
                "Downloading the latest version from the remote server...\n";
            $response = (new Http())
                ->withOptions([
                    'verify' => false,
                ])
                ->asForm()
                ->post(
                    $manifest['system']['update_url'] .
                    '/download/' .
                    $manifest['system']['item_api_name'],
                    [
                        'item_api_name' => $manifest['system']['item_api_name'],
                        'version' => $config['version'] ?? '7.2.0',
                        'license_key' => $config['purchase_key'] ?? '',
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'email' => $user->username ?? 'Unknown',
                    ]
                );


            if($response->status() == 200) {
                $data = $response->body();

                $file_name = 'latest_' . Str::random() . '.zip';
                updateOption('latest_version_file_name', $file_name, true);

                $file = fopen($file_name, 'wb+');
                fwrite($file, $data);
                fclose($file);
                $success = true;
                $message .=
                    "Downloaded the latest version from the remote server.\n";
            } else {
                $result = $response->json();
                if (!empty($result['error'])) {
                    throw new \Exception('Error: ' . $result['error']);
                } else {
                    throw new \Exception('Error: Unknown error');
                }
            }
        } catch (\Exception $exception) {
            $message .= $exception->getMessage();
        }

        return [
            'success' => $success,
            'message' => $message,
        ];
    }

    public static function extractTheLatestVersion($config)
    {
        $message = '';
        $success = false;
        if (!empty($config['latest_version_file_name'])) {
            //Extract the latest version
            try {
                $message .=
                    "Extracting the latest version from the downloaded file...\n";
                $zip = new \ZipArchive();
                $zip->open('./' . $config['latest_version_file_name']);
                $zip->extractTo('./');
                $zip->close();
                $success = true;
                $message .=
                    "Extracted the latest version from the downloaded file.\n";
            } catch (\Exception $exception) {
                $message .= $exception->getMessage();
            }
        } else {
            $message .= "No file to extract.\n";
        }

        return [
            'success' => $success,
            'message' => $message,
        ];
    }
    public static function databaseSchema($config)
    {
        $installed_version = $config['version'] ?? '1.0.0'; // default version
        $require_to_run_old_command = SemverComparator::lessThan(
            $installed_version,
            '1.0.1'
        );
        if ($require_to_run_old_command) {
            self::singleCommand();
        }

        HostBilling::runMigrations();
    }

    public static function cleanup($config)
    {
        removeOption('update_step');
        removeOption('update_log');
        if (
            !empty($config['latest_version_file_name']) &&
            file_exists($config['latest_version_file_name'])
        ) {
            try {
                unlink($config['latest_version_file_name']);
            } catch (\Exception $exception) {
                // do nothing
            }
        }
    }

    public static function createPrimaryData($reset = false)
    {

        $continue = false;
        //Check the home page is exist
        $home_page = Post::where('is_home_page', 1)->first();
        if(!$home_page)
        {
            $continue = true;
        }


        if($reset)
        {
            DB::table('faqs')->truncate();
            DB::table('posts')->truncate();
            DB::table('media_files')->truncate();
            DB::table('hosting_plan_groups')->truncate();
            DB::table('hosting_plans')->truncate();
            $continue = true;
        }

        if($continue)
        {

            updateOption('frontend_theme', 'v', true);

            $hosting_plan_groups = [
                [
                    'name' => 'Shared Hosting',
                    'slug' => 'shared-hosting',
                    'type' => 'hosting',
                    'header_content' => '<p class="text-center">Unleash the Power of Connectivity with Shared Web Hosting: The Affordable Solution for Uninterrupted Online Presence!</p>',
                ],
            ];

            foreach ($hosting_plan_groups as $hosting_plan_group)
            {
                $create_hosting_plan_group = new HostingPlanGroup();
                $create_hosting_plan_group->name = $hosting_plan_group['name'];
                $create_hosting_plan_group->slug = $hosting_plan_group['slug'];
                $create_hosting_plan_group->type = $hosting_plan_group['type'];
                $create_hosting_plan_group->header_content = $hosting_plan_group['header_content'];
                $create_hosting_plan_group->save();

                switch ($hosting_plan_group['type'])
                {
                    case 'hosting':

                        $hosting_plans = [
                            [
                                'name' => 'Starter',
                                'slug' => 'starter',
                                'type' => 'hosting',
                                'api_name' => 'starter',
                                'price_monthly' => 5,
                                'price_yearly' => 50,
                                'features' => [
                                    '1 GB Disk Space',
                                    '10 GB Bandwidth',
                                    '1 Website',
                                    '1 Email Account',
                                    '1 Database',
                                    'Free SSL Certificate',
                                    'Free Website Builder',
                                    'Free Website Migration',
                                    '24/7 Support',
                                ],
                            ],
                            [
                                'name' => 'Business',
                                'slug' => 'business',
                                'type' => 'hosting',
                                'api_name' => 'business',
                                'price_monthly' => 10,
                                'price_yearly' => 100,
                                'features' => [
                                    '10 GB Disk Space',
                                    '100 GB Bandwidth',
                                    '10 Websites',
                                    '10 Email Accounts',
                                    '10 Databases',
                                    'Free SSL Certificate',
                                    'Free Website Builder',
                                    'Free Website Migration',
                                    '24/7 Support',
                                ],
                                'featured' => '1',
                            ],
                            [
                                'name' => 'Enterprise',
                                'slug' => 'enterprise',
                                'type' => 'hosting',
                                'api_name' => 'enterprise',
                                'price_monthly' => 20,
                                'price_yearly' => 200,
                                'features' => [
                                    '100 GB Disk Space',
                                    '1000 GB Bandwidth',
                                    '100 Websites',
                                    '100 Email Accounts',
                                    '100 Databases',
                                    'Free SSL Certificate',
                                    'Free Website Builder',
                                    'Free Website Migration',
                                    '24/7 Support',
                                ],
                            ]
                        ];

                        foreach ($hosting_plans as $hosting_plan)
                        {
                            $create_hosting_plan = new HostingPlan();
                            $create_hosting_plan->name = $hosting_plan['name'];
                            $create_hosting_plan->slug = $hosting_plan['slug'];
                            $create_hosting_plan->type = $hosting_plan['type'];
                            $create_hosting_plan->api_name = $hosting_plan['api_name'];
                            $create_hosting_plan->group_id = $create_hosting_plan_group->id;
                            $create_hosting_plan->price_monthly = $hosting_plan['price_monthly'];
                            $create_hosting_plan->price_yearly = $hosting_plan['price_yearly'];
                            $create_hosting_plan->features = json_encode($hosting_plan['features']);
                            $create_hosting_plan->featured = $hosting_plan['featured'] ?? 0;
                            $create_hosting_plan->save();
                        }



                        break;
                }

            }

            $post_settings = [
                "hero_title" => "Web Hosting, Redefined.",
                "hero_description" => "Fast, Secure, and Reliable Web Hosting Solutions for Your Business.",
                "primary_button_text" => "Get Started Now",
                "primary_button_url" => "client/login",
                "secondary_button_text" => "Learn More",
                "secondary_button_url" => "client/login",
                "hero_image" => "images/hero-banner.jpg",

                "feature_1_title" => "99.9% Uptime Guarantee",
                "feature_1_description" => "Our infrastructure ensures that your website is always up and running.",
                "feature_1_icon" => "media/cloud-icon-1.png",
                "feature_1_link_text" => "Read More",
                "feature_1_link_url" => "client/login",

                "feature_2_title" => "24/7 Customer Support",
                "feature_2_description" => "Our dedicated support team is here for you around the clock.",
                "feature_2_icon" => "media/cloud-icon-2.png",
                "feature_2_link_text" => "Contact Us",
                "feature_2_link_url" => "client/login",

                "feature_3_title" => "Secure and Protected",
                "feature_3_description" => "Advanced security measures to protect your data and website.",
                "feature_3_icon" => "media/cloud-icon-3.png",
                "feature_3_link_text" => "Learn More",
                "feature_3_link_url" => "client/login",

                "feature_4_title" => "Easy to Use Control Panel",
                "feature_4_description" => "Manage your website with ease using our intuitive control panel.",
                "feature_4_icon" => "media/cloud-icon-4.png",
                "feature_4_link_text" => "Take a Tour",
                "feature_4_link_url" => "client/login",

                "about_title" => "Host Closer to Your Audience",
                "about_description" => "Global server locations for optimal speed and reliability.",
                "about_button_text" => "Choose Your Location",
                "about_button_link" => "client/login",
                "about_image" => "media/web-hosting-connected.jpg"
            ];

            $post = new Post();
            $post->title = 'Home Page';
            $post->name = 'Home Page';
            $post->slug = 'home';
            $post->is_home_page = 1;
            $post->type = 'page';
            $post->api_name = 'page';
            $post->settings = $post_settings;
            $post->save();

            //Create Default FAQs
            $faqs_count = Faq::count();

            if($faqs_count == 0) {


                $faqs = [
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept Visa, Mastercard, American Express, Discover, JCB, Alipay, UnionPay, and PayPal. Depending on your geographic region, Paypal supports additional payment networks, including Giropay and bank transfers.',
                    ],
                    [
                        'question' => 'Can I upgrade my hosting plan anytime?',
                        'answer' => 'Absolutely! You can upgrade your hosting plan anytime directly from your control panel. Any unused portion of your current plan will be prorated.',
                    ],
                    [
                        'question' => 'Is there a contract?',
                        'answer' => 'No, there are no contracts. Our web hosting plans are offered on a month-to-month basis, and you can cancel anytime.',
                    ],
                    [
                        'question' => 'How is my data backed up?',
                        'answer' => 'We perform daily backups of all customer data. These backups are retained for 7 days and can be restored upon request.',
                    ],
                    [
                        'question' => 'Do you offer free domain registration?',
                        'answer' => 'Yes, we offer one year of free domain registration or transfer with our annual hosting plans.',
                    ],
                    [
                        'question' => 'What kind of support do you provide?',
                        'answer' => 'We offer 24/7/365 support through phone, chat, and ticketing systems. Our dedicated team is always ready to assist you.',
                    ],
                    [
                        'question' => 'Do you support SSL?',
                        'answer' => 'Yes, we offer a free Let\'s Encrypt SSL certificate with every hosting plan. We also support and offer premium SSL certificates for e-commerce and other critical applications.',
                    ],
                    [
                        'question' => 'Are there any limits on bandwidth or disk space?',
                        'answer' => 'While we provide generous allocations, there are soft limits in place. However, these are designed to protect our infrastructure and ensure consistent performance for all users.',
                    ],
                    [
                        'question' => 'Can I host multiple domains?',
                        'answer' => 'Yes, our deluxe and ultimate plans offer multi-domain hosting. You can host multiple websites under one account without any additional charges.',
                    ],
                    [
                        'question' => 'How long does it take to set up my account?',
                        'answer' => 'Account setups are instantaneous after payment. Once your payment is processed, you\'ll receive your account details and can start hosting immediately.',
                    ],
                ];


                foreach ($faqs as $faq) {
                    $create_faq = new Faq();
                    $create_faq->question = $faq['question'];
                    $create_faq->answer = $faq['answer'];
                    $create_faq->save();
                }

            }

            $media_files = [
                'web_hosting_data_center.png',
                'web-hosting-connected.jpg',
                'cloud-icon-1.png',
                'cloud-icon-2.png',
                'cloud-icon-3.png',
                'cloud-icon-4.png',
            ];

            foreach ($media_files as $media_file)
            {
                $create_media_file = new MediaFile();
                $create_media_file->admin_id = 1;
                $create_media_file->title = $media_file;
                $create_media_file->path = $media_file;

                //guess the mime type
                $mime_type = 'image/jpeg';
                $extension = pathinfo($media_file, PATHINFO_EXTENSION);
                if($extension == 'png')
                {
                    $mime_type = 'image/png';
                }

                $create_media_file->mime_type = $mime_type;
                $create_media_file->extension = $extension;
                $create_media_file->save();

            }
        }

    }

}
