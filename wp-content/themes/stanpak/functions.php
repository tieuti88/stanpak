<?php
pll_register_string('thiet-ke-in-an', 'THIẾT KẾ & IN ẤN - BAO BÌ');
pll_register_string('Works', 'Works');
pll_register_string('Features', 'Features');
pll_register_string('Services', 'Services');
pll_register_string('Clients', 'Clients');
pll_register_string('Blog', 'Blog');
pll_register_string('Contact', 'Contact');
pll_register_string('See more', 'See more');

function stanpak_scripts() {
	// Load our main stylesheet.
	// wp_enqueue_style( 'stanpak-style', get_stylesheet_uri() );

	//bootstrap
	wp_enqueue_style( 'stanpak-default', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');

	//awesome
	wp_enqueue_style( 'stanpak-icons', get_template_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.css');

	//awesome
	wp_enqueue_style( 'stanpak-animate', get_template_directory_uri() . '/css/animate.css');

	//awesome
	wp_enqueue_style( 'stanpak-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');

	//awesome
	wp_enqueue_style( 'stanpak-slide', get_template_directory_uri() . '/vendor/slick/slick.css');
	wp_enqueue_style( 'stanpak-slide-theme', get_template_directory_uri() . '/vendor/slick/slick-theme.css');

	//custome style
	wp_enqueue_style( 'stanpak-style', get_template_directory_uri() . '/css/stanpak.css');

	/* script */
	wp_enqueue_script( 'stanpak-script', get_template_directory_uri() . '/vendor/jquery/jquery.min.js' );

	wp_enqueue_script( 'stanpak-popper', get_template_directory_uri() . '/vendor/popper/popper.min.js', array(  ), '', true );

	wp_enqueue_script( 'stanpak-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(  ), '', true );

	wp_enqueue_script( 'stanpak-wow', get_template_directory_uri() . '/js/wow.min.js', array(  ), '', true );

	wp_enqueue_script( 'stanpak-enllax', get_template_directory_uri() . '/js/jquery.enllax.min.js', array(  ), '', true );

	wp_enqueue_script( 'stanpak-jquery-easeing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'stanpak-slick', get_template_directory_uri() . '/vendor/slick/slick.min.js', array( ), '', true );

	wp_enqueue_script( 'stanpak-default', get_template_directory_uri() . '/js/stanpak.js', array(  ), '', true );

}
add_action( 'wp_enqueue_scripts', 'stanpak_scripts');
add_theme_support( 'post-thumbnails' ); 

function get_projects(){
	$args = array(
		'posts_per_page'   => 6,
		'offset'           => 0,
		'category'         => 1,
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => get_post_thumbnail_id(),
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
	return get_posts( $args );
}


?>