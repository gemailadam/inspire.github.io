<?php
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



?>