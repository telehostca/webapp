<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:55
  from 'file:../default/dbstatus.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15e376f162_90497908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1631ec59558bef1cbfecdb1cf2ee70d0e73f01' => 
    array (
      0 => '../default/dbstatus.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15e376f162_90497908 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_238468564675e15e37689f8_35070941', "head");
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2073908520675e15e3769c25_25565452', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_238468564675e15e37689f8_35070941 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_2073908520675e15e3769c25_25565452 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Total Database Size'];?>
: <?php echo $_smarty_tpl->getValue('dbsize');?>
  MB </h2>
            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
util/dbbackup/" class="btn btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->getValue('_L')['Download Database Backup'];?>
</a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="table-responsive ">
                    <table class="table table-hover table-striped  sys_table">
                        <thead style="background: #f0f2ff">
                        <tr>
                            <th width="50%"><?php echo $_smarty_tpl->getValue('_L')['Table Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Rows'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Size'];?>
</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tables'), 'tbl');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tbl')->value) {
$foreach0DoElse = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->getValue('tbl')['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('tbl')['rows'];?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('tbl')['size'];?>
 Kb</td>

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
}
