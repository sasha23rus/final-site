<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learn2
 */

get_header();
?>
    <section class="blog">
        <div class="container">
            <div class="blog__wrapper">
                <h2 class="title blog__title">Our Blog</h2>
                <div class="blog__list posts">
                    <?php
                    if ( have_posts() ) :

                      while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/post-item', get_post_type() );

                      endwhile;

                      the_posts_pagination();

                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();
