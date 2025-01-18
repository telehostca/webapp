<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:26
  from 'file:../default/pg.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16b6104696_61900930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '367d07446c02caebb270cb7854279a7ca60c551b' => 
    array (
      0 => '../default/pg.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16b6104696_61900930 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1836583344675e16b60f4ff8_90861553', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1836583344675e16b60f4ff8_90861553 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Payment Gateways'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reorder/pg/" class="btn btn-primary mb-md"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->getValue('_L')['Reorder Payment Gateways'];?>
</a>

                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-bordered table-hover sys_table">
                            <thead>
                            <tr>

                                <th><?php echo $_smarty_tpl->getValue('_L')['Logo'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Gateway Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Setting Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Value'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</th>
                                <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                                <tr>

                                    <td>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/pg-conf/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/">
                                            <?php if ($_smarty_tpl->getValue('ds')['logo'] != '') {?>
                                                <img src="<?php echo $_smarty_tpl->getValue('app_url');
echo $_smarty_tpl->getValue('ds')['logo'];?>
">
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/pg/<?php echo $_smarty_tpl->getValue('ds')['processor'];?>
.png">
                                            <?php }?>

                                        </a>
                                    </td>
                                    <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/pg-conf/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/"><?php echo $_smarty_tpl->getValue('ds')['name'];?>
</a> </td>
                                    <td><?php echo $_smarty_tpl->getValue('ds')['settings'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('ds')['value'];?>
</td>

                                    <td>
                                        <?php if ($_smarty_tpl->getValue('ds')['status'] == 'Inactive') {?>
                                            <h4><span class="badge bg-danger"><?php echo $_smarty_tpl->getValue('_L')['Inactive'];?>
</span></h4>
                                        <?php } else { ?>
                                            <h4><span class="badge bg-success"><?php echo $_smarty_tpl->getValue('_L')['Active'];?>
</span></h4>
                                        <?php }?>

                                    </td>

                                    <td class="text-end">

                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/pg-conf/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-success"> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>

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



    </div>
<?php
}
}
/* {/block "content"} */
}
