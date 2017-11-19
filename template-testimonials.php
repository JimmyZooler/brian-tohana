<?php
/*
Template Name: Testimonials Page
*/
?>

<?php get_header(); ?>


<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php    $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
          <?php      get_template_part( 'template-parts/content-testimonials', get_post_format() );

            endwhile;

            the_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>