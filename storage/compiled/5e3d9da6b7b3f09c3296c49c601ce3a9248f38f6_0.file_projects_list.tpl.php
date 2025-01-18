<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:07
  from 'file:../default/projects_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15770981c0_53439065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e3d9da6b7b3f09c3296c49c601ce3a9248f38f6' => 
    array (
      0 => '../default/projects_list.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15770981c0_53439065 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_959115763675e1577073a47_54972607', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1947592158675e15770752f0_16697332', "content");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_333556108675e1577097651_65822353', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_959115763675e1577073a47_54972607 extends \Smarty\Runtime\Block
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
class Block_1947592158675e15770752f0_16697332 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M8.40093151,17 L5,17 C3.34314575,17 2,15.1568542 2,13.5 C2,11.8431458 3.34314575,10 5,10 L6,10 L6,8 L21,8 L21,11.5 C21,15.6421356 17.6421356,19 13.5,19 C11.5309185,19 9.73907026,18.2411745 8.40093151,17 Z M6.86504659,15 C6.38614142,14.0940164 6.08736465,13.0781211 6.01640228,12 L5,12 C4.44771525,12 4,12.9477153 4,13.5 C4,14.0522847 4.44771525,15 5,15 L6.86504659,15 Z" fill="#000000"/>
                        <rect fill="#000000" opacity="0.3" x="6" y="21" width="15" height="2" rx="1"/>
                        <path d="M8.11576273,0 L9.27322553,1.15267194 C8.41777098,2.01168201 8.42065331,3.40153019 9.27966338,4.25698473 C9.35322262,4.3302395 9.4318859,4.39818368 9.51506091,4.46030566 L10,4.82249831 L9.02250371,6.13126634 L8.53756462,5.76907368 C8.39249331,5.66072242 8.25529121,5.54221626 8.12699144,5.41444753 C6.62873232,3.92238985 6.62370505,1.49825912 8.11576273,0 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M13.1157627,1 L14.2732255,2.15267194 C13.417771,3.01168201 13.4206533,4.40153019 14.2796634,5.25698473 C14.3532226,5.3302395 14.4318859,5.39818368 14.5150609,5.46030566 L15,5.82249831 L14.0225037,7.13126634 L13.5375646,6.76907368 C13.3924933,6.66072242 13.2552912,6.54221626 13.1269914,6.41444753 C11.6287323,4.92238985 11.6237051,2.49825912 13.1157627,1 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M18.1157627,0 L19.2732255,1.15267194 C18.417771,2.01168201 18.4206533,3.40153019 19.2796634,4.25698473 C19.3532226,4.3302395 19.4318859,4.39818368 19.5150609,4.46030566 L20,4.82249831 L19.0225037,6.13126634 L18.5375646,5.76907368 C18.3924933,5.66072242 18.2552912,5.54221626 18.1269914,5.41444753 C16.6287323,3.92238985 16.6237051,1.49825912 18.1157627,0 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                    </g>
                </svg>

            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Projects');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <span class='fw-300'></span>
        </h1>

        <div class="subheader-block d-lg-flex align-items-center">
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
projects/project-table" class="btn btn-primary me-2"><i class="fal fa-list"></i></a>
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
projects/project" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Create New Project');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</a>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">


                <div class="row">

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('projects'), 'project');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('project')->value) {
$foreach0DoElse = false;
?>

                        <div class="col-lg-4">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="">

                                            <div class="d-flex justify-content-between">
                                                <h3><span class="h4"><?php echo $_smarty_tpl->getValue('project')->name;?>
</span></h3>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                                <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" style="">

                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('_url');?>
projects/view/<?php echo $_smarty_tpl->getValue('project')->id;?>
"><?php echo $_smarty_tpl->getValue('_L')['View'];?>
</a>

                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('_url');?>
projects/project/<?php echo $_smarty_tpl->getValue('project')->id;?>
"><?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>
                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('_url');?>
projects/delete/<?php echo $_smarty_tpl->getValue('project')->id;?>
"><?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>

                                                    </div>
                                                </div>
                                            </div>



                                            <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                                <?php if ($_smarty_tpl->getValue('project')->contact_id && (null !== ($_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('project')->contact_id] ?? null))) {?>
                                                    <?php echo $_smarty_tpl->getValue('contacts')[$_smarty_tpl->getValue('project')->contact_id]->account;?>

                                                <?php }?></p>


                                            <?php if ($_smarty_tpl->getValue('project')->status == 'Completed') {?>
                                                <span class="badge badge-outline text-uppercase badge-outline-success mb-4"><?php echo $_smarty_tpl->getValue('project')->status;?>
</span>
                                                <?php } else { ?>
                                                <span class="badge badge-outline text-uppercase badge-outline-danger mb-4"><?php echo $_smarty_tpl->getValue('project')->status;?>
</span>
                                            <?php }?>




                                            <?php if ($_smarty_tpl->getValue('project')->budget) {?>
                                                <p class="mb-2">Budget: <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('project')->budget,$_smarty_tpl->getValue('project')->currency);?>
</span></p>
                                            <?php }?>




                                            <p class="text-muted mb-4"><?php echo $_smarty_tpl->getValue('project')->summary;?>
</p>


                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="mb-2">
                                                        <i class="fal fa-calendar"></i> <strong><span><?php echo $_smarty_tpl->getValue('_L')['Start Date'];?>
</span></strong>
                                                    </div>
                                                    <span class="badge badge-outline text-uppercase badge-outline-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('project')->start_date));?>
</span>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-2">
                                                        <i class="fal fa-calendar"></i> <strong><?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
</strong>
                                                    </div>
                                                    <span class="badge badge-outline text-uppercase badge-outline-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('project')->due_date));?>
</span>
                                                </div>
                                            </div>



                                            <?php if ($_smarty_tpl->getValue('project')->members) {?>
                                                <div class="fs-sm d-flex align-items-center my-3">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('project')->members), 'member');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('member')->value) {
$foreach1DoElse = false;
?>
                                                        <?php if ((null !== ($_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('member')] ?? null))) {?>
                                                            <a href="javascript:;" class="btn-m-s user-stacked">

                                                                <?php if ($_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('member')]->img) {?>
                                                                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/<?php ob_start();
echo $_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('member')]->img;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" class="profile-image rounded-circle" alt="<?php ob_start();
echo $_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('member')]->fullname;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">
                                                                <?php } else { ?>
                                                                    <span class="clx-avatar"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sp_get_contact_image')($_smarty_tpl->getValue('staffs')[$_smarty_tpl->getValue('member')]);?>
</span>
                                                                <?php }?>

                                                            </a>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>


                                            <?php if ((null !== ($_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id] ?? null))) {?>

                                                <p class="mb-2 font-weight-semibold"><?php echo round((float) ($_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id]['completed']*100)/$_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id]['total'], (int) 0, (int) 1);?>
% <?php echo $_smarty_tpl->getValue('_L')['tasks completed'];?>
. <span class="float-right">
                                                    <?php echo $_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id]['completed'];?>
/<?php echo $_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id]['total'];?>
</span></p>


                                                <div class="progress mb-3" style="height: 7px;">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round((float) ($_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id]['completed']*100)/$_smarty_tpl->getValue('tasks_status')[$_smarty_tpl->getValue('project')->id]['total'], (int) 0, (int) 1);?>
%;">
                                                    </div>
                                                </div>

                                            <?php }?>










                                        </div>




                                </div>



                            </div>

                        </div>

                        <?php
}
if ($foreach0DoElse) {
?>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h2><?php echo $_smarty_tpl->getValue('_L')['No Data Available'];?>
</h2>
                                </div>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                </div>































            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_333556108675e1577097651_65822353 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>




    <?php echo '<script'; ?>
>


        $(function () {




        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
