<?php
/* Smarty version 4.3.2, created on 2023-08-11 05:02:48
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/client/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d5f9383bde81_24255440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6039ad3c70b913a5432f04a0531216206b1c71' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/client/dashboard.tpl',
      1 => 1690534774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d5f9383bde81_24255440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32551849164d5f938395d26_36059886', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_32551849164d5f938395d26_36059886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_32551849164d5f938395d26_36059886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <div class="title">
                <h3>Dashboard</h3>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/client">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo __('Dashboard');?>
</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="my-3">
                <h4>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
!</h4>
            </div>
        </div>
        <div class="col-md-6 text-end">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/hosting-orders/">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['hosting_orders_count']->value;?>
</h2>
                    <span><?php echo __('Services');?>
</span>
                </div>

            </a>
        </div>
        <div class="col-md-3">

            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/all">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['tickets_count']->value;?>
</h2>
                    <span><?php echo __('Tickets');?>
</span>
                </div>

            </a>

        </div>

        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/invoices/">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['invoices_count']->value;?>
</h2>
                    <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span>
                </div>

            </a>
        </div>
        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/domain-orders/">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->tpl_vars['domains_count']->value;?>
</h2>
                    <span><?php echo __('Domains');?>
</span>
                </div>

            </a>
        </div>

    </div>

    <div class="card bg-white mt-4">
        <div class="card-body p-3">

            <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Orders'];?>
</h5>

            <?php if (count($_smarty_tpl->tpl_vars['recent_orders']->value)) {?>

                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                    <tbody>
                    <tr>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</strong>
                        </th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_orders']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-order/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </td>
                            <td>
                                <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            </td>
                            <td>
                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                            </td>
                            <td>
                                <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                            </td>
                            <td>
                                <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

                            </td>
                        </tr>


                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>

                <?php } else { ?>

                <div>
                    <p class="mt-3"><?php echo __('No Recent Orders');?>
</p>
                </div>

            <?php }?>


        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="">


                <div class="card mb-3">

                    <div class="card-body p-3">
                        <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h5>
                        <div class="table-responsive">

                            <?php if (count($_smarty_tpl->tpl_vars['invoices']->value)) {?>
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <tbody>

                                    <tr>
                                        <th>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</strong>
                                        </th>
                                        <th>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</strong>
                                        </th>
                                        <th>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</strong>
                                        </th>
                                    </tr>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'recent_invoice');
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_invoice']->value) {
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = false;
?>

                                        <tr>
                                            <td>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->vtoken;?>
/">
                                                    <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_invoice']->value);?>

                                                </a>
                                            </td>
                                            <td>
                                                <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_invoice']->value->status);?>

                                            </td>
                                            <td>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_invoice']->value->date));?>

                                            </td>
                                        </tr>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </tbody>
                                </table>
                                <?php } else { ?>
                                <div>
                                    <p class="mt-3"><?php echo __('No Recent Invoices');?>
</p>
                                </div>
                            <?php }?>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Domains'];?>
</h5>
                    <?php if (count($_smarty_tpl->tpl_vars['recent_domains']->value)) {?>
                        <table class="table table-striped">
                            <tbody>

                            <tr>
                                <th>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</strong>
                                </th>
                            </tr>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_domains']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-domain/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                            <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                        </a>
                                    </td>
                                    <td>
                                        <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                    </td>
                                    <td>
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                                    </td>
                                    <td>
                                        <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    </td>
                                    <td>
                                        <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

                                    </td>
                                </tr>


                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>
                        <?php } else { ?>
                        <div>
                            <p class="mt-3"><?php echo __('No Recent Domains');?>
</p>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body p-3">
            <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Tickets'];?>
</h5>

            <?php if (count($_smarty_tpl->tpl_vars['recent_tickets']->value)) {?>
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Update'];?>
</strong>
                        </th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_tickets']->value, 'recent_ticket');
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_ticket']->value) {
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = false;
?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>
" class="font-weight-bold">
                                    <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>
" class="font-weight-bold">
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->subject, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </td>
                            <td>
                                <?php echo cloudonex_get_ticket_status_with_badge(htmlspecialchars((string)$_smarty_tpl->tpl_vars['recent_ticket']->value->status, ENT_QUOTES, 'UTF-8', true));?>

                            </td>
                            <td>
                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_ticket']->value->updated_at));?>

                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div>
                    <p class="mt-3"><?php echo __('No Recent Tickets');?>
</p>
                </div>
            <?php }?>

        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
