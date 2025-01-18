<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:31
  from 'file:../default/statement.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15cb896fd4_12311388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '429e3cdf957af3922d809b9f9e1fc9d4ccec49db' => 
    array (
      0 => '../default/statement.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15cb896fd4_12311388 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1422869742675e15cb88d3b6_80557379', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_214721211675e15cb896194_30779098', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_1422869742675e15cb88d3b6_80557379 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['View Statement'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
reports/statement-view" id="tform" role="form">
                            <div class="mb-3">
                                <label for="description"><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</label>
                                <select id="account" name="account">
                                    <option value=""><?php echo $_smarty_tpl->getValue('_L')['Choose an Account'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('ds')['account'];?>
"><?php echo $_smarty_tpl->getValue('ds')['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>



                            <div class="mb-3">
                                <label for="fdate"><?php echo $_smarty_tpl->getValue('_L')['From Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->getValue('tdate');?>
" name="fdate" id="fdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="mb-3">
                                <label for="tdate"><?php echo $_smarty_tpl->getValue('_L')['To Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->getValue('mdate');?>
" name="tdate" id="tdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>
                            <div class="mb-3">
                                <label for="stype"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</label>
                                <select id="stype" name="stype" class="form-control">
                                    <option value="all" selected="selected"><?php echo $_smarty_tpl->getValue('_L')['All Transactions'];?>
</option>
                                    <option value="credit"><?php echo $_smarty_tpl->getValue('_L')['Credit'];?>
</option>
                                    <option value="debit"><?php echo $_smarty_tpl->getValue('_L')['Debit'];?>
</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['View Statement'];?>
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
class Block_214721211675e15cb896194_30779098 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>
        $(function () {

            $("#account").select2();
            $("#cats").select2();
            $("#pmethod").select2();
            $("#payer").select2();
            $('#dp1').datepicker({
                format: 'yyyy-mm-dd'
            });
            $('#dp2').datepicker({
                format: 'yyyy-mm-dd'
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
