{extends file="$layouts_admin"}

{block name="head"}

{/block}



{block name="content"}

    <div class="panel">
        <div class="panel-hdr">
            <h3 class="card-title">{__('Configure')}</h3>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form method="post" action="{{$base_url}}cms/save-settings">
                    <h4>{{__('Accouncement bar')}}</h4>
                    <p>{__('Keep empty to disable the announcement bar.')}</p>
                    <div class="mb-3">
                        <label>{__('Announcement bar message')}</label>
                        <input type="text" class="form-control" name="announcement_bar_message" value="{$config.announcement_bar_message|default:''}">
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>{__('Announcement bar background color')}</label>
                                <input type="color" class="form-control" name="announcement_bar_background_color" value="{$config.announcement_bar_background_color|default:'#1D2025'}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label>{__('Announcement bar link text')}</label>
                                <input type="text" class="form-control" name="announcement_bar_link_text" value="{$config.announcement_bar_link_text|default:''}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>{__('Announcement bar link url')}</label>
                        <input type="text" class="form-control" name="announcement_bar_link_url" value="{$config.announcement_bar_link_url|default:''}">
                    </div>

                    <h4>{{__('Contact widget')}}</h4>

                    <div class="mb-3">
                        <label>{__('Contact widget title')}</label>
                        <input type="text" class="form-control" name="contact_widget_title" value="{$config.contact_widget_title|default:''}">
                    </div>

                    <div class="mb-3">
                        <label for="contact_widget_description">{__('Contact widget description')}</label>
                        <textarea class="form-control" id="contact_widget_description" name="contact_widget_description">{$config.contact_widget_description|default:''}</textarea>
                    </div>

                    <h4>{{__('Quick links widget 1')}}</h4>

                    <div class="mb-3">
                        <label>{__('Quick links widget 1 title')}</label>
                        <input type="text" class="form-control" name="quick_links_widget_1_title" value="{$config.quick_links_widget_1_title|default:''}">
                    </div>



                    <div class="mb-3">
                        <div class="mb-3">
                            <label>{__('Quick links')}</label>
                        </div>
                        <button class="btn btn-primary btn-sm mb-3" id="add_quick_link_1" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                        <table class="table" id="quick_links_1_table">
                            <tbody id="quick_links_1_body">

                            {if !empty($config.quick_links_widget_1_links) && !empty(json_decode($config.quick_links_widget_1_links, true))}
                                {foreach json_decode($config.quick_links_widget_1_links, true) as $link}
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="{__('Title')}" name="quick_links_widget_1_links[text][]" value="{$link.text}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="{__('Text')}" name="quick_links_widget_1_links[url][]" value="{$link.url}">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-danger remove-link" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                        </td>
                                    </tr>
                                {/foreach}
                            {/if}


                            </tbody>
                        </table>
                    </div>

                    <h4>{{__('Quick links widget 2')}}</h4>

                    <div class="mb-3">
                        <label>{__('Quick links widget 2 title')}</label>
                        <input type="text" class="form-control" name="quick_links_widget_2_title" value="{$config.quick_links_widget_2_title|default:''}">
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <label>{__('Quick links')}</label>
                        </div>
                        <button class="btn btn-primary btn-sm mb-3" id="add_quick_link_2" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                        <table class="table" id="quick_links_2_table">
                            <tbody id="quick_links_2_body">

                            {if !empty($config.quick_links_widget_2_links) && !empty(json_decode($config.quick_links_widget_2_links, true))}
                                {foreach json_decode($config.quick_links_widget_2_links, true) as $link}
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="{__('Title')}" name="quick_links_widget_2_links[text][]" value="{$link.text}">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="{__('Text')}" name="quick_links_widget_2_links[url][]" value="{$link.url}">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-danger remove-link" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                        </td>
                                    </tr>
                                {/foreach}
                            {/if}

                            </tbody>

                        </table>
                    </div>


                    <h4>{{__('Social links')}}</h4>

                    <div class="mb-3">
                        <label>{__('Twitter')}</label>
                        <input type="text" class="form-control" name="social_twitter" value="{$config.social_twitter|default:''}">
                    </div>

                    <div class="mb-3">
                        <label>{__('Facebook')}</label>
                        <input type="text" class="form-control" name="social_facebook" value="{$config.social_facebook|default:''}">
                    </div>

                    <div class="mb-3">
                        <label>{__('Instagram')}</label>
                        <input type="text" class="form-control" name="social_instagram" value="{$config.social_instagram|default:''}">
                    </div>

                    <div class="mb-3">
                        <label>{__('Youtube')}</label>
                        <input type="text" class="form-control" name="social_youtube" value="{$config.social_youtube|default:''}">
                    </div>

                    <div class="mb-3">
                        <label>{__('Linkedin')}</label>
                        <input type="text" class="form-control" name="social_linkedin" value="{$config.social_linkedin|default:''}">
                    </div>

                    <div class="mb-3">
                        <label>{__('Pinterest')}</label>
                        <input type="text" class="form-control" name="social_pinterest" value="{$config.social_pinterest|default:''}">
                    </div>

                    <button type="submit" class="btn btn-primary">{__('Save')}</button>

                </form>
            </div>
        </div>
    </div>

{/block}

{block name="script"}
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            $('#contact_widget_description').redactor({
                minHeight: 200,
                buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'link', 'unorderedlist', 'orderedlist']
            });

            let add_quick_link_1 = document.getElementById('add_quick_link_1');

            add_quick_link_1.addEventListener('click', () => {
                let quick_links_1_html = `<tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="{__('Title')}" name="quick_links_widget_1_links[text][]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="{__('Text')}" name="quick_links_widget_1_links[url][]">
                                </td>
                                <td style="vertical-align: middle;">
                                    <button class="btn btn-danger remove-link" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                </td>
                            </tr>`;
                let quick_links_1_body = document.getElementById('quick_links_1_body');
                quick_links_1_body.insertAdjacentHTML('beforeend', quick_links_1_html);
            });

            let quick_links_1_table = document.getElementById('quick_links_1_table');

            quick_links_1_table.addEventListener('click', (e) => {
                if(!e.target) {
                    return;
                }
                if (e.target.classList.contains('remove-link') || (e.target.closest('button') && e.target.closest('button').classList.contains('remove-link'))) {
                    e.target.closest('tr').remove();
                }
            });

            let add_quick_link_2 = document.getElementById('add_quick_link_2');

            add_quick_link_2.addEventListener('click', () => {
                let quick_links_2_html = `<tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="{__('Title')}" name="quick_links_widget_2_links[text][]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="{__('Text')}" name="quick_links_widget_2_links[url][]">
                                </td>
                                <td style="vertical-align: middle;">
                                    <button class="btn btn-danger remove-link" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus remove-link"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
                                </td>
                            </tr>`;
                let quick_links_2_body = document.getElementById('quick_links_2_body');
                quick_links_2_body.insertAdjacentHTML('beforeend', quick_links_2_html);
            });

            let quick_links_2_table = document.getElementById('quick_links_2_table');

            quick_links_2_table.addEventListener('click', (e) => {
                if(!e.target) {
                    return;
                }
                if (e.target.classList.contains('remove-link') || (e.target.closest('button') && e.target.closest('button').classList.contains('remove-link'))) {
                    e.target.closest('tr').remove();
                }
            });



        });
    </script>
{/block}


