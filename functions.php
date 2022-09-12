<?php
// ========== Enable Post Thumbnails in Your WordPress Theme... ==========
add_theme_support( 'post-thumbnails' );
// ========== Enable Post Thumbnails in Your WordPress Theme... ==========

// ========== custom_feature_img... ==========

// ========== create meta box...
add_action('admin_init', 'custom_feature_img');
function custom_feature_img()
{
    add_meta_box('custom_feature_img_id', 'Custom Featured Images', 'custom_feature_img_field', 'post', 'side', 'low');
}
function custom_feature_img_field()
{
    // ========== preview data save...
    global $post;
    $data = get_post_custom($post->ID);
    $val = isset($data['custom_feature_img']) ? esc_attr($data['custom_feature_img'][0]) : 'https://i0.wp.com/';
    // ========== preview data save.
    echo '<p><strong>CDN: </strong>https://i0.wp.com/</p>';
    echo '<input type="text" name="custom_feature_img" id="custom_feature_img" value="' . $val . '" style="width: 100%;"/>';
    echo '<br>';
    echo '<img src="' . $val . '" alt="" style="display:block; margin-top: 1em;">';
    echo '<hr>';
    echo '<p><strong>Shortlink</strong></p>';
    $shortlink = site_url() . '/?p=' . $post->ID;
    echo '<a href="' . $shortlink . '" target="_blank">' . $shortlink . '</a>';
}
// ========== create meta box.
// ========== save data...
add_action('save_post', 'save_detail');
function save_detail()
{
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }
    update_post_meta($post->ID, 'custom_feature_img', $_POST['custom_feature_img']);
}
// ========== save data...
// ========== custom_feature_img. ==========


// ========== post_views_count... ==========
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return '<i class="fa fa-eye" aria-hidden="true"></i> ' . $count;
}
function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// ========== post_views_count. ==========
