<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:17
  from 'file:../default/transactions_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15bdae9109_87384193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0859907cebb388bf62e435c796e38ee166b29c2d' => 
    array (
      0 => '../default/transactions_list.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15bdae9109_87384193 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1153094531675e15bdaa88d0_92396993', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1800249468675e15bdaa9c05_58238413', "content");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1716316821675e15bdad9949_55946739', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1153094531675e15bdaa88d0_92396993 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1800249468675e15bdaa9c05_58238413 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="row">
                            <div class="col-md-3 col-sm-6">

                                <form>
                                    <div class="mb-3">
                                        <label for="reportrange"><?php echo $_smarty_tpl->getValue('_L')['Date Range'];?>
</label>
                                        <input type="text" name="reportrange" class="form-control" id="reportrange">
                                    </div>

                                    <div class="mb-3">
                                        <label for="tr_type"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Transaction');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</label>
                                        <select id="tr_type" name="tr_type" class="form-control">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <option value="Income" <?php if ($_smarty_tpl->getValue('tr_type') == 'Income') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Income'];?>
</option>
                                            <option value="Expense" <?php if ($_smarty_tpl->getValue('tr_type') == 'Expense') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Expense'];?>
</option>
                                            <option value="Transfer" <?php if ($_smarty_tpl->getValue('tr_type') == 'Transfer') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Transfer'];?>
</option>
                                            <option value="Equity" <?php if ($_smarty_tpl->getValue('tr_type') == 'Transfer') {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Equity'];?>
</option>
                                        </select>
                                    </div>

                                    <div class="mb-3" id="block_expense_type">
                                        <label for="tr_type"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Expense');?>
 <?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</label>
                                        <select id="tr_type" name="tr_type" class="form-control">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('expense_types'), 'expense_type');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('expense_type')->value) {
$foreach0DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('expense_type')->name;?>
"><?php echo $_smarty_tpl->getValue('expense_type')->name;?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="account"><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</label>
                                        <select id="account" name="account" class="form-control">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('a'), 'as');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('as')->value) {
$foreach1DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('as')['account'];?>
" <?php if ($_smarty_tpl->getValue('p_account') == ($_smarty_tpl->getValue('as')['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('as')['account'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="staff_id"><?php echo $_smarty_tpl->getValue('_L')['Staff'];?>
</label>
                                        <select class="form-select" name="staff_id" id="staff_id">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'staff');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('staff')->value) {
$foreach2DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('staff')['id'];?>
"><?php echo $_smarty_tpl->getValue('staff')['fullname'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cid"><?php echo $_smarty_tpl->getValue('_L')['Contact'];?>
</label>
                                        <select id="cid" name="cid" class="form-control">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('c'), 'cs');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cs')->value) {
$foreach3DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('cs')['id'];?>
"
                                                        <?php if ($_smarty_tpl->getValue('p_cid') == ($_smarty_tpl->getValue('cs')['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('cs')['account'];?>
 <?php if ($_smarty_tpl->getValue('cs')['email'] != '') {?>- <?php echo $_smarty_tpl->getValue('cs')['email'];
}?></option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category"><?php echo $_smarty_tpl->getValue('_L')['Category'];?>
</label>
                                        <select id="category" name="category" class="form-control">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach4DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('category')->id;?>
"><?php echo $_smarty_tpl->getValue('category')->name;?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="payment_method"><?php echo $_smarty_tpl->getValue('_L')['Payment Method'];?>
</label>
                                        <select id="payment_method" name="payment_method" class="form-select">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment_method');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment_method')->value) {
$foreach5DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('payment_method')->name;?>
"><?php echo $_smarty_tpl->getValue('payment_method')->name;?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="group_id"><?php echo $_smarty_tpl->getValue('_L')['Customer Group'];?>
</label>
                                        <select class="form-select" name="group_id" id="group_id">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contact_groups'), 'group');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach6DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('group')['id'];?>
"><?php echo $_smarty_tpl->getValue('group')['gname'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="item_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Item');?>
</label>
                                        <select class="form-select" name="item_id" id="item_id">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach7DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('item')['id'];?>
"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>



                                    <button type="submit" id="ib_filter" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Filter');?>
</button>

                                    <br>
                                </form>


                            </div>
                            <div class="col-md-9 col-sm-6 ib_right_panel">


                                <div class="table-responsive" id="ib_data_panel">


                                    <table class="table table-bordered display" id="ib_dt">
                                        <thead>
                                        <tr class="heading">
                                            <th><?php echo $_smarty_tpl->getValue('_L')['ID'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>

                                            <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>

                                            <th><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Method'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Ref'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Staff'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Item'];?>
</th>
                                            <th class="text-end">
                                                <?php echo $_smarty_tpl->getValue('_L')['Dr'];?>

                                                (<?php echo $_smarty_tpl->getValue('home_currency')->iso_code;?>
)
                                            </th>
                                            <th class="text-end">
                                                <?php echo $_smarty_tpl->getValue('_L')['Cr'];?>

                                                (<?php echo $_smarty_tpl->getValue('home_currency')->iso_code;?>
)
                                            </th>

                                            <th><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                        </tr>
                                        </thead>


                                    </table>
                                </div>


                                <?php if (!$_smarty_tpl->getValue('has_multiple_currencies')) {?>
                                    <h3 class="mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total');?>
: <span id="amount_total">--</span></h3>
                                <?php }?>



                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>


    </div> <!-- Row end-->



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1716316821675e15bdad9949_55946739 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {
            var $block_expense_type = $("#block_expense_type");
            $block_expense_type.hide();

            $("#tr_type").on('change',function () {
                if($(this).val() == 'Expense'){
                    $block_expense_type.show('slow');
                }
                else{
                    $block_expense_type.hide('slow');
                }
            });

            var $ib_data_panel = $("#ib_data_panel");

            $ib_data_panel.block({ message:block_msg });

            var $cid = $('#cid');

            var $account = $("#account");

            var $category = $("#category");

            const $payment_method = $("#payment_method");

            $category.select2({

            });

            $cid.select2({

            });

            $account.select2({

            });

            $payment_method.select2({

            });


            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Today');?>
': [moment(), moment()],
                    '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Yesterday');?>
': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Last 7 Days');?>
': [moment().subtract(6, 'days'), moment()],
                    '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Last 30 Days');?>
': [moment().subtract(29, 'days'), moment()],
                    '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('This Month');?>
': [moment().startOf('month'), moment().endOf('month')],
                    '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Last Month');?>
': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);



            var ib_dt = $('#ib_dt').DataTable( {
                select: true,
                "serverSide": true,
                "ajax": {
                    "url": base_url + "transactions/tr_list/",
                    "type": "POST",
                    "data": function ( d ) {

                        d.tr_type = $('#tr_type').val();
                        d.reportrange = $reportrange.val();
                        d.cid = $cid.val();
                        d.account = $account.val();
                        d.category = $category.val();
                        d.payment_method = $payment_method.val();
                        d.group_id = $('#group_id').val();
                        d.staff_id = $('#staff_id').val();
                        d.item_id = $('#item_id').val();

                    }
                },
                rowId: 9,
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
                "pageLength": 10,
                responsive: true,
                dom:
                /*	--- Layout Structure
                    --- Options
                    l	-	length changing input control
                    f	-	filtering input
                    t	-	The table!
                    i	-	Table information summary
                    p	-	pagination control
                    r	-	processing display element
                    B	-	buttons
                    R	-	ColReorder
                    S	-	Select

                    --- Markup
                    < and >				- div element
                    <"class" and >		- div with a class
                    <"#id" and >		- div with an ID
                    <"#id.class" and >	- div with an ID and a class

                    --- Further reading
                    https://datatables.net/reference/option/dom
                    --------------------------------------
                 */
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'l><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('PDF');?>
',
                        titleAttr: 'Generate PDF',
                        className: 'btn-danger btn-sm mb-2'
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Excel');?>
',
                        titleAttr: 'Generate Excel',
                        className: 'btn-success btn-sm mb-2'
                    },
                    {
                        extend: 'csvHtml5',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('CSV');?>
',
                        titleAttr: 'Generate CSV',
                        className: 'btn-primary btn-sm mb-2'
                    },
                    {
                        extend: 'copyHtml5',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Copy');?>
',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-dark btn-sm mb-2'
                    },
                    {
                        extend: 'print',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Print');?>
',
                        titleAttr: 'Print Table',
                        className: 'btn-secondary btn-sm mb-2'
                    },
                    {
                        extend: 'selectAll',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Select All');?>
',
                        titleAttr: 'Select All',
                        className: 'btn-success btn-sm mb-2'
                    },
                    {
                        extend: 'selectNone',
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Select None');?>
',
                        titleAttr: 'Select None',
                        className: 'btn-danger btn-sm mb-2'
                    },
                    {
                        text: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete');?>
',
                        className: 'btn-danger btn-sm mb-2',
                        action: function () {
                            let ids = ib_dt.rows({ selected: true }).ids();
                            if (ids.length > 0) {
                                let ids_string = ids.join(",");
                                let c = confirm("<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete all selected items?');?>
");
                                if (c) {
                                    $.post('<?php echo $_smarty_tpl->getValue('base_url');?>
transactions/mass-delete', {
                                        'ids': ids_string,
                                    }, function (data) {
                                        location.reload();
                                    });
                                }
                            } else {
                                toastr.error("<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No items selected');?>
");
                            }
                        }
                    }
                ],
                fixedHeader: {
                    headerOffset: 50
                },
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                "columnDefs": [
                    { "orderable": false, "targets": 8 }
                ],
                "order": [[ 0, 'desc' ]],
                "scrollX": true,
                "initComplete": function () {
                    $ib_data_panel.unblock();
                },
                "footerCallback": function ( row, data, start, end, display ) {

                        if(document.getElementById('amount_total'))
                            {
                                var api = this.api(), data;

                                var intVal = function ( i ) {
                                    return typeof i === 'string' ?
                                        i.replace(/[\$,]/g, '')*1 :
                                        typeof i === 'number' ?
                                            i : 0;
                                };



                                let amount_total = 0;
                                let total = api
                                    .column( 4 )
                                    .data();

                                for (let i = 0; i < total.length; i++) {
                                    let amount = app.parseAmount(total[i],home_currency,2);
                                    amount = parseFloat(amount);
                                    if(amount)
                                    {
                                        amount_total += amount;
                                    }
                                }

                                document.getElementById('amount_total').innerHTML = app.formatCurrency(amount_total,home_currency);

                            }

                }
            } );

            var $ib_filter = $("#ib_filter");


            $ib_filter.on('click', function(e) {
                e.preventDefault();

                $ib_data_panel.block({ message:block_msg });

                ib_dt.ajax.reload(
                    function () {
                        $ib_data_panel.unblock();
                    }
                );


            });



        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
