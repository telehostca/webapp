<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:23
  from 'file:../default/projects_invoices.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e1587ab5ff5_23091402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150631812c10694eeef111f272df65d0c6ee0f5c' => 
    array (
      0 => '../default/projects_invoices.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e1587ab5ff5_23091402 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1967713521675e1587a948a4_85621538', "project_content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1442879684675e1587ab3129_55245261', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "project_base.tpl", $_smarty_current_dir);
}
/* {block "project_content"} */
class Block_1967713521675e1587a948a4_85621538 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row mb-3">
        <div class="col">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</h2>
        </div>

        <div class="col text-end">
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/add/1/0/0/<?php echo $_smarty_tpl->getValue('project')->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['New Invoice'];?>
</a>
        </div>



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="clx_datatable">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                    <th><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                    <th><?php echo $_smarty_tpl->getValue('_L')['Invoice Date'];?>
</th>
                    <th><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
</th>
                    <th>
                        <?php echo $_smarty_tpl->getValue('_L')['Status'];?>

                    </th>
                    <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                    <th class="text-end" width="140px;"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('invoices'), 'invoice');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('invoice')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td  data-value="<?php echo $_smarty_tpl->getValue('invoice')->id;?>
"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/"><?php echo $_smarty_tpl->getValue('invoice')->invoicenum;
if ($_smarty_tpl->getValue('invoice')->cn != '') {?> <?php echo $_smarty_tpl->getValue('invoice')->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('invoice')->id;?>
 <?php }?></a> </td>
                        <td>

                            <?php if ((null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('invoice')->userid] ?? null))) {?>
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/">
                                    <?php echo $_smarty_tpl->getValue('invoice')->account;?>
 <br>
                                    <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('invoice')->userid]->company;?>

                                </a>
                            <?php }?>


                        </td>
                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('invoice')->total,$_smarty_tpl->getValue('invoice')->currency_iso_code);?>
</td>
                        <td data-value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->date);?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->date));?>
</td>
                        <td data-value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->duedate);?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('invoice')->duedate));?>
</td>
                        <td>

                            <?php if ($_smarty_tpl->getValue('invoice')->status == 'Unpaid') {?>
                                <span class="label label-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                            <?php } elseif ($_smarty_tpl->getValue('invoice')->status == 'Paid') {?>
                                <span class="label label-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                            <?php } elseif ($_smarty_tpl->getValue('invoice')->status == 'Partially Paid') {?>
                                <span class="label label-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                            <?php } elseif ($_smarty_tpl->getValue('invoice')->status == 'Cancelled') {?>
                                <span class="label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>
</span>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('invoice')->status);?>

                            <?php }?>



                        </td>
                        <td>
                            <?php if ($_smarty_tpl->getValue('invoice')->r == '0') {?>
                                <span class="label label-default"><?php echo $_smarty_tpl->getValue('_L')['Onetime'];?>
</span>
                            <?php } else { ?>
                                <span class="label label-default"><?php echo $_smarty_tpl->getValue('_L')['Recurring'];?>
</span>
                            <?php }?>
                        </td>
                        <td class="text-end">

                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/" class="btn btn-primary btn-xs" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['View'];?>
"><i class="fal fa-file-alt"></i></a>



                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/edit/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
/" class="btn btn-info btn-xs" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
"><i class="fal fa-pencil"></i></a>



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
class Block_1442879684675e1587ab3129_55245261 extends \Smarty\Runtime\Block
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
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
