<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:43
  from 'file:../default/reports_invoices_expense.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15d7b81802_99506425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038f3e724ffce56ce8b10cb5ede933c8735ea557' => 
    array (
      0 => '../default/reports_invoices_expense.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15d7b81802_99506425 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17898650675e15d7b667f4_88988732', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1530490814675e15d7b68115_02898488', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_17898650675e15d7b667f4_88988732 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="containerInvoicesVsExpense" id="containerInvoicesVsExpense" style="min-height: 450px;"></div>
                    </div>




                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1530490814675e15d7b68115_02898488 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>




    <?php echo '<script'; ?>
>

        jQuery(document).ready(function() {


          //  var containerInvoicesVsExpense = document.getElementById("containerInvoicesVsExpense");
          //  var chartInvoicesVsExpense = echarts.init(containerInvoicesVsExpense);


            var optionInvoicesVsExpense = {
                title: {
                    <?php if ($_smarty_tpl->getValue('config')['nstyle'] == 'dark_mode') {?>
                    textStyle: {
                        color: '#BDD1F8',
                    },
                    <?php }?>
                    text: '<?php echo $_smarty_tpl->getValue('_L')['Invoices Vs Expense'];?>
'
                },
                tooltip : {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross',
                        label: {
                            backgroundColor: '#6a7985'
                        }
                    }
                },
                legend: {
                    <?php if ($_smarty_tpl->getValue('config')['nstyle'] == 'dark_mode') {?>
                    textStyle: {
                        color: '#BDD1F8',
                    },
                    <?php }?>
                    data:['<?php echo $_smarty_tpl->getValue('_L')['Total Invoice'];?>
','<?php echo $_smarty_tpl->getValue('_L')['Total Paid'];?>
','<?php echo $_smarty_tpl->getValue('_L')['Total Expense'];?>
','<?php echo $_smarty_tpl->getValue('config')['expense_type_1'];?>
','<?php echo $_smarty_tpl->getValue('config')['expense_type_2'];?>
']
                },
                toolbox: {
                    feature: {
                        saveAsImage: { }
                    }
                },
                grid: {
                    left: '2%',
                    right: '2%',
                    bottom: '15%',
                    containLabel: true
                },
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['display'], 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach0DoElse = false;
?>
                            '<?php echo $_smarty_tpl->getValue('m');?>
',
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>],
                        axisTick: {
                            alignWithLabel: true
                        },
                        axisLabel : {
                            rotate : 45,
                            interval : 0,
                            <?php if ($_smarty_tpl->getValue('config')['nstyle'] == 'dark_mode') {?>
                            textStyle: {
                                color: '#BDD1F8',
                            },
                            <?php }?>
                        }
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLabel : {
                            <?php if ($_smarty_tpl->getValue('config')['nstyle'] == 'dark_mode') {?>
                            textStyle: {
                                color: '#BDD1F8',
                            },
                            <?php }?>
                        }
                    }
                ],
                series : [
                    {
                        name:'<?php echo $_smarty_tpl->getValue('_L')['Total Invoice'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
',
                        areaStyle: { normal: {

                        }
                        },
                        data:[
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['invoice_total'], 'd_invoice_total');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_invoice_total')->value) {
$foreach1DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_invoice_total');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->getValue('_L')['Total Paid'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
',
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['invoice_paid'], 'd_invoice_paid');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_invoice_paid')->value) {
$foreach2DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_invoice_paid');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->getValue('_L')['Total Expense'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
',
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['expense_total'], 'd_expense_total');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_expense_total')->value) {
$foreach3DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_expense_total');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->getValue('config')['expense_type_1'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
',
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['expense_type_1'], 'd_expense_type_1');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_expense_type_1')->value) {
$foreach4DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_expense_type_1');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->getValue('config')['expense_type_2'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
',
                        label: {
                            normal: {
                                show: true,
                                position: 'top'
                            }
                        },
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['expense_type_2'], 'd_expense_type_2');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_expense_type_2')->value) {
$foreach5DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_expense_type_2');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                    }
                ]
            };


           // chartInvoicesVsExpense.setOption(optionInvoicesVsExpense, true);


            let options = {
                chart: {
                    height: 380,
                    type: "line",
                    <?php if (!empty($_smarty_tpl->getValue('config')['admin_dark_theme'])) {?>
                    foreColor: '#fff',
                    <?php }?>
                },
                stroke: { width: 2, curve: "smooth" },
                series: [
                    {
                        name: "<?php echo $_smarty_tpl->getValue('_L')['Total Paid'];?>
",
                        type: "area",
                        data: [
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['invoice_paid'], 'd_invoice_paid');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_invoice_paid')->value) {
$foreach6DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_invoice_paid');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                    }, {
                    name: "<?php echo $_smarty_tpl->getValue('_L')['Total Expense'];?>
",
                    type: "line",
                        data:[
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['expense_total'], 'd_expense_total');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('d_expense_total')->value) {
$foreach7DoElse = false;
?>
                            <?php echo $_smarty_tpl->getValue('d_expense_total');?>
,
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        ]
                }],
                colors: ["#CED4DC", "#6658dd"],
                fill: { type: "solid", opacity: [.35, 1] },
                labels: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('m')['display'], 'm');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value) {
$foreach8DoElse = false;
?>
                    '<?php echo $_smarty_tpl->getValue('m');?>
',
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>],
                markers: { size: 0 },
                yaxis: [ { title: { text: "" } }, { opposite: !0, title: { text: "" } }],
                tooltip: {
                    shared: !0, intersect: !1, y: {
                        formatter: function (e) {
                            return void 0 !== e ? e.toFixed(0) + " points" : e
                        }
                    }
                },
                legend: { offsetY: 7 }
            };


           let chart = (new ApexCharts(document.querySelector("#containerInvoicesVsExpense"), options)).render();


        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
