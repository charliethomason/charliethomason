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
		<nav class="search-nav">
			<span id="search-nav-menu">
				<a href="javascript:void(0)" class="btn secondary-btn cat-btn"><?php if (is_tag()) { echo 'Tags'; } else { echo 'Categories'; } ?></a>
				<ul class="blog-menu<?php if(is_tag()) echo ' tag-menu' ?>">
					<?php if (is_tag()) {
						$tags = get_tags();
						foreach ( $tags as $tag ) {
							echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
						}
					} else { ?>
						<li class="cat-item"><a href="/ideas">Everything</a></li>
						<?php wp_list_categories('orderby=name&title_li=&exclude=1,2,51'); ?>
					<?php } ?>
				</ul>
			</span>
		</nav>
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
				<div class="alignleft"><?php previous_posts_link('&laquo; Back') ?></div>
				<div class="alignright"><?php next_posts_link('Next &raquo;') ?></div>
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