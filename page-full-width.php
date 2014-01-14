<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); the_post(); ?>
	<div id="container" class="fullwidth">
			<h1><?php the_title(); ?></h1>
			<?php if (has_post_thumbnail()) : ?>
				<div class="featured-image"><?php the_post_thumbnail('featured', array('alt' => get_the_title(), 'title' => get_the_title())); ?></div>
			<?php endif; ?>
			<?php the_content(); ?>	
	</div><!-- /#container -->							
	<div class="clear"></div>	
<?php get_footer(); ?>