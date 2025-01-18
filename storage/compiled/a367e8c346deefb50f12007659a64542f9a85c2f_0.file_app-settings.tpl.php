<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:10
  from 'file:../default/app-settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16a673aca1_84021391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a367e8c346deefb50f12007659a64542f9a85c2f' => 
    array (
      0 => '../default/app-settings.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16a673aca1_84021391 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1482216781675e16a66ee656_78898811', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_823322856675e16a67398e2_48114512', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1482216781675e16a66ee656_78898811 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['General Settings'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/app-post">

                            <div class="mb-3">
                                <label for="company"><?php echo $_smarty_tpl->getValue('_L')['Application Name'];?>
</label>
                                <input type="text" class="form-control" id="company" name="company"
                                       value="<?php echo $_smarty_tpl->getValue('config')['CompanyName'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['This Name will be'];?>
</span>
                            </div>


                            <div class="mb-3">
                                <label for="default_landing_page"><?php echo $_smarty_tpl->getValue('_L')['Default Landing Page'];?>
</label>
                                <select name="default_landing_page" id="default_landing_page" class="form-select">
                                    <option value="login"
                                            <?php if ($_smarty_tpl->getValue('config')['default_landing_page'] == 'login') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Admin Login'];?>
</option>
                                    <option value="client/login"
                                            <?php if ($_smarty_tpl->getValue('config')['default_landing_page'] == 'client/login') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Client Login'];?>
</option>
                                    <option value="client/home"
                                            <?php if ($_smarty_tpl->getValue('config')['default_landing_page'] == 'client/home') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Client Home');?>
</option>


                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="opt_dashboard"><?php echo $_smarty_tpl->getValue('_L')['Dashboard'];?>
</label>
                                <select name="dashboard" id="opt_dashboard" class="form-select">
                                    <option value="canvas" <?php if ($_smarty_tpl->getValue('config')['dashboard'] == 'canvas') {?>selected="selected" <?php }?>>Canvas</option>
                                </select>
                            </div>

                            <?php if (empty($_smarty_tpl->getValue('config')['disable_invoicing'])) {?>
                                <hr>
                                <div class="mb-3">
                                    <label for="caddress"><?php echo $_smarty_tpl->getValue('_L')['Pay To Address'];?>
</label>

                                    <textarea class="form-control" id="caddress" name="caddress"
                                              rows="3"><?php echo $_smarty_tpl->getValue('config')['caddress'];?>
</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputAddressFormat"><?php echo $_smarty_tpl->getValue('_L')['Address Format'];?>
</label>
                                    <select name="address_format" id="inputAddressFormat" class="form-select">

                                        <option value="default" <?php if (!(null !== ($_smarty_tpl->getValue('config')['address_format'] ?? null)) || $_smarty_tpl->getValue('config')['address_format'] == 'default') {?>selected="selected" <?php }?>>Default / USA / Australia / India & Other Counntries</option>

                                        <option value="eu" <?php if ((null !== ($_smarty_tpl->getValue('config')['address_format'] ?? null)) && $_smarty_tpl->getValue('config')['address_format'] == 'eu') {?>selected="selected" <?php }?>>UK / EU / Brazil / Mexico / Israel / Russia / Turkey / China / Hongkong</option>


                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="inputTaxSystem"><?php echo $_smarty_tpl->getValue('_L')['Tax System'];?>
</label>
                                    <select name="tax_system" id="inputTaxSystem" class="form-select">

                                        <option value="default" <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'default') {?>selected="selected" <?php }?>>Default</option>
                                        <option value="ca_quebec" <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'ca_quebec') {?>selected="selected" <?php }?>>Quebec Canada</option>
                                        <option value="India" <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>selected="selected" <?php }?>>India</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="inputBusinessLocation"><?php echo $_smarty_tpl->getValue('_L')['Business Location'];?>
</label>
                                    <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'default') {?>

                                        <input type="text" class="form-control" id="inputBusinessLocation" name="business_location"
                                               value="<?php echo $_smarty_tpl->getValue('config')['business_location'];?>
">
                                    <?php } elseif ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>
                                        <select name="business_location" id="inputBusinessLocation" class="form-select">

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, Tax::indianStates(), 'state');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach0DoElse = false;
?>
                                                <option value="<?php echo $_smarty_tpl->getValue('state')['name'];?>
" <?php if ($_smarty_tpl->getValue('config')['business_location'] == $_smarty_tpl->getValue('state')['name']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('state')['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        </select>

                                    <?php } else { ?>
                                        <input type="text" class="form-control" id="inputBusinessLocation" name="business_location"
                                               value="<?php echo $_smarty_tpl->getValue('config')['business_location'];?>
">
                                    <?php }?>
                                </div>


                                <div class="mb-3">

                                    <?php if ($_smarty_tpl->getValue('config')['tax_system'] == 'India') {?>

                                        <label for="vat_number">GSTIN</label>

                                    <?php } else { ?>

                                        <label for="vat_number"><?php echo $_smarty_tpl->getValue('_L')['TAX/VAT Number'];?>
</label>

                                    <?php }?>


                                    <input type="text" class="form-control" id="vat_number" name="vat_number"
                                            <?php if ((null !== ($_smarty_tpl->getValue('config')['vat_number'] ?? null))) {?> value="<?php echo $_smarty_tpl->getValue('config')['vat_number'];?>
" <?php }?>>

                                </div>

                                <div class="mb-3">
                                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Tax/VAT Number Label');?>
</label>
                                    <input type="text" class="form-control" id="label_tax_number" name="label_tax_number"
                                           value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sp_config_or_default')('label_tax_number');?>
">
                                </div>

                                <div class="mb-3">

                                    <label for="invoice_terms"><?php echo $_smarty_tpl->getValue('_L')['Default Invoice Terms'];?>
</label>

                                    <textarea class="form-control" id="invoice_terms" name="invoice_terms"
                                              rows="3"><?php echo $_smarty_tpl->getValue('config')['invoice_terms'];?>
</textarea>

                                </div>


                                <div class="mb-3">
                                    <label for="show_quantity_as"><?php echo $_smarty_tpl->getValue('_L')['Default'];?>
 : <?php echo $_smarty_tpl->getValue('_L')['Show quantity as'];?>
</label>
                                    <input type="text" class="form-control" id="show_quantity_as" name="show_quantity_as" value="<?php echo $_smarty_tpl->getValue('config')['show_quantity_as'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="pdf_font"><?php echo $_smarty_tpl->getValue('_L')['PDF Font'];?>
</label>
                                    <select name="pdf_font" id="pdf_font" class="form-select">
                                        <option value="default" <?php if ($_smarty_tpl->getValue('config')['pdf_font'] == 'default') {?>selected="selected" <?php }?>>Default
                                            [Faster PDF Creation with Less Memory]
                                        </option>
                                        <option value="Helvetica" <?php if ($_smarty_tpl->getValue('config')['pdf_font'] == 'Helvetica') {?>selected="selected" <?php }?>>
                                            Helvetica
                                        </option>
                                        <option value="dejavusanscondensed"
                                                <?php if ($_smarty_tpl->getValue('config')['pdf_font'] == 'dejavusanscondensed') {?>selected="selected" <?php }?>>
                                            dejavusanscondensed [Embed fonts with supports UTF8]
                                        </option>

                                        <option value="AdobeCJK" <?php if ($_smarty_tpl->getValue('config')['pdf_font'] == 'AdobeCJK') {?>selected="selected" <?php }?>>
                                            AdobeCJK [Adobe Asian Font pack]
                                        </option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="invoice_default_date"><?php echo $_smarty_tpl->getValue('_L')['Payment Terms'];?>
</label>
                                    <select name="invoice_default_date" id="invoice_default_date" class="form-select">
                                        <option value="due_on_receipt" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'due_on_receipt')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['Due On Receipt'];?>
</option>
                                        <option value="days3" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days3')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_3'];?>
</option>
                                        <option value="days5" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days5')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_5'];?>
</option>
                                        <option value="days7" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days7')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_7'];?>
</option>
                                        <option value="days10" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days10')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_10'];?>
</option>
                                        <option value="days15" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days15')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_15'];?>
</option>
                                        <option value="days30" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days30')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_30'];?>
</option>
                                        <option value="days45" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days45')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_45'];?>
</option>
                                        <option value="days60" <?php if ((null !== ($_smarty_tpl->getValue('config')['invoice_default_date'] ?? null)) && ($_smarty_tpl->getValue('config')['invoice_default_date'] == 'days60')) {?> selected<?php }?>><?php echo $_smarty_tpl->getValue('_L')['days_60'];?>
</option>
                                    </select>
                                </div>



                            <?php }?>


                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                        </form>

                    </div>
                </div>

            </div>







            <div class="panel">
                <div class="panel-hdr">
                    <h2>Google reCAPTCHA (V3)</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/recaptcha_post/">

                            <div class="mb-3">
                                <label for="recaptcha"><?php echo $_smarty_tpl->getValue('_L')['Enable Recaptcha'];?>
</label>
                                <select name="recaptcha" id="recaptcha" class="form-select">
                                    <option value="1"
                                            <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '1') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
</option>
                                    <option value="0"
                                            <?php if ($_smarty_tpl->getValue('config')['recaptcha'] == '0') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['No'];?>
</option>


                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="recaptcha_sitekey"><?php echo $_smarty_tpl->getValue('_L')['Recaptcha'];?>
 <?php echo $_smarty_tpl->getValue('_L')['Site Key'];?>
</label>
                                <input type="text" class="form-control" id="recaptcha_sitekey" name="recaptcha_sitekey" value="<?php echo $_smarty_tpl->getValue('config')['recaptcha_sitekey'];?>
">

                            </div>

                            <div class="mb-3">
                                <label for="recaptcha_secretkey"><?php echo $_smarty_tpl->getValue('_L')['Recaptcha'];?>
 <?php echo $_smarty_tpl->getValue('_L')['Secret Key'];?>
</label>
                                <input type="text" class="form-control" id="recaptcha_secretkey" name="recaptcha_secretkey" value="<?php echo $_smarty_tpl->getValue('config')['recaptcha_secretkey'];?>
">

                            </div>



                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                        </form>
                    </div>


                </div>
            </div>


            <?php if (!empty($_smarty_tpl->getValue('config')['invoicing'])) {?>

                <div class="panel">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->getValue('_L')['Other Settings'];?>
</h2>

                    </div>
                    <div class="panel-container">

                        <div class="panel-content">

                            <form role="form" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/other-settings-post/">


                                <div class="mb-3">
                                    <label for="customer_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Customer Code Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="customer_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['customer_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="customer_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Customer Code Number'];?>
</label>
                                    <input type="text" class="form-control" name="customer_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['customer_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="invoice_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Invoice Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="invoice_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['invoice_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="invoice_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Invoice Number'];?>
</label>
                                    <input type="text" class="form-control" name="invoice_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['invoice_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="purchase_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Purchase Order Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="purchase_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['purchase_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="purchase_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Purchase Order Number'];?>
</label>
                                    <input type="text" class="form-control" name="purchase_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['purchase_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="quotation_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Quote Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="quotation_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['quotation_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="quotation_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Quote Number'];?>
</label>
                                    <input type="text" class="form-control" name="quotation_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['quotation_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="income_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Income Code Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="income_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['income_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="income_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Income Code Number'];?>
</label>
                                    <input type="text" class="form-control" name="income_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['income_code_current_number'];?>
">

                                </div>


                                <div class="mb-3">
                                    <label for="expense_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Expense Code Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="expense_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['expense_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="expense_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Expense Code Number'];?>
</label>
                                    <input type="text" class="form-control" name="expense_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['expense_code_current_number'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="ticket_code_prefix"><?php echo $_smarty_tpl->getValue('_L')['Ticket Prefix'];?>
</label>
                                    <input type="text" class="form-control" name="ticket_code_prefix" value="<?php echo $_smarty_tpl->getValue('config')['ticket_code_prefix'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="ticket_code_current_number"><?php echo $_smarty_tpl->getValue('_L')['Ticket Number'];?>
</label>
                                    <input type="text" class="form-control" name="ticket_code_current_number" value="<?php echo $_smarty_tpl->getValue('config')['ticket_code_current_number'];?>
">

                                </div>


                                <div class="mb-3">
                                    <label for="contact_extra_field"><?php echo $_smarty_tpl->getValue('_L')['Contact Extra Field Name'];?>
</label>
                                    <input type="text" class="form-control" name="contact_extra_field" value="<?php echo $_smarty_tpl->getValue('config')['contact_extra_field'];?>
">

                                </div>




                                <div class="mb-3">
                                    <label for="gmap_api_key"><?php echo $_smarty_tpl->getValue('_L')['Google Maps'];?>
 <?php echo $_smarty_tpl->getValue('_L')['API Key'];?>
</label>
                                    <input type="text" class="form-control" id="gmap_api_key" name="gmap_api_key" value="<?php echo $_smarty_tpl->getValue('config')['gmap_api_key'];?>
">

                                </div>

                                <div class="mb-3">
                                    <label for="slack_webhook_url"><?php echo $_smarty_tpl->getValue('_L')['Slack Webhook URL'];?>
</label>
                                    <input type="text" class="form-control" id="slack_webhhok_url" name="slack_webhook_url" value="<?php echo $_smarty_tpl->getValue('config')['slack_webhook_url'];?>
">

                                </div>




                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                            </form>

                        </div>




                    </div>
                </div>

            <?php }?>



            <div class="panel" id="additional_settings">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->getValue('_L')['Additional Settings'];?>
</h5>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-hover">
                            <tbody>

                            <tr>
                                <td width="80%"><label for="url_rewrite"><?php echo $_smarty_tpl->getValue('_L')['URL Rewrite'];?>
 </label>
                                    <br>
                                    <p>Please do not enable this, unless you are sure.</p>
                                </td>
                                <td><input type="checkbox" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('get_option')('url_rewrite') == '1') {?>checked<?php }?>
                                           data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
" data-off="<?php echo $_smarty_tpl->getValue('_L')['No'];?>
"
                                           id="url_rewrite"></td>
                            </tr>


                            </tbody>
                        </table>

                    </div>



                </div>
            </div>


        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>OpenAI</h5>
                    <form method="post" action="<?php echo $_smarty_tpl->getValue('base_url');?>
settings/save-settings">
                        <div class="mb-3">
                            <label>API Key</label>
                            <input type="text" class="form-control" id="openai_api_key" name="openai_api_key" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['openai_api_key'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                        </div>
                        <button class="btn btn-primary" type="submit"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save');?>
</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_823322856675e16a67398e2_48114512 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>
        $(function () {

            $('#invoice_terms').redactor({
                minHeight: 200,
                buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'link', 'unorderedlist', 'orderedlist']
            });

            $('#console_notify_invoice_created').change(function() {

                $('#additional_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "console_notify_invoice_created", val: "1" })
                        .done(function( data ) {
                            $('#additional_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "console_notify_invoice_created", val: "0" })
                        .done(function( data ) {
                            $('#additional_settings').unblock();
                            location.reload();
                        });
                }
            });

        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
