<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:35:36
  from 'file:../default/util_tools.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e1648140499_07775750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45240a6935f2d4aef05891e40316a594660dbe78' => 
    array (
      0 => '../default/util_tools.tpl',
      1 => 1734219333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e1648140499_07775750 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1951065362675e16481388a9_15825681', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_988727451675e164813eea3_92419846', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1951065362675e16481388a9_15825681 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


<div class="row">

    <div class="col-md-6">



        <div class="panel">
            <div class="panel-container">
                <div class="panel-content">
                    <h4><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Data Import');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h4>
                    <hr>
                    <form action="" method="post" id="dataImport">
                        <div class="mb-3">
                            <label for="importFrom">From</label>
                            <select id="importFrom" class="form-control" name="importFrom">
                                <option value="">Select...</option>
                                <option value="hostbilling">hostbilling.io</option>
                                <option value="custom">Custom</option>
                                <option value="iBilling">iBilling</option>
                            </select>
                        </div>

                        <div class="mb-3" id="sectionFromUrl">
                            <label for="fromUrl">URL</label>
                            <input type="text" class="form-control" name="fromUrl" id="fromUrl" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('inSession')('fromUrl');?>
">
                        </div>

                        <div class="mb-3" id="sectionAPIKey">
                            <label for="apiKey">API Key</label>
                            <input type="text" class="form-control" name="apiKey" id="apiKey" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('inSession')('apiKey');?>
">
                        </div>

                        <div class="mb-3" id="sectionImportItems">
                            <label for="cid">Import</label>




                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="appConfig" value="yes">
                                    Configurations
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="currencies" value="yes">
                                    Currencies
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="customers" value="yes">
                                    Customers
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="groups" value="yes">
                                    Groups
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="companies" value="yes">
                                    Companies
                                </label>
                            </div>



                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="items" value="yes" >
                                    Products & Services
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="invoices" value="yes" >
                                    Invoices
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="invoice_items" value="yes" >
                                    Invoice Items
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="quotes" value="yes" >
                                    Quote
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="quote_items" value="yes" >
                                    Quote Items
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="accounts" value="yes" >
                                    Bank Accounts
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-checks" name="transactions" value="yes" >
                                    Transactions
                                </label>
                            </div>

                        </div>

                        <div class="mb-3">
                            <button type="submit" id="dataImportContinue" class="btn btn-primary" disabled="disabled">Import</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>


        <div class="panel">
            <div class="panel-container">
                <div class="panel-content">
                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
util/clear-financial-data-cache" class="btn btn-primary">Clear Financial Data Cache</a>
                </div>

            </div>
        </div>

</div>

    <div class="col-md-6">
        <div class="panel">
            <div class="panel-container">
                <div class="panel-content">
                    <h2><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Response');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</h2>
                    <hr>
                    <textarea class="form-control" rows="15" id="response"></textarea>
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
class Block_988727451675e164813eea3_92419846 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var $importFrom = $("#importFrom");

            var $sectionFromUrl = $("#sectionFromUrl");
            var $apiKey = $("#apiKey");
            var $sectionAPIKey = $("#sectionAPIKey");

            var $dataImportContinue = $("#dataImportContinue");

            var $dataImport = $("#dataImport");

            var $response = $("#response");



            $sectionFromUrl.hide();
            $sectionAPIKey.hide();



            var $sectionImportItems = $("#sectionImportItems");

            $sectionImportItems.hide();

            $importFrom.on("change",function (e) {

                var valImportFrom = $importFrom.val();

                switch (valImportFrom){

                    case 'iBilling':

                        $sectionFromUrl.show();
                        $sectionAPIKey.show();
                        $sectionImportItems.show();

                        $dataImportContinue.prop('disabled', false);


                        break;


                    default:

                        $sectionFromUrl.hide();

                        $dataImportContinue.prop('disabled', true);

                        break;

                }

            });


            $dataImportContinue.click(function (e) {

                e.preventDefault();

               // $response.html('Importing.......'+"\n");
                $response.html('Importing.......'+"\n" + 'Please do not close your browser..........'+"\n");

                $dataImportContinue.prop('disabled', true);

                $.post(base_url + 'util/import/', $dataImport.serialize())
                    .done(function (data) {

                        $response.html(data);

                        $dataImportContinue.prop('disabled', false);

                    });

            })


        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
