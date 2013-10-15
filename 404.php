<?php get_header(); ?>
 
    <div class="blog">
         
        <article class="post">
        <h3>404 error</h3>
		<p class="catdate">&nbsp;</p>
 
 
            <div class="entry">
            <p><strong>The page you're looking for does not exist</strong>. Try using the search form below, <em>or</em> use the <a href="/contact">contact form</a> to let me know something is broken.</p>
            <?php get_search_form(); ?> 
            </div><!-- div.entry -->
 
        </article><!-- article.post -->
         

 
    <div class="navigation">
        <?php posts_nav_link(); ?>
    </div>
 
</div>
 
   
<?php get_footer(); ?>