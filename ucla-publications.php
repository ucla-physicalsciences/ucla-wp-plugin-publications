<?php
/**
 * Plugin Name: UCLA Publications
 * Description: Plugin to manage academic publications for UCLA websites 
 * Version: 0.1.0
 * Author: Yasmine Talby
 * */

/* if wordpress isn't accessing this file, then not used*/

 if (!defined('WPINC')) {
         die;
 }
define( 'PUB_VERSION', '0.1.0');
define( 'PUB_DOMAIN', 'ucla-wp-plugin-publications');
define ('PUB_PATH', plugin_dir_path(__FILE__));

require_once( PUB_PATH . '/php/ucla-custom-post-publications.php');
add_action ('init', 'register_publication_type');

require_once (PUB_PATH . '/php/ucla-custom-post-publications-taxonomies.php');
add_action('init', 'register_date_taxonomy');

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php');
add_action('admin_init', 'admin_init_article');

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php');
add_action('save_post', 'save_publication_details_article');

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php');
add_action('admin_init', 'admin_init_book');

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php');
add_action('save_post', 'save_publication_details_book');
/*

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php');
add_action('admin_init', 'admin_init_booklet');

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php');
add_action('save_post', 'save_publication_details_booklet');
*/
