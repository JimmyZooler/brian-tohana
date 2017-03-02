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
        <?php the_field('section_2'); ?>
        <?php the_field('section_3'); ?>
        <?php the_field('typical_session'); ?>
        
<!--        <div class="services">
            <img src='<?php echo get_template_directory_uri(); ?>/dist/images/intimacy.png' />
            <h3>Relationships + Intimacy</h3>
            <p>We compromise our truth for company.</p>
            <p>We’re not alone, but we feel alone.</p>
            <p>We want to be accepted for who we are but we’re afraid to be seen as we are.</p>
        </div>
        <div class="services">
            <img src='<?php echo get_template_directory_uri(); ?>/dist/images/business.png' />
            <h3>Personal Development + Business</h3>
            <p>What got you here won’t get you there.</p>
            <p>What we’re most scared of we’re also most passionate about.</p>
            <p>We’re afraid of what we might find when we really look at ourselves.</p>
        </div>
        <div class="services">
            <img src='<?php echo get_template_directory_uri(); ?>/dist/images/healing.png' />
            <h3>Transformation + Healing</h3>
            <p>We’re all hurting but we hide our pain.</p>
            <p>We don’t feel worthy of what we want.</p>
            <p>We want to be free from limitation to be our true self.</p>
        </div>-->
    </div>
</div>
<div class="facilitation">
    <div class="page-section">
        <h2>Facilitation</h2>
        <?php the_field('facilitation_section'); ?>
    </div>
</div>

<?php get_footer(); ?>
