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
 	Template Name: Portfolio Page
 */

get_header(); ?>

	<div id="primary" class="portfolio-content-area">
		<div id="content" class="portfolio-site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="portfolio-page-header">
                        <h1 class="portfolio-page-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->
                	
                    <?php 
						$themealley_business_portfoliocontent = get_the_content();
						if( !empty($themealley_business_portfoliocontent) ) : 
					?>
                    <div class="portfolio-description">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                    <?php endif; ?>
                    <?php //edit_post_link( __( 'Edit', 'themealley_business' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                </article><!-- #post-## -->				
			
			<?php wp_reset_postdata(); ?>
			<?php endwhile; // end of the loop. ?>
            
            <?php 
			
				$themealley_business_portfolio_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
				
				if( of_get_option('portfolio_page_num') ) {
					$themealley_business_portfolio_items = of_get_option('portfolio_page_num');
				}else{
					$themealley_business_portfolio_items = '10';
				}
			
				$themealley_business_portfolio_args = array(
								// Change these category SLUGS to suit your use.
								'ignore_sticky_posts' => 1,
								'post_type' => array('post','page'),
								'meta_key' => '_themealley_business_portfolio_order',
								'orderby' => 'meta_value_num',
								'order' => 'ASC',
								'posts_per_page'=> $themealley_business_portfolio_items,
								'paged' => $themealley_business_portfolio_paged
							  );

				$themealley_business_portfolio_list_of_posts = new WP_Query( $themealley_business_portfolio_args );
				
				// Pagination fix
				$temp_query = $wp_query;
				$wp_query   = NULL;
				$wp_query   = $themealley_business_portfolio_list_of_posts; 
								
			?>
            
			<?php if ( $themealley_business_portfolio_list_of_posts->have_posts() ) : ?>
                <?php /* The loop */ ?>
                <div class="portfolio-item-container">
                <?php $themealley_business_portfolio_itemnum = 0; while ( $themealley_business_portfolio_list_of_posts->have_posts() ) : $themealley_business_portfolio_list_of_posts->the_post(); $themealley_business_portfolio_itemnum++ ?>
                    
					<?php 
						
						if( of_get_option('portfolio_layout') == 'one' ){
							get_template_part( 'portfolio', 'one' );
						}elseif( of_get_option('portfolio_layout') == 'two' ) {
							if( ($themealley_business_portfolio_itemnum % 2) == 0 ) {
								echo '<div class="portfolio-two-item-even">';
							}else {
								echo '<div class="portfolio-two-item-odd">';
							}
									get_template_part( 'portfolio', 'two' );
							echo '</div><!-- portfolio-two-item -->';
						}elseif( of_get_option('portfolio_layout') == 'four' ) {
							if( ( $themealley_business_portfolio_itemnum - 1 ) % 4 == 0 ){
								$themealley_business_portfolio_four_itemclear = "clear-both";
							}else {
								$themealley_business_portfolio_four_itemclear = "";
							}
							if( ($themealley_business_portfolio_itemnum % 4) == 0 ) {
								echo '<div class="'.$themealley_business_portfolio_four_itemclear.' portfolio-four-item-even">';
							}else {
								echo '<div class="'.$themealley_business_portfolio_four_itemclear.' portfolio-four-item-odd">';
							}
									get_template_part( 'portfolio', 'four' );
							echo '</div><!-- portfolio-four-item -->';
						}else {
							if( ( $themealley_business_portfolio_itemnum - 1 ) % 3 == 0 ){
								$themealley_business_portfolio_three_itemclear = "clear-both";
							}else {
								$themealley_business_portfolio_three_itemclear = "";
							}
							if( ($themealley_business_portfolio_itemnum % 3) == 0 ) {
								echo '<div class="'.$themealley_business_portfolio_three_itemclear.' portfolio-three-item-even">';
							}else {
								echo '<div class="'.$themealley_business_portfolio_three_itemclear.' portfolio-three-item-odd">';
							}
									get_template_part( 'portfolio', 'three' );
							echo '</div><!-- portfolio-three-item -->';
						}
					
					?>
                    
                <?php endwhile; ?>
    			</div><!-- portfolio-item-container -->
                <?php themealley_business_content_nav( 'nav-below' ); ?>
                
                <?php
					// Reset main query object
					$wp_query = NULL;
					$wp_query = $temp_query;				
				?>
    
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
            
            
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
