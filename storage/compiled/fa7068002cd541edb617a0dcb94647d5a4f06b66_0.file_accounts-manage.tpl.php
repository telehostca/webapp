<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:11
  from 'file:../default/accounts-manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d37be71954_93604540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa7068002cd541edb617a0dcb94647d5a4f06b66' => 
    array (
      0 => '../default/accounts-manage.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d37be71954_93604540 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12421811956745d37be5a583_36103187', "content");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7150639906745d37be6ef63_58448516', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_12421811956745d37be5a583_36103187 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Manage_Accounts'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
accounts/add/" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['New Account'];?>
</a>
                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">



                        <table class="table table-striped table-bordered" id="clx_datatable">

                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Balance'];?>
</th>
                                <th><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('balances')['banks'], 'bank');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('bank')->value) {
$foreach0DoElse = false;
?>



                                <tr>
                                    <td>
                                        <h4><?php echo $_smarty_tpl->getValue('bank')->account;?>
</h4>
                                    </td>
                                    <td>
                                        <?php if (((null !== ($_smarty_tpl->getValue('balances')['balances'][$_smarty_tpl->getValue('bank')->id] ?? null)))) {?>



                                            <strong><?php echo $_smarty_tpl->getValue('_L')['Equity'];?>
 (<?php echo $_smarty_tpl->getValue('_L')['Initial balance'];?>
): <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('balances')['total_equity_bank'][$_smarty_tpl->getValue('bank')->id],$_smarty_tpl->getValue('balances')['home_currency']->iso_code);?>
</strong> <br>
                                            <strong><?php echo $_smarty_tpl->getValue('_L')['Total in'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('balances')['total_in_bank'][$_smarty_tpl->getValue('bank')->id],$_smarty_tpl->getValue('balances')['home_currency']->iso_code);?>
 </strong>  <br>
                                            <strong><?php echo $_smarty_tpl->getValue('_L')['Total out'];?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('balances')['total_out_bank'][$_smarty_tpl->getValue('bank')->id],$_smarty_tpl->getValue('balances')['home_currency']->iso_code);?>
 </strong>  <br>

                                            <hr>

                                            <strong> <?php echo $_smarty_tpl->getValue('_L')['Balance'];?>
 (<?php echo $_smarty_tpl->getValue('_L')['in home currency'];?>
) : <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('balances')['balances'][$_smarty_tpl->getValue('bank')->id],$_smarty_tpl->getValue('balances')['home_currency']->iso_code);?>
</strong>

                                        <?php }?>
                                    </td>
                                    <td>


                                        <div class="btn-group">
                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
accounts/add-equity/<?php echo $_smarty_tpl->getValue('bank')->id;?>
" class="btn btn-sm btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Record initial balance'];?>
</a>

                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
accounts/edit/<?php echo $_smarty_tpl->getValue('bank')->id;?>
" class="btn btn-sm btn-warning"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>

                                            <?php ob_start();
echo $_smarty_tpl->getValue('bank')->ib_url;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != '') {?>
                                                <a href="<?php echo $_smarty_tpl->getValue('bank')->ib_url;?>
" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-globe"></i></a>
                                            <?php }?>

                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
accounts/delete/<?php echo $_smarty_tpl->getValue('bank')->id;?>
" id="did<?php echo $_smarty_tpl->getValue('bank')->id;?>
" class="cdelete btn btn-danger btn-sm"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>
                                        </div>


                                    </td>
                                </tr>

                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>




                        </table>

                        <div class="hr-line-dashed"></div>

                        <h3><?php echo $_smarty_tpl->getValue('_L')['Net Worth'];?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('balances')['net_worth'],$_smarty_tpl->getValue('balances')['home_currency']->iso_code);?>
</h3>

                    </div>
                </div>

            </div>



        </div>



    </div>


    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_7150639906745d37be6ef63_58448516 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>
        $(function () {
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                var lan_msg = $("#_lan_are_you_sure").val();
                app.confirm(lan_msg, function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "accounts/delete/" + id + '/';
                    }
                });
            });

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                    },
                }
            );

        })
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block "script"} */
}
