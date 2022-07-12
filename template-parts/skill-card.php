<?php
/**
 * Template Name: Skills Template Part
 *
 * @package Portfolio-Alpha
 *
 */
?>

<div class="skill-container">

    <h4 class="skill-header">Skills</h4>
    
    <?php 
    $skills = array(
        array('lang' => 'HTML5', 'effc' => '79%', 'icon' => 'https://cdn-icons-png.flaticon.com/512/1532/1532556.png'),
        array('lang' => 'CSS', 'effc' => '77%', 'icon' => 'https://cdn-icons-png.flaticon.com/512/186/186319.png'),
        array('lang' => 'JS/ES6', 'effc' => '68%', 'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968292.png'),
        array('lang' => 'PHP/WordPress', 'effc' => '44%', 'icon' => 'https://cdn-icons-png.flaticon.com/512/174/174881.png'),
        // array('lang' => 'Still Learning', 'effc' => '100%', 'hours' => 'Lifetime', 'icon' => 'https://cdn-icons-png.flaticon.com/512/4616/4616734.png')
    );
    for($i = 0; $i < count($skills); $i++) {
    ?>
    
    <div class="skill" style="--width: <?php echo $skills[$i]['effc']; ?>">
        
        <div class="skill-text"> 
            
            <div class="skill-icon-container">
                <img src="<?php echo $skills[$i]['icon']; ?>" alt="skill" class="skill-icon">
                <h6 class="skill-title"><?php echo $skills[$i]['lang']; ?></h6>
            </div>
            
            <h6>
                <i class="fa-solid fa-brain"></i>
                <?php echo $skills[$i]['effc']; ?>
            </h6>
            
        </div>

    </div>

    <? } ?>
    
</div>