<?php
/* Smarty version 4.3.2, created on 2023-09-08 14:24:44
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/v/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fb66ec5b8d66_46627421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d87a849084c8b6a807f860d7e9df079d2725a02' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/v/checkout.tpl',
      1 => 1694197482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb66ec5b8d66_46627421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114563851464fb66ec5976c1_76996024', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108306188464fb66ec5b8116_83206709', 'scripts');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './layout.tpl');
}
/* {block 'content'} */
class Block_114563851464fb66ec5976c1_76996024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114563851464fb66ec5976c1_76996024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
client/home"><?php ob_start();
echo __('Home');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</a></li>
                    <li class="breadcrumb-item active text-muted" aria-current="page"><?php ob_start();
echo __('Checkout');
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

                        <?php if (count($_smarty_tpl->tpl_vars['items']->value) || !empty($_smarty_tpl->tpl_vars['shopping_cart_items']->value['domains'])) {?>
                            <table class="table table-bordered">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h3>

                                            <div class="hr-line-dashed"></div>

                                            <div class="mb-3">
                                                <label><?php echo __('Billing Cycle');?>
</label>
                                                <select class="form-select mt-2 select_payment_term" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" >
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['term'])) && ($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['term'] === $_smarty_tpl->tpl_vars['key']->value)) {?>
                                                                    selected
                                                                <?php }?>
                                                        ><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 <?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>


                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->require_domain_name) {?>

                                                <div class="mb-3">
                                                    <label><?php echo __('Enter Your Domain');?>
</label>
                                                    <input class="form-control hosting_set_domain_name" name="domain_name" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['domain_name']))) {?>
                                                                value="<?php echo $_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['domain_name'];?>
"
                                                            <?php }?>
                                                    >
                                                    <p>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/domain-register/"><?php echo __('Register a new domain?');?>
</a>
                                                    </p>
                                                </div>

                                            <?php }?>



                                        </td>
                                        <td class="text-end">

                                            <div class="mb-2">
                                                <strong><?php echo formatCurrency($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</strong>
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['default_tax']->value && $_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['tax_amount'] > 0) {?>
                                                <div class="mb-2">
                                                    <small><?php echo $_smarty_tpl->tpl_vars['default_tax']->value->name;?>
 (<?php echo format_number_using_currency_code($_smarty_tpl->tpl_vars['default_tax']->value->rate,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
%)</small>
                                                    <strong>+<?php echo formatCurrency($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['tax_amount'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</strong>
                                                </div>
                                            <?php }?>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/remove-shopping-cart-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn btn-circle btn-soft-red btn-sm"><i class="uil uil-minus"></i></a>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['shopping_cart_items']->value['domains'])) {?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopping_cart_items']->value['domains'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                        <tr>
                                            <td>
                                                <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>

                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['term'] == 1) {?>
                                                    1 <?php echo __('year');?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['value']->value['term'];?>
 <?php echo __('years');?>

                                                <?php }?>

                                            </td>
                                            <td class="text-end">
                                                <div class="mb-2">
                                                    <strong><?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</strong>
                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['default_tax']->value && $_smarty_tpl->tpl_vars['value']->value['tax_amount'] > 0) {?>
                                                    <div class="mb-2">
                                                        <small><?php echo $_smarty_tpl->tpl_vars['default_tax']->value->name;?>
 (<?php echo format_number_using_currency_code($_smarty_tpl->tpl_vars['default_tax']->value->rate,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
%)</small>
                                                        <strong><?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['tax_amount'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</strong>
                                                    </div>
                                                <?php }?>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/remove-shopping-cart-domain/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="btn mt-3 btn-danger btn-sm waves-effect waves-themed"><i class="uil uil-minus"></i></a>
                                            </td>
                                        </tr>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <?php }?>


                                <tr>
                                    <td class="text-end">
                                        <h4><?php echo __('Total');?>
:</h4>
                                    </td>
                                    <td class="text-end" style="width: 150px;">
                                        <h4><?php echo formatCurrency($_smarty_tpl->tpl_vars['shopping_cart']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
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


                            <a class="btn btn-primary rounded-xl" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/"><?php echo __('Continue Shopping');?>
</a>
                            <a class="btn btn-danger rounded-xl" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/delete-shopping-cart"><?php echo __('Empty Shopping Cart');?>
</a>


                        <?php } else { ?>

                            <?php echo __('No items in the shopping cart.');?>


                            <div class="hr-line-dashed"></div>

                            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/"><?php echo __('Go to Homepage');?>
</a>

                        <?php }?>
                    </div>
                    <!-- /.table-responsive -->

                    <!-- /.row -->
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <h3 class="mb-4"><?php echo __('Order Summary');?>
</h3>
                    <div class="table-responsive">
                        <table class="table table-order">
                            <tbody>
                            <tr>
                                <td class="ps-0"><strong class="text-dark"><?php echo __('Total');?>
</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price"><?php echo formatCurrency($_smarty_tpl->tpl_vars['shopping_cart']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>

                        <a class="btn btn-primary rounded w-100 mt-4" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/checkout-commit"><?php echo __('Pay Now');?>
</a>

                    <?php } else { ?>


                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/login/">
                            <h5 class="text-info"><?php echo __('I already have an account');?>
</h5>
                        </a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/register/">
                            <h5 class="text-info"><?php echo __('Or create an account');?>
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
class Block_108306188464fb66ec5b8116_83206709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_108306188464fb66ec5b8116_83206709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
