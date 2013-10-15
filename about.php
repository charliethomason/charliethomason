<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>

<div class="about-intro">
	<section class="blog">

		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<div class="entry introcontent">

					<?php the_content(); ?>

				</div>

				<div class="clear"></div>

		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</section>
</div>

	<section id="about-skills" class="home-section about-section">
		<h2 class="home-head about-head"><a href="javascript:void(0)"> Web Development Skills </a></h2>

		<div id="skills-box" class="blog">
			<ul>
				<div class="skills-column">
					<li><img src="<?php bloginfo('template_directory'); ?>/images/skills/html5-01.png" alt="HTML5 logo" />HTML5</li>
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

	<section id="about-education" class="home-section about-section">
		<h2 class="home-head about-head"><a href="javascript:void(0)"> Education </a></h2>

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

	<section id="about-facts" class="home-section about-section">
		<h2 class="home-head about-head"><a href="javascript:void(0)"> Random Facts </a></h2>
		<div id="facts-box" class="blog">
			<div class="fact">I hope to be remembered as creative, unique, positive, nice, and intelligent.</div>
			<div class="fact">I like to wear Calvin Klein shirts, Levi's jeans, and Converse All-Star high tops.</div>
			<div class="fact">If I could live anywhere in the world, I would still live in the South Loop of Chicago.</div>
			<div class="fact">Sports teams I care about: Ferrari Formula 1, Chicago White Sox, and Chicago Blackhawks.</div>
			<div class="fact">My ideal sleeping time is 1AM to 7AM.</div>
			<div class="fact">My favorite foods are pizza, bagels, jalapeños, hot dogs, and Rainier cherries.</div>
			<div class="fact">My favorite beers are Guinness, Goose Island 312, Yuengling, Hofbrauhaus, and PBR.</div>
			<div class="fact">The only reason I own a television is to watch movies. I hate 90% of what's on TV.</div>
			<div class="fact">My favorite actors are Vincent Price and Jack Nicholson. My favorite actress is Kate Winslet.</div>
			<div class="fact">My least favorite actor is Ben Stiller.</div>
			<div class="fact">I used to think freelancing was the best kind of career for me; now I much prefer having a full-time job.</div>
			<div class="fact">I don't own a car and have no intention of ever buying one.</div>
			<div class="fact">I am afraid of praying mantises, moths, and accidentally ingesting soap.</div>
			<div class="fact">I don't eat or drink anything with high fructose corn syrup or MSG.</div>
			<div class="fact">I was a vegetarian for 5 years. It started by wanting to get healthier and ended because bacon.</div>
			<div class="sizer">&nbsp;</div>
		</div>
	</section>

<?php get_footer(); ?>