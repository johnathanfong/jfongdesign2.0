<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

?>
// this is content-page.php
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1 class="entry-title"><?php the_title(); ?></h1>
  <?php { the_post_thumbnail('thumbnail'); } ?>
  <div class="entry-content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jfongdesign' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>
</article>