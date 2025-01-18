<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:15
  from 'file:../default/users-add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16abeb7d08_53611206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae8784cd5280ecd2db1c499975752e5747a8efa' => 
    array (
      0 => '../default/users-add.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16abeb7d08_53611206 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_614843747675e16abea7e71_52980064', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_614843747675e16abea7e71_52980064 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->getValue('_L')['Add New User'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->getValue('_url');?>
settings/users-post">
                            <div class="mb-3">
                                <label for="username"><?php echo $_smarty_tpl->getValue('_L')['Username'];?>
 (<?php echo $_smarty_tpl->getValue('_L')['Email'];?>
)</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                            <div class="mb-3">
                                <label for="fullname"><?php echo $_smarty_tpl->getValue('_L')['Full Name'];?>
</label>
                                <input type="text" class="form-control" id="fullname" name="fullname">
                            </div>

                            <div class="mb-3">
                                <label for="phone"><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="phone"><?php echo $_smarty_tpl->getValue('_L')['Alternative Email'];?>
</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="mb-3">
                                <label for="phone"><?php echo $_smarty_tpl->getValue('_L')['Mobile Phone'];?>
</label>
                                <input type="text" class="form-control" id="mobile_phone" name="mobile_phone">
                            </div>

                            <div class="mb-3">
                                                                                                                                
                                                                
                                <label><?php echo $_smarty_tpl->getValue('_L')['User'];?>
 <?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</label>

                                <div class="i-checks"><label> <input type="radio" value="Admin" name="user_type" checked> <i></i> <?php echo $_smarty_tpl->getValue('_L')['Full Administrator'];?>
 </label></div>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('roles'), 'role');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('role')->value) {
$foreach0DoElse = false;
?>
                                    <div class="i-checks"><label> <input type="radio" value="<?php echo $_smarty_tpl->getValue('role')['id'];?>
" name="user_type"> <i></i> <?php echo $_smarty_tpl->getValue('role')['rname'];?>
 </label></div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>



                            </div>




                            <div class="mb-3">
                                <label for="password"><?php echo $_smarty_tpl->getValue('_L')['Password'];?>
</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-3">
                                <label for="cpassword"><?php echo $_smarty_tpl->getValue('_L')['Confirm Password'];?>
</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword">
                            </div>


                            
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        
                                                                                                                                            
                                                                                                                                                                                                    

                                                                                                                

                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                            <?php echo $_smarty_tpl->getValue('_L')['Or'];?>
 <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/users"><?php echo $_smarty_tpl->getValue('_L')['Cancel'];?>
</a>
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
