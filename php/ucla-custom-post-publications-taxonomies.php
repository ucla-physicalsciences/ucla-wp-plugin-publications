<?php
//year category
function register_date_taxonomy()
{
        $labels = array( //set label of our taxonomy
                'name' => __('Years', PUB_DOMAIN),
                'singular_name' => __('Year', PUB_DOMAIN),
                'add_new_item' => __('Add New Year', PUB_DOMAIN),
        );

        $args = array(
                'labels' => $labels, //retrieve values set in $labels above
                'public' => true, 
                'show_admin_column' => true,
                'show_in_quick_edit' => true,
                'show_in_rest' => 'false',
                'hierarchical' => true, /*. this is a category taxonomy */
        );

        $post_types = array ( 'publication'); //this taxonomy is only present for publications

        register_taxonomy('year', $post_types, $args);

}
