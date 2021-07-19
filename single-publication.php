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
<?php 
//article
if(get_post_meta($post->ID,'entrytype',true)&& get_post_meta($post->ID,'entrytype',true)=='article'):?>
<p>
<?php
//author
if(get_post_meta($post->ID,'author',true)):
	echo get_post_meta($post->ID,'author',true);?>. 
<?php endif;?>
<?php
//year
if(get_post_meta($post->ID,'year',true)):?>(<?php
	echo get_post_meta($post->ID,'year',true);?>).  
<?php endif;?>
<?php 
//title
if(get_post_meta($post->ID, 'title', true)):
	echo get_post_meta($post->ID, 'title', true);?>.
<?php endif;?>
<em><?php
//journal
if(get_post_meta($post->ID, 'journal', true)):
          echo get_post_meta($post->ID, 'journal', true);?>,
<?php endif;?></em> 
<b><?php
//volume 
if(get_post_meta($post->ID, 'volume', true)):
echo get_post_meta($post->ID, 'volume', true);
endif;?></b>
<?php 
//number
if(get_post_meta($post->ID, 'number', true)):?>(<?php
	echo get_post_meta($post->ID, 'number', true);?>).
<?php endif;?>
<?php 
//pages	
if(get_post_meta($post->ID, 'pages', true)):
	echo get_post_meta($post->ID, 'pages', true);?>.
<?php endif;?>
<?php 
//DOI
if(get_post_meta($post->ID, 'DOI', true)):
        echo get_post_meta($post->ID, 'DOI', true);
endif;?>

</p><?php endif;?>
<?php 
//book
if(get_post_meta($post->ID,'entrytype',true)&& get_post_meta($post->ID,'entrytype',true)=='book'):?>
<p>
<?php
//author or editor
if(get_post_meta($post->ID,'author',true)):
	echo get_post_meta($post->ID,'author',true);?>.
<?php endif;?>
<?php
//year
if(get_post_meta($post->ID,'year',true)):?>(<?php
        echo get_post_meta($post->ID,'year',true);?>).
<?php endif;?>
<em>
<?php
//title or booktitle
if(get_post_meta($post->ID, 'title', true)):
	echo get_post_meta($post->ID, 'title', true);
else if(get_post_meta($post->ID, 'booktitle',true)):
	echo get_post_meta($post->ID, 'booktitle',true);?>,
<?php endif;?></em>
<b><?php
//volume
if(get_post_meta($post->ID, 'volume', true)):
echo get_post_meta($post->ID, 'volume', true);
endif;?></b>
<?php
//editor
	if (get_post_meta($post->ID,'editor',true)):?> edited by <?php
        echo get_post_meta($post->ID,'editor',true);
?>,
<?php endif;?>
<?php 
//pages
	if(get_post_meta($post->ID, 'pages', true)):?>pp.<?php
        echo get_post_meta($post->ID, 'pages', true);?>,
<?php endif;?>


</p>
<?php endif;?>
 <?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
	  ?>.<?php endif;?>
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
