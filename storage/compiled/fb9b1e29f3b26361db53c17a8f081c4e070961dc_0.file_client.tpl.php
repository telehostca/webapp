<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:39:31
  from 'file:hostbilling/layouts/client.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be753d27742_35377201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9b1e29f3b26361db53c17a8f081c4e070961dc' => 
    array (
      0 => 'hostbilling/layouts/client.tpl',
      1 => 1734269234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678be753d27742_35377201 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/ui/theme/frontend/fluid/assets/dash-two.min.css?v=2">
    <title><?php echo $_smarty_tpl->getValue('_title');?>
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
        var base_url = '<?php echo $_smarty_tpl->getValue('_url');?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>



    <?php echo '<script'; ?>
>
        window.clx = {
            base_url: '<?php echo $_smarty_tpl->getValue('_url');?>
',
            i18n: {
                yes: '<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
',
                no: '<?php echo $_smarty_tpl->getValue('_L')['No'];?>
',
                are_you_sure: '<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
'
            },
            theme_options: false,
        };
        var _L = [];
        _L['Save'] = '<?php echo $_smarty_tpl->getValue('_L')['Save'];?>
';
        _L['Submit'] = '<?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
';
        _L['Loading'] = '<?php echo $_smarty_tpl->getValue('_L')['Loading'];?>
';
        _L['OK'] = '<?php echo $_smarty_tpl->getValue('_L')['OK'];?>
';
        _L['Cancel'] = '<?php echo $_smarty_tpl->getValue('_L')['Cancel'];?>
';
        _L['Close'] = '<?php echo $_smarty_tpl->getValue('_L')['Close'];?>
';
        _L['are_you_sure'] = '<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
';
        _L['Saved Successfully'] = '<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
';
        _L['Empty'] = '<?php echo $_smarty_tpl->getValue('_L')['Empty'];?>
';
        window.clx_admin_layout = true;
    <?php echo '</script'; ?>
>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('append_to_the_head_in_the_base_layout'), 'append_to_the_head_in_the_base_layout_content');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('append_to_the_head_in_the_base_layout_content')->value) {
$foreach4DoElse = false;
?>
        <?php echo $_smarty_tpl->getValue('append_to_the_head_in_the_base_layout_content');?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1297829021678be753d05c53_34847515', 'head');
?>

</head>
<body class="starterkit">
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>
        <ul class="navbar-item flex-row navbar-dropdown search-ul">
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if (empty($_smarty_tpl->getValue('user')['img'])) {?>
                        <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/default-user-avatar.png" class="img-fluid">
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->getValue('app_url');
echo $_smarty_tpl->getValue('user')['img'];?>
" class="img-fluid">
                    <?php }?>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <div class="media-body">
                                <h5><?php ob_start();
echo $_smarty_tpl->getValue('user')['account'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h5>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span> <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Profile');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Logout');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
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
                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/dashboard/">
                        <?php if ((null !== ($_smarty_tpl->getValue('config')['logo_square'] ?? null))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->getValue('config')['logo_square'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" class="navbar-logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" class="navbar-logo">
                        <?php }?>
                    </a>
                </li>
            </ul>
            <ul class="menu-categories">
                <li class="menu menu-single">
                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/dashboard/" <?php if ($_smarty_tpl->getValue('selected_navigation') == 'dashboard') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Dashboard');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu menu-single">
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/products" <?php if ($_smarty_tpl->getValue('selected_navigation') == 'products') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>

                            </div>
                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Products');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/hosting-orders"  <?php if ($_smarty_tpl->getValue('selected_navigation') == 'orders') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            </div>
                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Billing');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>
                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/tickets/all"  <?php if ($_smarty_tpl->getValue('selected_navigation') == 'support') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Support');?>
</span>
                        </div>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </li>

                <li class="menu  menu-single">
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/profile" <?php if ($_smarty_tpl->getValue('selected_navigation') == 'profile') {?> data-active="true" <?php }?> class="menu-toggle">
                        <div class="base-menu">
                            <div class="base-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Profile');?>
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


                <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {
echo $_smarty_tpl->getValue('notify');
}?>

                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_298297066678be753d1f289_69541917', "content");
?>


            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Copyright');?>
 © <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');?>
 <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
"><?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>
</a>, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('All rights reserved.');?>
</p>
            </div>
        </div>
    </div>

</div>
<?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/theme/frontend/fluid/assets/dash-two.min.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1698549256678be753d23ff4_39187790', 'script');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_932077678678be753d24fb4_22526015', 'scripts');
?>

</body>
</html>
<?php }
/* {block 'head'} */
class Block_1297829021678be753d05c53_34847515 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'head'} */
/* {block "content"} */
class Block_298297066678be753d1f289_69541917 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1698549256678be753d23ff4_39187790 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'script'} */
/* {block 'scripts'} */
class Block_932077678678be753d24fb4_22526015 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'scripts'} */
}
