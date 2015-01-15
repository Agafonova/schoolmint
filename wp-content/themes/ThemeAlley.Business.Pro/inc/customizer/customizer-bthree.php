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
function themealley_business_customize_register_bthree( $wp_customize ) {

// Bsix Starts
	$wp_customize->add_setting(
		'themealley_business_bthree_welcome_heading'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_welcome_heading', 
		array(
			'label'      => __( 'Welcome Headline Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 32
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_welcome_text'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_welcome_text', 
		array(
			'label'      => __( 'Welcome Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 33
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_welcome_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_welcome_link_color', 
		array(
			'label'      => __( 'Welcome Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 34
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_welcome_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_welcome_border_color', 
		array(
			'label'      => __( 'Welcome List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 35
		) ) 
	);
	
	$wp_customize->add_setting(
		'themealley_business_bthree_products_heading'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_products_heading', 
		array(
			'label'      => __( 'Products/Services Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 36
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_products_text'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_products_text', 
		array(
			'label'      => __( 'Products/Services Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 37
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_products_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_products_link_color', 
		array(
			'label'      => __( 'Products/Services Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 38
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_products_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_products_border_color', 
		array(
			'label'      => __( 'Products/Services List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 39
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_quote_bg_color', 
		array(
			'label'      => __( 'Quote Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bthree_quote_bg_color',
			'priority'   => 40
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_bthree_quote_bg_image',
			   array(
				   'label'          => __( 'Quote Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_bthree_quote_bg_image',
				   'priority'   => 41
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_border'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_quote_border', 
		array(
			'label'      => __( 'Quote Section Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bthree_quote_border',
			'priority'   => 42
		) ) 
	);		
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_quote_text_color', 
		array(
			'label'      => __( 'Quote Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bthree_quote_text_color',
			'priority'   => 43
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_text_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bthree_quote_text_bg_image',
		array(
				   'label'          => __( 'Quote Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_bthree_quote_text_bg_image',
				   'priority'   => 44
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_name_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_quote_name_text_color', 
		array(
			'label'      => __( 'Client Name Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bthree_quote_name_text_color',
			'priority'   => 45
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bthree_quote_name_bg'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bthree_quote_name_bg', 
		array(
			'label'      => __( 'Client Name BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bthree_quote_name_bg',
			'priority'   => 46
		) ) 
	);

// Bsix Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_bthree' );

