<div class="bizfive">

	<div class="bizfive-content-cont">
    		
            <?php if( !of_get_option('show_bfive_welcome_section') || of_get_option('show_bfive_welcome_section') == 'true' ) : ?>
    		<div class="bizfive-welcome">
    
                    <h1>
                        <?php 
                            if( of_get_option('bfive_welcome_headline') ){
                                echo esc_html( of_get_option('bfive_welcome_headline') );
                            }else {
                                _e('Welcome Headline Comes Here bfive',  'themealley_business');
                            }
                        ?>    
                    </h1>
                    
                    <div class="bizfive-welcome-desc">
                        <?php 
                            if( of_get_option('bfive_welcome_text') ){
                                echo of_get_option('bfive_welcome_text');
                            }else {
                                _e('You can change this text in welcome text box of welcome section block in Biz Five settings tab of theme options page. You can change this text in welcome text box of welcome section block in Biz Five settings tab of theme options page.',  'themealley_business');
                            }
                        ?>                                
                    </div>
                    
			</div><!-- .bizfive-welcome -->
            <?php endif; ?>
            
            
            <div class="bizfive-products-services">
            
                <div class="bizfive-products">
                
                	<h2>
                        <?php 
                            if( of_get_option('bfive_products_headline') ){
                                echo esc_attr( of_get_option('bfive_products_headline') );
                            }else {
                                _e('Products',  'themealley_business');
                            }
                        ?>                    
                    </h2>
                    
                    <?php if( of_get_option('bfive_products_description') ) : ?>
                    <p class="bizfive-products-description">
                    	<?php echo esc_html(of_get_option('bfive_products_description')); ?>
                    </p>
                    <?php endif; ?>
                    
					<?php 
                    
                        $themealley_business_bizfive_products_args = array(
                                        // Change these category SLUGS to suit your use.
                                        'ignore_sticky_posts' => 1,
                                        'post_type' => array('post','page'),
                                        'meta_key' => '_themealley_business_homelayout_product_order',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC',
                                        'posts_per_page'=> '-1',
                                      );
        
                        $themealley_business_bizfive_products_list_of_posts = new WP_Query( $themealley_business_bizfive_products_args );
                                        
                    ?>
                    
                    <?php if ( $themealley_business_bizfive_products_list_of_posts->have_posts() ) : ?>
                        <?php /* The loop */ ?>
        
                        <?php $themealley_business_bizfive_products_itemnum = 0; while ( $themealley_business_bizfive_products_list_of_posts->have_posts() ) : $themealley_business_bizfive_products_list_of_posts->the_post(); $themealley_business_bizfive_products_itemnum++ ?>                    
                    
                    <!-- Product-service item starts Here -->
                    <div class="bizfive-products-services-item">
                    
                            <?php 
								$themealley_business_homepage_bizfive_products_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
								if( !empty($themealley_business_homepage_bizfive_products_img) ) : 
							?>
                            <div class="bizfive-products-services-img">
                                                        
                                                        <?php echo '<img class="" src="'.$themealley_business_homepage_bizfive_products_img.'" />'; ?>                
                            
                            </div><!-- .bizfive-products-services-img -->
                            <?php endif; ?>
                            
                            <?php if( !empty($themealley_business_homepage_bizfive_products_img) ) : ?>
                            <div class="bizfive-products-services-name-cont">
                            <?php endif; ?>
                            
                                <div class="bizfive-products-services-name">
                                                                    
																<?php 
                                                                    $themealley_business_homepage_bizfive_products_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_bizfive_products_linkimg) || $themealley_business_homepage_bizfive_products_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_bizfive_products_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_bizfive_products_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_bizfive_products_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_bizfive_products_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizfive_products_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizfive_products_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_bizfive_products_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizfive_products_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizfive_products_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>
                                                                            
                                </div><!-- .bizfive-products-services-name -->
                                
                                <div class="bizfive-products-services-description">
                                                                <?php 
                                                                    $themealley_business_homepage_bizfive_products_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                                                    if( !empty($themealley_business_homepage_bizfive_products_desc) ){
                                                                        echo $themealley_business_homepage_bizfive_products_desc;
                                                                    }else {
                                                                        the_excerpt();
                                                                    }
                                                                ?>        
                                </div><!-- .bizfive-products-services-description -->
                            
                            <?php if( !empty($themealley_business_homepage_bizfive_products_img) ) : ?>    
                            </div><!-- .bizfive-products-services-name-cont -->
                            <?php endif; ?>                    
                    
                    </div><!-- .bizfive-products-services-item -->
                    <!-- Product-service item ends Here -->
                    
					<?php endwhile; ?>
                    
                <?php endif; wp_reset_postdata(); ?>                    
                
                </div><!-- .bizfive-products -->
                
                <div class="bizfive-services">
                
                	<h2>
                        <?php 
                            if( of_get_option('bfive_services_headline') ){
                                echo esc_attr( of_get_option('bfive_services_headline') );
                            }else {
                                _e('Services',  'themealley_business');
                            }
                        ?>                    
                    </h2>
                    
                    <?php if( of_get_option('bfive_services_description') ) : ?>
                    <p class="bizfive-services-description">
                    	<?php echo esc_html(of_get_option('bfive_services_description')); ?>
                    </p>
                    <?php endif; ?>                    
                    
					<?php 
                    
                        $themealley_business_bizfive_services_args = array(
                                        // Change these category SLUGS to suit your use.
                                        'ignore_sticky_posts' => 1,
                                        'post_type' => array('post','page'),
                                        'meta_key' => '_themealley_business_homelayout_services_order',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC',
                                        'posts_per_page'=> '-1',
                                      );
        
                        $themealley_business_bizfive_services_list_of_posts = new WP_Query( $themealley_business_bizfive_services_args );
                                        
                    ?>
                    
                    <?php if ( $themealley_business_bizfive_services_list_of_posts->have_posts() ) : ?>
                        <?php /* The loop */ ?>
        
                        <?php $themealley_business_bizfive_services_itemnum = 0; while ( $themealley_business_bizfive_services_list_of_posts->have_posts() ) : $themealley_business_bizfive_services_list_of_posts->the_post(); $themealley_business_bizfive_services_itemnum++ ?>                    
                    
                    <!-- Product-service item starts Here -->
                    <div class="bizfive-products-services-item">
                    
                            <?php 
								$themealley_business_homepage_bizfive_services_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
								if( !empty($themealley_business_homepage_bizfive_services_img) ) : 
							?>
                            <div class="bizfive-products-services-img">
                                                        
                                                        <?php echo '<img class="" src="'.$themealley_business_homepage_bizfive_services_img.'" />'; ?>                
                            
                            </div><!-- .bizfive-products-services-img -->
                            <?php endif; ?>
                            
                            <?php if( !empty($themealley_business_homepage_bizfive_services_img) ) : ?>
                            <div class="bizfive-products-services-name-cont">
                            <?php endif; ?>
                            
                                <div class="bizfive-products-services-name">
                                                                    
																<?php 
                                                                    $themealley_business_homepage_bizfive_services_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_bizfive_services_linkimg) || $themealley_business_homepage_bizfive_services_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_bizfive_services_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_bizfive_services_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_bizfive_services_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_bizfive_services_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizfive_services_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizfive_services_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_bizfive_services_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizfive_services_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizfive_services_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>
                                                                            
                                </div><!-- .bizfive-products-services-name -->
                                
                                <div class="bizfive-products-services-description">
                                                                <?php 
                                                                    $themealley_business_homepage_bizfive_services_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                                                    if( !empty($themealley_business_homepage_bizfive_services_desc) ){
                                                                        echo $themealley_business_homepage_bizfive_services_desc;
                                                                    }else {
                                                                        the_excerpt();
                                                                    }
                                                                ?>        
                                </div><!-- .bizfive-products-services-description -->
                            
                            <?php if( !empty($themealley_business_homepage_bizfive_services_img) ) : ?>    
                            </div><!-- .bizfive-products-services-name-cont -->
                            <?php endif; ?>                    
                    
                    </div><!-- .bizfive-products-services-item -->
                    <!-- Product-service item ends Here -->
                    
					<?php endwhile; ?>
                    
                <?php endif; wp_reset_postdata(); ?>                  
                
                </div><!-- .bizfive-services -->
                
            </div><!-- .bizfive-products-services -->                                                          
    
    </div><!-- .bizfive-content-cont -->
    
	<div class="bizfive-blog-cont">
    	
        <?php if( !of_get_option('show_bfive_news_section') || of_get_option('show_bfive_news_section') == 'true' ) : ?>
        <div class="bizfive-blog">
        
        	<h2>
                        <?php 
                            if( of_get_option('bfive_news_headline') ){
                                echo esc_attr( of_get_option('bfive_news_headline') );
                            }else {
                                _e('News',  'themealley_business');
                            }
                        ?>             
            </h2>
            
					<?php 
                    	
						if( of_get_option('bfive_news_number') ){
							$themealley_business_bizfive_news_num = of_get_option('bfive_news_number');
						}else{
							$themealley_business_bizfive_news_num = '3';
						}
						if( of_get_option('bfive_news_category') ){
							$themealley_business_bizfive_news_cat = of_get_option('bfive_news_category');
						}else{
							$themealley_business_bizfive_news_cat = '1';
						}						
                        $themealley_business_bizfive_news_args = array(
                                        // Change these category SLUGS to suit your use.
                                        'category__in' => $themealley_business_bizfive_news_cat,
										'ignore_sticky_posts' => 1,
                                        'posts_per_page'=> $themealley_business_bizfive_news_num,
                                      );
        
                        $themealley_business_bizfive_news_list_of_posts = new WP_Query( $themealley_business_bizfive_news_args );
                                        
                    ?>
                    
                    <?php if ( $themealley_business_bizfive_news_list_of_posts->have_posts() ) : ?>
                        <?php /* The loop */ ?>
        
                        <?php $themealley_business_bizfive_news_itemnum = 0; while ( $themealley_business_bizfive_news_list_of_posts->have_posts() ) : $themealley_business_bizfive_news_list_of_posts->the_post(); $themealley_business_bizfive_news_itemnum++ ?>
                        
                        <!-- News item starts Here -->
                    	<div class="bizfive-news-item"> 
                        
                        		<div class="bizfive-news-name">
                                	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div><!-- .bizfive-news-name -->
                        
                                <div class="bizfive-news-description">
                                     <?php echo themealley_business_get_limited_string(get_the_excerpt(), 150, '...') ?>        
                                </div><!-- .bizfive-news-description --> 
                                
                                <?php if ( of_get_option('bfive_show_news_button') != 'false' ) : ?>
                                <div class="bizfive-news-cta">
                                      <a href="<?php the_permalink(); ?>"> 
										<?php 
                                            if( of_get_option('bfive_blog_cta') ){
                                                echo esc_attr( of_get_option('bfive_blog_cta') );
                                            }else {
                                                _e('Read More',  'themealley_business');
                                            }
                                        ?>                                      
                                      </a>       
                                </div><!-- .bizfive-news-cta -->
                                <?php endif; ?>                                                       
                        
                        </div><!-- .bizfive-news-item -->
                        <!-- News item ends Here -->                                               
						
						
					<?php endwhile; ?>
                    
                <?php endif; wp_reset_postdata(); ?>            
        
        </div><!-- .bizfive-blog -->  
        <?php endif; ?>
        
        <?php if( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) : ?>
        <div class="bizfive-testimonial">
        
            <?php 
				if( of_get_option('quote_section_text_biz1') ) {
					$themealley_business_bizfour_quote_v = '1';
				}else{
					$themealley_business_bizfour_quote_v = '0';
				}
				if( of_get_option('quote_section_text_biz2') ) {
					$themealley_business_bizfour_quote_w = '1';
				}else{
					$themealley_business_bizfour_quote_w = '0';
				}
				if( of_get_option('quote_section_text_biz3') ) {
					$themealley_business_bizfour_quote_x = '1';
				}else{
					$themealley_business_bizfour_quote_x = '0';
				}
				if( of_get_option('quote_section_text_biz4') ) {
					$themealley_business_bizfour_quote_y = '1';
				}else{
					$themealley_business_bizfour_quote_y = '0';
				}	
				if( of_get_option('quote_section_text_biz5') ) {
					$themealley_business_bizfour_quote_z = '1';
				}else{
					$themealley_business_bizfour_quote_z = '0';
				}
				
				$themealley_business_bizfour_quote_a = $themealley_business_bizfour_quote_v + $themealley_business_bizfour_quote_w + $themealley_business_bizfour_quote_x + $themealley_business_bizfour_quote_y + $themealley_business_bizfour_quote_z;
				
				if( $themealley_business_bizfour_quote_a == '5' ){													
					$themealley_business_bfourquoterandomnum = rand(1, 5);
				}elseif ( $themealley_business_bizfour_quote_a == '4' ){
					$themealley_business_bfourquoterandomnum = rand(1, 4);
				}elseif ( $themealley_business_bizfour_quote_a == '3' ){
					$themealley_business_bfourquoterandomnum = rand(1, 3);
				}elseif ( $themealley_business_bizfour_quote_a == '2' ){
					$themealley_business_bfourquoterandomnum = rand(1, 2);
				}else{
					$themealley_business_bfourquoterandomnum = '1';
				}
				
				$themealley_business_bfourquotetext = 'quote_section_text_biz'.$themealley_business_bfourquoterandomnum;
				$themealley_business_bfourquotename = 'quote_section_name_biz'.$themealley_business_bfourquoterandomnum;
				
			?>
            
            <div class="bizfive-testimonial-text">
                
                <p>
                    <?php echo esc_html( of_get_option( $themealley_business_bfourquotetext ) ); ?>
                </p> 
                    
            </div><!-- .bizfour-quote-text -->
            
            <div class="bizfive-testimonial-name">
            
                <span>
                    <?php echo esc_attr( of_get_option( $themealley_business_bfourquotename ) ); ?>
                </span> 
                  
            </div>        
        
        
        
        </div><!-- .bizfive-testimonial -->
        <?php endif; ?>         
    
    </div><!-- .bizfive-blog-cont -->    
		
</div><!-- .bizfive -->