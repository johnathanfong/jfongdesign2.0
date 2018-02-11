<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="content-image-container">
   <img class="content-image" src="<?php the_post_thumbnail_url(); ?>"> 
  </div>
  <div class="content-description">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jfongdesign' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</article>