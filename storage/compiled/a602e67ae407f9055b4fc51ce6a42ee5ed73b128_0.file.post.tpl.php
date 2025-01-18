<?php
/* Smarty version 4.3.2, created on 2023-09-18 03:00:14
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6507f57e4e7407_02325973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a602e67ae407f9055b4fc51ce6a42ee5ed73b128' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/post.tpl',
      1 => 1695020330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6507f57e4e7407_02325973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21060632776507f57e4af102_41554138', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18531961966507f57e4e3ce0_25778131', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_21060632776507f57e4af102_41554138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21060632776507f57e4af102_41554138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" id="app_form">

        <div class="row mb-3">
            <div class="col">
                <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?>
                    <h1><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h1>
                <?php } else { ?>
                    <h1><?php echo __('New Post');?>
</h1>
                <?php }?>
            </div>
            <div class="col text-end">
                <button type="submit" id="btnSavePost" class="btn btn-primary mt-3"><?php echo __('Save');?>
</button>
            </div>
        </div>

        <div class="mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="input_title"><?php echo __('Title');?>
</label>
                        <input type="text" class="form-control" required id="input_title" name="title" <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
"<?php }?>>
                    </div>
                    <div class="mb-3">
                        <label for="input_slug" class="form-label"><?php echo __('Slug');?>
</label>
                        <div class="input-group">
                            <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
</span>
                            <input type="text" class="form-control" name="slug" id="input_slug" <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['post']->value->slug;?>
"<?php }?> >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value) && $_smarty_tpl->tpl_vars['post']->value->is_home_page) {?>
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo __('Hero Section');?>
</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_title"><?php echo __('Title');?>
</label>
                                    <input type="text" class="form-control" id="input_hero_title" name="settings[hero_title]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <div class="mb-3">
                                    <label for="input_hero_description"><?php echo __('Description');?>
</label>
                                    <textarea class="form-control" id="input_hero_description" name="settings[hero_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_primary_button_text"><?php echo __('Primary Button Text');?>
</label>
                                            <input type="text" class="form-control" id="input_primary_button_text" name="settings[primary_button_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['primary_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_primary_button_url"><?php echo __('Primary Button URL');?>
</label>
                                            <input type="text" class="form-control" id="input_primary_button_url" name="settings[primary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['primary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_secondary_button_text"><?php echo __('Secondary Button Text');?>
</label>
                                            <input type="text" class="form-control" id="input_secondary_button_text" name="settings[secondary_button_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['secondary_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_secondary_button_url"><?php echo __('Secondary Button URL');?>
</label>
                                            <input type="text" class="form-control" id="input_secondary_button_url" name="settings[secondary_button_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['secondary_button_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_image"><?php echo __('Hero Image');?>
</label>
                                    <!-- Adding data-media-input attribute to the input element -->
                                    <input type="hidden" data-media-input="hero_image" id="input_hero_image" name="settings[hero_image]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['hero_image'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                                    <!-- Adding data-media-render attribute to the container div -->
                                    <div data-media-render="hero_image" id="hero_image_renderer">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['hero_image'])) {?>
                                            <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['hero_image'];?>
" class="img-fluid">
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <!-- The button already has the data-choose-media-btn attribute as required -->
                                    <button data-choose-media-btn="hero_image" type="button" id="choose_hero_image" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
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
                        <h4><?php echo __('Features Section');?>
</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_1_title"><?php echo __('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_1_title" name="settings[feature_1_title]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_1_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_description"><?php echo __('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_1_description" name="settings[feature_1_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_1_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_1_icon"><?php echo __('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_1_icon" id="input_feature_1_icon" name="settings[feature_1_icon]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_1_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_1_icon" id="feature_1_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['feature_1_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['feature_1_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_1_icon" type="button" id="choose_feature_1_icon" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_link_text"><?php echo __('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_1_link_text" name="settings[feature_1_link_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_1_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_link_url"><?php echo __('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_1_link_url" name="settings[feature_1_link_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_1_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_2_title"><?php echo __('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_2_title" name="settings[feature_2_title]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_2_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_description"><?php echo __('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_2_description" name="settings[feature_2_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_2_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_2_icon"><?php echo __('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_2_icon" id="input_feature_2_icon" name="settings[feature_2_icon]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_2_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_2_icon" id="feature_2_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['feature_2_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['feature_2_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_2_icon" type="button" id="choose_feature_2_icon" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_link_text"><?php echo __('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_2_link_text" name="settings[feature_2_link_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_2_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_link_url"><?php echo __('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_2_link_url" name="settings[feature_2_link_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_2_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_3_title"><?php echo __('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_3_title" name="settings[feature_3_title]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_3_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_description"><?php echo __('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_3_description" name="settings[feature_3_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_3_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_3_icon"><?php echo __('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_3_icon" id="input_feature_3_icon" name="settings[feature_3_icon]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_3_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_3_icon" id="feature_3_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['feature_3_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['feature_3_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_3_icon" type="button" id="choose_feature_3_icon" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_link_text"><?php echo __('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_3_link_text" name="settings[feature_3_link_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_3_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_link_url"><?php echo __('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_3_link_url" name="settings[feature_3_link_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_3_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_4_title"><?php echo __('Title');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_4_title" name="settings[feature_4_title]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_4_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_description"><?php echo __('Description');?>
</label>
                                            <textarea class="form-control" id="input_feature_4_description" name="settings[feature_4_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_4_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_4_icon"><?php echo __('Icon');?>
</label>
                                                <input type="hidden" data-media-input="feature_4_icon" id="input_feature_4_icon" name="settings[feature_4_icon]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_4_icon'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                                <div data-media-render="feature_4_icon" id="feature_4_icon_renderer">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['feature_4_icon'])) {?>
                                                        <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['feature_4_icon'];?>
" class="img-fluid">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_4_icon" type="button" id="choose_feature_4_icon" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_link_text"><?php echo __('Link Text');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_4_link_text" name="settings[feature_4_link_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_4_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_link_url"><?php echo __('Link URL');?>
</label>
                                            <input type="text" class="form-control" id="input_feature_4_link_url" name="settings[feature_4_link_url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['feature_4_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
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
                        <h4><?php echo __('About Section');?>
</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- About Title -->
                                <div class="mb-3">
                                    <label for="input_about_title"><?php echo __('About Title');?>
</label>
                                    <input type="text" class="form-control" id="input_about_title" name="settings[about_title]" value="<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['about_title'];?>
">
                                </div>
                                <!-- About Description -->
                                <div class="mb-3">
                                    <label for="input_about_description"><?php echo __('About Description');?>
</label>
                                    <textarea class="form-control" id="input_about_description" name="settings[about_description]"><?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['about_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                                </div>
                                <!-- About Button Text -->
                                <div class="mb-3">
                                    <label for="input_about_button_text"><?php echo __('About Button Text');?>
</label>
                                    <input type="text" class="form-control" id="input_about_button_text" name="settings[about_button_text]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['about_button_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <!-- About Button Link -->
                                <div class="mb-3">
                                    <label for="input_about_button_link"><?php echo __('About Button Link');?>
</label>
                                    <input type="text" class="form-control" id="input_about_button_link" name="settings[about_button_link]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['about_button_link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- About Image -->
                                <div class="mb-3">
                                    <label for="input_about_image"><?php echo __('About Image');?>
</label>
                                    <input type="hidden" data-media-input="about_image" id="input_about_image" name="settings[about_image]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['post_settings']->value['about_image'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                                    <!-- Image renderer for the about image -->
                                    <div data-media-render="about_image" id="about_image_renderer">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['post_settings']->value['about_image'])) {?>
                                            <img src="<?php echo APP_URL;?>
/storage/<?php echo $_smarty_tpl->tpl_vars['post_settings']->value['about_image'];?>
" class="img-fluid">
                                        <?php }?>
                                    </div>
                                </div>
                                <!-- Button to choose the about image -->
                                <div class="mb-3">
                                    <button data-choose-media-btn="about_image" type="button" id="choose_about_image" class="btn btn-secondary btn-sm"><?php echo __('Choose Media');?>
</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">
        <?php }?>

    </form>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_18531961966507f57e4e3ce0_25778131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18531961966507f57e4e3ce0_25778131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
                                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                                        "info": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                                        "infoEmpty": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                                        buttons: {
                                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                                        },
                                        searchPlaceholder: "<?php echo __('Search');?>
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

                axios.post('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
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
