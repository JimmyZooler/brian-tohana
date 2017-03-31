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
                    <img src="../wp-content/themes/brian_tohana/images/contact-icon-bubbles.png">
                    <h2>Let's connect</h2>
                    <p>I would love to hear from you.</p>
                </div>
                <div id="contact-form">
                    <?php get_sidebar(); ?>
                </div>
                <div id="typeform">
                    <div class="typeform-widget" data-url="https://trueinnerwork.typeform.com/to/ILdXY1" style="width: 100%; height: 500px;"></div><script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id="typef_orm",b="https://s3-eu-west-1.amazonaws.com/share.typeform.com/";if(!gi.call(d,id)){js=ce.call(d,"script");js.id=id;js.src=b+"widget.js";q=gt.call(d,"script")[0];q.parentNode.insertBefore(js,q)}})()</script>
                </div>
            </div>
        </div>
    </div>
    <div class="social-buttons">
    </div>
</div>

<?php get_footer(); ?>
