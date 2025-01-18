<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:34:04
  from 'file:../default/util_sys_status.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15eccc8643_27197299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfac319840d40bad957f04fd3cf85e089a79d4af' => 
    array (
      0 => '../default/util_sys_status.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15eccc8643_27197299 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_408274485675e15eccc5854_75488557', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_408274485675e15eccc5854_75488557 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Application Environment'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table">
                            <tbody>



                            <tr>
                                <td>BASE URL</td>
                                <td><?php echo $_smarty_tpl->getValue('app_url');?>
</td>
                            </tr>

                            <tr>
                                <td>Application Stage</td>
                                <td><?php echo $_smarty_tpl->getValue('app_stage');?>
</td>
                            </tr>

                            <tr>
                                <td>Default Language</td>
                                <td><?php echo $_smarty_tpl->getValue('config')['language'];?>
</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Server Environment'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <?php echo $_smarty_tpl->getValue('pinfo');?>

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
