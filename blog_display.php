<?php
function display_blog_posts() {
    if (file_exists('blog_posts.json')) {
        $blog_posts = json_decode(file_get_contents('blog_posts.json'), true);
        $output = '';
        
        foreach ($blog_posts as $post) {
            $output .= $post['html'];
        }
        
        return $output;
    }
    return '';
}
?> 