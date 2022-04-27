<a href="<?php echo esc_url( get_post_permalink() ); ?>" class="post">
    <div class="post__image-wrapper">
        <?php
        echo get_the_post_thumbnail( get_the_ID(), 'large' );
        ?>
    </div>
    <div class="post__info">
        <p class="post__title"><?php echo esc_html( get_the_title() ); ?></p>
        <p class="post__text">
            <?php echo esc_html( wp_trim_words( get_the_excerpt(), 10, '...') ); ?>
        </p>
    </div>
</a>
