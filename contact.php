<!DOCTYPE html>
<html lang="en">


<head>
    <title>Maruti International</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/agricul.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "nav.php";

    ?>
    <!-- Contact Us Section Start Here -->
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="contac-top">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="icofont-google-map"></i>
                            </div>
                            <div class="contact-details">
                                <p>Shop No.30, Pusph Puneet Villa, Maruti Estate, Agra, Uttar Pradesh, India - 282010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="icofont-phone"></i>
                            </div>
                            <div class="contact-details">
                                <p>+91 79836 38411, +91 95209 50370, +91 70643 30643</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="icofont-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <p>
                                    internationalmaruti67@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contac-bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="location-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28394.117583002113!2d77.95094240036629!3d27.179416222455405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397477042adb6f11%3A0x43f6c1749e423f86!2sShahganj%2C%20Agra%2C%20Uttar%20Pradesh%20282010!5e0!3m2!1sen!2sin!4v1761813216556!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact-form">
                            <form action="#" method="POST" id="contactform" class="comment-form">
                                <input type="text" name="name" class="name" placeholder="Your Name*" required>
                                <input type="email" name="email" class="email" placeholder="Your Email*" required>
                                <input type="text" name="subject" class="phone" placeholder="Phone*" required>
                                <textarea class="message" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                <button onclick="contact()" class="lab-btn">
                                    <span>Send Message</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Section Ending Here -->


    <?php
    include "footer.php";

    ?>