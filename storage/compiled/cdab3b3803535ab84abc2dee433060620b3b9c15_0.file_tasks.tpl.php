<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:06
  from 'file:../default/tasks.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15b28f5ce0_06080397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdab3b3803535ab84abc2dee433060620b3b9c15' => 
    array (
      0 => '../default/tasks.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15b28f5ce0_06080397 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_662992690675e15b28f0208_98091632', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_750819920675e15b28f2d23_62769169', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_662992690675e15b28f0208_98091632 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <form method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
tasks">
                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->getValue('_L')['Date Range'];?>
 (<?php echo $_smarty_tpl->getValue('_L')['Due Date'];?>
)</label>
                                <input class="form-control" id="reportrange" name="reportrange">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" id="btnFilter"><?php echo $_smarty_tpl->getValue('_L')['Filter'];?>
</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12" id="kanbanCanvas">

        </div>

    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-primary waves-effect waves-light add_task" href="#">
            <i class="fal fa-plus"></i>
        </a>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_750819920675e15b28f2d23_62769169 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>





    <?php echo '<script'; ?>
>



        var callback_tasks = function () {

            $( ".mmnt" ).each(function() {
                //   alert($( this ).html());
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            for (var a = dragula($(".kanban-droppable-area").toArray()), r = a.containers, o = r.length, l = 0; l < o; l++)$(r[l]).addClass("dragula dragula-vertical");
            a.on("drop", function (a, r, o, l) {


                var item = a.id;
                var target = r.id;

                $.post(base_url + 'tasks/set_status/',{ task_id : item, target: target },function (data) {
                    //   $(".kanban-col").unblock();

                })

            });
        };


        var start = moment().subtract(6, 'days');
        var end = moment();

        var reportrange_value = start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY');

        var $kanbanCanvas = $('#kanbanCanvas');

        function loadTasks()
        {
            var loading_placeholder = '<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';



            $kanbanCanvas.html(loading_placeholder);


            $.post("<?php echo $_smarty_tpl->getValue('_url');?>
tasks/ajax_tasks", { reportrange: reportrange_value }).done(function( data ) {

                    $kanbanCanvas.html( data );
                    callback_tasks();
                });

        }


        $(function () {


            loadTasks();

            $('#btnFilter').on('click',function (e) {
                e.preventDefault();
                loadTasks();
            });

            $modal = $("#cloudonex_body");




            var rel_type_val;

            $(".add_task").on('click',function (e) {
                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + 'tasks/create/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                            var $start_date = $('#start_date');

                            $start_date.datepicker();

                            var $due_date = $('#due_date');

                            $due_date.datepicker();

                            $("#cid").select2();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });
            });


            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();


                $.post( base_url + "tasks/post/", $("#ib-modal-form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            window.location = base_url + 'tasks/list/' + data;

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $kanbanCanvas.on('click','.v_item',function (e) {
                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'tasks/view/'+this.id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {


                        }
                    },
                });

            });




            $modal.on('click', '.c_delete', function(e){
                e.preventDefault();
                var tid = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){

                        $.get( base_url + "delete/tasks/"+tid, function( data ) {
                            location.reload();
                        });


                    }
                });

            });


            $modal.on('click', '.c_edit', function(e) {
                e.preventDefault();
                var tid = this.id;

                $.fancybox.open({
                    src: base_url + 'tasks/create/' + tid,
                    type: 'ajax',
                    opts: {
                        afterShow: function (instance, current) {

                            $('#description').redactor();

                            $('#title').keyup(function () {

                                var live_val = $(this).val();
                                if (live_val == '') {
                                    $("#txt_modal_header").html(jq_title);
                                } else {
                                    $("#txt_modal_header").html(live_val);
                                }


                            });
                            $("#cid").select2();
                            var $start_date = $('#start_date');


                            $start_date.datepicker({
                                dateFormat: 'yyyy-mm-dd',
                            });


                            var $due_date = $('#due_date');

                            $due_date.datepicker({
                                dateFormat: 'yyyy-mm-dd',
                            });


                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,

                    }

                });
            });




            function cb(start, end) {

                reportrange_value = start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY');

                $('#reportrange span').html(reportrange_value);
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


        });


    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
