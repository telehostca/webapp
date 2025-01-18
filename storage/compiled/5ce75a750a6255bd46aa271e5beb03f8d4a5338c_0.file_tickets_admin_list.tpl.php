<?php
/* Smarty version 5.4.2, created on 2025-01-18 13:24:15
  from 'file:../default/tickets_admin_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_678bf1cfd80cc2_92393513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce75a750a6255bd46aa271e5beb03f8d4a5338c' => 
    array (
      0 => '../default/tickets_admin_list.tpl',
      1 => 1690476006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678bf1cfd80cc2_92393513 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151084123678bf1cfd721e9_31091248', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_898281871678bf1cfd7bfc1_17321761', "script");
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_151084123678bf1cfd721e9_31091248 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-life-ring'></i> <?php echo $_smarty_tpl->getValue('_L')['Tickets'];?>
 <span class='fw-300'></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/tickets" class="btn btn-primary me-2"><i class="fal fa-list"></i></a>
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
tickets/admin/create/" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Open Ticket'];?>
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
                                        <label for="filter_account"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</label>
                                        <input type="text" id="filter_account" name="filter_account" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="filter_status"><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
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
                                        <label for="filter_status"><?php echo $_smarty_tpl->getValue('_L')['Staff'];?>
</label>
                                        <select class="form-select" id="filter_by_staff" name="filter_by_staff">
                                            <option value="">--</option>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('staffs'), 'staff');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('staff')->value) {
$foreach0DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('staff')->id;?>
"><?php echo $_smarty_tpl->getValue('staff')->fullname;?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="filter_company"><?php echo $_smarty_tpl->getValue('_L')['Company'];?>
</label>
                                        <input type="text" id="filter_company" name="filter_company" class="form-control">
                                    </div>





                                    <div class="mb-3">
                                        <label for="filter_email"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</label>
                                        <input type="email" id="filter_email" name="filter_email" class="form-control">
                                    </div>


                                    <div class="mb-3">
                                        <label for="filter_subject"><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</label>
                                        <input type="text" id="filter_subject" name="filter_subject" class="form-control">
                                    </div>






                                    <button type="submit" id="ib_filter" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Filter'];?>
</button>

                                    <br>
                                </form>


                            </div>
                            <div class="col-md-9 col-sm-6 ib_right_panel">

                                <div id="ib_act_hidden" style="display: none;">

                                    <a href="#" id="set_status" class="btn btn-primary"><i class="fal fa-tags"></i> Set Status</a>

                                    <a href="#" id="delete_multiple_customers" class="btn btn-danger"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>

                                    <hr>
                                </div>

                                <div class="table-responsive" id="ib_data_panel">


                                    <table class="table table-bordered display" id="ib_dt" width="100%">
                                        <thead>
                                        <tr class="heading">
                                            <th width="100px;">#</th>
                                            <th width="60px;"><?php echo $_smarty_tpl->getValue('_L')['Image'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Company'];?>
</th>
                                            <th><?php echo $_smarty_tpl->getValue('_L')['Assigned To'];?>
</th>
                                            <th class="text-end" style="width: 80px;"><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
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
class Block_898281871678bf1cfd7bfc1_17321761 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/luisrosasperez/Desktop/Escritorio - MacBook Pro de Luis/hostbilling-pro/ui/theme/default';
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
