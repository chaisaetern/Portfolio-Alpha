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
            <h4>From Cell Blocks to Code Blocks.</h4>
            <h4>My journey began in October of 2018 in San Quentin (The Last Mile)</h4>
            <h4>First languages learned: HTML5, CSS3 &amp; JavaScript.</h4>
            <h4>I've also dabbled in a bit of MERN stack (seems like ages ago).</h4>
            <h4>My journey as a coder has been a very grateful experience.</h4>
            <h4>I've learned to think differently from my mistakes in the process.</h4>
            <h4>Other hobbies include: Gaming, Fishing, Coding, Dreaming.</h4>
            <h4>THANKS FOR DROPPING BY!</h4>
        </div>
        <div class="about-img-container">
            <h4 class="about-img-text">
                @San Quentin - TheLastMile (Code.7370) + Stanford Collaborative Engineering Project 2019 <br>
                <a class="sq-news-link" href="https://sanquentinnews.com/stanford-joins-with-sq-in-collaborative-engineering-project/">
                <i class="fa-solid fa-arrow-right"></i> Source: San Quentin News <i class="fa-solid fa-arrow-left"></i>
                </a>
            </h4>
            <img src="<?php the_field('about_img'); ?>" alt="" class="about-img">
        </div>
    </div>
</div>