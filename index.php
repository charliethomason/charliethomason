<?php get_header(); ?>
    <div class="blog ideas-blog">

    	<h1 class="index-head">Ideas</h1>
		
		<ul class="ideas-list">

        <?php if(have_posts()) : ?>
        
	        <?php while(have_posts()) : the_post(); ?>
         
	        <li>
		        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="catdate"><span class="date"><?php the_time('D, M j, Y'); ?></span></p>
			</li>
			
			<?php endwhile; ?>

		</ul><!--div.blog-posts-->
         
        <div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Back'); ?></div>
			<div class="alignright"><?php next_posts_link('Next &raquo;'); ?></div>
		</div>
		
		<?php else : ?>

			<article class="post">
				<div class="entry">
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
     
        <?php endif; ?>

    </div><!-- div.blog -->
   
<?php get_footer(); ?>