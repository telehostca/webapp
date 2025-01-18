<?php
/* Smarty version 4.3.2, created on 2023-09-18 02:55:56
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6507f47c131502_04370720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '363f7461dde64eee54442937c06bcd16ff1f46d8' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/posts.tpl',
      1 => 1695020144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6507f47c131502_04370720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4413657726507f47c129289_82085204', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_4413657726507f47c129289_82085204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4413657726507f47c129289_82085204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <h3 class="mb-3"><?php echo __('Pages');?>
</h3>
                </div>
                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/post" class="btn btn-primary mb-3"><?php echo __('New Page');?>
</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>
                            <span class="h4"><?php echo __('Page');?>
</span>
                        </th>
                        <th class="text-end">
                            <span class="h4"><?php echo __('Manage');?>
</span>
                        </th>
                    </tr>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <tr>
                            <td>
                                <div class="mb-2">
                                    <a class="fw-bold" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value->is_home_page) {?>
                                    <a target="_blank" href="<?php echo APP_URL;?>
"><?php echo APP_URL;?>
</a>
                                    <div class="mt-2">
                                        <span class="badge bg-primary"><?php echo __('Home Page');?>
</span>
                                    </div>
                                    <?php } else { ?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['post']->value->slug;?>
">/<?php echo $_smarty_tpl->tpl_vars['post']->value->slug;?>
</a>
                                <?php }?>

                            </td>
                            <td class="text-end">
                                <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cms/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo __('Edit');?>
</a>
                                <?php if (!$_smarty_tpl->tpl_vars['post']->value->is_home_page) {?>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'cms/delete-post/<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
');" class="btn btn-danger btn-sm"><?php echo __('Delete');?>
</a>
                                <?php }?>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
