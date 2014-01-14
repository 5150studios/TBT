<?php get_header(); the_post(); ?>
	<div class="content">
		<?php get_sidebar(); ?>
		<div class="container">
			<section class="title">
				<h1>Error 404 - Page Not Found</h1>
			</section><!-- /title -->
			<section class="inner">
				<p>Sorry, please try your request again, or visit our <a href="<?php bloginfo('url'); ?>">home page</a>.</p>
			</section><!-- /inner -->
		</div><!-- #container -->
	
	<div class="clear"></div>
</div><!-- /content -->
<?php get_footer(); ?>