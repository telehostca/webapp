<?php
/* Smarty version 4.3.2, created on 2023-09-08 11:30:57
  from '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fb3e311acd96_57239831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cafe454bceaa8ee41d24a6783923789de17907c7' => 
    array (
      0 => '/Users/razib/Documents/valet/hostbilling-pro/ui/theme/default/hostbilling/admin/groups.tpl',
      1 => 1694187051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb3e311acd96_57239831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145185024564fb3e3118e844_51685781', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33957555664fb3e311abc95_74012322', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_145185024564fb3e3118e844_51685781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_145185024564fb3e3118e844_51685781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</h3>
                    <form id="main_form">

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</label>
                            <input class="form-control" name="name"
                                   value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['selected_group']->value->name ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                            >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                            <select class="form-select" name="type">
                                <option value="">--</option>
                                <option value="hosting"
                                <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['selected_group']->value->type === 'hosting') {?>
                                        selected
                                    <?php }?>
                                <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hosting'];?>
</option>

                                <option value="vps"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['selected_group']->value->type === 'vps') {?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                ><?php echo __('Cloud VPS');?>
</option>

                                <option value="dedicated-server"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['selected_group']->value->type === 'dedicated-server') {?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                ><?php echo __('Dedicated Server');?>
</option>

                                <option value="object-storage"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['selected_group']->value->type === 'object-storage') {?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                ><?php echo __('Object Storage');?>
</option>

                                <option value="ssl-certificate"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['selected_group']->value->type === 'ssl-certificate') {?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                ><?php echo __('SSL Certificate');?>
</option>

                                <option value="other_service"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['selected_group']->value->type === 'other_service') {?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                ><?php echo __('Other Services');?>
</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="header_content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Header Content'];?>
</label>
                            <textarea class="form-control" id="header_content" name="header_content"><?php if ($_smarty_tpl->tpl_vars['selected_group']->value && $_smarty_tpl->tpl_vars['selected_group']->value->header_content) {
echo $_smarty_tpl->tpl_vars['selected_group']->value->header_content;
}?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="body_content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Body Content'];?>
</label>
                            <textarea class="form-control" id="body_content" name="body_content"><?php if ($_smarty_tpl->tpl_vars['selected_group']->value && $_smarty_tpl->tpl_vars['selected_group']->value->header_content) {
echo $_smarty_tpl->tpl_vars['selected_group']->value->body_content;
}?></textarea>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                            <div class="mb-3">
                                <label for="slug"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Slug'];?>
</label>
                                <div class="input-group mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['items/'];?>
</div>
                                    </div>
                                    <input class="form-control" id="slug" name="slug"
                                           value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['selected_group']->value->slug ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                                    >
                                </div>

                            </div>
                        <?php }?>

                        <div class="mb-3">

                            <?php if ($_smarty_tpl->tpl_vars['selected_group']->value) {?>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_group']->value->id;?>
">
                            <?php }?>

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">

                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>



                            <tr>
                                <td>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</h4>
                                </td>

                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/list-items-by-group/<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Items'];?>
</a>
                                    <a href="#" id="delete_<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" class="btn btn-danger confirm_before_delete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
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
    </div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_33957555664fb3e311abc95_74012322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_33957555664fb3e311abc95_74012322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $main_form = $('#main_form');

            $('#header_content').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            $('#body_content').redactor(
                {
                    minHeight: 200 // pixels
                }
            );



            $main_form.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'hostbilling/group',$main_form.serialize()).then(function (response) {

                    location.reload();

                }).catch(function (error) {

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });



            });

            $(".confirm_before_delete").click(function (event) {
                event.preventDefault();
                let id = this.id;
                id = id.replace('delete_','');
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "hostbilling/delete-group/" + id;
                    }
                });
            });


        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
