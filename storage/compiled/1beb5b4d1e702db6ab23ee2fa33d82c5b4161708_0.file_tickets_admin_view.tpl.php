<?php
/* Smarty version 5.4.2, created on 2025-01-18 13:25:33
  from 'file:../default/tickets_admin_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678bf21ddc78d4_74361553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1beb5b4d1e702db6ab23ee2fa33d82c5b4161708' => 
    array (
      0 => '../default/tickets_admin_view.tpl',
      1 => 1690476006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678bf21ddc78d4_74361553 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1030077251678bf21dd703d4_80832557', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1305268250678bf21ddb7986_56151440', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1030077251678bf21dd703d4_80832557 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>




    <div class="row">
        <div class="col">
            <h2><?php echo $_smarty_tpl->getValue('d')->subject;?>
</h2>
        </div>
        <div class="col text-end">
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/list/" class="btn btn-primary btn-sm" style="margin-bottom: 15px;"><i
                        class="fal fa-long-arrow-left"></i> <?php echo $_smarty_tpl->getValue('_L')['Back to the List'];?>
</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">



            <div class="card border" id="t_options">

                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item active" role="presentation"><a data-bs-toggle="tab" href="javascript:;" class="nav-link active" data-bs-target="#details"><i class="fal fa-th"></i> <?php echo $_smarty_tpl->getValue('_L')['Details'];?>
</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="javascript:;" data-bs-target="#tasks"><i class="fal fa-tasks"></i> <?php echo $_smarty_tpl->getValue('_L')['Tasks'];?>
</a></li>

                    </ul>
                </div>




                <div class="card-body">




                    <div class="tab-content">
                        <div id="details" class="tab-pane fade show active ib-tab-box">


                            <div class="row mt-3">
                                <div class="col">
                                    <div> <?php echo $_smarty_tpl->getValue('_L')['Priority'];?>
:
                                        <?php if ($_smarty_tpl->getValue('d')->urgency == 'Medium' || $_smarty_tpl->getValue('d')->urgency == 'High') {?>
                                            <span class="badge badge-outline text-uppercase badge-outline-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('d')->urgency);?>
</span>
                                        <?php } else { ?>
                                            <span class="badge badge-outline text-uppercase badge-outline-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('d')->urgency);?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div> <?php echo $_smarty_tpl->getValue('_L')['Status'];?>
: <span id="inline_status"><?php echo $_smarty_tpl->getValue('d')->status;?>
</span></div>
                                </div>
                            </div>




                            <hr>
                            <p><strong><?php echo $_smarty_tpl->getValue('_L')['Ticket'];?>
:</strong> <?php echo $_smarty_tpl->getValue('d')->tid;?>
</p>
                            <p><strong><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
:</strong> <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('d')->userid;?>
"><?php echo $_smarty_tpl->getValue('d')->account;?>
</a></p>



                            <hr>




                            <a class="btn btn-primary" href="#" id="add_reply"><?php echo $_smarty_tpl->getValue('_L')['Add Reply'];?>
</a>

                            <?php if ($_smarty_tpl->getValue('can_edit_sales')) {?>
                                <?php if ($_smarty_tpl->getValue('invoice')) {?>
                                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/view/<?php echo $_smarty_tpl->getValue('invoice')->id;?>
" id="add_reply"><?php echo $_smarty_tpl->getValue('_L')['View Invoice'];?>
</a>
                                <?php } else { ?>
                                    <a class="btn btn-success" id="convertToInvoice" href="javascript:;"><?php echo $_smarty_tpl->getValue('_L')['Create Invoice'];?>
</a>
                                <?php }?>
                            <?php }?>


                            <a class="cdelete btn btn-danger" href="#" id="t<?php echo $_smarty_tpl->getValue('d')->id;?>
"><i class="fal fa-trash-alt"></i> </a>

                            <hr>

                            <div class="mb-3">
                                <label for="editable_department"><?php echo $_smarty_tpl->getValue('_L')['Department'];?>
</label>
                                <select class="form-select" id="editable_department" name="editable_department" size="1">
                                    <option value="None">None</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('departments'), 'dep');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('dep')->value) {
$foreach0DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('dep')['id'];?>
" <?php if ($_smarty_tpl->getValue('department') == $_smarty_tpl->getValue('dep')['dname']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('dep')['dname'];?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->getValue('_L')['Assigned to'];?>
</label>
                                <select class="form-select" id="editable_assigned_to" name="editable_assigned_to" size="1">
                                    <option value="None"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads'), 'ad');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ad')->value) {
$foreach1DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('ad')['id'];?>
" <?php if ($_smarty_tpl->getValue('d')->aid == $_smarty_tpl->getValue('ad')['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('ad')['fullname'];?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="editable_status"><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</label>
                                <select class="form-select" id="editable_status" name="editable_status" size="1">
                                    <option value="Open" <?php if ($_smarty_tpl->getValue('d')->status == 'Open') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Open'];?>
</option>
                                    <option value="On Hold" <?php if ($_smarty_tpl->getValue('d')->status == 'On Hold') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['On Hold'];?>
</option>
                                    <option value="Escalated" <?php if ($_smarty_tpl->getValue('d')->status == 'Escalated') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Escalated'];?>
</option>
                                    <option value="Closed" <?php if ($_smarty_tpl->getValue('d')->status == 'Closed') {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Closed'];?>
</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="editable_cc"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</label>
                                <input class="form-control" type="text" id="editable_email" name="editable_email" value="<?php echo $_smarty_tpl->getValue('d')->email;?>
">
                            </div>

                            <div class="mb-3">
                                <label for="editable_cc"><?php echo $_smarty_tpl->getValue('_L')['Cc'];?>
</label>
                                <input class="form-control" type="text" id="editable_cc" name="editable_cc" value="<?php echo $_smarty_tpl->getValue('d')->cc;?>
">
                            </div>

                            <div class="mb-3">
                                <label for="editable_bcc"><?php echo $_smarty_tpl->getValue('_L')['Bcc'];?>
</label>
                                <input class="form-control" type="text" id="editable_bcc" name="editable_bcc" value="<?php echo $_smarty_tpl->getValue('d')->bcc;?>
">
                            </div>

                            <div class="mb-3">
                                <label for="editable_phone"><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
</label>
                                <input class="form-control" type="text" id="editable_phone" name="editable_phone" value="<?php if ($_smarty_tpl->getValue('c')) {
echo $_smarty_tpl->getValue('c')->phone;
}?>">
                            </div>





                            <input type="hidden" name="tid" id="tid" value="<?php echo $_smarty_tpl->getValue('d')->id;?>
">



                            <form>

                                <hr>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Note');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</label>
                                    <textarea class="form-control" name="notes" id="notes" rows="3"><?php echo $_smarty_tpl->getValue('d')->notes;?>
</textarea>
                                </div>

                                <button type="submit" id="btn_save_note" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>

                            </form>


                            <hr>

                            <h4><?php echo $_smarty_tpl->getValue('_L')['Previous Conversations'];?>
</h4>


                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('o_tickets')) > 1) {?>

                                <table class="table table-hover">

                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('o_tickets'), 'o_ticket');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('o_ticket')->value) {
$foreach2DoElse = false;
?>

                                        <?php if ($_smarty_tpl->getValue('o_ticket')['id'] == $_smarty_tpl->getValue('d')->id) {?>
                                            <?php continue 1;?>
                                        <?php }?>

                                        <tr>
                                            <td>
                                                <em><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('o_ticket')['created_at']));?>
</em>
                                                <br>
                                                <p><a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/view/<?php echo $_smarty_tpl->getValue('o_ticket')['id'];?>
"><?php echo $_smarty_tpl->getValue('o_ticket')['subject'];?>
</a></p>
                                                <span class="label label-default inline-block"> <?php echo $_smarty_tpl->getValue('_L')['Status'];?>
: <?php echo $_smarty_tpl->getValue('d')->status;?>
 </span>

                                            </td>
                                        </tr>


                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    </tbody>
                                </table>

                            <?php } else { ?>

                               <span class="mt-3"><?php echo $_smarty_tpl->getValue('_L')['No Data Available'];?>
</span>

                            <?php }?>

                        </div>


                        <div id="tasks" class="tab-pane fade ib-tab-box">


                            <form id="ib_add_group" class="form-horizontal push-10-t push-10" method="post">

                                <div class="mb-3">
                                    <label for="task_subject"><?php echo $_smarty_tpl->getValue('_L')['Task'];?>
</label>
                                    <input class="form-control" type="text" id="task_subject" name="task_subject">
                                </div>



                                <div class="mb-3">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary" id="btn_add_task" type="submit"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                                        <div id="tasks_tools"  style="display: none;">
                                            <hr>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success no-shadow" id="btn_mark_tasks_completed" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Mark as Completed'];?>
"><i class="fal fa-check"></i></button>
                                                <button type="button" class="btn btn-primary no-shadow" id="btn_mark_tasks_not_started" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Mark as Not Started'];?>
"><i class="fal fa-clock"></i></button>
                                                <button type="button" class="btn btn-danger no-shadow" id="btn_delete_tasks" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
"><i class="fal fa-trash-alt"></i></button>
                                            </div>


                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div id="tasks_list">

                            </div>


                        </div>

                    </div>





                </div>

            </div>

        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="create_ticket">


                    <!-- The time line -->
                    <ul class="timeline">
                        <!-- timeline time label -->
                        <li class="time-label">
                  <span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('d')->created_at));?>

                  </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>



                            <?php if ($_smarty_tpl->getValue('d')->admin != '0') {?>
                                <?php if ($_smarty_tpl->getValue('user')['img'] == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('user')['email']);?>
?s=30"
                                         class="img-time-line" alt="<?php echo $_smarty_tpl->getValue('user')['fullname'];?>
">
                                <?php } elseif ($_smarty_tpl->getValue('user')['img'] == '') {?>
                                    <img class="img-time-line" src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/default-user-avatar.png" alt="">
                                <?php } else { ?>
                                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/<?php echo $_smarty_tpl->getValue('user')['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->getValue('user')['account'];?>
">
                                <?php }?>

                            <?php } elseif (($_smarty_tpl->getValue('c'))) {?>

                                <?php if ($_smarty_tpl->getValue('c')->img == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('user')['email']);?>
?s=30"
                                         class="img-time-line" alt="<?php echo $_smarty_tpl->getValue('user')['fullname'];?>
">
                                <?php } elseif ($_smarty_tpl->getValue('c')->img == '') {?>
                                    <img class="img-time-line" src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/default-user-avatar.png" alt="">
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->getValue('c')->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->getValue('user')['account'];?>
">
                                <?php }?>

                            <?php } else { ?>



                            <?php }?>


                            <div class="timeline-item">



                                <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->getValue('d')->account;?>
</a></h3>

                                <div class="timeline-body">
                                    <?php echo $_smarty_tpl->getValue('d')->message;?>

                                    <hr>

                                    <a href="#" class="btn btn-warning t_edit" data-bs-toggle="tooltip"
                                       data-placement="top" title="" data-original-title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
" id="et<?php echo $_smarty_tpl->getValue('d')->id;?>
"><i
                                                class="fal fa-pencil"></i> </a>
                                </div>

                                <?php if (($_smarty_tpl->getValue('d')->attachments) != '') {?>
                                    <div class="timeline-footer">
                                        <?php echo Tickets::gen_link_attachments($_smarty_tpl->getValue('d')->attachments);?>

                                    </div>
                                <?php }?>


                            </div>
                        </li>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('replies'), 'reply');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reply')->value) {
$foreach3DoElse = false;
?>
                            <li class="time-label">
                  <span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('reply')['created_at']));?>

                  </span>
                            </li>
                            <li>


                                <?php if ($_smarty_tpl->getValue('reply')['admin'] != '0') {?>
                                    <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('getAdminImage')($_smarty_tpl->getValue('reply')['admin'],30);?>
" class="img-time-line">
                                <?php } elseif (($_smarty_tpl->getValue('c'))) {?>

                                    <?php if ($_smarty_tpl->getValue('c')->img == '') {?>
                                        <img class="img-time-line" src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/default-user-avatar.png"
                                             alt="">
                                    <?php } else { ?>
                                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/<?php echo $_smarty_tpl->getValue('c')->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->getValue('user')['account'];?>
">
                                    <?php }?>

                                <?php } else { ?>



                                <?php }?>

                                <div class="timeline-item">


                                    <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->getValue('reply')['replied_by'];?>
</a></h3>

                                    <div class="timeline-body" <?php if ($_smarty_tpl->getValue('reply')['reply_type'] == 'internal') {?> style="background: #FFF6D9;" <?php }?>>
                                        <?php echo $_smarty_tpl->getValue('reply')['message'];?>


                                        <hr>

                                        <a href="#" class="btn btn-warning reply_edit"
                                           data-bs-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
" id="er<?php echo $_smarty_tpl->getValue('reply')['id'];?>
"><i
                                                    class="fal fa-pencil"></i> </a> &nbsp;
                                        <a href="#" class="btn btn-danger reply_delete"
                                           data-bs-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
" id="dr<?php echo $_smarty_tpl->getValue('reply')['id'];?>
"><i
                                                    class="fal fa-trash-alt"></i> </a> &nbsp;

                                        <?php if ($_smarty_tpl->getValue('reply')['reply_type'] == 'internal') {?> <a href="#" class="btn btn-primary no-shadow reply_make_public"
                                                                                   data-bs-toggle="tooltip" data-placement="top" title=""
                                                                                   data-original-title="<?php echo $_smarty_tpl->getValue('_L')['Public'];?>
" id="rp<?php echo $_smarty_tpl->getValue('reply')['id'];?>
"><i
                                                    class="fal fa-globe"></i> </a> <?php }?>

                                    </div>

                                    <?php if (($_smarty_tpl->getValue('reply')['attachments']) != '') {?>
                                        <div class="timeline-footer">
                                            <?php echo Tickets::gen_link_attachments($_smarty_tpl->getValue('reply')['attachments']);?>

                                        </div>
                                    <?php }?>


                                </div>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li class="time-label">
                  <span class="bg-green" id="section_add_reply">
                   <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Add Reply');?>

                  </span>
                        </li>
                        <li>
                            <?php if ($_smarty_tpl->getValue('user')['img'] == '') {?>
                                <img class="img-time-line" src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/default-user-avatar.png" alt="">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->getValue('user')['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->getValue('user')['account'];?>
">
                            <?php }?>

                            <div class="timeline-item">


                                <div class="timeline-body">
                                    <form class="form-horizontal push-10-t push-10" method="post">

                                        <ul class="nav nav-pills mb-3"  role="tablist">
                                            <li class="nav-item"><a id="reply_public" class="nav-link active" href="#"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</a></li>
                                            <li class="nav-item"><a id="reply_internal" class="nav-link" href="#"><?php echo $_smarty_tpl->getValue('_L')['Internal'];?>
</a></li>
                                        </ul>

                                        <?php if (!empty($_smarty_tpl->getValue('config')['openai_api_key'])) {?>
                                            <div class="mb-2">
                                                <button class="btn btn-primary" type="button" id="btn_generate_reply"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Generate Reply');?>
</button>
                                            </div>
                                        <?php }?>

                                        <div class="mb-3">
                                            <div class="col-xs-12">

                                            <textarea id="content" class="form-control sysedit"
                                                      name="content"></textarea>
                                                <div class="help-block">
                                                    <a data-bs-toggle="modal" href="#modal_add_item"><i
                                                                class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->getValue('_L')['Attach File'];?>
</a>
                                                    | <a data-bs-toggle="modal" href="#modal_predefined_replies"><i
                                                                class="fal fa-align-left"></i> <?php echo $_smarty_tpl->getValue('_L')['Predefined Reply'];?>
</a>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="mb-3">
                                            <div class="col-xs-12">

                                                <input type="hidden" name="attachments" id="attachments" value="">
                                                <input type="hidden" name="f_tid" id="f_tid" value="<?php echo $_smarty_tpl->getValue('d')->id;?>
">
                                                <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->getValue('d')->userid;?>
">

                                                <button class="btn btn-primary" id="ib_form_submit" type="submit"><i
                                                            class="fal fa-send push-5-r"></i> Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </li>

                        <li>
                            <i class="fal fa-life-ring bg-gray"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->getValue('_L')['Attach File'];?>

                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->getValue('_L')['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->getValue('_L')['Click to Upload'];?>
</span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->getValue('_L')['Close'];?>
</button>
                </div>
            </div>
        </div>
    </div>







    <div id="modal_predefined_replies" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->getValue('_L')['Predefined Replies'];?>
</h5>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover sys_table" id="clx_datatable">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('predefined_replies'), 'predefined_replie');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('predefined_replie')->value) {
$foreach4DoElse = false;
?>
                            <tr>
                                <td><a href="javascript:;" onclick="setPreDefinedContent(event,'<?php echo $_smarty_tpl->getValue('predefined_replie')->id;?>
');"><?php echo $_smarty_tpl->getValue('predefined_replie')->title;?>
</a> </td>
                            </tr>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td>
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1305268250678bf21ddb7986_56151440 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>




    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;
        $(function() {

            var tid = <?php echo $_smarty_tpl->getValue('d')->id;?>
;

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");

            $('#clx_datatable').dataTable(
                {
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



            $('#content').redactor(
                {
                    minHeight: 200,
                }
            );

            var $modal = $('#cloudonex_body');

            var reply_type = 'public';


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "tickets/client/upload_file/",
                    maxFiles: 10,
                    acceptedFiles: "image/jpeg,image/png,image/gif"
                }
            );

            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });


            // Ticket convert to invoice

            $('#convertToInvoice').on('click',function (e) {
                e.preventDefault();

                app.confirm('Are you sure?', function (yes) {
                    if(yes)
                        {
                            window.location = '<?php echo $_smarty_tpl->getValue('_url');?>
invoices/create-from-ticket/<?php echo $_smarty_tpl->getValue('d')->id;?>
';
                        }
                });

            });


            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    // $file_link.val(upload_resp.file);
                    // files.push(upload_resp.file);
                    //
                    // console.log(files);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }







            });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
                $create_ticket.block({ message: block_msg });
                $.post( _url + "tickets/admin/add_reply/", {  message: $('#content').val(), reply_type: reply_type, attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            location.reload();
                        }

                        else {
                            $create_ticket.unblock();
                            toastr.error(data.msg);
                        }

                    });


            });


            $("#add_reply").on('click', function(e) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: $("#section_add_reply").offset().top - 60
                }, 500);



            });

            $('#notes').redactor(
                {
                    minHeight: 150, // pixels
                    plugins: ['fontcolor']
                }
            );

            $("#btn_save_note").on('click', function(e) {
                e.preventDefault();

                $('#t_options').block({ message: null });

                $.post(base_url + 'tickets/admin/save_note', {
                    tid: $('#tid').val(),

                    notes: $('#notes').val()

                })
                    .done(function () {
                        toastr.success(_L['Saved Successfully']);
                        $('#t_options').unblock();

                    });

            });

            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/delete/" + id;
                    }
                });
            });


            $(".t_edit").click(function (e) {
                e.preventDefault();
                var id = this.id;


                $.fancybox.open({
                    src  : base_url + 'tickets/admin/edit_modal/'+id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#edit_content').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }
                });

            });


            $(".reply_edit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  : base_url + 'tickets/admin/edit_modal/'+id+'/reply',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#edit_content').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });


            });



            $('[data-bs-toggle="tooltip"]').tooltip();

            // $modal.on('hidden.bs.modal', function () {
            //     location.reload();
            // });

            $modal.on('click', '.update_ticket_message', function(e){

                e.preventDefault();


                $.post( _url + "tickets/admin/edit_modal_post/", {
                    tid: $('#edit_tid').val(),
                    type: $('#edit_type').val(),
                    message:  $('#edit_content').val(),

                })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $(".reply_delete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/delete_reply/" + id;
                    }
                });
            });






            $("#editable_cc").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_cc',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_bcc").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_bcc',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_email").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_email',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_phone").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_phone',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_hour").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_hour',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });

            $("#editable_minute").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_minute',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_department").on("change",function(e){
                $.post(base_url + 'tickets/admin/update_department',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $('#editable_assigned_to').select2({

            })
                .on("change", function (e) {

                    $.post(base_url + 'tickets/admin/update_assigned_to',{
                        id: <?php echo $_smarty_tpl->getValue('d')->id;?>
, value: $("#editable_assigned_to option:selected").val()
                    },function (data) {
                        if ($.isNumeric(data)) {

                            toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                        }

                        else {

                            toastr.error(data);
                        }
                    })
                });


            // $("#editable_assigned_to").on("change",function(e){
            //
            // });

            $("#editable_status").on("change",function(e){
                $.post(base_url + 'tickets/admin/update_status',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->getValue('_L')['Saved Successfully'];?>
');

                        $("#inline_status").html($("#editable_status option:selected").text());

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });





            var $reply_public = $("#reply_public");
            var $reply_internal = $("#reply_internal");


            $reply_public.click(function (e) {
                e.preventDefault();
                $(this).addClass('active');
                $reply_internal.removeClass('active');
                reply_type = 'public';
                $('#content').closest('.redactor-box').find('.redactor-editor').css({
                    backgroundColor: '#FFFFFF'
                });
            });


            $reply_internal.click(function (e) {
                e.preventDefault();
                $(this).addClass('active');
                $reply_public.removeClass('active');
                reply_type = 'internal';
                $('#content').closest('.redactor-box').find('.redactor-editor').css({
                    backgroundColor: '#FFF6D9'
                });
            });


            $(".reply_make_public").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/reply_make_public/" + id;
                    }
                });
            });

            function loadTasks() {

                $("#tasks_list").html(block_msg);

                $.get( base_url + "tickets/admin/tasks_list/<?php echo $_smarty_tpl->getValue('ticket')->id;?>
", function( data ) {

                    $("#tasks_list").html(data);



                    $('.task-checkbox').on('change', function (event) {


                        var i_check_id = $(this)[0].id;

                        if($(this)[0].checked){

                            $.get(base_url + 'tickets/admin/set_task_completed/'+i_check_id,function () {
                                loadTasks();
                            });

                        }
                        else{

                            $.get(base_url + 'tickets/admin/set_task_not_started/'+i_check_id,function () {
                                loadTasks();
                            });

                        }

                    });

                });
            }


            loadTasks();


            $("#btn_add_task").click(function (e) {
                e.preventDefault();


                if($("#task_subject").val() == ''){

                    $("#task_subject").focus();

                }

                else {

                    $("#btn_add_task").prop('disabled', true);

                    $.post( base_url + "tasks/post/", { title: $("#task_subject").val(), rel_type: 'Ticket', tid: '<?php echo $_smarty_tpl->getValue('ticket')->id;?>
', rel_id: '<?php echo $_smarty_tpl->getValue('ticket')->id;?>
', cid: <?php echo $_smarty_tpl->getValue('ticket')->userid;?>
, priority: '<?php echo $_smarty_tpl->getValue('ticket')->urgency;?>
' })
                        .done(function( data ) {

                            $("#btn_add_task").prop('disabled', false);

                            if ($.isNumeric(data)) {

                                $("#task_subject").val('');

                                loadTasks();

                            }
                            else{
                                toastr.error(data);
                            }

                        });

                }
            });

            var task_id;

            function has_selected_task_items() {
                if($('.selected').length > 0){

                    $("#tasks_tools").show(200);

                }
                else{
                    $("#tasks_tools").hide(200);
                }
            }

            $("#tasks_list").on('click', '.task_item', function () {

                task_id = this.id;



                if($("#" + task_id).hasClass('selected')){
                    $("#" + task_id).removeClass('selected');
                }
                else{
                    $("#" + task_id).addClass('selected');
                }

                has_selected_task_items();


                // alert(task_id);


            });

            $("#btn_mark_tasks_completed").on('click',function (e) {
                e.preventDefault();
                var arrayOfIds = $.map($(".selected"), function(n, i){
                    return n.id;
                });

                $("#btn_mark_tasks_completed").prop('disabled', true);

                $.post( base_url + "tickets/admin/do_task/", { action: 'completed', ids: arrayOfIds })
                    .done(function( data ) {

                        $("#btn_mark_tasks_completed").prop('disabled', false);

                        loadTasks();

                        $("#tasks_tools").hide(200);

                    });

            });


            $("#btn_mark_tasks_not_started").on('click',function (e) {
                e.preventDefault();
                var arrayOfIds = $.map($(".selected"), function(n, i){
                    return n.id;
                });

                $("#btn_mark_tasks_completed").prop('disabled', true);

                $.post( base_url + "tickets/admin/do_task/", { action: 'not_started', ids: arrayOfIds })
                    .done(function( data ) {

                        $("#btn_mark_tasks_completed").prop('disabled', false);

                        loadTasks();

                        $("#tasks_tools").hide(200);

                    });

            });


            $("#btn_delete_tasks").on('click',function (e) {
                e.preventDefault();

                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var arrayOfIds = $.map($(".selected"), function(n, i){
                            return n.id;
                        });

                        $("#btn_delete_tasks").prop('disabled', true);

                        $.post( base_url + "tickets/admin/do_task/", { action: 'delete', ids: arrayOfIds })
                            .done(function( data ) {

                                $("#btn_delete_tasks").prop('disabled', false);

                                loadTasks();

                                $("#tasks_tools").hide(200);

                            });
                    }
                });



            });





        });

        function setPreDefinedContent(event,predefined_reply_id) {

            $('#modal_predefined_replies').modal('hide');

            $.get( "<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/get-predefined-reply/" + predefined_reply_id, function( data ) {

                $('#content').redactor('code.set', data);

            });

        }

        window.addEventListener('DOMContentLoaded', () => {
            const btn_generate_reply = document.getElementById('btn_generate_reply');

            btn_generate_reply.addEventListener('click', () => {

                btn_generate_reply.disabled = true;
                btn_generate_reply.innerHTML = '<i class="fal fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Generating');?>
...';
                let generate_reply_form = new FormData();
                generate_reply_form.append('ticket_id', <?php echo $_smarty_tpl->getValue('ticket')->id;?>
);
                axios.post('<?php echo $_smarty_tpl->getValue('base_url');?>
tickets/admin/generate-reply', generate_reply_form).then(function (response) {
                    $('#content').redactor('code.set', response.data);
                    btn_generate_reply.disabled = false;
                    btn_generate_reply.innerHTML = '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Generate Reply');?>
';
                }).catch(function (error) {
                    console.log(error);
                    btn_generate_reply.disabled = false;
                    btn_generate_reply.innerHTML = '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Generate Reply');?>
';
                });

            });
        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
