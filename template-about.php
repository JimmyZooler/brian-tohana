<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<header class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/brian_center.jpg'); background-position: top;">
    <div class="helper">
        <h1><?php the_field('main_heading'); ?></h1>
        <h3>The world is waiting for you to become all you can be.<br> - Brian Tohana</h3>
    </div>
    <div class="dark-overlay"></div>
</header>
<div id="main-pages">
    <div class="main-view-pages">
        <div class="inner-content">
            <hr>
            <div class="about-section">
                <?php the_field('about_section_2'); ?>
            </div>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_3'); ?>
            </div>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_4'); ?>
            </div>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_5'); ?>
            </div>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_6'); ?>
            </div>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_7'); ?>
            </div>
            <hr>
            <div class="about-section">
                <?php the_field('about_section_8'); ?>
            </div>
            <hr>
        </div>
        <!--<div class="pattern-overlay" style="background: url('<?php echo get_template_directory_uri(); ?>/images/black-squares.png') repeat;"></div>-->
    </div>
</div>
<?php get_footer(); ?>