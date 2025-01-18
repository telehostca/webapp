<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:17:10
  from 'file:layouts/base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be2163a0983_39621646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a23842c60ec0261184a230a53117d25c37c7c2' => 
    array (
      0 => 'layouts/base.tpl',
      1 => 1690476348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678be2163a0983_39621646 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/layouts';
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
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->

    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
/storage/system/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_or_default')($_smarty_tpl->getValue('config'),'icon-270','icon-270x270.png');?>
" />

    <?php if (APP_STAGE == 'Dev') {?>

        <?php if ($_smarty_tpl->getValue('config')['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
/ui/theme/default/css/app.min.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
">
        <?php }?>

        <link href="<?php echo $_smarty_tpl->getValue('theme');?>
default/css/themes/<?php echo $_smarty_tpl->getValue('config')['nstyle'];?>
.css?v=<?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
" rel="stylesheet">

    <?php } else { ?>

        <?php if ($_smarty_tpl->getValue('config')['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php echo $_smarty_tpl->getValue('config')['version'];?>
">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
/ui/theme/default/css/app.min.css?v=<?php echo $_smarty_tpl->getValue('config')['version'];?>
">
        <?php }?>

        <link href="<?php echo $_smarty_tpl->getValue('theme');?>
default/css/themes/<?php echo $_smarty_tpl->getValue('config')['nstyle'];?>
.css?v=<?php echo $_smarty_tpl->getValue('config')['version'];?>
" rel="stylesheet">
    <?php }?>


    <style>

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


        .alert-danger {
            color: #e7026e;
            background-color: #ffe5f1;
        }


        .alert-success {
            color: #45a197;
            background-color: #f7fdfc;
            border-color: #a3ebe4;
        }



        .pristine-error.text-help {
            color: red;
        }

        .text-info {
            color: #7553F7!important;

        }
        .text-success {
            color: #15CD60!important;

        }
        .text-danger {
            color: #F50057!important;

        }

        .bg-info {
            color: #727DF5!important;

        }

        .table-bordered>thead>tr, .table-bordered>thead>tr>th{
            border-bottom-width: 0;
            border-top-width: 0;
        }
        .table-bordered>tbody>tr:first-child {
            border-top-width: 0;
        }

        .table>:not(:first-child) {
            border-top: none;
        }

        .bg-primary {
            background-color: #7239EA !important;
        }

        .bg-secondary {
            background-color: #f0bc74 !important;
        }

        .bg-tertiary {
            background-color: #31316A !important;
        }

        .bg-success {
            background-color: #35C28F !important;
        }

        .bg-info {
            background-color: #2361ce !important;
        }

        .bg-warning {
            background-color: #f3c78e !important;
        }

        .bg-danger {
            background-color: #E11D48 !important;
        }

        .bg-white {
            background-color: #ffffff !important;
        }

        .bg-indigo {
            background-color: #4F46E5 !important;
        }

        .bg-purple {
            background-color: #7C3AED !important;
        }

        .bg-yellow-100 {
            background-color: #ffeed6 !important;
        }

        .bg-yellow-200 {
            background-color: #f5dbb8 !important;
        }




        .page-content {
            background-color: #f2f4f6;
        }

        .page-content {
                padding: 1rem 2em;
            }

        .text-danger, .text-danger:hover {
            color: #E11D48 !important;
        }
        .text-secondary {
            color: #f0bc74 !important;
        }

        .text-tertiary {
            color: #31316A !important;
        }

        .text-success {
            color: #35C28F !important;
        }



        .text-warning {
            color: #f3c78e !important;
        }

        .text-danger {
            color: #E11D48 !important;
        }

        .text-white {
            color: #ffffff !important;
        }

        .text-indigo {
            color: #4F46E5 !important;
        }
        .text-blue {
            color: #029EF7 !important;
        }

        .text-purple {
            color: #7C3AED !important;
        }
        .symbol.symbol-light-warning .symbol-label {
            background: #FFF7DD!important;
        }

        .symbol.symbol-light-success .symbol-label {
            background: #E9FAEE!important;
        }

        .symbol.symbol-light-danger .symbol-label {
            background: #FFF5F8!important;
        }

        .symbol.symbol-light-primary .symbol-label {
            background: #F8F5FF!important;
        }
        .symbol.symbol-light-info .symbol-label {
            background: #F2FAFD!important;
        }
        .symbol.symbol-info .symbol-label {
            background: #7553F7!important;
        }
        .symbol.symbol-danger .symbol-label {
            background: #E11C48!important;
        }
        .symbol.symbol-success .symbol-label {
            background: #14B981!important;
        }

        .symbol.symbol-blue .symbol-label {
            background: #029EF7!important;
        }
        .symbol.symbol-warning .symbol-label {
            background: #F3C78E!important;
        }

        .table-striped>tbody>tr:nth-of-type(odd)>* {
            --bs-table-accent-bg: rgb(207 206 241 / 5%);
            color: var(--bs-table-striped-color)!important;

        }

        .btn{
            border-radius: 6px;
            transition: all .2s ease-in-out;
        }

        .btn-primary {
            box-shadow: 0 0.125rem 0.25rem 0 rgb(105 108 255 / 40%);
        }

        .table.light-bordered{
            border: .0625rem solid rgba(231,234,243,.7);
        }

        .thead-light th {
            background-color: #f8fafd;
            padding: 12px;
        }




    </style>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1285975761678be216394837_45159739', 'head_extras_from_layout');
?>

    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1258592256678be216395092_99542344', 'head');
?>







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
            }
        };

        window.home_currency = <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getCurrencyConfigJson')($_smarty_tpl->getValue('config')['home_currency']);?>
;

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
    <?php echo '</script'; ?>
>

    <style>
        body {
            overflow-x: hidden;
        }
        .show.dropdown-menu-animated {
            -webkit-transform: scale(1)!important;
            transform: scale(1)!important;
            -webkit-transform-origin: 29px -50px;
            transform-origin: 29px -50px;
            opacity: 1;
            visibility: visible;
        }
    </style>

</head>
<body class="mod-bg-1 mod-nav-link

<?php if (!empty($_smarty_tpl->getValue('config')['clx-navigation-type-top'])) {?>
clx-navigation-type-top
<?php }?>

" id="cloudonex_body">
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
            return /^(nav|header|footer|mod|clx|display)-/i.test(item);
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_515078219678be21639b925_46374169', "content_body");
?>

    </div>

</div>


<p id="js-color-profile" class="d-none">
    <span class="color-primary-50"></span>
    <span class="color-primary-100"></span>
    <span class="color-primary-200"></span>
    <span class="color-primary-300"></span>
    <span class="color-primary-400"></span>
    <span class="color-primary-500"></span>
    <span class="color-primary-600"></span>
    <span class="color-primary-700"></span>
    <span class="color-primary-800"></span>
    <span class="color-primary-900"></span>
    <span class="color-info-50"></span>
    <span class="color-info-100"></span>
    <span class="color-info-200"></span>
    <span class="color-info-300"></span>
    <span class="color-info-400"></span>
    <span class="color-info-500"></span>
    <span class="color-info-600"></span>
    <span class="color-info-700"></span>
    <span class="color-info-800"></span>
    <span class="color-info-900"></span>
    <span class="color-danger-50"></span>
    <span class="color-danger-100"></span>
    <span class="color-danger-200"></span>
    <span class="color-danger-300"></span>
    <span class="color-danger-400"></span>
    <span class="color-danger-500"></span>
    <span class="color-danger-600"></span>
    <span class="color-danger-700"></span>
    <span class="color-danger-800"></span>
    <span class="color-danger-900"></span>
    <span class="color-warning-50"></span>
    <span class="color-warning-100"></span>
    <span class="color-warning-200"></span>
    <span class="color-warning-300"></span>
    <span class="color-warning-400"></span>
    <span class="color-warning-500"></span>
    <span class="color-warning-600"></span>
    <span class="color-warning-700"></span>
    <span class="color-warning-800"></span>
    <span class="color-warning-900"></span>
    <span class="color-success-50"></span>
    <span class="color-success-100"></span>
    <span class="color-success-200"></span>
    <span class="color-success-300"></span>
    <span class="color-success-400"></span>
    <span class="color-success-500"></span>
    <span class="color-success-600"></span>
    <span class="color-success-700"></span>
    <span class="color-success-800"></span>
    <span class="color-success-900"></span>
    <span class="color-fusion-50"></span>
    <span class="color-fusion-100"></span>
    <span class="color-fusion-200"></span>
    <span class="color-fusion-300"></span>
    <span class="color-fusion-400"></span>
    <span class="color-fusion-500"></span>
    <span class="color-fusion-600"></span>
    <span class="color-fusion-700"></span>
    <span class="color-fusion-800"></span>
    <span class="color-fusion-900"></span>
</p>

<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->getValue('_url');?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->getValue('config')['df'];?>
">

<?php if (APP_STAGE == 'Dev') {?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
/ui/theme/default/js/app.min.js?v=<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('_raid')();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
/ui/lib/ray.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
/ui/theme/default/js/app.min.js?v=<?php echo $_smarty_tpl->getValue('config')['version'];?>
"><?php echo '</script'; ?>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_311985055678be21639edf3_42496897', 'script');
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_739285861678be21639f587_58693807', 'scripts');
?>


</body>
</html>
<?php }
/* {block 'head_extras_from_layout'} */
class Block_1285975761678be216394837_45159739 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/layouts';
}
}
/* {/block 'head_extras_from_layout'} */
/* {block 'head'} */
class Block_1258592256678be216395092_99542344 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/layouts';
}
}
/* {/block 'head'} */
/* {block "content_body"} */
class Block_515078219678be21639b925_46374169 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/layouts';
}
}
/* {/block "content_body"} */
/* {block 'script'} */
class Block_311985055678be21639edf3_42496897 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/layouts';
}
}
/* {/block 'script'} */
/* {block 'scripts'} */
class Block_739285861678be21639f587_58693807 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/layouts';
}
}
/* {/block 'scripts'} */
}
