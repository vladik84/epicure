<?php
$args = array(
    'post_type' => 'epicure_restaurants'
);
// Use WP_Query and append the results into $results
$results = new WP_Query($args);

$chef = get_field('featured_chef_chef');
?>

<div class="section featured-chef">
    <h2 class="section-title"><?php the_field('featured_chef_title') ?></h2>
    <div class="chef-card">
        <?php echo get_the_post_thumbnail($chef->ID, 'square'); ?>
        <a class="chef-card-title" href="<?php the_permalink(); ?>">
            <h3 ><?php echo $chef->name; ?></h3>
        </a>
        <p class="chef-card-description"><?php echo $chef->description; ?></p>
    </div>
    <?php if (get_field('featured_chef_realted_restaurants') != NUll) : ?>
        <h2 class="related-restaurants-title"><?php the_field('featured_chef_realted_restaurants'); ?></h2>
    <?php endif; ?>
    <ul class="related-restaurants">
        <?php while ($results->have_posts()) : $results->the_post(); ?>
            <?php if (get_field('chef')->ID === $chef->ID) : ?>
                <li class="related-restaurants-card">
                    <?php the_post_thumbnail('square'); ?>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php echo the_field('name'); ?></h3>
                    </a>
                </li>
            <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>

</div>