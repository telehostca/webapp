{extends './layout.tpl'}
{block name="head"}

    {if $config['recaptcha'] eq '1' && !empty($config['recaptcha_sitekey'])}
        <script src="https://www.google.com/recaptcha/api.js?render={$config['recaptcha_sitekey']}"></script>
    {/if}

{/block}

{block name=content}

    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white" data-image-src="{APP_URL}/ui/theme/frontend/v/assets/img/bg-gradient.png">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3">{__('Sign In')}</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{$base_url}">{__('Home')}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{__('Sign In')}</li>
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

                            {if $type eq 'client_auth'}

                                <h2 class="mb-3 text-start">{__('Welcome Back')}</h2>
                                <p class="lead mb-6 text-start">{__('Fill your email and password to sign in.')}</p>
                                {if isset($notify)}
                                    {$notify}
                                {/if}
                                <form method="post" class="text-start mb-3" id="form_client_auth" action="{$_url}client/auth/">
                                    <div class="form-floating mb-4">
                                        <input  id="username" name="username" class="form-control" placeholder="Email">
                                        <label for="username">{__('Username')}</label>
                                    </div>
                                    <div class="form-floating password-field mb-4">
                                        <input type="password" class="form-control" placeholder="Password" id="password">
                                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                        <label for="password">{__('Password')}</label>
                                    </div>
                                    <button id="btn_client_auth" type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">{$_L['Login']}</button>
                                </form>

                                <p class="mb-1"><a href="{$_url}client/forgot_pw/" class="hover">{$_L['Forgot password']}</a></p>

                                {if $config['allow_customer_registration'] eq '1'}
                                    <p class="mb-0">{$_L['Dont have an account']} <a href="{$_url}client/register/" class="hover">{$_L['Register']}</a></p>
                                {/if}

                            {elseif $type eq 'client_password_reset'}

                            {elseif $type eq 'client_register'}

                                <form method="post" id="form_client_register" class="text-start mb-3" action="{$_url}client/register_post/">

                                    <div class="mb-3">
                                        <label class="form-label" for="fullname">{$_L['Full_Name']}</label>
                                        <input id="fullname" name="fullname" class="form-control" required>
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="email">{$_L['Email Address']}</label>
                                        <input id="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">{$_L['Password']}</label>
                                        <input type="password" id="password" name="password" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password2">{$_L['Confirm_Password']}</label>
                                        <input type="password" id="password2" name="password2" class="form-control" required>
                                    </div>

                                    {foreach $extra_fields as $field}

                                        <div class="mb-3">
                                            <label for="field_{$field['id']}" class="form-label">{$field['label']}</label>
                                            <input type="text" class="form-control" id="field_{$field['id']}" name="{$field['name']}">
                                        </div>

                                    {/foreach}

                                    <div class="mb-3">
                                        <button type="submit" id="btn_client_register" class="btn btn-primary rounded-pill btn-login w-100 mb-2">{$_L['Register']}</button>
                                    </div>
                                </form>

                                <div class="mb-3 mt-3">
                                    <div class="col-sm-12 text-center">
                                        {$_L['Already registered']}  <a href="{$_url}client/login/" class="text-info m-l-5"><b>{$_L['Login']}</b></a>
                                    </div>
                                </div>

                            {/if}



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

{/block}

{block name=scripts}

    <script>

        document.addEventListener('DOMContentLoaded', function() {

            {if $type eq 'client_auth'}

            let form_client_auth = document.getElementById('form_client_auth');
            let btn_client_auth = document.getElementById('btn_client_auth');

            form_client_auth.addEventListener('submit', function (e) {
                e.preventDefault();

                btn_client_auth.disabled = true;

                {if $config['recaptcha'] eq '1' && !empty($config['recaptcha_sitekey'])}

                grecaptcha.ready(function() {
                    grecaptcha.execute('{$config['recaptcha_sitekey']}', { action: 'submit' }).then(function(token) {
                        let username = document.getElementById('username').value;
                        let password = document.getElementById('password').value;
                        let formData = new URLSearchParams();
                        formData.append('username', username);
                        formData.append('password', password);

                        fetch("{$_url}client/auth/", {
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

                {else}

                let username = document.getElementById('username').value;
                let password = document.getElementById('password').value;
                let _token = '{csrf_token()}';
                let then = '{$then|default:''}';
                let formData = new URLSearchParams();
                formData.append('username', username);
                formData.append('password', password);
                formData.append('then', then);
                formData.append('_token', _token);

                fetch("{$_url}client/auth/", {
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

                {/if}

            });

            {/if}

            {if $type eq 'client_register'}

            let form_client_register = document.getElementById('form_client_register');
            let btn_client_register = document.getElementById('btn_client_register');

            form_client_register.addEventListener('submit', function (e) {
                e.preventDefault();

                btn_client_register.disabled = true;

                {if $config['recaptcha'] eq '1' && !empty($config['recaptcha_sitekey'])}

                grecaptcha.ready(function() {
                    grecaptcha.execute('{$config['recaptcha_sitekey']}', { action: 'submit' }).then(function(token) {
                        let fullname = document.getElementById('fullname').value;
                        let email = document.getElementById('email').value;
                        let password = document.getElementById('password').value;
                        let password2 = document.getElementById('password2').value;
                        let then = '{$then}';
                        let _token = '{csrf_token()}';

                        let formData = new URLSearchParams();
                        formData.append('fullname', fullname);
                        formData.append('email', email);
                        formData.append('password', password);
                        formData.append('password2', password2);
                        formData.append('then', then);
                        formData.append('token', token);
                        formData.append('_token', _token);

                        fetch("{$_url}client/register_post/", {
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

                {else}

                let fullname = document.getElementById('fullname').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;
                let password2 = document.getElementById('password2').value;
                let then = '{$then|default:''}';
                let _token = '{csrf_token()}';

                let formData = new URLSearchParams();
                formData.append('fullname', fullname);
                formData.append('email', email);
                formData.append('password', password);
                formData.append('password2', password2);
                formData.append('then', then);
                formData.append('_token', _token);

                fetch("{$_url}client/register_post/", {
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

                {/if}

            });

            {/if}

        });

    </script>


{/block}
