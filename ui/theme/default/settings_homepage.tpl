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
                <form action="{$_url}settings/home-page-hero-save" method="post" enctype="multipart/form-data">

                    <div class="card card-body">
                        <h2 class="mb-3">{{__('Hero Section Text Editor')}}</h2>
                        <div class="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>
                                <input type="text" name="hero_title" class="form-control" id="title" {if !empty($hero->hero_title)} value="{$hero->hero_title}"{/if}>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">{{__('Subtitle')}}</label>
                                <input type="text" name="hero_subtitle" {if !empty($hero->hero_subtitle)} value="{$hero->hero_subtitle}"{/if} class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">{{__('Paragraph')}}</label>
                                <textarea class="form-control" name="hero_paragraph" id="" rows="3">{if !empty($hero->hero_paragraph)} {$hero->hero_paragraph}{/if}</textarea>
                            </div>
                            <div class="mb-3">
                                <div>
                                    <label  for="photo_file" class="form-label mt-4s">{{__('Background Image')}}</label>
                                    <input class="form-control" name="background_image" type="file" id="logo_file">
                                </div>
                            </div>


                        {if !empty($hero)}
                            <input type="hidden" name="id" value="{{$hero->id}}">
                        {/if}
                        <div class="button-row text-left mt-2">
                            <button class="btn btn-success ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>


    </div>

{*    <div class="mt-5">*}

{*        <div class="row">*}
{*            <div class="col-md-8 mx-auto">*}
{*                <form action="{$_url}settings/privacy-policy-page-save" method="post" enctype="multipart/form-data">*}

{*                    <div class="card card-body">*}
{*                        <h2 class="mb-3">{{__('Feature Section Text Editor')}}</h2>*}
{*                        <div class="">*}
{*                            <div class="">*}

{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>*}
{*                                    <input type="text" name="feature2_title" value="" class="form-control" id="title" >*}
{*                                </div>*}
{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlInput1" class="form-label">{{__('Subtitle')}}</label>*}
{*                                    <input type="text" name="feature2_subtitle" value=""  class="form-control" id="title" >*}
{*                                </div>*}


{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 1')}}</label>*}
{*                                    <input type="text"  name="feature2_one" value="" class="form-control" id="feature_one" >*}
{*                                </div>*}
{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                    <textarea class="form-control" name="feature2_one_paragraph" id="" rows="3"></textarea>*}
{*                                </div>*}
{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 2')}}</label>*}
{*                                    <input type="text" class="form-control" name="feature2_two" value="" id="feature1_two" >*}
{*                                </div>*}
{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                    <textarea class="form-control" id="" name="feature2_two_paragraph" rows="3"></textarea>*}
{*                                </div>*}
{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 3')}}</label>*}
{*                                    <input type="text" class="form-control" name="feature2_three"*}
{*                                           value="" id="feature2_three">*}
{*                                </div>*}
{*                                <div class="mb-3">*}
{*                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                    <textarea class="form-control" id="" name="feature2_three_paragraph" rows="3"></textarea>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlInput1" class="form-label">{{__('Feature 4')}}</label>*}
{*                                        <input type="text" class="form-control" name="feature2_four"*}
{*                                               value="" id="feature2_four">*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                        <textarea class="form-control" id="" name="feature2_four_paragraph" rows="3"></textarea>*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlInput1" class="form-label">{{__('Feature 5')}}</label>*}
{*                                        <input type="text" class="form-control" name="feature2_five"*}
{*                                               value="" id="feature2_five">*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                        <textarea class="form-control" id="" name="feature2_five_paragraph" rows="3"></textarea>*}
{*                                    </div>*}

{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlInput1" class="form-label">{{__('Feature 6')}}</label>*}
{*                                        <input type="text" class="form-control" name="feature2_six"*}
{*                                               value="" id="feature2_six">*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                        <textarea class="form-control" id="" name="feature2_six_paragraph" rows="3"></textarea>*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlInput1" class="form-label">{{__('Feature 7')}}</label>*}
{*                                        <input type="text" class="form-control" name="feature2_seven"*}
{*                                               value="" id="feature2_seven">*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                        <textarea class="form-control" id="" name="feature2_seven_paragraph" rows="3"></textarea>*}
{*                                    </div>*}

{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlInput1" class="form-label">{{__('Feature 8')}}</label>*}
{*                                        <input type="text" class="form-control" name="feature2_eight"*}
{*                                               value="" id="feature2_eight">*}
{*                                    </div>*}
{*                                    <div class="mb-3">*}
{*                                        <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>*}
{*                                        <textarea class="form-control" id="" name="feature2_eight_paragraph" rows="3"></textarea>*}
{*                                    </div>*}


{*                                </div>*}

{*                            </div>*}


{*                            {if !empty($privacy)}*}
{*                                <input type="hidden" name="id" value="{{$privacy->id}}">*}
{*                            {/if}*}
{*                            <div class="button-row text-left mt-2">*}
{*                                <button class="btn btn-success ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>*}
{*                            </div>*}

{*                        </div>*}
{*                </form>*}
{*            </div>*}
{*        </div>*}


{*    </div>*}

    <div class="mt-5">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{$_url}settings/home-page-feature-one-save" method="post" enctype="multipart/form-data">

                    <div class="card card-body">
                        <h2 class="mb-3">{{__('Feature Section Text Editor')}}</h2>
                        <div class="">
                            <div class="">


                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>
                                    <input type="text" class="form-control" name="feature1_title"
                                            {if !empty($hero->feature1_title)} value="{$hero->feature1_title}"{/if}  id="title" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Subtitle')}}</label>
                                    <input type="text" class="form-control"  {if !empty($hero->feature1_subtitle)} value="{$hero->feature1_subtitle}"{/if} name="feature1_subtitle" id="title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 1')}}</label>
                                    <input type="text"  name="feature1_one" {if !empty($hero->feature1_one)} value="{$hero->feature1_one}"{/if} class="form-control" id="feature_one" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" name="feature1_one_paragraph" id="" rows="3">{if !empty($hero->feature1_one_paragraph)}{$hero->feature1_one_paragraph}{/if}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 2')}}</label>
                                    <input type="text" class="form-control" name="feature1_two" {if !empty($hero->feature1_two)} value="{$hero->feature1_two}"{/if} id="feature1_two" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" id="" name="feature1_two_paragraph" rows="3">{if !empty($hero->feature1_two_paragraph)}{$hero->feature1_two_paragraph}{/if}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 3')}}</label>
                                    <input type="text" class="form-control" name="feature1_three"
                                            {if !empty($hero->feature1_three)} value="{$hero->feature1_three}"{/if} id="feature1_three">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" id="" name="feature1_three_paragraph" rows="3">{if !empty($hero->feature1_three_paragraph)}{$hero->feature1_three_paragraph}{/if}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 4')}}</label>
                                    <input type="text" class="form-control" name="feature1_four"
                                            {if !empty($hero->feature1_four)} value="{$hero->feature1_four}"{/if} id="feature1_four">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" id="" name="feature1_four_paragraph" rows="3">{if !empty($hero->feature1_four_paragraph)}{$hero->feature1_four_paragraph}{/if}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 5')}}</label>
                                    <input type="text" class="form-control" name="feature1_five"
                                            {if !empty($hero->feature1_five)} value="{$hero->feature1_five}"{/if} id="feature1_five">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" id="" name="feature1_five_paragraph" rows="3">{if !empty($hero->feature1_five_paragraph)}{$hero->feature1_five_paragraph}{/if}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">{{__('Feature 6')}}</label>
                                    <input type="text" class="form-control" name="feature1_six"
                                            {if !empty($hero->feature1_six)} value="{$hero->feature1_six}"{/if} id="feature1_six">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Description')}}</label>
                                    <textarea class="form-control" id="" name="feature1_six_paragraph" rows="3">{if !empty($hero->feature1_six_paragraph)}{$hero->feature1_six_paragraph}{/if}</textarea>
                                </div>


                                {if !empty($hero)}
                                <input type="hidden" name="id" value="{{$hero->id}}">
                            {/if}
                            <div class="button-row text-left mt-2">
                                <button class="btn btn-success ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                            </div>

                        </div>
                </form>
            </div>
        </div>


    </div>

    <div class="mt-5">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{$_url}settings/home-page-story-one-save" method="post" enctype="multipart/form-data">

                    <div class="card card-body">
                        <h2 class="mb-3">{{__('Story Section 1 Text Editor')}}</h2>
                        <div class="">
                            <div class="">

                                <div class="mb-3">
                                    <div>
                                        <label  for="photo_file" class="form-label mt-4s">{{__('Image')}}</label>
                                        <input class="form-control" name="story1_image" type="file" id="logo_file">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">{{__('Title')}}</label>
                                    <input type="text" class="form-control"  {if !empty($hero->story1_title)} value="{$hero->story1_title}"{/if}  name="story1_title" id="storytitle" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">{{__('Paragraph')}}</label>
                                    <textarea class="form-control" name="story1_paragrapgh" id="paragraph" rows="3">{if !empty($hero->story1_paragrapgh)}{$hero->story1_paragrapgh}{/if}</textarea>
                                </div>


                                {if !empty($hero)}
                                    <input type="hidden" name="id" value="{{$hero->id}}">
                                {/if}
                                <div class="button-row text-left mt-2">
                                    <button class="btn btn-success ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                                </div>

                            </div>
                </form>
            </div>
        </div>

    </div>

    <div class="mt-5">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{$_url}settings/home-page-story-two-save" method="post" enctype="multipart/form-data">

                    <div class="card card-body">
                        <h2 class="mb-3">{{__('Story Section 2 Text Editor')}}</h2>
                        <div class="">
                            <div class="">
                                <div class="mb-3">
                                    <div>
                                        <label  for="photo_file" class="form-label mt-4s">{{__('Image')}}</label>
                                        <input class="form-control" name="story2_image" type="file" id="logo_file">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label  class="form-label">{{__('Title')}}</label>
                                    <input type="text" class="form-control" name="story2_title" {if !empty($hero->story2_title)} value="{$hero->story2_title}"{/if}  id="storytitle">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">{{__('Paragraph')}}</label>
                                    <textarea class="form-control" name="story2_paragrapgh" id="paragraph" rows="3">{if !empty($hero->story2_paragrapgh)}{$hero->story2_paragrapgh}{/if}</textarea>
                                </div>

                                {if !empty($hero)}
                                    <input type="hidden" name="id" value="{{$hero->id}}">
                                {/if}
                                <div class="button-row text-left mt-2">
                                    <button class="btn btn-success ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                                </div>

                            </div>
                </form>
            </div>
        </div>


    </div>
    <div class="mt-5">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{$_url}settings/home-page-calltoaction-save" method="post" enctype="multipart/form-data">

                    <div class="card card-body">
                        <h2 class="mb-3">{{__('Call To Action Text Editor')}}</h2>
                        <div class="">
                            <div class="">
                                <div class="mb-3">
                                    <label  class="form-label">{{__('Title')}}</label>
                                    <input type="text" class="form-control" name="calltoaction_title"{if !empty($hero->calltoaction_title)} value="{$hero->calltoaction_title}"{/if}  id="storytitle">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">{{__('Subtitle')}}</label>
                                    <input type="text" class="form-control" name="calltoaction_subtitle" {if !empty($hero->calltoaction_subtitle)} value="{$hero->calltoaction_subtitle}"{/if}  id="storytitle">
                                </div>

                                {if !empty($hero)}
                                    <input type="hidden" name="id" value="{{$hero->id}}">
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

