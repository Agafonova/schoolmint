<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package themealley_business
 */

get_header(); ?>

	<div id="primary" class="full-page-content-area">
		<div id="content" class="site-content" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'themealley_business' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'themealley_business' ); ?></p>
					<div class="four-search">
						<?php get_search_form(); ?>
					</div><!-- .four-search -->
                    
                    <div class="fourohfour-widget-container">
                    
                    	<div class="footer-widget-four">
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                    	</div><!-- .footer-widget-four -->

						<?php if ( themealley_business_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="footer-widget-four">
                            <div class="widget widget_categories">
                                <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'themealley_business' ); ?></h2>
                                <ul>
                                <?php
                                    wp_list_categories( array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'show_count' => 1,
                                        'title_li'   => '',
                                        'number'     => 10,
                                    ) );
                                ?>
                                </ul>
                            </div><!-- .widget -->
	                    </div><!-- .footer-widget-four -->
						<?php endif; ?>

						<div class="footer-widget-four">
							<?php
                            /* translators: %1$s: smiley */
                            $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'themealley_business' ), convert_smilies( ':)' ) ) . '</p>';
                            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                            ?>
	                    </div><!-- .footer-widget-four -->
                        
						<div class="footer-widget-four">                        
							<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
	                    </div><!-- .footer-widget-four -->
                        
					</div><!-- .fourohfour-widget-container -->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>