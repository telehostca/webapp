<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:38
  from 'file:../default/settings_units.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16c29849a2_78299940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd48d8c427ce1610d6c7aa35731dee20b742f71' => 
    array (
      0 => '../default/settings_units.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16c29849a2_78299940 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_954145395675e16c2979979_64385886', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2028074686675e16c2983020_99573884', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_954145395675e16c2979979_64385886 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">



        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2>Units</h2>
                    <div class="panel-toolbar">

                        <a href="#" class="btn btn-success add_item" id="add_unit"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Create New'];?>
</a>


                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Unit'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('units')) > 0) {?>

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('units'), 'unit');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('unit')->value) {
$foreach0DoElse = false;
?>
                                        <tr data-id="<?php echo $_smarty_tpl->getValue('unit')['id'];?>
">
                                            <td> <a class="cedit" id="ae<?php echo $_smarty_tpl->getValue('unit')['id'];?>
" href="#"><?php echo $_smarty_tpl->getValue('unit')['name'];?>
</a>

                                            </td>
                                            <td><?php echo $_smarty_tpl->getValue('unit')['type'];?>
</td>
                                            <td class="text-end">
                                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
" id="be<?php echo $_smarty_tpl->getValue('unit')['id'];?>
" class="btn btn-dark cedit" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
"><i class="fal fa-pencil"></i> </a>


                                                <a href="#" class="btn btn-danger cdelete" id="c<?php echo $_smarty_tpl->getValue('unit')['id'];?>
" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
"><i class="fal fa-trash-alt"></i> </a>
                                            </td>

                                        </tr>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    <?php } else { ?>
                                    <tr>
                                        <td colspan="3">
                                            <?php echo $_smarty_tpl->getValue('_L')['No Data Available'];?>

                                        </td>
                                    </tr>
                                <?php }?>


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
class Block_2028074686675e16c2983020_99573884 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function() {

            function modal_after_show() {
                $('#modal_submit').on('click', function(e){

                    e.preventDefault();

                    $('#modal_form').block();

                    $.post( base_url + "settings/add_unit/", $("#ib_modal_form").serialize())
                        .done(function( data ) {

                            if ($.isNumeric(data)) {

                                location.reload();

                            }

                            else {
                                $('#modal_form').unblock();
                                toastr.error(data);
                            }

                        });

                });
            }

            var _url = $("#_url").val();


            $('.add_item').on('click', function(e){

                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'settings/modal_unit/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            modal_after_show();
                        }
                    }
                });

            });





            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/unit/" + id + '/';
                    }
                });
            });


            $(".cedit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  :  _url + 'settings/modal_unit/'+ id + '/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            modal_after_show();
                        }
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
