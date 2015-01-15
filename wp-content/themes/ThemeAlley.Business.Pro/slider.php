				<?php 
				
					if( of_get_option('header_slider') == 'cheader' ) {
						get_template_part( 'slider', 'cheader' ); 
					}elseif( of_get_option('header_slider') == 'videoone' ) {
						get_template_part( 'slider-video-one' ); 
					}elseif( of_get_option('header_slider') == 'oneplus' ) {
						get_template_part( 'slider', 'oneplus' );
					}elseif( of_get_option('header_slider') == 'two' ) {
						get_template_part( 'slider', 'two' );
					}elseif( of_get_option('header_slider') == 'slitslider' ) {
						get_template_part( 'slider', 'slitslider' );
					}elseif( of_get_option('header_slider') == 'fraction' ) {
						get_template_part( 'slider', 'fraction' );
					}elseif( of_get_option('header_slider') == 'hero' ) {
						get_template_part( 'slider', 'hero' );
					}else{
						get_template_part( 'slider', 'one' ); 
					}
					
				?>