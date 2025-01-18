<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:35:44
  from 'file:../default/appearance_user_interface.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16500bcd01_05246764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b0f5ef6b624e21cd259c3075b46a389827d900b' => 
    array (
      0 => '../default/appearance_user_interface.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16500bcd01_05246764 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_503217506675e16500605a3_51996075', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1241761411675e16500b8d21_92952158', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_503217506675e16500605a3_51996075 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel" id="ui_settings">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['User Interface'];?>
</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <?php if (!(null !== ($_smarty_tpl->getValue('config')['disabled_theme_options'] ?? null)) || $_smarty_tpl->getValue('config')['disabled_theme_options'] == 0) {?>



                        <div class="settings-panel">



                            <?php if (!empty($_smarty_tpl->getValue('config')['admin_dark_theme'])) {?>

                                <div class="d-table w-100 pl-5 pr-3">
                                    <h3 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Dark Theme'];?>
</h3>
                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->getValue('base_url');?>
appearance/disable-admin-dark-theme">Disable</a>
                                </div>



                            <?php } else { ?>

                                <div class="d-table w-100 pl-5 pr-3">
                                    <h3 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Dark Theme'];?>
</h3>
                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->getValue('base_url');?>
appearance/enable-admin-dark-theme">Enable</a>
                                </div>

                                <div class="mt-4 d-table w-100 pl-5 pr-3">
                                    <div class="d-table-cell align-middle">
                                        <h3 class="p-0 pr-2 d-flex">
                                            <?php echo $_smarty_tpl->getValue('_L')['Theme colors'];?>


                                        </h3>
                                    </div>
                                </div>
                                <div class="expanded theme-colors pl-5 pr-3">
                                    <ul class="m-0">

                                        <li>
                                            <a href="#" id="clx-theme-light-blue" data-action="theme-update" data-themesave data-theme="light_blue" data-bs-toggle="tooltip" data-placement="top" title="Light Blue" data-original-title="Light Blue"></a>
                                        </li>

                                        <li>
                                            <a href="#" id="clx-theme-indigo-blue" data-action="theme-update" data-themesave data-theme="indigo_blue" data-bs-toggle="tooltip" data-placement="top" title="Indigo Blue" data-original-title="Indigo Blue"></a>
                                        </li>

                                        <li>
                                            <a href="#" id="clx-theme-blue-extra" data-action="theme-update" data-themesave data-theme="blue_extra" data-bs-toggle="tooltip" data-placement="top" title="Blue Extra" data-original-title="Blue Extra"></a>
                                        </li>

                                        <li>
                                            <a href="#" id="clx-theme-purple" data-action="theme-update" data-themesave data-theme="purple" data-bs-toggle="tooltip" data-placement="top" title="Purple" data-original-title="Purple"></a>
                                        </li>


                                        <li>
                                            <a href="#" id="clx-theme-dark" data-action="theme-update" data-themesave data-theme="dark" data-bs-toggle="tooltip" data-placement="top" title="Dark SF" data-original-title="Dark SF"></a>
                                        </li>


                                        <li>
                                            <a href="#" id="clx-theme-light-mode" data-action="theme-update" data-themesave data-theme="light_mode" data-bs-toggle="tooltip" data-placement="top" title="Light Mode" data-original-title="Light Mode"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-california" data-action="theme-update" data-themesave data-theme="california" data-bs-toggle="tooltip" data-placement="top" title="California" data-original-title="California"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-nordic" data-action="theme-update" data-themesave data-theme="nordic" data-bs-toggle="tooltip" data-placement="top" title="Nordic" data-original-title="Nordic"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-tokyo" data-action="theme-update" data-themesave data-theme="tokyo" data-bs-toggle="tooltip" data-placement="top" title="Tokyo" data-original-title="Tokyo"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-sydney" data-action="theme-update" data-themesave data-theme="sydney" data-bs-toggle="tooltip" data-placement="top" title="Sydney" data-original-title="Sydney"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-brazil" data-action="theme-update" data-themesave data-theme="brazil" data-bs-toggle="tooltip" data-placement="top" title="Brazil" data-original-title="Brazil"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-mumbai" data-action="theme-update" data-themesave data-theme="mumbai" data-bs-toggle="tooltip" data-placement="top" title="Mumbai" data-original-title="Mumbai"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-istanbul" data-action="theme-update" data-themesave data-theme="istanbul" data-bs-toggle="tooltip" data-placement="top" title="Istanbul" data-original-title="Istanbul"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-vancouver" data-action="theme-update" data-themesave data-theme="vancouver" data-bs-toggle="tooltip" data-placement="top" title="Vancouver" data-original-title="Vancouver"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-singapore" data-action="theme-update" data-themesave data-theme="singapore" data-bs-toggle="tooltip" data-placement="top" title="Singapore" data-original-title="Singapore"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-bali" data-action="theme-update" data-themesave data-theme="bali" data-bs-toggle="tooltip" data-placement="top" title="Bali" data-original-title="Bali"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-barcelona" data-action="theme-update" data-themesave data-theme="barcelona" data-bs-toggle="tooltip" data-placement="top" title="Barcelona" data-original-title="Barcelona"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-london" data-action="theme-update" data-themesave data-theme="london" data-bs-toggle="tooltip" data-placement="top" title="London" data-original-title="London"></a>
                                        </li>
                                        <li>
                                            <a href="#" id="clx-theme-dubai" data-action="theme-update" data-themesave data-theme="dubai" data-bs-toggle="tooltip" data-placement="top" title="Dubai" data-original-title="Dubai"></a>
                                        </li>

                                    </ul>
                                </div>

                            <?php }?>


                            <hr class="mb-0 mt-4">

                            <div class="mt-4 d-table w-100 px-5">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        <?php echo $_smarty_tpl->getValue('_L')['App Layout'];?>


                                    </h5>
                                </div>
                            </div>






                                <div class="list" id="fh">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="clx-fixed-header"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Fixed Header'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['header is in a fixed at all times'];?>
</span>
                                </div>
                                <div class="list" id="nff">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="clx-fixed-navigation"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Fixed Navigation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['left panel is fixed'];?>
</span>
                                </div>
                                <div class="list" id="nfm">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-minify"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Minify Navigation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['skew nav to maximize space'];?>
</span>
                                </div>
                                <div class="list" id="nfh">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-function-hidden"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Hide Navigation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['roll mouse on edge to reveal'];?>
</span>
                                </div>
                                <div class="list" id="nft">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="clx-navigation-type-top"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Top Navigation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['relocate left pane to top'];?>
</span>
                                </div>
                                <div class="list" id="fff">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="footer-function-fixed"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Fixed Footer'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['page footer is fixed'];?>
</span>
                                </div>
                                <div class="list" id="mmb">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-main-boxed"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Boxed Layout'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['encapsulates to a container'];?>
</span>
                                </div>
                                <div class="expanded">
                                    <ul class="mb-3 mt-1">
                                        <li>
                                            <div class="bg-fusion-50" data-action="toggle" data-class="mod-bg-1"></div>
                                        </li>
                                        <li>
                                            <div class="bg-warning-200" data-action="toggle" data-class="mod-bg-2"></div>
                                        </li>
                                        <li>
                                            <div class="bg-primary-200" data-action="toggle" data-class="mod-bg-3"></div>
                                        </li>
                                        <li>
                                            <div class="bg-success-300" data-action="toggle" data-class="mod-bg-4"></div>
                                        </li>
                                        <li>
                                            <div class="bg-white border" data-action="toggle" data-class="mod-bg-none"></div>
                                        </li>
                                    </ul>
                                    <div class="list" id="mbgf">
                                        <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-fixed-bg"></a>
                                        <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Fixed Background'];?>
</span>
                                    </div>
                                </div>
                                <div class="mt-4 d-table w-100 px-5">
                                    <div class="d-table-cell align-middle">
                                        <h5 class="p-0">
                                            <?php echo $_smarty_tpl->getValue('_L')['Mobile Menu'];?>


                                        </h5>
                                    </div>
                                </div>
                                <div class="list" id="nmp">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-push"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Push Content'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['content pushed on menu reveal'];?>
</span>
                                </div>
                                <div class="list" id="nmno">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-no-overlay"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['No Overlay'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['removes mesh on menu reveal'];?>
</span>
                                </div>
                                <div class="list" id="sldo">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="nav-mobile-slide-out"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Off-Canvas'];?>
 <sup><?php echo $_smarty_tpl->getValue('_L')['beta'];?>
</sup></span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['content overlaps menu'];?>
</span>
                                </div>
                                <div class="mt-4 d-table w-100 px-5">
                                    <div class="d-table-cell align-middle">
                                        <h5 class="p-0">
                                            <?php echo $_smarty_tpl->getValue('_L')['Accessibility'];?>


                                        </h5>
                                    </div>
                                </div>
                                <div class="list" id="mbf">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-bigger-font"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Bigger Content Font'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['content fonts are bigger for readability'];?>
</span>
                                </div>
                                <div class="list" id="mhc">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-high-contrast"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['High Contrast Text (WCAG 2 AA)'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['4.5:1 text contrast ratio'];?>
</span>
                                </div>
                                <div class="list" id="mcb">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-color-blind"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Daltonism'];?>
 <sup> <?php echo $_smarty_tpl->getValue('_L')['beta'];?>
</sup> </span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['color vision deficiency'];?>
</span>
                                </div>
                                <div class="list" id="mpc">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-pace-custom"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Preloader Inside'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['preloader will be inside content'];?>
</span>
                                </div>
                                <div class="list" id="mpi">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-panel-icon"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['SmartPanel Icons'];
echo $_smarty_tpl->getValue('_L')['not Panels'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['smartpanel buttons will appear as icons'];?>
</span>
                                </div>
                                <div class="mt-4 d-table w-100 px-5">
                                    <div class="d-table-cell align-middle">
                                        <h5 class="p-0">
                                            <?php echo $_smarty_tpl->getValue('_L')['Global Modifications'];?>


                                        </h5>
                                    </div>
                                </div>
                                <div class="list" id="mcbg">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-clean-page-bg"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Clean Page Background'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['adds more whitespace'];?>
</span>
                                </div>
                                <div class="list" id="mhni">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-nav-icons"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Hide Navigation Icons'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['invisible navigation icons'];?>
</span>
                                </div>
                                <div class="list" id="dan">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-disable-animation"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Disable CSS Animation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['disables css based animations'];?>
</span>
                                </div>
                                <div class="list" id="mhic">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-hide-info-card"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Hide Info Card'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['hides info card from left panel'];?>
</span>
                                </div>
                                <div class="list" id="mlph">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-lean-subheader"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Lean Subheader'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['distinguished page header'];?>
</span>
                                </div>
                                <div class="list" id="mnl">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-link"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Hierarchical Navigation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['clear breakdown of nav links'];?>
</span>
                                </div>
                                <div class="list" id="mdn">
                                    <a href="#" onclick="return false;" class="btn btn-switch" data-action="toggle" data-class="mod-nav-dark"></a>
                                    <span class="onoffswitch-title"> <?php echo $_smarty_tpl->getValue('_L')['Dark Navigation'];?>
</span>
                                    <span class="onoffswitch-title-desc"> <?php echo $_smarty_tpl->getValue('_L')['navigation background is darkend'];?>
</span>
                                </div>
                                <hr class="mb-0 mt-4">




                            <div class="mt-4 d-table w-100 pl-5 pr-3">
                                <div class="d-table-cell align-middle">
                                    <h5 class="p-0">
                                        <?php echo $_smarty_tpl->getValue('_L')['Global Font Size'];?>


                                    </h5>
                                </div>
                            </div>
                            <div class="list mt-1">
                                <div class="btn-group btn-group-sm btn-group-toggle my-2" data-toggle="buttons">
                                    <label class="btn btn-default btn-sm <?php if ((null !== ($_smarty_tpl->getValue('config')['font_size'] ?? null)) && $_smarty_tpl->getValue('config')['font_size'] == 'roo-text-sm') {?>active<?php }?>" data-action="toggle-swap" data-class="root-text-sm" data-target="html">
                                        <input type="radio" <?php if ((null !== ($_smarty_tpl->getValue('config')['font_size'] ?? null)) && $_smarty_tpl->getValue('config')['font_size'] == 'roo-text-sm') {?>checked<?php }?> name="changeFrontSize"> SM
                                    </label>
                                    <label class="btn btn-default btn-sm <?php if (empty($_smarty_tpl->getValue('config')['font_size']) || $_smarty_tpl->getValue('config')['font_size'] == 'roo-text') {?>active<?php }?>" data-action="toggle-swap" data-class="root-text" data-target="html">
                                        <input type="radio" name="changeFrontSize" <?php if (empty($_smarty_tpl->getValue('config')['font_size']) || $_smarty_tpl->getValue('config')['font_size'] == 'roo-text') {?>checked<?php }?>> MD
                                    </label>
                                    <label class="btn btn-default btn-sm <?php if ((null !== ($_smarty_tpl->getValue('config')['font_size'] ?? null)) && $_smarty_tpl->getValue('config')['font_size'] == 'roo-text-md') {?>active<?php }?>" data-action="toggle-swap" data-class="root-text-lg" data-target="html">
                                        <input type="radio" <?php if ((null !== ($_smarty_tpl->getValue('config')['font_size'] ?? null)) && $_smarty_tpl->getValue('config')['font_size'] == 'roo-text-lg') {?>checked<?php }?> name="changeFrontSize"> LG
                                    </label>
                                    <label class="btn btn-default btn-sm <?php if ((null !== ($_smarty_tpl->getValue('config')['font_size'] ?? null)) && $_smarty_tpl->getValue('config')['font_size'] == 'roo-text-xl') {?>active<?php }?>" data-action="toggle-swap" data-class="root-text-xl" data-target="html">
                                        <input type="radio" <?php if ((null !== ($_smarty_tpl->getValue('config')['font_size'] ?? null)) && $_smarty_tpl->getValue('config')['font_size'] == 'roo-text-xl') {?>checked<?php }?> name="changeFrontSize"> XL
                                    </label>
                                </div>
                                <span class="onoffswitch-title-desc d-block mb-0">
                                     <?php echo $_smarty_tpl->getValue('_L')['change root font size to effect rem values (resets on page refresh)'];?>

                            </div>
                            <hr class="mb-0 mt-4">



                        </div>

                        <?php }?>

                        <table class="table table-hover">
                            <tbody>



                            <tr>
                                <td width="80%"><label for="config_rtl"><?php echo $_smarty_tpl->getValue('_L')['Enable RTL'];?>
 </label></td>
                                <td><input type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('get_option')('rtl') == '1') {?>checked<?php }?> data-toggle="toggle"
                                           data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
" id="config_rtl"></td>
                            </tr>


                            <tr>
                                <td width="80%"><label for="config_mininav"><?php echo $_smarty_tpl->getValue('_L')['Fold Sidebar Default'];?>
 </label></td>
                                <td><input type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('get_option')('mininav') == '1') {?>checked<?php }?> data-toggle="toggle"
                                           data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
" id="config_mininav">
                                </td>
                            </tr>



                            <tr>
                                <td width="80%"><label for="config_show_sidebar_header"><?php echo $_smarty_tpl->getValue('_L')['Show sidebar header'];?>
 </label></td>
                                <td><input type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('get_option')('show_sidebar_header') == '1') {?>checked<?php }?>
                                           data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
"
                                           id="config_show_sidebar_header"></td>
                            </tr>


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>


        <?php if (empty($_smarty_tpl->getValue('config')['disable_dashboard_widget'])) {?>

            <div class="col-md-6">
                <div class="panel" id="ui_dashboard_settings">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->getValue('_L')['Dashboard Widgets'];?>
</h2>


                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <table class="table table-hover">
                                <tbody>

                                <tr>
                                    <td width="80%"><label for="config_dashboard_widgets_tickets"><?php echo $_smarty_tpl->getValue('_L')['Tickets'];?>
 </label></td>
                                    <td><input type="checkbox" <?php if ((null !== ($_smarty_tpl->getValue('config')['dashboard_widgets_tickets'] ?? null)) && $_smarty_tpl->getValue('config')['dashboard_widgets_tickets'] == 1) {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
" id="config_dashboard_widgets_tickets"></td>
                                </tr>


                                <tr>
                                    <td width="80%"><label for="config_dashboard_widgets_tasks"><?php echo $_smarty_tpl->getValue('_L')['Tasks'];?>
 </label></td>
                                    <td><input type="checkbox" <?php if ((null !== ($_smarty_tpl->getValue('config')['dashboard_widgets_tasks'] ?? null)) && $_smarty_tpl->getValue('config')['dashboard_widgets_tasks'] == 1) {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
" id="config_dashboard_widgets_tasks"></td>
                                </tr>




                                </tbody>
                            </table>
                            <div class="mb-3">
                                <label for="refresh_widget_every"><?php echo $_smarty_tpl->getValue('_L')['Refresh Widget Every'];?>
</label>
                                <select name="refresh_widget_every" id="refresh_widget_every" class="form-control">




                                    <option value="60000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '60000') {?>selected<?php }?>>1 <?php echo $_smarty_tpl->getValue('_L')['minute'];?>
</option>
                                    <option value="120000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '120000') {?>selected<?php }?>>2 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="180000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '180000') {?>selected<?php }?>>3 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="240000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '240000') {?>selected<?php }?>>4 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="300000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '300000') {?>selected<?php }?>>5 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="360000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '360000') {?>selected<?php }?>>6 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="420000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '420000') {?>selected<?php }?>>7 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="480000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '480000') {?>selected<?php }?>>8 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="540000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '540000') {?>selected<?php }?>>9 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="600000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '600000') {?>selected<?php }?>>10 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="660000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '660000') {?>selected<?php }?>>11 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="720000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '720000') {?>selected<?php }?>>12 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="780000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '780000') {?>selected<?php }?>>13 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="840000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '840000') {?>selected<?php }?>>14 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>
                                    <option value="900000" <?php if ((null !== ($_smarty_tpl->getValue('config')['refresh_widget_every'] ?? null)) && $_smarty_tpl->getValue('config')['refresh_widget_every'] == '900000') {?>selected<?php }?>>15 <?php echo $_smarty_tpl->getValue('_L')['minutes'];?>
</option>

                                </select>


                            </div>
                        </div>






                    </div>
                </div>
            </div>

        <?php }?>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1241761411675e16500b8d21_92952158 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {



            var _url = $("#_url").val();







            $('#config_rtl').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "rtl", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "rtl", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_mininav').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "mininav", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "mininav", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_hide_footer').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "hide_footer", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "hide_footer", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

            $('#config_show_sidebar_header').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "show_sidebar_header", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "show_sidebar_header", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });



            var $contentAnimation = $("#contentAnimation");


            $contentAnimation.change(function() {

                $('#ui_settings').block({ message: null });

                $.post( _url+'settings/update_option/', { opt: "contentAnimation", val: $contentAnimation.val() })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });


            });

            var $contact_set_view_mode = $("#contact_set_view_mode");

            $contact_set_view_mode.change(function() {

                window.location = base_url + 'contacts/set_view_mode/' + $contact_set_view_mode.val() + '/';


            });


            var $ui_dashboard_settings = $('#ui_dashboard_settings');

            $('#config_dashboard_widgets_tickets').change(function() {

                $ui_dashboard_settings.block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tickets", val: "1" })
                        .done(function( data ) {
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tickets", val: "0" })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });



            $('#config_dashboard_widgets_tasks').change(function() {

                $ui_dashboard_settings.block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tasks", val: "1" })
                        .done(function( data ) {
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "dashboard_widgets_tasks", val: "0" })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });


            $('#refresh_widget_every').change(function() {

                $ui_dashboard_settings.block({ message: null });

                $.post( _url+'settings/update_option/', { opt: "refresh_widget_every", val: $('#refresh_widget_every').val() })
                    .done(function( data ) {
                        location.reload();
                    });
            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
