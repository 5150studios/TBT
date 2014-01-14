<?php get_header(); ?>
	<div class="content">
		<?php get_sidebar(); ?>
		<div class="container">
			<section class="title">
				<h1>Search - <?php the_search_query(); ?></h1>
				<p><em>Your search for &quot;<?php the_search_query(); ?>&quot; returned the following results:</em></p>
			</section><!-- /title -->

			<section class="inner">
				<?php require_once('loop.php'); ?>
			</section><!-- /inner -->
		</div><!-- #container -->
	
	<div class="clear"></div>
</div><!-- /content -->
<?php get_footer(); ?>