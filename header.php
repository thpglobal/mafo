<?php
/**
 * The header for the theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton|Source+Sans+Pro">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>
		function thpmobile() {
			document.getElementById('menu-primary').style.display='block';
		}
		function thpsearch() {
			document.getElementById('thp-search').style.display='block';			
		}
	</script>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<header class="site-header">
	<h1 class="site-title"><?php the_custom_header(); bloginfo( 'name' ); ?></h1>

	<nav class="main-navigation">
		<?php wp_nav_menu( array('theme_location' => 'menu-1') ); ?>
	</nav>
	<a id="hamburger" 
			href="javascript:thpmobile();"><span class="dashicons dashicons-menu-alt3"></span>&nbsp;</a>
</header>
		<div id='thp-search' style='text-align:center;display:none;'>
			<?php get_search_form();?>
		</div>

<div id="content" class="site-content">
	
