{assign var=navBarType value='dark'}
{extends './layout.tpl'}
{block name=content}

    <section class="wrapper image-wrapper " style="background: linear-gradient(90deg,#021048,#1e38a3);">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">{$post_settings['hero_title']|default:'Web hosting solution for modern apps and websites.'}</h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">{$post_settings['hero_description']|default:'Fast server, modern tech stack, our solution is equipped with everything you need and beyond.'}</p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container">
            <div class="row gx-md-5 gy-5 mt-n19 mb-14 mb-md-17">
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            {if !empty($post_settings['feature_1_icon'])}
                                <img src="{APP_URL}/storage/{$post_settings['feature_1_icon']}" style="max-height: 128px;" class="mb-3">
                            {/if}
                            <h4>{$post_settings['feature_1_title']|default:''}</h4>
                            <p class="mb-2">
                                {$post_settings['feature_1_description']|default:''}
                            </p>
                            <a href="{$post_settings['feature_1_link_url']|default:''}" class="more hover link-fuchsia">{$post_settings['feature_1_link_text']|default:''}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            {if !empty($post_settings['feature_2_icon'])}
                                <img src="{APP_URL}/storage/{$post_settings['feature_2_icon']}" style="max-height: 128px;" class="mb-3">
                            {/if}
                            <h4>{$post_settings['feature_2_title']|default:''}</h4>
                            <p class="mb-2">
                                {$post_settings['feature_2_description']|default:''}
                            </p>
                            <a href="{$post_settings['feature_2_link_url']|default:''}" class="more hover link-fuchsia">{$post_settings['feature_2_link_text']|default:''}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            {if !empty($post_settings['feature_3_icon'])}
                                <img src="{APP_URL}/storage/{$post_settings['feature_3_icon']}" style="max-height: 128px;" class="mb-3">
                            {/if}
                            <h4>{$post_settings['feature_3_title']|default:''}</h4>
                            <p class="mb-2">
                                {$post_settings['feature_3_description']|default:''}
                            </p>
                            <a href="{$post_settings['feature_3_link_url']|default:''}" class="more hover link-violet">{$post_settings['feature_3_link_text']|default:''}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 d-flex align-items-stretch">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            {if !empty($post_settings['feature_4_icon'])}
                                <img src="{APP_URL}/storage/{$post_settings['feature_4_icon']}" style="max-height: 128px;" class="mb-3">
                            {/if}
                            <h4>{$post_settings['feature_4_title']|default:''}</h4>
                            <p class="mb-2">
                                {$post_settings['feature_4_description']|default:''}
                            </p>
                            <a href="{$post_settings['feature_4_link_url']|default:''}" class="more hover link-orange">{$post_settings['feature_4_link_text']|default:''}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wrapper">
        <div class="container py-0">
            <div class="row text-center">
                <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
                    <h2 class="display-1 mb-4">{$post_settings['about_title']|default:'Develop locally, deploy globally'}</h2>
                    <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10 mb-7">{$post_settings['about_description']|default:'32 worldwide locations'}</p>
                </div>
            </div>
            <div class="d-flex justify-content-center" data-cues="slideInDown" data-group="join" data-delay="900">
                <span>
                    <a href="{$post_settings['about_button_link']|default:'/dynamic-link'}" class="btn btn-lg btn-outline-primary rounded-pill mx-1">{$post_settings['about_button_text']|default:'Contact Us'}</a>
                </span>
            </div>
            <div class="row mt-12" data-cue="fadeIn" data-delay="1600">
                <div class="col-lg-8 mx-auto">
                    <figure>
                        <img class="img-fluid" src="{APP_URL}/storage/{$post_settings['about_image']|default:'/dyanamic'}">
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section id="snippet-3" class="wrapper bg-light wrapper-border">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
            <h2 class="display-4 mb-3 text-center">
                {{__('Frequently Asked Questions')}}
            </h2>
            <p class="lead text-center mb-10 px-md-16 px-lg-0">
                {{__('Here are some of the most common questions we get asked. If you have any other questions, please feel free to contact us.')}}<br>
            </p>
            <div id="faq-accordion" class="accordion-wrapper">

                {foreach $faqs as $key => $faq}
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-{$key+1}">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-{$key+1}" aria-expanded="false" aria-controls="accordion-collapse-1-{$key+1}">
                                {$faq->question}
                            </button>
                        </div>
                        <div id="accordion-collapse-1-{$key+1}" class="collapse" aria-labelledby="accordion-heading-1-{$key+1}" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>{$faq->answer}</p>
                            </div>
                        </div>
                    </div>
                {/foreach}

            </div>
        </div>
    </section>


{/block}
