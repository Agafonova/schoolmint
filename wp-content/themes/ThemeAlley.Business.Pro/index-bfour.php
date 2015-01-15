<div class="bizfour">

		<?php if( !of_get_option('show_bfour_welcome_section') || of_get_option('show_bfour_welcome_section') == 'true' ) : ?>
        <div class="bizfour-welcome">
        
            <h1>
                <?php 
                    if( of_get_option('bfour_welcome_headline') ){
                        echo esc_html( of_get_option('bfour_welcome_headline') );
                    }else {
                        _e('Welcome Headline Comes Here bfour',  'themealley_business');
                    }
                ?>    
            </h1>
            
            <div class="bizfour-welcome-desc">
                <?php 
                    if( of_get_option('bfour_welcome_text') ){
                        echo of_get_option('bfour_welcome_text');
                    }else {
                        _e('You can change this text in welcome text box of welcome section block in Biz Four settings tab of theme options page. You can change this text in welcome text box of welcome section block in Biz Four settings tab of theme options page.',  'themealley_business');
                    }
                ?>                                
            </div>    
        
        </div><!-- .bizfour-welcome -->
        <?php endif; ?>
        
        <?php if( !of_get_option('show_bfour_products_section') || of_get_option('show_bfour_products_section') == 'true' ) : ?>
        <div class="bizfour-products-services">
        	
            <?php 
			
				$themealley_business_bizfour_args = array(
								// Change these category SLUGS to suit your use.
								'ignore_sticky_posts' => 1,
								'post_type' => array('post','page'),
								'meta_key' => '_themealley_business_homelayout_product_order',
								'orderby' => 'meta_value_num',
								'order' => 'ASC',
								'posts_per_page'=> '-1',
							  );

				$themealley_business_bizfour_list_of_posts = new WP_Query( $themealley_business_bizfour_args );
								
			?>
            
			<?php if ( $themealley_business_bizfour_list_of_posts->have_posts() ) : ?>
                <?php /* The loop */ ?>

                <?php $themealley_business_bizfour_itemnum = 0; while ( $themealley_business_bizfour_list_of_posts->have_posts() ) : $themealley_business_bizfour_list_of_posts->the_post(); $themealley_business_bizfour_itemnum++ ?>
                
                        <!-- section1 Starts Here -->
                        <?php
						
								if( ( $themealley_business_bizfour_itemnum - 1 ) % 4 == 0 ){
									echo '<div class="clear-both bizfour-products-services-item">';
								}else {
									echo '<div class="bizfour-products-services-item">';
								}	
													
						?>                        
                        
                        
                        
                            <div class="bizfour-products-services-img">
                                                        
                                                        <?php 
                                                            $themealley_business_homepage_bizfour_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                            if( empty($themealley_business_homepage_bizfour_linkimg) || $themealley_business_homepage_bizfour_linkimg != 'on' ) : 
                                                        ?>
                                                        <a href="
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_bizfour_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                            
                                                            if( !empty($themealley_business_homepage_bizfour_ctalink) ){
                                                                echo esc_url( $themealley_business_homepage_bizfour_ctalink );
                                                            }else{
                                                                the_permalink();
                                                            }
                                                        ?>
                                                        ">
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_bizfour_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                                            if( !empty( $themealley_business_homepage_bizfour_img ) ){
                                                                echo '<img class="" src="'.esc_url( $themealley_business_homepage_bizfour_img ).'" />';
                                                            }else {
                                                                echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                            }
                                                        ?>                                    
                                                        </a>
                                                        <?php else : ?>
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_bizfour_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                                            if( !empty( $themealley_business_homepage_bizfour_img ) ){
                                                                echo '<img class="" src="'.esc_url( $themealley_business_homepage_bizfour_img ).'" />';
                                                            }else {
                                                                echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                            }
                                                        ?>                                           
                                                        <?php endif; ?>        
                            
                            </div><!-- .bizfour-products-services-img -->
                            
                            <div class="bizfour-products-services-name">

																<?php 
                                                                    $themealley_business_homepage_bizfour_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_bizfour_linkimg) || $themealley_business_homepage_bizfour_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_bizfour_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_bizfour_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_bizfour_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_bizfour_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizfour_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizfour_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_bizfour_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizfour_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizfour_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>
                                                                        
                            </div><!-- .bizfour-products-services-name -->
                            
                            <div class="bizfour-products-services-description">
                                                                <?php 
                                                                    $themealley_business_homepage_bizfour_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                                                    if( !empty($themealley_business_homepage_bizfour_desc) ){
                                                                        echo $themealley_business_homepage_bizfour_desc;
                                                                    }else {
                                                                        the_excerpt();
                                                                    }
                                                                ?>        
                            </div><!-- .bizfour-products-services-description -->
                            
                            <?php 
								$themealley_business_homepage_bizfour_cta = get_post_meta($post->ID, '_themealley_business_homelayout_cta', true);
								if( !empty($themealley_business_homepage_bizfour_cta) ) : 
							?>
                            <div class="bizfour-products-services-cta">
                                
                                <?php 
                                   $themealley_business_homepage_bizfour_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                   if( empty($themealley_business_homepage_bizfour_linkimg) || $themealley_business_homepage_bizfour_linkimg != 'on' ) : 
                                ?>
                                <a href="
                                <?php 
                                                        
                                     $themealley_business_homepage_bizfour_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                            
                                     if( !empty($themealley_business_homepage_bizfour_ctalink) ){
                                         echo esc_url( $themealley_business_homepage_bizfour_ctalink );
                                     }else{
                                         the_permalink();
                                     }
									 
                                ?>
                                ">
                                    <?php echo esc_attr( $themealley_business_homepage_bizfour_cta ); ?>
                                </a>
                                <?php else : ?>
                                <span>
                                    <?php echo esc_attr( $themealley_business_homepage_bizfour_cta ); ?>
                                </span>                    
                                <?php endif; ?>
                                
                            </div><!-- .bizfour-products-services-cta --> 
                            <?php endif; ?>               
                        
                        </div><!-- .bizfour-products-services-item -->
                        <!-- section1 ends Here -->                
                
                <?php endwhile; ?>
                
            <?php endif; ?>                
                                                                                                                                                          
            
        </div><!-- .bizfour-products-services -->
        <?php endif; ?>
        
</div><!-- .bizfour -->