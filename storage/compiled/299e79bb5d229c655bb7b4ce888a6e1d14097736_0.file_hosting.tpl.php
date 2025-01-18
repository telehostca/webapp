<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:39:39
  from 'file:hostbilling/client/products/hosting.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be75bbf37d2_45577130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299e79bb5d229c655bb7b4ce888a6e1d14097736' => 
    array (
      0 => 'hostbilling/client/products/hosting.tpl',
      1 => 1693759020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678be75bbf37d2_45577130 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/client/products';
?><div class="table-responsive">
    <table class="table table-bordered mb-4">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Name');?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('IP');?>
</th>
            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Plan');?>
</th>
            <th class="text-center">Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('hosting_orders'), 'hosting_order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('hosting_order')->value) {
$foreach0DoElse = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/view-product/<?php echo $_smarty_tpl->getValue('hosting_order')->id;?>
/<?php echo $_smarty_tpl->getValue('hosting_order')->tracking_id;?>
">

                        <div class="text-bold">
                            <?php if (!empty($_smarty_tpl->getValue('hosting_plans')[$_smarty_tpl->getValue('hosting_order')->plan_id])) {?>
                                <?php echo $_smarty_tpl->getValue('hosting_plans')[$_smarty_tpl->getValue('hosting_order')->plan_id]->name;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getValue('hosting_order')->tracking_id;?>

                            <?php }?>
                        </div>

                        <?php if (!empty($_smarty_tpl->getValue('hosting_order')->domain)) {?>
                            <div class="mt-3">
                                <?php echo $_smarty_tpl->getValue('hosting_order')->domain;?>

                            </div>
                        <?php }?>

                    </a>
                </td>
                <td>
                    <?php if (!empty($_smarty_tpl->getValue('hosting_order')->ip)) {?>
                        <?php echo $_smarty_tpl->getValue('hosting_order')->ip;?>

                    <?php } else { ?>
                        -
                    <?php }?>
                </td>
                <td>Pro</td>
                <td class="text-center"><span class="text-success">Active</span></td>
                <td class="text-center">
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/hosting/1" class="btn btn-sm btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Manage');?>
</a>
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
