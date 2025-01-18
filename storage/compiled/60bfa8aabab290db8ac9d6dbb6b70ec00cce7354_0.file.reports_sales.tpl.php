<?php
/* Smarty version 4.3.2, created on 2023-08-11 04:19:57
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/reports_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d5ef2d1bdb23_93263636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bfa8aabab290db8ac9d6dbb6b70ec00cce7354' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/reports_sales.tpl',
      1 => 1691741996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d5ef2d1bdb23_93263636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130326347464d5ef2d1adcf8_22217276', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189456916964d5ef2d1af001_41592707', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77963856064d5ef2d1b8c71_74400164', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_130326347464d5ef2d1adcf8_22217276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_130326347464d5ef2d1adcf8_22217276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
class Block_189456916964d5ef2d1af001_41592707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189456916964d5ef2d1af001_41592707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">
        <!-- Total Sales Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['total_sales']->value;?>
</h2>
                    <h5 class="text-muted"><?php echo __('Total Sales');?>
</h5>
                </div>
            </div>
        </div>

        <!-- Total Revenue Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['total_revenue']->value;?>
</h2>
                    <h5 class="text-muted"><?php echo __('Total Revenue');?>
</h5>
                </div>
            </div>
        </div>

        <!-- Top-Selling Product Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['top_selling_product_units']->value;?>
 <?php echo __('Units Sold');?>
</h2>
                    <h5 class="text-muted"><?php echo $_smarty_tpl->tpl_vars['top_selling_product_name']->value;?>
</h5>
                </div>
            </div>
        </div>

        <!-- Sales Growth Rate Widget -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['sales_growth_rate']->value;?>
%</h2>
                    <h5 class="text-muted"><?php echo __('Sales Growth Rate');?>
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
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoice_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <tr>
                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
                                    <td class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['duedate'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
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
class Block_77963856064d5ef2d1b8c71_74400164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_77963856064d5ef2d1b8c71_74400164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
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
