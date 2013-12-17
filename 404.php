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
        
 
</div>
 
   
<?php get_footer(); ?>