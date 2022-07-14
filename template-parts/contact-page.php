<?php
/**
 * Template Name: Contact Form (WPCF7 plugin) Template Part
 *
 * @package Portfolio-Alpha
 *
 */
?>

<div class="contact-container">
    <h2>Contact Me</h2>
    <div class="contact-wrapper">
        <div class="contact-top">
            <div class="contact">    
                <i class="fa-solid fa-envelope"></i>
                <a href="#"><?php the_field('social_link_4'); ?><?php the_field('contact_link_text_1'); ?></a>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contact">    
                <i class="fa-brands fa-github"></i>
                <a href="<?php the_field('social_link_3'); ?>"><?php the_field('contact_link_text_2'); ?></a>
            </div>
            <div class="contact">    
                <i class="fa-brands fa-linkedin-in"></i>
                <a href="<?php the_field('social_link_2'); ?>"><?php the_field('contact_link_text_3'); ?></a>
            </div>
        </div>
    </div>
</div>