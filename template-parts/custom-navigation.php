<!-- 
    CUSTOM NAVIGATION SCROLL TO PAGE ON CLICK (JQUERY)
-->


<div class="fp-nav">

<?php 
    $links = array(
        array('name' => 'Home', 'href' => '#', 'iconClass' => 'fa-solid fa-house-user'),
        array('name' => 'About', 'href' => '#', 'iconClass' => 'fa-solid fa-address-card'),
        array('name' => 'Projects', 'href' => '#', 'iconClass' => 'fa-solid fa-diagram-project'),
        array('name' => 'Contact', 'href' => '#', 'iconClass' => 'fa-solid fa-file-signature'),
    );

    for($i = 0; $i < count($links); $i++) {

?>
    
        <a href="<?php echo $links[$i]['href']; ?>" id="home" class="fp-nav-link">
            <i class="<?php echo $links[$i]['iconClass']; ?>"></i>
            <span><?php echo $links[$i]['name']; ?></span>
        </a>

    <?php } ?>

</div>