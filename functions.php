<?php
require_once ('inc/shortcode.php');



/* max size for content like images and videos */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/* register widgets for search*/

/////////////////////////////////////////////
///////////// sidebare 1 ////////////////////
/////////////////////////////////////////////

function register_search_qwe() {
$args = array('name' =>'search',
	'id'=>'search' ,
	'description'=> 'add search',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_search_qwe');

function register_sidebar_qwe() {
$args = array('name' =>'sidebar',
	'id'=>'sidebar' ,
	'description'=> 'add sidebar widgets',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_sidebar_qwe');

function register_footer_qwe() {
$args = array('name' =>'footer',
	'id'=>'footer' ,
	'description'=> 'add footers links widget',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar($args);

}

add_action('widgets_init','register_footer_qwe');

function new_excerpt_more_qwe( $more ) {
	return ' <div><a class="read-more" href="'.
	get_permalink( get_the_ID() ) . '">' . __(' Continue Reading ', 'your-text-domain') . '</a></div>';
}
add_filter( 'excerpt_more', 'new_excerpt_more_qwe' );


?>