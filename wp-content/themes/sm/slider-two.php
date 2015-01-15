    <div id="feature" class="site-slider">
    
    	<div class="responsive-container"> 
        
        	<div class="site-slider-slider-two">
            
            	<div class="site-slider-slider-two-video">
                
                	<div class="site-slider-slider-two-video-cont">
                
                            <div class="cycle-slideshow" 
                                data-cycle-fx=scrollHorz
                                data-cycle-timeout=10000
                                data-cycle-overlay-template='<div>
                                                	<div class="cycle-slideshow-captiony">
                                                        <h2>{{title}}</h2>
                                                    </div>
                                                </div>'>
                                <!-- empty element for overlay -->
                                <div class="cycle-overlay"></div>
                                
                                <div class="cycle-prev"></div>
    							<div class="cycle-next"></div>
                            	
                                <?php if( of_get_option('slider_two_slide1_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide1_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide1_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide1_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slider_two_slide2_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide2_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide2_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide2_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>  
                                
                                <?php if( of_get_option('slider_two_slide3_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide3_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide3_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide3_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?> 
                                
                                <?php if( of_get_option('slider_two_slide4_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide4_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide4_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide4_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>  
                                
                                <?php if( of_get_option('slider_two_slide5_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide5_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide5_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide5_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slider_two_slide6_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide6_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide6_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide6_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slider_two_slide7_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide7_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide7_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide7_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>  
                                
                                <?php if( of_get_option('slider_two_slide8_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide8_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide8_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide8_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?> 
                                
                                <?php if( of_get_option('slider_two_slide9_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide9_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide9_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide9_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>  
                                
                                <?php if( of_get_option('slider_two_slide10_image') ) : ?>
                                <img 
                                	src="<?php echo of_get_option('slider_two_slide10_image') ?>" 
                                    <?php if( of_get_option('slider_two_slide10_title') ) : ?>
                                    data-cycle-title="<?php echo of_get_option('slider_two_slide10_title') ?>" 
                                    <?php endif; ?>
                                >
                                <?php endif; ?>                                                                                                                                                          
                            </div>
                        
                   	</div>                 
                
                </div><!-- .site-slider-slider-video-one-video -->
                
            	<div class="site-slider-slider-two-text">
                
                	<h1 class="site-slider-slider-two-text-heading">
						<?php echo esc_html( of_get_option('slider_two_headline') ); ?>                      
                    </h1>
                    
                    <div class="site-slider-slider-two-text-description">
						<?php echo of_get_option('slider_two_text'); ?>                     
                    </div>
                    
                    <?php if( of_get_option('slider_two_cta_link') ) : ?>
                    <div class="site-slider-slider-two-text-button">
                        <a href="<?php echo of_get_option('slider_two_cta_link'); ?>">
							<?php echo esc_attr( of_get_option('slider_two_cta') ); ?>
                        </a>                    
                    </div>
                    <?php else : ?>
                    <div class="site-slider-slider-two-text-button">
                        <span>
							<?php echo esc_attr( of_get_option('slider_two_cta') ); ?>
                        </span>                    
                    </div>                    
                    <?php endif; ?>
                
                </div><!-- .site-slider-slider-video-one-text -->                

    		</div><!-- .site-slider-slider-video-one-one -->
        
    	</div><!-- #Responsive-Container -->           
    
    </div><!-- #banner -->