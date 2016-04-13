
<body <?php body_class(); ?>>
<div class="container">

<!-- danger don't use width with header or header class -->
<header class="row header-qwe wrap-odd">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="nav-qwe nav-common-qwe wrap-50">
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

	<div class="nav-primary-qwe nav-common-qwe wrap-50 margin-qwe">
		<?php wp_nav_menu(array('theme_location'=>'header')); ?>
	</div>

	<div class="slideshow-qwe margin-qwe col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="slideshow-big-qwe" style="width:70.83333333333333%;float:left;margin-left:4.16666666666667%;">
	<?php 
	$logo_qwe2=get_template_directory_uri() .'/images/slice.jpg';
		// <img src="wp-content/themes/inspire.github.io/images/slice.jpg" alt="">
	echo '<img class="slice-qwe" src="';echo get_theme_mod('logo_qwe',$logo_qwe2);echo '" alt=""/>';
	?>
	</div>
	<div class="slideshow-small-qwe" style="width:20.83333333333333%;float:left;margin-right:4.16666666666667%;">
	<?php
	$logo_qwe=get_template_directory_uri() .'/images/slice250.jpg';
	$logo_qwe3=get_template_directory_uri() .'/images/circle.jpg';

	echo '<img class="slice-qwe" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';
	echo '<img class="slice-qwe" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';
	echo '<img class="slice-qwe" src="';echo get_theme_mod('logo_qwe',$logo_qwe);echo '" alt=""/>';
	?>
		<!-- <img src="wp-content/themes/inspire.github.io/images/slice250.jpg" alt="" > -->
		<!-- <img src="wp-content/themes/inspire.github.io/images/slice250.jpg" alt=""> -->
		<!-- <img src="wp-content/themes/inspire.github.io/images/slice250.jpg" alt=""> -->

	</div>
	</div>

</div>
<!-- end col header -->
</header>
<!-- end header and row -->
