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
						<p>
							<span class="w-price-amount">
								<span class="w-price-currency">
									<?php echo $product->get_price_html(); ?>
								</span>
							</span>
						</p>

						<!-- <div class="box-features">
							<p class="b-fea">Weight:</p>
							<div class="box-box">
								<?php
								global $product;

								if ($product->is_type('variable')) {
									$available_variations = $product->get_available_variations();

									if (!empty($available_variations)) {

										foreach ($available_variations as $variation) {
											$variation_id = $variation['variation_id'];
											$variation_obj = wc_get_product($variation_id);
											$variation_attributes = $variation_obj->get_variation_attributes();

											echo '<p class="bs-2">';

											foreach ($variation_attributes as $attribute_name => $attribute_value) {
												echo $attribute_value;
											}

											echo '</li>';
										}
									}
								}
								?>
							</div>
						</div> -->

						<div class="box-features">
							<p class="b-fea">Speciality:</p>
							<div class="box-box2">
								<?php
								global $product;

								// Get product categories
								$product_categories = wp_get_post_terms($product->get_id(), 'product_cat');

								if (!empty($product_categories)) {
									foreach ($product_categories as $category) {
										echo '<p class="bs-4">' . $category->name . '</p>';
									}
								}
								?>

							</div>

						</div>
					</div>

					<div class="box-features">
						<p class="b-fea">Total:</p>
						<p class="currency-amount ms-1"><?php echo $product->get_price_html(); ?></p>
					</div>

					<div class="box-features">

						<p class="b-fea">Availability:</p>
						<p class="available ms-1">
							<?php
							global $product;

							// Check if the product is in stock
							if ($product->is_in_stock()) {
								echo 'In Stock!';
							} else {
								echo 'Out of stock !';
							}
							?>
						</p>
					</div>

					<div class="box-features">
						<?php
						do_action('woocommerce_single_product_summary');
						?>
					</div>


					<!-- <div class="box-features">
						<p class="b-fea">Availability:</p>
						<div class="quantity ms-1">
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
					<div class="box-features">
						<div class="cat-button-add">
							<div class="mt-2">
								<a class="inq_btn" target="_blank" href="mailto:your-email@example.com">Inqurey</a>
							</div>
						</div>
					</div> -->

					<!-- <div class="whish">
						<i class="far fa-heart"></i>
						<p class="wishlist">Add to wishlist</p>
					</div> -->

					<div class="s-payment">
						<p class="s-pay">100% Secured Payment</p>
					</div>

					<div class="last-div-sec">
						<i class="fa-regular fa-magnifying-glass"></i>
						<p class="f-search">Need to Know More ?</p>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="row des-related">
<div class="row natu prod_sec">
		<?php
		$products = wc_get_products(array(
			'limit' => 8, // Retrieve 8 products
		));

		foreach ($products as $product) {
			$image_id = $product->get_image_id();
			$image_url = wp_get_attachment_image_url($image_id, 'full');
			$product_name = $product->get_name();
			$product_price = $product->get_price_html();
			$product_permalink = $product->get_permalink();
		?>
			<div class="column mb-2 nature">
				<div class="items-details">
					<div class="item-name">
						<span class="name-s">VEGAN</span>
					</div>
					<div class="item-price">
						<span class="price-p">-27%</span>
					</div>
				</div>
				<div class="content mt-5">
					<div class="img_wrap">
						<img class="content-img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($product_name); ?>">
					</div>
					<div class="inner-content">
						<div>
							<h4><?php echo esc_html($product_name); ?></h4>
							<p><?php echo $product_price; ?></p>
						</div>
						<?php if ($product->is_type('simple')) : ?>
							<div class="btns two_btns">
								<a class="main-button galley-grid-btn" href="<?php echo esc_url($product_permalink); ?>">View</a>
								<?php echo do_shortcode('[add_to_cart id="' . $product->get_id() . '"]'); ?>
							</div>
						<?php else : ?>
							<div class="btns">
								<a class="main-button galley-grid-btn d-block" href="<?php echo esc_url($product_permalink); ?>">View</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
</div>


<?php do_action('woocommerce_after_single_product'); ?>