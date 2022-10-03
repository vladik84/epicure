<?php

$selected_restaurant = get_field('featured_dishes_restaurant');

$args = array(
    'posts_per_page' => 3,
    'post_type' => 'epicure_dishes',
    'meta_query' => array(
        array(
            'key' => 'is_featured',
            'value' => true
        ),
        array(
            'key' => 'restaurant',
            'value' => $selected_restaurant->ID
        )
    ),
);
// Use WP_Query and append the results into $results
$results = new WP_Query($args);
?>

<?php if ($results->post_count !== 0) : ?>
    <div class="section signature-dish">
        <h2 class="section-title"><?php echo get_field('featured_dishes_title') . " " . $selected_restaurant->name ?> </h2>
        <ul class="featured-dishes">
            <?php while ($results->have_posts()) : $results->the_post(); ?>
                <li class="dish-card">
                    <div class="dish-card-content">
                        <?php the_post_thumbnail('square'); ?>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php echo the_field('name'); ?></h3>
                        </a>
                        <div class="dish-description">
                            <?php echo get_field('ingredients'); ?>
                        </div>
                        <div class="dish-price-icons">
                            <h4 class="dish-price"><?php echo the_field('price'); ?></h4>
                            <div class="dish-icons">
                                <?php
                                $icons = get_field('icon');
                                if ($icons != false) :
                                    foreach ((array)$icons as $icon) { ?>
                                        <div class="dish-icon">
                                            <?php echo get_the_post_thumbnail($icon); ?>
                                        </div>
                                <?php   }
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>
<?php endif; ?>