<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

require_once 'apps/hestia/AppHestia.php';

$app_hestia = new AppHestia();

$app->on('hostbilling_server', [$app_hestia, 'hostBillingServer']);
$app->on('hostbilling_servers', [$app_hestia, 'hostBillingServers']);
$app->on('hostbilling_order', [$app_hestia, 'hostBillingOrder']);
$app->on('hostbilling_order_run_automation_create_account', [
    $app_hestia,
    'hostBillingOrderRunAutomationCreateAccount',
]);
