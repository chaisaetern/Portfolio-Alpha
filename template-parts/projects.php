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

        <a href="<?php the_field('project_link_1'); ?>" class="project">
            <img src="<?php the_field('project_bg_1'); ?>" alt="" class="project-bg">
            <h4 class="project-desc"><?php the_field('project_desc_1'); ?></h4>
            <h3 class="project-title"><?php the_field('project_title_1'); ?></h3>
        </a>
        <a href="<?php the_field('project_link_2'); ?>" class="project">
            <img src="<?php the_field('project_bg_2'); ?>" alt="" class="project-bg">
            <h4 class="project-desc"><?php the_field('project_desc_2'); ?></h4>
            <h3 class="project-title"><?php the_field('project_title_2'); ?></h3>
        </a>
        <a href="<?php the_field('project_link_3'); ?>" class="project">
            <img src="<?php the_field('project_bg_3'); ?>" alt="" class="project-bg">
            <h4 class="project-desc"><?php the_field('project_desc_3'); ?></h4>
            <h3 class="project-title"><?php the_field('project_title_3'); ?></h3>
        </a>
        <a href="<?php the_field('project_link_4'); ?>" class="project">
            <img src="<?php the_field('project_bg_4'); ?>" alt="" class="project-bg">
            <h4 class="project-desc"><?php the_field('project_desc_4'); ?></h4>
            <h3 class="project-title"><?php the_field('project_title_4'); ?></h3>
        </a>

    </div>
</div>