<?php

function epicure_hightes_rated_restaurants($number = -1)
{ ?>
    <?php
    $args = array(
        'post_type' => 'epicure_restaurants',
        'posts_per_page' => $number
    );
    // Use WP_Query and append the results into $results
    $results = new WP_Query($args);
    ?>
    <div class="section">
        <h3 class="section-title"><?php the_field('popular_restaurants_title') ?></h3>
        <ul class="highest-rated-restaurants">
            <?php while ($results->have_posts()) : $results->the_post();
            ?>
                <?php if (rmp_get_avg_rating(get_the_ID()) >= '4') : ?>
                    <li class="restaurant-card">
                        <div class="restaurant-card-content">
                            <?php the_post_thumbnail('mediumSize'); ?>
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
        </ul>
    </div>

<?php }
