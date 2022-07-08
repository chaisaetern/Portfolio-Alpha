<?php
/**
 * Template Name: Project Template Part
 *
 * @package Portfolio-Alpha
 *
 */
?>

<div class="project-container">
    <h2 class="project-header">Projects</h2>
    <div class="project-wrapper">

        <a href="#" class="project">
            <img src="<?php the_field('project_bg'); ?>" alt="" class="project-bg">
            <h4 class="project-desc"><?php the_field('project_desc_1') ?></h4>
            <h3 class="project-title"><?php the_field('project_title_1') ?></h3>
        </a>

    </div>
</div>