<?php get_header(); ?>
 
    <div class="blog">

        <div class="nav-wrap">
             <?php get_search_form(); ?> 
            <nav class="search-nav">
                <span id="search-nav-menu">
                    <a href="javascript:void(0)" class="btn secondary-btn cat-btn">Categories</a>
                    <ul class="blog-menu">
                        <li class="cat-item"><a href="/art">Everything</a></li>
                        <li class="cat-item"><a href="/category/art"<?php if (is_category('Paintings & Drawings')) { ?> class="current-cat"<?php } ?>>Paintings <span class="fancy-amp">&amp;</span> Drawings</a></li>
                        <li class="cat-item"><a href="/category/photo"<?php if (is_category('Photography')) { ?> class="current-cat"<?php } ?>>Photography</a></li>
                        <?php wp_list_categories('orderby=name&title_li=&exclude=1,2,51'); ?>
                    </ul>
                </span>
            </nav>
            <div class="clear"></div>
        </div>

        <article class="post">
        <h1>404 error</h1>
		<p class="catdate">&nbsp;</p>
 
 
            <div class="entry">
                <img src="<?php bloginfo('template_directory'); ?>/images/404computer.jpg" alt="404 fun image" class="alignright" />
                <p><strong>You seem to be lost.</strong></p>
                <p>The page you're trying to find either has changed URL or no longer exists.</p>
                <p>Try using the search form above, or select from one of the categories.</p>
                <div class="clear"> </div>
            </div><!-- div.entry -->
 
        </article><!-- article.post -->
         

 
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>
 
</div>
 
   
<?php get_footer(); ?>