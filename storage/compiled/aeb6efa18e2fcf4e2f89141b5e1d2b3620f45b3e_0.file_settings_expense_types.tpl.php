<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:32
  from 'file:../default/settings_expense_types.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16bc3eef91_80689593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb6efa18e2fcf4e2f89141b5e1d2b3620f45b3e' => 
    array (
      0 => '../default/settings_expense_types.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16bc3eef91_80689593 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_188110998675e16bc3e2452_09368936', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_137954804675e16bc3eb871_17892796', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_188110998675e16bc3e2452_09368936 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Expense Types'];?>
</h2>

                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-success" id="add_new_expense_type"><i class="fal fa-plus"></i> <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Add New Expense Type');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</a>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reorder/expense_types/" class="btn btn-primary"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->getValue('_L')['Reorder'];?>
</a>
                        </div>
                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-striped table-bordered">
                            <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('e'), 'g');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach0DoElse = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getValue('g')['name'];?>
</td>

                                    <td>
                                        <a href="#" class="btn btn-warning edit_expense_type" id="e<?php echo $_smarty_tpl->getValue('g')['id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('g')['name'];?>
"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>

                                        <a href="javascript:;" id="d_<?php echo $_smarty_tpl->getValue('g')['id'];?>
" class="btn btn-danger cdelete"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>

                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <input type="hidden" name="_msg_add_new_expense_type" id="_msg_add_new_expense_type" value="Add New Expense Type">
    <input type="hidden" name="_msg_expense_type" id="_msg_expense_type" value="Expense Type">
    <input type="hidden" name="_msg_edit" id="_msg_edit" value="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
">
    <input type="hidden" name="_msg_ok" id="_msg_ok" value="<?php echo $_smarty_tpl->getValue('_L')['OK'];?>
">
    <input type="hidden" name="_msg_cancel" id="_msg_cancel" value="<?php echo $_smarty_tpl->getValue('_L')['Cancel'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_137954804675e16bc3eb871_17892796 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>
        $(function () {
            var _url = $("#_url").val();








            var _msg_add_new_expense_type = $("#_msg_add_new_expense_type").val();
            var _msg_expense_type = $("#_msg_expense_type").val();
            var _msg_edit = $("#_msg_edit").val();
            var _msg_ok = $("#_msg_ok").val();
            var _msg_cancel = $("#_msg_cancel").val();


            var ib_form_bootbox = "<form method=\"post\" onsubmit=\"return false;\">\n    <div class=\"mb-3\">\n        <div class=\"col-xs-12\">\n            <div class=\"mb-3\">\n      <label for=\"expense_type\">" + _msg_expense_type + "</label>\n           <input class=\"form-control\" type=\"text\" id=\"expense_type\" name=\"expense_type\">\n    </div>\n        </div>\n    </div>\n\n</form>";


            // var box =   bootbox.dialog({
            //         title: _msg_add_new_expense_type,
            //         message: ib_form_bootbox,
            //         buttons: {
            //             success: {
            //                 label: "Save",
            //                 className: "btn-primary",
            //                 callback: function () {
            //                     // var name = $('#name').val();
            //                     // var answer = $("input[name='awesomeness']:checked").val();
            //                     // Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
            //
            //                     var expense_type_val = $('#expense_type').val();
            //
            //                     $.post(  _url + "settings/add_expense_type/", { expense_type: expense_type_val })
            //                         .done(function( data ) {
            //
            //                             if ($.isNumeric(data)) {
            //
            //                                 location.reload();
            //
            //                             }
            //
            //                             else {
            //                                 bootbox.alert(data);
            //                             }
            //
            //                         });
            //
            //
            //                 }
            //             }
            //         },
            //         show: false
            //     }









            $("#add_new_expense_type").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: expense_type_val } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Expense Type');?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Expense Type');?>
',
                    })

                    if (expense_type_val) {
                        $.post(  _url + "settings/add_expense_type/", { expense_type: expense_type_val })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    location.reload();

                                }

                                else {
                                    bootbox.alert(data);
                                }

                            });
                    }

                })();


            });


            // box.on("shown.bs.modal", function() {
            //
            //     var expense_type = $('#expense_type');
            //     setTimeout(function(){
            //         expense_type.focus();
            //     }, 1000);
            //
            // });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/expense_type/" + id;
                    }
                });
            });


            $(".edit_expense_type").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var e_expense_type = $( this ).attr( "data-name" );





                bootbox.prompt({
                    title: _msg_edit,
                    value: e_expense_type,
                    buttons: {
                        'cancel': {
                            label: _msg_cancel
                        },
                        'confirm': {
                            label: _msg_ok
                        }
                    },
                    callback: function(result) {
                        if (result === null) {

                        } else {
                            // alert(result);
                            $.post(  _url + "settings/e_expense_type_edit/", { id: eid, e_expense_type: result })
                                .done(function( data ) {
                                    location.reload();
                                });
                        }
                    }
                });

            });


        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
