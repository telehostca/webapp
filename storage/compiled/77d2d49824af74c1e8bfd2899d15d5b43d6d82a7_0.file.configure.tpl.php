<?php
/* Smarty version 4.3.2, created on 2023-08-12 12:09:50
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d7aece3d9011_63585911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77d2d49824af74c1e8bfd2899d15d5b43d6d82a7' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/configure.tpl',
      1 => 1691747691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d7aece3d9011_63585911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80600802264d7aece396ff8_65589807', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187032754964d7aece398799_17220324', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45726448364d7aece3d69f3_79768403', "script");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_80600802264d7aece396ff8_65589807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_80600802264d7aece396ff8_65589807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_187032754964d7aece398799_17220324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187032754964d7aece398799_17220324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h3 class="card-title"><?php echo __('Configure');?>
</h3>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form method="post" action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
cms/save-settings">
                    <h4><?php ob_start();
echo __('Accouncement bar');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h4>
                    <p><?php echo __('Keep empty to disable the announcement bar.');?>
</p>
                    <div class="mb-3">
                        <label><?php echo __('Announcement bar message');?>
</label>
                        <input type="text" class="form-control" name="announcement_bar_message" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['announcement_bar_message'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label><?php echo __('Announcement bar background color');?>
</label>
                                <input type="color" class="form-control" name="announcement_bar_background_color" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['announcement_bar_background_color'] ?? null)===null||$tmp==='' ? '#1D2025' ?? null : $tmp);?>
">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label><?php echo __('Announcement bar link text');?>
</label>
                                <input type="text" class="form-control" name="announcement_bar_link_text" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['announcement_bar_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label><?php echo __('Announcement bar link url');?>
</label>
                        <input type="text" class="form-control" name="announcement_bar_link_url" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['announcement_bar_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <h4><?php ob_start();
echo __('Contact widget');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo __('Contact widget title');?>
</label>
                        <input type="text" class="form-control" name="contact_widget_title" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['contact_widget_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label for="contact_widget_description"><?php echo __('Contact widget description');?>
</label>
                        <textarea class="form-control" id="contact_widget_description" name="contact_widget_description"><?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['contact_widget_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                    </div>

                    <h4><?php ob_start();
echo __('Quick links widget 1');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo __('Quick links widget 1 title');?>
</label>
                        <input type="text" class="form-control" name="quick_links_widget_1_title" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>



                    <div class="mb-3">
                        <div class="mb-3">
                            <label><?php echo __('Quick links');?>
</label>
                        </div>
                        <button class="btn btn-primary btn-sm mb-3" id="add_quick_link_1" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                        <table class="table" id="quick_links_1_table">
                            <tbody id="quick_links_1_body">

                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links']) && !empty(json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links'],true))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_1_links'],true), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo __('Title');?>
" name="quick_links_widget_1_links[text][]" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo __('Text');?>
" name="quick_links_widget_1_links[url][]" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-danger remove-link" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>


                            </tbody>
                        </table>
                    </div>

                    <h4><?php ob_start();
echo __('Quick links widget 2');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo __('Quick links widget 2 title');?>
</label>
                        <input type="text" class="form-control" name="quick_links_widget_2_title" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <label><?php echo __('Quick links');?>
</label>
                        </div>
                        <button class="btn btn-primary btn-sm mb-3" id="add_quick_link_2" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                        <table class="table" id="quick_links_2_table">
                            <tbody id="quick_links_2_body">

                            <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links']) && !empty(json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links'],true))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['config']->value['quick_links_widget_2_links'],true), 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo __('Title');?>
" name="quick_links_widget_2_links[text][]" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo __('Text');?>
" name="quick_links_widget_2_links[url][]" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-danger remove-link" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            </tbody>

                        </table>
                    </div>


                    <h4><?php ob_start();
echo __('Social links');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo __('Twitter');?>
</label>
                        <input type="text" class="form-control" name="social_twitter" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['social_twitter'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo __('Facebook');?>
</label>
                        <input type="text" class="form-control" name="social_facebook" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['social_facebook'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo __('Instagram');?>
</label>
                        <input type="text" class="form-control" name="social_instagram" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['social_instagram'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo __('Youtube');?>
</label>
                        <input type="text" class="form-control" name="social_youtube" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['social_youtube'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo __('Linkedin');?>
</label>
                        <input type="text" class="form-control" name="social_linkedin" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['social_linkedin'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo __('Pinterest');?>
</label>
                        <input type="text" class="form-control" name="social_pinterest" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['config']->value['social_pinterest'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo __('Save');?>
</button>

                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_45726448364d7aece3d69f3_79768403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_45726448364d7aece3d69f3_79768403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        window.addEventListener('DOMContentLoaded', () => {
            $('#contact_widget_description').redactor({
                minHeight: 200,
                buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'link', 'unorderedlist', 'orderedlist']
            });

            let add_quick_link_1 = document.getElementById('add_quick_link_1');

            add_quick_link_1.addEventListener('click', () => {
                let quick_links_1_html = `<tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="<?php echo __('Title');?>
" name="quick_links_widget_1_links[text][]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="<?php echo __('Text');?>
" name="quick_links_widget_1_links[url][]">
                                </td>
                                <td style="vertical-align: middle;">
                                    <button class="btn btn-danger remove-link" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                </td>
                            </tr>`;
                let quick_links_1_body = document.getElementById('quick_links_1_body');
                quick_links_1_body.insertAdjacentHTML('beforeend', quick_links_1_html);
            });

            let quick_links_1_table = document.getElementById('quick_links_1_table');

            quick_links_1_table.addEventListener('click', (e) => {
                if(!e.target) {
                    return;
                }
                if (e.target.classList.contains('remove-link') || (e.target.closest('button') && e.target.closest('button').classList.contains('remove-link'))) {
                    e.target.closest('tr').remove();
                }
            });

            let add_quick_link_2 = document.getElementById('add_quick_link_2');

            add_quick_link_2.addEventListener('click', () => {
                let quick_links_2_html = `<tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="<?php echo __('Title');?>
" name="quick_links_widget_2_links[text][]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="<?php echo __('Text');?>
" name="quick_links_widget_2_links[url][]">
                                </td>
                                <td style="vertical-align: middle;">
                                    <button class="btn btn-danger remove-link" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                </td>
                            </tr>`;
                let quick_links_2_body = document.getElementById('quick_links_2_body');
                quick_links_2_body.insertAdjacentHTML('beforeend', quick_links_2_html);
            });

            let quick_links_2_table = document.getElementById('quick_links_2_table');

            quick_links_2_table.addEventListener('click', (e) => {
                if(!e.target) {
                    return;
                }
                if (e.target.classList.contains('remove-link') || (e.target.closest('button') && e.target.closest('button').classList.contains('remove-link'))) {
                    e.target.closest('tr').remove();
                }
            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
