<?php get_header(); the_post(); ?>
	<div class="content">
		<?php get_sidebar(); ?>
		<div class="container">
			<section class="title">
				<h1><?php the_title(); ?></h1>
			</section><!-- /title -->

			<section class="inner">
				<?php if (has_post_thumbnail()) : ?>
					<div class="featured-image"><?php the_post_thumbnail('featured', array('alt' => get_the_title(), 'title' => get_the_title())); ?></div>
				<?php endif; ?>
				
				<?php the_content(); ?>
			</section><!-- /inner -->
		</div><!-- #container -->
	
	<div class="clear"></div>
</div><!-- /content -->
<?php get_footer(); ?>