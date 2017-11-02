<?php
// After Setup Theme
add_action('after_setup_theme', 'valet_default_functions');
  function valet_default_functions() {
    show_admin_bar(false);
    // All the Includes
      // Redux Framework
      require_once('lib/redux/ReduxCore/framework.php');
      require_once('lib/redux/sample/config.php');

      // Custom Widgets
      if(file_exists(dirname(__FILE__).'/inc/widgets/need-help-contact.php')) {
        require_once(dirname(__FILE__).'/inc/widgets/need-help-contact.php');
      }

    // Adding Theme Supports
      add_theme_support('title-tag');
      add_theme_support('custom-logo');
      add_theme_support('post-thumbnails');
      add_image_size( 'op-thumb', 1298, 988, true );

    // Menu Register
      load_theme_textdomain('', get_template_directory_uri().'/languages');
    
    if(function_exists(register_nav_menus))
      register_nav_menus(array(
        'header' => __('Header Menu', 'valet'),
        'footer' => __('Footer Menu', 'valet') // Currently have NO use
    ));

    // Slider (Panel) Resister
      register_post_type('valet_slider', array(
        'labels' => array(
          'name' => 'Hero Slider',
          'add_new_item' => 'Add New Slider'
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-images-alt2',
        // 'menu_icon' => get_template_directory_uri().'/images/slider-icon.png',
      ));
      register_post_type('valet_op', array(
        'labels' => array(
          'name' => 'Outstanding Products',
          'add_new_item' => 'Add New Products'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-editor-insertmore',
      ));
      register_post_type('valet_fServices', array(
        'labels' => array(
          'name' => 'Featured Services',
          'add_new_item' => 'Add Your Featured Services'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-editor-insertmore',
      ));
  }

// Sidebars (Widgets) Resister
add_action('widgets_init', 'valet_sidebars');
  function valet_sidebars(){
    // Right Sidebars
    register_sidebar(array(
      'name' => 'Right Sidebar',
      'id'   => 'right_sidebar',
      'description' => 'Add stuffs to your right side bars (if any)',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));
    // Customer Says Widget (Custom HTML)
    register_sidebar(array(
      'name' => 'Customer Says (custom HTML)',
      'id'   => 'customer_quotes',
      'description' => 'Add stuffs to your Quotes section...',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '<div style="display:none">',
      'after_title' => '</div>',
    ));
    // Footer Widgets (Custom HTML)
    register_sidebar(array(
      'name' => 'Footer Columns',
      'id'   => 'footer_columns',
      'description' => 'Add stuffs to your Footer section...',
      'before_widget' => '<div class="col-md-4 col-sm-6 footer-box">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="fh5co-footer-heading">',
      'after_title' => '</h3>',
    ));
  }

// Enqueueing Stylesheets & Scripts
add_action( 'wp_enqueue_scripts', 'enque_all_styles_n_scripts' );
  function enque_all_styles_n_scripts(){
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
  }

add_filter("the_content", "read_moreFilter");

  function read_moreFilter($content)
  {
    // Take the existing content and return a subset of it
    return substr($content, 0, 106);
  }
