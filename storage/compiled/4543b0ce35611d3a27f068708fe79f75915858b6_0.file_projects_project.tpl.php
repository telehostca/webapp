<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:09
  from 'file:../default/projects_project.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15799adc57_16541693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4543b0ce35611d3a27f068708fe79f75915858b6' => 
    array (
      0 => '../default/projects_project.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15799adc57_16541693 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_844542653675e157997ab43_96117029', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_564438538675e157997c3c1_28364035', "content");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1895998473675e15799ac0f8_64939741', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_844542653675e157997ab43_96117029 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


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

    </style>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_564438538675e157997c3c1_28364035 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="mx-auto" style="max-width: 800px; width: 100%;">


        <div class="row">
            <div class="col-md-12">
                <div class="panel" id="clx_form_box">
                    <div class="panel-hdr">
                        <?php if ($_smarty_tpl->getValue('project')) {?>
                            <h2><span class="h5"><?php echo $_smarty_tpl->getValue('project')->name;?>
</span></h2>
                        <?php } else { ?>
                            <h2><?php echo $_smarty_tpl->getValue('_L')['Create New Project'];?>
</h2>
                        <?php }?>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <form method="post" id="mainForm" action="<?php echo $_smarty_tpl->getValue('_url');?>
projects/project-save">


                                <div class="mb-3">
                                    <label for="inputName"><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</label>
                                    <input class="form-control" name="name" required id="inputName" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->getValue('_L')['This field is required'];?>
" <?php if ($_smarty_tpl->getValue('project')) {?>value="<?php echo $_smarty_tpl->getValue('project')->name;?>
"<?php }?> >
                                </div>


                                <div class="mb-3">
                                    <textarea class="form-control" maxlength="255" name="summary" placeholder="<?php echo $_smarty_tpl->getValue('_L')['Summary'];?>
..." rows="3"><?php if ($_smarty_tpl->getValue('project')) {
echo $_smarty_tpl->getValue('project')->summary;
}?></textarea>
                                </div>


                                <div class="row mb-3">

                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('has_access')($_smarty_tpl->getValue('user')->roleid,'projects','all_data')) {?>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="admin_id"><?php echo $_smarty_tpl->getValue('_L')['Owner'];?>
</label>
                                                <select class="form-select" id="admin_id" name="admin_id">
                                                    <option value="0"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'staff');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('staff')->value) {
$foreach0DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('staff')->id;?>
"
                                                                <?php if ($_smarty_tpl->getValue('project')) {?>
                                                                    <?php if (!empty($_smarty_tpl->getValue('project')->admin_id) && ($_smarty_tpl->getValue('staff')->id == $_smarty_tpl->getValue('project')->admin_id)) {?>
                                                                        selected

                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->getValue('user')->id == $_smarty_tpl->getValue('staff')->id) {?>
                                                                        selected
                                                                    <?php }?>
                                                                <?php }?>
                                                        ><?php echo $_smarty_tpl->getValue('staff')->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>

                                    <?php }?>


                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="project_manager_id"><?php echo $_smarty_tpl->getValue('_L')['Project Manager'];?>
</label>
                                            <select class="form-select" id="project_manager_id" name="project_manager_id">
                                                <option value="0"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'staff');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('staff')->value) {
$foreach1DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('staff')->id;?>
"
                                                    <?php if (!empty($_smarty_tpl->getValue('project')->project_manager_id) && ($_smarty_tpl->getValue('staff')->id == $_smarty_tpl->getValue('project')->project_manager_id)) {?>
                                                        selected

                                                    <?php }?>
                                                    ><?php echo $_smarty_tpl->getValue('staff')->fullname;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="contact_id"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</label>
                                            <select class="form-select" id="contact_id" name="contact_id">
                                                <option value="0"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contacts'), 'contact');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('contact')->value) {
$foreach2DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('contact')->id;?>
"
                                                            <?php if (!empty($_smarty_tpl->getValue('project')->contact_id) && ($_smarty_tpl->getValue('contact')->id == $_smarty_tpl->getValue('project')->contact_id)) {?>
                                                                selected

                                                            <?php }?>
                                                    ><?php echo $_smarty_tpl->getValue('contact')->account;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>
                                                <?php echo $_smarty_tpl->getValue('_L')['Start Date'];?>

                                                </label>
                                            <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y-m-d');?>
" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
</label>
                                            <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y-m-d',$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')('+15 days'));?>
" name="due_date" id="due_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</label>
                                            <select class="form-select" name="billing_type" id="billing_type">
                                                <option value="Internal Project" <?php if ($_smarty_tpl->getValue('project') && $_smarty_tpl->getValue('project')->billing_type == 'Internal Project') {?> selected<?php }?>>Internal Project</option>
                                                <option value="Hourly Rate" <?php if ($_smarty_tpl->getValue('project') && $_smarty_tpl->getValue('project')->billing_type == 'Hourly Rate') {?> selected<?php }?>>Hourly Rate</option>
                                                <option value="Fixed Rate" <?php if ($_smarty_tpl->getValue('project') && $_smarty_tpl->getValue('project')->billing_type == 'Fixed Rate') {?> selected<?php }?>>Fixed Rate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Status</label>
                                            <select class= "form-control" name="status" id="status">
                                                <option value="Draft" <?php if ($_smarty_tpl->getValue('project') && $_smarty_tpl->getValue('project')->status == 'Draft') {?> selected<?php }?>>Draft</option>
                                                <option value="Started" <?php if ($_smarty_tpl->getValue('project') && $_smarty_tpl->getValue('project')->status == 'Started') {?> selected<?php }?>>Started</option>
                                                <option value="Completed" <?php if ($_smarty_tpl->getValue('project') && $_smarty_tpl->getValue('project')->status == 'Completed') {?> selected<?php }?>>Completed</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="team_members"><?php echo $_smarty_tpl->getValue('_L')['Team Members'];?>
</label>
                                            <select class="form-select" id="team_members" name="team_members[]" multiple="multiple">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'staff');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('staff')->value) {
$foreach3DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('staff')->id;?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('staff')->id,$_smarty_tpl->getValue('members'))) {?>selected<?php }?> ><?php echo $_smarty_tpl->getValue('staff')->fullname;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="currency"><?php echo $_smarty_tpl->getValue('_L')['Currency'];?>
</label>
                                            <select id="currency" name="currency" class="form-control">

                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach4DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('currency')['iso_code'];?>
" <?php if ($_smarty_tpl->getValue('config')['home_currency'] == $_smarty_tpl->getValue('currency')['iso_code']) {?>selected<?php }?>
                                                            <?php if ((null !== ($_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')['iso_code']] ?? null))) {?>
                                                        data-a-sign="<?php echo $_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                            <?php }?>><?php echo $_smarty_tpl->getValue('currency')['iso_code'];?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->getValue('_L')['Budget'];?>
</label>
                                            <input class="form-control" name="budget" id="budget">
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="content"><?php echo $_smarty_tpl->getValue('_L')['Details'];?>
</label>
                                    <textarea id="content" class="form-control" name="description" rows="10"><?php if ($_smarty_tpl->getValue('project')) {
echo $_smarty_tpl->getValue('project')->description;
}?></textarea>
                                </div>





                                <div class="mb-3">

                                    <?php if ($_smarty_tpl->getValue('project')) {?>
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('project')->id;?>
">
                                    <?php } else { ?>
                                        <input type="hidden" name="id" value="">
                                    <?php }?>

                                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                                </div>

                            </form>
                        </div>



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
class Block_1895998473675e15799ac0f8_64939741 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>




    <?php echo '<script'; ?>
>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            $('#content').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );

            $("#contact_id").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#project_manager_id").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $('#team_members').select2();

            $('[data-toggle="datepicker"]').datepicker();

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('<?php echo $_smarty_tpl->getValue('_url');?>
projects/project-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            window.location = '<?php echo $_smarty_tpl->getValue('_url');?>
projects';
                        }).fail(function(data) {
                        $('#clx_form_box').unblock();
                        spNotify(data.responseText,'error');
                    });
                }

            });



        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
