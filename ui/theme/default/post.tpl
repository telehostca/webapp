{extends file="$layouts_admin"}

{block name="content"}

    <form method="post" id="app_form">

        <div class="row mb-3">
            <div class="col">
                {if !empty($post)}
                    <h1>{$post->title}</h1>
                {else}
                    <h1>{__('New Post')}</h1>
                {/if}
            </div>
            <div class="col text-end">
                <button type="submit" id="btnSavePost" class="btn btn-primary mt-3">{__('Save')}</button>
            </div>
        </div>

        <div class="mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="input_title">{__('Title')}</label>
                        <input type="text" class="form-control" required id="input_title" name="title" {if !empty($post)} value="{$post->title}"{/if}>
                    </div>
                    <div class="mb-3">
                        <label for="input_slug" class="form-label">{__('Slug')}</label>
                        <div class="input-group">
                            <span class="input-group-text">{$base_url}</span>
                            <input type="text" class="form-control" name="slug" id="input_slug" {if !empty($post)} value="{$post->slug}"{/if} >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {if !empty($post) && $post->is_home_page}
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>{__('Hero Section')}</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_title">{__('Title')}</label>
                                    <input type="text" class="form-control" id="input_hero_title" name="settings[hero_title]" value="{$post_settings['hero_title']|default:''}">
                                </div>
                                <div class="mb-3">
                                    <label for="input_hero_description">{__('Description')}</label>
                                    <textarea class="form-control" id="input_hero_description" name="settings[hero_description]">{$post_settings['hero_description']|default:''}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_primary_button_text">{__('Primary Button Text')}</label>
                                            <input type="text" class="form-control" id="input_primary_button_text" name="settings[primary_button_text]" value="{$post_settings['primary_button_text']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_primary_button_url">{__('Primary Button URL')}</label>
                                            <input type="text" class="form-control" id="input_primary_button_url" name="settings[primary_button_url]" value="{$post_settings['primary_button_url']|default:''}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="input_secondary_button_text">{__('Secondary Button Text')}</label>
                                            <input type="text" class="form-control" id="input_secondary_button_text" name="settings[secondary_button_text]" value="{$post_settings['secondary_button_text']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_secondary_button_url">{__('Secondary Button URL')}</label>
                                            <input type="text" class="form-control" id="input_secondary_button_url" name="settings[secondary_button_url]" value="{$post_settings['secondary_button_url']|default:''}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="input_hero_image">{__('Hero Image')}</label>
                                    <!-- Adding data-media-input attribute to the input element -->
                                    <input type="hidden" data-media-input="hero_image" id="input_hero_image" name="settings[hero_image]" value="{$post_settings['hero_image']|default:''}">

                                    <!-- Adding data-media-render attribute to the container div -->
                                    <div data-media-render="hero_image" id="hero_image_renderer">
                                        {if !empty($post_settings['hero_image'])}
                                            <img src="{APP_URL}/storage/{$post_settings['hero_image']}" class="img-fluid">
                                        {/if}
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <!-- The button already has the data-choose-media-btn attribute as required -->
                                    <button data-choose-media-btn="hero_image" type="button" id="choose_hero_image" class="btn btn-secondary btn-sm">{__('Choose Media')}</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>{__('Features Section')}</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_1_title">{__('Title')}</label>
                                            <input type="text" class="form-control" id="input_feature_1_title" name="settings[feature_1_title]" value="{$post_settings['feature_1_title']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_description">{__('Description')}</label>
                                            <textarea class="form-control" id="input_feature_1_description" name="settings[feature_1_description]">{$post_settings['feature_1_description']|default:''}</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_1_icon">{__('Icon')}</label>
                                                <input type="hidden" data-media-input="feature_1_icon" id="input_feature_1_icon" name="settings[feature_1_icon]" value="{$post_settings['feature_1_icon']|default:''}">
                                                <div data-media-render="feature_1_icon" id="feature_1_icon_renderer">
                                                    {if !empty($post_settings['feature_1_icon'])}
                                                        <img src="{APP_URL}/storage/{$post_settings['feature_1_icon']}" class="img-fluid">
                                                    {/if}
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_1_icon" type="button" id="choose_feature_1_icon" class="btn btn-secondary btn-sm">{__('Choose Media')}</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_link_text">{__('Link Text')}</label>
                                            <input type="text" class="form-control" id="input_feature_1_link_text" name="settings[feature_1_link_text]" value="{$post_settings['feature_1_link_text']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_1_link_url">{__('Link URL')}</label>
                                            <input type="text" class="form-control" id="input_feature_1_link_url" name="settings[feature_1_link_url]" value="{$post_settings['feature_1_link_url']|default:''}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_2_title">{__('Title')}</label>
                                            <input type="text" class="form-control" id="input_feature_2_title" name="settings[feature_2_title]" value="{$post_settings['feature_2_title']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_description">{__('Description')}</label>
                                            <textarea class="form-control" id="input_feature_2_description" name="settings[feature_2_description]">{$post_settings['feature_2_description']|default:''}</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_2_icon">{__('Icon')}</label>
                                                <input type="hidden" data-media-input="feature_2_icon" id="input_feature_2_icon" name="settings[feature_2_icon]" value="{$post_settings['feature_2_icon']|default:''}">
                                                <div data-media-render="feature_2_icon" id="feature_2_icon_renderer">
                                                    {if !empty($post_settings['feature_2_icon'])}
                                                        <img src="{APP_URL}/storage/{$post_settings['feature_2_icon']}" class="img-fluid">
                                                    {/if}
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_2_icon" type="button" id="choose_feature_2_icon" class="btn btn-secondary btn-sm">{__('Choose Media')}</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_link_text">{__('Link Text')}</label>
                                            <input type="text" class="form-control" id="input_feature_2_link_text" name="settings[feature_2_link_text]" value="{$post_settings['feature_2_link_text']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_2_link_url">{__('Link URL')}</label>
                                            <input type="text" class="form-control" id="input_feature_2_link_url" name="settings[feature_2_link_url]" value="{$post_settings['feature_2_link_url']|default:''}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_3_title">{__('Title')}</label>
                                            <input type="text" class="form-control" id="input_feature_3_title" name="settings[feature_3_title]" value="{$post_settings['feature_3_title']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_description">{__('Description')}</label>
                                            <textarea class="form-control" id="input_feature_3_description" name="settings[feature_3_description]">{$post_settings['feature_3_description']|default:''}</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_3_icon">{__('Icon')}</label>
                                                <input type="hidden" data-media-input="feature_3_icon" id="input_feature_3_icon" name="settings[feature_3_icon]" value="{$post_settings['feature_3_icon']|default:''}">
                                                <div data-media-render="feature_3_icon" id="feature_3_icon_renderer">
                                                    {if !empty($post_settings['feature_3_icon'])}
                                                        <img src="{APP_URL}/storage/{$post_settings['feature_3_icon']}" class="img-fluid">
                                                    {/if}
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_3_icon" type="button" id="choose_feature_3_icon" class="btn btn-secondary btn-sm">{__('Choose Media')}</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_link_text">{__('Link Text')}</label>
                                            <input type="text" class="form-control" id="input_feature_3_link_text" name="settings[feature_3_link_text]" value="{$post_settings['feature_3_link_text']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_3_link_url">{__('Link URL')}</label>
                                            <input type="text" class="form-control" id="input_feature_3_link_url" name="settings[feature_3_link_url]" value="{$post_settings['feature_3_link_url']|default:''}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="input_feature_4_title">{__('Title')}</label>
                                            <input type="text" class="form-control" id="input_feature_4_title" name="settings[feature_4_title]" value="{$post_settings['feature_4_title']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_description">{__('Description')}</label>
                                            <textarea class="form-control" id="input_feature_4_description" name="settings[feature_4_description]">{$post_settings['feature_4_description']|default:''}</textarea>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="input_feature_4_icon">{__('Icon')}</label>
                                                <input type="hidden" data-media-input="feature_4_icon" id="input_feature_4_icon" name="settings[feature_4_icon]" value="{$post_settings['feature_4_icon']|default:''}">
                                                <div data-media-render="feature_4_icon" id="feature_4_icon_renderer">
                                                    {if !empty($post_settings['feature_4_icon'])}
                                                        <img src="{APP_URL}/storage/{$post_settings['feature_4_icon']}" class="img-fluid">
                                                    {/if}
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button data-choose-media-btn="feature_4_icon" type="button" id="choose_feature_4_icon" class="btn btn-secondary btn-sm">{__('Choose Media')}</button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_link_text">{__('Link Text')}</label>
                                            <input type="text" class="form-control" id="input_feature_4_link_text" name="settings[feature_4_link_text]" value="{$post_settings['feature_4_link_text']|default:''}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="input_feature_4_link_url">{__('Link URL')}</label>
                                            <input type="text" class="form-control" id="input_feature_4_link_url" name="settings[feature_4_link_url]" value="{$post_settings['feature_4_link_url']|default:''}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4>{__('About Section')}</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- About Title -->
                                <div class="mb-3">
                                    <label for="input_about_title">{__('About Title')}</label>
                                    <input type="text" class="form-control" id="input_about_title" name="settings[about_title]" value="{$post_settings['about_title']
                                    }">
                                </div>
                                <!-- About Description -->
                                <div class="mb-3">
                                    <label for="input_about_description">{__('About Description')}</label>
                                    <textarea class="form-control" id="input_about_description" name="settings[about_description]">{$post_settings['about_description']|default:''}</textarea>
                                </div>
                                <!-- About Button Text -->
                                <div class="mb-3">
                                    <label for="input_about_button_text">{__('About Button Text')}</label>
                                    <input type="text" class="form-control" id="input_about_button_text" name="settings[about_button_text]" value="{$post_settings['about_button_text']|default:''}">
                                </div>
                                <!-- About Button Link -->
                                <div class="mb-3">
                                    <label for="input_about_button_link">{__('About Button Link')}</label>
                                    <input type="text" class="form-control" id="input_about_button_link" name="settings[about_button_link]" value="{$post_settings['about_button_link']|default:''}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- About Image -->
                                <div class="mb-3">
                                    <label for="input_about_image">{__('About Image')}</label>
                                    <input type="hidden" data-media-input="about_image" id="input_about_image" name="settings[about_image]" value="{$post_settings['about_image']|default:''}">

                                    <!-- Image renderer for the about image -->
                                    <div data-media-render="about_image" id="about_image_renderer">
                                        {if !empty($post_settings['about_image'])}
                                            <img src="{APP_URL}/storage/{$post_settings['about_image']}" class="img-fluid">
                                        {/if}
                                    </div>
                                </div>
                                <!-- Button to choose the about image -->
                                <div class="mb-3">
                                    <button data-choose-media-btn="about_image" type="button" id="choose_about_image" class="btn btn-secondary btn-sm">{__('Choose Media')}</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        {/if}

        {if !empty($post)}
            <input type="hidden" name="id" value="{$post->id}">
        {/if}

    </form>



{/block}

{block name="script"}
    <script>
        window.addEventListener('DOMContentLoaded', function () {

            const app_url = '{APP_URL}';

            // Store the currently active field for image selection
            let activeField = null;

            document.querySelectorAll('[data-choose-media-btn]').forEach(btn => {
                btn.addEventListener('click', function () {
                    // Set the active field based on the button clicked
                    activeField = btn.dataset.chooseMediaBtn;
                    $.fancybox.open({
                        src: base_url + 'media/choose',
                        type: 'ajax',
                        opts: {
                            afterShow: function (instance, current) {
                                $('#clx_datatable').dataTable({
                                    responsive: true,
                                    "language": {
                                        "emptyTable": "{$_L['No items to display']}",
                                        "info": "{$_L['Showing _START_ to _END_ of _TOTAL_ entries']}",
                                        "infoEmpty": "{$_L['Showing 0 to 0 of 0 entries']}",
                                        buttons: {
                                            pageLength: '{$_L['Show all']}'
                                        },
                                        searchPlaceholder: "{__('Search')}"
                                    },
                                });
                            },
                            touch: false,
                            autoFocus: false,
                            keyboard: false,
                        },
                    });
                });
            });

            {literal}
            const $cloudonex_body = $('#cloudonex_body');

            $cloudonex_body.on('click', '.choose_media', function () {
                const media_path = $(this).data('path');

                // Use the activeField to determine which elements to update
                document.querySelector(`[data-media-input="${activeField}"]`).value = media_path;
                document.querySelector(`[data-media-render="${activeField}"]`).innerHTML = `<img src="${app_url}${ '/storage/' + media_path }" class="img-fluid">`;

                $.fancybox.close();
            });
            {/literal}

            const btnSavePost = document.getElementById('btnSavePost');

            btnSavePost.addEventListener('click', function (e) {
                e.preventDefault();

                axios.post('{$base_url}cms/post', new FormData(document.getElementById('app_form')))
                    .then(function (response) {
                        if (response.data.status === 'success') {
                            window.location.href = response.data.redirect;
                        } else {
                            toastr.error(response.data.message);
                        }
                    })
                    .catch(function (error) {
                        toastr.error(error);
                    });

            });
        });
    </script>
{/block}

