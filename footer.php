<?php
/**
 * The template for displaying the footer
 *
 */
?>
</div> <!-- close the page container -->
<footer class="site-footer">
<div class="wp-block-columns">
  <div class="wp-block-column footer1">
	<?php dynamic_sidebar( 'footer_area_one' ); ?>
  </div>
  <div class="wp-block-column footer2">
	<?php dynamic_sidebar( 'footer_area_two' ); ?>
  </div>
  <div class="wp-block-column footer3">
	<?php dynamic_sidebar( 'footer_area_three' ); ?>
  </div>
</div>
	<p>&nbsp;</p>

	<?php dynamic_sidebar( 'footer_area_four' ); ?>
<a href=/policies target=_blank>Policies & Disclosures</a> | 
	<a href=/contact target=_blank>Contact Us</a> | 
	<a href=/terms-of-use target=_blank>Terms of Use</a> | <a href=/wp-admin>Admin</a>

</footer>
<?php wp_footer(); ?>
</body>
</html>
