<?php

    function admin_init_article(){
        add_meta_box("publicationInfo-meta-article", "Article Details", "meta_options_article", "publication", "side", "low");
    }


    function meta_options_article(){
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
        $publication_number = $custom["publication_number"][0];
        $publication_note = $custom["publication_note"][0];
        $publication_key = $custom["publication_key"][0];
        $publication_month = $custom["publication_month"][0];
        $publication_year = $custom["publication_year"][0];
?>
    <label>Title: </label><input name="publication_title" value="<?php echo $publication_title; ?>" />
  <br><br>  <label>Author: </label><input name="publication_author" value="<?php echo $publication_author; ?>" />
  <br><br>  <label>Journal: </label><input name="publication_journal" value="<?php echo $publication_journal; ?>" />
<br><br>  <label>Year: </label><input name="publication_year" value="<?php echo $publication_year; ?>" />
<br><br>  <label>Month: </label><input name="publication_month" value="<?php echo $publication_month; ?>" />
  <br><br>  <label>Number: </label><input name="publication_number" value="<?php echo $publication_number; ?>" />
<br><br>  <label>Volume: </label><input name="publication_volume" value="<?php echo $publication_volume; ?>" />
  <br><br>  <label>Pages: </label><input name="publication_pages" value="<?php echo $publication_pages; ?>" />
<br><br>  <label>Note: </label><input name="publication_note" value="<?php echo $publication_note; ?>" />
<br><br>  <label>Key: </label><input name="publication_key" value="<?php echo $publication_key; ?>" />
  <br><br>  <label>DOI: </label><input name="publication_DOI" value="<?php echo $publication_DOI; ?>" />
  <br><br>  <label>ISSN: </label><input name="publication_ISSN" value="<?php echo $publication_ISSN; ?>" />
  <br><br>  <label>URL: </label><input name="publication_URL" value="<?php echo $publication_URL; ?>" />
<?php
    }


function save_publication_details_article(){
    global $post;
    update_post_meta($post->ID, "publication_title", $_POST["publication_title"]);
    update_post_meta($post->ID, "publication_author", $_POST["publication_author"]);
    update_post_meta($post->ID, "publication_journal", $_POST["publication_journal"]);
    update_post_meta($post->ID, "publication_pages", $_POST["publication_pages"]);
    update_post_meta($post->ID, "publication_DOI", $_POST["publication_DOI"]);
    update_post_meta($post->ID, "publication_ISSN", $_POST["publication_ISSN"]);
    update_post_meta($post->ID, "publication_URL", $_POST["publication_URL"]);
    update_post_meta($post->ID, "publication_volume", $_POST["publication_volume"]);
    update_post_meta($post->ID, "publication_month", $_POST["publication_month"]);
    update_post_meta($post->ID, "publication_note", $_POST["publication_note"]);
    update_post_meta($post->ID, "publication_number", $_POST["publication_number"]);
    update_post_meta($post->ID, "publication_key", $_POST["publication_key"]);
    update_post_meta($post->ID, "publication_year", $_POST["publication_year"]);

}
?>
<?php
    function admin_init_book(){
        add_meta_box("publicationInfo-meta-book", "Book Details", "meta_options_book", "publication", "side", "low");
    }


    function meta_options_book(){
        global $post;
        $custom = get_post_custom($post->ID);
        $book_title = $custom["book_title"][0];
        $book_author = $custom["book_author"][0];
        $book_editor = $custom["book_editor"][0];
        $book_publisher = $custom["book_publisher"][0];
        $book_address = $custom["book_address"][0];
        $book_pages = $custom["book_pages"][0];
        $book_edition = $custom["book_edition"][0];
        $book_volume = $custom["book_volume"][0];
        $book_number = $custom["book_number"][0];
        $book_note = $custom["book_note"][0];
        $book_key = $custom["book_key"][0];
        $book_month = $custom["book_month"][0];
        $book_year = $custom["book_year"][0];
        $book_series = $custom["book_series"][0];
?>
    <label>Title: </label><input name="book_title" value="<?php echo $book_title; ?>" />
  <br><br>  <label>Author: </label><input name="book_author" value="<?php echo $book_author; ?>" />
  <br><br>  <label>Editor: </label><input name="book_editor" value="<?php echo $book_editor; ?>" />
<br><br>  <label>Year: </label><input name="book_year" value="<?php echo $book_year; ?>" />
<br><br>  <label>Month: </label><input name="book_month" value="<?php echo $book_month; ?>" />
  <br><br>  <label>Number: </label><input name="book_number" value="<?php echo $book_number; ?>" />
<br><br>  <label>Volume: </label><input name="book_volume" value="<?php echo $book_volume; ?>" />
  <br><br>  <label>Pages: </label><input name="book_pages" value="<?php echo $book_pages; ?>" />
<br><br>  <label>Note: </label><input name="book_note" value="<?php echo $book_note; ?>" />
<br><br>  <label>Key: </label><input name="book_key" value="<?php echo $book_key; ?>" />
  <br><br>  <label>Series: </label><input name="book_series" value="<?php echo $book_series; ?>" />
  <br><br>  <label>Publisher: </label><input name="book_publisher" value="<?php echo $book_publisher; ?>" />
  <br><br>  <label>Edition: </label><input name="book_edition" value="<?php echo $book_edition; ?>" />
 <br><br>  <label>Address: </label><input name="book_address" value="<?php echo $book_address; ?>" />
<?php
    }


function save_publication_details_book(){
    global $post;
    update_post_meta($post->ID, "book_title", $_POST["book_title"]);
    update_post_meta($post->ID, "book_author", $_POST["book_author"]);
    update_post_meta($post->ID, "book_volume", $_POST["book_volume"]);
    update_post_meta($post->ID, "book_pages", $_POST["book_pages"]);
    update_post_meta($post->ID, "book_series", $_POST["book_series"]);
    update_post_meta($post->ID, "book_publisher", $_POST["book_publisher"]);
    update_post_meta($post->ID, "book_edition", $_POST["book_edition"]);
    update_post_meta($post->ID, "book_volume", $_POST["book_volume"]);
    update_post_meta($post->ID, "book_month", $_POST["book_month"]);
    update_post_meta($post->ID, "book_note", $_POST["book_note"]);
    update_post_meta($post->ID, "book_number", $_POST["book_number"]);
    update_post_meta($post->ID, "book_key", $_POST["book_key"]);
    update_post_meta($post->ID, "book_year", $_POST["book_year"]);
    update_post_meta($post->ID, "book_address", $_POST["book_address"]);

}
?>

<?php
    function admin_init_booklet(){
        add_meta_box("publicationInfo-meta-booklet", " Booklet Details", "meta_options_booklet", "publication", "side", "low");
    }


    function meta_options_booklet(){
        global $post;
        $custom = get_post_custom($post->ID);
        $booklet_title = $custom["booklet_title"][0];
        $booklet_author = $custom["booklet_author" ][0];
        $booklet_address = $custom["booklet_address"][0];
        $booklet_howpublished = $custom["booklet_howpublished"][0];
        $booklet_note = $custom["booklet_note"][0];
        $booklet_key = $custom["booklet_key"][0];
        $booklet_month = $custom["booklet_month"][0];
        $booklet_year = $custom["booklet_year"][0];
?>
    <label>Title: </label><input name="booklet_title" value="<?php echo $booklet_title; ?>" />
  <br><br>  <label>Author: </label><input name="booklet_author" value="<?php echo $booklet_author; ?>" />
<br><br>  <label>Year: </label><input name="booklet_year" value="<?php echo $booklet_year; ?>" />
<br><br>  <label>Month: </label><input name="booklet_month" value="<?php echo $booklet_month; ?>" />
  <br><br>  <label>How Published: </label><input name="booklet_howpublished" value="<?php echo $booklet_howpublished; ?>" />
<br><br>  <label>Note: </label><input name="booklet_note" value="<?php echo $booklet_note; ?>" />
<br><br>  <label>Key: </label><input name="booklet_key" value="<?php echo $booklet_key; ?>" />
 <br><br>  <label>Address: </label><input name="booklet_address" value="<?php echo $booklet_address; ?>" />
<?php
    }


function save_publication_details_booklet(){
    global $post;
    update_post_meta($post->ID, "booklet_title", $_POST["booklet_title"]);
    update_post_meta($post->ID, "booklet_author", $_POST["booklet_author"]);
       update_post_meta($post->ID, "booklet_month", $_POST["booklet_month"]);
    update_post_meta($post->ID, "booklet_note", $_POST["booklet_note"]);
    update_post_meta($post->ID, "booklet_howpublished", $_POST["booklet_howpublished"]);
    update_post_meta($post->ID, "booklet_key", $_POST["booklet_key"]);
    update_post_meta($post->ID, "booklet_year", $_POST["booklet_year"]);
    update_post_meta($post->ID, "booklet_address", $_POST["booklet_address"]);

}
?>

