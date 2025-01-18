<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:42
  from 'file:../default/reports_sales.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15d65ad917_09092105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b79e27552ad4c45ef6060671741e4ecb4fb914' => 
    array (
      0 => '../default/reports_sales.tpl',
      1 => 1691713198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15d65ad917_09092105 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_829404159675e15d659dc13_77240173', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_814432300675e15d659f4f3_97965409', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_304411353675e15d65a9ce1_41242701', "scripts");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_829404159675e15d659dc13_77240173 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_814432300675e15d659f4f3_97965409 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row mb-3">
        <!-- Total Sales Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->getValue('total_sales');?>
</h2>
                    <h5 class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total Sales');?>
</h5>
                </div>
            </div>
        </div>

        <!-- Total Revenue Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->getValue('total_revenue');?>
</h2>
                    <h5 class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total Revenue');?>
</h5>
                </div>
            </div>
        </div>

        <!-- Top-Selling Product Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->getValue('top_selling_product_units');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Units Sold');?>
</h2>
                    <h5 class="text-muted"><?php echo $_smarty_tpl->getValue('top_selling_product_name');?>
</h5>
                </div>
            </div>
        </div>

        <!-- Sales Growth Rate Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->getValue('sales_growth_rate');?>
%</h2>
                    <h5 class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sales Growth Rate');?>
</h5>
                </div>
            </div>
        </div>
    </div>



    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-body p-3">

                    <div class="table-responsive">
                        <table class="table table-striped dataTable" id="clx_datatable">
                            <thead style="background: #f0f2ff">
                            <tr>
                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Item'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Qty'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('invoice_items'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                                <tr>
                                    <td class="h6"><?php echo $_smarty_tpl->getValue('item')['description'];?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->getValue('item')['qty'];?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->getValue('item')['amount'];?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->getValue('item')['total'];?>
</td>
                                    <td class="h6 text-info"><?php echo $_smarty_tpl->getValue('item')['duedate'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Item'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Qty'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>

        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_304411353675e15d65a9ce1_41242701 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                    },
                }
            );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
