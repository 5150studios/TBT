<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, maximum-scale=2.0">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
		<?php wp_head(); ?>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie8-and-down.css" />
<![endif]-->

<!-- Enable media queries for old IE -->
  <!--[if lt IE 9]>
     <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
	</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div id="headerwrap">

				<div id="header">
			<div id="headerinner">
				<a class="logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
				<?php shailan_dropdown_menu(); ?>
				<div class="clear"></div>
			</div><!-- /headerinner -->
		</div><!-- /header -->	

		<div class="headerslider" style="display:none">		
			  <div class="slide">
			  	<img alt="Military" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/military.jpg">
			  	<div class="slant military">
			  		<div class="slanttext">
				  		<div class="slantheading">Military Spec</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading military">Military Spec</div>
				  		<div class="slantmodel">Military Spec</div>
				  	</div>
			  	</div>
			  </div>
			  <div class="slide">
			  	<img alt="Pink Version" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/pink.jpg">
			  	<div class="slant pink">
			  		<div class="slanttext">
				  		<div class="slantheading">Suspension is my release</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading pink">Lean + Sexy</div>
				  		<div class="slantmodel"><span class="strong">TBT</span>Tone</div>
				  	</div>
			  	</div>
			  </div>
		</div><!-- /brandsslider -->


	</div><!-- /headerwrap -->
	<div id="wrap">