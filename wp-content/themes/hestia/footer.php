<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?>
<?php do_action( 'hestia_do_footer' ); ?>
<div style="padding: 25px">
	<?php echo do_shortcode( '[fbcomments count="off"]' ); ?>
</div>
</div>

</div>

<?php
wp_footer(); ?>
</body>
</html>
