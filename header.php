<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( !function_exists( 'has_site_icon' ) || !has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon"/>
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php
	/*
	 *  ** start THEME DESIGN **
	 *  first we check on what options are selected with conditional statements,
	 *  then we import the corresponding include file into the header.
	 *
	 * (This is all using ACF pro plugin to more easily handle custom site options)
	 * */
	// default theme filename, if none of the below conditions is met
	$theme_choice = 'default-theme';

	$design_option_setting = get_field( 'color_theme_or_custom_choice', 'option' );
	if( '' != $design_option_setting ) {
		if( 'color_theme' == $design_option_setting ) :
			$theme_choice = get_field( 'color_theme', 'option' );
		elseif( 'custom' == $design_option_setting ) :
			$theme_choice = 'custom';
		endif;
	}
	// now we import that 'theme choice' variable file into the header
	include( 'assets/css/css-theme-var-imports/' . esc_html( $theme_choice ) . '.php' );
	?>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<header class="site-header" role="banner">
	<div class="site-logo container">
		<?php
		$logo_image = get_field( 'site_logo', 'option' );
		if ( '' != $logo_image ):
			printf(
					'<a href="%s"><img src="%s" alt="%s logo" /></a>',
					esc_url( home_url( '/' ) ),
					esc_url( $logo_image ),
					get_bloginfo( 'name' )
			);
		else:
		?>
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>

		<?php endif; ?>

	</div>
	<nav class="main-navigation" role="navigation">
		<div class="mobile-menu-toggle"><a href="#menu-main-navigation" id="toggle">Menu</a></div>
		<?php start_top_nav(); ?>
	</nav>


</header> <!-- / .site-header -->
<div class="site-content">

<?php
if( has_post_thumbnail() && is_singular() ) :
	$featuredimage = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$alt_text = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );

	printf(
		'
			<div class="page_featured_image_container">
				<img src="%s" class="page_featured_image" alt="%s" />
			</div>
			',
		esc_url( $featuredimage ),
		esc_html( $alt_text )
	);

endif;