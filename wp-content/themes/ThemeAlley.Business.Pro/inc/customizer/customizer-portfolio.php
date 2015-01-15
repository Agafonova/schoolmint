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
function themealley_business_customize_register_portfolio( $wp_customize ) {
   $wp_customize->add_section( 'themealley_business_portfolio_page_options' , array(
		'title'      => __('Portfolio Page Content Color Options','themealley_business'),
		'priority'   => 45,
   ) );	
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_title_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_title_color', 
		array(
			'label'      => __( 'Portfolio Page Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 11
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_welcome_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_welcome_text_color', 
		array(
			'label'      => __( 'Portfolio Page Welcome Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 12
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_welcome_text_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_welcome_text_border_color', 
		array(
			'label'      => __( 'Portfolio Page Welcome Text Top/Bottom Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 13
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_image_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_image_bg_color', 
		array(
			'label'      => __( 'Portfolio Page Image BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 14
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_image_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_portfolio_page_image_bg_image',
			   array(
				   'label'          => __( 'Portfolio Page Image BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_portfolio_page_options',
				   'priority'   => 15
			   )
		   )
	);	
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_desc_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_desc_bg_color', 
		array(
			'label'      => __( 'Portfolio Page Description BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 16
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_desc_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_portfolio_page_desc_bg_image',
			   array(
				   'label'          => __( 'Portfolio Page Description BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_portfolio_page_options',
				   'priority'   => 17
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_desc_title_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_desc_title_color', 
		array(
			'label'      => __( 'Portfolio Page Description Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 18
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_desc_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_desc_text_color', 
		array(
			'label'      => __( 'Portfolio Page Description Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 19
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_button_cont_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_button_cont_bg_color', 
		array(
			'label'      => __( 'Portfolio Page Button Container BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 20
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_button_cont_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_portfolio_page_button_cont_bg_image',
			   array(
				   'label'          => __( 'Portfolio Page Button Container BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_portfolio_page_options',
				   'priority'   => 21
			   )
		   )
	);	
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_button_bg_color', 
		array(
			'label'      => __( 'Portfolio Page Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 22
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_button_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_portfolio_page_button_bg_image',
			   array(
				   'label'          => __( 'Portfolio Page Button BG Image', 'themealley_business' ),
				   'section'        => 'themealley_business_portfolio_page_options',
				   'priority'   => 23
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_portfolio_page_button_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_portfolio_page_button_text_color', 
		array(
			'label'      => __( 'Portfolio Page Button Text/Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_portfolio_page_options',
			'priority'   => 24
		) ) 
	);								   
												
}
add_action( 'customize_register', 'themealley_business_customize_register_portfolio' );

