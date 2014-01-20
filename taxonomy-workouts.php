<?php get_header(); ?>
		<div class="content">
				<?php echo get_quotes(); ?>	
				<?php get_sidebar(); ?>
		<div class="container">

			<section class="title">
				<h1><?php single_cat_title(); ?></h1>
				<p><em>Displaying all archived items:</em></p>
			</section><!-- /title -->

			<section class="inner">
				<?php if (have_posts()) { ?>
					<?php while (have_posts()) { ?>
							<?php the_post(); ?>
							<article class="post-item">
									<div class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
									<?php if (has_post_thumbnail()) : ?>
										<div class="post-thumb">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<div class="featured-image"><?php the_post_thumbnail('featured', array('class' => 'scale', 'alt' => get_the_title(), 'title' => get_the_title())); ?></div>
											</a>
										</div>
									<?php endif; ?>
									<div class="clear"></div>
									<div class="post-snippet">
										<?php the_excerpt(); ?>
									</div>
							</article>
					<?php } ?>
					<?php  if (!is_home() && !is_front_page()) { ?>
						<div class="navigation">
							<div class="left"><?php previous_posts_link('&lt; Newer Posts'); ?></div>
							<div class="right"><?php next_posts_link('Older Posts &gt;'); ?></div>
							<div class="clear"></div>
						</div>
					<?php } ?>
				<?php } ?>
			</section><!-- /inner -->
		</div><!-- /container -->
	</div><!-- /content -->	
<div class="clear"></div>
<?php get_footer(); ?>