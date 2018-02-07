<?php get_header(); ?>
	<div class="main-content">
    <header class="main-banner" style="
      background: url('<?php $headerImage = the_post_thumbnail_url();?>');
      background-size: cover;
      background-position: center; 
    ">
      <div class="intro">
        <h1 class="welcome"><?php the_title(); ?></h1>
        <?php 
          $post = get_post(); 
          $content = apply_filters('the_content', $post->post_content); 
          echo $content;  
        ?> 
      </div>
    </header>
    <section class="services">
      <h2 class="section-title">Services</h2>
      <div class="services-list">
        <?php
          while ( have_rows('services', 'option') ) : the_row();
        ?>
          <div class="service">
            <h3><?php the_sub_field('icon') ; the_sub_field('service') ?></h3>
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
    </section>
    <section class="contact">
      <h2 class="section-title">Get In Touch</h2>
      <ul class="social-link">
        <?php
          while ( have_rows('social', 'option') ) : the_row();
        ?>
          <li>
            <a href="<?php the_sub_field('url'); ?>">
              <?php the_sub_field('icon') ?>
            </a>
          </li>
        <?php 
          endwhile;
        ?>
      </ul>
    </section>
	</div>

<?php
get_sidebar();
get_footer();
