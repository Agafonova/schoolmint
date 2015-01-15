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
function themealley_business_customize_register_post( $wp_customize ) {
   $wp_customize->add_section( 'themealley_business_post_page_options' , array(
		'title'      => __('Post/Page Content Color Options','themealley_business'),
		'priority'   => 34,
   ) );	
	$wp_customize->add_setting(
		'themealley_business_post_page_title_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_title_color', 
		array(
			'label'      => __( 'Post/Page Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 23
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_content_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_content_color', 
		array(
			'label'      => __( 'Post/Page Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 24
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_link_color', 
		array(
			'label'      => __( 'Post/Page Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 25
		) ) 
	);		
	$wp_customize->add_setting(
		'themealley_business_post_page_accent_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_accent_color', 
		array(
			'label'      => __( 'Accent Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 50
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_bg_color', 
		array(
			'label'      => __( 'Comment Reply Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 51
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_text_color', 
		array(
			'label'      => __( 'Comment Reply Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 52
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_form_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_form_bg_color', 
		array(
			'label'      => __( 'Comment Form Bg Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 53
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_form_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_form_text_color', 
		array(
			'label'      => __( 'Comment Form Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 54
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_form_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_form_border_color', 
		array(
			'label'      => __( 'Comment Form Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 55
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_form_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_form_button_bg_color', 
		array(
			'label'      => __( 'Comment Form Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 56
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_comment_button_form_button_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_comment_button_form_button_text_color', 
		array(
			'label'      => __( 'Comment Form Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 57
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_bg_color', 
		array(
			'label'      => __( 'Widget BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 58
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_post_page_widget_bg_image',
		array(
			'label'          => __( 'Widget BG Image', 'themealley_business' ),
			'section'        => 'themealley_business_post_page_options',
			'priority'   => 59
		) )
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_title_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_title_color', 
		array(
			'label'      => __( 'Widget Title Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 60
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_text_color', 
		array(
			'label'      => __( 'Widget Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 61
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_link_color', 
		array(
			'label'      => __( 'Widget Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 62
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_list_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_list_border_color', 
		array(
			'label'      => __( 'Widget List Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 63
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_search_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_search_text_color', 
		array(
			'label'      => __( 'Widget Search/select Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 64
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_search_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_search_bg_color', 
		array(
			'label'      => __( 'Widget Search/Select BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 65
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_search_button_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_search_button_text_color', 
		array(
			'label'      => __( 'Widget Search Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 66
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_post_page_widget_search_button_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_post_page_widget_search_button_bg_color', 
		array(
			'label'      => __( 'Widget Search Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_post_page_options',
			'priority'   => 67
		) ) 
	);												
}
add_action( 'customize_register', 'themealley_business_customize_register_post' );

