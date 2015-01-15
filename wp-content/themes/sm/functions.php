<?php
/**
 * themealley_business functions and definitions
 *
 * @package themealley_business
 */
 
/* 
 * Loads the Options Panel
 */
if ( !function_exists( 'optionsframework_init' ) ) {

	/* Set the file path based on whether we're in a child theme or parent theme */


		define('OPTIONS_FRAMEWORK_URL', get_template_directory() . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/');


	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'themealley_business_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function themealley_business_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on themealley_business, use a find and replace
	 * to change 'themealley_business' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'themealley_business', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'themealley_businessthumb', 450, 300, true );
  	add_image_size( 'themealley_businesssingle', 1200, 500, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'themealley_business' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	 
	  if ( of_get_option('skin_style') && of_get_option('skin_style') !== 'child' ) {
		$custombgargsskin = of_get_option('skin_style');
	  }else {
		$custombgargsskin = 'alexandria';
	  }
	  
	  if ( get_stylesheet_directory() == get_template_directory() ) {
		  $custombgargs = array(
			'default-color' => 'ebeef1',
			'default-image' => get_template_directory_uri() . '/skins/images/'.$custombgargsskin.'/page_bg.png',
			);
			
	  }else {
		  $custombgargs = array(
			'default-image' => get_stylesheet_directory_uri() . '/images/page_bg.png',
			);	  
	  }
	  add_theme_support( 'custom-background', $custombgargs );	 
	 
}
endif; // themealley_business_setup
add_action( 'after_setup_theme', 'themealley_business_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function themealley_business_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'themealley_business' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Left Sidebar', 'themealley_business' ),
		'id'            => 'footer-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	if( !of_get_option('footer_layout') || of_get_option('footer_layout') == 'one' ) {
	register_sidebar( array(
		'name'          => __( 'Footer Center Sidebar', 'themealley_business' ),
		'id'            => 'footer-center',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	}
	register_sidebar( array(
		'name'          => __( 'Footer Right Sidebar', 'themealley_business' ),
		'id'            => 'footer-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	if( of_get_option('footer_layout') == 'three' || of_get_option('footer_layout') == 'five' || of_get_option('footer_layout') == 'six') {
	register_sidebar( array(
		'name'          => __( 'Footer Center Left Sidebar', 'themealley_business' ),
		'id'            => 'footer-center-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );		
	register_sidebar( array(
		'name'          => __( 'Footer Center Right Sidebar', 'themealley_business' ),
		'id'            => 'footer-center-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );		
	}
}
add_action( 'widgets_init', 'themealley_business_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function themealley_business_scripts() {
	
	if ( get_stylesheet_directory() !== get_template_directory() ) {
		wp_enqueue_style( 'themealley_business-parent-style', get_template_directory_uri().'/style.css' );
	}
	
	wp_enqueue_style( 'themealley_business-style', get_stylesheet_uri() );
	
	// Lets conditionaly load styles for sliders
	if( of_get_option('header_slider') == 'oneplus' ) {
		wp_enqueue_style( 'themealley_business-oneplus-style', get_template_directory_uri().'/css/slider-oneplus/oneplus.css' );
	}	
	if( of_get_option('header_slider') == 'two' ) {
		wp_enqueue_style( 'themealley_business-two-style', get_template_directory_uri().'/css/slider-two/cycle-css.css' );
	}	
	if( of_get_option('header_slider') == 'slitslider' ) {
		wp_enqueue_style( 'themealley_business-slitslider-style', get_template_directory_uri().'/css/slitslider/slitslider.css' );
	}
	if( of_get_option('header_slider') == 'fraction' ) {
		wp_enqueue_style( 'themealley_business-fraction-style', get_template_directory_uri().'/css/fraction/fractionslider-style.css' );
		wp_enqueue_style( 'themealley_business-fraction', get_template_directory_uri().'/css/fraction/fractionslider.css' );
	}	
	if( of_get_option('header_slider') == 'hero' ) {
		wp_enqueue_style( 'themealley_business-fraction-style', get_template_directory_uri().'/css/hero/fractionslider-style.css' );
		wp_enqueue_style( 'themealley_business-fraction', get_template_directory_uri().'/css/hero/fractionslider.css' );
	}	
	
	if( of_get_option('skin_style') == 'venom' ) {
		wp_enqueue_style( 'themealley_business-venom-style', get_template_directory_uri().'/skins/venom.css' );
	}
	if( of_get_option('skin_style') == 'radiant' ) {
		wp_enqueue_style( 'themealley_business-radiant-style', get_template_directory_uri().'/skins/radiant.css' );
	}
	if( of_get_option('skin_style') == 'radi' ) {
		wp_enqueue_style( 'themealley_business-radi-style', get_template_directory_uri().'/skins/radi.css' );
	}
	if( of_get_option('skin_style') == 'bizsphere' ) {
		wp_enqueue_style( 'themealley_business-bizsphere-style', get_template_directory_uri().'/skins/bizsphere.css' );
	}
	if( of_get_option('skin_style') == 'bizantine' ) {
		wp_enqueue_style( 'themealley_business-bizantine-style', get_template_directory_uri().'/skins/bizantine.css' );
	}	
	if( of_get_option('skin_style') == 'bizark' ) {
		wp_enqueue_style( 'themealley_business-bizark-style', get_template_directory_uri().'/skins/bizark.css' );
	}
	if( of_get_option('skin_style') == 'bizkit' ) {
		wp_enqueue_style( 'themealley_business-bizflare-style', get_template_directory_uri().'/skins/bizkit.css' );
	}
	if( of_get_option('skin_style') == 'bizflare' ) {
		wp_enqueue_style( 'themealley_business-bizflare-style', get_template_directory_uri().'/skins/bizflare.css' );
	}
	if( of_get_option('skin_style') == 'cleo' ) {
		wp_enqueue_style( 'themealley_business-bizflare-style', get_template_directory_uri().'/skins/cleo.css' );
	}								
	
	wp_enqueue_script('jquery');
	//wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array(), false, false );
	if( of_get_option('header_slider') == 'slitslider' ) {		
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', array(), false, false );
	}
	if( of_get_option('header_slider') == 'fraction' ) {		
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/fraction/jquery-1.9.0.min.js', array(), false, false );
	}	
	if( of_get_option('header_slider') == 'hero' ) {		
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/hero/jquery-1.9.0.min.js', array(), false, false );
	}
	if( of_get_option('homepage_layout') == 'bseven' || of_get_option('homepage_layout') == 'beight' ) {
		wp_enqueue_script( 'bseven-eight-work-modernizer', get_template_directory_uri().'/js/hoverdir/modernizr.custom.97074.js', array(), false, false );		
		wp_enqueue_script( 'bseven-eight-work', get_template_directory_uri().'/js/hoverdir/jquery.hoverdir.js', array(), false, false );
	}		
	//wp_enqueue_style( 'themealley_business-font-opensans', '//fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext,cyrillic-ext,greek-ext,cyrillic,greek,vietnamese' );
	
	//wp_enqueue_style( 'themealley_business-font-titillium', '//fonts.googleapis.com/css?family=Titillium+Web:600&subset=latin,latin-ext' );	

	//wp_enqueue_script( 'themealley_business-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'themealley_business-tinynav', get_template_directory_uri() . '/js/tinynav.min.js', array(), false, false );
	
	wp_enqueue_script( 'themealley_business-general', get_template_directory_uri() . '/js/general.js', array(), false, true );

	wp_enqueue_script( 'themealley_business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'themealley_business-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	// Lets conditionaly load scripts for sliders
	if( of_get_option('header_slider') == 'oneplus' ) {
		wp_enqueue_script( 'themealley_business-oneplus', get_template_directory_uri() . '/js/slider-oneplus/oneplus.js', array(), false, false );
		wp_enqueue_script( 'themealley_business-oneplus-init', get_template_directory_uri() . '/js/slider-oneplus/oneplus-init.js', array(), false, true );
	}	
	if( of_get_option('header_slider') == 'two' ) {
		wp_enqueue_script( 'themealley_business-oneplus', get_template_directory_uri() . '/js/slider-two/jquery.cycle2.min.js', array(), false, false );
		wp_enqueue_script( 'themealley_business-oneplus-init', get_template_directory_uri() . '/js/slider-two/cycle2.int.js', array(), false, true );
	}	
	if( of_get_option('header_slider') == 'slitslider' ) {
		wp_enqueue_script( 'themealley_business-slitslider-modernzr', get_template_directory_uri() . '/js/slitslider/modernizr.custom.79639.js', array(), false, false );		
		
		wp_enqueue_script( 'themealley_business-slitslider-cond', get_template_directory_uri() . '/js/slitslider/jquery.ba-cond.min.js', array(), false, false );
		wp_enqueue_script( 'themealley_business-slitslider', get_template_directory_uri() . '/js/slitslider/jquery.slitslider.js', array(), false, false );
		wp_enqueue_script( 'themealley_business-slitslider-init', get_template_directory_uri() . '/js/slitslider/slitslider.init.js', array(), false, true );
	}
	if( of_get_option('header_slider') == 'fraction' ) {
		wp_enqueue_script( 'themealley_business-fraction', get_template_directory_uri() . '/js/fraction/jquery.fractionslider.js', array(), false, false );
		wp_enqueue_script( 'themealley_business-fraction-init', get_template_directory_uri() . '/js/fraction/fraction-init.js', array(), false, true );
	}	
	if( of_get_option('header_slider') == 'hero' ) {
		wp_enqueue_script( 'themealley_business-fraction', get_template_directory_uri() . '/js/hero/jquery.fractionslider.js', array(), false, false );
		wp_enqueue_script( 'themealley_business-fraction-init', get_template_directory_uri() . '/js/hero/fraction-init.js', array(), false, true );
	}	
	if( of_get_option('homepage_layout') == 'bseven' ) {
		wp_enqueue_script( 'themealley_business-bseven-init', get_template_directory_uri() . '/js/bseven.init.js', array(), false, true );
	}
	if( of_get_option('homepage_layout') == 'beight' ) {
		wp_enqueue_script( 'themealley_business-bseven-init', get_template_directory_uri() . '/js/beight.init.js', array(), false, true );
	}	

	/* Modal windows on home slider
	 *	http://getbootstrap.com/javascript/#modals
	 */
	if(is_home() || is_front_page()) {
		wp_enqueue_script( 'modals', get_template_directory_uri() . '/js/modal.js', array(), false, true );
	}		
			
}
add_action( 'wp_enqueue_scripts', 'themealley_business_scripts' );

function themealley_business_scripts_ltie9() {
	echo "<!--[if lt IE 9]>
<link rel='stylesheet' href='".get_template_directory_uri()."/css/fixed.css' type='text/css' media='all' />
<![endif]-->";
	echo "<!--[if lt IE 8]>
<link rel='stylesheet' href='".get_template_directory_uri()."/css/ie.css' type='text/css' media='all' />
<![endif]-->";
}
add_action( 'wp_head', 'themealley_business_scripts_ltie9', 9 );
/**
 * Implement the Custom Header feature.
 */
if( of_get_option('header_slider') == 'slitslider' ) {
function themealley_business_slitslider_bg() {
	echo '<style type="text/css">';
	if( of_get_option('slitslider_slide1_image') ){
		echo '.bg-img-1 {background-image: url('.of_get_option('slitslider_slide1_image').');}';
	}else {
		echo '.bg-img-1 {background-image: url('.get_template_directory_uri().'/css/slitslider/images/1c.jpg);}';	
	}
	if( of_get_option('slitslider_slide2_image') ){
		echo '.bg-img-2 {background-image: url('.of_get_option('slitslider_slide2_image').');}';
	}else {
		echo '.bg-img-2 {background-image: url('.get_template_directory_uri().'/css/slitslider/images/2a.jpg);}';	
	}	
	if( of_get_option('slitslider_slide3_image') ){
		echo '.bg-img-3 {background-image: url('.of_get_option('slitslider_slide3_image').');}';
	}	
	if( of_get_option('slitslider_slide4_image') ){
		echo '.bg-img-4 {background-image: url('.of_get_option('slitslider_slide4_image').');}';
	}
	if( of_get_option('slitslider_slide5_image') ){
		echo '.bg-img-5 {background-image: url('.of_get_option('slitslider_slide5_image').');}';
	}
	if( of_get_option('slitslider_slide6_image') ){
		echo '.bg-img-6 {background-image: url('.of_get_option('slitslider_slide6_image').');}';
	}
	if( of_get_option('slitslider_slide7_image') ){
		echo '.bg-img-7 {background-image: url('.of_get_option('slitslider_slide7_image').');}';
	}	
	if( of_get_option('slitslider_slide8_image') ){
		echo '.bg-img-8 {background-image: url('.of_get_option('slitslider_slide8_image').');}';
	}
	if( of_get_option('slitslider_slide9_image') ){
		echo '.bg-img-9 {background-image: url('.of_get_option('slitslider_slide9_image').');}';
	}
	if( of_get_option('slitslider_slide10_image') ){
		echo '.bg-img-10 {background-image: url('.of_get_option('slitslider_slide10_image').');}';
	}			
	echo '</style>';
}
add_action('wp_head','themealley_business_slitslider_bg');
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/font-customization.php';
if( of_get_option('homepage_layout') == 'bone' ){
	require get_template_directory() . '/inc/customizer/customizer-bone.php';									
}
if( of_get_option('homepage_layout') == 'boneplus' ){
	require get_template_directory() . '/inc/customizer/customizer-boneplus.php';										
}
if( of_get_option('homepage_layout') == 'btwo' ){
	require get_template_directory() . '/inc/customizer/customizer-btwo.php';								
}
if( of_get_option('homepage_layout') == 'bthree' ){
	require get_template_directory() . '/inc/customizer/customizer-bthree.php';	
}
if( of_get_option('homepage_layout') == 'bfour' ){
	require get_template_directory() . '/inc/customizer/customizer-bfour.php';	
}
if( of_get_option('homepage_layout') == 'bfive' ){
	require get_template_directory() . '/inc/customizer/customizer-bfive.php';	
}
if( of_get_option('homepage_layout') == 'bsix' ){
	require get_template_directory() . '/inc/customizer/customizer-bsix.php';
}
if( of_get_option('homepage_layout') == 'bseven' ){
	require get_template_directory() . '/inc/customizer/customizer-bseven.php';
}
if( of_get_option('homepage_layout') == 'beight' ){
	require get_template_directory() . '/inc/customizer/customizer-beight.php';	
}
if( of_get_option('homepage_layout') == 'bnine' ){
	require get_template_directory() . '/inc/customizer/customizer-bnine.php';
}
if( of_get_option('homepage_layout') == 'bsix' || of_get_option('homepage_layout') == 'boneplus' || of_get_option('homepage_layout') == 'bthree' || of_get_option('homepage_layout') == 'bfour' || of_get_option('homepage_layout') == 'bseven' || of_get_option('homepage_layout') == 'beight' ){
	require get_template_directory() . '/inc/customizer/customizer-footer-quote.php';
}
require get_template_directory() . '/inc/customizer/customizer-post.php';
require get_template_directory() . '/inc/customizer/customizer-portfolio.php';
require get_template_directory() . '/inc/customizer/customizer-contact-form-7.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Meta Boxes file.
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_themealley_business_';
	
	$meta_boxes[] = array(
		'id'         => 'ThemeAlley_Business_homelayout_metabox',
		'title'      => 'Home Layout Options',
		'pages'      => array( 'page', 'post' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(	
		
			array(
				'name' => 'Product Order',
				'desc' => 'Enter a number, Product items will be ordered using this number. Lower the number, earlier it appears. Leave it empty to not show it in home page.',
				'id'   => $prefix . 'homelayout_product_order',
				'type' => 'text_small',
			),
			array(
				'name' => 'Services Order',
				'desc' => 'Enter a number, Service items will be ordered using this number. Lower the number, earlier it appears. Leave it empty to not show it in home page. Will only be used in B5 home layout',
				'id'   => $prefix . 'homelayout_services_order',
				'type' => 'text_small',
			),
			array(
				'name' => 'Title',
				'desc' => 'Enter a title if you do not to use default post/page title.',
				'id'   => $prefix . 'homelayout_product_title',
				'type' => 'text_medium',
			),							
			array(
				'name' => 'Upload Image',
				'desc' => 'Upload an 550x370 image or enter an URL.',
				'id'   => $prefix . 'homelayout_image',
				'type' => 'file',
			),
			array(
				'name' => 'Description',
				'desc' => 'You can add UL, LI, A tags. If nothing is entered here, Excert created from post/page content will be used.',
				'id'   => $prefix . 'homelayout_description',
				'type' => 'textarea_code',
			),
			array(
				'name' => 'CTA Text',
				'desc' => 'Enter your CTA text, else default text you entered in theme options page Will be shown.',
				'id'   => $prefix . 'homelayout_cta',

				'type' => 'text_small',
			),	
			array(
				'name' => 'CTA Url',
				'desc' => 'Enter your URL, else permalink of this post/page Will be shown.',
				'id'   => $prefix . 'homelayout_cta_url',
				'type' => 'text_medium',
			),
			array(
				'name' => 'Do not Link Image and Title?',
				'desc' => 'Checking this will not link product/service title and image.',
				'id'   => $prefix . 'homepage_link_title',
				'type' => 'checkbox',
			),				
		
		),
	);		

	// Add other metaboxes as needed	

	$meta_boxes[] = array(
		'id'         => 'ThemeAlley_Business_portfolio_metabox',
		'title'      => 'Portfolio Options',
		'pages'      => array( 'page', 'post' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(

			array(
				'name' => 'Portfolio Order',
				'desc' => 'Enter a number, Portfolio will be ordered using this number. Lower the number, earlier it appears. Leave it empty to not show it in portfolio page.',
				'id'   => $prefix . 'portfolio_order',
				'type' => 'text_small',
			),
			array(
				'name' => 'Title',
				'desc' => 'Enter a title if you do not to use default post/page title.',
				'id'   => $prefix . 'portfolio_title',
				'type' => 'text_medium',
			),					
			array(
				'name' => 'Upload Image for Portfolio',
				'desc' => 'Upload an 550x370 image or enter an URL.',
				'id'   => $prefix . 'portfolio_image',
				'type' => 'file',
			),
			array(
				'name' => 'Description',
				'desc' => 'You can add UL, LI, A tags. If nothing is entered here, Excert created from post/page content will be used.',
				'id'   => $prefix . 'portfolio_description',
				'type' => 'textarea_code',
			),
			array(
				'name' => 'CTA Text',
				'desc' => 'Enter your CTA text, else default text you entered in theme options page Will be shown.',
				'id'   => $prefix . 'portfolio_cta',
				'type' => 'text_small',
			),	
			array(
				'name' => 'CTA Url',
				'desc' => 'Enter your URL, else permalink of this post/page Will be shown.',
				'id'   => $prefix . 'portfolio_cta_url',
				'type' => 'text_medium',
			),											
							
		),
	);

	// Add other metaboxes as needed
	
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once '/inc/metabox/init.php';

}

require get_template_directory(). '/inc/metabox/init.php';

/**
 * Backup menu incase menu isn't set.
 */
function themealley_business_backupmenu() {
	 	if ( current_user_can('edit_theme_options') ) {
				echo '<ul id="main-nav" class="menu">
							<li class="menu-item current-menu-item current_page_item menu-item-home">
								<a href="'.get_admin_url().'nav-menus.php">'.__("Select a Menu to appear here in Dashboard->Appearance->Menus ", "themealley_business").'</a>
							</li>
		
						</ul>	';
		} else {
				echo '<ul id="main-nav" class="menu">
							<li class="menu-item current-menu-item current_page_item menu-item-home">
								<a href="'.esc_url( get_home_url() ).'">'.__("Home", "themealley_business").'</a>
							</li>
		
						</ul>	';			
		}
}

/**
 * Get youtube id from youtube link.
 */
function themealley_business_quickYouTubeId($youtubeurl) {
	 	preg_match("#[a-zA-Z0-9-_]{11}#", $youtubeurl, $id);
		return (strlen($id[0])==11) ? $id[0] : false;
}
/**
 * Get limited string.
 */
function themealley_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		
	} else {
		echo $excerpt;
	}
}

$themealley_business_allwedtags = array(
	'a' => array(
			'href' => array(),
			'title' => array()
	),
	'br' => array(),
	'em' => array(),
	'strong' => array(),
	'ul' => array(),
	'li' => array(),
);
$themealley_business_mapallwedtags = array(
	'iframe' => array(
		'src' => array(),
		'height' => array(),
		'width' => array(),
		'frameborder' => array(),
		'scrolling' => array(),
		'marginheight' => array(),
		'marginwidth' => array(),
	),
	'a' => array(
			'href' => array(),
			'title' => array()
	),
	'br' => array(),	
);
/**
 * Add default options and show Options Panel after theme activation.
 */
if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	
	//Do redirect

	wp_redirect( admin_url( 'admin.php?page=options-framework' ) ); exit;
	
}