<?php get_header(); the_post(); ?>

<div class="content">

	<?php echo get_quotes(); ?>

	<div class="featureboxes">
		<div class="box">
			<h2><span class="strong">TBT</span>Shop</h2>
			<a href="<?php echo get_permalink(7); ?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-shop.jpg" alt="Shop for TBT Products" /></a>
			<a href="<?php echo get_permalink(7); ?>" class="button">Shop Now</a>
		</div>
		<div class="box">
			<h2>Why<span class="strong">TBT</span>Suspension?</h2>
			<a href="<?php echo get_permalink(38); ?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/why-tbt-suspension.jpg" alt="Why TBT Suspension?" /></a>
			<a href="<?php echo get_permalink(38); ?>" class="button">Learn More</a>
		</div>
		<div class="box">
			<h2><span class="strong">TBT</span>Training</h2>
			<a href="<?php echo get_permalink(18); ?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-training.jpg" alt="TBT Training" /></a>
			<a href="<?php echo get_permalink(18); ?>" class="button">View All</a>
		</div>
	</div>
</div><!-- /content -->

<div id="instagram-wrap">
	<div id="instagram"><h3>#TBTRevolution</h3><ul class="instagramslider"></ul></div>
</div>

<div class="content">
	<div class="featureboxes">
		<div class="box">
			<h2><span class="strong">TBT</span>Equipment</h2>
			<a href="<?php echo get_permalink(286); ?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-equipment.jpg" alt="TBT Equipment" /></a>
			<a href="<?php echo get_permalink(286); ?>" class="button">View Equipment</a>
		</div>
		<div class="box">
			<h2><span class="strong">TBT</span>Rehabilitation</h2>
			<a href="<?php echo get_permalink(291);?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-rehabilitation.jpg" alt="TBT Rehabilitation" /></a>
			<a href="<?php echo get_permalink(291);?>" class="button">Learn More</a>
		</div>
		<div class="box">
			<h2><span class="strong">TBT</span> In Action</h2>
			<a href="<?php echo get_permalink(319); ?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-in-action.jpg" alt="TBT In Action Gallery" /></a>
			<a href="<?php echo get_permalink(319); ?>" class="button">View Gallery</a>
		</div>
	</div>
</div><!-- /content -->	

<div class="content">
	<div class="home">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>	
	</div><!-- /#container -->							
</div><!-- /content -->

<?php get_footer(); ?>