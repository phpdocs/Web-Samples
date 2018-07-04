<?php
add_theme_support( 'menus' );


function custometheme_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ithemer' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'ithemer' ),
		'id'            => 'footer1',
		'description'   => esc_html__( 'Add widgets here.', 'ithemer' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'custometheme_widgets_init' );


?>