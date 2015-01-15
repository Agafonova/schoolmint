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
					    	  <!-- <div class="modal-header">
						        
						      </div> -->
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
						
						<a class="btn-play_wrap" href="#" data-toggle="modal" data-target="#videoModal">
							<span class="btn btn-white btn-play">
								<i class="icon icon-angle-right"></i>
							</span>
							<span class="btn-play_desc">Watch Intro!</span>
						</a>

						<a class="btn btn-white" href="#colophon">Schedule a Demo</a>
						<!-- <a class="btn btn-white" data-toggle="modal" data-target="#scheduleModal">Schedule a Demo</a> -->
					</div>

						<?php the_content(); ?>
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
