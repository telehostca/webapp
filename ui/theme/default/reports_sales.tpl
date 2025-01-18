{extends file="$layouts_admin"}

{block name="head"}


    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
{/block}


{block name="content"}

    <div class="row mb-3">
        <!-- Total Sales Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2>{$total_sales}</h2>
                    <h5 class="text-muted">{__('Total Sales')}</h5>
                </div>
            </div>
        </div>

        <!-- Total Revenue Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2>{$total_revenue}</h2>
                    <h5 class="text-muted">{__('Total Revenue')}</h5>
                </div>
            </div>
        </div>

        <!-- Top-Selling Product Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2>{$top_selling_product_units} {__('Units Sold')}</h2>
                    <h5 class="text-muted">{$top_selling_product_name}</h5>
                </div>
            </div>
        </div>

        <!-- Sales Growth Rate Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2>{$sales_growth_rate}%</h2>
                    <h5 class="text-muted">{__('Sales Growth Rate')}</h5>
                </div>
            </div>
        </div>
    </div>



    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body p-3">

                    <div class="table-responsive">
                        <table class="table table-striped dataTable" id="clx_datatable">
                            <thead style="background: #f0f2ff">
                            <tr>
                                <th class="h6">{$_L['Item']}</th>
                                <th class="h6">{$_L['Qty']}</th>
                                <th class="h6">{$_L['Amount']}</th>
                                <th class="h6">{$_L['Total']}</th>
                                <th class="h6">{$_L['Date']}</th>
                            </tr>
                            </thead>
                            <tbody>

                            {foreach $invoice_items as $item}
                                <tr>
                                    <td class="h6">{$item['description']}</td>
                                    <td class="h6">{$item['qty']}</td>
                                    <td class="h6">{$item['amount']}</td>
                                    <td class="h6">{$item['total']}</td>
                                    <td class="h6 text-info">{$item['duedate']}</td>
                                </tr>
                            {/foreach}

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{$_L['Item']}</th>
                                <th>{$_L['Qty']}</th>
                                <th>{$_L['Amount']}</th>
                                <th>{$_L['Total']}</th>
                                <th>{$_L['Date']}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>

        </div>

    </div>
{/block}

{block name="scripts"}
    <script>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "{$_L['No items to display']}",
                        "info":      "{$_L['Showing _START_ to _END_ of _TOTAL_ entries']}",
                        "infoEmpty":      "{$_L['Showing 0 to 0 of 0 entries']}",
                        buttons: {
                            pageLength: '{$_L['Show all']}'
                        },
                        searchPlaceholder: "{__('Search')}"
                    },
                }
            );
        });
    </script>
{/block}
