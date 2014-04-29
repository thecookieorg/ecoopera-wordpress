<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		
		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>
		
	
	
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate-custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/css.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reveal.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slideShow.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style_common.css">	

<script src="<?php echo get_template_directory_uri(); ?>/javascript/dc.js" async="" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/jquery-1_002.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/jquery-migrate-1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/reveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/jquery-1.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/menu_jquery.js"></script>
	<script>
			$().ready(function() {
				var $scrollingDiv = $("#scrollingDiv");
		 
				$(window).scroll(function(){			
					$scrollingDiv
						.stop()
						.animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow" );			
				});
			});
		</script>


		<script>
$(function() {

$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
$('#slideshow > div:first')
.fadeOut(4000)
.next()
.fadeIn(4000)
.end()
.appendTo('#slideshow');
},  6000);

});
</script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
		
		
</head>
	
	<body>
	
<div class="navbar navbar-inverse navbar-fixed-top animated fadeInDown">
<div class="navbar-inner">
<div class="container">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>						</a>
<a class="brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/EcoOpera-Logo.png"></a>
<img class="nav-image" id="border-nav-image" src="<?php echo get_template_directory_uri(); ?>/img/nav-bkgd-eco.png">

	<?php tha_header_top();
	wp_nav_menu( array(
	'container'			=>	'nav',
	'container_class'	=>	'subnav clearfix',
	'theme_location'	=>	'header-menu',
	'menu_class'		=>	'nav nav-pills pull-right',
	'depth'				=>	3,
	'fallback_cb'		=>	false,
	'walker'			=>	new The_Bootstrap_Nav_Walker,
	) ); ?>



<!--/.nav-collapse -->	
</div>
</div>
</div>	
	
	
	
<div class="container">		
<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
yoast_breadcrumb( '<nav id="breadcrumb" class="breadcrumb">', '</nav>' );
}
tha_header_bottom(); ?>