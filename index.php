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


<!--Services Section-->
<section class="services">
    <div class="container">
        <h6>Other Features</h6>
        <h1>Our Services</h1>
        <p>Turning Ideas into Interactive, Scalable Web Experiences.</p>
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