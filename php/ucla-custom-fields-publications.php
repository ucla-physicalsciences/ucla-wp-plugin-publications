<?php

    function admin_init(){
        add_meta_box("publicationInfo-meta", "Publication Details", "meta_options", "publication", "side", "low");
    }


    function meta_options(){
        global $post;
        $custom = get_post_custom($post->ID);
        $publication_title = $custom["publication_title"][0];
        $publication_author = $custom["publication_author"][0];
        $publication_journal = $custom["publication_journal"][0];
        $publication_DOI = $custom["publication_DOI"][0];
        $publication_ISSN = $custom["publication_ISSN"][0];
        $publication_pages = $custom["publication_pages"][0];
        $publication_URL = $custom["publication_URL"][0];
        $publication_volume = $custom["publication_volume"][0];
?>
    <label>Title: </label><input name="publication_title" value="<?php echo $publication_title; ?>" />
  <br><br>  <label>Author: </label><input name="publication_author" value="<?php echo $publication_author; ?>" />
  <br><br>  <label>Journal: </label><input name="publication_journal" value="<?php echo $publication_journal; ?>" />
  <br><br>  <label>Volume: </label><input name="publication_volume" value="<?php echo $publication_volume; ?>" />
  <br><br>  <label>Pages: </label><input name="publication_pages" value="<?php echo $publication_pages; ?>" />
  <br><br>  <label>DOI: </label><input name="publication_DOI" value="<?php echo $publication_DOI; ?>" />
  <br><br>  <label>ISSN: </label><input name="publication_ISSN" value="<?php echo $publication_ISSN; ?>" />
  <br><br>  <label>URL: </label><input name="publication_URL" value="<?php echo $publication_URL; ?>" />
<?php
    }


function save_publication_details(){
    global $post;
    update_post_meta($post->ID, "publication_title", $_POST["publication_title"]);
    update_post_meta($post->ID, "publication_author", $_POST["publication_author"]);
    update_post_meta($post->ID, "publication_journal", $_POST["publication_journal"]);
    update_post_meta($post->ID, "publication_pages", $_POST["publication_pages"]);
    update_post_meta($post->ID, "publication_DOI", $_POST["publication_DOI"]);
    update_post_meta($post->ID, "publication_ISSN", $_POST["publication_ISSN"]);
    update_post_meta($post->ID, "publication_URL", $_POST["publication_URL"]);
    update_post_meta($post->ID, "publication_volume", $_POST["publication_volume"]);

}
?>
