<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:25:18
  from 'file:../default/client_profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e13de7e28a1_32917897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c966c213a4b1503ab84d343e50d42f8b5f21287a' => 
    array (
      0 => '../default/client_profile.tpl',
      1 => 1734218717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e13de7e28a1_32917897 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1928068437675e13de7beb55_99237647', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1624570473675e13de7c0179_65749825', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1602032407675e13de7e1511_87920988', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_client')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1928068437675e13de7beb55_99237647 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
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

</style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1624570473675e13de7c0179_65749825 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <div>
                        <div class="text-center">


                            <?php if ($_smarty_tpl->getValue('user')['img'] == '') {?>
                                <span class="clx-avatar-xl"><?php echo $_smarty_tpl->getValue('user')->account[0];?>
</span>

                            <?php } else { ?>

                                <a href="javascript:;" onclick="upload_profile_picture();">
                                    <img src="<?php echo $_smarty_tpl->getValue('app_url');
echo $_smarty_tpl->getValue('user')->img;?>
" class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" style="max-width: 128px;" alt="<?php echo $_smarty_tpl->getValue('user')->account;?>
">
                                </a>
                            <?php }?>

                            <form enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
client/profile-picture-upload" id="form_profile_picture">
                                <input type="file" id="file_profile_picture" name="file" style="display: none;" />
                            </form>

                            <h3 style="margin-top: 20px; margin-bottom: 20px;"><span class="h2"><?php echo $_smarty_tpl->getValue('user')->account;?>
</span></h3>

                            <strong><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
:</strong> <?php echo $_smarty_tpl->getValue('user')->phone;?>

                            <br>
                            <strong><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
:</strong> <?php echo $_smarty_tpl->getValue('user')->email;?>


                            <?php if ($_smarty_tpl->getValue('config')['show_business_number'] == '1') {?>

                                <br>

                                <strong><?php echo $_smarty_tpl->getValue('config')['label_business_number'];?>
:</strong> <?php echo $_smarty_tpl->getValue('user')->business_number;?>


                            <?php }?>
                            <br>
                            <br>

                            <address>
                                <?php if ($_smarty_tpl->getValue('user')->company != '') {?>
                                    <?php echo $_smarty_tpl->getValue('user')->company;?>

                                    <br>
                                    <?php echo $_smarty_tpl->getValue('user')->account;?>

                                    <br>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getValue('user')->account;?>

                                    <br>
                                <?php }?>
                                <?php echo $_smarty_tpl->getValue('user')->address;?>
 <br>
                                <?php echo $_smarty_tpl->getValue('user')->city;?>
 <br>
                                <?php echo $_smarty_tpl->getValue('user')->state;?>
 - <?php echo $_smarty_tpl->getValue('user')->zip;?>
 <br>
                                <?php echo $_smarty_tpl->getValue('user')->country;?>

                                <br>


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cf'), 'cfs');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cfs')->value) {
$foreach0DoElse = false;
?>
                                    <br>
                                    <strong><?php echo $_smarty_tpl->getValue('cfs')['fieldname'];?>
: </strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_custom_field_value')($_smarty_tpl->getValue('cfs')['id'],$_smarty_tpl->getValue('user')->id);?>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </address>


                            <a class="btn btn-primary" href="javascript:;" onclick="upload_profile_picture();"><?php echo $_smarty_tpl->getValue('_L')['Upload Picture'];?>
</a>

                            <?php if ($_smarty_tpl->getValue('user')['img'] != '') {?>
                                <a class="btn btn-danger shadow-none" href="<?php echo $_smarty_tpl->getValue('_url');?>
client/remove-profile-picture"><?php echo $_smarty_tpl->getValue('_L')['No Image'];?>
</a>
                            <?php }?>

                            <br>

                             <?php if (!empty($_smarty_tpl->getValue('config')['shipping_address'])) {?>
                                 <a class="btn btn-warning mt-3" href="<?php echo $_smarty_tpl->getValue('_url');?>
client/shipping-addresses"><?php echo $_smarty_tpl->getValue('_L')['Shipping Addresses'];?>
</a>
                             <?php }?>



                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="panel-content">

                        <h2><?php echo $_smarty_tpl->getValue('_L')['Edit Profile'];?>
</h2>

                        <form class="form-horizontal" id="iform">

                            <div class="mb-3"><label  for="account"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Account Name'];?>
</span></label>

                                <input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['account'];?>
">
                            </div>

                            <div class="mb-3"><label  for="company"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Company Name'];?>
</span></label>

                                <input type="text" id="company" name="company" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['company'];?>
">
                            </div>

                            <div class="mb-3"><label  for="edit_email"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</span></label>

                                <input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['email'];?>
">
                            </div>
                            <div class="mb-3"><label  for="phone"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
</span></label>

                                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['phone'];?>
">
                            </div>

                            <?php if ($_smarty_tpl->getValue('config')['show_business_number'] == '1') {?>

                                <div class="mb-3">

                                    <label for="business_number"><span class="h6"><?php echo $_smarty_tpl->getValue('config')['label_business_number'];?>
</span> </label>

                                    <input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['business_number'];?>
">
                                </div>

                            <?php }?>

                            <?php if (!(null !== ($_smarty_tpl->getValue('hide_client_address') ?? null))) {?>

                                <div class="mb-3"><label  for="address"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Address'];?>
</span></label>

                                    <input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['address'];?>
">
                                </div>
                                <div class="mb-3"><label  for="city"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['City'];?>
</span></label>

                                    <input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['city'];?>
">
                                </div>
                                <div class="mb-3"><label  for="state"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['State Region'];?>
</span></label>

                                    <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['state'];?>
">
                                </div>
                                <div class="mb-3"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['ZIP Postal Code'];?>
</span> </label>

                                    <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->getValue('d')['zip'];?>
">
                                </div>
                                <div class="mb-3"><label  for="country"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Country'];?>
</span></label>

                                    <select name="country" id="country" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->getValue('_L')['Select Country'];?>
</option>
                                        <?php echo $_smarty_tpl->getValue('countries');?>

                                    </select>
                                </div>

                            <?php }?>





                            <div class="mb-3"><label  for="password"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
 </span></label>

                                <input type="password" id="password" name="password" class="form-control">

                                <span class="help-block text-info"><?php echo $_smarty_tpl->getValue('_L')['password_change_help'];?>
</span>

                            </div>



                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" id="submit"> <?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                            </div>

                        </form>


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
class Block_1602032407675e13de7e1511_87920988 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>

        var $file_profile_picture = $("#file_profile_picture");

        function upload_profile_picture()
        {
            $file_profile_picture.click();
        }

        $(function () {


            $file_profile_picture.change(function() {
                $('#form_profile_picture').submit();
            });


            var btn_form_action = $("#submit");


            var iform = $('#iform');


            var _url = $("#_url").val();

            btn_form_action.on('click', function(e) {
                e.preventDefault();
                iform.block({ message: block_msg });
                $.post( _url + "client/profile_edit_post/", iform.serialize())
                    .done(function (data) {
                        if ($.isNumeric(data)) {

                            location.reload();

                        }
                        else {



                            // OR

                            iform.unblock();


                            toastr.error(data)





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
