<div class="bizsix">

					<?php 
                    
                        $themealley_business_bizsix_products_args = array(
                                        // Change these category SLUGS to suit your use.
                                        'ignore_sticky_posts' => 1,
                                        'post_type' => array('post','page'),
                                        'meta_key' => '_themealley_business_homelayout_product_order',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC',
                                        'posts_per_page'=> '-1',
                                      );
        
                        $themealley_business_bizsix_products_list_of_posts = new WP_Query( $themealley_business_bizsix_products_args );
                                        
                    ?>
                    
                    <?php if ( $themealley_business_bizsix_products_list_of_posts->have_posts() ) : ?>
                        <?php /* The loop */ ?>
        
                        <?php $themealley_business_bizsix_products_itemnum = 0; while ( $themealley_business_bizsix_products_list_of_posts->have_posts() ) : $themealley_business_bizsix_products_list_of_posts->the_post(); $themealley_business_bizsix_products_itemnum++ ?> 
                    
                    <?php if( ($themealley_business_bizsix_products_itemnum % 2 ) != 0 ) : ?>    
                    <!-- Product item starts Here -->
                    <div class="bizsix-products-item <?php if( $themealley_business_bizsix_products_itemnum != 1 ) { echo 'bizsix-products-item-top-border'; } ?>">
                    
                    	<div class="bizsix-products-item-image bizsix-image-align-left">
                        
                               <?php 
                                                        
                                    $themealley_business_homepage_bizsix_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                    if( !empty( $themealley_business_homepage_bizsix_img ) ){
                                          echo '<img class="" src="'.esc_url( $themealley_business_homepage_bizsix_img ).'" />';
                                    }else {
                                          echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                    }
									
                               ?>                         
                        
                        </div><!-- .bizsix-products-item-image -->
                        
                    	<div class="bizsix-products-item-description">
                        
                        	<h2>
                               <?php 
																
									$themealley_business_homepage_bizsix_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                    if( !empty( $themealley_business_homepage_bizsix_title ) ){
                                           echo esc_attr( $themealley_business_homepage_bizsix_title );
                                    }else {
                                           the_title();
                                    }
									
                              ?>
                            </h2>
                            
                            <?php 
                                 
								 $themealley_business_homepage_bizsix_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                 if( !empty($themealley_business_homepage_bizsix_desc) ){
                                       echo $themealley_business_homepage_bizsix_desc;
                                 }else {
                                       the_excerpt();
                                 }
																	
                            ?>
                            
                            <?php 
								$themealley_business_homepage_bizsix_cta = get_post_meta($post->ID, '_themealley_business_homelayout_cta', true);
								if( !empty($themealley_business_homepage_bizsix_cta) ) : 
							?>
                            <div class="bizsix-products-item-button">
                                
                                <?php 
                                   $themealley_business_homepage_bizsix_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                   if( empty($themealley_business_homepage_bizsix_linkimg) || $themealley_business_homepage_bizsix_linkimg != 'on' ) : 
                                ?>
                                <a href="
                                <?php 
                                                        
                                     $themealley_business_homepage_bizsix_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                            
                                     if( !empty($themealley_business_homepage_bizsix_ctalink) ){
                                         echo esc_url( $themealley_business_homepage_bizsix_ctalink );
                                     }else{
                                         the_permalink();
                                     }
									 
                                ?>
                                ">
                                    <?php echo esc_attr( $themealley_business_homepage_bizsix_cta ); ?>
                                </a>
                                <?php else : ?>
                                <span>
                                    <?php echo esc_attr( $themealley_business_homepage_bizsix_cta ); ?>
                                </span>                    
                                <?php endif; ?>
                                
                            </div><!-- .bizsix-products-item-button --> 
                            <?php endif; ?>                            
                                                                                       
                        </div><!-- .bizsix-products-item-description -->                        
                    
                    </div><!-- .bizsix-products-item -->
                    <!-- Product item ends Here -->
                    <?php else : ?>
                    <!-- Product item starts Here -->
                    <div class="bizsix-products-item <?php if( $themealley_business_bizsix_products_itemnum != 1 ) { echo 'bizsix-products-item-top-border'; } ?>">
                    
                    	<div class="bizsix-products-item-description">
                        
                        	<h2>
                               <?php 
																
									$themealley_business_homepage_bizsix_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                    if( !empty( $themealley_business_homepage_bizsix_title ) ){
                                           echo esc_attr( $themealley_business_homepage_bizsix_title );
                                    }else {
                                           the_title();
                                    }
									
                              ?>
                            </h2>
                            
                            <?php 
                                 
								 $themealley_business_homepage_bizsix_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                 if( !empty($themealley_business_homepage_bizsix_desc) ){
                                       echo $themealley_business_homepage_bizsix_desc;
                                 }else {
                                       the_excerpt();
                                 }
																	
                            ?> 
                            
                            <?php 
								$themealley_business_homepage_bizsix_cta = get_post_meta($post->ID, '_themealley_business_homelayout_cta', true);
								if( !empty($themealley_business_homepage_bizsix_cta) ) : 
							?>
                            <div class="bizsix-products-item-button">
                                
                                <?php 
                                   $themealley_business_homepage_bizsix_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                   if( empty($themealley_business_homepage_bizsix_linkimg) || $themealley_business_homepage_bizsix_linkimg != 'on' ) : 
                                ?>
                                <a href="
                                <?php 
                                                        
                                     $themealley_business_homepage_bizsix_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                            
                                     if( !empty($themealley_business_homepage_bizsix_ctalink) ){
                                         echo esc_url( $themealley_business_homepage_bizsix_ctalink );
                                     }else{
                                         the_permalink();
                                     }
									 
                                ?>
                                ">
                                    <?php echo esc_attr( $themealley_business_homepage_bizsix_cta ); ?>
                                </a>
                                <?php else : ?>
                                <span>
                                    <?php echo esc_attr( $themealley_business_homepage_bizsix_cta ); ?>
                                </span>                    
                                <?php endif; ?>
                                
                            </div><!-- .bizsix-products-item-button --> 
                            <?php endif; ?>                                                         
                                                                                       
                        </div><!-- .bizsix-products-item-description -->                     
                    	
                        <div class="bizsix-products-item-image bizsix-image-align-right">
                        
                               <?php 
                                                        
                                    $themealley_business_homepage_bizsix_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                    if( !empty( $themealley_business_homepage_bizsix_img ) ){
                                          echo '<img class="" src="'.esc_url( $themealley_business_homepage_bizsix_img ).'" />';
                                    }else {
                                          echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                    }
									
                               ?>                         
                        
                        </div><!-- .bizsix-products-item-image -->
                    
                    </div><!-- .bizsix-products-item -->
                    <!-- Product item ends Here -->                    
                    <?php endif; ?>                                           
                        
					<?php endwhile; ?>
                    
                <?php endif; wp_reset_postdata(); ?> 
		
</div><!-- .bizsix -->