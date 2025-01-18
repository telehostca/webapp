<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:29
  from 'file:../default/invoices_filter_result.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3518f40f8_57653162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17fcca7c531d04a865c546b12f6591e5eba23eaa' => 
    array (
      0 => '../default/invoices_filter_result.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3518f40f8_57653162 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?><div class="row mb-3">
    <div class="col">
        <?php if ($_smarty_tpl->getValue('type') == 'credit-notes') {?>

            <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Credit Notes');?>
</h2>

        <?php } else { ?>

            <h2><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</h2>


        <?php }?>
    </div>
</div>


<div class="mb-3">
    <span class="fw-bold"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Found');?>
:</span> <strong><?php echo $_smarty_tpl->getValue('total_invoices_found');?>
</strong> | <span class="fw-bold"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Amount');?>
:</span> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('total_by_currency'), 'value', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?> <span class="text-muted"><?php echo $_smarty_tpl->getValue('key');?>
:</span> <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('value'),$_smarty_tpl->getValue('key'));?>
</strong> <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<div class="table-responsive">
    <table id="clx_datatable" class="table table-striped">
        <thead style="background: #f0f2ff">
        <tr>
            <th>#</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
            <?php if (!empty($_smarty_tpl->getValue('config')['invoice_group'])) {?>
                <th>
                    <?php echo $_smarty_tpl->getValue('_L')['Group'];?>

                </th>
            <?php }?>
            <?php if (!empty($_smarty_tpl->getValue('config')['invoice_single_service'])) {?>
                <th>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Service');?>

                </th>
            <?php }?>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Staff');?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Invoice Date'];?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
</th>
            <th>
                <?php echo $_smarty_tpl->getValue('_L')['Status'];?>

            </th>
            <?php if (!empty($_smarty_tpl->getValue('config')['invoice_items_purchasing'])) {?>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Purchase Status');?>
</th>
            <?php }?>
            <?php if (!empty($_smarty_tpl->getValue('config')['invoice_items_shipping'])) {?>
                <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Shipping Status');?>
</th>
            <?php }?>
            <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
            <th class="text-end" width="140px;"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('invoices'), 'invoice');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('invoice')->value) {
$foreach1DoElse = false;
?>
            <tr>
                <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/"><?php echo $_smarty_tpl->getValue('invoice')->invoicenum;
if ($_smarty_tpl->getValue('invoice')->cn != '') {?> <?php echo $_smarty_tpl->getValue('invoice')->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('invoice')->id;?>
 <?php }?></a> </td>
                <td>
                    <?php if ((null !== ($_smarty_tpl->getValue('customers')[$_smarty_tpl->getValue('invoice')->id] ?? null))) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/">
                            <strong>
                                <?php echo $_smarty_tpl->getValue('invoice')->account;?>

                                <?php if ($_smarty_tpl->getValue('customers')[$_smarty_tpl->getValue('invoice')->userid]->company != '') {?>
                                    <br>  <?php echo $_smarty_tpl->getValue('customers')[$_smarty_tpl->getValue('invoice')->userid]->company;?>

                                <?php }?>
                            </strong>
                        </a>
                    <?php } elseif (!empty($_smarty_tpl->getValue('invoice')->account)) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/">
                            <strong>
                                <?php echo $_smarty_tpl->getValue('invoice')->account;?>

                            </strong>
                        </a>
                    <?php }?>
                </td>

                <?php if (!empty($_smarty_tpl->getValue('config')['invoice_group'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->getValue('invoice_groups')[$_smarty_tpl->getValue('invoice')->group_id])) {?>
                            <?php echo $_smarty_tpl->getValue('invoice_groups')[$_smarty_tpl->getValue('invoice')->group_id]->name;?>

                        <?php }?>
                    </td>
                <?php }?>

                <?php if (!empty($_smarty_tpl->getValue('config')['invoice_single_service'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->getValue('services')[$_smarty_tpl->getValue('invoice')->service_id])) {?>
                            <?php echo $_smarty_tpl->getValue('services')[$_smarty_tpl->getValue('invoice')->service_id]->name;?>

                        <?php }?>
                    </td>
                <?php }?>

                <td>
                    <?php if (!empty($_smarty_tpl->getValue('invoice')->aid)) {?>
                        <?php echo $_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('invoice')->aid]->fullname;?>

                    <?php }?>
                </td>

                <td>
                    <?php if (!empty($_smarty_tpl->getValue('invoice')->title)) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/">
                            <?php echo $_smarty_tpl->getValue('invoice')->title;?>

                        </a>
                    <?php }?>
                </td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('invoice')->total,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
</td>
                <td data-value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->date);?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->date));?>
</td>
                <td data-value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->duedate);?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->duedate));?>
</td>
                <td>

                    <?php if ($_smarty_tpl->getValue('invoice')->status == 'Unpaid') {?>
                        <span class="badge bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                    <?php } elseif ($_smarty_tpl->getValue('invoice')->status == 'Paid') {?>
                        <span class="badge bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                    <?php } elseif ($_smarty_tpl->getValue('invoice')->status == 'Partially Paid') {?>
                        <span class="badge bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                    <?php } elseif ($_smarty_tpl->getValue('invoice')->status == 'Cancelled') {?>
                        <span class="badge bg-secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                    <?php } else { ?>
                        <span class="badge bg-info text-white"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                    <?php }?>



                </td>



                <?php if (!empty($_smarty_tpl->getValue('config')['invoice_items_purchasing'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->getValue('invoice')->purchase_status)) {?>
                            <?php if ($_smarty_tpl->getValue('invoice')->purchase_status == 'Purchased') {?>
                                <span class="badge bg-success text-white"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->purchase_status);?>
</span>
                            <?php } else { ?>
                                <span class="badge bg-info text-white"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->purchase_status);?>
</span>
                            <?php }?>
                        <?php }?>
                    </td>
                <?php }?>
                <?php if (!empty($_smarty_tpl->getValue('config')['invoice_items_shipping'])) {?>
                    <td>
                        <?php if (!empty($_smarty_tpl->getValue('invoice')->shipping_status)) {?>
                            <?php if ($_smarty_tpl->getValue('invoice')->shipping_status == 'Shipped') {?>
                                <span class="badge bg-success text-white"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->shipping_status);?>
</span>
                            <?php } else { ?>
                                <span class="badge bg-info text-white"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->shipping_status);?>
</span>
                            <?php }?>
                        <?php }?>
                    </td>
                <?php }?>

                <td>
                    <?php if ($_smarty_tpl->getValue('invoice')->r == '0') {?>
                        <span class="badge bg-success"><?php echo $_smarty_tpl->getValue('_L')['Onetime'];?>
</span>
                    <?php } else { ?>
                        <span class="badge bg-primary"><?php echo $_smarty_tpl->getValue('_L')['Recurring'];?>
</span>
                    <?php }?>
                </td>
                <td class="text-end">


                    <div class="btn-group">
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/" class="btn btn-primary btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['View'];?>
"><i class="fal fa-file-alt"></i></a>

                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/clone/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/" class="btn btn-success btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Clone'];?>
"><i class="fal fa-copy"></i></a>


                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/edit/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
"><i class="fal fa-file-edit"></i></a>

                        <?php if ($_smarty_tpl->getValue('invoice')['r'] != '0') {?>

                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/stop_recurring/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Stop Recurring'];?>
"><i class="fal fa-stop"></i></a>

                        <?php }?>

                        <a href="#" class="btn btn-danger btn-icon cdelete" id="iid<?php echo $_smarty_tpl->getValue('invoice')->id;?>
" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                    </div>


                </td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </tbody>



    </table>
</div>
<?php }
}
