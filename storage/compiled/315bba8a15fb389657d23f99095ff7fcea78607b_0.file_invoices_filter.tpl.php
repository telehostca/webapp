<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:29
  from 'file:../default/invoices_filter.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d351674b37_05933145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '315bba8a15fb389657d23f99095ff7fcea78607b' => 
    array (
      0 => '../default/invoices_filter.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d351674b37_05933145 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13671959156745d351652687_50535965', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15919468586745d351670858_69470273', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_13671959156745d351652687_50535965 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="panel">
        <div class="panel-hdr">

            <?php if ($_smarty_tpl->getValue('action') == 'credit-notes') {?>

                <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Credit Notes');?>
</h2>

                <?php } else { ?>

                <h2><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</h2>


            <?php }?>


            <div class="panel-toolbar">

                <div class="btn-group">
                    <?php if ($_smarty_tpl->getValue('action') == 'credit-notes') {?>

                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/credit-note" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->getValue('_L')['New Credit Note'];?>
</a>

                    <?php } else { ?>

                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
invoices/add/" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->getValue('_L')['Add Invoice'];?>
</a>


                    <?php }?>

                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
reports/invoices/" class="btn btn-warning btn-sm"> <?php echo $_smarty_tpl->getValue('_L')['View Reports'];?>
</a>
                </div>

            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <?php if ($_smarty_tpl->getValue('action') !== 'credit-notes') {?>
                    <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/list/"><?php echo $_smarty_tpl->getValue('_L')['Filter'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/list/0/unpaid"><?php echo $_smarty_tpl->getValue('_L')['Unpaid'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/list/0/partially_paid/"><?php echo $_smarty_tpl->getValue('_L')['Partially Paid'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/list/0/paid/"><?php echo $_smarty_tpl->getValue('_L')['Paid'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/list/0/cancelled/"><?php echo $_smarty_tpl->getValue('_L')['Cancelled'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->getValue('base_url');?>
invoices/list/0/all/"><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</a></li>
                    </ul>
                <?php }?>



                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="reportrange"><?php echo $_smarty_tpl->getValue('_L')['Date Range'];?>
</label>
                                        <input type="text" name="reportrange" class="form-control" id="reportrange">
                                    </div>

                                    <div class="mb-3">
                                        <label for="payment_status"><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</label>
                                        <select class="form-select" name="status" id="payment_status">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <option value="Paid"><?php echo $_smarty_tpl->getValue('_L')['Paid'];?>
</option>
                                            <option value="Unpaid"><?php echo $_smarty_tpl->getValue('_L')['Unpaid'];?>
</option>
                                            <option value="Partially Paid"><?php echo $_smarty_tpl->getValue('_L')['Partially Paid'];?>
</option>
                                            <option value="Cancelled"><?php echo $_smarty_tpl->getValue('_L')['Cancelled'];?>
</option>

                                        </select>
                                    </div>


                                    <?php if (!empty($_smarty_tpl->getValue('config')['invoice_group'])) {?>
                                        <div class="mb-3">
                                            <label for="invoice_group_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Group');?>
</label>
                                            <select class="form-select" id="invoice_group_id" name="invoice_group_id">
                                                <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('None');?>
</option>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('invoice_groups'), 'group');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach0DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('group')->id;?>
" <?php if ($_smarty_tpl->getValue('selected_group_id') == $_smarty_tpl->getValue('group')->id) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('group')->name;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>


                                    <?php if (!empty($_smarty_tpl->getValue('config')['invoice_single_service'])) {?>
                                        <div class="mb-3">
                                            <label for="invoice_single_service_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Service');?>
</label>
                                            <select class="form-select" id="invoice_single_service_id" name="service_id">
                                                <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('None');?>
</option>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('services'), 'service');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('service')->value) {
$foreach1DoElse = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->getValue('service')->id;?>
"><?php echo $_smarty_tpl->getValue('service')->name;?>
</option>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>



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

                                    <?php if (!empty($_smarty_tpl->getValue('config')['invoice_items_purchasing'])) {?>

                                        <div class="mb-3">
                                            <label for="purchase_status"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Purchase Status');?>
</label>
                                            <select class="form-select" name="purchase_status" id="purchase_status">
                                                <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                                <option value="Unknown"><?php echo $_smarty_tpl->getValue('_L')['Unknown'];?>
</option>
                                                <option value="Purchased"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Purchased');?>
</option>
                                                <option value="On Hold"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('On Hold');?>
</option>
                                                <option value="Arrived"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Arrived');?>
</option>
                                                <option value="Collected"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Collected');?>
</option>
                                            </select>
                                        </div>

                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->getValue('config')['invoice_items_shipping'])) {?>

                                        <div class="mb-3">
                                            <label for="shipping_status"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Shipping Status');?>
</label>
                                            <select class="form-select" name="shipping_status" id="shipping_status">
                                                <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                                <option value="Unknown"><?php echo $_smarty_tpl->getValue('_L')['Unknown'];?>
</option>
                                                <option value="Purchased"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('In Progress');?>
</option>
                                                <option value="Shipped"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Shipped');?>
</option>
                                            </select>
                                        </div>

                                    <?php }?>

                                    <div class="mb-3">
                                        <label for="customer"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</label>
                                        <select class="form-select" name="customer" id="customer">
                                            <option value=""><?php echo $_smarty_tpl->getValue('_L')['All'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('customers'), 'customer');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('customer')->value) {
$foreach3DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('customer')['id'];?>
"><?php echo $_smarty_tpl->getValue('customer')['account'];?>
 <?php echo $_smarty_tpl->getValue('customer')['email'];?>
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
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach4DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('group')['id'];?>
"><?php echo $_smarty_tpl->getValue('group')['gname'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>

                                    <input type="hidden" name="type" value="<?php ob_start();
echo $_smarty_tpl->getValue('action');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">

                                    <button type="submit" id="sp_filter" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Filter');?>
</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body" id="result_div">

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
/* {block 'script'} */
class Block_15919468586745d351670858_69470273 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>



        $(function () {

            let $app = $('#cloudonex_body');

            let $customer = $('#customer').select2();

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

            let $result_div = $('#result_div');


            function loadResult() {

                $result_div.html('<img src="<?php echo APP_URL;?>
/storage/system/fsubmit.gif">');

                let $form = $('form');
                let data = $form.serialize();

                $.post('<?php echo $_smarty_tpl->getValue('_url');?>
invoices/filter', data, function (data) {
                    $result_div.html(data);
                });
            }

            loadResult();

            $('#sp_filter').on('click', function (e) {
                e.preventDefault();

                loadResult();

            });

            $app.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                app.confirm("<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('are_you_sure');?>
", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/invoice/" + id;
                    }
                });


            });


        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
