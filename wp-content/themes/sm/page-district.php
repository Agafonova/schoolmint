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
 	Template Name: SS / District Schools
 */

get_header(); ?>

<style>

.portfolio-page-header {
	width: 100%;
}
.portfolio-page-header h1 {
	margin: 40px 0 0 0;
	color: #fff; font-size: 72px; text-align: center;
}
.portfolio-page-header {
	color: #fff; font-size: 28px; text-align: center;
}
.ss-content {
	margin: 0; padding: 4% 8%;
	background: #F7F7F7;
}
.ss-content ul {
	list-style: none;
	margin: 2% auto; padding: 0;
	text-align: center;
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
			box-sizing: border-box;
}
.ss-content ul li {
	display: inline-block;
	width: 33%; height: 240px;
	margin: 0; padding: 20px;
	text-align: center; font-size: 14px; font-weight: bold; color: #38586D;
	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
			box-sizing: border-box;
}
.ss-content ul li img {
	width: 120px; height: 120px;
	padding: 10px;
	vertical-align: top;
}
.ss-content ul li div {
	margin: 0 0 10px 0;
}
</style>

	<div id="primary" class="portfolio-content-area private">
		<div id="content" class="portfolio-site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="portfolio-page-header">
					<h1 class="portfolio-page-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<br /><br />
				</header><!-- .entry-header -->
			</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
	<div class="ss-content">
		<ul>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/district-ic-1.png" /></div>
				<div class="title">Application / Registration<br />Management</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/district-ic-2.png" /></div>
				<div class="title">Waitlist<br />Management</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/district-ic-3.png" /></div>
				<div class="title">Communication<br />Portal</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/district-ic-4.png" /></div>
				<div class="title">Parent<br />Tracking System</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/district-ic-5.png" /></div>
				<div class="title">Student Recruitment<br />Tools</div>
			</li>
		</ul>
	</div>
	
<?php get_footer(); ?>
