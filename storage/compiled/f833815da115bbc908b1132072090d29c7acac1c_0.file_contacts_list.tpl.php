<?php
/* Smarty version 5.4.2, created on 2024-11-26 08:55:22
  from 'file:../default/contacts_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6745d34a47ca99_43214028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f833815da115bbc908b1132072090d29c7acac1c' => 
    array (
      0 => '../default/contacts_list.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6745d34a47ca99_43214028 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15507611536745d34a43c6d1_11295789', "head");
?>



<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11512566446745d34a43ffa5_48767395', "content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1939076586745d34a476804_43889593', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ((string)$_smarty_tpl->getValue('layouts_admin')), $_smarty_current_dir);
}
/* {block "head"} */
class Block_15507611536745d34a43c6d1_11295789 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_11512566446745d34a43ffa5_48767395 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-body p-3">
                    <h5><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Filter');?>
</h5>

                    <div class="mb-3">
                        <label for="select_group_id"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Group');?>
</label>
                        <select class="form-select" id="select_group_id" name="group_id">
                            <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('None');?>
</option>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach0DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('group')->id;?>
" <?php if ($_smarty_tpl->getValue('group')->id == $_smarty_tpl->getValue('group_id')) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('group')->gname;?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel">

                <div class="panel-hdr">
                    <?php if ($_smarty_tpl->getValue('type') == 'supplier') {?>
                        <h2><?php echo $_smarty_tpl->getValue('_L')['List Suppliers'];?>
</h2>
                    <?php } else { ?>
                        <h2><?php echo $_smarty_tpl->getValue('_L')['List Customers'];?>
</h2>
                    <?php }?>

                    <div class="panel-toolbar">
                        <div class="btn-group">

                            <?php if ($_smarty_tpl->getValue('type') == 'supplier') {?>
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/add/supplier" class="btn btn-sm btn-success"> <?php echo $_smarty_tpl->getValue('_L')['Add Supplier'];?>
</a>
                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/add/" class="btn btn-sm btn-success"> <?php echo $_smarty_tpl->getValue('_L')['Add Customer'];?>
</a>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/import_csv/" class="btn btn-sm btn-warning"> <?php echo $_smarty_tpl->getValue('_L')['Import'];?>
</a>
                        </div>



                    </div>
                </div>


                <div class="panel-container show">


                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_panel">


                            <table class="table w-100"  id="clx_datatable">
                                <thead
                                        <?php if (empty($_smarty_tpl->getValue('config')['admin_dark_theme'])) {?>
                                            style="background: #f0f2ff"

                                        <?php }?>
                                >
                                <tr class="heading">
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Image'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Name'];?>
</th>

                                    <th><?php echo $_smarty_tpl->getValue('_L')['Company Name'];?>
</th>

                                    <th><?php echo $_smarty_tpl->getValue('_L')['Group'];?>
</th>


                                    <th><?php echo $_smarty_tpl->getValue('_L')['Email'];?>
</th>
                                    <th><?php echo $_smarty_tpl->getValue('_L')['Phone'];?>
</th>
                                    <th class="text-end" style="width: 80px;"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>
                                </tr>


                                </thead>


                                <tbody>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contacts'), 'contact');
$_smarty_tpl->getVariable('contact')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('contact')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('contact')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('contact');
?>
                                    <tr>
                                        <td data-order="<?php echo $_smarty_tpl->getVariable('contact')->iteration;?>
">
                                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('sp_get_contact_image')($_smarty_tpl->getValue('contact'));?>
</a>
                                        </td>
                                        <td>
                                            <a class="h6" href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
">
                                                <strong>
                                                    <?php echo $_smarty_tpl->getValue('contact')->account;?>

                                                </strong>

                                                <?php if ($_smarty_tpl->getValue('contact')->code) {?>
                                                    <br>
                                                    <?php echo $_smarty_tpl->getValue('contact')->code;?>

                                                <?php }?>

                                            </a>
                                        </td>

                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->getValue('contact')->company;?>

                                        </td>

                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->getValue('contact')->gname;?>

                                        </td>

                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->getValue('contact')->email;?>

                                        </td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->getValue('contact')->phone;?>

                                        </td>
                                        <td>
                                            <div class="float-end d-flex">
                                                <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
" class="btn btn-secondary-light btn-icon waves-effect waves-themed has-tooltip me-2" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['View'];?>
" data-placement="top"><i class="fal fa-user-alt"></i> </a>

                                                <?php if ($_smarty_tpl->getValue('has_edit_permission')) {?>
                                                    <a href="<?php echo $_smarty_tpl->getValue('_url');?>
contacts/view/<?php echo $_smarty_tpl->getValue('contact')->id;?>
/edit/" class="btn btn-secondary-light btn-icon waves-effect waves-themed has-tooltip me-2" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->getValue('has_delete_permission')) {?>
                                                    <a href="#" onclick="confirmThenGoToUrl(event,'contacts/delete/<?php echo $_smarty_tpl->getValue('contact')->id;?>
')"  class="btn btn-secondary-light btn-icon waves-effect waves-themed has-tooltip me-2" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getValue('_L')['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                                <?php }?>

                                            </div>
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->setVariable('contact', $foreach1Backup);
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
class Block_1939076586745d34a476804_43889593 extends \Smarty\Runtime\Block
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
                            className: 'btn-danger-light btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success-light btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary-light btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-info-light btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary-light btn-sm'
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



            const select_group_id = document.getElementById('select_group_id');

            if(select_group_id)
                {
                    select_group_id.addEventListener('change', function() {
                        let group_id = this.value;
                        window.location.href = "<?php echo $_smarty_tpl->getValue('base_url');?>
contacts/list/customer/" + group_id;
                    });
                }

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
