<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package torque
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header id="masthead" class="site-header position-absolute w-100">

    <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg p-0" style="overflow:hidden;">
        <div class="fixed-top site-branding align-self-start pr-5 pt-3">
          <div class="container">
            	<div>
              <?php
                // check to see if the logo exists and add it to the page
                if ( has_custom_logo() ) :

                  echo the_custom_logo();

                else :
              ?>
                 
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                 
              <?php 
                endif; 
              ?>
            	</div>
          </div>
        </div><!-- .site-branding -->

        <div class="fixed-top d-lg-none d-flex m-5 align-self-start justify-self-end nav-bg">
            <button class="navbar-toggler d-flex justify-content-end d-lg-none p-3" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars white-text"></i>
            </button><!-- .navbar-toggler -->
        </div>
        <div class="container" style="margin-top:90vh">
        <?php
          wp_nav_menu( array(
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse d-lg-flex align-self-end row',
            'container_id'    => 'menu',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'menu'            => 'primary',
            'menu_class'      => 'navbar-nav col-8 ml-auto nav-bg pl-5 align-items-center',
            'menu_id'         => false,
            'theme_location'  => 'menu-1',
            'walker'          => new bs4navwalker()
          ) );
        ?>
      </div>
        
        
      </div>
    </nav><!-- #site-navigation -->

  </header><!-- #masthead -->
  
  
  <div id="content" class="site-content">