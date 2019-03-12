<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geowallace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'geowallace' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
					<svg id="logo-gw" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 683.85 120.34"><path d="M18.36,110.14c8.69-4.47,13.26-12.22,18.11-19.91-2.64-6.7-4.18-13.37-.12-20.2A43.91,43.91,0,0,1,52.73,71.2L79,52.93c4.61,2,6.16,6,5.89,11-5.82,3.28-11.56,6.46-17.24,9.74-2.08,1.21-4,2.67-6.54,4.36l4.08,3.48a57.59,57.59,0,0,1,5.21-3.27A22.17,22.17,0,0,1,76.35,76a8.11,8.11,0,0,0,5.33-3.33c1.28-1.64,2.64-3.22,5-2.25s2.56,3.2,2.57,5.46a7.39,7.39,0,0,1-2.68,5.69c-2,1.8-4,3.52-5.67,5l-6.41,18.73c2.78,1.34,5.29,1.36,7.56-.55,4.79-4,10.16-7.38,13.13-13.39,1.49-3,4.32-5.41,7.14-8.8,0-.78-.05-2.43,0-4.07,0-1,0-2.23.5-2.87,3.46-4.09,4.29-9.3,6.38-14,1-2.14,3-3.88,4.7-5.57.54-.51,1.83-.25,2.92-.36a9.23,9.23,0,0,1,.92,2.46c.1,2.65,1.82,4.09,3.64,5.64a31.06,31.06,0,0,1,4.74,5.34c1.31,1.54,4.88-.25,4.21,3.46,7.4,1.56,13.31-1,19-4.32a8.14,8.14,0,0,0,2.83-3.83c1.13-2.71,1.9-5.57,2.78-8.26,7.74,0,9.73,5.88,4.94,14.3,1.45,4,.59,8.2-.24,12.47a60.67,60.67,0,0,0-.84,9.44c-.05,1.35.49,2.72.87,4.63A10.1,10.1,0,0,0,164.24,89c.2-3.27,2.2-5.93,2.19-9.31,0-3.21,1.22-6.43,2-10.18,3.24,1.19,6.34,2.76,9.62,3.42s6.87.47,11.64.72L212.08,56c4.23.17,7.07,3.18,9.31,6.72.56.88.15,3.18-.65,4-3.18,3.16-2.58,6.78-1.42,10.25,1.33,4,3.28,7.73,5.07,11.82,3.29-1.88,4.36-7.25,9-6.74,2-2.17,4.14-3.74,5.27-5.85,2.87-5.34,8.08-8.58,11.42-13.4,2.34-3.39,4.06-7.22,6.08-10.84.4-.7.9-1.34,1.36-2,5.45,4,5.93,10,2.28,27,4.83,1.81,12.77,1.12,29-2.59-.43,6.81-7.6,6.09-10.78,10,2.31,7.83.21,14.51-5.88,20.08-5.44,5-14.32,7.71-21.39,6.28-1.19-2.56-2.45-5.25-3.69-8-1.17-2.54-2.32-5.09-3.18-7H231.66c-4.55,7.26-5.55,14.13-1.46,21.43a7,7,0,0,1,.54,3.8q-.63,7.68-1.56,15.33c-.39,3.27-1,6.52-1.52,9.59-1.75,1-3.47,1.61-4.47,2.78-2.48,2.9-5.19,2.52-8.09,1.09-3.67-1.8-7.34-3.62-10.92-5.59-1.79-1-3.37-2.36-5.87-4.15l-5.79-1.23c-.57-5-.09-9.53,2.64-13.19,4.52-6.09,8.34-12.78,14.54-17.56,2.88-2.22,5.37-5,8.08-7.48-.6-2.88-.94-5.34-1.64-7.7-1.33-4.53-2.86-9-4.38-13.72-4.14.42-2.07,4.85-4.18,6.45q-8.12,6.11-16.23,12.22c-4.33,3.26-9,4.77-14.35,2.82-1.15-5,1.21-9.2,4-12a16.91,16.91,0,0,0,4.72-9.4c-4.13-2.09-8.85,2.83-12.24-1.8-4.66,3-2.33,9.12-6.24,11.55-.93,6.39,1.91,12.64-1.2,18.34,1.23,5.23,2,10.29.71,15.26-3.14,1.57-3.14,1.57-6.33.41-.53-7.6-3.67-14.52-6.36-21.65-1.18-3.12-.79-6.84-1.06-10.3-.43-5.44-.81-10.88-1.25-16.91a12.54,12.54,0,0,0-3.53.37A14,14,0,0,0,144,77.14c-2.65,2.48-5.4,3.94-8.75,1.94-3.18,1.7-4.46,4.41-5.25,7.31-1.14,4.15-2,8.38-3,12.56a18.65,18.65,0,0,1-1.57,4.16c-3.27,6.17-10.44,7-15.14,1.67-3-3.39-3.86-7.62-4.4-12-.2-1.55-.5-3.08-.93-5.68a47.12,47.12,0,0,0-3.76,4c-2.89,4-5.41,8.36-8.55,12.18-4.18,5.06-10,7.62-16.4,8.21-2,.18-4-1-6.3-1.58.49-4.37.81-8.14,1.35-11.88s1.31-7.42,2-11.49c-.79.12-1.88,0-2.5.45-3.75,2.89-7.56,4-11.81,1a4.6,4.6,0,0,0-1.79-.38L53.6,79.05c-2.29-.5-2.77.89-2.81,2.22-.15,5-.3,10-.11,14.93.17,4.81,1.07,9.6,1,14.41,0,3.41-.83,6.94-5.15,8.72-3.78-8-3.72-16.33-3.5-24.71L42,94.27c-1.55,1.85-3.07,3.72-4.65,5.54-3.28,3.77-6.48,7.61-9.93,11.2a17.8,17.8,0,0,1-9.16,5.07c-2.93-3.87-5.82-7.68-9.08-12-.65-9-1.72-18.56-1.92-28.18-.17-8.73,2.78-17,6.08-25a15.75,15.75,0,0,1,4.14-5.52c4.71-4.11,4.81-4,6.34-9.21C27.86,34.48,32,32.45,36.32,31c3.24-1.08,4.06-.39,5.38,2.58,3.3,7.41-2.27,16.69-10.41,17l-.7-5.6a15.9,15.9,0,0,0-8.74,6.35c-3.81,5-5.45,11-6.85,17q-1,4.36-1.84,8.78c-1.76,9.3-.43,18.45,1.5,27.56A8,8,0,0,0,18.36,110.14ZM198.88,135c6.32,6.48,14.36,7.19,22.8,7.95,1.92-10.48,3-20.27-1.18-30l-6.42,2.56C211.16,123.47,203,127.28,198.88,135ZM115.15,74.22c-.75,6.66-1.53,12.39-2,18.14a7.87,7.87,0,0,0,4.28,8c4.52-6.57,9.55-12.55,9.44-21.6Zm140,28c5.76.15,11.27-.51,16-4.07,3.61-2.72,5.64-6.26,4.65-11.52-1.83.33-3.6.23-4.91,1-5.51,3-11.53,4.42-17.64,6C252,96.7,254.09,99.15,255.17,102.18ZM190.56,90.45c4.66-1.41,6.29-7.58,11.57-6.89l6.25-9.32C198.52,76.25,193.33,82,190.56,90.45Z" transform="translate(-7.22 -30.52)"/><path d="M641.48,71.82c1.49.5,2.61,1.28,3.12,1,5.19-3,10.76-1.42,16.16-1.53,4.79-.11,9.65,1,14.3-1,.15-.07.36-.18.48-.13,4.08,1.75,8.14.07,12.21,0,2.24,0,2.24.13,3.32,3.54-7.81.47-14.49,4.41-21.62,6.93-5,1.74-9.78,3.08-15,1.52a4.92,4.92,0,0,0-3.41.18c-4.89,2.6-9.63,1.79-14.83-.54l-6.8,3.81c-.94,4.55-1.56,9.06.85,13.42,2.7,4.9,7.2,7.16,12.41,8.34A84,84,0,0,0,666,108.9c2.32-.13,4.65-.34,7-.24.73,0,1.43.94,2.92,2-5.69.89-10,2.92-15.14,2.68-4.93-.23-9.93,1.12-14.88,1s-9.83-1.08-15.23-1.73c-5.86-5.78-9.84-12.75-8.77-21.55a4.36,4.36,0,0,0-5.06-1.85,35.74,35.74,0,0,0-4.27,1.33c-7.22,2.65-13.71,1.09-19.63-3.46-2.22-1.71-4.28-3.62-6.62-5.62-2.91,2.29-5.94,4.3-8.53,6.77-4.72,4.48-9.92,3.66-15.29,1.9-1.73-.57-3.41-1.31-4.81-1.85-7.33,1-13.77,4.76-21.29,4.75l-5.31-7.53c-4.26.45-7.27,3.11-10.3,5.61-2.69,2.22-5.15,4.71-7.79,7-4.41,3.79-8.28,3.32-12-1.28-3.14-3.93-4.13-8.67-4.88-13.43-.82-5.26-1.28-10.57-2.06-15.84A40.28,40.28,0,0,0,492.34,62c-6,5.72-8.82,12-9.27,19l-8,10.21c-1,4.29-.13,9.34-2.82,13.46-4.91.42-6.3-.12-7.45-4.1-1-3.3-1.14-6.83-1.62-10.26-.34-2.46-.49-5-.93-7.39a6.44,6.44,0,0,0-4-4.92l-2.58,1.91c4-8.19,5.47-16.66,6.35-25.38.49-4.74,1.93-9.4,3.09-14.05a14.6,14.6,0,0,1,1.77-3.28c5.4,1.16,7.62,4.31,6.49,9.39-1,4.38-2.43,8.65-3.5,13-.51,2.07-.57,4.26-.93,6.38a41.5,41.5,0,0,1-1.85,7.44c1,4.12-.24,8.88,2.77,13.44l6.83-8.68-.46-.22c1.11-2.47,2.17-5,3.34-7.41.72-1.49,2-2.81,2.33-4.36a5.87,5.87,0,0,1,4.64-4.81c.37-10.49,7.88-18.52,9.07-28.71,5.64,1.62,7.55,4.4,6.93,10a50.48,50.48,0,0,1-1.46,7.83c-1.94,7-2.49,13.89.11,21,1.65,4.49,2.37,9.31,3.64,13.94a37.39,37.39,0,0,0,2,4.68c7.6-1.89,14.59-4.2,20.93-8.33,2.73-1.78,4.41-3.8,4.26-7.27-.18-4.18,2.08-7.61,4-11.09,2.18-3.91,4.45-7.77,6.57-11.47a36,36,0,0,0,5.17-2.71,4.63,4.63,0,0,1,6-.12c2.83,2,5.53,4.2,7.48,5.7,1,4.45,1.66,8,2.69,11.47,1.34,4.52,2.47,9,0,13.54l5,4.64c6.22-1.65,10.81-5.22,15.54-10,.32-3.6,2.65-7.1,6-10.06A7.38,7.38,0,0,0,593,61.27c1.71-6.39,7.7-9.34,11.23-14.28,2.22-3.09,6.1-3.85,9.86-3.9,2,0,3.57.72,4.23,2.82.6,1.89-.06,4.84-1.7,5.82a18.58,18.58,0,0,1-5,2.06c-5.79,1.45-8.11,3.84-9,10a43.51,43.51,0,0,0-4,3.26,21,21,0,0,0-3.73,4.56c-2.16,4-1.3,7.49,2.74,9.13,5.46,2.21,10.83,5,17,4.93,2.91,0,5.73-.14,7.38-3.36-1.25-6.11-7.68-11.15-4.6-18.4,3.62-2.08,5.58,1.22,8.68,2.45,7-7.2,12.65-16,21.73-21.93L654,48.86c-.35,3.24-4.15,2.65-5.42,5.41.61,2.84.75,6.11-1.23,9C645.59,65.92,643.78,68.48,641.48,71.82Zm-85.37,10c-2.67-5.77-5.17-11.19-7.8-16.89l-4.15.25c-1,3.91,3.61,3.34,3.94,5.87-1.11,2.72-3.59.91-5.48,1.77.32,3.55-3,6.62-1.31,10.88C546.13,83,551.16,85.41,556.11,81.79Z" transform="translate(-7.22 -30.52)"/><path d="M387.4,61.34c-4,3.49-4.74,7.61-5.44,11.71-.79,4.55-1.51,9.12-2.39,14.45,3.17,8.58,3.38,12,.59,16.29-5.25-1-8.62-4.39-11.2-8.82-4.74-8.18-9.44-16.38-14.19-24.55-.7-1.21-1.58-2.32-2.51-3.66-5.21,4.38-6.29,9.8-6.39,14.57-3.07,4-6.1,6.93-8,10.51s-2.38,7.53-3.54,11.48c-3.7.41-5.85-1-6.08-5.14a14.29,14.29,0,0,0-3-8.72,4.09,4.09,0,0,1-.74-3.27c1.32-4.21-.37-8-1.71-11.64a24.45,24.45,0,0,1-1.54-9.23c.06-2.49-.12-5,0-7.49.29-4.43,0-8.57-3.34-12-1.48-1.53-1.4-3.49-.28-5.52,1.4-2.54,2.41-5.28,3.66-8.08,5.52,1.89,6.7,6.23,7.36,10.69a42.51,42.51,0,0,1,.15,8,91.79,91.79,0,0,0,1.93,21.8c.89,4.51,1.1,9.15,1.66,14.14A11.45,11.45,0,0,0,339,80.92a47.38,47.38,0,0,0,2.51-6c1.37-4,3-7.77,6.18-10.2.78-3.7-.73-7.58,2.76-10.18,4.39-.32,6.14.41,7.66,4.33,3.78,9.76,10.75,18,13.6,28.16.2.71.93,1.28,1.59,2.13,2.31-1.83,1.73-4.19,1.38-6A20.89,20.89,0,0,1,376,71.48c1.46-3.84,2.29-7.92,3.38-11.82a59.18,59.18,0,0,0,4.18-4.77c2.34-3.28,5.07-3.4,7.41-.12a17,17,0,0,1,1.12,2.07l5.37,2.43h9.67c3.93-3.85,9.14-6.29,15.71-4.89,2.85,3.52,3.65,7.71,4.06,12.07a95.92,95.92,0,0,0,1.39,11.37c.58,2.69,2,5.21,3.24,8.39l-1.27,4.73c.55,1.62,1.14,3.32,1.78,5.17,6.41.49,6.95-5.4,8.45-7l12.37-8.52c.62,2.43-.59,3.77-1.46,5-4.6,6.28-9.34,12.45-14.5,19.27H430c-3.22-6-2.72-13.46-7.47-19.18-5.87,4.53-11.06,9.5-18.36,11.75a82.64,82.64,0,0,1-5.36-8.27,8.93,8.93,0,0,1-.86-5.69,140.5,140.5,0,0,1,4.65-14c.33-.9,1.58-1.46,2.39-2.16a3.19,3.19,0,0,0-4.56-2.07c-3.64,1.76-6.31.56-9.05-1.79C390.32,62.42,388.82,62,387.4,61.34ZM416.85,67c-3,3.61-5.86,6.95-8.52,10.47a25.25,25.25,0,0,0-3.11,5.62,5.75,5.75,0,0,0,1.06,6.69c4.05-2.37,9-3.19,11.65-7.73C417.11,77.25,421.68,72.12,416.85,67Z" transform="translate(-7.22 -30.52)"/></svg>
				</a>
			</h1>
			<?php
			$geowallace_description = get_bloginfo( 'description', 'display' );
			if ( $geowallace_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $geowallace_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'geowallace' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
