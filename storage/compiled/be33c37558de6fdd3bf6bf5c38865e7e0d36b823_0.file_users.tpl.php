<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:12
  from 'file:../default/users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16a8a7b698_98360134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be33c37558de6fdd3bf6bf5c38865e7e0d36b823' => 
    array (
      0 => '../default/users.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16a8a7b698_98360134 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1178335613675e16a8a5d065_98204909', "head");
?>





<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_369558378675e16a8a5e786_25504977', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_299575988675e16a8a78700_04289900', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1178335613675e16a8a5d065_98204909 extends \Smarty\Runtime\Block
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
class Block_369558378675e16a8a5e786_25504977 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Manage_Users'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/users-add" class="btn btn-primary"> <?php echo $_smarty_tpl->getValue('_L')['Add_New_User'];?>
</a>

                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th style="width: 60px;background: #f0f2ff"><?php echo $_smarty_tpl->getValue('_L')['Avatar'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Details'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>
                                    <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                </tr>
                                </thead>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td><?php if ($_smarty_tpl->getValue('ds')['img'] == 'gravatar') {?>
                                                <img src="http://www.gravatar.com/avatar/<?php echo ($_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('ds')['username']));?>
?s=60" class="img-circle" alt="<?php echo $_smarty_tpl->getValue('user')['fullname'];?>
">
                                            <?php } elseif ($_smarty_tpl->getValue('ds')['img'] == '') {?>
                                                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
ui/lib/img/default-user-avatar.png" style="max-height: 60px;" alt="">
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->getValue('app_url');?>
/<?php echo $_smarty_tpl->getValue('ds')['img'];?>
" class="img-circle" style="max-height: 60px;" alt="<?php echo $_smarty_tpl->getValue('ds')['fullname'];?>
">
                                            <?php }?></td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->getValue('ds')['fullname'];?>

                                            <br>  <?php echo $_smarty_tpl->getValue('ds')['username'];?>

                                            <?php if ($_smarty_tpl->getValue('ds')['phonenumber'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->getValue('ds')['phonenumber'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('ds')['address_line_1'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->getValue('ds')['address_line_1'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('ds')['address_line_2'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->getValue('ds')['address_line_2'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('ds')['city'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->getValue('ds')['city'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('ds')['state'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->getValue('ds')['state'];?>
 - <?php echo $_smarty_tpl->getValue('ds')['zip'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('ds')['country'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->getValue('ds')['country'];?>

                                            <?php }?>
                                        </td>

                                        <td class="h6 text-info">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('ds')['user_type']);?>


                                            <?php if ((null !== ($_smarty_tpl->getValue('relations')[$_smarty_tpl->getValue('ds')['id']] ?? null))) {?>
                                                <hr>
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('relations')[$_smarty_tpl->getValue('ds')['id']], 'relation');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('relation')->value) {
$foreach1DoElse = false;
?>

                                                    <?php if ((null !== ($_smarty_tpl->getValue('departments')[$_smarty_tpl->getValue('relation')] ?? null))) {?>
                                                        <span class="label label-success"><?php echo $_smarty_tpl->getValue('departments')[$_smarty_tpl->getValue('relation')]->dname;?>
</span>
                                                    <?php }?>

                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            <?php }?>


                                        </td>
                                        <td>
                                            <div class="btn-group float-end">
                                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/users-edit/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" class="btn btn-primary btn-sm"><i class="fal fa-pencil"></i> </a>
                                                <?php if (($_smarty_tpl->getValue('_user')['username']) != ($_smarty_tpl->getValue('ds')['username'])) {?>
                                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/users-delete/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" id="<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" class="btn btn-danger btn-sm cdelete"><i class="fal fa-trash-alt"></i> </a>
                                                <?php }?>

                                            </div>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


                            </table>
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
class Block_299575988675e16a8a78700_04289900 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable({
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
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
