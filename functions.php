<?php 
function my_blog(){
	wp_enqueue_style( 'boothtrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('my_blog',get_stylesheet_uri());
}
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
add_action('wp_enqueue_scripts','my_blog');
add_theme_support( 'post-thumbnails' );
register_nav_menus(array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu',
	) );
	register_sidebar( array(
	'name'          => __( 'category', 'my_blog' ),
	'id'            => 'category', 
	'description'   => '',
    'class'         => '',
	'before_widget' => '<div class="categori">',
	'after_widget'  => '</div>',
	'before_title'  => '<h1 class="widgettitle">',
	'after_title'   => '</h1>' ));

	
	register_sidebar( array(
		'name'          => __( 'Tag', 'my_blog' ),
		'id'            => 'tag',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="categori tag">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widgettitle">',
		'after_title'   => '</h1>',
	) );

register_sidebar( array(
	'name'          => __( 'Author Name', 'my_blog' ),
	'id'            => 'author_post',
	'description'   => '',
	'class'         => 'author_post',
	'before_widget' => '<div class="a_post">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );
register_sidebar( array(
	'name'          => __( 'Fotter Comment', 'my_blog' ),
	'id'            => 'comment',
	'description'   => '',
	'class'         => 'comment',
	'before_widget' => '<div class="comment">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );

// author 
 ?>