<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:54:49
  from 'file:../default/../frontend/v/home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d32989f304_21037815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3e3bb00c81166fc1670ecf999ea08f7e740299' => 
    array (
      0 => '../default/../frontend/v/home.tpl',
      1 => 1692840200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d32989f304_21037815 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
$_smarty_tpl->assign('navBarType', 'dark', false, NULL);?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6095922236745d32985a3e4_47672087', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, './layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_6095922236745d32985a3e4_47672087 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
?>


    <section class="wrapper image-wrapper " style="background: linear-gradient(90deg,#021048,#1e38a3);">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['hero_title'] ?? null)===null||$tmp==='' ? 'Web hosting solution for modern apps and websites.' ?? null : $tmp);?>
</h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['hero_description'] ?? null)===null||$tmp==='' ? 'Fast server, modern tech stack, our solution is equipped with everything you need and beyond.' ?? null : $tmp);?>
</p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container">
            <div class="row gx-md-5 gy-5 mt-n19 mb-14 mb-md-17">
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_1_icon'])) {?>
                                <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_1_icon'];?>
" style="max-height: 128px;" class="mb-3">
                            <?php }?>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</h4>
                            <p class="mb-2">
                                <?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

                            </p>
                            <a href="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="more hover link-fuchsia"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_2_icon'])) {?>
                                <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_2_icon'];?>
" style="max-height: 128px;" class="mb-3">
                            <?php }?>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</h4>
                            <p class="mb-2">
                                <?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

                            </p>
                            <a href="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="more hover link-fuchsia"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_3_icon'])) {?>
                                <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_3_icon'];?>
" style="max-height: 128px;" class="mb-3">
                            <?php }?>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</h4>
                            <p class="mb-2">
                                <?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

                            </p>
                            <a href="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="more hover link-violet"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_4_icon'])) {?>
                                <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_4_icon'];?>
" style="max-height: 128px;" class="mb-3">
                            <?php }?>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</h4>
                            <p class="mb-2">
                                <?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

                            </p>
                            <a href="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="more hover link-orange"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wrapper">
        <div class="container py-0">
            <div class="row text-center">
                <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
                    <h2 class="display-1 mb-4"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_title'] ?? null)===null||$tmp==='' ? 'Develop locally, deploy globally' ?? null : $tmp);?>
</h2>
                    <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_description'] ?? null)===null||$tmp==='' ? '32 worldwide locations' ?? null : $tmp);?>
</p>
                </div>
            </div>
            <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join" data-delay="900">
                <span>
                    <a href="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_button_link'] ?? null)===null||$tmp==='' ? '/dynamic-link' ?? null : $tmp);?>
" class="btn btn-lg btn-outline-primary rounded-pill mx-1"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_button_text'] ?? null)===null||$tmp==='' ? 'Contact Us' ?? null : $tmp);?>
</a>
                </span>
            </div>
            <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
                <div class="col-lg-8 mx-auto">
                    <figure>
                        <img class="img-fluid" src="<?php echo APP_URL;?>
/storage/<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_image'] ?? null)===null||$tmp==='' ? '/dyanamic' ?? null : $tmp);?>
">
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section id="snippet-3" class="wrapper bg-light wrapper-border">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
            <h2 class="display-4 mb-3 text-center">
                <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Frequently Asked Questions');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            </h2>
            <p class="lead text-center mb-10 px-md-16 px-lg-0">
                <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Here are some of the most common questions we get asked. If you have any other questions, please feel free to contact us.');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
<br>
            </p>
            <div id="faq-accordion" class="accordion-wrapper">

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faqs'), 'faq', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('faq')->value) {
$foreach0DoElse = false;
?>
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-<?php echo $_smarty_tpl->getValue('key')+1;?>
">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-<?php echo $_smarty_tpl->getValue('key')+1;?>
" aria-expanded="false" aria-controls="accordion-collapse-1-<?php echo $_smarty_tpl->getValue('key')+1;?>
">
                                <?php echo $_smarty_tpl->getValue('faq')->question;?>

                            </button>
                        </div>
                        <div id="accordion-collapse-1-<?php echo $_smarty_tpl->getValue('key')+1;?>
" class="collapse" aria-labelledby="accordion-heading-1-<?php echo $_smarty_tpl->getValue('key')+1;?>
" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p><?php echo $_smarty_tpl->getValue('faq')->answer;?>
</p>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </section>


<?php
}
}
/* {/block 'content'} */
}
