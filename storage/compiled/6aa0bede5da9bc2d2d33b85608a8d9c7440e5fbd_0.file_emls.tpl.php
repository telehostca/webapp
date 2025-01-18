<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:03:12
  from 'file:../default/emls.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d52080a2b3_91442346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa0bede5da9bc2d2d33b85608a8d9c7440e5fbd' => 
    array (
      0 => '../default/emls.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d52080a2b3_91442346 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12961832046745d5207faf17_56444212', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11381115296745d520807fe0_06095082', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_12961832046745d5207faf17_56444212 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Email Settings'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="eml" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/eml-post">


                            <div class="mb-3">
                                <label for="email_method"><?php echo $_smarty_tpl->getValue('_L')['Send Email Using'];?>
</label>
                                <select name="email_method" id="email_method" class="form-select">
                                    <option value="phpmail" <?php if ($_smarty_tpl->getValue('e')['method'] == 'phpmail') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['PHP mail Function'];?>
</option>
                                    <option value="smtp" <?php if ($_smarty_tpl->getValue('e')['method'] == 'smtp') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['SMTP'];?>
</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="sysemail"><?php echo $_smarty_tpl->getValue('_L')['System Email'];?>
</label>
                                <input type="text" class="form-control" id="sysemail" name="sysemail" value="<?php echo $_smarty_tpl->getValue('config')['sysEmail'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['All Outgoing Email Will'];?>
</span>
                            </div>

                            <div id="a_hide">
                                <div class="mb-3">
                                    <label for="smtp_host"><?php echo $_smarty_tpl->getValue('_L')['SMTP Host'];?>
</label>
                                    <input type="text" class="form-control" id="smtp_host" name="smtp_host" value="<?php echo $_smarty_tpl->getValue('e')['host'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="smtp_user"><?php echo $_smarty_tpl->getValue('_L')['SMTP Username'];?>
</label>
                                    <input type="text" class="form-control" id="smtp_user" name="smtp_user" value="<?php echo $_smarty_tpl->getValue('e')['username'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="smtp_password"><?php echo $_smarty_tpl->getValue('_L')['SMTP Password'];?>
</label>
                                    <input type="password" class="form-control" id="smtp_password" name="smtp_password" value="<?php echo $_smarty_tpl->getValue('e')['password'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="smtp_port"><?php echo $_smarty_tpl->getValue('_L')['SMTP Port'];?>
</label>
                                    <input type="text" class="form-control" id="smtp_port" name="smtp_port" value="<?php echo $_smarty_tpl->getValue('e')['port'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="smtp_secure"><?php echo $_smarty_tpl->getValue('_L')['SMTP Secure'];?>
</label>
                                    <select name="smtp_secure" id="smtp_secure" class="form-control">
                                        <option value="" <?php if ($_smarty_tpl->getValue('e')['secure'] == '') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                        <option value="tls" <?php if ($_smarty_tpl->getValue('e')['secure'] == 'tls') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['TLS'];?>
</option>
                                        <option value="ssl" <?php if ($_smarty_tpl->getValue('e')['secure'] == 'ssl') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['SSL'];?>
</option>

                                    </select>

                                </div>

                            </div>

                            <div id="sectionMailgunApi">
                                <div class="mb-3">
                                    <label for="mailgun_domain">Mailgun Domain</label>
                                    <input type="text" class="form-control" id="mailgun_domain" name="mailgun_domain" value="<?php echo $_smarty_tpl->getValue('mailgun_domain');?>
">

                                </div>
                                <div class="mb-3">
                                    <label for="mailgun_api_key">Mailgun API Key</label>
                                    <input type="text" class="form-control" id="mailgun_api_key" name="mailgun_api_key" value="<?php echo $_smarty_tpl->getValue('mailgun_api_key');?>
">

                                </div>
                            </div>

                            <div id="sectionSparkpostApi">
                                <div class="mb-3">
                                    <label for="sparkpost_api_key">Sparkpost Api Key</label>
                                    <input type="text" class="form-control" id="sparkpost_api_key" name="sparkpost_api_key" value="<?php echo $_smarty_tpl->getValue('sparkpost_api_key');?>
">

                                </div>
                            </div>


                            <button type="submit" class="btn btn-success mt-3"> <?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-md-6">

            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Send Test Email'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form method="post" id="formEmailTest">
                            <div class="mb-3">
                                <label for="email_test_email"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</label>
                                <input class="form-control" name="email" id="email_test_email">
                            </div>

                            <button type="submit" id="btnEmailTestSubmit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                        </form>
                        <div class="mb-3" style="margin-top: 35px;">
                            <pre><code id="responseArea"><?php echo $_smarty_tpl->getValue('_L')['Response'];?>
</code></pre>
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
class Block_11381115296745d520807fe0_06095082 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function () {
            function _check_e_method(){
                var emethod = $( "#email_method" ).val();
                if(emethod === "smtp"){
                    $('#sectionMailgunApi').hide();
                    $('#sectionSparkpostApi').hide();
                    $("#a_hide").show();
                }
                else if(emethod == 'mailgun'){
                    $("#a_hide").hide();
                    $('#sectionMailgunApi').show();
                    $('#sectionSparkpostApi').hide();
                }
                else if(emethod == 'sparkpost'){
                    $("#a_hide").hide();
                    $('#sectionMailgunApi').hide();
                    $('#sectionSparkpostApi').show();
                }
                else{
                    $("#a_hide").hide();
                    $('#sectionMailgunApi').hide();
                    $('#sectionSparkpostApi').hide();
                }



            }
            _check_e_method();
            $( "#email_method" ).change(function() {
                _check_e_method();
            });

            var $formEmailTest = $('#formEmailTest');

            var $btnEmailTestSubmit = $('#btnEmailTestSubmit');

            var $responseArea = $('#responseArea');

            $formEmailTest.on('submit',function (e) {

                e.preventDefault();
                $btnEmailTestSubmit.html('<?php echo $_smarty_tpl->getValue('_L')['Working'];?>
...');
                $btnEmailTestSubmit.prop('disabled',true);

                $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
settings/email-test", $formEmailTest.serialize())
                    .done(function( data ) {
                        $btnEmailTestSubmit.html('<?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
');
                        $btnEmailTestSubmit.prop('disabled',false);
                        $responseArea.html(data);
                    }).fail(function(data) {
                    $btnEmailTestSubmit.html('<?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
');
                    $btnEmailTestSubmit.prop('disabled',false);
                    spNotify(data.responseText,'error');
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
