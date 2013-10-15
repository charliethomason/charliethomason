<?php get_header(); ?>
 
    <div class="blog">

	<div class="nav-wrap">
		 <?php get_search_form(); ?> 
		<nav class="search-nav">
			<span id="search-nav-menu">
				<a href="javascript:void(0)" class="btn secondary-btn cat-btn">Categories</a>
				<ul class="blog-menu">
					<?php wp_list_categories('orderby=name&title_li='); ?>
				</ul>
			</span>
		</nav>
		<div class="clear"></div>
	</div>

		<div class="blog-posts">
        <?php if(have_posts()) : ?>
        
        <h2 class="archivetitle">Search Results for &#8216;<?php the_search_query(); ?>&#8217;</h2>

        <?php while(have_posts()) : the_post(); ?>
         
        <article class="post">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p class="catdate"><?php the_time('D, M j, Y'); ?> &#8226; <?php the_category(', '); ?></p>
            
			<div class="entry">  
				<div class="aligncenter"><?php the_post_thumbnail('medium'); ?></div>
                <?php the_excerpt(); ?>
            </div><!-- div.entry -->
 
    	</article><!-- article.post -->
 
<?php endwhile; ?>
     
	<div class="navigation">
		<div class="alignleft"><?php previous_posts_link('&laquo; Back'); ?></div>
		<div class="alignright"><?php next_posts_link('Next &raquo;'); ?></div>
	</div>

<?php else : ?>
	<h2 class="archivetitle">Search results</h2>
	<article class="post">
		<div class="entry">
		<p>Sorry, no results matched your search.</p>
		<?php get_search_form(); ?>
		</div>
	</article>
 
<?php endif; ?>
	</div><!-- div.blog-posts -->
</div>
 
   
<?php get_footer(); ?>