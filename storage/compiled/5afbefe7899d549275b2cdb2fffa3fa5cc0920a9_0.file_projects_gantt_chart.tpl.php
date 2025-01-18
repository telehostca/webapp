<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:24
  from 'file:../default/projects_gantt_chart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e1588489bc3_55166848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5afbefe7899d549275b2cdb2fffa3fa5cc0920a9' => 
    array (
      0 => '../default/projects_gantt_chart.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e1588489bc3_55166848 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_591492086675e158847c1c9_04261640', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1256537590675e158847de78_36961638', "project_content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_902196124675e158847f3f3_92336781', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "project_base.tpl", $_smarty_current_dir);
}
/* {block "head"} */
class Block_591492086675e158847c1c9_04261640 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/frappe-gantt@0.5.0/dist/frappe-gantt.css" />
<?php
}
}
/* {/block "head"} */
/* {block "project_content"} */
class Block_1256537590675e158847de78_36961638 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <svg id="gantt"></svg>
<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_902196124675e158847f3f3_92336781 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/combine/npm/snapsvg@0.5.1,npm/frappe-gantt@0.5.0/dist/frappe-gantt.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {

            var tasks = [
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks'), 'task');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('task')->value) {
$foreach0DoElse = false;
?>
                {
                    id: '<?php echo $_smarty_tpl->getValue('task')->id;?>
',
                    name: '<?php echo $_smarty_tpl->getValue('task')->title;?>
',
                    start: '<?php echo $_smarty_tpl->getValue('task')->started;?>
',
                    end: '<?php echo $_smarty_tpl->getValue('task')->due_date;?>
',

                    <?php if ($_smarty_tpl->getValue('task')->status === 'In Progress') {?>
                    progress: 70,
                    <?php } elseif ($_smarty_tpl->getValue('task')->status === 'Not Started') {?>
                    progress: 0,
                    <?php } elseif ($_smarty_tpl->getValue('task')->status === 'Completed') {?>
                    progress: 100,
                    <?php } elseif ($_smarty_tpl->getValue('task')->status === 'Waiting on someone else') {?>
                    progress: 50,
                    <?php } elseif ($_smarty_tpl->getValue('task')->status === 'Deferred') {?>
                    progress: 40,
                    <?php } else { ?>
                    progress: 50,
                    <?php }?>
                    // dependencies: 'Task 2, Task 3'
                },
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            ]
            var gantt = new Gantt("#gantt", tasks);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
