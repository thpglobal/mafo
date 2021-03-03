<?php
/**
 * Template part for displaying pages
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<header class="entry-header">
	<?php if ( has_post_thumbnail() ) { 
			$thpurl=get_the_post_thumbnail_url();
			echo("<img src='$thpurl' width=100% height=auto>");
		} ?>
		<h1><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
