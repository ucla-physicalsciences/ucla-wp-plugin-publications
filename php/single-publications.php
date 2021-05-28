       <?php

$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );

?>

<?php get_header(); ?>

<main id="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="header" <?php if ( has_post_thumbnail() ) { ?> style="background-image: url(<?php echo $thumbnail[0]; ?>);" <?php } ?>>
      <div class="ucla campus">
        <div class="col span_12_of_12">
          <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
          <h1 class="entry-title"><?php the_title(); ?></h1>         </div>
      </div>
    </header>

    <div class="ucla campus">

      <div class="col span_9_of_12"><?php edit_post_link(); ?>
 <?php the_content(); ?>

        <?php
            /** @var string|false|WP_Error $tag_list */
            $tag_list = get_the_tag_list( ' ', ' ' );

            if ( $tag_list && ! is_wp_error( $tag_list ) ) {
                echo $tag_list;
            }
        ?>
      </div>

    <?php endwhile; endif; ?>
<div class="col span_3_of_12">
<ul>
<?php if(get_post_meta($post->ID, 'publication_author', true)):?> //makes the article's author detail optional
<li>
 Author: <?php echo get_post_meta($post->ID, 'publication_author', true);?> //set the author detail typed in by the user on the page
</li>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'publication_journal', true)):?>  //makes the article's journal detail optional
<li>
 Journal: <?php echo get_post_meta($post->ID, 'publication_journal', true);?> //set the journal detail typed in by the user on the page
</li>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'publication_volume', true)):?> //makes the article's volume detail optional
<li>
 Volume: <?php echo get_post_meta($post->ID, 'publication_volume', true);?> //set the volume detail typed in by the user on the page
</li>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'publication_pages', true)):?> //makes the article's pages detail optional
<li>
 Pages: <?php echo get_post_meta($post->ID, 'publication_pages', true);?> //set the pages detail typed in by the user on the page
</li>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'publication_ISSN', true)):?> //makes the article's ISSN detail optional
<li>
 ISSN: <?php echo get_post_meta($post->ID, 'publication_ISSN', true);?> //set the ISSN detail typed in by the user on the page
</li>
<?php endif;?>
<?php if( get_post_meta($post->ID, 'publication_DOI', true)):?> //makes the article's DOI detail optional
<li>
 DOI: <?php echo get_post_meta($post->ID, 'publication_DOI', true);?> //set the DOI detail typed in by the user on the page
</li>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'publication_URL', true)):?> //makes the article's URL detail optional
<?php
            echo '<li> URL: <a href="' . get_post_meta($post->ID, 'publication_URL', true). '"> link to publication</a></li>';?> //set the URL detail typed in by the user on the page as a clickable link
<?php endif;?> 
</ul>
    </div>

  </div>

</main>

<?php get_footer(); ?>
