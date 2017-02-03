<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
			
<div id="main-contact" >
    <div class="main-view-contact">
        <div class="contact" >
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
<!--    <div class="next-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>
    <div class="prev-triangle"><img src="<?php echo get_template_directory_uri(); ?>/images/triangle-icon2_larger.png" /></div>-->
    <!--<div class='open-footer'><span class='arrow'></span><span>CONNECT</span></div>-->
</div>

<?php get_footer(); ?>
