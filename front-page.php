<?php get_header(); ?>
	<div class="main-content">
    <?php echo get_the_post_thumbnail(6);?>  
    <section class="intro">
			<?php
  			while ( have_posts() ) : the_post();
  				get_template_part( 'template-parts/content-page');
        endwhile; // End of the loop.
			?>
    </section>
    <section class="services">
      <h2>Services</h2>
      <div>
        <?php
          while ( have_rows('services', 'option') ) : the_row();
        ?>
          <div class="service">
            <?php the_sub_field('icon') ?>
            <h3><?php the_sub_field('service') ?></h3>
            <p><?php the_sub_field('description') ?></p>
          </div>
                
        <?php 
          endwhile;
        ?>
      </div>
    </section>
    <section class="toolbox">
      <h2>Toolbox</h2>
      <ul>
        <?php
          while ( have_rows('tools', 'option') ) : the_row();
        ?>
          <li class="tool">
            <?php the_sub_field('icon') ?>
            <p><?php the_sub_field('name') ?></p>
          </li>
                
        <?php 
          endwhile;
        ?>
      </ul>
    </section>
    <section class="portfolio">
      <h2>Recent Work</h2>
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
            $samplePortfolio->the_post();
            get_template_part( 'template-parts/content-portfolio' );
          }
        } 
      ?>
    </section>
    <section class="contact">
      <h2>Get In Touch</h2>
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
