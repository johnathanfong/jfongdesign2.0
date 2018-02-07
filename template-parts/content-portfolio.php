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
    <div class="portfolio-item-description">
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


  <?php 
    wp_reset_postdata();
  ?>
