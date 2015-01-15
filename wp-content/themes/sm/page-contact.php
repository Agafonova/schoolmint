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

	<div id="primary" class="portfolio-content-area">
		<div id="content" class="portfolio-site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            			<header class="portfolio-page-header">
		                        <h1 class="portfolio-page-title"><?php the_title(); ?></h1>
		                </header><!-- .entry-header -->
		                <div id="contact-section">
							<?php get_template_part( 'content', 'page' ); ?>    
							<div class="map">
								<div class="box_wrapp">
									<div class="box_cont">
										<h4><?php the_field('name'); ?></h4>
										<p><?php echo nl2br(get_field('address')) ?>
											<br><span class="phone"><?php the_field('phone'); ?></span>
											<br><a class="email" href="mailto:<?php echo antispambot(get_field('e-mail'), true); ?>"><?php echo antispambot(get_field('e-mail')); ?></a>
										</p>
									</div>
								</div>
							
								<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo esc_url(get_field('map_url')); ?>"></iframe>
					
							</div>
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