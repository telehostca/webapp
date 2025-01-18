<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:21
  from 'file:../default/contacts_add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3492adb84_26187609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97c134843f58f92cd0231cd0b3096b4febd09855' => 
    array (
      0 => '../default/contacts_add.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3492adb84_26187609 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18280581836745d34925afe4_61898991', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7521068496745d34925cf03_90041645', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_356132086745d3492a5814_61990814', "script");
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_18280581836745d34925afe4_61898991 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>





<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_7521068496745d34925cf03_90041645 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="row">

        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2><span></span><?php echo $_smarty_tpl->getValue('_L')['Add Contact'];?>
</h2>

                </div>

                <div class="panel-container show" id="ibox_form">

                    <div class="panel-content">

                        <div class="px-2">
                            <div class="alert alert-danger" id="emsg" style="display: none;">
                                <span id="emsgbody"></span>
                            </div>

                            <form id="rform">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3 row">
                                            <label for="account" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Full Name'];?>
</span><span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="account" name="account" class="form-control" autofocus>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="code" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Code'];?>
</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->getValue('predict_customer_number');?>
">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="display_name" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('config')['contact_extra_field'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <input type="text" id="display_name" name="display_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="cid" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Company'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <select id="cid" name="cid" class="form-control">
                                                    <option value="0"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('companies'), 'company');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('company')->value) {
$foreach0DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('company')['id'];?>
" <?php if ($_smarty_tpl->getValue('c_selected_id') == ($_smarty_tpl->getValue('company')['id'])) {?>selected<?php }?>>
                                                            <?php echo $_smarty_tpl->getValue('company')['company_name'];?>

                                                        </option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>



                                        <?php if ($_smarty_tpl->getValue('config')['show_business_number'] == '1') {?>
                                            <div class="mb-3 row">
                                                <label for="business_number" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('config')['label_business_number'];?>
</span> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="business_number" name="business_number" class="form-control">
                                                </div>
                                            </div>


                                        <?php }?>

                                        <div class="mb-3 row">
                                            <label for="type" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultChecked" name="customer" value="Customer" <?php if ($_smarty_tpl->getValue('contact_type') == 'customer') {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="defaultChecked"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Customer'];?>
</span></label>
                                                </div>

                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="input_supplier" name="supplier" value="Supplier" <?php if ($_smarty_tpl->getValue('contact_type') == 'supplier') {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="input_supplier"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Supplier'];?>
</span></label>
                                                </div>

                                            </div>
                                        </div>


                                        <?php if ($_smarty_tpl->getValue('config')['fax_field'] == '1') {?>

                                            <div class="mb-3 row">
                                                <label for="fax" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Fax'];?>
</span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="fax" name="fax" class="form-control">


                                                </div>
                                            </div>


                                        <?php }?>



                                        <div class="mb-3 row">
                                            <label for="address" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Address'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="address" name="address" class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="city" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['City'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="city" name="city" class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="state" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['State Region'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="state" name="state" class="form-control">


                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="zip" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['ZIP Postal Code'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="zip" name="zip" class="form-control">
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="country" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Country'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select name="country" id="country" class="form-control">
                                                    <option value=""><span></span><?php echo $_smarty_tpl->getValue('_L')['Select Country'];?>
</option>
                                                    <?php echo $_smarty_tpl->getValue('countries');?>

                                                </select>
                                            </div>
                                        </div>




                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fs'), 'f');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('f')->value) {
$foreach1DoElse = false;
?>
                                            <div class="mb-3 row">
                                                <label class="form-label col-sm-3" for="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
"><span class="h6"><?php echo $_smarty_tpl->getValue('f')['fieldname'];?>
</span></label>
                                                <?php if (($_smarty_tpl->getValue('f')['fieldtype']) == 'text') {?>


                                                    <div class="col-sm-9">

                                                        <input type="text" id="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" class="form-control">
                                                        <?php if (($_smarty_tpl->getValue('f')['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('f')['description'];?>
</p>
                                                        <?php }?>
                                                    </div>


                                                <?php } elseif (($_smarty_tpl->getValue('f')['fieldtype']) == 'password') {?>

                                                    <div class="col-sm-9">
                                                        <input type="password" id="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" class="form-control">
                                                        <?php if (($_smarty_tpl->getValue('f')['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('f')['description'];?>
</p>
                                                        <?php }?>
                                                    </div>



                                                <?php } elseif (($_smarty_tpl->getValue('f')['fieldtype']) == 'dropdown') {?>

                                                    <div class="col-sm-9">
                                                        <select id="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" class="form-control">
                                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('explode')(',',$_smarty_tpl->getValue('f')['fieldoptions']), 'fo');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('fo')->value) {
$foreach2DoElse = false;
?>
                                                                <option value="<?php echo $_smarty_tpl->getValue('fo');?>
"><?php echo $_smarty_tpl->getValue('fo');?>
</option>
                                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                        <?php if (($_smarty_tpl->getValue('f')['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('f')['description'];?>
</p>
                                                        <?php }?>
                                                    </div>


                                                <?php } elseif (($_smarty_tpl->getValue('f')['fieldtype']) == 'textarea') {?>

                                                    <div class="col-sm-9">
                                                        <textarea id="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" name="cf<?php echo $_smarty_tpl->getValue('f')['id'];?>
" class="form-control" rows="3"></textarea>
                                                        <?php if (($_smarty_tpl->getValue('f')['description']) != '') {?>
                                                            <p class="help-block mb-2"><?php echo $_smarty_tpl->getValue('f')['description'];?>
</p>
                                                        <?php }?>
                                                    </div>

                                                <?php }?>

                                            </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="email" name="email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="secondary_email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Secondary Email'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="secondary_email" name="secondary_email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="phone" name="phone" class="form-control">


                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="currency" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Currency'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select id="currency" name="currency" class="form-control">

                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach3DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('currency')['id'];?>
"
                                                                <?php if ($_smarty_tpl->getValue('config')['home_currency'] == ($_smarty_tpl->getValue('currency')['cname'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('currency')['cname'];?>
</option>
                                                        <?php
}
if ($foreach3DoElse) {
?>
                                                        <option value="0"><?php echo $_smarty_tpl->getValue('config')['home_currency'];?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="group" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Group'];?>
 </span></label>
                                            <div class="col-sm-9">

                                                <select class="form-select" name="group" id="group">
                                                    <option value="0"><?php echo $_smarty_tpl->getValue('_L')['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gs'), 'g');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach4DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('g')['id'];?>
" <?php if ($_smarty_tpl->getValue('g_selected_id') == ($_smarty_tpl->getValue('g')['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('g')['gname'];?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                                <span class="help-block "><a href="#" id="add_new_group" class="text-info"> <span class="h6 text-info"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add New Group'];?>
</a></span> </span>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="owner_id" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Owner'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select class="form-select" name="owner_id" id="owner_id">
                                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('owners'), 'owner');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('owner')->value) {
$foreach5DoElse = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->getValue('owner')->id;?>
" <?php if ($_smarty_tpl->getValue('owner')->id == $_smarty_tpl->getValue('user')->id) {?>selected<?php }?> ><?php echo $_smarty_tpl->getValue('owner')->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>



                                        <?php if ($_smarty_tpl->getValue('config')['customer_custom_username']) {?>

                                            <div class="mb-3 row">
                                                <label for="zip" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Username'];?>
 </span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="username" name="username" class="form-control">
                                                </div>
                                            </div>

                                        <?php }?>

                                        <div class="mb-3 row">
                                            <label for="password" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <input type="password" id="password" name="password" class="form-control">
                                                <a href="javascript:;" id="generate_password"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Generate Password');?>
</span></a>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="cpassword" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Confirm Password'];?>
</span></label>
                                            <div class="col-sm-9">

                                                <input type="password" id="cpassword" name="cpassword" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="send_client_signup_email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->getValue('_L')['Welcome Email'];?>
</span></label>
                                            <div class="col-sm-9">
                                                <label class="switch s-icons s-outline s-outline-primary">
                                                    <input type="checkbox" name="send_client_signup_email" value="on" id="send_client_signup_email">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">


                                            <button class="btn btn-primary mt-3 me-3" type="submit" id="submit"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>


                                        </div>
                                    </div>
                                </div>


                            </form>
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
class Block_356132086745d3492a5814_61990814 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(".progress").hide();
            $("#emsg").hide();
            var _url = '<?php echo $_smarty_tpl->getValue('_url');?>
';





            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
                theme: "bootstrap"
            });

            var $cid = $('#cid');

            $cid.select2();

            $country = $("#country");

            $country.select2();


            //
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message:block_msg });
                $.post(base_url + 'contacts/add-post/', $( "#rform" ).serialize())
                    .done(function (data) {
                        var sbutton = $("#submit");
                        if ($.isNumeric(data)) {

                            window.location = base_url + 'contacts/view/' + data;
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });





            <?php if ($_smarty_tpl->getValue('config')['show_business_number'] == '1') {?>


            var $business_number = $("#business_number");

            var $address = $("#address");

            var $city = $("#city");

            var $state = $("#state");

            var $zip = $("#zip");



            function getBusinessDetails() {

                if($cid.val() === '0'){
                   // $business_number.val('');
                    return;
                }

                $.getJSON( base_url + "contacts/get_company_details/" +  $cid.val(), function( data ) {

                    console.log(data);

                    if(data.success === false){

                    }
                    else{

                        $business_number.val(data.business_number);

                        $address.val(data.address1);

                        $city.val(data.city);

                        $state.val(data.state);

                        $zip.val(data.zip);

                        $country.val(data.country).trigger('change');

                    }

                });
            }

            getBusinessDetails();


            $cid.change(function () {

                getBusinessDetails();


            });


            <?php }?>


            $("#add_new_group").click(function(e){

                e.preventDefault();

                (async () => {

                    const { value: group_name } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->getValue('_L')['Add New Group'];?>
',
                        input: 'text',
                        inputLabel: '<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
',
                        inputPlaceholder: '<?php echo $_smarty_tpl->getValue('_L')['Group Name'];?>
',
                    })

                    if (group_name) {
                        $.post(  _url + "contacts/add_group/", { group_name: group_name })
                            .done(function( data ) {

                                if ($.isNumeric(data)) {

                                    window.location = _url + 'contacts/add/customer/' + data + '/' + $cid.val();

                                }

                                else {
                                    Swal.fire({
                                        title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Error');?>
',
                                        text: data,
                                        type: 'error',
                                        confirmButtonText: '<?php echo $_smarty_tpl->getValue('_L')['Close'];?>
'
                                    })
                                }

                            });
                    }

                })()


            });

            function generatePassword() {
                let length = 10,
                    charset = "abcdefghijklmnopqrstuvwxyz@#ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
                    retVal = "";
                for (let i = 0, n = charset.length; i < length; ++i) {
                    retVal += charset.charAt(Math.floor(Math.random() * n));
                }

                // Check if password contains at least one number
                if (!/\d/.test(retVal)) {
                    retVal = generatePassword();
                }

                return retVal;

            }

            const generate_password = document.getElementById('generate_password');
            generate_password.addEventListener('click', function (e) {
                e.preventDefault();
                const password = generatePassword();
                document.getElementById('password').value = password;
                document.getElementById('cpassword').value = password;

                //Show password
                document.getElementById('password').type = 'text';
                document.getElementById('cpassword').type = 'text';

            });


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
