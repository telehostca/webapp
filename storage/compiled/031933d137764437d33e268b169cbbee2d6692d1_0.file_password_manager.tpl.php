<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:34:11
  from 'file:../default/password_manager.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15f3135ce1_50448605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '031933d137764437d33e268b169cbbee2d6692d1' => 
    array (
      0 => '../default/password_manager.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15f3135ce1_50448605 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1024789984675e15f31230f5_87626252', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1146190325675e15f3131382_54544195', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1024789984675e15f31230f5_87626252 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">



        <div class="col-md-12">



            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <a href="#" class="btn btn-primary add_password waves-effect waves-light" id="add_company"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['New Entry'];?>
</a>
                    </div>




                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_table">
                            <table class="table table-bordered table-hover" id="tableDataTable">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['URL'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Username'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('passwords'), 'password');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('password')->value) {
$foreach0DoElse = false;
?>
                                    <tr data-id="<?php echo $_smarty_tpl->getValue('password')['id'];?>
">

                                        <td><?php echo $_smarty_tpl->getValue('password')['name'];?>
</td>
                                        <td>
                                            <?php if ((null !== ($_smarty_tpl->getValue('cls')[$_smarty_tpl->getValue('password')['client_id']] ?? null))) {?>
                                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('password')['client_id'];?>
"><?php echo $_smarty_tpl->getValue('cls')[$_smarty_tpl->getValue('password')['client_id']];?>
</a>
                                            <?php }?>
                                        </td>
                                        <td><a href="<?php echo $_smarty_tpl->getValue('password')['url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('password')['url'];?>
</a> </td>
                                        <td><?php echo $_smarty_tpl->getValue('password')['username'];?>
</td>
                                        <td class="text-end">



                                            <div class="btn-group">
    <?php if ($_smarty_tpl->getValue('password')['url'] != '') {?>
        <a href="<?php echo $_smarty_tpl->getValue('password')['url'];?>
" target="_blank" class="btn btn-primary btn-sm"><i class="fal fa-globe"></i> </a>
    <?php }?>
    <a href="javascript:void(0);" class="btn btn-sm btn-info copy_to_clipboard" aria-label="<?php echo $_smarty_tpl->getValue('password')->username;?>
"><i class="fal fa-clipboard"></i></a>

    <a href="javascript:void(0);" class="btn btn-sm btn-warning copy_to_clipboard" aria-label="<?php echo $_smarty_tpl->getValue('password')->password;?>
"><i class="fal fa-lock"></i></a>

    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
" id="pe_<?php echo $_smarty_tpl->getValue('password')['id'];?>
" class="btn btn-success btn-sm edit_password"><i class="fal fa-pencil"></i> </a>


    <a href="#" class="btn btn-danger btn-sm cdelete" id="c<?php echo $_smarty_tpl->getValue('password')['id'];?>
" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
"><i class="fal fa-trash"></i> </a>
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



    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary waves-effect waves-light add_password" href="#">
            <i class="fal fa-plus"></i>
        </a>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1146190325675e15f3131382_54544195 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');



            $('#tableDataTable').DataTable({
                columnDefs: [
                    { orderable: false, targets: -1 }
                ],
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
            });

            // var clipboard = new Clipboard('.copy_to_clipboard', {
            //     text: function(trigger) {
            //         return trigger.getAttribute('aria-label');
            //     }
            // });

            // clipboard.on('success', function(e) {
            //     toastr.success('Text Copied!');
            //     e.clearSelection();
            // });

            $('.add_password').on('click', function(e){

                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'password_manager/modal_password/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".s2_contacts").select2({
                            });
                        }
                    },
                });
            });


            $('.edit_password').on('click', function(e){

                var e_id = this.id;
                e.preventDefault();
                $.fancybox.open({
                    src  :  base_url + 'password_manager/modal_password/'+e_id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".s2_contacts").select2({
                            });
                        }
                    },
                });

            });

            // $('.password_view').on('click', function(e){
            //
            //     var v_id = this.id;
            //
            //     e.preventDefault();
            //
            //     $('body').modalmanager('loading');
            //
            //
            //     $modal.load( base_url + 'password_manager/modal_view_password/'+v_id, '', function(){
            //
            //         $modal.modal();
            //
            //         $modal.css("width", "700px");
            //         $modal.css("margin-left", "-349px");
            //
            //         $modal.modal();
            //
            //         var clipboard = new Clipboard('.copy_to_clipboard', {
            //             text: function(trigger) {
            //                 return trigger.getAttribute('aria-label');
            //             }
            //         });
            //
            //         clipboard.on('success', function(e) {
            //            toastr.success('Text Copied!');
            //             e.clearSelection();
            //         });
            //
            //
            //
            //     });
            // });


            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();





                $.post( base_url + "password_manager/save/", $("#spForm").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "delete/password/" + id + '/';
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
