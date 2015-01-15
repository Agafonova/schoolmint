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
function themealley_business_customize_register_bone( $wp_customize ) {

// Bone Starts
	$wp_customize->add_setting(
		'themealley_business_bone_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_heading_color', 
		array(
			'label'      => __( 'Welcome Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_heading_color',
			'priority'   => 12
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_text_color', 
		array(
			'label'      => __( 'Welcome Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_text_color',
			'priority'   => 13
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bone_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_link_color', 
		array(
			'label'      => __( 'Welcome Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_link_color',
			'priority'   => 14
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_border_color', 
		array(
			'label'      => __( 'Welcome List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_border_color',
			'priority'   => 15
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bone_products_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_products_heading_color', 
		array(
			'label'      => __( 'Products/Services Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_products_heading_color',
			'priority'   => 16
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_products_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_products_text_color', 
		array(
			'label'      => __( 'Products/Services Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_products_text_color',
			'priority'   => 17
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_products_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_products_link_color', 
		array(
			'label'      => __( 'Products/Services Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_products_link_color',
			'priority'   => 18
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_products_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_products_border_color', 
		array(
			'label'      => __( 'Products/Services List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_products_border_color',
			'priority'   => 19
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bone_quote_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_quote_bg_color', 
		array(
			'label'      => __( 'Quote Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_quote_bg_color',
			'priority'   => 20
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_quote_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_bone_quote_bg_image',
			   array(
				   'label'          => __( 'Quote Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_bone_quote_bg_image',
				   'priority'   => 21
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_bone_quote_border'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_quote_border', 
		array(
			'label'      => __( 'Quote Section Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_quote_border',
			'priority'   => 22
		) ) 
	);		
	$wp_customize->add_setting(
		'themealley_business_bone_quote_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_quote_text_color', 
		array(
			'label'      => __( 'Quote Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_quote_text_color',
			'priority'   => 23
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bone_quote_text_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_bone_quote_text_bg_image',
			   array(
				   'label'          => __( 'Quote Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_bone_quote_text_bg_image',
				   'priority'   => 24
			   )
		   )
	);	
	$wp_customize->add_setting(
		'themealley_business_bone_quote_name_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_quote_name_text_color', 
		array(
			'label'      => __( 'Client Name Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_quote_name_text_color',
			'priority'   => 25
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bone_quote_name_bg'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bone_quote_name_bg', 
		array(
			'label'      => __( 'Client Name BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_bone_quote_name_bg',
			'priority'   => 26
		) ) 
	);
				

// Bone Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_bone' );

