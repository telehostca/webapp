{extends './layout.tpl'}
{block name=content}
    <section class="wrapper bg-light">
        <div class="container pt-8 pt-md-14">
            <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                    <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                    <figure class="rounded">
                        {if !empty($post_settings['hero_image'])}
                            <img src="{APP_URL}/storage/{$post_settings['hero_image']}" alt="{$post->title}">
                            {else}
                            <img src="./assets/img/photos/about7.jpg"  />
                        {/if}
                    </figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 mb-5">{$post_settings['hero_title']|default:'Web hosting solution for modern apps and websites.'}</h1>
                    <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">{$post_settings['hero_description']|default:'Fast server, modern tech stack, our solution is equipped with everything you need and beyond.'}</p>
                    <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">

                        {if !empty($post_settings['primary_button_text'])}
                            <span><a href="{$post_settings['primary_button_url']|default:'#'}" class="btn btn-lg btn-primary rounded-pill me-2">{$post_settings['primary_button_text']}</a></span>
                        {/if}

                        {if !empty($post_settings['secondary_button_text'])}
                            <span><a href="{$post_settings['secondary_button_url']|default:'#'}" class="btn btn-lg btn-outline-primary rounded-pill">{$post_settings['secondary_button_text']}</a></span>
                        {/if}


                    </div>
                </div>
                <!--/column -->
            </div>

            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                    <h3 class="display-4 mb-6 text-center">{__('Products n Services')}</h3>
                </div>
                <!-- /column -->
            </div>

            <div class="row">
                {foreach $groups as $group}

                    <div class="col-md-3 col-xs">
                        <a href="{$base_url}client/items/{$group->slug}/" class="m-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>{$group->name}</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                {/foreach}
            </div>
            <!-- /.row -->

            <!--/.row -->

            <!--/.row -->

            <!-- /.row -->
        </div>
        <!-- /.container -->

        <!-- /.container-fluid -->

        <!--/.container -->
    </section>
{/block}
