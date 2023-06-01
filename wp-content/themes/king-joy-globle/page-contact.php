<?php
/*
Template Name: Contact
*/

get_header();  ?>

<div class="full-content">

    <!-- Start about-us section -->
    <div class="contact-us-details py-3 py-lg-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/king-images/Group\ 8437.png);">

        <div class="cont container my-5">
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.30721008618!2d79.99224377562258!3d7.09034271631545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fbed59abfe0b%3A0x156c4d8153c22b78!2sYogee%20Media%20(Pvt)%20Ltd.!5e0!3m2!1sen!2slk!4v1685618110918!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <section class="mb-4 mt-5 mt-md-0">

                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold text-center mb-4">Contact us</h2>
                        <!--Section description-->
                        <p class="text-center w-responsive mx-auto mb-3">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                            a matter of hours to help you.</p>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-9">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    </div>
                                    <div class="text-left">
                                        <a class="btn btn-primary" onclick="show_subdomain()">Send</a>
                                    </div>
                                    <div class="status"></div>
                                    <script>
                                        function show_subdomain() {
                                            alert("Site still not in proper domain");
                                        }
                                    </script>
                                </form>
                            </div>
                            <!--Grid column-->

                            <div class="col-lg-3 text-center mt-5 mt-lg-0">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                        <p>San Francisco, CA 94126, USA</p>
                                    </li>

                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>+ 01 234 567 89</p>
                                    </li>
                                    <br>
                                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                        <p>test@email.com</p>
                                    </li>
                                </ul>
                            </div>

                        </div>







                    </section>
                </div>
            </div>
        </div>


    </div>


    <?php get_footer(); ?>