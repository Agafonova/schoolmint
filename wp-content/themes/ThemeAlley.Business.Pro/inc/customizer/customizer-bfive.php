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
function themealley_business_customize_register_bfive( $wp_customize ) {

// Bfive Starts
	$wp_customize->add_setting(
		'themealley_business_bizfive_welcome_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_welcome_bg_color', 
		array(
			'label'      => __( 'Welcome Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 55
		) ) 
	);
    
	$wp_customize->add_setting(
		'themealley_business_bizfive_welcome_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizfive_welcome_bg_image',
		array(
				   'label'          => __( 'Welcome Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 56
		) )
	); 
	$wp_customize->add_setting(
		'themealley_business_bizfive_welcome_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_welcome_heading_color', 
		array(
			'label'      => __( 'Welcome Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 57
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_welcome_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_welcome_text_color', 
		array(
			'label'      => __( 'Welcome Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 58
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_welcome_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_welcome_link_color', 
		array(
			'label'      => __( 'Welcome Section Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 59
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_welcome_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_welcome_border_color', 
		array(
			'label'      => __( 'Welcome Section List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 60
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_products_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_products_bg_color', 
		array(
			'label'      => __( 'Products/Services Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 61
		) ) 
	);
    
	$wp_customize->add_setting(
		'themealley_business_bizfive_products_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizfive_products_bg_image',
		array(
				   'label'          => __( 'Products/Services Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 62
		) )
	); 
	$wp_customize->add_setting(
		'themealley_business_bizfive_products_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_products_heading_color', 
		array(
			'label'      => __( 'Products/Services Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 63
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_products_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_products_text_color', 
		array(
			'label'      => __( 'Products/Services Section Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 64
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_products_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_products_link_color', 
		array(
			'label'      => __( 'Products/ServicesSection Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 65
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_products_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_products_border_color', 
		array(
			'label'      => __( 'Products/Services Section List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 66
		) ) 
	); 
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_news_bg_color', 
		array(
			'label'      => __( 'News Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 67
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizfive_news_bg_image',
		array(
				   'label'          => __( 'News Section BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 68
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_news_heading_color', 
		array(
			'label'      => __( 'News Section Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 69
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_title_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_news_title_color', 
		array(
			'label'      => __( 'News Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 70
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_news_text_color', 
		array(
			'label'      => __( 'News Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 71
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_button_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_news_button_link_color', 
		array(
			'label'      => __( 'News Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 72
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_news_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_news_button_bg_color', 
		array(
			'label'      => __( 'News Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 73
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_testimonial_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_testimonial_bg_color', 
		array(
			'label'      => __( 'Testimonial BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 74
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_testimonial_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizfive_testimonial_bg_image',
		array(
				   'label'          => __( 'Testimonial Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 75
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_testimonial_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_testimonial_text_color', 
		array(
			'label'      => __( 'Testimonial Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 76
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_bizfive_testimonial_button_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_testimonial_button_link_color', 
		array(
			'label'      => __( 'Testimonial Button Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 77
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_testimonial_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_bizfive_testimonial_button_bg_color', 
		array(
			'label'      => __( 'Testimonial Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'priority'   => 78
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_bizfive_testimonial_button_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_bizfive_testimonial_button_bg_image',
		array(
				   'label'          => __( 'Testimonial Button BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'priority'   => 79
		) )
	);	

// Bfive Ends

}
add_action( 'customize_register', 'themealley_business_customize_register_bfive' );

