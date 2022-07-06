<?php
/**
 * Template Name: Front Page
 *
 * @package Portfolio-Alpha
 *
 */
?>

<?php get_header(); ?>

<img src="<?php the_field('top_page_background_1'); ?>" alt="" class="top-bg-1">
<img src="<?php the_field('top_page_background_2'); ?>" alt="" class="top-bg-2">

<div class="fp-container">

    <!-- Custom Navigation -->
    <?php get_template_part('template-parts/custom-navigation'); ?>

    <div class="fp-wrapper-top">

        <div class="fp-text-container">
            <h2>Hello.</h2> {
            <h3>I'm Chai.</h3>
            <h4>Pronouns: <span>He/Him/His</span></h4>
            <h5>I am a junior Front-End <br> WordPress developer.</h5>
            <h6>I am also a Gamer.</h6>
            };
        </div>
        <div class="fp-img-container">
            <img src="<?php the_field('portfolio_image'); ?>" alt="" class="fp-img">
            <?php get_template_part('template-parts/socials'); ?>
        </div>

    </div>


    <!-- About Section -->
    <?php get_template_part('template-parts/about-page'); ?>

    <!-- Projects -->
    <?php get_template_part('template-parts/projects'); ?>
    
    <!-- Contact Form -->
    <?php get_template_part('template-parts/contact-page'); ?>

</div>

<?php get_template_part('template-parts/particles-effect'); ?>

<?php get_footer(); ?>