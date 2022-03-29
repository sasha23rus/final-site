<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learn2
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'learn2' ); ?></a>

	<?/*<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$learn2_description = get_bloginfo( 'description', 'display' );
			if ( $learn2_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $learn2_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'learn2' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    */?>

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__title">
                    <p class="header__title__text">Site Title</p>
                </div>
                <div class="header__menu-wrapper">
                    <ul class="header-menu">
                        <li class="header-menu__item"><a href="#">Item 1</a></li>
                        <li class="header-menu__item"><a href="#">Item 2</a></li>
                        <li class="header-menu__item"><a href="#">Item 3</a></li>
                        <li class="header-menu__item header-menu__item_active"><a href="#">Item 4</a></li>
                    </ul>
                </div>
                <button class="btn btn_primary header__button">Contact Us</button>
            </div>
        </div>
    </header>

    <div class="site-main">
