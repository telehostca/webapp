<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:57:00
  from 'file:../default/configure.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3ac9fcde6_44640562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3875fe5c26c9307b2a9a09a7bbce62d85ab07236' => 
    array (
      0 => '../default/configure.tpl',
      1 => 1691718892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3ac9fcde6_44640562 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7645134006745d3ac9dbff1_41869131', "head");
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10311613126745d3ac9dd338_89056846', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10369929656745d3ac9fa196_93558613', "script");
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_7645134006745d3ac9dbff1_41869131 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_10311613126745d3ac9dd338_89056846 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="panel">
        <div class="panel-hdr">
            <h3 class="card-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Configure');?>
</h3>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form method="post" action="<?php ob_start();
echo $_smarty_tpl->getValue('base_url');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
cms/save-settings">
                    <h4><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Accouncement bar');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h4>
                    <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Keep empty to disable the announcement bar.');?>
</p>
                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Announcement bar message');?>
</label>
                        <input type="text" class="form-control" name="announcement_bar_message" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['announcement_bar_message'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Announcement bar background color');?>
</label>
                                <input type="color" class="form-control" name="announcement_bar_background_color" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['announcement_bar_background_color'] ?? null)===null||$tmp==='' ? '#1D2025' ?? null : $tmp);?>
">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Announcement bar link text');?>
</label>
                                <input type="text" class="form-control" name="announcement_bar_link_text" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['announcement_bar_link_text'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Announcement bar link url');?>
</label>
                        <input type="text" class="form-control" name="announcement_bar_link_url" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['announcement_bar_link_url'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <h4><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Contact widget');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Contact widget title');?>
</label>
                        <input type="text" class="form-control" name="contact_widget_title" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['contact_widget_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label for="contact_widget_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Contact widget description');?>
</label>
                        <textarea class="form-control" id="contact_widget_description" name="contact_widget_description"><?php echo (($tmp = $_smarty_tpl->getValue('config')['contact_widget_description'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
                    </div>

                    <h4><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Quick links widget 1');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Quick links widget 1 title');?>
</label>
                        <input type="text" class="form-control" name="quick_links_widget_1_title" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['quick_links_widget_1_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>



                    <div class="mb-3">
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Quick links');?>
</label>
                        </div>
                        <button class="btn btn-primary btn-sm mb-3" id="add_quick_link_1" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                        <table class="table" id="quick_links_1_table">
                            <tbody id="quick_links_1_body">

                            <?php if (!empty($_smarty_tpl->getValue('config')['quick_links_widget_1_links']) && !empty($_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_1_links'],true))) {?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_1_links'],true), 'link');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
" name="quick_links_widget_1_links[text][]" value="<?php echo $_smarty_tpl->getValue('link')['text'];?>
">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Text');?>
" name="quick_links_widget_1_links[url][]" value="<?php echo $_smarty_tpl->getValue('link')['url'];?>
">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-danger remove-link" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php }?>


                            </tbody>
                        </table>
                    </div>

                    <h4><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Quick links widget 2');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Quick links widget 2 title');?>
</label>
                        <input type="text" class="form-control" name="quick_links_widget_2_title" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['quick_links_widget_2_title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Quick links');?>
</label>
                        </div>
                        <button class="btn btn-primary btn-sm mb-3" id="add_quick_link_2" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                        <table class="table" id="quick_links_2_table">
                            <tbody id="quick_links_2_body">

                            <?php if (!empty($_smarty_tpl->getValue('config')['quick_links_widget_2_links']) && !empty($_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_2_links'],true))) {?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('config')['quick_links_widget_2_links'],true), 'link');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('link')->value) {
$foreach1DoElse = false;
?>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
" name="quick_links_widget_2_links[text][]" value="<?php echo $_smarty_tpl->getValue('link')['text'];?>
">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Text');?>
" name="quick_links_widget_2_links[url][]" value="<?php echo $_smarty_tpl->getValue('link')['url'];?>
">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-danger remove-link" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            </tbody>

                        </table>
                    </div>


                    <h4><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Social links');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</h4>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Twitter');?>
</label>
                        <input type="text" class="form-control" name="social_twitter" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['social_twitter'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Facebook');?>
</label>
                        <input type="text" class="form-control" name="social_facebook" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['social_facebook'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Instagram');?>
</label>
                        <input type="text" class="form-control" name="social_instagram" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['social_instagram'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Youtube');?>
</label>
                        <input type="text" class="form-control" name="social_youtube" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['social_youtube'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Linkedin');?>
</label>
                        <input type="text" class="form-control" name="social_linkedin" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['social_linkedin'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pinterest');?>
</label>
                        <input type="text" class="form-control" name="social_pinterest" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['social_pinterest'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save');?>
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
class Block_10369929656745d3ac9fa196_93558613 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
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
                                    <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
" name="quick_links_widget_1_links[text][]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Text');?>
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
                                    <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
" name="quick_links_widget_2_links[text][]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Text');?>
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
