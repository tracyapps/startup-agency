<?php
/**
 * CSS variable import: custom
 *
 */

// getting ACF fields into easy to read variables

if ( have_rows( 'page_header_design', 'option' ) ) :
	while ( have_rows( 'page_header_design', 'option' ) ) : the_row();
		$header_background_color = get_sub_field( 'header_background_color' );
		$header_text_color = get_sub_field( 'header_text_color' );
		$top_nav_color_choice = get_sub_field( 'top_navigation_bar_background_color_choice' );
		if( 'custom' == $top_nav_color_choice ) {
			$top_nav_bar_background = get_sub_field( 'top_nav_bar_background' );
		} else {
			$top_nav_bar_background = 'transparent';
		}
	endwhile;
endif;
if ( have_rows( 'top_navigation_bar_options', 'option' ) ) :
	while ( have_rows( 'top_navigation_bar_options', 'option' ) ) : the_row();
		$nav_item_background_color = get_sub_field( 'nav_item_background_color' );
		$nav_item_text_color = get_sub_field( 'nav_item_text_color' );
		$nav_item_hover_background_color = get_sub_field( 'nav_item_hover_background_color' );
		$nav_item_hover_text_color = get_sub_field( 'nav_item_hover_text_color' );
		$nav_item_font_array = get_sub_field( 'nav_item_font' ); // font choice array, value/label
			$nav_item_font_import_url = $nav_item_font_array->value;
			$nav_item_font_name = $nav_item_font_array->label;
	endwhile;
endif;
if ( have_rows( 'page_body_design', 'option' ) ) :
	while ( have_rows( 'page_body_design', 'option' ) ) : the_row();
		$page_background_color = get_sub_field( 'page_background_color' );
		$page_text_color = get_sub_field( 'page_text_color' );
		$page_link_color = get_sub_field( 'page_link_color' );
		$page_link_hover_color = get_sub_field( 'page_link_hover_color' );
		$body_text_font_array = get_sub_field( 'body_text_font' ); // font array, value/label
			$body_text_font_import_url = $body_text_font_array->value;
			$body_text_font_name = $body_text_font_array->label;

		$body_text_default_size = get_sub_field( 'body_text_default_size' );
		$page_heading_text_font_array = get_sub_field( 'page_heading_text_font' ); // font array, value/label
			$page_heading_text_font_import_url = $page_heading_text_font_array->value;
			$page_heading_text_font_name = $page_heading_text_font_array->label;

		$bold_page_title = get_sub_field( 'bold_page_title' ); // yes or no
		if( $bold_page_title != '' ) {
			$bold_page_title = 'bold';
		} else {
			$bold_page_title = 'lighter';
		}

		$primary_button_background_color = get_sub_field( 'primary_button_background_color' );
		$primary_button_text_color = get_sub_field( 'primary_button_text_color' );
		$primary_button_hover_background_color = get_sub_field( 'primary_button_hover_background_color' );
		$primary_button_hover_text_color = get_sub_field( 'primary_button_hover_text_color' );

		$secondary_button_background_color = get_sub_field( 'secondary_button_background_color' );
		$secondary_button_text_color = get_sub_field( 'secondary_button_text_color' );
		$secondary_button_hover_background_color = get_sub_field( 'secondary_button_hover_background_color' );
		$secondary_button_hover_text_color = get_sub_field( 'secondary_button_hover_text_color' );
	endwhile;
endif;
if ( have_rows( 'page_footer_design', 'option' ) ) :
	while ( have_rows( 'page_footer_design', 'option' ) ) : the_row();
		$footer_background_color = get_sub_field( 'footer_background_color' );
		$footer_text_color = get_sub_field( 'footer_text_color' );
		$footer_link_color = get_sub_field( 'footer_link_color' );
		$footer_link_hover_color = get_sub_field( 'footer_link_hover_color' );
	endwhile;
endif;
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=<?php echo $body_text_font_import_url; ?>&family=<?php echo $nav_item_font_import_url; ?>&family=<?php echo $page_heading_text_font_import_url; ?>&display=swap" rel="stylesheet">
<style rel="stylesheet" type="text/css">
	:root {
		--header_background_color: 		<?php esc_html_e( $header_background_color ); ?>;
		--header_text_color:			<?php esc_html_e( $header_text_color ); ?>;
		--top_nav_bar_background:		<?php esc_html_e( $top_nav_bar_background ); ?>;
		--nav_item_background_color:	<?php esc_html_e( $nav_item_background_color ); ?>;
		--nav_item_text_color:			<?php esc_html_e( $nav_item_text_color ); ?>;
		--nav_item_hover_background_color: <?php esc_html_e( $nav_item_hover_background_color ); ?>;
		--nav_item_hover_text_color:	<?php esc_html_e( $nav_item_hover_text_color ); ?>;
		--nav_item_font:				<?php echo $nav_item_font_name; ?>;

		--page_background_color:		<?php esc_html_e( $page_background_color ); ?>;
		--page_text_color:				<?php esc_html_e( $page_text_color ); ?>;
		--page_link_color:				<?php esc_html_e( $page_link_color ); ?>;
		--page_link_hover_color:		<?php esc_html_e( $page_link_hover_color ); ?>;
		--body_text_font:				<?php echo $body_text_font_name; ?>;
		--body_text_default_size:		<?php esc_html_e( $body_text_default_size ); ?>px;
		--page_heading_text_font:		<?php echo $page_heading_text_font_name; ?>;
		--page_heading_text_font_weight: <?php esc_html_e( $bold_page_title ); ?>;

		--primary_button_background_color: <?php esc_html_e( $primary_button_background_color ); ?>;
		--primary_button_text_color:	<?php esc_html_e( $primary_button_text_color ); ?>;
		--primary_button_hover_background_color: <?php esc_html_e( $primary_button_hover_background_color ); ?>;
		--primary_button_hover_text_color: <?php esc_html_e( $primary_button_hover_text_color ); ?>;

		--secondary_button_background_color: <?php esc_html_e( $secondary_button_background_color ); ?>;
		--secondary_button_text_color:	<?php esc_html_e( $secondary_button_text_color ); ?>;
		--secondary_button_hover_background_color: <?php esc_html_e( $secondary_button_hover_background_color ); ?>;
		--secondary_button_hover_text_color: <?php esc_html_e( $secondary_button_hover_text_color ); ?>;

		--footer_background_color:		<?php esc_html_e( $footer_background_color ); ?>;
		--footer_text_color:			<?php esc_html_e( $footer_text_color ); ?>;
		--footer_link_color:			<?php esc_html_e( $footer_link_color ); ?>;
		--footer_link_hover_color:		<?php esc_html_e( $footer_link_hover_color ); ?>;
	}
</style>
