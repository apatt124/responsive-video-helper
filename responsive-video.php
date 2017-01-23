<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: Responsive Video Helper
Description: Add code to make embedded videos responsive.
Version: 1.0.1
Author: Alex Patton
*/

if ( !defined( 'WP_CONTENT_URL' ) ) {
    define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
}
if ( !defined( 'WP_CONTENT_DIR' ) ) {
    define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
}
if ( !defined( 'WP_PLUGIN_URL' ) ) {
    define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
}
if ( !defined( 'WP_PLUGIN_DIR' ) ) {
    define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
}
if ( !defined( 'RVH_DIR' ) ) {
    define( 'RVH_DIR', WP_PLUGIN_DIR . '/responsive-video/' );
}
if ( !defined( 'RVH_URL' ) ) {
    define( 'RVH_URL', WP_PLUGIN_URL . '/responsive-video/' );
}

require_once(RVH_DIR . 'php/rvh_functions.php');

$rvhFunc = new rvh_functions();