<?php
/**
 * @package themealley_business
 *	Template Name: Home Page
 */

get_header(); 

?>

	<div id="primary" class="portfolio-content-area">
		<div id="content" class="portfolio-site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            			<header class="portfolio-page-header">
		                        <h1 class="portfolio-page-title"><?php the_title(); ?></h1>
		                </header><!-- .entry-header -->
						
						<div class="entry-content">
							<section id="about-section">
								<div class="text-box">
										<?php the_content(); ?>

										<?php
											wp_link_pages( array(
												'before' => '<div class="page-links">' . __( 'Pages:', 'themealley_business' ),
												'after'  => '</div>',
											) );
										?>
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