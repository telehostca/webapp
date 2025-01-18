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

    <link rel="stylesheet" href="{APP_URL}/ui/theme/frontend/v/assets/fusion.min.css?v=5">
    <script type="module" src="{APP_URL}/ui/theme/frontend/v/assets/fusion.min.js?v=5"></script>
    <script>
        var base_url = '{$_url}';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    </script>
    <style>
        :root, [data-bs-theme=light] {
            --bs-primary: #0E65FF;
        }
    </style>
    {block name="head"}{/block}
</head>
<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">



        {if !empty($config['announcement_bar_message'])}
            <div class="text-white fw-bold fs-15 mb-2" style="background: {$config.announcement_bar_background_color|default:'#1D2025'}">
                <div class="container py-2 text-center">
                    {$config['announcement_bar_message']} {if !empty($config['announcement_bar_link_url'])}<a href="{$config['announcement_bar_link_url']}" class="badge badge-lg bg-white text-primary rounded ms-2">{$config['announcement_bar_link_text']}</a>{/if}
                </div>
            </div>
        {/if}


        <nav
                {if !empty($navBarType) && $navBarType == 'dark'}
                    class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark"
                {else}
                    class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light"
                {/if}
        >
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="{$base_url}client">
                        {if !empty($navBarType) && $navBarType == 'dark'}
                            <img src="{$app_url}storage/system/{$config['logo_inverse']}?v=1" alt="{{$config['CompanyName']}}" style="max-height: 45px;" />
                        {else}
                            <img src="{$app_url}storage/system/{$config['logo_default']}?v=1" alt="{{$config['CompanyName']}}" style="max-height: 35px;" />
                        {/if}
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">{{$config['CompanyName']}}</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">
                        </button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{$base_url}client">{__('Home')}</a>
                            </li>


                            {if !empty($groups['hosting'])}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{__('Hosting')}</a>
                                    <ul class="dropdown-menu">
                                        {foreach $groups['hosting'] as $group_obj}
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{$base_url}client/items/{$group_obj->slug}">{$group_obj->name}</a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </li>
                            {/if}



                            {if !empty($groups['vps'])}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{__('VPS')}</a>
                                    <ul class="dropdown-menu">
                                        {foreach $groups['vps'] as $group_obj}
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{$base_url}client/items/{$group_obj->slug}">{$group_obj->name}</a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </li>
                            {/if}

                            {if !empty($groups['dedicated'])}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{__('Dedicated')}</a>
                                    <ul class="dropdown-menu">
                                        {foreach $groups['dedicated'] as $group_obj}
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{$base_url}client/items/{$group_obj->slug}">{$group_obj->name}</a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </li>
                            {/if}

                            {if !empty($groups['other'])}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{__('More Products')}</a>
                                    <ul class="dropdown-menu">
                                        {foreach $groups['other'] as $group_obj}
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="{$base_url}client/items/{$group_obj->slug}">{$group_obj->name}</a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </li>
                            {/if}

                            {if !empty($menu_items)}

                                {foreach $menu_items as $menu_item}

                                    {if empty($menu_item['children'])}
                                        <li class="nav-item">
                                            <a class="nav-link" href="{$menu_item['link']}">{$menu_item['name']}</a>
                                        </li>
                                        {else}
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{$menu_item['name']}</a>
                                            <ul class="dropdown-menu">
                                                {foreach $menu_item['children'] as $child}
                                                    <li class="nav-item">
                                                        <a class="dropdown-item" href="{$child['link']}">{$child['name']}</a>
                                                    </li>
                                                {/foreach}
                                            </ul>
                                        </li>
                                    {/if}


                                {/foreach}

                            {/if}

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{$base_url}client/contact">{__('Contact')}</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="{{$base_url}}client/dashboard" class="btn btn-sm btn-primary rounded-pill">{__('Dashboard')}</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn">
				<span>
				</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {block name="content"}{/block}

</div>
<footer style="background: linear-gradient(90deg,#142149,#233ba2); color: rgba(229,235,255,.56);">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="{{APP_URL}}/storage/system/{{$config['logo_default']}}" style="max-height: 35px;" alt="{{$config['CompanyName']}}" />
                    <p class="mb-4">© {{date('Y')}} {{$config['CompanyName']}}. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">

                        {if !empty($config['social_facebook'])}<a href="{$config['social_facebook']}">
                                <i class="uil uil-facebook-f">
                                </i>
                            </a>{/if}
                        {if !empty($config['social_twitter'])}<a href="{$config['social_twitter']}">
                                <i class="uil uil-twitter">
                                </i>
                            </a>{/if}
                        {if !empty($config['social_instagram'])}<a href="{$config['social_instagram']}">
                                <i class="uil uil-instagram">
                                </i>
                            </a>{/if}
                        {if !empty($config['social_linkedin'])}<a href="{$config['social_linkedin']}">
                                <i class="uil uil-linkedin">
                                </i>
                            </a>{/if}
                        {if !empty($config['social_youtube'])}<a href="{$config['social_youtube']}">
                                <i class="uil uil-youtube">
                                </i>
                            </a>{/if}

                    </nav>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">{$config.quick_links_widget_1_title|default:'Quick Links'}</h4>

                    {if !empty($config.quick_links_widget_1_links) && !empty(json_decode($config.quick_links_widget_1_links, true))}

                        <ul class="list-unstyled text-reset mb-0">
                            {foreach json_decode($config.quick_links_widget_1_links, true) as $link}
                                <li>
                                    <a href="{$link.url}">{$link.text}</a>
                                </li>
                            {/foreach}
                        </ul>

                    {else}

                        <p>
                            Add links to your footer by login to admin then go to CMS -> Configure
                        </p>

                    {/if}

                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">{$config.quick_links_widget_2_title|default:'Quick Links'}</h4>

                    {if !empty($config.quick_links_widget_2_links) && !empty(json_decode($config.quick_links_widget_2_links, true))}

                        <ul class="list-unstyled text-reset mb-0">
                            {foreach json_decode($config.quick_links_widget_2_links, true) as $link}
                                <li>
                                    <a href="{$link.url}">{$link.text}</a>
                                </li>
                            {/foreach}
                        </ul>

                    {else}

                        <p>
                            Add links to your footer by login to admin then go to CMS -> Configure
                        </p>

                    {/if}

                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">{$config['contact_widget_title']|default:'Contact Widget'}</h4>
                    <div class="mb-4">{$config['contact_widget_description']|default:'Contact Widget Description, change it from CMS -> Configure'}</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
{block name="scripts"}{/block}
</body>
</html>
