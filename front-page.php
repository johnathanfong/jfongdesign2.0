<?php get_header(); ?>
	<div class="main-content">
    <header class="main-banner" style="
      background: url('<?php $headerImage = the_post_thumbnail_url();?>');
      background-size: cover;
      background-position: center; 
      background-attachment: fixed;
    ">
      <div class="intro">
        <h1 class="welcome"><?php the_title(); ?></h1>
        <p class="page-description">
          <?php 
            $post = get_post(); 
            $content = apply_filters('the_content', $post->post_content); 
            $contentString = wp_strip_all_tags( $content );
            echo $contentString; 
          ?>
        </p>
      </div>
    </header>
    <section class="services">
      <h2 class="section-title">Services</h2>
      <div class="services-list">
        <?php
          while ( have_rows('services', 'option') ) : the_row();
        ?>
          <div class="service">
            <h3 class="service-title"><?php the_sub_field('icon') ; the_sub_field('service') ?></h3>
            <p><?php the_sub_field('description') ?></p>
          </div>
                
        <?php 
          endwhile;
        ?>
      </div>
    </section>
    <section class="toolbox">
      <h2 class="section-title">Toolbox</h2>
      <ul class="tools-list">
        <?php
          while ( have_rows('tools', 'option') ) : the_row();
        ?>
          <li class="tool">
            <span><?php the_sub_field('icon'); the_sub_field('name') ?></span>
          </li>
                
        <?php 
          endwhile;
        ?>
      </ul>
    </section>
    <section class="portfolio">
      <h2 class="section-title">Recent Work</h2>
      <?php 
        $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => 3,
          'order' => 'DSC',
        ); 
      ?>
      <?php $samplePortfolio = new WP_Query( $args ); ?>
      <?php 
        if ( $samplePortfolio->have_posts() ) {
          while ( $samplePortfolio->have_posts() ) {
            $samplePortfolio->the_post();?>
            <article class="portfolio-item">
              <?php get_template_part( 'template-parts/content-portfolio' ); ?>  
            </article>
        <?php }} 
      ?>
      <a class="portfolio-view-all" href="
        <?php 
          $portfolioArchive = get_post_type_archive_link('portfolio');
          echo $portfolioArchive;
          ?>">View All Portfolio Items
      </a>
    </section>
	</div>

<?php
get_sidebar();
get_footer();
