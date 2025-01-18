<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:21:12
  from 'file:../default/client-iview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e12e84cb726_80803046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cfb7baf9f4227669578e59b9f7adf486ecb1d9' => 
    array (
      0 => '../default/client-iview.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e12e84cb726_80803046 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->getValue('_L')['INVOICE'];?>
 - <?php echo $_smarty_tpl->getValue('d')['invoicenum'];
if ($_smarty_tpl->getValue('d')['cn'] != '') {?> <?php echo $_smarty_tpl->getValue('d')['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('d')['id'];?>
 <?php }?></title>

    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-270','icon-270x270.png');?>
" />

    <?php if (APP_STAGE == 'Dev') {?>

        <?php if ($_smarty_tpl->getValue('config')['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/ui/theme/default/css/app.min.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
">

        <?php }?>

        <link href="<?php echo $_smarty_tpl->getValue('theme');?>
default/css/themes/<?php echo $_smarty_tpl->getValue('config')['nstyle'];?>
.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" rel="stylesheet">

    <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('config')['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/default/css/app-rtl.min.css?v=2">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/theme/default/css/app.min.css?v=2">
        <?php }?>

        <link href="<?php echo $_smarty_tpl->getValue('theme');?>
default/css/themes/<?php echo $_smarty_tpl->getValue('config')['nstyle'];?>
.css?v=13" rel="stylesheet">
    <?php }?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_351650881675e12e83a8ef7_54066460', 'style');
?>


    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->getValue('_url');?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->getValue('config')['header_scripts'];?>


    <style type="text/css">
        body {

            background-color: #e9ebee;
            overflow-x: visible;
        }
        .paper {
            margin: 20px auto;
            max-width: 980px;
            background-color: #FFF;
            position: relative;

        }

        .fancybox-slide--iframe .fancybox-content {
            width  : 600px;
            max-width  : 80%;
            max-height : 80%;
            margin: 0;
        }

        .panel {

            /*box-shadow: none;*/

            -webkit-box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
            box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);

        }

        .panel-body {
            padding: 25px;
        }

        <?php if ((null !== ($_smarty_tpl->getValue('payment_gateways_by_processor')['stripe'] ?? null))) {?>

        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        <?php }?>

        .table-bordered>thead>tr, .table-bordered>thead>tr>th{
            border-bottom-width: 0;
            border-top-width: 0;
        }
        .table-bordered>tbody>tr:first-child {
            border-top-width: 0;
        }

        .table>:not(:first-child) {
            border-top: none;
        }


        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }

        .table-hover > tbody > tr:hover > * {
            --bs-table-accent-bg: black;
            color: #ffffff;
        }

        .table-striped>tbody>tr:nth-of-type(odd)>* {
            color: #ffffff!important;
        }

        .thead-light th {
            background-color: #5d6675;
        }
        .table-bordered>thead>tr, .table-bordered>thead>tr>th {
            border-bottom-width: 0;
            border-top-width: 0;
        }

    /*    Disable bootstrap 5 table black borders */





    </style>

    <?php if ((null !== ($_smarty_tpl->getValue('payment_gateways_by_processor')['stripe'] ?? null))) {?>
        <?php echo '<script'; ?>
 src="https://js.stripe.com/v3/"><?php echo '</script'; ?>
>
    <?php }?>

</head>

<body class="fixed-nav">

<div class="paper">
    <section class="panel">
        <div class="panel-body">
            <div class="invoice">
                <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                    <?php echo $_smarty_tpl->getValue('notify');?>

                <?php }?>
                <header class="clearfix">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-end">

                                <?php if ($_smarty_tpl->getValue('has_login_token')) {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/dashboard/" class="btn btn-primary ml-sm no-shadow no-border"><i class="fal fa-long-arrow-left"></i> <?php echo $_smarty_tpl->getValue('_L')['Back to Client Area'];?>
</a>
                                <?php }?>

                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/ipdf/<?php echo $_smarty_tpl->getValue('d')['id'];?>
/token_<?php echo $_smarty_tpl->getValue('d')['vtoken'];?>
/dl/" class="btn btn-primary buttons-pdf ml-sm"><i class="fal fa-file-pdf-o"></i> <?php echo $_smarty_tpl->getValue('_L')['Download PDF'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/ipdf/<?php echo $_smarty_tpl->getValue('d')['id'];?>
/token_<?php echo $_smarty_tpl->getValue('d')['vtoken'];?>
/view/" class="btn btn-primary buttons-excel ml-sm"><i class="fal fa-file-text-o"></i> <?php echo $_smarty_tpl->getValue('_L')['View PDF'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
iview/print/<?php echo $_smarty_tpl->getValue('d')['id'];?>
/token_<?php echo $_smarty_tpl->getValue('d')['vtoken'];?>
" target="_blank" class="btn btn-primary buttons-print ml-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->getValue('_L')['Printable Version'];?>
</a>
                            </div>

                            <div class="hr-line-dashed"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-md">
                            <h2 class="h2 mt-none mb-sm text-dark text-bold">

                                <?php if ($_smarty_tpl->getValue('d')['type'] == 'Credit Note') {?>

                                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('CREDIT NOTE');
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>


                                <?php } else { ?>

                                    <?php echo $_smarty_tpl->getValue('_L')['INVOICE'];?>


                                <?php }?>

                            </h2>
                            <h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->getValue('d')['invoicenum'];
if ($_smarty_tpl->getValue('d')['cn'] != '') {?> <?php echo $_smarty_tpl->getValue('d')['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('d')['id'];?>
 <?php }?></h4>
                            <?php if ($_smarty_tpl->getValue('d')['status'] == 'Unpaid') {?>
                                <h3 class="alert alert-danger"><?php echo $_smarty_tpl->getValue('_L')['Unpaid'];?>
</h3>
                                <?php } elseif ($_smarty_tpl->getValue('d')['status'] == 'Paid') {?>
                                <h3 class="alert alert-success"><?php echo $_smarty_tpl->getValue('_L')['Paid'];?>
</h3>
                            <?php } elseif ($_smarty_tpl->getValue('d')['status'] == 'Partially Paid') {?>
                                <h3 class="alert alert-info"><?php echo $_smarty_tpl->getValue('_L')['Partially Paid'];?>
</h3>
                                <?php } else { ?>
                                <h3 class="alert alert-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('d')['status']);?>
</h3>
                            <?php }?>

                            <?php if ((null !== ($_smarty_tpl->getValue('d')['title'] ?? null)) && $_smarty_tpl->getValue('d')['title'] != '') {?>
                                <h4><?php echo $_smarty_tpl->getValue('d')['title'];?>
</h4>
                                <hr>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('config')['invoice_receipt_number'] == '1' && $_smarty_tpl->getValue('d')['receipt_number'] != '') {?>
                                <h4><?php echo $_smarty_tpl->getValue('_L')['Receipt Number'];?>
: <?php echo $_smarty_tpl->getValue('d')['receipt_number'];?>
</h4>
                                <hr>
                            <?php }?>


                        </div>
                        <div class="col-sm-6 text-end mt-md mb-md">

                            <?php if ((!empty($_smarty_tpl->getValue('config')['invoice_show_qr_code']) && $_smarty_tpl->getValue('config')['invoice_show_qr_code'] == '1')) {?>
                                <img src="<?php echo $_smarty_tpl->getValue('qr_code');?>
" style="height: 100px;">
                            <?php }?>



                            <div class="ib">
                                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/<?php echo $_smarty_tpl->getValue('config')['logo_default'];?>
" alt="<?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>
" class="img-fluid"  style="margin-bottom: 15px;">

                            </div>

                            <address class="ib mr-xlg">
                                <strong><?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>
</strong>
                                <br>
                                <?php echo $_smarty_tpl->getValue('config')['caddress'];?>

                                <?php if ((null !== ($_smarty_tpl->getValue('config')['vat_number'] ?? null)) && ($_smarty_tpl->getValue('config')['vat_number'] != '')) {?>

                                    <br>
                                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sp_config_or_default')('label_tax_number',$_smarty_tpl->getValue('_L')['Vat number']);?>
:</strong> <?php echo $_smarty_tpl->getValue('config')['vat_number'];?>


                                <?php }?>
                            </address>



                        </div>
                    </div>
                </header>
                <div class="bill-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bill-to">
                                <p class="h5 mb-xs text-dark text-semibold">
                                    <strong>

                                        <?php if ($_smarty_tpl->getValue('d')['type'] == 'Credit Note') {?>

                                            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('To');
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>


                                        <?php } else { ?>

                                            <?php echo $_smarty_tpl->getValue('_L')['Invoiced To'];?>
:

                                        <?php }?>
                                    </strong></p>
                                <address>
                                    <?php if ($_smarty_tpl->getValue('a')['company'] != '') {?>
                                        <?php echo $_smarty_tpl->getValue('a')['company'];?>


                                        <br>

                                        <?php if ($_smarty_tpl->getValue('company') && $_smarty_tpl->getValue('config')['show_business_number'] == '1') {?>

                                            <?php if ($_smarty_tpl->getValue('company')->business_number != '') {?>
                                                <?php echo $_smarty_tpl->getValue('config')['label_business_number'];?>
: <?php echo $_smarty_tpl->getValue('company')->business_number;?>

                                                <br>
                                            <?php }?>
                                        <?php }?>

                                        <?php echo $_smarty_tpl->getValue('_L')['ATTN'];?>
: <?php echo $_smarty_tpl->getValue('d')['account'];?>

                                        <br>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getValue('d')['account'];?>

                                        <br>
                                    <?php }?>

                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getContactFormattedAddress')($_smarty_tpl->getValue('config'),$_smarty_tpl->getValue('a'));?>

                                    <br>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
:</strong> <?php echo $_smarty_tpl->getValue('a')['phone'];?>


                                    <?php if ($_smarty_tpl->getValue('config')['fax_field'] != '0' && $_smarty_tpl->getValue('a')['fax'] != '') {?>
                                        <br>
                                        <strong><?php echo $_smarty_tpl->getValue('_L')['Fax'];?>
:</strong> <?php echo $_smarty_tpl->getValue('a')['fax'];?>

                                    <?php }?>

                                    <br>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
:</strong> <?php echo $_smarty_tpl->getValue('a')['email'];?>

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cf'), 'cfs');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cfs')->value) {
$foreach0DoElse = false;
?>
                                        <?php if ($_smarty_tpl->getValue('cfs')['showinvoice'] == 'No') {?>
                                            <?php continue 1;?>
                                        <?php }?>
                                        <br>
                                        <strong><?php echo $_smarty_tpl->getValue('cfs')['fieldname'];?>
: </strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_custom_field_value')($_smarty_tpl->getValue('cfs')['id'],$_smarty_tpl->getValue('a')['id']);?>

                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php echo $_smarty_tpl->getValue('x_html');?>

                                </address>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bill-data text-end">
                                <p class="mb-none">
                                    <span class="text-dark">

                                        <?php echo $_smarty_tpl->getValue('_L')['Invoice Date'];?>

                                    </span>
                                    <span class="value"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('d')['date']));?>
</span>
                                </p>
                                <p class="mb-none">
                                    <?php if ($_smarty_tpl->getValue('d')['type'] !== 'Credit Note') {?>

                                        <span class="text-dark"><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
:</span>
                                        <span class="value"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('d')['duedate']));?>
</span>

                                    <?php }?>



                                </p>

                                <h2>  <?php if ($_smarty_tpl->getValue('d')['type'] == 'Credit Note') {?>

                                        <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total');
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>


                                    <?php } else { ?>

                                        <?php echo $_smarty_tpl->getValue('_L')['Invoice Total'];?>
:

                                    <?php }?>
                                    : <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['total'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
 </h2>
                                <?php if (($_smarty_tpl->getValue('d')['credit']) != '0.00') {?>
                                    <h2> <?php echo $_smarty_tpl->getValue('_L')['Total Paid'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['credit'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</h2>

                                    <?php if ($_smarty_tpl->getValue('d')['i_due'] > 0) {?>
                                        <h2> <?php echo $_smarty_tpl->getValue('_L')['Amount Due'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['i_due'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</h2>
                                    <?php }?>

                                <?php }?>
                                <?php if ((($_smarty_tpl->getValue('d')['status']) != 'Paid') && ($_smarty_tpl->getSmarty()->getModifierCallback('ib_pg_count')() != '0' && (($_smarty_tpl->getValue('d')['status']) != 'Cancelled'))) {?>




                                    <?php if ($_smarty_tpl->getValue('render') === 'delivery') {?>

                                        <div class="col-md-6 float-end">
                                            <div class="bill-to">
                                                <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->getValue('_L')['Delivery To'];?>
</strong></p>
                                                <address>
                                                    <?php if ($_smarty_tpl->getValue('a')['company'] != '') {?>
                                                        <?php echo $_smarty_tpl->getValue('a')['company'];?>


                                                        <br>

                                                        <?php if ($_smarty_tpl->getValue('company') && $_smarty_tpl->getValue('config')['show_business_number'] == '1') {?>

                                                            <?php if ($_smarty_tpl->getValue('company')->business_number != '') {?>
                                                                <?php echo $_smarty_tpl->getValue('config')['label_business_number'];?>
: <?php echo $_smarty_tpl->getValue('company')->business_number;?>

                                                                <br>
                                                            <?php }?>
                                                        <?php }?>

                                                        <?php echo $_smarty_tpl->getValue('_L')['ATTN'];?>
: <?php echo $_smarty_tpl->getValue('d')['account'];?>

                                                        <br>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->getValue('d')['account'];?>

                                                        <br>
                                                    <?php }?>

                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getContactFormattedAddress')($_smarty_tpl->getValue('config'),$_smarty_tpl->getValue('a'));?>

                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
:</strong> <?php echo $_smarty_tpl->getValue('a')['phone'];?>


                                                    <?php if ($_smarty_tpl->getValue('config')['fax_field'] != '0' && $_smarty_tpl->getValue('a')['fax'] != '') {?>
                                                        <br>
                                                        <strong><?php echo $_smarty_tpl->getValue('_L')['Fax'];?>
:</strong> <?php echo $_smarty_tpl->getValue('a')['fax'];?>

                                                    <?php }?>

                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
:</strong> <?php echo $_smarty_tpl->getValue('a')['email'];?>

                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cf'), 'cfs');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cfs')->value) {
$foreach1DoElse = false;
?>
                                                        <?php if ($_smarty_tpl->getValue('cfs')['showinvoice'] == 'No') {?>
                                                            <?php continue 1;?>
                                                        <?php }?>
                                                        <br>
                                                        <strong><?php echo $_smarty_tpl->getValue('cfs')['fieldname'];?>
: </strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_custom_field_value')($_smarty_tpl->getValue('cfs')['id'],$_smarty_tpl->getValue('a')['id']);?>

                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    <?php echo $_smarty_tpl->getValue('x_html');?>

                                                </address>
                                            </div>
                                        </div>


                                        <?php } else { ?>


                                        <form class="my-3" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/ipay/<?php echo $_smarty_tpl->getValue('d')['id'];?>
/token_<?php echo $_smarty_tpl->getValue('d')['vtoken'];?>
">

                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('payment_gateways')) == 1) {?>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_gateways'), 'pg');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pg')->value) {
$foreach2DoElse = false;
?>
                                                    <input type="hidden" id="paymentGateway" name="pg" value="<?php echo $_smarty_tpl->getValue('pg')->processor;?>
">
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <?php } else { ?>
                                                <div class="mb-3 has-success">
                                                    <select class="form-select" name="pg" id="paymentGateway">
                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_gateways'), 'pg');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pg')->value) {
$foreach3DoElse = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->getValue('pg')->processor;?>
"><?php echo $_smarty_tpl->getValue('pg')->name;?>
</option>
                                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            <?php }?>
                                            <div class="mb-3">
                                                <button type="submit" id="btnPayNow" class="btn btn-primary"><i class="fal fa-credit-card"></i> <?php echo $_smarty_tpl->getValue('_L')['Pay Now'];?>
</button>
                                            </div>

                                        </form>





                                    <?php }?>



                                    <?php if ($_smarty_tpl->getValue('a')->balance > 0 && $_smarty_tpl->getValue('d')->is_credit_invoice != 1) {?>
                                        <hr>
                                        <h3> Your Current Balance: <span class="amount"><?php echo $_smarty_tpl->getValue('a')->balance;?>
</span> </h3>
                                         <a class="btn btn-primary" href="<?php echo $_smarty_tpl->getValue('_url');?>
client/pay_with_credit/<?php echo $_smarty_tpl->getValue('d')->id;?>
/token_<?php echo $_smarty_tpl->getValue('d')->vtoken;?>
"> Pay with Credit</a>
                                        <hr>
                                    <?php }?>

                                <?php if ((null !== ($_smarty_tpl->getValue('payment_gateways_by_processor')['stripe'] ?? null))) {?>

                                    <div id="stripeDiv" style="display: none; margin-bottom: 25px; margin-top: 15px; padding: 15px; background: #f5f5f6;">


                                        <form action="<?php echo $_smarty_tpl->getValue('_url');?>
client/payment-stripe" method="post" id="payment-form">
                                            <div class="row">
                                                <label for="card-element">
                                                    Credit or debit card
                                                </label>
                                                <div id="card-element" class="form-control">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>

                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>

                                            <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->getValue('d')['id'];?>
">
                                            <input type="hidden" name="view_token" value="<?php echo $_smarty_tpl->getValue('d')['vtoken'];?>
">
                                            <button class="btn btn-primary" id="btnStripeSubmit" style="margin-top: 20px;">Submit Payment</button>

                                        </form>
                                    </div>

                                <?php }?>


                                <?php }?>


                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->getValue('quote')) {?>

                        <h4><?php echo $_smarty_tpl->getValue('_L')['Quote'];?>
: <?php echo $_smarty_tpl->getValue('quote')->id;?>
</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php echo $_smarty_tpl->getValue('quote')->proposal;?>

                            <hr>
                        </div>
                    </div>
                <?php }?>

                <div class="table-responsive">

                    <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

                        <table class="table table-bordered invoice-items">
                            <thead>
                            <tr class="text-dark">
                                <th id="cell-id" class="text-semibold">S/L</th>
                                <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->getValue('_L')['Item'];?>
</th>
                                <th class="text-semibold">HSN / SAC</th>
                                <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->getValue('_L')['Price'];?>
</th>
                                <th id="cell-qty" class="text-center text-semibold"><?php if ($_smarty_tpl->getValue('d')['show_quantity_as'] == '' || $_smarty_tpl->getValue('d')['show_quantity_as'] == '1') {
echo $_smarty_tpl->getValue('_L')['Qty'];
} else {
echo $_smarty_tpl->getValue('d')['show_quantity_as'];
}?></th>
                                <th class="text-end">Taxable Value</th>


                                <?php if ($_smarty_tpl->getValue('d')['is_same_state']) {?>

                                    <th class="text-end">CGST</th>
                                    <th class="text-end">SGST/UTGST</th>
                                    <th class="text-end">GST</th>

                                <?php } else { ?>

                                    <th class="text-end">IGST</th>

                                <?php }?>




                                <th id="cell-total" class="text-end text-semibold"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
                                <tr>
                                    <td>
                                        <?php if ($_smarty_tpl->getValue('item')['itemcode'] != '') {?>
                                            <?php echo $_smarty_tpl->getValue('item')['itemcode'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array(), $_smarty_tpl);?>

                                        <?php }?>
                                    </td>
                                    <td class="text-semibold text-dark"><?php echo $_smarty_tpl->getValue('item')['description'];?>
</td>
                                    <td class="text-semibold text-dark"><?php echo $_smarty_tpl->getValue('item')['tax_code'];?>
</td>
                                    <td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->getValue('d')['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('d')['currency_symbol'];
}?> "><?php echo $_smarty_tpl->getValue('item')['amount'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->getValue('item')['qty'];?>
</td>
                                    <td class="text-end">
                                        <?php if ($_smarty_tpl->getValue('item')['discount_amount'] != '0.00') {?>

                                            Total: <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo ($_smarty_tpl->getValue('item')['amount']*$_smarty_tpl->getValue('item')['qty']);?>
</span>


                                            <br>
                                            Discount: <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo $_smarty_tpl->getValue('item')['discount_amount'];?>
</span>
                                            <br>
                                            Taxable amount: <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo ($_smarty_tpl->getValue('item')['amount']*$_smarty_tpl->getValue('item')['qty'])-$_smarty_tpl->getValue('item')['discount_amount'];?>
</span>

                                        <?php } else { ?>
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo ($_smarty_tpl->getValue('item')['amount']*$_smarty_tpl->getValue('item')['qty']);?>
</span>

                                        <?php }?>


                                    </td>


                                    <?php if ($_smarty_tpl->getValue('d')['is_same_state']) {?>

                                        <td class="text-end">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('gstIndiaSplitTaxValue')($_smarty_tpl->getValue('item')['total'],$_smarty_tpl->getValue('item')['tax_rate']);?>
</span>
                                            <br>
                                            @<?php echo round((float) $_smarty_tpl->getValue('item')['tax_rate']/2, (int) 2, (int) 1);?>
%
                                        </td>
                                        <td class="text-end">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('gstIndiaSplitTaxValue')($_smarty_tpl->getValue('item')['total'],$_smarty_tpl->getValue('item')['tax_rate']);?>
</span>
                                            <br>
                                            @<?php echo round((float) $_smarty_tpl->getValue('item')['tax_rate']/2, (int) 2, (int) 1);?>
%
                                        </td>
                                        <td class="text-end">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo round((float) $_smarty_tpl->getValue('item')['taxamount'], (int) 2, (int) 1);?>
</span> <br>
                                            @<?php echo round((float) $_smarty_tpl->getValue('item')['tax_rate'], (int) 2, (int) 1);?>
%

                                        </td>

                                    <?php } else { ?>



                                        <td class="text-end">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo round((float) (($_smarty_tpl->getValue('item')['tax_rate']*($_smarty_tpl->getValue('item')['qty']*$_smarty_tpl->getValue('item')['amount']))/100), (int) 2, (int) 1);?>
</span> <br>
                                            @<?php echo round((float) $_smarty_tpl->getValue('item')['tax_rate'], (int) 2, (int) 1);?>
%

                                        </td>

                                    <?php }?>


                                    <td class="text-end amount" data-a-sign="<?php echo $_smarty_tpl->getValue('data_a_sign');?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('data_a_dec');?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('data_a_sep');?>
" data-p-sign="<?php echo $_smarty_tpl->getValue('data_p_sign');?>
"><?php echo $_smarty_tpl->getValue('item')['total']+$_smarty_tpl->getValue('item')['taxamount'];?>
</td>

                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                    <?php } else { ?>

                        <table class="table table-bordered invoice-items">
                            <thead>
                            <tr class="text-dark">
                                <th id="cell-id" class="fw-bold">#</th>
                                <th id="cell-item" class="fw-bold"><?php echo $_smarty_tpl->getValue('_L')['Item'];?>
</th>
                                <th id="cell-price" class="text-end fw-bold"><?php echo $_smarty_tpl->getValue('_L')['Price'];?>
</th>
                                <th id="cell-qty" class="text-end fw-bold"><?php if ($_smarty_tpl->getValue('d')['show_quantity_as'] == '' || $_smarty_tpl->getValue('d')['show_quantity_as'] == '1') {
echo $_smarty_tpl->getValue('_L')['Qty'];
} else {
echo $_smarty_tpl->getValue('d')['show_quantity_as'];
}?></th>
                                <th id="cell-total" class="text-end fw-bold"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach5DoElse = false;
?>
                                <tr>
                                    <td>
                                        <?php if ($_smarty_tpl->getValue('item')['itemcode'] != '') {?>
                                            <?php echo $_smarty_tpl->getValue('item')['itemcode'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('counter')->handle(array(), $_smarty_tpl);?>

                                        <?php }?>
                                    </td>
                                    <td class="text-dark">

                                        <?php echo $_smarty_tpl->getValue('item')['description'];?>


                                        <?php if (!empty($_smarty_tpl->getValue('config')['invoicing_allow_staff_selection_for_each_item'])) {?>
                                            <?php if ($_smarty_tpl->getValue('item')['staff_id'] != '') {?>
                                                <br>
                                                <?php if (!empty($_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('item')['staff_id']])) {?>
                                                    <p class="badge bg-primary"><?php echo $_smarty_tpl->getValue('_L')['Staff'];?>
:
                                                        <?php echo $_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('item')['staff_id']]->fullname;?>

                                                    </p>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>

                                    </td>
                                    <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('item')['amount'],$_smarty_tpl->getValue('d')['currency_iso_code'],$_smarty_tpl->getValue('format_currency_override'));?>
</td>
                                    <td class="text-end"><?php echo $_smarty_tpl->getValue('item')['qty'];?>
</td>
                                    <td class="text-end">
                                        <?php if (($_smarty_tpl->getValue('item')['discount_amount'] > 0)) {?>
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('item')['total'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
 <br>
                                            <span class="text-danger">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getSmarty()->getModifierCallback('get_discount_amount')($_smarty_tpl->getValue('item')['discount_amount'],$_smarty_tpl->getValue('item')['discount_type'],($_smarty_tpl->getValue('item')['qty']*$_smarty_tpl->getValue('item')['amount']))),$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</span>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')['total']+$_smarty_tpl->getValue('item')['discount_amount']),$_smarty_tpl->getValue('d')['currency_iso_code']);?>

                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                    <?php }?>



                </div>
                <div class="invoice-summary">
                    <div class="row">
                        <div class="col-sm-4 offset-md-8 ">
                            <table class="table h5 text-dark">
                                <tbody>
                                <tr class="b-top-none">
                                    <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Sub Total'];?>
</td>
                                    <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['subtotal'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                </tr>

                                <?php if (($_smarty_tpl->getValue('d')['discount']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Discount'];?>
</td>
                                        <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['discount'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                    </tr>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>
                                    <tr>
                                        <td colspan="2">GST</td>
                                        <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['tax'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                    </tr>
                                <?php } else { ?>



                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['TAX'];?>
</td>
                                        <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['tax'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                    </tr>



                                <?php }?>

                                <?php if (($_smarty_tpl->getValue('d')['credit']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</td>
                                        <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['total'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Total Paid'];?>
</td>
                                        <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['credit'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                    </tr>

                                    <?php if ($_smarty_tpl->getValue('i_due') > 0) {?>
                                        <tr class="h4">
                                            <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Amount Due'];?>
</td>
                                            <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('i_due'),$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                        </tr>
                                    <?php }?>




                                <?php } else { ?>
                                    <tr class="h4">
                                        <td colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Grand Total'];?>
</td>
                                        <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('d')['total'],$_smarty_tpl->getValue('d')['currency_iso_code']);?>
</td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

            <?php if (($_smarty_tpl->getValue('trs_c') != '')) {?>
                <h3><?php echo $_smarty_tpl->getValue('_L')['Related Transactions'];?>
</h3>
                <table class="table table-bordered sys_table">
                    <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                    <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>


                    <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>

                    <th><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</th>
                    <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Method');?>
</th>
                    <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Ref');?>
</th>




                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('trs'), 'tr');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tr')->value) {
$foreach6DoElse = false;
?>
                        <tr class="<?php if ($_smarty_tpl->getValue('tr')['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                            <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('tr')['date']));?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('tr')['account'];?>
</td>


                            <td class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_money_format')($_smarty_tpl->getValue('tr')['amount'],$_smarty_tpl->getValue('config'),$_smarty_tpl->getValue('d')['currency_symbol']);?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('tr')['description'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('tr')['method'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('tr')['ref'];?>
</td>


                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>



                </table>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('inv_files_c') != '') {?>

                <table class="table table-bordered table-hover sys_table">
                    <thead>
                    <tr>
                        <th class="text-end" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>

                        <th><?php echo $_smarty_tpl->getValue('_L')['File'];?>
</th>

                        <th class="text-end" data-sort-ignore="true" width="170px;"><?php echo $_smarty_tpl->getValue('_L')['Download'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('inv_files'), 'ds');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach7DoElse = false;
?>

                        <tr>

                            <td>
                                <?php if ($_smarty_tpl->getValue('ds')['file_mime_type'] == 'jpg' || $_smarty_tpl->getValue('ds')['file_mime_type'] == 'png' || $_smarty_tpl->getValue('ds')['file_mime_type'] == 'gif') {?>
                                    <i class="fal fa-file-image-o"></i>
                                <?php } elseif ($_smarty_tpl->getValue('ds')['file_mime_type'] == 'pdf') {?>
                                    <i class="fal fa-file-pdf-o"></i>
                                <?php } elseif ($_smarty_tpl->getValue('ds')['file_mime_type'] == 'zip') {?>
                                    <i class="fal fa-file-archive-o"></i>
                                <?php } else { ?>
                                    <i class="fal fa-file"></i>
                                <?php }?>
                            </td>


                            <td>

                                <?php echo $_smarty_tpl->getValue('ds')['title'];?>


                                <?php if ($_smarty_tpl->getValue('ds')['file_mime_type'] == 'jpg' || $_smarty_tpl->getValue('ds')['file_mime_type'] == 'png' || $_smarty_tpl->getValue('ds')['file_mime_type'] == 'gif') {?>

                                    <hr>

                                    <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/docs/<?php echo $_smarty_tpl->getValue('ds')['file_path'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->getValue('ds')['title'];?>
">

                                <?php }?>

                            </td>

                            <td class="text-end">

                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/dl/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
_<?php echo $_smarty_tpl->getValue('ds')['file_dl_token'];?>
/" class="md-btn md-btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->getValue('_L')['Download'];?>
</a>

                            </td>


                        </tr>

                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    </tbody>



                </table>

            <?php }?>

            <?php if (($_smarty_tpl->getValue('d')['notes']) != '') {?>
                <div class="well m-t">
                    <?php echo $_smarty_tpl->getValue('d')['notes'];?>

                </div>
            <?php }?>




            <?php if (!empty($_smarty_tpl->getValue('invoice_append_footer'))) {?>
                <div class="hr-line-dashed"></div>
                <div class="my-3">
                    <?php echo $_smarty_tpl->getValue('invoice_append_footer');?>

                </div>
            <?php }?>




                <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_client_can_attach_signature'] ?? null)) && $_smarty_tpl->getValue('config')['invoice_client_can_attach_signature'] == 1) {?>

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="signaturePadArea">

                            </div>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sign above');?>
</h4>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" id="clearSignature" class="btn btn-danger btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Clear signature');?>
</button>
                        </div>
                    </div>

                <?php }?>


        </div>
    </section>



</div>



<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->getValue('_url');?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->getValue('config')['df'];?>
">
<input type="hidden" id="_lan" name="_lan" value="<?php echo $_smarty_tpl->getValue('config')['language'];?>
">


<?php echo '<script'; ?>
>

    var _L = [];


    _L['Save'] = '<?php echo $_smarty_tpl->getValue('_L')['Save'];?>
';
    _L['Submit'] = '<?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
';
    _L['Loading'] = '<?php echo $_smarty_tpl->getValue('_L')['Loading'];?>
';
    _L['Media'] = '<?php echo $_smarty_tpl->getValue('_L')['Media'];?>
';
    _L['OK'] = '<?php echo $_smarty_tpl->getValue('_L')['OK'];?>
';
    _L['Cancel'] = '<?php echo $_smarty_tpl->getValue('_L')['Cancel'];?>
';
    _L['Close'] = '<?php echo $_smarty_tpl->getValue('_L')['Close'];?>
';
    _L['Close'] = '<?php echo $_smarty_tpl->getValue('_L')['Close'];?>
';
    _L['are_you_sure'] = '<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
';
    _L['Saved Successfully'] = '<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
';
    _L['Empty'] = '<?php echo $_smarty_tpl->getValue('_L')['Empty'];?>
';

    var app_url = '<?php echo $_smarty_tpl->getValue('app_url');?>
';
    var base_url = '<?php echo $_smarty_tpl->getValue('base_url');?>
';

    <?php if (($_smarty_tpl->getValue('config')['animate']) == '1') {?>
    var config_animate = 'Yes';
    <?php } else { ?>
    var config_animate = 'No';
    <?php }?>
    <?php echo $_smarty_tpl->getValue('jsvar');?>

<?php echo '</script'; ?>
>



<?php if (APP_STAGE == 'Dev') {?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
/ui/theme/default/js/app.min.js?v=<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
/ui/theme/default/js/app.min.js?v=2"><?php echo '</script'; ?>
>
<?php }?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_580736099675e12e84be4f2_27007431', 'script');
?>


<?php echo '<script'; ?>
>
    $(function () {
        $('.amount').autoNumeric('init');
    });
<?php echo '</script'; ?>
>

<?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_client_can_attach_signature'] ?? null)) && $_smarty_tpl->getValue('config')['invoice_client_can_attach_signature'] == 1) {?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/jSignature.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>



        $(function () {

            var $signaturePadArea = $("#signaturePadArea");

            $signaturePadArea.jSignature({
                color:"#000",


            });

            <?php if ($_smarty_tpl->getValue('d')['signature_data_base64'] != '') {?>

            $signaturePadArea.jSignature("setData","<?php echo $_smarty_tpl->getValue('d')['signature_data_base64'];?>
");

            <?php }?>

            $signaturePadArea.bind('change', function(e){
                var signData = $signaturePadArea.jSignature("getData");
                $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
client/save-invoice-signature", {
                    invoice_id: '<?php echo $_smarty_tpl->getValue('d')['id'];?>
',
                    view_token: '<?php echo $_smarty_tpl->getValue('d')['vtoken'];?>
',
                    signData: signData,
                });
            });


            $('#clearSignature').on('click',function () {
                $signaturePadArea.jSignature("reset");
            });



        });
    <?php echo '</script'; ?>
>

<?php }?>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        var $paymentGateway = $('#paymentGateway');

        <?php if ((null !== ($_smarty_tpl->getValue('xjq') ?? null))) {?>
        <?php echo $_smarty_tpl->getValue('xjq');?>

        <?php }?>

        if(document.getElementById('btnPayNow'))
            {

                $('#btnPayNow').on('click',function (e) {
                    <?php echo $_smarty_tpl->getValue('plugin_extra_js');?>


                    <?php if ((null !== ($_smarty_tpl->getValue('payment_gateways_by_processor')['stripe'] ?? null))) {?>

                    $stripeDiv = $('#stripeDiv');

                    if($paymentGateway.val() === 'stripe')
                        {
                            e.preventDefault();

                            $stripeDiv.show('slow');
                        }



                    <?php }?>

                });


                <?php if ((null !== ($_smarty_tpl->getValue('payment_gateways_by_processor')['stripe'] ?? null))) {?>

                // Create a Stripe client.
                var stripe = Stripe('<?php echo $_smarty_tpl->getValue('payment_gateways_by_processor')['stripe']['value'];?>
');

// Create an instance of Elements.
            var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

// Create an instance of the card Element.
            var card = elements.create('card', { style: style });

// Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

// Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

// Handle form submission.
            var form = document.getElementById('payment-form');
            var $btnStripeSubmit = $('#btnStripeSubmit');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                $btnStripeSubmit.prop('disabled',true);
                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        $btnStripeSubmit.prop('disabled',false);
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);

                    }
                });
            });

// Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();



            }

            <?php }?>
            }


    });

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getValue('config')['footer_scripts'];?>

</body>

</html>
<?php }
/* {block 'style'} */
class Block_351650881675e12e83a8ef7_54066460 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
}
}
/* {/block 'style'} */
/* {block 'script'} */
class Block_580736099675e12e84be4f2_27007431 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
}
}
/* {/block 'script'} */
}
