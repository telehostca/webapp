<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:54:49
  from 'file:/Users/razib/Herd/hbpro/ui/theme/frontend/v/./layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3298e6933_35693781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b36b37fe7ad8a299e6d951ffd706d19c42a7a0' => 
    array (
      0 => '/Users/razib/Herd/hbpro/ui/theme/frontend/v/./layout.tpl',
      1 => 1694993854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3298e6933_35693781 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (!empty($_smarty_tpl->getValue('post'))) {?>
        <title><?php echo $_smarty_tpl->getValue('post')['title'];?>
</title>
    <?php } else { ?>
        <title><?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>
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
        var base_url = '<?php echo $_smarty_tpl->getValue('_url');?>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14099171466745d3298bac46_44614647', "head");
?>

</head>
<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">



        <?php if (!empty($_smarty_tpl->getValue('config')['announcement_bar_message'])) {?>
            <div class="text-white fw-bold fs-15 mb-2" style="background: <?php echo (($tmp = $_smarty_tpl->getValue('config')['announcement_bar_background_color'] ?? null)===null||$tmp==='' ? '#1D2025' ?? null : $tmp);?>
">
                <div class="container py-2 text-center">
                    <?php echo $_smarty_tpl->getValue('config')['announcement_bar_message'];?>
 <?php if (!empty($_smarty_tpl->getValue('config')['announcement_bar_link_url'])) {?><a href="<?php echo $_smarty_tpl->getValue('config')['announcement_bar_link_url'];?>
" class="badge badge-lg bg-white text-primary rounded ms-2"><?php echo $_smarty_tpl->getValue('config')['announcement_bar_link_text'];?>
</a><?php }?>
                </div>
            </div>
        <?php }?>


        <nav
                <?php if (!empty($_smarty_tpl->getValue('navBarType')) && $_smarty_tpl->getValue('navBarType') == 'dark') {?>
                    class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark"
                <?php } else { ?>
                    class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light"
                <?php }?>
        >
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client">
                        <?php if (!empty($_smarty_tpl->getValue('navBarType')) && $_smarty_tpl->getValue('navBarType') == 'dark') {?>
                            <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/<?php echo $_smarty_tpl->getValue('config')['logo_inverse'];?>
?v=1" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" style="max-height: 45px;" />
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/<?php echo $_smarty_tpl->getValue('config')['logo_default'];?>
?v=1" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" style="max-height: 35px;" />
                        <?php }?>
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0"><?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">
                        </button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Home');?>
</a>
                            </li>


                            <?php if (!empty($_smarty_tpl->getValue('groups')['hosting'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Hosting');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups')['hosting'], 'group_obj');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_obj')->value) {
$foreach1DoElse = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/items/<?php echo $_smarty_tpl->getValue('group_obj')->slug;?>
"><?php echo $_smarty_tpl->getValue('group_obj')->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>



                            <?php if (!empty($_smarty_tpl->getValue('groups')['vps'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('VPS');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups')['vps'], 'group_obj');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_obj')->value) {
$foreach2DoElse = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/items/<?php echo $_smarty_tpl->getValue('group_obj')->slug;?>
"><?php echo $_smarty_tpl->getValue('group_obj')->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->getValue('groups')['dedicated'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Dedicated');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups')['dedicated'], 'group_obj');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_obj')->value) {
$foreach3DoElse = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/items/<?php echo $_smarty_tpl->getValue('group_obj')->slug;?>
"><?php echo $_smarty_tpl->getValue('group_obj')->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->getValue('groups')['other'])) {?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('More Products');?>
</a>
                                    <ul class="dropdown-menu">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups')['other'], 'group_obj');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_obj')->value) {
$foreach4DoElse = false;
?>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/items/<?php echo $_smarty_tpl->getValue('group_obj')->slug;?>
"><?php echo $_smarty_tpl->getValue('group_obj')->name;?>
</a>
                                            </li>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </li>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->getValue('menu_items'))) {?>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu_items'), 'menu_item');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('menu_item')->value) {
$foreach5DoElse = false;
?>

                                    <?php if (empty($_smarty_tpl->getValue('menu_item')['children'])) {?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('menu_item')['link'];?>
"><?php echo $_smarty_tpl->getValue('menu_item')['name'];?>
</a>
                                        </li>
                                        <?php } else { ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo $_smarty_tpl->getValue('menu_item')['name'];?>
</a>
                                            <ul class="dropdown-menu">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu_item')['children'], 'child');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('child')->value) {
$foreach6DoElse = false;
?>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('child')['link'];?>
"><?php echo $_smarty_tpl->getValue('child')['name'];?>
</a>
                                                    </li>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </li>
                                    <?php }?>


                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            <?php }?>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/contact"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Contact');?>
</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="<?php ob_start();
echo $_smarty_tpl->getValue('base_url');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
client/dashboard" class="btn btn-sm btn-primary rounded-pill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Dashboard');?>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13293719366745d3298d41e2_42830463', "content");
?>


</div>
<footer style="background: linear-gradient(90deg,#142149,#233ba2); color: rgba(229,235,255,.56);">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->getValue('config')['logo_default'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" style="max-height: 35px;" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" />
                    <p class="mb-4">© <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
 <?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">

                        <?php if (!empty($_smarty_tpl->getValue('config')['social_facebook'])) {?><a href="<?php echo $_smarty_tpl->getValue('config')['social_facebook'];?>
">
                                <i class="uil uil-facebook-f">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->getValue('config')['social_twitter'])) {?><a href="<?php echo $_smarty_tpl->getValue('config')['social_twitter'];?>
">
                                <i class="uil uil-twitter">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->getValue('config')['social_instagram'])) {?><a href="<?php echo $_smarty_tpl->getValue('config')['social_instagram'];?>
">
                                <i class="uil uil-instagram">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->getValue('config')['social_linkedin'])) {?><a href="<?php echo $_smarty_tpl->getValue('config')['social_linkedin'];?>
">
                                <i class="uil uil-linkedin">
                                </i>
                            </a><?php }?>
                        <?php if (!empty($_smarty_tpl->getValue('config')['social_youtube'])) {?><a href="<?php echo $_smarty_tpl->getValue('config')['social_youtube'];?>
">
                                <i class="uil uil-youtube">
                                </i>
                            </a><?php }?>

                    </nav>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3"><?php echo (($tmp = $_smarty_tpl->getValue('config')['quick_links_widget_1_title'] ?? null)===null||$tmp==='' ? 'Quick Links' ?? null : $tmp);?>
</h4>

                    <?php if (!empty($_smarty_tpl->getValue('config')['quick_links_widget_1_links']) && !empty($_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_1_links'],true))) {?>

                        <ul class="list-unstyled text-reset mb-0">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_1_links'],true), 'link');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach7DoElse = false;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->getValue('link')['url'];?>
"><?php echo $_smarty_tpl->getValue('link')['text'];?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
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
                    <h4 class="widget-title text-white mb-3"><?php echo (($tmp = $_smarty_tpl->getValue('config')['quick_links_widget_2_title'] ?? null)===null||$tmp==='' ? 'Quick Links' ?? null : $tmp);?>
</h4>

                    <?php if (!empty($_smarty_tpl->getValue('config')['quick_links_widget_2_links']) && !empty($_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_2_links'],true))) {?>

                        <ul class="list-unstyled text-reset mb-0">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_2_links'],true), 'link');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach8DoElse = false;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->getValue('link')['url'];?>
"><?php echo $_smarty_tpl->getValue('link')['text'];?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
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
                    <h4 class="widget-title text-white mb-3"><?php echo (($tmp = $_smarty_tpl->getValue('config')['contact_widget_title'] ?? null)===null||$tmp==='' ? 'Contact Widget' ?? null : $tmp);?>
</h4>
                    <div class="mb-4"><?php echo (($tmp = $_smarty_tpl->getValue('config')['contact_widget_description'] ?? null)===null||$tmp==='' ? 'Contact Widget Description, change it from CMS -> Configure' ?? null : $tmp);?>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18330002856745d3298e5125_22590914', "scripts");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_14099171466745d3298bac46_44614647 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_13293719366745d3298d41e2_42830463 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_18330002856745d3298e5125_22590914 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
}
}
/* {/block "scripts"} */
}
