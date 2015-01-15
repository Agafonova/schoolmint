<?php

$themealley_business_google_fonts = array( 
	'Open Sans' => 'Open Sans',
	'Oswald' => 'Oswald',
	'Droid Sans' => 'Droid Sans',
	'Roboto' => 'Roboto',
	'Lato' => 'Lato',
	'PT Sans' => 'PT Sans',
	'Open Sans Condensed' => 'Open Sans Condensed',
	'Droid Serif' => 'Droid Serif',
	'Ubuntu' => 'Ubuntu',
	'PT Sans Narrow' => 'PT Sans Narrow',
	'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
	'Source Sans Pro' => 'Source Sans Pro',
	'Roboto Condensed' => 'Roboto Condensed',
	'Lobster' => 'Lobster',
	'Lora' => 'Lora',
	'Arvo' => 'Arvo',
	'Raleway' => 'Raleway',
	'Nunito' => 'Nunito',
	'Francois One' => 'Francois One',
	'Arimo' => 'Arimo',
	'Montserrat' => 'Montserrat',
	'Bitter' => 'Bitter',
	'PT Serif' => 'PT Serif',
	'Rokkitt' => 'Rokkitt',
	'Cabin' => 'Cabin',
	'Merriweather' => 'Merriweather',
	'Play' => 'Play',
	'Cuprum' => 'Cuprum',
	'Oxygen' => 'Oxygen',
	'Shadows Into Light' => 'Shadows Into Light',
	'Crafty Girls' => 'Crafty Girls',
	'Dosis' => 'Dosis',
	'Abel' => 'Abel',
	'Ubuntu Condensed' => 'Ubuntu Condensed',
	'Josefin Sans' => 'Josefin Sans',
	'Coming Soon' => 'Coming Soon',
	'Anton' => 'Anton',
	'Vollkorn' => 'Vollkorn',
	'Dancing Script' => 'Dancing Script',
	'Changa One' => 'Changa One',
	'The Girl Next Door' => 'The Girl Next Door',
	'Questrial' => 'Questrial',
	'Nobile' => 'Nobile',
	'Titillium Web' => 'Titillium Web',
	'Pacifico' => 'Pacifico',
	'Maven Pro' => 'Maven Pro',
	'Cantarell' => 'Cantarell',
	'Signika' => 'Signika',
	'Noto Sans' => 'Noto Sans',
	'Unkempt' => 'Unkempt',
	'Asap' => 'Asap',
	'Exo' => 'Exo',
	'Calligraffitti' => 'Calligraffitti',
	'Chewy' => 'Chewy',
	'Philosopher' => 'Philosopher',
	'Kreon' => 'Kreon',
	'Tangerine' => 'Tangerine',
	'Special Elite' => 'Special Elite',
	'Muli' => 'Muli',
	'Fjalla One' => 'Fjalla One',
	'Rock Salt' => 'Rock Salt',
	'Inconsolata' => 'Inconsolata',
	'PT Sans Caption' => 'PT Sans Caption',
	'Luckiest Guy' => 'Luckiest Guy',
	'Cherry Cream Soda' => 'Cherry Cream Soda',
	'Josefin Slab' => 'Josefin Slab',
	'Molengo' => 'Molengo',
	'News Cycle' => 'News Cycle',
	'Reenie Beanie' => 'Reenie Beanie',
	'Libre Baskerville' => 'Libre Baskerville',
	'Indie Flower' => 'Indie Flower',
	'Comfortaa' => 'Comfortaa',
	'Quicksand' => 'Quicksand',
	'Istok Web' => 'Istok Web',
	'Playfair Display' => 'Playfair Display',
	'Varela Round' => 'Varela Round',
	'Merriweather Sans' => 'Merriweather Sans',
	'Fredoka One' => 'Fredoka One',
	'Marck Script' => 'Marck Script',
	'Crimson Text' => 'Crimson Text',
	'Cabin Condensed' => 'Cabin Condensed',
	'Righteous' => 'Righteous',
	'Droid Sans Mono' => 'Droid Sans Mono',
	'Marvel' => 'Marvel',
	'Black Ops One' => 'Black Ops One',
	'Bree Serif' => 'Bree Serif',
	'Permanent Marker' => 'Permanent Marker',
	'Syncopate' => 'Syncopate',
	'Economica' => 'Economica',
	'Just Me Again Down Here' => 'Just Me Again Down Here',
	'Armata' => 'Armata',
	'Old Standard TT' => 'Old Standard TT',
	'Cardo' => 'Cardo',
	'Copse' => 'Copse',
	'Pontano Sans' => 'Pontano Sans',
	'Crushed' => 'Crushed',
	'Walter Turncoat' => 'Walter Turncoat',
	'Amaranth' => 'Amaranth',
	'Lobster Two' => 'Lobster Two',
	'Amatic SC' => 'Amatic SC',
	'Covered By Your Grace' => 'Covered By Your Grace',
	'Gloria Hallelujah' => 'Gloria Hallelujah',
	'Quattrocento Sans' => 'Quattrocento Sans',
	'Metamorphous' => 'Metamorphous',
	'Voltaire' => 'Voltaire',
	'Ropa Sans' => 'Ropa Sans',
	'Cantata One' => 'Cantata One',
	'Karla' => 'Karla',
	'Bevan' => 'Bevan',
	'Gudea' => 'Gudea',
	'Homemade Apple' => 'Homemade Apple',
	'Allerta' => 'Allerta',
	'Paytone One' => 'Paytone One',
	'Jockey One' => 'Jockey One',
	'Architects Daughter' => 'Architects Daughter',
	'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
	'Orbitron' => 'Orbitron',
	'Waiting for the Sunrise' => 'Waiting for the Sunrise',
	'Alegreya' => 'Alegreya',
	'Chivo' => 'Chivo',
	'Crete Round' => 'Crete Round',
	'Passion One' => 'Passion One',
);

if( of_get_option('custom_font_name_five') && of_get_option('custom_font_url_five') ) {
	$themealley_business_google_fonts_custom_five = array( of_get_option('custom_font_name_five') => of_get_option('custom_font_name_five') );
	$themealley_business_google_fonts = array_merge( $themealley_business_google_fonts_custom_five, $themealley_business_google_fonts  );
}
if( of_get_option('custom_font_name_four') && of_get_option('custom_font_url_four') ) {
	$themealley_business_google_fonts_custom_four = array( of_get_option('custom_font_name_four') => of_get_option('custom_font_name_four') );
	$themealley_business_google_fonts = array_merge( $themealley_business_google_fonts_custom_four, $themealley_business_google_fonts  );
}
if( of_get_option('custom_font_name_three') && of_get_option('custom_font_url_three') ) {
	$themealley_business_google_fonts_custom_three = array( of_get_option('custom_font_name_three') => of_get_option('custom_font_name_three') );
	$themealley_business_google_fonts = array_merge( $themealley_business_google_fonts_custom_three, $themealley_business_google_fonts  );
}
if( of_get_option('custom_font_name_two') && of_get_option('custom_font_url_two') ) {
	$themealley_business_google_fonts_custom_two = array( of_get_option('custom_font_name_two') => of_get_option('custom_font_name_two') );
	$themealley_business_google_fonts = array_merge( $themealley_business_google_fonts_custom_two, $themealley_business_google_fonts  );
}
if( of_get_option('custom_font_name_one') && of_get_option('custom_font_url_one') ) {
	$themealley_business_google_fonts_custom_one = array( of_get_option('custom_font_name_one') => of_get_option('custom_font_name_one') );
	$themealley_business_google_fonts = array_merge( $themealley_business_google_fonts_custom_one, $themealley_business_google_fonts  );
}

$themealley_business_google_fonts_default = array( 'Select a Font' => 'Select a Font' );	
$themealley_business_google_fonts = array_merge( $themealley_business_google_fonts_default, $themealley_business_google_fonts  );
	

function themealley_business_load_fonts(){
$themealley_business_selected_fonts = array();
if( get_theme_mod( 'themealley_business_body_font_family' ) ){
	$themealley_business_selected_fonts[] = get_theme_mod( 'themealley_business_body_font_family' );
}
if( get_theme_mod( 'themealley_business_heading_font_family' ) ){
	$themealley_business_selected_fonts[] = get_theme_mod( 'themealley_business_heading_font_family' );
}
if( get_theme_mod( 'themealley_business_logo_font' ) ){
	$themealley_business_selected_fonts[] = get_theme_mod( 'themealley_business_logo_font' );
}

$themealley_business_selected_fonts = array_unique( $themealley_business_selected_fonts );

if (($themealley_business_selected_fonts_key = array_search('Select a Font', $themealley_business_selected_fonts)) !== false) {
    unset($themealley_business_selected_fonts[$themealley_business_selected_fonts_key]);
}

	if( of_get_option('custom_font_name_one') && of_get_option('custom_font_url_one') ) {
		$themealley_business_custom_font_one_key = of_get_option('custom_font_name_one');
		if (($themealley_business_selected_fonts_key_one = array_search($themealley_business_custom_font_one_key, $themealley_business_selected_fonts)) !== false) {
			unset($themealley_business_selected_fonts[$themealley_business_selected_fonts_key_one]);
		}
	}
	if( of_get_option('custom_font_name_two') && of_get_option('custom_font_url_two') ) {
		$themealley_business_custom_font_two_key = of_get_option('custom_font_name_two');
		if (($themealley_business_selected_fonts_key_two = array_search($themealley_business_custom_font_two_key, $themealley_business_selected_fonts)) !== false) {
			unset($themealley_business_selected_fonts[$themealley_business_selected_fonts_key_two]);
		}
	}
	if( of_get_option('custom_font_name_three') && of_get_option('custom_font_url_three') ) {
		$themealley_business_custom_font_three_key = of_get_option('custom_font_name_three');
		if (($themealley_business_selected_fonts_key_three = array_search($themealley_business_custom_font_three_key, $themealley_business_selected_fonts)) !== false) {
			unset($themealley_business_selected_fonts[$themealley_business_selected_fonts_key_three]);
		}
	}
	if( of_get_option('custom_font_name_four') && of_get_option('custom_font_url_four') ) {
		$themealley_business_custom_font_four_key = of_get_option('custom_font_name_four');
		if (($themealley_business_selected_fonts_key_four = array_search($themealley_business_custom_font_four_key, $themealley_business_selected_fonts)) !== false) {
			unset($themealley_business_selected_fonts[$themealley_business_selected_fonts_key_four]);
		}
	}
	if( of_get_option('custom_font_name_five') && of_get_option('custom_font_url_five') ) {
		$themealley_business_custom_font_five_key = of_get_option('custom_font_name_five');
		if (($themealley_business_selected_fonts_key_five = array_search($themealley_business_custom_font_five_key, $themealley_business_selected_fonts)) !== false) {
			unset($themealley_business_selected_fonts[$themealley_business_selected_fonts_key_five]);
		}
	}
	
	if( of_get_option('custom_font_name_one') && of_get_option('custom_font_url_one') ) {
		echo "<link href='".of_get_option('custom_font_url_one')."' rel='stylesheet' type='text/css'>";
	}
	if( of_get_option('custom_font_name_two') && of_get_option('custom_font_url_two') ) {
		echo "<link href='".of_get_option('custom_font_url_two')."' rel='stylesheet' type='text/css'>";
	}
	if( of_get_option('custom_font_name_three') && of_get_option('custom_font_url_three') ) {
		echo "<link href='".of_get_option('custom_font_url_three')."' rel='stylesheet' type='text/css'>";
	}
	if( of_get_option('custom_font_name_four') && of_get_option('custom_font_url_four') ) {
		echo "<link href='".of_get_option('custom_font_url_four')."' rel='stylesheet' type='text/css'>";
	}
	if( of_get_option('custom_font_name_five') && of_get_option('custom_font_url_five') ) {
		echo "<link href='".of_get_option('custom_font_url_five')."' rel='stylesheet' type='text/css'>";
	}	
	
	foreach( $themealley_business_selected_fonts as $themealley_business_selected_font ){
		echo "<link href='//fonts.googleapis.com/css?family=".$themealley_business_selected_font."' rel='stylesheet' type='text/css'>";
	}
}
add_action( 'wp_head', 'themealley_business_load_fonts', 1 );