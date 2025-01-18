<?php
/* Smarty version 5.4.2, created on 2025-01-18 13:14:42
  from 'file:../default/client_tickets_new.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678bef920d4b85_25536826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b239b0e472d9cb5d89e96cd94e40caedb6edc663' => 
    array (
      0 => '../default/client_tickets_new.tpl',
      1 => 1690476006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678bef920d4b85_25536826 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1888424004678bef920c4c12_90530070', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_52409748678bef920d3771_84899528', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_client')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1888424004678bef920c4c12_90530070 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>




    <div class="panel mx-auto" style="width: 100%; max-width: 800px;">

        <div class="panel-container">
            <div class="panel-content">
                <section id="ib_box">
                    <div>
                        <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                            <?php echo $_smarty_tpl->getValue('notify');?>

                        <?php }?>




                        <form method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/tickets/create_post/" id="iform" name="iform">



                            <div class="mb-3">
                                <label for="account"><?php echo $_smarty_tpl->getValue('_L')['Full_Name'];?>
</label>
                                <input type="text" class="form-control" id="account" name="account" value="<?php echo $_smarty_tpl->getValue('user')->account;?>
" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="email"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->getValue('user')->email;?>
" disabled>
                            </div>



                            <div class="mb-3">
                                <label for="subject"><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="department"><?php echo $_smarty_tpl->getValue('_L')['Department'];?>
</label>
                                        <select class="form-select" id="department" name="department" size="1">

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('deps'), 'dep');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('dep')->value) {
$foreach0DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('dep')['id'];?>
"><?php echo $_smarty_tpl->getValue('dep')['dname'];?>
</option>
                                                <?php
}
if ($foreach0DoElse) {
?>
                                                <option value="0"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
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
                                <label for="message"><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</label>
                                <textarea id="message" class="form-control sysedit" name="message"></textarea>
                                <div class="help-block"><a data-bs-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->getValue('_L')['Attach File'];?>
</a> </div>
                            </div>



                            <input type="hidden" name="attachments" id="attachments" value="">
                            <button type="submit" id="ib_form_submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                        </form>


                    </div>
                </section>
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
class Block_52409748678bef920d3771_84899528 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function() {

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");
            var $ib_box = $("#ib_box");


            $('.sysedit').redactor({
                buttonsHide: ['html'],
            });


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "client/tickets/upload_file/",
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
                $.post( _url + "client/tickets/add_post/", { subject: $("#subject").val(), department: $("#department").val(), urgency: $("#urgency").val(), message: $('#message').val(), attachments: $("#attachments").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            window.location.href = _url + "client/tickets/view/" + data.tid + "/";
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
