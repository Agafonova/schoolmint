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
function themealley_business_customize_register_bnine( $wp_customize ) {

// Bnine Starts
	$wp_customize->add_setting(
		'themealley_business_bnine_products_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_products_bg_color', 
		array(
			'label'      => __( 'Products/Services Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 66
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_products_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bnine_products_bg_image',
		array(
				   'label'          => __( 'Products/Services Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 67
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_products_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_products_heading_color', 
		array(
			'label'      => __( 'Products/Services Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 68
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bnine_products_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_products_text_color', 
		array(
			'label'      => __( 'Products/Services Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 69
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_products_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_products_link_color', 
		array(
			'label'      => __( 'Products/Services Section Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 70
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_quote_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_quote_bg_color', 
		array(
			'label'      => __( 'Testimonial Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 72
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_quote_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bnine_quote_bg_image',
		array(
			'label'          => __( 'Testimonial Section BG Image', 'themealley_business' ),
			'section'        => 'themealley_business_maincontent_options',
			'priority'   => 73
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_quote_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_quote_text_color', 
		array(
			'label'      => __( 'Testimonial Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 74
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_quote_name_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_quote_name_bg_color', 
		array(
			'label'      => __( 'Testimonial Section Client Name BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 75
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_quote_name_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bnine_quote_name_bg_image',
		array(
			'label'          => __( 'Testimonial Section Client Name BG Image', 'themealley_business' ),
			'section'        => 'themealley_business_maincontent_options',
			'priority'   => 76
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_bnine_quote_name_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_quote_name_text_color', 
		array(
			'label'      => __( 'Testimonial Section Client Name Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 77
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bnine_about_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_about_bg_color', 
		array(
			'label'      => __( 'About Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 78
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_about_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bnine_about_bg_image',
		array(
				   'label'          => __( 'About Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 79
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_about_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_about_heading_color', 
		array(
			'label'      => __( 'About Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 80
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bnine_about_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_about_text_color', 
		array(
			'label'      => __( 'About Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 81
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_about_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_about_link_color', 
		array(
			'label'      => __( 'About Section Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 82
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_about_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_about_border_color', 
		array(
			'label'      => __( 'About Section border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 83
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_logos_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bnine_logos_bg_color', 
		array(
			'label'      => __( 'Client Logo Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 84
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bnine_logos_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bnine_logos_bg_image',
		array(
				   'label'          => __( 'Client Logo Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 85
		) )
	);								
	
// Bnine Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_bnine' );

