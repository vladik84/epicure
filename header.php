<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header container">
        <div class="navigation-bar">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="site-logo">
                </a>
                <h1 class="site-title"><?php echo get_bloginfo('name') ?></h1>
            </div>
            <?php

            $args = array(
                'theme_location' => 'main-menu',
                'container' => 'nav',
                'container-class' => 'main-menu'
            );
            wp_nav_menu($args);
            
            ?>
            <div class="icons">
                <a>
                    <img src="<?php echo get_template_directory_uri() . "/img/search.svg" ?>" alt="search-icon">
                </a>
                <a>
                    <img src="<?php echo get_template_directory_uri() . "/img/personal-area.svg" ?>" alt="personal-area-icon">
                </a>
                <a>
                    <img src="<?php echo get_template_directory_uri() . "/img/cart.svg" ?>" alt="cart-icon">
                </a>
            </div>
        </div>
    </header>
</body>

</html>