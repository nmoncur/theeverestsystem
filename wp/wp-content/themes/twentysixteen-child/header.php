<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">
    <div class="site-inner">
    <header id="masthead" class="site-header" role="banner">
      <div class="row">
        <div class="col-sm-3 text-center">
          <div class="main-logo">
            <img src="<?php echo get_template_directory_uri() ?>-child/images/logo.jpg" alt="" />
          </div>
        </div>
        <div class="col-sm-5 col-sm-offset-4">
          <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

            <div id="site-header-menu" class="site-header-menu">
              <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                  <?php
                    wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'menu_class'     => 'primary-menu',
                     ) );
                  ?>
                </nav><!-- .main-navigation -->
              <?php endif; ?>

            </div><!-- .site-header-menu -->
          <?php endif; ?>

        </div>
      </div>
    </header>
    <div id="content" class="site-content">
