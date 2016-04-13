<?php get_header('head'); ?>
<?php get_header( ); ?>
<!-- danger don't use width with main or page classes -->
<div class="row main-qwe">
<div class="page-qwe col-lg-9 col-md-9 col-sm-12 col-xs-12">
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		// echo '<div class="post-wrapper-qwe">';
echo '<div class="postedby">';

echo '<a class="date-qwe" href="';
the_permalink();
echo '">';
// the_date( get_option( 'date_format', 'F Y'));
the_date( get_option( 'date_format', 'F Y'));
echo '</a>';

echo '<a class="author-qwe" href="';
the_author_link();
echo '">author: ';
the_author();
echo '</a>';
// echo '<a class="category-qwe">';
// the_category_link();
the_category();
// echo '</a>';
echo '</div>';
echo '<!-- END post by class -->';

$logo_qwe=get_template_directory_uri() .'/images/circle.jpg';

echo '<img class="index-qwe" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';

			echo '<h1 class="page-title-qwe"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';
			echo '<hr class="hr-h1"/>';

			// echo '<div class="page-body-qwe">';
			// the_content();
			the_excerpt();
			// echo '</div>';
			// echo '<hr class="hr-h1"/>';

		// echo '</div>';

		echo '</div>';
		echo '<hr class="hr" />';

	}
}
echo '<div class="pagination-qwe">';
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
