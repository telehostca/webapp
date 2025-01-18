<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:40
  from 'file:../default/tags.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16c4c502f6_86104374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0467be0135ec584629e29670f3af6cf0ee0a2f79' => 
    array (
      0 => '../default/tags.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16c4c502f6_86104374 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1528656267675e16c4c48072_80065539', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1528656267675e16c4c48072_80065539 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Manage Tags'];?>
 </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                    <table class="table table-bordered table-hover sys_table">
                        <thead>
                        <tr>

                            <th><?php echo $_smarty_tpl->getValue('_L')['Tag'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('d')) > 0) {?>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                                <tr>

                                    <td><?php echo $_smarty_tpl->getValue('ds')['text'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('ds')['type'];?>
</td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->getValue('ds')['id'];?>
"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                        <?php } else { ?>

                            <tr>
                                <td colspan="3">
                                    <?php echo $_smarty_tpl->getValue('_L')['No Data Available'];?>

                                </td>
                            </tr>

                        <?php }?>



                        </tbody>
                    </table>



            </div>



        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
