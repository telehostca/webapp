<?php
/* Smarty version 4.3.2, created on 2023-08-11 05:11:56
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/invoices_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d5fb5c824486_08518197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bed2935b57353f63e807001c71b4f43dfad93b0' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/invoices_list.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d5fb5c824486_08518197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143816551264d5fb5c7d32a3_73298480', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171378252064d5fb5c7d6624_81701927', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78289358164d5fb5c8205d1_17015779', "script");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_143816551264d5fb5c7d32a3_73298480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_143816551264d5fb5c7d32a3_73298480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>
        <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
        .bg-success{
            color:#23a52d;
        }
        .bg-info{
            color:#2F92B5!important;
        }
        <?php }?>


    </style>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_171378252064d5fb5c7d6624_81701927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_171378252064d5fb5c7d6624_81701927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>






    <div class="row">
        <div class="col-md-12">

            <div class="panel">

                <div class="panel-hdr">




                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>


                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Invoice'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices/" class="btn btn-warning btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View Reports'];?>
</a>
                        </div>

                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-stat2" style="background: linear-gradient(87deg,#2dce89 0,#2dcecc 100%)!important;border-radius: .375rem; min-height: 1px;
    padding: 1.5rem;
    flex: 1 1 auto">
                                    <div class="number">
                                        <h3 class="h2 font-weight-bold mb-0 text-white">
                                            <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                        </h3>
                                        <small class="h5  mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</small>
                                    </div>

                                    <div class="progress-info">


                                        <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
%;" class="progress-bar bg-info">

                                            </span>
                                        </div>
                                        <div class="progress-status">
                                            <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2" style="background: linear-gradient(87deg,#f5365c 0,#f56036 100%)!important;    border-radius: .375rem;min-height: 1px;
    padding: 1.5rem;
    flex: 1 1 auto">
                                    <div class="number">
                                        <h3 class="h2 font-weight-bold mb-0 text-white">
                                            <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_unpaid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                        </h3>
                                        <small class="h5 mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</small>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%;" class="progress-bar  bg-success">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%</span>
                                            </span>
                                        </div>
                                        <div class="progress-status">
                                            <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#5e72e4 0,#825ee4 100%)!important;    border-radius: .375rem; rgba(0,0,0,.05); min-height: 1px;
    padding: 1.5rem;
    flex: 1 1 auto">
                                    <div class="number">
                                        <h3 class="h2 font-weight-bold mb-0 text-white">
                                            <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_partially_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                        </h3>
                                        <small class="h5 mb-0 text-white""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</small>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%;" class="progress-bar  bg-success">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%</span>
                                            </span>
                                        </div>
                                        <div class="progress-status">
                                            <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-stat2 " style="background: linear-gradient(87deg,#172b4d 0,#1a174d 100%)!important;   border-radius: .375rem;min-height: 1px;
    padding: 1.5rem;
    flex: 1 1 auto">
                                    <div class="number">
                                        <h3 class="h2 font-weight-bold mb-0 text-white">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice_cancelled_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</span>
                                        </h3>
                                        <small class="h5  mb-0 text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</small>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%;" class="progress-bar bg-success">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%</span>
                                            </span>
                                        </div>
                                        <div class="progress-status">
                                            <div class="text-nowrap text-white font-weight-600"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'filter') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'unpaid') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'partially_paid') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/partially_paid/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link  <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'paid') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/paid/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'cancelled') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/cancelled/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'all') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/list/0/all/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                        </ul>




                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table footable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th>#</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Group'];?>
</th>
                                    <th><?php echo __('Staff');?>
</th>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                                        <th>
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>

                                        </th>
                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                                        <th>
                                            <?php echo __('Service');?>

                                        </th>
                                    <?php }?>


                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>



                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</th>
                                    <th><?php ob_start();
echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                                    <th>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </th>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>
                                        <th><?php echo __('Purchase Cost');?>
</th>
                                    <?php }?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>
                                        <th><?php echo __('Shipping Cost');?>
</th>
                                    <?php }?>
                                    <th class="text-end" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->iteration = 0;
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
$_smarty_tpl->tpl_vars['ds']->iteration++;
$__foreach_ds_0_saved = $_smarty_tpl->tpl_vars['ds'];
?>
                                    <tr>
                                        <td data-value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['ds']->iteration;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]))) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/">
                                                    <strong>
                                                        <?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>

                                                        <?php if ($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->company != '') {?>
                                                            <br>  <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->company;?>

                                                        <?php }?>
                                                    </strong>
                                                </a>
                                                <?php if ($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->email != '') {?>
                                                    <div class="mt-1">
                                                        <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->email;?>

                                                    </div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->phone != '') {?>
                                                    <div class="mt-1">
                                                        <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->phone;?>

                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]))) {?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->gid)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['ds']->value['userid']]->gname;?>

                                                <?php }?>
                                            <?php }?>
                                        </td>

                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['ds']->value['aid']]))) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['ds']->value['aid']]->fullname;?>

                                            <?php }?>
                                        </td>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_group'])) {?>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['invoice_groups']->value[$_smarty_tpl->tpl_vars['ds']->value['group_id']])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['invoice_groups']->value[$_smarty_tpl->tpl_vars['ds']->value['group_id']]->name;?>

                                                <?php }?>
                                            </td>
                                        <?php }?>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_single_service'])) {?>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['ds']->value['service_id']])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['ds']->value['service_id']]->name;?>

                                                <?php }?>
                                            </td>
                                        <?php }?>

                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['title'])) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/">
                                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>

                                                </a>
                                            <?php }?>
                                        </td>
                                        <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['total'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>
</td>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['credit'] && $_smarty_tpl->tpl_vars['ds']->value['credit'] > 0)) {?>
                                                <?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['credit'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['credit'] && $_smarty_tpl->tpl_vars['ds']->value['credit'] > 0) && $_smarty_tpl->tpl_vars['ds']->value['credit'] < $_smarty_tpl->tpl_vars['ds']->value['total']) {?>
                                                <?php echo formatCurrency(($_smarty_tpl->tpl_vars['ds']->value['total']-$_smarty_tpl->tpl_vars['ds']->value['credit']),$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>

                                            <?php }?>
                                        </td>
                                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['date']);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                                        <td>

                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                                <span class="badge badge-outline badge-outline-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                                <span class="badge badge-outline badge-outline-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
                                                <span class="badge badge-outline badge-outline-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                                <span class="badge badge-outline badge-outline-warning"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } else { ?>
                                                <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

                                            <?php }?>



                                        </td>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['purchase_cost'])) {?>
                                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['purchase_cost'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>

                                                <?php }?>
                                            </td>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['ds']->value['shipping_cost'])) {?>
                                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['shipping_cost'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>

                                                <?php }?>
                                            </td>
                                        <?php }?>

                                        <td class="text-end">


                                            <div class="btn-group">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/clone/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-copy"></i></a>


                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-file-edit"></i></a>

                                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['r'] != '0') {?>

                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/stop_recurring/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Stop Recurring'];?>
"><i class="fal fa-stop"></i></a>

                                                <?php }?>

                                                <a href="#" class="btn btn-danger btn-icon cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                                            </div>


                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['ds'] = $__foreach_ds_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_78289358164d5fb5c8205d1_17015779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_78289358164d5fb5c8205d1_17015779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                            extend:    'colvis',
                            text:      'Column Visibility',
                            titleAttr: 'Col visibility',
                            className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-warning btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary btn-sm'
                        }
                    ],
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );


            $modal.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                app.confirm("<?php echo __('are_you_sure');?>
", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/invoice/" + id;
                    }
                });


            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
