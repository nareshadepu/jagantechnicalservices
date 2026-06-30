<?php
$page_title = "Contact Us";
$meta_description = "Get in touch with Jagan Kasarapu Technical and Cleaning Services. Located in Bur Dubai, we are ready to assist with all your home and commercial cleaning needs. Call us today!";
include 'header.php';
?>

     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/banner/10.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area 
    ============================================= -->
    <div id="contact" class="contact-area default-padding">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-lg-4 info">
                        <div class="content text-light text-center">
                            <div class="thumb">
                                <img src="assets/img/illustration/4.png" alt="Thumb">
                            </div>
                            <ul>
                                <li>
                                    <i class="fal fa-map-marker-alt"></i>
                                    <p>
                                        Office no M06 Al Sharabi Building Al souq Al Kabeer, <br> Al Fahidi Bur dubai, <br> Dubai Uae
                                    </p>
                                </li>
                                <li>
                                    <i class="fal fa-phone-alt"></i>
                                    <p>
                                        Landline: 04 577 3090 <br> Ph: +971 552437393, +971 569809216 <br> admin@jagantechnicalservices.ae
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 contact-form-box">
                        <div class="form-box">
                            <h2>Let's talk?</h2>
                            <p>
                                Get in touch with Jagan Kasarapu Technical and Cleaning Services to schedule your next cleaning. We respond quickly!
                            </p>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="container">
            <div class="google-maps">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps?cid=12821971833439952099&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en&gl=IN&source=embed&output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

    <?php include 'footer.php'; ?>