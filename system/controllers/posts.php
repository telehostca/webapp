<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

require APP_SYSTEM_PATH . '/controllers/hostbilling/client/init.php';

$post_name = route(0);

switch ($post_name)
{
    case 'about':

        \view(get_theme_file('about'), [
        ]);

        break;

    case 'home':

        $privacy=CookiePolicy::first();
        $contact=ContactSection::first();
        $landingpage= LandingPage::first();

        \view(get_theme_file('home'), [
            'privacy' => $privacy,
            'contact' => $contact,
            'landingpage' => $landingpage,

        ]);

        break;

        case 'contact':

            break;

    case 'privacy-policy':

        $privacy=PrivacyPolicy::first();
        $contact=ContactSection::first();

        \view(get_theme_file('privacy'), [
            'privacy' => $privacy,
            'contact' => $contact,
        ]);

        break;

        case 'terms-and-conditions':

            $privacy=Terms::first();
            $contact=ContactSection::first();

            \view(get_theme_file('terms'), [
                'privacy' => $privacy,
                'contact' => $contact,
            ]);

            break;

    case 'cookie-policy':

        $privacy=CookiePolicy::first();
        $contact=ContactSection::first();

        \view(get_theme_file('cookie'), [
            'privacy' => $privacy,
            'contact' => $contact,
        ]);

        break;

    default:

        $post = Post::where('slug', $post_name)->first();

        if($post)
        {
            $post_settings = $post->settings;
            \view(get_theme_file('post'), [
                'post' => $post,
                'post_settings' => $post_settings,
            ]);
        }
        else
        {
            abort();
        }

        break;
}
