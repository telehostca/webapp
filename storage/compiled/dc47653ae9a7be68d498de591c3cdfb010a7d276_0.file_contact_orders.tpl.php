<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:05:26
  from 'file:../default/hostbilling/admin/contact_orders.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d5a6ad17b1_11065082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc47653ae9a7be68d498de591c3cdfb010a7d276' => 
    array (
      0 => '../default/hostbilling/admin/contact_orders.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d5a6ad17b1_11065082 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18632970336745d5a6ac2326_01191926', "inner_content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl", $_smarty_current_dir);
}
/* {block "inner_content"} */
class Block_18632970336745d5a6ac2326_01191926 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->getValue('_L')['Order'];?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>
            <th><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</th>


        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'recent_order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('recent_order')->value) {
$foreach0DoElse = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
hostbilling/order/<?php echo $_smarty_tpl->getValue('recent_order')->id;?>
">
                        <?php echo $_smarty_tpl->getValue('recent_order')->tracking_id;?>

                    </a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('recent_order')->created_at));?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->getValue('recent_order')->total;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_invoice_status_with_badge')($_smarty_tpl->getValue('recent_order')->status);?>

                </td>
            </tr>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


        </tbody>
    </table>


<?php
}
}
/* {/block "inner_content"} */
}
