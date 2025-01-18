<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:41:30
  from 'file:../default/tickets_departments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e17aa6a59e1_32587797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d22320f6e5dd413901ce78920a8cff0626388c9' => 
    array (
      0 => '../default/tickets_departments.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e17aa6a59e1_32587797 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1288584289675e17aa6965a1_14400421', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1772830375675e17aa6a3f12_12547921', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1288584289675e17aa6965a1_14400421 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Support Ticket Departments'];?>
</h2>

                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a data-bs-toggle="modal" href="#modal_add_item" class="btn btn-success mb-md"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add New Department'];?>
</a>

                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/departments_reorder/" class="btn btn-primary mb-md"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->getValue('_L')['Reorder'];?>
</a>
                        </div>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-striped sys_table">
                            <thead style="background: #f0f2ff">
                            <tr>

                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Department Name'];?>
</th>

                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</th>
                                <th class="text-end h6"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ds'), 'd');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach0DoElse = false;
?>
                                <tr>

                                    <td class="h6"><?php echo $_smarty_tpl->getValue('d')['dname'];?>
</td>

                                    <td class="h6 text-info"><?php echo $_smarty_tpl->getValue('d')['email'];?>
</td>

                                    <td>
                                        <?php if ($_smarty_tpl->getValue('d')['hidden'] == 'Yes') {?>
                                            <span class="badge badge-danger"><?php echo $_smarty_tpl->getValue('_L')['Inactive'];?>
</span>
                                        <?php } else { ?>
                                            <span class="badge badge-success"><?php echo $_smarty_tpl->getValue('_L')['Active'];?>
</span>
                                        <?php }?>

                                    </td>

                                    <td class="text-end">

                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info btn-sm item_edit" id="e<?php echo $_smarty_tpl->getValue('d')['id'];?>
"><?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>
                                            <a href="#" class="btn btn-danger btn-sm cdelete" onclick="confirmThenGoToUrl(event,'tickets/admin/delete_department/<?php echo $_smarty_tpl->getValue('d')['id'];?>
')"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>
                                        </div>

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


    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->getValue('_L')['Add New Department'];?>
</h5>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="ib_modal_form">


                        <div class="mb-3">
                            <label for="department_name"><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</label>
                            <input type="text" name="department_name" class="form-control" id="department_name">
                        </div>



                        <div class="mb-3">
                            <label for="email"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>














                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->getValue('_L')['Close'];?>
</button>
                    <button type="button" id="btn_modal_action" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1772830375675e17aa6a3f12_12547921 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


<?php echo '<script'; ?>
>
    $(function() {

        var _url = base_url;

        $btn_modal_action = $("#btn_modal_action");

        $modal_add_item = $("#modal_add_item");

        $btn_modal_action.on('click', function(e) {
            e.preventDefault();
            $modal_add_item.block({ message: block_msg });
            $.post( _url + "tickets/admin/departments_post/", $("#ib_modal_form").serialize())
                .done(function( data ) {

                    if ($.isNumeric(data)) {

                        location.reload();

                    }

                    else {
                        $modal_add_item.unblock();
                        toastr.error(data);
                    }

                });

        });










        var $modal = $('#cloudonex_body');

        $('.item_edit').on('click', function(e){
            e.preventDefault();
            var id = this.id;
            $.fancybox.open({
                src  : base_url + 'tickets/admin/edit_department/'+ id + '/',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#edit_content').redactor();
                    },
                    touch: false,
                    autoFocus: false,
                }
            });

        });




        $modal.on('click', '.test_imap', function(e){
            e.preventDefault();
            $.post( base_url + "tickets/admin/imap_test/", $("#edit_form").serialize())
                .done(function( data ) {

                    if ($.isNumeric(data)) {
                        $.fancybox.close()
                        toastr.success("Connected Successfully");

                    }

                    else {
                        $.fancybox.close()
                        toastr.error(data);
                    }

                });


        });


        $modal.on('click', '.edit_submit', function(e){
            e.preventDefault();

            $.post( _url + "tickets/admin/departments_edit/", $("#edit_form").serialize())
                .done(function( data ) {

                    if ($.isNumeric(data)) {

                        location.reload();

                    }

                    else {
                        $.fancybox.close();
                        toastr.error(data);
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
