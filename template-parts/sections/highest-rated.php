<?php
$args = array(
    'post_type' => 'epicure_restaurants',
    
    //How to quarey from the 'wp_rmp_analytics' table?
);
// Use WP_Query and append the results into $results
$results = new WP_Query($args);
?>

<div class="section highest-rated">
    <h2 class="section-title"><?php the_field('popular_restaurants_title') ?></h2>
    <ul class="highest-rated-restaurants">
        <?php $counter = 0; ?>
        <?php while ($results->have_posts()) : $results->the_post(); ?>
            <?php if (
                rmp_get_avg_rating(get_the_ID()) >= '4' &&
                $counter <= 5
            ) : ?>
                <?php $counter++ ?>
                <li class="restaurant-card">
                    <div class="restausrant-card-content">
                        <?php the_post_thumbnail('square'); ?>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php echo the_field('name'); ?></h3>
                        </a>
                        <?php
                        $chef_object = get_field('chef');
                        $chef_name = $chef_object->name;
                        ?>
                        <p><?php echo $chef_name ?></p>
                        <div class="restaurant-rating">
                            <?php echo rmp_get_visual_rating(get_the_ID()); ?>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
        <?php if ($counter === 0) : ?>
            <p>No ratings yet!</p>
        <?php endif; ?>
    </ul>
    <div class="cta">
        <button class="cta-button">
            <a href="<?php the_field('popular_restaurants_cta_link'); ?>">
                <?php echo the_field('popular_restaurants_cta_title') . " >>"; ?>
            </a>
        </button>
    </div>
</div>