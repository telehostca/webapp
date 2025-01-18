<?php
/* Smarty version 5.4.2, created on 2025-01-18 12:38:02
  from 'file:../default/../frontend/v/auth.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678be6fab9f4f0_45566448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52a9f457bb9b2e64c5ebbfad088c62ac34580cd' => 
    array (
      0 => '../default/../frontend/v/auth.tpl',
      1 => 1695047250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678be6fab9f4f0_45566448 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/frontend/v';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_410819093678be6fab68bd4_33312660', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1803930493678be6fab6f8e6_73770849', 'content');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1691651354678be6fab8da20_65079750', 'scripts');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, './layout.tpl', $_smarty_current_dir);
}
/* {block "head"} */
class Block_410819093678be6fab68bd4_33312660 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/frontend/v';
?>


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
/* {block 'content'} */
class Block_1803930493678be6fab6f8e6_73770849 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/frontend/v';
?>


    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white" data-image-src="<?php echo APP_URL;?>
/ui/theme/frontend/v/assets/img/bg-gradient.png">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sign In');?>
</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->getValue('base_url');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Home');?>
</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sign In');?>
</li>
                        </ol>
                    </nav>

                </div>

            </div>

        </div>

    </section>

    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
                    <div class="card">
                        <div class="card-body p-11 text-center">

                            <?php if ($_smarty_tpl->getValue('type') == 'client_auth') {?>

                                <h2 class="mb-3 text-start"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Welcome Back');?>
</h2>
                                <p class="lead mb-6 text-start"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Fill your email and password to sign in.');?>
</p>
                                <?php if ((null !== ($_smarty_tpl->getValue('notify') ?? null))) {?>
                                    <?php echo $_smarty_tpl->getValue('notify');?>

                                <?php }?>
                                <form method="post" class="text-start mb-3" id="form_client_auth" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/auth/">
                                    <div class="form-floating mb-4">
                                        <input  id="username" name="username" class="form-control" placeholder="Email">
                                        <label for="username"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Username');?>
</label>
                                    </div>
                                    <div class="form-floating password-field mb-4">
                                        <input type="password" class="form-control" placeholder="Password" id="password">
                                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                        <label for="password"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Password');?>
</label>
                                    </div>
                                    <button id="btn_client_auth" type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2"><?php echo $_smarty_tpl->getValue('_L')['Login'];?>
</button>
                                </form>

                                <p class="mb-1"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/forgot_pw/" class="hover"><?php echo $_smarty_tpl->getValue('_L')['Forgot password'];?>
</a></p>

                                <?php if ($_smarty_tpl->getValue('config')['allow_customer_registration'] == '1') {?>
                                    <p class="mb-0"><?php echo $_smarty_tpl->getValue('_L')['Dont have an account'];?>
 <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/register/" class="hover"><?php echo $_smarty_tpl->getValue('_L')['Register'];?>
</a></p>
                                <?php }?>

                            <?php } elseif ($_smarty_tpl->getValue('type') == 'client_password_reset') {?>

                            <?php } elseif ($_smarty_tpl->getValue('type') == 'client_register') {?>

                                <form method="post" id="form_client_register" class="text-start mb-3" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/register_post/">

                                    <div class="mb-3">
                                        <label class="form-label" for="fullname"><?php echo $_smarty_tpl->getValue('_L')['Full_Name'];?>
</label>
                                        <input id="fullname" name="fullname" class="form-control" required>
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="email"><?php echo $_smarty_tpl->getValue('_L')['Email Address'];?>
</label>
                                        <input id="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</label>
                                        <input type="password" id="password" name="password" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password2"><?php echo $_smarty_tpl->getValue('_L')['Confirm_Password'];?>
</label>
                                        <input type="password" id="password2" name="password2" class="form-control" required>
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
                                            <input type="text" class="form-control" id="field_<?php echo $_smarty_tpl->getValue('field')['id'];?>
" name="<?php echo $_smarty_tpl->getValue('field')['name'];?>
">
                                        </div>

                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    <div class="mb-3">
                                        <button type="submit" id="btn_client_register" class="btn btn-primary rounded-pill btn-login w-100 mb-2"><?php echo $_smarty_tpl->getValue('_L')['Register'];?>
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

                            <?php }?>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_1691651354678be6fab8da20_65079750 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/frontend/v';
?>


    <?php echo '<script'; ?>
>

        document.addEventListener('DOMContentLoaded', function() {

            <?php if ($_smarty_tpl->getValue('type') == 'client_auth') {?>

            let form_client_auth = document.getElementById('form_client_auth');
            let btn_client_auth = document.getElementById('btn_client_auth');

            form_client_auth.addEventListener('submit', function (e) {
                e.preventDefault();

                btn_client_auth.disabled = true;

                <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1' && !empty($_smarty_tpl->getValue('config')['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        let username = document.getElementById('username').value;
                        let password = document.getElementById('password').value;
                        let formData = new URLSearchParams();
                        formData.append('username', username);
                        formData.append('password', password);

                        fetch("<?php echo $_smarty_tpl->getValue('_url');?>
client/auth/", {
                            method: "POST",
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                window.location = data.redirect_url;
                            })
                            .catch(error => {
                                document.getElementById('btn_client_auth').disabled = false;
                                notyf.error(error.message);
                            });
                    });
                });

                <?php } else { ?>

                let username = document.getElementById('username').value;
                let password = document.getElementById('password').value;
                let _token = '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
';
                let then = '<?php echo (($tmp = $_smarty_tpl->getValue('then') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
';
                let formData = new URLSearchParams();
                formData.append('username', username);
                formData.append('password', password);
                formData.append('then', then);
                formData.append('_token', _token);

                fetch("<?php echo $_smarty_tpl->getValue('_url');?>
client/auth/", {
                    method: "POST",
                    body: formData
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        window.location = data.redirect_url;
                    })
                    .catch(error => {
                        document.getElementById('btn_client_auth').disabled = false;
                        notyf.error(error.message);
                    });

                <?php }?>

            });

            <?php }?>

            <?php if ($_smarty_tpl->getValue('type') == 'client_register') {?>

            let form_client_register = document.getElementById('form_client_register');
            let btn_client_register = document.getElementById('btn_client_register');

            form_client_register.addEventListener('submit', function (e) {
                e.preventDefault();

                btn_client_register.disabled = true;

                <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1' && !empty($_smarty_tpl->getValue('config')['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        let fullname = document.getElementById('fullname').value;
                        let email = document.getElementById('email').value;
                        let password = document.getElementById('password').value;
                        let password2 = document.getElementById('password2').value;
                        let then = '<?php echo $_smarty_tpl->getValue('then');?>
';
                        let _token = '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
';

                        let formData = new URLSearchParams();
                        formData.append('fullname', fullname);
                        formData.append('email', email);
                        formData.append('password', password);
                        formData.append('password2', password2);
                        formData.append('then', then);
                        formData.append('token', token);
                        formData.append('_token', _token);

                        fetch("<?php echo $_smarty_tpl->getValue('_url');?>
client/register_post/", {
                            method: "POST",
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                window.location = data.redirect_url;
                            })
                            .catch(error => {
                                document.getElementById('btn_client_register').disabled = false;
                                notyf.error(error.message);
                            });
                    });
                });

                <?php } else { ?>

                let fullname = document.getElementById('fullname').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;
                let password2 = document.getElementById('password2').value;
                let then = '<?php echo (($tmp = $_smarty_tpl->getValue('then') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
';
                let _token = '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_token')();?>
';

                let formData = new URLSearchParams();
                formData.append('fullname', fullname);
                formData.append('email', email);
                formData.append('password', password);
                formData.append('password2', password2);
                formData.append('then', then);
                formData.append('_token', _token);

                fetch("<?php echo $_smarty_tpl->getValue('_url');?>
client/register_post/", {
                    method: "POST",
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        window.location = data.redirect_url;
                    })
                    .catch(error => {
                        document.getElementById('btn_client_register').disabled = false;
                        notyf.error(error.message);
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
/* {/block 'scripts'} */
}
