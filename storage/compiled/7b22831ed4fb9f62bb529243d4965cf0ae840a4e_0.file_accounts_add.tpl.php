<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:04
  from 'file:../default/accounts_add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15747c3330_68803308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b22831ed4fb9f62bb529243d4965cf0ae840a4e' => 
    array (
      0 => '../default/accounts_add.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15747c3330_68803308 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1551670765675e15747aa853_36992338', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1553387713675e15747c1fb3_56209827', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1551670765675e15747aa853_36992338 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Add_New_Account'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
accounts/add-post">
                            <div class="mb-3">
                                <label for="account"><?php echo $_smarty_tpl->getValue('_L')['Account Title'];?>
*</label>
                                <input type="text" class="form-control" id="account" name="account">

                            </div>
                            <div class="mb-3">
                                <label for="description"><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>


                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach0DoElse = false;
?>

                                <div class="mb-3">
                                    <label for="balance_<?php echo $_smarty_tpl->getValue('currency')->iso_code;?>
"><?php echo $_smarty_tpl->getValue('_L')['Initial Balance'];?>
 [ <?php echo $_smarty_tpl->getValue('currency')->iso_code;?>
 ]</label>
                                    <input type="text" class="form-control amount" id="balance_<?php echo $_smarty_tpl->getValue('currency')->iso_code;?>
" name="balance_<?php echo $_smarty_tpl->getValue('currency')->iso_code;?>
" <?php if ((null !== ($_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')->iso_code] ?? null))) {?>
                                        data-a-sign="<?php echo $_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')->iso_code]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')->iso_code]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')->iso_code]['decimal_mark'];?>
" <?php if (($_smarty_tpl->getValue('currencies_all')[$_smarty_tpl->getValue('currency')->iso_code]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                    <?php }?> data-d-group="3">
                                </div>

                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>



                            <div class="mb-3">
                                <label for="account_number"><?php echo $_smarty_tpl->getValue('_L')['Account Number'];?>
</label>
                                <input type="text" class="form-control" id="account_number" name="account_number">
                            </div>

                            <div class="mb-3">
                                <label for="contact_person"><?php echo $_smarty_tpl->getValue('_L')['Contact Person'];?>
</label>
                                <input type="text" class="form-control" id="contact_person" name="contact_person">
                            </div>

                            <div class="mb-3">
                                <label for="contact_phone"><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
</label>
                                <input type="text" class="form-control" id="contact_phone" name="contact_phone">
                            </div>

                            <div class="mb-3">
                                <label for="ib_url"><?php echo $_smarty_tpl->getValue('_L')['Internet Banking URL'];?>
</label>
                                <input type="text" class="form-control" id="ib_url" name="ib_url">
                            </div>

                            <div class="mb-3">
                                <label for="owner_id"><?php echo $_smarty_tpl->getValue('_L')['Owner'];?>
</label>
                                <select class="form-select" name="owner_id" id="owner_id">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('owners'), 'owner');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('owner')->value) {
$foreach1DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('owner')->id;?>
" <?php if ($_smarty_tpl->getValue('owner')->id == $_smarty_tpl->getValue('user')->id) {?>selected<?php }?> ><?php echo $_smarty_tpl->getValue('owner')->fullname;?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>



                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                        </form>

                    </div>
                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1553387713675e15747c1fb3_56209827 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {



            $('.amount').autoNumeric('init',{

                vMin: '-9999999999999.99'

            });


        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
}
