<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo('name'); ?> <?php wp_title ('|'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
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
 
<header id="header" role="banner">
	
	<h1<?php if (is_front_page()) { ?> class="home-title"<?php } else { ?> class="fixed-nav"<?php } ?>>
		<a id="logo" class="hidetext" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<a id="mobile-logo" class="hidetext" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/images/ctlogo03.gif" alt="Charlie Thomason logo">
		</a>
	</h1>
	<h2 class="safe-hide">Web Developer and Artist from Chicago</h2>
	
	<nav id="nav"<?php if (!is_front_page()) { ?> class="fixed"<?php } ?> role="navigation">
		<div id="primary-nav">
			<a href="#" role="button" id="hamburger">Menu</a>
			<ul class="main-nav">
				<li id="nav-logo"<?php if (is_front_page()) { ?> class="active"<?php } ?>>
					<a href="<?php echo get_option('home'); ?>">Home</a>
				</li>
				<li<?php if (is_page(array('About Charlie Thomason', 'Resume', 'Contact'))) { ?> class="active"<?php } ?>>
					<a href="/about">About</a>
				</li>
				<li<?php if (is_page_template('art.php') || is_singular('art') || is_tag() || is_page_template('art-tags.php')) { ?> class="active"<?php } ?>>
					<a href="/art">Art</a>
				</li>
				<li<?php if (is_home() || is_singular('post') || is_category()) { ?> class="active"<?php } ?>>
					<a href="/ideas">Ideas</a>
				</li>
				<li<?php if (is_page_template('store.php')) { ?> class="active"<?php } ?>>
					<a href="/store">Store</a>
				</li>
			</ul>
			<ul class="nav-social">
				<li class="nav-twitter"><a href="http://twitter.com/charliethomason" class="contact-btn" rel="nofollow" target="_blank"><span>Twitter</span></a></li>
				<li class="nav-linkedin"><a href="http://linkedin.com/in/charlesthomason" class="contact-btn" rel="nofollow" target="_blank"><span>LinkedIn</span></a></li>
				<li class="nav-instagram"><a href="http://instagram.com/charliethomason" class="contact-btn" rel="nofollow" target="_blank"><span>Instagram</span></a></li>
				<li class="nav-flickr"><a href="http://flickr.com/recycledfilm" class="contact-btn" rel="nofollow" target="_blank"><span>Flickr</span></a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</nav>
	
</header>

<div id="container" role="main">