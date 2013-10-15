<?php
/*
Template Name: Web Dev
*/
?>
<?php get_header(); ?>
<div class="portfolio-index" id="webdev-index">
	<h1 class="index-head">Web Design &amp; Development Portfolio</h1>
	<?php 
	  $temp = $wp_query; 
	  $wp_query = null; 
	  $wp_query = new WP_Query(); 
	  $wp_query->query('showposts=10&post_type=webdev'.'&paged='.$paged); 

	  while ($wp_query->have_posts()) : $wp_query->the_post(); 
	?>
	<?php	
		$custom = get_post_custom($post->ID);
		$link = $custom["link"][0];
	?>

	<div id="webdev-item-<?php the_ID(); ?>" class="portfolio-index-item webdev-item">
		<a class="portfolio-index-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>
		<div class="portfolio-index-meta">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="portfolio-excerpt"><?php echo(get_the_excerpt()); ?></p>
			<p><a class="btn blue-btn" href="<?php the_permalink(); ?>">More Info</a> <a class="btn green-btn" href="<?=$link?>" target="_blank" rel="nofollow">View Site</a></p>
		</div>
		<div class="clear"></div>
	</div>
	
	<?php endwhile; ?> 

	<div class="navigation">
	    <div class="prev-post"><?php previous_posts_link('&laquo; Newer') ?></div>
	    <div class="next-post"><?php next_posts_link('Older &raquo;') ?></div>
	</div>

	<?php 
	  $wp_query = null; 
	  $wp_query = $temp;  // Reset
	?>

	<div class="clear"></div> 
</div>
<?php get_footer(); ?>