<?php
/* Smarty version 4.3.2, created on 2023-09-03 06:37:12
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/client/products/hosting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f461d884c7b5_34464889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6881272b84aeb058ef0b82b99dcc0f9871bbfb73' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/client/products/hosting.tpl',
      1 => 1693737418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f461d884c7b5_34464889 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive">
    <table class="table table-bordered mb-4">
        <thead>
        <tr>
            <th><?php echo __('Name');?>
</th>
            <th><?php echo __('IP');?>
</th>
            <th><?php echo __('Plan');?>
</th>
            <th class="text-center">Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hosting_orders']->value, 'hosting_order');
$_smarty_tpl->tpl_vars['hosting_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hosting_order']->value) {
$_smarty_tpl->tpl_vars['hosting_order']->do_else = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-product/<?php echo $_smarty_tpl->tpl_vars['hosting_order']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['hosting_order']->value->tracking_id;?>
">

                        <div class="text-bold">
                            <?php if (!empty($_smarty_tpl->tpl_vars['hosting_plans']->value[$_smarty_tpl->tpl_vars['hosting_order']->value->plan_id])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['hosting_plans']->value[$_smarty_tpl->tpl_vars['hosting_order']->value->plan_id]->name;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['hosting_order']->value->tracking_id;?>

                            <?php }?>
                        </div>

                        <?php if (!empty($_smarty_tpl->tpl_vars['hosting_order']->value->domain)) {?>
                            <div class="mt-3">
                                <?php echo $_smarty_tpl->tpl_vars['hosting_order']->value->domain;?>

                            </div>
                        <?php }?>

                    </a>
                </td>
                <td>
                    <?php if (!empty($_smarty_tpl->tpl_vars['hosting_order']->value->ip)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['hosting_order']->value->ip;?>

                    <?php } else { ?>
                        -
                    <?php }?>
                </td>
                <td>Pro</td>
                <td class="text-center"><span class="text-success">Active</span></td>
                <td class="text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/hosting/1" class="btn btn-sm btn-primary"><?php echo __('Manage');?>
</a>
                </td>
            </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
</div>
<?php }
}
