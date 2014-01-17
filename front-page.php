<?php get_header(); the_post(); ?>

<div class="content">
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
			<h2><span class="strong">TBT</span>Travel Workouts</h2>
			<a href="<?php echo get_term_link( 15, 'workouts' );?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-travel-workout.jpg" alt="TBT Travel Workouts" /></a>
			<a href="<?php echo get_term_link( 15, 'workouts' );?>" class="button">View Workouts</a>
		</div>
		<div class="box">
			<h2><span class="strong">TBT</span>Eseentials Workouts</h2>
			<a href="<?php echo get_term_link( 16, 'workouts' );?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-essentials-workout.jpg" alt="TBT Essentials Workouts" /></a>
			<a href="<?php echo get_term_link( 16, 'workouts' );?>" class="button">View Workouts</a>
		</div>
		<div class="box">
			<h2><span class="strong">TBT</span>Elite Workouts</h2>
			<a href="<?php echo get_term_link( 17, 'workouts' );?>"><img class="boximg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-elite-workout.jpg" alt="STBT Elite Workouts" /></a>
			<a href="<?php echo get_term_link( 17, 'workouts' );?>" class="button">View Workouts</a>
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