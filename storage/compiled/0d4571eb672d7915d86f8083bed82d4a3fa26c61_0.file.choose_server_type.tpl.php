<?php
/* Smarty version 4.3.2, created on 2023-09-15 07:01:59
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/choose_server_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_650439a7a8b295_69673935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4571eb672d7915d86f8083bed82d4a3fa26c61' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/choose_server_type.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650439a7a8b295_69673935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1715259953650439a7a71230_09306579', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1243041252650439a7a8ab64_22821756', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1715259953650439a7a71230_09306579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1715259953650439a7a71230_09306579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Server Type'];?>
</h1>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_server_types']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/0/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h2>
                        </div>
                    </div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1243041252650439a7a8ab64_22821756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1243041252650439a7a8ab64_22821756',
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
