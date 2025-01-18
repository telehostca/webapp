<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:22
  from 'file:../default/tickets_predefined_replies.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d38670ad38_49630710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd590bdeaa7642f5738422416b0f96f885925f627' => 
    array (
      0 => '../default/tickets_predefined_replies.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d38670ad38_49630710 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18702525786745d386700014_12316441', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9372723276745d386707893_06317639', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_18702525786745d386700014_12316441 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Predefined Replies');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a data-bs-toggle="modal" href="#modal_add_item" class="btn btn-success mb-md"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add Predefined Reply'];?>
</a>

                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/predefined_replies_reorder/" class="btn btn-primary mb-md"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->getValue('_L')['Reorder Predefined Replies'];?>
</a>
                        </div>
                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-striped " id="clx_datatable">
                            <thead style="background: #f0f2ff">
                            <tr>

                                <th>Title</th>
                                <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('replies'), 'reply');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reply')->value) {
$foreach0DoElse = false;
?>

                                <tr>

                                    <td><?php echo $_smarty_tpl->getValue('reply')['title'];?>
</td>


                                    <td class="text-end">
                                        <div class="btn-group">
                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/predefined_reply_edit/<?php echo $_smarty_tpl->getValue('reply')['id'];?>
" class="btn btn-info btn-sm item_edit"> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>
                                            <a href="#" class="btn btn-danger btn-sm cdelete" id="d<?php echo $_smarty_tpl->getValue('reply')['id'];?>
"><?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
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
                    <div class="row">



                        <div class="col-md-12">

                            <form id="ib_modal_form">
                                <div class="mb-3">
                                    <label for="title"><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
</label>
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>


                                <div class="mb-3">
                                    <label for="message"><?php echo $_smarty_tpl->getValue('_L')['Message'];?>
</label>
                                    <textarea id="message" name="message" class="form-control" rows="5"></textarea>
                                </div>

                            </form>
                        </div>

                    </div>
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
class Block_9372723276745d386707893_06317639 extends \Smarty\Runtime\Block
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

            var _url = base_url;

            var $modal_add_item = $("#modal_add_item");

            var $message = $("#message");

            $modal_add_item.on('shown.bs.modal', function() {
                $message.redactor({
                    minHeight: 200,
                    paragraphize: false,
                    replaceDivs: false,
                    linebreaks: true
                });
            });

            var $btn_modal_action = $("#btn_modal_action");


            $btn_modal_action.on('click', function(e) {
                e.preventDefault();

                $modal_add_item.block({ message: block_msg });
                $.post( _url + "tickets/admin/predefined_replies_post/", $("#ib_modal_form").serialize())
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


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm('Are you sure?', function(result) {
                    if(result){

                        window.location.href = _url + "tickets/admin/predefined_replies_delete/" + id + "/";
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
