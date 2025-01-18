<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:21:47
  from 'file:../default/../frontend/v/checkout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d97b6ef560_41007896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43fa5c9f63a9ba943cf39e1ac305347f4c1cec5e' => 
    array (
      0 => '../default/../frontend/v/checkout.tpl',
      1 => 1694168684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d97b6ef560_41007896 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1568655616745d97b69b007_57438498', 'content');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7843672936745d97b6ed9b4_81365769', 'scripts');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, './layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1568655616745d97b69b007_57438498 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
?>


    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php ob_start();
echo $_smarty_tpl->getValue('base_url');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
client/home"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Home');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</a></li>
                    <li class="breadcrumb-item active text-muted" aria-current="page"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Checkout');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">


            <div class="row gx-md-8 gx-xl-12 gy-12">
                <div class="col-lg-8">
                    <div class="table-responsive">

                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) || !empty($_smarty_tpl->getValue('shopping_cart_items')['domains'])) {?>
                            <table class="table table-bordered">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td>
                                            <h3><?php echo $_smarty_tpl->getValue('item')->name;?>
</h3>

                                            <div class="hr-line-dashed"></div>

                                            <div class="mb-3">
                                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Billing Cycle');?>
</label>
                                                <select class="form-select mt-2 select_payment_term" data-id="<?php echo $_smarty_tpl->getValue('item')->id;?>
" >
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('get_available_item_pricing_terms')($_smarty_tpl->getValue('item')), 'value', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('key');?>
"
                                                                <?php if ((null !== ($_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['term'] ?? null)) && ($_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['term'] === $_smarty_tpl->getValue('key'))) {?>
                                                                    selected
                                                                <?php }?>
                                                        ><?php echo $_smarty_tpl->getValue('value')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('value')['price'],$_smarty_tpl->getValue('config')['home_currency']);?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>


                                            <?php if ($_smarty_tpl->getValue('item')->require_domain_name) {?>

                                                <div class="mb-3">
                                                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Enter Your Domain');?>
</label>
                                                    <input class="form-control hosting_set_domain_name" name="domain_name" data-id="<?php echo $_smarty_tpl->getValue('item')->id;?>
"
                                                            <?php if ((null !== ($_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['domain_name'] ?? null))) {?>
                                                                value="<?php echo $_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['domain_name'];?>
"
                                                            <?php }?>
                                                    >
                                                    <p>
                                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/domain-register/"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Register a new domain?');?>
</a>
                                                    </p>
                                                </div>

                                            <?php }?>



                                        </td>
                                        <td class="text-end">

                                            <div class="mb-2">
                                                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['price'],$_smarty_tpl->getValue('config')['home_currency']);?>
</strong>
                                            </div>

                                            <?php if ($_smarty_tpl->getValue('default_tax') && $_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['tax_amount'] > 0) {?>
                                                <div class="mb-2">
                                                    <small><?php echo $_smarty_tpl->getValue('default_tax')->name;?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('format_number_using_currency_code')($_smarty_tpl->getValue('default_tax')->rate,$_smarty_tpl->getValue('config')['home_currency']);?>
%)</small>
                                                    <strong>+<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('shopping_cart_items')['hosting'][$_smarty_tpl->getValue('item')->id]['tax_amount'],$_smarty_tpl->getValue('config')['home_currency']);?>
</strong>
                                                </div>
                                            <?php }?>

                                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/remove-shopping-cart-item/<?php echo $_smarty_tpl->getValue('item')->id;?>
" class="btn btn-circle btn-soft-red btn-sm"><i class="uil uil-minus"></i></a>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                <?php if (!empty($_smarty_tpl->getValue('shopping_cart_items')['domains'])) {?>

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('shopping_cart_items')['domains'], 'value', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach2DoElse = false;
?>

                                        <tr>
                                            <td>
                                                <h5><?php echo $_smarty_tpl->getValue('value')['name'];?>
</h5>

                                                <?php if ($_smarty_tpl->getValue('value')['term'] == 1) {?>
                                                    1 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('year');?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->getValue('value')['term'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('years');?>

                                                <?php }?>

                                            </td>
                                            <td class="text-end">
                                                <div class="mb-2">
                                                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('value')['price'],$_smarty_tpl->getValue('config')['home_currency']);?>
</strong>
                                                </div>

                                                <?php if ($_smarty_tpl->getValue('default_tax') && $_smarty_tpl->getValue('value')['tax_amount'] > 0) {?>
                                                    <div class="mb-2">
                                                        <small><?php echo $_smarty_tpl->getValue('default_tax')->name;?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('format_number_using_currency_code')($_smarty_tpl->getValue('default_tax')->rate,$_smarty_tpl->getValue('config')['home_currency']);?>
%)</small>
                                                        <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('value')['tax_amount'],$_smarty_tpl->getValue('config')['home_currency']);?>
</strong>
                                                    </div>
                                                <?php }?>

                                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/remove-shopping-cart-domain/<?php echo $_smarty_tpl->getValue('key');?>
" class="btn mt-3 btn-danger btn-sm waves-effect waves-themed"><i class="uil uil-minus"></i></a>
                                            </td>
                                        </tr>

                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                <?php }?>


                                <tr>
                                    <td class="text-end">
                                        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total');?>
:</h4>
                                    </td>
                                    <td class="text-end" style="width: 150px;">
                                        <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('shopping_cart')->total,$_smarty_tpl->getValue('config')['home_currency']);?>
</h4>
                                    </td>
                                </tr>

                            </table>

                            <div class="row my-4 gy-4">
                                <div class="col-md-8 col-lg-7">
                                    <div class="form-floating input-group">
                                        <input type="url" class="form-control" placeholder="Enter promo code" id="seo-check">
                                        <label for="seo-check">Enter promo code</label>
                                        <button class="btn btn-primary" type="button">Apply</button>
                                    </div>
                                    <!-- /.input-group -->
                                </div>
                            </div>


                            <a class="btn btn-primary rounded-xl" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Continue Shopping');?>
</a>
                            <a class="btn btn-danger rounded-xl" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/delete-shopping-cart"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Empty Shopping Cart');?>
</a>


                        <?php } else { ?>

                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No items in the shopping cart.');?>


                            <div class="hr-line-dashed"></div>

                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Go to Homepage');?>
</a>

                        <?php }?>
                    </div>
                    <!-- /.table-responsive -->

                    <!-- /.row -->
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <h3 class="mb-4"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Order Summary');?>
</h3>
                    <div class="table-responsive">
                        <table class="table table-order">
                            <tbody>
                            <tr>
                                <td class="ps-0"><strong class="text-dark"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total');?>
</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('shopping_cart')->total,$_smarty_tpl->getValue('config')['home_currency']);?>
</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php if ($_smarty_tpl->getValue('user')) {?>

                        <a class="btn btn-primary rounded w-100 mt-4" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/checkout-commit"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pay Now');?>
</a>

                    <?php } else { ?>


                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/login/">
                            <h5 class="text-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('I already have an account');?>
</h5>
                        </a>

                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/register/">
                            <h5 class="text-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Or create an account');?>
</h5>
                        </a>

                    <?php }?>

                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



<?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_7843672936745d97b6ed9b4_81365769 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
?>


    <?php echo '<script'; ?>
>

        document.addEventListener("DOMContentLoaded", function() {

            let selectPaymentTerms = document.querySelectorAll('.select_payment_term');
            selectPaymentTerms.forEach( function(element) {
                element.addEventListener('change', function() {
                    window.location = base_url + 'client/shopping-cart-update-term/' + this.getAttribute('data-id') + '/' + this.value;
                });
            });

            let hostingSetDomainNames = document.querySelectorAll('.hosting_set_domain_name');
            hostingSetDomainNames.forEach( function(element) {
                ['keyup', 'paste'].forEach(eventName => {
                    element.addEventListener(eventName, function() {
                        let xhr = new XMLHttpRequest();
                        let params = 'id=' + this.getAttribute('data-id') + '&domain=' + this.value;

                        xhr.open('POST', base_url + 'client/set-domain-for-hosting');
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhr.send(params);
                    });
                });
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'scripts'} */
}
