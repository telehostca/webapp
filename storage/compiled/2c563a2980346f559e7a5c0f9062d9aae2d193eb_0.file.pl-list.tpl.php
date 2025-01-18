<?php
/* Smarty version 4.3.2, created on 2023-08-23 08:25:51
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/pl-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e5facf112018_45198407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c563a2980346f559e7a5c0f9062d9aae2d193eb' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/pl-list.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e5facf112018_45198407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96313138764e5facf0f96c2_04835775', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36257496964e5facf110ce8_41204563', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_96313138764e5facf0f96c2_04835775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96313138764e5facf0f96c2_04835775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-4">
            <div class="row">

                <div class="col-md-12">

                    <div class="panel" id="uploading_inside">
                        <div class="panel-container">
                            <div class="panel-content">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugin_upload/" class="dropzone" id="upload_container">

                                    <div class="dz-message">
                                        <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_drop_help'];?>
</h3>
                                        <br />
                                        <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_upload_help'];?>
</span>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-hdr">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</h2>

                                </div>
                                <div class="panel-container">
                                    <div class="panel-content">
                                        <div class="project-list mt-md">
                                            <div id="progressbar">
                                            </div>

                                            <div id="application_ajaxrender">
                                                <table class="table table-striped">
                                                    <tbody>

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                        <tr>
                                                            <td>
                                                                <img class="img-thumbnail" style="max-height: 64px;" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['icon_url'];?>
">
                                                            </td>
                                                            <td>


                                                                <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>

                                                                <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['description'])) {?>

                                                                    <div class="mb-3">
                                                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>

                                                                    </div>

                                                                <?php }?>

                                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Active') {?>
                                                                    <span class="badge badge-success">Active</span>
                                                                <?php }?>



                                                                <div>

                                                                    <div class="hr-line-dashed"></div>


                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['buttons'])) {?>

                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['buttons'], 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
"
                                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['class'])) {?>
                                                                                        class="<?php echo $_smarty_tpl->tpl_vars['button']->value['class'];?>
"
                                                                                    <?php } else { ?>
                                                                                        class="mr-1 btn btn-primary"
                                                                                    <?php }?>


                                                                            >
                                                                                <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['icon'])) {?>
                                                                                    <i class="<?php echo $_smarty_tpl->tpl_vars['button']->value['icon'];?>
"></i>
                                                                                <?php } elseif ((!empty($_smarty_tpl->tpl_vars['button']->value['text']))) {?>
                                                                                    <?php echo $_smarty_tpl->tpl_vars['button']->value['text'];?>

                                                                                <?php }?>

                                                                            </a>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                                                    <?php }?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Not Installed') {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_install/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-primary me-2">Install</a>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_delete/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-danger me-2"><?php echo __('Delete');?>
</a>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Active') {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_deactivate/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-warning me-2">Deactivate</a>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Inactive') {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_activate/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-success me-2">Activate</a>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_uninstall/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-danger me-2">Uninstall</a>
                                                                    <?php }?>



                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['url'])) {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" target="_blank" class="btn btn-primary btn-icon waves-effect waves-themed">
                                                                            <i class="fal fa-external-link"></i>
                                                                        </a>
                                                                    <?php }?>

                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-8">

            <h2 class="mb-4">Discover Plugins</h2>

            <?php if (!empty($_smarty_tpl->tpl_vars['marketplace_plugins']->value['items'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marketplace_plugins']->value['items'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                    <article class="card border-0 shadow-sm overflow-hidden mb-4">
                        <div class="row g-0">
                            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['marketplace_plugins']->value['image_processing_url'];?>
/items/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
?tr=h-300); min-height: 15rem;">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="badge fs-sm bg-success"><?php echo $_smarty_tpl->tpl_vars['item']->value['price_formatted'];?>
</span>
                                        <span class="fs-sm text-muted border-start ps-3 ms-3">Plugin</span>
                                    </div>
                                    <h3 class="h4">
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                    </h3>

                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['sales_short_description'];?>
</p>
                                    <hr class="my-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>

                                        </div>
                                        <div class="d-flex align-items-center">

                                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['marketplace_plugins']->value['base_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="btn btn-primary">View</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

        </div>

    </div>

    <input type="hidden" id="_msg_unzipping" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Unzipping'];?>
 ...">
    <input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_36257496964e5facf110ce8_41204563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_36257496964e5facf110ce8_41204563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function() {
            var _url = $("#_url").val();
            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "settings/plugin_upload/",
                    maxFiles: 1,
                    acceptedFiles: ".zip"
                }
            );

            //ib_file.on("addedfile", function(file) {
            //
            //});

            ib_file.on("success", function(file) {

                var _msg_unzipping = $('#_msg_unzipping').val();
                $('#uploading_inside').block({
                    message: "<h3>" + _msg_unzipping +"</h3>" ,
                    css: {
                        padding:        0,
                        margin:         0,
                        width:          '30%',
                        top:            '40%',
                        left:           '35%',
                        textAlign:      'center',
                        color:          '#FFFFFF',
                        border:         '0',
                        backgroundColor:'transparent',
                        cursor:         'wait'
                    }
                });
                //   $('#uploading_inside').block({ message: null });

                var _url = $("#_url").val();
                $.post(_url + 'settings/plugin_unzip/', {

                    name: file.name

                })
                    .done(function (data) {

                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    });
            });



            $(".c_uninstall").click(function (e) {
                e.preventDefault();
                var _msg_are_you_sure = $('#_msg_are_you_sure').val();
                var to_url = this.href;
                app.confirm(_msg_are_you_sure, function(result) {
                    if(result == true){
                        window.location = to_url;
                    }
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
