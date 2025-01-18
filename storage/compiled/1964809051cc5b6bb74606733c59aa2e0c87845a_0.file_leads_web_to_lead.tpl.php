<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:56:18
  from 'file:../default/leads_web_to_lead.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d3828d9783_68187042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1964809051cc5b6bb74606733c59aa2e0c87845a' => 
    array (
      0 => '../default/leads_web_to_lead.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d3828d9783_68187042 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8469024306745d3828c9917_55869101', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9961370266745d3828d62d5_62308088', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_8469024306745d3828c9917_55869101 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Web to Lead'];?>
</h2>
            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
leads/form" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['New Form'];?>
</a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <table class="table table-striped w-100" data-order="[[ 0, &quot;desc&quot; ]]" id="clx_datatable">
                    <thead>
                    <tr class="heading">
                        <th>#</th>
                        <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Form Name'];?>
</th>
                        <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Total Submissions'];?>
</th>
                        <th class="h6"><?php echo $_smarty_tpl->getValue('_L')['Created'];?>
</th>
                        <th class="float-right h6"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                    </tr>


                    </thead>


                    <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('lead_forms'), 'lead_form');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lead_form')->value) {
$foreach0DoElse = false;
?>
                        <tr>
                            <td>
                                <?php echo $_smarty_tpl->getValue('lead_form')->id;?>

                            </td>
                            <td>
                                <a class="h6" href="<?php echo $_smarty_tpl->getValue('_url');?>
leads/form/<?php echo $_smarty_tpl->getValue('lead_form')->id;?>
"><?php echo $_smarty_tpl->getValue('lead_form')->name;?>
</a>
                            </td>
                            <td>
                                <?php if ((null !== ($_smarty_tpl->getValue('leads_count')[$_smarty_tpl->getValue('lead_form')->id] ?? null))) {?>
                                    <?php ob_start();
echo $_smarty_tpl->getValue('leads_count')[$_smarty_tpl->getValue('lead_form')->id];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                    <?php } else { ?>
                                    0
                                <?php }?>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('lead_form')->created_at));?>

                            </td>

                            <td>
                                <div class="btn-group float-end">

                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->getValue('_url');?>
leads/form-builder/<?php echo $_smarty_tpl->getValue('lead_form')->id;?>
/"><?php echo $_smarty_tpl->getValue('_L')['Form Builder'];?>
</a>
                                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->getValue('_url');?>
leads/form-embed/<?php echo $_smarty_tpl->getValue('lead_form')->id;?>
/"><?php echo $_smarty_tpl->getValue('_L')['Embed'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
leads/form/<?php echo $_smarty_tpl->getValue('lead_form')->id;?>
/" data-bs-toggle="tooltip" class="btn btn-warning btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i></i> </a>

                                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('_url');?>
client/form/<?php echo $_smarty_tpl->getValue('lead_form')->uuid;?>
/" data-bs-toggle="tooltip" class="btn btn-info btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->getValue('_L')['View'];?>
" data-placement="top"><i class="fal fa-file"></i> </a>


                                    <a class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip confirm_delete" data-bs-toggle="tooltip" data-title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
" id="delete_<?php echo $_smarty_tpl->getValue('lead_form')->id;?>
" data-placement="top" href="#"><i class="fal fa-trash-alt"></i></a>
                                </div>
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
/* {block 'script'} */
class Block_9961370266745d3828d62d5_62308088 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->getValue('_L')['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->getValue('_L')['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->getValue('_L')['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->getValue('_L')['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search');?>
"
                    },
                }
            );

            let $cloudonex_body = $('#cloudonex_body');

            $cloudonex_body.on('click', '.confirm_delete', function(e){

                e.preventDefault();
                let id = this.id;
                app.confirm("<?php echo $_smarty_tpl->getValue('_L')['are_you_sure'];?>
", function(result) {
                    if(result){
                        window.location.href = base_url + "leads/delete-web-to-lead-form/" + id;
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
