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
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle hide" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brian_tohana' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
        <audio id="background_audio" loop="loop" preload="none" volume="1">
            <source src="<?php echo get_template_directory_uri(); ?>/wanaooou.mp3" />
        </audio> 
        <div id="mute"><div id="audio-icon" class="mute-on"></div></div>
        <div id="social-buttons">
            <ul class="social-icons">
                <li class="social-icon"><a href="https://www.facebook.com/youngprosmvmt/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social-icon"><a href="https://www.instagram.com/youngprosmvmt/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="social-icon"><a href="https://www.youtube.com/channel/UChwRZLioUjxODgHFOyP-7uA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div id="alert-to-landscape" class="hide">
            <div class="helper">
                <h2>Please rotate. This is best viewed in landscape mode.</h2>
            </div>
        </div>
	<div id="content" class="site-content">
