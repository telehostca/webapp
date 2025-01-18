<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:22
  from 'file:../default/localisation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16b2594907_13943412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42380f0bba3900513480a3772abc6fe9fc17a95f' => 
    array (
      0 => '../default/localisation.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16b2594907_13943412 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1681935336675e16b24f1db7_60510000', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1310347176675e16b2593c26_23510095', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1681935336675e16b24f1db7_60510000 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">


        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Localisation'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="localisation" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/lc-post/">


                            <div class="mb-3">
                                <label for="tzone"><?php echo $_smarty_tpl->getValue('_L')['Timezone'];?>
</label>
                                <select name="tzone" class="form-control" id="tzone">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tlist'), 'label', false, 'value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('value')->value => $_smarty_tpl->getVariable('label')->value) {
$foreach0DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('value');?>
"
                                                <?php if ($_smarty_tpl->getValue('config')['timezone'] == $_smarty_tpl->getValue('value')) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('label');?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="country"><?php echo $_smarty_tpl->getValue('_L')['Default Country'];?>
</label>
                                <select name="country" class="form-control" id="country">
                                    <option value=""><?php echo $_smarty_tpl->getValue('_L')['Select Country'];?>
</option>
                                    <?php echo $_smarty_tpl->getValue('countries');?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="df"><?php echo $_smarty_tpl->getValue('_L')['Date Format'];?>
</label>
                                <select class="form-select" name="df" id="df">
                                    <option value="d/m/Y" <?php if ($_smarty_tpl->getValue('config')['df'] == 'd/m/Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('d/m/Y');?>
</option>
                                    <option value="d.m.Y" <?php if ($_smarty_tpl->getValue('config')['df'] == 'd.m.Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('d.m.Y');?>
</option>
                                    <option value="d-m-Y" <?php if ($_smarty_tpl->getValue('config')['df'] == 'd-m-Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('d-m-Y');?>
</option>
                                    <option value="m/d/Y" <?php if ($_smarty_tpl->getValue('config')['df'] == 'm/d/Y') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('m/d/Y');?>
</option>
                                    <option value="Y/m/d" <?php if ($_smarty_tpl->getValue('config')['df'] == 'Y/m/d') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y/m/d');?>
</option>
                                    <option value="Y-m-d" <?php if ($_smarty_tpl->getValue('config')['df'] == 'Y-m-d') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y-m-d');?>
</option>

                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="lan"><?php echo $_smarty_tpl->getValue('_L')['Default_Language'];?>
</label>
                                <select class="form-select" name="lan" id="lan">


                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('languages'), 'language');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach1DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('language')['iso_code'];?>
" <?php if ($_smarty_tpl->getValue('config')['language'] == $_smarty_tpl->getValue('language')['iso_code']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('language')['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="cformat"><?php echo $_smarty_tpl->getValue('_L')['Currency Format'];?>
</label>
                                <select class="form-select" name="cformat" id="cformat">
                                    <option value="1" <?php if (($_smarty_tpl->getValue('config')['dec_point'] == '.') && ($_smarty_tpl->getValue('config')['thousands_sep'] == '')) {?> selected="selected" <?php }?>>
                                        1234.56
                                    </option>
                                    <option value="2" <?php if (($_smarty_tpl->getValue('config')['dec_point'] == '.') && ($_smarty_tpl->getValue('config')['thousands_sep'] == ',')) {?> selected="selected" <?php }?>>
                                        1,234.56
                                    </option>
                                    <option value="3" <?php if (($_smarty_tpl->getValue('config')['dec_point'] == ',') && ($_smarty_tpl->getValue('config')['thousands_sep'] == '')) {?> selected="selected" <?php }?>>
                                        1234,56
                                    </option>
                                    <option value="4" <?php if (($_smarty_tpl->getValue('config')['dec_point'] == ',') && ($_smarty_tpl->getValue('config')['thousands_sep'] == '.')) {?> selected="selected" <?php }?>>
                                        1.234,56
                                    </option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="home_currency"><?php echo $_smarty_tpl->getValue('_L')['Home Currency'];?>
</label>

                                <select name="home_currency" class="form-control" id="home_currency">

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('currency')->value) {
$foreach2DoElse = false;
?>

                                        <option data-symbol="<?php echo $_smarty_tpl->getValue('currency')['symbol'];?>
" value="<?php echo $_smarty_tpl->getValue('currency')['code'];?>
" <?php if (($_smarty_tpl->getValue('config')['home_currency'] == $_smarty_tpl->getValue('key'))) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('key');?>
 - <?php echo $_smarty_tpl->getValue('currency')['name'];?>
 [ <?php echo $_smarty_tpl->getValue('currency')['symbol'];?>
 ]</option>

                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                </select>


                            </div>

                            <div class="mb-3">
                                <label for="currency_code"><?php echo $_smarty_tpl->getValue('_L')['Currency Symbol'];?>
</label>
                                <input type="text" class="form-control" id="currency_code" name="currency_code"
                                       value="<?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['Keep it blank if currency code'];?>
</span>
                            </div>

                            <div class="mb-3">
                                <label for="currency_symbol_position"><?php echo $_smarty_tpl->getValue('_L')['Currency Symbol Position'];?>
</label>
                                <select class="form-select" name="currency_symbol_position" id="currency_symbol_position">

                                    <option value="p" <?php if (($_smarty_tpl->getValue('config')['currency_symbol_position'] == 'p')) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Left'];?>
</option>
                                    <option value="s" <?php if (($_smarty_tpl->getValue('config')['currency_symbol_position'] == 's')) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Right'];?>
</option>




                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="currency_decimal_digits"><?php echo $_smarty_tpl->getValue('_L')['Pads the decimal with zeros'];?>
</label>
                                <select class="form-select" name="currency_decimal_digits" id="currency_decimal_digits">

                                    <option value="false" <?php if (($_smarty_tpl->getValue('config')['currency_decimal_digits'] == 'false')) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['No'];?>
</option>
                                    <option value="true" <?php if (($_smarty_tpl->getValue('config')['currency_decimal_digits'] == 'true')) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->getValue('_L')['Yes'];?>
</option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="thousand_separator_placement"><?php echo $_smarty_tpl->getValue('_L')['Thousand Separator Placement'];?>
</label>
                                <select class="form-select" name="thousand_separator_placement" id="thousand_separator_placement">

                                    <option value="2" <?php if (($_smarty_tpl->getValue('config')['thousand_separator_placement'] == '2')) {?> selected="selected" <?php }?>>2 (e.g. - 22,22,22,333)</option>
                                    <option value="3" <?php if (($_smarty_tpl->getValue('config')['thousand_separator_placement'] == '3')) {?> selected="selected" <?php }?>>3 (e.g. - 333,333,333)</option>
                                    <option value="4" <?php if (($_smarty_tpl->getValue('config')['thousand_separator_placement'] == '4')) {?> selected="selected" <?php }?>>4 (e.g. - 4,4444,4444)</option>




                                </select>
                            </div>

                            <hr>

                            <div class="my-3">
                                <strong><?php echo $_smarty_tpl->getValue('_L')['Decimal Places'];?>
</strong>
                            </div>

                            <div class="mb-3">
                                <label for="decimal_places_products_and_services"><?php echo $_smarty_tpl->getValue('_L')['Products n Services'];?>
</label>
                                <select class="form-select" id="decimal_places_products_and_services" name="decimal_places_products_and_services">
                                    <option value="default"><?php echo $_smarty_tpl->getValue('_L')['Default'];?>
</option>
                                    <option value="0" <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null)) && $_smarty_tpl->getValue('config')['decimal_places_products_and_services'] == 0) {?> selected<?php }?>>0</option>
                                    <option value="1" <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null)) && $_smarty_tpl->getValue('config')['decimal_places_products_and_services'] == 1) {?> selected<?php }?>>1</option>
                                    <option value="2" <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null)) && $_smarty_tpl->getValue('config')['decimal_places_products_and_services'] == 2) {?> selected<?php }?>>2</option>
                                    <option value="3" <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null)) && $_smarty_tpl->getValue('config')['decimal_places_products_and_services'] == 3) {?> selected<?php }?>>3</option>
                                    <option value="4" <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null)) && $_smarty_tpl->getValue('config')['decimal_places_products_and_services'] == 4) {?> selected<?php }?>>4</option>
                                    <option value="5" <?php if ((null !== ($_smarty_tpl->getValue('config')['decimal_places_products_and_services'] ?? null)) && $_smarty_tpl->getValue('config')['decimal_places_products_and_services'] == 5) {?> selected<?php }?>>5</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                        </form>
                    </div>



                </div>
            </div>


        </div>

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->getValue('_L')['Charset n Collation'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class ="panel-content">
                        <form role="form" name="localisation" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/lc-charset-post">


                            <div class="mb-3">
                                <label for="coll"><?php echo $_smarty_tpl->getValue('_L')['Set Charset n Collation'];?>
</label>
                                <select class="form-select" name="coll" id="coll">
                                    <option value=""></option>
                                    <optgroup label="armscii8" title="ARMSCII-8 Armenian">
                                        <option value="armscii8_bin"
                                                title="Armenian, Binary" <?php if ($_smarty_tpl->getValue('col') == 'armscii8_bin') {?> selected="selected" <?php }?>>
                                            armscii8_bin
                                        </option>
                                        <option value="armscii8_general_ci"
                                                title="Armenian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'armscii8_general_ci') {?> selected="selected" <?php }?>>
                                            armscii8_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="ascii" title="US ASCII">
                                        <option value="ascii_bin"
                                                title="West European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'ascii_bin') {?> selected="selected" <?php }?>>
                                            ascii_bin
                                        </option>
                                        <option value="ascii_general_ci"
                                                title="West European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ascii_general_ci') {?> selected="selected" <?php }?>>
                                            ascii_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="big5" title="Big5 Traditional Chinese">
                                        <option value="big5_bin"
                                                title="Traditional Chinese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'big5_bin') {?> selected="selected" <?php }?>>
                                            big5_bin
                                        </option>
                                        <option value="big5_chinese_ci"
                                                title="Traditional Chinese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'big5_chinese_ci') {?> selected="selected" <?php }?>>
                                            big5_chinese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="binary" title="Binary pseudo charset">
                                        <option value="binary" title="Binary" <?php if ($_smarty_tpl->getValue('col') == 'binary') {?> selected="selected" <?php }?>>
                                            binary
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp1250" title="Windows Central European">
                                        <option value="cp1250_bin"
                                                title="Central European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp1250_bin') {?> selected="selected" <?php }?>>
                                            cp1250_bin
                                        </option>
                                        <option value="cp1250_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1250_croatian_ci') {?> selected="selected" <?php }?>>
                                            cp1250_croatian_ci
                                        </option>
                                        <option value="cp1250_czech_cs"
                                                title="Czech, case-sensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1250_czech_cs') {?> selected="selected" <?php }?>>
                                            cp1250_czech_cs
                                        </option>
                                        <option value="cp1250_general_ci"
                                                title="Central European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1250_general_ci') {?> selected="selected" <?php }?>>
                                            cp1250_general_ci
                                        </option>
                                        <option value="cp1250_polish_ci"
                                                title="Polish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1250_polish_ci') {?> selected="selected" <?php }?>>
                                            cp1250_polish_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp1251" title="Windows Cyrillic">
                                        <option value="cp1251_bin"
                                                title="Cyrillic (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == '') {?> selected="selected" <?php }?>>
                                            cp1251_bin
                                        </option>
                                        <option value="cp1251_bulgarian_ci"
                                                title="Bulgarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1251_bulgarian_ci') {?> selected="selected" <?php }?>>
                                            cp1251_bulgarian_ci
                                        </option>
                                        <option value="cp1251_general_ci"
                                                title="Cyrillic (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1251_general_ci') {?> selected="selected" <?php }?>>
                                            cp1251_general_ci
                                        </option>
                                        <option value="cp1251_general_cs"
                                                title="Cyrillic (multilingual), case-sensitive <?php if ($_smarty_tpl->getValue('col') == 'cp1251_general_cs') {?> selected="
                                                selected
                                        " <?php }?>">
                                        cp1251_general_cs
                                        </option>
                                        <option value="cp1251_ukrainian_ci"
                                                title="Ukrainian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1251_ukrainian_ci') {?> selected="selected" <?php }?>>
                                            cp1251_ukrainian_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp1256" title="Windows Arabic">
                                        <option value="cp1256_bin"
                                                title="Arabic, Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp1256_bin') {?> selected="selected" <?php }?>>
                                            cp1256_bin
                                        </option>
                                        <option value="cp1256_general_ci"
                                                title="Arabic, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1256_general_ci') {?> selected="selected" <?php }?>>
                                            cp1256_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp1257" title="Windows Baltic">
                                        <option value="cp1257_bin"
                                                title="Baltic (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp1257_bin') {?> selected="selected" <?php }?>>
                                            cp1257_bin
                                        </option>
                                        <option value="cp1257_general_ci"
                                                title="Baltic (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1257_general_ci') {?> selected="selected" <?php }?>>
                                            cp1257_general_ci
                                        </option>
                                        <option value="cp1257_lithuanian_ci"
                                                title="Lithuanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp1257_lithuanian_ci') {?> selected="selected" <?php }?>>
                                            cp1257_lithuanian_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp850" title="DOS West European">
                                        <option value="cp850_bin"
                                                title="West European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp850_bin') {?> selected="selected" <?php }?>>
                                            cp850_bin
                                        </option>
                                        <option value="cp850_general_ci"
                                                title="West European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp850_general_ci') {?> selected="selected" <?php }?>>
                                            cp850_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp852" title="DOS Central European">
                                        <option value="cp852_bin"
                                                title="Central European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp852_bin') {?> selected="selected" <?php }?>>
                                            cp852_bin
                                        </option>
                                        <option value="cp852_general_ci"
                                                title="Central European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp852_general_ci') {?> selected="selected" <?php }?>>
                                            cp852_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp866" title="DOS Russian">
                                        <option value="cp866_bin"
                                                title="Russian, Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp866_bin') {?> selected="selected" <?php }?>>
                                            cp866_bin
                                        </option>
                                        <option value="cp866_general_ci"
                                                title="Russian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp866_general_ci') {?> selected="selected" <?php }?>>
                                            cp866_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="cp932" title="SJIS for Windows Japanese">
                                        <option value="cp932_bin"
                                                title="Japanese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'cp932_bin') {?> selected="selected" <?php }?>>
                                            cp932_bin
                                        </option>
                                        <option value="cp932_japanese_ci"
                                                title="Japanese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'cp932_japanese_ci') {?> selected="selected" <?php }?>>
                                            cp932_japanese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="dec8" title="DEC West European">
                                        <option value="dec8_bin"
                                                title="West European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'dec8_bin') {?> selected="selected" <?php }?>>
                                            dec8_bin
                                        </option>
                                        <option value="dec8_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'dec8_swedish_ci') {?> selected="selected" <?php }?>>
                                            dec8_swedish_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="eucjpms" title="UJIS for Windows Japanese">
                                        <option value="eucjpms_bin"
                                                title="Japanese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'eucjpms_bin') {?> selected="selected" <?php }?>>
                                            eucjpms_bin
                                        </option>
                                        <option value="eucjpms_japanese_ci"
                                                title="Japanese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'eucjpms_japanese_ci') {?> selected="selected" <?php }?>>
                                            eucjpms_japanese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="euckr" title="EUC-KR Korean">
                                        <option value="euckr_bin"
                                                title="Korean, Binary" <?php if ($_smarty_tpl->getValue('col') == 'euckr_bin') {?> selected="selected" <?php }?>>
                                            euckr_bin
                                        </option>
                                        <option value="euckr_korean_ci"
                                                title="Korean, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'euckr_korean_ci') {?> selected="selected" <?php }?>>
                                            euckr_korean_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="gb2312" title="GB2312 Simplified Chinese">
                                        <option value="gb2312_bin"
                                                title="Simplified Chinese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'gb2312_bin') {?> selected="selected" <?php }?>>
                                            gb2312_bin
                                        </option>
                                        <option value="gb2312_chinese_ci"
                                                title="Simplified Chinese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'gb2312_chinese_ci') {?> selected="selected" <?php }?>>
                                            gb2312_chinese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="gbk" title="GBK Simplified Chinese">
                                        <option value="gbk_bin"
                                                title="Simplified Chinese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'gbk_bin') {?> selected="selected" <?php }?>>
                                            gbk_bin
                                        </option>
                                        <option value="gbk_chinese_ci"
                                                title="Simplified Chinese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'gbk_chinese_ci') {?> selected="selected" <?php }?>>
                                            gbk_chinese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="geostd8" title="GEOSTD8 Georgian">
                                        <option value="geostd8_bin"
                                                title="Georgian, Binary" <?php if ($_smarty_tpl->getValue('col') == 'geostd8_bin') {?> selected="selected" <?php }?>>
                                            geostd8_bin
                                        </option>
                                        <option value="geostd8_general_ci"
                                                title="Georgian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'geostd8_general_ci') {?> selected="selected" <?php }?>>
                                            geostd8_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="greek" title="ISO 8859-7 Greek">
                                        <option value="greek_bin"
                                                title="Greek, Binary" <?php if ($_smarty_tpl->getValue('col') == 'greek_bin') {?> selected="selected" <?php }?>>
                                            greek_bin
                                        </option>
                                        <option value="greek_general_ci"
                                                title="Greek, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'greek_general_ci') {?> selected="selected" <?php }?>>
                                            greek_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="hebrew" title="ISO 8859-8 Hebrew">
                                        <option value="hebrew_bin"
                                                title="Hebrew, Binary" <?php if ($_smarty_tpl->getValue('col') == 'hebrew_bin') {?> selected="selected" <?php }?>>
                                            hebrew_bin
                                        </option>
                                        <option value="hebrew_general_ci"
                                                title="Hebrew, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'hebrew_general_ci') {?> selected="selected" <?php }?>>
                                            hebrew_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="hp8" title="HP West European">
                                        <option value="hp8_bin"
                                                title="West European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'hp8_bin') {?> selected="selected" <?php }?>>
                                            hp8_bin
                                        </option>
                                        <option value="hp8_english_ci"
                                                title="English, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'hp8_english_ci') {?> selected="selected" <?php }?>>
                                            hp8_english_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
                                        <option value="keybcs2_bin"
                                                title="Czech-Slovak, Binary" <?php if ($_smarty_tpl->getValue('col') == 'keybcs2_bin') {?> selected="selected" <?php }?>>
                                            keybcs2_bin
                                        </option>
                                        <option value="keybcs2_general_ci"
                                                title="Czech-Slovak, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'keybcs2_general_ci') {?> selected="selected" <?php }?>>
                                            keybcs2_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="koi8r" title="KOI8-R Relcom Russian">
                                        <option value="koi8r_bin"
                                                title="Russian, Binary" <?php if ($_smarty_tpl->getValue('col') == 'koi8r_bin') {?> selected="selected" <?php }?>>
                                            koi8r_bin
                                        </option>
                                        <option value="koi8r_general_ci"
                                                title="Russian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'koi8r_general_ci') {?> selected="selected" <?php }?>>
                                            koi8r_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="koi8u" title="KOI8-U Ukrainian">
                                        <option value="koi8u_bin"
                                                title="Ukrainian, Binary" <?php if ($_smarty_tpl->getValue('col') == 'koi8u_bin') {?> selected="selected" <?php }?>>
                                            koi8u_bin
                                        </option>
                                        <option value="koi8u_general_ci"
                                                title="Ukrainian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'koi8u_general_ci') {?> selected="selected" <?php }?>>
                                            koi8u_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="latin1" title="cp1252 West European">
                                        <option value="latin1_bin"
                                                title="West European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'latin1_bin') {?> selected="selected" <?php }?>>
                                            latin1_bin
                                        </option>
                                        <option value="latin1_danish_ci"
                                                title="Danish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_danish_ci') {?> selected="selected" <?php }?>>
                                            latin1_danish_ci
                                        </option>
                                        <option value="latin1_general_ci"
                                                title="West European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_general_ci') {?> selected="selected" <?php }?>>
                                            latin1_general_ci
                                        </option>
                                        <option value="latin1_general_cs"
                                                title="West European (multilingual), case-sensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_general_cs') {?> selected="selected" <?php }?>>
                                            latin1_general_cs
                                        </option>
                                        <option value="latin1_german1_ci"
                                                title="German (dictionary), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_german1_ci') {?> selected="selected" <?php }?>>
                                            latin1_german1_ci
                                        </option>
                                        <option value="latin1_german2_ci"
                                                title="German (phone book), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_german2_ci') {?> selected="selected" <?php }?>>
                                            latin1_german2_ci
                                        </option>
                                        <option value="latin1_spanish_ci"
                                                title="Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_spanish_ci') {?> selected="selected" <?php }?>>
                                            latin1_spanish_ci
                                        </option>
                                        <option value="latin1_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin1_swedish_ci') {?> selected="selected" <?php }?>>
                                            latin1_swedish_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="latin2" title="ISO 8859-2 Central European">
                                        <option value="latin2_bin"
                                                title="Central European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'latin2_bin') {?> selected="selected" <?php }?>>
                                            latin2_bin
                                        </option>
                                        <option value="latin2_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin2_croatian_ci') {?> selected="selected" <?php }?>>
                                            latin2_croatian_ci
                                        </option>
                                        <option value="latin2_czech_cs"
                                                title="Czech, case-sensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin2_czech_cs') {?> selected="selected" <?php }?>>
                                            latin2_czech_cs
                                        </option>
                                        <option value="latin2_general_ci"
                                                title="Central European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin2_general_ci') {?> selected="selected" <?php }?>>
                                            latin2_general_ci
                                        </option>
                                        <option value="latin2_hungarian_ci"
                                                title="Hungarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin2_hungarian_ci') {?> selected="selected" <?php }?>>
                                            latin2_hungarian_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="latin5" title="ISO 8859-9 Turkish">
                                        <option value="latin5_bin"
                                                title="Turkish, Binary" <?php if ($_smarty_tpl->getValue('col') == 'latin5_bin') {?> selected="selected" <?php }?>>
                                            latin5_bin
                                        </option>
                                        <option value="latin5_turkish_ci"
                                                title="Turkish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin5_turkish_ci') {?> selected="selected" <?php }?>>
                                            latin5_turkish_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="latin7" title="ISO 8859-13 Baltic">
                                        <option value="latin7_bin"
                                                title="Baltic (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'latin7_bin') {?> selected="selected" <?php }?>>
                                            latin7_bin
                                        </option>
                                        <option value="latin7_estonian_cs"
                                                title="Estonian, case-sensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin7_general_ci') {?> selected="selected" <?php }?>>
                                            latin7_estonian_cs
                                        </option>
                                        <option value="latin7_general_ci"
                                                title="Baltic (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin7_general_ci') {?> selected="selected" <?php }?>>
                                            latin7_general_ci
                                        </option>
                                        <option value="latin7_general_cs"
                                                title="Baltic (multilingual), case-sensitive" <?php if ($_smarty_tpl->getValue('col') == 'latin7_general_cs') {?> selected="selected" <?php }?>>
                                            latin7_general_cs
                                        </option>


                                    </optgroup>
                                    <optgroup label="macce" title="Mac Central European">
                                        <option value="macce_bin"
                                                title="Central European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'macce_bin') {?> selected="selected" <?php }?>>
                                            macce_bin
                                        </option>
                                        <option value="macce_general_ci"
                                                title="Central European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'macce_general_ci') {?> selected="selected" <?php }?>>
                                            macce_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="macroman" title="Mac West European">
                                        <option value="macroman_bin"
                                                title="West European (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'macroman_bin') {?> selected="selected" <?php }?>>
                                            macroman_bin
                                        </option>
                                        <option value="macroman_general_ci"
                                                title="West European (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'macroman_general_ci') {?> selected="selected" <?php }?>>
                                            macroman_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="sjis" title="Shift-JIS Japanese">
                                        <option value="sjis_bin"
                                                title="Japanese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'sjis_bin') {?> selected="selected" <?php }?>>
                                            sjis_bin
                                        </option>
                                        <option value="sjis_japanese_ci"
                                                title="Japanese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'sjis_japanese_ci') {?> selected="selected" <?php }?>>
                                            sjis_japanese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="swe7" title="7bit Swedish">
                                        <option value="swe7_bin"
                                                title="Swedish, Binary" <?php if ($_smarty_tpl->getValue('col') == 'swe7_bin') {?> selected="selected" <?php }?>>
                                            swe7_bin
                                        </option>
                                        <option value="swe7_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'swe7_swedish_ci') {?> selected="selected" <?php }?>>
                                            swe7_swedish_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="tis620" title="TIS620 Thai">
                                        <option value="tis620_bin" title="Thai, Binary">tis620_bin</option>
                                        <option value="tis620_thai_ci"
                                                title="Thai, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'tis620_thai_ci') {?> selected="selected" <?php }?>>
                                            tis620_thai_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="ucs2" title="UCS-2 Unicode">
                                        <option value="ucs2_bin"
                                                title="Unicode (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_bin') {?> selected="selected" <?php }?>>
                                            ucs2_bin
                                        </option>
                                        <option value="ucs2_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_croatian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_croatian_ci
                                        </option>
                                        <option value="ucs2_czech_ci"
                                                title="Czech, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_czech_ci') {?> selected="selected" <?php }?>>
                                            ucs2_czech_ci
                                        </option>
                                        <option value="ucs2_danish_ci"
                                                title="Danish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_danish_ci') {?> selected="selected" <?php }?>>
                                            ucs2_danish_ci
                                        </option>
                                        <option value="ucs2_esperanto_ci"
                                                title="Esperanto, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_esperanto_ci') {?> selected="selected" <?php }?>>
                                            ucs2_esperanto_ci
                                        </option>
                                        <option value="ucs2_estonian_ci"
                                                title="Estonian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_estonian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_estonian_ci
                                        </option>
                                        <option value="ucs2_general_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_general_ci') {?> selected="selected" <?php }?>>
                                            ucs2_general_ci
                                        </option>
                                        <option value="ucs2_general_mysql500_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == '') {?> selected="ucs2_general_mysql500_ci" <?php }?>>
                                            ucs2_general_mysql500_ci
                                        </option>
                                        <option value="ucs2_german2_ci"
                                                title="German (phone book), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_german2_ci') {?> selected="selected" <?php }?>>
                                            ucs2_german2_ci
                                        </option>
                                        <option value="ucs2_hungarian_ci"
                                                title="Hungarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_hungarian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_hungarian_ci
                                        </option>
                                        <option value="ucs2_icelandic_ci"
                                                title="Icelandic, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_icelandic_ci') {?> selected="selected" <?php }?>>
                                            ucs2_icelandic_ci
                                        </option>
                                        <option value="ucs2_latvian_ci"
                                                title="Latvian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_latvian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_latvian_ci
                                        </option>
                                        <option value="ucs2_lithuanian_ci"
                                                title="Lithuanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_lithuanian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_lithuanian_ci
                                        </option>
                                        <option value="ucs2_persian_ci"
                                                title="Persian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_persian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_persian_ci
                                        </option>
                                        <option value="ucs2_polish_ci"
                                                title="Polish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == '') {?> selected="selected" <?php }?>>
                                            ucs2_polish_ci
                                        </option>
                                        <option value="ucs2_roman_ci"
                                                title="West European, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_roman_ci') {?> selected="selected" <?php }?>>
                                            ucs2_roman_ci
                                        </option>
                                        <option value="ucs2_romanian_ci"
                                                title="Romanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_romanian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_romanian_ci
                                        </option>
                                        <option value="ucs2_sinhala_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_sinhala_ci') {?> selected="selected" <?php }?>>
                                            ucs2_sinhala_ci
                                        </option>
                                        <option value="ucs2_slovak_ci"
                                                title="Slovak, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_slovak_ci') {?> selected="selected" <?php }?>>
                                            ucs2_slovak_ci
                                        </option>
                                        <option value="ucs2_slovenian_ci"
                                                title="Slovenian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_slovenian_ci') {?> selected="selected" <?php }?>>
                                            ucs2_slovenian_ci
                                        </option>
                                        <option value="ucs2_spanish2_ci"
                                                title="Traditional Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_spanish2_ci') {?> selected="selected" <?php }?>>
                                            ucs2_spanish2_ci
                                        </option>
                                        <option value="ucs2_spanish_ci"
                                                title="Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_spanish_ci') {?> selected="selected" <?php }?>>
                                            ucs2_spanish_ci
                                        </option>
                                        <option value="ucs2_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_swedish_ci') {?> selected="selected" <?php }?>>
                                            ucs2_swedish_ci
                                        </option>
                                        <option value="ucs2_turkish_ci"
                                                title="Turkish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_turkish_ci') {?> selected="selected" <?php }?>>
                                            ucs2_turkish_ci
                                        </option>
                                        <option value="ucs2_unicode_520_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_unicode_520_ci') {?> selected="selected" <?php }?>>
                                            ucs2_unicode_520_ci
                                        </option>
                                        <option value="ucs2_unicode_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_unicode_ci') {?> selected="selected" <?php }?>>
                                            ucs2_unicode_ci
                                        </option>
                                        <option value="ucs2_vietnamese_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ucs2_vietnamese_ci') {?> selected="selected" <?php }?>>
                                            ucs2_vietnamese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="ujis" title="EUC-JP Japanese">
                                        <option value="ujis_bin"
                                                title="Japanese, Binary" <?php if ($_smarty_tpl->getValue('col') == 'ujis_bin') {?> selected="selected" <?php }?>>
                                            ujis_bin
                                        </option>
                                        <option value="ujis_japanese_ci"
                                                title="Japanese, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'ujis_japanese_ci') {?> selected="selected" <?php }?>>
                                            ujis_japanese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="utf16" title="UTF-16 Unicode">
                                        <option value="utf16_bin"
                                                title="unknown, Binary" <?php if ($_smarty_tpl->getValue('col') == 'utf16_bin') {?> selected="selected" <?php }?>>
                                            utf16_bin
                                        </option>
                                        <option value="utf16_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_croatian_ci') {?> selected="selected" <?php }?>>
                                            utf16_croatian_ci
                                        </option>
                                        <option value="utf16_czech_ci"
                                                title="Czech, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == '') {?> selected="selected" <?php }?>>
                                            utf16_czech_ci
                                        </option>
                                        <option value="utf16_danish_ci"
                                                title="Danish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_danish_ci') {?> selected="selected" <?php }?>>
                                            utf16_danish_ci
                                        </option>
                                        <option value="utf16_esperanto_ci"
                                                title="Esperanto, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_esperanto_ci') {?> selected="selected" <?php }?>>
                                            utf16_esperanto_ci
                                        </option>
                                        <option value="utf16_estonian_ci"
                                                title="Estonian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_estonian_ci') {?> selected="selected" <?php }?>>
                                            utf16_estonian_ci
                                        </option>
                                        <option value="utf16_general_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_general_ci') {?> selected="selected" <?php }?>>
                                            utf16_general_ci
                                        </option>
                                        <option value="utf16_german2_ci"
                                                title="German (phone book), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_german2_ci') {?> selected="selected" <?php }?>>
                                            utf16_german2_ci
                                        </option>
                                        <option value="utf16_hungarian_ci"
                                                title="Hungarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_hungarian_ci') {?> selected="selected" <?php }?>>
                                            utf16_hungarian_ci
                                        </option>
                                        <option value="utf16_icelandic_ci"
                                                title="Icelandic, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_icelandic_ci') {?> selected="selected" <?php }?>>
                                            utf16_icelandic_ci
                                        </option>
                                        <option value="utf16_latvian_ci"
                                                title="Latvian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_latvian_ci') {?> selected="selected" <?php }?>>
                                            utf16_latvian_ci
                                        </option>
                                        <option value="utf16_lithuanian_ci"
                                                title="Lithuanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_lithuanian_ci') {?> selected="selected" <?php }?>>
                                            utf16_lithuanian_ci
                                        </option>
                                        <option value="utf16_persian_ci"
                                                title="Persian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_persian_ci') {?> selected="selected" <?php }?>>
                                            utf16_persian_ci
                                        </option>
                                        <option value="utf16_polish_ci"
                                                title="Polish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_polish_ci') {?> selected="selected" <?php }?>>
                                            utf16_polish_ci
                                        </option>
                                        <option value="utf16_roman_ci"
                                                title="West European, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_roman_ci') {?> selected="selected" <?php }?>>
                                            utf16_roman_ci
                                        </option>
                                        <option value="utf16_romanian_ci"
                                                title="Romanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_romanian_ci') {?> selected="selected" <?php }?>>
                                            utf16_romanian_ci
                                        </option>
                                        <option value="utf16_sinhala_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_sinhala_ci') {?> selected="selected" <?php }?>>
                                            utf16_sinhala_ci
                                        </option>
                                        <option value="utf16_slovak_ci"
                                                title="Slovak, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_slovak_ci') {?> selected="selected" <?php }?>>
                                            utf16_slovak_ci
                                        </option>
                                        <option value="utf16_slovenian_ci"
                                                title="Slovenian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_slovenian_ci') {?> selected="selected" <?php }?>>
                                            utf16_slovenian_ci
                                        </option>
                                        <option value="utf16_spanish2_ci"
                                                title="Traditional Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_spanish2_ci') {?> selected="selected" <?php }?>>
                                            utf16_spanish2_ci
                                        </option>
                                        <option value="utf16_spanish_ci"
                                                title="Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_spanish_ci') {?> selected="selected" <?php }?>>
                                            utf16_spanish_ci
                                        </option>
                                        <option value="utf16_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_swedish_ci') {?> selected="selected" <?php }?>>
                                            utf16_swedish_ci
                                        </option>
                                        <option value="utf16_turkish_ci"
                                                title="Turkish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_turkish_ci') {?> selected="selected" <?php }?>>
                                            utf16_turkish_ci
                                        </option>
                                        <option value="utf16_unicode_520_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == 'utf16_unicode_520_ci') {?> selected="selected" <?php }?>>
                                            utf16_unicode_520_ci
                                        </option>
                                        <option value="utf16_unicode_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_unicode_ci') {?> selected="selected" <?php }?>>
                                            utf16_unicode_ci
                                        </option>
                                        <option value="utf16_vietnamese_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16_vietnamese_ci') {?> selected="selected" <?php }?>>
                                            utf16_vietnamese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="utf16le" title="UTF-16LE Unicode">
                                        <option value="utf16le_bin" title="unknown, Binary">utf16le_bin</option>
                                        <option value="utf16le_general_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf16le_general_ci') {?> selected="selected" <?php }?>>
                                            utf16le_general_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="utf32" title="UTF-32 Unicode">
                                        <option value="utf32_bin" title="unknown, Binary">utf32_bin</option>
                                        <option value="utf32_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_croatian_ci') {?> selected="selected" <?php }?>>
                                            utf32_croatian_ci
                                        </option>
                                        <option value="utf32_czech_ci"
                                                title="Czech, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_czech_ci') {?> selected="selected" <?php }?>>
                                            utf32_czech_ci
                                        </option>
                                        <option value="utf32_danish_ci"
                                                title="Danish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_danish_ci') {?> selected="selected" <?php }?>>
                                            utf32_danish_ci
                                        </option>
                                        <option value="utf32_esperanto_ci"
                                                title="Esperanto, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_esperanto_ci') {?> selected="selected" <?php }?>>
                                            utf32_esperanto_ci
                                        </option>
                                        <option value="utf32_estonian_ci"
                                                title="Estonian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_estonian_ci') {?> selected="selected" <?php }?>>
                                            utf32_estonian_ci
                                        </option>
                                        <option value="utf32_general_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_general_ci') {?> selected="selected" <?php }?>>
                                            utf32_general_ci
                                        </option>
                                        <option value="utf32_german2_ci"
                                                title="German (phone book), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_german2_ci') {?> selected="selected" <?php }?>>
                                            utf32_german2_ci
                                        </option>
                                        <option value="utf32_hungarian_ci"
                                                title="Hungarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_hungarian_ci') {?> selected="selected" <?php }?>>
                                            utf32_hungarian_ci
                                        </option>
                                        <option value="utf32_icelandic_ci"
                                                title="Icelandic, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_icelandic_ci') {?> selected="selected" <?php }?>>
                                            utf32_icelandic_ci
                                        </option>
                                        <option value="utf32_latvian_ci"
                                                title="Latvian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_latvian_ci') {?> selected="selected" <?php }?>>
                                            utf32_latvian_ci
                                        </option>
                                        <option value="utf32_lithuanian_ci"
                                                title="Lithuanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_lithuanian_ci') {?> selected="selected" <?php }?>>
                                            utf32_lithuanian_ci
                                        </option>
                                        <option value="utf32_persian_ci"
                                                title="Persian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_persian_ci') {?> selected="selected" <?php }?>>
                                            utf32_persian_ci
                                        </option>
                                        <option value="utf32_polish_ci"
                                                title="Polish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_polish_ci') {?> selected="selected" <?php }?>>
                                            utf32_polish_ci
                                        </option>
                                        <option value="utf32_roman_ci"
                                                title="West European, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_roman_ci') {?> selected="selected" <?php }?>>
                                            utf32_roman_ci
                                        </option>
                                        <option value="utf32_romanian_ci"
                                                title="Romanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_romanian_ci') {?> selected="selected" <?php }?>>
                                            utf32_romanian_ci
                                        </option>
                                        <option value="utf32_sinhala_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_sinhala_ci') {?> selected="selected" <?php }?>>
                                            utf32_sinhala_ci
                                        </option>
                                        <option value="utf32_slovak_ci"
                                                title="Slovak, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_slovak_ci') {?> selected="selected" <?php }?>>
                                            utf32_slovak_ci
                                        </option>
                                        <option value="utf32_slovenian_ci"
                                                title="Slovenian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_slovenian_ci') {?> selected="selected" <?php }?>>
                                            utf32_slovenian_ci
                                        </option>
                                        <option value="utf32_spanish2_ci"
                                                title="Traditional Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_spanish2_ci') {?> selected="selected" <?php }?>>
                                            utf32_spanish2_ci
                                        </option>
                                        <option value="utf32_spanish_ci"
                                                title="Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_spanish_ci') {?> selected="selected" <?php }?>>
                                            utf32_spanish_ci
                                        </option>
                                        <option value="utf32_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_swedish_ci') {?> selected="selected" <?php }?>>
                                            utf32_swedish_ci
                                        </option>
                                        <option value="utf32_turkish_ci"
                                                title="Turkish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_turkish_ci') {?> selected="selected" <?php }?>>
                                            utf32_turkish_ci
                                        </option>
                                        <option value="utf32_unicode_520_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == 'utf32_unicode_520_ci') {?> selected="selected" <?php }?>>
                                            utf32_unicode_520_ci
                                        </option>
                                        <option value="utf32_unicode_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_unicode_ci') {?> selected="selected" <?php }?>>
                                            utf32_unicode_ci
                                        </option>
                                        <option value="utf32_vietnamese_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf32_vietnamese_ci') {?> selected="selected" <?php }?>>
                                            utf32_vietnamese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="utf8" title="UTF-8 Unicode">
                                        <option value="utf8_bin"
                                                title="Unicode (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'utf8_bin') {?> selected="selected" <?php }?>>
                                            utf8_bin
                                        </option>
                                        <option value="utf8_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_croatian_ci') {?> selected="selected" <?php }?>>
                                            utf8_croatian_ci
                                        </option>
                                        <option value="utf8_czech_ci"
                                                title="Czech, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_czech_ci') {?> selected="selected" <?php }?>>
                                            utf8_czech_ci
                                        </option>
                                        <option value="utf8_danish_ci"
                                                title="Danish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_danish_ci') {?> selected="selected" <?php }?>>
                                            utf8_danish_ci
                                        </option>
                                        <option value="utf8_esperanto_ci"
                                                title="Esperanto, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_esperanto_ci') {?> selected="selected" <?php }?>>
                                            utf8_esperanto_ci
                                        </option>
                                        <option value="utf8_estonian_ci"
                                                title="Estonian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_estonian_ci') {?> selected="selected" <?php }?>>
                                            utf8_estonian_ci
                                        </option>
                                        <option value="utf8_general_ci" title="Unicode (multilingual), case-insensitive"
                                                <?php if ($_smarty_tpl->getValue('col') == 'utf8_general_ci') {?> selected="selected" <?php }?>>utf8_general_ci
                                        </option>
                                        <option value="utf8_general_mysql500_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == 'utf8_general_mysql500_ci') {?> selected="selected" <?php }?>>
                                            utf8_general_mysql500_ci
                                        </option>
                                        <option value="utf8_german2_ci"
                                                title="German (phone book), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_german2_ci') {?> selected="selected" <?php }?>>
                                            utf8_german2_ci
                                        </option>
                                        <option value="utf8_hungarian_ci"
                                                title="Hungarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_hungarian_ci') {?> selected="selected" <?php }?>>
                                            utf8_hungarian_ci
                                        </option>
                                        <option value="utf8_icelandic_ci"
                                                title="Icelandic, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_icelandic_ci') {?> selected="selected" <?php }?>>
                                            utf8_icelandic_ci
                                        </option>
                                        <option value="utf8_latvian_ci"
                                                title="Latvian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_latvian_ci') {?> selected="selected" <?php }?>>
                                            utf8_latvian_ci
                                        </option>
                                        <option value="utf8_lithuanian_ci"
                                                title="Lithuanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_lithuanian_ci') {?> selected="selected" <?php }?>>
                                            utf8_lithuanian_ci
                                        </option>
                                        <option value="utf8_persian_ci"
                                                title="Persian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_persian_ci') {?> selected="selected" <?php }?>>
                                            utf8_persian_ci
                                        </option>
                                        <option value="utf8_polish_ci"
                                                title="Polish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_polish_ci') {?> selected="selected" <?php }?>>
                                            utf8_polish_ci
                                        </option>
                                        <option value="utf8_roman_ci"
                                                title="West European, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_roman_ci') {?> selected="selected" <?php }?>>
                                            utf8_roman_ci
                                        </option>
                                        <option value="utf8_romanian_ci"
                                                title="Romanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_romanian_ci') {?> selected="selected" <?php }?>>
                                            utf8_romanian_ci
                                        </option>
                                        <option value="utf8_sinhala_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_sinhala_ci') {?> selected="selected" <?php }?>>
                                            utf8_sinhala_ci
                                        </option>
                                        <option value="utf8_slovak_ci"
                                                title="Slovak, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_slovak_ci') {?> selected="selected" <?php }?>>
                                            utf8_slovak_ci
                                        </option>
                                        <option value="utf8_slovenian_ci"
                                                title="Slovenian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_slovenian_ci') {?> selected="selected" <?php }?>>
                                            utf8_slovenian_ci
                                        </option>
                                        <option value="utf8_spanish2_ci"
                                                title="Traditional Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_spanish2_ci') {?> selected="selected" <?php }?>>
                                            utf8_spanish2_ci
                                        </option>
                                        <option value="utf8_spanish_ci"
                                                title="Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_spanish_ci') {?> selected="selected" <?php }?>>
                                            utf8_spanish_ci
                                        </option>
                                        <option value="utf8_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_swedish_ci') {?> selected="selected" <?php }?>>
                                            utf8_swedish_ci
                                        </option>
                                        <option value="utf8_turkish_ci"
                                                title="Turkish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_turkish_ci') {?> selected="selected" <?php }?>>
                                            utf8_turkish_ci
                                        </option>
                                        <option value="utf8_unicode_520_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == 'utf8_unicode_520_ci') {?> selected="selected" <?php }?>>
                                            utf8_unicode_520_ci
                                        </option>
                                        <option value="utf8_unicode_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_unicode_ci') {?> selected="selected" <?php }?>>
                                            utf8_unicode_ci
                                        </option>
                                        <option value="utf8_vietnamese_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8_vietnamese_ci') {?> selected="selected" <?php }?>>
                                            utf8_vietnamese_ci
                                        </option>
                                    </optgroup>
                                    <optgroup label="utf8mb4" title="UTF-8 Unicode">
                                        <option value="utf8mb4_bin"
                                                title="Unicode (multilingual), Binary" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_bin') {?> selected="selected" <?php }?>>
                                            utf8mb4_bin
                                        </option>
                                        <option value="utf8mb4_croatian_ci"
                                                title="Croatian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_croatian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_croatian_ci
                                        </option>
                                        <option value="utf8mb4_czech_ci"
                                                title="Czech, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_czech_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_czech_ci
                                        </option>
                                        <option value="utf8mb4_danish_ci"
                                                title="Danish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_danish_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_danish_ci
                                        </option>
                                        <option value="utf8mb4_esperanto_ci"
                                                title="Esperanto, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_esperanto_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_esperanto_ci
                                        </option>
                                        <option value="utf8mb4_estonian_ci"
                                                title="Estonian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_estonian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_estonian_ci
                                        </option>
                                        <option value="utf8mb4_general_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_general_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_general_ci
                                        </option>
                                        <option value="utf8mb4_german2_ci"
                                                title="German (phone book), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_german2_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_german2_ci
                                        </option>
                                        <option value="utf8mb4_hungarian_ci"
                                                title="Hungarian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_hungarian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_hungarian_ci
                                        </option>
                                        <option value="utf8mb4_icelandic_ci"
                                                title="Icelandic, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_icelandic_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_icelandic_ci
                                        </option>
                                        <option value="utf8mb4_latvian_ci"
                                                title="Latvian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_latvian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_latvian_ci
                                        </option>
                                        <option value="utf8mb4_lithuanian_ci"
                                                title="Lithuanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_lithuanian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_lithuanian_ci
                                        </option>
                                        <option value="utf8mb4_persian_ci"
                                                title="Persian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_persian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_persian_ci
                                        </option>
                                        <option value="utf8mb4_polish_ci"
                                                title="Polish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == '') {?> selected="selected" <?php }?>>
                                            utf8mb4_polish_ci
                                        </option>
                                        <option value="utf8mb4_roman_ci"
                                                title="West European, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_roman_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_roman_ci
                                        </option>
                                        <option value="utf8mb4_romanian_ci"
                                                title="Romanian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_romanian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_romanian_ci
                                        </option>
                                        <option value="utf8mb4_sinhala_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_sinhala_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_sinhala_ci
                                        </option>
                                        <option value="utf8mb4_slovak_ci"
                                                title="Slovak, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == '') {?> selected="selected" <?php }?>>
                                            utf8mb4_slovak_ci
                                        </option>
                                        <option value="utf8mb4_slovenian_ci"
                                                title="Slovenian, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_slovenian_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_slovenian_ci
                                        </option>
                                        <option value="utf8mb4_spanish2_ci"
                                                title="Traditional Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_spanish2_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_spanish2_ci
                                        </option>
                                        <option value="utf8mb4_spanish_ci"
                                                title="Spanish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_spanish_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_spanish_ci
                                        </option>
                                        <option value="utf8mb4_swedish_ci"
                                                title="Swedish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_swedish_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_swedish_ci
                                        </option>
                                        <option value="utf8mb4_turkish_ci"
                                                title="Turkish, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_turkish_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_turkish_ci
                                        </option>
                                        <option value="utf8mb4_unicode_520_ci"
                                                title="Unicode (multilingual)" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_unicode_520_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_unicode_520_ci
                                        </option>
                                        <option value="utf8mb4_unicode_ci"
                                                title="Unicode (multilingual), case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_unicode_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_unicode_ci
                                        </option>
                                        <option value="utf8mb4_vietnamese_ci"
                                                title="unknown, case-insensitive" <?php if ($_smarty_tpl->getValue('col') == 'utf8mb4_vietnamese_ci') {?> selected="selected" <?php }?>>
                                            utf8mb4_vietnamese_ci
                                        </option>
                                    </optgroup>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
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
class Block_1310347176675e16b2593c26_23510095 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $home_currency = $("#home_currency");

            $("#tzone").select2();
            $("#country").select2();
            $home_currency.select2();
            $("#lan").select2();
            $("#df").select2();
            $("#cformat").select2();
            $("#coll").select2();
            $("#currency_symbol_position").select2();


            var $currency_code = $("#currency_code");


            var data_symbol = "";

            $home_currency.change(function(){

                data_symbol = $(this).find(':selected').data('symbol');

                $currency_code.val(data_symbol);



            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
