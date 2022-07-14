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

    <?php 
        $projects = array(
            array('link' => get_field('project_link_1'), 'bg' => get_field('project_bg_1'), 'desc' => get_field('project_desc_1'), 'title' => get_field('project_title_1')),
            array('link' => get_field('project_link_2'), 'bg' => get_field('project_bg_2'), 'desc' => get_field('project_desc_2'), 'title' => get_field('project_title_2')),
            array('link' => get_field('project_link_3'), 'bg' => get_field('project_bg_3'), 'desc' => get_field('project_desc_3'), 'title' => get_field('project_title_3')),
            array('link' => get_field('project_link_4'), 'bg' => get_field('project_bg_4'), 'desc' => get_field('project_desc_4'), 'title' => get_field('project_title_4')),
        );

        for($i = 0; $i < count($projects); $i++) {
    ?>
        
        <a href="<?php echo $projects[$i]['link']; ?>" class="project">
            <img src="<?php echo $projects[$i]['bg']; ?>" alt="" class="project-bg">
            <h4 class="project-visit">View</h4>
            <h4 class="project-desc"><?php echo $projects[$i]['desc']; ?></h4>
            <h3 class="project-title"><?php echo $projects[$i]['title']; ?></h3>
        </a>

        <?php } ?>

    </div>
</div>