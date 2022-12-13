<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maudalaux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/tfx4bcn.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'maudalaux' ); ?></a>

	<header id="masthead" class="site-header items-center">
		<div class="site-branding">
            <div class="flex flex-row items-center ">
				<div class="ml-10"><?php the_custom_logo();?></div>
                <h1 class="site-title ml-4"><a class="text-[#EBDCD1] hover:text-[#EBDCD1] font-bold bressay text-3xl" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Maud Alaux</a></h1>
            </div>

            <?php
			$maudalaux_description = get_bloginfo( 'description', 'display' );
			if ( $maudalaux_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $maudalaux_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
