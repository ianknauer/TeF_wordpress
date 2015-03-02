<?php

// Source: http://www.wprecipes.com/how-to-use-jquery-1-4-by-default-on-your-wordpress-blog
if(!is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
}

// Adds a hide feature for the author box and related posts
function trottier_hideMeta() {
	if (!is_admin()) {
		// register your script location, dependencies and version
		wp_register_script('hide',
			get_stylesheet_directory_uri() . '/js/hider.js',
			array('jquery') );
   // enqueue the script
   wp_enqueue_script('hide');			
	}
}
add_action('init', 'trottier_hideMeta');

add_image_size( 'home-thumbnail', 650, false ); //300 pixels wide (and unlimited height)

if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' ); } //Adds thumbnails compatibility to the theme
    add_image_size( 'recent-thumbnails', 75, 75, true ); // Sets Recent Posts Thumbnails

if(!is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
}

function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span><em><div id="credit">'.$thumbnail_image[0]->post_excerpt.'</span></em></div>';
  }
}

?>
