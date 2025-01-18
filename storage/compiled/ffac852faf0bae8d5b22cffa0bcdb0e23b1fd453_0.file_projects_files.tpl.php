<?php
/* Smarty version 5.4.2, created on 2024-12-14 18:32:22
  from 'file:../default/projects_files.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675e15865b6e24_39449394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffac852faf0bae8d5b22cffa0bcdb0e23b1fd453' => 
    array (
      0 => '../default/projects_files.tpl',
      1 => 1690425606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675e15865b6e24_39449394 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_241077411675e15865a2a30_30831448', "project_content");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_52172271675e15865b1230_78550990', "script");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "project_base.tpl", $_smarty_current_dir);
}
/* {block "project_content"} */
class Block_241077411675e15865a2a30_30831448 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>

    <div class="row mb-3">
        <div class="col">

            <h2><?php echo $_smarty_tpl->getValue('_L')['Files'];?>
</h2>


        </div>
        <div class="col text-end">
            <a data-bs-toggle="modal" href="#modal_add_item" class="btn btn-primary add_document waves-effect waves-light" id="add_document"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->getValue('_L')['New Document'];?>
</a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered table-hover sys_table" id="clx_datatable"  data-filter="#foo_filter" data-page-size="50">
                <thead>
                <tr>

                    <th class="text-end" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->getValue('_L')['Type'];?>
</th>

                    <th><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
</th>


                    <th class="text-end" data-sort-ignore="true" width="200px;"><?php echo $_smarty_tpl->getValue('_L')['Manage'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('files'), 'file');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file')->value) {
$foreach0DoElse = false;
?>

                    <tr>

                        <td>
                            <?php if ($_smarty_tpl->getValue('file')->file_mime_type == 'jpg' || $_smarty_tpl->getValue('file')->file_mime_type == 'png' || $_smarty_tpl->getValue('file')->file_mime_type == 'gif') {?>
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="2" y="4" width="20" height="16" rx="2"/>
        <polygon fill="#000000" opacity="0.3" points="4 20 10.5 11 17 20"/>
        <polygon fill="#000000" points="11 20 15.5 14 20 20"/>
        <circle fill="#000000" opacity="0.3" cx="18.5" cy="8.5" r="1.5"/>
    </g>
</svg></span>
                            <?php } elseif ($_smarty_tpl->getValue('file')->file_mime_type == 'pdf') {?>
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg></span>
                            <?php } elseif ($_smarty_tpl->getValue('file')->file_mime_type == 'zip') {?>
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
    </g>
</svg></span>
                            <?php } else { ?>
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="64px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg></span>
                            <?php }?>
                        </td>


                        <td>

                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
documents/view/<?php echo $_smarty_tpl->getValue('file')->id;?>
"><?php echo $_smarty_tpl->getValue('file')->title;?>
</a>

                        </td>



                        <td class="text-end">

                            <a href="#" class="btn btn-primary btn-sm c_link" data-token="<?php echo $_smarty_tpl->getValue('file')->id;?>
_<?php echo $_smarty_tpl->getValue('file')->file_dl_token;?>
"><i class="fal fa-link"></i> </a>
                            <a href="<?php echo $_smarty_tpl->getValue('_url');?>
documents/view/<?php echo $_smarty_tpl->getValue('file')->id;?>
/" class="btn btn-success btn-sm"><i class="fal fa-search"></i> </a>

                            <a href="#" class="btn btn-danger btn-sm cdelete" id="did<?php echo $_smarty_tpl->getValue('file')->id;?>
"><i class="fal fa-trash"></i> </a>
                        </td>
                    </tr>

                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                </tbody>


            </table>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1"  role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->getValue('_L')['New Document'];?>

                    </h4>
                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="mb-3">
                            <label for="doc_title"><?php echo $_smarty_tpl->getValue('_L')['Title'];?>
</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>





                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->getValue('_L')['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->getValue('_L')['Click to Upload'];?>
</span>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->getValue('_L')['Close'];?>
</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->getValue('_L')['Submit'];?>
</button>
                </div>
            </div>
        </div>


    </div>

<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_52172271675e15865b1230_78550990 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/razib/Herd/hbpro/ui/theme/default';
?>



    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;

        $(function () {

            var _url = $("#_url").val();


            var $modal = $('#cloudonex_body');

            $('[data-bs-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;


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


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", {
                    title: $doc_title.val(),
                    file_link: $file_link.val(),
                    is_global: 0,
                    rid: <?php echo $_smarty_tpl->getValue('project')->id;?>
,
                    rtype: 'project',
                })
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
                        window.location.href = _url + "delete/document/" + id + '/';
                    }
                });
            });



            var dl_token;

            $(".c_link").click(function (e) {
                e.preventDefault();

                dl_token = $(this).attr("data-token")
                bootbox.prompt({
                    title: "Secure Download Link",
                    value: "<?php echo $_smarty_tpl->getValue('_url');?>
client/dl/" + dl_token,
                    buttons: {
                        'cancel': {
                            label: 'Cancel'
                        },
                        'confirm': {
                            label: 'OK'
                        }
                    },
                    callback: function(result) {

                    }
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
