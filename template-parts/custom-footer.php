<?php
/**
 * Template Name: Custom Footer Template Part
 *
 * @package Portfolio-Alpha
 *
 */
?>

<footer class="custom-footer">
    <p>
        &copy; 2022 
        <span><?php the_field('custom_footer_signature'); ?></span> 
        <?php the_field('custom_footer_text'); ?>
    </p>
</footer>