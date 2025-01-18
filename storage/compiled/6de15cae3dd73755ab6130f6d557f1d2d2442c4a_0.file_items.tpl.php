<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:21:15
  from 'file:../default/../frontend/v/items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d95b801ad8_60910384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6de15cae3dd73755ab6130f6d557f1d2d2442c4a' => 
    array (
      0 => '../default/../frontend/v/items.tpl',
      1 => 1692846268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d95b801ad8_60910384 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12659622896745d95b7b76e2_19929155', 'content');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11302632396745d95b8006f2_89247752', 'scripts');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, './layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_12659622896745d95b7b76e2_19929155 extends \Smarty\Runtime\Block
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
                    <?php if ($_smarty_tpl->getValue('group') && $_smarty_tpl->getValue('group')->name) {?>
                        <li class="breadcrumb-item active text-muted" aria-current="page"><?php ob_start();
echo $_smarty_tpl->getValue('group')->name;
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
echo $_smarty_tpl->getValue('group')->name;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</h2>

            <?php if ($_smarty_tpl->getValue('group') && $_smarty_tpl->getValue('group')->header_content) {?>
                <div class="my-3 mx-auto" style="max-width: 800px;">
                    <?php echo $_smarty_tpl->getValue('group')->header_content;?>

                </div>
            <?php }?>

            <div class="pricing-wrapper">
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) == 4) {?>
                    <?php $_smarty_tpl->assign('colClass', 'col-md-6 col-lg-3', false, NULL);?>
                <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) == 3) {?>
                    <?php $_smarty_tpl->assign('colClass', 'col-md-6 col-lg-4', false, NULL);?>
                <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) == 2) {?>
                    <?php $_smarty_tpl->assign('colClass', 'col-md-6 col-lg-6', false, NULL);?>
                <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) == 1) {?>
                    <?php $_smarty_tpl->assign('colClass', 'col-md-6 col-lg-12', false, NULL);?>
                <?php }?>
                <div class="row gx-0 gy-6 mt-2">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                        <div class="<?php ob_start();
echo $_smarty_tpl->getValue('colClass');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">
                            <div class="pricing card <?php if ($_smarty_tpl->getValue('item')->featured) {?> bg-soft-primary <?php }?> shadow-none pricing_block">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $_smarty_tpl->getValue('item')->name;?>
</h4>
                                    <div class="mb-3">
                                        <?php if ($_smarty_tpl->getValue('item')->one_time_fee && $_smarty_tpl->getValue('item')->one_time_fee > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->one_time_fee),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->getValue('_L')['One Time'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->getValue('item')->price_monthly && $_smarty_tpl->getValue('item')->price_monthly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->price_monthly),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->getValue('_L')['Monthly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->getValue('item')->price_yearly && $_smarty_tpl->getValue('item')->price_yearly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->price_yearly),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->getValue('_L')['Yearly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->getValue('item')->price_quarterly && $_smarty_tpl->getValue('item')->price_quarterly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->price_quarterly),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->getValue('_L')['Quarterly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->getValue('item')->price_half_yearly && $_smarty_tpl->getValue('item')->price_half_yearly > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->price_half_yearly),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"> <?php echo $_smarty_tpl->getValue('_L')['Half Yearly'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->getValue('item')->two_years && $_smarty_tpl->getValue('item')->two_years > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->two_years),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->getValue('_L')['Two Years'];?>
</p>
                                        <?php } elseif ($_smarty_tpl->getValue('item')->price_three_years && $_smarty_tpl->getValue('item')->price_three_years > 0) {?>
                                            <h5 class="m-0 h1 selected_price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')(($_smarty_tpl->getValue('item')->price_three_years),$_smarty_tpl->getValue('config')['home_currency']);?>
</h5>
                                            <p class="selected_term"><?php echo $_smarty_tpl->getValue('_L')['Three Years'];?>
</p>
                                        <?php }?>
                                    </div>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getSmarty()->getModifierCallback('get_available_item_pricing_terms')($_smarty_tpl->getValue('item'))) > 1) {?>
                                        <select class="form-select my-2 select_payment_term" data-id="<?php echo $_smarty_tpl->getValue('item')->id;?>
" data-slug="<?php echo $_smarty_tpl->getValue('item')->slug;?>
" >
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('get_available_item_pricing_terms')($_smarty_tpl->getValue('item')), 'value', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                                                <option data-price="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('value')['price'],$_smarty_tpl->getValue('config')['home_currency']);?>
" data-term="<?php echo $_smarty_tpl->getValue('key');?>
" value="<?php echo $_smarty_tpl->getValue('key');?>
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
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('item')->features && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('item')->features))) {?>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('json_decode')($_smarty_tpl->getValue('item')->features), 'feature_line');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature_line')->value) {
$foreach2DoElse = false;
?>
                                                <li><i class="uil uil-check"></i><span> <?php echo $_smarty_tpl->getValue('feature_line');?>
 </span></li>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php }?>
                                    <div class="hr-line-dashed m-0"></div>
                                    <div class="p-4">
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/buy-now/<?php echo $_smarty_tpl->getValue('item')->slug;?>
" class="btn btn-primary btn_buy_now"><?php echo $_smarty_tpl->getValue('_L')['Buy Now'];?>
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
/* {block 'scripts'} */
class Block_11302632396745d95b8006f2_89247752 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/frontend/v';
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
