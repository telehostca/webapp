<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:38:02
  from 'file:../default/ajax-add-custom-field.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16daf31980_21707510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae65d4722d15f30f7e4ea7519a682c17883e19a' => 
    array (
      0 => '../default/ajax-add-custom-field.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16daf31980_21707510 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?><div class="mx-auto">
    <div class="panel mb-0 rounded-0" id="modal_form">
        <div class="panel-hdr">
            <h2>
                <?php echo $_smarty_tpl->getValue('_L')['Add Custom Field'];?>

            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form role="form" name="add_form" id="add_form" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/customfields-post">
                    <div class="mb-3">
                        <label for="fieldname"><?php echo $_smarty_tpl->getValue('_L')['Field Name'];?>
</label>
                        <input type="text" class="form-control" id="fieldname" name="fieldname">
                    </div>

                    <div class="mb-3">
                        <label for="fieldtype"><?php echo $_smarty_tpl->getValue('_L')['Field Type'];?>
</label>
                        <select class="form-select" name="fieldtype" id="fieldtype">

                            <option value="text" selected=""><?php echo $_smarty_tpl->getValue('_L')['Text Box'];?>
</option>
                            <option value="password"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</option>
                            <option value="dropdown"><?php echo $_smarty_tpl->getValue('_L')['Drop Down'];?>
</option>
                            <option value="textarea"><?php echo $_smarty_tpl->getValue('_L')['Text Area'];?>
</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description"><?php echo $_smarty_tpl->getValue('_L')['Description'];?>
</label>
                        <input type="text" class="form-control" id="description" name="description">
                        <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['Optional Description help'];?>
</span>
                    </div>
                    <div class="mb-3">
                        <label for="validation"><?php echo $_smarty_tpl->getValue('_L')['Validation'];?>
</label>
                        <input type="text" class="form-control" id="validation" name="validation">
                        <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['Regular Expression Validation'];?>
</span>
                    </div>
                    <div class="mb-3">
                        <label for="options"><?php echo $_smarty_tpl->getValue('_L')['Select Options'];?>
</label>
                        <input type="text" class="form-control" id="options" name="options">
                        <span class="help-block"><?php echo $_smarty_tpl->getValue('_L')['Comma Separated List'];?>
</span>
                    </div>

                    <div class="mb-3">
                        <label for="options"><?php echo $_smarty_tpl->getValue('_L')['Show in View Invoice'];?>
</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="showinvoice" id="showInvoiceYes" value="Yes">
                                <?php echo $_smarty_tpl->getValue('_L')['Yes'];?>

                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="showinvoice" id="showInvoiceNo" value="No" checked>
                                <?php echo $_smarty_tpl->getValue('_L')['No'];?>

                            </label>
                        </div>

                    </div>

                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" id="add_submit"><?php echo $_smarty_tpl->getValue('_L')['Save'];?>
</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
