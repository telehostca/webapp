{extends file="$layouts_admin"}

{block name="head"}

    <style>

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }

        .text-info{
            color: #0152FF!important;
        }
        .text-success{
            color: #2CCE89!important;
        }

        .icon-shape {
            padding: 12px;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .icon {
            width: 3rem;
            height: 3rem;
        }
        .text-white {
            color: #fff !important;
        }
        .text-white {
            color: #fff !important;
        }
        .shadow {
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
        }
        .rounded-circle, .avatar.rounded-circle img {
            border-radius: 50% !important;
        }
        .bg-gradient-red {
            background: linear-gradient(
                    87deg
                    , #f5365c 0, #f56036 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(
                    87deg
                    , #2dce89 0, #2dcecc 100%) !important;
        }
        .bg-gradient-info {
            background: linear-gradient(
                    87deg
                    , #11cdef 0, #1171ef 100%) !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }

    </style>
{/block}


{block name="content"}

    <div class="row mb-3">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">

                    <h6 class="mb-1">{$_L['Total value of Active Orders']}</h6>
                    <h2 class="number-font">{formatCurrency($total_active_order_amount,$config['home_currency'])}</h2>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body statistics-info">
                    <h6 class="mb-1">{$_L['Total Paid Invoice Amount']}</h6>
                    <h2 class="number-font">{formatCurrency($total_paid_invoice_amount,$config['home_currency'])}</h2>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <div class="card-body statistics-info">

                    <h6 class="mb-1">{$_L['Total Orders']}</h6>
                    <h2 class=" number-font">{$total_orders}</h2>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <div class="card-body statistics-info">
                    <h6 class="mb-1">{$_L['Total Customers']}</h6>
                    <h2 class=" number-font">{$total_customers}</h2>
                </div>
            </div>
        </div>


    </div>


    <div class="row">

        <div class="col-md-6">

            <div class="card mb-3">
                <div class="card-body pb-0">
                    <h3 class="mb-0">
                        {$_L['Orders']}
                    </h3>
                    <h5 class="mt-2">{__('Last 30 days')} {formatCurrency($total_last_30_days,$config['home_currency'])}</h5>
                </div>
                <div id="orders_chart"></div>
            </div>

        </div>

        <div class="col-md-6">

            <div class="row">

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body statistics-info">

                            <h6 class="mb-1">{$_L['Income Today']}</h6>
                            <h2 class=" number-font">{formatCurrency($income_today,$config['home_currency'])}</h2>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body statistics-info">
                            <h6 class="mb-1">{$_L['Expense Today']}</h6>
                            <h2 class=" number-font">{formatCurrency($expense_today,$config['home_currency'])}</h2>
                        </div>
                    </div>
                </div>




            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body statistics-info">
                            <h6 class="mb-1">{$_L['Income This Month']}</h6>
                            <h2 class=" number-font">{formatCurrency($income_this_month,$config['home_currency'])}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body statistics-info">
                            <h6 class="mb-1">{$_L['Expense This Month']}</h6>
                            <h2 class=" number-font">{formatCurrency($expense_this_month,$config['home_currency'])}</h2>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row mb-3">

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body statistics-info">
                            <h6 class="mb-1">{$_L['Total Income']}</h6>
                            <h2 class=" number-font">{formatCurrency($total_income,$config['home_currency'])}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body statistics-info">
                            <h6 class="mb-1">{$_L['Total Expense']}</h6>
                            <h2 class=" number-font">{formatCurrency($total_expense,$config['home_currency'])}</h2>
                        </div>
                    </div>
                </div>


            </div>




        </div>



    </div>





    <div id="panel-2" class="panel" data-panel-lock="false" data-panel-close="false" data-panel-collapsed="false"  data-panel-locked="false" data-panel-refresh="false" data-panel-reset="false">
        <div class="panel-hdr">
            <h2 class="fw-bolder">
                {$_L['Cash Flow']}
            </h2>

            <div class="panel-toolbar">
                <a href="{$_url}dashboard" data-bs-toggle="tooltip" data-original-title="{$_L['Refresh']}">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                </a>
            </div>

        </div>

        <div class="panel-container show">
            <div class="panel-content border-left-0 border-right-0 border-top-0"

                    {if !empty($config['admin_dark_theme'])}
                        style="background: #232F47;"
                    {else}
                        style="background: #fff;"
                    {/if}

            >

                <div id="cash_flow_chart">

                </div>


            </div>
        </div>

    </div>






    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3>{$_L['Recent Tickets']}</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>{$_L['Ticket']}</th>
                            <th>{$_L['Subject']}</th>
                            <th>{$_L['Customer']}</th>
                            <th>{$_L['Status']}</th>
                            <th>{$_L['Last Update']}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $recent_tickets as $recent_ticket}
                            <tr>
                                <td>
                                    <a href="{$base_url}tickets/admin/view/{$recent_ticket->id}" class="font-weight-bold">
                                        {$recent_ticket->tid}
                                    </a>
                                </td>
                                <td>
                                    <a href="{$base_url}tickets/admin/view/{$recent_ticket->id}" class="font-weight-bold">
                                        {$recent_ticket->subject|escape}
                                    </a>
                                </td>
                                <td>
                                    <a href="{$base_url}contacts/view/{$recent_ticket->userid}/summary/">
                                        {$recent_ticket->account|escape}
                                    </a>
                                </td>
                                <td>
                                    {cloudonex_get_ticket_status_with_badge($recent_ticket->status|escape)}
                                </td>
                                <td>
                                    {if $recent_ticket->updated_at}
                                        {date( $config['df'], strtotime($recent_ticket->updated_at))}
                                    {/if}
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3>{$_L['Recent Orders']}</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Order</th>
                            <th>Domain</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $recent_orders as $recent_order}

                            <tr>
                                <td>
                                    <a href="{$base_url}hostbilling/order/{$recent_order->id}/" class="font-weight-bold">
                                        {$recent_order->tracking_id|escape}
                                    </a>
                                </td>
                                <td>
                                    {{$recent_order->domain|escape}}
                                </td>
                                <td>
                                    {date( $config['df'], strtotime($recent_order->created_at))}
                                </td>
                                <td>
                                    {formatCurrency($recent_order->total,$config['home_currency'])}
                                </td>
                                <td>
                                    {cloudonex_get_order_status_with_badge($recent_order->status)}
                                </td>
                            </tr>


                        {/foreach}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3>{$_L['Recent Invoices']}</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>{$_L['Invoice']}</th>
                            <th>{$_L['Customer']}</th>
                            <th>{$_L['Status']}</th>
                            <th>{$_L['Created']}</th>
                        </tr>
                        </thead>
                        <tbody>

                        {foreach $recent_invoices as $recent_invoice}

                            <tr>
                                <td>
                                    <a href="{$base_url}invoices/view/{$recent_invoice->id}/">
                                        {cloudonex_get_invoice_number($recent_invoice)}
                                    </a>
                                </td>
                                <td>
                                    <a href="{$base_url}contacts/view/{$recent_invoice->userid}/summary/">
                                        {$recent_invoice->account}
                                    </a>
                                </td>
                                <td>
                                    {cloudonex_get_invoice_status_with_badge($recent_invoice->status)}
                                </td>
                                <td>
                                    {date( $config['df'], strtotime($recent_invoice->date))}
                                </td>
                            </tr>

                        {/foreach}


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-3">
                    <h3>{$_L['Recent Clients']}</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>
                                {$_L['Name']}
                            </th>
                            <th>
                                {$_L['Email']}
                            </th>
                            <th>
                                {$_L['Created']}
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        {foreach $recent_customers as $recent_customer}

                            <tr>
                                <td>
                                    <a href="{$base_url}contacts/view/{$recent_customer->id}">
                                        {$recent_customer->account}
                                    </a>
                                </td>
                                <td>
                                    {$recent_customer->email}
                                </td>


                                <td>
                                    {if $recent_customer->created_at}
                                        {date( $config['df'], strtotime($recent_customer->created_at))}
                                    {/if}
                                </td>
                            </tr>

                        {/foreach}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




{/block}

{block name=script}

    <script>

        $(function () {
            let orders_chart_options = {
                chart: {
                    type: 'area',
                    height: 276,
                    sparkline: {
                        enabled: true
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                series: [{
                    name: 'sales',
                    data: [
                        {foreach $orders_for_chart as $key => $value}
                        {$value},
                        {/foreach}
                    ]
                }],
                xaxis: {
                    categories: [
                        {foreach $orders_for_chart as $key => $value }
                        '{$key}',
                        {/foreach}
                    ],
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    markers: {
                        strokeWidth: 3,
                        colors: "#ffffff",
                        strokeColors: [ '#387CFF' , '#f73164' ],
                        hover: {
                            size: 6,
                        }
                    },
                },
                yaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                        bottom: 0,
                        top: 35
                    }
                },
                colors: [ '#387CFF' , '#f73164' ],
                fill: {
                    type: 'solid',
                },
                legend: {
                    show: false,
                },
                tooltip: {
                    x: {
                        format: 'MM'
                    },
                },
            };

            let chart = new ApexCharts(document.querySelector("#orders_chart"), orders_chart_options);
            chart.render();

            $.getJSON( "{$_url}accounts/json-income-vs-expense", function( data ) {
                var options1 = {
                    chart: {
                        fontFamily: 'Open Sans, sans-serif',
                        height: 400,
                        {if !empty($config['admin_dark_theme'])}
                        foreColor: '#fff',
                        {/if}
                        toolbar: {
                            show: false
                        },
                        events: {
                            mounted: function(ctx, config) {
                                const highest1 = ctx.getHighestValueInSeries(0);
                                const highest2 = ctx.getHighestValueInSeries(1);

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                    y: highest1,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })

                                ctx.addPointAnnotation({
                                    x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
                                    y: highest2,
                                    label: {
                                        style: {
                                            cssClass: 'd-none'
                                        }
                                    },
                                    customSVG: {
                                        SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                        cssClass: undefined,
                                        offsetX: -8,
                                        offsetY: 5
                                    }
                                })
                            },
                        }
                    },
                    {if !empty($config['admin_dark_theme'])}
                    colors: ["#4586DB", "#C23C3E"],
                    {else}
                    colors: ["#387CFF", "#FB8141"],
                    {/if}

                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: [0, 2, 5],
                        curve: 'smooth'
                    },
                    fill: {
                        opacity: [0.5, 0.25, 1],
                        gradient: { shade: '#387CFF', shadeIntensity: .8, opacityFrom: .8, opacityTo: .25, stops: [0, 95, 100] }
                    },

                    markers: {
                        discrete: [{
                            seriesIndex: 0,
                            dataPointIndex: 7,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 5
                        }, {
                            seriesIndex: 2,
                            dataPointIndex: 11,
                            fillColor: '#000',
                            strokeColor: '#000',
                            size: 4
                        }]
                    },
                    subtitle: {
                        text: '{$_L['Net Worth']}',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 35,
                        floating: false,
                        style: {
                            fontSize: '14px',
                            {if !empty($config['admin_dark_theme'])}
                            color:  '#fff',
                            {else}
                            color:  '#565674',
                            {/if}
                        }
                    },
                    title: {
                        text: '{formatCurrency($net_worth,$config['home_currency'])}',
                        align: 'left',
                        margin: 0,
                        offsetX: -10,
                        offsetY: 0,
                        floating: false,
                        style: {
                            fontSize: '25px',
                            {if !empty($config['admin_dark_theme'])}
                            color:  '#fff',
                            {else}
                            color:  '#0e1726'
                            {/if}
                        },
                    },

                    series: [{
                        type: 'area',
                        name: 'Income',
                        data: data.Income,

                    }, {
                        type: 'area',
                        name: 'Expenses',
                        data: data.Expense,
                    }],
                    labels: data.Months,
                    xaxis: {


                        crosshairs: {
                            show: true
                        },
                        labels: {
                            offsetX: 0,
                            offsetY: 5,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-xaxis-title',
                            },
                        }
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value, index) {
                                return (value / 1000) + 'K'
                            },
                            offsetX: -22,
                            offsetY: 0,
                            style: {
                                fontSize: '12px',
                                fontFamily: 'Open Sans, sans-serif',
                                cssClass: 'apexcharts-yaxis-title',
                            },
                        }
                    },
                    grid: {
                        {if !empty($config['admin_dark_theme'])}
                        borderColor: "#2B2C3F",
                        {else}
                        borderColor: "#f1f1f1",
                        {/if}
                        padding: {
                            top: 10
                        },
                        strokeDashArray: 4,
                        yaxis: {
                            lines: {
                                show: true
                            }
                        }

                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right',
                        offsetY: -50,
                        fontSize: '16px',
                        fontFamily: 'Open Sans, sans-serif',
                        markers: {
                            width: 10,
                            height: 10,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                            onClick: undefined,
                            offsetX: 0,
                            offsetY: 0
                        },
                        itemMargin: {
                            horizontal: 0,
                            vertical: 20
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        marker: {
                            show: true,
                        },
                        x: {
                            show: false,
                        }
                    },
                    responsive: [{
                        breakpoint: 575,
                        options: {
                            legend: {
                                offsetY: -30,
                            },
                        },
                    }],
                    plotOptions: { bar: { horizontal: !1, columnWidth: "15%", endingShape: "rounded" } },
                    {if !empty($config['admin_dark_theme'])}
                    background: '#000',
                    foreColor: '#fff',
                    {/if}
                };


                var chart1 = new ApexCharts(
                    document.querySelector("#cash_flow_chart"),
                    options1
                );

                chart1.render();
            });

        });

    </script>


{/block}
