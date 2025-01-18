{extends file="$layouts_admin"}

{block name="content"}

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3>{__('Add new menu')}</h3>
                <form id="appForm">

                    <div class="mb-3">
                        <label for="inputMenuName">{__('Name')}</label>
                        <input class="form-control" id="inputMenuName" required name="name"

                                    {if !empty($selected_menu)}
                                            value="{$selected_menu->name}"
                                    {/if}
                        >
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuLink">{__('Link')}</label>
                        <input class="form-control" id="inputMenuLink" required name="link"

                                 {if !empty($selected_menu)}
                                        value="{$selected_menu->link}"
                                 {/if}
                        >
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuParent">{__('Parent')}</label>
                        <select class="form-select" id="inputMenuParent" name="parent_id">
                            <option value="0">{__('No parent')}</option>
                            {foreach $menus as $menu}

                                {if !empty($selected_menu) && $selected_menu->id == $menu->id}
                                    {continue}
                                {/if}

                                <option value="{$menu->id}"

                                        {if !empty($selected_menu) && $selected_menu->parent_id == $menu->id}
                                            selected
                                        {/if}

                                >{$menu->name}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="inputMenuDisplayOrder">{__('Display order')}</label>
                        <input class="form-control" type="number" required id="inputMenuDisplayOrder" name="display_order"
                               value="{if !empty($selected_menu)}{$selected_menu->display_order}{/if}"
                        >
                    </div>

                    {if !empty($selected_menu)}
                        <input type="hidden" name="id" value="{$selected_menu->id}">
                    {/if}

                    <button type="submit" class="btn btn-primary">{__('Save')}</button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>{__('Name')}</th>
                            <th>{__('Parent')}</th>
                            <th>{__('Display order')}</th>
                            <th>{__('Actions')}</th>
                        </tr>
                        </thead>
                        {foreach $menus as $menu}
                            <tr>
                                <td>
                                    <div class="fw-bold">{$menu->name}</div>
                                    <p>
                                        <a target="_blank" href="{$menu->link}">{$menu->link}</a>
                                    </p>
                                </td>
                                <td>
                                    {if $menu->parent_id}
                                        {foreach $menus as $parent}
                                            {if $parent->id == $menu->parent_id}
                                                {$parent->name}
                                            {/if}
                                        {/foreach}
                                    {/if}
                                </td>
                                <td>{$menu->display_order}</td>
                                <td class="text-end">
                                    <a href="{$base_url}cms/menus/{$menu->id}" class="btn btn-primary btn-sm">{__('Edit')}</a>
                                    <a href="#" class="btn btn-danger btn-sm">{__('Delete')}</a>
                                </td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

{/block}

{block name="scripts"}
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const appForm = document.getElementById('appForm');
            appForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(appForm);
                axios.post(base_url + 'cms/save-menu', formData)
                    .then((response) => {
                        window.location.reload();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            });
        });
    </script>
{/block}
