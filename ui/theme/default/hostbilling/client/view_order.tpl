{extends file="hostbilling/layouts/client.tpl"}



{block name="content"}

    <div class="card">
        <div class="card-body">
            <h3>{$order->tracking_id}</h3>
            <div class="hr-line-dashed"></div>
            <strong>{__('Status')}:</strong> {cloudonex_get_order_status_with_badge($order->status)}


            {if count($buttons)}

                <div class="my-3">
                    {foreach $buttons as $button}
                        <a href="{$base_url}{$button['link']}/{$order->id}/" class="btn btn-primary">{$button['text']}</a>
                    {/foreach}
                </div>

            {/if}

            {if $order->login_url}
                <div class="mt-3">
                    <a href="{$order->login_url}" target="_blank">{$order->login_url}</a>
                </div>
            {/if}

            {if $order->username}
                <div class="mt-3">
                    <strong>{__('Username')}:</strong> {$order->username}
                </div>
            {/if}

            {if $order->password}
                <div class="mt-3">
                    <strong>{__('Password')}:</strong> <span id="password_view_holder"><a href="#" id="view_password" data-value="{$order->password}">{__('View')}</a></span>
                </div>
            {/if}

            {if !empty($server) && $server->type == 'cpanel'}

                <a href="{$_url}client/one-click-login/{$order->id}/{$order->tracking_id}" target="_blank" class="btn btn-primary mt-3">{__('Login')}</a>

            {/if}





            <div class="mt-3">
                <h4>{$order->activation_subject}</h4>
            </div>
            <div class="mt-3">
                {$order->activation_message}
            </div>
        </div>
    </div>

{/block}

{block name=script}

    <script>

        $(function () {
            let $view_password = $('#view_password');
            let $password_view_holder = $('#password_view_holder');

            $view_password.on('click',function (event) {
                event.preventDefault();
                let password = $view_password.attr('data-value');
                $password_view_holder.html('<code>' + password + '</code>')
            });

        });

    </script>


{/block}
