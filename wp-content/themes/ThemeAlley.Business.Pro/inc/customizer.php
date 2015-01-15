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
function themealley_business_customize_register( $wp_customize ) {

	global $themealley_business_google_fonts;
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

/**
* Base Font Options starts here
*/
/* Sections Here */
   $wp_customize->add_section( 'themealley_business_base_font_options' , array(
		'title'      => __('General Options','themealley_business'),
		'priority'   => 29,
   ) );
/* Settings and Controls Here */
	$wp_customize->add_setting(
			'themealley_business_body_color'
	);		
	$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_body_color', 
			array(
				'label'      => __( 'Body Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_base_font_options',
				'priority'   => 9,
	) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_body_font_family', array(
        'default'        => 'Select a Font',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'themealley_business_body_font_family', array(
        'label'   => 'Base Body Text Font Family:',
        'section' => 'themealley_business_base_font_options',
        'type'    => 'select',
		'priority'   => 10,
        'choices' => $themealley_business_google_fonts,
    ));	
	$wp_customize->add_setting(
		'themealley_business_heading_font_family', array(
        'default'        => 'Select a Font',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'themealley_business_heading_font_family', array(
        'label'   => 'Base Heading Font Family:',
        'section' => 'themealley_business_base_font_options',
        'type'    => 'select',
		'priority'   => 12,
        'choices' => $themealley_business_google_fonts,
    ));		
	
/**
* Logo Section Color Options starts here
*/
/* Sections Here */
   $wp_customize->add_section( 'themealley_business_logo_section_options' , array(
		'title'      => __('Logo Section Color Options','themealley_business'),
		'priority'   => 30,
   ) );	
if( of_get_option('skin_style') != 'venom' && of_get_option('skin_style') != 'radiant' && of_get_option('skin_style') != 'bizantine' ){    
/* Settings and Controls Here */   
	$wp_customize->add_setting(
		'themealley_business_logocontainer_color'
    );
	$wp_customize->add_setting(
		'themealley_business_logocontainer_bg'
    );	
	$wp_customize->add_setting(
		'themealley_business_logocontainer_background_repeat'
    );
	$wp_customize->add_setting(
		'themealley_business_logocontainer_background_x'
    );
	$wp_customize->add_setting(
		'themealley_business_logocontainer_background_y'
    );		

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_logocontainer_color', 
		array(
			'label'      => __( 'Logo Section Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_logo_section_options',
			'settings'   => 'themealley_business_logocontainer_color',
			'priority'   => 10
		) ) 
	);	

	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_logocontainer_bg',
			   array(
				   'label'          => __( 'Upload a image as background image', 'themealley_business' ),
				   'section'        => 'themealley_business_logo_section_options',
				   'settings'       => 'themealley_business_logocontainer_bg',
				   'priority'   => 11
			   )
		   )
	);
	
    $wp_customize->add_control( 'themealley_business_logocontainer_background_repeat', array(
            'label'      => __( 'Background Repeat' ),
            'section'    => 'themealley_business_logo_section_options',
            'type'       => 'radio',
			'priority'   => 12,
            'choices'    => array(
                'no-repeat'  => __('No Repeat'),
                'repeat'     => __('Tile'),
                'repeat-x'   => __('Tile Horizontally'),
                'repeat-y'   => __('Tile Vertically'),
            ),
    ) );
	$wp_customize->add_control( 'themealley_business_logocontainer_background_x', array(
            'label'      => __( 'Background Position' ),
            'section'    => 'themealley_business_logo_section_options',
            'type'       => 'radio',
			'priority'   => 13,
            'choices'    => array(
                'left'       => __('Left'),
                'center'     => __('Center'),
                'right'      => __('Right'),
            ),
    ) );
    $wp_customize->add_control( 'themealley_business_logocontainer_background_y', array(
            'label'      => __( 'Background Attachment' ),
            'section'    => 'themealley_business_logo_section_options',
            'type'       => 'radio',
			'priority'   => 14,
            'choices'    => array(
                'fixed'      => __('Fixed'),
                'scroll'     => __('Scroll'),
            ),
    ) );
	  
}
if( !of_get_option('logo_image') ){
/* Settings and Controls Here */   
	$wp_customize->add_setting(
		'themealley_business_logo_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_logo_color', 
		array(
			'label'      => __( 'Text logo Color', 'themealley_business' ),
			'section'    => 'themealley_business_logo_section_options',
			'settings'   => 'themealley_business_logo_color',
			'priority'   => 15
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_logo_font', array(
        'default'        => 'Select a Font',
        'capability'     => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'themealley_business_logo_font', array(
        'label'   => 'Site Title Font:',
        'section' => 'themealley_business_logo_section_options',
        'type'    => 'select',
		'priority'   => 16,
        'choices' => $themealley_business_google_fonts,
    ));		
	$wp_customize->add_setting(
		'themealley_business_desc_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_desc_color', 
		array(
			'label'      => __( 'Description/Tagline Color', 'themealley_business' ),
			'section'    => 'themealley_business_logo_section_options',
			'settings'   => 'themealley_business_desc_color',
			'priority'   => 17
		) ) 
	);	
}
/**
* Menu Color Settings
*/
/* Sections Here */
   
   $wp_customize->add_section( 'themealley_business_menu_options' , array(
		'title'      => __('Menu Color Options','themealley_business'),
		'priority'   => 31,
   ) );
/* Settings and Controls Here */

	// Menu Color Settings
	$wp_customize->add_setting(
		'themealley_business_menucontainer_color'
    );
	$wp_customize->add_setting(
		'themealley_business_menucontainer_bg'
    );
	$wp_customize->add_setting(
		'themealley_business_menudropdown_color'
    );
	$wp_customize->add_setting(
		'themealley_business_menutext_color'
    );
	$wp_customize->add_setting(
		'themealley_business_menutopborder_color'
    );
	$wp_customize->add_setting(
		'themealley_business_menudropdown_hover_color'
    );	
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_menucontainer_color', 
		array(
			'label'      => __( 'Menu Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_menu_options',
			'settings'   => 'themealley_business_menucontainer_color',
			'priority'   => 10,
		) ) 
	);
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_menucontainer_bg',
			   array(
				   'label'          => __( 'Upload a image as Menu background image', 'themealley_business' ),
				   'section'        => 'themealley_business_menu_options',
				   'settings'       => 'themealley_business_menucontainer_bg',
				   'priority'   => 11,
			   )
		   )
	);
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_menudropdown_color', 
		array(
			'label'      => __( 'Menu Dropdown/Active Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_menu_options',
			'settings'   => 'themealley_business_menudropdown_color',
			'priority'   => 12,
		) ) 
	);
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_menutext_color', 
		array(
			'label'      => __( 'Menu Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_menu_options',
			'settings'   => 'themealley_business_menutext_color',
			'priority'   => 13,
		) ) 
	);
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_menudropdown_hover_color', 
		array(
			'label'      => __( 'Dropdown Hover Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_menu_options',
			'settings'   => 'themealley_business_menudropdown_hover_color',
			'priority'   => 14,
		) ) 
	);
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_menutopborder_color', 
		array(
			'label'      => __( 'Top Border Color, Will be used in mobile view.', 'themealley_business' ),
			'section'    => 'themealley_business_menu_options',
			'settings'   => 'themealley_business_menutopborder_color',
			'priority'   => 15,
		) ) 
	);		
   	
// Header-Slider Starts
if( of_get_option('show_slider_home') == 'true' ){	
/* Sections Here */
   
   $wp_customize->add_section( 'themealley_business_slider_options' , array(
		'title'      => __('Slider Color Options','themealley_business'),
		'priority'   => 32,
   ) );


/* Settings and Controls Here */

	// Header SLider Settings
	if( of_get_option('header_slider') != 'slitslider' ){	
	$wp_customize->add_setting(
		'themealley_business_slidercontainer_color'
    );
	$wp_customize->add_setting(
		'themealley_business_slidercontainer_bg'
    );	
	$wp_customize->add_setting(
		'themealley_business_slidercontainer_background_repeat'
    );
	$wp_customize->add_setting(
		'themealley_business_slidercontainer_background_x'
    );
	$wp_customize->add_setting(
		'themealley_business_slidercontainer_background_y'
    );		

	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_slidercontainer_color', 
		array(
			'label'      => __( 'Slider Section Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_slider_options',
			'settings'   => 'themealley_business_slidercontainer_color',
			'priority'   => 10
		) ) 
	);	

	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_slidercontainer_bg',
			   array(
				   'label'          => __( 'Upload a image as background image', 'themealley_business' ),
				   'section'        => 'themealley_business_slider_options',
				   'settings'       => 'themealley_business_slidercontainer_bg',
				   'priority'   => 11
			   )
		   )
	);
	
    $wp_customize->add_control( 'themealley_business_slidercontainer_background_repeat', array(
            'label'      => __( 'Background Repeat' ),
            'section'    => 'themealley_business_slider_options',
            'type'       => 'radio',
			'priority'   => 12,
            'choices'    => array(
                'no-repeat'  => __('No Repeat'),
                'repeat'     => __('Tile'),
                'repeat-x'   => __('Tile Horizontally'),
                'repeat-y'   => __('Tile Vertically'),
            ),
    ) );
	$wp_customize->add_control( 'themealley_business_slidercontainer_background_x', array(
            'label'      => __( 'Background Position' ),
            'section'    => 'themealley_business_slider_options',
            'type'       => 'radio',
			'priority'   => 13,
            'choices'    => array(
                'left'       => __('Left'),
                'center'     => __('Center'),
                'right'      => __('Right'),
            ),
    ) );
    $wp_customize->add_control( 'themealley_business_slidercontainer_background_y', array(
            'label'      => __( 'Background Attachment' ),
            'section'    => 'themealley_business_slider_options',
            'type'       => 'radio',
			'priority'   => 14,
            'choices'    => array(
                'fixed'      => __('Fixed'),
                'scroll'     => __('Scroll'),
            ),
    ) );
	}
	
	// Header One Starts
	if( of_get_option('header_slider') == 'one' ){
		$wp_customize->add_setting(
			'themealley_business_sliderone_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_sliderone_title_color', 
			array(
				'label'      => __( 'Slider One Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_sliderone_title_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_sliderone_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_sliderone_desc_color', 
			array(
				'label'      => __( 'Slider One Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_sliderone_desc_color',
				'priority'   => 16
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_sliderone_desc_liborder_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_sliderone_desc_liborder_color', 
			array(
				'label'      => __( 'Slider One List Item Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_sliderone_desc_liborder_color',
				'priority'   => 17
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_sliderone_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_sliderone_button_bg_color', 
			array(
				'label'      => __( 'Slider One Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_sliderone_button_bg_color',
				'priority'   => 18
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_sliderone_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_sliderone_button_border_color', 
			array(
				'label'      => __( 'Slider One Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_sliderone_button_border_color',
				'priority'   => 19
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_sliderone_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_sliderone_button_link_color', 
			array(
				'label'      => __( 'Slider One Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_sliderone_button_link_color',
				'priority'   => 20
			) ) 
		);							
	}
	// Header One Ends
	
	// Video One Starts
	if( of_get_option('header_slider') == 'videoone' ){
		$wp_customize->add_setting(
			'themealley_business_videoone_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_videoone_title_color', 
			array(
				'label'      => __( 'Video One Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_videoone_title_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_videoone_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_videoone_desc_color', 
			array(
				'label'      => __( 'Video One Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_videoone_desc_color',
				'priority'   => 16
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_videoone_desc_liborder_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_videoone_desc_liborder_color', 
			array(
				'label'      => __( 'Video One List Item Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_videoone_desc_liborder_color',
				'priority'   => 17
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_videoone_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_videoone_button_bg_color', 
			array(
				'label'      => __( 'Video One Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_videoone_button_bg_color',
				'priority'   => 18
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_videoone_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_videoone_button_border_color', 
			array(
				'label'      => __( 'Video One Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_videoone_button_border_color',
				'priority'   => 19
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_videoone_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_videoone_button_link_color', 
			array(
				'label'      => __( 'Video One Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_videoone_button_link_color',
				'priority'   => 20
			) ) 
		);							
	}
	// Video One Ends
	

	// Header OnePlus Starts
	if( of_get_option('header_slider') == 'oneplus' ){
		$wp_customize->add_setting(
			'themealley_business_slideroneplus_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slideroneplus_title_color', 
			array(
				'label'      => __( 'Slider OnePlus Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slideroneplus_title_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_slideroneplus_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slideroneplus_desc_color', 
			array(
				'label'      => __( 'Slider OnePlus Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slideroneplus_desc_color',
				'priority'   => 16
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_slideroneplus_desc_liborder_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slideroneplus_desc_liborder_color', 
			array(
				'label'      => __( 'Slider OnePlus List Item Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slideroneplus_desc_liborder_color',
				'priority'   => 17
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slideroneplus_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slideroneplus_button_bg_color', 
			array(
				'label'      => __( 'Slider OnePlus Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slideroneplus_button_bg_color',
				'priority'   => 18
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slideroneplus_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slideroneplus_button_border_color', 
			array(
				'label'      => __( 'Slider OnePlus Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slideroneplus_button_border_color',
				'priority'   => 19
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slideroneplus_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slideroneplus_button_link_color', 
			array(
				'label'      => __( 'Slider OnePlus Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slideroneplus_button_link_color',
				'priority'   => 20
			) ) 
		);							
	}
	// Header OnePlus Ends	
	
	// Slider Two Starts
	if( of_get_option('header_slider') == 'two' ){
		$wp_customize->add_setting(
			'themealley_business_slidertwo_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slidertwo_title_color', 
			array(
				'label'      => __( 'Slider Two Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slidertwo_title_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_slidertwo_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slidertwo_desc_color', 
			array(
				'label'      => __( 'Slider Two Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slidertwo_desc_color',
				'priority'   => 16
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_slidertwo_desc_liborder_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slidertwo_desc_liborder_color', 
			array(
				'label'      => __( 'Slider Two List Item Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slidertwo_desc_liborder_color',
				'priority'   => 17
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slidertwo_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slidertwo_button_bg_color', 
			array(
				'label'      => __( 'Slider Two Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slidertwo_button_bg_color',
				'priority'   => 18
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slidertwo_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slidertwo_button_border_color', 
			array(
				'label'      => __( 'Slider Two Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slidertwo_button_border_color',
				'priority'   => 19
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slidertwo_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slidertwo_button_link_color', 
			array(
				'label'      => __( 'Slider Two Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slidertwo_button_link_color',
				'priority'   => 20
			) ) 
		);							
	}
	// Slider Two Ends
	
	// SlitSlider Starts
	if( of_get_option('header_slider') == 'slitslider' ){
		$wp_customize->add_setting(
			'themealley_business_slitslider_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_title_color', 
			array(
				'label'      => __( 'SlitSlider Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_title_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_slitslider_titlebg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_titlebg_color', 
			array(
				'label'      => __( 'SlitSlider Title Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_titlebg_color',
				'priority'   => 16
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slitslider_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_desc_color', 
			array(
				'label'      => __( 'SlitSlider Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_desc_color',
				'priority'   => 17
			) ) 
		);	
		$wp_customize->add_setting(
			'themealley_business_slitslider_descbg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_descbg_color', 
			array(
				'label'      => __( 'SlitSlider Description Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_descbg_color',
				'priority'   => 18
			) ) 
		);				
		$wp_customize->add_setting(
			'themealley_business_slitslider_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_button_bg_color', 
			array(
				'label'      => __( 'SlitSlider Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_button_bg_color',
				'priority'   => 19
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slitslider_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_button_border_color', 
			array(
				'label'      => __( 'SlitSlider Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_button_border_color',
				'priority'   => 20
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_slitslider_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_slitslider_button_link_color', 
			array(
				'label'      => __( 'SlitSlider Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_slitslider_button_link_color',
				'priority'   => 21
			) ) 
		);							
	}
	// SlitSlider Ends	
	
	// Fraction Slider Starts
	if( of_get_option('header_slider') == 'fraction' ){
		$wp_customize->add_setting(
			'themealley_business_fractionslider_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_title_color', 
			array(
				'label'      => __( 'fractionslider Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_title_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_fractionslider_titlebg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_titlebg_color', 
			array(
				'label'      => __( 'fractionslider Title Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_titlebg_color',
				'priority'   => 16
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_fractionslider_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_desc_color', 
			array(
				'label'      => __( 'fractionslider Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_desc_color',
				'priority'   => 17
			) ) 
		);	
		$wp_customize->add_setting(
			'themealley_business_fractionslider_descbg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_descbg_color', 
			array(
				'label'      => __( 'fractionslider Description Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_descbg_color',
				'priority'   => 18
			) ) 
		);				
		$wp_customize->add_setting(
			'themealley_business_fractionslider_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_button_bg_color', 
			array(
				'label'      => __( 'fractionslider Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_button_bg_color',
				'priority'   => 19
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_fractionslider_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_button_border_color', 
			array(
				'label'      => __( 'fractionslider Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_button_border_color',
				'priority'   => 20
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_fractionslider_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_fractionslider_button_link_color', 
			array(
				'label'      => __( 'fractionslider Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_fractionslider_button_link_color',
				'priority'   => 21
			) ) 
		);							
	}
	// Fraction Slider Ends
	
	// Hero Slider Starts
	if( of_get_option('header_slider') == 'hero' ){
		$wp_customize->add_setting(
			'themealley_business_heroslider_welcome_heading_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_welcome_heading_color', 
			array(
				'label'      => __( 'Hero Slider Welcome Heading Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_welcome_heading_color',
				'priority'   => 15
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_heroslider_welcome_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_welcome_desc_color', 
			array(
				'label'      => __( 'Hero Slider Welcome Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_welcome_desc_color',
				'priority'   => 16
			) ) 
		);				
		$wp_customize->add_setting(
			'themealley_business_heroslider_left_slide_img'
		);		
		$wp_customize->add_control(
			   new WP_Customize_Image_Control(
				   $wp_customize,
				   'themealley_business_heroslider_left_slide_img',
				   array(
					   'label'          => __( 'Upload a image as left slide background image', 'themealley_business' ),
					   'section'        => 'themealley_business_slider_options',
					   'settings'       => 'themealley_business_heroslider_left_slide_img',
					   'priority'   => 17
				   )
			   )
		);	
		$wp_customize->add_setting(
			'themealley_business_heroslider_center_slide_img'
		);		
		$wp_customize->add_control(
			   new WP_Customize_Image_Control(
				   $wp_customize,
				   'themealley_business_heroslider_center_slide_img',
				   array(
					   'label'          => __( 'Upload a image as center slide background image', 'themealley_business' ),
					   'section'        => 'themealley_business_slider_options',
					   'settings'       => 'themealley_business_heroslider_center_slide_img',
					   'priority'   => 18
				   )
			   )
		);
		$wp_customize->add_setting(
			'themealley_business_heroslider_right_slide_img'
		);		
		$wp_customize->add_control(
			   new WP_Customize_Image_Control(
				   $wp_customize,
				   'themealley_business_heroslider_right_slide_img',
				   array(
					   'label'          => __( 'Upload a image as right slide background image', 'themealley_business' ),
					   'section'        => 'themealley_business_slider_options',
					   'settings'       => 'themealley_business_heroslider_right_slide_img',
					   'priority'   => 19
				   )
			   )
		);					
		$wp_customize->add_setting(
			'themealley_business_heroslider_title_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_title_color', 
			array(
				'label'      => __( 'heroslider Title Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_title_color',
				'priority'   => 20
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_heroslider_desc_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_desc_color', 
			array(
				'label'      => __( 'heroslider Description Text Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_desc_color',
				'priority'   => 21
			) ) 
		);	
		$wp_customize->add_setting(
			'themealley_business_heroslider_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_button_bg_color', 
			array(
				'label'      => __( 'heroslider Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_button_bg_color',
				'priority'   => 22
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_heroslider_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_button_border_color', 
			array(
				'label'      => __( 'heroslider Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_button_border_color',
				'priority'   => 23
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_heroslider_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_button_link_color', 
			array(
				'label'      => __( 'heroslider Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_button_link_color',
				'priority'   => 24
			) ) 
		);	
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_container_bg'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_pitch_container_bg', 
			array(
				'label'      => __( 'Heroslider pitch container BG color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_pitch_container_bg',
				'priority'   => 25
			) ) 
		);	
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_container_bg_image'
		);
		$wp_customize->add_control(
			   new WP_Customize_Image_Control(
				   $wp_customize,
				   'themealley_business_heroslider_pitch_container_bg_image',
				   array(
					   'label'          => __( 'Upload a image as right slide background image', 'themealley_business' ),
					   'section'        => 'themealley_business_slider_options',
					   'settings'       => 'themealley_business_heroslider_pitch_container_bg_image',
					   'priority'   => 26
				   )
			   )
		);
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_container_title'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_pitch_container_title', 
			array(
				'label'      => __( 'Heroslider pitch title color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_pitch_container_title',
				'priority'   => 27
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_container_text'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_pitch_container_text', 
			array(
				'label'      => __( 'Heroslider pitch text color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_pitch_container_text',
				'priority'   => 28
			) ) 
		);
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_button_bg_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_pitch_button_bg_color', 
			array(
				'label'      => __( 'heroslider Button Background Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_pitch_button_bg_color',
				'priority'   => 29
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_button_border_color'
		);
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_pitch_button_border_color', 
			array(
				'label'      => __( 'heroslider Button Bottom Border Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_pitch_button_border_color',
				'priority'   => 30
			) ) 
		);		
		$wp_customize->add_setting(
			'themealley_business_heroslider_pitch_button_link_color'
		);		
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
			$wp_customize, 
			'themealley_business_heroslider_pitch_button_link_color', 
			array(
				'label'      => __( 'heroslider Button Text/Link Color', 'themealley_business' ),
				'section'    => 'themealley_business_slider_options',
				'settings'   => 'themealley_business_heroslider_pitch_button_link_color',
				'priority'   => 31
			) ) 
		);																		
	}
	// Hero Slider Ends	
		
}
// Header-Slider Ends

// Main Content Starts
   $wp_customize->add_section( 'themealley_business_maincontent_options' , array(
		'title'      => __('Main Content Section Color Options','themealley_business'),
		'priority'   => 33,
   ) );	
if( of_get_option('skin_style') == 'bizkit' ){
	
	$wp_customize->add_setting(
		'themealley_business_outer_wrapper_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_outer_wrapper_bg_color', 
		array(
			'label'      => __( 'Outer Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_outer_wrapper_bg_color',
			'priority'   => 8
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_outer_wrapper_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_outer_wrapper_bg_image',
			   array(
				   'label'          => __( 'Outer Background Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_outer_wrapper_bg_image',
				   'priority'   => 9
			   )
		   )
	);	
	
}
	$wp_customize->add_setting(
		'themealley_business_maincontent_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_maincontent_bg_color', 
		array(
			'label'      => __( 'Main Content Section Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_maincontent_options',
			'settings'   => 'themealley_business_maincontent_bg_color',
			'priority'   => 10
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_maincontent_bg_image'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_maincontent_bg_image',
			   array(
				   'label'          => __( 'Main Content Section Background Image', 'themealley_business' ),
				   'section'        => 'themealley_business_maincontent_options',
				   'settings'       => 'themealley_business_maincontent_bg_image',
				   'priority'   => 11
			   )
		   )
	);	

// Bone Starts	

// Bone Ends

// Boneplus Starts	

// Boneplus Ends

// Btwo Starts

// Btwo Ends

// Bthree Starts
	
// Bthree Ends

// Bfour Starts

// Bfour Ends

// Bfive Starts

// Bfive Ends

// Bsix Starts

// Bsix Ends

// Bseven Starts

// Bseven Ends

// Beight Starts

// Beight Ends

// Bnine Starts

// Bnine Ends
	   
// Main Content Ends

// Footer Client Logos Starts
   $wp_customize->add_section( 'themealley_business_footerclientcontainer_options' , array(
		'title'      => __('Footer Client Section Color Options','themealley_business'),
		'priority'   => 40,
   ) );	
   
	$wp_customize->add_setting(
		'themealley_business_footerclientcontainer_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerclientcontainer_color', 
		array(
			'label'      => __( 'Footer Client Section Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerclientcontainer_options',
			'settings'   => 'themealley_business_footerclientcontainer_color',
			'priority'   => 10
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_footerclientcontainer_bg'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_footerclientcontainer_bg',
			   array(
				   'label'          => __( 'Upload a image as Footer Client Section background image', 'themealley_business' ),
				   'section'        => 'themealley_business_footerclientcontainer_options',
				   'settings'       => 'themealley_business_footerclientcontainer_bg',
				   'priority'   => 11
			   )
		   )
	);
// Footer Client Logos Ends


// Footer Social Icons Starts
   $wp_customize->add_section( 'themealley_business_socialicon_options' , array(
		'title'      => __('Social Section Color Options','themealley_business'),
		'priority'   => 42,
   ) );	
   
	$wp_customize->add_setting(
		'themealley_business_socialicon_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_socialicon_color', 
		array(
			'label'      => __( 'Footer Social Section Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_socialicon_options',
			'settings'   => 'themealley_business_socialicon_color',
			'priority'   => 10
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_socialicon_bg'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_socialicon_bg',
			   array(
				   'label'          => __( 'Upload a image as Social Section background image', 'themealley_business' ),
				   'section'        => 'themealley_business_socialicon_options',
				   'settings'       => 'themealley_business_socialicon_bg',
				   'priority'   => 11
			   )
		   )
	);
// Footer Social Icons Ends

// Footer Map Starts
   $wp_customize->add_section( 'themealley_business_footermapcontainer_options' , array(
		'title'      => __('Footer Map Section Color Options','themealley_business'),
		'priority'   => 43,
   ) );	
   
	$wp_customize->add_setting(
		'themealley_business_footermapcontainer_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footermapcontainer_color', 
		array(
			'label'      => __( 'Footer Map Section Background Color', 'themealley_business' ),
			'section'    => 'themealley_business_footermapcontainer_options',
			'settings'   => 'themealley_business_footermapcontainer_color',
			'priority'   => 10
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_footermapcontainer_bg'
    );
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'themealley_business_footermapcontainer_bg',
			   array(
				   'label'          => __( 'Upload a image as Footer Map Section background image', 'themealley_business' ),
				   'section'        => 'themealley_business_footermapcontainer_options',
				   'settings'       => 'themealley_business_footermapcontainer_bg',
				   'priority'   => 11
			   )
		   )
	);
	$wp_customize->add_setting(
		'themealley_business_footermapcontainer_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footermapcontainer_text_color', 
		array(
			'label'      => __( 'Footer Map Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footermapcontainer_options',
			'settings'   => 'themealley_business_footermapcontainer_text_color',
			'priority'   => 12
		) ) 
	);	  
// Footer Map Ends

// Footer Widget Starts
   $wp_customize->add_section( 'themealley_business_footerwidget_options' , array(
		'title'      => __('Footer Widget Section Color Options','themealley_business'),
		'priority'   => 44,
   ) );
	$wp_customize->add_setting(
		'themealley_business_footerwidget_heading_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_heading_color', 
		array(
			'label'      => __( 'Footer Widget Heading Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_heading_color',
			'priority'   => 11
		) ) 
	);   
	$wp_customize->add_setting(
		'themealley_business_footerwidget_text_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_text_color', 
		array(
			'label'      => __( 'Footer Widget Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_text_color',
			'priority'   => 12
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_link_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_link_color', 
		array(
			'label'      => __( 'Footer Widget Link Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_link_color',
			'priority'   => 13
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_border_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_border_color', 
		array(
			'label'      => __( 'Footer Widget List Item Border Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_border_color',
			'priority'   => 14
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_selecttext_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_selecttext_color', 
		array(
			'label'      => __( 'Footer Widget Select Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_selecttext_color',
			'priority'   => 15
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_footerwidget_selectbg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_selectbg_color', 
		array(
			'label'      => __( 'Footer Widget Select BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_selectbg_color',
			'priority'   => 16
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_searchtext_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_searchtext_color', 
		array(
			'label'      => __( 'Footer Widget Search Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_searchtext_color',
			'priority'   => 17
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_searchbg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_searchbg_color', 
		array(
			'label'      => __( 'Footer Widget Search BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_searchbg_color',
			'priority'   => 18
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_searchbtntext_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_searchbtntext_color', 
		array(
			'label'      => __( 'Footer Widget Search Button Text Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_searchbtntext_color',
			'priority'   => 19
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_searchbtnbg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_searchbtnbg_color', 
		array(
			'label'      => __( 'Footer Widget Search Button BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_searchbtnbg_color',
			'priority'   => 20
		) ) 
	);	
	$wp_customize->add_setting(
		'themealley_business_footerwidget_bg_color'
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'themealley_business_footerwidget_bg_color', 
		array(
			'label'      => __( 'Footer Widget Section BG Color', 'themealley_business' ),
			'section'    => 'themealley_business_footerwidget_options',
			'settings'   => 'themealley_business_footerwidget_bg_color',
			'priority'   => 21
		) ) 
	);
	$wp_customize->add_setting(
		'themealley_business_footerwidget_bg_image'
    );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
		$wp_customize,
		'themealley_business_footerwidget_bg_image',
		array(
			'label'          => __( 'Footer Widget Section BG Image', 'themealley_business' ),
			'section'        => 'themealley_business_footerwidget_options',
			'settings'       => 'themealley_business_footerwidget_bg_image',
			'priority'   => 22
		) )
	);							
	   
// Footer Widget Ends



}
add_action( 'customize_register', 'themealley_business_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function themealley_business_customize_preview_js() {
	wp_enqueue_script( 'themealley_business_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'themealley_business_customize_preview_js' );

locate_template( 'inc/custom-css.php', true, false );
