<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>

		<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action('woocommerce_sidebar');
	?>

		<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

			<section class="inner">
				<div class="instagram-product">
					<div class="instagram"><h3>#<?php echo ucwords(str_replace(' ', '', get_the_title())); ?></h3></div>
				</div>

				<script type="text/javascript">
				jQuery('document').ready(function($) {
					getInstagram();

					function getInstagram() {
						return $.ajax({
							type: "GET",
							url: "https://api.instagram.com/v1/tags/<?php echo ucwords(str_replace(' ', '', get_the_title())); ?>/media/recent?client_id=adc31ddd1d1b4c63b4c4b0dd1d2df901",
							dataType: "jsonp",
							success: function(response) {
								var limit = 4;
								var div = $('.instagram');
								var caption = '';
								var url = '';
								$.each(response.data, function(i, item) {
									if(i > limit) return false;
									url = item.images.thumbnail.url;
									if(caption === null){
										caption = '';
									} else {
										caption = item.caption.text;
									}
									div.append('<img src="' + url + '" alt="' + caption + '" title="' + caption + '" />');
								});
							}
						});
					}
				});
				</script>
			</section>

		<?php endwhile; // end of the loop. ?>
		</div><!-- /container -->

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
	?>



<?php get_footer('shop'); ?>