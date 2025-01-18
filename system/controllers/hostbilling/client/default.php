<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

require APP_SYSTEM_PATH . '/controllers/hostbilling/client/init.php';
$post = Post::where('is_home_page', 1)->first();
$post_settings = $post->settings ?? [];

\view(get_theme_file('home'), [
    'type' => 'client_auth',
    'post' => $post,
    'post_settings' => $post_settings,
]);
