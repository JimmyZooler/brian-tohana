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
    <a class='scroll-arrow' href="#coaching"></a>
</header>
<div id="coaching" class="page-section">
    <div class="content-wrap">
        <div class="text-center opacity-zero" id="philosophy">
            <div class="content-inner">
                <?php the_field('my_philosophy'); ?>
            </div>
        </div>
    </div>
</div>
<div id="what-taught">
    <div class="page-section" >
        <div class="content-inner text-center opacity-zero" id="what-taught-inner">
                <?php the_field('section_2_heading'); ?>
                <?php the_field('section_2_content'); ?>
        </div>
    </div>
</div>
<div class="page-section text-center" id="four-pillars">
    <div class="content-wrap opacity-zero" id="four-pillars-content">
        <?php the_field('4_pillars_heading_1'); ?>
        <?php the_field('4_pillars_heading_2'); ?>
        <div class="row">
            <div class="pillar" style="border-right: 2px solid #333; border-bottom: 1px solid #333;">
                <?php the_field('1st_pillar') ?>
            </div>
            <div class="pillar" style="border-bottom: 1px solid #333;">
                <?php the_field('2nd_pillar') ?>
            </div>
            <div></div>
        </div>
        <div class="row">
            <div class="pillar" style="border-right: 2px solid #333;border-top: 1px solid #333;">
                <?php the_field('3rd_pillar') ?>
            </div>
            <div class="pillar"style="border-top: 1px solid #333;">
                <?php the_field('4th_pillar') ?>
            </div>
            <div></div>
        </div>
    </div>
</div>
<div id="typical-session" class="page-section">
    <div class="content-wrap opacity-zero">
        <h2>Coaching Services</h2>
    <?php the_field('typical_session'); ?></div>
</div>
<div class="facilitation" id="facilitation">
    <div class="content-wrap opacity-zero">
        <div class="page-section">
            <h2>Facilitation</h2>
            <?php the_field('facilitation_section'); ?>
        </div>
    </div>
</div>
<div id="back-to-top" class="opacity-zero">
    <a href="#masthead"></a>
</div>
<?php get_footer(); ?>
