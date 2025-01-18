<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:33:03
  from 'file:../default/kb_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15af000990_12542295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61b87fbf98ab0d7dfaee0cb478cacf4fd74f3fc' => 
    array (
      0 => '../default/kb_all.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15af000990_12542295 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1195502236675e15aef34d51_91342525', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_209298083675e15aef36133_09832113', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_559113205675e15aef3f828_64825651', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1195502236675e15aef34d51_91342525 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_209298083675e15aef36133_09832113 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>




    <div class="row">
        <div class="col-md-12">

            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
kb/a/edit" class="btn btn-primary mb-3"><?php echo $_smarty_tpl->getValue('_L')['New Article'];?>
</a>

            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <div>
                            <table class="table table-striped filter-table" id="tbl_articles">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
</th>
                                    <?php if ($_smarty_tpl->getValue('can_edit') || $_smarty_tpl->getValue('can_delete')) {?>
                                        <th width="110px;"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                    <?php }?>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>

                                    <tr>

                                        <td><a href="javascript:void(0)" id="k<?php echo $_smarty_tpl->getValue('article')['id'];?>
" class="kb_view"><span class="h6"><?php echo $_smarty_tpl->getValue('article')['title'];?>
</span></a> </td>

                                        <?php if ($_smarty_tpl->getValue('can_edit') || $_smarty_tpl->getValue('can_delete')) {?>

                                            <td class="text-end">


                                                <?php if ($_smarty_tpl->getValue('can_edit')) {?>
                                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
kb/a/edit/<?php echo $_smarty_tpl->getValue('article')['id'];?>
" class="btn btn-warning btn-icon"><i class="fal fa-pencil"></i> </a>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->getValue('can_delete')) {?>
                                                    <button class="btn btn-danger btn-icon" onclick="deleteKb(<?php echo $_smarty_tpl->getValue('article')['id'];?>
)" id="da<?php echo $_smarty_tpl->getValue('article')['id'];?>
"><i class="fal fa-trash-alt"></i> </button>
                                                <?php }?>

                                            </td>

                                        <?php }?>



                                    </tr>

                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                </tbody>
                            </table>
                        </div>


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
class Block_559113205675e15aef3f828_64825651 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        function deleteKb(kbid) {
            app.confirm(_L['are_you_sure'], function(result) {
                if(result){
                    window.location.href = base_url + "kb/a/delete/" + kbid;
                }
            });
        }

        $(function() {

            $(".kb_view").on('click',function (e) {
                e.preventDefault();
                iModal.ajax(base_url + "kb/a/a_view/"+this.id, $(this).html());
            });




            $('#tbl_articles').dataTable(
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


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
