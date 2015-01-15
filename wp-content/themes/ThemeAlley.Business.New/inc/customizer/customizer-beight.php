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
function themealley_business_customize_register_beight( $wp_customize ) {

// Beight Starts
	$wp_customize->add_setting(
		'themealley_business_beight_left_container_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_container_bg_color', 
		array(
			'label'      => __( 'Left Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 50
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_left_container_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_beight_left_container_bg_image',
		array(
				   'label'          => __( 'Left Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 51
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_left_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_heading_color', 
		array(
			'label'      => __( 'Left Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 52
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_left_welcome_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_welcome_text_color', 
		array(
			'label'      => __( 'Left Section Welcome Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 53
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_left_title_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_title_color', 
		array(
			'label'      => __( 'Left Section Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 54
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_left_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_text_color', 
		array(
			'label'      => __( 'Left Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 55
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_left_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_link_color', 
		array(
			'label'      => __( 'Left Section Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 56
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_left_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_left_border_color', 
		array(
			'label'      => __( 'Left Section List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 57
		) ) 
	);									
	$wp_customize->add_setting(
		'themealley_business_beight_center_container_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_center_container_bg_color', 
		array(
			'label'      => __( 'Center Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 58
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_center_container_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_beight_center_container_bg_image',
		array(
				   'label'          => __( 'Center Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 59
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_center_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_center_heading_color', 
		array(
			'label'      => __( 'Center Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 60
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_right_container_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_right_container_bg_color', 
		array(
			'label'      => __( 'Right Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 61
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_right_container_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_beight_right_container_bg_image',
		array(
				   'label'          => __( 'Right Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 62
		) )
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_right_container_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_right_container_heading_color', 
		array(
			'label'      => __( 'Right Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 63
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_right_news_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_right_news_heading_color', 
		array(
			'label'      => __( 'Right Section News/Blog Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 64
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_right_container_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_right_container_text_color', 
		array(
			'label'      => __( 'Right Section News/Blog Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 65
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_beight_right_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_right_button_bg_color', 
		array(
			'label'      => __( 'Right Section Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 66
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_beight_right_button_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_beight_right_button_bg_image',
		array(
				   'label'          => __( 'Right Section Button BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 67
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_beight_right_container_button_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_beight_right_container_button_text_color', 
		array(
			'label'      => __( 'Right Section Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 68
		) ) 
	);		
	
// Beight Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_beight' );

