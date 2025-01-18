<?php
/* Smarty version 5.4.2, created on 2025-01-18 13:30:52
  from 'file:../default/client_tickets_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678bf35c50b297_82874654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64ec4350fce5acad7933576e9fef94fd9241907' => 
    array (
      0 => '../default/client_tickets_all.tpl',
      1 => 1737224959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678bf35c50b297_82874654 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_959491293678bf35c500f11_75509552', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_client')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_959491293678bf35c500f11_75509552 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <h2><?php echo $_smarty_tpl->getValue('_L')['List Tickets'];?>
</h2>
                        </div>
                        <div>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/tickets/new/" class="btn pull-right btn-primary"><i class="icon-mail"></i> <?php echo $_smarty_tpl->getValue('_L')['Open New Ticket'];?>
</a>
                        </div>
                    </div>
                    <table class="table table-hover table-vcenter">
                        <tbody>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ds'), 'd');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach0DoElse = false;
?>
                            <tr>
                                <td class="text-center h5" style="width: 140px;"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/tickets/view/<?php echo $_smarty_tpl->getValue('d')['tid'];?>
/">#<?php echo $_smarty_tpl->getValue('d')['tid'];?>
</a></td>
                                <td class="hidden-xs hidden-sm hidden-md text-center" style="width: 100px;">
                                    <span class="badge badge-success"><?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('d')['status']] ?? null))) {?>
                                    <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('d')['status']];?>

                                    <?php } else { ?>
                                    <?php echo $_smarty_tpl->getValue('d')['status'];?>

                                    <?php }?></span>
                                </td>
                                <td>
                                    <a class="h4" href="<?php echo $_smarty_tpl->getValue('_url');?>
client/tickets/view/<?php echo $_smarty_tpl->getValue('d')['tid'];?>
/"><?php echo $_smarty_tpl->getValue('d')['subject'];?>
</a>
                                    <div class="text-muted  mt-2">
                                        <em><?php echo $_smarty_tpl->getValue('_L')['Updated'];?>
 </em> <em class="mmnt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y-m-d',$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('d')['updated_at']));?>
</em> by <a class="text-info" href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/client/view/<?php echo $_smarty_tpl->getValue('d')['tid'];?>
/"><?php echo $_smarty_tpl->getValue('d')['last_reply'];?>
</a>
                                    </div>
                                </td>
                            </tr>

                            <?php
}
if ($foreach0DoElse) {
?>
                            <tr><td align="center" style="border-top: none"><?php echo $_smarty_tpl->getValue('_L')['You do not have any Tickets'];?>
</td></tr>
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
