<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); ?> <?php wp_title ('|'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon01.ico">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic|Crimson+Text:400,400italic,700,700italic|Fjalla+One">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css">
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
 
<header id="header">
	
	<h1<?php if (is_front_page()) { ?> class="home-title"<?php } else { ?> class="fixed-nav"<?php } ?>>
		<a id="logo" class="hidetext" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<a id="mobile-logo" class="hidetext" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/images/ctlogo02.gif" alt="Charlie Thomason logo">
		</a>
	</h1>
	
	<nav id="nav"<?php if (!is_front_page()) { ?> class="fixed"<?php } ?>>
		<div id="primary-nav">
			<ul class="main-nav">
				<li<?php if (is_front_page()) { ?> class="active"<?php } ?>>
					<a href="<?php echo get_option('home'); ?>">Home</a>
				</li>
				<li<?php
					if (is_page(array('About Charlie Thomason', 'Resume', 'Contact')))
					{
					echo " class=\"active\"";
					}
					?> id="charlie"><a href="/about">About</a></li>
				<li<?php
					if (is_page_template('gallery.php') || is_singular('gallery'))
					{
					echo " class=\"active\"";
					}
					?>><a href="/art">Gallery</a>
					<ul class="main-sub-nav">
						<li class="cat-item"><a href="/art">Everything</a></li>
						<li class="cat-item"><a href="/category/art"<?php if (is_category('Paintings & Drawings')) { ?> class="current-cat"<?php } ?>>Paintings <span class="fancy-amp">&amp;</span> Drawing</a></li>
						<li class="cat-item"><a href="/category/photo"<?php if (is_category('Photography')) { ?> class="current-cat"<?php } ?>>Photography</a></li>
						<?php wp_list_categories('orderby=name&title_li=&exclude=1,2,51'); ?>
					</ul></li>
				<li<?php if (is_home() || is_singular('post')) { ?> class="active"<?php } ?>><a href="/ideas">Ideas</a></li>
				<li id="nav-store"><a href="http://society6.com/cthomason" rel="nofollow" target="_blank">Store</a></li>
			</ul>
			<ul class="nav-social">
				<li class="mobile-nav-btn"><a href="<?php echo get_option('home'); ?>" class="contact-btn">Home</a></li>
				<li class="mobile-nav-btn"><a href="/about" class="contact-btn">About</a></li>
				<li class="mobile-nav-btn"><a href="/art" class="contact-btn">Gallery</a></li>
				<li class="mobile-nav-btn"><a href="/ideas" class="contact-btn">Ideas</a></li>
				<li class="mobile-nav-btn"><a href="http://society6.com/cthomason" class="contact-btn" rel="nofollow" target="_blank">Store</a></li>
				<li class="nav-twitter"><a href="http://twitter.com/charliethomason" class="contact-btn" rel="nofollow" target="_blank"><span>Twitter</span></a></li>
				<li class="nav-linkedin"><a href="http://linkedin.com/in/charlesthomason" class="contact-btn" rel="nofollow" target="_blank"><span>LinkedIn</span></a></li>
				<li class="nav-instagram"><a href="http://instagram.com/charliethomason" class="contact-btn" rel="nofollow" target="_blank"><span>Instagram</span></a></li>
				<li class="nav-flickr"><a href="http://flickr.com/recycledfilm" class="contact-btn" rel="nofollow" target="_blank"><span>Flickr</span></a></li>
			</ul>
			<a href="#" id="hamburger">Menu</a>
			<div class="clear"></div>
		</div>
	</nav>
	
</header>

<div id="container">