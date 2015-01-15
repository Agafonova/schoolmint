<div class="bizseven">

			<?php if( !of_get_option('show_bseven_welcome_section') || of_get_option('show_bseven_welcome_section') == 'true' ) : ?>
    		<div class="bizseven-welcome">
    
                    <h1>
                        <?php echo esc_html( of_get_option('bseven_welcome_headline') ); ?>    
                    </h1>
                    
                    <div class="bizseven-welcome-desc">
                        <?php echo of_get_option('bseven_welcome_text'); ?>                                
                    </div>
                    
			</div><!-- .bizseven-welcome -->
            <?php endif; ?>
			
            <?php if( of_get_option('bseven_work_show') != 'false' ) : ?>
    		<div class="bizseven-work">
            
    			<div class="bizseven-work-intro">            
    
                    <h1>
                        <?php 
                            if( of_get_option('bseven_work_headline') ){
                                echo esc_html( of_get_option('bseven_work_headline') );
                            }else {
                                _e('Our Work',  'themealley_business');
                            }
                        ?>    
                    </h1>
                    
                    <div class="bizseven-work-intro-desc">
                        <?php 
                            if( of_get_option('bseven_work_text') ){
                                echo of_get_option('bseven_work_text');
                            }else {
                                _e('You can change this text in welcome text box of welcome section block in Biz seven settings tab of theme options page. You can change this text in welcome text box of welcome section block in Biz seven settings tab of theme options page.',  'themealley_business');
                            }
                        ?>                                
                    </div>
                    
				</div><!-- .bizseven-work-intro -->  
                
    			<div class="bizseven-work-items">
                
					<ul id="da-thumbs" class="da-thumbs">
                    
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
                    
                                  
                
				</div><!-- .bizseven-work-items -->                                                  
                    
			</div><!-- .bizseven-work -->
            <?php endif; ?>
            
            <?php if( of_get_option('bseven_about_show') != 'false' ) : ?>
    		<div class="bizseven-about">
            
                <div class="bizseven-about-title">
                
                	<h1>
                        <?php 
                            if( of_get_option('bseven_about_headline') ){
                                echo esc_html( of_get_option('bseven_about_headline') );
                            }else {
                                _e('About Us',  'themealley_business');
                            }
                        ?>                     
                    </h1>
                    
                </div><!-- .bizseven-about-title -->  
                
                <div class="bizseven-about-content">
                
                        <?php 
                            if( of_get_option('bseven_about_text') ){
                                echo of_get_option('bseven_about_text');
                            }else {
                                _e('You can change this text in welcome text box of welcome section block in Biz one tab of theme options page. You can change this text in welcome text box of welcome section block in Biz two tab of theme options page.',  'themealley_business');
                            }
                        ?>                                      
                    
                </div><!-- .bizseven-about-content -->                          
            
			</div><!-- .bizseven-about -->                        
            <?php endif; ?>
            
</div><!-- .bizseven -->