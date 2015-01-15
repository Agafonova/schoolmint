    <div id="feature" class="site-slider">
        
		<div class="fractionslider-wrapper">
				<div class="fractionslider">
					<div class="fs_loader"></div>
                    
					<!-- Slide One Starts Here -->
                    <?php if( of_get_option('fractionslider_slide1_image1') || of_get_option('fractionslider_slide1_title') || of_get_option('fractionslider_slide1_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide1_effect') || of_get_option('fractionslider_slide1_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide1_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide1_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide1_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide1_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide1_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide1_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide1_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide1_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide1_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide1_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide1_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide1_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide1_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide1_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide1_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide1_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide1_link');  ?>"><?php echo of_get_option('fractionslider_slide1_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide1_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide1_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide1_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide1_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide1_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide1_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide1_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide1_link');  ?>"><?php echo of_get_option('fractionslider_slide1_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide1_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide1_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide1_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide1_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide1_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide1_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide1_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide1_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide1_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide1_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide1_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide1_link');  ?>"><?php echo of_get_option('fractionslider_slide1_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide1_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?> 
                                                         
                    <?php endif; ?>
                    <!-- Slide One ends Here -->
                    
                    
					<!-- Slide Two Starts Here -->
                    <?php if( of_get_option('fractionslider_slide2_image1') || of_get_option('fractionslider_slide2_title') || of_get_option('fractionslider_slide2_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide2_effect') || of_get_option('fractionslider_slide2_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide2_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide2_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide2_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide2_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide2_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide2_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide2_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide2_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide2_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide2_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide2_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide2_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide2_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide2_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide2_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide2_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide2_link');  ?>"><?php echo of_get_option('fractionslider_slide2_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide2_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide2_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide2_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide2_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide2_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide2_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide2_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide2_link');  ?>"><?php echo of_get_option('fractionslider_slide2_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide2_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide2_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide2_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide2_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide2_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide2_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide2_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide2_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide2_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide2_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide2_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide2_link');  ?>"><?php echo of_get_option('fractionslider_slide2_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide2_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?> 
                                                         
                    <?php endif; ?>
                    <!-- Slide Two ends Here -->
                    
					<!-- Slide Three Starts Here -->
                    <?php if( of_get_option('fractionslider_slide3_image1') || of_get_option('fractionslider_slide3_title') || of_get_option('fractionslider_slide3_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide3_effect') || of_get_option('fractionslider_slide3_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide3_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide3_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide3_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide3_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide3_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide3_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide3_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide3_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide3_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide3_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide3_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide3_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide3_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide3_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide3_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide3_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide3_link');  ?>"><?php echo of_get_option('fractionslider_slide3_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide3_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide3_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide3_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide3_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide3_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide3_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide3_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide3_link');  ?>"><?php echo of_get_option('fractionslider_slide3_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide3_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide3_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide3_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide3_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide3_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide3_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide3_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide3_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide3_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide3_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide3_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide3_link');  ?>"><?php echo of_get_option('fractionslider_slide3_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide3_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?>
                                                         
                    <?php endif; ?>
                    <!-- Slide Three ends Here -->
                    
					<!-- Slide Four Starts Here -->
                    <?php if( of_get_option('fractionslider_slide4_image1') || of_get_option('fractionslider_slide4_title') || of_get_option('fractionslider_slide4_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide4_effect') || of_get_option('fractionslider_slide4_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide4_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide4_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide4_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide4_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide4_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide4_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide4_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide4_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide4_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide4_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide4_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide4_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide4_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide4_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide4_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide4_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide4_link');  ?>"><?php echo of_get_option('fractionslider_slide4_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide4_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide4_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide4_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide4_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide4_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide4_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide4_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide4_link');  ?>"><?php echo of_get_option('fractionslider_slide4_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide4_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide4_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide4_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide4_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide4_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide4_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide4_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide4_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide4_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide4_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide4_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide4_link');  ?>"><?php echo of_get_option('fractionslider_slide4_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide4_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?>
                                                         
                    <?php endif; ?>
                    <!-- Slide Four ends Here --> 
                    
					<!-- Slide Five Starts Here -->
                    <?php if( of_get_option('fractionslider_slide5_image1') || of_get_option('fractionslider_slide5_title') || of_get_option('fractionslider_slide5_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide5_effect') || of_get_option('fractionslider_slide5_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide5_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide5_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide5_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide5_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide5_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide5_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide5_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide5_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide5_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide5_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide5_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide5_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide5_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide5_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide5_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide5_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide5_link');  ?>"><?php echo of_get_option('fractionslider_slide5_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide5_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide5_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide5_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide5_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide5_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide5_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide5_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide5_link');  ?>"><?php echo of_get_option('fractionslider_slide5_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide5_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide5_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide5_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide5_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide5_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide5_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide5_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide5_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide5_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide5_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide5_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide5_link');  ?>"><?php echo of_get_option('fractionslider_slide5_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide5_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?>
                                                         
                    <?php endif; ?>
                    <!-- Slide Five ends Here -->
                    
					<!-- Slide Six Starts Here -->
                    <?php if( of_get_option('fractionslider_slide6_image1') || of_get_option('fractionslider_slide6_title') || of_get_option('fractionslider_slide6_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide6_effect') || of_get_option('fractionslider_slide6_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide6_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide6_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide6_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide6_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide6_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide6_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide6_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide6_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide6_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide6_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide6_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide6_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide6_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide6_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide6_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide6_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide6_link');  ?>"><?php echo of_get_option('fractionslider_slide6_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide6_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide6_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide6_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide6_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide6_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide6_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide6_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide6_link');  ?>"><?php echo of_get_option('fractionslider_slide6_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide6_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide6_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide6_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide6_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide6_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide6_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide6_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide6_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide6_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide6_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide6_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide6_link');  ?>"><?php echo of_get_option('fractionslider_slide6_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide6_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?>
                                                         
                    <?php endif; ?>
                    <!-- Slide Six ends Here -->
                    
					<!-- Slide Seven Starts Here -->
                    <?php if( of_get_option('fractionslider_slide7_image1') || of_get_option('fractionslider_slide7_title') || of_get_option('fractionslider_slide7_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide7_effect') || of_get_option('fractionslider_slide7_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide7_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide7_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide7_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide7_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide7_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide7_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide7_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide7_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide7_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide7_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide7_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide7_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide7_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide7_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide7_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide7_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide7_link');  ?>"><?php echo of_get_option('fractionslider_slide7_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide7_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide7_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide7_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide7_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide7_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide7_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide7_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide7_link');  ?>"><?php echo of_get_option('fractionslider_slide7_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide7_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide7_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide7_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide7_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide7_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide7_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide7_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide7_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide7_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide7_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide7_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide7_link');  ?>"><?php echo of_get_option('fractionslider_slide7_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide7_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?> 
                                                         
                    <?php endif; ?>
                    <!-- Slide Seven ends Here -->  
                    
					<!-- Slide Eight Starts Here -->
                    <?php if( of_get_option('fractionslider_slide8_image1') || of_get_option('fractionslider_slide8_title') || of_get_option('fractionslider_slide8_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide8_effect') || of_get_option('fractionslider_slide8_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide8_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide8_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide8_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide8_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide8_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide8_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide8_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide8_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide8_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide8_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide8_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide8_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide8_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide8_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide8_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide8_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide8_link');  ?>"><?php echo of_get_option('fractionslider_slide8_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide8_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide8_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide8_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide8_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide8_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide8_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide8_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide8_link');  ?>"><?php echo of_get_option('fractionslider_slide8_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide8_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide8_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide8_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide8_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide8_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide8_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide8_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide8_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide8_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide8_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide8_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide8_link');  ?>"><?php echo of_get_option('fractionslider_slide8_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide8_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?>
                                                         
                    <?php endif; ?>
                    <!-- Slide Eight ends Here -->
                    
					<!-- Slide Nine Starts Here -->
                    <?php if( of_get_option('fractionslider_slide9_image1') || of_get_option('fractionslider_slide9_title') || of_get_option('fractionslider_slide9_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide9_effect') || of_get_option('fractionslider_slide9_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide9_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide9_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide9_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide9_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide9_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide9_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide9_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide9_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide9_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide9_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide9_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide9_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide9_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide9_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide9_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide9_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide9_link');  ?>"><?php echo of_get_option('fractionslider_slide9_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide9_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide9_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide9_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide9_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide9_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide9_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide9_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide9_link');  ?>"><?php echo of_get_option('fractionslider_slide9_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide9_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide9_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide9_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide9_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide9_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide9_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide9_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide9_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide9_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide9_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide9_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide9_link');  ?>"><?php echo of_get_option('fractionslider_slide9_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide9_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?> 
                                                         
                    <?php endif; ?>
                    <!-- Slide Nine ends Here -->
                    
					<!-- Slide Ten Starts Here -->
                    <?php if( of_get_option('fractionslider_slide10_image1') || of_get_option('fractionslider_slide10_title') || of_get_option('fractionslider_slide10_desc') ) : ?>
                    
						<?php if( !of_get_option('fractionslider_slide10_effect') || of_get_option('fractionslider_slide10_effect') == 'type_one' ) : ?>
                                            
                        <!-- Slide Type One Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide10_image1');  ?>"
                                    width="350" height="300"			
                                    data-position="52,70" data-in="left" data-delay="200" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide10_image2');  ?>" 
                                    width="200" height="250" 		
                                    data-position="120,40" data-in="left" data-delay="400" data-out="right">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide10_image3');  ?>" 
                                    width="300" height="200"
                                    data-position="150,250" data-in="left" data-delay="600" data-out="left">
                            
                            <?php if( of_get_option('fractionslider_slide10_title') ) : ?>
                            <p 		class="claim medium brown"			
                                    data-position="60,600" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide10_title');  ?></p>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('fractionslider_slide10_item1') ) : ?>                                
                            <p 		class="teaser" 	
                                    data-position="150,600" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide10_item1');  ?></p>	
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide10_item2') ) : ?>        	
                            <p 		class="teaser" 	
                                    data-position="190,600" data-in="bottom" data-step="2" data-delay="3000"><?php echo of_get_option('fractionslider_slide10_item2');  ?></p>		
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide10_item3') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="230,600" data-in="bottom" data-step="2" data-delay="5500"><?php echo of_get_option('fractionslider_slide10_item3');  ?></p>
                            <?php endif; ?>       
                            
                            <?php if( of_get_option('fractionslider_slide10_item4') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="270,600" data-in="bottom" data-step="2" data-delay="6500"><?php echo of_get_option('fractionslider_slide10_item4');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide10_item5') ) : ?>        
                            <p 		class="teaser"		
                                    data-position="310,600" data-in="bottom" data-step="2" data-delay="7500"><?php echo of_get_option('fractionslider_slide10_item5');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if( of_get_option('fractionslider_slide10_link') ) : ?>        
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide10_link');  ?>"><?php echo of_get_option('fractionslider_slide10_cta');  ?></a></p>                                
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="370,600" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide10_cta');  ?></p>                             
                            <?php endif; ?>                                                                        
                            
    
                        </div>
                        <!-- Slide Type One Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide10_effect') == 'type_two' ) : ?>
                        <!-- Slide Type Two Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide10_image1');  ?>"
                                    width="550" height="400"			
                                    data-position="40,300" data-in="top" data-delay="200" data-out="bottom">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide10_image2');  ?>" 
                                    width="300" height="300"		
                                    data-position="80,780" data-in="bottom" data-delay="800" data-out="top">
                                    
                            <img    src="<?php echo of_get_option('fractionslider_slide10_image3');  ?>" 
                                    width="400" height="300"
                                    data-position="90,70" data-in="left" data-delay="1000" data-out="left">
                            
                            <?php if ( of_get_option('fractionslider_slide10_title') ) : ?>
                            <p 		class="middle"			
                                    data-position="320,0" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">
                                    <?php if( of_get_option('fractionslider_slide10_link') ) : ?>
                                        <span><a href="<?php echo of_get_option('fractionslider_slide10_link');  ?>"><?php echo of_get_option('fractionslider_slide10_title');  ?></a></span>
                                     <?php else : ?>
                                        <span><?php echo of_get_option('fractionslider_slide10_title');  ?></span>                                     
                                     <?php endif; ?>
                            </p>
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide10_desc') ) : ?>                                
                            <p 		class="middle2" 	
                                    data-position="380,40" data-in="bottom" data-step="1" data-delay="1500"><span><?php echo of_get_option('fractionslider_slide10_desc');  ?></span>
                            </p>		
    						<?php endif; ?>
    
                        </div>  
                        <!-- Slide Type Two Ends Here -->
                        <?php endif; ?>
                    
						<?php if( of_get_option('fractionslider_slide10_effect') == 'type_three' ) : ?>
                        <!-- Slide Type Three Starts Here -->
                        <div class="slide">
                            <img 	src="<?php echo of_get_option('fractionslider_slide10_image1');  ?>"
                                    width="450" height="400"			
                                    data-position="40,650" data-in="bottomRight" data-delay="200" data-out="topRight">
                            
                            <?php if ( of_get_option('fractionslider_slide10_title') ) : ?> 
                            <p 		class="claim mediumsmall brown"			
                                    data-position="40,100" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce"><?php echo of_get_option('fractionslider_slide10_title');  ?></p>
                            <?php endif; ?>        
                            
                            <?php if ( of_get_option('fractionslider_slide10_desc') ) : ?>                                 
                            <p 		class="teaser medium" 	
                                    data-position="140,100" data-in="bottom" data-step="2" data-delay="500"><?php echo of_get_option('fractionslider_slide10_desc');  ?></p>	
                            <?php endif; ?>
                            
                            <?php if ( of_get_option('fractionslider_slide10_cta') ) : ?> 
                            <?php if( of_get_option('fractionslider_slide10_link') ) : ?> 
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><a href="<?php echo of_get_option('fractionslider_slide10_link');  ?>"><?php echo of_get_option('fractionslider_slide10_cta');  ?></a></p>                            
                            <?php else : ?>
                            <p 		class="teaser button"		
                                    data-position="280,100" data-in="bottom" data-step="3" data-delay="1000"><?php echo of_get_option('fractionslider_slide10_cta');  ?></p>                            
                            <?php endif; ?>       
                            <?php endif; ?>    	
    
                        </div>
                        <!-- Slide Type Three Ends Here -->
                        <?php endif; ?>
                                                         
                    <?php endif; ?>
                    <!-- Slide Ten ends Here -->
                    
                    
				</div>
		</div>
        
    </div><!-- #banner -->