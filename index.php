<?php get_header(); the_post(); ?>
	<div class="content">
		<?php echo get_quotes(); ?>
		<?php get_sidebar(); ?>
		<div class="container">
			<section class="title">
				<h1><?php the_title(); ?></h1>
			</section><!-- /title -->

			<section class="inner">
				<?php require('loop.php'); ?>
				<?php the_content(); ?>
			</section><!-- /inner -->
		</div><!-- #container -->
	
	<div class="clear"></div>
</div><!-- /content -->
<?php get_footer(); ?>