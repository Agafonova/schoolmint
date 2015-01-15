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
function themealley_business_customize_register_footer_quote( $wp_customize ) {

// Footer Quote Container Starts
   $wp_customize->add_section( 'themealley_business_footerquote_options' , array(
		'title'      => __('Footer Quote Section Color Options','themealley_business'),
		'priority'   => 41,
   ) );
	$wp_customize->add_setting(
		'themealley_business_footerquote_container_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerquote_container_color', 
		array(
			'label'      => __( 'Footer Quote Container Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerquote_options',
			'priority'   => 11
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerquote_container_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_footerquote_container_image',
			   array(
				   'label'          => __( 'Footer Quote Container Background Image', 'themealley_business' ),
				   'section'        => 'themealley_business_footerquote_options',
				   'priority'   => 12
			   )
		   )
	);	
	$wp_customize->add_setting(
		'themealley_business_footerquotebg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_footerquotebg_image',
			   array(
				   'label'          => __( 'Quote Image', 'themealley_business' ),
				   'section'        => 'themealley_business_footerquote_options',
				   'priority'   => 13
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_footerquote_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerquote_text_color', 
		array(
			'label'      => __( 'Quote Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerquote_options',
			'priority'   => 14
		) ) 
	);		
	$wp_customize->add_setting(
		'themealley_business_footerquote_clientnametext_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerquote_clientnametext_color', 
		array(
			'label'      => __( 'Client Name Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerquote_options',
			'priority'   => 15
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_footerquote_clientnamebg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerquote_clientnamebg_color', 
		array(
			'label'      => __( 'Client Name Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerquote_options',
			'priority'   => 16
		) ) 
	);	
// Footer Quote Container Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_footer_quote' );