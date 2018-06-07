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

$terms = get_terms('product-line');
$print_html = '';
$print_css = '';
foreach($terms as $term):
  $font = get_field('font', $term);
  if ($font){
    $html = $font['embed_font'];
    $css = $font['specify_in_css'];
    $css = '.'.$term->slug.'-font{'.$css.'}'."\r\n";
    $print_html .= $html;
    $print_css .= $css;
  }
  $color = get_field('color', $term);
  if ($color){
    //create text class
    $css = '.'.$term->slug.'-color-text{color:'.$color.'}'."\r\n";
    $print_css .= $css;
  }
  if ($color){
    //create button classes
    $css = 
      '.'.$term->slug.'-color-btn{
        background-color:'.$color.';
        border-color:'.$color.';
        color:white;
      }'."\r\n".
      '.'.$term->slug.'-color-btn:hover{
        background-color:transparent;
        color:'.$color.';
      }'."\r\n";
    $css .= 
      '.'.$term->slug.'-white-btn{
        background-color:white;
        border-color:white;
        color:'.$color.'
      }'."\r\n".
      '.'.$term->slug.'-white-btn:hover{
        background-color:transparent;
        color:white;
      }'."\r\n";
    $print_css .= $css;
  }
  
endforeach;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <?php 
    if (isset($print_html)){
      echo $print_html;
    }

    if (isset($print_css)){
      echo '<style type="text/css">'."\r\n";
      echo $print_css;
      echo "\r\n".'</style>';
    }
  ?>  
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
            'menu_class'      => 'navbar-nav col-8 ml-auto nav-bg align-items-center justify-content-around',
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