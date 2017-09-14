<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FAQuraesi" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

    <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
  
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:   https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfont -->
  <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'> -->

  <!-- Modernizr JS -->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- START #fh5co-header -->
    <header id="fh5co-header-section" role="header" class="" >
      <div class="container">
        <!-- <div id="fh5co-menu-logo"> -->
          <!-- START #fh5co-logo -->
          <h1 id="fh5co-logo" class="pull-left">
            <?php if(has_custom_logo()){
                the_custom_logo();
              } else { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png"></a>
            <?php } ?>
          </h1>
          <!-- START #fh5co-menu-wrap -->
          <nav id="fh5co-menu-wrap" role="navigation">
            <?php 
                wp_nav_menu(array(
                  'theme_location' => 'header',
                  'container' => '',
                  'menu_id' => 'fh5co-primary-menu',
                  'menu_class' => 'sf-menu'
                ));
             ?>
          </nav>
        <!-- </div> -->
      </div>
    </header>