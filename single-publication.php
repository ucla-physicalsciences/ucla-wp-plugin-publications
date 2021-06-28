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

      <div class="col span_9_of_12"></div>

<div class="col span_3_of_12">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
        <h1><?php _e( 'No publications to display at the moment.', 'PUB_DOMAIN' ); ?></h1>
<?php endif; ?>
    </div>
   
  </div>

</main>

<?php get_footer(); ?>
~                             
