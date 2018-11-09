<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package one
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'one' ); ?></a>

  <header id="masthead" class="site-header">

    <div class="fw-container">
      <div class="fw-row">
        <div class="fw-col-xs-12">

          <div class="container">
            <a href="/" class="site-logo site-logo-default">
              <img src="<?=fw_get_db_settings_option('logo_scroll')['url']?>"/>
            </a>
            <a href="/" class="site-logo site-logo-scroll">
              <img src="<?=fw_get_db_settings_option('logo_scroll')['url']?>"/>
            </a>

            <nav class="main-navigation site-navigation">
              <div id="js_i_menu_button" class="button-menu-toggle button-menu-toggle-black" aria-controls="primary-menu" aria-expanded="false">
                <ul id="js_i_menu" class="menu_mobile_bar">
                  <li class="menu_mobile_bar__one"></li>
                  <li class="menu_mobile_bar__two"></li>
                  <li class="menu_mobile_bar__three"></li>
                </ul>
              </div>
              <?php
              wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
              'menu_class'     => 'sf-menu primary-black',
              'container_id' => 'menu-top-container',
              'after' => '<i class="tangle"></i>'
              ) );
              ?>
            </nav><!-- #site-navigation -->
            <a class="header_resident_portal_btn header_resident_portal_btn_black">
              RESIDENT PORTAL <i class="fa fa-key" aria-hidden="true"></i>
            </a>
          </div>

        </div>
      </div>
    </div>

  </header><!-- #masthead -->

  <div id="content" class="site-content">
