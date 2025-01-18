<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:07:14
  from 'file:../default/hostbilling/client/hosting_orders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d612a6f507_66416899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ac12ed03df9649a881c1be2ffab8fd68904236' => 
    array (
      0 => '../default/hostbilling/client/hosting_orders.tpl',
      1 => 1694182324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d612a6f507_66416899 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10992306446745d612a5e2a2_59168441', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15966771116745d612a6c716_98187583', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_10992306446745d612a5e2a2_59168441 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
?>


    <div class="subheader">
        <h2 class="subheader-title">
            <i class='subheader-icon fal fa-database'></i>
            <strong><?php echo $_smarty_tpl->getValue('_L')['Hosting Orders'];?>
</strong>

        </h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="clx_datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Order'];?>
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
client/view-order/<?php echo $_smarty_tpl->getValue('order')->id;?>
/"><?php echo $_smarty_tpl->getValue('order')->tracking_id;?>
</a>
                                    </td>

                                    <td>
                                        <?php if ((null !== ($_smarty_tpl->getValue('invoices')[$_smarty_tpl->getValue('order')->invoice_id] ?? null))) {?>
                                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/iview/<?php echo $_smarty_tpl->getValue('order')->invoice_id;?>
/token_<?php echo $_smarty_tpl->getValue('invoices')[$_smarty_tpl->getValue('order')->invoice_id]->vtoken;?>
">
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
<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_15966771116745d612a6c716_98187583 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
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
