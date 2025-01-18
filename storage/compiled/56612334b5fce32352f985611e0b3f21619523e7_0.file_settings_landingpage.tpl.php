<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:41:38
  from 'file:../default/settings_landingpage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e17b2625de7_14053824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56612334b5fce32352f985611e0b3f21619523e7' => 
    array (
      0 => '../default/settings_landingpage.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e17b2625de7_14053824 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_487237325675e17b26185b0_45552287', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_487237325675e17b26185b0_45552287 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>





<div class="col-md-8 mx-auto">
    <h1 class="text-center fw-bolder display-6"> Landing page text editor</h1>
    <p class="text-center fw-bolder
"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Click on the edit buttoon to edit the content of the pages');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</p>
    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Home Page');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</div>

            </div>
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/home-page" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</a>
            <button type="button" class="btn btn-success ms-2"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Terms and Condition');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</div>

            </div>
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/terms-page" type="" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</a>
            <button type="button" class="btn btn-success ms-2"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Cookie Policy');
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</div>

            </div>
            <a type="" href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/cookie-page" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</a>
            <button type="button" class="btn btn-success ms-2"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Privacy Policy');
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</div>

            </div>
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/privacy-policy-page" type="button" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</a>
            <button type="button" class="btn btn-success ms-2"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Footer Section');
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</div>

            </div>
            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/contact-page" class="btn btn-primary"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
</a>
            <button type="button" class="btn btn-success ms-2"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</button>
        </li>
    </ol>
</div>



<?php
}
}
/* {/block "content"} */
}
