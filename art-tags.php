<?php
/*
Template Name: Art Tag Page
*/
?>
<?php get_header(); ?>
<div class="blog tag-page">

	<h1 class="index-head">Art <span class="fancy-amp">&amp;</span> Photo Gallery Tags</h1>

	<article class="post">

		<div class="entry">
			<h2>Years</h2>
			<ul class="taglist">
				<?php 
				$tags = get_tags();
				foreach ( $tags as $tag ) {
					if (strpos($tag->name,'20') !== false) {
						echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
					}
				}						
				?>
			</ul>
			<h2>Places</h2>
			<ul class="taglist">
				<?php 
				// $tags = get_tags();
				// $placesarr = 
				// foreach ( $tags as $tag ) {
				// 	if (preg_match("/($)/",$tag)) {
				// 		echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
				// 	}
				// }						
				?>
			</ul>
			<div class="clear"></div>
		</div>

	</article>

</div>
<?php get_footer(); ?>