<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}
_auth();


$db_version = $config['version'] ?? null;
$manifest = require APP_SYSTEM_PATH . '/manifest.php';
if ($manifest['system']['version'] != $db_version) {
    redirect_to('updating/schema/');
}

$ui->assign('_title', $_L['Dashboard'] . '- ' . $config['CompanyName']);
$user = User::_info();
$ui->assign('user', $user);
$ui->assign('selected_navigation', 'dashboard');
$recent_customers = Contact::orderBy('id', 'desc')
    ->limit(5)
    ->get();

$recent_invoices = Invoice::orderBy('id', 'desc')
    ->limit(5)
    ->get();

$recent_orders = HostingOrder::orderBy('id', 'desc')
    ->limit(5)
    ->get();

$recent_tickets = Ticket::orderBy('id', 'desc')
    ->limit(5)
    ->get();

$today = date('Y-m-d');


$total_customers = Contact::count();
$total_orders = HostingOrder::count();
$total_paid_invoice_amount = Invoice::where('status', 'Paid')->sum('total');

$total_active_order_amount = HostingOrder::where('status', 'Active')->sum(
    'total'
);

$product = $config['product'] ?? 'hostbilling';


$action = route(1, 'display');


switch ($action)
{
    case 'display':

        switch ($product)
        {

            case 'hostbilling':

                $seven_days_ago = date('Y-m-d', strtotime('-7 days'));

                $orders_last_7_days = HostingOrder::whereBetween('date', [
                    $seven_days_ago,
                    $today,
                ])->get();

                $orders_for_chart = [];

                $total_last_7_days = 0;

                foreach ($orders_last_7_days as $order) {
                    if (isset($orders_for_chart[$order->date])) {
                        $orders_for_chart[$order->date] += $order->total;
                    } else {
                        $orders_for_chart[$order->date] = $order->total;
                    }

                    $total_last_7_days += $order->total;
                }

                \view('hostbilling/admin/dashboard', [
                    'recent_customers' => $recent_customers,
                    'recent_invoices' => $recent_invoices,
                    'recent_orders' => $recent_orders,
                    'recent_tickets' => $recent_tickets,
                    'orders_for_chart' => $orders_for_chart,
                    'total_customers' => $total_customers,
                    'total_orders' => $total_orders,
                    'total_paid_invoice_amount' => $total_paid_invoice_amount,
                    'total_active_order_amount' => $total_active_order_amount,
                    'total_last_7_days' => $total_last_7_days,
                ]);

                break;
            case 'hostbilling_pro':

                $total_income = Transaction::where('type', 'Income')->sum('amount');
                $total_expense = Transaction::where('type', 'Expense')->sum(
                    'amount'
                );
                $total_invoice_paid = Invoice::where('status', 'Paid')->sum(
                    'total'
                );



                $income_today = Transaction::where('type', 'Income')
                    ->where('date', $today)
                    ->sum('amount');

                $expense_today = Transaction::where('type', 'Expense')
                    ->where('date', $today)
                    ->sum('amount');

                $income_this_month = Transaction::where('type', 'Income')
                    ->whereMonth('date', date('m'))
                    ->whereYear('date', date('Y'))
                    ->sum('amount');

                $expense_this_month = Transaction::where('type', 'Expense')
                    ->whereMonth('date', date('m'))
                    ->whereYear('date', date('Y'))
                    ->sum('amount');

                $balances = getBalances($user);

                $net_worth = $balances['net_worth'];

                $home_currency = $balances['home_currency'];

                if ($net_worth == '') {
                    $net_worth = 0;
                }

                $thirty_days_ago = date('Y-m-d', strtotime('-30 days'));

                $orders_last_30_days = HostingOrder::whereBetween('date', [
                    $thirty_days_ago,
                    $today,
                ])->get();

                $orders_for_chart = [];

                $total_last_30_days = 0;

                foreach ($orders_last_30_days as $order) {
                    if (isset($orders_for_chart[$order->date])) {
                        $orders_for_chart[$order->date] += $order->total;
                    } else {
                        $orders_for_chart[$order->date] = $order->total;
                    }

                    $total_last_30_days += $order->total;
                }
                $recent_projects = Project::orderBy('id', 'desc')
                    ->limit(5)
                    ->get();

                $total_projects = Project::count();

                \view('hostbilling/admin/dashboard_pro', [
                    'recent_customers' => $recent_customers,
                    'recent_invoices' => $recent_invoices,
                    'recent_orders' => $recent_orders,
                    'recent_tickets' => $recent_tickets,
                    'recent_projects' => $recent_projects,
                    'total_projects' => $total_projects,
                    'orders_for_chart' => $orders_for_chart,
                    'total_customers' => $total_customers,
                    'total_orders' => $total_orders,
                    'total_paid_invoice_amount' => $total_paid_invoice_amount,
                    'total_active_order_amount' => $total_active_order_amount,
                    'total_last_30_days' => $total_last_30_days,
                    'total_income' => $total_income,
                    'total_expense' => $total_expense,
                    'total_invoice_paid' => $total_invoice_paid,
                    'income_today' => $income_today,
                    'expense_today' => $expense_today,
                    'income_this_month' => $income_this_month,
                    'expense_this_month' => $expense_this_month,
                    'net_worth' => $net_worth,
                ]);

                break;

        }

        break;

    case 'render':
        jsonResponse(Dashboard::graphUpdate($user, $config));
        break;
}


