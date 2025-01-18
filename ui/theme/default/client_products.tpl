{extends file="$layouts_client"}

{block name="content"}

    <div class="row">
        <div class="col">
            <h1 class="mb-3">{__('Products')}</h1>
        </div>
        <div class="col text-end">
            <a href="{$base_url}client" class="btn btn-primary mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> {__('Add New Service')}
            </a>
        </div>
    </div>

    <div class="mb-3">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link {if $selected_tab eq 'hosting'}active{/if}" aria-current="page" href="{$base_url}client/products/hosting">{__('Hosting')}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $selected_tab eq 'domains'}active{/if}" href="{$base_url}client/products/domains">{__('Domains')}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $selected_tab eq 'vps'}active{/if}" href="{$base_url}client/products/vps">{__('VPS')}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $selected_tab eq 'dedicated'}active{/if}" href="{$base_url}client/products/dedicated">{__('Dedicated')}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $selected_tab eq 'ssl'}active{/if}" href="{$base_url}client/products/ssl">{__('SSL')}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {if $selected_tab eq 'other'}active{/if}" href="{$base_url}client/products/other">{__('Other')}</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-body">
            {if $selected_tab eq 'hosting'}
                {include file='hostbilling/client/products/hosting.tpl'}
            {elseif $selected_tab eq 'domains'}
                {include file='hostbilling/client/products/domains.tpl'}
            {elseif $selected_tab eq 'vps'}
                {include file='hostbilling/client/products/vps.tpl'}
            {elseif $selected_tab eq 'dedicated'}
                {include file='hostbilling/client/products/dedicated.tpl'}
            {elseif $selected_tab eq 'ssl'}
                {include file='hostbilling/client/products/ssl.tpl'}
            {elseif $selected_tab eq 'other'}
                {include file='hostbilling/client/products/other.tpl'}
            {/if}
        </div>
    </div>


{/block}
