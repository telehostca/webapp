{extends './layout.tpl'}
{block name=content}

    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{$base_url}}client/home">{{__('Home')}}</a></li>
                    {if $group && $group->name}
                        <li class="breadcrumb-item active text-muted" aria-current="page">{{$group->name}}</li>
                    {/if}
                </ol>
            </nav>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-8">
            <h2 class="display-5 mb-3 text-center">{{$group->name}}</h2>

            {if $group && $group->header_content}
                <div class="my-3 mx-auto" style="max-width: 800px;">
                    {$group->header_content}
                </div>
            {/if}

            <div class="pricing-wrapper">
                {if count($items) == 4}
                    {assign var=colClass value='col-md-6 col-lg-3'}
                {elseif count($items) == 3}
                    {assign var=colClass value='col-md-6 col-lg-4'}
                {elseif count($items) == 2}
                    {assign var=colClass value='col-md-6 col-lg-6'}
                {elseif count($items) == 1}
                    {assign var=colClass value='col-md-6 col-lg-12'}
                {/if}
                <div class="row gx-0 gy-6 mt-2">
                    {foreach $items as $item}
                        <div class="{{$colClass}}">
                            <div class="pricing card {if $item->featured} bg-soft-primary {/if} shadow-none pricing_block">
                                <div class="card-body">
                                    <h4 class="card-title">{$item->name}</h4>
                                    <div class="mb-3">
                                        {if $item->one_time_fee && $item->one_time_fee > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->one_time_fee),$config['home_currency'])}</h5>
                                            <p class="selected_term">{$_L['One Time']}</p>
                                        {elseif $item->price_monthly && $item->price_monthly > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->price_monthly),$config['home_currency'])}</h5>
                                            <p class="selected_term">{$_L['Monthly']}</p>
                                        {elseif $item->price_yearly && $item->price_yearly > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->price_yearly),$config['home_currency'])}</h5>
                                            <p class="selected_term">{$_L['Yearly']}</p>
                                        {elseif $item->price_quarterly && $item->price_quarterly > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->price_quarterly),$config['home_currency'])}</h5>
                                            <p class="selected_term">{$_L['Quarterly']}</p>
                                        {elseif $item->price_half_yearly && $item->price_half_yearly > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->price_half_yearly),$config['home_currency'])}</h5>
                                            <p class="selected_term"> {$_L['Half Yearly']}</p>
                                        {elseif $item->two_years && $item->two_years > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->two_years),$config['home_currency'])}</h5>
                                            <p class="selected_term">{$_L['Two Years']}</p>
                                        {elseif $item->price_three_years && $item->price_three_years > 0}
                                            <h5 class="m-0 h1 selected_price">{formatCurrency(($item->price_three_years),$config['home_currency'])}</h5>
                                            <p class="selected_term">{$_L['Three Years']}</p>
                                        {/if}
                                    </div>
                                    {if count(get_available_item_pricing_terms($item)) > 1}
                                        <select class="form-select my-2 select_payment_term" data-id="{$item->id}" data-slug="{$item->slug}" >
                                            {foreach get_available_item_pricing_terms($item) as $key => $value}
                                                <option data-price="{formatCurrency($value['price'],$config['home_currency'])}" data-term="{$key}" value="{$key}"
                                                        {if isset($shopping_cart_items['hosting'][$item->id]['term']) && ($shopping_cart_items['hosting'][$item->id]['term'] === $key)}
                                                            selected
                                                        {/if}
                                                >{$value['name']} {formatCurrency($value['price'],$config['home_currency'])}</option>
                                            {/foreach}
                                        </select>
                                    {/if}
                                    {if $item->features && count(json_decode($item->features))}
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                            {foreach json_decode($item->features) as $feature_line}
                                                <li><i class="uil uil-check"></i><span> {$feature_line} </span></li>
                                            {/foreach}
                                        </ul>
                                    {/if}
                                    <div class="hr-line-dashed m-0"></div>
                                    <div class="p-4">
                                        <a href="{$base_url}client/buy-now/{$item->slug}" class="btn btn-primary btn_buy_now">{$_L['Buy Now']}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </section>

{/block}

{block name=scripts}

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const selectPaymentTerms = document.querySelectorAll('.select_payment_term');

            selectPaymentTerms.forEach(function(selectElement) {
                selectElement.addEventListener('change', function() {
                    let that = this;
                    let closestPricingBlock = that.closest('.pricing_block');
                    let selectedPrice = closestPricingBlock.querySelector('.selected_price');
                    let selectedTerm = closestPricingBlock.querySelector('.selected_term');
                    let btnBuyNow = closestPricingBlock.querySelector('.btn_buy_now');

                    let selectedOption = that.options[that.selectedIndex];
                    selectedPrice.innerHTML = selectedOption.getAttribute('data-price');
                    selectedTerm.innerHTML = selectedOption.getAttribute('data-term');
                    btnBuyNow.href = base_url + 'client/buy-now/' + that.getAttribute('data-slug') + '/' + selectedOption.getAttribute('data-term');
                });
            });
        });


    </script>


{/block}
