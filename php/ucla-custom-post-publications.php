<?php

function register_publication_type()
{
        $labels = array(
                'name' => __('Publications', PUB_DOMAIN),
                'singular_name' => __('Publication', PUB_DOMAIN),
                'featured_image' => __('Publication Image', PUB_DOMAIN),
                'set_featured_image'=> __('Set Publication Image', PUB_DOMAIN),
                'remove_featured_image'=> __('Remove Publication Image', PUB_DOMAIN),
                'use_featured_image'=> __('Use Publication Image', PUB_DOMAIN),
                'archives' => __('Publication Archive', PUB_DOMAIN),
                'add_new' => __('Add New Publication', PUB_DOMAIN),
                'add_new_item' => __('Add New Publication', PUB_DOMAIN),

        );

        $args = array(
                'labels' => $labels,
                'public' => true, /*allow our custom post type on the admin/front end*/
                'rewrite' => array ('has_front' => true),
                'menu_icon' => 'dashicons-analytics',
                'supports' => array('title','editor','thumbnail'),
                'show_in_rest' =>false,/*block editor?*/
        );
        register_post_type ('publication', $args);
}
