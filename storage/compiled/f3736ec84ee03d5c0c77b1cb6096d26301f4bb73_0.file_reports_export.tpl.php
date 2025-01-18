<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:44
  from 'file:../default/reports_export.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15d8e7b577_65037059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3736ec84ee03d5c0c77b1cb6096d26301f4bb73' => 
    array (
      0 => '../default/reports_export.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15d8e7b577_65037059 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1392878002675e15d8e743e7_84696021', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_375158040675e15d8e7aba1_08450798', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1392878002675e15d8e743e7_84696021 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Export'];?>
</h2>


        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Customers'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->getValue('total_customers');?>
</h1>
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reports/export-customers" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->getValue('_L')['Export'];?>
</a>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Transactions'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->getValue('total_transactions');?>
</h1>

                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reports/export-transactions" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->getValue('_L')['Export'];?>
</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->getValue('total_invoices');?>
</h1>

                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reports/export-invoices" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->getValue('_L')['Export'];?>
</a>
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
class Block_375158040675e15d8e7aba1_08450798 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
