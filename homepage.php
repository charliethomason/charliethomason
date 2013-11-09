<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
 	
<div class="intro-image">
	<a id="mobile-portrait" href="/about" title="Charlie Thomason">
		<img src="<?php bloginfo('template_directory'); ?>/images/cthomason07_680.jpg" alt="Charlie Thomason" />
	</a>
	<section class="intro">
		<div class="introcontent">
			<h1>Charlie Thomason is a Web Developer, Artist <span class="fancy-amp">&amp;</span> Photographer from Chicago</h1>
			<p>He is currently an Associate Presentation Layer Engineer at <a href="http://www.razorfish.com" target="_blank">Razorfish</a> and specializes in CSS3, JavaScript <span class="fancy-amp">&amp;</span> jQuery, web accessibility, responsive design, SEO, and custom WordPress themes.</p>
			<p>Charlie published his first photography book, <a href="http://www.blurb.com/b/2868673-open-range" target="_blank"><em>Open Range: From Monument Valley to the Mojave Desert</em></a> in January 2012, and has had paintings, drawings, and photographs featured in numerous exhibitions.</p>
			<div>
				<a class="btn home-btn" href="/about">Learn More</a> <a class="btn home-btn secondary-btn" href="/art">View Gallery</a>
			</div>

		</div>
		<div class="clear"></div>
	</section>
</div>

<?php /*
<section id="home-art" class="home-section">
	<h2 class="home-head"><a href="/galleries"> Gallery </a></h2>
	<ul id="art-cells">
		<?php 
			//$loop = new WP_Query(array('post_type' => 'gallery', 'posts_per_page' => 10)); 
			//$count = 0;
		?>
		<?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php	
			//$custom = get_post_custom($post->ID);
			//$medium = $custom["medium"][0];
			//$print = $custom["print"][0];
			//$count++;
		?>
		<li class="art-cell" id="art-cell-<?=//$count;?>">
			<a class="art-cell-img" href="<?php //the_permalink(); ?>"><?php //the_post_thumbnail('medium'); ?></a>
			<div class="art-cell-meta">
				<h3><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h3>
				<p class="catdate"><strong><?php //the_time('D, M j, Y'); ?></strong><br><em><?=//$medium?></em></p>
				<p><a class="btn blue-btn" href="<?php //the_permalink(); ?>">More Info</a></p>
			</div>
		</li>
		<?php //endwhile; ?>
		<?php //wp_reset_query(); ?>
		<div class="clear"></div>
	</ul>
</section>
*/ ?>

<?php /*
<section id="home-blog" class="home-section">
	<h2 class="home-head"><a href="/news"> News &amp; Events </a></h2>
	<div class="blog blog-home">
		<div class="blog-nav-wrap">
			 <?php //get_search_form(); ?> 
			<div class="clear"></div>
		</div>

		<div class="blog-posts">
			<?php 
				query_posts( 'posts_per_page=5'); 
				$count = 1;
			?>
	        <?php while(have_posts()) : the_post(); ?>
			<article class="post">
		        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p class="catdate"><strong><?php the_time('D, M j, Y'); ?></strong></p>
				<?php
					global $more;
					$more = 0;
				?>
				<?php if ($count == 1): ?>
					<div class="entry">
						<?php the_content('Continue Reading'); ?>
					</div>
				<?php endif; ?>
			</article>
			<?php 
				$count++;
				endwhile; 
			?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
*/ ?>
   
<?php get_footer(); ?>