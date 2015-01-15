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
 */

get_header(); ?>

	<div id="primary" class="portfolio-content-area">
		<div id="content" class="portfolio-site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            			<header class="portfolio-page-header">
		                        <h1 class="portfolio-page-title"><?php the_title(); ?></h1>
		                </header><!-- .entry-header -->
						<?php get_template_part( 'content', 'page' ); ?>    
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