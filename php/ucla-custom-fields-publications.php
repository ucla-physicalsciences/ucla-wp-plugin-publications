
<?php

    function admin_init(){
        add_meta_box("publicationInfo-meta", "Publication Details", "meta_options", "publication", "side", "low");
    }


    function meta_options(){
        global $post;
        $custom = get_post_custom($post->ID);
        $publication_title = $custom["publication_title"][0];
?>
    <label>Title:</label><input name="publication_title" value="<?php echo $publication_title; ?>" />
<?php
    }


function save_publication_title(){
    global $post;
    update_post_meta($post->ID, "publication_title", $_POST["publication_title"]);
}
?>
