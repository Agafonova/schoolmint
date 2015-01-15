<?php
/**
 * The front page file.
 *
 * @package themealley_business
 */

get_header(); ?>

	<?php 
		
		if( of_get_option('homepage_layout') == 'bone' ) {
			get_template_part( 'index', 'bone' ); 
		}elseif( of_get_option('homepage_layout') == 'boneplus' ) {
			get_template_part( 'index', 'boneplus' ); 
		}elseif( of_get_option('homepage_layout') == 'btwo' ) {
			get_template_part( 'index', 'btwo' ); 
		}elseif( of_get_option('homepage_layout') == 'bthree' ) {
			get_template_part( 'index', 'bthree' ); 
		}elseif( of_get_option('homepage_layout') == 'bfour' ) {
			get_template_part( 'index', 'bfour' ); 
		}elseif( of_get_option('homepage_layout') == 'bfive' ) {
			get_template_part( 'index', 'bfive' ); 
		}elseif( of_get_option('homepage_layout') == 'bsix' ) {
			get_template_part( 'index', 'bsix' ); 
		}elseif( of_get_option('homepage_layout') == 'bseven' ) {
			get_template_part( 'index', 'bseven' ); 
		}elseif( of_get_option('homepage_layout') == 'beight' ) {
			get_template_part( 'index', 'beight' ); 
		}elseif( of_get_option('homepage_layout') == 'bnine' ) {
			get_template_part( 'index', 'bnine' );
		}elseif( of_get_option('homepage_layout') == 'spage' ) {
			if( 'page' == get_option( 'show_on_front' ) ){	
				get_template_part('index', 'page');
			}else {
				get_template_part('index', 'standard');
			}
		}else{	
			get_template_part( 'index', 'bone' );
		}
		
	?>

<?php get_footer(); ?>