<?php
//Create Gallery custom post type
add_action('init', 'create_gallery');
function create_gallery() {
   	$gallery_args = array(
       	'label' => __('Gallery'),
       	'singular_label' => __('Gallery'),
       	'public' => true,
       	'show_ui' => true,
       	'capability_type' => 'post',
       	'hierarchical' => false,
       	'rewrite' => true,
       	'taxonomies' => array('post_tag','category'),
       	'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
       );
   	register_post_type('gallery',$gallery_args);
}
// Fix issue where custom post types don't show up on tag & category archive pages
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('post','gallery'); // replace cpt to your custom post type
    $query->set('post_type',$post_type);
    return $query;
    }
}
?>
<?php
//Create custom input field for Gallery custom post type
add_action("admin_init", "add_gallery");
add_action('save_post', 'update_gallery_custom');
function add_gallery(){
	add_meta_box("gallery_details", "Gallery Options", "gallery_options", "gallery", "side", "low");
}
function gallery_options(){
	global $post;
	$custom = get_post_custom($post->ID);
	$print = $custom["print"][0];
	$location = $custom["location"][0];
	$medium = $custom["medium"][0];
	$camera = $custom["camera"][0];
    $year = $custom["year"][0];
	$iso = $custom["iso"][0];
    $fstop = $custom["fstop"][0];
    $shutter = $custom["shutter"][0];
?>
<div id="gallery-options">
	<p><label>Print URL:</label><input name="print" value="<?php echo $print; ?>" /></p>
	<p><label>Location:</label><input name="location" value="<?php echo $location; ?>" /></p>
	<p><label>Medium:</label><input name="medium" value="<?php echo $medium; ?>" maxlength="80" /></p>
	<p><label>Camera:</label><input name="camera" value="<?php echo $camera; ?>" /></p>
	<p><label>Year:</label><input name="year" value="<?php echo $year; ?>" /></p>
	<p><label>ISO:</label><input name="iso" value="<?php echo $iso; ?>" /></p>
	<p><label>ƒ-Stop:</label><input name="fstop" value="<?php echo $fstop; ?>" /></p>
	<p><label>Shutter:</label><input name="shutter" value="<?php echo $shutter; ?>" /></p>
</div><!--end gallery-options-->   
<?php
}
function update_gallery_custom(){
	global $post;
	update_post_meta($post->ID, "print", $_POST["print"]);
	update_post_meta($post->ID, "location", $_POST["location"]);
	update_post_meta($post->ID, "medium", $_POST["medium"]);
	update_post_meta($post->ID, "camera", $_POST["camera"]);
	update_post_meta($post->ID, "year", $_POST["year"]);
	update_post_meta($post->ID, "iso", $_POST["iso"]);
	update_post_meta($post->ID, "fstop", $_POST["fstop"]);
	update_post_meta($post->ID, "shutter", $_POST["shutter"]);
}
?>
<?php
//Customize Gallery custom post type dashboard columns
add_filter("manage_edit-gallery_columns", "gallery_edit_columns");
add_action("manage_posts_custom_column",  "gallery_columns_display");
 
function gallery_edit_columns($gallery_columns){
	$gallery_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => "Gallery Title",
		"description" => "Description",
		"date" => "Publish status",
	);
	return $gallery_columns;
}
?>