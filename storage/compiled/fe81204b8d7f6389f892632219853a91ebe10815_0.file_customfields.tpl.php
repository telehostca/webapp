<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:57
  from 'file:../default/customfields.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16d5ca6e38_17467196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe81204b8d7f6389f892632219853a91ebe10815' => 
    array (
      0 => '../default/customfields.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16d5ca6e38_17467196 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1423208337675e16d5c8fe68_59904803', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1165522741675e16d5ca3eb1_80509748', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1423208337675e16d5c8fe68_59904803 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">


        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Custom Fields'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content" id="application_ajaxrender">

                        <form id="rform">

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cf'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
                                <div style="border-radius: 4px; padding: 20px;">
                                    <div class="mb-3">
                                        <label for="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
"><?php echo $_smarty_tpl->getValue('c')['fieldname'];?>
</label>
                                        <?php if (($_smarty_tpl->getValue('c')['fieldtype']) == 'text') {?>

                                            <input type="text" id="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" class="form-control">
                                            <?php if (($_smarty_tpl->getValue('c')['description']) != '') {?>
                                                <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('c')['description'];?>
</p>
                                            <?php }?>

                                        <?php } elseif (($_smarty_tpl->getValue('c')['fieldtype']) == 'password') {?>

                                            <input type="password" id="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" class="form-control">
                                            <?php if (($_smarty_tpl->getValue('c')['description']) != '') {?>
                                                <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('c')['description'];?>
</p>
                                            <?php }?>

                                        <?php } elseif (($_smarty_tpl->getValue('c')['fieldtype']) == 'dropdown') {?>
                                            <select id="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" class="form-control">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('explode')(',',$_smarty_tpl->getValue('c')['fieldoptions']), 'fo');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('fo')->value) {
$foreach1DoElse = false;
?>
                                                    <option><?php echo $_smarty_tpl->getValue('fo');?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                            <?php if (($_smarty_tpl->getValue('c')['description']) != '') {?>
                                                <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('c')['description'];?>
</p>
                                            <?php }?>


                                        <?php } elseif (($_smarty_tpl->getValue('c')['fieldtype']) == 'textarea') {?>

                                            <textarea id="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('c')['id'];?>
" class="form-control" rows="3"></textarea>
                                            <?php if (($_smarty_tpl->getValue('c')['description']) != '') {?>
                                                <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('c')['description'];?>
</p>
                                            <?php }?>

                                        <?php } else { ?>

                                        <?php }?>
                                        <div class="btn-group my-3">
                                            <a href="#" class="btn btn-primary sys_edit" id="f<?php echo $_smarty_tpl->getValue('c')['id'];?>
"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>

                                            <a href="#" class="btn btn-danger cdelete" id="d<?php echo $_smarty_tpl->getValue('c')['id'];?>
"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
}
if ($foreach0DoElse) {
?>

                                <h4 class="muted text-center mb-3"><?php echo $_smarty_tpl->getValue('_L')['Custom Fields Not Available'];?>
</h4>

                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <p class=" text-center"><a href="" class="btn btn-outline btn-success sys_add"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add Custom Field'];?>
</a></p>


                        </form>

                    </div>
                </div>

            </div>



        </div>


    </div>
    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
">

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1165522741675e16d5ca3eb1_80509748 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {

            var _url = $("#_url").val();
            var sysrender = $('#cloudonex_body');
            sysrender.on('click', '.cdelete', function(e){
                e.preventDefault();
                var id = this.id;
                var lan_msg = $("#_lan_are_you_sure").val();
                app.confirm(lan_msg, function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/customfield/" + id + '/';
                    }
                });
            });



            sysrender.on('click', '.sys_add', function(e){
                e.preventDefault();

                $.fancybox.open({
                    src  : _url + 'settings/customfields-ajax-add/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                        }
                    }
                });

            });


            sysrender.on('click', '#add_submit', function(){

                $.post(base_url + 'settings/customfields-post/', $('#add_form').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        sysrender.find('.modal-body')
                            .prepend('<div class="alert alert-danger fade in">' + data +

                                '</div>');

                    }
                });

            });


            sysrender.on('click', '.sys_edit', function(e){
                e.preventDefault();

                var vid = this.id;
                var id = vid.replace("f", "");
                id = vid.replace("d", "");

                $.fancybox.open({
                    src  : base_url + 'settings/customfields-ajax-edit/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                        }
                    }
                });



            });


            sysrender.on('click', '#edit_submit', function(){


                var _url = $("#_url").val();
                $.post(_url + 'settings/customfield-edit-post/', $('#edit_form').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        sysrender
                            .find('.modal-body')
                            .prepend('<div class="alert alert-danger fade in">' + data +

                                '</div>');

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
