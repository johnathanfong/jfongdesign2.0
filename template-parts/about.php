<?php 
/* Template Name: About */ 
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */
get_header(); ?>
  <div class="page-content">
      <?php
      while ( have_posts() ) : the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="about-me">
            <div class="content-image-container about">
             <img class="content-image" src="<?php the_post_thumbnail_url(); ?>"> 
            </div>
            <div class="content-description about">
              <?php
                the_content();

                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jfongdesign' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div>
          </div>
        </article>
      <?php endwhile;
      ?>
  </div>

<?php
get_sidebar();
get_footer();
