<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:26
  from 'file:../default/projects_analytics.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e158a2cfe84_04496562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f49f561df4847b01ba02c5d339ef7e4f03e2b7' => 
    array (
      0 => '../default/projects_analytics.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e158a2cfe84_04496562 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_530596288675e158a2c2dd6_87850612', "project_content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1729386258675e158a2c51e9_55553195', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "project_base.tpl", $_smarty_current_dir);
}
/* {block "project_content"} */
class Block_530596288675e158a2c2dd6_87850612 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row">
        <div class="col-md-12">
            <h3>Tasks by status</h3>
            <div class="hr-line-dashed"></div>

            <div id="tasks_by_status"></div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="hr-line-dashed"></div>
            <h3>Completed tasks last 7 days</h3>
            <div class="hr-line-dashed"></div>

            <div id="task_counts"></div>
        </div>
    </div>


<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_1729386258675e158a2c51e9_55553195 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>



        $(function () {

            var task_counts_options = {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'sales',
                    data: [
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('task_counts'), 'task_count');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('task_count')->value) {
$foreach0DoElse = false;
?>
                        <?php echo $_smarty_tpl->getValue('task_count');?>
,
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    ]
                }],
                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('last_7_days'), 'day');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('day')->value) {
$foreach1DoElse = false;
?>
                        '<?php echo $_smarty_tpl->getValue('day');?>
',
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    ],
                    axisBorder: {
                        show: false
                    },

                }
            };

            var task_counts_chart = new ApexCharts(document.querySelector("#task_counts"), task_counts_options);

            task_counts_chart.render();

            var tasks_by_status_options = {
                chart: {
                    width: 500,
                    type: 'pie',
                },
                labels: ['Not Started', 'Completed', 'In Progress', 'Deferred', 'Waiting on someone else'],
                series: [
                    <?php echo $_smarty_tpl->getValue('task_status_counts')['not_started'];?>
, <?php echo $_smarty_tpl->getValue('task_status_counts')['completed'];?>
, <?php echo $_smarty_tpl->getValue('task_status_counts')['in_progress'];?>
, <?php echo $_smarty_tpl->getValue('task_status_counts')['deferred'];?>
, <?php echo $_smarty_tpl->getValue('task_status_counts')['waiting'];?>

                ],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

            var tasks_by_status_chart = new ApexCharts(
                document.querySelector("#tasks_by_status"),
                tasks_by_status_options
            );

            tasks_by_status_chart.render();


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
