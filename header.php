
<body <?php body_class(); ?>>
<div class="container">

<!-- danger don't use width with header or header class -->
<header class="row header-zxc wrap-odd">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<div class="nav-zxc nav-common-zxc wrap-50">
		<?php wp_nav_menu(array('theme_location'=>'header')); ?>
		<?php dynamic_sidebar('search'); ?>
	</div>
	<!-- end navbar -->

	<!-- Title STaRT-->
	<div class="site-title-zxc wrap-100">
		<p>
		<a href="<?php the_permalink();?>"><?php bloginfo('title' ); ?></a>
		<!--a href="<?php echo get_theme_mod( 'description1-link-zxc', '#' ); ?>"-->
		<!--?php echo get_theme_mod( 'description1-zxc', '- WELCOME -' ); ?--><!--/a-->
		<!--a href="<?php  the_permalink();?>"><?php bloginfo('description' );?></a-->
		<!--a href="#"><button><?php echo get_theme_mod('title-button-zxc','BUTTON' ); ?></button></a-->
		</p>
	</div>
	<!-- Title END -->

	<div class="nav-primary-zxc nav-common-zxc wrap-50 margin-zxc">
		<?php wp_nav_menu(array('theme_location'=>'header')); ?>
	</div>

	<div class="slideshow-zxc margin-zxc col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="slideshow-big-zxc" style="width:70.83333333333333%;float:left;margin-left:4.16666666666667%;">
	<?php
	$logo_zxc2=get_template_directory_uri() .'/images/slice.jpg';
		// <img src="wp-content/themes/inspire.github.io/images/slice.jpg" alt="">
	echo '<img class="slice-zxc" src="';echo get_theme_mod('logo_zxc',$logo_zxc2);echo '" alt=""/>';
	?>
	</div>
	<div class="slideshow-small-zxc" style="width:20.83333333333333%;float:left;margin-right:4.16666666666667%;">
	<?php
	$logo_zxc=get_template_directory_uri() .'/images/slice250.jpg';
	$logo_zxc3=get_template_directory_uri() .'/images/circle.jpg';

	echo '<img class="slice-zxc" src="';echo get_theme_mod('logo_zxc',$logo_zxc);echo '" alt=""/>';
	echo '<img class="slice-zxc" src="';echo get_theme_mod('logo_zxc',$logo_zxc);echo '" alt=""/>';
	echo '<img class="slice-zxc" src="';echo get_theme_mod('logo_zxc',$logo_zxc);echo '" alt=""/>';
	?>
		<!-- <img src="wp-content/themes/inspire.github.io/images/slice250.jpg" alt="" > -->
		<!-- <img src="wp-content/themes/inspire.github.io/images/slice250.jpg" alt=""> -->
		<!-- <img src="wp-content/themes/inspire.github.io/images/slice250.jpg" alt=""> -->

	</div>
	<div class="heshamhussain">

<h2>Hesham </h2><h2>Hussain</h2>
	<?php
	$swan_zxc=get_template_directory_uri() .'/images/swan.png';
	echo '<img class="slice-zxc" src="';echo get_theme_mod('logo_zxc',$swan_zxc);echo '" alt=""/>';
	?>
<p>keep up to date - With the latest web development</p>
	<p> design & information technology new x new (s)
</p>
	</div>
	</div>

</div>
<!-- end col header -->
</header>
<!-- end header and row -->
