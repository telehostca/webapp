{block name="content"}
    <div class="card">
        <div class="card-body">

            {if !empty($message)}
                <div class="alert alert-info mb-3">
                    {$message}
                </div>
            {/if}

            {foreach $data as $username => $user_details}
                <h3>{$username}</h3>
                {foreach $user_details as $key => $value}
                    <div class="mb-2">
                        <strong>{$key}:</strong> {$value}
                    </div>
                {/foreach}
            {/foreach}
        </div>
    </div>
{/block}
