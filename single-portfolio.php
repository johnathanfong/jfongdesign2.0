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
  this is a single-portfolio.php
  <div class="section">
    <div class="innerWrapper">
      <div class="full">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
          <h2><?php the_title(); ?></h2>
          <p class="client"><?php the_field('client_name'); ?></p> 

          <div class="shortDesc">
            <?php the_field('short_description'); ?>
          </div>

          <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>
      </div>
    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->

<?php get_footer(); ?>
