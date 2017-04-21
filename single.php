<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Brian_Tohana
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single'); ?>

			<h4>Liked this post? Share it, comment, or check out another one below!</h4>
			<?php
			the_post_navigation();

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<aside id="secondary" class="widget-area" role="complementary">
    <section id="text-2" class="widget widget_text">
        <h2 class="widget-title">Don't miss a post!</h2>
        <div class="textwidget">
            <p>Recieve free email updates</p>
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
                    <div class="mc-field-group subscribe-email">
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email">
                </div>
                <div class="subscribe-button"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
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
    </section>
    <section class="widget widget_tag_cloud">
        <h2 class="widget-title">Tags</h2>
        <?php
            $tags = get_tags();
            $html = '<p>';
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );
                        
                $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                $html .= "{$tag->name}</a>";
            }
            $html .= '</p>';
            echo $html;
        ?>
    </section>
</aside>
<?php
get_footer();
