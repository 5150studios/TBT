<?php
	
	//Suppress PHP errors...
	ini_set('display_errors', 0);

	remove_action('wp_head', 'wp_generator');

	//remove styling for WP Galleries
	add_filter( 'use_default_gallery_style', '__return_false' );

	//Increase JPEG compression to a higher quality...
	function md_jpeg_quality($quality) {
		return 90;
	}
	add_filter('jpeg_quality', 'md_jpeg_quality');
	
	//Add support for thumbnails...
	add_theme_support('post-thumbnails');
	
	//Add the Featured Image size...
	add_image_size('main', 782, 425, true);
	add_image_size('inner', 732, 385, true);

	function mdtheme_setup() {
		// Set default values for the upload media box
		update_option('image_default_align', 'left' );
		update_option('image_default_link_type', 'file' );
		update_option('image_default_size', 'large' );
	}
	add_action('after_setup_theme', 'mdtheme_setup');

	add_theme_support( 'woocommerce' );
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
	remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20 );
	remove_action( 'woocommerce_before_shop_loop','woocommerce_result_count', 20 );
	remove_action( 'woocommerce_single_product_summary','woocommerce_template_single_title', 5 );


	function md_theme_wrapper_start() {
	  echo '<div class="content">';
	}
	add_action('woocommerce_before_main_content', 'md_theme_wrapper_start', 10);

	function md_theme_wrapper_end() {
	  echo '</div>';
	}
	add_action('woocommerce_after_main_content', 'md_theme_wrapper_end', 10);

	function get_disqus() {
		echo "<div id=\"disqus_thread\"></div>
	    <script type=\"text/javascript\">
	        var disqus_shortname = 'totalbodytraining'; // required: replace example with your forum shortname
	        (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
	    </script>
	    <noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>";
	}

	function get_exercise_image($id, $field_name, $size, $fancybox = false) {
		$image = get_metadata('post', $id, $field_name, true);
	 	if( ! empty( $image ) ) :
			$attr = array(
				'alt'   => $value->post_title,
			);
			if( $fancybox ) {
				$fullsize = wp_get_attachment_image_src( $image, 'full' );
				return '<a class="fancybox" rel="images" href="'.$fullsize[0].'">'.wp_get_attachment_image( $image, $size, false, $attr ).'</a>';
			} else {
				return wp_get_attachment_image( $image, $size, false, $attr );
			}
		endif; 
	}

	function get_exercise_image_thumbs($id, $field_name) {
		$image = get_metadata('post', $id, $field_name, true);
	 	if( ! empty( $image ) ) :
			$attr = array(
				'alt'   => $value->post_title,
			);
			return wp_get_attachment_image( $image, 'thumbnail', false, $attr );
		endif; 
	}

	function isacustom_excerpt_length($length) {
	global $post;
	if ($post->post_type == 'post')
	return 25;
	else if ($post->post_type == 'design')
	return 15;
	else
	return 35;
	}
	add_filter('excerpt_length', 'isacustom_excerpt_length');
	
	//Register the menus...
	function md_register_menus() {
		register_nav_menus(
			array(
				'shop_menu' => 'Shop Menu',
				'main_menu' => 'Main Menu',
				'footer_menu' => 'Footer Menu',
			)
		);
	}
	add_action('init', 'md_register_menus');
	
	//Register the sidebar...
	function md_register_sidebars() {
		register_sidebar(array('id' => 'md-sidebar', 'name' => 'Left Sidebar'));
		register_sidebar(array('id' => 'md-footer', 'name' => 'Footer 1'));
		register_sidebar(array('id' => 'md-footer2', 'name' => 'Footer 2'));
		register_sidebar(array('id' => 'md-footer3', 'name' => 'Footer 3'));
		register_sidebar(array('id' => 'md-footer4', 'name' => 'Footer 4'));
	}
	add_action('widgets_init', 'md_register_sidebars');
	
	//Set the default Image settings...
	if (get_option('image_default_link_type') !== 'none') { update_option('image_default_link_type', 'none'); }
	if (get_option('image_default_size') !== 'medium') { update_option('image_default_size', 'medium'); }
	if (get_option('image_default_align') !== 'left') { update_option('image_default_align', 'left'); }
	
	//Function to enqueue CSS and JS files...
	function md_enqueue() {
		
		if( !is_admin() ) {
			//Load the jQuery into the front end of the site...
			wp_enqueue_script('jquery');

			//CSS
			wp_register_style( 'styles', get_template_directory_uri() . '/style.css', '', null, 'screen' );
			//wp_register_style( 'styles', get_template_directory_uri() . '/style.min.css', '', null, 'screen' );
	  		wp_enqueue_style( 'styles' );
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		//GoogleFont
		wp_register_style( 'googlefont', '//fonts.googleapis.com/css?family=Raleway:400,700', '', null, 'screen' );
  		wp_enqueue_style( 'googlefont' );

		//Font Awesome CSS
		wp_register_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', '', null, 'screen' );
  		wp_enqueue_style( 'font-awesome' );

  		//Easing jQuery Plugin for Quicksand
		wp_register_script( 'easing', get_template_directory_uri() . '/scripts/jquery.easing.js', '', null, true);
		wp_enqueue_script( 'easing' );

		//Quicksand Script
		wp_register_script( 'quicksand', get_template_directory_uri() . '/scripts/jquery.quicksand.js', '', null, true);
		wp_enqueue_script( 'quicksand' );

		//Quicksand Script
		wp_register_script( 'selectnav', get_template_directory_uri() . '/scripts/selectnav.min.js', '', null, true);
		wp_enqueue_script( 'selectnav' );

		//bxslider CSS
		wp_register_style( 'bxslider', get_template_directory_uri() . '/scripts/jquery.bxslider.css', '', null, 'screen' );
		wp_enqueue_style( 'bxslider' );

		//bxslider Script
		wp_register_script( 'bxslider', get_template_directory_uri() . '/scripts/jquery.bxslider.min.js', '', null, true);
		wp_enqueue_script( 'bxslider' );

		//fancybox CSS
		wp_register_style( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox-1.3.4.css', '', null, 'screen' );
		wp_enqueue_style( 'fancybox' );

		//fancybox Script
		wp_register_script( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox-1.3.4.pack.js', '', null, true);
		wp_enqueue_script( 'fancybox' );

		//Respond Script
		wp_register_script( 'respond', get_template_directory_uri() . '/scripts/respond.min.js', '', null, true);
		wp_enqueue_script( 'respond' );

		//Load & Enqueue Scripts
		wp_register_script( 'scripts', get_template_directory_uri() . '/scripts/scripts.js', '', null, true);
		wp_enqueue_script( 'scripts' );
	}
	
	//Add the enqueue scripts hook...
	add_action('wp_enqueue_scripts', 'md_enqueue');

	function pagination() {
		if( is_singular() )
			return;
		global $wp_query;
	
		/** Stop execution if there's only 1 page */
		if( $wp_query->max_num_pages <= 1 )
			return;
	
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		$max   = intval( $wp_query->max_num_pages );
	
		/**	Add current page to the array */
		if ( $paged >= 1 )
			$links[] = $paged;
	
		/**	Add the pages around the current page to the array */
		if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}
	
		if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}
	
		echo '<div class="pagination"><ul>' . "\n";
	
		/**	Previous Post Link */
		if ( get_previous_posts_link() )
			printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
	
		/**	Link to first page, plus ellipses if necessary */
		if ( ! in_array( 1, $links ) ) {
			$class = 1 == $paged ? ' class="active"' : '';
	
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
	
			if ( ! in_array( 2, $links ) )
				echo '<li>…</li>';
		}
	
		/**	Link to current page, plus 2 pages in either direction if necessary */
		sort( $links );
		foreach ( (array) $links as $link ) {
			$class = $paged == $link ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
		}
	
		/**	Link to last page, plus ellipses if necessary */
		if ( ! in_array( $max, $links ) ) {
			if ( ! in_array( $max - 1, $links ) )
				echo '<li>…</li>' . "\n";
	
			$class = $paged == $max ? ' class="active"' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
		}
	
		/**	Next Post Link */
		if ( get_next_posts_link() )
			printf( '<li>%s</li>' . "\n", get_next_posts_link() );

		echo '</ul></div>' . "\n";
	}


	function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
		?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</div>
<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
			?>
		</div>

		<?php comment_text() ?>

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
        }

	// function to display number of posts.
	function getPostViews($postID){
	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	        return "0 View";
	    }
	    return $count.' Views';
	}

	// function to count views.
	function setPostViews($postID) {
	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	    }else{
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}


	// Add it to a column in WP-Admin
	add_filter('manage_posts_columns', 'posts_column_views');
	add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
	function posts_column_views($defaults){
	    $defaults['post_views'] = __('Views');
	    return $defaults;
	}
	function posts_custom_column_views($column_name, $id){
		if($column_name === 'post_views'){
	        echo getPostViews(get_the_ID());
	    }
	}

	function social_media_links() {		
		$link = urlencode(get_permalink());
		$title = urlencode(get_the_title());
					
		echo '<li><strong>Share:</strong></li>
		<li><a href="http://www.facebook.com/sharer.php?u='.$link.'&amp;t='.$title.'" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
		<li><a href="http://twitter.com/share?text='.$title.'&amp;url='.$link.'" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></li>
		<li><a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url='.$link.'&amp;title='.$title.'" target="_blank"><i class="fa fa-google-plus-square"></i> Google+</a></li>
		<li><a href="'.get_bloginfo('rss2_url').'"><i class="fa fa-rss-square"></i> RSS</a></li>';		
	}

	//Append fancybox link to linked images
	function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ){
	  $classes = 'fancybox'; // separated by spaces, e.g. 'img image-link'
	
	  // check if there are already classes assigned to the anchor
	  if ( preg_match('/<a.*? class=".*?">/', $html) ) {
	    $html = preg_replace('/(<a.*? class=".*?)(".*? rel="group">)/', '$1 ' . $classes . '$2', $html);
	  } else {
	    $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" rel="group">', $html);
	  }
	  return $html;
	}
	add_filter('image_send_to_editor','give_linked_images_class',10,8);

	//[ul class="none"] Shortcode...
	function md_ul($atts, $content = null) {
		extract( shortcode_atts( array('class' => 'none'), $atts ) );
		return '<ul class="'.esc_attr($class).'">'.do_shortcode($content).'</ul>';
	}
	add_shortcode("ul", "md_ul");

	//[li] Shortcode...
	function md_li($atts, $content = null) {
		extract( shortcode_atts( array('class' => ''), $atts ) );
		return '<li>'.do_shortcode($content).'</li>';
	}
	add_shortcode("li", "md_li");

	//[tabs] Shortcode...
	function md_tabs($atts, $content = null) {
		return '<ul class="tabs">'.do_shortcode($content).'</ul>';
	}
	add_shortcode("tabs", "md_tabs");

	//[tablink] Shortcode...
	function md_tablink($atts, $content = null) {
		extract( shortcode_atts( array('id' => 'tab1'), $atts ) );
		return '<li><a href="#'.esc_attr($id).'">' . do_shortcode($content) . '</a></li>';
	}
	add_shortcode("tablink", "md_tablink");

	//[tab] Shortcode...
	function md_tab($atts, $content = null) {
		extract( shortcode_atts( array('id' => 'tab1'), $atts ) );
		return '<div class="tabitem" id="'.esc_attr($id).'">' . wpautop(do_shortcode($content)) . '</div>';
	}
	add_shortcode("tab", "md_tab");
	
	//[faqs] Shortcode...
	function md_faq($atts, $content = null) {
		return '<dl class="faqs">'.do_shortcode($content).'</dl>';
	}
	add_shortcode("faqs", "md_faq");

	//[question] Shortcode...
	function md_question($atts, $content = null) {
		return '<dt><i class="icon-question-sign"></i> '.do_shortcode($content).'</dt>';
	}
	add_shortcode("question", "md_question");

	//[answer] Shortcode...
	function md_answer($atts, $content = null) {
		return '<dd><i class="icon-quote-right"></i> '.do_shortcode($content).'</dd>';
	}
	add_shortcode("answer", "md_answer");	

	//[link id="431"] Shortcode...
	function md_link($atts, $content = null) {
		extract( shortcode_atts( array('id' => '431'), $atts ) );
		return get_permalink($id);
	}
	add_shortcode("link", "md_link");



	//[half] Shortcode...
	function md_half($atts, $content = null) {
		return '<div class="half">' . wpautop(do_shortcode($content)) . '</div>';
	}
	add_shortcode("half", "md_half");

	//[half_last] Shortcode...
	function md_half_last($atts, $content = null) {
		return '<div class="half half-last">' . wpautop(do_shortcode($content)) . '</div>';
	}
	add_shortcode("half_last", "md_half_last");

	//[video] Shortcode...
	function md_video($atts, $content = null) {
		return '<div class="Flexible-container">' . do_shortcode($content) . '</div>';
	}
	add_shortcode("video", "md_video");
	
	//[hr] Shortcode...
	function md_hr($atts) {
		return '<hr />';
	}
	add_shortcode("hr", "md_hr");

	function shortcode_empty_paragraph_fix($content) {   
		$array = array (
		    '<p>[' => '[', 
		    ']</p>' => ']', 
		    ']<br />' => ']'
		);
		
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'shortcode_empty_paragraph_fix');

	/* WOO Commerce Updates */
	// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
	add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
	 
	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
	}