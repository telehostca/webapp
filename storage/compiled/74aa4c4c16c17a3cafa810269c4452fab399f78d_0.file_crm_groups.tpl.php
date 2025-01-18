<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:24
  from 'file:../default/crm_groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d34c7278e5_13409067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74aa4c4c16c17a3cafa810269c4452fab399f78d' => 
    array (
      0 => '../default/crm_groups.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d34c7278e5_13409067 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_432768626745d34c7172f7_87272279', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17393925146745d34c719571_17345593', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8592214386745d34c723473_51589220', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_432768626745d34c7172f7_87272279 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php if (empty($_smarty_tpl->getValue('config')['admin_dark_theme'])) {?>
        <style>
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #F7F9FC;
            }
        </style>
    <?php }?>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_17393925146745d34c719571_17345593 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Groups'];?>
</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add New Group'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reorder/groups/" class="btn btn-sm btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->getValue('_L')['Reorder'];?>
</a>
                        </div>


                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="thead-light">
                            <table class="table table-striped">
                                <th><strong><?php echo $_smarty_tpl->getValue('_L')['Group'];?>
</strong></th>
                                <th><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Customers');?>
</strong></th>
                                <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gs'), 'g');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td><strong><?php echo $_smarty_tpl->getValue('g')['gname'];?>
</strong></td>

                                        <td>
                                            <strong><?php echo Contact::where('gid',$_smarty_tpl->getValue('g')['id'])->count();?>
</strong>
                                        </td>

                                         <td>
                                             <div class="float-end">
                                                 <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/find_by_group/<?php echo $_smarty_tpl->getValue('g')['id'];?>
/" class="btn btn-sm btn-info"> <?php echo $_smarty_tpl->getValue('_L')['List Contacts'];?>
</a>
                                                 <a href="#" class="btn btn-sm btn-primary edit_group" id="e<?php echo $_smarty_tpl->getValue('g')['id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('g')['gname'];?>
"> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>

                                                 <a href="javascript:;" id="g<?php echo $_smarty_tpl->getValue('g')['id'];?>
" class="btn btn-sm btn-danger cdelete"> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>
                                             </div>


                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                            </table>
                        </div>



                    </div>

                    <br>
                    <br>


                </div>
            </div>



        </div>



    </div>

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="<?php echo $_smarty_tpl->getValue('_L')['Add New Group'];?>
">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
">
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
class Block_8592214386745d34c723473_51589220 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

        $(document).ready(function () {

            var _url = $("#_url").val();


            $("#add_new_group").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->getValue('_L')['Add New Group'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
',
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/add_group/", { group_name: group_name })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    location.reload();

                                }

                                else {
                                    Swal.fire({
                                        title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Error');?>
',
                                        text: data,
                                        type: 'error',
                                        confirmButtonText: '<?php echo $_smarty_tpl->getValue('_L')['Close'];?>
'
                                    })
                                }

                            });
                    }

                })()



            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/crm-group/" + id;
                    }
                });



            });


            $(".edit_group").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var gname = $( this ).attr( "data-name" );


                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
',
                        inputValue: gname,
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/group_edit/", { id: eid, gname: group_name })
                            .done(function( data ) {
                                location.reload();
                            });
                    }

                })()



            });




        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
