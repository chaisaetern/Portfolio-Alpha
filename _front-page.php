<?php
/**
 * Template Name: Front Page
 *
 * @package Portfolio-Alpha
 *
 */
?>

<?php get_header(); ?>


<div class="fp-container">
    
    <!-- Custom Navigation -->
    <?php get_template_part('template-parts/custom-navigation'); ?>
    
    <div class="fp-wrapper-top">
        <h1 class="fp-site-branding"><?php the_field('custom_site_title'); ?></h1>

        <!-- Custom Top Page BG -->
        <?php get_template_part('template-parts/top-page-bg'); ?>

        <div class="fp-text-container">
            <h2 id="hi"><?php the_field('fp_text_1'); ?></h2> {
            <h3>< <?php the_field('fp_text_2'); ?> /></h3>
            <h4>< <?php the_field('fp_text_3'); ?> <span><?php the_field('fp_text_4'); ?></span> /></h4>
            <h5>< <?php the_field('fp_text_5'); ?> /></h5>
            <h6>< <?php the_field('fp_text_6'); ?> /></h6>
            };
        </div>

        <div class="fp-img-container">
            <img src="<?php the_field('portfolio_image'); ?>" alt="" class="fp-img">
            <img src="<?php the_field('socials_img'); ?>" alt="" class="socials-img">
            <?php get_template_part('template-parts/socials'); ?>
        </div>

    </div>

    <!-- About Section -->
    <?php get_template_part('template-parts/about-page'); ?>

    <!-- Skills -->
    <?php get_template_part('template-parts/skill-card'); ?>

    <!-- Projects -->
    <?php get_template_part('template-parts/projects'); ?>
    
    <!-- Contact Form -->
    <?php get_template_part('template-parts/contact-page'); ?>
    
    
    <?php get_template_part('template-parts/custom-footer'); ?>
</div>


<?php get_template_part('template-parts/particles-effect'); ?>

<?php get_footer(); ?>