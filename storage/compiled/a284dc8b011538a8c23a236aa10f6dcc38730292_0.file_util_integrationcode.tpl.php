<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:34:01
  from 'file:../default/util_integrationcode.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15e947d5e7_92653394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a284dc8b011538a8c23a236aa10f6dcc38730292' => 
    array (
      0 => '../default/util_integrationcode.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15e947d5e7_92653394 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_776951687675e15e9478c79_83784493', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1326568108675e15e947a347_55348451', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_832437098675e15e947cba7_42458175', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_776951687675e15e9478c79_83784493 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism.min.css" />
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1326568108675e15e947a347_55348451 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Integration Code'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h4><?php echo $_smarty_tpl->getValue('_L')['Client Login'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->getValue('form_client_login');?>
</code></pre>
                        <h4><?php echo $_smarty_tpl->getValue('_L')['Client Registration'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->getValue('form_client_register');?>
</code></pre>
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
class Block_832437098675e15e947cba7_42458175 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
