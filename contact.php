<?php include('header.php') ?>

<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="img/bg/bg4.jpg" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Contact Us</h1>
                    <div class="path">
                        <a href="index.php">Home</a><span>/</span><a href="#0" class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start about ==================== -->

<section class="contact">
    <div class="info bg-gray pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-phone"></span>
                        <div class="cont">
                            <h6 class="custom-font">Call Us</h6>
                            <p><a href="tel:+919791208370" style="margin-top: 10px;">+91 9791208370</a></p>
                            <p><a href="tel:+919843880757" style="margin-top: 10px;">+91 9843880757</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-mail-open"></span>
                        <div class="cont">
                            <h6 class="custom-font">Email Us</h6>
                            <p><a href="mailto:k.kishenpatrick@gmail.com" style="margin-top: 10px;">k.kishenpatrick@gmail.com</a></p>
                            <p><a href="mailto:info@kishenconsultants.in" style="margin-top: 10px;">info@kishenconsultants.in</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-map"></span>
                        <div class="cont">
                            <h6 class="custom-font">Reach Us</h6>
                            <p>D-356, UkkiraKaaliAmman Kovil Street, Hidayath Nagar, Anna Nagar, Tennur, Tiruchirappalli, Tamil Nadu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 map-box">
                <div class="map" id="ieatmaps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.952893212039!2d78.68876999999999!3d10.814917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5fbfffd5caf%3A0x92fe36dd5407ac3!2sKishen%20Structural%20Consultants!5e0!3m2!1sen!2sin!4v1706678845587!5m2!1sen!2sin" width="700" height="630" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 form">
                <form method="post" action="mail.php" autocomplete="off">

                    <div class="controls">

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="text" name="mobile" placeholder="Mobile Number" required="required">
                        </div>

                        <div class="form-group">
                            <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                        </div>
                        <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End about ==================== -->


<?php include('footer.php') ?>