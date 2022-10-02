<div class="section hero-banner">
    <img class="hero-image" src="<?php echo get_field('hero_image'); ?>">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo get_field('hero_title') ?></h1>
        <form id="hero-search-bar">
            <button class="search-icon-button">
                <img class="search-icon" src="<?php echo get_template_directory_uri() . "/img/search.svg" ?>">
            </button>
            <input class="search-text" type="search" placeholder="<?php echo get_field('hero_search_placeholder') ?>">
        </form>
    </div>

</div>