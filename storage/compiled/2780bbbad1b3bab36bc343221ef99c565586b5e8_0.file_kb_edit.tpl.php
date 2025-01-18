<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:01
  from 'file:../default/kb_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15addef311_54451959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2780bbbad1b3bab36bc343221ef99c565586b5e8' => 
    array (
      0 => '../default/kb_edit.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15addef311_54451959 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1088131631675e15adde49f0_79425728', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1074760546675e15adde5ee1_70249566', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1533586598675e15added615_99966351', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1088131631675e15adde49f0_79425728 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1074760546675e15adde5ee1_70249566 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row kb-page">

        <div class="col-md-8" id="kb_add_area">
            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Add New Article'];?>
</h2>
                </div>


                <div class="panel-container">
                    <div class="panel-content">


                        <form id="ib_form" class="form-horizontal push-10-t push-10" method="post">

                            <div class="mb-3">
                                <div class="col-xs-12">
                                    <div class="form-material floating">

                                        <label for="title"><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
</label>

                                        <input class="form-control" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->getValue('val')['title'];?>
" autofocus>


                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="col-xs-12">
                                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $_smarty_tpl->getValue('val')['description'];?>
</textarea>
                                </div>
                            </div>





                            <div class="mb-3">
                                <div class="col-xs-12">




                                    
                                    <input type="hidden" name="kbid" id="kbid" value="<?php echo $_smarty_tpl->getValue('val')['id'];?>
">

                                    <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4">

            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Group'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <form id="ib_add_group" class="form-horizontal push-10-t push-10" method="post">

                            <div class="mb-3">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <label for="gname"><?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
</label>
                                        <input class="form-control" type="text" id="gname" name="gname">

                                    </div>
                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary" id="ib_add_group_submit" type="submit"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                                </div>
                            </div>
                        </form>


                        <div id="div_groups" class="mt-3">

                        </div>



                    </div>
                </div>


            </div>

            <div class="panel panel-default">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Latest Articles'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <div>

                            <ul class="list-group">

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('kbs'), 'kb');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('kb')->value) {
$foreach0DoElse = false;
?>

                                    <li class="list-group-item"><a href="javascript:void(0)" id="k<?php echo $_smarty_tpl->getValue('kb')['id'];?>
" class="kb_view h6"> <?php echo $_smarty_tpl->getValue('kb')['title'];?>
 </a></li>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </ul>
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
class Block_1533586598675e15added615_99966351 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>




    <?php echo '<script'; ?>
>
        function deleteKb(kbid) {
            app.confirm(_L['are_you_sure'], function(result) {
                if(result){
                    window.location.href = base_url + "kb/a/delete/" + kbid;
                }
            });
        }

        function loadKbGroups() {

            var $div_groups = $("#div_groups");

            $div_groups.html();

            $.get( base_url + "kb/a/ajax_groups/"+$("#kbid").val(), function( data ) {

                $div_groups.html(data);

            });

        }

        $(function() {

            loadKbGroups();

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            var ib_form_submit = $("#ib_form_submit");

            var kb_add_area = $("#kb_add_area");

            ib_form_submit.on('click', function(e) {
                e.preventDefault();
                kb_add_area.block({ message: block_msg });
                var selected_groups = [];

                $('.clx_input_groups').filter(':checked').each(function() {
                    selected_groups.push(this.id);
                });


                $.post( base_url + "kb/a/save/", { title: $("#title").val(), description: $('#description').val(), kbid: $("#kbid").val(),groups: selected_groups })
                    .done(function (data) {
                        if ($.isNumeric(data)) {

                            window.location = base_url + 'kb/a/edit/' + data;

                        }
                        else {
                            kb_add_area.unblock();
                            toastr.error(data);

                        }
                    });

            });


            $(".kb_view").on('click',function (e) {
                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + "kb/a/a_view/"+this.id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                        }
                    },
                });

            });

            $("#ib_add_group_submit").on('click',function (e) {
                e.preventDefault();

                $("#ib_add_group").block();

                $.post(base_url + 'kb/a/group_create/', { gname: $("#gname").val()}, function (data) {

                    $("#ib_add_group").unblock();

                    $("#gname").val('');

                    loadKbGroups();

                })

            })


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
