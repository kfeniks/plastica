<?php
/**
 * Plugin Name: Custom API
 */

/**
 * All required files with function
 */

require plugin_dir_path( __FILE__ ) . 'inc/config.php';
require plugin_dir_path( __FILE__ ) . 'inc/sql.php';
require plugin_dir_path( __FILE__ ) . 'inc/sqlRequestsList.php';
require plugin_dir_path( __FILE__ ) . 'inc/restroute.php';
require plugin_dir_path( __FILE__ ) . 'inc/helpers.php';
require plugin_dir_path( __FILE__ ) . 'inc/posts.php';
require plugin_dir_path( __FILE__ ) . 'inc/users.php';

add_action('rest_api_init', function () {
    rest_route('posts', 'GET', 'w1_posts');
    rest_route('users', 'GET', 'w1_users');
});

function w1_posts()
{
    return all_data();
}

function w1_users()
{
    return get_own_lists_users();
}