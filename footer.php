<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jfongdesign
 */

?>

	<footer id="colophon" class="site-footer">
    <div class="footer-content">
      <section class="contact">
        <h2 class="section-title footer">Get In Touch</h2>
        <ul class="social-links">
          <?php
            while ( have_rows('social', 'option') ) : the_row();
          ?>
            <li class="social-link">
              <a href="<?php the_sub_field('url'); ?>" target="_blank">
                <?php the_sub_field('icon') ?>
              </a>
            </li>
          <?php 
            endwhile;
          ?>
        </ul>
      </section>
      <div class="copyright-info">
    		<span>
          Copyright &copy; Johnathan Fong 2018 All Rights Reserved
        </span> 
        <span>
          Icons courtesy of <a href="https://fontawesome.com/" target="_blank">Font Awesome</a> & <a href="http://konpa.github.io/devicon/" target="_blank">Devicon</a>
        </span>
      </div>
    </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
