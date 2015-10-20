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
<script src="//cdn.optimizely.com/js/2357790413.js"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<meta name="google-site-verification" content="r5QLKK8nnscoefQJY4MskimZU9K-gjIiUzgvzEYdlDY" />
<meta name="Description" content="Hundreds of schools use SchoolMint's secure, online student registration  and data analytics solution to save time and costs associated with admissions, lottery, waitlist management, registration and SIS exports." />
<meta name="Keywords"  content="Home :: Online school registration, charter schools lottery, online application, waitlist management, enrollment progress, enrollment tracker,  application, re/enrollment and admission solutions, SchoolMint, Common Enrollment, Universal Enrollment, Philadelphia Enrollment, Charter Schools Lottery, school registration forms, School Choice, School Match, Parent School Communication, Mobile Enrollment, wait-list management, schoolmint.com, district enrollment" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if( of_get_option('favicon_image') ) : ?>
<link rel="icon" type="image/png" href="<?php echo of_get_option('favicon_image'); ?>" />
<?php endif; ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->

<?php wp_head(); ?>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('button.navbar-toggle').click(function(){
            if (jQuery('div.navbar-ex7-collapse').hasClass('in')) jQuery('div.navbar-ex7-collapse').removeClass('in');
            else jQuery('div.navbar-ex7-collapse').addClass('in');
        });
    });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49927009-1', 'schoolmint.com');
  ga('require', 'displayfeatures');

  ga('send', 'pageview');

</script>
<!--Start of Zopim Live Chat Script-->
<!--<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2QR30oKkUwlUVAPgmd35YrNr30Bji6o5';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>-->
<!--End of Zopim Live Chat Script-->

</head>

<body <?php body_class(); ?>>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<iframe src="http://go.pardot.com/l/105592/2015-10-16/26bxv" width="100%" height="300" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
    </div>
  </div>
</div>
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
    
                <div class="site-branding" >
                	
                    <?php if( of_get_option('logo_image') ) : ?>
                    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_bloginfo( 'template_directory' ) ?>/images/schoolmint-logo-footer.png<?php //echo of_get_option('logo_image'); ?>" /></a>
                    <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                    
                </div>
                
            </div>
            
            <div class="site-header-half-width-nav">


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
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'main-nav1', 'container'=>'', 'depth'=>0) ); ?>
</div> 
</nav>

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
			<form accept-charset="UTF-8" method="post" action="http://go.pardot.com/l/105592/2015-10-16/26bxv" class="form" id="pardot-form">

<style type="text/css">
form.form p label { color: #000000; }
</style>





	
		
		
		
			<p class="form-field  first_name pd-text required    ">
				
					<label class="field-label" for="105592_8331pi_105592_8331">First Name</label>
				
				
				<input type="text" name="105592_8331pi_105592_8331" id="105592_8331pi_105592_8331" value="" class="text" size="30" maxlength="40" onchange="">
				
			</p>
			<div id="error_for_105592_8331pi_105592_8331" style="display:none"></div>
			
		
			<p class="form-field  last_name pd-text required    ">
				
					<label class="field-label" for="105592_8333pi_105592_8333">Last Name</label>
				
				
				<input type="text" name="105592_8333pi_105592_8333" id="105592_8333pi_105592_8333" value="" class="text" size="30" maxlength="80" onchange="">
				
			</p>
			<div id="error_for_105592_8333pi_105592_8333" style="display:none"></div>
			
		
			<p class="form-field  company pd-text     ">
				
					<label class="field-label" for="105592_8335pi_105592_8335">School org</label>
				
				
				<input type="text" name="105592_8335pi_105592_8335" id="105592_8335pi_105592_8335" value="" class="text" size="30" maxlength="255" onchange="">
				
			</p>
			<div id="error_for_105592_8335pi_105592_8335" style="display:none"></div>
			
		
			<p class="form-field  email pd-text required    ">
				
					<label class="field-label" for="105592_8337pi_105592_8337">Email</label>
				
				
				<input type="text" name="105592_8337pi_105592_8337" id="105592_8337pi_105592_8337" value="" class="text" size="30" maxlength="255" onchange="piAjax.auditEmailField(this, 105592, 8337, 953935);">
				
			</p>
			<div id="error_for_105592_8337pi_105592_8337" style="display:none"></div>
			
		
		
		
	<p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
		<label for="pi_extra_field">Comments</label>
		<input type="text" name="pi_extra_field" id="pi_extra_field">
	</p>
		
		
		<!-- forces IE5-8 to correctly submit UTF8 content  -->
		<input name="_utf8" type="hidden" value="☃">
		
		<p class="submit">
			<input type="submit" accesskey="s" value="Submit">
		</p>
	
	


<script type="text/javascript">
//<![CDATA[

	var anchors = document.getElementsByTagName("a");
	for (var i=0; i<anchors.length; i++) {
		var anchor = anchors[i];
		if(anchor.getAttribute("href")&&!anchor.getAttribute("target")) {
			anchor.target = "_top";
		}
	}
		
//]]>
</script>
<input type="hidden" name="hiddenDependentFields" id="hiddenDependentFields" value=""></form>
