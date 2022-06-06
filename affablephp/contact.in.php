<?php include('components/head.in.php') ?>
<?php include('components/navbar-head.in.php') ?>


<!-- <section class="contact-us" style="background-image: url('./assets/conatct.jpg');"> -->

<section class="contact-us">
        <div class="conatiner-fluid contact-cont">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                    d="M0,128L48,128C96,128,192,128,288,133.3C384,139,480,149,576,149.3C672,149,768,139,864,138.7C960,139,1056,149,1152,170.7C1248,192,1344,224,1392,240L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>

            <div class="row justify-content-center location-align">
                <div class="col-md-6">
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-1">
                            <i class="bi bi-geo-alt-fill icon-color"></i>
                        </div>
                        <div class="col-md-8">
                            <p class="contact-label">
                                Visit us </p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-8" style="margin-top: -35px; margin-bottom: -25px;">
                            <P class="contact-font text-md-start text-wrap label-style lh-lg align-middle">
                                Office no: 03, Building no: 14, <br>
                                Abdul Rahman Bin Jassim Street, <br>
                                AL Wakra, Doha, Qatar
                            </P>
                            <hr style="width: auto;">
                        </div>
                    </div>


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-1">
                            <i class="bi bi-telephone-fill icon-color"></i>
                        </div>
                        <div class="col-md-8">
                            <p class="contact-label">
                                Telephone </p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-8" style="margin-top: -35px; margin-bottom: -25px;">
                            <P class="contact-font text-md-start text-wrap label-style lh-lg align-middle">
                                <span>Mobile <b>:</b></span>+974 50216760 <br>
                                <!-- <span>Landline <b>:</b></span>+974 44357958 -->
                            </P>
                            <hr style="width: auto;">
                        </div>
                    </div>


                    <div class="row justify-content-center mb-4">
                        <div class="col-md-1">
                            <i class="bi bi-send-fill icon-color"></i>
                        </div>
                        <div class="col-md-8">
                            <p class="contact-label">
                                Email </p>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-8" style="margin-top: -35px; margin-bottom: -25px;">
                            <P class="contact-font text-md-start text-wrap label-style lh-lg align-middle">
                                info@affableqatar.com
                            </P>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-5 mt-6">
                        <h3 style="color: 000; text-align: start;">Contact Us</h3>
                    </div>
                    <form class="g-3 needs-validation" id="formID" 
                    action="mail.php" novalidate method="POST">
                        <div class="mb-3 form-group">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-group">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your E-mail Address" pattern="[^ @]*@[^ @]*">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Contact Number" name="phone"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="company" placeholder="Company Name">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <textarea class="form-control" cols="30" rows="3" name="message"
                                        placeholder="Your Message">
                                </textarea>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="gap-1 col-md-8 mx-auto mb-5">
                                <button type="submit" class="btn btn-primary btn-lg"
                                    style="background: 
                                    linear-gradient(191deg, rgb(27 30 70) 40%, rgb(33 42 88 / 95%) 65%);"
                                    value="submit">
                                    Send Message
                                    <!-- <span class="spinner-border text-primary" *ngIf="emailSentSuccess" role="status">
                          </span> -->
                                </button>
                            </div>
                        </div>
                        <?php

                            if(!$_GET) {
                                
                            } else { 
                                ?>
                                
                                <p>
                                Message has been sent successfully.
                                thank you.

                                </p>

                                <?php 
                            }

                        ?>
                    </form>
                </div>
            </div>
            <!-- <div class="row justify-content-center" style="width: 100%;">
                <div class="col-md-6 footer-align">
                    <div class="row p-3 mb-5 map-box">
                    <div id="map-container-google-11" class="z-depth-1-half map-container" 
                    style="height: 400px;">
                        <iframe src="https://maps.google.com/maps?q=INNOVIZ+SYSTEMS&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    </div>
                </div>
            </div> -->
        </div>

    </section>

<?php include('components/footer.in.php') ?>