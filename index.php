<?php get_header('head'); ?>
<?php get_header( ); ?>
<!-- danger don't use width with main or page classes -->
<div class="row main-zxc">
<div class="page-zxc col-lg-9 col-md-9 col-sm-12 col-xs-12">
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		// echo '<div class="post-wrapper-zxc">';
echo '<div class="postedby">';

echo '<a class="date-zxc" href="';
the_permalink();
echo '">';
// the_date( get_option( 'date_format', 'F Y'));
$my_date = the_date('', '', '', FALSE); echo $my_date;

echo '</a>';

echo '<a class="author-zxc" href="';
the_author_link();
echo '">author: ';
the_author();
echo '</a>';
// echo '<a class="category-zxc">';
// the_category_link();
the_category();
// echo '</a>';
echo '</div>';
echo '<!-- END post by class -->';

$logo_zxc=get_template_directory_uri() .'/images/circle.jpg';

echo '<img class="index-zxc" src="';echo get_theme_mod('logo_zxc',$logo_zxc);echo '" alt=""/>';

echo '<div class"wrap-index-zxc" >';
			echo '<h1 class="page-title-zxc"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';
			echo '<hr class="hr-h1"/>';

			// echo '<div class="page-body-zxc">';
			// the_content();
			the_excerpt();
			// echo '</div>';
			// echo '<hr class="hr-h1"/>';

		// echo '</div>';
echo '</div>';
		echo '</div>';
		echo '<hr class="hr" />';

	}
}
echo '<div class="pagination-zxc">';
the_posts_pagination( array(
    'mid_size' => 1,
    'prev_text' => __( 'PREV POSTS', 'textdomain' ),
    'next_text' => __( 'NEXT POSTS', 'textdomain' ),
) );
echo '</div>';

// previous_posts_link( 'PREV POSTS' );next_posts_link( 'NEXT POSTS' );
?>

</div>
<!-- end col and page-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_footer('script'); ?>
