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
//short cut
define( 'PUB_VERSION', '0.1.0');  //set the constant PUB_VERSION as 0.1.0 
define( 'PUB_DOMAIN', 'ucla-wp-plugin-publications'); //set the constant PUB_VERSION as ucla-wp-plugin-publications
define ('PUB_PATH', plugin_dir_path(__FILE__)); //set the constant PUB_PATH as plugin_dir_path(__FILE__)

require_once( PUB_PATH . '/php/ucla-custom-post-publications.php');//include custom post file
add_action ('init', 'register_publication_type');//adding the publication custom post

require_once (PUB_PATH . '/php/ucla-custom-post-publications-taxonomies.php');//include taxonomies file
add_action('init', 'register_date_taxonomy'); //adding Year category

require_once (PUB_PATH . '/php/ucla-custom-fields-publications.php'); //include custom fields file 
add_action('admin_init', 'admin_init_article'); //add the meta box for articles details
add_action('save_post', 'save_publication_details_article');//allow to save any updates done to articles details
add_action('admin_init', 'admin_init_book');//add the meta box for book details
add_action('save_post', 'save_publication_details_book');//allow to save any updates done to book details
/*
