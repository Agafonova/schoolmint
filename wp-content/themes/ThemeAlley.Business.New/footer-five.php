	
    <div class="footer-five-map">
    
    	<div class="footer-widget-fivemap-container">
                    
            <?php 
                 echo of_get_option('footer_map');
			?> 
                        
         </div>    
    
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
                <?php if( of_get_option('footer_logo_image') ) : ?>
				<div class="footer-logo">
                	<img src="<?php echo of_get_option('footer_logo_image'); ?>">
                </div>
				<?php else : ?>
                <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h3>
                <?php endif; ?>
                <?php get_template_part( 'footer', 'copyright' ); ?>
                <?php if( !of_get_option('show_footer_credits') || of_get_option('show_footer_credits') == 'true' ) : ?>
                <?php if( is_home() || is_front_page() ): ?>
                <p><?php printf( __( 'Designed by: %1$s.', 'themealley_business' ), '<a href="http://www.themealley.com/" rel="designer">ThemeAlley.com</a>' ); ?></p>
                <?php endif; ?>
                <p>Powered by <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'themealley_business' ); ?>" rel="generator"><?php printf( __( '%s', 'themealley_business' ), 'WordPress' ); ?></a></p>
                <?php endif; ?>
                <?php if( !of_get_option('show_footer_search') || of_get_option('show_footer_search') == 'true' ) : ?>
                <div class="footer-search"><?php get_search_form(); ?></div>
				<?php endif; ?>        
        
        </div><!-- .site-info-three -->
          
    	</div><!-- .Responsive-Container -->
                    
	</footer><!-- #colophon -->