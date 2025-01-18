<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:33
  from 'file:../default/reports_income.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15cd45cd20_22301255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a89b4a5c477a9d69ffd8738afc495e4bb207ea3' => 
    array (
      0 => '../default/reports_income.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15cd45cd20_22301255 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1388075907675e15cd434106_55387236', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1418555065675e15cd4352a6_73949254', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_418145481675e15cd452631_75083552', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1388075907675e15cd434106_55387236 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1418555065675e15cd4352a6_73949254 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Income Reports'];?>
 </h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">
                <h4><?php echo $_smarty_tpl->getValue('_L')['Income Summary'];?>
</h4>


                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                            <div class="">
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('total_income_all_time'),$_smarty_tpl->getValue('config')['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->getValue('_L')['Total Income'];?>
</small>
                                </h5>
                                <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>


                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                            <div class="details">
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(Transaction::totalAmount('Income',0,'current_month',$_smarty_tpl->getValue('all_data')),$_smarty_tpl->getValue('config')['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->getValue('_L')['Total Income This Month'];?>
 </small>
                                </h5>
                                <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>


                            </div>
                        </div>


                    </div>


                </div>




                <div class="row">
                    <div class="col-md-6">
                        <div class="p-3 bg-primary-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(Transaction::totalAmount('Income',0,'last_30_days',$_smarty_tpl->getValue('all_data')),$_smarty_tpl->getValue('config')['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->getValue('_L')['Total Income Last 30 days'];?>
  </small>
                                </h5>
                                <i class="fal fa-credit-card position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(Transaction::totalAmount('Income',0,'current_week',$_smarty_tpl->getValue('all_data')),$_smarty_tpl->getValue('config')['home_currency']);?>

                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->getValue('_L')['Total Income This Week'];?>
  </small>
                                </h5>
                                <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-striped w-100" id="clx_datatable">

                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Category'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                            <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Payer'];?>
</th>

                            <th><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Item'];?>
</th>

                            <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Cr'];?>
</th>
                        </tr>
                        </thead>


                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                            <tr>
                                <td>
                                    <a class="fw-bold" href="<?php echo $_smarty_tpl->getValue('base_url');?>
transactions/manage/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['date']));?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->getValue('ds')['account'];?>
</td>
                                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('ds')['type']);?>
</td>
                                <td><?php if ($_smarty_tpl->getValue('ds')['category'] == 'Uncategorized') {
echo $_smarty_tpl->getValue('_L')['Uncategorized'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('ds')['category'];?>
 <?php }?></td>
                                <td>
                                    <?php if (!empty($_smarty_tpl->getValue('ds')['payerid']) && !empty($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('ds')['payerid']])) {?>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('ds')['payerid'];?>
"><?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('ds')['payerid']]['account'];?>
</a>
                                    <?php }?>
                                </td>
                                <td class="text-end"><?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('ds')['amount'],2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>
</td>
                                <td><?php echo $_smarty_tpl->getValue('ds')['payer'];?>
</td>



                                <td><?php echo $_smarty_tpl->getValue('ds')['description'];?>
</td>

                                <td>
                                    <?php if (!empty($_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('ds')['item_id']])) {?>
                                        <?php echo $_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('ds')['item_id']]['name'];?>

                                    <?php }?>
                                </td>

                                <td class="text-end"><?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('ds')['cr'],2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>
</td>


                            </tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>



                    </table>

                </div>



                <div id="income_by_month"></div>
                <hr>

                <h4><?php echo $_smarty_tpl->getValue('_L')['Income by Category'];?>
</h4>

                <div id="category_pie_chart"></div>

            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_418145481675e15cd452631_75083552 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

            $('.amount').autoNumeric('init', {


                dGroup: 3,
                aPad: true,
                pSign: 'p',
                aDec: '<?php echo $_smarty_tpl->getValue('config')['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->getValue('config')['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


           // var myChart = echarts.init(document.getElementById('placeholder'));

            // specify chart configuration item and data


            var income_by_months = {
                chart: { height: 500, type: "area", zoom: { enabled: !1 } },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                dataLabels: { enabled: !1 },
                stroke: { curve: "straight" },
                series: [{ name: "<?php echo $_smarty_tpl->getValue('_L')['Income'];?>
", data: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m_data'), 'd');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach1DoElse = false;
?>
                        <?php echo $_smarty_tpl->getValue('d')['value'];?>
,
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>] }],
                title: { text: "<?php echo $_smarty_tpl->getValue('_L')['Reports by Month'];?>
", align: "left"},
                grid: { row: { colors: ["#f3f3f3", "transparent"], opacity: .5 } },
                xaxis: { categories: [
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m_data'), 'd');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach2DoElse = false;
?>
                        "<?php echo $_smarty_tpl->getValue('d')['month'];?>
",
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    ] },
                yaxis: { tickAmount: 5 }
            };

            new ApexCharts(document.querySelector("#income_by_month"), income_by_months).render();


            var category_pie_chart_options = {
                chart: { type: "donut", height: 500 },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                labels: [
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat_data'), 'd');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach3DoElse = false;
?>
                    '<?php echo $_smarty_tpl->getValue('d')['category'];?>
',
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                ],
                series: [
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat_data'), 'd');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d')->value) {
$foreach4DoElse = false;
?>
                    <?php echo $_smarty_tpl->getValue('d')['value'];?>
,
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                ],
                legend: { itemMargin: { horizontal: 2 } },
                responsive: [ { breakpoint: 576, options: { chart: { width: 300 }, legend: { position: "bottom" } } }]
            };

            new ApexCharts(document.querySelector("#category_pie_chart"), category_pie_chart_options).render();

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger-light btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success-light btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary-light btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-info-light btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary-light btn-sm'
                        }
                    ],
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                    },
                }
            );


        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
