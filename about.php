<?php

    //Page title
    $pageTitle = 'About Us';

    //Page Key
    $pageKey = 'about';

    //Background image
    $backgroundImage = 'images/aboutUs.jpg';

    //Include header.php
    require 'includes/header.php';
?>

<!--Page Header-->
<?php
    //Include page header
    require 'includes/pageHeader.php';
?>

<!--Create about us intro section-->
<section class="introText">
   <div class="container">
        <h2>My Story</h2>
        <p>
            I am a beginner web developer looking to expand my knowledge and skills!
            I am currently a college student studying web development. I look to further my skills in the future  to create interactive web experiences. 
        </p>
        <a href="about.php#aboutUs">Learn More &#8594;</a>
   </div>
</section>

<!--About Us Section-->
<section class="aboutUs">
    <div class="container" id="aboutUs">
        <!--Create container for about us section-->
        <div class="row">
            <!--Create column for about us section-->
            <div class="col-lg-6 creatorImg">
                <!--Creator Image-->
                <img src="images/creatorImage.jpg" alt="Daniel Velez: Web Developer">
            </div>
            <!--Create column for about us section-->
            <div class="col-lg-6 creatorText">
                <h2><span>My</span> Mission</h2>
                <p>
                    I am a beginner web developer looking to expand my knowledge and skills!
                    I am currently a college student studying web development. I look to further my skills in the future  to create interactive web experiences. 
                </p>
                <ul>
                    <li>Time Management</li>
                    <li>Collaborative Skills</li>
                    <li>Problem Solving</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Skills Section-->
<section class="Skills">
    <div class="container">
        <h2>Skills</h2>
        <p>Check out the skills that I have acquired so far in my web developer journey.</p>
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