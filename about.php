<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>

<div class="about-intro">
	<section class="blog" role="region">

		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

				<h1><a href="#"><?php the_title(); ?></a></h1>

				<div class="entry introcontent">

					<?php the_content(); ?>

				</div>

				<div class="clear"></div>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</section>
</div>

	<section id="about-skills" class="about-section" role="region">
		<h2 class="home-head"><a href="#"> Web Development Skills </a></h2>

		<div id="skills-box" class="blog">
			<ul>
				<div class="skills-column">
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/html5-02.png" alt="HTML5 logo" />HTML5</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/css3-01.png" alt="CSS3 logo" />CSS</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/js-01.png" alt="JavaScript logo" />JavaScript, jQuery, AJAX</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/php-01.png" alt="PHP logo" />PHP</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/sass-01.png" alt="Sass logo" />HAML, Sass, LESS</li>
				</div>
				<div class="skills-column second">
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/drupal-01.png" alt="Drupal logo" />Drupal</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/wordpress-01.png" alt="WordPress logo" />WordPress</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/ror-01.png" alt="Ruby on Rails logo" />Ruby on Rails (beginner)</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/git-01.png" alt="Git logo" />Version Control (Git, SVN)</li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/ps-01.png" alt="Photoshop logo" />Adobe Creative Suite</li>
				</div>
				<div class="clear"></div>
			</ul>
		</div>

	</section>

	<section id="about-education" class="about-section" role="region">
		<h2 class="home-head"><a href="#"> Education </a></h2>

		<div id="education-box" class="blog">
			<ul>
				<li id="univ-ky">
					<a href="http://www.uky.edu" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_directory'); ?>/images/ukentucky01.jpg" alt="University of Kentucky logo" border="0" />
					</a>
					<h3><a href="http://www.uky.edu" target="_blank" rel="nofollow">University of Kentucky</a></h3>
					<h4>Bachelor of Fine Arts (BFA)<br> Art Studio</h4>
					<p>Graduated Dec. 2007, <em>Magna Cum Laude</em></p>
				</li>
				<li id="depaul">
					<a href="http://www.depaul.edu" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_directory'); ?>/images/depaul01.jpg" alt="DePaul University logo" border="0" />
					</a>
					<h3><a href="http://www.depaul.edu" target="_blank" rel="nofollow">DePaul University</a></h3>
					<h4>Master of Arts (MA)<br> New Media Studies</h4>
					<p>Graduated May 2010</p>
				</li>
				<li id="starter-league">
					<a href="http://www.starterleague.com" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_directory'); ?>/images/starterleague01.jpg" alt="Starter League logo" border="0" />
					</a>
					<h3><a href="http://www.starterleague.com" target="_blank" rel="nofollow">Starter League (aka: Code Academy)</a></h3>
					<h4>12-week Web App Development program<br> Ruby on Rails, HTML5, CSS3, JS/jQuery</h4>
					<p>Winter 2012 (Jan-Mar)</p>
				</li>
			</ul>
		</div>
	</section>

	<section id="about-facts" class="about-section" role="region">
		<h2 class="home-head"><a href="#"> Random Facts </a></h2>
		<div id="facts-box" class="blog">
			<div class="fact italic-fact" tabindex="0">I met my girlfriend Amanda at the 2009 Sundance Film Festival in Park City, Utah. We returned to the festival again in 2010 and 2011.</div>
			<div class="fact" tabindex="0">I hope to be remembered as creative, unique, positive, nice, and intelligent.</div>
			<div class="fact italic-fact" tabindex="0">I consider myself a liberal/progressive Catholic and am a member at Old St. Patrick's Church in the West Loop of Chicago.</div>
			<div class="fact" tabindex="0">If I could live anywhere in the world, I would still live in the South Loop of Chicago. Or, perhaps Venice, Italy.</div>
			<div class="fact" tabindex="0">I grew up in the tiny borough of Shrewsbury, New Jersey. In 1999 my family moved to Bardstown, Kentucky, where I went to high school.</div>
			<div class="fact italic-fact" tabindex="0">&quot;Nothing is permanent in this wicked world &mdash; not even our troubles.&quot;<br>&mdash; Charlie Chaplin</div>
			<div class="fact green-fact" tabindex="0">My ideal sleeping time is 1AM to 8AM.</div>
			<div class="fact" tabindex="0">I don't own a car and have no intention of buying one.</div>
			<div class="fact italic-fact" tabindex="0">My favorite bands are Nirvana, The Beatles, and Tom Waits.</div>
			<div class="fact italic-fact" tabindex="0">My favorite movies are <em>City Lights</em>, <em>Taxi Driver</em>, <em>The Empire Strikes Back</em>, and <em>Edward Scissorhands</em>.</div>
			<div class="fact green-fact" tabindex="0">My favorite actors are Vincent Price and Jack Nicholson.</div>
			<div class="fact green-fact" tabindex="0">My favorite book is "Perfume" by Patrick S&uuml;skind.</div>
			<div class="fact" tabindex="0">The sports teams I care about most are Ferrari Formula 1 racing, Chicago White Sox, and Chicago Blackhawks.</div>
			<div class="fact" tabindex="0">I'm afraid of praying mantises, moths, bees, and giant spiders. Especially praying mantises.</div>
			<div class="fact" tabindex="0">I was a vegetarian for 5 years. I still try to avoid any products with high fructose corn syrup or MSG.</div>
			<div class="fact italic-fact" tabindex="0">To date, I have visited England twice, Italy twice, Switzerland, Mexico, and Canada.</div>
			<div class="fact" tabindex="0">I have zero tolerance for people who use cellphones in movie theaters.</div>
			<div class="sizer">&nbsp;</div>
		</div>
	</section>

<?php get_footer(); ?>