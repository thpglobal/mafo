<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
		<h4><?php the_date(); ?></h4>
		
	</header>

	<div class="entry-content wp-block-columns">
	  <div class="wp-block-column" style="flex-basis:70%">
		  <?php if ( has_post_thumbnail() ) { 
			$thpurl=get_the_post_thumbnail_url();
			echo("<img src='$thpurl' width=100% height=auto>");
		} 
		  the_content(); ?>
		</div>
	  <div class="wp-block-column" style="flex-basis:30%">
		  <?php dynamic_sidebar( 'sidebar-1' );?>
	</div>
</article>
