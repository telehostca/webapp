<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:31:58
  from 'file:../default/list-recurring-invoices.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e156e2bd570_28144163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3999149819e105edb982b2c998b2cb1db798711' => 
    array (
      0 => '../default/list-recurring-invoices.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e156e2bd570_28144163 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1036379060675e156e2a13f8_41427681', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_337203540675e156e2b9f93_32465774', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1036379060675e156e2a13f8_41427681 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['List Invoices'];?>
 </h2>
            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/add/recurring/" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add Recurring Invoice'];?>
</a>
            </div>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <table class="table table-bordered table-hover" id="clx_datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('_L')['Invoice'];?>
 <?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('_L')['Due'];?>
 <?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('_L')['Next Invoice'];?>
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
                            <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
"><?php echo $_smarty_tpl->getValue('ds')['id'];?>
</a></td>
                            <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('ds')['userid'];?>
"><?php echo $_smarty_tpl->getValue('ds')['account'];?>
</a> </td>
                            <td><?php echo $_smarty_tpl->getValue('ds')['total'];?>
</td>
                            <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['date']));?>
</td>
                            <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['duedate']));?>
</td>
                            <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['nd']));?>
</td>
                            <td> <?php if ($_smarty_tpl->getValue('ds')['status'] == 'Unpaid') {?>
                                    <span class="label label-danger"><?php echo $_smarty_tpl->getValue('_L')['Unpaid'];?>
</span>
                                <?php } elseif ($_smarty_tpl->getValue('ds')['status'] == 'Paid') {?>
                                    <span class="label label-success"><?php echo $_smarty_tpl->getValue('_L')['Paid'];?>
</span>
                                <?php } elseif ($_smarty_tpl->getValue('ds')['status'] == 'Cancelled') {?>
                                    <span class="label label-default"><?php echo $_smarty_tpl->getValue('_L')['Cancelled'];?>
</span>
                                <?php } else { ?>
                                    <span class="label label-info"><?php echo $_smarty_tpl->getValue('ds')['status'];?>
</span>
                                <?php }?></td>
                            <td class="text-end">
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" class="btn btn-primary btn-xs"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->getValue('_L')['View'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/edit/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" class="btn btn-info btn-xs"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>
                                <a href="#" class="btn btn-warning btn-xs cstop" id="sid<?php echo $_smarty_tpl->getValue('ds')['id'];?>
"><i class="fal fa-stop"></i> <?php echo $_smarty_tpl->getValue('_L')['Stop Recurring'];?>
</a>
                                <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->getValue('ds')['id'];?>
"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
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
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_337203540675e156e2b9f93_32465774 extends \Smarty\Runtime\Block
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

            $('.has-tooltip').tooltip();
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm("Are you sure?", function(result) {
                if(result){
                    window.location.href = base_url + "delete/invoice/" + id;
                }
            });
        });

        $(".cstop").click(function (e) {
            e.preventDefault();
            var id = this.id;
            app.confirm("Are you sure? This will prevent future invoice generation from this invoice.", function(result) {
                if(result){
                    window.location.href = base_url + "invoices/stop_recurring/" + id;
                }
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
