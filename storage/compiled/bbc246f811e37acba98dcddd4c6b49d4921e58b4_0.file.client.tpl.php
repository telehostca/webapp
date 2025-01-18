<?php
/* Smarty version 4.3.2, created on 2023-09-08 18:13:41
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/layouts/client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fb9c95d1cec1_92407538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc246f811e37acba98dcddd4c6b49d4921e58b4' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/layouts/client.tpl',
      1 => 1694211216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb9c95d1cec1_92407538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/ui/theme/frontend/fluid/assets/dash-two.min.css?v=2">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <style>
        .sidebar-wrapper #compactSidebar {
            background: #152764;
        }
        .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle .base-menu span {
            color: #aeb6d5;
            font-size: 15px;
        }
        .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle .base-icons svg {
            color: #3EA1EE;
        }
        .sidebar-wrapper #compactSidebar .menu-categories li.menu:hover a.menu-toggle .base-menu span {
            color: #fff;
        }
        .sidebar-wrapper #compactSidebar .menu-categories li.menu:hover a.menu-toggle .base-icons svg {
            fill: none;
            color: #fff;
        }
        .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle[data-active=true] {
            background-color: #081a52;
            position: relative;
        }
        .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle[data-active=true] .base-icons svg, .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle[data-active=true] .base-menu span {
            color: #fff;
        }
        .sidebar-wrapper #compactSidebar .menu-categories a.menu-toggle[data-active=true]:before {
            content: none;
        }


        /*    Important inline CSS to prevent flickering */


        .sidebar-wrapper #compactSidebar {
            width: 116px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1033;
            transition: .3s ease all;
            height: 100vh;
            touch-action: none;
            user-select: none;
            -webkit-user-drag: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-right: 1px solid #e0e6ed;
        }

        .sidebar-closed #compactSidebar {
            left: -150px;
        }

        #content {
            width: 50%;
            flex-grow: 8;
            margin-top: 55px;
            margin-bottom: 0;
            margin-left: 116px;
        }

        @media (max-width: 991px) {
            #content {
                margin-left: 0;
            }
            .sidebar-wrapper #compactSidebar {
                left: -150px;
                width: 120px;
            }
        }

        .card{
            border-radius: 10px;
            border: none;
            box-shadow: 0 0.1px 0px rgba(0, 0, 0, 0.002), 0 0.2px 0px rgba(0, 0, 0, 0.003), 0 0.4px 0px rgba(0, 0, 0, 0.004), 0 0.6px 0px rgba(0, 0, 0, 0.004), 0 0.9px 0px rgba(0, 0, 0, 0.005), 0 1.2px 0px rgba(0, 0, 0, 0.006), 0 1.8px 0px rgba(0, 0, 0, 0.006), 0 2.6px 0px rgba(0, 0, 0, 0.007), 0 3.9px 0px rgba(0, 0, 0, 0.008), 0 7px 0px rgba(0, 0, 0, 0.01);
        }

        body{
            background-color: #EDEFF0;
        }

    </style>
    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>



    <?php echo '<script'; ?>
>
        window.clx = {
            base_url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
',
            i18n: {
                yes: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
',
                no: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
',
                are_you_sure: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
'
            },
            theme_options: false,
        };
        var _L = [];
        _L['Save'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
';
        _L['Submit'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
';
        _L['Loading'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Loading'];?>
';
        _L['OK'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
';
        _L['Cancel'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
';
        _L['Close'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
';
        _L['are_you_sure'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
';
        _L['Saved Successfully'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
';
        _L['Empty'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Empty'];?>
';
        window.clx_admin_layout = true;
    <?php echo '</script'; ?>
>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout']->value, 'append_to_the_head_in_the_base_layout_content');
$_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->value) {
$_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56260704164fb9c95d0dab1_80326399', 'head');
?>

</head>
<body class="starterkit">
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-item flex-row navbar-dropdown search-ul">
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if (empty($_smarty_tpl->tpl_vars['user']->value['img'])) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="img-fluid">
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-fluid">
                    <?php }?>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <div class="media-body">
                                <h5><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['account'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h5>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span> <?php ob_start();
echo __('Profile');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span><?php ob_start();
echo __('Logout');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    <div class="sidebar-wrapper sidebar-theme">
        <nav id="compactSidebar">
            <ul class="navbar-nav theme-brand flex-row">
                <li class="nav-item theme-logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/">
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" class="navbar-logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" class="navbar-logo">
                        <?php }?>
                    </a>
                </li>
            </ul>
            <ul class="menu-categories">
                <li class="menu menu-single">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/" <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                            <span><?php echo __('Dashboard');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu menu-single">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/products" <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'products') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>

                            </div>
                            <span><?php echo __('Products');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/hosting-orders" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </div>
                            <span><?php echo __('Billing');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/all" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <span><?php echo __('Support');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/referral" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>

                            </div>
                            <span><?php echo __('Referral');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/profile" class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <span><?php echo __('Profile');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
            </ul>
        </nav>
    </div>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="layout-top-spacing">


                <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190075280964fb9c95d18d13_32817291', "content");
?>


            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class=""><?php echo __('Copyright');?>
 © <?php echo date('Y');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</a>, <?php echo __('All rights reserved.');?>
</p>
            </div>
        </div>
    </div>

</div>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/frontend/fluid/assets/dash-two.min.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112907214864fb9c95d1b0b0_80982533', 'script');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23068903964fb9c95d1b841_23721528', 'scripts');
?>

</body>
</html>
<?php }
/* {block 'head'} */
class Block_56260704164fb9c95d0dab1_80326399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_56260704164fb9c95d0dab1_80326399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_190075280964fb9c95d18d13_32817291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_190075280964fb9c95d18d13_32817291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_112907214864fb9c95d1b0b0_80982533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_112907214864fb9c95d1b0b0_80982533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
/* {block 'scripts'} */
class Block_23068903964fb9c95d1b841_23721528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_23068903964fb9c95d1b841_23721528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
