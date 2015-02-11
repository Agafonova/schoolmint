<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package themealley_business
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'themealley_business' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'themealley_business' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'themealley_business' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'themealley_business' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'themealley_business' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'themealley_business');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'themealley_business' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'themealley_business' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'themealley_business' );

						else :
							_e( 'Archives', 'themealley_business' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php themealley_business_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>







<div class="t-16 text-white bg-about">
<div class="wrap">
<div class="col-md-11 col-sm-11 text-center col-centered">
<h1 class="t-64 zone-30">About us</h1>
<p class="t-28 semibold">SchoolMint has been instrumental in enrolling hundreds of thousands of K-12 students at Public, Charter, and Private schools in dozens of cities and hundreds of schools across the entire U.S.</p>
</div>
</div>
</div>
<div class="row area position">
<div class="col-sm-12 col-xs-12 add-position text-center col-centered"></div>
<div class="wrap">
<div class="col-sm-10 col-xs-10 col-centered text-justify">
<p class="t-20 text-graylight">In 2012, Forum and Jinal (founders of SchoolMint) set out to enroll their daughter in pre-school. It was a frustrating process that involved filling out tons of paper forms, the occasional need for whiteout, and lots of standing in line, being on the phone, and especially, a lot of waiting. Communicating with schools was even a bigger nightmare.</p>
<p class="t-20 text-graylight">As co-founders of Log(n), a design and engineering firm that specializes in education technology, they had built several custom admissions and enrollment systems for districts throughout the country, but it was not until this moment that they realized that all schools and families could benefit from a streamlined and modernized admissions and communications process. Shortly afterwards, SchoolMint was founded.</p>
</div>
</div>
</div>
<div class="row area bg-gray">
<div class="wrap">
<div class="col-sm-10 col-xs-10 col-centered text-center">
<p class="t-24 text-blue">SchoolMint is venture funded by some of the top Investors like Crosslink Capital, NewSchools Venture Fund, ImagineK12, Runa Capital, Kapor Capital, Romulus Capital, Fresco Capital, Ed Mentor, Inspire Invesment Group, Innovate Foundation and many other prominent Angel Investors.</p>
</div>
</div>
</div>
<div class="row area bg-white">
<div class="wrap">
<div class="col-sm-12 col-xs-12 col-centered">
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face1.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Jinal Jhaveri</p>
<p class="t-12 text-graylight uppercase">Co-founder &amp; ceo</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face2.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Forum Desai</p>
<p class="t-12 text-graylight uppercase">Co-founder &amp; coo</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face3.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Galen Li</p>
<p class="t-12 text-graylight uppercase">Vp of product</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face4.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Katie Aspell</p>
<p class="t-12 text-graylight uppercase">Implementation&amp; customer success team manager</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face5.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Yusuf Bhabhrawala</p>
<p class="t-12 text-graylight uppercase">Director of engineering</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face18.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Cris Araya</p>
<p class="t-12 text-graylight uppercase">Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face6.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Victor Da Luz</p>
<p class="t-12 text-graylight uppercase">Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face12.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Alex Coto</p>
<p class="t-12 text-graylight uppercase">Mobile Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face7.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Jose Seravalli</p>
<p class="t-12 text-graylight uppercase">Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face8.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Luz Gonzalez</p>
<p class="t-12 text-graylight uppercase">Partnerships &amp; Bizdev Manager</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face13.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">David Elizondo</p>
<p class="t-12 text-graylight uppercase">Mobile Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face9.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Tim Brandau</p>
<p class="t-12 text-graylight uppercase">Partnerships</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face10.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Justin Reonardy</p>
<p class="t-12 text-graylight uppercase">Ui designer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face16.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Daniel Solis</p>
<p class="t-12 text-graylight uppercase">Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face11.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Christina Trimble</p>
<p class="t-12 text-graylight uppercase">Office manager</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face17.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Elizabeth Ballinger-Dix</p>
<p class="t-12 text-graylight uppercase">Customer Success representative</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face19.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Alvaro Mantilla</p>
<p class="t-12 text-graylight uppercase">Engineer</p>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12 add-height">
<div class="col-md-5 col-sm-6 col-xs-6 text-center"><img src="/wp-content/themes/sm/images/face20.png" alt="" /></div>
<div class="col-md-6 col-sm-6 col-xs-5 zone-2p text-left">
<p class="t-20 text-black">Mario Gomez</p>
<p class="t-12 text-graylight uppercase">Engineer</p>
</div>
</div>
</div>
</div>
</div>