{extends file="$layouts_client"}

{block name="content"}

    <div class="timeline-simple">
        <p class="timeline-title">{$d->subject}</p>

        <div class="timeline-list">
            <div class="timeline-post-content">
                <div class="user-profile">
                    {if $user['img'] eq 'gravatar'}
                        <img src="http://www.gravatar.com/avatar/{md5($user['email'])}?s=30" class="img-time-line" alt="{$user['fullname']}">
                    {elseif $user['img'] eq ''}
                        <img class="img-time-line" src="{$app_url}ui/lib/img/default-user-avatar.png" alt="">
                    {else}
                        <img src="{APP_URL}/{$user['img']}" class="img-time-line" alt="{$user['account']}">
                    {/if}
                </div>
                <div class="">
                    <h4>{$d->account}</h4>
                    <p class="meta-time-date">{date( $config['df'], strtotime($d->created_at))}</p>
                    <div class="">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    {$d->message}
                                </div>

                                {if ($d->attachments) neq ''}
                                    <div class="mb-3">
                                        {Tickets::gen_link_attachments($d->attachments)}
                                    </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {foreach $replies as $reply}

                <div class="timeline-post-content post-gallery">
                    <div class="user-profile">
                        {if $reply['admin'] neq '0' && !empty($admins[$reply['admin']])}
                            {if $admins[$reply['admin']]->img eq 'gravatar'}
                                <img src="http://www.gravatar.com/avatar/{md5($admins[$reply['admin']]->email)}?s=30"
                                     class="img-time-line" alt="{$admins[$reply['admin']]->fullname}">
                            {elseif $admins[$reply['admin']]->img eq ''}
                                <img class="img-time-line" src="{$app_url}ui/lib/img/default-user-avatar.png" alt="">
                            {else}
                                <img src="{{APP_URL}}/{$admins[$reply['admin']]->img}" class="img-time-line" alt="{$admins[$reply['admin']]->fullname}">
                            {/if}

                        {else}

                            {if $user['img'] eq 'gravatar'}
                                <img src="http://www.gravatar.com/avatar/{md5($user['email'])}?s=30" class="img-time-line" alt="{$user['fullname']}">
                            {elseif $user['img'] eq ''}
                                <img class="img-time-line" src="{$app_url}ui/lib/img/default-user-avatar.png" alt="">
                            {else}
                                <img src="{APP_URL}/{$user['img']}" class="img-time-line" alt="{$user['account']}">
                            {/if}

                        {/if}
                    </div>
                    <div class="">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4>{$reply['replied_by']}</h4>
                                <p class="meta-time-date">{date( $config['df'], strtotime($reply['created_at']))}</p>
                                <div class="">
                                    <div class="mb-3">
                                        {$reply['message']}
                                    </div>

                                    {if ($reply['attachments']) neq ''}
                                        <div class="mb-3">
                                            {Tickets::gen_link_attachments($reply['attachments'])}
                                        </div>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {/foreach}

            <div class="timeline-post-content">
                <div class="user-profile">
                    {if $user['img'] eq 'gravatar'}
                        <img src="http://www.gravatar.com/avatar/{md5($user['email'])}?s=30" class="img-time-line" alt="{$user['fullname']}">
                    {elseif $user['img'] eq ''}
                        <img class="img-time-line" src="{$app_url}ui/lib/img/default-user-avatar.png" alt="">
                    {else}
                        <img src="{APP_URL}/{$user['img']}" class="img-time-line" alt="{$user['account']}">
                    {/if}
                </div>
                <div class="w-100">
                    <h4>{$_L['Add Reply']}</h4>
                    <p class="meta-time-date">{date( $config['df'], strtotime($d->created_at))}</p>
                    <div class="">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form id="create_ticket" method="post">

                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <textarea id="text_content" rows="10" class="form-control" name="content"></textarea>
                                        </div>
{*                                        <div class="help-block"><a data-bs-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i> {$_L['Attach File']}</a> </div>*}
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-xs-12">

                                            <input type="hidden" name="attachments" id="attachments" value="">
                                            <input type="hidden" name="f_tid" id="f_tid" value="{$d->id}">

                                            <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> {$_L['Submit']}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="600">
        <div class="modal-header">
            <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">{__('Add File')}</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="dropzone" id="upload_container">
                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  Drop File Here</h3>
                            <br />
                            <span class="note">{__('Or Click to Upload')}</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Close</button>
        </div>
    </div>

{/block}
{block name="scripts"}
    <script>
      //  Dropzone.autoDiscover = false;
        $(function () {

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            var _url = base_url;

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");


            // $('#content').redactor({
            //     buttonsHide: ['html'],
            // });

            // var upload_resp;
            //
            //
            // var ib_file = new Dropzone("#upload_container",
            //     {
            //         url: _url + "client/tickets/upload_file/",
            //         maxFiles: 10,
            //         acceptedFiles: "image/jpeg,image/png,image/gif"
            //     }
            // );
            //
            // ib_file.on("sending", function() {
            //
            //     $ib_form_submit.prop('disabled', true);
            //
            // });
            //
            // ib_file.on("success", function(file,response) {
            //
            //     $ib_form_submit.prop('disabled', false);
            //
            //     upload_resp = response;
            //
            //     if(upload_resp.success == 'Yes'){
            //
            //         toastr.success(upload_resp.msg);
            //
            //         $('#attachments').val(function(i,val) {
            //             return val + (!val ? '' : ',') + upload_resp.file;
            //         });
            //
            //
            //     }
            //     else{
            //         toastr.error(upload_resp.msg);
            //     }
            //
            // });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
              //  $create_ticket.block({ message: block_msg });
                $.post( _url + "client/tickets/add_reply/", {  message: $('#text_content').val(), attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            location.reload();
                        }

                        else {
                            console.log(data);
                          //  $create_ticket.unblock();
                         //   toastr.error(data.msg);
                        }

                    });


            });

        });
    </script>
{/block}
