    <div class="bizsix-welcome-container">
        
        	<div class="responsive-container">
            
            	<div class="bizsix-welcome">
                
                    <h1>
                        <?php 
                            if( of_get_option('bsix_welcome_headline') ){
                                echo esc_html( of_get_option('bsix_welcome_headline') );
                            }else {
                                _e('Welcome Headline Comes Here bsix',  'themealley_business');
                            }
                        ?>    
                    </h1>
                    
                    <p>
                        <?php 
                            if( of_get_option('bsix_welcome_text') ){
                                echo esc_html( of_get_option('bsix_welcome_text') );
                            }else {
                                _e('You can change this text in welcome text box of welcome section block in Biz six settings tab of theme options page. You can change this text in welcome text box of welcome section block in Biz six settings tab of theme options page.',  'themealley_business');
                            }
                        ?>                                
                    </p>
                    
                    <div class="bizsix-welcome-cta-container">
                    	
                        <?php if( of_get_option('bsix_welcome_cta_one') ) : ?>
                    	<span>
                        	<?php 
							
								$bsix_welcome_cta_one_text = of_get_option('bsix_welcome_cta_one');
								$bsix_welcome_cta_one_link = of_get_option('bsix_welcome_cta_one_link');
								
								if( $bsix_welcome_cta_one_link ){
									echo '<a href="'.$bsix_welcome_cta_one_link.'" >'.$bsix_welcome_cta_one_text.'</a>';
								}else{
									echo $bsix_welcome_cta_one_text;
								}
								
							?>
                            
                        </span>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('bsix_welcome_cta_two') ) : ?>
                    	<span>
                        	<?php 
							
								$bsix_welcome_cta_two_text = of_get_option('bsix_welcome_cta_two');
								$bsix_welcome_cta_two_link = of_get_option('bsix_welcome_cta_two_link');
								
								if( $bsix_welcome_cta_two_link ){
									echo '<a href="'.$bsix_welcome_cta_two_link.'" >'.$bsix_welcome_cta_two_text.'</a>';
								}else{
									echo $bsix_welcome_cta_two_text;
								}
								
							?>
                            
                        </span>
                        <?php endif; ?>
                    
                    </div>                
                
                </div><!-- .bizsix-welcome -->
            
            </div><!-- .responsive-container -->
        
    </div><!-- .bizsix-welcome-container -->