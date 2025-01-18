<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:23
  from 'file:../default/media.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3872547b9_28107168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6130e99fc75f6e84740bf4cc14f4b73d579b11ab' => 
    array (
      0 => '../default/media.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3872547b9_28107168 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7169381016745d387246e36_84965196', "content");
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6769318796745d387250f53_25865706', "scripts");
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_7169381016745d387246e36_84965196 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


<div class="row">
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-hdr">
                <h3 class="card-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Upload');?>
</h3>
            </div>
            <div class="panel-container">
                <div class="panel-content">
                    <form class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Drop a media file.');?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('or, click to upload');?>
</span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel">
            <div class="panel-hdr">
                <h3 class="card-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Media');?>
</h3>
            </div>
            <div class="panel-container">
                <div class="panel-content">
                    <table class="table table-condensed table-hover table-bordered" id="clx_datatable">
                        <thead>
                        <tr>
                            <th><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Media');?>
</strong></th>
                            <th><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Title');?>
</strong></th>
                            <th class="text-end"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Manage');?>
</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('media_files'), 'media_file');
$_smarty_tpl->getVariable('media_file')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('media_file')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('media_file')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('media_file');
?>
                            <tr>
                                <td data-order="<?php echo $_smarty_tpl->getVariable('media_file')->iteration;?>
">
                                    <?php if ($_smarty_tpl->getValue('media_file')->extension == 'png' || $_smarty_tpl->getValue('media_file')->extension == 'jpg' || $_smarty_tpl->getValue('media_file')->extension == 'jpeg' || $_smarty_tpl->getValue('media_file')->extension == 'gif') {?>
                                        <img src="<?php echo BASE_URL_ALT;?>
media/image/<?php echo $_smarty_tpl->getValue('media_file')->path;?>
&h=50" class="img-responsive" style="max-width: 100px; max-height: 100px;" />
                                    <?php } else { ?>
                                        <i class="fal fa-file fa-5x"></i>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->getValue('media_file')->title;?>

                                </td>
                                <td class="text-end">
                                    <button class="btn btn-primary btn-sm copy_media_url mb-2" data-path="<?php echo $_smarty_tpl->getValue('media_file')->path;?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Copy URL');?>
</button>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'media/delete/<?php echo $_smarty_tpl->getValue('media_file')->id;?>
')" class="btn btn-sm btn-danger mb-2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete');?>
</a>
                                </td>
                            </tr>
                        <?php
$_smarty_tpl->setVariable('media_file', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_6769318796745d387250f53_25865706 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        window.addEventListener('DOMContentLoaded', ()=> {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                    },
                }
            );

            const upload = new Dropzone('#upload_container', {
                url: base_url + 'media/upload',
                maxFiles: 1,
                acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg,.webp,.mp4',
            });

            upload.on("success", function(file) {
                location.reload();
            });

            const copy_media_url = document.querySelectorAll('.copy_media_url');

            copy_media_url.forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    const path = e.target.getAttribute('data-path');
                    const url = '<?php echo APP_URL;?>
/storage/media/' + path;
                    app.copyToClipboard(url);
                    toastr.success('<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Copied');?>
');
                });
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
