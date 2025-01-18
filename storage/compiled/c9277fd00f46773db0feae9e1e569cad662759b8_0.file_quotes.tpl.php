<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:31:59
  from 'file:../default/quotes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e156fad1e07_21651973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9277fd00f46773db0feae9e1e569cad662759b8' => 
    array (
      0 => '../default/quotes.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e156fad1e07_21651973 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_498931265675e156faacf78_78554502', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2122397283675e156fab0414_48720817', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_779752062675e156face421_62001133', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_498931265675e156faacf78_78554502 extends \Smarty\Runtime\Block
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
class Block_2122397283675e156fab0414_48720817 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->getValue('_L')['Total'];?>
 : <?php echo $_smarty_tpl->getValue('total_quote');?>
</h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">
                <div class="table-responsive">
                    <table class="table table-striped w-100" id="clx_datatable">
                        <thead style="background: #f0f2ff">
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Account'];?>
</th>
                            <th width="30%"><?php echo $_smarty_tpl->getValue('_L')['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Date Created'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Expiry Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->getValue('_L')['Stage'];?>
</th>

                            <th class="text-end"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('d'), 'ds');
$_smarty_tpl->getVariable('ds')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ds')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('ds')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('ds');
?>
                            <tr>
                                <td data-value="<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" data-order="<?php echo $_smarty_tpl->getVariable('ds')->iteration;?>
"><a href="<?php echo $_smarty_tpl->getValue('_url');?>
quotes/view/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/"><?php echo $_smarty_tpl->getValue('ds')['invoicenum'];
if ($_smarty_tpl->getValue('ds')['cn'] != '') {?> <?php echo $_smarty_tpl->getValue('ds')['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->getValue('ds')['id'];?>
 <?php }?></a> </td>
                                <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('ds')['userid'];?>
/"><?php echo $_smarty_tpl->getValue('ds')['account'];?>
</a> </td>
                                <td><a href="<?php echo $_smarty_tpl->getValue('_url');?>
quotes/view/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/"><strong><?php echo $_smarty_tpl->getValue('ds')['subject'];?>
</strong></a> </td>
                                <td class="amount"><?php echo $_smarty_tpl->getValue('ds')['total'];?>
</td>
                                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['datecreated']));?>
</td>
                                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')($_smarty_tpl->getValue('config')['df'],$_smarty_tpl->getSmarty()->getModifierCallback('strtotime')($_smarty_tpl->getValue('ds')['validuntil']));?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->getValue('ds')['stage'] == 'Dead') {?>
                                        <span class="badge bg-danger"><?php echo $_smarty_tpl->getValue('_L')['Dead'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->getValue('ds')['stage'] == 'Lost') {?>
                                        <span class="badge bg-warning"><?php echo $_smarty_tpl->getValue('_L')['Lost'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->getValue('ds')['stage'] == 'Accepted') {?>
                                        <span class="badge bg-success"><?php echo $_smarty_tpl->getValue('_L')['Accepted'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->getValue('ds')['stage'] == 'Draft') {?>
                                        <span class="badge bg-primary"><?php echo $_smarty_tpl->getValue('_L')['Draft'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->getValue('ds')['stage'] == 'Delivered') {?>
                                        <span class="badge bg-info"><?php echo $_smarty_tpl->getValue('_L')['Delivered'];?>
</span>
                                    <?php } else { ?>
                                        <span class="badge bg-info"><?php echo $_smarty_tpl->getValue('ds')['stage'];?>
</span>
                                    <?php }?>

                                </td>

                                <td class="text-end">
                                    <div class="btn-group">
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
quotes/view/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->getValue('_L')['View'];?>
" data-placement="top"><i class="fal fa-file"></i> </a>
                                        <a href="<?php echo $_smarty_tpl->getValue('_url');?>
quotes/edit/<?php echo $_smarty_tpl->getValue('ds')['id'];?>
/" class="btn btn-warning btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                        <a href="#" id="iid<?php echo $_smarty_tpl->getValue('ds')['id'];?>
" class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip cdelete" data-title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
" data-placement="top"><i class="fal fa-trash"></i> </a>




                                    </div>

                                </td>
                            </tr>
                        <?php
$_smarty_tpl->setVariable('ds', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="8">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>



                <?php echo $_smarty_tpl->getValue('paginator')['contents'];?>

            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_779752062675e156face421_62001133 extends \Smarty\Runtime\Block
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
        $(function () {

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
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                app.confirm("Are You Sure?", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/quote/" + id;
                    }
                });
            });

            $('.has-tooltip').tooltip();

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
