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
    <?php /*if (!is_front_page()) {*/ ?>
      <section class="contact">
        <h2>Get In Touch</h2>
        <ul class="footer-social-link-list">
          <?php
            while ( have_rows('social', 'option') ) : the_row();
          ?>
            <li class="footer-social-link">
              <a href="<?php the_sub_field('url'); ?>" target="_blank">
                <?php the_sub_field('icon') ?>
              </a>
            </li>
          <?php 
            endwhile;
          ?>
        </ul>
      </section>
    <?php /*}*/?>
    <div>
  		<span>
        Copyright &copy; Johnathan Fong 2018 All Rights Reserved
      </span> 
      <span>
        Icons courtesy of <a href="https://fontawesome.com/" target="_blank">Font Awesome</a> & <a href="http://konpa.github.io/devicon/" target="_blank">Devicon</a>
      </span>
    </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
