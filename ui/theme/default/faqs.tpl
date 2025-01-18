{extends file="$layouts_admin"}

{block name="content"}

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form id="formFaq" method="post" action="{$base_url}cms/save-faq">
                        <div class="mb-3">
                            <label>{__('Question')}</label>
                            <input class="form-control" name="question" required {if !empty($selected_faq)}value="{$selected_faq->question}"{/if}>
                        </div>

                        <div class="mb-3">
                            <label for="success_message">{__('Answer')}</label>
                            <textarea class="form-control" name="answer" required id="success_message">{if !empty($selected_faq)}{$selected_faq->answer}{/if}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>{__('Display Order')}</label>
                            <input class="form-control" type="number" required name="display_order" value="{$selected_faq->display_order|default:'0'}">
                        </div>

                        <input type="hidden" name="id" value="{$selected_faq->id|default:''}">

                        <button class="btn btn-primary" id="buttonSave" type="submit">{__('Save')}</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="clx_datatable">

                        <thead>
                        <tr>
                            <th>{__('Question')}</th>
                            <th class="text-end">{__('Action')}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $faqs as $faq}

                            <tr>
                                <td>
                                    {$faq->question}
                                </td>
                                <td class="text-end">
                                    <a href="{$base_url}cms/faqs/{$faq->id}" class="btn btn-primary btn-sm"><i class="fal fa-edit"></i></a>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'cms/delete-faq/{$faq->id}');" class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></a>
                                </td>
                            </tr>

                        {/foreach}
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

{/block}

{block name="script"}
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const formFaq = document.getElementById('formFaq');

            formFaq.addEventListener('submit', (e) => {
                e.preventDefault();

                axios.post(formFaq.getAttribute('action'), new FormData(formFaq))
                    .then((response) => {
                        if (response.data.success) {
                            window.location.reload();
                        }
                    })
                    .catch((error) => {
                        console.log(error);
                    });

            });

        });
    </script>
{/block}
