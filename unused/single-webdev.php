<?php get_header(); ?>
 
<div class="blog webdev-blog">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php	
		$custom = get_post_custom($post->ID);
		$link = $custom["link"][0];
		$tech = $custom["tech"][0];
		$mydate = $custom["mydate"][0];
		$myrole = $custom["myrole"][0];
	?>
         
		<article id="webdev-page-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            
            <section class="details-box">
            	<ul id="details-1">
            		<li><?php if ($link != "") { ?>
            				<a href="<?=$link?>" target="_blank" rel="nofollow">View Site</a>
            			<?php } else { ?>
            				Site is currently offline or unavailable
            			<?php } ?></li>
            		<li><strong>Software:</strong> <?=$tech?></li>
            	</ul>
            	<ul id="details-2">
            		<li><strong>Time involved:</strong> <?=$mydate?></li>
            		<li><strong>Responsibilities:</strong> <?=$myrole?></li>
            	</ul>
            	<div class="clear"></div>
            </section>

			<div class="entry">
             
                <?php the_content(); ?>

				<div id="bigphotobox"> </div>

            </div><!-- div.entry -->
 

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