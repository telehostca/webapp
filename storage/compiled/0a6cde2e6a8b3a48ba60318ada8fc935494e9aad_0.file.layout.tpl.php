<?php
/* Smarty version 4.3.2, created on 2023-08-11 04:22:45
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/fluid/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d5efd5245d70_42946668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a6cde2e6a8b3a48ba60318ada8fc935494e9aad' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/fluid/layout.tpl',
      1 => 1690456541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d5efd5245d70_42946668 (Smarty_Internal_Template $_smarty_tpl) {
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

    <link rel="stylesheet" href="https://s3.fromcdn.com/build/assets/fusion.min.css?v=5">
    <?php echo '<script'; ?>
 type="module" src="https://s3.fromcdn.com/build/assets/fusion.min.js?v=5"><?php echo '</script'; ?>
>
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-light">



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


        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client">
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" style="max-height: 45px;" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">


                            <li class="nav-item dropdown"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client"><?php echo __('Home');?>
</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo __('Products n Services');?>
</a>
                                <ul class="dropdown-menu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                        <li class="nav-item"><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</a></li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </li>

                            <li class="nav-item dropdown"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/kb"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Knowledgebase'];?>
</a></li>
                            <li class="nav-item dropdown"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/contact"><?php echo __('Contact');?>
</a></li>


                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="/cdn-cgi/l/email-protection#d2b4bba0a1a6fcbeb3a1a692b7bfb3bbbefcb1bdbf" class="link-inverse"><span class="__cf_email__" data-cfemail="523b3c343d12373f333b3e7c313d3f">[email&#160;protected]</span></a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
client/dashboard" class="btn btn-sm btn-primary rounded-pill"><?php echo __('Dashboard');?>
</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12750101564d5efd5233772_25604475', "content");
?>

    <!-- /section -->
</div>
<!-- /.content-wrapper -->
<footer class="bg-light">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="<?php ob_start();
echo APP_URL;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" style="max-height: 35px;" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" />
                    <p class="mb-4">© <?php ob_start();
echo date('Y');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">

                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_facebook'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_facebook'];?>
"><i class="uil uil-facebook-f"></i></a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_twitter'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_twitter'];?>
"><i class="uil uil-twitter"></i></a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_instagram'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_instagram'];?>
"><i class="uil uil-instagram"></i></a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_linkedin'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_linkedin'];?>
"><i class="uil uil-linkedin"></i></a><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['social_youtube'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['social_youtube'];?>
"><i class="uil uil-youtube"></i></a><?php }?>

                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title mb-3"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_title'] ?? null)===null||$tmp==='' ? 'Quick Links' ?? null : $tmp);?>
</h4>

                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links']) && !empty(json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links'],true))) {?>

                        <ul class="list-unstyled text-reset mb-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links'],true), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a></li>
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
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">

                    <h4 class="widget-title mb-3"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_title'] ?? null)===null||$tmp==='' ? 'Quick Links' ?? null : $tmp);?>
</h4>

                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links']) && !empty(json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links'],true))) {?>

                        <ul class="list-unstyled text-reset mb-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links'],true), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a></li>
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
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['contact_widget_title'] ?? null)===null||$tmp==='' ? 'Contact Widget' ?? null : $tmp);?>
</h4>
                    <div class="mb-4"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['contact_widget_description'] ?? null)===null||$tmp==='' ? 'Contact Widget Description, change it from CMS -> Configure' ?? null : $tmp);?>
</div>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

</body>
</html>
<?php }
/* {block "content"} */
class Block_12750101564d5efd5233772_25604475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12750101564d5efd5233772_25604475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
