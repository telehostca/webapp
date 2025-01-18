<?php
/* Smarty version 5.4.2, created on 2025-01-18 13:26:55
  from 'file:../default/about.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678bf26fa9e518_22795273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8773f9f69afb10efadd8abb12f00374eb2a47b4' => 
    array (
      0 => '../default/about.tpl',
      1 => 1690476006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678bf26fa9e518_22795273 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_688478078678bf26fa77da4_29277805', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_783716451678bf26fa9dce1_06194232', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_688478078678bf26fa77da4_29277805 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel" id="ib_box">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('About');?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="mb-2">
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Your version');?>
:</strong> <?php echo $_smarty_tpl->getValue('installed_version');?>

                        </div>

                        <?php if ($_smarty_tpl->getValue('latest_version')) {?>

                        <div class="mb-2">
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Latest version');?>
:</strong> <?php echo $_smarty_tpl->getValue('latest_version');?>

                        </div>



                            <?php if ($_smarty_tpl->getValue('update_available')) {?>

                                <div class="alert alert-danger mb-3">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('An update is available');?>

                                </div>

                                <?php if (empty($_smarty_tpl->getValue('config')['purchase_key'])) {?>
                                    <div class="alert alert-warning mb-3">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Please enter your purchase key to update');?>

                                    </div>
                                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/activate_license_post/">


                                        <div class="mb-3">

                                            <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('License key');?>
</label>

                                            <input type="text" required class="form-control" id="purchase_key" name="purchase_key">

                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" id="btn_save" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                                        </div>

                                    </form>
                                    <?php } else { ?>

                                    <p>
                                        <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Purchase key');?>
:</strong> <?php echo $_smarty_tpl->getValue('config')['purchase_key'];?>
 <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/remove-purchase-key"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Remove');?>
</a>
                                    </p>

                                    <?php if (!empty($_smarty_tpl->getValue('config')['update_log'])) {?>
                                        <div class="mb-3">
                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/clear-update-log"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Clear log');?>
</a>
                                        </div>
                                        <div class="mb-3">

                                            <pre><?php echo $_smarty_tpl->getValue('config')['update_log'];?>
</pre>

                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->getValue('update_step') == '0') {?>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/update" class="cls_update btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Download the latest version');?>
</a>
                                    <?php } elseif ($_smarty_tpl->getValue('update_step') == '1') {?>
                                        <div class="alert alert-success mb-3">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Latest version is downloaded, now unzip the file');?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/update" class="cls_update btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unzip');?>
</a>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/update-cancel" class="btn btn-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Cancel');?>
</a>
                                    <?php } elseif ($_smarty_tpl->getValue('update_step') == '2') {?>
                                        <div class="alert alert-success mb-3">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Run the database schema update');?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/update" class="cls_update btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Run');?>
</a>
                                    <?php } elseif ($_smarty_tpl->getValue('update_step') == '3') {?>
                                        <div class="alert alert-success mb-3">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Complete the update and cleanup the files and log.');?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/update" class="cls_update btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Complete');?>
</a>
                                    <?php }?>
                                <?php }?>



                                <?php }?>


                        <?php }?>







                    </div>
                </div>

            </div>

            <?php if ($_smarty_tpl->getValue('app_stage') == 'Demo') {?>

                <input type="hidden" name="purchase_code" id="purchase_code" value="">

            <?php } else { ?>


            <?php }?>



        </div>





    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_783716451678bf26fa9dce1_06194232 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>


<?php
}
}
/* {/block "script"} */
}
