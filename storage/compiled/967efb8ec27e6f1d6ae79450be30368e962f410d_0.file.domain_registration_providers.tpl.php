<?php
/* Smarty version 4.3.2, created on 2023-08-30 12:15:45
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/domain_registration_providers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ef6b31191198_04313241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '967efb8ec27e6f1d6ae79450be30368e962f410d' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/domain_registration_providers.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ef6b31191198_04313241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136615620464ef6b3116f471_49147373', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183070791764ef6b31190811_88762064', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_136615620464ef6b3116f471_49147373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136615620464ef6b3116f471_49147373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain Registration Providers'];?>
</h3>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-domain-registration-provider/">Add New Provider</a>
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain_registration_providers']->value, 'domain_registration_provider');
$_smarty_tpl->tpl_vars['domain_registration_provider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain_registration_provider']->value) {
$_smarty_tpl->tpl_vars['domain_registration_provider']->do_else = false;
?>
                    <tr>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->type;?>
</a>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->name;?>
</a>
                        </td>
                        <td>
                            <a href="javascript:;" class="btn btn-danger" onclick="confirmThenGoToUrl(event,'hostbilling/delete-domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
')">
                                Delete
                            </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/domain-registration-provider/<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_183070791764ef6b31190811_88762064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_183070791764ef6b31190811_88762064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
