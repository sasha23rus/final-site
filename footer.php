<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learn2
 */

?>

</div><!-- #site-main -->

    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'menu-footer',
                        'menu_id'         => 'footer-menu',
                        'menu_class'      => 'footer-menu',
                        'container_class' => 'footer-menu-wrapper',
                    )
                );
                ?>

                <div class="footer__copyright">
                    <?php echo esc_html( get_theme_mod( 'copyright' ) ); ?> © <?php echo esc_html( date('Y') ); ?>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
