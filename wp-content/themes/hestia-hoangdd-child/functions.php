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

add_action( 'save_post', 'wpds_check_thumbnail' );
add_action( 'admin_notices', 'wpds_thumbnail_error' );
function wpds_check_thumbnail( $post_id ) {
	// change to any custom post type
	if ( get_post_type( $post_id ) != 'post' ) {
		return;
	}
	if ( ! has_post_thumbnail( $post_id ) ) {
		// set a transient to show the users an admin message
		set_transient( "has_post_thumbnail", "no" );
		// unhook this function so it doesn't loop infinitely
		remove_action( 'save_post', 'wpds_check_thumbnail' );
		// update the post set it to draft
		wp_update_post( array( 'ID' => $post_id, 'post_status' => 'draft' ) );
		add_action( 'save_post', 'wpds_check_thumbnail' );
	} else {
		delete_transient( "has_post_thumbnail" );
	}
}

function wpds_thumbnail_error() {
	// check if the transient is set, and display the error message
	if ( get_transient( "has_post_thumbnail" ) == "no" ) {
		echo "<div id='message' class='error'><p><strong>Bạn phải chọn featured image cho mỗi post được đăng.</strong></p></div>";
		delete_transient( "has_post_thumbnail" );
	}
}
add_image_size( 'hoangdd-thumb', 750, 500, true );



	