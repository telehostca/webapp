<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:50
  from 'file:../default/util-sent-emails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15de0c7ee9_71735533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd073990a2409904a51c5fed863a0c74b055a60bd' => 
    array (
      0 => '../default/util-sent-emails.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15de0c7ee9_71735533 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1164117835675e15de0bdab9_37815921', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1164117835675e15de0bdab9_37815921 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Records'];?>
 <?php echo $_smarty_tpl->getValue('paginator')['found'];?>

                        . <?php echo $_smarty_tpl->getValue('_L')['Page'];?>
 <?php echo $_smarty_tpl->getValue('paginator')['page'];?>
 <?php echo $_smarty_tpl->getValue('_L')['of'];?>
 <?php echo $_smarty_tpl->getValue('paginator')['lastpage'];?>
. </h2>
                    


                </div>
                <div class="panel-container" id="application_ajaxrender">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table" id="sys_logs">
                            <thead>
                            <tr>
                                <th width="5%"><?php echo $_smarty_tpl->getValue('_L')['ID'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Sent To'];?>
</th>
                                <th width="60%"><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
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
                                    <td><?php echo $_smarty_tpl->getValue('ds')['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['date']));?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('ds')['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('ds')['subject'];?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
util/view-email/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-primary btn-outline btn-sm"><i class="fal fa-envelope-o"></i> <?php echo $_smarty_tpl->getValue('_L')['View'];?>
</a></td>

                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                        <?php echo $_smarty_tpl->getValue('paginator')['contents'];?>


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
