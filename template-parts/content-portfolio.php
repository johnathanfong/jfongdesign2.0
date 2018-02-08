<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

?>
    <div class="portfolio-image-wrapper">
      <img src="<?php the_post_thumbnail_url(); ?>"/>
    </div>
    <div class="portfolio-item-details">
      <p class="portfolio-item-client"><?php the_field('client_name'); ?></p> 
      <a href="
        <?php 
          $postUrl = get_permalink();
          echo $postUrl;
          ?>"><h2 class="portfolio-item-title"><?php the_title(); ?></h2>
      </a>
      <ul class="portfolio-item-categories">
        <?php
          $postCategories = get_categories();
          if ($postCategories) {
            foreach($postCategories as $category) {
          ?>
            <li class="portfolio-item-category">
              <?php echo $category->name . ' / '; ?> 
            </li>  
          <?php }}
        ?>
      </ul>       
      <p class="portfolio-item-description"><?php the_field('summary'); ?></p>
      <a class="portfolio-item-view" href="
        <?php 
          $postUrl = get_permalink();
          echo $postUrl;
          ?>">View Project
      </a>
      
    </div>


  <?php 
    wp_reset_postdata();
  ?>
