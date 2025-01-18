<?php
/* Smarty version 4.3.2, created on 2023-09-18 03:37:35
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/v/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6507fe3f080506_12863975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c48bc63eeca246cefdb78b6b3f48b33bd0f355b' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/v/layout.tpl',
      1 => 1695022652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6507fe3f080506_12863975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?>
        <title><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</title>
    <?php } else { ?>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</title>
    <?php }?>

    <link rel="stylesheet" href="<?php echo APP_URL;?>
/ui/theme/frontend/v/assets/fusion.min.css?v=5">
    <?php echo '<script'; ?>
 type="module" src="<?php echo APP_URL;?>
/ui/theme/frontend/v/assets/fusion.min.js?v=5"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>
    <style>
        :root, [data-bs-theme=light] {
            --bs-primary: #0E65FF;
        }
    </style>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14680992406507fe3f054215_96221890', "head");
?>

</head>
<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">



        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['announcement_bar_message'])) {?>
            <div class="text-white fw-bold fs-15 mb-2" style="background: <?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['announcement_bar_background_color'] ?? null)===null||$tmp==='' ? '#1D2025' ?? null : $tmp);?>
">
                <div class="container py-2 text-center">
                    <?php echo $_smarty_tpl->tpl_vars['config']->value['announcement_bar_message'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['announcement_bar_link_url'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['announcement_bar_link_url'];?>
" class="badge badge-lg bg-white text-primary rounded ms-2"><?php echo $_smarty_tpl->tpl_vars['config']->value['announcement_bar_link_text'];?>
</a><?php }?>
                </div>
            </div>
        <?php }?>


        <nav
                <?php if (!empty($_smarty_tpl->tpl_vars['navBarType']->value) && $_smarty_tpl->tpl_vars['navBarType']->value == 'dark') {?>
                    class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark"
                <?php } else { ?>
                    class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light"
                <?php }?>
        >
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client">
                        <?php if (!empty($_smarty_tpl->tpl_vars['navBarType']->value) && $_smarty_tpl->tpl_vars['navBarType']->value == 'dark') {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_inverse'];?>
?v=1" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" style="max-height: 45px;" />
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
?v=1" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" style="max-height: 35px;" />
                        <?php }?>
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">
                        </button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client"><?php echo __('Home');?>
</a>
                            </li>


                            <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value['hosting'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('Hosting');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['hosting'], 'group_obj');
$_smarty_tpl->tpl_vars['group_obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_obj']->value) {
$_smarty_tpl->tpl_vars['group_obj']->do_else = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group_obj']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['group_obj']->value->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>



                            <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value['vps'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('VPS');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['vps'], 'group_obj');
$_smarty_tpl->tpl_vars['group_obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_obj']->value) {
$_smarty_tpl->tpl_vars['group_obj']->do_else = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group_obj']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['group_obj']->value->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value['dedicated'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('Dedicated');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['dedicated'], 'group_obj');
$_smarty_tpl->tpl_vars['group_obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_obj']->value) {
$_smarty_tpl->tpl_vars['group_obj']->do_else = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group_obj']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['group_obj']->value->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['groups']->value['other'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('More Products');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['other'], 'group_obj');
$_smarty_tpl->tpl_vars['group_obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_obj']->value) {
$_smarty_tpl->tpl_vars['group_obj']->do_else = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group_obj']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['group_obj']->value->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['menu_items']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_items']->value, 'menu_item');
$_smarty_tpl->tpl_vars['menu_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->do_else = false;
?>

                                    <?php if (empty($_smarty_tpl->tpl_vars['menu_item']->value['children'])) {?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu_item']->value['name'];?>
</a>
                                        </li>
                                        <?php } else { ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['menu_item']->value['name'];?>
</a>
                                            <ul class="dropdown-menu">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_item']->value['children'], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['child']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a>
                                                    </li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </li>
                                    <?php }?>


                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php }?>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/contact"><?php echo __('Contact');?>
</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
client/dashboard" class="btn btn-sm btn-primary rounded-pill"><?php echo __('Dashboard');?>
</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn">
				<span>
				</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14102190286507fe3f06ed86_07123055', "content");
?>


</div>
<footer style="background: linear-gradient(90deg,#142149,#233ba2); color: rgba(229,235,255,.56);">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" style="max-height: 35px;" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" />
                    <p class="mb-4">© <?php ob_start();
echo date('Y');
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">

                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_facebook'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_facebook'];?>
">
                                <i class="uil uil-facebook-f">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_twitter'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_twitter'];?>
">
                                <i class="uil uil-twitter">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_instagram'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_instagram'];?>
">
                                <i class="uil uil-instagram">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_linkedin'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_linkedin'];?>
">
                                <i class="uil uil-linkedin">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_youtube'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_youtube'];?>
">
                                <i class="uil uil-youtube">
                                </i>
                            </a><?php }?>

                    </nav>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_title'] ?? null)===null||$tmp==='' ? 'Quick Links' ?? null : $tmp);?>
</h4>

                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links']) && !empty(json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links'],true))) {?>

                        <ul class="list-unstyled text-reset mb-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links'],true), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>

                    <?php } else { ?>

                        <p>
                            Add links to your footer by login to admin then go to CMS -> Configure
                        </p>

                    <?php }?>

                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_title'] ?? null)===null||$tmp==='' ? 'Quick Links' ?? null : $tmp);?>
</h4>

                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links']) && !empty(json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links'],true))) {?>

                        <ul class="list-unstyled text-reset mb-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links'],true), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>

                    <?php } else { ?>

                        <p>
                            Add links to your footer by login to admin then go to CMS -> Configure
                        </p>

                    <?php }?>

                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['contact_widget_title'] ?? null)===null||$tmp==='' ? 'Contact Widget' ?? null : $tmp);?>
</h4>
                    <div class="mb-4"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['contact_widget_description'] ?? null)===null||$tmp==='' ? 'Contact Widget Description, change it from CMS -> Configure' ?? null : $tmp);?>
</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15001816056507fe3f07eca8_48532718', "scripts");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_14680992406507fe3f054215_96221890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14680992406507fe3f054215_96221890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_14102190286507fe3f06ed86_07123055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14102190286507fe3f06ed86_07123055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_15001816056507fe3f07eca8_48532718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_15001816056507fe3f07eca8_48532718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}
