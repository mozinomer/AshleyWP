<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'footerMenu' => __( 'Footer Menu' ),
      'headerMenu' => __( 'header Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }

function create_posttype() {
    register_post_type( 'development',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Development' ),
                'singular_name' => __( 'Developments' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'development'),
            'supports' => array( 'title', 'editor',  'excerpt' )
        )
    );
}
add_action( 'init', 'create_posttype' );
