<?php
//function to add the meta-box "article details" in the publication CP with all the items specified in the meta_option_article + positioning
    function admin_init_article(){
        add_meta_box("publicationInfo-meta-article", "Article Details", "meta_options_article", "publication", "side", "low");
    }. 


    function meta_options_article(){
        global $post;
        $custom = get_post_custom($post->ID); //Retrieve post meta fields, based on post ID
        if (isset($custom["publication_title"][0])){ //check if there exist content within "publication_title"
                $publication_title = $custom["publication_title"][0];} //if yes keeps it
        else{
                $publication_title  ="";} //otherwise set it as empty
        if (isset($custom["publication_author"][0])){
                $publication_author = $custom["publication_author"][0];}
        else{
                $publication_author =  "";}
        if (isset($custom["publication_journal"][0])){
                $publication_journal = $custom["publication_journal"][0];}
        else {
                $publication_journal ="";}
        if (isset($custom["publication_DOI"][0])){
                $publication_DOI = $custom["publication_DOI"][0];}
        else{
                $publication_DOI ="";}
        if (isset($custom["publication_ISSN"][0])){
                $publication_ISSN = $custom["publication_ISSN"][0];}
        else {
                $publication_ISSN = "";}
        if (isset($custom["publication_pages"][0])){
                $publication_pages = $custom["publication_pages"][0];}
        else{
                $publication_pages  = "";}
        if (isset($custom["publication_URL"][0])){
                $publication_URL = $custom["publication_URL"][0];}
        else{
                $publication_URL ="";}
        if (isset($custom["publication_volume"][0])){
                $publication_volume = $custom["publication_volume"][0];}
        else{
                $publication_volume="";}
        if (isset($custom["publication_number"][0])){
                $publication_number = $custom["publication_number"][0];}
        else{
                $publication_number  ="";}
         if (isset($custom["publication_note"][0])){
                 $publication_note = $custom["publication_note"][0];}
         else{
                 $publication_note =  "";}
         if (isset($custom["publication_key"][0])){
                 $publication_key = $custom["publication_key"][0];}
         else{
                 $publication_key ="";}
         if (isset($custom["publication_month"][0])){
                 $publication_month = $custom["publication_month"][0];}
         else{
                 $publication_month="";}
         if (isset($custom["publication_year"][0])){
                 $publication_year = $custom["publication_year"][0];}
         else{
                 $publication_year="";}
        
        //create the boxes for the userto enter values for each article detail item
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

//update the value of each item of article details according to the user entry
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
         if (isset($custom["book_title"][0])){
                 $book_title = $custom["book_title"][0];}
         else{
                 $book_title="";}
        if (isset($custom["book_author"][0])){
                $book_author = $custom["book_author"][0];}
        else{
                $book_author="";}
        if (isset($custom["book_editor"][0])){
                $book_editor = $custom["book_editor"][0];}
                
        if (isset($custom["book_publisher"][0])){
                $book_publisher = $custom["book_publisher"][0];}
        else{
                $book_publisher="";}
        if (isset($custom["book_address"][0])){
                $book_address = $custom["book_address"][0];}
        else{
                $book_address="";}
        if (isset($custom["book_pages"][0])){
                $book_pages = $custom["book_pages"][0];}
        else{
                $book_pages="";}
        if (isset($custom["book_edition"][0])){
                $book_edition = $custom["book_edition"][0];}
        else{
                $book_edition="";}
        if (isset($custom["book_volume"][0])){
                $book_volume = $custom["book_volume"][0];}
        else{
                $book_volume="";}
        if (isset($custom["book_number"][0])){
                $book_number = $custom["book_number"][0];}
        else{
                $book_number="";}
        if (isset($custom["book_note"][0])){
                $book_note = $custom["book_note"][0];}
        else{
                $book_note="";}
        if (isset($custom["book_key"][0])){
                $book_key = $custom["book_key"][0];}
        else{
                $book_key="";}
        if (isset($custom["book_month"][0])){
                $book_month = $custom["book_month"][0];}
        else{
                $book_month="";}
        if (isset($custom["book_year"][0])){
                $book_year = $custom["book_year"][0];}
        else{
                $book_year="";}
        if (isset($custom["book_series"][0])){
                $book_series = $custom["book_series"][0];}
        else{
                $book_series="";}
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
<?php /*
    function admin_init_booklet(){
        add_meta_box("publicationInfo-meta-booklet", "Booklet Details", "meta_options_booklet", "publication", "side", "low");
    }


    function meta_options_booklet(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["booklet_title"][0])){
                $booklet_title = $custom["booklet_title"][0];}
        else{
                $booklet_title="";}
        if (isset($custom["booklet_author"][0])){
                $booklet_author = $custom["booklet_author"][0];}
        else{
                $booklet_author="";}
        if (isset($custom["booklet_address"][0])){
                $booklet_address = $custom["booklet_address"][0];}
        else{
                $booklet_address="";}
        if (isset($custom["booklet_howpublished"][0])){
                $booklet_howpublished = $custom["booklet_howpublished"][0];}
        else{
                $booklet_howpublished="";}
        if (isset($custom["booklet_note"][0])){
                $booklet_note = $custom["booklet_note"][0];}
        else{
                $booklet_note="";}
        if (isset($custom["booklet_key"][0])){
                $booklet_key = $custom["booklet_key"][0];}
        else{
                $booklet_key="";}
        if (isset($custom["booklet_month"][0])){
                $booklet_month = $custom["booklet_month"][0];}
        else{
                $booklet_month="";}
        if (isset($custom["booklet_year"][0])){
                $booklet_year = $custom["booklet_year"][0];}
        else{
                $booklet_year="";}
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
<?php
    function admin_init_inbook(){
        add_meta_box("publicationInfo-meta-inbook", "In Book Details", "meta_options_inbook", "publication", "side", "low");
    }


    function meta_options_inbook(){
        global $post;
        $custom = get_post_custom($post->ID);
        if(isset( $custom["inbook_title"][0] )){
                $inbook_title = $custom["inbook_title"][0];}
        else {
                $inbook_title = "";}
        if(isset( $custom["inbook_author"][0] )){
                $inbook_author = $custom["inbook_author"][0];}
        else {
                $inbook_author = "";}
        if(isset( $custom["inbook_editor"][0] )){
                $inbook_editor = $custom["inbook_editor"][0];}
        else {
                $inbook_editor = "";}
        if(isset( $custom["inbook_publisher"][0] )){
                $inbook_publisher = $custom["inbook_publisher"][0];}
        else {
                $inbook_publisher = "";}
        if(isset( $custom["inbook_address"][0] )){
                $inbook_address = $custom["inbook_address"][0];}
        else {
                $inbook_address = "";}
        if(isset( $custom["inbook_pages"][0] )){
                $inbook_pages = $custom["inbook_pages"][0];}
        else {
                $inbook_pages = "";}
        if(isset( $custom["inbook_edition"][0] )){
                $inbook_edition = $custom["inbook_edition"][0];}
        else {
                $inbook_edition = "";}
        if(isset( $custom["inbook_volume"][0] )){
                $inbook_volume = $custom["inbook_volume"][0];}
        else {
                $inbook_volume = "";}
        if(isset( $custom["inbook_number"][0] )){
                $inbook_number = $custom["inbook_number"][0];}
        else {
                $inbook_number = "";}
        if(isset( $custom["inbook_note"][0] )){
                $inbook_note = $custom["inbook_note"][0];}
        else {
                $inbook_note = "";}
        if(isset( $custom["inbook_key"][0] )){
                $inbook_key = $custom["inbook_key"][0];}
        else {
                $inbook_key = "";}
        if(isset( $custom["inbook_month"][0] )){
                $inbook_month = $custom["inbook_month"][0];}
        else {
                $inbook_month = "";}
        if(isset( $custom["inbook_year"][0] )){
                $inbook_year = $custom["inbook_year"][0];}
        else {
                $inbook_year = "";}
        if(isset( $custom["inbook_series"][0] )){
                $inbook_series = $custom["inbook_series"][0];}
        else {
                $inbook_series = "";}
        if(isset( $custom["inbook_chapter"][0] )){
                $inbook_chapter = $custom["inbook_chapter"][0];}
        else {
                $inbook_chapter = "";}
        if(isset( $custom["inbook_type"][0] )){
                $inbook_type = $custom["inbook_type"][0];}
           else {
                $inbook_type = "";}

?>
    <label>Title: </label><input name="inbook_title" value="<?php echo $inbook_title; ?>" />
  <br><br>  <label>Author: </label><input name="inbook_author" value="<?php echo $inbook_author; ?>" />
  <br><br>  <label>Editor: </label><input name="inbook_editor" value="<?php echo $inbook_editor; ?>" />
<br><br>  <label>Year: </label><input name="inbook_year" value="<?php echo $inbook_year; ?>" />
<br><br>  <label>Month: </label><input name="inbook_month" value="<?php echo $inbook_month; ?>" />
  <br><br>  <label>Number: </label><input name="inbook_number" value="<?php echo $inbook_number; ?>" />
<br><br>  <label>Volume: </label><input name="inbook_volume" value="<?php echo $inbook_volume; ?>" />
  <br><br>  <label>Pages: </label><input name="inbook_pages" value="<?php echo $inbook_pages; ?>" />
<br><br>  <label>Note: </label><input name="inbook_note" value="<?php echo $inbook_note; ?>" />
<br><br>  <label>Key: </label><input name="inbook_key" value="<?php echo $inbook_key; ?>" />
  <br><br>  <label>Series: </label><input name="inbook_series" value="<?php echo $inbook_series; ?>" />
  <br><br>  <label>Publisher: </label><input name="inbook_publisher" value="<?php echo $inbook_publisher; ?>" />
  <br><br>  <label>Edition: </label><input name="inbook_edition" value="<?php echo $inbook_edition; ?>" />
 <br><br>  <label>Address: </label><input name="inbook_address" value="<?php echo $inbook_address; ?>" />
<br><br>  <label>Type: </label><input name="inbook_type" value="<?php echo $inbook_type; ?>" />
<br><br>  <label>Chapter: </label><input name="inbook_chapter" value="<?php echo $inbook_chapter; ?>" />
<?php
    }


function save_publication_details_inbook(){
    global $post;
    update_post_meta($post->ID, "inbook_title", $_POST["inbook_title"]);
    update_post_meta($post->ID, "inbook_author", $_POST["inbook_author"]);
    update_post_meta($post->ID, "inbook_volume", $_POST["inbook_volume"]);
    update_post_meta($post->ID, "inbook_pages", $_POST["inbook_pages"]);
    update_post_meta($post->ID, "inbook_series", $_POST["inbook_series"]);
    update_post_meta($post->ID, "inbook_publisher", $_POST["inbook_publisher"]);
    update_post_meta($post->ID, "inbook_edition", $_POST["inbook_edition"]);
    update_post_meta($post->ID, "inbook_volume", $_POST["inbook_volume"]);
    update_post_meta($post->ID, "inbook_month", $_POST["inbook_month"]);
    update_post_meta($post->ID, "inbook_note", $_POST["inbook_note"]);
    update_post_meta($post->ID, "inbook_number", $_POST["inbook_number"]);
    update_post_meta($post->ID, "inbook_key", $_POST["inbook_key"]);
    update_post_meta($post->ID, "inbook_year", $_POST["inbook_year"]);
    update_post_meta($post->ID, "inbook_address", $_POST["inbook_address"]);
    update_post_meta($post->ID, "inbook_type", $_POST["inbook_type"]);
    update_post_meta($post->ID, "inbook_chapter", $_POST["inbook_chapter"]);
}
?>
<?php
    function admin_init_incollection(){
        add_meta_box("publicationInfo-meta-incollection", "In Collection Details", "meta_options_incollection", "publication", "side", "low");
    }


    function meta_options_incollection(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["incollection_title"][0])){
                $incollection_title = $custom["incollection_title"][0];}
        else{
                $incollection_title="";}
        if (isset($custom["incollection_author"][0])){
                $incollection_author = $custom["incollection_author"][0];}
        else{
                $incollection_author="";}
        if (isset($custom["incollection_editor"][0])){
                $incollection_editor = $custom["incollection_editor"][0];}
        else{
                $incollection_editor="";}
        if (isset($custom["incollection_publisher"][0])){
                $incollection_publisher = $custom["incollection_publisher"][0];}
        else{
                $incollection_publisher="";}
        if (isset($custom["incollection_address"][0])){
                $incollection_address = $custom["incollection_address"][0];}
        else{
                $incollection_address="";}
        if (isset($custom["incollection_pages"][0])){
                $incollection_pages = $custom["incollection_pages"][0];}
        else{
                $incollection_pages="";}
        if (isset($custom["incollection_edition"][0])){
                $incollection_edition = $custom["incollection_edition"][0];}
        else{
                $incollection_edition="";}
        if (isset($custom["incollection_volume"][0])){
                $incollection_volume = $custom["incollection_volume"][0];}
        else{
                $incollection_volume="";}
        if (isset($custom["incollection_number"][0])){
                $incollection_number = $custom["incollection_number"][0];}
        else{
                $incollection_number="";}
        if (isset($custom["incollection_note"][0])){
                $incollection_note = $custom["incollection_note"][0];}
        else{
                $incollection_note="";}
        if (isset($custom["incollection_key"][0])){
                $incollection_key = $custom["incollection_key"][0];}
        else{
                $incollection_key="";}
        if (isset($custom["incollection_month"][0])){
                $incollection_month = $custom["incollection_month"][0];}
        else{
                $incollection_month="";}
        if (isset($custom["incollection_year"][0])){
                $incollection_year = $custom["incollection_year"][0];}
        else{
                $incollection_year="";}
        if (isset($custom["incollection_series"][0])){
                $incollection_series = $custom["incollection_series"][0];}
        else{
                $incollection_series="";}
        if (isset($custom["incollection_chapter"][0])){
                $incollection_chapter = $custom["incollection_chapter"][0];}
        else{
                $incollection_chapter="";}
        if (isset($custom["incollection_type"][0])){
                $incollection_type = $custom["incollection_type"][0];}
         else{
                $incollection_type="";}
        if (isset($custom["incollection_booktitle"][0])){
         $incollection_booktitle = $custom["incollection_booktitle"][0];}

?>
    <label>Title: </label><input name="incollection_title" value="<?php echo $incollection_title; ?>" />
  <br><br>  <label>Author: </label><input name="incollection_author" value="<?php echo $incollection_author; ?>" />
  <br><br>  <label>Editor: </label><input name="incollection_editor" value="<?php echo $incollection_editor; ?>" />
<br><br>  <label>Year: </label><input name="incollection_year" value="<?php echo $incollection_year; ?>" />
<br><br>  <label>Month: </label><input name="incollection_month" value="<?php echo $incollection_month; ?>" />
  <br><br>  <label>Number: </label><input name="incollection_number" value="<?php echo $incollection_number; ?>" />
<br><br>  <label>Volume: </label><input name="incollection_volume" value="<?php echo $incollection_volume; ?>" />
  <br><br>  <label>Pages: </label><input name="incollection_pages" value="<?php echo $incollection_pages; ?>" />
<br><br>  <label>Note: </label><input name="incollection_note" value="<?php echo $incollection_note; ?>" />
<br><br>  <label>Key: </label><input name="incollection_key" value="<?php echo $incollection_key; ?>" />
  <br><br>  <label>Series: </label><input name="incollection_series" value="<?php echo $incollection_series; ?>" />
  <br><br>  <label>Publisher: </label><input name="incollection_publisher" value="<?php echo $incollection_publisher; ?>" />
  <br><br>  <label>Edition: </label><input name="incollection_edition" value="<?php echo $incollection_edition; ?>" />
 <br><br>  <label>Address: </label><input name="incollection_address" value="<?php echo $incollection_address; ?>" />
<br><br>  <label>Type: </label><input name="incollection_type" value="<?php echo $incollection_type; ?>" />
<br><br>  <label>Chapter: </label><input name="incollection_chapter" value="<?php echo $incollection_chapter; ?>" />
<br><br>  <label>BookTitle: </label><input name="incollection_booktitle" value="<?php echo $incollection_booktitle; ?>" />
<?php
    }


function save_publication_details_incollection(){
        global $post;

    update_post_meta($post->ID, "incollection_title", $_POST["incollection_title"]);
    update_post_meta($post->ID, "incollection_author", $_POST["incollection_author"]);
    update_post_meta($post->ID, "incollection_volume", $_POST["incollection_volume"]);
    update_post_meta($post->ID, "incollection_pages", $_POST["incollection_pages"]);
    update_post_meta($post->ID, "incollection_series", $_POST["incollection_series"]);
    update_post_meta($post->ID, "incollection_publisher", $_POST["incollection_publisher"]);
    update_post_meta($post->ID, "incollection_edition", $_POST["incollection_edition"]);
    update_post_meta($post->ID, "incollection_volume", $_POST["incollection_volume"]);
    update_post_meta($post->ID, "incollection_month", $_POST["incollection_month"]);
    update_post_meta($post->ID, "incollection_note", $_POST["incollection_note"]);
    update_post_meta($post->ID, "incollection_number", $_POST["incollection_number"]);
    update_post_meta($post->ID, "incollection_key", $_POST["incollection_key"]);
    update_post_meta($post->ID, "incollection_year", $_POST["incollection_year"]);
    update_post_meta($post->ID, "incollection_address", $_POST["incollection_address"]);
    update_post_meta($post->ID, "incollection_type", $_POST["incollection_type"]);
    update_post_meta($post->ID, "incollection_chapter", $_POST["incollection_chapter"]);
    update_post_meta($post->ID, "incollection_booktitle", $_POST["incollection_booktitle"]);
}
?>
<?php
    function admin_init_inproceedings(){
        add_meta_box("publicationInfo-meta-inproceedings", "inproceedings Details", "meta_options_inproceedings", "publication", "side", "low");
    }


    function meta_options_inproceedings(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["inproceedings_title"][0])){
                $inproceedings_title = $custom["inproceedings_title"][0];}
        else{
                $inproceedings_title="";}
        if (isset($custom["inproceedings_author"][0])){
                $inproceedings_author = $custom["inproceedings_author"][0];}
        else{
                $inproceedings_author="";}
        if (isset($custom["inproceedings_editor"][0])){
                $inproceedings_editor = $custom["inproceedings_editor"][0];}
        else{
                $inproceedings_editor="";}
        if (isset($custom["inproceedings_publisher"][0])){
                $inproceedings_publisher = $custom["inproceedings_publisher"][0];}
        else{
                $inproceedings_publisher="";}
        if (isset($custom["inproceedings_address"][0])){
                $inproceedings_address = $custom["inproceedings_address"][0];}
        else{
                $inproceedings_address="";}
        if (isset($custom["inproceedings_pages"][0])){
                $inproceedings_pages = $custom["inproceedings_pages"][0];}
        else{
                $inproceedings_pages="";}
        if (isset($custom["inproceedings_organization"][0])){
                $inproceedings_organization = $custom["inproceedings_organization"][0];}
        else{
                $inproceedings_organization="";}
        if (isset($custom["inproceedings_volume"][0])){
                $inproceedings_volume = $custom["inproceedings_volume"][0];}
        else{
                $inproceedings_volume="";}
        if (isset($custom["inproceedings_number"][0])){
                $inproceedings_number = $custom["inproceedings_number"][0];}
        else{
                $inproceedings_number="";}
        if (isset($custom["inproceedings_note"][0])){
                $inproceedings_note = $custom["inproceedings_note"][0];}
        else{
                $inproceedings_note="";}
        if (isset($custom["inproceedings_key"][0])){
                $inproceedings_key = $custom["inproceedings_key"][0];}
        else{
                $inproceedings_key="";}
        if (isset($custom["inproceedings_month"][0])){
                $inproceedings_month = $custom["inproceedings_month"][0];}
        else{
                $inproceedings_month="";}
        if (isset($custom["inproceedings_year"][0])){
                $inproceedings_year = $custom["inproceedings_year"][0];}
        else{
                $inproceedings_year="";}
        if (isset($custom["inproceedings_series"][0])){
                $inproceedings_series = $custom["inproceedings_series"][0];}
        else{
                $inproceedins_series="";}
        if (isset($custom["inproceedings_booktitle"][0])){
                $inproceedings_booktitle = $custom["inproceedings_booktitle"][0];}
        else{
                $inproceedings_booktitle="";}
        ?>
    <label>Title: </label><input name="inproceedings_title" value="<?php echo $inproceedings_title; ?>" />
  <br><br>  <label>Author: </label><input name="inproceedings_author" value="<?php echo $inproceedings_author; ?>" />
  <br><br>  <label>Editor: </label><input name="inproceedings_editor" value="<?php echo $inproceedings_editor; ?>" />
<br><br>  <label>Year: </label><input name="inproceedings_year" value="<?php echo $inproceedings_year; ?>" />
<br><br>  <label>Month: </label><input name="inproceedings_month" value="<?php echo $inproceedings_month; ?>" />
  <br><br>  <label>Number: </label><input name="inproceedings_number" value="<?php echo $inproceedings_number; ?>" />
<br><br>  <label>Volume: </label><input name="inproceedings_volume" value="<?php echo $inproceedings_volume; ?>" />
  <br><br>  <label>Pages: </label><input name="inproceedings_pages" value="<?php echo $inproceedings_pages; ?>" />
<br><br>  <label>Note: </label><input name="inproceedings_note" value="<?php echo $inproceedings_note; ?>" />
<br><br>  <label>Key: </label><input name="inproceedings_key" value="<?php echo $inproceedings_key; ?>" />
  <br><br>  <label>Series: </label><input name="inproceedings_series" value="<?php echo $inproceedings_series; ?>" />
  <br><br>  <label>Publisher: </label><input name="inproceedings_publisher" value="<?php echo $inproceedings_publisher; ?>" />
  <br><br>  <label>Organization: </label><input name="inproceedings_organization" value="<?php echo $inproceedings_organization; ?>" />
 <br><br>  <label>Address: </label><input name="inproceedings_address" value="<?php echo $inproceedings_address; ?>" />
<br><br>  <label>BookTitle: </label><input name="inproceedings_booktitle" value="<?php echo $inproceedings_booktitle; ?>" />
<?php
    }


function save_publication_details_inproceedings(){
    global $post;
    update_post_meta($post->ID, "inproceedings_title", $_POST["inproceedings_title"]);
    update_post_meta($post->ID, "inproceedings_author", $_POST["inproceedings_author"]);
    update_post_meta($post->ID, "inproceedings_volume", $_POST["inproceedings_volume"]);
    update_post_meta($post->ID, "inproceedings_pages", $_POST["inproceedings_pages"]);
    update_post_meta($post->ID, "inproceedings_series", $_POST["inproceedings_series"]);
    update_post_meta($post->ID, "inproceedings_publisher", $_POST["inproceedings_publisher"]);
    update_post_meta($post->ID, "inproceedings_organization", $_POST["inproceedings_organization"]);
    update_post_meta($post->ID, "inproceedings_volume", $_POST["inproceedings_volume"]);
    update_post_meta($post->ID, "inproceedings_month", $_POST["inproceedings_month"]);
    update_post_meta($post->ID, "inproceedings_note", $_POST["inproceedings_note"]);
    update_post_meta($post->ID, "inproceedings_number", $_POST["inproceedings_number"]);
    update_post_meta($post->ID, "inproceedings_key", $_POST["inproceedings_key"]);
    update_post_meta($post->ID, "inproceedings_year", $_POST["inproceedings_year"]);
    update_post_meta($post->ID, "inproceedings_address", $_POST["inproceedings_address"]);
    update_post_meta($post->ID, "inproceedings_booktitle", $_POST["inproceedings_booktitle"]);
}
?>
<?php
    function admin_init_manual(){
        add_meta_box("publicationInfo-meta-manual", "manual Details", "meta_options_manual", "publication", "side", "low");
    }


    function meta_options_manual(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["manual_title"][0])){
                $manual_title = $custom["manual_title"][0];}
        else{
                $manual_title="";}
        if (isset($custom["manual_author"][0])){
                $manual_author = $custom["manual_author "][0];}
        else{
                $manual_author="";}
        if (isset($custom["manual_address"][0])){
                $manual_address = $custom["manual_address"][0];}
        else{
                $manual_address="";}
        if (isset($custom["manual_organization"][0])){
                $manual_organization = $custom["manual_organization"][0];}
        else{
                $manual_organization="";}
        if (isset($custom["manual_note"][0])){
                $manual_note = $custom["manual_note"][0];}
        else{
                $manual_note="";}
        if (isset($custom["manual_key"][0])){
                $manual_key = $custom["manual_key"][0];}
        else{
                $manual_key="";}
        if (isset($custom["manual_month"][0])){
                $manual_month = $custom["manual_month"][0];}
        else{
                $manual_month="";}
        if (isset($custom["manual_year"][0])){
                $manual_year = $custom["manual_year"][0];}
        else{
                $manual_year="";}
        if (isset($custom["manual_edition"][0])){
                $manual_edition = $custom["manual_edition"][0];}
        else{
                $manual_edition="";}


?>
 <label>Title: </label><input name="manual_title" value="<?php echo $manual_title; ?>" />
  <br><br>  <label>Author: </label><input name="manual_author" value="<?php echo $manual_author; ?>" />
  <br><br>  <label>Edition: </label><input name="manual_edition" value="<?php echo $manual_edition; ?>" />
<br><br>  <label>Year: </label><input name="manual_year" value="<?php echo $manual_year; ?>" />
<br><br>  <label>Month: </label><input name="manual_month" value="<?php echo $manual_month; ?>" />
<br><br>  <label>Note: </label><input name="manual_note" value="<?php echo $manual_note; ?>" />
<br><br>  <label>Key: </label><input name="manual_key" value="<?php echo $manual_key; ?>" />
  <br><br>  <label>Organization: </label><input name="manual_organization" value="<?php echo $manual_organization; ?>" />
 <br><br>  <label>Address: </label><input name="manual_address" value="<?php echo $manual_address; ?>" />
<?php
    }


function save_publication_details_manual(){
    global $post;
    update_post_meta($post->ID, "manual_title", $_POST["manual_title"]);
    update_post_meta($post->ID, "manual_author", $_POST["manual_author"]);
    update_post_meta($post->ID, "manual_organization", $_POST["manual_organization"]);
    update_post_meta($post->ID, "manual_month", $_POST["manual_month"]);
    update_post_meta($post->ID, "manual_note", $_POST["manual_note"]);
    update_post_meta($post->ID, "manual_key", $_POST["manual_key"]);
    update_post_meta($post->ID, "manual_year", $_POST["manual_year"]);
    update_post_meta($post->ID, "manual_address", $_POST["manual_address"]);
update_post_meta($post->ID, "manual_edition", $_POST["manual_edition"]);
}
?>
<?php
    function admin_init_mastersthesis(){
        add_meta_box("publicationInfo-meta-mastersthesis", "mastersthesis Details", "meta_options_mastersthesis", "publication", "side", "low");
    }


    function meta_options_mastersthesis(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["mastersthesis_title"][0])){
                $mastersthesis_title = $custom["mastersthesis_title"][0];}
        else{
                $mastersthesis_title="";}
        if (isset($custom["mastersthesis_author"][0])){
                $mastersthesis_author = $custom["mastersthesis_author "][0];}
        else{
                $mastersthesis_author="";}
        if (isset($custom["mastersthesis_address"][0])){
                $mastersthesis_address = $custom["mastersthesis_address"][0];}
        else{
              $mastersthesis_address="";}
        if (isset($custom["mastersthesis_school"][0])){
                $mastersthesis_school = $custom["mastersthesis_school"][0];}
        else{
                $mastersthesis_school="";}
        if (isset($custom["mastersthesis_note"][0])){
                $mastersthesis_note = $custom["mastersthesis_note"][0];}
        else{
                $mastersthesis_note="";}
        if (isset($custom["mastersthesis_key"][0])){
                $mastersthesis_key = $custom["mastersthesis_key"][0];}
        else{
                $mastersthesis_key="";}
        if (isset($custom["mastersthesis_month"][0])){
                $mastersthesis_month = $custom["mastersthesis_month"][0];}
        else{
                $mastersthesis_month="";}
        if (isset($custom["mastersthesis_year"][0])){
                $mastersthesis_year = $custom["mastersthesis_year"][0];}
        else{
                $masterthesis_year="";}
        if (isset($custom["mastersthesis_type"][0])){
                $mastersthesis_type = $custom["mastersthesis_type"][0];}
        else{
                $mastersthesis="";}


?>
<label>Title: </label><input name="mastersthesis_title" value="<?php echo $mastersthesis_title; ?>" />
  <br><br>  <label>Author: </label><input name="mastersthesis_author" value="<?php echo $mastersthesis_author; ?>" />
  <br><br>  <label>type: </label><input name="mastersthesis_type" value="<?php echo $mastersthesis_type; ?>" />
<br><br>  <label>Year: </label><input name="mastersthesis_year" value="<?php echo $mastersthesis_year; ?>" />
<br><br>  <label>Month: </label><input name="mastersthesis_month" value="<?php echo $mastersthesis_month; ?>" />
<br><br>  <label>Note: </label><input name="mastersthesis_note" value="<?php echo $mastersthesis_note; ?>" />
<br><br>  <label>Key: </label><input name="mastersthesis_key" value="<?php echo $mastersthesis_key; ?>" />
  <br><br>  <label>school: </label><input name="mastersthesis_school" value="<?php echo $mastersthesis_school; ?>" />
 <br><br>  <label>Address: </label><input name="mastersthesis_address" value="<?php echo $mastersthesis_address; ?>" />
<?php
    }


function save_publication_details_mastersthesis(){
    global $post;
    update_post_meta($post->ID, "mastersthesis_title", $_POST["mastersthesis_title"]);
    update_post_meta($post->ID, "mastersthesis_author", $_POST["mastersthesis_author"]);
    update_post_meta($post->ID, "mastersthesis_school", $_POST["mastersthesis_school"]);
    update_post_meta($post->ID, "mastersthesis_month", $_POST["mastersthesis_month"]);
    update_post_meta($post->ID, "mastersthesis_note", $_POST["mastersthesis_note"]);
    update_post_meta($post->ID, "mastersthesis_key", $_POST["mastersthesis_key"]);
    update_post_meta($post->ID, "mastersthesis_year", $_POST["mastersthesis_year"]);
    update_post_meta($post->ID, "mastersthesis_address", $_POST["mastersthesis_address"]);
update_post_meta($post->ID, "mastersthesis_type", $_POST["mastersthesis_type"]);
}
?>
<?php
    function admin_init_phdthesis(){
        add_meta_box("publicationInfo-meta-phdthesis", "phdthesis Details", "meta_options_phdthesis", "publication", "side", "low");
    }


    function meta_options_phdthesis(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["phdthesis_title"][0])){
                $phdthesis_title = $custom["phdthesis_title"][0];}
        else{
                $phdthesis_title ="";}
        if (isset($custom["phdthesis_author"][0])){
                $phdthesis_author = $custom["phdthesis_author "][0];}
        else{
                $phdthesis_author="";}
        if (isset($custom["phdthesis_author"][0])){
                $phdthesis_address = $custom["phdthesis_address"][0];}
        else{
                $phdthesis_address= "";}
        if (isset($custom["phdthesis_school"][0])){
                $phdthesis_school = $custom["phdthesis_school"][0];}
        else{
                $pdhthesis_school="";}
        if (isset($custom["phdthesis_note"][0])){
                $phdthesis_note = $custom["phdthesis_note"][0];}
        else{
                $phdthesis_note="";}
        if (isset($custom["phdthesis_key"][0])){
                $phdthesis_key = $custom["phdthesis_key"][0];}
        else{
                $phdthesis_key="";}
        if (isset($custom["phdthesis_month"][0])){
                $phdthesis_month = $custom["phdthesis_month"][0];}
        else{
                $phdthesis_month="";}
        if (isset($custom["phdthesis_year"][0])){
                $phdthesis_year = $custom["phdthesis_year"][0];}
        else{
                $phdthesis_year="";}
        if (isset($custom["phdthesis_type"][0])){
                $phdthesis_type = $custom["phdthesis_type"][0];}
        else{
                $phdthesis_type="";}


?>
<label>Title: </label><input name="phdthesis_title" value="<?php echo $phdthesis_title; ?>" />
  <br><br>  <label>Author: </label><input name="phdthesis_author" value="<?php echo $phdthesis_author; ?>" />
  <br><br>  <label>type: </label><input name="phdthesis_type" value="<?php echo $phdthesis_type; ?>" />
<br><br>  <label>Year: </label><input name="phdthesis_year" value="<?php echo $phdthesis_year; ?>" />
<br><br>  <label>Month: </label><input name="phdthesis_month" value="<?php echo $phdthesis_month; ?>" />
<br><br>  <label>Note: </label><input name="phdthesis_note" value="<?php echo $phdthesis_note; ?>" />
<br><br>  <label>Key: </label><input name="phdthesis_key" value="<?php echo $phdthesis_key; ?>" />
  <br><br>  <label>school: </label><input name="phdthesis_school" value="<?php echo $phdthesis_school; ?>" />
 <br><br>  <label>Address: </label><input name="phdthesis_address" value="<?php echo $phdthesis_address; ?>" />
<?php
    }


function save_publication_details_phdthesis(){
    global $post;
    update_post_meta($post->ID, "phdthesis_title", $_POST["phdthesis_title"]);
    update_post_meta($post->ID, "phdthesis_author", $_POST["phdthesis_author"]);
    update_post_meta($post->ID, "phdthesis_school", $_POST["phdthesis_school"]);
    update_post_meta($post->ID, "phdthesis_month", $_POST["phdthesis_month"]);
    update_post_meta($post->ID, "phdthesis_note", $_POST["phdthesis_note"]);
    update_post_meta($post->ID, "phdthesis_key", $_POST["phdthesis_key"]);
    update_post_meta($post->ID, "phdthesis_year", $_POST["phdthesis_year"]);
    update_post_meta($post->ID, "phdthesis_address", $_POST["phdthesis_address"]);
update_post_meta($post->ID, "phdthesis_type", $_POST["phdthesis_type"]);
}
?>
<?php
    function admin_init_misc(){
        add_meta_box("publicationInfo-meta-misc", "misc Details", "meta_options_misc", "publication", "side", "low");
    }


    function meta_options_misc(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["misc_title"][0])){
                $misc_title = $custom["misc_title"][0];}
        else{
                $misc_title="";}
        if (isset($custom["misc_author"][0])){
                $misc_author = $custom["misc_author "][0];}
        else{
                $misc_author="";}
        if (isset($custom["misc_howpublished"][0])){
                $misc_howpublished = $custom["misc_howpublished"][0];}
        else{
                $misc_howpublished="";}
        if (isset($custom["misc_note"][0])){
                $misc_note = $custom["misc_note"][0];}
        else{
                $misc_note="";}
        if (isset($custom["misc_key"][0])){
                $misc_key = $custom["misc_key"][0];}
        else{
                $misc_key="";}
        if (isset($custom["misc_month"][0])){
                $misc_month = $custom["misc_month"][0];}
        else{
                $misc_month="";}
        if (isset($custom["misc_year"][0])){
                $misc_year = $custom["misc_year"][0];}
        else{
                $misc_year="";}


?>
<label>Title: </label><input name="misc_title" value="<?php echo $misc_title; ?>" />
  <br><br>  <label>Author: </label><input name="misc_author" value="<?php echo $misc_author; ?>" />
<br><br>  <label>Year: </label><input name="misc_year" value="<?php echo $misc_year; ?>" />
<br><br>  <label>Month: </label><input name="misc_month" value="<?php echo $misc_month; ?>" />
<br><br>  <label>Note: </label><input name="misc_note" value="<?php echo $misc_note; ?>" />
<br><br>  <label>Key: </label><input name="misc_key" value="<?php echo $misc_key; ?>" />
  <br><br>  <label>howpublished: </label><input name="misc_howpublished" value="<?php echo $misc_howpublished; ?>" />

<?php
    }


function save_publication_details_misc(){
    global $post;
    update_post_meta($post->ID, "misc_title", $_POST["misc_title"]);
    update_post_meta($post->ID, "misc_author", $_POST["misc_author"]);
    update_post_meta($post->ID, "misc_howpublished", $_POST["misc_howpublished"]);
    update_post_meta($post->ID, "misc_month", $_POST["misc_month"]);
    update_post_meta($post->ID, "misc_note", $_POST["misc_note"]);
    update_post_meta($post->ID, "misc_key", $_POST["misc_key"]);
    update_post_meta($post->ID, "misc_year", $_POST["misc_year"]);
}
?>
<?php
    function admin_init_unpublished(){
        add_meta_box("publicationInfo-meta-unpublished", "unpublished Details", "meta_options_unpublished", "publication", "side", "low");
    }


    function meta_options_unpublished(){
        global $post;
        $custom = get_post_custom($post->ID);
         if (isset($custom["unpublished_title"][0])){
                 $unpublished_title = $custom["unpublished_title"][0];}
         else{
                 $unpublished_title="";}
        if (isset($custom["unpublished_author"][0])){
                $unpublished_author = $custom["unpublished_author "][0];}
        else{
                $unpublished_author="";}
        if (isset($custom["unpublished_note"][0])){
                $unpublished_note = $custom["unpublished_note"][0];}
        else{
                $unpublished_note= "";}
        if (isset($custom["unpublished_key"][0])){
                $unpublished_key = $custom["unpublished_key"][0];}
        else{
                $unpublished_key="";}
        if (isset($custom["unpublished_month"][0])){
                $unpublished_month = $custom["unpublished_month"][0];}
        else{
                $unpublished_month="";}
        if (isset($custom["unpublished_year"][0])){
                $unpublished_year = $custom["unpublished_year"][0];}
        else{
                $unpublished_year="";}


?>
  <label>Title: </label><input name="unpublished_title" value="<?php echo $unpublished_title; ?>" />
  <br><br>  <label>Author: </label><input name="unpublished_author" value="<?php echo $unpublished_author; ?>" />
<br><br>  <label>Year: </label><input name="unpublished_year" value="<?php echo $unpublished_year; ?>" />
<br><br>  <label>Month: </label><input name="unpublished_month" value="<?php echo $unpublished_month; ?>" />
<br><br>  <label>Note: </label><input name="unpublished_note" value="<?php echo $unpublished_note; ?>" />
<br><br>  <label>Key: </label><input name="unpublished_key" value="<?php echo $unpublished_key; ?>" />

<?php
    }


function save_publication_details_unpublished(){
    global $post;
    update_post_meta($post->ID, "unpublished_title", $_POST["unpublished_title"]);
    update_post_meta($post->ID, "unpublished_author", $_POST["unpublished_author"]);
    update_post_meta($post->ID, "unpublished_month", $_POST["unpublished_month"]);
    update_post_meta($post->ID, "unpublished_note", $_POST["unpublished_note"]);
    update_post_meta($post->ID, "unpublished_key", $_POST["unpublished_key"]);
    update_post_meta($post->ID, "unpublished_year", $_POST["unpublished_year"]);
}
?>
<?php
    function admin_init_proceedings(){
        add_meta_box("publicationInfo-meta-proceedings", "proceedings Details", "meta_options_proceedings", "publication", "side", "low");
    }


    function meta_options_proceedings(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["proceedings_title"][0])){
                $proceedings_title = $custom["proceedings_title"][0];}
        else{
                $proceedings_title="";}
        if (isset($custom["proceedings_editor"][0])){
                $proceedings_editor = $custom["proceedings_editor"][0];}
        else{
                $proceedings_editor="";}
         if (isset($custom["proceedings_publisher"][0])){
                 $proceedings_publisher = $custom["proceedings_publisher"][0];}
         else{
                 $proceedings_publisher="";}
         if (isset($custom["proceedings_address"][0])){
                 $proceedings_address = $custom["proceedings_address"][0];}
         else{
                 $proceedings_address="";}
         if (isset($custom["proceedings_organization"][0])){
                 $proceedings_organization = $custom["proceedings_organization"][0];}
         else{
                 $proceedings_organization="";}
         if (isset($custom["proceedings_volume"][0])){
                 $proceedings_volume = $custom["proceedings_volume"][0];}
         else {
                 $proceedings_volume="";}
         if (isset($custom["proceedings_number"][0])){
                 $proceedings_number = $custom["proceedings_number"][0];}
         else{
                 $proceedings_number="";}
         if (isset($custom["proceedings_note"][0])){
                 $proceedings_note = $custom["proceedings_note"][0];}
         else{
                 $proceedings_note="";}
         if (isset($custom["proceedings_key"][0])){
                 $proceedings_key = $custom["proceedings_key"][0];}
         else{
                 $proceedings_key="";}
         if (isset($custom["proceedings_month"][0])){
                 $proceedings_month = $custom["proceedings_month"][0];}
         else{
                 $proceedings_month ="";}
         if (isset($custom["proceedings_year"][0])){
                 $proceedings_year = $custom["proceedings_year"][0];}
         else{
                 $proceedings_year="";}
         if (isset($custom["proceedings_series"][0])){
                 $proceedings_series = $custom["proceedings_series"][0];}
         else{
                 $proceedings_series="";}

?>
<label>Title: </label><input name="proceedings_title" value="<?php echo $proceedings_title; ?>" />
  <br><br>  <label>Editor: </label><input name="proceedings_editor" value="<?php echo $proceedings_editor; ?>" />
<br><br>  <label>Year: </label><input name="proceedings_year" value="<?php echo $proceedings_year; ?>" />
<br><br>  <label>Month: </label><input name="proceedings_month" value="<?php echo $proceedings_month; ?>" />
  <br><br>  <label>Number: </label><input name="proceedings_number" value="<?php echo $proceedings_number; ?>" />
<br><br>  <label>Volume: </label><input name="proceedings_volume" value="<?php echo $proceedings_volume; ?>" />
<br><br>  <label>Note: </label><input name="proceedings_note" value="<?php echo $proceedings_note; ?>" />
<br><br>  <label>Key: </label><input name="proceedings_key" value="<?php echo $proceedings_key; ?>" />
  <br><br>  <label>Series: </label><input name="proceedings_series" value="<?php echo $proceedings_series; ?>" />
  <br><br>  <label>Publisher: </label><input name="proceedings_publisher" value="<?php echo $proceedings_publisher; ?>" />
  <br><br>  <label>Organization: </label><input name="proceedings_organization" value="<?php echo $proceedings_organization; ?>" />
 <br><br>  <label>Address: </label><input name="proceedings_address" value="<?php echo $proceedings_address; ?>" />
<?php
    }


function save_publication_details_proceedings(){
    global $post;
    update_post_meta($post->ID, "proceedings_title", $_POST["proceedings_title"]);
    update_post_meta($post->ID, "proceedings_volume", $_POST["proceedings_volume"]);
    update_post_meta($post->ID, "proceedings_series", $_POST["proceedings_series"]);
    update_post_meta($post->ID, "proceedings_publisher", $_POST["proceedings_publisher"]);
    update_post_meta($post->ID, "proceedings_organization", $_POST["proceedings_organization"]);
    update_post_meta($post->ID, "proceedings_volume", $_POST["proceedings_volume"]);
    update_post_meta($post->ID, "proceedings_month", $_POST["proceedings_month"]);
    update_post_meta($post->ID, "proceedings_note", $_POST["proceedings_note"]);
    update_post_meta($post->ID, "proceedings_number", $_POST["proceedings_number"]);
    update_post_meta($post->ID, "proceedings_key", $_POST["proceedings_key"]);
    update_post_meta($post->ID, "proceedings_year", $_POST["proceedings_year"]);
    update_post_meta($post->ID, "proceedings_address", $_POST["proceedings_address"]);
}
?>
<?php
    function admin_init_techreport(){
        add_meta_box("publicationInfo-meta-techreport", "techreport Details", "meta_options_techreport", "publication", "side", "low");
    }


    function meta_options_techreport(){
        global $post;
        $custom = get_post_custom($post->ID);
        if (isset($custom["techreport_title"][0])){
                $techreport_title = $custom["techreport_title"][0];}
        else{
                $techreport_title="";}
        if (isset($custom["techreport_author"][0])){
                $techreport_author = $custom["techreport_author "][0];}
        else{
                $techreport_author="";}
        if (isset($custom["techreport_address"][0])){
                $techreport_address = $custom["techreport_address"][0];}
        else{
                $techreport_address="";}
        if (isset($custom["techreport_institution"][0])){
                $techreport_institution = $custom["techreport_institution"][0];}
        else{
                $techreport_institution="";}
        if (isset($custom["techreport_note"][0])){
                $techreport_note = $custom["techreport_note"][0];}
        else{
                $techreport_note="";}
        if (isset($custom["techreport_key"][0])){
                $techreport_key = $custom["techreport_key"][0];}
        else{
                $techreport_key="";}
        if (isset($custom["techreport_month"][0])){
                $techreport_month = $custom["techreport_month"][0];}
        else{
                $techreport_month="";}
        if (isset($custom["techreport_year"][0])){
                $techreport_year = $custom["techreport_year"][0];}
        else{
                $techreport_year="";}
        if (isset($custom["techreport_type"][0])){
                $techreport_type = $custom["techreport_type"][0];}
        else{
                $techreport_type="";}
        if (isset($custom["techreport_number"][0])){
                $techreport_number= $custom["techreport_number"][0];}
        else{
                $techreport_number="";}


?>
 <label>Title: </label><input name="techreport_title" value="<?php echo $techreport_title; ?>" />
  <br><br>  <label>Author: </label><input name="techreport_author" value="<?php echo $techreport_author; ?>" />
  <br><br>  <label>type: </label><input name="techreport_type" value="<?php echo $techreport_type; ?>" />
<br><br>  <label>Year: </label><input name="techreport_year" value="<?php echo $techreport_year; ?>" />
<br><br>  <label>Month: </label><input name="techreport_month" value="<?php echo $techreport_month; ?>" />
<br><br>  <label>Note: </label><input name="techreport_note" value="<?php echo $techreport_note; ?>" />
<br><br>  <label>Key: </label><input name="techreport_key" value="<?php echo $techreport_key; ?>" />
  <br><br>  <label>institution: </label><input name="techreport_institution" value="<?php echo $techreport_institution; ?>" />
 <br><br>  <label>Address: </label><input name="techreport_address" value="<?php echo $techreport_address; ?>" />
<br><br>  <label>Number: </label><input name="techreport_number" value="<?php echo $techreport_number; ?>" />
<?php
    }


function save_publication_details_techreport(){
    global $post;
    update_post_meta($post->ID, "techreport_title", $_POST["techreport_title"]);
    update_post_meta($post->ID, "techreport_author", $_POST["techreport_author"]);
    update_post_meta($post->ID, "techreport_institution", $_POST["techreport_institution"]);
    update_post_meta($post->ID, "techreport_month", $_POST["techreport_month"]);
    update_post_meta($post->ID, "techreport_note", $_POST["techreport_note"]);
    update_post_meta($post->ID, "techreport_key", $_POST["techreport_key"]);
    update_post_meta($post->ID, "techreport_year", $_POST["techreport_year"]);
    update_post_meta($post->ID, "techreport_address", $_POST["techreport_address"]);
update_post_meta($post->ID, "techreport_type", $_POST["techreport_type"]);
update_post_meta($post->ID, "techreport_number", $_POST["techreport_number"]);
}
?>*/


