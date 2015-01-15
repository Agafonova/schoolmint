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
function themealley_business_customize_register_bsix( $wp_customize ) {

// Bsix Starts

	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_welcome_container_bg_color', 
		array(
			'label'      => __( 'Welcome Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 50
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizsix_welcome_container_bg_image',
		array(
				   'label'          => __( 'Welcome Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 51
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_welcome_container_heading_color', 
		array(
			'label'      => __( 'Welcome Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 52
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_welcome_container_text_color', 
		array(
			'label'      => __( 'Welcome Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 53
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_button_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_welcome_container_button_link_color', 
		array(
			'label'      => __( 'Welcome Section Button Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 54
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_welcome_container_button_bg_color', 
		array(
			'label'      => __( 'Welcome Section Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 55
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_button_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizsix_welcome_container_button_bg_image',
		array(
				   'label'          => __( 'Welcome Section Button BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 56
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_welcome_container_button_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_welcome_container_button_border_color', 
		array(
			'label'      => __( 'Welcome Section Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 57
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizsix_product_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_product_heading_color', 
		array(
			'label'      => __( 'Product Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 58
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizsix_product_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_product_text_color', 
		array(
			'label'      => __( 'Product Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 59
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_product_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_product_link_color', 
		array(
			'label'      => __( 'Product Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 60
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_product_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_product_border_color', 
		array(
			'label'      => __( 'Product Bottom Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 61
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizsix_product_button_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_product_button_color', 
		array(
			'label'      => __( 'Product Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 62
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizsix_product_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizsix_product_button_bg_color', 
		array(
			'label'      => __( 'Product Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 63
		) ) 
	);								

// Bsix Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_bsix' );

