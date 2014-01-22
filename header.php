<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
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
					<a href="<?php echo get_permalink(229); ?>">
						<img alt="Pink Version" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/pink.jpg">
					</a>
					<div class="slant pink">
						<div class="slanttext">
				  		<div class="slantheading">Strong Is The New Sexy</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading pink">Fit + Fierce</div>
				  		<div class="slantmodel"><span class="strong">TBT</span>Pink</div>
				  	</div>
				</div>
			</div>			
			<div class="slide">
			  	<a href="<?php echo get_permalink(214); ?>">
			  		<img alt="TBT Essentials" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-essentials.jpg">
			  	</a>
			  	<div class="slant tbtessentials">
			  		<div class="slanttext">
				  		<div class="slantheading">When Performance Is Everything</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading tbtessentials">Core + Strength</div>
				  		<div class="slantmodel"><span class="strong">TBT</span>Essentials</div>
				  	</div>
			  	</div>
			  </div>
			  <div class="slide">
			  	<a href="<?php echo get_permalink(225); ?>">
			  		<img alt="TBT Elite" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-elite.jpg">
			  	</a>
			  	<div class="slant tbtelite">
			  		<div class="slanttext">
				  		<div class="slantheading">Suspend If You Dare</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading tbtelite">Ultimate + Challenge</div>
				  		<div class="slantmodel"><span class="strong">TBT</span>Elite</div>
				  	</div>
			  	</div>
			  </div>
			   <div class="slide">
			  	<a href="<?php echo get_permalink(137); ?>">
			  		<img alt="TBT Travel" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/tbt-travel.jpg">
			  	</a>
			  	<div class="slant tbttravel">
			  		<div class="slanttext">
				  		<div class="slantheading">Suspension Is My Release</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading tbttravel">Anywhere + Anytime</div>
				  		<div class="slantmodel"><span class="strong">TBT</span>Travel</div>
				  	</div>
			  	</div>
			  </div>		
			  <div class="slide">
			  	<img alt="Military" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/military.jpg">
			  	<div class="slant military">
			  		<div class="slanttext">
				  		<div class="slantheading">Coming Soon</div>
				  	</div>
				  	<div class="slantfeature">	
				  		<div class="slantsubheading military">Tacticle + Power</div>
				  		<div class="slantmodel"><span class="strong">TBT</span>Military</div>
				  	</div>
			  	</div>
			  </div>
		</div><!-- /brandsslider -->


	</div><!-- /headerwrap -->
	<div id="wrap">