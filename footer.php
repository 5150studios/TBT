</div><!-- #wrap -->

<?php if(!is_front_page() && !is_home()) : ?>
<div id="instagram-wrap">
	<div id="instagram"><h3>#TBTRevolution</h3><ul class="instagramslider"></ul></div>
</div>
<?php endif; ?>	


<div class="brandsslider">		
	<div class="brands">
	  <div class="slide"><a href="http://www.goldendoor.com.au/" target="_blank"><img alt="Golden Door" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/golden-door.png"></a></div>
	  <div class="slide"><a href="http://www.biggestloserretreat.com.au/" target="_blank"><img alt="The Biggest Loser" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/biggest-loser.png"></a></div>
	   <div class="slide"><a href="http://www.hpc.qld.edu.au/" target="_blank"><img alt="HPC" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/hpc.jpg"></a></div>
	   <div class="slide"><a href="http://hidow.com.au/" target="_blank"><img alt="HiDow" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/HiDow.jpg"></a></div>
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