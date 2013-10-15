<?php
//Create Web Dev custom post type
add_action('init', 'create_webdev');
function create_webdev() {
   	$webdev_args = array(
       	'label' => __('Web Dev'),
       	'singular_label' => __('Web Dev'),
       	'public' => true,
       	'show_ui' => true,
       	'capability_type' => 'post',
       	'hierarchical' => false,
       	'rewrite' => true,
       	'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'post-formats')
       );
   	register_post_type('webdev',$webdev_args);
}
?>
<?php
//Create custom input field for Web Dev custom post type
add_action("admin_init", "add_webdev");
add_action('save_post', 'update_webdev_custom');
function add_webdev(){
	add_meta_box("webdev_details", "Web Dev Options", "webdev_options", "webdev", "side", "low");
}
function webdev_options(){
	global $post;
	$custom = get_post_custom($post->ID);
	$link = $custom["link"][0];
	$tech = $custom["tech"][0];
	$mydate = $custom["mydate"][0];
	$myrole = $custom["myrole"][0];
?>
<div id="webdev-options">
	<label style="display:block">URL:</label><input style="width:90%" name="link" value="<?php echo $link; ?>" /><br /><br />
	<label style="display:block">Software:</label><input style="width:90%" name="tech" value="<?php echo $tech; ?>" /><br /><br />
	<label style="display:block">Time involved:</label><input style="width:90%" name="mydate" value="<?php echo $mydate; ?>" /><br /><br />
	<label style="display:block">Responsibilities:</label><textarea style="width:95%" name="myrole"><?php echo $myrole; ?></textarea>
</div><!--end webdev-options-->   
<?php
}
function update_webdev_custom(){
	global $post;
	update_post_meta($post->ID, "link", $_POST["link"]);
	update_post_meta($post->ID, "tech", $_POST["tech"]);
	update_post_meta($post->ID, "mydate", $_POST["mydate"]);
	update_post_meta($post->ID, "myrole", $_POST["myrole"]);
}
?>
<?php
//Customize Web Dev custom post type dashboard columns
add_filter("manage_edit-webdev_columns", "webdev_edit_columns");
add_action("manage_posts_custom_column",  "webdev_columns_display");
 
function webdev_edit_columns($webdev_columns){
	$webdev_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => "Web Dev Title",
		"description" => "Description",
		"date" => "Publish status",
	);
	return $webdev_columns;
}
 
function webdev_columns_display($webdev_columns){
	switch ($webdev_columns)
	{
		case "description":
			the_excerpt();
			break;				
	}
}
?>