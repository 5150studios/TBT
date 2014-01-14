<?php get_header(); ?>
		<div class="content">
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
								<aside class="date">
									<div class="post-date">
										<span class="month"><?php the_time('M'); ?></span>
										<span class="day"><?php the_time('d'); ?></span>
									</div>
									<div class="post-comments">
										<i class="icon-comment"> <?php comments_number( '0', '1', '%' ); ?></i><span>Comments</span>
									</div>
								</aside>
								<div class="post-loop">
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