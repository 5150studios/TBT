<?php get_header(); ?>
<div class="content">
	<?php echo get_quotes(); ?>		
	<?php get_sidebar(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : ?>
			<?php setPostViews(get_the_ID()); ?>
			<div class="container">
				<?php the_post(); ?>

				<section class="title">
				<h1><?php the_title(); ?></h1>
				<p>
					<?php
					$values = get_field('muscle_groups');
					if($values) : ?>
						<strong>Muscle Groups: </strong>
						<?php foreach($values as $value) : ?>
							<?php $termlink = get_term_link( $value->term_id, 'muscle_groups' ); ?>
							<?php $list .= "<a href=\"{$termlink}\">{$value->name}</a>, "; ?>
						<?php endforeach; ?>
						<?php echo rtrim($list, ', '); ?>
						
					<?php endif; ?>

					<?php if(get_field('exercise_difficulty')) : ?>
						| <strong>Difficulty Level:</strong> <?php echo get_field('exercise_difficulty'); ?>
					<?php endif; ?>
				</p>
				</section><!-- /title -->

				<section class="inner">
					<section class="exercise">

						<ul class="post-meta">
							<li><i class="icon-calendar"></i> <?php the_date(); ?></li>
							<li><i class="icon-eye-open"></i> <?php echo getPostViews(get_the_ID()); ?></li>
							<?php social_media_links(); ?>
						</ul>

						<?php the_content(); ?>

					<?php if(get_field('exercise_video')) : ?>
						<div class="flexible-container"><?php echo get_field('exercise_video'); ?></div>
					<?php endif; ?>

						<?php 
				 			$img1 = get_exercise_image($post->ID, 'exercise_image_1', 'inner');
				 			$img2 = get_exercise_image($post->ID, 'exercise_image_2', 'inner');
				 			$img3 = get_exercise_image($post->ID, 'exercise_image_3', 'inner');
				 			$img4 = get_exercise_image($post->ID, 'exercise_image_4', 'inner');
				 			if( ! empty( $img1 ) && ! empty( $img2 ) ) : ?>
				 				<ul class="exercise-steps">
									<li><?php echo $img1; ?></li>
					 		<?php if( ! empty( $img2 ) ) : ?>
									<li><?php echo $img2; ?></li>
					 		<?php endif; ?>

					 		<?php if( ! empty( $img3 ) ) : ?>
									<li><?php echo $img3; ?></li>
					 		<?php endif; ?>

					 		<?php if( ! empty( $img4 ) ) : ?>
									<li><?php echo $img4; ?></li>
					 		<?php endif; ?>
								</ul>

							<?php 
						 		$img1 = get_exercise_image_thumbs($post->ID, 'exercise_image_1');
						 		if( ! empty( $img1 ) ) : ?>
						 			<div id="exercise-steps-pager">
										 <a data-slide-index="0" href="#"><?php echo $img1; ?></a>
						 		<?php 
						 			$img2 = get_exercise_image_thumbs($post->ID, 'exercise_image_2');
						 			if( ! empty( $img2 ) ) : ?>
										 <a data-slide-index="1" href="#"><?php echo $img2; ?></a>
						 		<?php endif; ?>

						 		<?php 
						 			$img3 = get_exercise_image_thumbs($post->ID, 'exercise_image_3');
						 			if( ! empty( $img3 ) ) : ?>
										 <a data-slide-index="2" href="#"><?php echo $img3; ?></a>
						 		<?php endif; ?>

						 		<?php 
						 			$img4 = get_exercise_image_thumbs($post->ID, 'exercise_image_4');
						 			if( ! empty( $img4 ) ) : ?>
										 <a data-slide-index="3" href="#"><?php echo $img4; ?></a>
									<?php endif; ?>	 
						 		</div><!-- exercise-steps-pager -->
					 		<?php endif; ?>
						
						<?php else : ?>

							<?php echo get_exercise_image($post->ID, 'exercise_image_1', 'large'); ?>

						<?php endif; ?>
					</section><!-- /exercise -->

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
					<hr />
				<?php endif; ?>

				<div class="clear"></div>
				
				<?php get_disqus(); ?>
				<?php //comments_template(); ?>

			</section><!-- /inner -->
			</div><!-- /container -->
		<?php endwhile; ?>
	<?php endif; ?>	
	<div class="clear"></div>
</div><!-- /content -->
<?php get_footer(); ?>