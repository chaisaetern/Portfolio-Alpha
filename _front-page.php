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

    <div class="fp-wrapper-top">

        

        <div class="fp-text-container">
            <h2>Hello. </h2> {
            <h3>I'm Chai.</h3>
            <h4>Pronouns: <span>He/Him/His</span></h4>
            <h5>I am a junior Front-End <br> WordPress developer.</h5>
            <h6>I am also a Gamer.</h6>
            };
        </div>
        <div class="fp-img-container">
            <img src="<?php the_field('portfolio_image'); ?>" alt="" class="fp-img">
        </div>

    </div>

    <div class="fp-about">
        <div class="about-wrapper">
            <div class="about-me">
                <h2 class="about-title">About Me</h2>
                <h4>From cell block to code block.</h4>
                <h4>I began learning to code in October of 2018, beginning with HTML5, CSS3, JavaScript, plus more.</h4>
                <h4>I've also dabbled in a bit of MERN stack (seems like ages ago).</h4>
                <h4>My journey as a coder has been a very grateful experience.</h4>
                <h4>Other hobbies include: Gaming, Fishing, Coding, Thinking, Dreaming.</h4>
                <p>Here is also a list of self-evaluation:</p>
            </div>
            <?php get_template_part('template-parts/skill-card'); ?>
        </div>
    </div>


</div>

<?php get_template_part('template-parts/particles-effect'); ?>

<?php get_footer(); ?>