<?php get_header('head'); ?>
<?php get_header(); ?>
<!-- danger don't use width with main or page classes -->
<div class="row main-qwe">
<div class="page-qwe col-lg-9 col-md-9 col-sm-12 col-xs-12">
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

		// echo '<div class="post-wrapper-qwe">';

			echo '<h1 class="page-title-qwe"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';

			// echo '<div class="page-body-qwe">';
			the_content();
			// echo '</div>';

		// echo '</div>';

		echo "</div>";
	}
}

?>
</div>
<!-- end col and page-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_footer('script'); ?>
