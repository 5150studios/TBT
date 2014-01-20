<?php
/**
 * Template Name: Muslce Groups Page
 *
 */
?>

<?php get_header(); ?>
		<div class="content">
				<?php echo get_quotes(); ?>	
				<?php get_sidebar(); ?>
		<div class="container">

			<section class="title">
				<h1>Exercise Database</h1>
				<p><em>Displaying all archived items:</em></p>
			</section><!-- /title -->

			<section class="inner">
				<?php //query_posts( 'post_type=exercise'); ?>
				<?php if (have_posts()) { ?>
					<?php while (have_posts()) { ?>
							<?php the_post(); ?>
							<article class="exercise-item">
								<a href="<?php the_permalink(); ?>"><?php echo $img1 = get_exercise_image($post->ID, 'exercise_image_1', 'thumbnail'); ?></a>
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									
									
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