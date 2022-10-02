<div class="section about-us">
    <h2 class="section-title"><?php echo get_field('about_us_title') ?> </h2>
    <div class="about-us-content">
        <p class="about-us-description">
            <?php the_field('about_us_description'); ?>
        </p>
        <div class="download-links">
            <?php if (get_field('app_store_download_link') != NULL) : ?>
                <a href="<?php the_field('app_store_download_link') ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/app-store-logo.svg" ?>">
                </a>
            <?php endif; ?>
            <?php if (get_field('google_play_download_link') != NULL) : ?>
                <a href="<?php the_field('google_play_download_link') ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/google-play-logo.svg" ?>">
                </a>
            <?php endif; ?>
        </div>
        <img class="about-us-image" src="<?php echo the_field('about_us_image'); ?>">
    </div>
</div>