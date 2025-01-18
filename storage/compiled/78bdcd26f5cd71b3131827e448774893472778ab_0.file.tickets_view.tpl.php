<?php
/* Smarty version 4.3.2, created on 2023-09-08 18:51:28
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/tickets_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fba570c4f296_56959291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78bdcd26f5cd71b3131827e448774893472778ab' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/tickets_view.tpl',
      1 => 1694213486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fba570c4f296_56959291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63896751964fba570c30d95_26484088', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35533295564fba570c4d8e7_87052362', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_63896751964fba570c30d95_26484088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_63896751964fba570c30d95_26484088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="timeline-simple">
        <p class="timeline-title"><?php echo $_smarty_tpl->tpl_vars['d']->value->subject;?>
</p>

        <div class="timeline-list">
            <div class="timeline-post-content">
                <div class="user-profile">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                        <img src="http://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['email']);?>
?s=30" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                        <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                    <?php } else { ?>
                        <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                    <?php }?>
                </div>
                <div class="">
                    <h4><?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</h4>
                    <p class="meta-time-date"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value->created_at));?>
</p>
                    <div class="">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value->message;?>

                                </div>

                                <?php if (($_smarty_tpl->tpl_vars['d']->value->attachments) != '') {?>
                                    <div class="mb-3">
                                        <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['d']->value->attachments);?>

                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replies']->value, 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>

                <div class="timeline-post-content post-gallery">
                    <div class="user-profile">
                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['admin'] != '0' && !empty($_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']]->img == 'gravatar') {?>
                                <img src="http://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']]->email);?>
?s=30"
                                     class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']]->fullname;?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']]->img == '') {?>
                                <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                            <?php } else { ?>
                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php echo $_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']]->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['admins']->value[$_smarty_tpl->tpl_vars['reply']->value['admin']]->fullname;?>
">
                            <?php }?>

                        <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                                <img src="http://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['email']);?>
?s=30" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                            <?php } else { ?>
                                <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                            <?php }?>

                        <?php }?>
                    </div>
                    <div class="">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4><?php echo $_smarty_tpl->tpl_vars['reply']->value['replied_by'];?>
</h4>
                                <p class="meta-time-date"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['reply']->value['created_at']));?>
</p>
                                <div class="">
                                    <div class="mb-3">
                                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['message'];?>

                                    </div>

                                    <?php if (($_smarty_tpl->tpl_vars['reply']->value['attachments']) != '') {?>
                                        <div class="mb-3">
                                            <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['reply']->value['attachments']);?>

                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="timeline-post-content">
                <div class="user-profile">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                        <img src="http://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value['email']);?>
?s=30" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                        <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                    <?php } else { ?>
                        <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                    <?php }?>
                </div>
                <div class="w-100">
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Reply'];?>
</h4>
                    <p class="meta-time-date"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value->created_at));?>
</p>
                    <div class="">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form id="create_ticket" method="post">

                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <textarea id="text_content" rows="10" class="form-control" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-xs-12">

                                            <input type="hidden" name="attachments" id="attachments" value="">
                                            <input type="hidden" name="f_tid" id="f_tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">

                                            <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="600">
        <div class="modal-header">
            <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?php echo __('Add File');?>
</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="dropzone" id="upload_container">
                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  Drop File Here</h3>
                            <br />
                            <span class="note"><?php echo __('Or Click to Upload');?>
</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Close</button>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_35533295564fba570c4d8e7_87052362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_35533295564fba570c4d8e7_87052362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
      //  Dropzone.autoDiscover = false;
        $(function () {

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            var _url = base_url;

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");


            // $('#content').redactor({
            //     buttonsHide: ['html'],
            // });

            // var upload_resp;
            //
            //
            // var ib_file = new Dropzone("#upload_container",
            //     {
            //         url: _url + "client/tickets/upload_file/",
            //         maxFiles: 10,
            //         acceptedFiles: "image/jpeg,image/png,image/gif"
            //     }
            // );
            //
            // ib_file.on("sending", function() {
            //
            //     $ib_form_submit.prop('disabled', true);
            //
            // });
            //
            // ib_file.on("success", function(file,response) {
            //
            //     $ib_form_submit.prop('disabled', false);
            //
            //     upload_resp = response;
            //
            //     if(upload_resp.success == 'Yes'){
            //
            //         toastr.success(upload_resp.msg);
            //
            //         $('#attachments').val(function(i,val) {
            //             return val + (!val ? '' : ',') + upload_resp.file;
            //         });
            //
            //
            //     }
            //     else{
            //         toastr.error(upload_resp.msg);
            //     }
            //
            // });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
              //  $create_ticket.block({ message: block_msg });
                $.post( _url + "client/tickets/add_reply/", {  message: $('#text_content').val(), attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            location.reload();
                        }

                        else {
                            console.log(data);
                          //  $create_ticket.unblock();
                         //   toastr.error(data.msg);
                        }

                    });


            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
