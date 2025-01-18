<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

authenticate_admin();

$ui->assign('selected_navigation', 'cms');

$action = route(1);
if ($request_method === 'GET') {
    switch ($action) {
        case '':
        case 'posts':

            $posts = Post::all();
            \view('posts', [
                'posts' => $posts,
            ]);

            break;

        case 'post':
            $id = route(2);
            $post = null;
            $post_settings = [];
            if($id)
            {
                $post = Post::find($id);
            }
            if($post)
            {
                $post_settings = $post->settings;
            }

            \view('post', [
                'post' => $post,
                'post_settings' => $post_settings,
            ]);

            break;

            case 'delete-post':
            $id = route(2);
            $post = Post::find($id);
            if($post)
            {
                $post->delete();
            }
            redirect_to('cms/posts');
            break;


        case 'menus':

            $selected_menu_id = route(2, 0);
            $selected_menu_id = (int) $selected_menu_id;

            if($selected_menu_id)
            {
                $selected_menu = Menu::find($selected_menu_id);
            }
            else
            {
                $selected_menu = null;
            }

            $menus = Menu::all()
                ->keyBy('id')
                ->all();

            \view('menus', [
                'menus' => $menus,
                'selected_menu' => $selected_menu,
            ]);

            break;



        case 'faqs':

            $selected_faq_id = route(2);

            if($selected_faq_id)
            {
                $selected_faq = Faq::find($selected_faq_id);
            }
            else
            {
                $selected_faq = null;
            }

            $faqs = Faq::orderBy('display_order', 'asc')->get();

            \view('faqs', [
                'faqs' => $faqs,
                'selected_faq' => $selected_faq,
            ]);

            break;

        case 'delete-faq':

            $id = route(2);

            $faq = Faq::find($id);

            if($faq)
            {
                $faq->delete();
            }

            redirect_to('cms/faqs');

            break;

        case 'configure':

            \view('configure', [

            ]);

            break;
    }
}

if ($request_method === 'POST') {

    $data = request()->all();

    switch ($action) {

        case 'post':

            $post = null;

            if(!empty($data['id']))
            {
                $id = $data['id'];
                $post = Post::find($id);
            }

            $slug = $data['slug'] ?? null;

            if(!$post)
            {
                $post = new Post();
                $post->type = 'page';
                $post->api_name = 'page';
            }
            else{
                if($post->is_home_page)
                {
                    $slug = '';
                }
            }

            $post->title = $data['title'] ?? '';
            $post->settings = $data['settings'] ?? '';
            $post->slug = $slug;
            $post->save();

            api_response([
                'status' => 'success',
                'message' => __('Saved successfully'),
                'redirect' => BASE_URL . 'cms/post/' . $post->id,
            ]);

            break;

        case 'save-faq':

            $id = $data['id'] ?? null;

            if($id)
            {
                $faq = Faq::find($id);
            }
            else
            {
                $faq = new Faq();
            }

            $faq->question = $data['question'] ?? '';
            $faq->answer = $data['answer'] ?? '';
            $faq->display_order = $data['display_order'] ?? 0;
            $faq->save();

            api_response([
                'success' => true,
            ]);

            break;

        case 'save-menu':

            $id = $data['id'] ?? null;

            if($id)
            {
                $menu = Menu::find($id);
            }
            else
            {
                $menu = new Menu();
            }

            $menu->name = $data['name'] ?? '';
            $menu->link = $data['link'] ?? '';
            $menu->display_order = $data['display_order'] ?? 0;
            $menu->parent_id = $data['parent_id'] ?? null;
            $menu->save();

            break;

        case 'save-settings':

            updateOption('announcement_bar_message', $data['announcement_bar_message'] ?? null, true);
            updateOption('announcement_bar_background_color', $data['announcement_bar_background_color'] ?? null, true);
            updateOption('announcement_bar_link_text', $data['announcement_bar_link_text'] ?? null, true);
            updateOption('announcement_bar_link_url', $data['announcement_bar_link_url'] ?? null, true);
            updateOption('contact_widget_title', $data['contact_widget_title'] ?? null, true);
            updateOption('contact_widget_description', $data['contact_widget_description'] ?? null, true);
            updateOption('quick_links_widget_1_title', $data['quick_links_widget_1_title'] ?? null, true);
            updateOption('quick_links_widget_2_title', $data['quick_links_widget_2_title'] ?? null, true);

            updateOption('social_twitter', $data['social_twitter'] ?? null, true);
            updateOption('social_facebook', $data['social_facebook'] ?? null, true);
            updateOption('social_instagram', $data['social_instagram'] ?? null, true);
            updateOption('social_youtube', $data['social_youtube'] ?? null, true);
            updateOption('social_linkedin', $data['social_linkedin'] ?? null, true);
            updateOption('social_pinterest', $data['social_pinterest'] ?? null, true);

            $quick_links_widget_1_links_items = $data['quick_links_widget_1_links'] ?? null;
            $quick_links_widget_1_links = null;

            if(!empty($quick_links_widget_1_links_items['text']))
            {
                $i = 0;
                foreach ($quick_links_widget_1_links_items['text'] as $text)
                {

                    if(empty($text))
                    {
                        continue;
                    }

                    $quick_links_widget_1_links[] = [
                        'text' => $text,
                        'url' => $quick_links_widget_1_links_items['url'][$i],
                    ];

                    $i++;
                }
            }

            if(!empty($quick_links_widget_1_links))
            {
                $quick_links_widget_1_links = json_encode($quick_links_widget_1_links);
            }

            updateOption('quick_links_widget_1_links', $quick_links_widget_1_links, true);

            $quick_links_widget_2_links_items = $data['quick_links_widget_2_links'] ?? null;
            $quick_links_widget_2_links = null;

            if(!empty($quick_links_widget_2_links_items['text']))
            {
                $i = 0;
                foreach ($quick_links_widget_2_links_items['text'] as $text)
                {

                    if(empty($text))
                    {
                        continue;
                    }

                    $quick_links_widget_2_links[] = [
                        'text' => $text,
                        'url' => $quick_links_widget_2_links_items['url'][$i],
                    ];

                    $i++;
                }
            }

            if(!empty($quick_links_widget_2_links))
            {
                $quick_links_widget_2_links = json_encode($quick_links_widget_2_links);
            }

            updateOption('quick_links_widget_2_links', $quick_links_widget_2_links, true);

            redirect_to('cms/configure');

            break;


    }

}
