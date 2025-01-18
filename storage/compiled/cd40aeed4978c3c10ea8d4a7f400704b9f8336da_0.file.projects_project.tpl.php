<?php
/* Smarty version 4.3.2, created on 2023-09-10 08:23:28
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/projects_project.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fdb54091c235_88171703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd40aeed4978c3c10ea8d4a7f400704b9f8336da' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/projects_project.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fdb54091c235_88171703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158100286364fdb5408fbcc0_36585008', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30762975764fdb5408fcda4_89074781', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32852524164fdb54091b000_16122642', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_158100286364fdb5408fbcc0_36585008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_158100286364fdb5408fbcc0_36585008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
class Block_30762975764fdb5408fcda4_89074781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30762975764fdb5408fcda4_89074781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="max-width: 800px; width: 100%;">


        <div class="row">
            <div class="col-md-12">
                <div class="panel" id="clx_form_box">
                    <div class="panel-hdr">
                        <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                            <h2><span class="h5"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</span></h2>
                        <?php } else { ?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Project'];?>
</h2>
                        <?php }?>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <form method="post" id="mainForm" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project-save">


                                <div class="mb-3">
                                    <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                    <input class="form-control" name="name" required id="inputName" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
"<?php }?> >
                                </div>


                                <div class="mb-3">
                                    <textarea class="form-control" maxlength="255" name="summary" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
..." rows="3"><?php if ($_smarty_tpl->tpl_vars['project']->value) {
echo $_smarty_tpl->tpl_vars['project']->value->summary;
}?></textarea>
                                </div>


                                <div class="row mb-3">

                                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'projects','all_data')) {?>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="admin_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</label>
                                                <select class="form-select" id="admin_id" name="admin_id">
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['project']->value->admin_id) && ($_smarty_tpl->tpl_vars['staff']->value->id == $_smarty_tpl->tpl_vars['project']->value->admin_id)) {?>
                                                                        selected

                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['staff']->value->id) {?>
                                                                        selected
                                                                    <?php }?>
                                                                <?php }?>
                                                        ><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>

                                    <?php }?>


                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="project_manager_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Project Manager'];?>
</label>
                                            <select class="form-select" id="project_manager_id" name="project_manager_id">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['project']->value->project_manager_id) && ($_smarty_tpl->tpl_vars['staff']->value->id == $_smarty_tpl->tpl_vars['project']->value->project_manager_id)) {?>
                                                        selected

                                                    <?php }?>
                                                    ><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="contact_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                            <select class="form-select" id="contact_id" name="contact_id">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['project']->value->contact_id) && ($_smarty_tpl->tpl_vars['contact']->value->id == $_smarty_tpl->tpl_vars['project']->value->contact_id)) {?>
                                                                selected

                                                            <?php }?>
                                                    ><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>

                                                </label>
                                            <input type="text" class="form-control"  value="<?php echo date('Y-m-d');?>
" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</label>
                                            <input type="text" class="form-control"  value="<?php echo date('Y-m-d',strtotime('+15 days'));?>
" name="due_date" id="due_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                                            <select class="form-select" name="billing_type" id="billing_type">
                                                <option value="Internal Project" <?php if ($_smarty_tpl->tpl_vars['project']->value && $_smarty_tpl->tpl_vars['project']->value->billing_type == 'Internal Project') {?> selected<?php }?>>Internal Project</option>
                                                <option value="Hourly Rate" <?php if ($_smarty_tpl->tpl_vars['project']->value && $_smarty_tpl->tpl_vars['project']->value->billing_type == 'Hourly Rate') {?> selected<?php }?>>Hourly Rate</option>
                                                <option value="Fixed Rate" <?php if ($_smarty_tpl->tpl_vars['project']->value && $_smarty_tpl->tpl_vars['project']->value->billing_type == 'Fixed Rate') {?> selected<?php }?>>Fixed Rate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Status</label>
                                            <select class= "form-control" name="status" id="status">
                                                <option value="Draft" <?php if ($_smarty_tpl->tpl_vars['project']->value && $_smarty_tpl->tpl_vars['project']->value->status == 'Draft') {?> selected<?php }?>>Draft</option>
                                                <option value="Started" <?php if ($_smarty_tpl->tpl_vars['project']->value && $_smarty_tpl->tpl_vars['project']->value->status == 'Started') {?> selected<?php }?>>Started</option>
                                                <option value="Completed" <?php if ($_smarty_tpl->tpl_vars['project']->value && $_smarty_tpl->tpl_vars['project']->value->status == 'Completed') {?> selected<?php }?>>Completed</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="team_members"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Team Members'];?>
</label>
                                            <select class="form-select" id="team_members" name="team_members[]" multiple="multiple">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['staff']->value->id,$_smarty_tpl->tpl_vars['members']->value)) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>
                                            <select id="currency" name="currency" class="form-control">

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>selected<?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]))) {?>
                                                        data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                            <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Budget'];?>
</label>
                                            <input class="form-control" name="budget" id="budget">
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Details'];?>
</label>
                                    <textarea id="content" class="form-control" name="description" rows="10"><?php if ($_smarty_tpl->tpl_vars['project']->value) {
echo $_smarty_tpl->tpl_vars['project']->value->description;
}?></textarea>
                                </div>





                                <div class="mb-3">

                                    <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                                    <?php } else { ?>
                                        <input type="hidden" name="id" value="">
                                    <?php }?>

                                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
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
class Block_32852524164fdb54091b000_16122642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_32852524164fdb54091b000_16122642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
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
