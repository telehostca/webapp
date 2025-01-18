<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:37:24
  from 'file:../default/settings_currencies.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e16b42e8fb1_23475865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11490112a7e32ab4962fe0441f7410d688f956de' => 
    array (
      0 => '../default/settings_currencies.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e16b42e8fb1_23475865 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_98894112675e16b42daca8_69053419', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1238950031675e16b42e7499_54967403', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "content"} */
class Block_98894112675e16b42daca8_69053419 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Currencies</h2>
                    <div class="panel-toolbar">

                        <a href="#" class="btn btn-success" id="add_currency"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['New Currency'];?>
</a>


                    </div>
                </div>

                <div class="panel-container">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Currency Code'];?>
</th>
                                                                        <th class="bold"><?php echo $_smarty_tpl->getValue('_L')['Base Conversion Rate'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('currencies'), 'currency');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('currency')->value) {
$foreach0DoElse = false;
?>
                                    <tr data-id="<?php echo $_smarty_tpl->getValue('currency')['id'];?>
">
                                        <td> <a class="cedit" id="ae<?php echo $_smarty_tpl->getValue('currency')['id'];?>
" href="#"><?php echo $_smarty_tpl->getValue('currency')['cname'];?>
</a>
                                            <?php if ($_smarty_tpl->getValue('config')['home_currency'] == $_smarty_tpl->getValue('currency')['cname']) {?>
                                                <br>
                                                <?php echo $_smarty_tpl->getValue('_L')['Base Currency'];?>

                                            <?php }?>
                                        </td>
                                                                                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('formatCurrency')($_smarty_tpl->getValue('currency')['rate'],$_smarty_tpl->getValue('config')['home_currency'],array('precision'=>6));?>
</td>
                                        <td class="text-end">
                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
" id="be<?php echo $_smarty_tpl->getValue('currency')['id'];?>
" class="btn btn-primary cedit" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
"><i class="fal fa-pencil"></i> </a>
                                            <?php if ($_smarty_tpl->getValue('config')['home_currency'] != $_smarty_tpl->getValue('currency')['cname']) {?>
                                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
settings/make_base_currency/<?php echo $_smarty_tpl->getValue('currency')['id'];?>
/" class="btn btn-primary" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Make Base Currency'];?>
"><i class="fal fa-star"></i> </a>
                                            <?php }?>

                                            <a href="#" class="btn btn-danger cdelete" id="c<?php echo $_smarty_tpl->getValue('currency')['id'];?>
" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
"><i class="fal fa-trash-alt"></i> </a>
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
class Block_1238950031675e16b42e7499_54967403 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
>
        $(function() {

            var $modal = $('#cloudonex_body');

            $('[data-bs-toggle="tooltip"]').tooltip();

            var _url = $("#_url").val();

            $('#add_currency').on('click', function(e){

                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + 'settings/modal_add_currency/',
                    type : 'ajax',
                    opts : {

                    },
                });





            });


            $modal.on('change','.currencyCode',function () {
                $('#selectedCurrency').html("1" + $('#iso_code').val());
            });


            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();


                $.post( base_url + "settings/add_currency_post/", $("#ib_modal_form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/currency/" + id + '/';
                    }
                });
            });


            $(".cedit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  :  base_url + 'settings/modal_add_currency/'+ id + '/',
                    type : 'ajax',
                    opts : {

                    },
                });


            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
