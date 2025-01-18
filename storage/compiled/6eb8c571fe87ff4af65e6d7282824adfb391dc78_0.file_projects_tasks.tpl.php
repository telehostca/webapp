<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:21
  from 'file:../default/projects_tasks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e1585a9f095_06432364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb8c571fe87ff4af65e6d7282824adfb391dc78' => 
    array (
      0 => '../default/projects_tasks.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e1585a9f095_06432364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1632362479675e1585a31e94_68094302', "project_content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_765187328675e1585a9b0d1_02218261', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "project_base.tpl", $_smarty_current_dir);
}
/* {block "project_content"} */
class Block_1632362479675e1585a31e94_68094302 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <button class="btn btn-primary add_task mb-3"><?php echo $_smarty_tpl->getValue('_L')['Add Task'];?>
</button>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-md-12" id="kanbanCanvas">

            <div style="overflow: auto;">

                <div style="min-width: 1545px; max-width: 1545px;">


                    <div class="panel panel-deep-orange kanban-col border">
                        <div class="panel-hdr bg-danger-600">

                            <h2><?php echo $_smarty_tpl->getValue('_L')['Not Started'];?>
</h2>

                        </div>

                        <div class="panel-body">
                            <div id="not_started" class="kanban-centered kanban-droppable-area">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks_not_started'), 'tns');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tns')->value) {
$foreach0DoElse = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" class="v_item"><?php echo $_smarty_tpl->getValue('tns')['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <?php if ($_smarty_tpl->getValue('tns')['cid'] != 0 && $_smarty_tpl->getValue('tns')['cid'] != '' && (null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('tns')['tid'] != 0 && $_smarty_tpl->getValue('tns')['tid'] != '' && (null !== ($_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>



                                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getAdminImage')($_smarty_tpl->getValue('tns')['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->getValue('tns')['created_by'];?>
"> <?php echo $_smarty_tpl->getValue('tns')['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->getValue('tns')['created_at'];
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_prefixVariable1);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('tns')['due_date']));?>
</small>

                                                        <?php if ((null !== ($_smarty_tpl->getValue('tns')['priority'] ?? null))) {?>
                                                            <br>
                                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'critical' || $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>


                    </div>

                    <div class="panel panel-primary kanban-col border">
                        <div class="panel-hdr bg-primary-600">

                            <h2><?php echo $_smarty_tpl->getValue('_L')['In Progress'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="in_progress" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks_in_progress'), 'tns');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tns')->value) {
$foreach1DoElse = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" class="v_item"><?php echo $_smarty_tpl->getValue('tns')['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->getValue('tns')['cid'] != 0 && $_smarty_tpl->getValue('tns')['cid'] != '' && (null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('tns')['tid'] != 0 && $_smarty_tpl->getValue('tns')['tid'] != '' && (null !== ($_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getAdminImage')($_smarty_tpl->getValue('tns')['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->getValue('tns')['created_by'];?>
"> <?php echo $_smarty_tpl->getValue('tns')['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->getValue('tns')['created_at'];
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_prefixVariable2);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('tns')['due_date']));?>
</small>

                                                        <?php if ((null !== ($_smarty_tpl->getValue('tns')['priority'] ?? null))) {?>
                                                            <br>
                                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'critical' || $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>
                    <div class="panel panel-light-green kanban-col border">
                        <div class="panel-hdr bg-success-600">

                            <h2><?php echo $_smarty_tpl->getValue('_L')['Completed'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="completed" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks_completed'), 'tns');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tns')->value) {
$foreach2DoElse = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" class="v_item"><?php echo $_smarty_tpl->getValue('tns')['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->getValue('tns')['cid'] != 0 && $_smarty_tpl->getValue('tns')['cid'] != '' && (null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('tns')['tid'] != 0 && $_smarty_tpl->getValue('tns')['tid'] != '' && (null !== ($_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getAdminImage')($_smarty_tpl->getValue('tns')['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->getValue('tns')['created_by'];?>
"> <?php echo $_smarty_tpl->getValue('tns')['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->getValue('tns')['created_at'];
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_prefixVariable3);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('tns')['due_date']));?>
</small>

                                                        <?php if ((null !== ($_smarty_tpl->getValue('tns')['priority'] ?? null))) {?>
                                                            <br>
                                                            <?php if ((null !== ($_smarty_tpl->getValue('tns')['priority'] ?? null))) {?>
                                                                <br>
                                                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'critical' || $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'high') {?>
                                                                    <span class="label label-danger">
                                                        <?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                                <?php } else { ?>
                                                                    <span class="label label-info"><?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?></span>
                                                                <?php }?>

                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-blue-grey kanban-col border">
                        <div class="panel-hdr bg-dark">

                            <h2 class="text-white"><?php echo $_smarty_tpl->getValue('_L')['Deferred'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="deferred" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks_deferred'), 'tns');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tns')->value) {
$foreach3DoElse = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" class="v_item"><?php echo $_smarty_tpl->getValue('tns')['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->getValue('tns')['cid'] != 0 && $_smarty_tpl->getValue('tns')['cid'] != '' && (null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('tns')['tid'] != 0 && $_smarty_tpl->getValue('tns')['tid'] != '' && (null !== ($_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getAdminImage')($_smarty_tpl->getValue('tns')['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->getValue('tns')['created_by'];?>
"> <?php echo $_smarty_tpl->getValue('tns')['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->getValue('tns')['created_at'];
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_prefixVariable4);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('tns')['due_date']));?>
</small>

                                                        <?php if ((null !== ($_smarty_tpl->getValue('tns')['priority'] ?? null))) {?>
                                                            <br>
                                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'critical' || $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-grey kanban-col border">
                        <div class="panel-hdr bg-gray-900">

                            <h2 class="text-white"><?php echo $_smarty_tpl->getValue('_L')['Waiting on someone else'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="waiting_on_someone" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tasks_waiting'), 'tns');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tns')->value) {
$foreach4DoElse = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->getValue('tns')['id'];?>
" class="v_item"><?php echo $_smarty_tpl->getValue('tns')['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->getValue('tns')['cid'] != 0 && $_smarty_tpl->getValue('tns')['cid'] != '' && (null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('tns')['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('tns')['tid'] != 0 && $_smarty_tpl->getValue('tns')['tid'] != '' && (null !== ($_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid ?? null))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getAdminImage')($_smarty_tpl->getValue('tns')['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->getValue('tns')['created_by'];?>
"> <?php echo $_smarty_tpl->getValue('tns')['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->getValue('tns')['created_at'];
$_prefixVariable5 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_prefixVariable5);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('tns')['due_date']));?>
</small>

                                                        <?php if ((null !== ($_smarty_tpl->getValue('tns')['priority'] ?? null))) {?>
                                                            <br>
                                                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'critical' || $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('tns')['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((null !== ($_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']] ?? null))) {?>
                                                            <?php echo $_smarty_tpl->getValue('_L')[$_smarty_tpl->getValue('tns')['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->getValue('tns')['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_765187328675e1585a9b0d1_02218261 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var $kanbanCanvas = $('#kanbanCanvas');


            $modal = $("#cloudonex_body");

            for (var a = dragula($(".kanban-droppable-area").toArray()), r = a.containers, o = r.length, l = 0; l < o; l++)$(r[l]).addClass("dragula dragula-vertical");
            a.on("drop", function (a, r, o, l) {


                var item = a.id;
                var target = r.id;

                $.post(base_url + 'tasks/set_status/',{ task_id : item, target: target },function (data) {
                    //   $(".kanban-col").unblock();

                })

            });

            $( ".mmnt" ).each(function() {
                //   alert($( this ).html());
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });



            $(".add_task").on('click',function (e) {
                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + 'tasks/create/0/<?php echo $_smarty_tpl->getValue('project')->id;?>
',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                            var $start_date = $('#start_date');

                            $start_date.datepicker();

                            var $due_date = $('#due_date');

                            $due_date.datepicker();

                            $("#cid").select2();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });



            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();


                $.post( base_url + "tasks/post/", $("#ib-modal-form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            window.location = base_url + 'projects/tasks/<?php echo $_smarty_tpl->getValue('project')->id;?>
';

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            // $kanbanCanvas.on('click','.v_item',function (e) {
            //     e.preventDefault();
            //     $('body').modalmanager('loading');
            //
            //     $modal.load( base_url + 'tasks/view/'+this.id, '', function(){
            //
            //         $modal.modal();
            //
            //
            //
            //
            //     });
            // });

            $kanbanCanvas.on('click','.v_item',function (e) {
                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'tasks/view/'+this.id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });

            });




            $modal.on('click', '.c_delete', function(e){
                e.preventDefault();
                var tid = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){

                        $.get( base_url + "delete/tasks/"+tid, function( data ) {
                            location.reload();
                        });


                    }
                });

            });

            $modal.on('click', '.c_edit', function(e) {
                e.preventDefault();
                var tid = this.id;

                $.fancybox.open({
                    src: base_url + 'tasks/create/' + tid,
                    type: 'ajax',
                    opts: {
                        afterShow: function (instance, current) {

                            $('#description').redactor();

                            $('#title').keyup(function () {

                                var live_val = $(this).val();
                                if (live_val == '') {
                                    $("#txt_modal_header").html(jq_title);
                                } else {
                                    $("#txt_modal_header").html(live_val);
                                }


                            });
                            $("#cid").select2();
                            var $start_date = $('#start_date');


                            $start_date.datepicker({
                                dateFormat: 'yyyy-mm-dd',
                            });


                            var $due_date = $('#due_date');

                            $due_date.datepicker({
                                dateFormat: 'yyyy-mm-dd',
                            });




                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }

                });
            });


            // $modal.on('click', '.c_edit', function(e){
            //     e.preventDefault();
            //     var tid = this.id;
            //
            //     $('body').modalmanager('loading');
            //
            //     $modal.load( base_url + 'tasks/create/'+tid, '', function(){
            //
            //         $('body').modalmanager('loading');
            //         $modal.modal();
            //         ib_editor("#description");
            //         var ib_date_picker_options = {
            //             format: ib_date_format_picker
            //         };
            //
            //
            //         var jq_title = $('#title').val();
            //
            //         $('#title').keyup(function () {
            //
            //             var live_val = $(this).val();
            //             if(live_val == ''){
            //                 $("#txt_modal_header").html(jq_title);
            //             }
            //             else{
            //                 $("#txt_modal_header").html(live_val);
            //             }
            //
            //
            //         });
            //
            //         var $start_date = $('#start_date');
            //
            //         $start_date.datetimepicker({
            //             format: 'YYYY-MM-DD'
            //         });
            //
            //         var $due_date = $('#due_date');
            //
            //         $due_date.datetimepicker({
            //             format: 'YYYY-MM-DD'
            //         });
            //
            //
            //         $("#cid").select2({
            //             theme: "bootstrap"
            //         });
            //
            //
            //     });
            //
            // });
            //
            //




        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block "script"} */
}
