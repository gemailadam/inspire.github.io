<?php

/***************************************************/
/* squares shortcode callback function    START    */
/***************************************************/

// function squares_callback_shortcode_qwe($atts)
function squares_callback_shortcode_qwe($atts)
{
      // $count=array('count'=>'2');
       $atts= shortcode_atts(
       array(
            'i'=>1,
         ), $atts
      );
   return '<div class="gray-square-'.$atts['i'].'-qwe">';

}

function register_squares_shortcode()
{
   // add_shortcode( $tag, $func );
   add_shortcode( 'squares', 'squares_callback_shortcode_qwe');
}

add_action('init','register_squares_shortcode');


/****************************************************/
/* squares shortcode callback function    END       */
/****************************************************/



/****************************************************/
/* squareeeeee shortcode callback function    START */
/****************************************************/

// function squares_callback_shortcode_qwe($atts)
function squaree_callback_shortcode_qwe()
{
   return '</div>';

}

function register_squaree_shortcode()
{
   // add_shortcode( $tag, $func );
   add_shortcode( 'squaree', 'squaree_callback_shortcode_qwe');
}

add_action('init','register_squaree_shortcode');


/****************************************************/
/* squareeeeee shortcode callback function    END   */
/****************************************************/



?>