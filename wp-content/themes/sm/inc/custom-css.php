<?php

function themealley_business_custom_css() { ?>             
<style  type="text/css">
<?php if( get_theme_mod( 'themealley_business_body_font_family' ) && get_theme_mod( 'themealley_business_body_font_family' ) != 'Select a Font' ) : ?>
body,
button,
input,
select,
textarea,
.site-description {
	font-family: '<?php echo get_theme_mod( 'themealley_business_body_font_family' ); ?>';
}
<?php endif; ?>

<?php if( get_theme_mod( 'themealley_business_body_color' ) ) : ?>
body,
button,
input,
select,
textarea,
.site-description {
	color:<?php echo get_theme_mod( 'themealley_business_body_color' ); ?>;
}
<?php endif; ?>

<?php if( get_theme_mod( 'themealley_business_logo_font' ) && get_theme_mod( 'themealley_business_logo_font' ) != 'Select a Font' ) : ?>
.site-title a, 
.site-title a:visited,
.site-info h3,
.site-info-three h3,
.footer-six-address h3{
	font-family: '<?php echo get_theme_mod( 'themealley_business_logo_font' ); ?>';
}
<?php endif; ?>

<?php if( get_theme_mod( 'themealley_business_heading_font_family' ) && get_theme_mod( 'themealley_business_heading_font_family' ) != 'Select a Font' ) : ?>
h1,h2,h3,h4,h5,h6,
.site-slider-slider-one-text-heading,
.site-slider-slider-one-text-button a,
.site-slider-slider-one-text-button span,
.site-slider-slider-oneplus-text-heading,
.site-slider-slider-oneplus-text-button a,
.site-slider-slider-oneplus-text-button span,
.site-slider-slider-video-one-text-heading,
.site-slider-slider-video-one-text-button a,
.site-slider-slider-video-one-text-button span,
.site-slider-slider-two-text-heading,
.site-slider-slider-two-text-button a,
.site-slider-slider-two-text-button span,
.cycle-slideshow-captiony h2,
.cycle-slideshow-captiony h2 a,
.hero-heading,
.hero-pitch-text h2,
.hero-pitch-button p a,
.hero-pitch-button p span,
.hero-pane-mobile-title p,
.biz0ne-welcome h1,
.biz0ne-products-services-name,
.biz0neplus-welcome h1,
.biz0neplus-products-services-name,
.biztwo-welcome h1,
.biztwo-products-services-name,
.biztwo-portfolio-heading,
.bizthree-welcome h1,
.bizthree-products-services-name,
.bizfour-welcome h1,
.bizfour-products-services-name,
.bizfive-welcome h1,
.bizfive-products h2,
.bizfive-services h2,
.bizfive-products-services-name,
.bizfive-blog h2,
.bizfive-news-name,
.bizfive-testimonial h2,
.bizsix-welcome h1,
.bizsix-welcome-cta-container span,
.bizsix-quote-text p,
.bizseven-welcome h1,
.bizseven-work-intro h1,
.bizseven-welcome h1,
.bizeight-welcome h2,
.bizeight-products-services-name,
.bizeight-clients h2,
.bizeight-blog h2,
.bizeight-news-name,
.biznine-products-item-title,
.biznine-quote-text,
.biznine-about-inner h1,
.portfolio-one-item-desc-link a, .portfolio-one-item-desc-link a:visited,
.portfolio-two-item-desc-link a, .portfolio-two-item-desc-link a:visited,
.portfolio-three-item-desc-link a, .portfolio-three-item-desc-link a:visited,
.portfolio-four-item-desc-link a, .portfolio-four-item-desc-link a:visited,
.bizseven-work-intro h1,
.bizseven-welcome h1,
.fractionslider .claim,
.fractionslider .middle span,
.fractionslider .button,
.sl-slider blockquote cite a,
.sl-slider blockquote cite span {
	font-family: '<?php echo get_theme_mod( 'themealley_business_heading_font_family' ); ?>';
}
<?php endif; ?>

<?php if( of_get_option('skin_style') == 'bizkit' ) : ?>
#wrapper-two{
	<?php if( get_theme_mod( 'themealley_business_outer_wrapper_bg_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_outer_wrapper_bg_color' ); ?>;
	background-image:none;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_outer_wrapper_bg_image' ) ) : ?>
	background:url(<?php echo get_theme_mod( 'themealley_business_outer_wrapper_bg_image' ); ?>)
	;
	<?php endif; ?>	
}
<?php endif; ?>
.site-header {
	<?php if( get_theme_mod( 'themealley_business_logocontainer_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_logocontainer_color' ); ?>;
	background-image:none;
	<?php endif; ?>	
	<?php if( get_theme_mod( 'themealley_business_logocontainer_bg' ) ) : ?>
	background:url(<?php echo get_theme_mod( 'themealley_business_logocontainer_bg' ); ?>)
	<?php if( get_theme_mod( 'themealley_business_logocontainer_background_repeat' ) ) {
		echo get_theme_mod( 'themealley_business_logocontainer_background_repeat' );
	}
	?>
	<?php if( get_theme_mod( 'themealley_business_logocontainer_background_x' ) ) {
		echo get_theme_mod( 'themealley_business_logocontainer_background_x' );
	}
	?>
	<?php if( get_theme_mod( 'themealley_business_logocontainer_background_y' ) ) {
		echo get_theme_mod( 'themealley_business_logocontainer_background_y' );
	}
	?>		
	;
	<?php endif; ?>	
}
.site-title a, .site-title a:visited, .site-title a:active{
	<?php if( get_theme_mod( 'themealley_business_logo_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_logo_color' ); ?>;
	<?php endif; ?>		
}
.site-description{
	<?php if( get_theme_mod( 'themealley_business_desc_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_desc_color' ); ?>;
	<?php endif; ?>		
}
.site-slider{
	<?php if( get_theme_mod( 'themealley_business_slidercontainer_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_slidercontainer_color' ); ?>;
	background-image:none;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slidercontainer_bg' ) ) : ?>
	background:url(<?php echo get_theme_mod( 'themealley_business_slidercontainer_bg' ); ?>)
	<?php if( get_theme_mod( 'themealley_business_slidercontainer_background_repeat' ) ) {
		echo get_theme_mod( 'themealley_business_slidercontainer_background_repeat' );
	}
	?>
	<?php if( get_theme_mod( 'themealley_business_slidercontainer_background_x' ) ) {
		echo get_theme_mod( 'themealley_business_slidercontainer_background_x' );
	}
	?>
	<?php if( get_theme_mod( 'themealley_business_slidercontainer_background_y' ) ) {
		echo get_theme_mod( 'themealley_business_slidercontainer_background_y' );
	}
	?>		
	;
	<?php endif; ?>	
}
.main-navigation-inner{
	<?php if( get_theme_mod( 'themealley_business_menucontainer_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_menucontainer_color' ); ?>;
	background-image:none;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_menucontainer_bg' ) ) : ?>
	background:url(<?php echo get_theme_mod( 'themealley_business_menucontainer_bg' ); ?>)
	;
	<?php endif; ?>		
}
.main-navigation{
	<?php if( get_theme_mod( 'themealley_business_menucontainer_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_menucontainer_color' ); ?>;
	background-image:none;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_menucontainer_bg' ) ) : ?>
	background:url(<?php echo get_theme_mod( 'themealley_business_menucontainer_bg' ); ?>)
	;
	<?php endif; ?>		
}
.nav-border-top{
	<?php if( get_theme_mod( 'themealley_business_menutopborder_color' ) ) : ?>
	border-top:1px solid <?php echo get_theme_mod( 'themealley_business_menutopborder_color' ); ?>;
	<?php endif; ?>	
}
.main-navigation li:hover {
	<?php if( get_theme_mod( 'themealley_business_menudropdown_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_menudropdown_color' ); ?>;
	<?php endif; ?>		
}
.main-navigation a {
	<?php if( get_theme_mod( 'themealley_business_menutext_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_menutext_color' ); ?>;
	<?php endif; ?>		
}
.main-navigation ul ul {
	<?php if( get_theme_mod( 'themealley_business_menudropdown_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_menudropdown_color' ); ?>;
	<?php endif; ?>	
}
.main-navigation ul ul a {
	<?php if( get_theme_mod( 'themealley_business_menutext_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_menutext_color' ); ?>;
	<?php endif; ?>
}
.main-navigation ul ul li:hover {
	<?php if( get_theme_mod( 'themealley_business_menudropdown_hover_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_menudropdown_hover_color' ); ?>;
	<?php endif; ?>	
}
.main-navigation li.current_page_item,
.main-navigation li.current-menu-item {
	<?php if( get_theme_mod( 'themealley_business_menudropdown_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_menudropdown_color' ); ?>;
	<?php endif; ?>		
}


<?php if( of_get_option('header_slider') == 'one' ) : ?>
/* Slider One Starts Here */
<?php if( get_theme_mod( 'themealley_business_sliderone_title_color' ) ) : ?>
.site-slider-slider-one-text-heading{
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_title_color' ); ?>;
}
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_sliderone_desc_color' ) ) : ?>
.site-slider-slider-one-text-description{
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_desc_color' ); ?>;
}
.site-slider-slider-one-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_desc_color' ); ?>;
}
.site-slider-slider-one-text-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_desc_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_sliderone_desc_liborder_color' ) ) : ?>
.site-slider-slider-one-text-description ul li{
	border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_sliderone_desc_liborder_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_sliderone_desc_color' ) ) : ?>
.site-slider-slider-one-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_desc_color' ); ?>;
}
<?php endif; ?>

.site-slider-slider-one-text-button a{
	<?php if( get_theme_mod( 'themealley_business_sliderone_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_sliderone_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_sliderone_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_sliderone_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_sliderone_button_bg_color' ); ?>;
	<?php endif; ?>
}
.site-slider-slider-one-text-button span{
	<?php if( get_theme_mod( 'themealley_business_sliderone_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_sliderone_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_sliderone_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_sliderone_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_sliderone_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_sliderone_button_bg_color' ); ?>;
	<?php endif; ?>
}
/* Slider One Ends Here */
<?php endif; ?>	

<?php if( of_get_option('header_slider') == 'videoone' ) : ?>
/* Video One Starts Here */
<?php if( get_theme_mod( 'themealley_business_videoone_title_color' ) ) : ?>
.site-slider-slider-video-one-text-heading{
	color:<?php echo get_theme_mod( 'themealley_business_videoone_title_color' ); ?>;
}
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_videoone_desc_color' ) ) : ?>
.site-slider-slider-video-one-text-description{
	color:<?php echo get_theme_mod( 'themealley_business_videoone_desc_color' ); ?>;
}
.site-slider-slider-video-one-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_videoone_desc_color' ); ?>;
}
.site-slider-slider-video-one-text-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_videoone_desc_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_videoone_desc_liborder_color' ) ) : ?>
.site-slider-slider-video-one-text-description ul li{
	border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_videoone_desc_liborder_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_videoone_desc_color' ) ) : ?>
.site-slider-slider-video-one-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_videoone_desc_color' ); ?>;
}
<?php endif; ?>

.site-slider-slider-video-one-text-button a{
	<?php if( get_theme_mod( 'themealley_business_videoone_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_videoone_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_videoone_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_videoone_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_videoone_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_videoone_button_bg_color' ); ?>;
	<?php endif; ?>
}
.site-slider-slider-video-one-text-button span{
	<?php if( get_theme_mod( 'themealley_business_videoone_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_videoone_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_videoone_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_videoone_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_videoone_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_videoone_button_bg_color' ); ?>;
	<?php endif; ?>
}
/* Video One Ends Here */
<?php endif; ?>

<?php if( of_get_option('header_slider') == 'oneplus' ) : ?>
/* Slider OnePlus Starts Here */
<?php if( get_theme_mod( 'themealley_business_slideroneplus_title_color' ) ) : ?>
.site-slider-slider-oneplus-text-heading{
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_title_color' ); ?>;
}
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_slideroneplus_desc_color' ) ) : ?>
.site-slider-slider-oneplus-text-description{
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_desc_color' ); ?>;
}
.site-slider-slider-oneplus-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_desc_color' ); ?>;
}
.site-slider-slider-oneplus-text-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_desc_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_slideroneplus_desc_liborder_color' ) ) : ?>
.site-slider-slider-oneplus-text-description ul li{
	border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_slideroneplus_desc_liborder_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_slideroneplus_desc_color' ) ) : ?>
.site-slider-slider-oneplus-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_desc_color' ); ?>;
}
<?php endif; ?>

.site-slider-slider-oneplus-text-button a{
	<?php if( get_theme_mod( 'themealley_business_slideroneplus_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slideroneplus_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_slideroneplus_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slideroneplus_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slideroneplus_button_bg_color' ); ?>;
	<?php endif; ?>
}
.site-slider-slider-oneplus-text-button span{
	<?php if( get_theme_mod( 'themealley_business_slideroneplus_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slideroneplus_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slideroneplus_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_slideroneplus_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slideroneplus_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slideroneplus_button_bg_color' ); ?>;
	<?php endif; ?>
}
/* Slider OnePlus Ends Here */
<?php endif; ?>	


<?php if( of_get_option('header_slider') == 'two' ) : ?>
/* Slider Two Starts Here */
<?php if( get_theme_mod( 'themealley_business_slidertwo_title_color' ) ) : ?>
.site-slider-slider-two-text-heading{
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_title_color' ); ?>;
}
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_slidertwo_desc_color' ) ) : ?>
.site-slider-slider-two-text-description{
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_desc_color' ); ?>;
}
.site-slider-slider-two-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_desc_color' ); ?>;
}
.site-slider-slider-two-text-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_desc_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_slidertwo_desc_liborder_color' ) ) : ?>
.site-slider-slider-two-text-description ul li{
	border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_slidertwo_desc_liborder_color' ); ?>;
}
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_slidertwo_desc_color' ) ) : ?>
.site-slider-slider-two-text-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_desc_color' ); ?>;
}
<?php endif; ?>

.site-slider-slider-two-text-button a{
	<?php if( get_theme_mod( 'themealley_business_slidertwo_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slidertwo_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_slidertwo_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slidertwo_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slidertwo_button_bg_color' ); ?>;
	<?php endif; ?>
}
.site-slider-slider-two-text-button span{
	<?php if( get_theme_mod( 'themealley_business_slidertwo_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slidertwo_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slidertwo_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_slidertwo_button_border_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slidertwo_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slidertwo_button_bg_color' ); ?>;
	<?php endif; ?>
}
/* Slider Two Ends Here */
<?php endif; ?>	

<?php if( of_get_option('header_slider') == 'slitslider' ) : ?>
/* SlitSlider Starts Here */
.sl-slider h2 span {
	<?php if( get_theme_mod( 'themealley_business_slitslider_title_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slitslider_title_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slitslider_titlebg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slitslider_titlebg_color' ); ?>;
	<?php endif; ?>	
}
.sl-slider blockquote p span{
	<?php if( get_theme_mod( 'themealley_business_slitslider_desc_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slitslider_desc_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slitslider_descbg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slitslider_descbg_color' ); ?>;
	<?php endif; ?>	
}
.sl-slider blockquote cite a{
	<?php if( get_theme_mod( 'themealley_business_slitslider_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slitslider_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slitslider_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slitslider_button_bg_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slitslider_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_slitslider_button_border_color' ); ?>;
	<?php endif; ?>
}
.sl-slider blockquote cite span{
	<?php if( get_theme_mod( 'themealley_business_slitslider_button_link_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_slitslider_button_link_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slitslider_button_bg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_slitslider_button_bg_color' ); ?>;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_slitslider_button_border_color' ) ) : ?>
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_slitslider_button_border_color' ); ?>;
	<?php endif; ?>
}
/* SlitSlider Ends Here */	
<?php endif; ?>

<?php if( of_get_option('header_slider') == 'fraction' ) : ?>
/* Fraction Slider Starts Here */
.fractionslider .brown{
<?php if( get_theme_mod( 'themealley_business_fractionslider_titlebg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_fractionslider_titlebg_color' ); ?>;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_fractionslider_title_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_fractionslider_title_color' ); ?>;
<?php endif; ?>
}
.fractionslider .teaser{
<?php if( get_theme_mod( 'themealley_business_fractionslider_descbg_color' ) ) : ?>
    background:<?php echo get_theme_mod( 'themealley_business_fractionslider_descbg_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_fractionslider_desc_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_fractionslider_desc_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .button{
<?php if( get_theme_mod( 'themealley_business_fractionslider_button_bg_color' ) ) : ?>
    background:<?php echo get_theme_mod( 'themealley_business_fractionslider_button_bg_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_fractionslider_button_border_color' ) ) : ?>
    border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_fractionslider_button_border_color' ); ?>;
<?php endif; ?>	
}
<?php if( get_theme_mod( 'themealley_business_fractionslider_button_link_color' ) ) : ?>
.fractionslider .button a{
    color: <?php echo get_theme_mod( 'themealley_business_fractionslider_button_link_color' ); ?>;
}
<?php endif; ?>
.fractionslider .middle span{
<?php if( get_theme_mod( 'themealley_business_fractionslider_titlebg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_fractionslider_titlebg_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .middle span a{
<?php if( get_theme_mod( 'themealley_business_fractionslider_title_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_fractionslider_title_color' ); ?>;
<?php endif; ?>
}
.fractionslider .middle2 span{
<?php if( get_theme_mod( 'themealley_business_fractionslider_descbg_color' ) ) : ?>
    background:<?php echo get_theme_mod( 'themealley_business_fractionslider_descbg_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_fractionslider_desc_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_fractionslider_desc_color' ); ?>;
<?php endif; ?>	
}
/* Fraction Slider Here */	
<?php endif; ?>

<?php if( of_get_option('header_slider') == 'hero' ) : ?>
/* Hero Slider Starts Here */
.hero-heading{
	color:<?php echo get_theme_mod( 'themealley_business_heroslider_welcome_heading_color' ); ?>;
}
.hero-heading-text{
	color:<?php echo get_theme_mod( 'themealley_business_heroslider_welcome_desc_color' ); ?>;
}
.fractionslider .centerheading, .fractionslider .sidetitle{
<?php if( get_theme_mod( 'themealley_business_heroslider_title_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_title_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .centerdescription, .fractionslider .sidedesc{
<?php if( get_theme_mod( 'themealley_business_heroslider_desc_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_desc_color' ); ?>;
<?php endif; ?>
}
.fractionslider .centeritem, .fractionslider .sideitem{
<?php if( get_theme_mod( 'themealley_business_heroslider_desc_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_desc_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .centeritem:before, .fractionslider .sideitem:before{
<?php if( get_theme_mod( 'themealley_business_heroslider_desc_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_desc_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .centerbutton, .fractionslider .sidebutton{
<?php if( get_theme_mod( 'themealley_business_heroslider_button_bg_color' ) ) : ?>
    background:<?php echo get_theme_mod( 'themealley_business_heroslider_button_bg_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_heroslider_button_border_color' ) ) : ?>
    border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_heroslider_button_border_color' ); ?>;
<?php endif; ?>		
}
.fractionslider .centerbutton a, .fractionslider .sidebutton a{
<?php if( get_theme_mod( 'themealley_business_heroslider_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_button_link_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .centerbutton a:after, .fractionslider .sidebutton a:after{
<?php if( get_theme_mod( 'themealley_business_heroslider_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_button_link_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .centerbutton span, .fractionslider .sidebutton span{
<?php if( get_theme_mod( 'themealley_business_heroslider_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_button_link_color' ); ?>;
<?php endif; ?>	
}
.fractionslider .centerbutton span:after, .fractionslider .sidebutton span:after{
<?php if( get_theme_mod( 'themealley_business_heroslider_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_button_link_color' ); ?>;
<?php endif; ?>	
}
.hero-pitch-container{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_container_bg' ) ) : ?>
    background-color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_container_bg' ); ?>;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_container_bg_image' ); ?>);
<?php endif; ?>
}
.hero-pitch-text h2{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_container_title' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_container_title' ); ?>;
<?php endif; ?>	
}
.hero-pitch-text p{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_container_text' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_container_text' ); ?>;
<?php endif; ?>		
}
.hero-pitch-button p a{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_bg_color' ) ) : ?>
    background:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_bg_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_border_color' ) ) : ?>
    border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_border_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ); ?>;
<?php endif; ?>			
}
.hero-pitch-button p a:after{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ); ?>;
<?php endif; ?>		
}
.hero-pitch-button p span{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_bg_color' ) ) : ?>
    background:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_bg_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_border_color' ) ) : ?>
    border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_border_color' ); ?>;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ); ?>;
<?php endif; ?>		
}
.hero-pitch-button p span:after{
<?php if( get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ) ) : ?>
    color:<?php echo get_theme_mod( 'themealley_business_heroslider_pitch_button_link_color' ); ?>;
<?php endif; ?>		
}
/* Hero Slider Ends Here */	
<?php endif; ?>

/* Main Content Starts Here */
<?php if( of_get_option('skin_style') == 'venom' ) : ?>
#inner-container{
<?php if( get_theme_mod( 'themealley_business_maincontent_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_maincontent_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_maincontent_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_maincontent_bg_image' ); ?>);
<?php endif; ?>		
}
<?php else: ?>
.site-main{
<?php if( get_theme_mod( 'themealley_business_maincontent_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_maincontent_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_maincontent_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_maincontent_bg_image' ); ?>);
<?php endif; ?>		
}
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bone' ) : ?>
/* BizOne Starts */
.biz0ne-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_bone_heading_color' ); ?>;
}
.biz0ne-welcome, .biz0ne-welcome ul li, .biz0ne-welcome ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bone_text_color' ); ?>;
}
.biz0ne-welcome a, .biz0ne-welcome ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bone_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bone_border_color' ) ) : ?>
.biz0ne-welcome ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_bone_border_color' ); ?>;
}
<?php endif; ?>
.biz0ne-products-services-name, .biz0ne-products-services-name a{
	color:<?php echo get_theme_mod( 'themealley_business_bone_products_heading_color' ); ?>;
}
.biz0ne-products-services-description, .biz0ne-products-services-description ul li, .biz0ne-products-services-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bone_products_text_color' ); ?>;
}
.biz0ne-products-services-description a, .biz0ne-products-services-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bone_products_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bone_products_border_color' ) ) : ?>
.biz0ne-products-services-description ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_bone_products_border_color' ); ?>;
}
<?php endif; ?>
.biz0ne-quote{
<?php if( get_theme_mod( 'themealley_business_bone_quote_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bone_quote_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bone_quote_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bone_quote_bg_image' ); ?>);
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_bone_quote_border' ) ) : ?>
    border:1px solid <?php echo get_theme_mod( 'themealley_business_bone_quote_border' ); ?>;
<?php endif; ?>		
}
.biz0ne-quote-text{
	color:<?php echo get_theme_mod( 'themealley_business_bone_quote_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bone_quote_text_bg_image' ) ) : ?>
    background:url(<?php echo get_theme_mod( 'themealley_business_bone_quote_text_bg_image' ); ?>) top left no-repeat;
<?php endif; ?>		
}
.biz0ne-quote-name span{
	background-color:<?php echo get_theme_mod( 'themealley_business_bone_quote_name_bg' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_bone_quote_name_text_color' ); ?>;
}
/* BizOne Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'boneplus' ) : ?>
/* BizOnePlus Starts */
.biz0neplus-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_welcome_heading' ); ?>;
}
.biz0neplus-welcome, .biz0neplus-welcome ul li, .biz0neplus-welcome ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_welcome_text' ); ?>;
}
.biz0neplus-welcome a, .biz0neplus-welcome ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_welcome_link' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_boneplus_welcome_list_border' ) ) : ?>
.biz0neplus-welcome ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_boneplus_welcome_list_border' ); ?>;
}
<?php endif; ?>
.biz0neplus-products-services-item{
<?php if( get_theme_mod( 'themealley_business_boneplus_products_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_boneplus_products_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_boneplus_products_bg_image' ); ?>);
<?php endif; ?>
}
.biz0neplus-products-services-img{
<?php if( get_theme_mod( 'themealley_business_boneplus_products_image_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_image_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_boneplus_products_image_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_boneplus_products_image_bg_image' ); ?>);
<?php endif; ?>	
}
.biz0neplus-products-services-name, .biz0neplus-products-services-name a{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_heading_color' ); ?>;
}
.biz0neplus-products-services-description, .biz0neplus-products-services-description ul li, .biz0neplus-products-services-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_text_color' ); ?>;
}
.biz0neplus-products-services-description a, .biz0neplus-products-services-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_boneplus_products_border_color' ) ) : ?>
.biz0neplus-products-services-description ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_boneplus_products_border_color' ); ?>;
}
<?php endif; ?>
.biz0neplus-products-services-cta{
<?php if( get_theme_mod( 'themealley_business_boneplus_products_cta_container_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_cta_container_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_boneplus_products_cta_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_boneplus_products_cta_container_bg_image' ); ?>);
<?php endif; ?>		
}
.biz0neplus-products-services-cta a, .biz0neplus-products-services-cta span{
<?php if( get_theme_mod( 'themealley_business_boneplus_products_cta_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_cta_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_boneplus_products_cta_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_boneplus_products_cta_bg_image' ); ?>);
<?php endif; ?>	
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_products_cta_color' ); ?>;
}
.biz0neplus-quote{
<?php if( get_theme_mod( 'themealley_business_boneplus_quote_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_boneplus_quote_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_boneplus_quote_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_boneplus_quote_bg_image' ); ?>);
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_boneplus_quote_border' ) ) : ?>
    border:1px solid <?php echo get_theme_mod( 'themealley_business_boneplus_quote_border' ); ?>;
<?php endif; ?>		
}
.biz0neplus-quote-text{
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_quote_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_boneplus_quote_text_bg_image' ) ) : ?>
    background:url(<?php echo get_theme_mod( 'themealley_business_boneplus_quote_text_bg_image' ); ?>) top left no-repeat;
<?php endif; ?>		
}
.biz0neplus-quote-name span{
	background-color:<?php echo get_theme_mod( 'themealley_business_boneplus_quote_name_bg' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_boneplus_quote_name_text_color' ); ?>;
}
/* BizOnePlus Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'btwo' ) : ?>
/* BizTwo Starts */
.biztwo-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_welcome_heading' ); ?>;
}
.biztwo-welcome-desc, .biztwo-welcome-desc ul li, .biztwo-welcome-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_welcome_text' ); ?>;
}
.biztwo-welcome-desc a, .biztwo-welcome-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_welcome_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_btwo_welcome_border_color' ) ) : ?>
.biztwo-welcome-desc ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_btwo_welcome_border_color' ); ?>;
}
<?php endif; ?>
.biztwo-products-services-name, .biztwo-products-services-name a{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_products_heading' ); ?>;
}
.biztwo-products-services-description, .biztwo-products-services-content ul li, .biztwo-products-services-content ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_products_text' ); ?>;
}
.biztwo-products-services-description a, .biztwo-products-services-content ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_products_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_btwo_products_border_color' ) ) : ?>
.biztwo-products-services-content ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_btwo_products_border_color' ); ?>;
}
<?php endif; ?>
.biztwo-quote{
<?php if( get_theme_mod( 'themealley_business_btwo_quote_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_btwo_quote_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_btwo_quote_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_btwo_quote_bg_image' ); ?>);
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_btwo_quote_border' ) ) : ?>
    border:1px solid <?php echo get_theme_mod( 'themealley_business_btwo_quote_border' ); ?>;
<?php endif; ?>		
}
.biz0ne-quote-text{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_quote_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_btwo_quote_text_bg_image' ) ) : ?>
    background:url(<?php echo get_theme_mod( 'themealley_business_btwo_quote_text_bg_image' ); ?>) top left no-repeat;
<?php endif; ?>		
}
.biz0ne-quote-name span{
	background-color:<?php echo get_theme_mod( 'themealley_business_btwo_quote_name_bg' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_btwo_quote_name_text_color' ); ?>;
}
.biztwo-portfolio{
<?php if( get_theme_mod( 'themealley_business_btwo_port_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_btwo_port_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_btwo_port_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_btwo_port_bg_image' ); ?>);
<?php endif; ?>	
}
.biztwo-portfolio-heading{
<?php if( get_theme_mod( 'themealley_business_btwo_port_heading_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_btwo_port_heading_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_btwo_port_heading_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_btwo_port_heading_bg_image' ); ?>);
<?php endif; ?>
	color:<?php echo get_theme_mod( 'themealley_business_btwo_port_heading_color' ); ?>;
}
.biztwo-portfolio-item-name, .biztwo-portfolio-item-name a{
	color:<?php echo get_theme_mod( 'themealley_business_btwo_port_text_color' ); ?>;
}
/* BizTwo Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bthree' ) : ?>
/* BizThree Starts */
.bizthree-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_welcome_heading' ); ?>;
}
.bizthree-welcome-desc, .bizthree-welcome-desc ul li, .bizthree-welcome-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_welcome_text' ); ?>;
}
.bizthree-welcome-desc a, .bizthree-welcome-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_welcome_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bthree_welcome_border_color' ) ) : ?>
.bizthree-welcome-desc ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_bthree_welcome_border_color' ); ?>;
}
<?php endif; ?>
.bizthree-products-services-name, .bizthree-products-services-name a{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_products_heading' ); ?>;
}
.bizthree-products-services-description, .bizthree-products-services-content ul li, .bizthree-products-services-content ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_products_text' ); ?>;
}
.bizthree-products-services-description a, .bizthree-products-services-content ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_products_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bthree_products_border_color' ) ) : ?>
.bizthree-products-services-description ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_bthree_products_border_color' ); ?>;
}
<?php endif; ?>
.bizthree-products-services-divider{
	background:<?php echo get_theme_mod( 'themealley_business_bthree_products_border_color' ); ?>;
}
.bizthree-quote{
<?php if( get_theme_mod( 'themealley_business_bthree_quote_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bthree_quote_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bthree_quote_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bthree_quote_bg_image' ); ?>);
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_bthree_quote_border' ) ) : ?>
    border:1px solid <?php echo get_theme_mod( 'themealley_business_bthree_quote_border' ); ?>;
<?php endif; ?>		
}
.bizthree-quote-text{
	color:<?php echo get_theme_mod( 'themealley_business_bthree_quote_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bthree_quote_text_bg_image' ) ) : ?>
    background:url(<?php echo get_theme_mod( 'themealley_business_bthree_quote_text_bg_image' ); ?>) top left no-repeat;
<?php endif; ?>		
}
.bizthree-quote-name span{
	background-color:<?php echo get_theme_mod( 'themealley_business_bthree_quote_name_bg' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_bthree_quote_name_text_color' ); ?>;
}
/* BizThree Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bfour' ) : ?>
/* BizFour Starts */
.bizfour-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_welcome_heading' ); ?>;
}
.bizfour-welcome, .bizfour-welcome-desc, .bizfour-welcome ul li, .bizfour-welcome ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_welcome_text' ); ?>;
}
.bizfour-welcome-desc a, .bizfour-welcome-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_welcome_link' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bizfour_welcome_list_border' ) ) : ?>
.bizfour-welcome-desc ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_bizfour_welcome_list_border' ); ?>;
}
<?php endif; ?>
.bizfour-products-services-item{
<?php if( get_theme_mod( 'themealley_business_bizfour_products_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfour_products_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfour_products_bg_image' ); ?>);
<?php endif; ?>
}
.bizfour-products-services-img{
<?php if( get_theme_mod( 'themealley_business_bizfour_products_image_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_image_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfour_products_image_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfour_products_image_bg_image' ); ?>);
<?php endif; ?>	
}
.bizfour-products-services-name, .bizfour-products-services-name a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_heading_color' ); ?>;
}
.bizfour-products-services-description, .bizfour-products-services-description ul li, .bizfour-products-services-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_text_color' ); ?>;
}
.bizfour-products-services-description a, .bizfour-products-services-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bizfour_products_border_color' ) ) : ?>
.bizfour-products-services-description ul li{
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_bizfour_products_border_color' ); ?>;
}
<?php endif; ?>
.bizfour-products-services-cta{
<?php if( get_theme_mod( 'themealley_business_bizfour_products_cta_container_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_cta_container_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfour_products_cta_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfour_products_cta_container_bg_image' ); ?>);
<?php endif; ?>		
}
.bizfour-products-services-cta a, .bizfour-products-services-cta span{
<?php if( get_theme_mod( 'themealley_business_bizfour_products_cta_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_cta_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfour_products_cta_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfour_products_cta_bg_image' ); ?>);
<?php endif; ?>	
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_products_cta_color' ); ?>;
}
.bizfour-quote{
<?php if( get_theme_mod( 'themealley_business_bizfour_quote_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfour_quote_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfour_quote_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfour_quote_bg_image' ); ?>);
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_bizfour_quote_border' ) ) : ?>
    border:1px solid <?php echo get_theme_mod( 'themealley_business_bizfour_quote_border' ); ?>;
<?php endif; ?>		
}
.bizfour-quote-text{
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_quote_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bizfour_quote_text_bg_image' ) ) : ?>
    background:url(<?php echo get_theme_mod( 'themealley_business_bizfour_quote_text_bg_image' ); ?>) top left no-repeat;
<?php endif; ?>		
}
.bizfour-quote-name span{
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfour_quote_name_bg' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_bizfour_quote_name_text_color' ); ?>;
}
/* BizFour Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bfive' ) : ?>
/* BizFive Starts */
.bizfive-welcome{
<?php if( get_theme_mod( 'themealley_business_bizfive_welcome_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfive_welcome_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfive_welcome_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfive_welcome_bg_image' ); ?>);
<?php endif; ?>	
}
.bizfive-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_welcome_heading_color' ); ?>;
}
.bizfive-welcome-desc, .bizfive-welcome-desc ul li, .bizfive-welcome-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_welcome_text_color' ); ?>;
}
.bizfive-welcome-desc a, .bizfive-welcome-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_welcome_link_color' ); ?>;
}
.bizfive-welcome-desc ul li{
<?php if( get_theme_mod( 'themealley_business_bizfive_welcome_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_bizfive_welcome_border_color' ); ?>;
<?php endif; ?>
}
.bizfive-products, .bizfive-services{
<?php if( get_theme_mod( 'themealley_business_bizfive_products_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfive_products_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfive_products_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfive_products_bg_image' ); ?>);
<?php endif; ?>	
}
.bizfive-products h2, .bizfive-products-services-name, .bizfive-services h2, .bizfive-products-services-name{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_products_heading_color' ); ?>;
}
.bizfive-products-services-name a, .bizfive-products-services-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_products_link_color' ); ?>;
}
.bizfive-products-description, .bizfive-products-services-description, .bizfive-products-services-description li, bizfive-services-description, .bizfive-products-services-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_products_text_color' ); ?>;
}
.bizfive-products-services-description ul li{
<?php if( get_theme_mod( 'themealley_business_bizfive_products_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_bizfive_products_border_color' ); ?>;
<?php endif; ?>
}
.bizfive-blog{
<?php if( get_theme_mod( 'themealley_business_bizfive_news_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfive_news_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfive_news_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfive_news_bg_image' ); ?>);
<?php endif; ?>		
}
.bizfive-blog h2{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_news_heading_color' ); ?>;
}
.bizfive-news-name a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_news_title_color' ); ?>;
}
.bizfive-news-description{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_news_text_color' ); ?>;
}
.bizfive-news-cta a{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_news_button_link_color' ); ?>;
	background:<?php echo get_theme_mod( 'themealley_business_bizfive_news_button_bg_color' ); ?>;
}
.bizfive-testimonial{
<?php if( get_theme_mod( 'themealley_business_bizfive_testimonial_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfive_testimonial_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfive_testimonial_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfive_testimonial_bg_image' ); ?>);
<?php endif; ?>		
}
.bizfive-testimonial-text{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_testimonial_text_color' ); ?>;	
}
.bizfive-testimonial-name span{
	color:<?php echo get_theme_mod( 'themealley_business_bizfive_testimonial_button_link_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bizfive_testimonial_button_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizfive_testimonial_button_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizfive_testimonial_button_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizfive_testimonial_button_bg_image' ); ?>);
<?php endif; ?>			
}
/* BizFive Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bsix' ) : ?>
/* BizSix Starts */
.bizsix-welcome-container{
<?php if( get_theme_mod( 'themealley_business_bizsix_welcome_container_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizsix_welcome_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_bg_image' ); ?>);
<?php endif; ?>	
}
.bizsix-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_heading_color' ); ?>;	
}
.bizsix-welcome p{
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_text_color' ); ?>;	
}
.bizsix-welcome-cta-container span{
<?php if( get_theme_mod( 'themealley_business_bizsix_welcome_container_button_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_button_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bizsix_welcome_container_button_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_button_bg_image' ); ?>);
<?php endif; ?>	
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_button_link_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bizsix_welcome_container_button_border_color' ) ) : ?> 	
	border-bottom: 4px solid <?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_button_border_color' ); ?>;
<?php endif; ?>	
}
.bizsix-welcome-cta-container span a{
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_welcome_container_button_link_color' ); ?>;
}
.bizsix-products-item-description h2{
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_product_heading_color' ); ?>;
}
.bizsix-products-item-description, .bizsix-products-item-description ul li, .bizsix-products-item-description ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_product_text_color' ); ?>;
}
.bizsix-products-item-description ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_product_link_color' ); ?>;
}
.bizsix-products-item-button a{
	background:<?php echo get_theme_mod( 'themealley_business_bizsix_product_button_bg_color' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_product_button_color' ); ?>;
}
.bizsix-products-item-button span{
	background:<?php echo get_theme_mod( 'themealley_business_bizsix_product_button_bg_color' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_bizsix_product_button_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_bizsix_product_border_color' ) ) : ?>
.bizsix-products-item-top-border{
	border-top: 1px solid <?php echo get_theme_mod( 'themealley_business_bizsix_product_border_color' ); ?>;
}
<?php endif; ?>
/* BizSix Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bseven' ) : ?>
/* BizSeven Starts */
.bizseven-welcome h1{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_heading_color' ); ?>;
}
.bizseven-welcome-desc{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
.bizseven-welcome-desc a{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_link_color' ); ?>;
}
.bizseven-welcome-desc ul li{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bizseven_product_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_bizseven_product_border_color' ); ?>;
<?php endif; ?>	
}
.bizseven-welcome-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_link_color' ); ?>;
}
.bizseven-welcome-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
.bizseven-work-intro h1{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_heading_color' ); ?>;
}
.bizseven-work-intro{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
.bizseven-work-intro-desc{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
.bizseven-work-intro-desc a{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_link_color' ); ?>;
}
.bizseven-work-intro-desc ul li{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bizseven_product_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_bizseven_product_border_color' ); ?>;
<?php endif; ?>		
}
.bizseven-work-intro-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_link_color' ); ?>;
}
.bizseven-work-intro-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
.bizseven-about-title h1{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_heading_color' ); ?>;
}
.bizseven-about-content{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
.bizseven-about-content a{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_link_color' ); ?>;
}
.bizseven-about-content ul li{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bizseven_product_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_bizseven_product_border_color' ); ?>;
<?php endif; ?>	
}
.bizseven-about-content ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_link_color' ); ?>;
}
.bizseven-about-content ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bizseven_product_text_color' ); ?>;
}
/* BizSeven Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'beight' ) : ?>
/* BizEight Starts */
.bizeight-welcome{
<?php if( get_theme_mod( 'themealley_business_beight_left_container_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_beight_left_container_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_beight_left_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_beight_left_container_bg_image' ); ?>);
<?php endif; ?>		
}
.bizeight-welcome h2{
	color:<?php echo get_theme_mod( 'themealley_business_beight_left_heading_color' ); ?>;
}
.bizeight-products-description{
	color:<?php echo get_theme_mod( 'themealley_business_beight_left_welcome_text_color' ); ?>;
}
.bizeight-products-services-name, .bizeight-products-services-name a{
	color:<?php echo get_theme_mod( 'themealley_business_beight_left_title_color' ); ?>;
}
.bizeight-products-services-description, .bizeight-products-services-description li, .bizeight-products-services-description li:before{
	color:<?php echo get_theme_mod( 'themealley_business_beight_left_text_color' ); ?>;
}
.bizeight-products-services-description a, .bizeight-products-services-description li a{
	color:<?php echo get_theme_mod( 'themealley_business_beight_left_link_color' ); ?>;
}
.bizeight-products-services-description ul li{
<?php if( get_theme_mod( 'themealley_business_beight_left_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_beight_left_border_color' ); ?>;
<?php endif; ?>	
}
.bizeight-clients{
<?php if( get_theme_mod( 'themealley_business_beight_center_container_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_beight_center_container_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_beight_center_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_beight_center_container_bg_image' ); ?>);
<?php endif; ?>	
}
.bizeight-clients h2{
	color:<?php echo get_theme_mod( 'themealley_business_beight_center_heading_color' ); ?>;
}
.bizeight-blog{
<?php if( get_theme_mod( 'themealley_business_beight_right_container_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_beight_right_container_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_beight_right_container_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_beight_right_container_bg_image' ); ?>);
<?php endif; ?>		
}
.bizeight-blog h2{
	color:<?php echo get_theme_mod( 'themealley_business_beight_right_container_heading_color' ); ?>;
}
.bizeight-news-name a{
	color:<?php echo get_theme_mod( 'themealley_business_beight_right_news_heading_color' ); ?>;
}
.bizeight-news-description{
	color:<?php echo get_theme_mod( 'themealley_business_beight_right_container_text_color' ); ?>;
}
.bizeight-news-cta a{
<?php if( get_theme_mod( 'themealley_business_beight_right_button_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_beight_right_button_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_beight_right_button_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_beight_right_button_bg_image' ); ?>);
<?php endif; ?>		
	color:<?php echo get_theme_mod( 'themealley_business_beight_right_container_button_text_color' ); ?>;
}
/* BizEight Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'bnine' ) : ?>
/* BizNine Starts */
.biznine-products{
<?php if( get_theme_mod( 'themealley_business_bnine_products_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bnine_products_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bnine_products_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bnine_products_bg_image' ); ?>);
<?php endif; ?>		
}
.biznine-products-item-title, .biznine-products-item-title a{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_products_heading_color' ); ?>;	
}
.biznine-products-item-desc{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_products_text_color' ); ?>;
}
.biznine-products-item-desc ul{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_products_text_color' ); ?>;
}
.biznine-products-item-desc ul li{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_products_text_color' ); ?>;
}
.biznine-products-item-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_products_text_color' ); ?>;
}
.biznine-products-item-desc a, .biznine-products-item-desc ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_products_link_color' ); ?>;
}
.biznine-quote{
<?php if( get_theme_mod( 'themealley_business_bnine_quote_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bnine_quote_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bnine_quote_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bnine_quote_bg_image' ); ?>);
<?php endif; ?>	
}
.biznine-quote-text{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_quote_text_color' ); ?>;	
}
.biznine-quote-name span{
<?php if( get_theme_mod( 'themealley_business_bnine_quote_name_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bnine_quote_name_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bnine_quote_name_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bnine_quote_name_bg_image' ); ?>);
<?php endif; ?>
	color:<?php echo get_theme_mod( 'themealley_business_bnine_quote_name_text_color' ); ?>;	
}
.biznine-about{
<?php if( get_theme_mod( 'themealley_business_bnine_about_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bnine_about_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bnine_about_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bnine_about_bg_image' ); ?>);
<?php endif; ?>
}
.biznine-about-inner h1{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_about_heading_color' ); ?>;
}
.biznine-about-inner-content {
	color:<?php echo get_theme_mod( 'themealley_business_bnine_about_text_color' ); ?>;
}
.biznine-about-inner-content ul li{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_about_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_bnine_about_border_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_bnine_about_border_color' ); ?>;
<?php endif; ?>		
}
.biznine-about-inner-content ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_about_text_color' ); ?>;
}
.biznine-about-inner-content a, .biznine-about-inner-content ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_bnine_about_link_color' ); ?>;
}
.biznine-clients{
<?php if( get_theme_mod( 'themealley_business_bnine_logos_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_bnine_logos_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_bnine_logos_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_bnine_logos_bg_image' ); ?>);
<?php endif; ?>	
}
/* BizNine Ends */
<?php endif; ?>

<?php if( of_get_option('homepage_layout') == 'spage' ) : ?>
/* Standard Layout Starts */

/* Standard Layout Ends */
<?php endif; ?>

/* Posts-Pages-Sidebars Starts*/
.post .entry-title, .entry-meta, .entry-meta-bottom-item {
<?php if( get_theme_mod( 'themealley_business_post_page_accent_color' ) ) : ?>
    border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;
<?php endif; ?>
	color:<?php echo get_theme_mod( 'themealley_business_post_page_content_color' ); ?>;
}
.entry-meta-bottom{
<?php if( get_theme_mod( 'themealley_business_post_page_accent_color' ) ) : ?>
    border-top:1px solid <?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;
<?php endif; ?>	
}
.entry-meta-bottom-item a{
	background:<?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;
}
.post .entry-title, .post .entry-title a{
	color:<?php echo get_theme_mod( 'themealley_business_post_page_title_color' ); ?>;
}
.page .entry-title{
	color:<?php echo get_theme_mod( 'themealley_business_post_page_title_color' ); ?>;	
}
.page-content,
.entry-content,
.entry-summary,
.entry-meta {
	color:<?php echo get_theme_mod( 'themealley_business_post_page_content_color' ); ?>;
}
.page-content a,
.entry-content a,
.entry-summary a,
.entry-meta-bottom-item a,
.entry-meta a{
	color:<?php echo get_theme_mod( 'themealley_business_post_page_link_color' ); ?>;
}
blockquote{
<?php if( get_theme_mod( 'themealley_business_post_page_accent_color' ) ) : ?>	
	border-left: 1em solid <?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;
<?php endif; ?>		
}
mark, ins, pre, .more-link, .page-links a{
	background:<?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;
}
.wp-caption{
<?php if( get_theme_mod( 'themealley_business_post_page_accent_color' ) ) : ?>	
	border: 1px solid <?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;
<?php endif; ?>		
}
.site-content .gallery a img{
<?php if( get_theme_mod( 'themealley_business_post_page_accent_color' ) ) : ?>	
	border: 1px solid <?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?> !important;
<?php endif; ?>		
}
.paging-navigation .nav-previous, .paging-navigation .nav-next, .post-navigation, .comments-area{
	background-color:<?php echo get_theme_mod( 'themealley_business_post_page_accent_color' ); ?>;	
	color:<?php echo get_theme_mod( 'themealley_business_post_page_content_color' ); ?>;
}
.post-navigation .nav-previous a, .post-navigation .nav-next a,
.comment-navigation .nav-previous a, .comment-navigation .nav-next a,
.comment-author cite, .comment-author time, .comment-author .edit-link a,
.comments-area a,
.paging-navigation .nav-previous a, .paging-navigation .nav-next a{
	color:<?php echo get_theme_mod( 'themealley_business_post_page_link_color' ); ?>;	
}
.comment-form-comment textarea, .comment-form input[type="text"], .comment-form input[type="email"], .comment-form input[type="password"], .comment-form input[type="search"]{
	background-color:<?php echo get_theme_mod( 'themealley_business_post_page_comment_button_form_bg_color' ); ?>;	
	color:<?php echo get_theme_mod( 'themealley_business_post_page_comment_button_form_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_post_page_comment_button_form_border_color' ) ) : ?>	
	border: 1px solid <?php echo get_theme_mod( 'themealley_business_post_page_comment_button_form_border_color' ); ?> !important;
<?php endif; ?>			
}
.form-submit #submit{
	background-color:<?php echo get_theme_mod( 'themealley_business_post_page_comment_button_form_button_bg_color' ); ?>;	
	color:<?php echo get_theme_mod( 'themealley_business_post_page_comment_button_form_button_text_color' ); ?>;	
}
.comment-body .reply a{
	background-color:<?php echo get_theme_mod( 'themealley_business_post_page_comment_button_bg_color' ); ?>;	
	color:<?php echo get_theme_mod( 'themealley_business_post_page_comment_button_text_color' ); ?>;	
}
/* Posts-Pages-Sidebars Ends*/

/* Widget Area Starts */
.widget-area, .fourohfour-widget-container{
<?php if( get_theme_mod( 'themealley_business_post_page_widget_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_post_page_widget_bg_image' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_post_page_widget_bg_image' ); ?>);
<?php endif; ?>
}
.widget {
	color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_text_color' ); ?>;
}
.widget a{
	color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_link_color' ); ?>;
}
.widget h1 {
	color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_title_color' ); ?>;
}
.widget ul li{
<?php if( get_theme_mod( 'themealley_business_post_page_widget_list_border_color' ) ) : ?>	
	border-bottom: 1px solid <?php echo get_theme_mod( 'themealley_business_post_page_widget_list_border_color' ); ?>;
<?php endif; ?>		
}
.widget ul li a{
	color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_link_color' ); ?>;
}
.search-field, .widget select{
	background:<?php echo get_theme_mod( 'themealley_business_post_page_widget_search_bg_color' ); ?> !important;
	color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_search_text_color' ); ?> !important;
}
.search-submit{
	background:<?php echo get_theme_mod( 'themealley_business_post_page_widget_search_button_bg_color' ); ?> !important;
	color:<?php echo get_theme_mod( 'themealley_business_post_page_widget_search_button_text_color' ); ?> !important;
}
/* Widget Area Ends */

/* Main Content Ends Here */

<?php if( of_get_option('show_footer_client_logos') != 'false' ) : ?>
/* Footer clients Section Starts Here*/
.footer-client-logos-container{
<?php if( get_theme_mod( 'themealley_business_footerclientcontainer_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_footerclientcontainer_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_footerclientcontainer_bg' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_footerclientcontainer_bg' ); ?>);
<?php endif; ?>		
}
/* Footer clients Section Ends Here*/
<?php endif; ?>
.footer-social{
<?php if( get_theme_mod( 'themealley_business_socialicon_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_socialicon_color' ); ?>;
	background-image:none;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_socialicon_bg' ) ) : ?>
    background-image:url(<?php echo get_theme_mod( 'themealley_business_socialicon_bg' ); ?>);
<?php endif; ?>		
}
.footer-five-map{
<?php if( get_theme_mod( 'themealley_business_footermapcontainer_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_footermapcontainer_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_footermapcontainer_bg' ) ) : ?> 
    background-image:url(<?php echo get_theme_mod( 'themealley_business_footermapcontainer_bg' ); ?>);
<?php endif; ?>			
}
.footer-six-map-container, .footer-six-address, .footer-six-address a, .footer-six-email:before, .footer-six-phone:before, .footer-six-fax:before, .footer-six-skype:before{
	color:<?php echo get_theme_mod( 'themealley_business_footermapcontainer_text_color' ); ?>;
}
.site-footer{
	<?php if( get_theme_mod( 'themealley_business_footerwidget_bg_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_footerwidget_bg_color' ); ?>;
	background-image:none;
	<?php endif; ?>
	<?php if( get_theme_mod( 'themealley_business_footerwidget_bg_image' ) ) : ?>
	background-image:url(<?php echo get_theme_mod( 'themealley_business_footerwidget_bg_image' ); ?>);
	<?php endif; ?>	
}
.site-footer .widget h1 {
	color:<?php echo get_theme_mod( 'themealley_business_footerwidget_heading_color' ); ?>;
}
.site-footer .widget, .site-info p, .site-info-three p {
	color:<?php echo get_theme_mod( 'themealley_business_footerwidget_text_color' ); ?>;
}
.site-footer .widget a, .site-footer .widget ul li a, .site-info a, .site-info h3 a, .site-info p a, .site-info-three a, .site-info-three h3 a, .site-info-three p a{
	color:<?php echo get_theme_mod( 'themealley_business_footerwidget_link_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_footerwidget_border_color' ) ) : ?>
.site-footer .widget ul li{
	border-bottom:1px solid <?php echo get_theme_mod( 'themealley_business_footerwidget_border_color' ); ?>;
}
<?php endif; ?>
.site-footer .search-field, .footer-search .search-field{
	<?php if( get_theme_mod( 'themealley_business_footerwidget_searchbg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_footerwidget_searchbg_color' ); ?> !important;
	<?php endif; ?>
	color:<?php echo get_theme_mod( 'themealley_business_footerwidget_searchtext_color' ); ?>;
}
.site-footer .search-submit, .footer-search .search-submit{
	<?php if( get_theme_mod( 'themealley_business_footerwidget_searchbtnbg_color' ) ) : ?>
	background:<?php echo get_theme_mod( 'themealley_business_footerwidget_searchbtnbg_color' ); ?> !important;
	<?php endif; ?>
	color:<?php echo get_theme_mod( 'themealley_business_footerwidget_searchbtntext_color' ); ?> !important;
}
<?php if( get_theme_mod( 'themealley_business_footerwidget_border_color' ) ) : ?>
.site-footer .wp-caption {
	border: 1px solid <?php echo get_theme_mod( 'themealley_business_footerwidget_border_color' ); ?>;
}
<?php endif; ?>
.site-footer .widget select, .footer-widget-three .widget select, .footer-widget-two .widget select {
	background:<?php echo get_theme_mod( 'themealley_business_footerwidget_selectbg_color' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_footerwidget_selecttext_color' ); ?>;
}
<?php if( get_theme_mod( 'themealley_business_footerwidget_border_color' ) ) : ?>
.site-info-three-divider{
	background:<?php echo get_theme_mod( 'themealley_business_footerwidget_border_color' ); ?>;
}
<?php endif; ?>
<?php if( of_get_option('homepage_layout') == 'bsix' || of_get_option('homepage_layout') == 'boneplus' || of_get_option('homepage_layout') == 'bthree' || of_get_option('homepage_layout') == 'bfour' || of_get_option('homepage_layout') == 'bseven' || of_get_option('homepage_layout') == 'beight' ) : ?>
.bizsix-quote-container{
	background-color:<?php echo get_theme_mod( 'themealley_business_footerquote_container_color' ); ?>;
	<?php if( get_theme_mod( 'themealley_business_footerquote_container_image' ) ) : ?>
	background-image:url(<?php echo get_theme_mod( 'themealley_business_footerquote_container_image' ); ?>);
	<?php endif; ?>
}
.bizsix-quote{
	<?php if( get_theme_mod( 'themealley_business_footerquotebg_image' ) ) : ?>
	background:url(<?php echo get_theme_mod( 'themealley_business_footerquotebg_image' ); ?>) no-repeat 10px 10px;
	<?php endif; ?>
}
.bizsix-quote-text p{
	color:<?php echo get_theme_mod( 'themealley_business_footerquote_text_color' ); ?>;
}
.bizsix-quote-name span{
	background:<?php echo get_theme_mod( 'themealley_business_footerquote_clientnamebg_color' ); ?>;
	color:<?php echo get_theme_mod( 'themealley_business_footerquote_clientnametext_color' ); ?>;
}
<?php endif; ?>

.portfolio-page-title{
	color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_title_color' ); ?>;
}
.portfolio-description{
	color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_welcome_text_color' ); ?>;
	<?php if( get_theme_mod( 'themealley_business_portfolio_page_welcome_text_border_color' ) ) : ?>
	border-bottom:2px solid <?php echo get_theme_mod( 'themealley_business_portfolio_page_welcome_text_border_color' ); ?>;
	border-top:2px solid <?php echo get_theme_mod( 'themealley_business_portfolio_page_welcome_text_border_color' ); ?>;
	<?php endif; ?>
}
.portfolio-two-item-odd, .portfolio-two-item-even, .portfolio-three-item-odd, .portfolio-three-item-even, .portfolio-four-item-odd, .portfolio-four-item-even{
<?php if( get_theme_mod( 'themealley_business_portfolio_page_desc_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_desc_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_portfolio_page_desc_bg_image' ) ) : ?> 
    background-image:url(<?php echo get_theme_mod( 'themealley_business_portfolio_page_desc_bg_image' ); ?>);
<?php endif; ?>		
}
.portfolio-two-item-image, .portfolio-three-item-image, .portfolio-four-item-image{
<?php if( get_theme_mod( 'themealley_business_portfolio_page_image_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_image_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_portfolio_page_image_bg_image' ) ) : ?> 
    background-image:url(<?php echo get_theme_mod( 'themealley_business_portfolio_page_image_bg_image' ); ?>);
<?php endif; ?>		
}
.portfolio-one-item-desc-title, .portfolio-two-item-desc-title, .portfolio-three-item-desc-title, .portfolio-four-item-desc-title,
.portfolio-one-item-desc-title a, .portfolio-two-item-desc-title a, .portfolio-three-item-desc-title a, .portfolio-four-item-desc-title a{
	color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_desc_title_color' ); ?>;
}
.portfolio-one-item-desc-desc, .portfolio-one-item-desc-desc ul li, .portfolio-one-item-desc-desc ul li:before, .portfolio-two-item-desc-desc, .portfolio-two-item-desc-desc ul li, .portfolio-two-item-desc-desc ul li:before, .portfolio-three-item-desc-desc, .portfolio-three-item-desc-desc ul li, .portfolio-three-item-desc-desc ul li:before, .portfolio-four-item-desc-desc, .portfolio-four-item-desc-desc ul li, .portfolio-four-item-desc-desc ul li:before{
	color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_desc_text_color' ); ?>;
}
.portfolio-two-item-desc-link, .portfolio-three-item-desc-link, .portfolio-four-item-desc-link{
<?php if( get_theme_mod( 'themealley_business_portfolio_page_button_cont_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_button_cont_bg_color' ); ?>;
	background-image:none;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_portfolio_page_button_cont_bg_image' ) ) : ?> 
    background-image:url(<?php echo get_theme_mod( 'themealley_business_portfolio_page_button_cont_bg_image' ); ?>);
<?php endif; ?>		
}

.portfolio-one-item-desc-link a, .portfolio-two-item-desc-link a, .portfolio-three-item-desc-link a, .portfolio-four-item-desc-link a,
.portfolio-one-item-desc-link a:visited, .portfolio-two-item-desc-link a:visited, .portfolio-three-item-desc-link a:visited, .portfolio-four-item-desc-link a:visited{
	color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_button_text_color' ); ?>;
<?php if( get_theme_mod( 'themealley_business_portfolio_page_button_bg_color' ) ) : ?>    
	background-color:<?php echo get_theme_mod( 'themealley_business_portfolio_page_button_bg_color' ); ?>;
	background-image:none;
	border-bottom: 0px solid #000000;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_portfolio_page_button_bg_image' ) ) : ?> 
    background-image:url(<?php echo get_theme_mod( 'themealley_business_portfolio_page_button_bg_image' ); ?>);
	border-bottom: 0px solid #000000;
<?php endif; ?>		
}

.wpcf7-text, .wpcf7-number, .wpcf7-date, .wpcf7-textarea, .wpcf7-select, .wpcf7-quiz, .wpcf7-captchar, .wpcf7-file{
<?php if( get_theme_mod( 'themealley_business_contact_form_seven_text_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_contact_form_seven_text_color' ); ?> !important;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_contact_form_seven_text_field_bg_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_contact_form_seven_text_field_bg_color' ); ?> !important;
	background-image:none !important;
<?php endif; ?>
<?php if( get_theme_mod( 'themealley_business_contact_form_seven_text_field_border_color' ) ) : ?>
	border:3px solid <?php echo get_theme_mod( 'themealley_business_contact_form_seven_text_field_border_color' ); ?> !important;
<?php endif; ?>	
}
.wpcf7-submit{
<?php if( get_theme_mod( 'themealley_business_contact_form_seven_submit_button_text_color' ) ) : ?>
	color:<?php echo get_theme_mod( 'themealley_business_contact_form_seven_submit_button_text_color' ); ?> !important;
<?php endif; ?>	
<?php if( get_theme_mod( 'themealley_business_contact_form_seven_submit_button_bg_color' ) ) : ?>
	background-color:<?php echo get_theme_mod( 'themealley_business_contact_form_seven_submit_button_bg_color' ); ?> !important;
	background-image:none !important;
	border:3px solid <?php echo get_theme_mod( 'themealley_business_contact_form_seven_submit_button_bg_color' ); ?> !important;
<?php endif; ?>
}

@media screen 
and (min-width : 600px) 
and (max-width : 900px) {
<?php if( get_theme_mod( 'themealley_business_menutopborder_color' ) ) : ?>	
.site-header-half-width-nav{
	border-top:1px solid <?php echo get_theme_mod( 'themealley_business_menutopborder_color' ); ?>;
}
<?php endif; ?>		
}
</style>
<?php }
add_action('wp_head', 'themealley_business_custom_css');