<?php

if( !of_get_option('show_footer_copyright') || of_get_option('show_footer_copyright') == 'true' ) {
	if( of_get_option('copyright_text') ){
		echo '<p>'.esc_html( of_get_option('copyright_text') ).'</p>';
	}else{
		echo '<p>'.__('&copy; All rights reserved.', 'themealley_business').'</p>';
	}
}

?>