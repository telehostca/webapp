<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:11
  from 'file:../default/sms_send.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15b79f62f6_01584709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '065de3a21390536b8cca8cb725d7d46ff79d11b8' => 
    array (
      0 => '../default/sms_send.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15b79f62f6_01584709 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_650436881675e15b79e9701_04674202', "content");
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_281944420675e15b79f5156_96414040', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_650436881675e15b79e9701_04674202 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="mx-auto" style="width: 100%; max-width: 600px;">
        <div class="panel panel-default">

            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->getValue('_L')['Send SMS'];?>
</h2>
            </div>

            <div class="panel-container">
                <div class="panel-content">

                    <div id="result"></div>

                    <form action="<?php echo $_smarty_tpl->getValue('_url');?>
sms/init/send_post/" method="post" id="iform">

                        <div class="mb-3">
                            <label for="from"><?php echo $_smarty_tpl->getValue('_L')['From'];?>
 </label>
                            <input type="text" name="from" id="from" class="form-control " value="<?php echo $_smarty_tpl->getValue('config')['sms_sender_name'];?>
">
                        </div>

                        <div class="mb-3"><label for="sms_to"><?php echo $_smarty_tpl->getValue('_L')['To'];?>
 </label>
                            <input type="text" name="sms_to" id="sms_to" class="form-control ">

                            <span class="help-block"><a data-bs-toggle="modal" href="#modal_find_contact">| Or Choose from Contact</a> </span>
                        </div>


                        <div class="mb-3"><label for="sms_type"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
 </label>
                            <select class="form-select" name="sms_type" id="sms_type">
                                <option value="text">Plain Text</option>
                                <option value="flash">Flash Message</option>
                                <option value="unicode" selected>Unicode</option>
                                <option value="wap">Wap Push</option>
                                <option value="vcal">vcal / vcard</option>
                                <option value="binary">Binary</option>
                            </select>
                        </div>


                        <?php if ($_smarty_tpl->getValue('config')['sms_api_handler'] == 'Msg91') {?>

                            <div class="mb-3"><label for="sms_route">Route</label>
                                <select class="form-select" name="sms_route" id="sms_route">
                                    <option value="4">Transactional</option>
                                    <option value="1">Promotional</option>
                                </select>
                            </div>

                        <?php }?>


                        <div class="mb-3"><label for="message"><?php echo $_smarty_tpl->getValue('_L')['SMS'];?>
 </label>
                            <textarea class="form-control" name="message" id="message" rows="4"></textarea>

                            <p class="help-block" id="sms-counter">
                                <?php echo $_smarty_tpl->getValue('_L')['Remaining'];?>
: <span class="remaining"></span> | <?php echo $_smarty_tpl->getValue('_L')['Length'];?>
: <span class="length"></span> | <?php echo $_smarty_tpl->getValue('_L')['Messages'];?>
: <span class="messages"></span>
                            </p>
                        </div>


                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" id="send"><?php echo $_smarty_tpl->getValue('_L')['Send'];?>
</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="modal_find_contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->getValue('_L')['Contact'];?>

                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">

                    <select id="cid" name="cid" class="form-control">
                        <option value=""><?php echo $_smarty_tpl->getValue('_L')['Search Contact'];?>
...</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('c'), 'cs');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cs')->value) {
$foreach0DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('cs')['phone'];?>
"><?php echo $_smarty_tpl->getValue('cs')['account'];?>
 - <?php echo $_smarty_tpl->getValue('cs')['phone'];?>
  <?php if ($_smarty_tpl->getValue('cs')['email'] != '') {?> [ <?php echo $_smarty_tpl->getValue('cs')['email'];?>
 ]<?php }?></option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    </select>

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
class Block_281944420675e15b79f5156_96414040 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function () {
            var _url = $("#_url").val();

            var send = $("#send");

            var result = $("#result");

            var iform = $( "#iform" );

            $('#message').countSms('#sms-counter');

            var $modal = $('#ajax-modal');

            var $modal_find_contact = $("#modal_find_contact");


            var $cid = $('#cid');

            var $sms_to = $("#sms_to");


            function ib_s2() {

                return  $cid.select2({

                });



            }

            ib_s2();


            $modal_find_contact.on('shown.bs.modal', function() {


                ib_s2().select2('open');





            });


            $cid.on("change", function() {



                $sms_to.val($cid.val());

                $modal_find_contact.modal('hide');

            });






            send.on('click', function(e) {


                e.preventDefault();

                iform.block({ message: null });


                $.post( _url + "sms/init/send_post/", iform.serialize())
                    .done(function (data) {

                        iform.unblock();

                        result.html(data);

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
