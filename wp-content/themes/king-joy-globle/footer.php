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
    <div class="row footer-top">
        <div class="col-md-3">
            <div class="logo">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/inc/king-images/logo.png" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="search">
                <form>
                    <input id="userphone" type="text" placeholder="Your Phone Number" required>
                    <input id="submit" type="submit" value="Subcribe Now">
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="social-media-icons">
                <div class="media-icons d-inline">
                    <ul class="s-icons">
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-whatsapp"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row footer-middle">
        <div class="col-md-4 footer-border">
            <p class="footer-headings">Why People Like us</p>
            <p class="footer-des">Ut enim ad minim veniam, quis nostrud exerci-
                tation ullamco laboris nisi ut aliquip ex ea
                commodo. Build your online store with
                WooCommerce the most popular </p>
            <button class="main-button"><a href="">Shop Now</a></button>

        </div>
        <div class="col-md-2 footer-border">
            <p class="footer-headings">Information</p>
            <ul class="footer-list">
                <li><a href="">About Us</a></li>
                <li><a href="">Delivery Information</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Return policy</a></li>
            </ul>
        </div>
        <div class="col-md-2 footer-border">
            <p class="footer-headings">Shop</p>
            <ul class="footer-list">
                <li><a href="">Jams & Chutneys</a></li>
                <li><a href="">Pantry</a></li>
                <li><a href="">Gluten Free</a></li>
                <li><a href="">Vegan</a></li>
                <li><a href="">Vegetarian</a></li>
            </ul>
        </div>
        <div class="col-md-4 footer-border">
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
        <div class="col-md-6 left-corner">
            <p class="left">Copyright © 2023 <span>Kinjo</span> <?php echo get_template_directory_uri(); ?>/inc. All rights reserved.</p>
        </div>
        <div class="col-md-6 right-corner">
            <span><a href="" class="active">Privacy Policy &nbsp;| &nbsp; </a></span>
            <span><a href="" class="active">Terms of Use &nbsp;|&nbsp; </a></span>
            <span><a href="" class="active">Sales and Refunds &nbsp; </a></span>
        </div>
    </div>
</div>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/inc/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>

</html>