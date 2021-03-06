<?php
		
	/*
		@package WordPress
		@subpackage hoth-child
	*/
	 
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>> 
    
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Expires" content="30" />
        
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->
    
	<title><?php wp_title('|',true,'right'); ?></title>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="dbS-_oWWruE0E6if-j8OBy0gCAoEvMycgiCWU3nbh7I" />

	<!-- Stylesheets -->
    
	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/style.css">
	
	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/css/styles.css">
	
	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/fancybox/fancybox.css">
	
	<link rel="stylesheet" href= "<?php echo get_stylesheet_directory_uri(); ?>/css/colors.css">
	
	<link rel="stylesheet" href= "<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css">

	<?php wp_head(); ?>   
	     
</head>

<body <?php body_class(); ?>>
    
