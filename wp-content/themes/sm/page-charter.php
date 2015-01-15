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
 	Template Name: SS / Charter Schools
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

	<div id="primary" class="portfolio-content-area charter">
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
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-1.png" /></div>
				<div class="title">Application / Registration<br />Management</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-2.png" /></div>
				<div class="title">Lottery / Waitlist<br />Management</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-3.png" /></div>
				<div class="title">Communication<br />Portal</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-4.png" /></div>
				<div class="title">Ultimate Parent<br />Empowerment Tool</div>
			</li>
			<li>
				<div class="icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-5.png" /></div>
				<div class="title">Student Recruitment<br />Tools</div>
			</li>
		</ul>
	</div>
	
	<div class="school-solutions">
		<ul>
			<li class="odd">
				<div class="iconography">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-b-1.png" />
				</div>
				<div class="descs">
					<h4>CMOs (Charter Management Organizations)</h4>
					<p>
						Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodales nisi, quis iaculis nulla iaculis vitae.<br /><br />
						Donec sagittis faucibus lacus eget blandit. Mauris vitae ultricies metus, at condimentum nulla. Donec quis ornare lacus. Etiam gravida mollis tortor quis porttitor.
					</p>
				</div>
			</li>
			<li class="odd">
				<div class="iconography">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-b-2.png" />
				</div>
				<div class="descs">
					<h4>Medium/Small Charter Schools</h4>
					<p>
						Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodales nisi, quis iaculis nulla iaculis vitae.<br /><br />
						Donec sagittis faucibus lacus eget blandit. Mauris vitae ultricies metus, at condimentum nulla. Donec quis ornare lacus. Etiam gravida mollis tortor quis porttitor.
					</p>
				</div>
			</li>
			<li class="odd">
				<div class="iconography">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/charter-ic-b-3.png" />
				</div>
				<div class="descs">
					<h4>Startup Charter Schools</h4>
					<p>
						Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodales nisi, quis iaculis nulla iaculis vitae.<br /><br />
						Donec sagittis faucibus lacus eget blandit. Mauris vitae ultricies metus, at condimentum nulla. Donec quis ornare lacus. Etiam gravida mollis tortor quis porttitor.
					</p>
				</div>
			</li>
		</ul>
	</div>
	
	<style>
	.logo-icon-list ul li { width: 16%; }
	</style>
	<div class="logo-icon-list" style="padding: 2% 8%;">
		<ul>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/philadelphia.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/achievement.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/summit.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/noble.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/aspirepublic.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/rocketship.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/educationforchange.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/uncommon.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/kipp.png" /></li>
			<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/trustmarks/democracy.png" /></li>
		</ul>
	</div>
	
	<style>
	.testimonials {
		margin: 0; padding: 4% 8% 2% 8%;
		background: #5A829E;
		text-align: center;
	}
	.testimonials img {
		width: 80px; height: 80px;
		border: 4px solid #fff;
		border-radius: 100px;
	}
	.testimonials p {
		padding: 20px 10%;
		color: #fff; font-style: italic; font-family: 'Georgia', serif; font-size: 14px;
	}
	</style>
	<div class="testimonials">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/schoolsolutions/avatar-1.png" /><br />
		<p>
			Portland ugh fashion axe Helvetica, YOLO Echo Park Austin gastropub roof party. Meggings cred before they sold out messenger bag, ugh fashion axe Pitchfork tousled freegan asymmetrical literally twee Thundercats.<br /><br />&ndash;&nbsp;Stephen Miller, KIPP: San Francisco District&nbsp;&ndash;
		</p>
	</div>

<?php get_footer(); ?>
