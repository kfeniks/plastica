<?php
/**
 * Plugin Name: Custom API
 */

/**
 * All required files with function
 */

require plugin_dir_path( __FILE__ ) . 'inc/posts.php';
require plugin_dir_path( __FILE__ ) . 'inc/users.php';

add_action('rest_api_init', function () {
    register_rest_route('w1/v1', 'posts', [
        'methods' => 'GET',
        'callback' => 'w1_posts',
    ]);
    register_rest_route('w1/v1', 'users', [
        'methods' => 'GET',
        'callback' => 'w1_users',
    ]);
});

function w1_posts()
{
    return all_data();
}

function w1_users()
{
    return get_own_lists_users();
}