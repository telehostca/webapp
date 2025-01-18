<div class="table-responsive">
    <table class="table table-bordered mb-4">
        <thead>
        <tr>
            <th>{__('Name')}</th>
            <th>{__('IP')}</th>
            <th>{__('Plan')}</th>
            <th class="text-center">Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        {foreach $hosting_orders as $hosting_order}

            <tr>
                <td>
                    <a href="{$base_url}client/view-product/{$hosting_order->id}/{$hosting_order->tracking_id}">

                        <div class="text-bold">
                            {if !empty($hosting_plans[$hosting_order->plan_id])}
                                {$hosting_plans[$hosting_order->plan_id]->name}
                            {else}
                                {$hosting_order->tracking_id}
                            {/if}
                        </div>

                        {if !empty($hosting_order->domain)}
                            <div class="mt-3">
                                {$hosting_order->domain}
                            </div>
                        {/if}

                    </a>
                </td>
                <td>
                    {if !empty($hosting_order->ip)}
                        {$hosting_order->ip}
                    {else}
                        -
                    {/if}
                </td>
                <td>Pro</td>
                <td class="text-center"><span class="text-success">Active</span></td>
                <td class="text-center">
                    <a href="{$base_url}client/products/hosting/1" class="btn btn-sm btn-primary">{__('Manage')}</a>
                </td>
            </tr>

        {/foreach}

        </tbody>
    </table>
</div>
