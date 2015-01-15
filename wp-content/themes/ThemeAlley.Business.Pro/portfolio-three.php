
        
        
        	
            
            	<div class="portfolio-three-item-image">
                	<?php
                    	 $themealley_business_portfolio_cta_img = get_post_meta($post->ID, '_themealley_business_portfolio_image', true);
						if( !empty( $themealley_business_portfolio_cta_img ) ) {
							echo '<img src="'.$themealley_business_portfolio_cta_img.'" />';
						} else {
							echo '<img src="'.get_template_directory_uri().'/images/portfolio-img.png" />';
						}
                    ?>
                </div><!-- portfolio-three-item-image -->
                
            	<div class="portfolio-three-item-desc">
                
                	<h1 class="portfolio-three-item-desc-title">
                        <a href="
                        <?php
                            $themealley_business_portfolio_cta_url = get_post_meta($post->ID, '_themealley_business_portfolio_cta_url', true);
                            if( !empty( $themealley_business_portfolio_cta_url ) ) {
                                    echo esc_url( $themealley_business_portfolio_cta_url );
                                } else {
                                    the_permalink();
                                }
                        ?>
                        ">
                        <?php
                            $themealley_business_portfolio_title = get_post_meta($post->ID, '_themealley_business_portfolio_title', true);
                            if( !empty( $themealley_business_portfolio_title ) ) {
                                    echo esc_attr( $themealley_business_portfolio_title );
                                } else {
                                    the_title();
                                }
                        ?>
                        </a>
                    </h1>
                    	
                    <?php 
							$themealley_business_portfolio_desc = get_post_meta($post->ID, '_themealley_business_portfolio_description', true);
							$themealley_business_portfolio_excerpt = get_the_excerpt();
							if( !empty( $themealley_business_portfolio_desc ) ) {
								echo '<div class="portfolio-three-item-desc-desc">';
								echo $themealley_business_portfolio_desc;
								echo '</div>';
							} elseif ( !empty( $themealley_business_portfolio_excerpt ) ) {
								echo '<div class="portfolio-three-item-desc-desc">';
									 the_excerpt();
								echo '</div>';
							}
					?>
                    
                    <?php if( of_get_option('show_portfolio_cta') != 'false' ) : ?>
                    <div class="portfolio-three-item-desc-link">
                    
                    <a href="
                    <?php
						$themealley_business_portfolio_cta_url = get_post_meta($post->ID, '_themealley_business_portfolio_cta_url', true);
						if( !empty( $themealley_business_portfolio_cta_url ) ) {
								echo esc_url( $themealley_business_portfolio_cta_url );
							} else {
								the_permalink();
							}
					?>
                    ">
                    <?php 
							$themealley_business_portfolio_cta = get_post_meta($post->ID, '_themealley_business_portfolio_cta', true);
							$themealley_business_portfolio_default_cta = of_get_option('default_portfolio_cta');
							if( !empty( $themealley_business_portfolio_cta ) ) {
								echo esc_attr( $themealley_business_portfolio_cta );
							} elseif ( !empty( $themealley_business_portfolio_default_cta ) ) {
								echo esc_attr( $themealley_business_portfolio_default_cta );
							} else {
								_e('Continue',  'themealley_business');
							}
					?>                    
                    </a>
                    </div> 
                    <?php endif; ?>                   
                
                </div><!-- portfolio-three-item-desc -->                
            
            
        
        