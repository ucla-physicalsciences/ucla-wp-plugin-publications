   
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
update_post_meta($post->ID, "_article_year",sanitize_text_field($_POST["_article_year"]));
update_post_meta($post->ID, "_article_journal",sanitize_text_field($_POST["_article_journal"]));
update_post_meta($post->ID, "_article_volume",sanitize_text_field($_POST["_article_volume"]));
update_post_meta($post->ID, "_article_number",sanitize_text_field($_POST["_article_number"]));
update_post_meta($post->ID, "_article_pages",sanitize_text_field($_POST["_article_pages"]));
update_post_meta($post->ID, "_article_month",sanitize_text_field($_POST["_article_month"]));
update_post_meta($post->ID, "_article_DOI",sanitize_text_field($_POST["_article_DOI"]));
update_post_meta($post->ID, "_article_note",sanitize_text_field($_POST["_article_note"]));
update_post_meta($post->ID, "_article_key",sanitize_text_field($_POST["_article_key"]));
}
add_action('save_post','save_publication_details_article');

// callback function to render fields

function publication_metabox_article() {
        global $post;
        $custom = get_post_custom($post->ID);//retrieve post meta fields based on post ID
        $field_data_article_year = $custom["_article_year"][0]; //grab data from "_article_year"
        echo "<input type=\"text\" name=\"_article_year\" value=\"".$field_data_article_year."\" placeholder=\"Publication Year\">";
        $field_data_article_month = $custom["_article_month"][0]; //grab data from "_article_month"
        echo "<input type=\"text\" name=\"_article_month\" value=\"".$field_data_article_month."\" placeholder=\"Publication Month\">";
        $field_data_article_journal = $custom["_article_journal"][0]; //grab data from "_article_journal"
        echo "<input type=\"text\" name=\"_article_journal\" value=\"".$field_data_article_journal."\" placeholder=\" Journal\">";
        $field_data_article_volume = $custom["_article_volume"][0]; //grab data from "_article_volume"
        echo "<input type=\"text\" name=\"_article_volume\" value=\"".$field_data_article_volume."\" placeholder=\"Volume\">";
        $field_data_article_number = $custom["_article_number"][0]; //grab data from "_article_number"
        echo "<input type=\"text\" name=\"_article_numberr\" value=\"".$field_data_article_number."\" placeholder=\"Number\">";
        $field_data_article_pages = $custom["_article_pages"][0]; //grab data from "_article_pages"
        echo "<input type=\"text\" name=\"_article_pages\" value=\"".$field_data_article_pages."\" placeholder=\"Pages\">";
        $field_data_article_DOI = $custom["_article_DOI"][0]; //grab data from "_article_DOI"
        echo "<input type=\"text\" name=\"_article_DOI\" value=\"".$field_data_article_DOI."\" placeholder=\"DOI\">";
        $field_data_article_note = $custom["_article_note"][0]; //grab data from "_article_note"
        echo "<input type=\"text\" name=\"_article_note\" value=\"".$field_data_article_note."\" placeholder=\"Note\">";
$field_data_article_year = $custom["_article_key"][0]; //grab data from "_article_key"
        echo "<input type=\"text\" name=\"_article_key\" value=\"".$field_data_article_key."\" placeholder=\"Key\">";}
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
   

}
function article_template($template){
        global $post;
        if ('publication' === $post->post_type && locate_template(array('single-article.php'))!==$template){
                return PUB_DOMAIN . 'single-article.php';
        }
        return $template;
}
add_filter('single_template','article_template');

