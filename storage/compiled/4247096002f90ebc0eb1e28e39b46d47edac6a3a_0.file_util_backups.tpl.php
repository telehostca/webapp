<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:53
  from 'file:../default/util_backups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15e1961f85_23313287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4247096002f90ebc0eb1e28e39b46d47edac6a3a' => 
    array (
      0 => '../default/util_backups.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15e1961f85_23313287 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2122157288675e15e19563c0_77644769', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1548193724675e15e1961433_80487116', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_2122157288675e15e19563c0_77644769 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <h2 class="ibilling-page-header"><?php echo $_smarty_tpl->getValue('_L')['Backup'];?>
</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <ul class="nav nav-tabs">
                            <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->getValue('_url');?>
util/backups"><?php echo $_smarty_tpl->getValue('_L')['Database'];?>
</a></li>
                            <li><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('_url');?>
util/backup_files"><?php echo $_smarty_tpl->getValue('_L')['Files'];?>
</a></li>
                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane active show">

                                <br>
                                <div>


                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
util/do-backup-db" id="btnBackup" class="btn btn-primary add_document waves-effect waves-light"><i class="fal fa-database"></i> <?php echo $_smarty_tpl->getValue('_L')['Backup now'];?>
</a>

                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('files')) > 0) {?>

                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'value', false, 'file');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>

                                                    <?php if ($_smarty_tpl->getValue('file') == '..' || $_smarty_tpl->getValue('file') == 'index.html' || $_smarty_tpl->getValue('file') == 'task.log') {?>
                                                        <?php continue 1;?>
                                                    <?php }?>

                                                    <div class="file-box" style="margin-bottom: 15px;">
                                                        <div class="file">
                                                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
util/download-db-backup/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base64_encode')($_smarty_tpl->getValue('value')['file_path']);?>
">
                                                                <span class="corner"></span>

                                                                <div class="icon">
                                                                    <i class="fa <?php echo $_smarty_tpl->getValue('value')['icon_class'];?>
"></i>
                                                                </div>
                                                                <div class="file-name">
                                                                    <?php echo $_smarty_tpl->getValue('file');?>

                                                                    <br/>
                                                                    <small>
                                                                        <?php echo $_smarty_tpl->getValue('value')['mod_time'];?>


                                                                    </small>
                                                                </div>

                                                            </a>


                                                        </div>

                                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
util/delete-backup-db/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('str_replace')('/',':',$_smarty_tpl->getValue('value')['file_path']);?>
" class="btn btn-danger mt-3"><?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>

                                                    </div>



                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->getValue('_L')['No Data Available'];?>

                                            <?php }?>






                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
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
class Block_1548193724675e15e1961433_80487116 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#btnBackup').click(function () {
                $('#btnBackup').prop('disabled',true);
            });
        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
