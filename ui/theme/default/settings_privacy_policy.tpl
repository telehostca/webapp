{extends file="$layouts_admin"}

{block name="head"}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d!important;
        }


        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
{/block}

{block name="content"}

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{$_url}settings/privacy-policy-page-save" method="post" enctype="multipart/form-data">


                    <div class=" card card-body">

                        <h2 class="mb-3">{{__('Privacy Policy Page Text Editor')}}</h2>
                        <div class="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label h5">{{__('Title')}}</label>
                                <input type="text" name="title" class="form-control" id="title"   {if !empty($privacy->title)} value="{{$privacy->title}}"{/if}>
                            </div>
                            <label for="example-date-input" class="form-control-label h5">
                                {{__('Date')}}

                            </label>
                            <span class="text-danger">*</span>
                            <input class="form-control"  name="date" type="date" value="{date('Y-m-d')}" id="date"
                                   {if !empty($privacy)}

                                       value="{$privacy->date}"
                                       {else}
                                       value="{date('Y/m/d')}"
                                   {/if}
                                 >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label h5 mt-3">{{__('Privacy Policy')}}</label>
                            <textarea class="form-control" name="description" id="description" rows="8">{if !empty($privacy->description)}{$privacy->description}{/if}</textarea>
                        </div>


                        {if !empty($privacy)}
                        <input type="hidden" name="id" value="{{$privacy->id}}">
                       {/if}
                        <div class="button-row text-left mt-2">
                            <button class="btn btn-success ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

{/block}

{block name="script"}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(function () {
            let $start_time = $("#date");
            $start_time.flatpickr({

                enableTime: true,
                dateFormat: "Y-m-d",



            });
            $('#description').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );


        });
    </script>
{/block}

