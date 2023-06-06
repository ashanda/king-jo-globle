<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>
<header class="woocommerce-products-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/king-images/background03.jpg);">
	<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>
</header>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>

<?php
/**
 * Hook: woocommerce_archive_description.
 *
 * @hooked woocommerce_taxonomy_archive_description - 10
 * @hooked woocommerce_product_archive_description - 10
 */
do_action('woocommerce_archive_description');
?>

<?php
if (woocommerce_product_loop()) {

?>
<div class="shop-cards">
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

<?php

} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');

get_footer('shop');
