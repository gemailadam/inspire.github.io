<?php get_header('head'); ?>
<?php get_header(); ?>
<!-- danger don't use width with main or page classes -->
<div class="row main-zxc">
<div class="page-zxc col-lg-9 col-md-9 col-sm-9 col-xs-9">
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		// echo '<div class="post-wrapper-zxc">';

			echo '<h1 class="page-title-zxc"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';

			// echo '<div class="page-body-zxc">';
			the_content();
			// echo '</div>';

		// echo '</div>';

		echo "</div>";
	}
}
echo '<div class="prev-next-zxc">';
previous_post_link();
echo '<a></a>';
next_post_link();
echo "</div>";


?>
</div>
<!-- end col and page-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_footer('script'); ?>
