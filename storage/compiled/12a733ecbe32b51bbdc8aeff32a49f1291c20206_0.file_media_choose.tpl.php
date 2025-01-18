<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:41
  from 'file:../default/media_choose.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d39968d406_80667938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12a733ecbe32b51bbdc8aeff32a49f1291c20206' => 
    array (
      0 => '../default/media_choose.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d39968d406_80667938 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?><div>
    <div class="card">
        <div class="card-body">

            <h3><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Media');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h3>

            <div class="table-responsive">
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
                                <button data-path="media/<?php echo $_smarty_tpl->getValue('media_file')->path;?>
" class="btn btn-primary btn-sm choose_media mb-2" data-path="<?php echo $_smarty_tpl->getValue('media_file')->path;?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Choose');?>
</button>
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
<?php }
}
