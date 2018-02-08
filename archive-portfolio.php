<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

get_header(); ?>  

  <div class="archive-content">
    <?php
    if ( have_posts() ) : ?>

      <header class="archive-header">
        <h1 class="archive-title"><?php echo str_replace('Archives: ','', get_the_archive_title()); ?></h1>
        <?php 
        $archiveDescription = get_the_archive_description();
        $descriptionStriped = wp_strip_all_tags( $archiveDescription );
        ?>
        <p class="archive-description"><?php echo $descriptionStriped; ?></p>
      </header>

      <?php
        while ( have_posts() ) : the_post();
      ?>

    <article class="portfolio-item">
      <?php
        get_template_part( 'template-parts/content-portfolio' );
      ?>  
    </article>
    <?php 
      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>

  </div>

<?php
get_footer();
