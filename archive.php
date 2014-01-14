<?php get_header(); is_tag(); ?>
		<div class="content">
				<?php get_sidebar(); ?>
		<div class="container">
		<?php if (is_category()) : ?>
			<h1>Category - <?php single_cat_title(); ?></h1>
			<p><em>Displaying all posts from the &quot;<?php single_cat_title(); ?>&quot; category:</em></p>
		<?php elseif(is_tag()) : ?>
			<h1>Tag - <?php single_tag_title(); ?></h1>
			<p><em>Displaying all posts with the &quot;<?php single_tag_title(); ?>&quot; tag:</em></p>
		<?php elseif (is_day()) : ?>
			<h1>Archive - <?php the_time('jS F Y'); ?></h1>
			<p><em>Displaying all items posted on <?php the_time('jS F Y'); ?>:</em></p>
		<?php elseif (is_month()) : ?>
			<h1>Archive - <?php the_time('F Y'); ?></h1>
			<p><em>Displaying all items posted in <?php the_time('F Y'); ?>:</em></p>
		<?php elseif (is_year()) : ?>
			<h1>Archive - <?php the_time('Y'); ?></h1>
			<p><em>Displaying all items posted in <?php the_time('Y'); ?>:</em></p>
		<?php elseif (is_author()) : ?>
		<?php
			if(get_query_var('author_name')) {
				$current_author = get_user_by('slug', get_query_var('author_name'));
			} else {
				$current_author = get_userdata(get_query_var('author'));
			}
		?>
		<section class="title">
			<h1>Posts by <?php print $current_author->nickname; ?></h1>
			<p><em>Displaying all items posted by <?php print $current_author->nickname; ?>:</em></p>
			</section><!-- /title -->
		<?php else : ?>
		<section class="title">
			<h1>Archives</h1>
			<p><em>Displaying all archived items:</em></p>
			</section><!-- /title -->
		<?php endif; ?>
	
		<section class="inner">
		<?php 
			require_once('loop.php'); 
		?>
		</section><!-- /inner -->
		</div><!-- /container -->
	</div><!-- /content -->	
<div class="clear"></div>
<?php get_footer(); ?>