<?php
/**
 * Eyepress lite Theme Customizer
 *
 * @package eyepress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


function eyepress_lite_customize_register( $wp_customize ) {

	$wp_customize->remove_control( 'theme_color_control' );


   $wp_customize->add_setting('theme_color', array(
        'default'        => 'theme-purple',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'x_blog_sanitize_theme_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('theme_color', array(
        'label'      => __('Select Theme color', 'eyepress-lite'),
        'section'    => 'x_blog_options',
        'settings'   => 'theme_color',
        'type'       => 'select',
        'choices'    => array(
            'theme-purple' => __('Theme purple', 'eyepress-lite'),
            'theme-black' => __('Theme Black', 'eyepress-lite'),
            'theme-green' => __('Theme Green', 'eyepress-lite'),
            'theme-blue' => __('Theme Blue', 'eyepress-lite'),
            'theme-indigo' => __('Theme Indigo', 'eyepress-lite'),
            'theme-brown' => __('Theme Brown', 'eyepress-lite'),
            'theme-bluegrey' => __('Theme Blue Grey', 'eyepress-lite'),

        ),
    ));


}
add_action( 'customize_register', 'eyepress_lite_customize_register',99 );
