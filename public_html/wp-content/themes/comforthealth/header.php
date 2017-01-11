<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
	<script src="https://use.fontawesome.com/3931bddda4.js"></script>
	<link rel="icon" type="image/png" href="<?bloginfo('template_url');?>/fav.png" />
	<?/*
*/?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navigation">
	<div class="container">
		<div class="flexWrap">
			<a href="/"><h1>
				Comforthealth.co.uk
			</h1></a>
			<a href="#menu" id="navicon">Menu <i class="fa fa-bars"></i></a>
			<? wp_nav_menu(array('menu' => '2')); ?>		 
		</div>
	</div>
</nav>
