<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brian_Tohana
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
     if ( in_category('featured') ) : ?>
    <?php    echo '<span class="featured-tag">Featured</span>'; ?>
     <?php endif; ?>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'brian_tohana' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brian_tohana' ),
				'after'  => '</div>',
			) );
		?>
        <a class="moretag" href="<?php echo get_permalink($post->ID); ?>"> Read more &raquo;</a>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php brian_tohana_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
