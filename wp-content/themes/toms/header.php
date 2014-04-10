<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php $rooturl = get_template_directory_uri(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


  <link rel="stylesheet" href="<?php echo $rooturl; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $rooturl; ?>/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?php echo $rooturl; ?>/js/bxslider/jquery.bxslider.css">
  <link href="<?php echo $rooturl; ?>/css/jlocator.min.css" rel="stylesheet" type="text/css" />

  <link rel="shortcut icon"
  href="<?php echo $rooturl; ?>/favicon.ico" />

  <script src="<?php echo $rooturl; ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <script type="text/javascript" src="http://use.typekit.net/jui4enx.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#headernav" data-offset="100">


