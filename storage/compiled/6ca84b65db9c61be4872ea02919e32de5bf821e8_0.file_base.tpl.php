<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:16:49
  from 'file:hostbilling/layouts/base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be201a01d20_15206922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ca84b65db9c61be4872ea02919e32de5bf821e8' => 
    array (
      0 => 'hostbilling/layouts/base.tpl',
      1 => 1690476006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678be201a01d20_15206922 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" <?php if (!empty($_smarty_tpl->getValue('config')['font_size'])) {?> class="<?php echo $_smarty_tpl->getValue('config')['font_size'];?>
" <?php }?>>
<head>
    <meta charset="utf-8">
    <title>
        <?php echo $_smarty_tpl->getValue('_title');?>

    </title>
    <meta name="description" content="<?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-270','icon-270x270.png');?>
" />
    <?php echo '<script'; ?>
>
        const cloudonex_csrf_token = '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
';

        window.home_currency = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getCurrencyConfigJson')($_smarty_tpl->getValue('config')['home_currency']);?>
;

    <?php echo '</script'; ?>
>

    <?php if ((null !== ($_smarty_tpl->getValue('config')['header_scripts'] ?? null))) {?>
        <?php echo $_smarty_tpl->getValue('config')['header_scripts'];?>

    <?php }?>

    <?php if (APP_STAGE == 'Dev') {?>

        <?php if ($_smarty_tpl->getValue('config')['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
">
            <style>
                .nav-menu li a>svg {
                    margin-left: .75rem;
                }
            </style>
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/theme/default/css/app.min.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
">
            <style>
                .nav-menu li a>svg {
                    margin-right: .75rem;
                }
            </style>
        <?php }?>

    <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('config')['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
/ui/theme/default/css/app-rtl.min.css">
            <style>
                .nav-menu li a>svg {
                    margin-left: .75rem;
                }
            </style>
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
/ui/theme/default/css/app.min.css">
            <style>
                .nav-menu li a>svg {
                    margin-right: .75rem;
                }
            </style>
        <?php }?>
    <?php }?>


    <style>

        body {
            font-size: 14px;
            color: #2b2b2b;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            color: #2b2b2b;
        }
        /*.nav-menu li.active */

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li.active a {
            color: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li a {
            color:  #041527;
        }
        .clx-navigation-type-top .page-header {
            background-color: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
        }

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul {
            background: #fff;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul li a {
            color: rgba(255, 255, 255, 0.7);
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul li a {
            color: #000;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu>li>a>.collapse-sign>em:before {
            color: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li.active > ul li a {
            color: #000;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu>li>ul {
            top: 2.5rem;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu>li>a>.nav-link-text {
            font-weight: 700;
        }
        .alert.alert-danger.fade{
            opacity: 1;
        }
        .alert.alert-success.fade{
            opacity: 1;
        }

        #ribbon-container {
            position: absolute;
            right: -15px;
        }


        #ribbon-container:before {
            content: "";
            height: 0;
            width: 0;
            display: block;
            position: absolute;
            top: 3px;
            left: 0;
            border-top: 20px solid rgba(0,0,0,.3);
            border-bottom: 20px solid rgba(0,0,0,.3);
            border-right: 20px solid rgba(0,0,0,.3);
            border-left: 20px solid transparent;
        }
        #ribbon-container a {
            display: block;
            padding: 12px;
            position: relative;
            background: #0089d0;
            overflow: visible;
            height: 40px;
            margin-left: 29px;
            color: #fff;
            text-decoration: none;
        }
        #ribbon-container a:before {
            content: "";
            height: 0;
            width: 0;
            display: block;
            position: absolute;
            top: 0;
            left: -20px;
            border-top: 20px solid #0089d0;
            border-bottom: 20px solid #0089d0;
            border-right: 20px solid transparent;
            border-left: 20px solid transparent;
        }
        #ribbon-container a:after {
            content: "";
            height: 0;
            width: 0;
            display: block;
            position: absolute;
            bottom: -15px;
            right: 0;
            border-top: 15px solid #004a70;
            border-right: 15px solid transparent;
        }



        .pristine-error.text-help {
            color: red;
        }

        .clx-navigation-type-top .page-sidebar {
            background: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
        }


        .clx-navigation-type-top .page-sidebar {
            background: #fff;
        }

        .svg-fill-white svg{
            fill: white;
        }

        .page-content-wrapper{
            background: #EBF1F6;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: rgba(19, 41, 143, 1.0);
            border-color: rgba(19, 41, 143, 1.0);
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #000;
            border-color: #000;
        }

        .btn-success:hover {
            color: #fff;
        }

        .btn-danger:hover {
            color: #fff;
        }

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li:hover > a {
            color: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
        }

    </style>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_31257349678be2019ef478_96597007', 'head_extras_from_layout');
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1121865771678be2019efdb3_04258896', 'head');
?>



    <style>
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul li:hover > a {
            color: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
        }
        .header-icon:not(.btn)[data-toggle=dropdown][data-toggle=dropdown]:after {
            background: #4c8ec4;
        }

        .card{
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
        }
        .clx-list-with-padding li{
            position: relative;
            padding: 8px 0 8px 25px;
            font-size: 16px;
        }


        .clx-pricing-table .pt-head:after {
            content: "";
            position: absolute;
            top: -50px;
            left: -20px;
            right: -10px;
            bottom: 0;
            background: <?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#542ABB' ?? null : $tmp);?>
;
            z-index: -1;
            transform: rotate(
                    -7deg
            );
        }
        .z-index-1 {
            z-index: 1;
        }

        .clx-pricing-table.featured .pt-head:after {
            background: #15db95;
        }

        label{
            font-weight: bold;
        }

        .nav-menu li a>svg {
            margin-right: .75rem;
        }

        .nav-menu li.active>a {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
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
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('append_to_the_head_in_the_base_layout_content')->value) {
$foreach1DoElse = false;
?>
        <?php echo $_smarty_tpl->getValue('append_to_the_head_in_the_base_layout_content');?>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

</head>
<body class="clx-navigation-type-top clx-fixed-header clx-fixed-navigation" id="cloudonex_body">
<?php echo '<script'; ?>
>
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            { },
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    if (themeSettings.themeOptions)
    {
        classHolder.className = themeSettings.themeOptions;
    }
    else
    {
    }
    var saveSettings = function()
    {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
        {
            return /^(nav|header|footer|mod|display)-/i.test(item);
        }).join(' ');
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    var resetSettings = function()
    {
        localStorage.setItem("themeSettings", "");
    }

<?php echo '</script'; ?>
>


<div class="page-wrapper">

    <div class="page-inner">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_561398444678be2019fa7a9_88601621', "content_body");
?>

    </div>

</div>



<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->getValue('_url');?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->getValue('config')['df'];?>
">

<?php if (APP_STAGE == 'Dev') {?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
/ui/theme/default/js/app.min.js?v=<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
/ui/lib/ray.js?v=3"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
/ui/theme/default/js/app.min.js"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    if (typeof window.ray === 'undefined') {
        window.ray = function() {
            console.log('ray is available only on the dev mode.')
        }
    }

    (function (factory) {
        if (typeof define === "function" && define.amd) {
            define(["jquery"], factory);
        } else {
            factory(jQuery);
        }
    })(function ($) {

        "use strict";

        $.fn.datepicker.setDefaults({
            autoClose: false,
            dateFormat: "mm/dd/yy",
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            showMonthAfterYear: false,
            viewStart: 0, // days
            weekStart: 0, // Sunday
            yearSuffix: ""
        });
    });
<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1403639410678be2019fea12_22207983', 'script');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_456497013678be2019ff2d7_63674654', 'scripts');
?>


<?php if ((null !== ($_smarty_tpl->getValue('config')['footer_scripts'] ?? null))) {?>
    <?php echo $_smarty_tpl->getValue('config')['footer_scripts'];?>

<?php }?>

</body>
</html>
<?php }
/* {block 'head_extras_from_layout'} */
class Block_31257349678be2019ef478_96597007 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'head_extras_from_layout'} */
/* {block 'head'} */
class Block_1121865771678be2019efdb3_04258896 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'head'} */
/* {block "content_body"} */
class Block_561398444678be2019fa7a9_88601621 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block "content_body"} */
/* {block 'script'} */
class Block_1403639410678be2019fea12_22207983 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'script'} */
/* {block 'scripts'} */
class Block_456497013678be2019ff2d7_63674654 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/layouts';
}
}
/* {/block 'scripts'} */
}
