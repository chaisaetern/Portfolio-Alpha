<?php
/**
 * Template Name: About Template Part
 *
 * @package Portfolio-Alpha
 *
 */
?>

<div class="fp-about">

    <!-- Custom About Page BG -->
    <?php get_template_part('template-parts/about-page-bg'); ?>

    <div class="about-wrapper">
        <div class="about-me">
            <h2 class="about-title">About Me</h2>
            <h4><?php the_field('about_desc_1'); ?></h4>
            <h4><?php the_field('about_desc_2'); ?></h4>
            <h4><?php the_field('about_desc_3'); ?></h4>
            <h4><?php the_field('about_desc_4'); ?></h4>
            <h4><?php the_field('about_desc_5'); ?></h4>
            <h4><?php the_field('about_desc_6'); ?></h4>
            <h4><?php the_field('about_desc_7'); ?></h4>
            <h4><?php the_field('about_desc_8'); ?></h4>
        </div>
        <div class="about-img-container">
            <h4 class="about-img-text">
                <?php the_field('about_img_text'); ?> <br>
                <a class="sq-news-link" href="<?php the_field('about_img_src_link'); ?>">
                <i class="fa-solid fa-arrow-right"></i> <?php the_field('about_img_src_text'); ?> <i class="fa-solid fa-arrow-left"></i>
                </a>
            </h4>
            <img src="<?php the_field('about_img'); ?>" alt="" class="about-img">
        </div>
    </div>
</div>