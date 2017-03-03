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
        <iframe width="100%" height="100%" style="position: absolute; border: none;z-index: 3;" marginheight="0" marginwidth="0" src="<?php echo get_template_directory_uri(); ?>/reveal.js-3.4.0/index.html#/">
            Sorry your browser does not support this playfulness!
        </iframe>
        <div id="end-slideshow-cta hide">
            <a href="/about">Learn more about me.</a>
        </div>
    </div>
    <div class="main-intro hide">
        <div class="intro-content">
            <div class="title-box">
                <a class="btn enter">I Believe<span class="arrow"></span></a>
            </div>
        </div>
        <div class="dark-overlay"></div>
    </div>
    <div class='open-footer'><span class='arrow'></span><span>CONNECT</span></div>
</div>

<?php get_footer(); ?>
