<?php

    //Page title
    $pageTitle = 'Contact Us';

    //Page Key 
    $pageKey = 'contact';

    //Background image
    $backgroundImage = 'images/contactUs.jpg';

    //Include header.php
    require 'includes/header.php';
?>

<!--Page Header-->
<?php
    //Include page header
    require 'includes/pageHeader.php';
?>

<!--Contact Us Section-->
<section class="contactUs">
    <div class="container">
        <h2>Connect With Us</h2>
        <p>Have any questions? We'd love to hear from you!</p>
       
        <!--Create container for contact form and contact info-->
        <div class="row">
            <div class="col-lg-6">
               
            <!--Contact Information-->
            <div class="contactInfo">
                <h3>Contact Information</h3>
                <p>Have any questions? I am here to help. Fill up this form or send me an email or call.</p>
                <ul class="list-unstyled informationList">
                    <li><i class='bx bx-map-pin'></i> 12172 SW 52nd CT, Cooper City, FL 33330</li>
                    <li><i class='bx  bx-envelope-open'></i> <a href="mailto:velezdaniel61622gmail.com">velezdaniel61622gmail.com</a></li>
                    <li><i class='bx  bx-phone'></i> <a href="tel:305-527-0765">305-527-0765</a></li>
                </ul>

                <!--Google Map-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.37787314041!2d-80.31288472402717!3d26.053904296468257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a7ae27c9e771%3A0x1d8d866e38d06c4b!2s12172%20SW%2052nd%20Ct%2C%20Cooper%20City%2C%20FL%2033330!5e0!3m2!1sen!2sus!4v1748461379346!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
            
            <!--Contact Form-->
            <div class="col-lg-6">
                <form action="#" method="post" id="contactForm">
                    <div class="row">
                        <!--First and Last Name-->
                        <div class="col-md-6 mb-3">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row">
                         <!--Email and Phone Number-->
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@example.com">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1 (000) 000-0000">
                        </div>
                    </div>

                    <!--Subject line-->
                    <div class="mb-3">
                        <label for="subject">Subject</label>
                        
                        <!--Create select box for subject line-->
                        <select class="form-select" id="subject" name="subject">
                            <option selected>Choose...</option>
                            <option value="General Inquiry">General Inquiry</option>    
                            <option value="Order Inquiry">Order Inquiry</option>
                            <option value="Product Inquiry">Product Inquiry</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!--Message-->
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
                    </div>

                    <!--Submit Button-->
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</section>

<?php
    //Include footer.php
    require 'includes/footer.php';
?>