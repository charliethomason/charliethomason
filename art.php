<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>
<div class="blog blog-gallery">

	<h1 class="index-head">Art <span class="fancy-amp">&amp;</span> Photo Gallery</h1>

	<div class="nav-wrap">
		 <?php get_search_form(); ?> 
		<nav class="search-nav">
			<span id="search-nav-menu">
				<a href="/art-tags" class="btn secondary-btn">Tags</a>
				<!--<a href="#" class="btn secondary-btn cat-btn" aria-haspopup="true" aria-controls="blog-menu" role="menuitem">Tags</a>-->
				<!--<ul class="blog-menu tag-menu" role="menu" aria-hidden="true" aria-live="polite" id="blog-menu">
					<?php 
					/*$tags = get_tags();
					foreach ( $tags as $tag ) {
						echo '<li role="menuitem"><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
					}*/						
					?>
				</ul>-->
			</span>
		</nav>
		<div class="clear"></div>
	</div>

	<div id="art-item-wrap">

		<?php 
		  $temp = $wp_query; 
		  $wp_query = null; 
		  $wp_query = new WP_Query(); 
		  $wp_query->query('showposts=100&post_type=art'.'&paged='.$paged); 
		  $count = 1;

		  while ($wp_query->have_posts()) : $wp_query->the_post(); 
		?>
		<?php	
			$custom = get_post_custom($post->ID);
			$medium = $custom["medium"][0];
			$print = $custom["print"][0];
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
		?>

		<div id="art-item-<?php echo $count; ?>" class="art-item">
			<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?> </a>
			<div class="info">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if($medium != "") { ?>
					<p class="catdate"><strong>Medium:</strong> <?=$medium?></p>
				<?php } ?>
				<p><a class="btn" href="<?php the_permalink(); ?>">More Info</a> 
					<a class="btn secondary-btn enlarge-btn" href="<?php echo $thumb_url[0]; ?>">Enlarge</a>
				</p>

			</div>
			<div class="clear"></div>
		</div>
		<?php 
			$count++;
			endwhile; 
		?>
		<div class="sizer">&nbsp;</div>
	</div>
	<div class="navigation">
	    <div class="prev-post"><?php previous_posts_link('&laquo; Newer') ?></div>
	    <div class="next-post"><?php next_posts_link('Older &raquo;') ?></div>
	</div>
	<?php 
	  $wp_query = null; 
	  $wp_query = $temp;  // Reset
	?>
	
	
	<div class="clear"></div> 
</div><!--.blog.blog-gallery-->
<?php get_footer(); ?>