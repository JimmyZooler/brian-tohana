<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
<div id="main">
    <div class="main-view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/brian_center.jpg');">
        <div class="pattern-overlay" style="background: url('<?php echo get_template_directory_uri(); ?>/images/black-squares.png') repeat;"></div>
    </div>
    <div class="dark-overlay"></div>
    <div class="social-buttons">
    </div>
    <div class="next-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class="prev-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class="main-intro">
        <div class="intro-content">
            <div class="title-box">
                <a class="btn enter">Enter<span class="arrow"></span></a>
            </div>
        </div>
        <div class="dark-overlay"></div>
    </div>
    <div class='open-footer'><span class='arrow'></span><span>CONNECT</span></div>
</div>

<?php get_footer(); ?>
