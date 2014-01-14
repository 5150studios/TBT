<?php get_header(); ?>
<div class="content">
	<?php get_sidebar(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : ?>
			<?php setPostViews(get_the_ID()); ?>
			<div class="container">
				<section class="title">
				<?php the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<ul class="post-meta">
					<li><i class="icon-calendar"></i> <?php the_date(); ?></li>
					<li><i class="icon-user"></i>  <?php the_author_posts_link(); ?> </li>
					<li><i class="icon-eye-open"></i> <?php echo getPostViews(get_the_ID()); ?></li>
					<li><i class="icon-comments"></i> <?php echo get_comments_number() . ' comments'; ?></li>
					<li><i class="icon-folder-open"></i> <?php the_category(', '); ?></li>
					<?php social_media_links(); ?>
				</ul>
			</section><!-- /title -->
				
				<?php if (has_post_thumbnail()) : ?>
					<div class="featured-image"><?php the_post_thumbnail('featured', array('class' => 'scale', 'alt' => get_the_title(), 'title' => get_the_title())); ?></div>
				<?php endif; ?>
			
			<section class="inner">
				<?php the_content(); ?>

				<?php if( get_next_post() || get_previous_post() ) : ?>
					<hr />
					<div class="post-navigation">
						<h3>More Posts</h3>
						<?php if(get_previous_post()) : ?>
							<div class="prev-post left button small"><?php previous_post_link('%link', '&lt; %title'); ?></div>
						<?php endif; ?>
						<?php if(get_next_post()) : ?>
							<div class="next-post right button small"><?php next_post_link('%link', '%title &gt;'); ?></div>
						<?php endif; ?>
					</div><!-- post-navigation -->
				<?php endif; ?>

				<div class="clear"></div>
				
				<?php comments_template(); ?>
			</section><!-- /inner -->
			</div><!-- /#container -->
		<?php endwhile; ?>
	<?php endif; ?>	

	<div class="clear"></div>
</div><!-- /content -->
<?php get_footer(); ?>