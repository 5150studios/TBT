<?php get_header(); the_post(); ?>
	<div id="main">
		<div class="content">
			<?php require('loop.php'); ?>
			<?php the_content(); ?>
		</div><!-- /content -->
	</div><!-- /#main -->
	<div class="clear"></div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>