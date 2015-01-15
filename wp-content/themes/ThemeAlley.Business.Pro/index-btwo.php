<div class="biztwo">

	<div class="biztwo-products-container">
    
    	<?php if( !of_get_option('show_biztwo_welcome_section') || of_get_option('show_biztwo_welcome_section') == 'true' ) : ?>
        <div class="biztwo-welcome">
        
            <h1>
                                <?php 
									if( of_get_option('biztwo_welcome_headline') ){
										echo esc_html( of_get_option('biztwo_welcome_headline') );
									}else {
										_e('Welcome Headline Comes Here',  'themealley_business');
									}
								?>    
            </h1>
            
            <div class="biztwo-welcome-desc">
                                <?php 
									if( of_get_option('biztwo_welcome_text') ){
										echo of_get_option('biztwo_welcome_text');
									}else {
										_e('You can change this text in welcome text box of welcome section block in Biz two tab of theme options page. You can change this text in welcome text box of welcome section block in Biz two tab of theme options page.',  'themealley_business');
									}
								?>                                
            </div>    
        
        </div><!-- .biztwo-welcome -->
        <?php endif; ?>
        
        <?php if( !of_get_option('show_btwo_products_section') || of_get_option('show_btwo_products_section') == 'true' ) : ?>
        <div class="biztwo-products-services">
        
            <?php 
			
				$themealley_business_bizoneplus_args = array(
								// Change these category SLUGS to suit your use.
								'ignore_sticky_posts' => 1,
								'post_type' => array('post','page'),
								'meta_key' => '_themealley_business_homelayout_product_order',
								'orderby' => 'meta_value_num',
								'order' => 'ASC',
								'posts_per_page'=> '-1',
							  );

				$themealley_business_bizoneplus_list_of_posts = new WP_Query( $themealley_business_bizoneplus_args );
								
			?>
            
			<?php if ( $themealley_business_bizoneplus_list_of_posts->have_posts() ) : ?>
                <?php /* The loop */ ?>

                <?php $themealley_business_bizoneplus_itemnum = 0; while ( $themealley_business_bizoneplus_list_of_posts->have_posts() ) : $themealley_business_bizoneplus_list_of_posts->the_post(); $themealley_business_bizoneplus_itemnum++ ?>
                
				<!-- Section1 starts here -->
                <div class="biztwo-products-services-item">
                
                    <div class="biztwo-products-services-img">
                    
                                                        <?php 
                                                            $themealley_business_homepage_biztwo_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                            if( empty($themealley_business_homepage_biztwo_linkimg) || $themealley_business_homepage_biztwo_linkimg != 'on' ) : 
                                                        ?>
                                                        <a href="
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_biztwo_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                            
                                                            if( !empty($themealley_business_homepage_biztwo_ctalink) ){
                                                                echo esc_url( $themealley_business_homepage_biztwo_ctalink );
                                                            }else{
                                                                the_permalink();
                                                            }
                                                        ?>
                                                        ">
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_biztwo_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                                            if( !empty( $themealley_business_homepage_biztwo_img ) ){
                                                                echo '<img class="" src="'.esc_url( $themealley_business_homepage_biztwo_img ).'" />';
                                                            }else {
                                                                echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                            }
                                                        ?>                                    
                                                        </a>
                                                        <?php else : ?>
                                                        <?php 
                                                        
                                                            $themealley_business_homepage_biztwo_img = get_post_meta($post->ID, '_themealley_business_homelayout_image', true);
                                                            if( !empty( $themealley_business_homepage_biztwo_img ) ){
                                                                echo '<img class="" src="'.esc_url( $themealley_business_homepage_biztwo_img ).'" />';
                                                            }else {
                                                                echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg2.png"  />';
                                                            }
                                                        ?>                                           
                                                        <?php endif; ?>                    
            
                    </div><!-- .biztwo-products-services-img -->
                    
                    <div class="biztwo-products-services-content">
                    
                        <p class="biztwo-products-services-name">
                        
																<?php 
                                                                    $themealley_business_homepage_biztwo_linkimg = get_post_meta($post->ID, '_themealley_business_homepage_link_title', true);
                                                                    if( empty($themealley_business_homepage_biztwo_linkimg) || $themealley_business_homepage_biztwo_linkimg != 'on' ) :
                                                                ?>
                                                                <a href="
                                                                <?php 
                                                                
                                                                    $themealley_business_homepage_biztwo_ctalink = get_post_meta($post->ID, '_themealley_business_homelayout_cta_url', true);
                                                                    
                                                                    if( !empty($themealley_business_homepage_biztwo_ctalink) ){
                                                                        echo esc_url( $themealley_business_homepage_biztwo_ctalink );
                                                                    }else{
                                                                        the_permalink();
                                                                    }
                                                                ?>
                                                                ">
                                                                <?php 
																
																	$themealley_business_homepage_biztwo_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_biztwo_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_biztwo_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?> 
                                                                </a>
                                                                <?php else : ?>
                                                                <?php 
																
																	$themealley_business_homepage_biztwo_title = get_post_meta($post->ID, '_themealley_business_homelayout_product_title', true);
																	
                                                                    if( !empty( $themealley_business_homepage_biztwo_title ) ){
                                                                        echo esc_attr( $themealley_business_homepage_biztwo_title );
                                                                    }else {
                                                                        the_title();
                                                                    }
                                                                ?>                                                    
                                                                <?php endif; ?>
                                                                    
                        </p><!-- .biztwo-products-services-name -->
                        
                        <div class="biztwo-products-services-description">
                        
                                                               <?php 
                                                                    $themealley_business_homepage_biztwo_desc = get_post_meta($post->ID, '_themealley_business_homelayout_description', true);
                                                                    if( !empty($themealley_business_homepage_biztwo_desc) ){
                                                                        echo $themealley_business_homepage_biztwo_desc;
                                                                    }else {
                                                                        echo get_the_excerpt();
                                                                    }
                                                                ?>  
                                                                   
                        </div><!-- .biztwo-products-services-description -->                
                    
                    </div><!-- .biztwo-products-services-content -->
                
                </div><!-- .biztwo-products-services-item -->
                <!-- Section1 ends here -->                
                
                <?php endwhile; ?>
                
            <?php endif; wp_reset_postdata(); ?>            

		</div><!-- .biztwo-products-services -->
        <?php endif; ?>
        
        <?php if( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) : ?>
        <div class="biztwo-quote">
        
            <?php 
				if( of_get_option('quote_section_text_biz1') ) {
					$themealley_business_biztwo_quote_v = '1';
				}else{
					$themealley_business_biztwo_quote_v = '0';
				}
				if( of_get_option('quote_section_text_biz2') ) {
					$themealley_business_biztwo_quote_w = '1';
				}else{
					$themealley_business_biztwo_quote_w = '0';
				}
				if( of_get_option('quote_section_text_biz3') ) {
					$themealley_business_biztwo_quote_x = '1';
				}else{
					$themealley_business_biztwo_quote_x = '0';
				}
				if( of_get_option('quote_section_text_biz4') ) {
					$themealley_business_biztwo_quote_y = '1';
				}else{
					$themealley_business_biztwo_quote_y = '0';
				}	
				if( of_get_option('quote_section_text_biz5') ) {
					$themealley_business_biztwo_quote_z = '1';
				}else{
					$themealley_business_biztwo_quote_z = '0';
				}
				
				$themealley_business_biztwo_quote_a = $themealley_business_biztwo_quote_v + $themealley_business_biztwo_quote_w + $themealley_business_biztwo_quote_x + $themealley_business_biztwo_quote_y + $themealley_business_biztwo_quote_z;
				
				if( $themealley_business_biztwo_quote_a == '5' ){													
					$themealley_business_btwoquoterandomnum = rand(1, 5);
				}elseif ( $themealley_business_biztwo_quote_a == '4' ){
					$themealley_business_btwoquoterandomnum = rand(1, 4);
				}elseif ( $themealley_business_biztwo_quote_a == '3' ){
					$themealley_business_btwoquoterandomnum = rand(1, 3);
				}elseif ( $themealley_business_biztwo_quote_a == '2' ){
					$themealley_business_btwoquoterandomnum = rand(1, 2);
				}else{
					$themealley_business_btwoquoterandomnum = '1';
				}
				
				$themealley_business_btwoquotetext = 'quote_section_text_biz'.$themealley_business_btwoquoterandomnum;
				$themealley_business_btwoquotename = 'quote_section_name_biz'.$themealley_business_btwoquoterandomnum;
				
			?>        
        
            <div class="biz0ne-quote-text">
                
                <p>
                    <?php echo esc_html( of_get_option( $themealley_business_btwoquotetext ) ); ?>
                </p> 
                    
            </div><!-- .biz0ne-quote-text -->
            
            <p class="biz0ne-quote-name">
            
                <span>
                    <?php echo esc_attr( of_get_option( $themealley_business_btwoquotename ) ); ?>
                </span>   
            </p>          
        
        </div><!-- .biztwo-quote -->
        <?php endif; ?>

	</div><!-- .biztwo-products -->
    
	<div class="biztwo-portfolio-container">
    
    	<div class="biztwo-portfolio">
        
        	<div class="biztwo-portfolio-heading">
				<?php _e('Portfolio',  'themealley_business'); ?>
            </div>
            
            
            <?php 
				if( of_get_option('btwo_protfolio_num') ){
					$themealley_business_btwoport_num = of_get_option('btwo_protfolio_num');
				}else{
					$themealley_business_btwoport_num = 3;
				}
				$themealley_business_btwoport_args = array(
								// Change these category SLUGS to suit your use.
								'ignore_sticky_posts' => 1,
								'post_type' => array('post','page'),
								'meta_key' => '_themealley_business_portfolio_order',
								'orderby' => 'meta_value_num',
								'order' => 'ASC',
								'posts_per_page'=> $themealley_business_btwoport_num,
							  );

				$themealley_business_btwoport_list_of_posts = new WP_Query( $themealley_business_btwoport_args );
								
			?>
            
			<?php if ( $themealley_business_btwoport_list_of_posts->have_posts() ) : ?>
            
                <?php /* The loop */ ?>
                <?php while ( $themealley_business_btwoport_list_of_posts->have_posts() ) : $themealley_business_btwoport_list_of_posts->the_post(); ?>
                
                    <div class="biztwo-portfolio-item">
                        
                        <p class="biztwo-portfolio-item-image">
								<?php 
                                      $themealley_business_homepage_biztwo_port_img = get_post_meta($post->ID, '_themealley_business_portfolio_image', true);
                                      if( !empty( $themealley_business_homepage_biztwo_port_img ) ){
                                          echo '<img class="" src="'.esc_url( $themealley_business_homepage_biztwo_port_img ).'" />';
                                      }
                               ?>
                        </p>
                        
                        <p class="biztwo-portfolio-item-name">
                               <a href="
								<?php
                                    $themealley_business_biztwo_portfolio_cta_url = get_post_meta($post->ID, '_themealley_business_portfolio_cta_url', true);
                                    if( !empty( $themealley_business_biztwo_portfolio_cta_url ) ) {
                                            echo esc_url( $themealley_business_biztwo_portfolio_cta_url );
                                        } else {
                                            the_permalink();
                                        }
                                ?>
                               ">
								<?php
                                    $themealley_business_biztwo_portfolio_title = get_post_meta($post->ID, '_themealley_business_portfolio_title', true);
                                    if( !empty( $themealley_business_biztwo_portfolio_title ) ) {
                                            echo esc_attr( $themealley_business_biztwo_portfolio_title );
                                        } else {
                                            the_title();
                                        }
                                ?>
                               </a>
                        </p>
                    
                    </div><!-- .biztwo-portfolio-item -->                
                
                <?php endwhile; ?>
                
            <?php endif; ?>                                            
                                                                                                                                 
        
        </div>

	</div><!-- .biztwo-portfolio -->    

</div><!-- .biztwo -->

<?php if( !of_get_option('show_biztwo_posts') || of_get_option('show_biztwo_posts') == 'true' ) : ?>
<div class="biztwo">
	
		<?php 
			
			if( 'page' == get_option( 'show_on_front' ) ){	
				get_template_part('index', 'page');
			}else {
				get_template_part('index', 'standard');
			}			 
			
		?>
		
</div><!-- .biztwo -->
<?php endif; ?> 