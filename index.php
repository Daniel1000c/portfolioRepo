<?php

    //Page key 
    $pageKey = 'home';

    //Include header.php
    require 'includes/header.php';
?>  

<!--Hero Section-->
<section class="hero">
    <div class="container">
        <h2>Hi, I'm <span>Daniel Velez</span></h2>

        <!--Button container-->
        <div class="btnContainer">
            <a href="pdf/Daniel_Velez_Resume.pdf" download="Daniel_Velez_Resume.pdf">Resume</a>
            <a href="projects.php">Projects</a>
        </div>
    </div>
</section>

<?php
    //Include contact.php
    require 'includes/contactSection.php';
?>

<?php
    //Include footer.php
    require 'includes/footer.php';
?>