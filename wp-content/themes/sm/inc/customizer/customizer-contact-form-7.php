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
function themealley_business_customize_register_contact_form_seven( $wp_customize ) {
   $wp_customize->add_section( 'themealley_business_contact_form_seven' , array(
		'title'      => __('Contact Form 7 Color Options','themealley_business'),
		'priority'   => 46,
   ) );	
	$wp_customize->add_setting(
		'themealley_business_contact_form_seven_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_contact_form_seven_text_color', 
		array(
			'label'      => __( 'Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_contact_form_seven',
			'priority'   => 10
		) ) 
	);   
	$wp_customize->add_setting(
		'themealley_business_contact_form_seven_text_field_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_contact_form_seven_text_field_bg_color', 
		array(
			'label'      => __( 'Field BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_contact_form_seven',
			'priority'   => 11
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_contact_form_seven_text_field_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_contact_form_seven_text_field_border_color', 
		array(
			'label'      => __( 'Field border Color', 'themealley_business' ),
			'section'    => 'themealley_business_contact_form_seven',
			'priority'   => 12
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_contact_form_seven_submit_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_contact_form_seven_submit_button_bg_color', 
		array(
			'label'      => __( 'Submit button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_contact_form_seven',
			'priority'   => 13
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_contact_form_seven_submit_button_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_contact_form_seven_submit_button_text_color', 
		array(
			'label'      => __( 'Submit button text Color', 'themealley_business' ),
			'section'    => 'themealley_business_contact_form_seven',
			'priority'   => 14
		) ) 
	);	
												
}
add_action( 'customize_register', 'themealley_business_customize_register_contact_form_seven' );

