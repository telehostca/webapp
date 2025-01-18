<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:57
  from 'file:../default/faqs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3a90b6191_92730568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c33962f4b0dbd7a6baa60b6b3be867230c60f6' => 
    array (
      0 => '../default/faqs.tpl',
      1 => 1691848458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3a90b6191_92730568 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11633711426745d3a90abba9_41060622', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13926655316745d3a90b5572_80279921', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_11633711426745d3a90abba9_41060622 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form id="formFaq" method="post" action="<?php echo $_smarty_tpl->getValue('base_url');?>
cms/save-faq">
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Question');?>
</label>
                            <input class="form-control" name="question" required <?php if (!empty($_smarty_tpl->getValue('selected_faq'))) {?>value="<?php echo $_smarty_tpl->getValue('selected_faq')->question;?>
"<?php }?>>
                        </div>

                        <div class="mb-3">
                            <label for="success_message"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Answer');?>
</label>
                            <textarea class="form-control" name="answer" required id="success_message"><?php if (!empty($_smarty_tpl->getValue('selected_faq'))) {
echo $_smarty_tpl->getValue('selected_faq')->answer;
}?></textarea>
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Display Order');?>
</label>
                            <input class="form-control" type="number" required name="display_order" value="<?php echo (($tmp = $_smarty_tpl->getValue('selected_faq')->display_order ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
">
                        </div>

                        <input type="hidden" name="id" value="<?php echo (($tmp = $_smarty_tpl->getValue('selected_faq')->id ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                        <button class="btn btn-primary" id="buttonSave" type="submit"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save');?>
</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="clx_datatable">

                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Question');?>
</th>
                            <th class="text-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Action');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faqs'), 'faq');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('faq')->value) {
$foreach0DoElse = false;
?>

                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->getValue('faq')->question;?>

                                </td>
                                <td class="text-end">
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
cms/faqs/<?php echo $_smarty_tpl->getValue('faq')->id;?>
" class="btn btn-primary btn-sm"><i class="fal fa-edit"></i></a>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'cms/delete-faq/<?php echo $_smarty_tpl->getValue('faq')->id;?>
');" class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_13926655316745d3a90b5572_80279921 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', () => {

            const formFaq = document.getElementById('formFaq');

            formFaq.addEventListener('submit', (e) => {
                e.preventDefault();

                axios.post(formFaq.getAttribute('action'), new FormData(formFaq))
                    .then((response) => {
                        if (response.data.success) {
                            window.location.reload();
                        }
                    })
                    .catch((error) => {
                        console.log(error);
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
