<?php
$args = array(
    'post_type' => 'epicure_dishes',
    'is_featured' => 'true'
);
// Use WP_Query and append the results into $results
$results = new WP_Query($args);
?>

<div class="section signature-dish">
    <?php
    $selected_restaurant = get_field('featured_dishes_restaurant');
    ?>
    <h2 class="section-title"><?php echo get_field('featured_dishes_title') . " " . $selected_restaurant->name ?> </h2>
    <ul class="featured-dishes">
        <?php $counter = 0; ?>
        <?php while ($results->have_posts()) : $results->the_post(); ?>
            <?php if (
                get_field('restaurant')->ID === $selected_restaurant->ID &&
                (get_field('is_featured'))
            ) : ?>
                <?php $counter++ ?>
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
                            <h4 class="dish-price" id="hide"><?php echo the_field('price'); ?></h4>
                            <div class="dish-icons" id="show">
                                <?php
                                $icons = get_field('icon');
                                foreach ($icons as $icon) { ?>
                                    <img class="dish-icon" src="<?php echo get_template_directory_uri() . "/img" .  "/" .  $icon . ".svg" ?>">
                                <?php   } ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
        <?php if ($counter === 0) : ?>
            <p>No featured dishes yet!</p>
        <?php endif; ?>
    </ul>
</div>