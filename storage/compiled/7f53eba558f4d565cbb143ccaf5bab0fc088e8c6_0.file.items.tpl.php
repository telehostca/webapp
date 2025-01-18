<?php
/* Smarty version 4.3.2, created on 2023-08-24 07:04:29
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/v/items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e7393de8dec4_73159595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f53eba558f4d565cbb143ccaf5bab0fc088e8c6' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/frontend/v/items.tpl',
      1 => 1692875067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e7393de8dec4_73159595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135725388164e7393de66d23_26304439', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147658672664e7393de8ce05_75317970', 'scripts');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './layout.tpl');
}
/* {block 'content'} */
class Block_135725388164e7393de66d23_26304439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135725388164e7393de66d23_26304439',
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
                    <?php if ($_smarty_tpl->tpl_vars['group']->value && $_smarty_tpl->tpl_vars['group']->value->name) {?>
                        <li class="breadcrumb-item active text-muted" aria-current="page"><?php ob_start();
echo $_smarty_tpl->tpl_vars['group']->value->name;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</li>
                    <?php }?>
                </ol>
            </nav>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-8">
            <h2 class="display-5 mb-3 text-center"><?php ob_start();
echo $_smarty_tpl->tpl_vars['group']->value->name;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h2>

            <?php if ($_smarty_tpl->tpl_vars['group']->value && $_smarty_tpl->tpl_vars['group']->value->header_content) {?>
                <div class="my-3 mx-auto" style="max-width: 800px;">
                    <?php echo $_smarty_tpl->tpl_vars['group']->value->header_content;?>

                </div>
            <?php }?>

            <div class="pricing-wrapper">
                <?php if (count($_smarty_tpl->tpl_vars['items']->value) == 4) {?>
                    <?php $_smarty_tpl->_assignInScope('colClass', 'col-md-6 col-lg-3');?>
                <?php } elseif (count($_smarty_tpl->tpl_vars['items']->value) == 3) {?>
                    <?php $_smarty_tpl->_assignInScope('colClass', 'col-md-6 col-lg-4');?>
                <?php } elseif (count($_smarty_tpl->tpl_vars['items']->value) == 2) {?>
                    <?php $_smarty_tpl->_assignInScope('colClass', 'col-md-6 col-lg-6');?>
                <?php } elseif (count($_smarty_tpl->tpl_vars['items']->value) == 1) {?>
                    <?php $_smarty_tpl->_assignInScope('colClass', 'col-md-6 col-lg-12');?>
                <?php }?>
                <div class="row gx-0 gy-6 mt-2">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <div class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['colClass']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">
                            <div class="pricing card <?php if ($_smarty_tpl->tpl_vars['item']->value->featured) {?> bg-soft-primary <?php }?> shadow-none pricing_block">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h4>
                                    <div class="mb-3">
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->one_time_fee && $_smarty_tpl->tpl_vars['item']->value->one_time_fee > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->one_time_fee),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['One Time'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_monthly && $_smarty_tpl->tpl_vars['item']->value->price_monthly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_monthly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_yearly && $_smarty_tpl->tpl_vars['item']->value->price_yearly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_quarterly && $_smarty_tpl->tpl_vars['item']->value->price_quarterly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_quarterly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quarterly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_half_yearly && $_smarty_tpl->tpl_vars['item']->value->price_half_yearly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_half_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Half Yearly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->two_years && $_smarty_tpl->tpl_vars['item']->value->two_years > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->two_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Two Years'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_three_years && $_smarty_tpl->tpl_vars['item']->value->price_three_years > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_three_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Three Years'];?>
</p>
                                        <?php }?>
                                    </div>
                                    <?php if (count(get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value)) > 1) {?>
                                        <select class="form-select my-2 select_payment_term" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" data-slug="<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" >
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <option data-price="<?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" data-term="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->features && count(json_decode($_smarty_tpl->tpl_vars['item']->value->features))) {?>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['item']->value->features), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                                                <li><i class="uil uil-check"></i><span> <?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
 </span></li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php }?>
                                    <div class="hr-line-dashed m-0"></div>
                                    <div class="p-4">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/buy-now/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class="btn btn-primary btn_buy_now"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Buy Now'];?>
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_147658672664e7393de8ce05_75317970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_147658672664e7393de8ce05_75317970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        document.addEventListener('DOMContentLoaded', function() {
            const selectPaymentTerms = document.querySelectorAll('.select_payment_term');

            selectPaymentTerms.forEach(function(selectElement) {
                selectElement.addEventListener('change', function() {
                    let that = this;
                    let closestPricingBlock = that.closest('.pricing_block');
                    let selectedPrice = closestPricingBlock.querySelector('.selected_price');
                    let selectedTerm = closestPricingBlock.querySelector('.selected_term');
                    let btnBuyNow = closestPricingBlock.querySelector('.btn_buy_now');

                    let selectedOption = that.options[that.selectedIndex];
                    selectedPrice.innerHTML = selectedOption.getAttribute('data-price');
                    selectedTerm.innerHTML = selectedOption.getAttribute('data-term');
                    btnBuyNow.href = base_url + 'client/buy-now/' + that.getAttribute('data-slug') + '/' + selectedOption.getAttribute('data-term');
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
