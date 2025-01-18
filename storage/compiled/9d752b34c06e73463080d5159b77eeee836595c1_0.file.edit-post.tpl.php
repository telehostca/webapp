<?php
/* Smarty version 4.3.2, created on 2023-09-17 08:20:32
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/edit-post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6506ef10a46199_62411982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d752b34c06e73463080d5159b77eeee836595c1' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/edit-post.tpl',
      1 => 1694953230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6506ef10a46199_62411982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2265780436506ef10a3be41_91124270', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8856153896506ef10a426d7_47517706', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_2265780436506ef10a3be41_91124270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2265780436506ef10a3be41_91124270',
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
                            <input type="text" class="form-control" id="input_slug" <?php if (!empty($_smarty_tpl->tpl_vars['post']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['post']->value->slug;?>
"<?php }?> >
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
class Block_8856153896506ef10a426d7_47517706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8856153896506ef10a426d7_47517706',
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

                if(document.getElementById('input_title').value === '') {
                    toastr.error('<?php echo __('Please enter a title');?>
');
                    return false;
                }

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
