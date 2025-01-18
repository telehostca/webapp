<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:27
  from 'file:../default/posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d38b88ccc3_69008454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '538b49c441ebd95345222e4845676cabb9df0059' => 
    array (
      0 => '../default/posts.tpl',
      1 => 1694991346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d38b88ccc3_69008454 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7224900136745d38b883bf8_82601463', "content");
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_7224900136745d38b883bf8_82601463 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <h3 class="mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pages');?>
</h3>
                </div>
                <div>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
cms/post" class="btn btn-primary mb-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('New Page');?>
</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>
                            <span class="h4"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Page');?>
</span>
                        </th>
                        <th class="text-end">
                            <span class="h4"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Manage');?>
</span>
                        </th>
                    </tr>

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
                        <tr>
                            <td>
                                <div class="mb-2">
                                    <a class="fw-bold" href="<?php echo $_smarty_tpl->getValue('base_url');?>
cms/post/<?php echo $_smarty_tpl->getValue('post')->id;?>
"><?php echo $_smarty_tpl->getValue('post')->title;?>
</a>
                                </div>
                                <?php if ($_smarty_tpl->getValue('post')->is_home_page) {?>
                                    <a target="_blank" href="<?php echo APP_URL;?>
"><?php echo APP_URL;?>
</a>
                                    <div class="mt-2">
                                        <span class="badge bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Home Page');?>
</span>
                                    </div>
                                    <?php } else { ?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('base_url');
echo $_smarty_tpl->getValue('post')->slug;?>
">/<?php echo $_smarty_tpl->getValue('post')->slug;?>
</a>
                                <?php }?>

                            </td>
                            <td class="text-end">
                                <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->getValue('base_url');?>
cms/post/<?php echo $_smarty_tpl->getValue('post')->id;?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Edit');?>
</a>
                                <?php if (!$_smarty_tpl->getValue('post')->is_home_page) {?>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'cms/delete-post/<?php echo $_smarty_tpl->getValue('post')->id;?>
');" class="btn btn-danger btn-sm"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete');?>
</a>
                                <?php }?>
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

<?php
}
}
/* {/block "content"} */
}
