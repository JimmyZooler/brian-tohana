<?php
/*
Template Name: Services Page
*/
?>

<?php get_header(); ?>
<header class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/brian_parlament.jpg');">
    <div class="helper">
        <h1>Services</h1>
        <h3 id="services-quote"><?php the_field('main_heading'); ?></h3>
        
    </div>
    <div class="dark-overlay"></div>
</header>
<div class="coaching">
    <div class="page-section">
        <h2>Coaching</h2>
        <?php the_field('my_philosophy'); ?>
        <div id="4-pillars"><?php the_field('section_2'); ?></div>
        <?php the_field('section_3'); ?>
        <?php the_field('typical_session'); ?>
        
    </div>
</div>
<div class="facilitation">
    <div class="page-section">
        <h2>Facilitation</h2>
        <?php the_field('facilitation_section'); ?>
    </div>
</div>

<?php get_footer(); ?>
