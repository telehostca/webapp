<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:02
  from 'file:../default/pl-list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e169e314b95_92831630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0058d2167fa86827f2a9e445b40e001295a721ae' => 
    array (
      0 => '../default/pl-list.tpl',
      1 => 1734219420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e169e314b95_92831630 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1667359088675e169e2fd4c4_98362987', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1357039726675e169e3134b9_73303874', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1667359088675e169e2fd4c4_98362987 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-12">

                    <div class="panel" id="uploading_inside">
                        <div class="panel-container">
                            <div class="panel-content">
                                <form action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/plugin_upload/" class="dropzone" id="upload_container">

                                    <div class="dz-message">
                                        <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->getValue('_L')['plugin_drop_help'];?>
</h3>
                                        <br />
                                        <span class="note"><?php echo $_smarty_tpl->getValue('_L')['plugin_upload_help'];?>
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
                                    <h2><?php echo $_smarty_tpl->getValue('_L')['Plugins'];?>
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
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('plugins'), 'value', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                                                        <tr>
                                                            <td>
                                                                <img class="img-thumbnail" style="max-height: 64px;" src="<?php echo $_smarty_tpl->getValue('value')['icon_url'];?>
">
                                                            </td>
                                                            <td>


                                                                <h5><?php echo $_smarty_tpl->getValue('value')['name'];?>
</h5>

                                                                <?php if (!empty($_smarty_tpl->getValue('value')['description'])) {?>

                                                                    <div class="mb-3">
                                                                        <?php echo $_smarty_tpl->getValue('value')['description'];?>

                                                                    </div>

                                                                <?php }?>

                                                                <?php if ($_smarty_tpl->getValue('value')['status'] === 'Active') {?>
                                                                    <span class="badge badge-success">Active</span>
                                                                <?php }?>



                                                                <div>

                                                                    <div class="hr-line-dashed"></div>


                                                                    <?php if (!empty($_smarty_tpl->getValue('value')['buttons'])) {?>

                                                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('value')['buttons'], 'button');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('button')->value) {
$foreach1DoElse = false;
?>
                                                                            <a href="<?php echo $_smarty_tpl->getValue('base_url');
echo $_smarty_tpl->getValue('button')['link'];?>
"
                                                                                    <?php if (!empty($_smarty_tpl->getValue('button')['class'])) {?>
                                                                                        class="<?php echo $_smarty_tpl->getValue('button')['class'];?>
"
                                                                                    <?php } else { ?>
                                                                                        class="mr-1 btn btn-primary"
                                                                                    <?php }?>


                                                                            >
                                                                                <?php if (!empty($_smarty_tpl->getValue('button')['icon'])) {?>
                                                                                    <i class="<?php echo $_smarty_tpl->getValue('button')['icon'];?>
"></i>
                                                                                <?php } elseif ((!empty($_smarty_tpl->getValue('button')['text']))) {?>
                                                                                    <?php echo $_smarty_tpl->getValue('button')['text'];?>

                                                                                <?php }?>

                                                                            </a>
                                                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                                                    <?php }?>

                                                                    <?php if ($_smarty_tpl->getValue('value')['status'] === 'Not Installed') {?>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
settings/plugin_install/<?php echo $_smarty_tpl->getValue('key');?>
/" class="btn btn-primary me-2">Install</a>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
settings/plugin_delete/<?php echo $_smarty_tpl->getValue('key');?>
/" class="btn btn-danger me-2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete');?>
</a>
                                                                    <?php } elseif ($_smarty_tpl->getValue('value')['status'] === 'Active') {?>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
settings/plugin_deactivate/<?php echo $_smarty_tpl->getValue('key');?>
/" class="btn btn-warning me-2">Deactivate</a>
                                                                    <?php } elseif ($_smarty_tpl->getValue('value')['status'] === 'Inactive') {?>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
settings/plugin_activate/<?php echo $_smarty_tpl->getValue('key');?>
/" class="btn btn-success me-2">Activate</a>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
settings/plugin_uninstall/<?php echo $_smarty_tpl->getValue('key');?>
/" class="btn btn-danger me-2">Uninstall</a>
                                                                    <?php }?>



                                                                    <?php if (!empty($_smarty_tpl->getValue('value')['url'])) {?>
                                                                        <a href="<?php echo $_smarty_tpl->getValue('value')['url'];?>
" target="_blank" class="btn btn-primary btn-icon waves-effect waves-themed">
                                                                            <i class="fal fa-external-link"></i>
                                                                        </a>
                                                                    <?php }?>

                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

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











    </div>

    <input type="hidden" id="_msg_unzipping" value="<?php echo $_smarty_tpl->getValue('_L')['Unzipping'];?>
 ...">
    <input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
">

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1357039726675e169e3134b9_73303874 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
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
