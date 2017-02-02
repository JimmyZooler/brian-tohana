<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
<div id="main">
    <div class="main-view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/brian_center.jpg');">
<!--        <div class="pattern-overlay" style="background: url('<?php echo get_template_directory_uri(); ?>/images/black-squares.png') repeat;"></div>
        --><div class="dark-overlay"></div>
        <iframe width="100%" height="100%" style="position: absolute; border: none;z-index: 3;" marginheight="0" marginwidth="0" src="<?php echo get_template_directory_uri(); ?>/reveal.js-3.4.0/index.html#/">
            Sorry your browser does not support this playfulness!
        </iframe>
          <div class="bg_video" style="position: fixed;top: 0;right: 0;bottom: 0; left: 0; overflow: hidden; z-index: -1;">
            <video class="fullscreen-bg__video" width="100%" height="100%" style="position: absolute; z-index: 2;" playsinline autoplay muted loop> <source type="video/mp4" src="http://localhost/briantohana/wp-content/themes/brian_tohana/dist/videos/Side_to_Side_Low_Res.mp4"></video>
          </div>
    </div>
<!--    <div class="next-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class="prev-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>-->
    <div class="main-intro">
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
