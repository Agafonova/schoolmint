    <div id="feature" class="site-slider">
    
    	<div class="responsive-container"> 
        
        	<div class="site-slider-slider-video-one">

            	<div class="site-slider-slider-video-one-video">
                
                	<?php if( of_get_option('video_one_image') ) : ?>
                	<div class="site-slider-slider-video-one-video-cont">
                
						
                                <div class="fluid_video_cont_themealley">
                                       <iframe width="100%" src="//www.youtube.com/embed/<?php $videoonethemealley = of_get_option('video_one_image'); echo themealley_business_quickYouTubeId($videoonethemealley); ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
                                </div>

                        
                        
                   	</div>                 
                	<?php endif; ?>
                    
                </div><!-- .site-slider-slider-video-one-video -->
                
                
            	<div class="site-slider-slider-video-one-text">
                	
                    <?php if( of_get_option('video_one_headline') ) : ?>
                	<h1 class="site-slider-slider-video-one-text-heading">
						<?php echo esc_html( of_get_option('video_one_headline') ); ?>                      
                    </h1>
                    <?php endif; ?>
                    
                    <?php if( of_get_option('video_one_text') ) : ?>
                    <div class="site-slider-slider-video-one-text-description">
						<?php echo of_get_option('video_one_text'); ?>                     
                    </div>
                    <?php endif; ?>
                    
                    <?php if( of_get_option('video_one_cta') ) : ?>
                    <?php if( of_get_option('video_one_cta_link') ) : ?>
                    <div class="site-slider-slider-video-one-text-button">
                        <a href="<?php echo esc_url( of_get_option('video_one_cta_link') ); ?>">
							<?php echo esc_attr( of_get_option('video_one_cta') ); ?>
                        </a>                    
                    </div>
                    <?php else : ?>
                    <div class="site-slider-slider-video-one-text-button">
                        <span>
							<?php echo esc_attr( of_get_option('video_one_cta') ); ?>
                        </span>                    
                    </div>                    
                    <?php endif; ?>
                    <?php endif; ?>
                
                </div><!-- .site-slider-slider-video-one-text -->                

    		</div><!-- .site-slider-slider-video-one-one -->
        
    	</div><!-- #Responsive-Container -->           
    
    </div><!-- #banner -->