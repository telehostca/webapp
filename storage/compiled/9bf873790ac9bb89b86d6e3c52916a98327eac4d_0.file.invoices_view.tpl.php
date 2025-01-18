<?php
/* Smarty version 4.3.2, created on 2023-08-11 05:12:02
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/invoices_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d5fb625ce664_65853358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bf873790ac9bb89b86d6e3c52916a98327eac4d' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/invoices_view.tpl',
      1 => 1690454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d5fb625ce664_65853358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151652411864d5fb62502684_35059560', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123715532764d5fb625c4b05_29645125', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_151652411864d5fb62502684_35059560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151652411864d5fb62502684_35059560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/razib/Documents/valet/hostbilling-pro/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unique Invoice URL'];?>
:</label>
                <input type="text" class="form-control mb-3" id="invoice_public_url" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
            </div>
        </div>


        <div class="text-center mb-3">
            <div class="btn-group flex-wrap" role="group">

                <div class="btn-group " role="group">
                    <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fal fa-envelope"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>
</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item"><a href="#" id="mail_invoice_created"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Created'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="mail_invoice_reminder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Payment Reminder'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="mail_invoice_overdue"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Overdue Notice'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="mail_invoice_confirm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Payment Confirmation'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="mail_invoice_refund"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Refund Confirmation'];?>
</a></li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn  btn-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fal fa-envelope-o"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS'];?>
</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item"><a href="#" id="sms_invoice_created"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Created'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="sms_invoice_reminder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Payment Reminder'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="sms_invoice_overdue"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Overdue Notice'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="sms_invoice_confirm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Payment Confirmation'];?>
</a></li>
                        <li class="dropdown-item"><a href="#" id="sms_invoice_refund"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Refund Confirmation'];?>
</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sms_templates_transformed']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['tpl'])) {?>
                                <li class="dropdown-item"><a target="_blank" href="sms:<?php echo $_smarty_tpl->tpl_vars['value']->value['to'];?>
?&body=<?php echo urlencode($_smarty_tpl->tpl_vars['value']->value['sms']);?>
"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg> <?php echo __($_smarty_tpl->tpl_vars['value']->value['tpl']);?>
</a></li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-sm dropdown-toggle text-white" style="background-color: #239970;" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>  <span class="d-none d-md-inline"><?php echo __('Whatsapp');?>
</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sms_templates_transformed']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['tpl'])) {?>
                                <li class="dropdown-item"><a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $_smarty_tpl->tpl_vars['value']->value['to'];?>
&text=<?php echo urlencode($_smarty_tpl->tpl_vars['value']->value['sms']);?>
"><?php echo __($_smarty_tpl->tpl_vars['value']->value['tpl']);?>
</a></li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn  btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fal fa-ellipsis-v"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>
</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Paid') {?>
                            <li class="dropdown-item set_invoice_status" data-status="Paid"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Unpaid') {?>
                            <li class="dropdown-item set_invoice_status" data-status="Unpaid"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Partially Paid') {?>
                            <li class="dropdown-item set_invoice_status set_invoice_status" data-status="Partially Paid"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Cancelled') {?>
                            <li class="dropdown-item set_invoice_status" data-status="Cancelled"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                        <?php }?>



                    </ul>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] == 'Credit Note') {?>

                    <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
                                                <button type="button" class="btn  btn-danger btn-sm" id="add_payment"> <span class="d-none d-md-inline"><?php ob_start();
echo __('Refund');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span></button>
                    <?php }?>

                <?php } else { ?>

                    <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
                        <button type="button" class="btn  btn-danger btn-sm" id="add_payment"><i class="fal fa-plus"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Payment'];?>
</span></button>
                    <?php }?>

                <?php }?>



                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fal fa-file-alt"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</span></a>

                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] == 'Invoice') {?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/pos-receipt/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" target="_blank" class="btn btn-info  btn-sm"><i class="fal fa-file-alt"></i> <span class="d-none d-md-inline"><?php ob_start();
echo __('Receipt');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span></a>

                <?php }?>


                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-warning  btn-sm"><i class="fal fa-pencil"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</span></a>
                <div class="btn-group" role="group">
                    <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fal fa-file-pdf-o"></i>
                        <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>
</span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a></li>
                        <li class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a></li>
                    </ul>
                </div>

                <a data-bs-toggle="modal" href="#modal_add_item" class="btn btn-sm btn-success"><i class="fal fa-paperclip"></i> </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/clone/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-copy"></i> </a>

                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-dark  btn-sm"><i class="fal fa-print"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</span></a>


            </div>
        </div>


        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="d-none d-md-inline">


                        <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] == 'Credit Note') {?>

                            <?php ob_start();
echo __('Credit Note');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>


                        <?php } else { ?>

                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>


                        <?php }?>


                        - <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?> </h2>
                    <input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">

                    <div class="panel-toolbar">

                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">



                        <div class="invoice">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-sm-6 mt-md">
                                        <h2 class="h2 mt-none mb-sm text-dark text-bold">
                                            <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] == 'Credit Note') {?>

                                                <?php ob_start();
echo __('CREDIT NOTE');
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>


                                            <?php } else { ?>

                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>


                                            <?php }?>


                                        </h2>
                                        <h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>

                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
                                            <h3 class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Paid') {?>
                                            <h3 class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Partially Paid') {?>
                                            <h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</h3>
                                        <?php } else { ?>
                                            <h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</h3>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['d']->value['title'])) && $_smarty_tpl->tpl_vars['d']->value['title'] != '') {?>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</h4>
                                            <hr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['invoice_receipt_number'] == '1' && $_smarty_tpl->tpl_vars['d']->value['receipt_number'] != '') {?>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Receipt Number'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['receipt_number'];?>
</h4>
                                            <hr>
                                        <?php }?>


                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>

                                            <div class="p-3 rounded-3 mb-4" style="background: #C6DAFF;">



                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5>Purchase Info</h5>
                                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['purchase_status']) {?>
                                                            <span class="badge bg-info text-white"><?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_status'];?>
</span>
                                                        <?php }?>
                                                    </div>
                                                    <div class="col-8 text-end">

                                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Purchase Status
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-item set_invoice_purchase_status" data-status="Purchased"><a href="javascript:;"><?php echo __('Purchased');?>
</a></li>
                                                                    <li class="dropdown-item set_invoice_purchase_status" data-status="On Hold"><a href="javascript:;"><?php echo __('On Hold');?>
</a></li>
                                                                    <li class="dropdown-item set_invoice_purchase_status" data-status="Arrived"><a href="javascript:;"><?php echo __('Arrived');?>
</a></li>
                                                                    <li class="dropdown-item set_invoice_purchase_status" data-status="Collected"><a href="javascript:;"><?php echo __('Collected');?>
</a></li>
                                                                </ul>
                                                            </div>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseInfo"><i class="fal fa-plus"></i> <?php echo __('Purchase Info');?>
</button>
                                                        </div>


                                                    </div>
                                                </div>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_id'])) {?>
                                                    <p class="mb-1"><strong>Purchase ID:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_id'];?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_date'])) {?>
                                                    <p class="mb-1"><strong>Purchase Date:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_date'];?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_cost'])) {?>
                                                    <p class="mb-1"><strong>Purchase Cost:</strong> <?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['purchase_cost'],$_smarty_tpl->tpl_vars['d']->value['currency']);?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_staff_id']) && !empty($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['d']->value['purchase_staff_id']])) {?>
                                                    <p class="mb-1"><strong>Staff:</strong> <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['d']->value['purchase_staff_id']]->fullname;?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_notes'])) {?>
                                                    <p class="mb-1"><strong>Notes:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_notes'];?>
</p>
                                                <?php }?>

                                            </div>

                                        <?php }?>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>

                                            <div class="p-3 rounded-3 mb-4" style="background: #C6DAFF;">

                                                <div class="row">
                                                    <div class="col-3">
                                                        <h5>Shipping Info</h5>
                                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['shipping_status']) {?>
                                                            <span class="badge bg-info text-white"><?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_status'];?>
</span>
                                                        <?php }?>
                                                    </div>
                                                    <div class="col-9 text-end">

                                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Shipping Status
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['shipping_status'] !== 'In Progress') {?>
                                                                        <li class="dropdown-item set_invoice_shipping_status" data-status="In Progress"><a href="javascript:;"><?php echo __('In Progress');?>
</a></li>
                                                                    <?php }?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['shipping_status'] !== 'Shipped') {?>
                                                                        <li class="dropdown-item set_invoice_shipping_status" data-status="Shipped"><a href="javascript:;"><?php echo __('Shipped');?>
</a></li>
                                                                    <?php }?>

                                                                </ul>
                                                            </div>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/delivery-label/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" target="_blank" class="btn btn-primary"><?php ob_start();
echo __('Delivery Label');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</a>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shippingInfo"><i class="fal fa-plus"></i> <?php echo __('Shipping Info');?>
</button>
                                                        </div>

                                                    </div>
                                                </div>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_date'])) {?>
                                                    <p class="mb-1"><strong>Shipping Date:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_date'];?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_tracking_number'])) {?>
                                                    <p class="mb-1"><strong>Tracking Number:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_tracking_number'];?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_weight'])) {?>
                                                    <p class="mb-1"><strong>Weight:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_weight'];?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_cost'])) {?>
                                                    <p class="mb-1"><strong>Shipping Cost:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_cost'];?>
</p>
                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_notes'])) {?>
                                                    <p class="mb-1"><strong>Notes:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_notes'];?>
</p>
                                                <?php }?>

                                            </div>

                                        <?php }?>


                                    </div>
                                    <div class="col-sm-6 text-end mt-md mb-md">

                                        <div class="ib">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" style="margin-bottom: 15px;">
                                        </div>

                                        <address class="ib mr-xlg">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</strong>
                                            <br>
                                            <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>


                                            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['vat_number'])) && ($_smarty_tpl->tpl_vars['config']->value['vat_number'] != '')) {?>

                                                <br>
                                                <strong><?php echo sp_config_or_default('label_tax_number',$_smarty_tpl->tpl_vars['_L']->value['Vat number']);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['config']->value['vat_number'];?>


                                            <?php }?>


                                        </address>

                                    </div>
                                </div>
                            </header>
                            <div class="bill-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bill-to">
                                            <p class="h5 mb-xs text-dark text-semibold">
                                                <strong>
                                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] == 'Credit Note') {?>

                                                        <?php ob_start();
echo __('To');
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>


                                                    <?php } else { ?>

                                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoiced To'];?>
:

                                                    <?php }?>


                                                </strong>
                                            </p>
                                            <address>
                                                <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>

                                                    <br>

                                                    <?php if ($_smarty_tpl->tpl_vars['company']->value && $_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['company']->value->business_number != '') {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
: <?php echo $_smarty_tpl->tpl_vars['company']->value->business_number;?>

                                                            <br>
                                                        <?php }?>
                                                    <?php }?>

                                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    <br>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    <br>
                                                <?php }?>

                                                <?php echo getContactFormattedAddress($_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['a']->value);?>


                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>


                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] != '0' && $_smarty_tpl->tpl_vars['a']->value['fax'] != '') {?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['fax'];?>

                                                <?php }?>

                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>


                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>

                                                    <br>
                                                    <strong>GSTIN:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['business_number'];?>


                                                <?php }?>


                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['cfs']->value['showinvoice'] == 'No') {?>
                                                        <?php continue 1;?>
                                                    <?php }?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                            </address>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bill-data text-end">
                                            <p class="mb-none">
                                                <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>
</span>
                                            </p>
                                            <p class="mb-none">
                                                <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['duedate']));?>
</span>
                                            </p>
                                            <h2>
                                                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] == 'Credit Note') {?>

                                                    <?php ob_start();
echo __('Total');
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>


                                                <?php } else { ?>

                                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Total'];?>
:

                                                <?php }?>

                                                <?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 </h2>
                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                                <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 </h2>

                                                <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 </h2>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php echo $_smarty_tpl->tpl_vars['extraHtml']->value;?>






                            <?php if ($_smarty_tpl->tpl_vars['quote']->value) {?>

                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
: <?php echo $_smarty_tpl->tpl_vars['quote']->value->id;?>
</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <?php echo $_smarty_tpl->tpl_vars['quote']->value->proposal;?>

                                        <hr>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="table-responsive">


                                <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>

                                    <table class="table table-bordered invoice-items">
                                        <thead>
                                        <tr class="text-dark">
                                            <th id="cell-id" class="text-semibold">S/L</th>
                                            <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                            <th class="text-semibold">HSN / SAC</th>
                                            <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                            <th id="cell-qty" class="text-center text-semibold"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>
                                            <th class="text-end">Taxable Value</th>


                                            <?php if ($_smarty_tpl->tpl_vars['d']->value['is_same_state']) {?>

                                                <th class="text-end">CGST</th>
                                                <th class="text-end">SGST/UTGST</th>
                                                <th class="text-end">GST</th>

                                            <?php } else { ?>

                                                <th class="text-end">IGST</th>

                                            <?php }?>

                                            <th id="cell-total" class="text-end text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['itemcode'] != '') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>

                                                    <?php } else { ?>
                                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                    <?php }?>
                                                </td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['tax_code'];?>
</td>
                                                <td class="text-center"><?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value['amount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                                <td class="text-end">
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['discount_amount'] != '0.00') {?>

                                                        Total: <?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>



                                                        <br>
                                                        Discount: <?php echo $_smarty_tpl->tpl_vars['item']->value['discount_amount'];?>

                                                        <br>
                                                        Taxable amount: <?php echo formatCurrency((($_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty'])-$_smarty_tpl->tpl_vars['item']->value['discount_amount']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>


                                                    <?php } else { ?>

                                                        <?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>


                                                    <?php }?>


                                                </td>


                                                <?php if ($_smarty_tpl->tpl_vars['d']->value['is_same_state']) {?>

                                                    <td class="text-end">
                                                        <?php echo formatCurrency((gstIndiaSplitTaxValue($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['item']->value['tax_rate'])),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>


                                                        <br>
                                                        @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate']/2,2);?>
%
                                                    </td>
                                                    <td class="text-end">

                                                            <?php echo formatCurrency((gstIndiaSplitTaxValue($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['item']->value['tax_rate'])),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>


                                                        <br>
                                                        @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate']/2,2);?>
%
                                                    </td>
                                                    <td class="text-end">
                                                        <?php echo formatCurrency(round($_smarty_tpl->tpl_vars['item']->value['taxamount'],2),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 <br>
                                                        @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate'],2);?>
%

                                                    </td>

                                                <?php } else { ?>



                                                    <td class="text-end">
                                                        <?php echo formatCurrency(round((($_smarty_tpl->tpl_vars['item']->value['tax_rate']*($_smarty_tpl->tpl_vars['item']->value['qty']*$_smarty_tpl->tpl_vars['item']->value['amount']))/100),2),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 <br>
                                                        @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate'],2);?>
%

                                                    </td>

                                                <?php }?>




                                                <td class="text-end"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['total']+$_smarty_tpl->tpl_vars['item']->value['taxamount']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>

                                <?php } else { ?>

                                    <table class="table table-bordered invoice-items">
                                        <thead>
                                        <tr class="text-dark">
                                            <th id="cell-id" class="fw-bold">#</th>
                                            <th id="cell-item" class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                            <th id="cell-price" class="text-end fw-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                            <th id="cell-qty" class="text-end fw-bold"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>
                                            <th id="cell-total" class="text-end fw-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['itemcode'] != '') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>

                                                    <?php } else { ?>
                                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                    <?php }?>
                                                </td>
                                                <td class="text-dark">

                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>


                                                    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoicing_allow_staff_selection_for_each_item'])) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['staff_id'] != '') {?>
                                                            <br>
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['item']->value['staff_id']])) {?>
                                                            <p class="badge bg-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
:
                                                                <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['item']->value['staff_id']]->fullname;?>

                                                            </p>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php }?>

                                                </td>
                                                <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value['amount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
</td>
                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                                <td class="text-end">
                                                    <?php if (($_smarty_tpl->tpl_vars['item']->value['discount_amount'] > 0)) {?>
                                                        <?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
 <br>
                                                        <span class="text-danger">- <?php echo formatCurrency((get_discount_amount($_smarty_tpl->tpl_vars['item']->value['discount_amount'],$_smarty_tpl->tpl_vars['item']->value['discount_type'],($_smarty_tpl->tpl_vars['item']->value['qty']*$_smarty_tpl->tpl_vars['item']->value['amount']))),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</span>
                                                        <?php } else { ?>
                                                        <?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['total']+$_smarty_tpl->tpl_vars['item']->value['discount_amount']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>

                                                    <?php }?>

                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>

                                <?php }?>

                            </div>

                            <div class="invoice-summary">
                                <div class="row">
                                    <div class="col-md-4 offset-md-8">
                                        <table class="table h5 text-dark">
                                            <tbody>
                                            <tr class="b-top-none">
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                                <td class="text-end"><?php ob_start();
echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</td>
                                            </tr>
                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                    <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['discount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>
                                                <tr>
                                                    <td colspan="2">GST Total</td>
                                                    <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                            <?php } else { ?>

                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
</td>
                                                    <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>

                                            <?php }?>

                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</td>
                                                    <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
                                                    <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
                                                                                                        <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                    <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (($_smarty_tpl->tpl_vars['trs_c']->value != '')) {?>
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Transactions'];?>
</h3>
                            <table class="table table-bordered sys_table">
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</th>
                                <th class="text-end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trs']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['tr']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tr']->value['date']));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['account'];?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['tr']->value['aid'] != '0') {?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['tr']->value['aid']])) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['tr']->value['aid']]->fullname;?>

                                                <?php }?>
                                            <?php }?>
                                        </td>
                                        <td class="text-end"><?php echo formatCurrency($_smarty_tpl->tpl_vars['tr']->value['amount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['description'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['ref'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['method'];?>
</td>


                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['inv_files_c']->value != '') {?>

                            <table class="table table-bordered table-hover sys_table">
                                <thead>
                                <tr>
                                    <th class="text-end" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</th>

                                    <th class="text-end" data-sort-ignore="true" width="100px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inv_files']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>

                                    <tr>

                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>
                                                <i class="fal fa-file-image-o"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'pdf') {?>
                                                <i class="fal fa-file-pdf-o"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'zip') {?>
                                                <i class="fal fa-file-archive-o"></i>
                                            <?php } else { ?>
                                                <i class="fal fa-file"></i>
                                            <?php }?>
                                        </td>


                                        <td>

                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>


                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>

                                                <div class="hr-line-dashed"></div>

                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_path'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>
">

                                            <?php }?>

                                        </td>

                                        <td class="text-end">

                                            <a data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_dl_token'];?>
/" class="btn btn-primary"><i class="fal fa-download"></i> </a>

                                            <a data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" onclick="confirmThenGoToUrl(event,'delete/document/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
');" href="javascript:;" class="btn btn-danger"><i class="fal fa-trash"></i> </a>

                                        </td>


                                    </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

                        <?php }?>

                        <?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
                            <div class="well m-t">
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

                            </div>
                        <?php }?>

                        <?php if (($_smarty_tpl->tpl_vars['emls_c']->value != '')) {?>
                            <hr>
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Emails'];?>
</h3>
                            <table class="table table-bordered sys_table">
                                <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>







                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emls']->value, 'eml');
$_smarty_tpl->tpl_vars['eml']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['eml']->value) {
$_smarty_tpl->tpl_vars['eml']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['eml']->value['date']));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['eml']->value['subject'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        <?php }?>


                        <?php if (count($_smarty_tpl->tpl_vars['access_logs']->value) != 0) {?>
                            <hr>
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
 : <?php echo $_smarty_tpl->tpl_vars['_L']->value['Access Log'];?>
</h3>
                            <table class="table table-bordered sys_table">
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Time'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Browser'];?>
</th>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['access_logs']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo date(($_smarty_tpl->tpl_vars['config']->value['df']).(' H:i:s'),strtotime($_smarty_tpl->tpl_vars['log']->value['viewed_at']));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['ip'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['country'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['city'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['browser'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        <?php }?>



                    </div>
                </div>


            </div>
        </div>
    </div>



    <div id="modal_add_item" class="modal fade" tabindex="-1"  role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>

                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="doc_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="is_global" name="is_global"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Available for all Customers'];?>

                            </label>
                        </div>





                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>
                    <hr>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server Config'];?>
:</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['upload_max_size']->value;?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['POST Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</p>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </div>
            </div>
        </div>


    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_purchasing'])) {?>

        <div class="modal fade" id="purchaseInfo" tabindex="-1" aria-labelledby="purchaseInfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/save-purchase-info">
                       <div class="modal-header">
                           <h1 class="modal-title fs-5" id="purchaseInfoLabel">Purchase Info</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">

                           <div class="mb-3">
                               <label for="purchase_id">Purchase ID</label>
                               <input type="text" class="form-control" id="purchase_id" name="purchase_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_id'];?>
">
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="purchase_date">Purchase Date</label>
                                       <input type="text" class="form-control" id="purchase_date" datepicker
                                              data-date-format="yyyy-mm-dd" data-auto-close="true" name="purchase_date"

                                              <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['purchase_date'])) {?>
                                                  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_date'];?>
"
                                                  <?php } else { ?>
                                                    value="<?php echo date('Y-m-d');?>
"
                                              <?php }?>


                                       >
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="mb-3">
                                       <label for="purchase_cost">Purchase Cost</label>
                                       <input type="text" class="form-control" id="purchase_cost" name="purchase_cost" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_cost'];?>
">
                                   </div>
                               </div>
                           </div>

                           <div class="mb-3">
                               <label for="staff_id"><?php echo __('Staff');?>
</label>
                               <select name="staff_id" id="staff_id" class="form-select">
                                   <option value="0"><?php echo __('Select Staff');?>
</option>
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                       <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value['id'];?>
"
                                               <?php if ($_smarty_tpl->tpl_vars['staff']->value['id'] == $_smarty_tpl->tpl_vars['d']->value['purchase_staff_id']) {?>
                                                   selected="selected"
                                               <?php } else { ?>
                                                   <?php if ($_smarty_tpl->tpl_vars['staff']->value['id'] == $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                                                       selected="selected"
                                                   <?php }?>
                                               <?php }?>
                                       ><?php echo $_smarty_tpl->tpl_vars['staff']->value['fullname'];?>
</option>
                                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                               </select>
                           </div>

                           <div class="mb-3">
                               <label for="purchase_notes">Purchase Notes</label>
                               <textarea class="form-control" id="purchase_notes" rows="5" name="purchase_notes"><?php echo $_smarty_tpl->tpl_vars['d']->value['purchase_notes'];?>
</textarea>
                           </div>


                       </div>
                       <div class="modal-footer">
                           <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>

    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['invoice_items_shipping'])) {?>

        <div class="modal fade" id="shippingInfo" tabindex="-1" aria-labelledby="shippingInfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/save-shipping-info">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="shippingInfoLabel">Shipping Info</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="shipping_weight">Weight</label>
                                <input type="text" class="form-control" id="shipping_weight" name="shipping_weight" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_weight'];?>
">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_date">Shipping Date</label>
                                        <input type="text" class="form-control" id="shipping_date" datepicker
                                               data-date-format="yyyy-mm-dd" data-auto-close="true" name="shipping_date"

                                                <?php if (!empty($_smarty_tpl->tpl_vars['d']->value['shipping_date'])) {?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_date'];?>
"
                                                <?php } else { ?>
                                                    value="<?php echo date('Y-m-d');?>
"
                                                <?php }?>


                                        >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shipping_cost">Shipping Cost</label>
                                        <input type="text" class="form-control" id="shipping_cost" name="shipping_cost" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_cost'];?>
">
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="shipping_notes">Shipping Notes</label>
                                <textarea class="form-control" id="shipping_notes" rows="5" name="shipping_notes"><?php echo $_smarty_tpl->tpl_vars['d']->value['shipping_notes'];?>
</textarea>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php }?>


    <input type="hidden" id="_lan_msg_confirm" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
    <input type="hidden" id="admin_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_123715532764d5fb625c4b05_29645125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_123715532764d5fb625c4b05_29645125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>


        Dropzone.autoDiscover = false;
        $(document).ready(function () {



            var _url = $("#_url").val();

            var $modal = $('#cloudonex_body');


            var sysrender = $modal;

            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            var iid = $("#iid").val();
            sysrender.on('click', '#add_payment', function(e){
                e.preventDefault();

                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] === 'Credit Note') {?>
                let url = base_url + 'transactions/modal-expense/' + iid;
                <?php } else { ?>
                let url = base_url + 'invoices/add-payment/' + iid;
                <?php }?>

                $.fancybox.open({
                    src  :  url,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $(".datepicker").datepicker();
                            $("#account").select2({

                            });
                            $("#cats").select2({

                            });
                            $("#pmethod").select2({

                            });
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });


            sysrender.on('click', '#mail_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#mail_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#mail_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });







            });

            sysrender.on('click', '#mail_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });





            });

            sysrender.on('click', '#mail_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });



            sysrender.on('click', '#sms_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });




            });

            sysrender.on('click', '#sms_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#sms_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });




            $modal.on('click', '#btnModalSMSSend', function(event){

                event.preventDefault();

                $.post(base_url + 'sms/init/send_invoice', {


                    message: $('#message').val(),
                    to: $("#sms_to").val(),
                    from: $("#sms_from").val(),
                    invoice_id: $("#smsInvoiceId").val()

                }).done(function (data) {

                    toastr.success(data);
                });

            });



            $modal.on('click', '#send', function(e){

                e.preventDefault();

                var attach_pdf = 'No';

                if($("#attach_pdf").prop('checked') == true){
                    attach_pdf = 'Yes';
                }



                $.post(base_url + 'invoices/send_email', $('#email_form').serialize()).done(function (data) {
                    toastr.success(data);
                });

            });

            $modal.on('click', '#save_payment', function(e){
                e.preventDefault();

                <?php if ($_smarty_tpl->tpl_vars['d']->value['type'] === 'Credit Note') {?>

                let save_payment_url = base_url + 'transactions/expense-post/' + iid;
                <?php } else { ?>
                let save_payment_url = base_url + 'invoices/add-payment-post/' + iid;
                <?php }?>

                $.post(save_payment_url, $("#form_add_payment").serialize())

                    .done(function (data) {


                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else {
                            toastr.error(data);

                        }
                    });


            });

            $("#mark_paid").click(function (e) {
                e.preventDefault();


                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });


            $("#mark_unpaid").click(function (e) {
                e.preventDefault();


                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markunpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_cancelled").click(function (e) {
                e.preventDefault();
                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markcancelled", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_partially_paid").click(function (e) {
                e.preventDefault();
                app.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "invoices/markpartiallypaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });



            $modal.on('click', '#send_bcc_to_admin', function(e){

                e.preventDefault();


                $("#bccemail").val($("#admin_email").val());

            });

            $modal.on('hidden.bs.modal', function () {
                location.reload();
            });


            $('[data-bs-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;




            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", { title: $doc_title.val(), file_link: $file_link.val(), rid: iid, rtype: 'invoice' })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }




                    });


            });

            const set_invoice_status = document.querySelectorAll('.set_invoice_status');


            if (set_invoice_status){
                set_invoice_status.forEach((item) => {
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        const status = item.getAttribute('data-status');
                        const invoice_id = '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
';
                        app.confirm($("#_lan_msg_confirm").val(), function(result) {
                            if(result){

                                $.post(  base_url + "invoices/set-status", {
                                    status: status,
                                    invoice_id: invoice_id,
                                })
                                    .done(function( data ) {
                                        location.reload();
                                    });
                            }
                        });

                    });
                });
            }


            const set_invoice_purchase_status = document.querySelectorAll('.set_invoice_purchase_status');

            if (set_invoice_purchase_status) {
                    set_invoice_purchase_status.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault();
                            const status = item.getAttribute('data-status');
                            const invoice_id = '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
';
                            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                                if(result){

                                    $.post(  base_url + "invoices/set-purchase-status", {
                                        status: status,
                                        invoice_id: invoice_id,
                                    })
                                        .done(function( data ) {
                                            location.reload();
                                        });
                                }
                            });

                        });
                    });
                }

            const set_invoice_shipping_status = document.querySelectorAll('.set_invoice_shipping_status');

            if (set_invoice_shipping_status) {
                    set_invoice_shipping_status.forEach((item) => {
                        item.addEventListener('click', (e) => {
                            e.preventDefault();
                            const status = item.getAttribute('data-status');
                            const invoice_id = '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
';
                            app.confirm($("#_lan_msg_confirm").val(), function(result) {
                                if(result){

                                    $.post(  base_url + "invoices/set-shipping-status", {
                                        status: status,
                                        invoice_id: invoice_id,
                                    })
                                        .done(function( data ) {
                                            location.reload();
                                        });
                                }
                            });

                        });
                    });
                }



        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
