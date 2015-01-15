<div class="biznine">

	<?php if( !of_get_option('show_bnine_products_section') || of_get_option('show_bnine_products_section') == 'true' ) : ?>
	<div class="biznine-products">
    
            <?php 
			
				$themealley_business_biznine_args = array(
								// Change these category SLUGS to suit your use.
								'ignore_sticky_posts' => 1,
								'post_type' => array('post','page'),
								'meta_key' => '_themealley_business_homelayout_product_order',
								'orderby' => 'meta_value_num',
								'order' => 'ASC',
								'posts_per_page'=> '-1',
							  );

				$themealley_business_biznine_list_of_posts = new WP_Query( $themealley_business_biznine_args );
								
			?>
            
			<?php if ( $themealley_business_biznine_list_of_posts->have_posts() ) : ?>
                <?php /* The loop */ ?>

                <?php $themealley_business_biznine_itemnum = 0; while ( $themealley_business_biznine_list_of_posts->have_posts() ) : $themealley_business_biznine_list_of_posts->the_post(); $themealley_business_biznine_itemnum++ ?>
                
                        <!-- section1 Starts Here -->
                        <?php

								if( $themealley_business_biznine_itemnum % 3 != 0 ){
									$themealley_business_biznine_product_item_bg = 'biznine-products-item-x-y';
								}else {
									$themealley_business_biznine_product_item_bg = 'biznine-products-item-x';
								}
														
								if( ( $themealley_business_biznine_itemnum - 1 ) % 3 == 0 ){
									echo '<div class="clear-both biznine-products-item '.$themealley_business_biznine_product_item_bg.'">';
								}else {
									echo '<div class="biznine-products-item '.$themealley_business_biznine_product_item_bg.'">';
								}	
													
						?>    
    
        
                            <div class="biznine-products-item-title">
																<?php 
                                                                    $themealley_business_homepage_biznine_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_biznine_linkimg) || $themealley_business_homepage_biznine_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_biznine_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_biznine_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_biznine_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_biznine_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_biznine_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_biznine_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_biznine_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_biznine_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_biznine_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>                            
                            </div><!-- .biznine-products-item-title -->
                            
                            <div class="biznine-products-item-desc">
                                <?php 
                                      $themealley_business_homepage_biznine_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                      if( !empty($themealley_business_homepage_biznine_desc) ){
                                          echo $themealley_business_homepage_biznine_desc;
                                      }else {
                                          the_excerpt();
                                      }
                                ?>                             
                            </div><!-- .biznine-products-item-desc -->
                            
                            <div class="biznine-products-item-image">
                                                        <?php 
                                                            $themealley_business_homepage_biznine_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                            if( empty($themealley_business_homepage_biznine_linkimg) || $themealley_business_homepage_biznine_linkimg != 'on' ) : 
                                                        ?>
                                                        <a href="
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_biznine_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                            
                                                            if( !empty($themealley_business_homepage_biznine_ctalink) ){
                                                                echo esc_url( $themealley_business_homepage_biznine_ctalink );
                                                            }else{
                                                                the_permalink();
                                                            }
                                                        ?>
                                                        ">
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_biznine_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                                            if( !empty( $themealley_business_homepage_biznine_img ) ){
                                                                echo '<img class="" src="'.esc_url( $themealley_business_homepage_biznine_img ).'" />';
                                                            }else {
                                                                echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                            }
                                                        ?>                                    
                                                        </a>
                                                        <?php else : ?>
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_biznine_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                                            if( !empty( $themealley_business_homepage_biznine_img ) ){
                                                                echo '<img class="" src="'.esc_url( $themealley_business_homepage_biznine_img ).'" />';
                                                            }else {
                                                                echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                            }
                                                        ?>                                           
                                                        <?php endif; ?>                            
                            </div><!-- .biznine-products-item-image -->                       
                        
                        </div><!-- .biznine-products-item -->
                        
                <?php endwhile; wp_reset_postdata(); ?>
                
            <?php endif; ?>                        
        
    </div><!-- .biznine-products -->
    <?php endif; ?>
    
    <?php if( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) : ?>
	<div class="biznine-quote">
    
            <?php 
				if( of_get_option('quote_section_text_biz1') ) {
					$themealley_business_biznine_quote_v = '1';
				}else{
					$themealley_business_biznine_quote_v = '0';
				}
				if( of_get_option('quote_section_text_biz2') ) {
					$themealley_business_biznine_quote_w = '1';
				}else{
					$themealley_business_biznine_quote_w = '0';
				}
				if( of_get_option('quote_section_text_biz3') ) {
					$themealley_business_biznine_quote_x = '1';
				}else{
					$themealley_business_biznine_quote_x = '0';
				}
				if( of_get_option('quote_section_text_biz4') ) {
					$themealley_business_biznine_quote_y = '1';
				}else{
					$themealley_business_biznine_quote_y = '0';
				}	
				if( of_get_option('quote_section_text_biz5') ) {
					$themealley_business_biznine_quote_z = '1';
				}else{
					$themealley_business_biznine_quote_z = '0';
				}
				
				$themealley_business_biznine_quote_a = $themealley_business_biznine_quote_v + $themealley_business_biznine_quote_w + $themealley_business_biznine_quote_x + $themealley_business_biznine_quote_y + $themealley_business_biznine_quote_z;
				
				if( $themealley_business_biznine_quote_a == '5' ){													
					$themealley_business_bizninequoterandomnum = rand(1, 5);
				}elseif ( $themealley_business_biznine_quote_a == '4' ){
					$themealley_business_bizninequoterandomnum = rand(1, 4);
				}elseif ( $themealley_business_biznine_quote_a == '3' ){
					$themealley_business_bizninequoterandomnum = rand(1, 3);
				}elseif ( $themealley_business_biznine_quote_a == '2' ){
					$themealley_business_bizninequoterandomnum = rand(1, 2);
				}else{
					$themealley_business_bizninequoterandomnum = '1';
				} 
				
				$themealley_business_bizninequotetext = 'quote_section_text_biz'.$themealley_business_bizninequoterandomnum;
				$themealley_business_bizninequotename = 'quote_section_name_biz'.$themealley_business_bizninequoterandomnum;
				
			?>
            
            <div class="biznine-quote-text">
                
                <p>"<?php echo esc_html( of_get_option( $themealley_business_bizninequotetext ) ); ?>"</p> 
                    
            </div><!-- .biz0neplus-quote-text -->
            
            <p class="biznine-quote-name">
            
                <span>
                    <?php echo esc_attr( of_get_option( $themealley_business_bizninequotename ) ); ?>
                </span>   
            </p>     
    
    </div><!-- .biznine-quote -->  
    <?php endif; ?>
    
    <?php if( !of_get_option('bnine_show_welcome_section') || of_get_option('bnine_show_welcome_section') == 'true' ) : ?>
	<div class="biznine-about">
    
    	<div class="biznine-about-inner">
    
            <h1>
                <?php echo esc_html( of_get_option('bnine_welcome_headline') ); ?>    
            </h1>
            
            <div class="biznine-about-inner-content">
                <?php echo of_get_option('bnine_welcome_text'); ?>                                
            </div>
            
       </div>    
    
    </div><!-- .biznine-about -->  
    <?php endif; ?>
    
    <?php if( !of_get_option('show_footer_client_logos') || of_get_option('show_footer_client_logos') == 'true' ) : ?>
	<div class="biznine-clients">
    	<?php get_template_part( 'client', 'logos' ); ?>
    </div><!-- .biznine-clients -->            
	<?php endif; ?>
    
</div><!-- .biznine -->