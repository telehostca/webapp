<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:25
  from 'file:../default/contacts_drive.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d34d414105_04730726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43226541ae0473f372f0d1e69a03d3a3e7b02bc9' => 
    array (
      0 => '../default/contacts_drive.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d34d414105_04730726 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6699895236745d34d405850_73685013', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11624701226745d34d413781_02023333', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_6699895236745d34d405850_73685013 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Files uploaded by Customers');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="">
                            <div class="mb-3 mb-4">
                                <div class="input-group">
                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->getValue('_L')['Search'];?>
..."/>

                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover sys_table footable" id="footable_tbl"  data-filter="#foo_filter" data-page-size="50">

                            <?php if ($_smarty_tpl->getValue('files')->count() > 0) {?>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/dl/<?php echo $_smarty_tpl->getValue('file')->id;?>
_<?php echo $_smarty_tpl->getValue('file')->file_dl_token;?>
/"><?php if ($_smarty_tpl->getValue('file')->file_mime_type == 'jpg' || $_smarty_tpl->getValue('file')->file_mime_type == 'png' || $_smarty_tpl->getValue('file')->file_mime_type == 'gif') {?>
                                                    <i class="fal fa-file-image-o"></i>
                                                <?php } elseif ($_smarty_tpl->getValue('file')->file_mime_type == 'pdf') {?>
                                                    <i class="fal fa-file-pdf-o"></i>
                                                <?php } elseif ($_smarty_tpl->getValue('file')->file_mime_type == 'zip') {?>
                                                    <i class="fal fa-file-archive-o"></i>
                                                <?php } else { ?>
                                                    <i class="fal fa-file"></i>
                                                <?php }?> <?php echo $_smarty_tpl->getValue('file')->title;?>
</a>

                                            <br>

                                            <p style="margin-top: 10px;">

                                                <?php if ((null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('file')->cid][0]['account'] ?? null))) {?>
                                                    <?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
:  <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('file')->cid;?>
"><?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('file')->cid][0]['account'];?>
</a> |
                                                <?php }?> <?php echo $_smarty_tpl->getValue('_L')['Uploaded at'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('file')->created_at));?>


                                            </p>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <ul class="pagination">
                                        </ul>
                                    </td>
                                </tr>
                                </tfoot>

                            <?php } else { ?>

                                <tr>
                                    <td>
                                        <?php echo $_smarty_tpl->getValue('_L')['No Data Available'];?>

                                    </td>
                                </tr>

                            <?php }?>

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
/* {block 'script'} */
class Block_11624701226745d34d413781_02023333 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var footable_tbl = $("#footable_tbl");

            footable_tbl.footable();

        })

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'script'} */
}
