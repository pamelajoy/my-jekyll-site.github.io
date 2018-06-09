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
      <div class="container py-5">
        <div class="row d-flex align-items-center">
          <div class="col-md-3">
            <?php 
              $logo = get_field('logo', 'options');
              if($logo){
                echo wp_get_attachment_image($logo, 'medium', '', array('class' => 'img-fluid mb-4 mb-md-0') );
              }
            ?>
          </div>
          <div class="col-md-3">
            <?php 
              $address_1 = get_field('address_line_1', 'options');
              $address_2 = get_field('address_line_2', 'options');

              if ($address_1):
            ?>
              <p class="p text-white"><?php echo $address_1;?></p>
            <?php
              endif;
              if ($address_2):
            ?>
              <p class="p text-white"><?php echo $address_2;?></p>
            <?php
              endif;
            ?>
          </div>
          <div class="col-md-3">
            <?php 
              $phone = get_field('phone', 'options');
              $fax = get_field('fax', 'options');

              if ($phone):
            ?>
              <p class="p text-white">Phone: <?php echo $phone;?></p>
            <?php
              endif;
              if ($fax):
            ?>
              <p class="p text-white">Fax: <?php echo $fax;?></p>
            <?php
              endif;
            ?>
          </div>
          <div class="col-md-3">
            <?php 
              $email_1 = get_field('email_1', 'options');
              $email_2 = get_field('email_2', 'options');

              if ($email_1):
            ?>
              <p class="p text-white"><?php echo $email_1;?></p>
            <?php
              endif;
              if ($email_2):
            ?>
              <p class="p text-white"><?php echo $email_2;?></p>
            <?php
              endif;
            ?>
          </div>
        </div>
      </div>
    </div><!-- .site-info -->
    

  </footer><!-- #colophon -->
  
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>