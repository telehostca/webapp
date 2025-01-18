<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:39:39
  from 'file:../default/client_products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be75bbd1d63_08571437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669280fa6656e6d0b0bd1d49bcf36ca5d655806e' => 
    array (
      0 => '../default/client_products.tpl',
      1 => 1734269468,
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
))) {
function content_678be75bbd1d63_08571437 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1443271122678be75bbbfd61_50728379', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_client')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1443271122678be75bbbfd61_50728379 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>


    <div class="row">
        <div class="col">
            <h1 class="mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Products');?>
</h1>
        </div>
        <div class="col text-end">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client" class="btn btn-primary mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Add New Service');?>

            </a>
        </div>
    </div>

    <div class="mb-3">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('selected_tab') == 'hosting') {?>active<?php }?>" aria-current="page" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/hosting"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Hosting');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('selected_tab') == 'domains') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/domains"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Domains');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('selected_tab') == 'vps') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/vps"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('VPS');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('selected_tab') == 'dedicated') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/dedicated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Dedicated');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('selected_tab') == 'ssl') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/ssl"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('SSL');?>
</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_smarty_tpl->getValue('selected_tab') == 'other') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products/other"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Other');?>
</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-body">
            <?php if ($_smarty_tpl->getValue('selected_tab') == 'hosting') {?>
                <?php $_smarty_tpl->renderSubTemplate('file:hostbilling/client/products/hosting.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('selected_tab') == 'domains') {?>
                <?php $_smarty_tpl->renderSubTemplate('file:hostbilling/client/products/domains.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('selected_tab') == 'vps') {?>
                <?php $_smarty_tpl->renderSubTemplate('file:hostbilling/client/products/vps.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('selected_tab') == 'dedicated') {?>
                <?php $_smarty_tpl->renderSubTemplate('file:hostbilling/client/products/dedicated.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('selected_tab') == 'ssl') {?>
                <?php $_smarty_tpl->renderSubTemplate('file:hostbilling/client/products/ssl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('selected_tab') == 'other') {?>
                <?php $_smarty_tpl->renderSubTemplate('file:hostbilling/client/products/other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
