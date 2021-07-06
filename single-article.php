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
          <p><b><?php $author_id = intval( get_query_var( 'author' ) ); echo get_the_author_meta( 'display_name', $author_id ); ?></b>, <?php the_title(); ?>,  <em><?php if(get_post_meta($post->ID, '_article_journal', true)):
          echo get_post_meta($post->ID, '_article_journal', true);
          endif;?>
          </em>,
<?php if(get_post_meta($post->ID, '_article_volume', true)):
          echo get_post_meta($post->ID, '_article_volume', true);
          endif;?>, (<?php if(get_post_meta($post->ID, '_article_number', true)):
          echo get_post_meta($post->ID, '_article_number', true);
          endif;?>), (p. <?php if(get_post_meta($post->ID, '_article_pages', true)):
          echo get_post_meta($post->ID, '_article_pages', true);
          endif;?>), doi:
<?php if(get_post_meta($post->ID, '_article_DOI', true)):
          echo get_post_meta($post->ID, '_article_DOI', true);
          endif;?>,  (<?php if(get_post_meta($post->ID, '_article_month', true)):
          echo get_post_meta($post->ID, '_article_month', true);
          endif;?>/<?php if(get_post_meta($post->ID, '_article_year', true)):
          echo get_post_meta($post->ID, '_article_year', true);
          endif;?>).




 </p>
        </div>
      </div>
    </header>

    <div class="ucla campus">

      <div class="col span_9_of_12">
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


  </div>

</main>

<?php get_footer(); ?>

