    <div id="feature" class="site-slider">
    
       <div class="hero-heading-container">
       
            <div class="responsive-container"> 
            
            	<h2 class="hero-heading"><?php echo of_get_option('welcome_heroheader_headline');  ?></h2>
                <p class="hero-heading-text"><?php echo of_get_option('welcome_heroheader_text');  ?></p>
            
            </div><!-- #Responsive-Container -->                 
            
       </div><!-- .hero-heading-container -->

		<div class="fractionslider-wrapper-cont">       
		<div class="fractionslider-wrapper">
				<div class="fractionslider">
					<div class="fs_loader"></div>
                    
					<div class="slide">
                    
                    <?php
                    
						if( !of_get_option('skin_style') ){
							$themealley_business_hero_style = 'alexandria';
						}else{
							$themealley_business_hero_style = of_get_option('skin_style');
						}
						
						if( get_theme_mod( 'themealley_business_heroslider_left_slide_img' ) ){
							echo '<img 	src="'.get_theme_mod( 'themealley_business_heroslider_left_slide_img' ).'"
									width="330" height="450"			
									data-position="100,9" data-in="bottom" data-delay="200" data-step="1">';							
						}else{
							echo '<img 	src="'.get_template_directory_uri().'/skins/images/'.$themealley_business_hero_style.'/left.png"
									width="330" height="450"			
									data-position="100,9" data-in="bottom" data-delay="200" data-step="1">';							
						}	
						
						if( get_theme_mod( 'themealley_business_heroslider_right_slide_img' ) ){
							echo '<img    src="'.get_theme_mod( 'themealley_business_heroslider_right_slide_img' ).'" 
									width="330" height="450"
									data-position="100,761" data-in="bottom" data-delay="200" data-step="1">';							
						}else{
							echo '<img    src="'.get_template_directory_uri().'/skins/images/'.$themealley_business_hero_style.'/right.png" 
									width="330" height="450"
									data-position="100,761" data-in="bottom" data-delay="200" data-step="1">';							
						}
						
						if( get_theme_mod( 'themealley_business_heroslider_center_slide_img' ) ){
							echo '<img    src="'.get_theme_mod( 'themealley_business_heroslider_center_slide_img' ).'" 
								width="422" height="500" 		
								data-position="50,339" data-in="bottom" data-delay="100" data-step="1">';							
						}else{
							echo '<img    src="'.get_template_directory_uri().'/skins/images/'.$themealley_business_hero_style.'/center.png" 
								width="422" height="500" 		
								data-position="50,339" data-in="bottom" data-delay="100" data-step="1">';							
						}						

 					?>
                                
                        <?php if( of_get_option('centerpanel_heroheader_img') ) : ?>                                   
						<img 	src="<?php echo of_get_option('centerpanel_heroheader_img'); ?>"
								<?php if ( of_get_option('centerpanel_heroheader_title') || of_get_option('centerpanel_heroheader_desc') ) { echo 'width="362" height="180"'; } else { echo 'width="362" height="210"'; } ?>			
								data-position="80,369" data-in="bottom" data-delay="200" data-step="2">
                        <?php endif; ?>

                        <?php if( of_get_option('leftpanel_heroheader_img') ) : ?>                                   
						<img 	src="<?php echo of_get_option('leftpanel_heroheader_img'); ?>"
								<?php if ( of_get_option('leftpanel_heroheader_title') || of_get_option('leftpanel_heroheader_desc') ) { echo 'width="270" height="120"'; } else { echo 'width="270" height="170"'; } ?>			
								data-position="130,39" data-in="bottom" data-delay="250" data-step="2">
                        <?php endif; ?>
                                
                        <?php if( of_get_option('rightpanel_heroheader_img') ) : ?>                                   
						<img 	src="<?php echo of_get_option('rightpanel_heroheader_img'); ?>"
								<?php if ( of_get_option('rightpanel_heroheader_title') || of_get_option('rightpanel_heroheader_desc') ) { echo 'width="270" height="120"'; } else { echo 'width="270" height="170"'; } ?>			
								data-position="130,791" data-in="bottom" data-delay="250" data-step="2">
                        <?php endif; ?> 
                                
                        <!-- Center Panel Starts -->  
                        
                        <?php if( of_get_option('centerpanel_heroheader_title') ) : ?>        
                        <p 		class="centerheading" 	
								data-position="270,400" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('centerpanel_heroheader_title') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('centerpanel_heroheader_desc') ) : ?>        
                        <p 		class="centerdescription" 	
								data-position="335,400" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('centerpanel_heroheader_desc') ?></p>
                        <?php endif; ?>                        
                        
                        <?php if( !of_get_option('centerpanel_heroheader_title') && !of_get_option('centerpanel_heroheader_desc') ) : ?>
                        <?php if( of_get_option('centerpanel_heroheader_item1') ) : ?>        
                        <p 		class="centeritem" 	
								data-position="300,420" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('centerpanel_heroheader_item1') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('centerpanel_heroheader_item2') ) : ?> 
                        <p 		class="centeritem" 	
								data-position="345,420" data-in="bottom" data-step="3" data-delay="250"><?php echo of_get_option('centerpanel_heroheader_item2') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('centerpanel_heroheader_item3') ) : ?>
                        <p 		class="centeritem" 	
								data-position="390,420" data-in="bottom" data-step="3" data-delay="400"><?php echo of_get_option('centerpanel_heroheader_item3') ?></p>
                        <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('centerpanel_heroheader_btn') && of_get_option('centerpanel_heroheader_btnlink') ) : ?>
                                                        
                        <p 		class="centerbutton" 	
								data-position="460,400" data-in="bottom" data-step="4" data-delay="100"><a href="<?php echo of_get_option('centerpanel_heroheader_btnlink') ?>"><?php echo of_get_option('centerpanel_heroheader_btn') ?></a></p>                         
                        <?php elseif ( of_get_option('centerpanel_heroheader_btn') ) : ?>        
                        <p 		class="centerbutton" 	
								data-position="460,400" data-in="bottom" data-step="4" data-delay="100"><span><?php echo of_get_option('centerpanel_heroheader_btn') ?></span></p>                        
						<?php endif; ?> 
                        <!-- Center Panel ends -->        
                                                                                                                              
                                
                        <!-- Left Panel Starts -->  
                        
                        <?php if( of_get_option('leftpanel_heroheader_title') ) : ?>        
                        <p 		class="sidetitle" 	
								data-position="255,64" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('leftpanel_heroheader_title') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('leftpanel_heroheader_desc') ) : ?>        
                        <p 		class="sidedesc" 	
								data-position="325,64" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('leftpanel_heroheader_desc') ?></p>
                        <?php endif; ?>                        
                        
                        <?php if( !of_get_option('leftpanel_heroheader_title') && !of_get_option('leftpanel_heroheader_desc') ) : ?>
                        <?php if( of_get_option('leftpanel_heroheader_item1') ) : ?>        
                        <p 		class="sideitem" 	
								data-position="310,64" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('leftpanel_heroheader_item1') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('leftpanel_heroheader_item2') ) : ?> 
                        <p 		class="sideitem" 	
								data-position="355,64" data-in="bottom" data-step="3" data-delay="250"><?php echo of_get_option('leftpanel_heroheader_item2') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('leftpanel_heroheader_item3') ) : ?>
                        <p 		class="sideitem" 	
								data-position="400,64" data-in="bottom" data-step="3" data-delay="400"><?php echo of_get_option('leftpanel_heroheader_item3') ?></p>
                        <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('leftpanel_heroheader_btn') && of_get_option('leftpanel_heroheader_btnlink') ) : ?>
                                                        
                        <p 		class="sidebutton" 	
								data-position="470,64" data-in="bottom" data-step="4" data-delay="100"><a href="<?php echo of_get_option('leftpanel_heroheader_btnlink') ?>"><?php echo of_get_option('leftpanel_heroheader_btn') ?></a></p>                         
                        <?php elseif ( of_get_option('leftpanel_heroheader_btn') ) : ?>        
                        <p 		class="sidebutton" 	
								data-position="470,64" data-in="bottom" data-step="4" data-delay="100"><span><?php echo of_get_option('leftpanel_heroheader_btn') ?></span></p>                        
						<?php endif; ?> 
                        <!-- Left Panel ends -->              
                        
                        <!-- Right Panel Starts -->  
                        
                        <?php if( of_get_option('rightpanel_heroheader_title') ) : ?>        
                        <p 		class="sidetitle" 	
								data-position="255,816" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('rightpanel_heroheader_title') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('rightpanel_heroheader_desc') ) : ?>        
                        <p 		class="sidedesc" 	
								data-position="325,816" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('rightpanel_heroheader_desc') ?></p>
                        <?php endif; ?>                        
                        
                        <?php if( !of_get_option('rightpanel_heroheader_title') && !of_get_option('rightpanel_heroheader_desc') ) : ?>
                        <?php if( of_get_option('rightpanel_heroheader_item1') ) : ?>        
                        <p 		class="sideitem" 	
								data-position="310,816" data-in="bottom" data-step="3" data-delay="100"><?php echo of_get_option('rightpanel_heroheader_item1') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('rightpanel_heroheader_item2') ) : ?> 
                        <p 		class="sideitem" 	
								data-position="355,816" data-in="bottom" data-step="3" data-delay="250"><?php echo of_get_option('rightpanel_heroheader_item2') ?></p>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('rightpanel_heroheader_item3') ) : ?>
                        <p 		class="sideitem" 	
								data-position="400,816" data-in="bottom" data-step="3" data-delay="400"><?php echo of_get_option('rightpanel_heroheader_item3') ?></p>
                        <?php endif; ?>
                        <?php endif; ?>
                        
                        <?php if( of_get_option('rightpanel_heroheader_btn') && of_get_option('rightpanel_heroheader_btnlink') ) : ?>
                                                        
                        <p 		class="sidebutton" 	
								data-position="470,816" data-in="bottom" data-step="4" data-delay="100"><a href="<?php echo of_get_option('rightpanel_heroheader_btnlink') ?>"><?php echo of_get_option('rightpanel_heroheader_btn') ?></a></p>                         
                        <?php elseif ( of_get_option('rightpanel_heroheader_btn') ) : ?>        
                        <p 		class="sidebutton" 	
								data-position="470,816" data-in="bottom" data-step="4" data-delay="100"><span><?php echo of_get_option('rightpanel_heroheader_btn') ?></span></p>                        
						<?php endif; ?> 
                        
                        <!-- Right Panel ends --> 
                                                                                                                                                               						

						
					</div><!-- .Slide -->                   
                    
                    
				</div><!-- .fractionslider --> 
		</div><!-- .fractionslider-wrapper --> 
 		</div><!-- .fractionslider-wrapper-cont -->
        
        <div class="fractionslider-wrapper-backup-cont">

            <div class="responsive-container">
            
            	<!-- Center Panel Starts --> 
            	<div class="hero-pane-mobile">
                
                	<?php if( of_get_option('centerpanel_heroheader_img') ) : ?>
                	<div class="hero-pane-mobile-img">
                    	<img src="<?php echo of_get_option('centerpanel_heroheader_img'); ?>">
                    </div>
                    <?php endif; ?>
                    
                    <?php if( of_get_option('centerpanel_heroheader_title') ) : ?>        
                	<div class="hero-pane-mobile-title">
                    	<p><?php echo of_get_option('centerpanel_heroheader_title'); ?></p>  
                    </div>
                    <?php endif; ?>
                        
                    <?php if( of_get_option('centerpanel_heroheader_desc') ) : ?>        
                	<div class="hero-pane-mobile-desc">
                    	<p><?php echo of_get_option('centerpanel_heroheader_desc'); ?></p>  
                    </div>
                    <?php endif; ?>                    
                    
                    <?php if( !of_get_option('centerpanel_heroheader_title') && !of_get_option('centerpanel_heroheader_desc') ) : ?>
                    <?php if( of_get_option('centerpanel_heroheader_item1') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('centerpanel_heroheader_item1'); ?></p>  
                    </div> 
                    <?php endif; ?>
                    
                    <?php if( of_get_option('centerpanel_heroheader_item2') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('centerpanel_heroheader_item2'); ?></p>  
                    </div> 
                    <?php endif; ?>
                    
                    <?php if( of_get_option('centerpanel_heroheader_item3') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('centerpanel_heroheader_item3'); ?></p>  
                    </div> 
                    <?php endif; ?>                                        
                    <?php endif; ?>
                    
                    <?php if( of_get_option('centerpanel_heroheader_btn') && of_get_option('centerpanel_heroheader_btnlink') ) : ?>
                	<div class="hero-pane-mobile-button">
                    	<p><a href="<?php echo of_get_option('centerpanel_heroheader_btnlink') ?>"><?php echo of_get_option('centerpanel_heroheader_btn') ?></a></p>
                    </div> 
                    <?php elseif ( of_get_option('centerpanel_heroheader_btn') ) : ?>
                	<div class="hero-pane-mobile-button">
                    	<p><?php echo of_get_option('centerpanel_heroheader_btn') ?></p>
                    </div>                    
                    <?php endif; ?>
                                                         
                
                </div><!-- .hero-pane-mobile -->
                <!-- Center Panel Ends --> 
                
            	<!-- Left Panel Starts --> 
            	<div class="hero-pane-mobile">
                
                	<?php if( of_get_option('leftpanel_heroheader_img') ) : ?>
                	<div class="hero-pane-mobile-img">
                    	<img src="<?php echo of_get_option('leftpanel_heroheader_img'); ?>">
                    </div>
                    <?php endif; ?>
                    
                    <?php if( of_get_option('leftpanel_heroheader_title') ) : ?>        
                	<div class="hero-pane-mobile-title">
                    	<p><?php echo of_get_option('leftpanel_heroheader_title'); ?></p>  
                    </div>
                    <?php endif; ?>
                        
                    <?php if( of_get_option('leftpanel_heroheader_desc') ) : ?>        
                	<div class="hero-pane-mobile-desc">
                    	<p><?php echo of_get_option('leftpanel_heroheader_desc'); ?></p>  
                    </div>
                    <?php endif; ?>                    
                    
                    <?php if( !of_get_option('leftpanel_heroheader_title') && !of_get_option('leftpanel_heroheader_desc') ) : ?>
                    <?php if( of_get_option('leftpanel_heroheader_item1') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('leftpanel_heroheader_item1'); ?></p>  
                    </div> 
                    <?php endif; ?>
                    
                    <?php if( of_get_option('leftpanel_heroheader_item2') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('leftpanel_heroheader_item2'); ?></p>  
                    </div> 
                    <?php endif; ?>
                    
                    <?php if( of_get_option('leftpanel_heroheader_item3') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('leftpanel_heroheader_item3'); ?></p>  
                    </div> 
                    <?php endif; ?>                                        
                    <?php endif; ?>
                    
                    <?php if( of_get_option('leftpanel_heroheader_btn') && of_get_option('leftpanel_heroheader_btnlink') ) : ?>
                	<div class="hero-pane-mobile-button">
                    	<p><a href="<?php echo of_get_option('leftpanel_heroheader_btnlink') ?>"><?php echo of_get_option('leftpanel_heroheader_btn') ?></a></p>
                    </div> 
                    <?php elseif ( of_get_option('leftpanel_heroheader_btn') ) : ?>
                	<div class="hero-pane-mobile-button">
                    	<p><?php echo of_get_option('leftpanel_heroheader_btn') ?></p>
                    </div>                    
                    <?php endif; ?>
                                                         
                
                </div><!-- .hero-pane-mobile -->
                <!-- Left Panel Ends -->                
                
            	<!-- Right Panel Starts --> 
            	<div class="hero-pane-mobile">
                
                	<?php if( of_get_option('rightpanel_heroheader_img') ) : ?>
                	<div class="hero-pane-mobile-img">
                    	<img src="<?php echo of_get_option('rightpanel_heroheader_img'); ?>">
                    </div>
                    <?php endif; ?>
                    
                    <?php if( of_get_option('rightpanel_heroheader_title') ) : ?>        
                	<div class="hero-pane-mobile-title">
                    	<p><?php echo of_get_option('rightpanel_heroheader_title'); ?></p>  
                    </div>
                    <?php endif; ?>
                        
                    <?php if( of_get_option('rightpanel_heroheader_desc') ) : ?>        
                	<div class="hero-pane-mobile-desc">
                    	<p><?php echo of_get_option('rightpanel_heroheader_desc'); ?></p>  
                    </div>
                    <?php endif; ?>                    
                    
                    <?php if( !of_get_option('rightpanel_heroheader_title') && !of_get_option('rightpanel_heroheader_desc') ) : ?>
                    <?php if( of_get_option('rightpanel_heroheader_item1') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('rightpanel_heroheader_item1'); ?></p>  
                    </div> 
                    <?php endif; ?>
                    
                    <?php if( of_get_option('rightpanel_heroheader_item2') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('rightpanel_heroheader_item2'); ?></p>  
                    </div> 
                    <?php endif; ?>
                    
                    <?php if( of_get_option('rightpanel_heroheader_item3') ) : ?> 
                	<div class="hero-pane-mobile-details">
                    	<p><?php echo of_get_option('rightpanel_heroheader_item3'); ?></p>  
                    </div> 
                    <?php endif; ?>                                        
                    <?php endif; ?>
                    
                    <?php if( of_get_option('rightpanel_heroheader_btn') && of_get_option('rightpanel_heroheader_btnlink') ) : ?>
                	<div class="hero-pane-mobile-button">
                    	<p><a href="<?php echo of_get_option('rightpanel_heroheader_btnlink') ?>"><?php echo of_get_option('rightpanel_heroheader_btn') ?></a></p>
                    </div> 
                    <?php elseif ( of_get_option('rightpanel_heroheader_btn') ) : ?>
                	<div class="hero-pane-mobile-button">
                    	<p><?php echo of_get_option('rightpanel_heroheader_btn') ?></p>
                    </div>                    
                    <?php endif; ?>
                                                         
                
                </div><!-- .hero-pane-mobile -->
                <!-- Right Panel Ends --> 
            
            </div><!-- .responsive-container -->
                    
        </div><!-- .fractionslider-wrapper-backup-cont -->
        
        <?php if( of_get_option('pitch_heroheader_headline') || of_get_option('pitch_heroheader_text') || of_get_option('pitch_heroheader_cta') ) : ?>
        
        <div class="hero-pitch-container">
        
            <div class="responsive-container">
            
            	<div class="hero-pitch-text">
                
                	<h2><?php echo of_get_option('pitch_heroheader_headline');  ?></h2>
                	<p><?php echo of_get_option('pitch_heroheader_text');  ?></p>
                    
                </div> <!-- .hero-pitch-text -->
                
            	<div class="hero-pitch-button">
                	<?php if( of_get_option('pitch_heroheader_link') ) : ?>
                	<p><a href="<?php echo of_get_option('pitch_heroheader_link');  ?>"><?php echo of_get_option('pitch_heroheader_cta');  ?></a></p>
                	<?php else : ?>
                    <p><span><?php echo of_get_option('pitch_heroheader_cta');  ?></span></p>
                    <?php endif; ?>
                </div> <!-- .hero-pitch-button -->                
            
            </div><!-- #Responsive-Container -->        
        
        </div> <!-- .hero-pitch-container -->          
    	<?php endif; ?>
        
    </div><!-- #banner -->