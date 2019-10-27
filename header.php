<!DOCTYPE html>
<html lang="en-MX" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700|Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/master.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/extra.min.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Header -->
    <header>
      <!-- Overlay -->
      <div id="myNav" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <?php wp_nav_menu( array(
                  'container' => false,
                  'menu_class' => '',
                  'items_wrap' => '<ul class="menu">%3$s</ul>',
                  'theme_location' => 'menu-header'
                )); ?>
                <ul class="social">
                  <li><a a href="https://www.instagram.com/espacioenblan.co/" target="_blank"><span class="icon-instagram"></span></a></li>
                  <li><a href="https://www.facebook.com/espacioenblandotco/" target="_blank"><span class="icon-facebook"></span></a></li>
                  <li><a a href="https://github.com/espacioenblancoo" target="_blank"><span class="icon-github"></span></a></li>
                  <li><a a href="https://dribbble.com/espacioenblandotco" target="_blank"><span class="icon-dribbble"></span></a></li>
                  <li><a a href="https://www.linkedin.com/company/espacioenblanco" target="_blank"><span class="icon-linkedin2"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar -->
      <nav id="headroom" class="navbar-header fixed-top bg-white">
        <div class="container">
          <div class="row">
            <div class="col-4 brand-name">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="_.co logo"></a>
            </div>
            <div class="col-8 text-right">
              <!-- Contact Button -->
              <div class="contact-button animated-long">
                <a href="<?php bloginfo('url'); ?>/contact" class="btn btn-primary">Contact</a>
              </div>
              <span style="cursor:pointer" onclick="openNav()">
                <div class="vegan-burger"></div>
                <div class="vegan-burger"></div>
              </span>
            </div>
          </div>
        </div>
      </nav>
    </header>
