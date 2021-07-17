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
<?php if(get_post_meta($post->ID,'entrytype',true)&& get_post_meta($post->ID,'entrytype',true)=='article'):?>
	  <p><?php if(get_post_meta($post->ID,'author',true)):
	  echo get_post_meta($post->ID, 'author',true);
	  endif;?>.
	  (<?php if(get_post_meta($post->ID, 'month', true)):
	  echo get_post_meta($post->ID, 'month', true);?> /<?php
	  endif;?>
	  <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
	  endif;?>).
	  <?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
          endif;?>.
	  <em><?php if(get_post_meta($post->ID, 'journal', true)):
          echo get_post_meta($post->ID, 'journal', true);
          endif;?></em> <?php if(get_post_meta($post->ID, 'volume', true)):?>, <?php
          echo get_post_meta($post->ID, 'volume', true);
	  endif;?><?php if(get_post_meta($post->ID, 'number', true)):?>(<?php
		  echo get_post_meta($post->ID, 'number', true);?>)<?php
	  endif;?> <?php if(get_post_meta($post->ID, 'pages', true)):?>:<?php
		  echo get_post_meta($post->ID, 'pages', true);?>.<?php
	  endif;?>
 	  <?php if(get_post_meta($post->ID, 'note', true)):
		  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>

	  </p><?php endif;?>
	  <?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='book'):?>
		  <p><?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
	  <em> <?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>,<?php endif;?></em>
		  <?php if(get_post_meta($post->ID, 'volume', true)):?>volume <?php
          echo get_post_meta($post->ID, 'volume', true); endif;?>
	  <?php if(get_post_meta($post->ID, 'series', true)):?>of <?php
		  echo get_post_meta($post->ID, 'series', true);?>.<?php endif;?>
	 <?php if(get_post_meta($post->ID, 'publisher', true)):
          echo get_post_meta($post->ID, 'publisher', true);
	  ?>,<?php endif;?>
	 <?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
	  ?>,<?php endif;?>
	 <?php if(get_post_meta($post->ID, 'edition', true)):
          echo get_post_meta($post->ID, 'edition', true);
	  ?> edition,<?php endif;?>
	  <?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
		  echo get_post_meta($post->ID, 'year', true);?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>



</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='booklet'):?>
	<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'howpublished', true)):
          echo get_post_meta($post->ID, 'howpublished', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
 </p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='conference'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'editor', true)):
          echo get_post_meta($post->ID, 'editor', true);
	  ?>,<?php endif;?>
<em><?php if(get_post_meta($post->ID, 'booktitle', true)):
          echo get_post_meta($post->ID, 'booktitle', true);
	  ?>,<?php endif;?></em>
 <?php if(get_post_meta($post->ID, 'volume', true)):?>volume <?php
          echo get_post_meta($post->ID, 'volume', true); endif;?>
          <?php if(get_post_meta($post->ID, 'series', true)):?>of <?php
		  echo get_post_meta($post->ID, 'series', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'pages', true)):?>page <?php
		  echo get_post_meta($post->ID, 'pages', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'organization', true)):
          echo get_post_meta($post->ID, 'organization', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'publisher', true)):
          echo get_post_meta($post->ID, 'publisher', true);
	  ?>.<?php endif;?>
	   <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='inbook'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<em><?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>,<?php endif;?></em>
<?php if(get_post_meta($post->ID, 'volume', true)):?>volume <?php
          echo get_post_meta($post->ID, 'volume', true); endif;?>
          <?php if(get_post_meta($post->ID, 'series', true)):?>of <?php
		  echo get_post_meta($post->ID, 'series', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'chapter', true)):?>chapter <?php
		  echo get_post_meta($post->ID, 'chapter', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'pages', true)):?>pages <?php
		  echo get_post_meta($post->ID, 'pages', true);?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'publisher', true)):
          echo get_post_meta($post->ID, 'publisher', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'edition', true)):
          echo get_post_meta($post->ID, 'edition', true);
	  ?>edition,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='incollection'):?>
<p><?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'editor', true)):
          echo get_post_meta($post->ID, 'editor', true);
	  ?>,<?php endif;?>
<em><?php if(get_post_meta($post->ID, 'booktitle', true)):
          echo get_post_meta($post->ID, 'booktitle', true);
          ?>,<?php endif;?></em>
 <?php if(get_post_meta($post->ID, 'volume', true)):?>volume <?php
          echo get_post_meta($post->ID, 'volume', true); endif;?>
          <?php if(get_post_meta($post->ID, 'series', true)):?>of <?php
		  echo get_post_meta($post->ID, 'series', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'chapter', true)):?>chapter <?php
                  echo get_post_meta($post->ID, 'chapter', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'pages', true)):?>pages <?php
                  echo get_post_meta($post->ID, 'pages', true);?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'publisher', true)):
          echo get_post_meta($post->ID, 'publisher', true);
          ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
          ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'edition', true)):
          echo get_post_meta($post->ID, 'edition', true);
          ?>edition,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='manual'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<em><?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?></em>
<?php if(get_post_meta($post->ID, 'organization', true)):
          echo get_post_meta($post->ID, 'organization', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
          ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'edition', true)):
          echo get_post_meta($post->ID, 'edition', true);
          ?>edition,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='masterthesis'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?> Master's thesis,
<?php if(get_post_meta($post->ID, 'school', true)):
          echo get_post_meta($post->ID, 'school', true);
	  ?>,<?php endif;?>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
          ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>

</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='misc'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'howpublished', true)):
          echo get_post_meta($post->ID, 'howpublished', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='phdthesis'):?>
<p></p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='proceedings'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<em><?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
          ?>.<?php endif;?></em> PhD thesis,
<?php if(get_post_meta($post->ID, 'school', true)):
          echo get_post_meta($post->ID, 'school', true);
          ?>,<?php endif;?>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
	  ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='proceedings'):?>
<p>
<?php if (get_post_meta($post->ID,'editor',true)):
          echo get_post_meta($post->ID, 'editor',true);
?>, editor.<?php endif;?>
<em><?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>,<?php endif;?></em>
<?php if(get_post_meta($post->ID, 'volume', true)):?>volume <?php
          echo get_post_meta($post->ID, 'volume', true); endif;?>
          <?php if(get_post_meta($post->ID, 'series', true)):?>of <?php
		  echo get_post_meta($post->ID, 'series', true);?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
          ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'organization', true)):
          echo get_post_meta($post->ID, 'organization', true);
?>,<?php endif;?>
 <?php if(get_post_meta($post->ID, 'publisher', true)):
          echo get_post_meta($post->ID, 'publisher', true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='techreport'):?>
<p><?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?> Technical Report 
<?php if(get_post_meta($post->ID, 'number', true)):
          echo get_post_meta($post->ID, 'number', true);
         endif;?>,
<?php if(get_post_meta($post->ID, 'institution', true)):
          echo get_post_meta($post->ID, 'institution', true);
          ?>,<?php endif;?>
<?php endif;?>
<?php if(get_post_meta($post->ID, 'address', true)):
          echo get_post_meta($post->ID, 'address', true);
          ?>,<?php endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
 <?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>

</p>
<?php endif;?>
<?php if(get_post_meta($post->ID,'entrytype',true)&&get_post_meta($post->ID,'entrytype',true)=='unpublished'):?>
<p>
<?php if (get_post_meta($post->ID,'author',true)):
          echo get_post_meta($post->ID, 'author',true);
?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'title', true)):
          echo get_post_meta($post->ID, 'title', true);
	  ?>.<?php endif;?>
<?php if(get_post_meta($post->ID, 'note', true)):
                  echo get_post_meta($post->ID, 'note', true);?>.<?php
          endif;?>
<?php if(get_post_meta($post->ID, 'month', true)):
          echo get_post_meta($post->ID, 'month', true);
          endif;?>
          <?php if(get_post_meta($post->ID, 'year', true)):
          echo get_post_meta($post->ID, 'year', true);
?>.<?php endif;?>
</p>
<?php endif;?>
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

