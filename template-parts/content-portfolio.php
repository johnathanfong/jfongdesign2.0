<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */

?>
this is content-portfolio.php
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

  <?php 
  wp_reset_postdata();
?>