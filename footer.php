<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package torque
 */

?>

  </div><!-- #content -->

  <footer id="footer" class="site-footer medium-gray-bg">
    <div class="site-info">
      footer
      <?php
        if(is_active_sidebar('footer')){
          dynamic_sidebar('footer');
        }
      ?>
    </div><!-- .site-info -->
    

  </footer><!-- #colophon -->
  
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>