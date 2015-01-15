<div class="bizthree">

		<?php if( !of_get_option('show_bizthree_welcome_section') || of_get_option('show_bizthree_welcome_section') == 'true' ) : ?>
        <div class="bizthree-welcome">
        
            <h1>
                <?php 
                    if( of_get_option('bizthree_welcome_headline') ){
                        echo esc_html( of_get_option('bizthree_welcome_headline') );
                    }else {
                        _e('Welcome Headline Comes Here bizthree',  'themealley_business');
                    }
                ?>    
            </h1>
            
            <div class="bizthree-welcome-desc">
                <?php 
                    if( of_get_option('bizthree_welcome_text') ){
                        echo of_get_option('bizthree_welcome_text');
                    }else {
                        _e('You can change this text in welcome text box of welcome section block in Biz three settings tab of theme options page. You can change this text in welcome text box of welcome section block in Biz three settings tab of theme options page.',  'themealley_business');
                    }
                ?>                                
            </div>    
        
        </div><!-- .bizthree-welcome -->
        <?php endif; ?>
        
        <?php if( !of_get_option('show_bthree_products_section') || of_get_option('show_bthree_products_section') == 'true' ) : ?>
        <div class="bizthree-products-services">
        	
            <?php 
			
				$themealley_business_bizthree_args = array(
								// Change these category SLUGS to suit your use.
								'ignore_sticky_posts' => 1,
								'post_type' => array('post','page'),
								'meta_key' => '_themealley_business_homelayout_product_order',
								'orderby' => 'meta_value_num',
								'order' => 'ASC',
								'posts_per_page'=> '-1',
							  );

				$themealley_business_bizthree_list_of_posts = new WP_Query( $themealley_business_bizthree_args );
								
			?>
            
			<?php if ( $themealley_business_bizthree_list_of_posts->have_posts() ) : ?>
                <?php /* The loop */ ?>

                <?php $themealley_business_bizthree_itemnum = 0; while ( $themealley_business_bizthree_list_of_posts->have_posts() ) : $themealley_business_bizthree_list_of_posts->the_post(); $themealley_business_bizthree_itemnum++ ?>
                
                
                        <!-- section1 Starts Here -->
                        <?php
						
								if( ( ( $themealley_business_bizthree_itemnum != 1 ) && ( $themealley_business_bizthree_itemnum - 1 ) % 3 == 0 ) ){
									echo '<!-- Divider Starts Here -->';
            						echo '<div class="bizthree-products-services-divider"></div>';
            						echo '<!-- Divider Ends Here -->';
									echo '<div class="bizthree-products-services-item">';
								}else {
									echo '<div class="bizthree-products-services-item">';
								}	
													
						?>                        
                        
                            <?php 
								$themealley_business_homepage_bizthree_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
								if( !empty($themealley_business_homepage_bizthree_img) ) : 
							?>
                            <div class="bizthree-products-services-img">
                                                        
                                                        <?php echo '<img class="" src="'.$themealley_business_homepage_bizthree_img.'" />'; ?>                
                            
                            </div><!-- .bizthree-products-services-img -->
                            <?php endif; ?>
                            
                            <?php if( !empty($themealley_business_homepage_bizthree_img) ) : ?>
                            <div class="bizthree-products-services-name-cont">
                            <?php endif; ?>
                            
                                <div class="bizthree-products-services-name">
                                                                    
																<?php 
                                                                    $themealley_business_homepage_bizthree_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_bizthree_linkimg) || $themealley_business_homepage_bizthree_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_bizthree_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_bizthree_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_bizthree_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_bizthree_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizthree_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizthree_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_bizthree_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizthree_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizthree_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>
                                                                            
                                </div><!-- .bizthree-products-services-name -->
                                
                                <div class="bizthree-products-services-description">
                                                                <?php 
                                                                    $themealley_business_homepage_bizthree_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                                                    if( !empty($themealley_business_homepage_bizthree_desc) ){
                                                                        echo $themealley_business_homepage_bizthree_desc;
                                                                    }else {
                                                                        the_excerpt();
                                                                    }
                                                                ?>        
                                </div><!-- .bizthree-products-services-description -->
                            
                            <?php if( !empty($themealley_business_homepage_bizthree_img) ) : ?>    
                            </div><!-- .bizthree-products-services-name-cont -->
                            <?php endif; ?>
                            
                        </div><!-- .bizthree-products-services-item -->
                        <!-- section1 ends Here -->                
                
                
                <?php endwhile; ?>
                
            <?php endif; ?>
            
        </div><!-- .bizthree-products-services -->
        <?php endif; ?>
		
</div><!-- .bizthree -->