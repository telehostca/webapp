<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:48
  from 'file:../default/list-tax.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16cc4524b9_71644847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6585bbb57981a59f5617d8573ab8ba6fae58ddbb' => 
    array (
      0 => '../default/list-tax.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16cc4524b9_71644847 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_137222787675e16cc443d26_05724842', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2084669702675e16cc444ef7_47852444', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1264459454675e16cc451785_44122512', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_137222787675e16cc443d26_05724842 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_2084669702675e16cc444ef7_47852444 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Sales Taxes'];?>
 </h2>
            <div class="panel-toobar">
                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/add-tax/" id="item_add" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['Add Tax'];?>
 </a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-bordered table-striped table-hover sys_table">
                    <thead>
                    <tr>
                        <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</th>
                        <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Tax Rate'];?>
</th>

                        <th class="h6 text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                        <tr id="<?php echo $_smarty_tpl->getValue('ds')['id'];?>
">
                            <td> <?php if ($_smarty_tpl->getValue('ds')['is_default'] == '1') {?> <label class="label label-success label-sm"><?php echo $_smarty_tpl->getValue('_L')['Default'];?>
</label> <?php }?> <?php echo $_smarty_tpl->getValue('ds')['name'];?>
 </td>
                            <td>


                                <?php if ($_smarty_tpl->getValue('ds')['rate'] == '0.000' || $_smarty_tpl->getValue('ds')['rate'] == '0.00') {?>
                                    0%
                                <?php } elseif ($_smarty_tpl->getValue('ds')['rate'] == '5.000') {?>
                                    5%
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getValue('ds')['rate'];?>
%
                                <?php }?>



                            </td>
                            <td class="text-end">
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/edit-tax/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-secondary"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
 </a>


                                <?php if ($_smarty_tpl->getValue('ds')['is_default'] != '1') {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/tax-make-default/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-info"><i class="fal fa-star"></i> <?php echo $_smarty_tpl->getValue('_L')['Make Default'];?>
 </a>
                                <?php }?>
                                <button type="button" id="t<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" class="btn btn-danger cdelete"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
 </button>
                            </td>

                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>
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
class Block_1264459454675e16cc451785_44122512 extends \Smarty\Runtime\Block
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
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tax/delete/" + id;
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
