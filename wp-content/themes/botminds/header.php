<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"  rel="stylesheet">
 
<?php wp_head(); ?>
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="<?php echo get_home_url(); ?>" class="mb-0"><img src="<?php bloginfo('template_directory'); ?>/img/logo-white.svg" class="logo-white" alt="Botminds"/><img src="<?php bloginfo('template_directory'); ?>/img/logo-black.svg" class="logo-black" alt="Botminds"/></a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
<?php 
$mainMenu = array(
'container' => false,
'theme_location' => 'main-menu',
'menu_class' => 'site-menu main-menu js-clone-nav mr-auto d-none d-lg-block'
);
wp_nav_menu($mainMenu);
?>

            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
              data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>

    </header>