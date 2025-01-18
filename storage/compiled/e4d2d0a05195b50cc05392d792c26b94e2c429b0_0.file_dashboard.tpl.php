<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:07:05
  from 'file:../default/hostbilling/client/dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d609aa6384_63368684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d2d0a05195b50cc05392d792c26b94e2c429b0' => 
    array (
      0 => '../default/hostbilling/client/dashboard.tpl',
      1 => 1690505976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d609aa6384_63368684 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4986046866745d609a82166_11375948', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_4986046866745d609a82166_11375948 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
?>


    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <div class="title">
                <h3>Dashboard</h3>
            </div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/client">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Dashboard');?>
</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="my-3">
                <h4>Welcome <?php echo $_smarty_tpl->getValue('user')->account;?>
!</h4>
            </div>
        </div>
        <div class="col-md-6 text-end">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/hosting-orders/">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->getValue('hosting_orders_count');?>
</h2>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Services');?>
</span>
                </div>

            </a>
        </div>
        <div class="col-md-3">

            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/tickets/all">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->getValue('tickets_count');?>
</h2>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Tickets');?>
</span>
                </div>

            </a>

        </div>

        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/invoices/">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->getValue('invoices_count');?>
</h2>
                    <span><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</span>
                </div>

            </a>
        </div>
        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/domain-orders/">
                <div class="card card-body">
                    <h2><?php echo $_smarty_tpl->getValue('domains_count');?>
</h2>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Domains');?>
</span>
                </div>

            </a>
        </div>

    </div>

    <div class="card bg-white mt-4">
        <div class="card-body p-3">

            <h5 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Recent Orders'];?>
</h5>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('recent_orders'))) {?>

                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                    <tbody>
                    <tr>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Order'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Domain'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</strong>
                        </th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('recent_orders'), 'recent_order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('recent_order')->value) {
$foreach0DoElse = false;
?>

                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/view-order/<?php echo $_smarty_tpl->getValue('recent_order')->id;?>
/" class="font-weight-bold">
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('recent_order')->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </td>
                            <td>
                                <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->getValue('recent_order')->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('recent_order')->created_at));?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('recent_order')->total,$_smarty_tpl->getValue('config')['home_currency']);?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_order_status_with_badge')($_smarty_tpl->getValue('recent_order')->status);?>

                            </td>
                        </tr>


                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>

                <?php } else { ?>

                <div>
                    <p class="mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No Recent Orders');?>
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
                        <h5 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Recent Invoices'];?>
</h5>
                        <div class="table-responsive">

                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('invoices'))) {?>
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <tbody>

                                    <tr>
                                        <th>
                                            <strong><?php echo $_smarty_tpl->getValue('_L')['Invoice'];?>
</strong>
                                        </th>
                                        <th>
                                            <strong><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</strong>
                                        </th>
                                        <th>
                                            <strong><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
</strong>
                                        </th>
                                    </tr>

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('invoices'), 'recent_invoice');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('recent_invoice')->value) {
$foreach1DoElse = false;
?>

                                        <tr>
                                            <td>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/iview/<?php echo $_smarty_tpl->getValue('recent_invoice')->id;?>
/token_<?php echo $_smarty_tpl->getValue('recent_invoice')->vtoken;?>
/">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_invoice_number')($_smarty_tpl->getValue('recent_invoice'));?>

                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_invoice_status_with_badge')($_smarty_tpl->getValue('recent_invoice')->status);?>

                                            </td>
                                            <td>
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('recent_invoice')->date));?>

                                            </td>
                                        </tr>

                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                    </tbody>
                                </table>
                                <?php } else { ?>
                                <div>
                                    <p class="mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No Recent Invoices');?>
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
                    <h5 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Recent Domains'];?>
</h5>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('recent_domains'))) {?>
                        <table class="table table-striped">
                            <tbody>

                            <tr>
                                <th>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Order'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Domain'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Date'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
</strong>
                                </th>
                                <th>
                                    <strong><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</strong>
                                </th>
                            </tr>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('recent_domains'), 'recent_order');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('recent_order')->value) {
$foreach2DoElse = false;
?>

                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/view-domain/<?php echo $_smarty_tpl->getValue('recent_order')->id;?>
/" class="font-weight-bold">
                                            <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('recent_order')->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                        </a>
                                    </td>
                                    <td>
                                        <?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->getValue('recent_order')->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('recent_order')->created_at));?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('recent_order')->total,$_smarty_tpl->getValue('config')['home_currency']);?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_order_status_with_badge')($_smarty_tpl->getValue('recent_order')->status);?>

                                    </td>
                                </tr>


                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>
                        <?php } else { ?>
                        <div>
                            <p class="mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No Recent Domains');?>
</p>
                        </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body p-3">
            <h5 class="mb-3"><?php echo $_smarty_tpl->getValue('_L')['Recent Tickets'];?>
</h5>

            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('recent_tickets'))) {?>
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Ticket'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</strong>
                        </th>
                        <th>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Last Update'];?>
</strong>
                        </th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('recent_tickets'), 'recent_ticket');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('recent_ticket')->value) {
$foreach3DoElse = false;
?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/tickets/view/<?php echo $_smarty_tpl->getValue('recent_ticket')->tid;?>
" class="font-weight-bold">
                                    <?php echo $_smarty_tpl->getValue('recent_ticket')->tid;?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
client/tickets/view/<?php echo $_smarty_tpl->getValue('recent_ticket')->tid;?>
" class="font-weight-bold">
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('recent_ticket')->subject, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_ticket_status_with_badge')(htmlspecialchars((string)$_smarty_tpl->getValue('recent_ticket')->status, ENT_QUOTES, 'UTF-8', true));?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('recent_ticket')->updated_at));?>

                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div>
                    <p class="mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No Recent Tickets');?>
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
