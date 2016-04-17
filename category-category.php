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

<!--link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> "-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-inspire.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-row.css">

<!-- font -->
<!--link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css' -->

<!-- arabic font link -->
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=jazeera" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,500,700,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300|Anton|Russo+One|Limelight' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300|Anton|Russo+One|Abril+Fatface' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Anton|Russo+One|Kaushan+Script|Fredericka+the+Great' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

</head>

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

			echo '<h1 class="page-title-zxc"><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';
			echo '<hr class="hr-h1"/>';

			// echo '<div class="page-body-zxc">';
			// the_content();
			the_excerpt();
			// echo '</div>';
			// echo '<hr class="hr-h1"/>';

		// echo '</div>';

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
<div class="sidebar-zxc col-lg-3 col-md-3 col-sm-9 col-xs-9">
<?php dynamic_sidebar('sidebar-inspire'); ?>
</div>
<!-- end col and sidebar-->

</div>
<!-- end main and row -->

<!-- danger don't use width with footer or footer class -->
<footer class="row footer-zxc">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="footer1">
   <?php  dynamic_sidebar('footer' ); ?>
   </div>
   <div class="copyright">
   <a href="http://www.inspireforweb.com/Support">&copy;copyright adam <?php echo date('Y') ?> </a>
	</div>
</div>
<!-- end col footer -->
</footer>
<!-- end footer and row -->

</div>
<!-- end container -->


<!--script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-lettering.js"></script--> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script> 

<?php wp_footer(); ?>

</body>
</html>
