<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:51
  from 'file:../default/util_invoice_access_log.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15df8af509_68666980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbb60c0ba21f1e1e2c1549890eea752aced72dd' => 
    array (
      0 => '../default/util_invoice_access_log.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15df8af509_68666980 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_688358436675e15df897dc0_48563134', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1037722151675e15df8990a4_92921922', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_369245610675e15df8ac4c1_89676014', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_688358436675e15df897dc0_48563134 extends \Smarty\Runtime\Block
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
class Block_1037722151675e15df8990a4_92921922 extends \Smarty\Runtime\Block
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
                        <div class="table-responsive">

                            <table class="table table-bordered sys_table" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>

                                    <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Invoice'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['IP'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Country'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['City'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Browser'];?>
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

                                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')(($_smarty_tpl->getValue('config')['df']).(' H:i:s'),$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['viewed_at']));?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('ds')['cid'];?>
"><?php echo $_smarty_tpl->getValue('ds')['customer'];?>
</a> </td>
                                        <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('ds')['iid'];?>
"><?php echo $_smarty_tpl->getValue('ds')['iid'];?>
</a> </td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['ip'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['country'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['city'];?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('ds')['browser'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>

                        </div>

                    </div>




                    <?php echo $_smarty_tpl->getValue('paginator')['contents'];?>


                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_369245610675e15df8ac4c1_89676014 extends \Smarty\Runtime\Block
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
