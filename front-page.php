<?php get_header(); ?>

<main class="container">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php
        // Check if an image exists
        if (has_post_thumbnail()) :
            the_post_thumbnail('box');
        endif;
        ?>
        <?php epicure_hightes_rated_restaurants() ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>