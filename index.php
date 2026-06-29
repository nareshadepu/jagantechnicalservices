<?php
$page_title = "Home";
$meta_description = "Jagan Technical Services provides top-rated home and commercial cleaning in Dubai. From deep cleaning to maid services, we guarantee a spotless space.";
include 'header.php';
?>

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area bg-cover shadow theme-hard text-light text-multi-weight" style="background-image: url(assets/img/banner/19.jpg);">
        
        <div class="banner-items">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="content">
                                    <h2 data-animation="animated slideInRight">Professional <span>Cleaning Services in Dubai</span></h2>
                                    <p data-animation="animated slideInLeft">
                                        Jagan Technical Services offers premium home and commercial cleaning solutions to keep your spaces spotless.
                                    </p>
                                    <div class="video-button">
                                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube video-btn theme"><i class="fal fa-play"></i>Our Story</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="appinment-forms">
                                    <h2>Free Estimate</h2>
                                    <p>
                                        Get a quick response within 24 hours
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
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                                    <span class="alert-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <select name="subject" class="form-control">
                                                        <option value="Choose Subject">Choose Subject</option>
                                                        <option value="Residential Cleaning">Residential Cleaning</option>
                                                        <option value="Commercial Cleaning">Commercial Cleaning</option>
                                                        <option value="Deep Cleaning">Deep Cleaning</option>
                                                        <option value="Move In/Out Cleaning">Move In/Out Cleaning</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button class="btn-animation dark border" type="submit" name="submit" id="submit">
                                                    <span>Get Estimate <i class="fas fa-angle-right"></i></span>
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
                <!-- Shape -->
                <div class="shape-bottom-center" style="background-image: url(assets/img/shape/32.png);"></div>
                <!-- Shape -->
            </div>
        </div>

            
    </div>
    <!-- End Banner -->

    <!-- Star Services
    ============================================= -->
    <div class="services-style-three-area relative text-center default-padding">
        <div class="container">
            <div class="row">
                <!-- Signle Item -->
                <div class="services-style-three col-lg-4 col-md-6">
                    <div class="style-three-item item">
                        <div class="shape" style="background-image: url(assets/img/shape/21.png);"></div>
                        <div class="thumb">
                            <img src="assets/img/icon/house.png" alt="Icon">
                        </div>
                        <h4><a href="#">Residential Cleaning</a></h4>
                        <p>
                            We provide comprehensive residential cleaning services in Dubai, ensuring every corner of your home is dust-free and hygienic.
                        </p>
                    </div>
                </div>
                <!-- End Signle Item -->
                <!-- Signle Item -->
                <div class="services-style-three col-lg-4 col-md-6">
                    <div class="style-three-item item active">
                        <div class="shape" style="background-image: url(assets/img/shape/21.png);"></div>
                        <div class="thumb">
                            <img src="assets/img/icon/cleaning-service.png" alt="Icon">
                        </div>
                        <h4><a href="#">Commercial Cleaning</a></h4>
                        <p>
                            Our expert team delivers top-notch commercial cleaning tailored for offices, retail spaces, and corporate environments.
                        </p>
                    </div>
                </div>
                <!-- End Signle Item -->
                <!-- Signle Item -->
                <div class="services-style-three col-lg-4 col-md-6">
                    <div class="style-three-item item">
                        <div class="shape" style="background-image: url(assets/img/shape/21.png);"></div>
                        <div class="thumb">
                            <img src="assets/img/icon/dry-cleaning.png" alt="Icon">
                        </div>
                        <h4><a href="#">Laundry and Dry Cleaning</a></h4>
                        <p>
                            Experience the best sofa, carpet, and deep cleaning services that revitalize your furniture and spaces to look brand new.
                        </p>
                    </div>
                </div>
                <!-- End Signle Item -->
            </div>
        </div>
        <div class="shape-bottom" style="background-image: url(assets/img/shape/33.png);"></div>
    </div>
    <!-- End Services Area -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-two-area bg-gray default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 about-style-two">
                    <div class="thumb">
                        <img src="assets/img/thumb/11.jpg" alt="Thumb">
                        <img src="assets/img/thumb/12.jpg" alt="Thumb">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="50" data-speed="5000">50</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Team Member</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-style-three">
                    <h4 class="sub-heading">About Jagan Technical Services</h4>
                    <h2 class="heading">Dedicated to a <br> cleaner Dubai</h2>
                    <p>
                        At Jagan Technical Services, we take pride in delivering exceptional home and commercial cleaning solutions across Dubai. Our trained professionals use the best equipment and eco-friendly products to maintain your premises.
                    </p>
                    <ul>
                        <li>Service Monitoring</li>
                        <li>Fast Communication</li>
                        <li>Customer Support Live Chat</li>
                        <li>Information for Any Services</li>
                    </ul>
                    <a class="btn btn-theme primary effect btn-md" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Team 
    ============================================= -->
    <div class="team-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>awesome team</h4>
                        <h2>The best team to <br> clean your surrounding area.</h2>
                        <div class="devider"></div>
                        <p>
                            Our professional cleaners are highly trained, fully vetted, and committed to providing the highest standards of cleanliness for your home or office.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-style-one-box">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-6 col-md-6 text-center team-style-one">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/mallesh_nerella.jpg" alt="Mallesh Nerella">
                            </div>
                            <div class="info">
                                <h4>Mallesh Nerella</h4>
                                <p>
                                    Managing Director
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-6 col-md-6 text-center team-style-one">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/team/arun_kumar.jpg" alt="Arun Kumar Vikkurthi">
                            </div>
                            <div class="info">
                                <h4>Arun Kumar Vikkurthi</h4>
                                <p>
                                    HR and PRO
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team-->









    <?php include 'footer.php'; ?>