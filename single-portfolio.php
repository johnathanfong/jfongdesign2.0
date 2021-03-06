<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jfongdesign
 */
get_header(); ?>
  
  <div class="page-content">
  
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <header class="page-header">
      <p class="single-portfolio-client"><?php the_field('client_name'); ?></p> 
      <h1 class="page-title"><?php the_title(); ?></h1>
      <ul class="single-portfolio-categories">
        <?php
          $postCategories = get_categories();
          if($postCategories) {
            foreach($postCategories as $category) {
          ?>
            <li class="single-portfolio-category">
              <?php echo $category->name . ' / '; ?> 
            </li>  
          <?php } //end foreach($postCategories as $category)
          } //end if($postCategories)
        ?>
      </ul>
      <p class="page-description">
        <?php the_field('summary'); ?>
      </p>
    </header>
    <section class="single-portfolio-details">
      <div class="single-portfolio-feature-image-container">
        <img class="single-portfolio-feature-image" src="<?php the_post_thumbnail_url(); ?>"/>
        <?php 
          $featureImageCaption = get_post(get_post_thumbnail_id())->post_excerpt;
          if ( $featureImageCaption != '') { ?>
            <p><?php echo $featureImageCaption; ?></p>
        <?php } ?>
      </div>
      <!-- portfolio item description -->
      <article id="single-portfolio-description">
        <?php the_content(); ?>
      </article>

      <!-- portfolio item images (optional) -->
      <?php if(have_rows('images')) : ?>
        <article id="single-portfolio-gallery">
          <?php while(have_rows('images')) : the_row(); ?>
              <div class="single-portfolio-image-container">
                <span class="single-portfolio-image-wrapper">
                  <?php $image = get_sub_field('image'); ?>
                  <img class="single-portfolio-image" src="<?php echo $image['url'] ?>">
                </span>

                <?php
                  $imageCaption = get_sub_field('image_caption');  
                  if ( get_sub_field('image_caption') ) { ?> 
                    <p class="single-portfolio-image-caption"><?php echo $imageCaption; ?></p>
                <?php } ?>          
              </div>
          <?php 
            endwhile; //have_rows('images') 
          ?>
        </article>
      <?php 
        endif; //have_rows('images')
      ?>
    </section>
    <?php 
      endwhile; //have_posts();
    ?>
    <div id="page-footer">
      <a class="portfolio-view-all" href="
        <?php 
          $portfolioArchive = get_post_type_archive_link('portfolio');
          echo $portfolioArchive;
          ?>">Return to Portfolio
      </a>
    </div>
  </div>
<?php get_footer(); ?>
