	
    <div class="footer-five-map">
    
    	<div class="responsive-container">
        
        	<div class="footer-six-map-container">
            
                <div class="footer-widget-sixmap-container">
                            
                    <?php 
                         echo of_get_option('footer_map');
                    ?> 
                                
                 </div>            
            
            </div><!-- .footer-six-map-container --> 
            
        	<div class="footer-six-address">
            
                <?php if( of_get_option('footer_logo_image') ) : ?>
				<div class="footer-logo">
                	<img src="<?php echo of_get_option('footer_logo_image'); ?>">
                </div>
				<?php else : ?>
                <h3><?php bloginfo('name'); ?></h3>
                <?php endif; ?>
                
                <?php if( of_get_option('footer_address') ) : ?>
                <div class="footer-six-address-address">
                	<?php echo of_get_option('footer_address'); ?>
                </div>
                <?php endif; ?>
                
                <?php if( of_get_option('footer_email') ) : ?>
                <div class="footer-six-address-address">
                	<p class="footer-six-email"><?php echo of_get_option('footer_email'); ?></p>
                </div>
                <?php endif; ?>  
                
                <?php if( of_get_option('footer_phone') ) : ?>
                <div class="footer-six-address-address">
                	<p class="footer-six-phone"><?php echo of_get_option('footer_phone'); ?></p>
                </div>
                <?php endif; ?>   
                
                <?php if( of_get_option('footer_fax') ) : ?>
                <div class="footer-six-address-address">
                	<p class="footer-six-fax"><?php echo of_get_option('footer_fax'); ?></p>
                </div>
                <?php endif; ?>  
                
                <?php if( of_get_option('footer_skype') ) : ?>
                <div class="footer-six-address-address">
                	<p class="footer-six-skype"><?php echo of_get_option('footer_skype'); ?></p>
                </div>
                <?php endif; ?>                                                                     
            
            </div><!-- .footer-six-address -->             
        
        </div><!-- .responsive-container -->  
    
    </div><!-- .footer-five-map -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
    	<div class="responsive-container">
        <div class="footer-three-container">
            	
            <div class="footer-widget-four">
            	<?php if ( dynamic_sidebar('footer-left') ); ?>
            </div>
            
            <div class="footer-widget-four">
            	<?php if ( dynamic_sidebar('footer-center-left') ); ?>
            </div>
            
            <div class="footer-widget-four">
            	<?php if ( dynamic_sidebar('footer-center-right') ); ?>
            </div>                        
            
            <div class="footer-widget-four">
            	<?php if ( dynamic_sidebar('footer-right') ); ?>            
            </div>            
        
        </div><!-- .footer-three-container -->
        
        <div class="site-info-three">
        
        		<div class="site-info-three-divider"></div>
                <?php do_action( 'themealley_business_credits' ); ?>
                <?php get_template_part( 'footer', 'copyright' ); ?>
                <?php if( !of_get_option('show_footer_credits') || of_get_option('show_footer_credits') == 'true' ) : ?>
                <?php if( is_home() || is_front_page() ): ?>
                <p>Powered by <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'themealley_business' ); ?>" rel="generator"><?php printf( __( '%s', 'themealley_business' ), 'WordPress' ); ?></a> | <?php printf( __( 'Designed by: %1$s.', 'themealley_business' ), '<a href="http://www.themealley.com/" rel="designer">ThemeAlley.com</a>' ); ?></p>
                <?php endif; ?>
                <?php endif; ?>
        
        </div><!-- .site-info-three -->
          
    	</div><!-- .Responsive-Container -->
                    
	</footer><!-- #colophon -->