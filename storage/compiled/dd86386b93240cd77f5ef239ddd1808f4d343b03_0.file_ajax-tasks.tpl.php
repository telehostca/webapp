<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:06
  from 'file:../default/ajax-tasks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15b2d6a3c8_87819495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd86386b93240cd77f5ef239ddd1808f4d343b03' => 
    array (
      0 => '../default/ajax-tasks.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15b2d6a3c8_87819495 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?><div style="overflow: auto;">

    <div style="min-width: 1545px; max-width: 1545px;">
        <div class="panel kanban-col">
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

        <div class="panel kanban-col">
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
                                                    <?php echo $_smarty_tpl->getValue('_L')['Ticket'];?>
: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

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

        <div class="panel kanban-col">
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
                                                    <?php echo $_smarty_tpl->getValue('_L')['Ticket'];?>
: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

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

        <div class="panel kanban-col">
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
                                                    <?php echo $_smarty_tpl->getValue('_L')['Ticket'];?>
: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

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

        <div class="panel kanban-col" style="border-right: 1px solid #ffffff;">
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
                                                    <?php echo $_smarty_tpl->getValue('_L')['Ticket'];?>
: <?php echo $_smarty_tpl->getValue('tickets')[$_smarty_tpl->getValue('tns')['tid']][0]->tid;?>

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

<?php }
}
