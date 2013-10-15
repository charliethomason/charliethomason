<?php
/*
Template Name: Archives
*/

get_header(); ?>

<div class="blog">
	
	<article class="post">
	<?php the_post(); ?>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="entry">
		
			<h4>Archives by Month:</h4>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>

			<h4>Archives by Subject:</h4>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>
		
		
		</div><!-- div.entry -->

    </article><!-- article.post -->

</div>

 
<?php get_footer(); ?>