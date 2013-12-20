<?php
/*
Template Name: Art Tag Page
*/
?>
<?php get_header(); ?>
<div class="blog tag-page">

	<h1 class="index-head">Art <span class="fancy-amp">&amp;</span> Photo Gallery Tags</h1>

	<p><a href="/art" class="btn secondary-btn">&laquo; Return to Main Gallery</a></p>

	<article class="post">

		<div class="entry" id="art-tags">

			<section class="tags">
				<h2>Photo</h2>
				<ul class="taglist">
					<?php 
					$tags = get_tags();
					$photoarr = array('Books','graphy','HDR','Long Exposures');
					$photos = implode("|",$photoarr);
					foreach ($tags as $tag) {
						if (preg_match("/($photos)/",$tag->name)) {
							echo '<li><a class="btn tag-btn" href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
						}
					}						
					?>
				</ul>
			</section>

			<section class="tags">
				<h2>Art</h2>
				<ul class="taglist">
					<?php 
					$tags = get_tags();
					$artarr = array('Drawings','Paintings');
					$arts = implode("|",$artarr);
					foreach ($tags as $tag) {
						if (preg_match("/($arts)/",$tag->name)) {
							echo '<li><a class="btn tag-btn" href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
						}
					}						
					?>
				</ul>
			</section>

			<section class="tags">
				<h2>Years</h2>
				<ul class="taglist">
					<?php 
					$tags = get_tags();
					foreach ( $tags as $tag ) {
						if (strpos($tag->name,'20') !== false || strpos($tag->name,'Undergraduate') !== false) {
							echo '<li><a class="btn tag-btn" href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
						}
					}						
					?>
				</ul>
			</section>

			<section class="tags">
				<h2>Places</h2>
				<ul class="taglist">
					<?php 
					$tags = get_tags();
					$placesarr = array('Chicago','Europe','UK','Navajo');
					$places = implode("|",$placesarr);
					foreach ($tags as $tag) {
						if (preg_match("/($places)/",$tag->name)) {
							echo '<li><a class="btn tag-btn" href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
						}
					}						
					?>
				</ul>
			</section>


			<section class="tags">
				<h2>Subjects</h2>
				<ul class="taglist">
					<?php 
					$tags = get_tags();
					$subjectarr = array('Birds','scapes','Film','Portraits','graphy','Open Range','Weird Stuff');
					$subjects = implode("|",$subjectarr);
					foreach ($tags as $tag) {
						if (preg_match("/($subjects)/",$tag->name)) {
							echo '<li><a class="btn tag-btn" href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name.'</a></li>';
						}
					}						
					?>
				</ul>
			</section>

			<div class="sizer">&nbsp;</div>

			<div class="clear"></div>
		</div>

	</article>

</div>
<?php get_footer(); ?>