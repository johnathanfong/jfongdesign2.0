<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

get_header(); ?>
  This is the front-page.php

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-page');

			endwhile; // End of the loop.
			?>
      <?php 
        $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => 3,
          'order' => 'DSC',
        ); 
      ?>
      <?php $samplePortfolio = new WP_Query( $args ); ?>
            <?php if ( $samplePortfolio->have_posts() ) {
                while ( $samplePortfolio->have_posts() ) {
                  $samplePortfolio->the_post();?>
                  
                  <div>
                    <?php the_post_thumbnail('thumbnail'); ?>
                  </div>
                  <div>
                    <a href="
                      <?php 
                        $postUrl = get_permalink();
                        echo $postUrl;
                        ?>"><h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php the_field('client_name'); ?></p> 
                    <?php the_field('summary'); ?>
                    <a href="
                      <?php 
                        $postUrl = get_permalink();
                        echo $postUrl;
                        ?>">View Project</h2>
                    </a>            
                  </div>
                
                <?php
                } //end while
                wp_reset_postdata();
              } //end if
              ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
