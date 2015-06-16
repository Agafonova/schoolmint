<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package themealley_business
 */
?>

    		</div><!-- .content-container -->

    	</div><!-- .Responsive-Container -->

	</div><!-- #main -->

    <?php if( ( of_get_option('homepage_layout') == 'bsix' || of_get_option('homepage_layout') == 'boneplus' || of_get_option('homepage_layout') == 'bthree' || of_get_option('homepage_layout') == 'bfour' || of_get_option('homepage_layout') == 'bseven' || of_get_option('homepage_layout') == 'beight' ) && ( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) ) : ?>
		<?php get_template_part( 'bizsix', 'quote' ); ?>
	<?php endif; ?>

    <?php if( (!is_front_page()) && (of_get_option('homepage_layout') == 'bone' || of_get_option('homepage_layout') == 'btwo' || of_get_option('homepage_layout') == 'bfive' || of_get_option('homepage_layout') == 'bnine' ) && ( !of_get_option('show_quote_biz') || of_get_option('show_quote_biz') == 'true' ) ) : ?>
        <?php get_template_part( 'bizsix', 'quote' ); ?>
	<?php endif; ?>

    <?php if( of_get_option('homepage_layout') != 'bnine' ) : ?>
    <?php if( of_get_option('show_footer_client_logos') !='false' ) : ?>
    <div class="footer-client-logos-container">

       <div class="responsive-container">

			<?php get_template_part( 'client', 'logos' ); ?>

       </div><!-- .responsive-container -->

    </div><!-- .footer-client-logos-container -->
    <?php endif; ?>
    <?php endif; ?>

    <?php if( !of_get_option('show_social_icon_section') || of_get_option('show_social_icon_section')  == 'true' ) : ?>
    <div class="footer-social">

    	<div class="responsive-container">

                                    <ul class="footer-social-icons">

                                        <?php if(of_get_option('twitter_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('twitter_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="Twitter" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('facebook_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('facebook_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="Facebook" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('redit_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('redit_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reddit.png" alt="redit" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('stumble_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('stumble_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stumble.png" alt="stumble" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('flickr_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('flickr_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flickr.png" alt="flickr" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('linkedin_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('linkedin_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="linkedin" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('google_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('google_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gplus.png" alt="google" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('youtube_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('youtube_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="YouTube" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('pinterest_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('pinterest_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest.png" alt="Pinterest" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('tumblr_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('tumblr_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tumblr.png" alt="Tumblr" /></a></li>
                                        <?php endif; ?>

                                        <?php if(of_get_option('instagram_id')) : ?>
                                        <li><a href="<?php echo esc_url( of_get_option('instagram_id') ); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" alt="Instagram" /></a></li>
                                        <?php endif; ?>


                                    </ul>

        </div><!-- .Responsive-Container -->

    </div><!-- .footer-social -->
	<?php endif; ?>

	<!-- Footer Starts Here -->
	<?php get_template_part( 'footer', 'parents-part' );?>

    <!-- Footer ends Here -->
</div><!-- #inner-container -->
</div><!-- #page -->
</div><!-- #wrapper-one -->
</div><!-- #wrapper-two -->
</div><!-- #wrapper-three -->

<?php wp_footer(); ?>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0021/1874.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<script type="text/javascript">
adroll_adv_id = "KAITEMPV5VA3BGUM4E63QI";
adroll_pix_id = "ZBRCLTQZMNDEBDEFVZLVPD";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

<!-- Google Code for demo request Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 969832836;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "Vp5VCMTs5QkQhPO5zgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<!--<div style="display:inline;">
<!--<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/969832836/?label=Vp5VCMTs5QkQhPO5zgM&amp;guid=ON&amp;script=0"/>
</div>-->
</noscript>

<!--<center><a href='https://mixpanel.com/f/partner'><img src='https://cdn.mxpnl.com/site_media/images/partner/badge_blue.png' alt='Mobile Analytics' /></a> </center>
<a href="https://plus.google.com/117601969806358731073" rel="publisher">Google+</a>

<!-- Place this code where you want the badge to render. -->
<!--<a href="//plus.google.com/u/0/117601969806358731073?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;">
<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
</a>-->

<script>
  window.intercomSettings = {
    app_id: "lytjrqm2"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/lytjrqm2';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/545448.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->
</body>
</html>
