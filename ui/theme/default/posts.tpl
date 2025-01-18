{extends file="$layouts_admin"}

{block name="content"}

    <div class="card">
        <div class="card-body">

            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <h3 class="mb-3">{__('Pages')}</h3>
                </div>
                <div>
                    <a href="{$base_url}cms/post" class="btn btn-primary mb-3">{__('New Page')}</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>
                            <span class="h4">{__('Page')}</span>
                        </th>
                        <th class="text-end">
                            <span class="h4">{__('Manage')}</span>
                        </th>
                    </tr>

                    {foreach $posts as $post}
                        <tr>
                            <td>
                                <div class="mb-2">
                                    <a class="fw-bold" href="{$base_url}cms/post/{$post->id}">{$post->title}</a>
                                </div>
                                {if $post->is_home_page}
                                    <a target="_blank" href="{APP_URL}">{APP_URL}</a>
                                    <div class="mt-2">
                                        <span class="badge bg-primary">{__('Home Page')}</span>
                                    </div>
                                    {else}
                                    <a target="_blank" href="{$base_url}{$post->slug}">/{$post->slug}</a>
                                {/if}

                            </td>
                            <td class="text-end">
                                <a class="btn btn-primary btn-sm" href="{$base_url}cms/post/{$post->id}">{__('Edit')}</a>
                                {if !$post->is_home_page}
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'cms/delete-post/{$post->id}');" class="btn btn-danger btn-sm">{__('Delete')}</a>
                                {/if}
                            </td>
                        </tr>
                    {/foreach}


                    </tbody>
                </table>
            </div>
        </div>
    </div>

{/block}

