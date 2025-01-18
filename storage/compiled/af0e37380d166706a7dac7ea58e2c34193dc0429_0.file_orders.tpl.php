<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:27
  from 'file:../default/hostbilling/admin/orders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d34fbd01b2_28827070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0e37380d166706a7dac7ea58e2c34193dc0429' => 
    array (
      0 => '../default/hostbilling/admin/orders.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d34fbd01b2_28827070 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12066657236745d34fbbb772_90925888', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12599869576745d34fbcd8f0_35042052', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_12066657236745d34fbbb772_90925888 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-window'></i> <?php echo $_smarty_tpl->getValue('_L')['Orders'];?>


        </h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Order'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Invoice'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                                    <th>
                                        <?php echo $_smarty_tpl->getValue('_L')['Domain'];?>


                                    </th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$_smarty_tpl->getVariable('order')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('order')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('order');
?>
                                    <tr>
                                        <td data-value="<?php echo $_smarty_tpl->getValue('order')->id;?>
" data-order="<?php echo $_smarty_tpl->getVariable('order')->iteration;?>
">
                                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
hostbilling/order/<?php echo $_smarty_tpl->getValue('order')->id;?>
/"><?php echo $_smarty_tpl->getValue('order')->tracking_id;?>
</a>
                                        </td>
                                        <td>
                                            <?php if ((null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('order')->contact_id] ?? null))) {?>
                                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('order')->contact_id;?>
/summary/"><?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('order')->contact_id]->account;?>
</a>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if ((null !== ($_smarty_tpl->getValue('invoices')[$_smarty_tpl->getValue('order')->invoice_id] ?? null))) {?>
                                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('order')->invoice_id;?>
/">
                                                    <?php echo $_smarty_tpl->getValue('invoices')[$_smarty_tpl->getValue('order')->invoice_id]->invoicenum;
echo $_smarty_tpl->getValue('invoices')[$_smarty_tpl->getValue('order')->invoice_id]->cn;?>

                                                </a>
                                            <?php }?>
                                        </td>
                                        <td data-value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('order')->date);?>
">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('order')->date));?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->getValue('order')->domain;?>

                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->getValue('order')->status === 'Approved') {?>
                                                <span class="badge bg-success">Approved</span>
                                                <?php } elseif ($_smarty_tpl->getValue('order')->status === 'Fraud') {?>
                                                <span class="badge bg-danger">Fraud</span>
                                                <?php } elseif ($_smarty_tpl->getValue('order')->status === 'Pending') {?>
                                                <span class="badge bg-primary">Pending</span>
                                                <?php } elseif ($_smarty_tpl->getValue('order')->status === 'Cancelled') {?>
                                                <span class="badge bg-secondary">Cancelled</span>
                                                <?php } elseif ($_smarty_tpl->getValue('order')->status === 'Expired') {?>
                                                <span class="badge bg-warning">Expired</span>
                                                <?php } else { ?>
                                                <span class="badge bg-secondary"><?php echo $_smarty_tpl->getValue('order')->status;?>
</span>
                                            <?php }?>


                                        </td>


                                    </tr>
                                <?php
$_smarty_tpl->setVariable('order', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

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
/* {block 'script'} */
class Block_12599869576745d34fbcd8f0_35042052 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
?>


<?php echo '<script'; ?>
>

    $(function () {
        $('#clx_datatable').dataTable(
            {
                responsive: true,
                lengthChange: false,
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
            }
        );
    });

<?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
