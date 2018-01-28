<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

?>

<section id="post-<?php the_ID(); ?>" class="portfolio-item">
	<div class="portfolio-item-content">
		<?php
      the_title( '<h2 class="portfolio-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    ?>
  	<div class="portfolio-item-description">
  		<?php
  			the_content( sprintf(
  				wp_kses(
  					/* translators: %s: Name of current post. Only visible to screen readers */
  					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jfongdesign' ),
  					array(
  						'span' => array(
  							'class' => array(),
  						),
  					)
  				),
  				get_the_title()
  			) );

  			wp_link_pages( array(
  				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jfongdesign' ),
  				'after'  => '</div>',
  			) );
  		?>
  	</div><!-- .entry-content -->
  	<div class="entry-footer">
  		<?php jfongdesign_entry_footer();?>
  	</div><!-- .entry-footer -->
  </div><!-- .portfolio-item-description -->
  
  <?php 
    if ( has_post_thumbnail() ): ?>
      <div class="portfolio-item-cover">
        <img class="portfolio-item-cover-image" src="
          <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id, true);
            echo $thumb_url[0];
          ?>
        "/>
      </div>
    <?php endif;
  ?>


</section><!-- #post-<?php the_ID(); ?> -->
