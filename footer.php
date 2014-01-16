</div><!-- #wrap -->

<?php if(!is_front_page() && !is_home()) : ?>
<div id="instagram-wrap">
	<div id="instagram"><h3>#TBTRevolution</h3></div>
</div>

	<script type="text/javascript">
	jQuery('document').ready(function($) {
		getInstagram();

		function getInstagram() {
			return $.ajax({
				type: "GET",
				url: "https://api.instagram.com/v1/tags/tbtrevolution/media/recent?client_id=adc31ddd1d1b4c63b4c4b0dd1d2df901",
				dataType: "jsonp",
				success: function(response) {
					var limit = 4;
					var div = $('#instagram');
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
<?php endif; ?>	


<div class="brandsslider">		
	<div class="brands">
	  <div class="slide"><a href="#"><img alt="Golden Door" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/golden-door.png"></a></div>
	  <div class="slide"><a href="#"><img alt="The Biggest Loser" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/biggest-loser.png"></a></div>
	</div><!-- /brands -->
</div><!-- /brandsslider -->

<div id="footer">
	<div class="innerfooter">
			<div class="widgets">
				<div class="first"><ul><?php dynamic_sidebar('Footer 1'); ?></ul></div>
				<div class="second"><ul><?php dynamic_sidebar('Footer 2'); ?></ul></div>
				<div class="third"><ul><?php dynamic_sidebar('Footer 3'); ?></ul></div>
				<div class="fourth"><ul><?php dynamic_sidebar('Footer 4'); ?></ul></div>
			</div>
			<div class="clear"></div>

	</div><!-- /.innerfooter -->
</div><!-- /#footer -->

<div id="copyrightwrap">
<div class="copyright">
	<div class="content">
		<?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'copyrightnav')); ?> 
		<div class="payments"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/payments.png" alt="Payments" /></div>
		<div class="clear"></div>
	</div><!-- /content -->
</div><!-- /copyright -->
</div><!-- /copyrightwrap -->
		
		<?php wp_footer(); ?>

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

	</body>
</html>