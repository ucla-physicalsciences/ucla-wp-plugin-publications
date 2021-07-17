   
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
		'has_archive'=> true,
		'menu_icon' => 'dashicons-analytics' //set the menu icon
	);

	//register publication CPT
	register_post_type('publication', $args);

}

//Hook into the 'init' action
add_action('init','ucla_academic_publications',0); 

/*CUSTOM FIELD*/
function add_post_meta_boxes_article(){
	 add_meta_box("publication-metadata-article", "Publication Details", "publication_metabox_article", "publication", "side", "low");
}
add_action('admin_init','add_post_meta_boxes_article');

//save fields values
function save_publication_details_article(){
	global $post;	
	if (defined('DOING_AUTOSAVE')&& DOING_AUTOSAVE){return;}	
	update_post_meta($post->ID, "entrytype",sanitize_text_field($_POST["entrytype"]));
	update_post_meta($post->ID, "address",sanitize_text_field($_POST["address"]));
	update_post_meta($post->ID, "annote",sanitize_text_field($_POST["annote"]));
	update_post_meta($post->ID, "booktitle",sanitize_text_field($_POST["booktitle"]));
	update_post_meta($post->ID, "chapter",sanitize_text_field($_POST["chapter"]));
update_post_meta($post->ID, "crossref",sanitize_text_field($_POST["crossref"]));
update_post_meta($post->ID, "edition",sanitize_text_field($_POST["edition"]));
update_post_meta($post->ID, "editor",sanitize_text_field($_POST["editor"]));
update_post_meta($post->ID, "howpublished",sanitize_text_field($_POST["howpublished"]));
update_post_meta($post->ID, "institution",sanitize_text_field($_POST["institution"]));
update_post_meta($post->ID, "key",sanitize_text_field($_POST["key"]));
update_post_meta($post->ID, "organization",sanitize_text_field($_POST["organization"]));
update_post_meta($post->ID, "publisher",sanitize_text_field($_POST["publisher"]));
update_post_meta($post->ID, "school",sanitize_text_field($_POST["school"]));
update_post_meta($post->ID, "series",sanitize_text_field($_POST["series"]));
update_post_meta($post->ID, "type",sanitize_text_field($_POST["type"]));
update_post_meta($post->ID, "year",sanitize_text_field($_POST["year"]));
update_post_meta($post->ID, "journal",sanitize_text_field($_POST["journal"]));
update_post_meta($post->ID, "volume",sanitize_text_field($_POST["volume"]));
update_post_meta($post->ID, "number",sanitize_text_field($_POST["number"]));
update_post_meta($post->ID, "pages",sanitize_text_field($_POST["pages"]));
update_post_meta($post->ID, "month",sanitize_text_field($_POST["month"]));
update_post_meta($post->ID, "note",sanitize_text_field($_POST["note"]));
update_post_meta($post->ID, "author",sanitize_text_field($_POST["author"]));
update_post_meta($post->ID, "title",sanitize_text_field($_POST["title"]));
}
add_action('save_post','save_publication_details_article');

// callback function to render fields

function publication_metabox_article() {
        global $post;
	$custom = get_post_custom($post->ID);//retrieve post meta fields based on post ID
	$field_data_entry_type = $custom["entrytype"][0]; //grab data from "entrytype"
	echo "<input type=\"text\" name=\"entrytype\" value=\"".$field_data_entry_type."\" placeholder=\"Publication Entry Type\">";
	$field_data_annote = $custom["annote"][0]; //grab data from "annote"
	echo "<input type=\"text\" name=\"annote\" value=\"".$field_data_annote."\" placeholder=\"Publication Annote\">";
	$field_data_booktitle = $custom["booktitle"][0]; //grab data from "booktitle"
	echo "<input type=\"text\" name=\"booktitle\" value=\"".$field_data_booktitle."\" placeholder=\"Publication Booktitle\">";
	$field_data_chapter = $custom["chapter"][0]; //grab data from "chapter"
	echo "<input type=\"text\" name=\"chapter\" value=\"".$field_data_chapter."\" placeholder=\"Publication Chapter\">";
	$field_data_crossref = $custom["crossref"][0]; //grab data from "crossref"
	echo "<input type=\"text\" name=\"crossref\" value=\"".$field_data_crossref."\" placeholder=\"Publication Crossref\">";
	$field_data_edition = $custom["edition"][0]; //grab data from "edition"
	echo "<input type=\"text\" name=\"edition\" value=\"".$field_data_edition."\" placeholder=\"Publication Edition\">";
	$field_data_editor = $custom["editor"][0]; //grab data from "editor"
	echo "<input type=\"text\" name=\"editor\" value=\"".$field_data_editor."\" placeholder=\"Publication Editor\">";
	$field_data_howpublished = $custom["howpublished"][0]; //grab data from "howpublished"
	echo "<input type=\"text\" name=\"howpublished\" value=\"".$field_data_howpublished."\" placeholder=\"Publication Howpublished\">";
	$field_data_institution = $custom["institution"][0]; //grab data from "institution"
	echo "<input type=\"text\" name=\"institution\" value=\"".$field_data_institution."\" placeholder=\"Publication Institution\">";
	$field_data_key = $custom["key"][0]; //grab data from "key"
	echo "<input type=\"text\" name=\"key\" value=\"".$field_data_key."\" placeholder=\"Publication Key\">";
	$field_data_organization = $custom["organization"][0]; //grab data from "organization"
	echo "<input type=\"text\" name=\"organization\" value=\"".$field_data_organization."\" placeholder=\"Publication Organization\">";
	$field_data_publisher = $custom["publisher"][0]; //grab data from "publisher"
	echo "<input type=\"text\" name=\"publisher\" value=\"".$field_data_publisher."\" placeholder=\"Publication Publisher\">";
	$field_data_school = $custom["school"][0]; //grab data from "school"
	echo "<input type=\"text\" name=\"school\" value=\"".$field_data_school."\" placeholder=\"Publication School\">";
	$field_data_series = $custom["series"][0]; //grab data from "series"
	echo "<input type=\"text\" name=\"series\" value=\"".$field_data_series."\" placeholder=\"Publication Series\">";
	$field_data_type = $custom["type"][0]; //grab data from "type"
        echo "<input type=\"text\" name=\"type\" value=\"".$field_data_type."\" placeholder=\"Publication Type\">";
	$field_data_address = $custom["address"][0]; //grab data from "address"
        echo "<input type=\"text\" name=\"address\" value=\"".$field_data_address."\" placeholder=\"Publication Address\">";
	$field_data_title = $custom["title"][0]; //grab data from "title"
        echo "<input type=\"text\" name=\"title\" value=\"".$field_data_title."\" placeholder=\"Publication Title\">";
        $field_data_author = $custom["author"][0]; //grab data from "author"
        echo "<input type=\"text\" name=\"author\" value=\"".$field_data_author."\" placeholder=\"Publication Author\">";
        $field_data_year = $custom["year"][0]; //grab data from "year"
	echo "<input type=\"text\" name=\"year\" value=\"".$field_data_year."\" placeholder=\"Publication Year\">";
	$field_data_month = $custom["month"][0]; //grab data from "month"
        echo "<input type=\"text\" name=\"month\" value=\"".$field_data_month."\" placeholder=\"Publication Month\">";
	$field_data_journal = $custom["journal"][0]; //grab data from "journal"
	echo "<input type=\"text\" name=\"journal\" value=\"".$field_data_journal."\" placeholder=\" Journal\">";
	$field_data_volume = $custom["volume"][0]; //grab data from "volume"
	echo "<input type=\"text\" name=\"volume\" value=\"".$field_data_volume."\" placeholder=\"Volume\">";
	$field_data_number = $custom["number"][0]; //grab data from "number"
	echo "<input type=\"text\" name=\"number\" value=\"".$field_data_number."\" placeholder=\"Number\">";
	$field_data_pages = $custom["pages"][0]; //grab data from "pages"
        echo "<input type=\"text\" name=\"pages\" value=\"".$field_data_pages."\" placeholder=\"Pages\">";
	$field_data_note = $custom["note"][0]; //grab data from "note"
	echo "<input type=\"text\" name=\"note\" value=\"".$field_data_note."\" placeholder=\"Note\">";}
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
}
function publication_template($template){
	global $post;
	if ('publication' === $post->post_type){
		return plugin_dir_path( __FILE__ ) . 'single-publication.php';
	}
	return $template;
}
add_filter('single_template','publication_template');

function publication_gutenberg_block()
{
	if (!function_exists('register_block_type')){
		return;
	}
wp_register_script('gutenberg-publication-block', plugin_dir_url(__FILE__). '/gutenberg-publication-block.js', array('wp-blocks'));
register_block_type('ucla-publications/my-publication', array(
	'editor_script' => 'gutenberg-publication-block'
));}
add_action('init' , 'publication_gutenberg_block');
