<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package themealley_business
 */
?>

    		</div><!-- .content-container -->
        
    	</div><!-- .Responsive-Container -->
        
	</div><!-- #main -->

    <?php if( ( of_get_option('homepage_layout') == 'bsix' || of_get_option('homepage_layout') == 'boneplus' || of_get_option('homepage_layout') == 'bthree' || of_get_option('homepage_layout') == 'bfour' || of_get_option('homepage_layout') == 'bseven' || of_get_option('homepage_layout') == 'beight' ) && ( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) ) : ?>
		<?php get_template_part( 'bizsix', 'quote' ); ?> 
	<?php endif; ?>

    <?php if( (!is_front_page()) && (of_get_option('homepage_layout') == 'bone' || of_get_option('homepage_layout') == 'btwo' || of_get_option('homepage_layout') == 'bfive' || of_get_option('homepage_layout') == 'bnine' ) && ( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) ) : ?>
        <?php get_template_part( 'bizsix', 'quote' ); ?>
	<?php endif; ?>    
        
    <?php if( of_get_option('homepage_layout') != 'bnine' ) : ?>
    <?php if( of_get_option('show_footer_client_logos') !='false' ) : ?>
    <div class="footer-client-logos-container">
    
       <div class="responsive-container">
            
			<?php get_template_part( 'client', 'logos' ); ?> 
            
       </div><!-- .responsive-container -->
            
    </div><!-- .footer-client-logos-container -->
    <?php endif; ?>
    <?php endif; ?>
    
    <?php if( !of_get_option('show_social_icon_section') || of_get_option('show_social_icon_section')  == 'true' ) : ?>
    <div class="footer-social">
    
    	<div class="responsive-container">
        
                                    <ul class="footer-social-icons">
                                    
                                        <?php if(of_get_option('twitter_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('twitter_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="Twitter" /></a></li>
                                        <?php endif; ?>
                                        
                                        <?php if(of_get_option('facebook_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('facebook_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="Facebook" /></a></li>
                                        <?php endif; ?>                                                                          
    
                                        <?php if(of_get_option('redit_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('redit_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reddit.png" alt="redit" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('stumble_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('stumble_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stumble.png" alt="stumble" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('flickr_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('flickr_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flickr.png" alt="flickr" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('linkedin_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('linkedin_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="linkedin" /></a></li>
                                        <?php endif; ?>
    
                                        <?php if(of_get_option('google_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('google_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gplus.png" alt="google" /></a></li>
                                        <?php endif; ?>
                                        
                                        <?php if(of_get_option('youtube_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('youtube_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="YouTube" /></a></li>
                                        <?php endif; ?>
                                        
                                        <?php if(of_get_option('pinterest_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('pinterest_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest.png" alt="Pinterest" /></a></li>
                                        <?php endif; ?> 
                                        
                                        <?php if(of_get_option('tumblr_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('tumblr_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tumblr.png" alt="Tumblr" /></a></li>
                                        <?php endif; ?>
                                        
                                        <?php if(of_get_option('instagram_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('instagram_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" alt="Instagram" /></a></li>
                                        <?php endif; ?> 

                                                                        
                                    </ul>         
        
        </div><!-- .Responsive-Container -->
    
    </div><!-- .footer-social -->
	<?php endif; ?>
    
	<!-- Footer Starts Here -->
	<?php 
								
		if( !of_get_option('footer_layout') || of_get_option('footer_layout') == 'one' ) {
			$footer_layout = 'one';
		}elseif ( of_get_option('footer_layout') == 'three' ) {
			$footer_layout = 'three';
		}elseif ( of_get_option('footer_layout') == 'four' ) {
			$footer_layout = 'four';
		}elseif ( of_get_option('footer_layout') == 'five' ) {
			$footer_layout = 'five';
		}elseif ( of_get_option('footer_layout') == 'six' ) {
			$footer_layout = 'six';
		}else {
			$footer_layout = 'two';
		}
								
		get_template_part( 'footer', $footer_layout );
                
	?>
    <!-- Footer ends Here -->
</div><!-- #inner-container -->    
</div><!-- #page -->
</div><!-- #wrapper-one -->
</div><!-- #wrapper-two -->
</div><!-- #wrapper-three -->

<?php wp_footer(); ?>

</body>
</html>