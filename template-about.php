<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<header class="page-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/new_about.jpg'); background-position: top; background-attachment: fixed;">
    <div class="helper">
        <h1>About Me</h1>
        <h3 id="about-quote"><?php the_field('main_heading'); ?></h3>
    </div>
    <div class="dark-overlay"></div>
    <a class='scroll-arrow' href="#main-pages"></a>
</header>
<div id="main-pages">
    <div class="main-view-pages">
        <div id="about-section-2" class="about-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/snow_legs_2.png');">
            <div class="inner-content">    
                <?php the_field('about_section_2'); ?>
            </div>
        </div>
        <div id="about-section-3" class="about-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/brian_bench.jpg');">
            <div class="inner-content"> 
                <?php the_field('about_section_3'); ?>
            </div>
        </div>
        <div id="about-section-4"  class="about-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/brian_cutout_2.png');">
            <div class="inner-content"> 
                <?php the_field('about_section_4'); ?>
            </div>
        </div>
        <div id="about-section-5" class="about-section">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/brian_blue.jpg" />
            <div class="inner-content"> 
                <?php the_field('about_section_5'); ?>
                <div id="button-helper"><a href="../services">Check out how I can help you here</a></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>