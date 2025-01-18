<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:31
  from 'file:../default/post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d38f6bdf75_66191880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb5e19c0c2299c78b59f609a12e416145b61ac7' => 
    array (
      0 => '../default/post.tpl',
      1 => 1694991532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d38f6bdf75_66191880 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12047337246745d38f686d05_96992652', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17926154016745d38f6b9554_67973451', "script");
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_12047337246745d38f686d05_96992652 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <form method="post" id="app_form">

        <div class="row mb-3">
            <div class="col">
                <?php if (!empty($_smarty_tpl->getValue('post'))) {?>
                    <h1><?php echo $_smarty_tpl->getValue('post')->title;?>
</h1>
                <?php } else { ?>
                    <h1><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('New Post');?>
</h1>
                <?php }?>
            </div>
            <div class="col text-end">
                <button type="submit" id="btnSavePost" class="btn btn-primary mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save');?>
</button>
            </div>
        </div>

        <div class="mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="input_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</label>
                        <input type="text" class="form-control" required id="input_title" name="title" <?php if (!empty($_smarty_tpl->getValue('post'))) {?> value="<?php echo $_smarty_tpl->getValue('post')->title;?>
"<?php }?>>
                    </div>
                    <div class="mb-3">
                        <label for="input_slug" class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Slug');?>
</label>
                        <div class="input-group">
                            <span class="input-group-text"><?php echo $_smarty_tpl->getValue('base_url');?>
</span>
                            <input type="text" class="form-control" name="slug" id="input_slug" <?php if (!empty($_smarty_tpl->getValue('post'))) {?> value="<?php echo $_smarty_tpl->getValue('post')->slug;?>
"<?php }?> >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($_smarty_tpl->getValue('post')) && $_smarty_tpl->getValue('post')->is_home_page) {?>
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Hero Section');?>
</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</label>
                                    <input type="text" class="form-control" id="input_hero_title" name="settings[hero_title]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['hero_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <div class="mb-3">
                                    <label for="input_hero_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Description');?>
</label>
                                    <textarea class="form-control" id="input_hero_description" name="settings[hero_description]"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['hero_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_primary_button_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Primary Button Text');?>
</label>
                                            <input type="text" class="form-control" id="input_primary_button_text" name="settings[primary_button_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['primary_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_primary_button_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Primary Button URL');?>
</label>
                                            <input type="text" class="form-control" id="input_primary_button_url" name="settings[primary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['primary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_secondary_button_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Secondary Button Text');?>
</label>
                                            <input type="text" class="form-control" id="input_secondary_button_text" name="settings[secondary_button_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['secondary_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_secondary_button_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Secondary Button URL');?>
</label>
                                            <input type="text" class="form-control" id="input_secondary_button_url" name="settings[secondary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['secondary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_image"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Hero Image');?>
</label>
                                    <!-- Adding data-media-input attribute to the input element -->
                                    <input type="hidden" data-media-input="hero_image" id="input_hero_image" name="settings[hero_image]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['hero_image'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                                    <!-- Adding data-media-render attribute to the container div -->
                                    <div data-media-render="hero_image" id="hero_image_renderer">
                                        <?php if (!empty($_smarty_tpl->getValue('post_settings')['hero_image'])) {?>
                                            <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['hero_image'];?>
" class="img-fluid">
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <!-- The button already has the data-choose-media-btn attribute as required -->
                                    <button data-choose-media-btn="hero_image" type="button" id="choose_hero_image" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose Media');?>
</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Features Section');?>
</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_1_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_1_title" name="settings[feature_1_title]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_1_description" name="settings[feature_1_description]"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_1_icon"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_1_icon" id="input_feature_1_icon" name="settings[feature_1_icon]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_1_icon" id="feature_1_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_1_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_1_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_1_icon" type="button" id="choose_feature_1_icon" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_link_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_1_link_text" name="settings[feature_1_link_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_link_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_1_link_url" name="settings[feature_1_link_url]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_1_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_2_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_2_title" name="settings[feature_2_title]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_2_description" name="settings[feature_2_description]"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_2_icon"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_2_icon" id="input_feature_2_icon" name="settings[feature_2_icon]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_2_icon" id="feature_2_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_2_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_2_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_2_icon" type="button" id="choose_feature_2_icon" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_link_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_2_link_text" name="settings[feature_2_link_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_link_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_2_link_url" name="settings[feature_2_link_url]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_2_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_3_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_3_title" name="settings[feature_3_title]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_3_description" name="settings[feature_3_description]"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_3_icon"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_3_icon" id="input_feature_3_icon" name="settings[feature_3_icon]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_3_icon" id="feature_3_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_3_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_3_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_3_icon" type="button" id="choose_feature_3_icon" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_link_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_3_link_text" name="settings[feature_3_link_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_link_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_3_link_url" name="settings[feature_3_link_url]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_3_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_4_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_4_title" name="settings[feature_4_title]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_4_description" name="settings[feature_4_description]"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_4_icon"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_4_icon" id="input_feature_4_icon" name="settings[feature_4_icon]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_4_icon" id="feature_4_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->getValue('post_settings')['feature_4_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['feature_4_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_4_icon" type="button" id="choose_feature_4_icon" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_link_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_4_link_text" name="settings[feature_4_link_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_link_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_4_link_url" name="settings[feature_4_link_url]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['feature_4_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About Section');?>
</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- About Title -->
                                <div class="mb-3">
                                    <label for="input_about_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About Title');?>
</label>
                                    <input type="text" class="form-control" id="input_about_title" name="settings[about_title]" value="<?php echo $_smarty_tpl->getValue('post_settings')['about_title'];?>
">
                                </div>
                                <!-- About Description -->
                                <div class="mb-3">
                                    <label for="input_about_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About Description');?>
</label>
                                    <textarea class="form-control" id="input_about_description" name="settings[about_description]"><?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                </div>
                                <!-- About Button Text -->
                                <div class="mb-3">
                                    <label for="input_about_button_text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About Button Text');?>
</label>
                                    <input type="text" class="form-control" id="input_about_button_text" name="settings[about_button_text]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <!-- About Button Link -->
                                <div class="mb-3">
                                    <label for="input_about_button_link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About Button Link');?>
</label>
                                    <input type="text" class="form-control" id="input_about_button_link" name="settings[about_button_link]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_button_link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- About Image -->
                                <div class="mb-3">
                                    <label for="input_about_image"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About Image');?>
</label>
                                    <input type="hidden" data-media-input="about_image" id="input_about_image" name="settings[about_image]" value="<?php echo (($tmp = $_smarty_tpl->getValue('post_settings')['about_image'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                                    <!-- Image renderer for the about image -->
                                    <div data-media-render="about_image" id="about_image_renderer">
                                        <?php if (!empty($_smarty_tpl->getValue('post_settings')['about_image'])) {?>
                                            <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->getValue('post_settings')['about_image'];?>
" class="img-fluid">
                                        <?php }?>
                                    </div>
                                </div>
                                <!-- Button to choose the about image -->
                                <div class="mb-3">
                                    <button data-choose-media-btn="about_image" type="button" id="choose_about_image" class="btn btn-secondary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose Media');?>
</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <?php }?>

        <?php if (!empty($_smarty_tpl->getValue('post'))) {?>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('post')->id;?>
">
        <?php }?>

    </form>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_17926154016745d38f6b9554_67973451 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        window.addEventListener('DOMContentLoaded', function () {

            const app_url = '<?php echo APP_URL;?>
';

            // Store the currently active field for image selection
            let activeField = null;

            document.querySelectorAll('[data-choose-media-btn]').forEach(btn => {
                btn.addEventListener('click', function () {
                    // Set the active field based on the button clicked
                    activeField = btn.dataset.chooseMediaBtn;
                    $.fancybox.open({
                        src: base_url + 'media/choose',
                        type: 'ajax',
                        opts: {
                            afterShow: function (instance, current) {
                                $('#clx_datatable').dataTable({
                                    responsive: true,
                                    "language": {
                                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                                        "info": "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                                        "infoEmpty": "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                                        buttons: {
                                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                                        },
                                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                                    },
                                });
                            },
                            touch: false,
                            autoFocus: false,
                            keyboard: false,
                        },
                    });
                });
            });

            
            const $cloudonex_body = $('#cloudonex_body');

            $cloudonex_body.on('click', '.choose_media', function () {
                const media_path = $(this).data('path');

                // Use the activeField to determine which elements to update
                document.querySelector(`[data-media-input="${activeField}"]`).value = media_path;
                document.querySelector(`[data-media-render="${activeField}"]`).innerHTML = `<img src="${app_url}${ '/storage/' + media_path }" class="img-fluid">`;

                $.fancybox.close();
            });
            

            const btnSavePost = document.getElementById('btnSavePost');

            btnSavePost.addEventListener('click', function (e) {
                e.preventDefault();

                axios.post('<?php echo $_smarty_tpl->getValue('base_url');?>
cms/post', new FormData(document.getElementById('app_form')))
                    .then(function (response) {
                        if (response.data.status === 'success') {
                            window.location.href = response.data.redirect;
                        } else {
                            toastr.error(response.data.message);
                        }
                    })
                    .catch(function (error) {
                        toastr.error(error);
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
