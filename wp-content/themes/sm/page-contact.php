<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package themealley_business
 	Template Name: Contact Page
 */

get_header(); ?>

	<div id="primary" class="full-page-content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			
								
							
								<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                            <script>
                                function initialize() {
                                    var mapOptions = {
                                        zoom: 16,
                                        center: new google.maps.LatLng(37.7872628, -122.39854830000002),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        disableDefaultUI: true
                                    };

                                    var map = new google.maps.Map(document.getElementById('contact-map'), mapOptions);


                                    var marker = new google.maps.Marker({
                                        position: map.getCenter(),
                                        icon: '/wp-content/themes/sm/images/retina/icon_leaf.png',
                                        map: map
                                    });

                                }

                                google.maps.event.addDomListener(window, 'load', initialize);

                            </script>
                            
                      <?php the_content(); ?>    
           
                
                
                
              

				<?php if( of_get_option('show_comments_page') == 'true' ) : ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
				<?php endif; ?>
                
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>