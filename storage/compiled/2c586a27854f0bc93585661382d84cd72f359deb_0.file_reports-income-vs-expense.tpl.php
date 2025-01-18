<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:38
  from 'file:../default/reports-income-vs-expense.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15d2b19ca4_47448496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c586a27854f0bc93585661382d84cd72f359deb' => 
    array (
      0 => '../default/reports-income-vs-expense.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15d2b19ca4_47448496 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_444674450675e15d2b08da2_44914932', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_444674450675e15d2b08da2_44914932 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Reports Income Vs Expense'];?>
 </h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <h4><?php echo $_smarty_tpl->getValue('_L')['Income Vs Expense'];?>
</h4>
                        <hr>
                        <h5 class="text-success"><?php echo $_smarty_tpl->getValue('_L')['Total Income'];?>
: <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('ai'),2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>
</h5>
                        <h5 class="text-danger"><?php echo $_smarty_tpl->getValue('_L')['Total Expense'];?>
: <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('ae'),2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>
</h5>
                        <hr>
                        <h5>
                            <?php echo $_smarty_tpl->getValue('_L')['Income minus Expense'];?>
 = <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('aime'),2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>

                        </h5>

                        <hr>
                        <h5 class="text-success"><?php echo $_smarty_tpl->getValue('_L')['Total Income This Month'];?>
: <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('mi'),2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>
</h5>
                        <h5 class="text-danger"><?php echo $_smarty_tpl->getValue('_L')['Total Expense This Month'];?>
: <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('me'),2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>
</h5>
                        <hr>
                        <h5>
                            <?php echo $_smarty_tpl->getValue('_L')['Income minus Expense'];?>
 = <?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('mime'),2,$_smarty_tpl->getValue('config')['dec_point'],$_smarty_tpl->getValue('config')['thousands_sep']);?>


                        </h5>

                        <hr>

                    </div>






                </div>
            </div>
        </div>


    </div>
    <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
<?php
}
}
/* {/block "content"} */
}
