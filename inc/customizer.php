<?php
/**
 * learn2 Theme Customizer
 *
 * @package learn2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function learn2_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'learn2_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'learn2_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'learn2_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function learn2_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function learn2_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function learn2_customize_preview_js() {
	wp_enqueue_script( 'learn2-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'learn2_customize_preview_js' );

/**
 * Footer customizer
 */
function custom_customizer_addition( $wp_customize ) {

	$wp_customize->add_panel(
		'custom_settings',
		array(
			'priority'       => 2,
			'capability'     => 'edit_theme_options',
			'description'    => __( 'Settings', 'learn' ),
			'theme_supports' => '',
			'title'          => __( 'Settings', 'learn' ),
		)
	);

	// footer section
	$wp_customize->add_section(
		'footer_section',
		array(
			'title'    => __( 'Footer', 'learn' ),
			'priority' => 10,
			'panel'    => 'custom_settings',
		)
	);

	/**
	 * Copyright
	 */
	$setting = 'copyright';
	$wp_customize->add_setting(
		$setting,
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '',
		)
	);
	$wp_customize->add_control(
		$setting,
		array(
			'section'  => 'footer_section',
			'label'    => __( 'Copyright text', 'learn' ),
			'type'     => 'text',
		)
	);

}

add_action( 'customize_register', 'custom_customizer_addition' );
