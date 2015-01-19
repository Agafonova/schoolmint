	<footer id="colophon" class="site-footer" role="contentinfo">
    
    	
		<div class="t-16 text-white bg-footer">
							<div class="wrap">
								<div class="col-sm-5">
								<br><br><br>
									<p class="t-32">Enrollment Tracking &amp; <br> Predictive Analytics</p>
									<p>SchoolMint provides you with predictive analytics and reports to smartly manage enrollment and meet your enrollment goals while tracking how you are progressing week to week and month to month.</p>

									<p class="t-32">Mobile Access for Parents</p>
									<p>More than 50% of our parents use Native iOS and Android apps on their phones and tablet to submit applications, check an application's status, and complete registration without access to a computer.</p>
								</div>
								<div class="col-sm-5 col-sm-offset-2">
								<form class="cover" action="">
								<div class="form-control zone-15">
                                    <input type="text" placeholder="your name*" id="title" class="input-title t-16">
                                </div>
								<div class="form-control zone-15">
                                    <input type="text" placeholder="email address*" id="title" class="input-title t-16">
                                </div>
								<div class="form-control zone-15">
								<div class="dropdown-wrap">
                                     
                                       how did you hear about us?*
                                        <span class="icon icon-caret-down"></span>
                                     
                                      <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Item1</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Item2</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Item3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Item4</a></li>
                                      </ul><p></p>
                                  </select>
                                </div>
								<div class="form-control add-details zone-50">
                                    <textarea placeholder="your message*" rows="3" id="more-info" name="info" class="input-title t-16"></textarea>
                                </div>
								<div class="zone-15">
                                    <input type="submit" value="Request a Demo*" class="t-16">
                                </div>
								</form>	
								</div>

								
						
						</div>
            	
            <!--<div class="site-info">
                <h3 class="h3">Schedul</h3> 
                <div class="footer-forms"> 
                <!-- Twitter widget -->
                <!--<div id="twitter_block" class="twitter_feed" style="position: relative">
                    <a class="twitter-timeline" href="https://twitter.com/school_mint" data-widget-id="476297141120278528" data-chrome="noscrollbar nofooter" data-tweet-limit="5">Tweets by @school_mint</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    <!--<div id="twitter_follow" style="width: 82px; position: absolute; right: 5px; top: 5px;">
                        <a href="https://twitter.com/school_mint" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @school_mint</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                    <div id="twitter_feed" style="position: absolute; top: 40px; height: 500px;">
                        <a class="twitter-timeline" href="https://twitter.com/school_mint" data-chrome="noscrollbar nofooter noheader" data-tweet-limit="5" data-widget-id="476297141120278528" width="1000" height="1000">Tweets by @school_mint</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div> -->
                <!--</div>

                <!-- -------------- -->
                
                <!-- Contact Form -->
                <!--<div id="contact_form" class="contact_form">
                <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
                </div>
                <!-- ------------ -->
                </div>
            
                <!--<?php do_action( 'themealley_business_credits' ); ?>
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
                
            </div><!-- .site-info -->
            
            <div class="footer-widget-three">
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