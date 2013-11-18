<?php get_header(); ?>
    <div class="blog ideas-blog">

    	<h1 class="index-head">Ideas</h1>

		<div class="nav-wrap">
			 <?php get_search_form(); ?> 
			<nav class="search-nav">
				<span id="search-nav-menu">
					<a href="javascript:void(0)" class="btn secondary-btn cat-btn">Categories</a>
					<ul class="blog-menu">
						<li class="cat-item"><a href="/ideas">Everything</a></li>
						<?php wp_list_categories('orderby=name&title_li=&exclude=1,2,51'); ?>
					</ul>
				</span>
			</nav>
			<div class="clear"></div>
		</div>		
		
		<div class="ideas-list">

        <?php if(have_posts()) : ?>
        
	        <?php while(have_posts()) : the_post(); ?>
         
	        <article class="idea">
		        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<ul class="catdate">
					<li><?php the_time('D, M j, Y'); ?></li>
						<?php 
							$meta = get_post_meta($post->ID,'place',true);
							if ($meta != '') {
								echo '<li>&#8226; '.get_post_meta($post->ID,'place',true).'</li>';
							} 
						?>
					<li>&#8226; <?php the_category(', '); ?></li>
				</ul>
			</article>
			
			<?php endwhile; ?>

		</div><!--div.blog-posts-->
         
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