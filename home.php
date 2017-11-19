<?php
/*

*/
?>

<?php get_header(); ?>


<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

            <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

            brian_tohana_paging_nav();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_sidebar(); ?>
<!--
<aside id="secondary" class="widget-area" role="complementary">
    <section id="text-2" class="widget widget_text">
        <h2 class="widget-title">Don't miss a post!</h2>
        <div class="textwidget">
            <p>Recieve free email updates</p>
            <div class="subscription-form">
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
                        </div>
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_647fb5b2a53b7804687e6b819_b8ae23cbfe" tabindex="-1" value=""></div>
                    
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                
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
</aside>-->

<?php get_footer(); ?>