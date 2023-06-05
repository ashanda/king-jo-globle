<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package king-joy-globle
 */

?>
<div class="footer-section">
    <div class="footer-space">
        <div class="row footer-top">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xm-12">
                <div class="logo">
                    <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/inc/king-images/logo.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xm-12">
                <div class="search">
                    <form>
                        <input id="userphone" type="text" placeholder="Your Phone Number" required>
                        <input id="submit" type="submit" value="Subcribe Now">
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xm-12">
                <div class="social-media-icons">
                    <div class="media-icons d-inline">
                        <ul class="s-icons">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footer-middle">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12 footer-border fb-start">
                <p class="footer-headings">Why People Like us</p>
                <p class="footer-des">Ut enim ad minim veniam, quis nostrud exerci-
                    tation ullamco laboris nisi ut aliquip ex ea
                    commodo. Build your online store with
                    WooCommerce the most popular </p>
                <button class="main-button"><a href="">Read More</a></button>

            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-xm-12 footer-border fb-2">
                <p class="footer-headings">Information</p>
                <ul class="footer-list">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Delivery Information</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Return policy</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-xm-12 footer-border fb-3">
                <p class="footer-headings">Shop</p>
                <ul class="footer-list">
                    <li><a href="">Jams & Chutneys</a></li>
                    <li><a href="">Pantry</a></li>
                    <li><a href="">Gluten Free</a></li>
                    <li><a href="">Vegan</a></li>
                    <li><a href="">Vegetarian</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12 footer-border fb-end">
                <p class="footer-headings">Contact Us</p>
                <ul class="footer-list">
                    <li><span>Address:</span>address goes here</li>
                    <li><span>Email:</span>mail@domain.com</li>
                    <li><span>Phone:</span>07112345678</li>
                    <li><span>Payment Accepted</span></li>
                </ul>
                <div class="payements-methods">
                    <img class="payment" src="<?php echo get_template_directory_uri(); ?>/inc/king-images/Payment.png" alt="">
                </div>
            </div>
        </div>
        <div class="row fooder-bottom">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xm-12 left-corner">
                <p class="left">Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <span>Kinjo</span>
                    <!-- <?php echo get_template_directory_uri(); ?> -->
                    inc. All rights reserved.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xm-12 right-corner">
                <span>Solutions By&nbsp; : &nbsp;</span>
                <span class="company"><a href="https://yogeemedia.com/">Yogee Media</a><i class="fad fa-heart"></i></span>
            </div>
        </div>
    </div>

</div>
</div>



<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Owl carosel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        center: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        slideSpeed: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            576: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    })
</script>

<script src="<?php echo get_template_directory_uri(); ?>/inc/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>