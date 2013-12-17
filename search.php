<?php get_header(); ?>
 
    <div class="blog">

	<div class="nav-wrap">
		 <?php get_search_form(); ?> 
		<nav class="search-nav" role="navigation">
			<span id="search-nav-menu" role="menubar">
				<a href="#" class="btn secondary-btn cat-btn" aria-haspopup="true" aria-controls="blog-menu" role="menuitem">Categories</a>
                    <ul class="blog-menu" role="menu" aria-hidden="true" aria-live="polite" id="blog-menu">
                        <li class="cat-item" role="menuitem"><a href="/ideas">Everything</a></li>
                        <?php 
                            $args = array(
                                'type' => 'post',
                                'orderby' => 'name',
                                'order' => 'ASC'
                            );
                            $categories = get_categories($args);
                            foreach($categories as $category) { 
                                echo '<li class="cat-item" role="menuitem"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name.'</a></li>';
                            } 
                        ?>
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
		<p class="catdate"><?php the_time('D, M j, Y'); ?></p>
            
			<div class="entry">  
				<div class="aligncenter"><?php the_post_thumbnail('medium'); ?></div>
                <?php the_excerpt(); ?>
            </div><!-- div.entry -->
 
    	</article><!-- article.post -->
 
<?php endwhile; ?>
     
	<div class="navigation">
		<div class="prev-post"><?php previous_posts_link('&laquo; Back'); ?></div>
		<div class="next-post"><?php next_posts_link('Next &raquo;'); ?></div>
		<div class="clear"> </div>
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