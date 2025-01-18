<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:29
  from 'file:../default/reports_purchases.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15c99f7b95_82185569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6892d59974ad6e890b3a19caf4501099148b9072' => 
    array (
      0 => '../default/reports_purchases.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15c99f7b95_82185569 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1873710560675e15c99e6165_67869647', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1552335902675e15c99e7380_64296531', "content");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_735294214675e15c99f15c8_99618799', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1873710560675e15c99e6165_67869647 extends \Smarty\Runtime\Block
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
class Block_1552335902675e15c99e7380_64296531 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row">
        <div class="col-md-12">

            <div class="card border" id="t_options">

                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item active"><a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('_url');?>
reports/purchases"><i class="fal fa-th"></i> <?php echo $_smarty_tpl->getValue('_L')['Purchases'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('_url');?>
reports/purchases_summary"><i class="fal fa-chart-bar"></i> <?php echo $_smarty_tpl->getValue('_L')['Summary'];?>
</a></li>
                    </ul>
                </div>




                <div class="card-body">




                    <div class="tab-content">
                        <div id="details" class="tab-pane fade show active ib-tab-box">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4"><input style="min-width: 250px;" type="text" name="reportrange" class="form-control" id="reportrange"></div>
                                            <div class="col-md-4">
                                                <select id="cid" name="cid" class="form-control">
                                                    <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('c'), 'cs');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cs')->value) {
$foreach0DoElse = false;
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
                                            <div class="col-md-4">
                                                <button class="btn btn-primary" id="ib_filter" type="submit"><?php echo $_smarty_tpl->getValue('_L')['Filter'];?>
</button>
                                            </div>
                                        </div>


                                                                            </form>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive" id="ib_data_panel">


                                        <table class="table table-striped table-bordered table-hover display" id="ib_dt">
                                            <thead>
                                            <tr class="heading">
                                                <th><?php echo $_smarty_tpl->getValue('_L')['Invoice'];?>
</th>
                                                <th><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                                                <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</th>
                                                <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Paid'];?>
</th>
                                                <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Due'];?>
</th>


                                                <th><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</th>

                                                <th><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                            </tr>
                                            </thead>



                                            <tfoot>
                                            <tr>
                                                <th colspan="2" style="text-align:right"><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
:</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>

                                                <th colspan="2"></th>
                                            </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>





                </div>

            </div>



        </div>
    </div>





<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_735294214675e15c99f15c8_99618799 extends \Smarty\Runtime\Block
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

            var start = moment().subtract(29, 'days');
            var end = moment();

            var $ib_data_panel = $("#ib_data_panel");

            $ib_data_panel.block({ message:block_msg });

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);

            var $cid = $('#cid');



            $cid.select2({
            });

            var ib_dt = $('#ib_dt').DataTable( {
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
                    /*{
                        extend:    'colvis',
                        text:      'Column Visibility',
                        titleAttr: 'Col visibility',
                        className: 'mr-sm-3'
                    },*/
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        titleAttr: 'Generate PDF',
                        className: 'btn-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-success btn-sm mr-1'
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'CSV',
                        titleAttr: 'Generate CSV',
                        className: 'btn-primary btn-sm mr-1'
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copy',
                        titleAttr: 'Copy to clipboard',
                        className: 'btn-dark btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-secondary btn-sm'
                    }
                ],
                "serverSide": true,
                "ajax": {
                    "url": base_url + "reports/json_purchases/",
                    "type": "POST",
                    "data": function ( d ) {


                        d.reportrange = $reportrange.val();
                        d.cid = $cid.val();


                    }
                },
                "pageLength": 10,
                "responsive": true,
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 <?php echo $_smarty_tpl->getValue('_L')['rows'];?>
', '25 <?php echo $_smarty_tpl->getValue('_L')['rows'];?>
', '50 <?php echo $_smarty_tpl->getValue('_L')['rows'];?>
', '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
' ]
                ],
                "columnDefs": [
                    { "orderable": false, "targets": 6 }
                ],
                "order": [[ 0, 'desc' ]],
                "scrollX": false,
                "initComplete": function () {
                    $ib_data_panel.unblock();
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column( 2 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    pageTotal = api
                        .column( 2, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    pageTotal_2 = api
                        .column( 3, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    pageTotal_3 = api
                        .column( 4, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Update footer
                    $( api.column( 2 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal
                    );
                    $( api.column( 3 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal_2
                    );

                    $( api.column( 4 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal_3
                    );
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

        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
