<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:35:50
  from 'file:../default/appearance_themes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e165663d9c1_52543758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a66520351fcff04194fd2bdda4aa79d5f95f2a0' => 
    array (
      0 => '../default/appearance_themes.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e165663d9c1_52543758 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2088807272675e1656629d73_64516160', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_2088807272675e1656629d73_64516160 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Themes'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
appearance/themes_post">


                            <div class="mb-3">
                                <label for="theme"><?php echo $_smarty_tpl->getValue('_L')['Theme'];?>
</label>
                                <select name="theme" id="theme" class="form-select">

                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (($tmp = $_smarty_tpl->getValue('themes') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'theme');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('theme')->value) {
$foreach0DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('theme');?>
"
                                                <?php if ($_smarty_tpl->getValue('config')['theme'] == $_smarty_tpl->getValue('theme')) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('theme'));?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>



                            <h3><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Frontend ');?>
</h3>

                            <div class="mb-3">
                                <label for="frontend_theme"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Theme');?>
</label>
                                <select name="frontend_theme" id="frontend_theme" class="form-select">
                                    <option value=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Default');?>
</option>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, (($tmp = $_smarty_tpl->getValue('frontend_themes') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'frontend_theme');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('frontend_theme')->value) {
$foreach1DoElse = false;
?>
                                        <option value="<?php echo $_smarty_tpl->getValue('frontend_theme');?>
"
                                                <?php if (!empty($_smarty_tpl->getValue('config')['frontend_theme']) && $_smarty_tpl->getValue('config')['frontend_theme'] == $_smarty_tpl->getValue('frontend_theme')) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('frontend_theme'));?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="frontend_primary_color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Primary Color');?>
</label>
                                <input type="color" id="frontend_primary_color" name="frontend_primary_color" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_color'] ?? null)===null||$tmp==='' ? '#007bff' ?? null : $tmp);?>
" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="frontend_link_color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Link Color');?>
</label>
                                <input type="color" id="frontend_link_color" name="frontend_link_color" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_link_color'] ?? null)===null||$tmp==='' ? '#007bff' ?? null : $tmp);?>
" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="frontend_primary_button_color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Primary Button Color');?>
</label>
                                <input type="color" id="frontend_primary_button_color" name="frontend_primary_button_color" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_button_color'] ?? null)===null||$tmp==='' ? '#007bff' ?? null : $tmp);?>
" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="frontend_primary_button_hover_color"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Primary Button Hover Color');?>
</label>
                                <input type="color" id="frontend_primary_button_hover_color" name="frontend_primary_button_hover_color" value="<?php echo (($tmp = $_smarty_tpl->getValue('config')['frontend_primary_button_hover_color'] ?? null)===null||$tmp==='' ? '#0069d9' ?? null : $tmp);?>
" class="form-control">
                            </div>



                            <input type="hidden" name="nstyle" value="dark">

                            <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
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
}
