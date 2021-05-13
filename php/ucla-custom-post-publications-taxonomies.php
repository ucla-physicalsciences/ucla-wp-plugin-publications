<?php
function register_date_taxonomy()
{
        $labels = array(
                'name' => __('Years', PUB_DOMAIN),
                'singular_name' => __('Year', PUB_DOMAIN),
                'add_new_item' => __('Add New Year', PUB_DOMAIN),
        );

        $args = array(
                'labels' => $labels,
                'public' => true,
                'show_admin_column' => true,
                'show_in_quick_edit' => true,
                'show_in_rest' => 'false',
                'hierarchical' => true, /* category */
        );

        $post_types = array ( 'publication');

        register_taxonomy('year', $post_types, $args);

}
