<?php

/**
 * Plugin Name: Elegance Lash and Brow Pop Up
 * Plugin URI:  https://elegancelashandbrow.com
 * Author:      Elegance Lash and Brow
 * Author URI:  https://elegancelashandbrow.com
 * Description: This plugin adds a pop up to the website
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: elegance-lash-and-brow
 */

// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}

// Enqueue scripts and styles
function elegance_lash_and_brow_enqueue_scripts()
{
    //css
    wp_enqueue_style('elegance-lash-and-brow-style', plugin_dir_url(__FILE__) . 'assets/css/style.css', array(), time(), 'all');
    //js
    wp_enqueue_script('elegance-lash-and-brow-script', plugin_dir_url(__FILE__) . 'assets/js/cutom.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'elegance_lash_and_brow_enqueue_scripts');

//add template to footer
add_action('wp_footer', 'elegance_lash_and_brow_template');

function elegance_lash_and_brow_template()
{
    ob_start();
    include plugin_dir_path(__FILE__) . '/template/pop-up.php';
    echo ob_get_clean();
}
