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
 	Template Name: Features Page
 */

get_header(); ?>

	<div id="primary" class="portfolio-content-area">
		<div id="content" class="portfolio-site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            			<header class="portfolio-page-header">
		                        <h1 class="portfolio-page-title"><?php the_title(); ?></h1>
		                </header><!-- .entry-header -->
		                
					<div class="entry-content">
						<section id="features-section">
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'themealley_business' ),
										'after'  => '</div>',
									) );
								?>
							<?php if( get_field('blocks') ): ?>
							<?php while( has_sub_field('blocks') ): ?>
							<div class="box-wrap">
								<?php if(get_sub_field('title')) : ?><h2><?php the_sub_field('title'); ?></h2><?php endif; ?>
								<?php if(get_sub_field('sub_title')) : ?><h3><?php the_sub_field('sub_title'); ?></h3><?php endif; ?>
								<?php
									$items = get_sub_field('items');
									if($items) :
										$loop = 0;
										foreach($items as $item):
											$loop++;
								?>
									<?php if($loop==1): ?>
									<!-- Features Row -->
									<div class="row">
									<?php endif; ?>
										<div class="col feature">
											<div class="box">
												<div class="img-box">
													<img class="two" src="<?php echo $item['icon']; ?>" alt="">
												</div>
												<div class="text">
													<h4><?php echo $item['title']; ?></h4>
													<p><?php echo $item['text']; ?></p>
												</div>
											</div>
										</div>
									<?php if($loop==2): $loop = 0; ?>
									</div>
									<!-- / Features Row -->
									<?php endif; ?>
								<?php endforeach; ?>
									<?php if($loop<2 && $loop!=0): ?>
									</div>
									<!-- / Features Row -->
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
							
						</section>	
					</div>
						   
                </article><!-- #post-## -->	

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