<?php get_header(); ?>

<div class="blog art-blog single-blog blog-gallery">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<?php	
		$custom = get_post_custom($post->ID);
		$print = $custom["print"][0];
		$year = $custom["year"][0];
		$location = $custom["location"][0];
		$medium = $custom["medium"][0];
		$size = $custom["size"][0];
		$camera = $custom["camera"][0];
		$iso = $custom["iso"][0];
	?>
	<article id="art-post-<?php the_ID(); ?>" class="post art-post">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p class="catdate"><?php print $medium; ?></p>

		<div class="entry"> 
			<?php the_content(); ?>
		</div><!-- div.entry -->
			
		<aside class="details-box" role="complementary">
			<ul id="details-1">
				<li><?php if ($print != "") { ?>
						<a href="<?=$print?>" target="_blank" rel="nofollow"><?php if (strpos($print,'blurb') !== false || strpos($print,'amazon') !== false) { echo 'Buy Book'; } else { echo 'Buy Prints'; } ?></a>
					<?php } else { ?>
						Not currently for sale
					<?php } ?></li>
				<?php if($year != "") { ?>
					<li><strong>Year created:</strong> <?=$year?></li>
				<?php } ?>
					<li><strong>Date posted:</strong> <?php the_time('D, M j, Y'); ?></li>
				<?php if ($location != "") { ?>
					<li><strong>Location of origin: </strong><?=$location?> <span class="small">&#40;<a href="http://maps.google.com/maps?q=<?=$location?>" rel="nofollow" target="_blank" title="opens Google Maps in a new window">View on Map</a>&#41;</span></li>
				<?php } ?>
				<?php if($size != "") { ?>
					<li><strong>Size:</strong> <?=$size?></li>
				<?php } ?>
				<?php if ($camera != "") { ?>
					<li><strong>Camera type:</strong> <?=$camera?></li>
				<?php } ?>
				<?php if ($iso != "") { ?>
					<li><strong>ISO:</strong> <?=$iso?></li>
				<?php } ?>
					<li><strong>Tags: </strong><?php the_tags('', ', '); ?></li>
			</ul>
			<div class="clear"></div>
		</aside>
		
		<div class="clear"></div>

	</article><!-- article.post -->

	<?php endwhile; ?>
	<div class="navigation"> 
	    <div class="prev-post"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
		<div class="next-post"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
		<div class="clear"></div>
	</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>