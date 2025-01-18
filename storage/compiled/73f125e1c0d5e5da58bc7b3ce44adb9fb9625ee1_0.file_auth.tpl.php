<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:16:49
  from 'file:../default/hostbilling/admin/auth.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be2019c47a0_99720269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73f125e1c0d5e5da58bc7b3ce44adb9fb9625ee1' => 
    array (
      0 => '../default/hostbilling/admin/auth.tpl',
      1 => 1690476006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678be2019c47a0_99720269 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1727926048678be201966d49_53058436', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_993623119678be20197e796_80713733', "content_body");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2041797842678be2019b3ea5_27015998', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "hostbilling/layouts/base.tpl", $_smarty_current_dir);
}
/* {block "head"} */
class Block_1727926048678be201966d49_53058436 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/admin';
?>


    <style>
        @media (min-width: 992px){
            .clx-fixed-navigation:not(.clx-navigation-type-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>


    <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1' && !empty($_smarty_tpl->getValue('config')['recaptcha_sitekey'])) {?>
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
"><?php echo '</script'; ?>
>
    <?php }?>

<?php
}
}
/* {/block "head"} */
/* {block "content_body"} */
class Block_993623119678be20197e796_80713733 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/admin';
?>

    <div class="page-content-wrapper bg-transparent m-0">
        <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
            <div class="d-flex align-items-center container p-0">
                <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                    <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
                        <?php if ((null !== ($_smarty_tpl->getValue('config')['logo_square'] ?? null))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->getValue('config')['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->getValue('config')['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                        <?php }?>
                        <?php if ((null !== ($_smarty_tpl->getValue('config')['logo_text'] ?? null))) {?>
                            <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->getValue('config')['logo_text'];?>
</span>
                        <?php } else { ?>
                            <span class="page-logo-text mr-1">CloudOnex</span>
                        <?php }?>
                    </a>
                </div>




            </div>
        </div>
        <div class="flex-1">
            <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                <?php if ($_smarty_tpl->getValue('type') == 'admin_auth') {?>

                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

                            <h1 class="mb-3 text-center">
                                <?php echo $_smarty_tpl->getValue('_L')['Login'];?>

                            </h1>

                            <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                                <?php echo $_smarty_tpl->getValue('notify');?>

                            <?php }?>

                            <form method="post" id="form_admin_auth" class="mt-3" action="<?php echo $_smarty_tpl->getValue('_url');?>
login/post/<?php if ((null !== ($_smarty_tpl->getValue('after') ?? null))) {
echo $_smarty_tpl->getValue('after');?>
/<?php }?>">
                                <div class="mb-3">
                                    <label class="form-label" for="username"><?php echo $_smarty_tpl->getValue('_L')['Email Address'];?>
</label>
                                    <input id="username" name="username" class="form-control form-control-lg" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                                </div>


                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_field')();?>


                                <div class="mb-3">
                                    <button type="submit" id="btn_admin_auth" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->getValue('_L')['Sign in'];?>
</button>
                                </div>
                            </form>

                            <div class="text-center mt-3">
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
admin/forgot-pw/" id="to-recover" class="text-info"><?php echo $_smarty_tpl->getValue('_L')['Forgot password'];?>
</a>
                            </div>




                        </div>
                    </div>

                <?php } elseif ($_smarty_tpl->getValue('type') == 'admin_password_reset') {?>

                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

                            <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                                <?php echo $_smarty_tpl->getValue('notify');?>

                            <?php }?>

                            <form method="post" class="mt-3" action="<?php echo $_smarty_tpl->getValue('_url');?>
admin/forgot-pw-post/">
                                <div class="mb-3">
                                    <label class="form-label" for="username"><?php echo $_smarty_tpl->getValue('_L')['Email Address'];?>
</label>
                                    <input id="username" name="username" class="form-control form-control-lg" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->getValue('_L')['Reset Password'];?>
</button>
                                </div>
                            </form>

                            <div class="mt-3 text-center">
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
admin/"><?php echo $_smarty_tpl->getValue('_L')['Back To Login'];?>
</a>
                            </div>

                        </div>
                    </div>

                <?php } elseif ($_smarty_tpl->getValue('type') == 'client_auth') {?>

                    <div class="row">
                        <div class="col col-md-6 col-lg-7">

                            <?php if ((null !== ($_smarty_tpl->getValue('admin') ?? null)) && $_smarty_tpl->getValue('admin')) {?>
                                <div class="my-3">
                                    <a href="javascript:;" id="btn_edit_content" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
dashboard" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Dashboard'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
logout" class="btn btn-danger"><?php echo $_smarty_tpl->getValue('_L')['Logout'];?>
</a>
                                </div>
                                <div class="hr-line-dashed"></div>
                            <?php }?>

                            <div style="font-size: 18px;" class="fw-300">

                                <?php echo Widget::getWidgetContent('client-auth-page-widget');?>


                            </div>



                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ms-auto">
                            <div class="card p-4" style="box-shadow: 1px 0 20px rgba(0, 0, 0, .08);">

                                <h1 class="fw-300 mb-3 text-center">
                                    <?php echo $_smarty_tpl->getValue('_L')['Login'];?>

                                </h1>

                                <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                                    <?php echo $_smarty_tpl->getValue('notify');?>

                                <?php }?>

                                <form method="post" class="mt-3" id="form_client_auth" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/auth/">
                                    <div class="mb-3">
                                        <label class="form-label" for="username"><?php echo $_smarty_tpl->getValue('_L')['Email Address'];?>
</label>
                                        <input id="username" name="username" class="form-control form-control-lg" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                                    </div>


                                    <div class="mb-3">
                                        <button type="submit" id="btn_client_auth" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->getValue('_L')['Login'];?>
</button>
                                    </div>

                                    <?php if ($_smarty_tpl->getValue('config')['allow_customer_registration'] == '1') {?>
                                        <div class="mb-3 mb-0">
                                            <div class="col-sm-12 text-center">
                                                <?php echo $_smarty_tpl->getValue('_L')['Dont have an account'];?>
 <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/register/" class="text-info m-l-5"><b><?php echo $_smarty_tpl->getValue('_L')['Register'];?>
</b></a>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <div class="text-center">
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/forgot_pw/" id="to-recover" class="text-info"><?php echo $_smarty_tpl->getValue('_L')['Forgot password'];?>
</a>
                                    </div>



                                </form>




                            </div>
                        </div>
                    </div>


                <?php } elseif ($_smarty_tpl->getValue('type') == 'client_password_reset') {?>
                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

                            <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                                <?php echo $_smarty_tpl->getValue('notify');?>

                            <?php }?>

                            <form method="post" class="mt-3" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/forgot_pw_post/">
                                <div class="mb-3">
                                    <label class="form-label" for="username"><?php echo $_smarty_tpl->getValue('_L')['Email Address'];?>
</label>
                                    <input id="username" name="username" class="form-control form-control-lg" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->getValue('_L')['Reset Password'];?>
</button>
                                </div>
                            </form>

                            <?php if ($_smarty_tpl->getValue('config')['allow_customer_registration'] == '1') {?>
                                <div class="mb-3 mt-3">
                                    <div class="col-sm-12 text-center">
                                        <?php echo $_smarty_tpl->getValue('_L')['Dont have an account'];?>
 <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/register/" class="text-info m-l-5"><b><?php echo $_smarty_tpl->getValue('_L')['Register'];?>
</b></a>
                                    </div>
                                </div>
                            <?php }?>




                        </div>
                    </div>

                <?php } elseif ($_smarty_tpl->getValue('type') == 'client_register') {?>

                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

                            <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                                <?php echo $_smarty_tpl->getValue('notify');?>

                            <?php }?>

                            <form method="post" id="form_client_register" class="mt-3" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/register_post/">

                                <div class="mb-3">
                                    <label class="form-label" for="fullname"><?php echo $_smarty_tpl->getValue('_L')['Full_Name'];?>
</label>
                                    <input id="fullname" name="fullname" class="form-control form-control-lg" required>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="email"><?php echo $_smarty_tpl->getValue('_L')['Email Address'];?>
</label>
                                    <input id="email" name="email" class="form-control form-control-lg" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password2"><?php echo $_smarty_tpl->getValue('_L')['Confirm_Password'];?>
</label>
                                    <input type="password" id="password2" name="password2" class="form-control form-control-lg" required>
                                </div>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('extra_fields'), 'field');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field')->value) {
$foreach0DoElse = false;
?>

                                    <div class="mb-3">
                                        <label for="field_<?php echo $_smarty_tpl->getValue('field')['id'];?>
" class="form-label"><?php echo $_smarty_tpl->getValue('field')['label'];?>
</label>
                                        <input type="text" class="form-control form-control-lg" id="field_<?php echo $_smarty_tpl->getValue('field')['id'];?>
" name="<?php echo $_smarty_tpl->getValue('field')['name'];?>
">
                                    </div>



                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                <div class="mb-3">
                                    <button type="submit" id="btn_client_register" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->getValue('_L')['Register'];?>
</button>
                                </div>
                            </form>

                            <div class="mb-3 mt-3">
                                <div class="col-sm-12 text-center">
                                    <?php echo $_smarty_tpl->getValue('_L')['Already registered'];?>
  <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/login/" class="text-info m-l-5"><b><?php echo $_smarty_tpl->getValue('_L')['Login'];?>
</b></a>
                                </div>
                            </div>




                        </div>
                    </div>

                <?php }?>


                <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center">
                    &copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');?>
 <?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_2041797842678be2019b3ea5_27015998 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default/hostbilling/admin';
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');

            <?php if ($_smarty_tpl->getValue('type') == 'admin_auth') {?>
            let $form_admin_auth = $('#form_admin_auth');
            let $btn_admin_auth = $('#btn_admin_auth');

            $form_admin_auth.on('submit',function (e) {
                e.preventDefault();

                $btn_admin_auth.disabled = true;

                <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1' && !empty($_smarty_tpl->getValue('config')['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
login/post/<?php if ((null !== ($_smarty_tpl->getValue('after') ?? null))) {
echo $_smarty_tpl->getValue('after');?>
/<?php }?>", {
                            username: $('#username').val(),
                            password: $('#password').val(),
                            token: token,
                            _token: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
',
                        })
                            .done(function( data ) {
                                window.location = data.redirect_url;
                            }).fail(function(data) {
                            $btn_admin_auth.disabled = false;
                            toastr.error(data.responseText);
                        });
                    });
                });

                <?php } else { ?>

                $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
login/post/<?php if ((null !== ($_smarty_tpl->getValue('after') ?? null))) {
echo $_smarty_tpl->getValue('after');?>
/<?php }?>", {
                    username: $('#username').val(),
                    password: $('#password').val(),
                    _token: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
',
                })
                    .done(function( data ) {
                        window.location = data.redirect_url;
                    }).fail(function(data) {
                    $btn_admin_auth.disabled = false;
                    toastr.error(data.responseText);
                });

                <?php }?>


            });

            <?php }?>

            <?php if ($_smarty_tpl->getValue('type') == 'client_auth') {?>

            let $form_client_auth = $('#form_client_auth');
            let $btn_client_auth = $('#btn_client_auth');

            $form_client_auth.on('submit',function (e) {
                e.preventDefault();

                $btn_client_auth.disabled = true;

                <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1' && !empty($_smarty_tpl->getValue('config')['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
client/auth/", {
                            username: $('#username').val(),
                            password: $('#password').val(),
                            token: token,
                            _token: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
',
                        })
                            .done(function( data ) {
                                window.location = data.redirect_url;
                            }).fail(function(data) {
                            $btn_client_auth.disabled = false;
                            toastr.error(data.responseText);
                        });
                    });
                });

                <?php } else { ?>

                $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
client/auth/", {
                    username: $('#username').val(),
                    password: $('#password').val(),
                    _token: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
',
                })
                    .done(function( data ) {
                        window.location = data.redirect_url;
                    }).fail(function(data) {
                    $btn_client_auth.disabled = false;
                    toastr.error(data.responseText);
                });

                <?php }?>


            });

            <?php if ((null !== ($_smarty_tpl->getValue('admin') ?? null)) && $_smarty_tpl->getValue('admin')) {?>

            $('#login_as_admin').on('click',function () {
                window.location = base_url + 'login/';
            });

            $('#btn_edit_content').on('click',function (e) {
                e.preventDefault();

                $.fancybox.open({
                    src  : base_url + 'settings/client-auth-page-widget',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#edit_content').redactor();
                        },
                        modal: true,
                    }
                });

            });

            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();

                $.post( base_url + "settings/client-auth-page-widget-save/", $("#clx_modal_form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }

                    });

            });

            <?php }?>


            <?php }?>

            <?php if ($_smarty_tpl->getValue('type') == 'client_register') {?>

            let $form_client_register = $('#form_client_register');
            let $btn_client_register = $('#btn_client_register');

            $form_client_register.on('submit',function (e) {
                e.preventDefault();

                $btn_client_register.disabled = true;

                <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1' && !empty($_smarty_tpl->getValue('config')['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
client/register_post/", {
                            fullname: $('#fullname').val(),
                            email: $('#email').val(),
                            password: $('#password').val(),
                            password2: $('#password2').val(),
                            token: token,
                            _token: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
',
                        })
                            .done(function( data ) {
                                window.location = data.redirect_url;
                            }).fail(function(data) {
                            $btn_client_register.disabled = false;
                            toastr.error(data.responseText);
                        });
                    });
                });

                <?php } else { ?>

                $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
client/register_post/", {
                    fullname: $('#fullname').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    password2: $('#password2').val(),
                    _token: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
',
                })
                    .done(function( data ) {
                        window.location = data.redirect_url;
                    }).fail(function(data) {
                    $btn_client_register.disabled = false;
                    toastr.error(data.responseText);
                });

                <?php }?>


            });

            <?php }?>

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
