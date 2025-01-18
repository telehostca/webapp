{extends './layout.tpl'}
{block name=content}

    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{$base_url}}client/home">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active text-muted" aria-current="page">{{__('Checkout')}}</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">


            <div class="row gx-md-8 gx-xl-12 gy-12">
                <div class="col-lg-8">
                    <div class="table-responsive">

                        {if count($items) || !empty($shopping_cart_items['domains'])}
                            <table class="table table-bordered">
                                {foreach $items as $item}
                                    <tr>
                                        <td>
                                            <h3>{$item->name}</h3>

                                            <div class="hr-line-dashed"></div>

                                            <div class="mb-3">
                                                <label>{__('Billing Cycle')}</label>
                                                <select class="form-select mt-2 select_payment_term" data-id="{$item->id}" >
                                                    {foreach get_available_item_pricing_terms($item) as $key => $value}
                                                        <option value="{$key}"
                                                                {if isset($shopping_cart_items['hosting'][$item->id]['term']) && ($shopping_cart_items['hosting'][$item->id]['term'] === $key)}
                                                                    selected
                                                                {/if}
                                                        >{$value['name']} {formatCurrency($value['price'],$config['home_currency'])}</option>
                                                    {/foreach}
                                                </select>
                                            </div>


                                            {if $item->require_domain_name}

                                                <div class="mb-3">
                                                    <label>{__('Enter Your Domain')}</label>
                                                    <input class="form-control hosting_set_domain_name" name="domain_name" data-id="{$item->id}"
                                                            {if isset($shopping_cart_items['hosting'][$item->id]['domain_name'])}
                                                                value="{$shopping_cart_items['hosting'][$item->id]['domain_name']}"
                                                            {/if}
                                                    >
                                                    <p>
                                                        <a href="{$base_url}client/domain-register/">{__('Register a new domain?')}</a>
                                                    </p>
                                                </div>

                                            {/if}



                                        </td>
                                        <td class="text-end">

                                            <div class="mb-2">
                                                <strong>{formatCurrency($shopping_cart_items['hosting'][$item->id]['price'],$config['home_currency'])}</strong>
                                            </div>

                                            {if $default_tax and $shopping_cart_items['hosting'][$item->id]['tax_amount'] > 0}
                                                <div class="mb-2">
                                                    <small>{$default_tax->name} ({format_number_using_currency_code($default_tax->rate,$config['home_currency'])}%)</small>
                                                    <strong>+{formatCurrency($shopping_cart_items['hosting'][$item->id]['tax_amount'],$config['home_currency'])}</strong>
                                                </div>
                                            {/if}

                                            <a href="{$base_url}client/remove-shopping-cart-item/{$item->id}" class="btn btn-circle btn-soft-red btn-sm"><i class="uil uil-minus"></i></a>
                                        </td>
                                    </tr>
                                {/foreach}

                                {if !empty($shopping_cart_items['domains'])}

                                    {foreach $shopping_cart_items['domains'] as $key => $value}

                                        <tr>
                                            <td>
                                                <h5>{$value['name']}</h5>

                                                {if $value['term'] == 1}
                                                    1 {__('year')}
                                                {else}
                                                    {$value['term']} {__('years')}
                                                {/if}

                                            </td>
                                            <td class="text-end">
                                                <div class="mb-2">
                                                    <strong>{formatCurrency($value['price'],$config['home_currency'])}</strong>
                                                </div>

                                                {if $default_tax and $value['tax_amount'] > 0}
                                                    <div class="mb-2">
                                                        <small>{$default_tax->name} ({format_number_using_currency_code($default_tax->rate,$config['home_currency'])}%)</small>
                                                        <strong>{formatCurrency($value['tax_amount'],$config['home_currency'])}</strong>
                                                    </div>
                                                {/if}

                                                <a href="{$base_url}client/remove-shopping-cart-domain/{$key}" class="btn mt-3 btn-danger btn-sm waves-effect waves-themed"><i class="uil uil-minus"></i></a>
                                            </td>
                                        </tr>

                                    {/foreach}

                                {/if}


                                <tr>
                                    <td class="text-end">
                                        <h4>{__('Total')}:</h4>
                                    </td>
                                    <td class="text-end" style="width: 150px;">
                                        <h4>{formatCurrency($shopping_cart->total,$config['home_currency'])}</h4>
                                    </td>
                                </tr>

                            </table>

                            <div class="row my-4 gy-4">
                                <div class="col-md-8 col-lg-7">
                                    <div class="form-floating input-group">
                                        <input type="url" class="form-control" placeholder="Enter promo code" id="seo-check">
                                        <label for="seo-check">Enter promo code</label>
                                        <button class="btn btn-primary" type="button">Apply</button>
                                    </div>
                                    <!-- /.input-group -->
                                </div>
                            </div>


                            <a class="btn btn-primary rounded-xl" href="{$base_url}client/">{__('Continue Shopping')}</a>
                            <a class="btn btn-danger rounded-xl" href="{$base_url}client/delete-shopping-cart">{__('Empty Shopping Cart')}</a>


                        {else}

                            {__('No items in the shopping cart.')}

                            <div class="hr-line-dashed"></div>

                            <a class="btn btn-success" href="{$base_url}client/">{__('Go to Homepage')}</a>

                        {/if}
                    </div>
                    <!-- /.table-responsive -->

                    <!-- /.row -->
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <h3 class="mb-4">{__('Order Summary')}</h3>
                    <div class="table-responsive">
                        <table class="table table-order">
                            <tbody>
                            <tr>
                                <td class="ps-0"><strong class="text-dark">{__('Total')}</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price">{formatCurrency($shopping_cart->total,$config['home_currency'])}</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    {if $user}

                        <a class="btn btn-primary rounded w-100 mt-4" href="{$base_url}client/checkout-commit">{__('Pay Now')}</a>

                    {else}


                        <a href="{$base_url}client/login/">
                            <h5 class="text-info">{__('I already have an account')}</h5>
                        </a>

                        <a href="{$base_url}client/register/">
                            <h5 class="text-info">{__('Or create an account')}</h5>
                        </a>

                    {/if}

                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



{/block}

{block name=scripts}

    <script>

        document.addEventListener("DOMContentLoaded", function() {

            let selectPaymentTerms = document.querySelectorAll('.select_payment_term');
            selectPaymentTerms.forEach( function(element) {
                element.addEventListener('change', function() {
                    window.location = base_url + 'client/shopping-cart-update-term/' + this.getAttribute('data-id') + '/' + this.value;
                });
            });

            let hostingSetDomainNames = document.querySelectorAll('.hosting_set_domain_name');
            hostingSetDomainNames.forEach( function(element) {
                ['keyup', 'paste'].forEach(eventName => {
                    element.addEventListener(eventName, function() {
                        let xhr = new XMLHttpRequest();
                        let params = 'id=' + this.getAttribute('data-id') + '&domain=' + this.value;

                        xhr.open('POST', base_url + 'client/set-domain-for-hosting');
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhr.send(params);
                    });
                });
            });

        });

    </script>


{/block}
