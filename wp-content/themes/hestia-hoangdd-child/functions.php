<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 99 );
function child_enqueue_styles() {
	$parent_style = 'parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
}

if ( get_stylesheet() !== get_template() ) {
	add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
		update_option( 'theme_mods_' . get_template(), $value );

		return $old_value; // prevent update to child theme mods
	}, 10, 2 );
	add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
		return get_option( 'theme_mods_' . get_template(), $default );
	} );
}

function my_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

add_filter( 'ninja_forms_i18n_front_end', 'my_custom_ninja_forms_i18n_front_end' );
function my_custom_ninja_forms_i18n_front_end( $strings ) {
	$strings['fieldsMarkedRequired'] = '(Dấu * là thông tin bắt buộc phải điền)';

	return $strings;
}




add_image_size( 'hoangdd-thumb', 750, 500, true );



	