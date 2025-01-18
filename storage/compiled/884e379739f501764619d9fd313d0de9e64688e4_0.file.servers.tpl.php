<?php
/* Smarty version 4.3.2, created on 2023-08-30 12:15:48
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/servers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ef6b347d89a6_20389083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '884e379739f501764619d9fd313d0de9e64688e4' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/servers.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ef6b347d89a6_20389083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175811507664ef6b347c3b24_76220683', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149971954264ef6b347d81b0_36081870', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_175811507664ef6b347c3b24_76220683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_175811507664ef6b347c3b24_76220683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Servers'];?>
</h3>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-server-type/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Server'];?>
</a>
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
                <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                <tr>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['server']->value->type;?>
</a>
                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
</a>
                    </td>
                    <td class="text-end">
                        <?php if ($_smarty_tpl->tpl_vars['server']->value->type === 'cpanel' || $_smarty_tpl->tpl_vars['server']->value->type === 'directadmin') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server-list-accounts/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Accounts'];?>
</a>
                            <?php } else { ?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['buttons_for_server_type']->value[$_smarty_tpl->tpl_vars['server']->value->type])) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons_for_server_type']->value[$_smarty_tpl->tpl_vars['server']->value->type], 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                    <a

                                            <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['external_link'])) {?>
                                                href="<?php echo $_smarty_tpl->tpl_vars['button']->value['external_link'];?>
"
                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['button']->value['link'])) {?>
                                                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/"
                                            <?php }?>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['target'])) {?>
                                                target="<?php echo $_smarty_tpl->tpl_vars['button']->value['target'];?>
"
                                            <?php }?>


                                             class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
</a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php }?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        <a href="javascript:;" class="btn btn-danger" onclick="confirmThenGoToUrl(event,'hostbilling/delete-server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
')">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>

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
class Block_149971954264ef6b347d81b0_36081870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_149971954264ef6b347d81b0_36081870',
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
