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
          
          <?php the_post_thumbnail('thumbnail'); ?>

          <h2><?php the_title(); ?></h2>
          <p class="client"><?php the_field('client_name'); ?></p> 

          <div class="shortDesc">
            <?php the_field('short_description'); ?>
          </div>

          <?php the_content(); ?>

          <?php while( have_rows('images') ): the_row(); ?>
            
          <!-- Retrieve the Images Object -->

          <?php $image = get_sub_field('image'); ?>

          <!-- Prints the image -->
          <img src="<?php echo $image['sizes']['thumbnail'] ?>">

          <!-- If there's a caption, print the caption -->
          <?php 
            if (the_sub_field('image_caption')) : ?>
          <p><?php the_sub_field('image_caption'); ?></p>
          <?php endif; ?>

          <?php endwhile; ?>

        <?php endwhile; // end of the loop. ?>
<ul>
<?php
  $postCategories = get_categories();
  if ($postCategories) {
    foreach($postCategories as $category) {
      
    ?>

    <li>
        <?php echo $category->name; ?>
    </li>  
    <?php
    }
  }
?>
  
</ul>


      </div>
    </div> <!-- /.innerWrapper -->
  </div> <!-- /.section -->

<?php get_footer(); ?>
