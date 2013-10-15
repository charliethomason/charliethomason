<?php get_header(); ?>

<div class="blog art-blog single-blog">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<?php	
		$custom = get_post_custom($post->ID);
		$print = $custom["print"][0];
		$location = $custom["location"][0];
		$medium = $custom["medium"][0];
		$camera = $custom["camera"][0];
		$year = $custom["year"][0];
		$iso = $custom["iso"][0];
		$fstop = $custom["fstop"][0];
		$shutter = $custom["shutter"][0];
	?>
	<article id="art-page-<?php the_ID(); ?>" <?php post_class('post'); ?>>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p class="catdate"><strong><?php the_time('D, M j, Y'); ?></strong> &#8226; <?php the_category(', '); ?></p>

		<div class="entry"> 
			<?php the_content(); ?>
		</div><!-- div.entry -->
			
		<aside class="details-box">
			<ul id="details-1">
				<li><?php if ($print != "") { ?>
						<a href="<?=$print?>" target="_blank" rel="nofollow">Buy Prints</a>
					<?php } else { ?>
						Not currently for sale
					<?php } ?></li>
				<?php if ($location != "") { ?>
					<li><strong>Location: </strong><?=$location?> <span class="small">&#40;<a href="http://maps.google.com/maps?q=<?=$location?>" rel="nofollow" target="_blank" title="opens Google Maps in a new window">View on Map</a>&#41;</span></li>
				<?php } ?>
				<?php if($medium != "") { ?>
					<li><strong>Medium:</strong> <?=$medium?></li>
				<?php } ?>
				<?php if($year != "") { ?>
					<li><strong>Year:</strong> <?=$year?></li>
				<?php } ?>
				<?php if ($camera != "") { ?>
					<li><strong>Camera type:</strong> <?=$camera?></li>
				<?php } ?>
				<?php if ($iso != "") { ?>
					<li><strong>ISO:</strong> <?=$iso?></li>
				<?php } ?>
				<?php if ($fstop != "") { ?>
					<li><strong>Aperture: </strong><?=$fstop?></li>
				<?php } ?>
				<?php if ($shutter != "") { ?>
					<li><strong>Shutter speed: </strong><?=$shutter?></li>
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