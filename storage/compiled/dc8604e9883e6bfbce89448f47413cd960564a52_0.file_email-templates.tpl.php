<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:53
  from 'file:../default/email-templates.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16d1cc6500_82329289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc8604e9883e6bfbce89448f47413cd960564a52' => 
    array (
      0 => '../default/email-templates.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16d1cc6500_82329289 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2088356234675e16d1cb4802_70891996', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_76068839675e16d1cc22d6_39361873', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_2088356234675e16d1cb4802_70891996 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                        <?php echo $_smarty_tpl->getValue('_L')['Email Templates'];?>

                    </h2>

                    <div class="panel-toolbar">
                        <a href="#" id="add_new_template" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Add New Template'];?>
</a>
                    </div>


                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="mail-box" id="application_ajaxrender">

                            <table class="table table-hover table-striped" id="tbl_email_templates">
                                <thead>
                                <tr class="heading">
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Status'];?>
</th>
                                    <th class="text-end" style="width: 80px;"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                </tr>


                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
?>
                                    <tr class="read">

                                        <td><a  class="ve h6" id="f<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" href="#"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ib_lan_get_line')($_smarty_tpl->getValue('ds')['tplname']);?>
</a>  </td>
                                        <td><a  class="ve h6 text-info" id="s<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" href="#"><?php echo $_smarty_tpl->getValue('ds')['subject'];?>
</a></td>
                                        <td class="">
                                            <?php if ($_smarty_tpl->getValue('ds')['send'] == 'Yes') {?>
                                                <span class="badge bg-success"> <?php echo $_smarty_tpl->getValue('_L')['Active'];?>
 </span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger"> <?php echo $_smarty_tpl->getValue('_L')['Inactive'];?>
 </span>
                                            <?php }?>
                                            &nbsp;
                                            <?php if ($_smarty_tpl->getValue('ds')['core'] == 'Yes') {?>
                                                <span class="badge bg-dark"> <?php echo $_smarty_tpl->getValue('_L')['System'];?>
 </span>
                                            <?php } else { ?>
                                                <span class="badge bg-primary"> <?php echo $_smarty_tpl->getValue('_L')['Custom'];?>
 </span>
                                            <?php }?>

                                        </td>

                                        <td class="text-end">

                                            <div class="btn-group">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-sm ve" id="b<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" data-bs-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['View'];?>
"><i class="fal fa-file-alt"></i></a>
                                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/clone_email_template/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Clone'];?>
"><i class="fal fa-file-edit"></i></a>


                                                <?php if ($_smarty_tpl->getValue('ds')['core'] != 'Yes') {?>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm cdelete" id="ed<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                                                <?php }?>

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

            </div>
        </div>



    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_76068839675e16d1cc22d6_39361873 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $('#tbl_email_templates').dataTable(
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

            var $modal = $('#cloudonex_body');
            var sysrender = $modal;

            var _url = base_url;

            var page_refresh = false;



            sysrender.on('click', '.ve', function(e){
                e.preventDefault();
                var vid = this.id;
                var id = vid.replace("f", "");
                id = id.replace("s", "");
                id = id.replace("b", "");



                $.fancybox.open({
                    src  : base_url + 'settings/email-templates-view/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }
                });

            });


            $modal.on('click', '#update', function(){

                page_refresh = true;

                $.post(base_url + 'settings/update-email-template/<?php echo Str::random();?>
', { //Added random string to bypass cache


                    message: $('#message').val(),
                    subject: $('#subject').val(),
                    tplname: $('#tplname').val(),

                    id: $('#sid').val(),
                    send: $('#send').val()

                }).done(function (data) {
                    location.reload();
                });

            });

            sysrender.on('click', '.cdelete', function(e){
                e.preventDefault();
                var id = this.id;
                confirmThenGoToUrl(e, "delete/email-templates/" + id + '/');
            });



            $("#add_new_template").on('click', function(e) {
                e.preventDefault();

                $.fancybox.open({
                    src  : base_url + 'settings/email-templates-view/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }
                });

            });

        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
