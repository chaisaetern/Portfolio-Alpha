<!-- 
    CUSTOM NAVIGATION SCROLL TO PAGE ON CLICK (JQUERY)
-->


<div class="fp-nav">

    <div class="port-header">
        
    </div>

<?php 
    $links = array(
        array('name' => 'Home', 'id' => 'home', 'href' => '#', 'iconClass' => 'fa-solid fa-house-user'),
        array('name' => 'About', 'id' => 'about', 'href' => '#', 'iconClass' => 'fa-solid fa-address-card'),
        array('name' => 'Skills', 'id' => 'skills', 'href' => '#', 'iconClass' => 'fa-solid fa-book'),
        array('name' => 'Projects', 'id' => 'projects', 'href' => '#', 'iconClass' => 'fa-solid fa-diagram-project'),
        array('name' => 'Contact', 'id' => 'contact', 'href' => '#', 'iconClass' => 'fa-solid fa-file-signature'),
    );

    for($i = 0; $i < count($links); $i++) {

?>
    
        <a href="<?php echo $links[$i]['href']; ?>" id="<?php echo $links[$i]['id']; ?>" class="fp-nav-link">
            <i class="<?php echo $links[$i]['iconClass']; ?>"></i>
            <span><?php echo $links[$i]['name']; ?></span>
        </a>

    <?php } ?>

</div>