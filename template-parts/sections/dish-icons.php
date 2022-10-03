<?php
$args = array(
    'post_type' => 'epicure_icons'
);

$results = new WP_Query($args);
?>

<?php if ($results->post_count !== 0) : ?>

    <div class="section description-icons">
        <h2 class="section-title"><?php echo get_field('icons_title') ?> </h2>
        <ul class="icons-list">
            <?php while ($results->have_posts()) : $results->the_post(); ?>
                <li class="single-icon">
                    <img class="dish-icon" src="<?php echo the_field('image') ?>">
                    <p><?php echo the_field('name'); ?></p>
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>

<?php endif; ?>