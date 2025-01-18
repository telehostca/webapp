<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:35:46
  from 'file:../default/appearance_customize.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16521973a0_86119198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b009a06c2f4a51aa61c3c21dc4ac90f0904b93f3' => 
    array (
      0 => '../default/appearance_customize.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16521973a0_86119198 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_294247937675e165217cae3_81368625', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1215133838675e16521953a9_07447418', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_294247937675e165217cae3_81368625 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">

        <div class="col-md-6">

            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Text Logo'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="logo" method="post"
                              action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/logo-text/">
                            <div class="mb-3">
                                <input class="form-control" name="logo_text" value="<?php if (empty($_smarty_tpl->getValue('config')['logo_text'])) {?>CloudOnex<?php } else {
echo $_smarty_tpl->getValue('config')['logo_text'];
}?>">
                            </div>

                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Display as');?>
</label>
                                <select class="form-select" name="header_show_logo_as">
                                    <option value="logo_square"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Square logo and text');?>
</option>
                                    <option value="default_logo"
                                    <?php if (!empty($_smarty_tpl->getValue('config')['header_show_logo_as']) && $_smarty_tpl->getValue('config')['header_show_logo_as'] == 'default_logo') {?>
                                        selected
                                    <?php }?>
                                    ><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Default Logo');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Logo'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <img class="logo" src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/<?php echo $_smarty_tpl->getValue('config')['logo_default'];?>
" style="max-height: 40px;" alt="Logo">
                        <br><br>
                        <form role="form" name="logo" enctype="multipart/form-data" method="post"
                              action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/logo-post/">
                            <div class="mb-3">
                                <label for="file"><?php echo $_smarty_tpl->getValue('_L')['File'];?>
</label>
                                <input type="file" id="file" name="file">

                                <p class="help-block"><?php echo $_smarty_tpl->getValue('_L')['This will replace existing logo'];?>
</p>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                        </form>
                    </div>

                </div>
            </div>


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Logo for dark background'];?>
 [ <?php echo $_smarty_tpl->getValue('_L')['Optional'];?>
 ]</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <img class="logo" src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/<?php echo $_smarty_tpl->getValue('config')['logo_inverse'];?>
" alt="Logo"  style="max-height: 40px; background: #2196F3">
                        <br><br>

                        <form role="form" name="logo" enctype="multipart/form-data" method="post"
                              action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/logo-inverse-post/">
                            <div class="mb-3">
                                <label for="file"><?php echo $_smarty_tpl->getValue('_L')['File'];?>
</label>
                                <input type="file" id="file" name="file">

                                <p class="help-block"><?php echo $_smarty_tpl->getValue('_L')['Upload Transparent png image'];?>
.</p>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                        </form>

                    </div>




                </div>
            </div>


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Icon'];?>
</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">

                       <div class="text-center">
                           <?php if ((null !== ($_smarty_tpl->getValue('config')['logo_square'] ?? null))) {?>
                               <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/<?php echo $_smarty_tpl->getValue('config')['logo_square'];?>
">
                           <?php } else { ?>
                               <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/logo-512x512.png">
                           <?php }?>
                       </div>

                        <br><br>

                        <form role="form" name="logo" enctype="multipart/form-data" method="post"
                              action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/logo-square-post">
                            <div class="mb-3">
                                <label for="file"><?php echo $_smarty_tpl->getValue('_L')['File'];?>
</label>
                                <input type="file" id="file" name="file">
                            </div>
                            <p>512x512(png)</p>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                        </form>
                    </div>




                </div>
            </div>





            <?php if (empty($_smarty_tpl->getValue('config')['disable_client_portal'])) {?>

                <div class="panel">
                    <div class="panel-hdr">
                        <h5><?php echo $_smarty_tpl->getValue('_L')['Client Portal Custom Scripts'];?>
</h5>


                    </div>



                    <div class="panel-container">
                        <div class="panel-content">
                            <form role="form" name="logo" method="post"
                                  action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/custom_scripts/">
                                <div class="mb-3">
                                    <label for="header_scripts"><?php echo $_smarty_tpl->getValue('_L')['Header Scripts'];?>
</label>

                                    <textarea class="form-control" id="header_scripts" name="header_scripts"
                                              rows="4"><?php echo $_smarty_tpl->getValue('config')['header_scripts'];?>
</textarea>

                                </div>
                                <div class="mb-3">
                                    <label for="footer_scripts"><?php echo $_smarty_tpl->getValue('_L')['Footer Scripts'];?>
</label>

                                    <textarea class="form-control" id="footer_scripts" name="footer_scripts"
                                              rows="4"><?php echo $_smarty_tpl->getValue('config')['footer_scripts'];?>
</textarea>

                                </div>
                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                            </form>
                        </div>





                    </div>




                </div>

            <?php }?>




        </div>

        <?php if (!empty($_smarty_tpl->getValue('config')['invoicing'])) {?>

            <div class="col-md-6">

                <div class="panel">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->getValue('_L')['Settings'];?>
</h2>


                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <table class="table table-hover">
                                <tbody>



                                <tr>
                                    <td width="80%"><label for="config_invoice_show_watermark"><?php echo $_smarty_tpl->getValue('_L')['Show Watermark'];?>
 </label></td>
                                    <td> <input type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('get_option')('invoice_show_watermark') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
" id="config_invoice_show_watermark"></td>
                                </tr>


                                <tr>
                                    <td width="80%"><label for="config_invoice_client_can_attach_signature"><?php echo $_smarty_tpl->getValue('_L')['Enable Signature'];?>
 </label></td>
                                    <td> <input type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('get_option')('invoice_client_can_attach_signature') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
" id="config_invoice_client_can_attach_signature"></td>
                                </tr>


                                </tbody>
                            </table>
                        </div>





                    </div>
                </div>


            </div>


        <?php }?>


    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1215133838675e16521953a9_07447418 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <?php echo '<script'; ?>
>

        $(function () {

            $('#config_invoice_show_watermark').change(function() {

                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "invoice_show_watermark", val: "1" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                           // location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "invoice_show_watermark", val: "0" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                        });
                }
            });


            $('#config_invoice_client_can_attach_signature').change(function() {

                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "invoice_client_can_attach_signature", val: "1" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                            // location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "invoice_client_can_attach_signature", val: "0" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                        });
                }
            });

        })

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
