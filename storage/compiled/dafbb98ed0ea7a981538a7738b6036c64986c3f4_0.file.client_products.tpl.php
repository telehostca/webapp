<?php
/* Smarty version 4.3.2, created on 2023-09-03 06:16:53
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/client_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f45d15634a57_25016801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dafbb98ed0ea7a981538a7738b6036c64986c3f4' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/client_products.tpl',
      1 => 1693736199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:hostbilling/client/products/hosting.tpl' => 1,
    'file:hostbilling/client/products/domains.tpl' => 1,
    'file:hostbilling/client/products/vps.tpl' => 1,
    'file:hostbilling/client/products/dedicated.tpl' => 1,
    'file:hostbilling/client/products/ssl.tpl' => 1,
    'file:hostbilling/client/products/other.tpl' => 1,
  ),
),false)) {
function content_64f45d15634a57_25016801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33529383164f45d15629779_71679815', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_33529383164f45d15629779_71679815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33529383164f45d15629779_71679815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col">
            <h1 class="mb-3"><?php echo __('Products');?>
</h1>
        </div>
        <div class="col text-end">
            <a class="btn btn-primary mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> <?php echo __('Add New Service');?>
</a>
        </div>
    </div>

    <div class="mb-3">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'hosting') {?>active<?php }?>" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/hosting"><?php echo __('Hosting');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'domains') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/domains"><?php echo __('Domains');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'vps') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/vps"><?php echo __('VPS');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'dedicated') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/dedicated"><?php echo __('Dedicated');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'ssl') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/ssl"><?php echo __('SSL');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'other') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products/other"><?php echo __('Other');?>
</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-body">
            <?php if ($_smarty_tpl->tpl_vars['selected_tab']->value == 'hosting') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:hostbilling/client/products/hosting.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['selected_tab']->value == 'domains') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:hostbilling/client/products/domains.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['selected_tab']->value == 'vps') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:hostbilling/client/products/vps.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['selected_tab']->value == 'dedicated') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:hostbilling/client/products/dedicated.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['selected_tab']->value == 'ssl') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:hostbilling/client/products/ssl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['selected_tab']->value == 'other') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:hostbilling/client/products/other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
