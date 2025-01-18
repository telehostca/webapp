<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {if !empty($post)}
    <title>{$post.title}</title>
        {else}
        <title>{$config['CompanyName']}</title>
    {/if}

    <link rel="stylesheet" href="https://s3.fromcdn.com/build/assets/fusion.min.css?v=5">
    <script type="module" src="https://s3.fromcdn.com/build/assets/fusion.min.js?v=5"></script>
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-light">



        {if !empty($config['announcement_bar_message'])}
            <div class="text-white fw-bold fs-15 mb-2" style="background: {$config.announcement_bar_background_color|default:'#1D2025'}">
                <div class="container py-2 text-center">
                    {$config['announcement_bar_message']} {if !empty($config['announcement_bar_link_url'])}<a href="{$config['announcement_bar_link_url']}" class="badge badge-lg bg-white text-primary rounded ms-2">{$config['announcement_bar_link_text']}</a>{/if}
                </div>
            </div>
        {/if}


        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="{$base_url}client">
                        <img src="{{APP_URL}}/storage/system/{{$config['logo_default']}}" alt="{{$config['CompanyName']}}" style="max-height: 45px;" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">{{$config['CompanyName']}}</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">


                            <li class="nav-item dropdown"><a class="nav-link" href="{$base_url}client">{__('Home')}</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{__('Products n Services')}</a>
                                <ul class="dropdown-menu">
                                    {foreach $groups as $group}
                                        <li class="nav-item"><a class="dropdown-item" href="{$base_url}client/items/{$group->slug}">{$group->name}</a></li>
                                    {/foreach}
                                </ul>
                            </li>

                            <li class="nav-item dropdown"><a class="nav-link" href="{$base_url}client/kb">{$_L['Knowledgebase']}</a></li>
                            <li class="nav-item dropdown"><a class="nav-link" href="{$base_url}client/contact">{__('Contact')}</a></li>


                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="/cdn-cgi/l/email-protection#d2b4bba0a1a6fcbeb3a1a692b7bfb3bbbefcb1bdbf" class="link-inverse"><span class="__cf_email__" data-cfemail="523b3c343d12373f333b3e7c313d3f">[email&#160;protected]</span></a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="{{$base_url}}client/dashboard" class="btn btn-sm btn-primary rounded-pill">{__('Dashboard')}</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    {block name="content"}{/block}
    <!-- /section -->
</div>
<!-- /.content-wrapper -->
<footer class="bg-light">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="{{APP_URL}}/storage/system/{{$config['logo_default']}}" style="max-height: 35px;" alt="{{$config['CompanyName']}}" />
                    <p class="mb-4">© {{date('Y')}} {{$config['CompanyName']}}. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">

                        {if !empty($config['social_facebook'])}<a href="{$config['social_facebook']}"><i class="uil uil-facebook-f"></i></a>{/if}
                        {if !empty($config['social_twitter'])}<a href="{$config['social_twitter']}"><i class="uil uil-twitter"></i></a>{/if}
                        {if !empty($config['social_instagram'])}<a href="{$config['social_instagram']}"><i class="uil uil-instagram"></i></a>{/if}
                        {if !empty($config['social_linkedin'])}<a href="{$config['social_linkedin']}"><i class="uil uil-linkedin"></i></a>{/if}
                        {if !empty($config['social_youtube'])}<a href="{$config['social_youtube']}"><i class="uil uil-youtube"></i></a>{/if}

                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title mb-3">{$config.quick_links_widget_1_title|default:'Quick Links'}</h4>

                    {if !empty($config.quick_links_widget_1_links) && !empty(json_decode($config.quick_links_widget_1_links, true))}

                        <ul class="list-unstyled text-reset mb-0">
                            {foreach json_decode($config.quick_links_widget_1_links, true) as $link}
                                <li><a href="{$link.url}">{$link.text}</a></li>
                            {/foreach}
                        </ul>

                        {else}

                        <p>
                            Add links to your footer by login to admin then go to CMS -> Configure
                        </p>

                    {/if}

                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">

                    <h4 class="widget-title mb-3">{$config.quick_links_widget_2_title|default:'Quick Links'}</h4>

                    {if !empty($config.quick_links_widget_2_links) && !empty(json_decode($config.quick_links_widget_2_links, true))}

                        <ul class="list-unstyled text-reset mb-0">
                            {foreach json_decode($config.quick_links_widget_2_links, true) as $link}
                                <li><a href="{$link.url}">{$link.text}</a></li>
                            {/foreach}
                        </ul>

                        {else}

                        <p>
                            Add links to your footer by login to admin then go to CMS -> Configure
                        </p>

                    {/if}

                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">{$config['contact_widget_title']|default:'Contact Widget'}</h4>
                    <div class="mb-4">{$config['contact_widget_description']|default:'Contact Widget Description, change it from CMS -> Configure'}</div>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

</body>
</html>
