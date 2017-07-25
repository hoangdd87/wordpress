<?php
/**
 * Template Name: Hoangdd-front-page
 *
 * The template for the page builder blank.
 *
 * @package Hestia
 * @since Hestia 1.1.24
 * @author Themeisle
 */ ?>

<?php

get_header();


if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'pagebuilder' );
	endwhile;
endif;

get_footer();


