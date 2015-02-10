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
 	Template Name: Blog Page
 */

global $more;
$more = 0;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php query_posts('post_type=post&paged='.$paged); ?>
		<?php if ( have_posts() ) : /*?>

			<header class="page-header">
				<h1 class="page-title">Blog</h1>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php get_template_part( 'content', 'page' ); ?>    
                </article><!-- #post-## -->	
                
			<?php endwhile; // end of the loop. */?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-blog', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php themealley_business_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; wp_reset_query(); ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>