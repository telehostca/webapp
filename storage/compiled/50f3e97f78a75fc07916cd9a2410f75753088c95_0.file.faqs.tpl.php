<?php
/* Smarty version 4.3.2, created on 2023-08-14 05:57:16
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/faqs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d9fa7cbc4fc8_86388363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f3e97f78a75fc07916cd9a2410f75753088c95' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/faqs.tpl',
      1 => 1691877256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d9fa7cbc4fc8_86388363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168445811864d9fa7cbb9a30_82347934', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62168343364d9fa7cbc43b4_99581156', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_168445811864d9fa7cbb9a30_82347934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_168445811864d9fa7cbb9a30_82347934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form id="formFaq" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/save-faq">
                        <div class="mb-3">
                            <label><?php echo __('Question');?>
</label>
                            <input class="form-control" name="question" required <?php if (!empty($_smarty_tpl->tpl_vars['selected_faq']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['selected_faq']->value->question;?>
"<?php }?>>
                        </div>

                        <div class="mb-3">
                            <label for="success_message"><?php echo __('Answer');?>
</label>
                            <textarea class="form-control" name="answer" required id="success_message"><?php if (!empty($_smarty_tpl->tpl_vars['selected_faq']->value)) {
echo $_smarty_tpl->tpl_vars['selected_faq']->value->answer;
}?></textarea>
                        </div>

                        <div class="mb-3">
                            <label><?php echo __('Display Order');?>
</label>
                            <input class="form-control" type="number" required name="display_order" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['selected_faq']->value->display_order ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
">
                        </div>

                        <input type="hidden" name="id" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['selected_faq']->value->id ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                        <button class="btn btn-primary" id="buttonSave" type="submit"><?php echo __('Save');?>
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
                            <th><?php echo __('Question');?>
</th>
                            <th class="text-end"><?php echo __('Action');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faqs']->value, 'faq');
$_smarty_tpl->tpl_vars['faq']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['faq']->value) {
$_smarty_tpl->tpl_vars['faq']->do_else = false;
?>

                            <tr>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['faq']->value->question;?>

                                </td>
                                <td class="text-end">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/faqs/<?php echo $_smarty_tpl->tpl_vars['faq']->value->id;?>
" class="btn btn-primary btn-sm"><i class="fal fa-edit"></i></a>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'cms/delete-faq/<?php echo $_smarty_tpl->tpl_vars['faq']->value->id;?>
');" class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></a>
                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
class Block_62168343364d9fa7cbc43b4_99581156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_62168343364d9fa7cbc43b4_99581156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
