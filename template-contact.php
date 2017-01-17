<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
			
<div id="main" style="display: table;">
    <div class="main-view" style="display: table;position: absolute; width:100%; ">
        <div class="contact" style="display: table-cell; vertical-align: middle;height: 100%;">
            <div class="row">
                <div id="contact-heading">
                    <h2>Let's Connect</h2>
                    <p>Send me a message. I would love to hear from you.</p>
                </div>
                <div id="contact-form">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="social-buttons">
    </div>
    <div class="next-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class="prev-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class='open-footer'><span class='arrow'></span><span>CONNECT</span></div>
</div>

<?php get_footer(); ?>
