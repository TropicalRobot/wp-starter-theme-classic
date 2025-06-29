<?php

remove_image_size('1536x1536');
remove_image_size('2048x2048');
add_image_size('hero', 1800, 1800);

function classic_theme_custom_image_sizes($sizes)
{
    return array_merge($sizes, [
        'hero' => __('Hero')
    ]);
}
add_filter('image_size_names_choose', 'classic_theme_custom_image_sizes');

// Stop attachments sharing slugs with other post types
add_action('add_attachment', function ($postId) {
    $attachment = get_post($postId);
    $slug = $attachment->post_name;

    // update the post data of the attachment with an edited slug
    wp_update_post([
        'ID' => $postId,
        'post_name' => 'media-' . $slug,
    ]);
});
