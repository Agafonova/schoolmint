    <div id="feature" class="site-slider">
    
    <div class="site-slider-oneplus">    
    
    	<div class="responsive-container"> 
        
        	<div class="site-slider-slider-oneplus">
            
                <ul class="oneplusslider">
                
                	<?php if( of_get_option('slider_oneplus1_image') || of_get_option('slider_oneplus1_headline') ) : ?>
                	<!-- Slide 1 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus1_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus1_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus1_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus1_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus1_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus1_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus1_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus1_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus1_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus1_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus1_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus1_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus1_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 1 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus2_image') || of_get_option('slider_oneplus2_headline') ) : ?>
                	<!-- Slide 2 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus2_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus2_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus2_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus2_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus2_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus2_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus2_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus2_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus2_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus2_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus2_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus2_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus2_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 2 ends here -->
                    <?php endif; ?> 
                    
                	<?php if( of_get_option('slider_oneplus3_image') || of_get_option('slider_oneplus3_headline') ) : ?>
                	<!-- Slide 3 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus3_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus3_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus3_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus3_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus3_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus3_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus3_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus3_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus3_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus3_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus3_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus3_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus3_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 3 ends here -->
                    <?php endif; ?>                                                                                   
                    
                	<?php if( of_get_option('slider_oneplus4_image') || of_get_option('slider_oneplus4_headline') ) : ?>
                	<!-- Slide 4 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus4_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus4_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus4_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus4_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus4_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus4_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus4_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus4_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus4_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus4_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus4_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus4_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus4_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 4 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus5_image') || of_get_option('slider_oneplus5_headline') ) : ?>
                	<!-- Slide 5 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus5_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus5_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus5_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus5_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus5_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus5_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus5_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus5_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus5_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus5_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus5_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus5_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus5_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 5 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus6_image') || of_get_option('slider_oneplus6_headline') ) : ?>
                	<!-- Slide 6 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus6_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus6_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus6_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus6_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus6_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus6_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus6_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus6_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus6_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus6_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus6_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus6_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus6_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 6 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus7_image') || of_get_option('slider_oneplus7_headline') ) : ?>
                	<!-- Slide 7 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus7_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus7_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus7_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus7_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus7_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus7_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus7_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus7_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus7_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus7_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus7_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus7_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus7_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 7 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus8_image') || of_get_option('slider_oneplus8_headline') ) : ?>
                	<!-- Slide 8 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus8_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus8_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus8_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus8_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus8_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus8_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus8_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus8_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus8_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus8_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus8_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus8_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus8_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 8 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus9_image') || of_get_option('slider_oneplus9_headline') ) : ?>
                	<!-- Slide 9 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus9_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus9_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus9_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus9_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus9_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus9_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus9_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus9_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus9_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus9_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus9_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus9_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus9_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 9 ends here -->
                    <?php endif; ?>
                    
                	<?php if( of_get_option('slider_oneplus10_image') || of_get_option('slider_oneplus10_headline') ) : ?>
                	<!-- Slide 10 starts here -->
                    <li class="slide-oneplus">            
                
                		<?php if( of_get_option('slider_oneplus10_image') ) : ?>
                        <div class="site-slider-slider-oneplus-image">
                        
							<?php 
                                if( of_get_option('slider_oneplus10_image') ){
                                    echo '<img class="" src="'.esc_url( of_get_option('slider_oneplus10_image') ).'" />';
                                }else {
                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                               }
                            ?>                 
                        
                        </div><!-- .site-slider-slider-oneplus-image -->
                        <?php endif; ?>
                        
                        
                        <div class="site-slider-slider-oneplus-text">
                        
                        	<?php if( of_get_option('slider_oneplus10_headline') ) : ?>
                            <h1 class="site-slider-slider-oneplus-text-heading">
                            
								<?php 
                                    if( of_get_option('slider_oneplus10_headline') ){
                                         echo esc_html( of_get_option('slider_oneplus10_headline') );
                                    }else {
                                         _e('Responsive Business Theme',  'themealley_business');
                                    }
                               ?> 
                                                   
                            </h1>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus10_text') ) : ?>
                            <div class="site-slider-slider-oneplus-text-description">
                                <?php echo of_get_option('slider_oneplus10_text'); ?>                   
                            </div>
                            <?php endif; ?>
                            
                            <?php if( of_get_option('slider_oneplus10_cta') ) : ?>
                            <div class="site-slider-slider-oneplus-text-button">
                                
                                <?php if( of_get_option('slider_oneplus10_cta_link') ) : ?>
                                
                                	<a href="<?php echo of_get_option('slider_oneplus10_cta_link'); ?>">
                                		<?php echo of_get_option('slider_oneplus10_cta'); ?>
                                    </a>
                                    
                                <?php else: ?>
                                	<span>
                                		<?php echo of_get_option('slider_oneplus10_cta'); ?>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                            <?php endif; ?>
                        
                        </div><!-- .site-slider-slider-oneplus-text -->  
                    
                    </li>
                    <!-- Slide 10 ends here -->
                    <?php endif; ?>                
                                  
                </ul>              

    		</div><!-- .site-slider-slider-oneplus -->
        
    	</div><!-- #Responsive-Container --> 
        
        </div><!-- .site-slider-oneplus -->          
    
    </div><!-- #banner -->
