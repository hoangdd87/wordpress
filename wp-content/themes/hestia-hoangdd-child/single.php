<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();
	hestia_output_wrapper_header_start( true ); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<?php single_post_title( '<h1 class="hestia-title">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="<?php echo hestia_layout(); ?>">
	<div class="blog-post blog-post-wrapper">
		<div class="container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'single' );
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</div>
</div>
<?php do_action( 'hestia_blog_related_posts' ); ?>
<div class="footer-wrapper">
	<?php get_footer(); ?>
