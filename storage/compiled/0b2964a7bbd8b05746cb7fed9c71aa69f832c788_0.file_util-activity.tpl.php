<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:48
  from 'file:../default/util-activity.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15dc5b24d8_85591192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b2964a7bbd8b05746cb7fed9c71aa69f832c788' => 
    array (
      0 => '../default/util-activity.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15dc5b24d8_85591192 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_111629344675e15dc5a1c72_49004609', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_917894292675e15dc5a3396_17675472', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_631647709675e15dc5ae344_24271355', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_111629344675e15dc5a1c72_49004609 extends \Smarty\Runtime\Block
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
class Block_917894292675e15dc5a3396_17675472 extends \Smarty\Runtime\Block
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
                    <div class="panel-toolbar">
                        <a href="javascript:;" class="btn btn-primary pull-right" onclick="confirmThenGoToUrl(event,'util/clear_logs')" id="clear_logs"><i
                                    class="fal fa-list"></i> <?php echo $_smarty_tpl->getValue('_L')['Clear Old Data'];?>
</a>
                    </div>



                </div>
                <div class="panel-container" id="application_ajaxrender">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table  table-striped sys_table datat" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['ID'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['UID'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['IP'];?>
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
                                        <td><?php echo $_smarty_tpl->getValue('ds')['type'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['description'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['userid'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['ip'];?>
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
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_631647709675e15dc5ae344_24271355 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <?php echo '<script'; ?>
>
        $(function() {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
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

            $('.has-tooltip').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
