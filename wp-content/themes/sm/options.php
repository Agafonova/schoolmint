<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = 'themealley_business';
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$magpro_slider_start = array("false" => __("No", 'themealley_business' ),"true" => __("Yes", 'themealley_business' ));
	$fraction_slider_effects = array("type_one" => __("Type 1", 'themealley_business' ),"type_two" => __("Type 2", 'themealley_business' ),"type_three" => __("Type 3", 'themealley_business' ));
	$heroheader_effects = array("type_one" => __("Type 1", 'themealley_business' ),"type_two" => __("Type 2", 'themealley_business' ),"type_three" => __("Type 3", 'themealley_business' ));
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = __('Select a page:', 'themealley_business' );
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri(). '/admin/images/';
		
	$options = array();
		
		
							
	$options[] = array( "name" => "country1",
						"type" => "innertabopen");	
						
		$options[] = array( "name" => __("Select a Skin", 'themealley_business' ),
							"type" => "groupcontaineropen");	

				$options[] = array( "name" => __("Select a Skin", 'themealley_business' ),
										"desc" => __("If you are not using child theme, selecting child theme will be same as using alexandria skin.", 'themealley_business' ),
										"id" => "skin_style",
										"type" => "images",
										"std" => "alexandria",
										"options" => array(
											'alexandria' => $imagepath . 'alexandria.png',
											'venom' => $imagepath . 'venom.png',
											'radiant' => $imagepath . 'radiant.png',
											'radi' => $imagepath . 'radi.png',
											'bizsphere' => $imagepath . 'bizsphere.png',
											'bizflare' => $imagepath . 'bizflare.png',
											'bizantine' => $imagepath . 'bizantine.png',
											'bizark' => $imagepath . 'bizark.png',
											'bizkit' => $imagepath . 'bizkit.png',
											'cleo' => $imagepath . 'cleo.png',
											'child' => $imagepath . 'child.png')
										);						

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Favicon Upload", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Upload Favicon", 'themealley_business' ),
										"desc" => __("Upload your favicon here.", 'themealley_business' ),
										"id" => "favicon_image",
										"type" => "upload");								
										
		$options[] = array( "type" => "groupcontainerclose");		
		
		$options[] = array( "name" => __("Single Post Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Featured Image?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show featured image.", 'themealley_business' ),
										"id" => "show_featured_image_single",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show Ratings?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show ratings under post title.", 'themealley_business' ),
										"id" => "show_rat_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);										
										
					$options[] = array( "name" => __("Show Posted by and Date?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Posted by and Date under post title.", 'themealley_business' ),
										"id" => "show_pd_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);											
										
					$options[] = array( "name" => __("Show Categories and Tags?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show categories under post title.", 'themealley_business' ),
										"id" => "show_cats_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show Next/Previous Box", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Next/Previous box on single post page.", 'themealley_business' ),
										"id" => "show_np_box",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
																																							
										
		$options[] = array( "type" => "groupcontainerclose");						
		
		$options[] = array( "name" => __("Page Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Page title?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show page title.", 'themealley_business' ),
										"id" => "show_title_page",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
							
					$options[] = array( "name" => __("Show comments on Page?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show comments on pages.", 'themealley_business' ),
										"id" => "show_comments_page",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Font Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Font 1 name", 'themealley_business' ),
										"desc" => __("Enter the google font name. Ex: Source Sans Pro", 'themealley_business' ),
										"id" => "custom_font_name_one",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 1 source url", 'themealley_business' ),
										"desc" => __("Enter source url. Ex : http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext", 'themealley_business' ),
										"id" => "custom_font_url_one",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 2 name", 'themealley_business' ),
										"desc" => __("Enter the google font name. Ex: Source Sans Pro", 'themealley_business' ),
										"id" => "custom_font_name_two",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 2 source url", 'themealley_business' ),
										"desc" => __("Enter source url. Ex : http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext", 'themealley_business' ),
										"id" => "custom_font_url_two",
										"std" => "",
										"type" => "text");		
										
					$options[] = array( "name" => __("Font 3 name", 'themealley_business' ),
										"desc" => __("Enter the google font name. Ex: Source Sans Pro", 'themealley_business' ),
										"id" => "custom_font_name_three",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 3 source url", 'themealley_business' ),
										"desc" => __("Enter source url. Ex : http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext", 'themealley_business' ),
										"id" => "custom_font_url_three",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 4 name", 'themealley_business' ),
										"desc" => __("Enter the google font name. Ex: Source Sans Pro", 'themealley_business' ),
										"id" => "custom_font_name_four",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 4 source url", 'themealley_business' ),
										"desc" => __("Enter source url. Ex : http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext", 'themealley_business' ),
										"id" => "custom_font_url_four",
										"std" => "",
										"type" => "text");
										
					$options[] = array( "name" => __("Font 5 name", 'themealley_business' ),
										"desc" => __("Enter the google font name. Ex: Source Sans Pro", 'themealley_business' ),
										"id" => "custom_font_name_five",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Font 5 source url", 'themealley_business' ),
										"desc" => __("Enter source url. Ex : http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext", 'themealley_business' ),
										"id" => "custom_font_url_five",
										"std" => "",
										"type" => "text");																																														
										
		$options[] = array( "type" => "groupcontainerclose");												
		
	$options[] = array( "type" => "innertabclose");	


	$options[] = array( "name" => "country2",
						"type" => "innertabopen");	
						
		$options[] = array( "name" => __("Social Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Twitter", 'themealley_business' ),
										"desc" => __("Enter your twitter url", 'themealley_business' ),
										"id" => "twitter_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Redditt", 'themealley_business' ),
										"desc" => __("Enter your reddit url", 'themealley_business' ),
										"id" => "redit_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Facebook", 'themealley_business' ),
										"desc" => __("Enter your facebook url", 'themealley_business' ),
										"id" => "facebook_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Stumble", 'themealley_business' ),
										"desc" => __("Enter your stumbleupon url", 'themealley_business' ),
										"id" => "stumble_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Flickr", 'themealley_business' ),
										"desc" => __("Enter your flickr url", 'themealley_business' ),
										"id" => "flickr_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("LinkedIn", 'themealley_business' ),
										"desc" => __("Enter your linkedin url", 'themealley_business' ),
										"id" => "linkedin_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Google", 'themealley_business' ),
										"desc" => __("Enter your google url", 'themealley_business' ),
										"id" => "google_id",
										"std" => "",
										"type" => "text");
										
					$options[] = array( "name" => __("YouTube", 'themealley_business' ),
										"desc" => __("Enter your youtube url", 'themealley_business' ),
										"id" => "youtube_id",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Pinterest", 'themealley_business' ),
										"desc" => __("Enter your pinterest url", 'themealley_business' ),
										"id" => "pinterest_id",
										"std" => "",
										"type" => "text");
										
					$options[] = array( "name" => __("Tumblr", 'themealley_business' ),
										"desc" => __("Enter your tumblr url", 'themealley_business' ),
										"id" => "tumblr_id",
										"std" => "",
										"type" => "text");	
										
					$options[] = array( "name" => __("Instagram", 'themealley_business' ),
										"desc" => __("Enter your instagram url", 'themealley_business' ),
										"id" => "instagram_id",
										"std" => "",
										"type" => "text");																																						

							
		$options[] = array( "type" => "groupcontainerclose");											
														
	$options[] = array( "type" => "innertabclose");

	$options[] = array( "name" => "country10",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Logo Section Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Logo Upload", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Upload Logo", 'themealley_business' ),
										"desc" => __("Upload your logo here.", 'themealley_business' ),
										"id" => "logo_image",
										"type" => "upload");								
										
		$options[] = array( "type" => "groupcontainerclose");							
		
		$options[] = array( "name" => __("Logo Section Layout", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					
				$options[] = array( "name" => __("Select a layout", 'themealley_business' ),
										"desc" => __("Images for logo section.", 'themealley_business' ),
										"id" => "logo_layout_style",
										"type" => "images",
										"std" => "sbys",
										"options" => array(
											'sbys' => $imagepath . 'logo1.png',
											'onebone' => $imagepath . 'logo2.png')
										);														

										
		$options[] = array( "type" => "groupcontainerclose");								
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country3",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Select Header Type", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Select which type of header", 'themealley_business' ),
										"desc" => __("Header One or WordPress Custom header feature. If you select custom header, go to appearance->Header and set a custom header", 'themealley_business' ),
										"id" => "header_slider",
										"std" => "one",
										"type" => "images",
										"std" => "one",
										"options" => array(
											'one' => $imagepath . 'slider1.png',
											'videoone' => $imagepath . 'video.png',
											'oneplus' => $imagepath . 'oneplus.png',
											'two' => $imagepath . 'slidertwo.png',
											'slitslider' => $imagepath . 'slit.png',
											'fraction' => $imagepath . 'fraction.png',
											'hero' => $imagepath . 'hero.png',
											'cheader' => $imagepath . 'slider2.png')
										);					

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Header On/Off Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					
					$options[] = array( "name" => __("Show Header on homepage", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Header on homepage.", 'themealley_business' ),
										"id" => "show_slider_home",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);
										
					$options[] = array( "name" => __("Show Header on Single post page", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Header on Single post page.", 'themealley_business' ),
										"id" => "show_slider_single",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show Header on Pages", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Header on Pages.", 'themealley_business' ),
										"id" => "show_slider_page",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show Header on Category Pages", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Header on Category Pages.", 'themealley_business' ),
										"id" => "show_slider_archive",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);																														
										
		$options[] = array( "type" => "groupcontainerclose");			
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country6",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Header One Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_one_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_one_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_one_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_one_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_one_cta_link",
										"type" => "text");																																	
										
		$options[] = array( "type" => "groupcontainerclose");							
	
						
	$options[] = array( "type" => "innertabclose");
	
	$options[] = array( "name" => "country12",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Header One Plus Settings", 'themealley_business' ),
							"type" => "tabheading");
							
			$options[] = array( "id" => "accordion_oneplus",
								"type" => "accordiancont_open");
                                
				$options[] = array( "name" => __("Slide 1", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus1_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus1_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus1_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus1_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus1_cta_link",
										"type" => "text");                                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 2", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus2_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus2_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus2_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus2_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus2_cta_link",
										"type" => "text");									
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 3", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus3_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus3_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus3_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus3_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus3_cta_link",
										"type" => "text"); 									
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 4", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                                    

					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus4_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus4_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus4_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus4_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus4_cta_link",
										"type" => "text");                                     
				
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 5", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus5_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus5_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus5_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus5_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus5_cta_link",
										"type" => "text");				                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 6", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                 
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus6_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus6_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus6_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus6_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus6_cta_link",
										"type" => "text");				                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 7", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                 
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus7_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus7_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus7_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus7_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus7_cta_link",
										"type" => "text"); 				                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 8", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus8_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus8_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus8_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus8_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus8_cta_link",
										"type" => "text");				                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 9", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus9_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus9_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus9_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus9_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus9_cta_link",
										"type" => "text");				                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 10", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
                
					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "slider_oneplus10_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_oneplus10_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_oneplus10_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_oneplus10_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_oneplus10_cta_link",
										"type" => "text"); 				                    
                                    
				$options[] = array( "type" => "groupcontainerclose_accordian");																													
                
                
			$options[] = array( "type" => "accordiancont_close");							
	
						
	$options[] = array( "type" => "innertabclose");
	
	$options[] = array( "name" => "country13",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Slider Two Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "slider_two_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "slider_two_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "slider_two_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "slider_two_cta_link",
										"type" => "text");	
										
		$options[] = array( "type" => "groupcontainerclose");
		
			$options[] = array( "id" => "accordion_slidertwo",
								"type" => "accordiancont_open");		
		
				$options[] = array( "name" => __("Slide 1", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide1_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide1_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 2", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide2_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide2_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 3", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide3_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide3_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 4", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide4_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide4_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 5", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide5_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide5_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 6", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide6_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide6_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 7", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide7_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide7_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 8", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide8_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide8_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 9", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide9_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide9_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 10", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload 610x410 image here.", 'themealley_business' ),
												"id" => "slider_two_slide10_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title text", 'themealley_business' ),
												"id" => "slider_two_slide10_title",
												"type" => "text");
									
				$options[] = array( "type" => "groupcontainerclose_accordian");																													
	
			$options[] = array( "type" => "accordiancont_close");
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country8",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Video One Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Youtube Video", 'themealley_business' ),
										"desc" => __("Enter the youtube link.", 'themealley_business' ),
										"id" => "video_one_image",
										"type" => "text");								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "video_one_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Feature text", 'themealley_business' ),
										"desc" => __("Enter the feature text. You can use ul, li, strong, a, br html tags.", 'themealley_business' ),
										"id" => "video_one_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Call To Action text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "video_one_cta",
										"type" => "text");	
										
					$options[] = array( "name" => __("Call To Action Link", 'themealley_business' ),
										"desc" => __("Enter the full url", 'themealley_business' ),
										"id" => "video_one_cta_link",
										"type" => "text");																																	

										
		$options[] = array( "type" => "groupcontainerclose");							
	
						
	$options[] = array( "type" => "innertabclose");		
	
	$options[] = array( "name" => "country14",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Slit Slider Settings", 'themealley_business' ),
							"type" => "tabheading");
							
			$options[] = array( "name" => __("Fraction Slider Settings", 'themealley_business' ),
								"id" => "accordion_slitslider",
								"type" => "accordiancont_open");							
							
				$options[] = array( "name" => __("Slide 1", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide1_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide1_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide1_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide1_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide1_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 2", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide2_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide2_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide2_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide2_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide2_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 3", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide3_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide3_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide3_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide3_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide3_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 4", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide4_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide4_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide4_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide4_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide4_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 5", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide5_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide5_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide5_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide5_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide5_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 6", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide6_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide6_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide6_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide6_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide6_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");
				
				$options[] = array( "name" => __("Slide 7", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide7_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide7_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide7_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide7_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide7_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 8", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide8_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide8_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide8_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide8_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide8_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 9", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide9_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide9_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide9_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide9_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide9_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				
				$options[] = array( "name" => __("Slide 10", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
		
							$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
												"desc" => __("Upload your image here.", 'themealley_business' ),
												"id" => "slitslider_slide10_image",
												"type" => "upload");
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide10_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "slitslider_slide10_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text", 'themealley_business' ),
												"id" => "slitslider_slide10_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url", 'themealley_business' ),
												"id" => "slitslider_slide10_link",
												"type" => "text");																														
									
				$options[] = array( "type" => "groupcontainerclose_accordian");	
		
			$options[] = array( "type" => "accordiancont_close");																				
							
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country15",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Fraction Slider Settings", 'themealley_business' ),
							"type" => "tabheading");
							
			$options[] = array( "name" => __("Fraction Slider Settings", 'themealley_business' ),
								"id" => "accordion_fraction",
								"type" => "accordiancont_open");							
				
				// Fraction Slide 1 starts here			
				$options[] = array( "name" => __("Slide 1", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide1_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide1_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide1_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide1_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide1_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide1_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide1_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide1_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide1_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide1_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide1_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide1_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide1_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 1 ends here	
				
				// Fraction Slide 2 starts here			
				$options[] = array( "name" => __("Slide 2", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide2_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide2_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide2_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide2_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide2_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide2_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide2_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide2_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide2_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide2_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide2_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide2_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide2_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 2 ends here
				
				// Fraction Slide 3 starts here			
				$options[] = array( "name" => __("Slide 3", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide3_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide3_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide3_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide3_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide3_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide3_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide3_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide3_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide3_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide3_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide3_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide3_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide3_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 3 ends here
				
				// Fraction Slide 4 starts here			
				$options[] = array( "name" => __("Slide 4", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide4_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide4_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide4_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide4_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide4_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide4_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide4_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide4_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide4_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide4_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide4_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide4_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide4_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 4 ends here
				
				// Fraction Slide 5 starts here			
				$options[] = array( "name" => __("Slide 5", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide5_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide5_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide5_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide5_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide5_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide5_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide5_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide5_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide5_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide5_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide5_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide5_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide5_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 5 ends here	
				
				// Fraction Slide 6 starts here			
				$options[] = array( "name" => __("Slide 6", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide6_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide6_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide6_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide6_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide6_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide6_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide6_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide6_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide6_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide6_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide6_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide6_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide6_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 6 ends here
				
				// Fraction Slide 7 starts here			
				$options[] = array( "name" => __("Slide 7", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide7_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide7_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide7_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide7_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide7_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide7_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide7_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide7_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide7_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide7_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide7_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide7_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide7_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 7 ends here	
				
				// Fraction Slide 8 starts here			
				$options[] = array( "name" => __("Slide 8", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide8_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide8_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide8_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide8_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide8_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide8_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide8_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide8_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide8_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide8_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide8_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide8_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide8_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 8 ends here	
				
				// Fraction Slide 9 starts here			
				$options[] = array( "name" => __("Slide 9", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide9_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide9_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide9_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide9_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide9_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide9_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide9_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide9_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide9_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide9_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide9_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide9_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide9_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 9 ends here
				
				// Fraction Slide 10 starts here			
				$options[] = array( "name" => __("Slide 10", 'themealley_business' ),
									"type" => "groupcontaineropen_accordian");
									
							$options[] = array( "name" => __("Effect Type?", 'themealley_business' ),
												"desc" => __("Select type of effect.", 'themealley_business' ),
												"id" => "fractionslider_slide10_effect",
												"std" => "type_one",
												"type" => "select",
												"class" => "mini", //mini, tiny, small
												"options" => $fraction_slider_effects);								
									
							$options[] = array( "name" => __("Upload Image 1", 'themealley_business' ),
												"desc" => __("350x300 for Effect 1, 550x400 for Effect 2 and 450x400 for Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide10_image1",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 2", 'themealley_business' ),
												"desc" => __("200x250 for Effect 1, 300x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide10_image2",
												"type" => "upload");
												
							$options[] = array( "name" => __("Upload Image 3", 'themealley_business' ),
												"desc" => __("300x200 for Effect 1, 400x300 for Effect 2, This image won't be used in Effect 3.", 'themealley_business' ),
												"id" => "fractionslider_slide10_image3",
												"type" => "upload");																				
												
							$options[] = array( "name" => __("Title", 'themealley_business' ),
												"desc" => __("Enter the title", 'themealley_business' ),
												"id" => "fractionslider_slide10_title",
												"type" => "text");
												
							$options[] = array( "name" => __("Description", 'themealley_business' ),
												"desc" => __("Enter the description", 'themealley_business' ),
												"id" => "fractionslider_slide10_desc",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 1", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide10_item1",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 2", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide10_item2",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 3", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide10_item3",
												"type" => "text");	
												
							$options[] = array( "name" => __("Item 4", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide10_item4",
												"type" => "text");
												
							$options[] = array( "name" => __("Item 5", 'themealley_business' ),
												"desc" => __("Enter a few words. Keep it short. Will be used only for effect 1", 'themealley_business' ),
												"id" => "fractionslider_slide10_item5",
												"type" => "text");	
												
							$options[] = array( "name" => __("CTA Text", 'themealley_business' ),
												"desc" => __("Enter the CTA text. Only used in Effect 1 and 3.", 'themealley_business' ),
												"id" => "fractionslider_slide10_cta",
												"type" => "text");
												
							$options[] = array( "name" => __("CTA Link", 'themealley_business' ),
												"desc" => __("Enter the full url.", 'themealley_business' ),
												"id" => "fractionslider_slide10_link",
												"type" => "text");	
												
				$options[] = array( "type" => "groupcontainerclose_accordian");	
				// Fraction Slide 10 ends here																																	
				
			$options[] = array( "type" => "accordiancont_close");																	
							
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country16",
						"type" => "innertabopen");	
						
		$options[] = array( "name" => __("Hero Header Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "welcome_heroheader_headline",
										"type" => "text");
										
					$options[] = array( "name" => __("Welcome Text", 'themealley_business' ),
										"desc" => __("Enter the welcome text", 'themealley_business' ),
										"id" => "welcome_heroheader_text",
										"type" => "text");																	
							
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Pitch Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Pitch Headline", 'themealley_business' ),
										"desc" => __("Enter the pitch headline", 'themealley_business' ),
										"id" => "pitch_heroheader_headline",
										"type" => "text");
										
					$options[] = array( "name" => __("Pitch Text", 'themealley_business' ),
										"desc" => __("Enter the pitch text", 'themealley_business' ),
										"id" => "pitch_heroheader_text",
										"type" => "text");
										
					$options[] = array( "name" => __("Pitch CTA", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "pitch_heroheader_cta",
										"type" => "text");
										
					$options[] = array( "name" => __("CTA link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "pitch_heroheader_link",
										"type" => "text");																										
							
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Center Panel", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Image", 'themealley_business' ),
										"desc" => __("Upload the Image", 'themealley_business' ),
										"id" => "centerpanel_heroheader_img",
										"type" => "upload");
										
					$options[] = array( "name" => __("Heading", 'themealley_business' ),
										"desc" => __("Enter the title/product name/service name. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "centerpanel_heroheader_title",
										"type" => "text");	
										
					$options[] = array( "name" => __("Description", 'themealley_business' ),
										"desc" => __("Enter the description. Keep it to 3-10 short words.", 'themealley_business' ),
										"id" => "centerpanel_heroheader_desc",
										"type" => "text");																			
										
					$options[] = array( "name" => __("Item 1", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "centerpanel_heroheader_item1",
										"type" => "text");
										
					$options[] = array( "name" => __("Item 2", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "centerpanel_heroheader_item2",
										"type" => "text");	
										
					$options[] = array( "name" => __("Item 3", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "centerpanel_heroheader_item3",
										"type" => "text");																			
										
					$options[] = array( "name" => __("Button Text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "centerpanel_heroheader_btn",
										"type" => "text");
										
					$options[] = array( "name" => __("Button link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "centerpanel_heroheader_btnlink",
										"type" => "text");																										
							
		$options[] = array( "type" => "groupcontainerclose"); 		
		
		$options[] = array( "name" => __("Left Panel", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Image", 'themealley_business' ),
										"desc" => __("Upload the Image", 'themealley_business' ),
										"id" => "leftpanel_heroheader_img",
										"type" => "upload");
										
					$options[] = array( "name" => __("Heading", 'themealley_business' ),
										"desc" => __("Enter the title/product name/service name. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "leftpanel_heroheader_title",
										"type" => "text");	
										
					$options[] = array( "name" => __("Description", 'themealley_business' ),
										"desc" => __("Enter the description. Keep it to 3-10 short words.", 'themealley_business' ),
										"id" => "leftpanel_heroheader_desc",
										"type" => "text");																			
										
					$options[] = array( "name" => __("Item 1", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "leftpanel_heroheader_item1",
										"type" => "text");
										
					$options[] = array( "name" => __("Item 2", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "leftpanel_heroheader_item2",
										"type" => "text");	
										
					$options[] = array( "name" => __("Item 3", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "leftpanel_heroheader_item3",
										"type" => "text");																			
										
					$options[] = array( "name" => __("Button Text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "leftpanel_heroheader_btn",
										"type" => "text");
										
					$options[] = array( "name" => __("Button link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "leftpanel_heroheader_btnlink",
										"type" => "text");																										
							
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Right Panel", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Image", 'themealley_business' ),
										"desc" => __("Upload the Image", 'themealley_business' ),
										"id" => "rightpanel_heroheader_img",
										"type" => "upload");
										
					$options[] = array( "name" => __("Heading", 'themealley_business' ),
										"desc" => __("Enter the title/product name/service name. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "rightpanel_heroheader_title",
										"type" => "text");	
										
					$options[] = array( "name" => __("Description", 'themealley_business' ),
										"desc" => __("Enter the description. Keep it to 3-10 short words.", 'themealley_business' ),
										"id" => "rightpanel_heroheader_desc",
										"type" => "text");																			
										
					$options[] = array( "name" => __("Item 1", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "rightpanel_heroheader_item1",
										"type" => "text");
										
					$options[] = array( "name" => __("Item 2", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "rightpanel_heroheader_item2",
										"type" => "text");	
										
					$options[] = array( "name" => __("Item 3", 'themealley_business' ),
										"desc" => __("Enter the item text. Keep it to 3-4 short words.", 'themealley_business' ),
										"id" => "rightpanel_heroheader_item3",
										"type" => "text");																			
										
					$options[] = array( "name" => __("Button Text", 'themealley_business' ),
										"desc" => __("Enter the text", 'themealley_business' ),
										"id" => "rightpanel_heroheader_btn",
										"type" => "text");
										
					$options[] = array( "name" => __("Button link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "rightpanel_heroheader_btnlink",
										"type" => "text");																										
							
		$options[] = array( "type" => "groupcontainerclose");																													
														
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country4",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Layout Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Select a homepage layout", 'themealley_business' ),
										"desc" => __("Images for layout.", 'themealley_business' ),
										"id" => "homepage_layout",
										"std" => "bone",
										"type" => "images",
										"options" => array(
											'bone' => $imagepath . 'layout1.png',
											'boneplus' => $imagepath . 'boneplus.png',
											'btwo' => $imagepath . 'layout3.png',
											'bthree' => $imagepath . 'bthree.png',
											'bfour' => $imagepath . 'bfour.png',
											'bfive' => $imagepath . 'bfive.png',
											'bsix' => $imagepath . 'bsix.png',
											'bseven' => $imagepath . 'bseven.png',
											'beight' => $imagepath . 'beight.png',
											'bnine' => $imagepath . 'bnine.png',
											'spage' => $imagepath . 'layout2.png')
										);					

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Quote Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Quote?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show quote.", 'themealley_business' ),
										"id" => "show_quote_biz",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
					
					$options[] = array( "name" => __("Quote 1", 'themealley_business' ),
										"desc" => __("Enter the Quote Text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "quote_section_text_biz1",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Customer Name 1", 'themealley_business' ),
										"desc" => __("Enter the customer name", 'themealley_business' ),
										"id" => "quote_section_name_biz1",
										"type" => "text");	
										
					$options[] = array( "name" => __("Quote 2", 'themealley_business' ),
										"desc" => __("Enter the Quote Text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "quote_section_text_biz2",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Customer Name 2", 'themealley_business' ),
										"desc" => __("Enter the customer name", 'themealley_business' ),
										"id" => "quote_section_name_biz2",
										"type" => "text");
										
					$options[] = array( "name" => __("Quote 3", 'themealley_business' ),
										"desc" => __("Enter the Quote Text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "quote_section_text_biz3",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Customer Name 3", 'themealley_business' ),
										"desc" => __("Enter the customer name", 'themealley_business' ),
										"id" => "quote_section_name_biz3",
										"type" => "text");
										
					$options[] = array( "name" => __("Quote 4", 'themealley_business' ),
										"desc" => __("Enter the Quote Text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "quote_section_text_biz4",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Customer Name 4", 'themealley_business' ),
										"desc" => __("Enter the customer name", 'themealley_business' ),
										"id" => "quote_section_name_biz4",
										"type" => "text");
										
					$options[] = array( "name" => __("Quote 5", 'themealley_business' ),
										"desc" => __("Enter the Quote Text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "quote_section_text_biz5",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Customer Name 5", 'themealley_business' ),
										"desc" => __("Enter the customer name", 'themealley_business' ),
										"id" => "quote_section_name_biz5",
										"type" => "text");																																																					

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Client Logos", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Client Logo section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show client logos.", 'themealley_business' ),
										"id" => "show_footer_client_logos",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);									
							
					$options[] = array( "name" => __("Client Logo # 1", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo1",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 1 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo1_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 2", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo2",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 2 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo2_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 3", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo3",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 3 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo3_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 4", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo4",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 4 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo4_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 5", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo5",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 5 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo5_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 6", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo6",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 6 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo6_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 7", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo7",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 7 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo7_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 8", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo8",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 8 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo8_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 9", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo9",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 9 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo9_link",
										"type" => "text");										
										
					$options[] = array( "name" => __("Client Logo # 10", 'themealley_business' ),
										"desc" => __("Upload the logo", 'themealley_business' ),
										"id" => "footer_clients_logo10",
										"type" => "upload");
										
					$options[] = array( "name" => __("Client Logo # 10 link", 'themealley_business' ),
										"desc" => __("Enter the url", 'themealley_business' ),
										"id" => "footer_clients_logo10_link",
										"type" => "text");																				
		
		$options[] = array( "type" => "groupcontainerclose"); 						
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country5",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz One Settings", 'themealley_business' ),
							"type" => "tabheading");
																							
						
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show welcome section.", 'themealley_business' ),
										"id" => "show_bone_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bone_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bone_welcome_text",
										"type" => "textarea");														

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Left Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "left_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "left_section_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "left_section_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'themealley_business' ),
										"desc" => __("Enter the link to product or service", 'themealley_business' ),
										"id" => "left_section_link",
										"type" => "text");																							

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Center Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "center_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "center_section_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "center_section_text",
										"type" => "textarea");	
										
					$options[] = array( "name" => __("Link", 'themealley_business' ),
										"desc" => __("Enter the link to product or service", 'themealley_business' ),
										"id" => "center_section_link",
										"type" => "text");																							

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Right Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'themealley_business' ),
										"desc" => __("Upload your image here.", 'themealley_business' ),
										"id" => "right_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "right_section_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "right_section_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'themealley_business' ),
										"desc" => __("Enter the link to product or service", 'themealley_business' ),
										"id" => "right_section_link",
										"type" => "text");																								

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Recent Posts", 'themealley_business' ),
							"type" => "groupcontaineropen");
														
					$options[] = array( "name" => __("Show Recent Posts Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to recent posts at the bottom.", 'themealley_business' ),
										"id" => "show_bizone_posts",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
		$options[] = array( "type" => "groupcontainerclose");														
						
	$options[] = array( "type" => "innertabclose");
	
	$options[] = array( "name" => "country17",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz One Plus Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show welcome section.", 'themealley_business' ),
										"id" => "show_boneplus_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bizoneplus_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bizoneplus_welcome_text",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Products Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Products/Services Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show products/services section.", 'themealley_business' ),
										"id" => "show_boneplus_products_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
										
		$options[] = array( "type" => "groupcontainerclose");		

	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country7",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Two Settings", 'themealley_business' ),
							"type" => "tabheading");						
						
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to Welcome section.", 'themealley_business' ),
										"id" => "show_biztwo_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "biztwo_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "biztwo_welcome_text",
										"type" => "textarea");														

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Products Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Products/Services Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show products/services section.", 'themealley_business' ),
										"id" => "show_btwo_products_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Portfolio Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("How many portfolio items?", 'themealley_business' ),
										"desc" => __("Enter a number.", 'themealley_business' ),
										"id" => "btwo_protfolio_num",
										"class" => "mini", //mini, tiny, small
										"type" => "text");																		
										
		$options[] = array( "type" => "groupcontainerclose");					
		
		$options[] = array( "name" => __("Recent Posts", 'themealley_business' ),
							"type" => "groupcontaineropen");
														
					$options[] = array( "name" => __("Show Recent Posts Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to recent posts at the bottom.", 'themealley_business' ),
										"id" => "show_biztwo_posts",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
		$options[] = array( "type" => "groupcontainerclose");																					
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country19",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Three Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to Welcome section.", 'themealley_business' ),
										"id" => "show_bizthree_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);									

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bizthree_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bizthree_welcome_text",
										"type" => "textarea");														

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Products/Services Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Products/Services Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show products/services section.", 'themealley_business' ),
										"id" => "show_bthree_products_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
										
		$options[] = array( "type" => "groupcontainerclose");		

	$options[] = array( "type" => "innertabclose");		
	
	$options[] = array( "name" => "country18",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Four Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to Welcome section.", 'themealley_business' ),
										"id" => "show_bfour_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bfour_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bfour_welcome_text",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Products/Services Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Products/Services Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show products/services section.", 'themealley_business' ),
										"id" => "show_bfour_products_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
										
		$options[] = array( "type" => "groupcontainerclose");		
							
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country21",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Five Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to Welcome section.", 'themealley_business' ),
										"id" => "show_bfive_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bfive_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bfive_welcome_text",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Products Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bfive_products_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Product description", 'themealley_business' ),
										"desc" => __("Enter the welcome text.", 'themealley_business' ),
										"id" => "bfive_products_description",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Services Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bfive_services_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Product description", 'themealley_business' ),
										"desc" => __("Enter the welcome text.", 'themealley_business' ),
										"id" => "bfive_services_description",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("News Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show News/Blog Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show News/Blog section.", 'themealley_business' ),
										"id" => "show_bfive_news_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bfive_news_headline",
										"type" => "text");
										
					$options[] = array( "name" => __("Select Category", 'Destro' ),
										"desc" => __("Posts from this category will be shown as news.", 'themealley_business' ),
										"id" => "bfive_news_category",
										"std" => "true",
										"type" => "select",
										"options" => $options_categories);											
										
					$options[] = array( "name" => __("No of posts", 'themealley_business' ),
										"desc" => __("Enter the number", 'themealley_business' ),
										"id" => "bfive_news_number",
										"class" => "mini", //mini, tiny, small
										"type" => "text");
										
					$options[] = array( "name" => __("Show ReadMore button?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show button.", 'themealley_business' ),
										"id" => "bfive_show_news_button",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Default Button Text", 'themealley_business' ),
										"desc" => __("Enter the default text for the button.", 'themealley_business' ),
										"id" => "bfive_blog_cta",
										"class" => "mini", //mini, tiny, small
										"type" => "text");																														
										
		$options[] = array( "type" => "groupcontainerclose");
							
	$options[] = array( "type" => "innertabclose");								
	
	$options[] = array( "name" => "country22",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Six Settings", 'themealley_business' ),
							"type" => "tabheading");						
						
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Welcome section.", 'themealley_business' ),
										"id" => "show_bsix_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);									

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bsix_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bsix_welcome_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("CTA 1 Text", 'themealley_business' ),
										"desc" => __("Enter CTA 1", 'themealley_business' ),
										"id" => "bsix_welcome_cta_one",
										"type" => "text");
										
					$options[] = array( "name" => __("CTA 1 Link", 'themealley_business' ),
										"desc" => __("Enter CTA 1", 'themealley_business' ),
										"id" => "bsix_welcome_cta_one_link",
										"type" => "text");	
										
					$options[] = array( "name" => __("CTA 2 Text", 'themealley_business' ),
										"desc" => __("Enter CTA 2", 'themealley_business' ),
										"id" => "bsix_welcome_cta_two",
										"type" => "text");
										
					$options[] = array( "name" => __("CTA 2 Link", 'themealley_business' ),
										"desc" => __("Enter CTA 2", 'themealley_business' ),
										"id" => "bsix_welcome_cta_two_link",
										"type" => "text");																																											
										
		$options[] = array( "type" => "groupcontainerclose");							
						
	$options[] = array( "type" => "innertabclose");		
	
	$options[] = array( "name" => "country23",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Seven Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Welcome Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Welcome Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Welcome section.", 'themealley_business' ),
										"id" => "show_bseven_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bseven_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bseven_welcome_text",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Work Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Work Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show work section", 'themealley_business' ),
										"id" => "bseven_work_show",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bseven_work_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bseven_work_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Number of Items", 'themealley_business' ),
										"desc" => __("Enter the number of items. If not set, 12 will be shown.", 'themealley_business' ),
										"id" => "bseven_work_number",
										"class" => "mini", //mini, tiny, small
										"type" => "text");																								
										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("About Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show About Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show work section", 'themealley_business' ),
										"id" => "bseven_about_show",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);									

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bseven_about_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bseven_about_text",
										"type" => "textarea");
										
		$options[] = array( "type" => "groupcontainerclose");									
							
	$options[] = array( "type" => "innertabclose");		
	
	$options[] = array( "name" => "country24",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Eight Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Products Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "beight_products_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Product description", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "beight_products_description",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Portfolio Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "beight_blog_headline",
										"type" => "text");		
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("News Section", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "beight_news_headline",
										"type" => "text");
										
					$options[] = array( "name" => __("Select Category", 'Destro' ),
										"desc" => __("Posts from this category will be shown as news.", 'themealley_business' ),
										"id" => "beight_news_category",
										"std" => "true",
										"type" => "select",
										"options" => $options_categories);											
										
					$options[] = array( "name" => __("No of posts", 'themealley_business' ),
										"desc" => __("Enter the number", 'themealley_business' ),
										"id" => "beight_news_number",
										"class" => "mini", //mini, tiny, small
										"type" => "text");
										
					$options[] = array( "name" => __("Show ReadMore button?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show button.", 'themealley_business' ),
										"id" => "beight_show_news_button",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Default Button Text", 'themealley_business' ),
										"desc" => __("Enter the default text for the button.", 'themealley_business' ),
										"id" => "beight_blog_cta",
										"class" => "mini", //mini, tiny, small
										"type" => "text");																														
										
		$options[] = array( "type" => "groupcontainerclose");											
							
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country25",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Nine Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Products/Services Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Products/Services Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show products/services section.", 'themealley_business' ),
										"id" => "show_bnine_products_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);								
										
		$options[] = array( "type" => "groupcontainerclose");							
							
		$options[] = array( "name" => __("About Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show About Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show quote.", 'themealley_business' ),
										"id" => "bnine_show_welcome_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);									

					$options[] = array( "name" => __("Headline", 'themealley_business' ),
										"desc" => __("Enter the headline", 'themealley_business' ),
										"id" => "bnine_welcome_headline",
										"type" => "text");		
										
					$options[] = array( "name" => __("Welcome text", 'themealley_business' ),
										"desc" => __("Enter the welcome text. You can use ul, li, strong, a, br, em html tags.", 'themealley_business' ),
										"id" => "bnine_welcome_text",
										"type" => "textarea");														
										
		$options[] = array( "type" => "groupcontainerclose");							
							
	$options[] = array( "type" => "innertabclose");							
	
	$options[] = array( "name" => "country9",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Standard Page Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Show Comments?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show comments", 'themealley_business' ),
										"id" => "show_comments_spage",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);		
										
		$options[] = array( "type" => "groupcontainerclose");								
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country20",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Portfolio Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Global Settings - Portfolio", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show CTA?", 'themealley_business' ),
										"desc" => __("Select yes to show CTA button on portfolio items.", 'themealley_business' ),
										"id" => "show_portfolio_cta",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Default CTA", 'themealley_business' ),
										"desc" => __("Enter the default CTA", 'themealley_business' ),
										"id" => "default_portfolio_cta",
										"type" => "text");
										
					$options[] = array( "name" => __("How many Portfolio Items per page?", 'themealley_business' ),
										"desc" => __("Enter a number, Default is 10", 'themealley_business' ),
										"id" => "portfolio_page_num",
										"std" => "",
										"class" => "mini", //mini, tiny, small
										"type" => "text");																											
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Portfolio Layouts", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Select a portfolio layout", 'themealley_business' ),
										"desc" => __("Images for layout.", 'themealley_business' ),
										"id" => "portfolio_layout",
										"std" => "three",
										"type" => "images",
										"options" => array(
											'one' => $imagepath . 'pone.png',
											'two' => $imagepath . 'ptwo.png',
											'three' => $imagepath . 'pthree.png',
											'four' => $imagepath . 'pfour.png')
										);	
										
		$options[] = array( "type" => "groupcontainerclose");										
												
	$options[] = array( "type" => "innertabclose");
								
	$options[] = array( "name" => "country11",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Footer Settings", 'themealley_business' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Social Section", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Social Section?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show Welcome section.", 'themealley_business' ),
										"id" => "show_social_icon_section",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
		$options[] = array( "type" => "groupcontainerclose");																	
							
		$options[] = array( "name" => __("Footer Logo Upload", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Upload Logo", 'themealley_business' ),
										"desc" => __("Upload your logo here.", 'themealley_business' ),
										"id" => "footer_logo_image",
										"type" => "upload");								
										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Misc footer Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show search?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show search in footer.", 'themealley_business' ),
										"id" => "show_footer_search",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);
										
					$options[] = array( "name" => __("Show credits?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show credits in footer.", 'themealley_business' ),
										"id" => "show_footer_credits",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);
										
					$options[] = array( "name" => __("Show copyright?", 'themealley_business' ),
										"desc" => __("Select yes if you want to show copyright in footer.", 'themealley_business' ),
										"id" => "show_footer_copyright",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);										
										
					$options[] = array( "name" => __("Copyright text", 'themealley_business' ),
										"desc" => __("Enter the copyright text. Few words no html tags.", 'themealley_business' ),
										"id" => "copyright_text",
										"type" => "text");																				
										
		$options[] = array( "type" => "groupcontainerclose");			
		
		$options[] = array( "name" => __("Address Settings", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Address", 'themealley_business' ),
										"desc" => __("Enter the link to project", 'themealley_business' ),
										"id" => "footer_address",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Email", 'themealley_business' ),
										"desc" => __("Enter the link to project", 'themealley_business' ),
										"id" => "footer_email",
										"type" => "text");											
										
					$options[] = array( "name" => __("Phone Number", 'themealley_business' ),
										"desc" => __("Enter the link to project", 'themealley_business' ),
										"id" => "footer_phone",
										"type" => "text");	
										
					$options[] = array( "name" => __("Fax Number", 'themealley_business' ),
										"desc" => __("Enter the link to project", 'themealley_business' ),
										"id" => "footer_fax",
										"type" => "text");
										
					$options[] = array( "name" => __("Skype", 'themealley_business' ),
										"desc" => __("Enter the link to project", 'themealley_business' ),
										"id" => "footer_skype",
										"type" => "text");																																						
										
					$options[] = array( "name" => __("Footer Map", 'themealley_business' ),
										"desc" => __("Enter the link to project", 'themealley_business' ),
										"id" => "footer_map",
										"type" => "mapcode");											
										
		$options[] = array( "type" => "groupcontainerclose");										
										
		$options[] = array( "name" => __("Footer Layouts", 'themealley_business' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Select a footer layout", 'themealley_business' ),
										"desc" => __("Images for layout.", 'themealley_business' ),
										"id" => "footer_layout",
										"type" => "images",
										"std" => "one",
										"options" => array(
											'one' => $imagepath . 'footer1.png',
											'two' => $imagepath . 'footer2.png',
											'three' => $imagepath . 'fthree.png',
											'four' => $imagepath . 'ffour.png',
											'five' => $imagepath . 'ffive.png',
											'six' => $imagepath . 'fsix.png')
										);	
										
		$options[] = array( "type" => "groupcontainerclose");																					
						
	$options[] = array( "type" => "innertabclose");			
							
						

							
		
	return $options;
}