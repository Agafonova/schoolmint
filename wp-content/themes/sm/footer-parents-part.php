	<footer id="colophon" class="site-footer" role="contentinfo">
                <?php do_action( 'themealley_business_credits' ); ?>
                <?php if( of_get_option('footer_logo_image') ) : ?>
                
<div class=" col-sm-12 col-xs-12 t-12 area-60 footer-bottom">
<div class="wrap">
<div class="col-sm-3 col-xs-6">
<ul class="school">
<h4 class="t-12">School solutions</h4>
<li><a href="/school-solutions/districttraditional-public-schools">District/Traditional Public Schools</a></li>
<li><a href="/school-solutions/charter-school">Charter School</a></li>
<li><a href="/school-solutions/independent-private-schools">Independent/Private Schools</a></li>
<li><a href="/school-solutions/school-choice-common-enrollment">School Choice & Common Enrollment</a></li>
<li><a href="/school-solutions/parent-access">Parent Access</a></li>
</ul>
</div>
<div class="col-sm-2 col-xs-6">
<ul class="company">
<h4 class="t-12">Company</h4>
<li><a href="http://search.schoolmint.com/">School Search</a></li>
<li><a href="/features">Features</a></li>
<li><a href="/about-us">About us</a></li>
<li><a href="/blog">Blog</a></li>
<li><a href="/career">Career</a></li>
<li><a href="/contact-us">Contact us</a></li>
<li><a href="/contact-us/help">Help</a></li>
</ul>
</div>
<div class="col-sm-3 col-xs-11">
<ul class="follow">
<h4 class="t-12">Follow us on </h4>
<li><a href="https://twitter.com/school_mint"><img alt="" src="/wp-content/themes/sm/images/retina/tw@3x.png" data-2x="/wp-content/themes/sm/images/retina/tw@2x.png" data-3x="/wp-content/themes/sm/images/retina/tw.png"></a></li>
<li><a href="https://www.facebook.com/schoolmintdotcom"><img alt="" src="/wp-content/themes/sm/images/retina/fb@3x.png" data-2x="/wp-content/themes/sm/images/retina/fb@2x.png" data-3x="/wp-content/themes/sm/images/retina/fb.png"></a></li>
<li><a href="https://plus.google.com/u/0/+Schoolmintpage"><img alt="" src="/wp-content/themes/sm/images/retina/google@3x.png" data-2x="/wp-content/themes/sm/images/retina/google@2x.png" data-3x="/wp-content/themes/sm/images/retina/google.png"></a></li>

</ul>
</div>
<div class="col-sm-4 col-xs-11">
<ul class="join">
<h4 class="t-12">Join our mailing list</h4>
<li><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 4 ); }?></li>
<li><a href="https://www.rapidssl.com/"><img src="/wp-content/themes/sm/images/icon.png"></a></li>


</ul>
</div>

            </div>
            </div>
            <div class="col-sm-12 col-centered text-center zone-30">
		   
                <div class="site-branding zone-30">
                 <a href="/"><img src="/wp-content/themes/sm/images/schoolmint-logo-footer.png"></a>
                                       
                </div>
                <ul class="bottom-menu t-10">
                <li><a href="/terms-of-services">Terms of Service</a>&nbsp; &nbsp;|&nbsp; &nbsp;</li>
                 <li><a href="/privacy-policy">Privacy Policy</a>&nbsp; &nbsp;|&nbsp; &nbsp;</li>
                  <li>© SchoolMint. All Rights Reserved.</li>
                </ul>
                <a href="https://mixpanel.com/f/partner"><img src="/wp-content/themes/sm/images/mixpanel-logo.png"></a>
                </div>
            </div>
				<?php else : ?>
                <!--<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h3>
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
                
            </div><!-- .site-info -->
            
           <!-- <div class="footer-widget-three">
            	<?php if ( dynamic_sidebar('footer-left') ); ?>
            </div>
            
            <div class="footer-widget-three">
            	<?php if ( dynamic_sidebar('footer-center') ); ?>            
            </div>
            
            <div class="footer-widget-three">
            	<?php if ( dynamic_sidebar('footer-right') ); ?>            
            </div>            
            
    	</div><!-- #Responsive-Container -->
                    
	</footer><!-- #colophon -->