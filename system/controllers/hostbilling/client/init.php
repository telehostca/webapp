<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}
$base_theme = 'hostbilling';

$ui->assign('languages', Localization::getLanguages());

$ui->assign('selected_navigation', 'invoices');
$ui->assign('_st', 'Invoices');
$ui->assign('_title', $config['CompanyName']);

$action = route(1, 'home');

$ui->assign('page_name', $action);

AppEvent::trigger('client', [$action]);

$groups = HostingPlanGroup::select(['id', 'name', 'type', 'slug','header_content','image'])
    ->get()
    ->groupBy('type')
    ->all();

$ui->assign('groups', $groups);

$contact = Contact::isLoggedIn();

$ui->assign('user', $contact);

$cache_ttl = 180;

if (APP_STAGE === 'Live') {
    $cache_ttl = 5;
}

$base_theme = 'hostbilling';

$ui->assign('languages', Localization::getLanguages());

$ui->assign('selected_navigation', 'invoices');
$ui->assign('_st', 'Invoices');
$ui->assign('_title', $config['CompanyName']);

$action = route(1, 'home');

$ui->assign('page_name', $action);

AppEvent::trigger('client', [$action]);

$contact = Contact::isLoggedIn();

$ui->assign('user', $contact);

$cache_ttl = 180;

if (APP_STAGE === 'Live') {
    $cache_ttl = 5;
}

function hostbilling_get_shopping_cart_total($shopping_cart_items)
{
    $total = 0;

    if (!empty($shopping_cart_items['hosting'])) {
        foreach ($shopping_cart_items['hosting'] as $item) {
            $total += $item['price'];
            $total += ($item['tax_amount']  ?? 0);
        }
    }

    if (!empty($shopping_cart_items['domains'])) {
        foreach ($shopping_cart_items['domains'] as $item) {
            $total += $item['price'];
            $total += ($item['tax_amount']  ?? 0);
        }
    }

    return $total;
}

function hostbilling_count_shopping_cart_items($shopping_cart_items)
{
    $total = 0;

    if (!empty($shopping_cart_items['hosting'])) {
        foreach ($shopping_cart_items['hosting'] as $item) {
            ++$total;
        }
    }

    if (!empty($shopping_cart_items['domains'])) {
        foreach ($shopping_cart_items['domains'] as $item) {
            ++$total;
        }
    }

    return $total;
}

$shopping_cart = false;
if (!empty($_SESSION['shopping_cart_id'])) {
    $shopping_cart = ShoppingCart::find($_SESSION['shopping_cart_id']);
}

$ui->assign('shopping_cart', $shopping_cart);
$base_theme = 'hostbilling';

$faqs = Faq::orderBy('display_order', 'asc')->get();
$ui->assign('faqs', $faqs);

$menu_items = [];
$menu_items_parent = Menu::orderBy('display_order', 'asc')
    ->where('parent_id', 0)
    ->get();

foreach ($menu_items_parent as $menu_item) {
    $menu_items[$menu_item->id] = $menu_item->toArray();
    $menu_items[$menu_item->id]['children'] = Menu::orderBy('display_order', 'asc')
        ->where('parent_id', $menu_item->id)
        ->get()
        ->toArray();
}

$ui->assign('menu_items', $menu_items);
