<?php
/* Smarty version 5.4.2, created on 2024-11-26 09:05:26
  from 'file:hostbilling/admin/contact_base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d5a6b2aa42_83102079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ed839737caea202fb98c03933557090d541d9b' => 
    array (
      0 => 'hostbilling/admin/contact_base.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d5a6b2aa42_83102079 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16041308266745d5a6adedf9_55223976', "head");
?>








<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3438646296745d5a6ae27b3_38174908', "content");
?>





    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1304607336745d5a6b21e82_31979002', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_16041308266745d5a6adedf9_55223976 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
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
            color: #2CCE89!important;
        }

        .icon-shape {
            padding: 12px;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .icon {
            width: 3rem;
            height: 3rem;
        }
        .text-white {
            color: #fff !important;
        }
        .text-white {
            color: #fff !important;
        }
        .shadow {
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
        }
        .rounded-circle, .avatar.rounded-circle img {
            border-radius: 50% !important;
        }
        .bg-gradient-red {
            background: linear-gradient(
                    87deg
                    , #f5365c 0, #f56036 100%) !important;
        }

        .bg-gradient-success {
            background: #E9F9EE !important;
            color: #27C76F;
        }
        .bg-gradient-warning {
            background: #FFF4E9 !important;
            color: #FF9F43;
        }
        .bg-gradient-info{
            background: #E8F9FD !important;
            color: #E8F9FD;
        }
        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }
        .bg-gradient-primary {
            background: linear-gradient(
                    87deg
                    , #5e72e4 0, #825ee4 100%) !important;
        }
        .bg-info {
            background: #EFEDFD !important;
        }
        .clx-avatar {
            display: inline-block;
            font-size: 1.3em;
            width: 42px;
            height: 42px;
            line-height: 2;
            text-align: center;
            border-radius: 0%;
            background: #eee5ff;
            vertical-align: middle;
            color: #a47dfd;
        }


        .user-info-title {
            width: 11.785rem;
        }
        .nav-link {
            display: block;
            padding: 0.5rem 1.125rem;
            color: #4d4c5d;
            text-decoration: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "inner_content"} */
class Block_16404128096745d5a6b1ec08_96560157 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
}
}
/* {/block "inner_content"} */
/* {block "content"} */
class Block_3438646296745d5a6ae27b3_38174908 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
?>


<div class="row">
    <!-- User Card starts-->
    <div class="col-md-4">
        <div class="card user-card">
            <div class="card-body">
                <div class="">
                    <div class=" flex-column justify-content-between border-container-lg">
                        <div class="user-avatar-section ">
                            <div class="d-flex justify-content-center">


                                <div class="thumb-info mb-md">
                                    <?php if ($_smarty_tpl->getValue('contact')['img'] == 'gravatar') {?>
                                        <img src="http://www.gravatar.com/avatar/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('d')['email']);?>
?s=400"  style="max-width: 120px; class=" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->getValue('contact')['fname'];?>
 <?php echo $_smarty_tpl->getValue('contact')['lname'];?>
">
                                    <?php } elseif ($_smarty_tpl->getValue('contact')['img'] == '') {?>
                                        <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
storage/system/profile-icon.png" class="img-thumbnail img-fluid" alt="<?php echo $_smarty_tpl->getValue('contact')['fname'];?>
 <?php echo $_smarty_tpl->getValue('contact')['lname'];?>
">
                                    <?php } else { ?>
                                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php echo $_smarty_tpl->getValue('contact')['img'];?>
" class="img-thumbnail img-fluid" style="font-size: 50px; alt="<?php echo $_smarty_tpl->getValue('contact')['fname'];?>
 <?php echo $_smarty_tpl->getValue('contact')['lname'];?>
">
                                    <?php }?>
                                    <div class="thumb-info-title">
                                        <span class="thumb-info-inner"><?php echo $_smarty_tpl->getValue('contact')['fname'];?>
 <?php echo $_smarty_tpl->getValue('contact')['lname'];?>
</span>

                                    </div>

                                    <div class="user-info mt-3">
                                        <h4 class="mb-0"><?php echo $_smarty_tpl->getValue('contact')->account;?>
</h4>
                                        <span class="card-text"><?php echo $_smarty_tpl->getValue('contact')->email;?>
</span>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center user-total-numbers mt-4">
                            <div class="d-flex align-items-center me-2">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7367F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>

                                    </div>
                                </div>
                                <div class="ms-1">
                                    <h5 class="mb-0"><?php echo $_smarty_tpl->getValue('tickets_count');?>
</h5>
                                    <small><?php echo $_smarty_tpl->getValue('_L')['Tickets'];?>
</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#27C76F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>


                                    </div>
                                </div>
                                <div class="ms-1">
                                    <h5 class="mb-0"><?php echo $_smarty_tpl->getValue('invoices_count');?>
</h5>
                                    <small><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#07CFE7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                </div>
                                <div class="ms-1">
                                    <h5 class="mb-0"><?php echo $_smarty_tpl->getValue('quotes_count');?>
</h5>
                                    <small><?php echo $_smarty_tpl->getValue('_L')['Total Quotes'];?>
 </small>
                                </div>
                            </div>

                        </div>

                        <?php if ($_smarty_tpl->getValue('config')['add_fund'] == '1') {?>
                            <hr>

                            <h3 class="mb-2"><?php echo $_smarty_tpl->getValue('_L')['Balance'];?>
 : <span class="amount"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('contact')->balance,$_smarty_tpl->getValue('config')['home_currency']);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span></h3>
                            <a href="javascript:void(0)" class="btn btn-primary add_fund"><?php echo $_smarty_tpl->getValue('_L')['Add Fund'];?>
</a>
                            <a href="javascript:void(0)" class="btn btn-danger return_fund"><?php echo $_smarty_tpl->getValue('_L')['Return Fund'];?>
</a>
                        <?php }?>
                    </div>
                    <div class="user-info-wrapper mt-3">

                        <div class="d-flex flex-wrap my-50 mb-2">
                            <div class="user-info-title text-muted">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span class="card-text user-info-title text-muted font-weight-bold mb-0 ms-3"><?php echo $_smarty_tpl->getValue('_L')['Company Name'];?>
</span>
                            </div>
                            <p class="card-text mb-0">
                                <?php echo $_smarty_tpl->getValue('contact')->company;?>


                            </p>
                        </div>
                        <div class="d-flex flex-wrap my-50 mb-2">
                            <div class="user-info-title text-muted">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                <span class="card-text user-info-title text-muted  font-weight-bold mb-0 ms-3"><?php echo $_smarty_tpl->getValue('_L')['Tags'];?>
</span>
                            </div>
                            <p class="card-text mb-0">
                                <?php echo $_smarty_tpl->getValue('contact')->tags;?>

                            </p>
                        </div>
                        <div class="d-flex flex-wrap my-50 mb-2">
                            <div class="user-info-title text-muted">


                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                <span class="card-text user-info-title text-muted  font-weight-bold mb-0 ms-3"><?php echo $_smarty_tpl->getValue('_L')['Group'];?>
</span>
                            </div>
                            <p class="card-text mb-0">
                                <?php echo $_smarty_tpl->getValue('contact')->gname;?>

                            </p>
                        </div>
                        <div class="d-flex flex-wrap my-50 mb-2">
                            <div class="user-info-title text-muted">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span class="card-text user-info-title text-muted font-weight-bold mb-0 ms-3"><?php echo $_smarty_tpl->getValue('_L')['Address'];?>
</span>
                            </div>
                            <p class="card-text mb-0"><?php echo $_smarty_tpl->getValue('contact')->address;?>
</p>
                        </div>
                        <div class="d-flex flex-wrap mb-2">
                            <div class="user-info-title text-muted">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span class="card-text user-info-title  text-muted font-weight-bold mb-0 ms-3"><?php echo $_smarty_tpl->getValue('_L')['City'];?>
</span>
                            </div>
                            <p class="card-text mb-0"><?php echo $_smarty_tpl->getValue('contact')->city;?>
</p>
                        </div>
                        <div class="d-flex flex-wrap mb-2">
                            <div class="user-info-title text-muted">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>

                                <span class="card-text user-info-title  text-muted font-weight-bold mb-0 ms-3"><?php echo $_smarty_tpl->getValue('_L')['Country'];?>
</span>
                            </div>
                            <p class="card-text mb-0"><?php echo $_smarty_tpl->getValue('contact')->country;?>
</p>
                        </div>

                    </div>
                    <?php if ($_smarty_tpl->getValue('config')['client_dashboard'] == '1') {?>
                        <hr>

                        <?php if ($_smarty_tpl->getValue('contact')->autologin != '') {?>
                            <div class="mb-3 h5">
                                <label for="auto_login_url"><?php echo $_smarty_tpl->getValue('_L')['Auto Login URL'];?>
</label>
                                <input class="form-control" type="text" id="auto_login_url" onClick="this.setSelectionRange(0, this.value.length)" name="auto_login_url" value="<?php echo $_smarty_tpl->getValue('_url');?>
client/autologin/<?php echo $_smarty_tpl->getValue('contact')->autologin;?>
">
                            </div>
                            <p class="help-block">
                                <a class="h6 text-info" href="<?php echo $_smarty_tpl->getValue('_url');?>
client/autologin/<?php echo $_smarty_tpl->getValue('contact')->autologin;?>
" target="_blank"><?php echo $_smarty_tpl->getValue('_L')['Login As Customer'];?>
</a> |
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/revoke_auto_login/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/"><?php echo $_smarty_tpl->getValue('_L')['Revoke Auto Login'];?>
</a> |
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/gen_auto_login/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/"><?php echo $_smarty_tpl->getValue('_L')['Re Generate URL'];?>
</a>
                            </p>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/gen_auto_login/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/" class="md-btn md-btn-primary"> <?php echo $_smarty_tpl->getValue('_L')['Create Auto Login URL'];?>
</a>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-8">
        <div  class="card ">

            <div class="card-body">
                <div class="panel-content">

                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item"><a class="nav-link fw-bolder <?php if ($_smarty_tpl->getValue('tab') == 'orders') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/orders/"><strong><?php echo $_smarty_tpl->getValue('_L')['Hosting Orders'];?>
</strong></a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->getValue('tab') == 'domains') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/domains/"><strong><?php echo $_smarty_tpl->getValue('_L')['Domain Orders'];?>
</strong></a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->getValue('tab') == 'tickets') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/tickets/"><strong><?php echo $_smarty_tpl->getValue('_L')['Tickets'];?>
</strong></a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->getValue('tab') == 'invoices') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/invoices/"><strong><?php echo $_smarty_tpl->getValue('_L')['Invoices'];?>
</strong></a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->getValue('tab') == 'quotes') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/quotes/"><strong><?php echo $_smarty_tpl->getValue('_L')['Quotes'];?>
</strong></a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->getValue('tab') == 'edit') {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/edit/"><strong><?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</strong></a></li>


                    </ul>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade show active">
                            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16404128096745d5a6b1ec08_96560157', "inner_content", $this->tplIndex);
?>

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
class Block_1304607336745d5a6b21e82_31979002 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/admin';
?>


        <?php echo '<script'; ?>
>

            $(function () {

                $('.add_fund').on('click',function (e) {
                    e.preventDefault();

                    (async () => {

                        const { value: amount } = await Swal.fire({
                            title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Add Fund');?>
',
                            input: 'text',
                            inputLabel: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Amount');?>
',
                            inputPlaceholder: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Amount');?>
',
                        })

                        if (amount) {
                            $.redirectPost(base_url + "contacts/add_fund/",{ amount: amount, cid: '<?php echo $_smarty_tpl->getValue('contact')->id;?>
'});
                        }

                    })();

                });


                $('.return_fund').on('click',function (e) {
                    e.preventDefault();

                    (async () => {

                        const { value: amount } = await Swal.fire({
                            title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Return Fund');?>
',
                            input: 'text',
                            inputLabel: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Amount');?>
',
                            inputPlaceholder: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Amount');?>
',
                        })

                        if (amount) {
                            $.redirectPost(base_url + "contacts/return_fund/",{ amount: amount, cid: '<?php echo $_smarty_tpl->getValue('contact')->id;?>
'});
                        }

                    })();

                });



            });

        <?php echo '</script'; ?>
>


    <?php
}
}
/* {/block 'script'} */
}
