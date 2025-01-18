<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:20
  from 'file:../default/tickets_admin_create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3845ddbf8_59523443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82b49ade499d674cdb655e4b80f2815fdc907d2d' => 
    array (
      0 => '../default/tickets_admin_create.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3845ddbf8_59523443 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14051099076745d3845cf429_38553538', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_789216696745d3845dbf47_41245761', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_14051099076745d3845cf429_38553538 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">

        <div class="col-md-12">
            <div class="panel" id="ib_box">
                <div class="panel-hdr">


                    <h2><?php echo $_smarty_tpl->getValue('_L')['Open Ticket'];?>
</h2>


                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <form id="create_ticket" class="form-horizontal push-10-t push-10" method="post">

                            <div class="mb-3">
                                <div class="col-xs-12">
                                    <label for="cid"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</label>

                                    <select id="cid" name="cid" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
...</option>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customers'), 'cs');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cs')->value) {
$foreach0DoElse = false;
?>
                                            <option value="<?php echo $_smarty_tpl->getValue('cs')['id'];?>
"
                                                    <?php if ($_smarty_tpl->getValue('p_cid') == ($_smarty_tpl->getValue('cs')['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('cs')['account'];?>
 <?php if ($_smarty_tpl->getValue('cs')['email'] != '') {?>- <?php echo $_smarty_tpl->getValue('cs')['email'];
}?></option>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    </select>
                                </div>
                            </div>



                            <div class="mb-3">
                                <div class="col-xs-12">
                                    <div class="mb-3">
                                        <label for="subject"><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</label>
                                        <input class="form-control" type="text" id="subject" name="subject" autofocus>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="department"><?php echo $_smarty_tpl->getValue('_L')['Department'];?>
</label>
                                        <select class="form-select" id="department" name="department" size="1">

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('deps'), 'dep');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('dep')->value) {
$foreach1DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('dep')['id'];?>
"><?php echo $_smarty_tpl->getValue('dep')['dname'];?>
</option>
                                                <?php
}
if ($foreach1DoElse) {
?>
                                                <option value="0">None</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="urgency"><?php echo $_smarty_tpl->getValue('_L')['Priority'];?>
</label>
                                        <select class="form-select" id="urgency" name="urgency" size="1">
                                            <option value="High"><?php echo $_smarty_tpl->getValue('_L')['High'];?>
</option>
                                            <option value="Medium" selected><?php echo $_smarty_tpl->getValue('_L')['Medium'];?>
</option>
                                            <option value="Low"><?php echo $_smarty_tpl->getValue('_L')['Low'];?>
</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 mt-3">
                                <label for="content"><?php echo $_smarty_tpl->getValue('_L')['Message'];?>
</label>
                                <textarea id="content"  class="form-control sysedit" name="content"></textarea>
                                <div class="help-block"><a data-bs-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->getValue('_L')['Attach File'];?>
</a> </div>

                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="attachments" id="attachments" value="">

                                <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                            </div>
                        </form>



                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->getValue('_L')['Attach File'];?>

                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->getValue('_L')['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->getValue('_L')['Click to Upload'];?>
</span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->getValue('_L')['Close'];?>
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
class Block_789216696745d3845dbf47_41245761 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/redactor/redactor.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;
        $(function () {
            $('#content').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");
            var $ib_box = $("#ib_box");




            $("#cid").select2({

                }
            );


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "tickets/admin/upload_file/",
                    maxFiles: 10,
                    acceptedFiles: "image/jpeg,image/png,image/gif"
                }
            );


            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    // $file_link.val(upload_resp.file);
                    // files.push(upload_resp.file);
                    //
                    // console.log(files);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }







            });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
                $ib_box.block({ message: block_msg });
                $.post( _url + "tickets/admin/add_post/", { cid: $("#cid").val(), subject: $("#subject").val(), department: $("#department").val(), urgency: $("#urgency").val(), message: $('#content').val(), attachments: $("#attachments").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            window.location.href = _url + "tickets/admin/view/" + data.id + "/";
                        }

                        else {
                            $ib_box.unblock();
                            toastr.error(data.msg);
                            //  console.log(data);
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
