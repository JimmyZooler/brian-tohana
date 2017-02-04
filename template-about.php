<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<div id="main-pages">
    <div class="main-view-pages">
        <div class="inner-content">
            <h1><?php the_field('main_heading'); ?></h1>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_1'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_2'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_3'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_4'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_5'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_6'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_7'); ?>
            </div>
            <div class="about-section">
                <?php the_field('about_section_8'); ?>
            </div>
        </div>
        <!--<div class="pattern-overlay" style="background: url('<?php echo get_template_directory_uri(); ?>/images/black-squares.png') repeat;"></div>-->
    </div>
</div>
<?php get_footer(); ?>