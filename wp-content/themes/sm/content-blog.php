<?php
/**
 * @package themealley_business
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    
		<h1 class="entry-title"><a class="text-bluedark" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        
		<div class="entry-meta">
			<?php themealley_business_posted_on(); ?>
		</div><!-- .entry-meta -->  
              
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content add-font">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'themealley_business' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'themealley_business' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
    
	<footer class="entry-meta-bottom">
            
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ' ', 'themealley_business' ) );
				if ( $categories_list && themealley_business_categorized_blog() ) :
			?>
			
			<div class="entry-meta-bottom-item">
				<?php printf( __( 'Posted in %1$s', 'themealley_business' ), $categories_list ); ?>
			</div>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ' ', 'themealley_business' ) );
				if ( $tags_list ) :
			?>
			<div class="entry-meta-bottom-item">
				<?php printf( __( 'Tagged %1$s', 'themealley_business' ), $tags_list ); ?>
			</div>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<div class="add-padding entry-meta-bottom-item">
			<?php comments_popup_link( __( 'Leave a comment', 'themealley_business' ), __( '1 Comment', 'themealley_business' ), __( '% Comments', 'themealley_business' ) ); ?>
        </div>
		<?php endif; ?>
        
        <?php edit_post_link( __( 'Edit', 'themealley_business' ), '<div class="entry-meta-bottom-item edit-link">', '</div>' ); ?>
        
	</footer><!-- .entry-meta -->      


</article><!-- #post-## -->