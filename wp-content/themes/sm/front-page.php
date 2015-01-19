<?php
/**
 * The front page file.
 *
 * @package themealley_business
 *
 *	Template Name: Home Page
 */

get_header(); ?>
	
	<div id="primary" class="full-page-content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						
						<!-- video Modal -->

						<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="false">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						      <div class="modal-body">
				                <iframe width="100%" height="450" src="//www.youtube.com/embed/rs43uNelytw?&amp;showinfo=0&amp;controls=0&amp;rel=0&amp;enablejsapi=1" frameborder="0" allowfullscreen></iframe>
				              </div>
						    </div>
						  </div>
						</div>
									
						
						<?php /*

						<!-- Schedule a Demo Modal -->
							<div class="contact-modal modal fade" id="scheduleModal" tabindex="-1" role="dialog" aria-labelledby="scheduleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						      </div>
						      <div class="modal-body">
						        <h2>SCHEDULE A DEMO</h2>
								<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
						      </div>
						    </div>
						  </div>
						</div>
						*/ ?>

					<div class="slide-wrap">

						<h2 class="slide-title"><?php echo of_get_option('bone_welcome_text'); ?></h2>
							
						<a class="btn-play_wrap t-16" href="#" data-toggle="modal" data-target="#videoModal">
							<i class="glyphicon glyphicon-play-circle"></i>&nbsp;&nbsp;WATCH OUR VIDEO
						</a>

						<a class="btn btn-default btn-lg col-sm-3 col-centered" href="#colophon">Schedule a Demo</a>
						<!-- <a class="btn btn-white" data-toggle="modal" data-target="#scheduleModal">Schedule a Demo</a> -->
					</div>
					<?php the_content(); ?>
						<div class="t-16 text-white bg-analytic">
							<div class="wrap">
								<div class="col-sm-5">
								<br><br><br>
									<p class="t-32">Enrollment Tracking &amp; <br> Predictive Analytics</p>
									<p>SchoolMint provides you with predictive analytics and reports to smartly manage enrollment and meet your enrollment goals while tracking how you are progressing week to week and month to month.</p>

									<p class="t-32">Mobile Access for Parents</p>
									<p>More than 50% of our parents use Native iOS and Android apps on their phones and tablet to submit applications, check an application's status, and complete registration without access to a computer.</p>
								</div>
								<div class="col-sm-7 text-right">
									<img src="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/pc-phone.png" data-2x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/pc-phone@2x.png" data-3x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/pc-phone@3x.png" alt="">
								</div>

								<div class="col-sm-12">
									<a href="#"></a>
									<a href="#"></a>
								</div>
							</div>	
						</div>
						
						
						<h2 class="main-title">Schoolmint Solutions</h2>
						
						<div class="t-20">
							<div class="row area">
								<div class="wrap">
									<div class="col-sm-3 col-xs-2">
										<img src="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/school-o.png" data-2x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/school-o@2x.png" data-3x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/school-o@3x.png" alt="">
									</div>
									<div class="col-sm-9 col-xs-10">
										<p class="text-primary t-32">Charter Schools <i class="icon-leaf"></i></p>
										<p class="text-gray">Recruitment, parent interest tracking, applications, letters of intent, lengthy registration packets, running your lottery and managing your waitlist, all this whilst also managing communications... it's a lot of work! Lucky for you School Mint, the smart enrollment solution, is here.</p>
										<a class="learn-more" href="#">LEARN MORE</a>
									</div>
								</div>
							</div>

							<div class="row area bg-gray">

								<div class="wrap">
									<div class="col-sm-9 col-xs-10">
										<p class="text-primary t-32">School Choice &amp; Common Enrollment <i class="icon-leaf"></i></p>
										<p class="text-gray">We have the expertise necessary to support school choice and common  enrollment at your district, city, or area. It’s time you chose SchoolMint.</p>
										<a class="learn-more" href="#">LEARN MORE</a>
									</div>

									<div class="col-sm-3 col-xs-2 text-right">
										<img src="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/pen-o.png" data-2x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/pen-o@2x.png" data-3x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/pen-o@3x.png" alt="">
									</div>
								</div>


							</div>


							<div class="row area">

								<div class="wrap">
									<div class="col-sm-3 col-xs-2">
									<img src="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/apple-o.png" data-2x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/apple-o@2x.png" data-3x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/apple-o@3x.png" alt="">
								</div>
								<div class="col-sm-9 col-xs-10">
									<p class="text-primary t-32">Districts / Traditional Public Schools <i class="icon-leaf"></i></p>
									<p class="text-gray">From student recruitment, registration, re-enrollment and even summer school enrollment, SchoolMint is the complete enrollment solution you have been waiting for. By using SchoolMint, you can save thousands to tens of thousands of dollars and hundreds of hours of work!</p>
									<a class="learn-more" href="#">LEARN MORE</a>
								</div>
								</div>


							</div>

							<div class="row area bg-gray">

								<div class="wrap">
									<div class="col-sm-9 col-xs-10">
									<p class="text-primary t-32">Independent/Private Schools <i class="icon-leaf"></i></p>
									<p class="text-gray">Independent schools have unique needs and we understand that at SchoolMint. With an involved application process, interviews, shadow days, and open houses that need to be scheduled, our mobile and web-based system is exactly what you need to streamline admissions and empower your team with the data you require for your school to thrive.</p>
									<a class="learn-more" href="#">LEARN MORE</a>
								</div>

								<div class="col-sm-3 col-xs-2 text-right">
									<img src="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/sheld-o.png" data-2x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/sheld-o@2x.png" data-3x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/sheld-o@3x.png" alt="">
								</div>
								</div>


							</div>


							<div class="row area">

								<div class="wrap">
									<div class="col-sm-3 col-xs-2">
									<img src="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/key-o.png" data-2x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/key-o@2x.png" data-3x="http://schoolmint.p.webdevs.com/wp-content/themes/sm/images/retina/key-o@3x.png" alt="">
								</div>
								<div class="col-sm-9 col-xs-10">
									<p class="text-primary t-32">Parent Access <i class="icon-leaf"></i></p>
									<p class="text-gray">Ever had to wait in line to submit a form or had to take time or even a day оff from work to submit paper work to you school? Ready to submit applications, registration packets, forms, surveys, permission slips at the click of a button? Want to always know the status of your child's application. Speak to someone on our team about working with your school to get SchoolMint, if your school isn't already a SchoolMint supported school.</p>
									<a class="learn-more" href="#">LEARN MORE</a>
								</div>
								</div>


							</div>

						</div>

						

						<?php
							/*wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'themealley_business' ),
								'after'  => '</div>',
							) );*/
						?>
					</div><!-- .entry-content -->
					
					<?php // edit_post_link( __( 'Edit', 'themealley_business' ), '<span class="edit-link">', '</span>' ); ?>

				</article><!-- #post-## -->

				<?php /*
					<section id="about-section" tabindex="0">
						<div class="text-box">
							<?php the_field('about_content') ?>
						</div>
						<div class="text-box">
							<h3><?php the_field('title') ?></h3>
							<h2 class="team"><?php the_field('team_title') ?></h3>
						</div>
						<?php if( get_field('founders') ): ?>
						<?php $loop = 0; while( has_sub_field('founders') ): $loop++; ?>
							<?php if($loop==1): ?><div class="row"><?php endif; ?>
								<div class="col cofounder">
									<img src="<?php the_sub_field('image'); ?>" alt="">
									<div class="info">
										<?php if(get_sub_field('name')) : ?><p class="name"><?php the_sub_field('name'); ?></p><?php endif; ?>
										<?php if(get_sub_field('position')) : ?><p class="area"><?php the_sub_field('position'); ?></p><?php endif; ?>
										<?php if(get_sub_field('text')) : ?><p class="area"><?php the_sub_field('text'); ?></p><?php endif; ?>
									</div>
								</div>
							<?php if($loop==2): $loop = 0; ?></div><?php endif; ?>
						<?php endwhile; ?>
						<?php if($loop<2 && $loop!=0): ?></div><?php endif; ?>
						<?php endif; ?>
						
						<?php if( get_field('team') ): ?>
						<?php $loop = 0; while( has_sub_field('team') ): $loop++; ?>
							<?php if($loop==1): ?><div class="row"><?php endif; ?>
							<div class="col">
									<img src="<?php the_sub_field('image'); ?>" alt="">
								<div class="info">
									<?php if(get_sub_field('name')) : ?><p class="name"><?php the_sub_field('name'); ?></p><?php endif; ?>
									<?php if(get_sub_field('position')) : ?><p class="area"><?php the_sub_field('position'); ?></p><?php endif; ?>
								</div>
							</div>
							<?php if($loop==2): $loop = 0; ?></div><?php endif; ?>
						<?php endwhile; ?>
						<?php if($loop<2 && $loop!=0): ?></div><?php endif; ?>
						<?php endif; ?>
						
					</section> 





					

<!-- <div id="about" class="client-testimonials">
    <h3>Client Testimonials</h3>
    <div class="wrap">
        <div class="inner-box pull-left">
            <div class="wrap">
                <div class="testimonial-icon">
                    <img src="http://schoolmint.com/newsite/wordpress/wp-content/uploads/2014/04/philadelphia.jpg" alt="philadelphia" width="115" class="aligncenter size-full wp-image-189" />
                </div>
                <div class="txt-testimonial">
                    <div class="txt">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                    <div class="name-testimonial">Philadelphia School Partnership</div>
                </div>
            </div>

        </div>

        <div class="inner-box pull-right">
            <div class="wrap">
                <div class="testimonial-icon">
                    <img src="http://schoolmint.com/newsite/wordpress/wp-content/uploads/2014/04/aspire.jpg" alt="aspire" width="115" class="aligncenter size-full wp-image-196" />
                </div>
                <div class="txt-testimonial">
                    <div class="txt">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                    <div class="name-testimonial">Aspire Plublic Schools
                        <br>College for Certain</div>
                </div>
            </div>

        </div>

    </div>

    <div class="wrap">
        <div class="inner-box pull-left">
            <div class="wrap">
                <div class="testimonial-icon">
                    <img src="http://schoolmint.com/newsite/wordpress/wp-content/uploads/2014/04/kipp.jpg" alt="kipp" width="115" class="aligncenter size-full wp-image-197" />
                </div>
                <div class="txt-testimonial">
                    <div class="txt">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                    <div class="name-testimonial">Emilie Cioran | Teacher</div>
                </div>
            </div>

        </div>

        <div class="inner-box pull-right">
            <div class="wrap">
                <div class="testimonial-icon">
                    <img src="http://schoolmint.com/newsite/wordpress/wp-content/uploads/2014/04/alpha.jpg" alt="alpha" width="100" class="aligncenter size-full wp-image-198" />
                </div>
                <div class="txt-testimonial">
                    <div class="txt">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                    <div class="name-testimonial">Emilie Cioran | Teacher</div>
                </div>
            </div>

        </div>

    </div>


</div> 
-->

					*/
				 ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<script>
	jQuery( document ).ready(function($) {
	    console.log( "ready!" );

	    $('li.current-menu-item.menu-item-301').click(function(){
	    	$('.collapse.in').removeClass('in');
	    })
	});
</script>
<?php get_footer(); ?>
