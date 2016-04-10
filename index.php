<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<meta name="viewport" content="width=device-width,initial-scall=1">
<!-- meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' / -->
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset') ?>" >

<!-- link rel="profile" href="http://gmpg.org/xfn/11" / -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<title><?php wp_title(''); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-row.css">

<!-- font -->
<!--link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css' -->

<!-- arabic font link -->
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=jazeera" />

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="container">

<!-- danger don't use width with header or header class -->
<header class="row header-qwe wrap-odd">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

	<div class="nav-qwe wrap-50" >
		<?php wp_nav_menu(array('theme_location'=>'header')); ?>
		<?php dynamic_sidebar('search'); ?>
	</div>
	<!-- end navbar -->

	<!-- Title STaRT-->
	<div class="site-title-qwe wrap-100">
		<p>
		<a href="<?php the_permalink();?>"><?php bloginfo('title' ); ?></a>
		<!--a href="<?php echo get_theme_mod( 'description1-link-qwe', '#' ); ?>"-->
		<!--?php echo get_theme_mod( 'description1-qwe', '- WELCOME -' ); ?--><!--/a-->
		<!--a href="<?php  the_permalink();?>"><?php bloginfo('description' );?></a-->
		<!--a href="#"><button><?php echo get_theme_mod('title-button-qwe','BUTTON' ); ?></button></a-->
		</p>
	</div>
	<!-- Title END -->

	<div class="nav-qwe-pri wrap-50" >
		<?php wp_nav_menu(array('theme_location'=>'header')); ?>
	</div>

</div>
<!-- end col header -->
</header>
<!-- end header and row -->

<!-- danger don't use width with main or page classes -->
<div class="row main-qwe">
<div class="page-qwe col-lg-9 col-md-9 col-sm-9 col-xs-9">
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

<div class="sidebar-qwe col-lg-3 col-md-3 col-sm-3 col-xs-3">
<?php get_sidebar(); ?>
</div>
<!-- end col and sidebar-->

</div>
<!-- end main and row -->


<!-- danger don't use width with footer or footer class -->
<footer class="row footer-qwe">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <a href="http://www.inspireforweb.com/Support">&copy;copyright adam <?php echo date('Y') ?> </a>
   <?php get_footer(); ?>
</div>
<!-- end col footer -->
</footer>
<!-- end footer and row -->

</div>
<!-- end container -->


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script> 
<?php wp_footer(); ?>

</body>
</html>

