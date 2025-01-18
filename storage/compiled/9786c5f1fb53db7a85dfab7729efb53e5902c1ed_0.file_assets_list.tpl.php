<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:05
  from 'file:../default/assets_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e1575181400_59651977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9786c5f1fb53db7a85dfab7729efb53e5902c1ed' => 
    array (
      0 => '../default/assets_list.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e1575181400_59651977 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1527732765675e15751674c1_53892183', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1677637465675e1575169941_44722501', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_457863496675e1575177bb9_93030494', 'script');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_1527732765675e15751674c1_53892183 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>
        <?php if (empty($_smarty_tpl->getValue('config')['admin_dark_theme'])) {?>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
        <?php }?>

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1677637465675e1575169941_44722501 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <div class="row">
        <div class="col-lg-3">
            <div class="card border m-lg-0 mb-3">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $_smarty_tpl->getValue('_L')['Assets'];?>
</h2>
                    <div class="hr-line-dashed"></div>
                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
assets/asset" class="btn btn-primary btn-block add_asset"><?php echo $_smarty_tpl->getValue('_L')['Add an asset'];?>
</a>


                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
assets/list"><i class="fal fa-folder"></i> <?php echo $_smarty_tpl->getValue('_L')['All categories'];?>
</a></li>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
                        <li class="list-group-item"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
assets/list/<?php echo $_smarty_tpl->getValue('category')->id;?>
"><i class="fal fa-folder"></i> <?php echo $_smarty_tpl->getValue('category')->name;?>
</a></li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="card-body mb-3">
                    <?php if ($_smarty_tpl->getValue('selected_category')) {?>
                        <a href="javascript:;" id="btnNewCategory" class="btn btn-primary mb-3"><?php echo $_smarty_tpl->getValue('_L')['New category'];?>
</a>
                        <a href="javascript:;" id="btnEditCategory" class="btn btn-primary mb-3"><?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
</a>
                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/asset-category/<?php echo $_smarty_tpl->getValue('selected_category')->id;?>
');" class="btn btn-danger mb-3"><?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
</a>
                    <?php } else { ?>
                        <a href="javascript:;" id="btnNewCategory" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->getValue('_L')['New category'];?>
</a>
                    <?php }?>
                </div>
            </div>




        </div>
        <div class="col-lg-9">

            <div class="panel mb-3">
                <div class="panel-container">
                    <div class="panel-content">

                        <h3><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
: <span class="amount"><?php echo $_smarty_tpl->getValue('assets_value');?>
</span></h3>

                        <div class="hr-line-dashed"></div>

                        <div class="table-responsive">
                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Date purchased'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Supported until'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Price'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('assets'), 'asset');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('asset')->value) {
$foreach1DoElse = false;
?>
                                    <tr>
                                        <td  data-value="<?php echo $_smarty_tpl->getValue('asset')->id;?>
"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
assets/asset/<?php echo $_smarty_tpl->getValue('asset')->id;?>
"><strong><?php echo $_smarty_tpl->getValue('asset')->name;?>
</strong></a> </td>
                                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('asset')->date_purchased));?>
</td>
                                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('asset')->supported_until));?>
</td>
                                        <td class="amount"><?php echo $_smarty_tpl->getValue('asset')->price;?>
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
/* {block 'script'} */
class Block_457863496675e1575177bb9_93030494 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>


        $(function() {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                        	extend:    'colvis',
                        	text:      'Column Visibility',
                        	titleAttr: 'Col visibility',
                        	className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-dark btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary btn-sm'
                        }
                    ],
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

            $('.has-tooltip').tooltip();

            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->getValue('config')['currency_code'];?>
 ',
                dGroup: <?php echo $_smarty_tpl->getValue('config')['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->getValue('config')['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->getValue('config')['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->getValue('config')['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->getValue('config')['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            $('#btnNewCategory').click(function (e) {
                e.preventDefault();

                (async () => {
                    const { value: category } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('New Category');?>
',
                        input: 'text',
                        inputPlaceholder: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Enter category name');?>
',
                        showCancelButton: true,
                    });

                    if (category){
                        $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
assets/category-post", { category: category } ).done(function() {
                            location.reload();
                        });
                    }

                })();


            });

            <?php if (!empty($_smarty_tpl->getValue('selected_category'))) {?>

            $('#btnEditCategory').on('click',function (event) {
                event.preventDefault();

                (async () => {
                    const { value: category } = await Swal.fire({
                        title: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Edit Category');?>
',
                        input: 'text',
                        inputValue: '<?php echo $_smarty_tpl->getValue('selected_category')->name;?>
',
                        showCancelButton: true,
                    });

                    if (category){
                        $.post( "<?php echo $_smarty_tpl->getValue('_url');?>
assets/category-post", { category: category, id: <?php echo $_smarty_tpl->getValue('selected_category')->id;?>
 }).done(function() {
                            location.reload();
                        });
                    }

                })();

            });

            <?php }?>


        });



    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
