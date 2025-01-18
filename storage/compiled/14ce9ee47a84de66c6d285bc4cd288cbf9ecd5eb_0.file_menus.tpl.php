<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:55
  from 'file:../default/menus.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3a7dad1d4_41899294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14ce9ee47a84de66c6d285bc4cd288cbf9ecd5eb' => 
    array (
      0 => '../default/menus.tpl',
      1 => 1694321536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3a7dad1d4_41899294 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7838802366745d3a7d91f29_57763174', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7048275246745d3a7dac569_99409280', "scripts");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_7838802366745d3a7d91f29_57763174 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Add new menu');?>
</h3>
                <form id="appForm">

                    <div class="mb-3">
                        <label for="inputMenuName"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Name');?>
</label>
                        <input class="form-control" id="inputMenuName" required name="name"

                                    <?php if (!empty($_smarty_tpl->getValue('selected_menu'))) {?>
                                            value="<?php echo $_smarty_tpl->getValue('selected_menu')->name;?>
"
                                    <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuLink"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link');?>
</label>
                        <input class="form-control" id="inputMenuLink" required name="link"

                                 <?php if (!empty($_smarty_tpl->getValue('selected_menu'))) {?>
                                        value="<?php echo $_smarty_tpl->getValue('selected_menu')->link;?>
"
                                 <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuParent"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Parent');?>
</label>
                        <select class="form-select" id="inputMenuParent" name="parent_id">
                            <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No parent');?>
</option>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menus'), 'menu');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('menu')->value) {
$foreach0DoElse = false;
?>

                                <?php if (!empty($_smarty_tpl->getValue('selected_menu')) && $_smarty_tpl->getValue('selected_menu')->id == $_smarty_tpl->getValue('menu')->id) {?>
                                    <?php continue 1;?>
                                <?php }?>

                                <option value="<?php echo $_smarty_tpl->getValue('menu')->id;?>
"

                                        <?php if (!empty($_smarty_tpl->getValue('selected_menu')) && $_smarty_tpl->getValue('selected_menu')->parent_id == $_smarty_tpl->getValue('menu')->id) {?>
                                            selected
                                        <?php }?>

                                ><?php echo $_smarty_tpl->getValue('menu')->name;?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuDisplayOrder"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Display order');?>
</label>
                        <input class="form-control" type="number" required id="inputMenuDisplayOrder" name="display_order"
                               value="<?php if (!empty($_smarty_tpl->getValue('selected_menu'))) {
echo $_smarty_tpl->getValue('selected_menu')->display_order;
}?>"
                        >
                    </div>

                    <?php if (!empty($_smarty_tpl->getValue('selected_menu'))) {?>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('selected_menu')->id;?>
">
                    <?php }?>

                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save');?>
</button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Name');?>
</th>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Parent');?>
</th>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Display order');?>
</th>
                            <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Actions');?>
</th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menus'), 'menu');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('menu')->value) {
$foreach1DoElse = false;
?>
                            <tr>
                                <td>
                                    <div class="fw-bold"><?php echo $_smarty_tpl->getValue('menu')->name;?>
</div>
                                    <p>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->getValue('menu')->link;?>
"><?php echo $_smarty_tpl->getValue('menu')->link;?>
</a>
                                    </p>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->getValue('menu')->parent_id) {?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menus'), 'parent');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('parent')->value) {
$foreach2DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('parent')->id == $_smarty_tpl->getValue('menu')->parent_id) {?>
                                                <?php echo $_smarty_tpl->getValue('parent')->name;?>

                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->getValue('menu')->display_order;?>
</td>
                                <td class="text-end">
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
cms/menus/<?php echo $_smarty_tpl->getValue('menu')->id;?>
" class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Edit');?>
</a>
                                    <a href="#" class="btn btn-danger btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete');?>
</a>
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

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_7048275246745d3a7dac569_99409280 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        window.addEventListener('DOMContentLoaded', () => {
            const appForm = document.getElementById('appForm');
            appForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(appForm);
                axios.post(base_url + 'cms/save-menu', formData)
                    .then((response) => {
                        window.location.reload();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
