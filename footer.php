<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brian_Tohana
 */

?>

	</div><!-- #content -->
        <div class='footer-overlay zero-width'></div>
	<footer id="colophon" class="site-footer invisible" role="contentinfo">
            <div class='close-footer'><span class='arrow'></span><span>Close</span></div>
            <div class="subscription-bar">
                <div class="row">
                    <div class="subscription-heading">
                        <p>The unknown awaits.</p>
                    </div>
                    <div class="subscription-form">
                        <!-- Begin MailChimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                                #mc_embed_signup{background:#fff; clear:left; font:14px; }
                                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                        <form action="//briantohana.us15.list-manage.com/subscribe/post?u=1377b0157de21fa2da3d73e82&amp;id=f32726217d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group subscribe-name">
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
                        </div>
                        <div class="mc-field-group subscribe-email">
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email *">
                        </div>
                        <div class="subscribe-button"><input type="submit" value="Join Us" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_647fb5b2a53b7804687e6b819_b8ae23cbfe" tabindex="-1" value=""></div>
                            
                            </div>
                        </form>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>
            <div class="site-info">
                <p>Made with ♥ by <a href="http://getgeometric.com">Geometric</a>.</p>
                <p id="copyright">© 2017 Brian Tohana. All rights reserved.</p>
            </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
