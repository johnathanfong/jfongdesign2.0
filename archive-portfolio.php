<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

get_header(); ?>  

  <div class="page-content">
    <?php
    if ( have_posts() ) : ?>

      <header class="page-header">
        <h1 class="page-title"><?php echo str_replace('Archives: ','', get_the_archive_title()); ?></h1>
        <?php 
        $archiveDescription = get_the_archive_description();
        $descriptionStriped = wp_strip_all_tags( $archiveDescription );
        ?>
        <p class="page-description"><?php echo $descriptionStriped; ?></p>
      </header>
      <section id="portfolio-items">
        <?php
          while ( have_posts() ) : the_post();
        ?>

      <div class="portfolio-item">
        <?php
          get_template_part( 'template-parts/content-portfolio' );
        ?>  
      </div>
      <?php 
        endwhile;

        the_posts_navigation();

      else :

        get_template_part( 'template-parts/content', 'none' );

      endif; ?>
        
      </section>

  </div>

<?php
get_footer();
