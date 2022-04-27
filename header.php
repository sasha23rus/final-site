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

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__title">
                    <p class="header__title__text"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'menu-header',
                        'menu_id'         => 'primary-menu',
                        'menu_class'      => 'header-menu',
                        'container_class' => 'header__menu-wrapper',
                    )
                );
                ?>
                <button class="btn btn_primary header__button">Contact Us</button>
            </div>
        </div>
    </header>

    <div class="site-main">
