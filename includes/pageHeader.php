<?php
//Create default background img if not set
if(empty($backgroundImage)) {

    //Set background image to default
    $backgroundImage = 'images/deskBackground.jpg';
}

?>
<section class="pageHeader" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $backgroundImage; ?>); background-size: cover; background-position: center;">
    <div class="container">
        <h2><?php echo $pageTitle; ?></h2>
    </div>
</section>