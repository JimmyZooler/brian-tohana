<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
<div id="main">
    <div class="main-view">
<!--        <div class="pattern-overlay" style="background: url('<?php echo get_template_directory_uri(); ?>/images/black-squares.png') repeat;"></div>
        --><div class="dark-overlay"></div>
        <iframe id="desktop-slideshow" width="100%" height="100%" style="position: absolute; border: none;z-index: 3;" marginheight="0" marginwidth="0" src="<?php echo get_template_directory_uri(); ?>/reveal.js-3.4.0/index.html#/">
            Sorry your browser does not support this playfulness!
        </iframe>
        <iframe id="mobile-slideshow" width="100%" height="100%" style="position: absolute; border: none;z-index: 3;" marginheight="0" marginwidth="0" src="<?php echo get_template_directory_uri(); ?>/reveal.js-3.4.0/mobile.html#/">
            Sorry your browser does not support this playfulness!
        </iframe>
        <div id="end-slideshow-cta" class="hide">
            <a href="http://briantohana.flywheelsites.com/about"></a>
        </div>
    </div>
    <div id="alert-to-landscape" class="hide">
        <div class="helper">
            <h2>Please rotate to landscape mode.<br>Special features only available on desktop.</h2>
        </div>
    </div>
    <div class='open-footer'><span class='arrow'></span><span>CONNECT</span></div>
</div>

<?php get_footer(); ?>
