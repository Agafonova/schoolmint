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
function themealley_business_customize_register_boneplus( $wp_customize ) {

// Boneplus Starts
	$wp_customize->add_setting(
		'themealley_business_boneplus_welcome_heading'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_welcome_heading', 
		array(
			'label'      => __( 'Welcome Headline Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 32
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_boneplus_welcome_text'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_welcome_text', 
		array(
			'label'      => __( 'Welcome Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 33
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_welcome_link'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_welcome_link', 
		array(
			'label'      => __( 'Welcome Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 34
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_welcome_list_border'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_welcome_list_border', 
		array(
			'label'      => __( 'Welcome List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 35
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_bg_color', 
		array(
			'label'      => __( 'Products/Services Bg Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 36
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_boneplus_products_bg_image',
		array(
				   'label'          => __( 'Products/Services Bg Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 37
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_image_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_image_bg_color', 
		array(
			'label'      => __( 'Products/Services Image Bg Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 38
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_image_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_boneplus_products_image_bg_image',
		array(
				   'label'          => __( 'Products/Services Image Bg Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 39
		) )
	);		
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_heading_color', 
		array(
			'label'      => __( 'Products/Services Name Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 40
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_text_color', 
		array(
			'label'      => __( 'Products/Services Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 41
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_link_color', 
		array(
			'label'      => __( 'Products/Services Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 42
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_border_color', 
		array(
			'label'      => __( 'Products/Services Item Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 43
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_cta_container_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_cta_container_bg_color', 
		array(
			'label'      => __( 'Products/Services CTA Container Bg Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 44
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_cta_container_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_boneplus_products_cta_container_bg_image',
		array(
				   'label'          => __( 'Products/Services CTA Container Bg Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 45
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_cta_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_cta_bg_color', 
		array(
			'label'      => __( 'Products/Services CTA Bg Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 46
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_cta_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_boneplus_products_cta_bg_image',
		array(
				   'label'          => __( 'Products/Services CTA Bg Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 47
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_products_cta_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_products_cta_color', 
		array(
			'label'      => __( 'Products/Services CTA Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 48
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_quote_bg_color', 
		array(
			'label'      => __( 'Quote Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_boneplus_quote_bg_color',
			'priority'   => 49
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_boneplus_quote_bg_image',
			   array(
				   'label'          => __( 'Quote Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_boneplus_quote_bg_image',
				   'priority'   => 50
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_border'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_quote_border', 
		array(
			'label'      => __( 'Quote Section Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_boneplus_quote_border',
			'priority'   => 51
		) ) 
	);		
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_quote_text_color', 
		array(
			'label'      => __( 'Quote Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_boneplus_quote_text_color',
			'priority'   => 52
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_text_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_boneplus_quote_text_bg_image',
		array(
				   'label'          => __( 'Quote Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_boneplus_quote_text_bg_image',
				   'priority'   => 53
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_name_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_quote_name_text_color', 
		array(
			'label'      => __( 'Client Name Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_boneplus_quote_name_text_color',
			'priority'   => 54
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_boneplus_quote_name_bg'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_boneplus_quote_name_bg', 
		array(
			'label'      => __( 'Client Name BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_boneplus_quote_name_bg',
			'priority'   => 55
		) ) 
	);	

// Boneplus Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_boneplus' );

