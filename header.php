<?php
/**
* The template for displaying the header.
* @package Uno WP
*
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Remove all auto-formatting for telephone numbers -->
	<meta name="format-detection" content="telephone=no" />

	<title><?php if (is_home()) bloginfo('name'); ?> <?php wp_title(); ?></title>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script>window.html5 || document.write('<script src="<?php echo THEME_JS; ?>/libs/html5.js"><\/script>')</script>
	<![endif]-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo THEME_JS; ?>/libs/jquery-1.9.1.min.js"><\/script>')</script>

	<?php wp_head(); ?>

	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo THEME_CSS . "/ie8.css"; ?>" />
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<header>
	<div id="logo"><a href="<?php echo home_url('/'); ?>">sitename</a></div>
</header>
<?php get_template_part('nav'); ?>