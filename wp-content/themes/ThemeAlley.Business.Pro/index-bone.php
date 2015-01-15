<div class="biz0ne">

		<?php if( !of_get_option('show_bone_welcome_section') || of_get_option('show_bone_welcome_section') == 'true' ) : ?>
        <div class="biz0ne-welcome">
        
            <h1>
                <?php 
                    if( of_get_option('bone_welcome_headline') ){
                        echo esc_html( of_get_option('bone_welcome_headline') );
                    }else {
                        _e('Welcome Headline Comes Here',  'themealley_business');
                    }
                ?>    
            </h1>
            
            <div>
                <?php 
                    if( of_get_option('bone_welcome_text') ){
                        echo of_get_option('bone_welcome_text');
                    }else {
                        _e('You can change this text in welcome text box of welcome section block in Biz one tab of theme options page. You can change this text in welcome text box of welcome section block in Biz two tab of theme options page.',  'themealley_business');
                    }
                ?>                                
            </div>    
        
        </div><!-- .biz0ne-welcome -->
        <?php endif; ?> 
        
        <div class="biz0ne-products-services">
        
            <div class="biz0ne-products-services-item">
            
                <div class="biz0ne-products-services-img">
                
                                            <a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
                                            <?php 
                                                if( of_get_option('left_section_image') ){
                                                    echo '<img class="" src="'.esc_url( of_get_option('left_section_image') ).'" />';
                                                }else {
                                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                }
                                            ?>                                    
                                            </a>        
                
                </div><!-- .biz0ne-products-services-img -->
                
                <div class="biz0ne-products-services-name">
                                                    <a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
                                                    <?php 
                                                        if( of_get_option('left_section_headline') ){
                                                            echo esc_html( of_get_option('left_section_headline') );
                                                        }else {
                                                            _e('Design',  'themealley_business');
                                                        }
                                                    ?> 
                                                    </a>        
                </div><!-- .biz0ne-products-services-name -->
                
                <div class="biz0ne-products-services-description">
                                                    <?php 
														global $themealley_business_allwedtags;
                                                        if( of_get_option('left_section_text') ){
                                                            echo of_get_option('left_section_text');
                                                        }else {
                                                            _e('You can change this text in description box of left section block in Biz One settings tab of theme options page.',  'themealley_business');
                                                        }
                                                    ?>        
                </div><!-- .biz0ne-products-services-description -->                
            
            </div><!-- .biz0ne-products-services-item -->
            
            <div class="biz0ne-products-services-item">
            
                <div class="biz0ne-products-services-img">
                                            <a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
                                            <?php 
                                                if( of_get_option('center_section_image') ){
                                                    echo '<img class="" src="'.esc_url( of_get_option('center_section_image') ).'" />';
                                                }else {
                                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                }
                                            ?>
                                            </a>        
                </div><!-- .biz0ne-products-services-img -->
                
                <div class="biz0ne-products-services-name">
                                                    <a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
                                                    <?php 
                                                        if( of_get_option('center_section_headline') ){
                                                            echo esc_html( of_get_option('center_section_headline') );
                                                        }else {
                                                            _e('Development',  'themealley_business');
                                                        }
                                                    ?>
                                                    </a>       
                </div><!-- .biz0ne-products-services-name -->
                
                <div class="biz0ne-products-services-description">
                                                    <?php 
                                                        if( of_get_option('center_section_text') ){
                                                            echo of_get_option('center_section_text');
                                                        }else {
                                                            _e('You can change this text in description box of center section block in Biz One settings tab of theme options page.',  'themealley_business');
                                                        }
                                                    ?>       
                </div><!-- .biz0ne-products-services-description -->                
            
            </div><!-- .biz0ne-products-services-item -->
            
            <div class="biz0ne-products-services-item">
            
                <div class="biz0ne-products-services-img">
                                            <a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
                                            <?php 
                                                if( of_get_option('right_section_image') ){
                                                    echo '<img class="" src="'.esc_url( of_get_option('right_section_image') ).'" />';
                                                }else {
                                                    echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                }
                                            ?>
                                            </a>        
                </div><!-- .biz0ne-products-services-img -->
                
                <div class="biz0ne-products-services-name">
                                                    <a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
                                                    <?php 
                                                        if( of_get_option('right_section_headline') ){
                                                            echo esc_html( of_get_option('right_section_headline') );
                                                        }else {
                                                            _e('Marketing',  'themealley_business');
                                                        }
                                                    ?>
                                                    </a>        
                </div><!-- .biz0ne-products-services-name -->
                
                <div class="biz0ne-products-services-description">
                                                    <?php 
                                                        if( of_get_option('right_section_text') ){
                                                            echo of_get_option('right_section_text');
                                                        }else {
                                                            _e('You can change this text in description box of right section block in Biz One settings tab of theme options page.',  'themealley_business');
                                                        }
                                                    ?>        
                </div><!-- .biz0ne-products-services-description -->                
            
            </div><!-- .biz0ne-products-services-item -->        
        
        </div><!-- .biz0ne-products-services -->
        
        <?php if( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) : ?>
        <div class="biz0ne-quote">
        
            <?php 
				if( of_get_option('quote_section_text_biz1') ) {
					$themealley_business_bizoneplus_quote_v = '1';
				}else{
					$themealley_business_bizoneplus_quote_v = '0';
				}
				if( of_get_option('quote_section_text_biz2') ) {
					$themealley_business_bizoneplus_quote_w = '1';
				}else{
					$themealley_business_bizoneplus_quote_w = '0';
				}
				if( of_get_option('quote_section_text_biz3') ) {
					$themealley_business_bizoneplus_quote_x = '1';
				}else{
					$themealley_business_bizoneplus_quote_x = '0';
				}
				if( of_get_option('quote_section_text_biz4') ) {
					$themealley_business_bizoneplus_quote_y = '1';
				}else{
					$themealley_business_bizoneplus_quote_y = '0';
				}	
				if( of_get_option('quote_section_text_biz5') ) {
					$themealley_business_bizoneplus_quote_z = '1';
				}else{
					$themealley_business_bizoneplus_quote_z = '0';
				}
				
				$themealley_business_bizoneplus_quote_a = $themealley_business_bizoneplus_quote_v + $themealley_business_bizoneplus_quote_w + $themealley_business_bizoneplus_quote_x + $themealley_business_bizoneplus_quote_y + $themealley_business_bizoneplus_quote_z;
				
				if( $themealley_business_bizoneplus_quote_a == '5' ){													
					$themealley_business_bizoneplusquoterandomnum = rand(1, 5);
				}elseif ( $themealley_business_bizoneplus_quote_a == '4' ){
					$themealley_business_bizoneplusquoterandomnum = rand(1, 4);
				}elseif ( $themealley_business_bizoneplus_quote_a == '3' ){
					$themealley_business_bizoneplusquoterandomnum = rand(1, 3);
				}elseif ( $themealley_business_bizoneplus_quote_a == '2' ){
					$themealley_business_bizoneplusquoterandomnum = rand(1, 2);
				}else{
					$themealley_business_bizoneplusquoterandomnum = '1';
				} 
				
				$themealley_business_bizoneplusquotetext = 'quote_section_text_biz'.$themealley_business_bizoneplusquoterandomnum;
				$themealley_business_bizoneplusquotename = 'quote_section_name_biz'.$themealley_business_bizoneplusquoterandomnum;
				
			?>        
        
            <div class="biz0ne-quote-text">
                
                <p>
                    <?php echo esc_html( of_get_option( $themealley_business_bizoneplusquotetext ) ); ?>
                </p> 
                    
            </div><!-- .biz0ne-quote-text -->
            
            <p class="biz0ne-quote-name">
            
                <span>
                    <?php echo esc_attr( of_get_option( $themealley_business_bizoneplusquotename ) ); ?>
                </span>   
            </p>    
        
        </div><!-- .biz0ne-quote -->
        <?php endif; ?>
		
</div><!-- .biz0ne -->  

<?php if( !of_get_option('show_bizone_posts') || of_get_option('show_bizone_posts') == 'true' ) : ?>
<div class="biz0ne">
	
		<?php 
			
			if( 'page' == get_option( 'show_on_front' ) ){	
				get_template_part('index', 'page');
			}else {
				get_template_part('index', 'standard');
			}			 
			
		?>
		
</div><!-- .biz0ne -->
<?php endif; ?>  