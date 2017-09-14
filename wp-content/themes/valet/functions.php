<?php
// Adding Theme Supports
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Enqueueing Stylesheets & Scripts
add_action( 'wp_enqueue_scripts', function(){
  wp_enqueue_style('themify-icons', get_stylesheet_directory_uri().'/css/themify-icons.css', array(), '0.0.0');
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css', array(), '0.0.0');
  wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri().'/css/owl.carousel.min.css', array(), '0.0.0');
  wp_enqueue_style('owl-theme', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css', array(), '0.0.0');
  wp_enqueue_style('magnific-popup', get_stylesheet_directory_uri().'/css/magnific-popup.css', array(), '0.0.0');
  wp_enqueue_style('superfish', get_stylesheet_directory_uri().'/css/superfish.css', array(), '0.0.0');
  wp_enqueue_style('easy-responsive-tabs', get_stylesheet_directory_uri().'/css/easy-responsive-tabs.css', array(), '0..0' );
  wp_enqueue_style('animate', get_stylesheet_directory_uri().'/css/animate.css', array(), '0.0.0');
  wp_enqueue_style('theme-styles', get_stylesheet_directory_uri().'/css/style.css', array(), '0.0.0');

  //========================= JS's =========================

  wp_enqueue_script('jq_valet', get_template_directory_uri().'/js/jquery-1.10.2.min.js', array(), '0.0.0',true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('owl-theme', get_template_directory_uri().'/js/owl.carousel.min.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('hoverIntent', get_template_directory_uri().'/js/hoverIntent.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('superfish', get_template_directory_uri().'/js/superfish.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('easy-responsive-tabs', get_template_directory_uri().'/js/easyResponsiveTabs.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('fastclick', get_template_directory_uri().'/js/fastclick.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('parallax', get_template_directory_uri().'/js/jquery.parallax-scroll.min.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jq_valet'), '0.0.0', ture);
  wp_enqueue_script('mainJs', get_template_directory_uri().'/js/main.js', array('jq_valet'), '0.0.0', ture);

});


// Menu Register
register_nav_menus( array(
    'header' => 'Header Menu',
    'footer' => 'Footer Menu'
  ) );


