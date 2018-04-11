<?php
/**
 * mm-starter enqueue scripts
 *
 * @package mm-starter
 */

 if ( ! function_exists( 'mm_starter_scripts')) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function mm_starter_scripts() {
		// style
		wp_enqueue_style( 'mm-starter-fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,900' );
		wp_enqueue_style( 'mm-starter-style', get_stylesheet_uri() );
		wp_enqueue_style( 'mm-starter-custom-style', get_template_directory_uri() . '/assets/css/styles.css' );

		// scripts
		wp_enqueue_script( 'mm-starter-navigation', get_template_directory_uri() . '/wp_s-base/js/navigation.js', array(), '20151215', true );
		wp_enqueue_script( 'mm-starter-skip-link-focus-fix', get_template_directory_uri() . '/wp_s-base/js/skip-link-focus-fix.js', array(), '20151215', true );
		wp_enqueue_script( 'mm-starter-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'mm_starter_scripts' );