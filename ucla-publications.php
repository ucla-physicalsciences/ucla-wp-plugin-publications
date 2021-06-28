   
<?php
/**
 * Plugin Name: UCLA Academic Publications
 * Description: This plugin will add a Custom Post Type to handle Academic Publications on UCLA Wordpress Website
 * Author: Yasmine Khadija Talby
 * Version : 1.0.0
 */

// Prevent public user to directly access this file
if (!defined('ABSPATH')) {
        exit;
}

//set the constant PUB_VERSION as ucla-wp-plugin-publications
define( 'PUB_DOMAIN', 'ucla-wp-plugin-publications');


/* Custom Post Type*/

function ucla_academic_publications(){

        //set UI labels for CPT
        $labels= array(
                'name'=> __('Publications','PUB_DOMAIN'),
                'singular_name'=>__('Publication','PUB_DOMAIN'),
                'add_new'=>__('Add New Publication','PUB_DOMAIN'),
                'edit_item'=>__('Edit Publication','PUB_DOMAIN'),
                'new_item'=>__('New Publication','PUB_DOMAIN'),
                'view_item'=>__('View Publication','PUB_DOMAIN'),
                'view_items'=>__('View Publications','PUB_DOMAIN'),
                'search_items'=>__('Search Publications','PUB_DOMAIN'),
                'not_found'=>__('No publications found.','PUB_DOMAIN'),
                'not_found_in_trash'=>__('No publications found in trash.','PUB_DOMAIN'),
                'all_items'=>__('All Publications','PUB_DOMAIN'),
                'menu_name'=>__('Publications','PUB_DOMAIN'),
        );

        //set options for CPT
        $args = array(
                'description'=>__('Academic Publications','PUB_DOMAIN'),
                'labels'=>$labels,
                'supports'=> array('title', 'editor', 'author','custom-fields',), //define core features the post type supports
                'taxonomies'=> array('fields'), //taxonomy identifiers that will be registered for the post type
                'hierarchical'=>false, //this CPT is handled like a post
                'public'=> true ,//allow us to publish
                'show_in_rest' => true,//block editor?
                'menu_icon' => 'dashicons-analytics' //set the menu icon

        );

        //register publication CPT
        register_post_type('publication', $args);

}

//Hook into the 'init' action
add_action('init','ucla_academic_publications',0);

/*CUSTOM FIELD*/
function add_post_meta_boxes_article(){
         add_meta_box("publication-metadata-article", "Article Details", "publication_metabox_article", "publication", "side", "low");
}
add_action('admin_init','add_post_meta_boxes_article');

//save fields values
function save_publication_details_article(){
        global $post;
if (defined('DOING_AUTOSAVE')&& DOING_AUTOSAVE){return;}
update_post_meta($post->ID, "_article_date",sanitize_text_field($_POST["_article_date"]));
}
add_action('save_post','save_publication_details_article');

// callback function to render fields

function publication_metabox_article() {
        global $post;
        $custom = get_post_custom($post->ID);//retrieve post meta fields based on post ID
        $field_data = $custom["_article_date"][0]; //grab data from "_article_date"
        echo "<input type=\"date\" name=\"_article_date\" value=\"".$field_data."\" placeholder=\"Publication Date\">";
}
//generate shortcode
add_shortcode('articles-list', 'myarticles');
function myarticles(){
        global $post;
        $args = array(
                'post_type' => 'publication',
                'post_status' => 'publish',
                'post_per_page' => 20,
                'orderby' => 'meta_value',
                'meta_key' => '_article_date',
                'order' => 'ASC'
        );
        $query = new WP_Query($args);
        $content = '<ul>';
        if ($query->have_posts()):
                while($query->have_posts()):
                        $query->the_post();
                        $content .='
                        <li>
                                <a href="'.get_the_permalink().'">
                                        '.get_the_title().'
                                </a>-  '.date_format(date_create(get_post_meta($post->ID, '_article_date',true)), 'jS F Y').
                        '</li>';
endwhile;
else:
        _e('No publications', 'PUB_DOMAIN');
endif;
$content .= '</ul>';
return $content;
   
function load_template($template){
        global $post;
        if('publication' === $post->post_type && locate_template(array('single-publication.php'))!== $template) {
                return plugin_dir_path(__FILE__).'single-publication.php';
        }
        return $template;
}
add_filter('single_template', 'load_template');
}

}

