<div class="row mb-3">
    <div class="col">
        {if $type == 'credit-notes'}

            <h2>{__('Credit Notes')}</h2>

        {else}

            <h2>{$_L['Invoices']}</h2>


        {/if}
    </div>
</div>


<div class="mb-3">
    <span class="fw-bold">{__('Found')}:</span> <strong>{$total_invoices_found}</strong> | <span class="fw-bold">{__('Amount')}:</span> {foreach $total_by_currency as $key => $value} <span class="text-muted">{$key}:</span> <strong>{formatCurrency($value,$key)}</strong> {/foreach}
</div>

<div class="table-responsive">
    <table id="clx_datatable" class="table table-striped">
        <thead style="background: #f0f2ff">
        <tr>
            <th>#</th>
            <th>{$_L['Account']}</th>
            {if !empty($config['invoice_group'])}
                <th>
                    {$_L['Group']}
                </th>
            {/if}
            {if !empty($config['invoice_single_service'])}
                <th>
                    {__('Service')}
                </th>
            {/if}
            <th>{__('Staff')}</th>
            <th>{$_L['Title']}</th>
            <th>{$_L['Amount']}</th>
            <th>{$_L['Invoice Date']}</th>
            <th>{$_L['Due Date']}</th>
            <th>
                {$_L['Status']}
            </th>
            {if !empty($config['invoice_items_purchasing'])}
                <th>{__('Purchase Status')}</th>
            {/if}
            {if !empty($config['invoice_items_shipping'])}
                <th>{__('Shipping Status')}</th>
            {/if}
            <th>{$_L['Type']}</th>
            <th class="text-end" width="140px;">{$_L['Manage']}</th>
        </tr>
        </thead>
        <tbody>

        {foreach $invoices as $invoice}
            <tr>
                <td><a href="{$_url}invoices/view/{$invoice->id}/">{$invoice->invoicenum}{if $invoice->cn neq ''} {$invoice->cn} {else} {$invoice->id} {/if}</a> </td>
                <td>
                    {if isset($customers[$invoice->id])}
                        <a href="{$_url}invoices/view/{$invoice->id}/">
                            <strong>
                                {$invoice->account}
                                {if $customers[$invoice->userid]->company != ''}
                                    <br>  {$customers[$invoice->userid]->company}
                                {/if}
                            </strong>
                        </a>
                    {elseif !empty($invoice->account)}
                        <a href="{$_url}invoices/view/{$invoice->id}/">
                            <strong>
                                {$invoice->account}
                            </strong>
                        </a>
                    {/if}
                </td>

                {if !empty($config['invoice_group'])}
                    <td>
                        {if !empty($invoice_groups[$invoice->group_id])}
                            {$invoice_groups[$invoice->group_id]->name}
                        {/if}
                    </td>
                {/if}

                {if !empty($config['invoice_single_service'])}
                    <td>
                        {if !empty($services[$invoice->service_id])}
                            {$services[$invoice->service_id]->name}
                        {/if}
                    </td>
                {/if}

                <td>
                    {if !empty($invoice->aid)}
                        {$staffs[$invoice->aid]->fullname}
                    {/if}
                </td>

                <td>
                    {if !empty($invoice->title)}
                        <a href="{$_url}invoices/view/{$invoice->id}/">
                            {$invoice->title}
                        </a>
                    {/if}
                </td>
                <td>{formatCurrency($invoice->total,$invoice->currency_iso_code)}</td>
                <td data-value="{strtotime($invoice->date)}">{date( $config['df'], strtotime($invoice->date))}</td>
                <td data-value="{strtotime($invoice->duedate)}">{date( $config['df'], strtotime($invoice->duedate))}</td>
                <td>

                    {if $invoice->status eq 'Unpaid'}
                        <span class="badge bg-danger">{ib_lan_get_line($invoice->status)}</span>
                    {elseif $invoice->status eq 'Paid'}
                        <span class="badge bg-primary">{ib_lan_get_line($invoice->status)}</span>
                    {elseif $invoice->status eq 'Partially Paid'}
                        <span class="badge bg-warning">{ib_lan_get_line($invoice->status)}</span>
                    {elseif $invoice->status eq 'Cancelled'}
                        <span class="badge bg-secondary">{ib_lan_get_line($invoice->status)}</span>
                    {else}
                        <span class="badge bg-info text-white">{ib_lan_get_line($invoice->status)}</span>
                    {/if}



                </td>



                {if !empty($config['invoice_items_purchasing'])}
                    <td>
                        {if !empty($invoice->purchase_status)}
                            {if $invoice->purchase_status eq 'Purchased'}
                                <span class="badge bg-success text-white">{ib_lan_get_line($invoice->purchase_status)}</span>
                            {else}
                                <span class="badge bg-info text-white">{ib_lan_get_line($invoice->purchase_status)}</span>
                            {/if}
                        {/if}
                    </td>
                {/if}
                {if !empty($config['invoice_items_shipping'])}
                    <td>
                        {if !empty($invoice->shipping_status)}
                            {if $invoice->shipping_status eq 'Shipped'}
                                <span class="badge bg-success text-white">{ib_lan_get_line($invoice->shipping_status)}</span>
                            {else}
                                <span class="badge bg-info text-white">{ib_lan_get_line($invoice->shipping_status)}</span>
                            {/if}
                        {/if}
                    </td>
                {/if}

                <td>
                    {if $invoice->r eq '0'}
                        <span class="badge bg-success">{$_L['Onetime']}</span>
                    {else}
                        <span class="badge bg-primary">{$_L['Recurring']}</span>
                    {/if}
                </td>
                <td class="text-end">


                    <div class="btn-group">
                        <a href="{$_url}invoices/view/{$invoice->id}/" class="btn btn-primary btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['View']}"><i class="fal fa-file-alt"></i></a>

                        <a href="{$_url}invoices/clone/{$invoice->id}/" class="btn btn-success btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Clone']}"><i class="fal fa-copy"></i></a>


                        <a href="{$_url}invoices/edit/{$invoice->id}/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fal fa-file-edit"></i></a>

                        {if $invoice['r'] neq '0'}

                            <a href="{$_url}invoices/stop_recurring/{$invoice->id}/" class="btn btn-info btn-icon" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Stop Recurring']}"><i class="fal fa-stop"></i></a>

                        {/if}

                        <a href="#" class="btn btn-danger btn-icon cdelete" id="iid{$invoice->id}" data-bs-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fal fa-trash-alt"></i></a>
                    </div>


                </td>
            </tr>
        {/foreach}

        </tbody>



    </table>
</div>
