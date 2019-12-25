<?php

/**
 * @package AlexDu ProfileReviewsPlugin
 */
/*
Plugin Name: ProfileReviewsPlugin
Plugin URI: http://keccgroup.ru
Description: This is not just a plugin
Author: Alex Du
Text Domain: profile-reviews
Version: 1.1.0
License: GPLv3 or later
 */

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here?' );

class ProfileReviewsPlugin {

    function __construct()
    {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

    function activate() {

    }

    function deactivate() {

    }

    function uninstall() {

    }

    function custom_post_type() {
        register_post_type( 'review', ['public' => true, 'label' => 'Reviews', 'menu_icon' => 'dashicons-format-status', 'supports' => array('title', 'thumbnail', 'editor', 'author', 'custom-fields')] );
    }

}

if( class_exists( 'ProfileReviewsPlugin' ) ) {
    $profileReviews = new ProfileReviewsPlugin();
}