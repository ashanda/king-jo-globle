<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="row product-r">
	<div class="col-lg-5 col-md-12 col-sm-12 col-xm-12 text-center mx-auto">

		<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action('woocommerce_before_single_product_summary');
			?>



		
		</div>
	</div>

	<div class="col-lg-7 col-md-12 col-sm-12 col-xm-12">

		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xm-12">
				<div class="summary entry-summary">


					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action('woocommerce_single_product_summary');
					?>

					<div class="product-features-list">
						<div class="row product-features">
							<div class="col-3 product-f-image">
								<img src="<?php echo get_template_directory_uri(); ?>/inc/king-images/icon-1-1.png.png" alt="">
							</div>

							<div class="col-9 product-f-text">
								<p class="top">100% organic</p>
								<p class="bottom">Nature Product</p>
							</div>
						</div>

						<div class="row product-features">
							<div class="col-3 product-f-image">
								<img src="<?php echo get_template_directory_uri(); ?>/inc/king-images/icon-3.png.png" alt="">
							</div>

							<div class="col-9 product-f-text">
								<p class="top">100% organic</p>
								<p class="bottom">Nature Product</p>
							</div>
						</div>

						<div class="row product-features">
							<div class="col-3 product-f-image">
								<img src="<?php echo get_template_directory_uri(); ?>/inc/king-images/icon-1-1.png.png" alt="">
							</div>

							<div class="col-9 product-f-text">
								<p class="top">100% organic</p>
								<p class="bottom">Nature Product</p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-6 col-md-12 col-sm-12 col-xm-12">
				<div class="white-box">
					<div class="white-box-details">
						<p><span class="w-price-amount"><span class="w-price-currency">$</span>3,561.00</span></del> <ins><span class="w-price-amount1 amount"><span class="w-price-currency1">$</span>3,000.00</span></ins></p>
						<div class="box-features">
							<p class="b-fea">Weight:</p>
							<div class="box-box">
								<p class="bs-1">1Kg</p>
								<p class="bs-2">2Kg</p>
								<p class="bs-3">3Kg</p>
							</div>
						</div>

						<div class="box-features">
							<p class="b-fea">Speciality:</p>
							<div class="box-box2">
								<p class="bs-4">Organic</p>
								<p class="bs-5">Natural</p>
							</div>
						</div>

						<div class="box-features">
							<p class="b-fea">Total:</p>
							<p class="currency-amount">$7.00</p>
						</div>

						<div class="box-features">
							<p class="b-fea">Availability:</p>
							<p class="available">in stock!</p>
						</div>


						<div class="box-features">
							<p class="b-fea">Availability:</p>
							<div class="quantity">
								<button class="decrease">-</button>
								<input type="number" class="count" value="1">
								<button class="increase">+</button>
							</div>

							<script>
								const decreaseBtn = document.querySelector('.decrease');
								const increaseBtn = document.querySelector('.increase');
								const countInput = document.querySelector('.count');

								decreaseBtn.addEventListener('click', () => {
									let count = parseInt(countInput.value);
									if (count > 1) {
										count--;
										countInput.value = count;
									}
								});

								increaseBtn.addEventListener('click', () => {
									let count = parseInt(countInput.value);
									count++;
									countInput.value = count;
								});
							</script>
						</div>

						<div class="cat-button-add">
							<button class="add-to-cart">Add to Cart</button>
							<button class="add-to-cart">Buy it now</button>
						</div>

						<div class="whish">
							<i class="far fa-heart"></i>
							<p class="wishlist">Add to wishlist</p>
						</div>

						<div class="s-payment">
							<p class="s-pay">100% Secured Payment</p>
						</div>

						<div class="last-div-sec">
						<i class="fas fa-washer"></i>
						<p class="f-search">Need to Know More ?</p>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row des-related">
<?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action('woocommerce_after_single_product_summary');
			?>							
</div>


<?php do_action('woocommerce_after_single_product'); ?>