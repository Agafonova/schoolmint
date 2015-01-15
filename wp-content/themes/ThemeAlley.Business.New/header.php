<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package themealley_business
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if( of_get_option('favicon_image') ) : ?>
<link rel="icon" type="image/png" href="<?php echo of_get_option('favicon_image'); ?>" />
<?php endif; ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->

<?php wp_head(); ?>
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<script>
    jQuery(document).ready(function(){
        jQuery('button.navbar-toggle').click(function(){
            if (jQuery('div.navbar-ex7-collapse').hasClass('in')) jQuery('div.navbar-ex7-collapse').removeClass('in');
            else jQuery('div.navbar-ex7-collapse').addClass('in');
        });
    });
</script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper-one">
<div id="wrapper-two">
<div id="wrapper-three">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
    <div class="header-social">
        
       <div class="responsive-container">
            
            
       </div>
        
    </div> 
       
	<header id="masthead" class="site-header" role="banner">
    
    	<div class="responsive-container">
        
        <?php if( !of_get_option('logo_layout_style') || of_get_option('logo_layout_style') == 'sbys' ) : ?>
        
        	<div class="site-header-half-width-logo">
    
                <div class="site-branding">
                	
                    <?php if( of_get_option('logo_image') ) : ?>
                    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option('logo_image'); ?>" /></a>
                    <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                    
                </div>
                
            </div>
            
            <div class="site-header-half-width-nav">

<!---->
<nav role="navigation" class="navbar navbar-static-top">
 
<div class="navbar-header">
<button data-target=".navbar-ex7-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>
 
<div class="navbar-collapse navbar-ex7-collapse collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>features">Features</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About us</a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact us</a></li>
</ul>
</div> 
</nav>
    <!---->
             <!--   <nav id="site-navigation" class="main-navigation" role="navigation">
                    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'themealley_business' ); ?>"><?php _e( 'Skip to content', 'themealley_business' ); ?></a></div>
        
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'themealley_business_backupmenu'  ) ); ?>
                </nav><!-- #site-navigation -->
                
            </div>                
            
        <?php else : ?>
        
            <div class="site-branding">
            
            	<?php if( of_get_option('logo_image') ) : ?>
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option('logo_image'); ?>" /></a>
                <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php endif; ?>
                
            </div>
			
           <?php if( of_get_option('skin_style') != 'venom' && of_get_option('skin_style') != 'radiant' && of_get_option('skin_style') != 'bizantine' && of_get_option('skin_style') != 'bizkit' ) : ?>
            <nav id="site-navigation" class="main-navigation nav-border-top" role="navigation">
                    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'themealley_business' ); ?>"><?php _e( 'Skip to content', 'themealley_business' ); ?></a></div>
        
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'themealley_business_backupmenu'  ) ); ?>
            </nav><!-- #site-navigation --> 
            <?php endif; ?>   
        
        <?php endif; ?>
            
    	</div><!-- #Responsive-Container -->            
            
	</header><!-- #masthead -->
    
    <div id="inner-container">
    
    <?php if( of_get_option('logo_layout_style') == 'onebone' ) : ?>
    <?php if( of_get_option('skin_style') == 'venom' || of_get_option('skin_style') == 'radiant' || of_get_option('skin_style') == 'bizantine' || of_get_option('skin_style') == 'bizkit' ) : ?>
    <div class="main-navigation-inner">
    
        <nav id="site-navigation" class="main-navigation" role="navigation">
                        <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'themealley_business' ); ?>"><?php _e( 'Skip to content', 'themealley_business' ); ?></a></div>
            
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'themealley_business_backupmenu'  ) ); ?>
        </nav><!-- #site-navigation -->
        
    </div>
    <?php endif; ?>
    <?php endif; ?>    
    
	<?php 
		
		if( is_front_page() && ( !of_get_option('show_slider_home') || of_get_option('show_slider_home') == 'true' ) ) {
			get_template_part( 'slider' );
		}
				
		if( ( (is_page() && !is_front_page() ) || is_404() ) && ( !of_get_option('show_slider_page') || of_get_option('show_slider_page') == 'true' ) ) {
			get_template_part( 'slider' );
		}
		
		if( ( is_single() ) && ( !of_get_option('show_slider_single') || of_get_option('show_slider_single') == 'true' ) ) {
			get_template_part( 'slider' );
		}
		
		if( ( is_archive() || ( is_home() && !is_front_page() ) ) && ( !of_get_option('show_slider_archive') || of_get_option('show_slider_archive') == 'true' ) ) {
			get_template_part( 'slider' );
		}
		
	?>

    <?php if( is_front_page() && of_get_option('homepage_layout') == 'bsix' && ( !of_get_option('show_bsix_welcome_section') || of_get_option('show_bsix_welcome_section') == 'true' ) ) : ?>
		<?php get_template_part( 'bizsix', 'welcome' ); ?> 
    <?php endif; ?>
        
	<div id="main" class="site-main">
        
    	<div class="responsive-container">    
        
    		<div class="content-container">         
