<?php
/**
 * themealley_business Theme Customizer
 *
 * @package themealley_business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themealley_business_customize_register_bseven( $wp_customize ) {

// Bseven Starts

	$wp_customize->add_setting(
		'themealley_business_bizseven_product_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizseven_product_heading_color', 
		array(
			'label'      => __( 'Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 58
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizseven_product_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizseven_product_text_color', 
		array(
			'label'      => __( 'Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 59
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizseven_product_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizseven_product_link_color', 
		array(
			'label'      => __( 'Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 60
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizseven_product_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizseven_product_border_color', 
		array(
			'label'      => __( 'Bottom Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 61
		) ) 
	);							

// Bseven Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_bseven' );

