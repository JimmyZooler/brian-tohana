<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brian_Tohana
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brian_tohana' ); ?></a>
    
	<header id="masthead" class="site-header hide-header" role="banner">
        <div class="dark-overlay"></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">  
            <a id="site-title" href="<?php $url = home_url( '/', 'http' ); echo esc_url( $url ); ?>" >True Inner Work</a>
			<div id="menu-button" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div id="mobile-menu-wrap">
			  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_id' => 'main-menu-wrap' ) ); ?>
                <div id="mobile-social-buttons">
                    <ul class="social-icons">
                        <li class="social-icon"><a href="https://www.facebook.com/btohana" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-icon"><a href="https://www.youtube.com/channel/UCa3mm095VDS9tOAJpwKc8ug/feed" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li class="social-icon"><a href="https://soundcloud.com/briantohana" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
        <div id="social-buttons">
            <ul class="social-icons">
                <li class="social-icon"><a href="https://www.facebook.com/btohana" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social-icon"><a href="https://www.youtube.com/channel/UCa3mm095VDS9tOAJpwKc8ug/feed" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li class="social-icon"><a href="https://soundcloud.com/briantohana" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
            </ul>
        </div>
	<div id="content" class="site-content">
