<?php
/**
 * The template for displaying search forms in themealley_business
 *
 * @package themealley_business
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="col-sm-12 col-xs-12 zone-20">
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'themealley_business' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'themealley_business' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'themealley_business' ); ?>">
	</div>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'themealley_business' ); ?>">
</form>
