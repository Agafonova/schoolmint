<div class="bizeight">

	<div class="bizeight-welcome">
    
                	<h2>
                        <?php 
                            if( of_get_option('beight_products_headline') ){
                                echo esc_attr( of_get_option('beight_products_headline') );
                            }else {
                                _e('Products',  'themealley_business');
                            }
                        ?>                    
                    </h2>
                    
                    <?php if( of_get_option('beight_products_description') ) : ?>
                    <p class="bizeight-products-description">
                    	<?php echo esc_html(of_get_option('beight_products_description')); ?>
                    </p>
                    <?php endif; ?>
                    
					<?php 
                    
                        $themealley_business_bizeight_products_args = array(
                                        // Change these category SLUGS to suit your use.
                                        'ignore_sticky_posts' => 1,
                                        'post_type' => array('post','page'),
                                        'meta_key' => '_themealley_business_homelayout_product_order',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC',
                                        'posts_per_page'=> '-1',
                                      );
        
                        $themealley_business_bizeight_products_list_of_posts = new WP_Query( $themealley_business_bizeight_products_args );
                                        
                    ?>
                    
                    <?php if ( $themealley_business_bizeight_products_list_of_posts->have_posts() ) : ?>
                        <?php /* The loop */ ?>
        
                        <?php $themealley_business_bizeight_products_itemnum = 0; while ( $themealley_business_bizeight_products_list_of_posts->have_posts() ) : $themealley_business_bizeight_products_list_of_posts->the_post(); $themealley_business_bizeight_products_itemnum++ ?>                    
                    
                    <!-- Product-service item starts Here -->
                    <div class="bizeight-products-services-item">
                    
                            <?php 
								$themealley_business_homepage_bizeight_products_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
								if( !empty($themealley_business_homepage_bizeight_products_img) ) : 
							?>
                            <div class="bizeight-products-services-img">
                                                        
                                                        <?php echo '<img class="" src="'.$themealley_business_homepage_bizeight_products_img.'" />'; ?>                
                            
                            </div><!-- .bizeight-products-services-img -->
                            <?php endif; ?>
                            
                            <?php if( !empty($themealley_business_homepage_bizeight_products_img) ) : ?>
                            <div class="bizeight-products-services-name-cont">
                            <?php endif; ?>
                            
                                <div class="bizeight-products-services-name">
                                                                    
																<?php 
                                                                    $themealley_business_homepage_bizeight_products_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_bizeight_products_linkimg) || $themealley_business_homepage_bizeight_products_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_bizeight_products_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_bizeight_products_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_bizeight_products_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_bizeight_products_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizeight_products_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizeight_products_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_bizeight_products_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_bizeight_products_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_bizeight_products_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>
                                                                            
                                </div><!-- .bizeight-products-services-name -->
                                
                                <div class="bizeight-products-services-description">
                                                                <?php 
                                                                    $themealley_business_homepage_bizeight_products_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                                                    if( !empty($themealley_business_homepage_bizeight_products_desc) ){
                                                                        echo $themealley_business_homepage_bizeight_products_desc;
                                                                    }else {
                                                                        the_excerpt();
                                                                    }
                                                                ?>        
                                </div><!-- .bizeight-products-services-description -->
                            
                            <?php if( !empty($themealley_business_homepage_bizeight_products_img) ) : ?>    
                            </div><!-- .bizeight-products-services-name-cont -->
                            <?php endif; ?>                    
                    
                    </div><!-- .bizeight-products-services-item -->
                    <!-- Product-service item ends Here -->
                    
					<?php endwhile; ?>
                    
                <?php endif; wp_reset_postdata(); ?>    
    
    </div><!-- .bizeight-welcome -->  
    
	<div class="bizeight-clients">
    
        	<h2>
                        <?php 
                            if( of_get_option('beight_blog_headline') ){
                                echo esc_attr( of_get_option('beight_blog_headline') );
                            }else {
                                _e('Portfolio',  'themealley_business');
                            }
                        ?>             
            </h2>
            
            <div class="bizeight-clients-cont">
            
                <ul id="bizeight-da-thumbs" class="bizeight-da-thumbs">
                        
                        <?php 
                        
                            if( of_get_option('bseven_work_number') ){
                                $themealley_business_portfolio_args_num = of_get_option('bseven_work_number');
                            }else{
                                $themealley_business_portfolio_args_num = '12';
                            }
                            
                            $themealley_business_portfolio_args = array(
                                            // Change these category SLUGS to suit your use.
                                            'ignore_sticky_posts' => 1,
                                            'post_type' => array('post','page'),
                                            'meta_key' => '_themealley_business_portfolio_order',
                                            'orderby' => 'meta_value_num',
                                            'order' => 'ASC',
                                            'posts_per_page'=> $themealley_business_portfolio_args_num,
                                          );
            
                            $themealley_business_portfolio_list_of_posts = new WP_Query( $themealley_business_portfolio_args );
                            
                        ?>
                        
                        <?php if ( $themealley_business_portfolio_list_of_posts->have_posts() ) : ?>
                            <?php /* The loop */ ?>
                            <?php $themealley_business_portfolio_itemnum = 0; while ( $themealley_business_portfolio_list_of_posts->have_posts() ) : $themealley_business_portfolio_list_of_posts->the_post(); $themealley_business_portfolio_itemnum++ ?>  
                            
                                    <li>
                                        <a href="<?php the_permalink() ?>">
                                            <?php
                                                 $themealley_business_portfolio_cta_img = get_post_meta($post->ID, '_themealley_business_portfolio_image', true);
                                                if( !empty( $themealley_business_portfolio_cta_img ) ) {
                                                    echo '<img src="'.$themealley_business_portfolio_cta_img.'" />';
                                                } else {
                                                    echo '<img src="'.get_template_directory_uri().'/images/portfolio-img.png" />';
                                                }
                                            ?>
                                            <div><span><?php echo themealley_business_get_limited_string(get_the_title(), 40, '...'); ?></span></div>
                                        </a>
                                    </li>                        
                            
                            <?php endwhile; ?>
                            
                        <?php endif;  wp_reset_postdata(); ?>                  
                        
                </ul>
                        
 
                
    	</div><!-- .bizeight-clients-cont -->                                   
    
    </div><!-- .bizeight-clients -->  
    
	<div class="bizeight-blog">
    
        	<h2>
                        <?php 
                            if( of_get_option('beight_news_headline') ){
                                echo esc_attr( of_get_option('beight_news_headline') );
                            }else {
                                _e('News',  'themealley_business');
                            }
                        ?>             
            </h2>
            
					<?php 
                    	
						if( of_get_option('beight_news_number') ){
							$themealley_business_bizeight_news_num = of_get_option('beight_news_number');
						}else{
							$themealley_business_bizeight_news_num = '3';
						}
						if( of_get_option('beight_news_category') ){
							$themealley_business_bizeight_news_cat = of_get_option('beight_news_category');
						}else{
							$themealley_business_bizeight_news_cat = '1';
						}						
                        $themealley_business_bizeight_news_args = array(
                                        // Change these category SLUGS to suit your use.
                                        'category__in' => $themealley_business_bizeight_news_cat,
										'ignore_sticky_posts' => 1,
                                        'posts_per_page'=> $themealley_business_bizeight_news_num,
                                      );
        
                        $themealley_business_bizeight_news_list_of_posts = new WP_Query( $themealley_business_bizeight_news_args );
                                        
                    ?>
                    
                    <?php if ( $themealley_business_bizeight_news_list_of_posts->have_posts() ) : ?>
                        <?php /* The loop */ ?>
        
                        <?php $themealley_business_bizeight_news_itemnum = 0; while ( $themealley_business_bizeight_news_list_of_posts->have_posts() ) : $themealley_business_bizeight_news_list_of_posts->the_post(); $themealley_business_bizeight_news_itemnum++ ?>
                        
                        <!-- News item starts Here -->
                    	<div class="bizeight-news-item"> 
                        
                        		<div class="bizeight-news-name">
                                	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div><!-- .bizeight-news-name -->
                        
                                <div class="bizeight-news-description">
                                     <?php echo themealley_business_get_limited_string(get_the_excerpt(), 150, '...') ?>        
                                </div><!-- .bizeight-news-description --> 
                                
                                <?php if ( of_get_option('beight_show_news_button') != 'false' ) : ?>
                                <div class="bizeight-news-cta">
                                      <a href="<?php the_permalink(); ?>"> 
										<?php 
                                            if( of_get_option('beight_blog_cta') ){
                                                echo esc_attr( of_get_option('beight_blog_cta') );
                                            }else {
                                                _e('Read More',  'themealley_business');
                                            }
                                        ?>                                      
                                      </a>       
                                </div><!-- .bizeight-news-cta -->
                                <?php endif; ?>                                                       
                        
                        </div><!-- .bizeight-news-item -->
                        <!-- News item ends Here -->                                               
						
						
					<?php endwhile; ?>
                    
                <?php endif; wp_reset_postdata(); ?>     
    
    </div><!-- .bizeight-blog -->        
		
</div><!-- .bizeight -->