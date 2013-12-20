<?php get_header(); ?>
 
<div class="blog archive-blog<?php if (is_tag()) { ?> blog-gallery<?php } ?>">

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="index-head">Category: <span id="category-title"><?php single_cat_title(); ?></span></h1>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="index-head">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="index-head">Archive for <?php the_time('F jS, Y'); ?>:</h1>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="index-head">Archive for <?php the_time('F, Y'); ?>:</h1>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="index-head">Archive for <?php the_time('Y'); ?>:</h1>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="index-head">Author Archive</h1>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="index-head">Blog Archives</h1>
	<?php } ?>

	<div class="nav-wrap">
		<?php get_search_form(); ?>
		<?php if (is_tag()) { ?>
			<nav class="search-nav" role="navigation">
				<span id="search-nav-menu" role="menubar">
					<a href="/art-tags" class="btn secondary-btn">Tags</a> 
				</span>
			</nav>
		<?php } else { ?>
			<nav class="search-nav" role="navigation">
				<span id="search-nav-menu" role="menubar">
					<a href="#" class="btn secondary-btn cat-btn" aria-haspopup="true" aria-controls="blog-menu" role="menuitem"><?php if (is_tag()) { echo 'Tags'; } else { echo 'Categories'; } ?></a>
					<ul class="blog-menu<?php if(is_tag()) echo ' tag-menu' ?>" role="menu" aria-hidden="true" aria-live="polite" id="blog-menu">
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
		<?php } ?>
		<div class="clear"></div>
	</div>
	
	<?php if (is_tag()) { ?>
		<div id="art-item-wrap">
	<?php } else { ?>
		<div class="blog-posts">
	<?php } ?>
			
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<?php if (is_tag()) { ?>
					<?php	
						$custom = get_post_custom($post->ID);
						$medium = $custom["medium"][0];
						$print = $custom["print"][0];
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
					?>

					<div id="gallery-item-<?php the_ID(); ?>" class="art-item">
						<a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?> </a>
						<div class="info">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php if($medium != "") { ?>
								<p class="catdate"><strong>Medium:</strong> <?=$medium?></p>
							<?php } ?>
							<p><a class="btn" href="<?php the_permalink(); ?>">More Info</a> 
								<a class="btn secondary-btn enlarge-btn" href="<?php echo $thumb_url[0]; ?>">Enlarge</a>
							</p>

						</div>
						<div class="clear"></div>
					</div>					
				<?php } else { ?>

					<article class="post">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p class="catdate"><?php the_time('D, M j, Y'); ?><?php if (!is_tag()) { ?>• <?php the_category(', '); ?><?php } ?></p>
		 
						<div class="entry">

							<?php the_content('Continue Reading...'); ?>

						</div>
		 
					</article>
				<?php } ?>					
		 
			<?php endwhile; ?>

			<div class="sizer">&nbsp;</div>
		</div><!--div#art-item-wrap-->
</div><!--div.blog-->

			<div class="navigation">
				<div class="prev-post"><?php previous_posts_link('&laquo; Back') ?></div>
				<div class="next-post"><?php next_posts_link('Next &raquo;') ?></div>
			</div>

			<?php else : ?>

			<article class="post">
				<div class="entry noposts">
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				</div>
			</article>

		</div><!--div.blog-posts-->
</div><!--div.blog-->
 
			<?php endif; ?>
		
 
   
<?php get_footer(); ?>