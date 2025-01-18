<?php
/* Smarty version 4.3.2, created on 2023-09-10 08:52:15
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/menus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fdbbffe413b9_22716854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5dfc4b45b7f4096560693d249302eafdaec22cd' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/menus.tpl',
      1 => 1694350334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fdbbffe413b9_22716854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122571720764fdbbffe141f3_34460025', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33914635664fdbbffe3fdb8_36538457', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_122571720764fdbbffe141f3_34460025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122571720764fdbbffe141f3_34460025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3><?php echo __('Add new menu');?>
</h3>
                <form id="appForm">

                    <div class="mb-3">
                        <label for="inputMenuName"><?php echo __('Name');?>
</label>
                        <input class="form-control" id="inputMenuName" required name="name"

                                    <?php if (!empty($_smarty_tpl->tpl_vars['selected_menu']->value)) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value->name;?>
"
                                    <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuLink"><?php echo __('Link');?>
</label>
                        <input class="form-control" id="inputMenuLink" required name="link"

                                 <?php if (!empty($_smarty_tpl->tpl_vars['selected_menu']->value)) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value->link;?>
"
                                 <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuParent"><?php echo __('Parent');?>
</label>
                        <select class="form-select" id="inputMenuParent" name="parent_id">
                            <option value="0"><?php echo __('No parent');?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['selected_menu']->value) && $_smarty_tpl->tpl_vars['selected_menu']->value->id == $_smarty_tpl->tpl_vars['menu']->value->id) {?>
                                    <?php continue 1;?>
                                <?php }?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
"

                                        <?php if (!empty($_smarty_tpl->tpl_vars['selected_menu']->value) && $_smarty_tpl->tpl_vars['selected_menu']->value->parent_id == $_smarty_tpl->tpl_vars['menu']->value->id) {?>
                                            selected
                                        <?php }?>

                                ><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuDisplayOrder"><?php echo __('Display order');?>
</label>
                        <input class="form-control" type="number" required id="inputMenuDisplayOrder" name="display_order"
                               value="<?php if (!empty($_smarty_tpl->tpl_vars['selected_menu']->value)) {
echo $_smarty_tpl->tpl_vars['selected_menu']->value->display_order;
}?>"
                        >
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['selected_menu']->value)) {?>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value->id;?>
">
                    <?php }?>

                    <button type="submit" class="btn btn-primary"><?php echo __('Save');?>
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
                            <th><?php echo __('Name');?>
</th>
                            <th><?php echo __('Parent');?>
</th>
                            <th><?php echo __('Display order');?>
</th>
                            <th><?php echo __('Actions');?>
</th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                            <tr>
                                <td>
                                    <div class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</div>
                                    <p>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->link;?>
</a>
                                    </p>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['menu']->value->parent_id) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'parent');
$_smarty_tpl->tpl_vars['parent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['parent']->value->id == $_smarty_tpl->tpl_vars['menu']->value->parent_id) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['parent']->value->name;?>

                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['menu']->value->display_order;?>
</td>
                                <td class="text-end">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/menus/<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
" class="btn btn-primary btn-sm"><?php echo __('Edit');?>
</a>
                                    <a href="#" class="btn btn-danger btn-sm"><?php echo __('Delete');?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
class Block_33914635664fdbbffe3fdb8_36538457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_33914635664fdbbffe3fdb8_36538457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
