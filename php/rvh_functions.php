<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class rvh_functions {

public function __construct() {
        add_action( 'init', array( $this, 'init' ), 1 );
    }

    public function init(){
        add_action('wp_enqueue_scripts', array( $this, 'addScripts' ) );
    }

    public function addScripts() {

        wp_register_script('vimeo-js', 'https://player.vimeo.com/api/player.js', array('jquery'));
        wp_enqueue_script('vimeo-js', 'https://player.vimeo.com/api/player.js', array('jquery'));

        wp_register_script('responsive-vimeo-helper', RVH_URL . 'js/responsive-vimeo-helper.js', array('jquery'));
        wp_enqueue_script('responsive-vimeo-helper', RVH_URL . 'js/responsive-vimeo-helper.js', array('jquery'), 1.2);
        wp_localize_script('responsive-vimeo-helper', 'RVH_URL', array( 'pluginUrl' => RVH_URL ));

    }
}