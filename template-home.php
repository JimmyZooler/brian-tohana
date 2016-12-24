<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
<div id="main">
    <div class="main-intro-page">
        <div class="intro-content">
            
        </div>
    </div>
    <div class="main-view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/brian_center.jpg');">
        <div class="pattern-overlay" style="background: url('<?php echo get_template_directory_uri(); ?>/images/pattern_overlay.png') repeat;"></div>
    </div>
    <div class="dark-overlay"></div>
    <div class="social-buttons">
        
    </div>
    <div class="next-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class="prev-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
</div>

<?php get_footer(); ?>
