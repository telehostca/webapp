<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:30
  from 'file:../default/invoice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d352167d30_97457989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea648b7e9bd79cc185b5e7c48f79536ca958bd2' => 
    array (
      0 => '../default/invoice.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d352167d30_97457989 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4896777006745d3520b86c9_54443952', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11949460346745d3520bafa7_69016780', "content");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21219509146745d352144c54_65068408', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_4896777006745d3520b86c9_54443952 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <style>

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        <?php if ($_smarty_tpl->getValue('pos') == 'pos') {?>
        .pos_item {

        <?php if ($_smarty_tpl->getValue('config')['nstyle'] == 'dark_mode') {?>
            background: #182138;
        <?php } else { ?>
            background: #f3f6f9;
        <?php }?>


            cursor: pointer;
        }

        .pos_item:hover {
            background: #2196f3;
            color: #ffffff;
        }



        <?php }?>

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_11949460346745d3520bafa7_69016780 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <form id="invform" method="post">

        <div class="row" id="ibox_form">



            <div class="alert alert-danger" id="emsg" style="display: none;">
                <span id="emsgbody"></span>
            </div>

            <div class="col-md-12">


                <div class="panel">

                    <div class="panel-hdr">
                        <h2>


                            <?php if ($_smarty_tpl->getValue('invoice')) {?>

                                <?php if ($_smarty_tpl->getValue('action') === 'credit-note') {?>
                                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Credit Note');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
-
                                    <?php } else { ?>
                                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Invoice');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
-
                                <?php }?>

                                    <?php echo $_smarty_tpl->getValue('invoice')->invoicenum;
if ($_smarty_tpl->getValue('invoice')->cn != '') {?> <?php echo $_smarty_tpl->getValue('invoice')->cn;?>
 <?php } else { ?>
                                    <?php echo $_smarty_tpl->getValue('invoice')->id;?>
 <?php }?>

                                <?php } else { ?>

                                <?php if ($_smarty_tpl->getValue('action') === 'credit-note') {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('predict_next_serial')($_smarty_tpl->getValue('config'),'credit-note');?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('predict_next_serial')($_smarty_tpl->getValue('config'),'invoice');?>

                                <?php }?>



                                <?php if ($_smarty_tpl->getValue('project')) {?>
                                    [<?php echo $_smarty_tpl->getValue('project')->name;?>
]

                                    <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getValue('project')->id;?>
">
                                <?php }?>

                            <?php }?>

                        </h2>
                        <div class="panel-toolbar">

                            <?php if ($_smarty_tpl->getValue('invoice')) {?>

                                <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->getValue('invoice')->id;?>
">

                            <?php } else { ?>

                                <input type="hidden" name="invoice_id" value="">

                            <?php }?>

                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary" id="submit"> <?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                                <button class="btn btn-sm btn-info"
                                        id="save_n_close"> <?php echo $_smarty_tpl->getValue('_L')['Save n Close'];?>
</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel-container">
                        <div class="panel-content">


                            <div class="row">
                                <div class="col-md-12">

                                    <div class='row'>

                                        <div class='col-sm-4'>
                                            <div class='mb-3'>
                                                <label for="user_title"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</label>

                                                <select id="cid" name="cid" class="form-select">
                                                    <option value=""><?php echo $_smarty_tpl->getValue('_L')['Select Contact'];?>
...</option>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('c'), 'cs');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cs')->value) {
$foreach0DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('cs')['id'];?>
"
                                                                <?php if ($_smarty_tpl->getValue('p_cid') == ($_smarty_tpl->getValue('cs')['id'])) {?>selected="selected" <?php }?>><?php if ($_smarty_tpl->getValue('cs')['company'] != '') {?> <?php echo $_smarty_tpl->getValue('cs')['company'];?>
 - <?php }?> <?php echo $_smarty_tpl->getValue('cs')['account'];?>
 <?php if ($_smarty_tpl->getValue('cs')['email'] != '') {?>- <?php echo $_smarty_tpl->getValue('cs')['email'];
}?> <?php if ($_smarty_tpl->getValue('cs')['phone'] != '') {?>- <?php echo $_smarty_tpl->getValue('cs')['phone'];
}?> <?php if ($_smarty_tpl->getValue('cs')['code']) {?>[<?php echo $_smarty_tpl->getValue('cs')['code'];?>
]<?php }?> </option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                                </select>
                                                <span class="help-block"><a href="#"
                                                                            id="contact_add">| <?php echo $_smarty_tpl->getValue('_L')['Or Add New Customer'];?>
</a> </span>
                                            </div>
                                        </div>
                                        <div class='col-sm-4'>
                                            <div class='mb-3'>
                                                <label for="aid"><?php echo $_smarty_tpl->getValue('_L')['Staff'];?>
</label>
                                                <select class="form-select" name="aid" id="aid">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'owner');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('owner')->value) {
$foreach1DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('owner')->id;?>
"
                                                                <?php if ($_smarty_tpl->getValue('invoice')) {?>
                                                                <?php if ($_smarty_tpl->getValue('invoice')->aid == $_smarty_tpl->getValue('owner')->id) {?>selected="selected"<?php }?>
                                                            <?php } else { ?>
                                                            <?php if ($_smarty_tpl->getValue('owner')->id == $_smarty_tpl->getValue('user')->id) {?>selected<?php }?>
                                                        <?php }?> ><?php echo $_smarty_tpl->getValue('owner')->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class='col-sm-2'>
                                            <div class="mb-3">
                                                <label for="currency"><?php echo $_smarty_tpl->getValue('_L')['Currency'];?>
</label>

                                                <select id="currency" name="currency" class="form-select">

                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'value', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('key');?>
"


                                                                <?php if ($_smarty_tpl->getValue('invoice')) {?>
                                                                    <?php if ($_smarty_tpl->getValue('invoice')->currency_iso_code == $_smarty_tpl->getValue('key')) {?>selected <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->getValue('config')['home_currency'] == ($_smarty_tpl->getValue('key'))) {?>selected <?php }?>
                                                                <?php }?>


                                                                data-decimal-mark="<?php echo $_smarty_tpl->getValue('value')['decimal_mark'];?>
" data-thousands-separator="<?php echo $_smarty_tpl->getValue('value')['thousands_separator'];?>
" data-symbol="<?php echo $_smarty_tpl->getValue('value')['symbol'];?>
"

                                                                <?php if ($_smarty_tpl->getValue('value')['symbol_first']) {?>
                                                                    data-symbol-first="yes"
                                                                <?php } else { ?>
                                                                    data-symbol-first="no"
                                                                <?php }?>



                                                        ><?php echo $_smarty_tpl->getValue('key');?>
</option>
                                                        <?php
}
if ($foreach2DoElse) {
?>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                                </select>

                                            </div>
                                        </div>
                                        <div class='col-sm-2'>
                                            <div class="mb-3">
                                                <label for="status"><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</label>

                                                <select id="status" name="status" class="form-select">

                                                    <option value="Published" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->status != 'Draft') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Published'];?>
</option>
                                                    <option value="Draft" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->status == 'Draft') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Draft'];?>
</option>


                                                </select>

                                            </div>
                                        </div>
                                    </div>


                                    <?php if (!empty($_smarty_tpl->getValue('config')['invoice_group'])) {?>
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Group');?>
</label>
                                            <select class="form-select" name="group_id">
                                                <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('None');?>
</option>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('invoice_groups'), 'group');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach3DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('group')->id;?>
" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->group_id == $_smarty_tpl->getValue('group')->id) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('group')->name;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->getValue('config')['invoice_single_service'])) {?>
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Service');?>
</label>
                                            <select class="form-select" id="service_id" name="service_id">
                                                <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('None');?>
</option>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('services'), 'service');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('service')->value) {
$foreach4DoElse = false;
?>
                                                    <option data-price="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('service')->sales_price,$_smarty_tpl->getValue('config')['home_currency']);?>
" value="<?php echo $_smarty_tpl->getValue('service')->id;?>
" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->service_id == $_smarty_tpl->getValue('service')->id) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('service')->name;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>


                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="invoice_title"><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
  <small><em>(<?php echo $_smarty_tpl->getValue('_L')['optional'];?>
)</em></small></label>

                                                <input type="text" class="form-control" id="invoice_title" name="title" <?php if ($_smarty_tpl->getValue('invoice')) {?>value="<?php echo $_smarty_tpl->getValue('invoice')->title;?>
" <?php }?>>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='row'>


                                        <div class='col-sm-4'>
                                            <div class="mb-3">
                                                <label for="address"><?php echo $_smarty_tpl->getValue('_L')['Address'];?>
</label>

                                                <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class='col-sm-4'>
                                            <div class="mb-3">
                                                <label for="invoicenum"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Prefix');?>
</label>

                                                <input type="text" class="form-control" id="invoicenum" name="invoicenum" <?php if ($_smarty_tpl->getValue('invoice')) {?>value="<?php echo $_smarty_tpl->getValue('invoice')->invoicenum;?>
" <?php } else { ?>

                                                        <?php if ($_smarty_tpl->getValue('action') == 'credit-note') {?>

                                                            <?php if (!empty($_smarty_tpl->getValue('config')['credit_note_prefix'])) {?>

                                                                value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sp_transform_string_template')($_smarty_tpl->getValue('config')['invoice_code_prefix']);?>
"



                                                                <?php } else { ?>

                                                                value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('CN');?>
"

                                                                <?php }?>

                                                            <?php } else { ?>
                                                            value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sp_transform_string_template')($_smarty_tpl->getValue('config')['invoice_code_prefix']);?>
"
                                                        <?php }?>

                                                        <?php }?>>
                                            </div>

                                            <div class="mb-3">
                                                <label for="cn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Number');?>
 #</label>

                                                <input type="text" class="form-control" id="cn" name="cn" <?php if ($_smarty_tpl->getValue('invoice')) {?>value="<?php echo $_smarty_tpl->getValue('invoice')->cn;?>
" <?php } else { ?> value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('str_pad')($_smarty_tpl->getValue('config')['invoice_code_current_number'],$_smarty_tpl->getValue('config')['number_pad'],'0',STR_PAD_LEFT);?>
" <?php }?>>
                                                <?php if ($_smarty_tpl->getValue('action') !== 'credit-note') {?>
                                                    <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['invoice_number_help'];?>
</span>
                                                <?php }?>


                                            </div>

                                        </div>
                                        <div class='col-sm-4'>
                                            <?php if ($_smarty_tpl->getValue('config')['invoice_receipt_number'] == '1') {?>
                                                <div class="mb-3">
                                                    <label for="receipt_number"><?php echo $_smarty_tpl->getValue('_L')['Receipt Number'];?>
</label>

                                                    <input type="text" class="form-control" id="receipt_number"
                                                           name="receipt_number" <?php if ($_smarty_tpl->getValue('invoice')) {?>value="<?php echo $_smarty_tpl->getValue('invoice')->receipt_number;?>
" <?php }?>>
                                                </div>
                                            <?php } else { ?>
                                                <input type="hidden" name="receipt_number" id="receipt_number" value="">
                                            <?php }?>

                                            <div class="mb-3">
                                                <label for="show_quantity_as"><?php echo $_smarty_tpl->getValue('_L')['Show quantity as'];?>
</label>

                                                <input type="text" class="form-control" id="show_quantity_as"
                                                       name="show_quantity_as"

                                                        <?php if ($_smarty_tpl->getValue('invoice')) {?>
                                                            value="<?php echo $_smarty_tpl->getValue('invoice')->show_quantity_as;?>
"
                                                        <?php } else { ?>

                                                            value="<?php if ($_smarty_tpl->getValue('config')['show_quantity_as'] == '') {
echo $_smarty_tpl->getValue('_L')['Qty'];
} else {
echo $_smarty_tpl->getValue('config')['show_quantity_as'];
}?>"
                                                        <?php }?>

                                                >

                                            </div>

                                            <?php if ($_smarty_tpl->getValue('recurring')) {?>
                                                <div class="mb-3">
                                                    <label for="repeat"><?php echo $_smarty_tpl->getValue('_L')['Repeat Every'];?>
</label>

                                                    <select class="form-select" name="repeat" id="repeat">
                                                        <option value="daily" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+1 day') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Daily'];?>
</option>
                                                        <option value="week1" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+1 week') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Weekly'];?>
</option>
                                                        <option value="weeks2" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+2 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Weeks_2'];?>
</option>
                                                        <option value="weeks3" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+3 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Weeks_3'];?>
</option>
                                                        <option value="weeks4" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+4 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Weeks_4'];?>
</option>
                                                        <option value="month1" <?php if ($_smarty_tpl->getValue('invoice')) {?> <?php if ($_smarty_tpl->getValue('invoice')->r == '+1 month') {?> selected<?php }?> <?php } else { ?> selected <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Month'];?>
</option>
                                                        <option value="months2" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+2 months') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Months_2'];?>
</option>
                                                        <option value="months3" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+3 months') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Months_3'];?>
</option>
                                                        <option value="months6" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+6 months') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Months_6'];?>
</option>
                                                        <option value="year1" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+1 year') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Year'];?>
</option>
                                                        <option value="years2" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+2 years') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Years_2'];?>
</option>
                                                        <option value="years3" <?php if ($_smarty_tpl->getValue('invoice') && $_smarty_tpl->getValue('invoice')->r == '+3 years') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Years_3'];?>
</option>

                                                    </select>
                                                </div>
                                            <?php } else { ?>
                                                <input type="hidden" name="repeat" id="repeat" value="0">
                                            <?php }?>



                                        </div>
                                    </div>


                                    <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="duedate">GSTIN</label>
                                                    <input type="text" class="form-control" id="business_number" name="business_number">

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="duedate">Place of Supply</label>
                                                    <select id="place_of_supply" name="place_of_supply"
                                                            class="form-control">


                                                        <?php if ($_smarty_tpl->getValue('invoice')) {?>

                                                            <option value="<?php echo $_smarty_tpl->getValue('config')['business_location'];?>
" <?php if ($_smarty_tpl->getValue('invoice')->is_same_state == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('config')['business_location'];?>
</option>
                                                            <option value="other" <?php if ($_smarty_tpl->getValue('invoice')->is_same_state == 0) {?> selected<?php }?>>Other</option>

                                                        <?php } else { ?>

                                                            <option value="<?php echo $_smarty_tpl->getValue('config')['business_location'];?>
"><?php echo $_smarty_tpl->getValue('config')['business_location'];?>
</option>
                                                            <option value="other">Other</option>


                                                        <?php }?>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                


                                                    </select>

                                                </div>
                                            </div>


                                        </div>
                                    <?php }?>


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="idate"><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</label>

                                                <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                       data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                        <?php if ($_smarty_tpl->getValue('invoice')) {?>
                                                            value="<?php echo $_smarty_tpl->getValue('invoice')->date;?>
"
                                                        <?php } else { ?>
                                                            value="<?php echo $_smarty_tpl->getValue('idate');?>
"
                                                        <?php }?>
                                                >
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="duedate"><?php echo $_smarty_tpl->getValue('_L')['Payment Terms'];?>
</label>

                                                <?php if ($_smarty_tpl->getValue('invoice')) {?>

                                                    <input type="text" class="form-control" id="duedate" name="duedate" datepicker
                                                           data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                           value="<?php echo $_smarty_tpl->getValue('invoice')->duedate;?>
">

                                                <?php } else { ?>

                                                    <select class="form-select" name="duedate" id="duedate">
                                                        <option value="due_on_receipt" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'due_on_receipt')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Due On Receipt'];?>
</option>
                                                        <option value="days3" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days3')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_3'];?>
</option>
                                                        <option value="days5" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days5')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_5'];?>
</option>
                                                        <option value="days7" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days7')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_7'];?>
</option>
                                                        <option value="days10" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days10')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_10'];?>
</option>
                                                        <option value="days15" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days15')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_15'];?>
</option>
                                                        <option value="days30" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days30')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_30'];?>
</option>
                                                        <option value="days45" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days45')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_45'];?>
</option>
                                                        <option value="days60" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days60')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_60'];?>
</option>
                                                    </select>

                                                <?php }?>


                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                    </div>






                                    <?php echo $_smarty_tpl->getValue('extraHtml');?>



                                </div>
                            </div>

                            <?php if ($_smarty_tpl->getValue('pos') == 'pos') {?>
                                <div class="ib-search-bar my-3" style="margin-bottom: 30px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ib_search_input"
                                               placeholder="<?php echo $_smarty_tpl->getValue('_L')['Search'];?>
..." autofocus data-list=".list_pos_items"></div>
                                </div>

                                <hr>

                                <div id="block_items" class="list_pos_items row">


                                </div>
                            <?php }?>


                            <div class="table-responsive mt-3">

                                <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>
                                    <table class="table table-bordered invoice-table" id="invoice_items">


                                        <thead>


                                        <tr>

                                            <th width="25%" rowspan="2"><?php echo $_smarty_tpl->getValue('_L')['Item Name'];?>
</th>
                                            <th rowspan="2">HSN / SAC</th>
                                            <th rowspan="2"><?php if ($_smarty_tpl->getValue('config')['show_quantity_as'] == '') {
echo $_smarty_tpl->getValue('_L')['Qty'];
} else {
echo $_smarty_tpl->getValue('config')['show_quantity_as'];
}?></th>
                                            <th rowspan="2"><?php echo $_smarty_tpl->getValue('_L')['Price'];?>
</th>

                                            <th colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Discount'];?>
</th>

                                            <th rowspan="2" style="width: 80px;">Rate</th>

                                            <th colspan="3" class="text-center">
                                                Tax Values (Rs.)
                                            </th>

                                            <th rowspan="2"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>


                                        </tr>

                                        <tr>

                                            <th colspan="2">

                                                <?php if ($_smarty_tpl->getValue('invoice')) {?>

                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p"
                                                               <?php if ($_smarty_tpl->getValue('invoice')->discount_type == 'p') {?>checked<?php }?>
                                                        >%
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f" <?php if ($_smarty_tpl->getValue('invoice')->discount_type == 'f') {?>checked<?php }?>>Rs
                                                    </label>

                                                <?php } else { ?>

                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p" checked>%
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f">Rs
                                                    </label>

                                                <?php }?>



                                            </th>


                                            <th>CGST</th>
                                            <th>SGST</th>
                                            <th>IGST</th>

                                        </tr>

                                        </thead>
                                        <tbody>

                                        <?php if ($_smarty_tpl->getValue('items')) {?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach5DoElse = false;
?>



                                                <tr>
                                                    <td>
                                                        <textarea class="form-control item_name" name="desc[]" rows="3"><?php echo $_smarty_tpl->getValue('item')->description;?>
</textarea>
                                                        <input type="hidden" name="item_code[]" value="<?php echo $_smarty_tpl->getValue('item')->itemcode;?>
"></td>
                                                    <td><input type="text" class="form-control tax_code" value="<?php echo $_smarty_tpl->getValue('item')->tax_code;?>
" name="tax_code[]"></td>
                                                    <td><input type="text" class="form-control qty" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('item')->qty,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
" name="qty[]"></td>
                                                    <td><input type="text" class="form-control item_price" name="amount[]" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('item')->amount,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
">
                                                    <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('item')->discount_amount,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
">
                                                    </td>

                                                    <td>



                                                        <select class="form-select taxed" name="taxed[]">

                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach6DoElse = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
"
                                                                        <?php if ($_smarty_tpl->getValue('ts')['rate'] == $_smarty_tpl->getValue('item')['tax_rate']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                                        </select>





                                                    </td>

                                                    <td>
                                                        <input type="text" class="form-control cgst" name="cgst[]" disabled value="">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control sgst" name="sgst[]" disabled value="">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control igst" name="igst[]" disabled value="">
                                                    </td>

                                                    <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                              value=""></td>
                                                </tr>

                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php }?>


                                        <tr>
                                            <td>
                                                <textarea class="form-control item_name" name="desc[]" rows="3"></textarea>
                                                <input type="hidden" name="item_code[]" value=""></td>
                                            <td><input type="text" class="form-control tax_code" value="" name="tax_code[]"></td>
                                            <td><input type="text" class="form-control qty" value="" name="qty[]"></td>
                                            <td><input type="text" class="form-control item_price" name="amount[]" value="">
                                            <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value="">
                                            </td>

                                            <td><select class="form-select taxed" name="taxed[]">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach7DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
"
                                                                <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td>

                                            <td>
                                                <input type="text" class="form-control cgst" name="cgst[]" disabled value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control sgst" name="sgst[]" disabled value="">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control igst" name="igst[]" disabled value="">
                                            </td>

                                            <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                      value=""></td>
                                        </tr>

                                        </tbody>
                                    </table>

                                <?php } else { ?>

                                    <table class="table table-bordered invoice-table" id="invoice_items">
                                        <thead>
                                        <tr>

                                            <th width="30%"><?php echo $_smarty_tpl->getValue('_L')['Item Name'];?>
</th>
                                            <th width="10%"><?php if ($_smarty_tpl->getValue('config')['show_quantity_as'] == '') {
echo $_smarty_tpl->getValue('_L')['Qty'];
} else {
echo $_smarty_tpl->getValue('config')['show_quantity_as'];
}?></th>
                                            <th width="15%"><?php echo $_smarty_tpl->getValue('_L')['Price'];?>
</th>

                                            <th colspan="2"><?php echo $_smarty_tpl->getValue('_L')['Discount'];?>
</th>

                                            <th width="20%"><?php echo $_smarty_tpl->getValue('_L')['Tax'];?>
</th>

                                            <th width="15%"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>


                                        </tr>
                                        <tr>
                                            <th colspan="3"></th>
                                            <th colspan="2">

                                                <?php if ($_smarty_tpl->getValue('invoice')) {?>


                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p" <?php if ($_smarty_tpl->getValue('invoice')->discount_type == 'p') {?>checked<?php }?>> <span  data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Percentage'];?>
">%</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f" <?php if ($_smarty_tpl->getValue('invoice')->discount_type == 'f') {?>checked<?php }?>> <span data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Fixed Amount'];?>
" id="fixedDiscountText">
                                                    <?php if ((null !== ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('config')['home_currency']] ?? null))) {?>
                                                        <?php echo $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('config')['home_currency']]['symbol'];?>

                                                    <?php } else { ?>

                                                    <?php }?>
                                                </span>
                                                    </label>

                                                <?php } else { ?>

                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeP" type="radio" name="discount_type" value="p" checked> <span  data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Percentage'];?>
">%</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input class="discountType" id="discountTypeF" type="radio" name="discount_type" value="f"> <span data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Fixed Amount'];?>
" id="fixedDiscountText">
                                                    <?php if ((null !== ($_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('config')['home_currency']] ?? null))) {?>
                                                        <?php echo $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('config')['home_currency']]['symbol'];?>

                                                    <?php } else { ?>

                                                    <?php }?>
                                                </span>
                                                    </label>

                                                <?php }?>



                                            </th>
                                            <th colspan="2"></th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <?php if ($_smarty_tpl->getValue('items')) {?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach8DoElse = false;
?>

                                                <tr>
                                                    <td>
                                                        <?php if (!empty($_smarty_tpl->getValue('config')['invoicing_allow_staff_selection_for_each_item'])) {?>

                                                            <div class="mb-3">
                                                                <select name="staff_id[]" class="form-select"><option value="0"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Select Staff');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</option><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'employee');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('employee')->value) {
$foreach9DoElse = false;
?><option value="<?php echo $_smarty_tpl->getValue('employee')->id;?>
"
                                                                    <?php if ($_smarty_tpl->getValue('item')->staff_id == $_smarty_tpl->getValue('employee')->id) {?> selected <?php }?>
                                                                    ><?php echo $_smarty_tpl->getValue('employee')->fullname;?>
</option><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></select>
                                                            </div>

                                                        <?php }?>
                                                        <textarea class="form-control item_name" name="desc[]" rows="3"><?php echo $_smarty_tpl->getValue('item')->description;?>
</textarea>
                                                        <input type="hidden" name="item_code[]" value="<?php echo $_smarty_tpl->getValue('item')->itemcode;?>
"></td>
                                                    <td><input type="text" class="form-control qty" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('item')->qty,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
" name="qty[]"></td>
                                                    <td><input type="text" class="form-control item_price" name="amount[]" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('item')->amount,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
"></td>
                                                    <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('numberFormatUsingCurrency')($_smarty_tpl->getValue('item')->discount_amount,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
">
                                                    </td>
                                                    <td><select class="form-select taxed" name="taxed[]">
                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach10DoElse = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
"
                                                                        <?php if ($_smarty_tpl->getValue('item')->tax_rate == $_smarty_tpl->getValue('ts')['rate']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td>

                                                    <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                              value=""></td>
                                                </tr>

                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php }?>
                                        <tr>
                                            <td>

                                                <?php if (!empty($_smarty_tpl->getValue('config')['invoicing_allow_staff_selection_for_each_item'])) {?>
                                                    <div class='mb-3'>

                                                        <select name="staff_id[]"  class="form-select"><option value="0"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Select Staff');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</option><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'employee');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('employee')->value) {
$foreach11DoElse = false;
?><option value="<?php echo $_smarty_tpl->getValue('employee')->id;?>
"><?php echo $_smarty_tpl->getValue('employee')->fullname;?>
</option><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></select>

                                                    </div>

                                                <?php }?>


                                                <textarea class="form-control item_name" name="desc[]" rows="3"></textarea>
                                                <input type="hidden" name="item_code[]" value="">
                                            </td>
                                            <td><input type="text" class="form-control qty" value="" name="qty[]"></td>
                                            <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>
                                            <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value="">
                                            </td>
                                            <td><select class="form-select taxed" name="taxed[]">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach12DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
"
                                                                <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td>

                                            <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                      value=""></td>
                                        </tr>



                                        </tbody>
                                    </table>

                                <?php }?>


                            </div>
                            <!-- /table-responsive -->
                            <button type="button" class="btn btn-primary" id="blank-add"><i
                                        class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add blank Line'];?>
</button>
                            <button type="button" class="btn btn-primary" id="item-add"><i
                                        class="fal fa-search"></i> <?php echo $_smarty_tpl->getValue('_L')['Add Product OR Service'];?>
</button>
                            <button type="button" class="btn btn-danger" id="item-remove"><i
                                        class="fal fa-minus-circle"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</button>
                            <br>
                            <br>
                            <hr>

                            <div class="row">
                                <div class="col-md-4 offset-md-8">
                                    <table class="table invoice-total">
                                        <tbody>
                                        <tr>
                                            <td><strong><?php echo $_smarty_tpl->getValue('_L')['Sub Total'];?>
 :</strong></td>
                                            <td id="sub_total" class="amount">0.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong><?php echo $_smarty_tpl->getValue('_L')['Discount'];?>
 <span id="is_pt"></span> : </strong>


                                            </td>
                                            <td id="discount_amount_total" class="amount">0.00
                                            </td>
                                        </tr>
                                        <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'default') {?>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->getValue('_L')['TAX'];?>
 :</strong></td>
                                                <td id="taxtotal" class="amount">0.00
                                                </td>
                                            </tr>

                                        <?php } elseif ($_smarty_tpl->getValue('config')['tax_system'] == 'ca_quebec') {?>

                                            <div id="taxValTr">
                                                <tr>
                                                    <td><strong><?php echo $_smarty_tpl->getValue('_L')['TAX'];?>
 :</strong></td>
                                                    <td id="taxtotal" class="amount">0.00
                                                    </td>
                                                </tr>
                                            </div>


                                        <?php } elseif ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>


                                            <div id="taxValTr">
                                                <tr>
                                                    <td><strong><?php echo $_smarty_tpl->getValue('_L')['TAX'];?>
 :</strong></td>
                                                    <td id="taxtotal" class="amount">0.00
                                                    </td>
                                                </tr>
                                            </div>
                                        <?php }?>
                                        <tr>
                                            <td><strong><?php echo $_smarty_tpl->getValue('_L')['TOTAL'];?>
 :</strong></td>
                                            <td id="total" class="amount">0.00
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <hr>
                            <textarea class="form-control" name="notes" id="notes" rows="3"
                                      placeholder="<?php echo $_smarty_tpl->getValue('_L')['Invoice Terms'];?>
..."><?php if ($_smarty_tpl->getValue('invoice')) {
echo $_smarty_tpl->getValue('invoice')->notes;
} else {
echo $_smarty_tpl->getValue('config')['invoice_terms'];
}?></textarea>
                            <br>



                            <?php if ($_smarty_tpl->getValue('recurring')) {?>
                                <input type="hidden" id="is_recurring" value="yes">
                            <?php } else { ?>
                                <input type="hidden" id="is_recurring" value="no">
                            <?php }?>

                        </div>
                    </div>

                </div>





            </div>






        </div>


        <input type="hidden" name="document_type" value="<?php ob_start();
echo $_smarty_tpl->getValue('action');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">

    </form>

        <input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->getValue('_L')['Set Discount'];?>
">
    <input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->getValue('_L')['Discount'];?>
">
    <input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->getValue('_L')['Discount Type'];?>
">
    <input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->getValue('_L')['Percentage'];?>
">
    <input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->getValue('_L')['Fixed Amount'];?>
">
    <input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->getValue('_L')['Save'];?>
">
    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->getValue('_L')['No results found'];?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_21219509146745d352144c54_65068408 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <?php echo '<script'; ?>
>



        String.prototype.replaceAll = function(search, replacement) {
            var target = this;
            return target.replace(new RegExp(search, 'g'), replacement);
        };

        String.prototype.trunc = String.prototype.trunc ||
            function (n) {
                return (this.length > n) ? this.substr(0, n - 1) + '&hellip;' : this;
            };

        var selectedCurrency;

        function getSelectedCurrencySymbol() {
            selectedCurrency = document.getElementById('currency');
            return selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-symbol');
        }

        function getSelectedCurrencyDecimalMark() {
            selectedCurrency = document.getElementById('currency');
            return selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-decimal-mark');
        }

        function getSelectedCurrencyThousandsSeparator() {
            selectedCurrency = document.getElementById('currency');
            return selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-thousands-separator');
        }

        function selectedCurrencyIsSymbolFirst() {
            selectedCurrency = document.getElementById('currency');
            if(selectedCurrency.options[selectedCurrency.selectedIndex].getAttribute('data-symbol-first') === 'yes')
            {
                return true;
            }
            else
            {
                return false;
            }

        }

        function clx_number_format(number, decimals, dec_point, thousands_sep) {

            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                toFixedFix = function (n, prec) {
                    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                    var k = Math.pow(10, prec);
                    return Math.round(n * k) / k;
                },
                s = (prec ? toFixedFix(n, prec) : Math.round(n)).toString().split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d<?php echo 3;?>
)+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        function formatCurrency(amount) {
            var prefix = '';
            var suffix = '';
            if(selectedCurrencyIsSymbolFirst())
            {
                prefix = getSelectedCurrencySymbol() + ' ';
            }
            else
            {
                suffix = ' ' + getSelectedCurrencySymbol();
            }


            return prefix + clx_number_format(amount,2,getSelectedCurrencyDecimalMark(),getSelectedCurrencyThousandsSeparator()) + suffix;

        }


        function parseAmount(amount,to_fixed_digits) {

            let digits = 2;

            if(amount === '')
            {
                return 0.00;
            }

            if(typeof to_fixed_digits !== 'undefined')
            {
                digits = to_fixed_digits;
            }


            if(getSelectedCurrencyDecimalMark() === ',')
            {
                amount = amount.split('.').join('');
                amount = amount.replace(',','.');
            }
            else{
                amount = amount.replace(',','');
            }


            return parseFloat(amount).toFixed(digits);

        }



        function calculatePercentage(amount,percentage) {
            return (amount)*(percentage/100);
        }

        var is_same_state = false;

        <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

        var $place_of_supply = $('#place_of_supply');

        function taxState() {
            if($place_of_supply.val() == '<?php echo $_smarty_tpl->getValue('config')['business_location'];?>
')
            {
                is_same_state = true;
            }
            else
            {
                is_same_state = false;
            }
        }


        taxState();





        <?php }?>



        $(document).ready(function () {

            $('[data-bs-toggle="tooltip"]').tooltip();




            var c_qty;
            var c_price;
            var c_taxed;
            var c_discount;

            var lineTotal;
            var lineDiscount;

            var tax_val;

            var $discount_amount_total = $("#discount_amount_total");

            var $discount_amount = $("#discount_amount");
            var $discount_type = $("#discount_type");


            function spEditor(selector) {

                $(selector).redactor({
                    minHeight: 30,
                    buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'link', 'unorderedlist', 'orderedlist']
                });

            }


            function spMultiSelect(selector) {
                /*
                $(selector).multiselect(
                    {
                        allSelectedText: false,
                        nonSelectedText: 'None'
                    }
                );
                */


            }

            spMultiSelect('.taxed');


            var $total = $("#total");
            var $taxtotal = $("#taxtotal");
            var $sub_total = $("#sub_total");



            var $invoice_items = $('#invoice_items');

            var invTotal = 0;

            var totalTaxVal = 0;


            var lineTotalWithoutTax;

            var totalLineTotalWithoutTax = 0;

            var discount_type = 'p';

            var totalDiscount;

            function calculateTotal() {

                discount_type = document.querySelector('.discountType:checked').value;

                invTotal = 0;

                totalTaxVal = 0;

                tax_val = 0;

                lineTotalWithoutTax = 0;

                totalLineTotalWithoutTax = 0;

                totalDiscount = 0;

                var c_taxed_split;



                <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>


                $.each($('.qty'), function (index, value) {

                    c_qty = this.value;

                    c_qty = parseAmount(c_qty);

                    c_price = $(this).closest('tr').find('.item_price').val();


                    <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null))) {?>
                    c_price = parseAmount(c_price,<?php echo $_smarty_tpl->getValue('config')['decimal_places_products_and_services'];?>
);
                    <?php } else { ?>
                    c_price = parseAmount(c_price);
                    <?php }?>



                    c_discount = $(this).closest('tr').find('.item_discount').val();
                    c_discount = parseAmount(c_discount);

                    if (c_qty === '' || c_price === '') {
                        return;
                    }




                    c_taxed = $(this).closest('tr').find('.taxed').val();

                    c_taxed_split = (c_taxed/2).toFixed(2);

                    lineTotal = c_price * c_qty;
                    lineTotal = parseFloat(lineTotal);

                    lineTotalWithoutTax = lineTotal;


                    if(discount_type == 'p')
                    {
                        lineDiscount = calculatePercentage(lineTotal,c_discount);
                    }
                    else {
                        lineDiscount = c_discount;
                    }

                    lineTotal = (lineTotal-lineDiscount);



                    if (c_taxed === '' || c_taxed === null) {

                        tax_val = 0;

                    }
                    else {
                        c_taxed = parseFloat(c_taxed).toFixed(3);

                        tax_val = (lineTotal * c_taxed) / 100;


                        lineTotal = lineTotal + tax_val;
                    }

                    if(is_same_state)
                    {
                        $(this).closest('tr').find('.cgst').val(tax_val/2);
                        $(this).closest('tr').find('.sgst').val(tax_val/2);
                        $(this).closest('tr').find('.igst').val(0);
                    }
                    else
                    {
                        $(this).closest('tr').find('.cgst').val(0);
                        $(this).closest('tr').find('.sgst').val(0);
                        $(this).closest('tr').find('.igst').val(tax_val/2);
                    }



                    //  console.log(c_taxed);


                    $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));




                    totalTaxVal += tax_val;

                    totalLineTotalWithoutTax += lineTotalWithoutTax;

                    totalDiscount += lineDiscount;


                });






                <?php } else { ?>




                $.each($('.qty'), function (index, value) {
//                    console.log(index);
//                    console.log(this.value);


                    c_qty = this.value;

                    c_qty = parseAmount(c_qty);

                    c_price = $(this).closest('tr').find('.item_price').val();



                    <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null))) {?>
                    c_price = parseAmount(c_price,<?php echo $_smarty_tpl->getValue('config')['decimal_places_products_and_services'];?>
);
                    <?php } else { ?>
                    c_price = parseAmount(c_price);
                    <?php }?>


                    c_discount = $(this).closest('tr').find('.item_discount').val();
                    c_discount = parseAmount(c_discount);

                    // console.log(c_discount);


                    if (c_qty === '' || c_price === '') {
                        return;
                    }


                    c_taxed = $(this).closest('tr').find('.taxed').val();



                    lineTotal = c_price * c_qty;

                    lineTotal = parseFloat(lineTotal);



                    lineTotalWithoutTax = lineTotal;

                    if(discount_type == 'p')
                    {
                        lineDiscount = calculatePercentage(lineTotal,c_discount);
                    }
                    else {
                        lineDiscount = c_discount;
                    }

                    // console.log(lineDiscount);

                    lineTotal = (lineTotal-lineDiscount);


                    if (c_taxed === '' || c_taxed === null) {

                        tax_val = 0;

                    }
                    else {
                        c_taxed = parseFloat(c_taxed).toFixed(3);

                        tax_val = (lineTotal * c_taxed) / 100;



                        //  console.log(c_taxed);
                        //  console.log(lineTotal);

                        lineTotal = lineTotal + tax_val;
                    }



                    $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));




                    totalTaxVal += tax_val;

                    totalLineTotalWithoutTax += lineTotalWithoutTax;

                    lineDiscount = parseFloat(lineDiscount);

                    totalDiscount += lineDiscount;


                });







                <?php }?>


                totalDiscount = parseFloat(totalDiscount);

                invTotal = totalLineTotalWithoutTax - totalDiscount + totalTaxVal;

                $total.html(formatCurrency(invTotal.toFixed(2)));
                $taxtotal.html(formatCurrency(totalTaxVal.toFixed(2)));
                $sub_total.html(formatCurrency(totalLineTotalWithoutTax.toFixed(2)));
                $discount_amount_total.html(formatCurrency(totalDiscount.toFixed(2)));


            }

            calculateTotal();

            <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

            $place_of_supply.on('change',function () {

                taxState();
                calculateTotal();

            });

            <?php }?>


            $('#discountTypeP').change(function () {
                calculateTotal();
            });

            $('#discountTypeF').change(function () {
                calculateTotal();
            });

            var $currency = $('#currency');
            var $fixedDiscountText = $('#fixedDiscountText');

            $currency.on('change',function () {
                $fixedDiscountText.html(getSelectedCurrencySymbol());
                calculateTotal();
            });


            var $block_items = $("#block_items");

            var _url = $("#_url").val();



            $('#notes').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );


            spEditor('.item_name');


            $invoice_items.on('change', '.taxed', function () {
                //   $('#taxtotal').html('dd');
                // var taxrate = $('#stax').val().replace(',', '.');
                // $(this).val(taxrate);

                calculateTotal();


            });


            $invoice_items.on('change', '.qty', function () {

                calculateTotal();

            });

            $invoice_items.on('change', '.item_price', function () {

                calculateTotal();

            });

            $invoice_items.on('change', '.item_discount', function () {

                calculateTotal();

            });


            var item_remove = $('#item-remove');
            item_remove.hide();


            function update_address() {
                var _url = $("#_url").val();
                var cid = $('#cid').val();
                if (cid != '') {
                    $.post(_url + 'contacts/json-single-contact/', {
                        cid: cid

                    })
                        .done(function (data) {
                            var adrs = $("#address");

                            adrs.html(data.address_full);

                            if (document.getElementById('business_number')) {
                                $('#business_number').val(data.business_number);
                            }

                        });
                }

            }

            update_address();

            $('#cid').select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            })
                .on("change", function (e) {
                    // mostly used event, fired to the original element when the value changes
                    // log("change val=" + e.val);
                    //  alert(e.val);

                    update_address();
                });


            <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

            var $place_to_supply = $("#place_of_supply");

            $place_to_supply.select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            })
                .on("change", function (e) {

                });
            <?php }?>


            item_remove.on('click', function () {
                $("#invoice_items tr.info").fadeOut(300, function () {
                    $(this).remove();

                });

            });

            var $modal = $('#cloudonex_body');


            $('#item-add').on('click', function () {





                $.fancybox.open({
                    src  : base_url + 'ps/modal-list/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#modal_items_table').dataTable(
                                {
                                    responsive: true,
                                    "language": {
                                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                                        "info":      "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                                        "infoEmpty":      "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                                        buttons: {
                                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                                        },
                                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                                    },
                                });
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });




            });

            /*
             / @since v 2.0
             */

            $('#contact_add').on('click', function (e) {
                e.preventDefault();

                $.fancybox.open({
                    src  : _url + 'contacts/modal_add/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $("#country").select2({

                            });
                        }
                    }
                });


            });

            var rowNum = 0;

            let with_staff_selection = '';

            <?php if (!empty($_smarty_tpl->getValue('config')['invoicing_allow_staff_selection_for_each_item'])) {?>

            with_staff_selection = '<div class="mb-3"><select name="staff_id[]" class="form-select"><option value="0"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Select Staff');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</option><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'employee');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('employee')->value) {
$foreach13DoElse = false;
?><option value="<?php echo $_smarty_tpl->getValue('employee')->id;?>
"><?php echo $_smarty_tpl->getValue('employee')->fullname;?>
</option><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></select></div>';

            <?php }?>

            $('#blank-add').on('click', function () {
                rowNum++;



                <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>



                $invoice_items.find('tbody')
                    .append(
                        '<tr>  <td> ' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""></td> <td><input type="text" class="form-control tax_code" value="" name="tax_code[]"></td>'  +
                        ' <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach14DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td>\n' +
                        '                                            <input type="text" class="form-control cgst" disabled name="cgst[]" value="">\n' +
                        '                                        </td>\n' +
                        '                                        <td>\n' +
                        '                                            <input type="text" class="form-control sgst" disabled name="sgst[]" value="">\n' +
                        '                                        </td>\n' +
                        '                                        <td>\n' +
                        '                                            <input type="text" class="form-control igst" disabled name="igst[]" value="">\n' +
                        '                                        </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                <?php } else { ?>

                $invoice_items.find('tbody')
                    .append(
                        '<tr>  <td>' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach15DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                <?php }?>



                spEditor('#i_' + rowNum);


                spMultiSelect('#t_' + rowNum);

                //   calculateTotal();


            });

            $invoice_items.on('click', '.redactor-editor', function () {
                $("tr").removeClass("info");
                $(this).closest('tr').addClass("info");

                item_remove.show();
            });

            $modal.on('click', '.update', function () {
                var tableControl = document.getElementById('items_table');

                $.fancybox.close();


                $('input:checkbox:checked', tableControl).each(function () {
                    rowNum++;
                    var item_code = $(this).closest('tr').find('td:eq(1)').text();
                    var item_name = $(this).closest('tr').find('td:eq(2)').text();

                    var item_price = $(this).closest('tr').find('td:eq(3)').text();
                    let tax_code = $(this).closest('tr').find('td:eq(4)').text();

                    <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

                    $invoice_items.find('tbody')
                        .append(
                            '<tr>  <td>' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"> </td> <td><input type="text" class="form-control tax_code" value="' + tax_code + '" name="tax_code[]"></td>'  +
                            ' <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" value="0.00" name="discount[]"></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach16DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td>\n' +
                            '                                            <input type="text" class="form-control cgst" disabled name="cgst[]" value="">\n' +
                            '                                        </td>\n' +
                            '                                        <td>\n' +
                            '                                            <input type="text" class="form-control sgst" disabled name="sgst[]" value="">\n' +
                            '                                        </td>\n' +
                            '                                        <td>\n' +
                            '                                            <input type="text" class="form-control igst" disabled name="igst[]" value="">\n' +
                            '                                        </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                        );

                    <?php } else { ?>

                    $invoice_items.find('tbody')
                        .append(
                            '<tr>  <td>' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach17DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                        );

                    <?php }?>



                    spEditor('#i_' + rowNum);

                    spMultiSelect('#t_' + rowNum);

                    calculateTotal();

                });


                $modal.modal('hide');

            });


            $modal.on('click', '.contact_submit', function (e) {
                e.preventDefault();
                //  var tableControl= document.getElementById('items_table');


                var _url = $("#_url").val();
                $.post(_url + 'contacts/add-post/', {


                    account: $('#account').val(),
                    company: $('#company').val(),
                    address: $('#m_address').val(),


                    city: $('#city').val(),
                    state: $('#state').val(),
                    zip: $('#zip').val(),
                    country: $('#country').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val()

                })
                    .done(function (data) {

                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            // location.reload();
                            var is_recurring = $('#is_recurring').val();
                            if (is_recurring == 'yes') {
                                window.location = _url + 'invoices/add/recurring/' + data + '/';
                            }
                            else {
                                window.location = _url + 'invoices/add/1/' + data + '/';
                            }

                        }
                        else {


                            $modal
                                .modal('loading')
                                .find('.modal-body')
                                .prepend('<div class="alert alert-danger fade in">' + data +
                                    '<button type="button" class="close btn btn-danger" data-dismiss="alert">&times;</button>' +
                                    '</div>');
                            //  $("#cid").select2('data', { id: newID, text: newText });
                        }
                    });


            });


            // $("#add_discount").click(function (e) {
            //     e.preventDefault();
            //     var s_discount_amount = $('#discount_amount');
            //     var c_discount = s_discount_amount.val();
            //     var c_discount_type = $('#discount_type').val();
            //     var p_checked = "";
            //     var f_checked = "";
            //     if (c_discount_type == "p") {
            //         p_checked = 'checked="checked"';
            //     } else {
            //         f_checked = 'checked="checked"';
            //     }
            //     bootbox.dialog({
            //             title: $("#_lan_set_discount").val(),
            //             message: '<div class="row">  ' +
            //                 '<div class="col-md-12"> ' +
            //                 '<form class="form-horizontal" action="javascript:void(0);"> ' +
            //                 '<div class="mb-3"> ' +
            //                 '<label class="col-md-4 control-label" for="set_discount">' + $("#_lan_discount").val() + '</label> ' +
            //                 '<div class="col-md-4"> ' +
            //                 '<input id="set_discount" name="set_discount" type="text" class="form-control input-md" value="' + c_discount + '"> ' +
            //                 '</div> ' +
            //                 '</div> ' +
            //                 '<div class="mb-3"> ' +
            //                 '<label class="col-md-4 control-label" for="set_discount_type">' + $("#_lan_discount_type").val() + '</label> ' +
            //                 '<div class="col-md-4"> <div class="radio"> <label for="set_discount_type-0"> ' +
            //                 '<input type="radio" name="set_discount_type" id="set_discount_type-0" value="p" ' + p_checked + '> ' +
            //                 '' + $("#_lan_percentage").val() + ' (%) </label> ' +
            //                 '</div><div class="radio"> <label for="set_discount_type-1"> ' +
            //                 '<input type="radio" name="set_discount_type" id="set_discount_type-1" value="f" ' + f_checked + '> ' + $("#_lan_fixed_amount").val() + ' </label> ' +
            //                 '</div> ' +
            //                 '</div> </div>' +
            //                 '</form> </div>  </div>',
            //             buttons: {
            //                 success: {
            //                     label: $("#_lan_btn_save").val(),
            //                     className: "btn-success",
            //                     callback: function () {
            //                         var discount_amount = $('#set_discount').val();
            //                         var discount_type = $("input[name='set_discount_type']:checked").val();
            //                         $('#discount_amount').val(discount_amount);
            //                         $('#discount_type').val(discount_type);
            //                         calculateTotal();
            //                         //updateTax();
            //                         //updateTotal();
            //                     }
            //                 }
            //             }
            //         }
            //     );
            // });


            $(".progress").hide();
            $("#emsg").hide();
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'invoices/add-post/', $('#invform').serialize(), function (data) {

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'invoices/edit/' + data + '/';
                    }
                    else {
                        $('#ibox_form').unblock();
                        var body = $("html, body");
                        body.animate({ scrollTop: 0 }, '1000', 'swing');
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
                    }
                });
            });


            $("#save_n_close").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'invoices/add-post/', $('#invform').serialize(), function (data) {

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'invoices/view/' + data + '/';
                    }
                    else {
                        $('#ibox_form').unblock();
                        var body = $("html, body");
                        body.animate({ scrollTop: 0 }, '1000', 'swing');
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
                    }
                });
            });


            <?php if ($_smarty_tpl->getValue('pos') == 'pos') {?>

            function loadItems() {

                $block_items.html(block_msg);

                var item_name;

                $.getJSON(base_url + "items/all/", function (data) {
                    var items = "";
                    var b_p;
                    $.each(data, function (key, val) {

                        item_name = val.name;

                        item_name = item_name.trunc(12);


                        var image;

                        if(val.image == '') {
                            image = '<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/item_placeholder.png';
                        }
                        else{
                            image = '<?php echo $_smarty_tpl->getValue('app_url');?>
storage/items/thumb'+ val.image;
                        }


                        b_p = '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><div class="pos_item text-center" id="pos_item_'+ val.id +'" data-pos-item-name="'+val.name+'" data-pos-item-price="'+val.sales_price+'" data-pos-tax-code="'+val.tax_code+'" data-id="'+ val.id +'" data-pos-item-number="'+ val.item_number +'"><img src="'+ image +'" alt="'+ item_name +'" class="img-circle"><hr>'+ item_name +' <br>'+ val.sales_price +'  <hr></div> </div>';

                        items = items + b_p;
                    });

                    $block_items.html(items);

                    $('#ib_search_input').hideseek({
                        highlight: true
                    });

                });

            }

            loadItems();

            var pos_item_name, pos_item_price, pos_item_id, pos_item_number, pos_tax_code;

            var item_sl = 5000;

            $block_items.on('click', '.pos_item', function () {

                pos_item_number = $(this).data('pos-item-number');
                pos_item_name = $(this).data('pos-item-name');
                pos_item_price = $(this).data('pos-item-price');
                pos_item_id = $(this).data('id');
                pos_tax_code = ($(this).data('pos-tax-code')) ?? '';


                <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

                $invoice_items.find('tbody')
                    .prepend(
                        '<tr>  <td>' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + pos_item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + pos_item_number + '"> </td> <td><input type="text" class="form-control tax_code" value="' + pos_tax_code + '" name="tax_code[]"></td>'  +
                        ' <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + pos_item_price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" value="0.00" name="discount[]"></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + item_sl + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach18DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td>\n' +
                        '                                            <input type="text" class="form-control cgst" disabled name="cgst[]" value="">\n' +
                        '                                        </td>\n' +
                        '                                        <td>\n' +
                        '                                            <input type="text" class="form-control sgst" disabled name="sgst[]" value="">\n' +
                        '                                        </td>\n' +
                        '                                        <td>\n' +
                        '                                            <input type="text" class="form-control igst" disabled name="igst[]" value="">\n' +
                        '                                        </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                <?php } else { ?>


                $invoice_items.find('tbody')
                    .prepend(
                        '<tr>  <td>' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + pos_item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + pos_item_number + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + pos_item_price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + item_sl + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach19DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                <?php }?>



                spEditor('#i_' + item_sl);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl + 1;


            });



            <?php }?>


            <?php if (!empty($_smarty_tpl->getValue('config')['invoice_single_service'])) {?>

            const service_id = document.getElementById('service_id');

            service_id.addEventListener('change', () => {

                let item_sl = 15000;

                let price = service_id.options[service_id.selectedIndex].getAttribute('data-price');
                let name = service_id.options[service_id.selectedIndex].text;


                $invoice_items.find('tbody')
                    .prepend(
                        '<tr>  <td>' + with_staff_selection + '<textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + name + '</textarea> <input type="hidden" name="item_code[]" value=""></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + price + '"></td> <td colspan="2"><input type="text" class="form-control item_discount" name="discount[]" value=""></td>  <td> <select class="form-select taxed" name="taxed[]" id="t_' + item_sl + '"> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('t'), 'ts');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ts')->value) {
$foreach20DoElse = false;
?>  <option value="<?php echo $_smarty_tpl->getValue('ts')['rate'];?>
" <?php if ($_smarty_tpl->getValue('ts')['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('ts')['name'];?>
</option> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );

                spEditor('#i_' + item_sl);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl + 1;
            });

            <?php }?>

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
