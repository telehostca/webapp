<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:23
  from 'file:../default/projects_expenses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e1587175b73_16289833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71e6cdd21132dc39f02a619fc49f0ff5e9f552c' => 
    array (
      0 => '../default/projects_expenses.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e1587175b73_16289833 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1735591577675e1587165c76_55095648', "project_content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1845150296675e1587171227_43285874', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "project_base.tpl", $_smarty_current_dir);
}
/* {block "project_content"} */
class Block_1735591577675e1587165c76_55095648 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row mb-3">
        <div class="col">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Expenses'];?>
</h2>
        </div>

        <div class="col text-end">
            <a href="javascript:;" id="add_expense" class="btn btn-primary">New Expense</a>
        </div>



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" id="clx_datatable">
                <thead style="background: #f0f2ff">
                <tr>
                    <th class="h6">ID</th>
                    <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</th>



                    <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('expenses'), 'expense');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('expense')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td class="h6">
                            <?php echo $_smarty_tpl->getValue('expense')->code;?>


                        </td>
                        <td class="h6"><?php echo $_smarty_tpl->getValue('expense')->date;?>

                        </td>
                        <td class="h6">

                            <?php if ((null !== ($_smarty_tpl->getValue('accounts')[$_smarty_tpl->getValue('expense')->account_id] ?? null))) {?>
                                <?php echo $_smarty_tpl->getValue('accounts')[$_smarty_tpl->getValue('expense')->account_id]->account;?>

                            <?php }?>

                        </td>
                        <td class="h6">
                            <?php echo $_smarty_tpl->getValue('expense')->type;?>


                        </td>
                        <td class="h6">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('expense')->amount,$_smarty_tpl->getValue('expense')->currency_iso_code);?>

                        </td>
                        <td class="h6 text-info"><?php echo $_smarty_tpl->getValue('expense')->description;?>

                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
transactions/manage/<?php echo $_smarty_tpl->getValue('expense')['id'];?>
" class="btn btn-primary btn-sm active text-end" role="button" aria-pressed="true">manage</a>

                        </td>



                    </tr>





                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>



                </tbody>



            </table>
        </div>
    </div>



<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_1845150296675e1587171227_43285874 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
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





           $('#add_expense').on('click',function (e) {
               e.preventDefault();

               $.fancybox.open({
                   src  :  base_url + 'projects/expense/<?php echo $_smarty_tpl->getValue('project')->id;?>
',
                   type : 'ajax',
                   opts : {
                       afterShow : function( instance, current ) {
                           $(".datepicker").datepicker();
                           $("#account").select2({

                           });
                           $("#payee").select2({

                           });
                           $("#company").select2({

                           });
                       }
                   },
               });
           });


            var $modal = $('#cloudonex_body');

            $modal.on('click', '#submit', function(event){

                event.preventDefault();

                $.post(base_url + 'projects/save-expense', $('#project_expense_form').serialize()).done(function (data) {
                    location.reload();
                }).fail(function(data) {
                    toastr.error(data.responseText);
                });

            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
