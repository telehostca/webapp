<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:29:07
  from 'file:../default/hostbilling/client/view_order.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e14c3c32e87_27841015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f7fdf7e45f733fb46cc1df161f7fb3373a4fd3' => 
    array (
      0 => '../default/hostbilling/client/view_order.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e14c3c32e87_27841015 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1489190125675e14c3c22962_86308569', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1086920433675e14c3c321c8_41317581', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1489190125675e14c3c22962_86308569 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
?>


    <div class="card">
        <div class="card-body">
            <h3><?php echo $_smarty_tpl->getValue('order')->tracking_id;?>
</h3>
            <div class="hr-line-dashed"></div>
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Status');?>
:</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('cloudonex_get_order_status_with_badge')($_smarty_tpl->getValue('order')->status);?>



            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('buttons'))) {?>

                <div class="my-3">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('buttons'), 'button');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('button')->value) {
$foreach0DoElse = false;
?>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');
echo $_smarty_tpl->getValue('button')['link'];?>
/<?php echo $_smarty_tpl->getValue('order')->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('button')['text'];?>
</a>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>

            <?php }?>

            <?php if ($_smarty_tpl->getValue('order')->login_url) {?>
                <div class="mt-3">
                    <a href="<?php echo $_smarty_tpl->getValue('order')->login_url;?>
" target="_blank"><?php echo $_smarty_tpl->getValue('order')->login_url;?>
</a>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('order')->username) {?>
                <div class="mt-3">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Username');?>
:</strong> <?php echo $_smarty_tpl->getValue('order')->username;?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('order')->password) {?>
                <div class="mt-3">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Password');?>
:</strong> <span id="password_view_holder"><a href="#" id="view_password" data-value="<?php echo $_smarty_tpl->getValue('order')->password;?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('View');?>
</a></span>
                </div>
            <?php }?>

            <?php if (!empty($_smarty_tpl->getValue('server')) && $_smarty_tpl->getValue('server')->type == 'cpanel') {?>

                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
client/one-click-login/<?php echo $_smarty_tpl->getValue('order')->id;?>
/<?php echo $_smarty_tpl->getValue('order')->tracking_id;?>
" target="_blank" class="btn btn-primary mt-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Login');?>
</a>

            <?php }?>





            <div class="mt-3">
                <h4><?php echo $_smarty_tpl->getValue('order')->activation_subject;?>
</h4>
            </div>
            <div class="mt-3">
                <?php echo $_smarty_tpl->getValue('order')->activation_message;?>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1086920433675e14c3c321c8_41317581 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default/hostbilling/client';
?>


    <?php echo '<script'; ?>
>

        $(function () {
            let $view_password = $('#view_password');
            let $password_view_holder = $('#password_view_holder');

            $view_password.on('click',function (event) {
                event.preventDefault();
                let password = $view_password.attr('data-value');
                $password_view_holder.html('<code>' + password + '</code>')
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
