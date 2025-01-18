<?php
/* Smarty version 4.3.2, created on 2023-09-08 18:32:29
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/tickets_admin_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fba0fd934939_46071500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97c91f2b8e3f99e31abfcdda8170da7f4a23b854' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/tickets_admin_list.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fba0fd934939_46071500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58271351464fba0fd926d47_67265021', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191809136264fba0fd930313_03486681', "script");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_58271351464fba0fd926d47_67265021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58271351464fba0fd926d47_67265021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-life-ring'></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
 <span class='fw-300'></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/tickets" class="btn btn-primary me-2"><i class="fal fa-list"></i></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/create/" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Open Ticket'];?>
</a>
        </div>

    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="row">

                            <div class="col-md-3 col-sm-6">

                                <form>

                                    <div class="mb-3">
                                        <label for="filter_account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                        <input type="text" id="filter_account" name="filter_account" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="filter_status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                                        <select class="form-select" id="filter_status" name="filter_status" size="1">
                                            <option value="">All</option>
                                            <option value="Open">Open</option>
                                            <option value="On Hold">On Hold</option>
                                            <option value="Escalated">Escalated</option>
                                            <option value="Closed">Closed</option>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="filter_status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</label>
                                        <select class="form-select" id="filter_by_staff" name="filter_by_staff">
                                            <option value="">--</option>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="filter_company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
                                        <input type="text" id="filter_company" name="filter_company" class="form-control">
                                    </div>





                                    <div class="mb-3">
                                        <label for="filter_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                        <input type="email" id="filter_email" name="filter_email" class="form-control">
                                    </div>


                                    <div class="mb-3">
                                        <label for="filter_subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                        <input type="text" id="filter_subject" name="filter_subject" class="form-control">
                                    </div>






                                    <button type="submit" id="ib_filter" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</button>

                                    <br>
                                </form>


                            </div>
                            <div class="col-md-9 col-sm-6 ib_right_panel">

                                <div id="ib_act_hidden" style="display: none;">

                                    <a href="#" id="set_status" class="btn btn-primary"><i class="fal fa-tags"></i> Set Status</a>

                                    <a href="#" id="delete_multiple_customers" class="btn btn-danger"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                    <hr>
                                </div>

                                <div class="table-responsive" id="ib_data_panel">


                                    <table class="table table-bordered display" id="ib_dt" width="100%">
                                        <thead>
                                        <tr class="heading">
                                            <th width="100px;">#</th>
                                            <th width="60px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Assigned To'];?>
</th>
                                            <th class="text-end" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                        </tr>
                                        </thead>

                                    </table>
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
class Block_191809136264fba0fd930313_03486681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_191809136264fba0fd930313_03486681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

        $(function() {

            var _url = $("#_url").val();

            var $ib_data_panel = $("#ib_data_panel");

            $ib_data_panel.block({ message:block_msg });

            var selected = [];
            var ib_act_hidden = $("#ib_act_hidden");
            function ib_btn_trigger() {
                if(selected.length > 0){
                    ib_act_hidden.show(200);
                }
                else{
                    ib_act_hidden.hide(200);
                }
            }

            $('#filter_by_staff').select2({

                }
            ).on('change',function () {



            });


            $('[data-bs-toggle="tooltip"]').tooltip();

            var ib_dt = $('#ib_dt').DataTable( {

                "serverSide": true,
                "ajax": {
                    "url": base_url + "tickets/admin/json_list/",
                    "type": "POST",
                    "data": function ( d ) {

                        d.account = $('#filter_account').val();
                        d.email = $('#filter_email').val();
                        d.company = $('#filter_company').val();
                        d.status = $('#filter_status').val();
                        d.subject = $('#filter_subject').val();
                        d.staff = $('#filter_by_staff').val();

                    }
                },
                "pageLength": 20,

                responsive: true,
                fixedHeader: {
                    headerOffset: 50
                },
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="' + base_url +'tickets/admin/view/'+ row[7] +'">'+ data +'</a>';
                        },
                        "targets": 2
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="' + base_url +'contacts/view/'+ row[8] +'">'+ data +'</a>';
                        },
                        "targets": 3
                    },

                    { "orderable": false, "targets": 6 },
                    { "orderable": false, "targets": 1 },
                    { className: "text-center", "targets": [ 1 ] }
                ],
                "order": [[ 0, 'asc' ]],
                "scrollX": true,
                "initComplete": function () {
                    $ib_data_panel.unblock();
                },
                select: {
                    info: false
                },
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




            $ib_data_panel.on('click', '.cdelete', function(e){
                e.preventDefault();
                var lid = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){

                        $.get( base_url + "tickets/admin/delete/"+lid, function( data ) {
                            $ib_data_panel.block({ message:block_msg });

                            ib_dt.ajax.reload(
                                function () {
                                    $ib_data_panel.unblock();
                                }
                            );
                        });


                    }
                });

            });


            $('body').on('change', '#bulk_status', function(e){

                $('.webui-popover').block({ message: block_msg});

                $.post( base_url + "tickets/admin/set_status/", { status: $('#bulk_status').val(), ids: selected })
                    .done(function( data ) {

                        $('.webui-popover').unblock();
                        $ib_data_panel.block({ message:block_msg });
                        ib_dt.ajax.reload(
                            function () {
                                $ib_data_panel.unblock();
                            }
                        );

                        toastr.success(data);


                    });



            });

            $("#delete_multiple_customers").click(function(e){
                e.preventDefault();
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        $.redirect(base_url + "tickets/admin/delete_multiple/",{ type: "tickets", ids: selected});
                    }
                });

            });




        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
