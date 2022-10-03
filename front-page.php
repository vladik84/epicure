<?php get_header(); ?>

<main class="container">
        <div class="sections">
                <?php
                /** SECTION - BANNER  */
                get_template_part('template-parts/sections/hero', 'banner');
                /** END - BANNER */

                /** SECTION - RESTAURANTS */
                get_template_part('template-parts/sections/highest', 'rated');
                /** END - RESTAURANTS */

                /** SECTION - FEATURED DISHES */
                get_template_part('template-parts/sections/signature', 'dish');
                /** END - FEATURED DISHES */

                /** SECTION - ICONS */
                get_template_part('template-parts/sections/dish', 'icons');
                /** END - ICONS */

                /** SECTION - FEATURED CHEF */
                get_template_part('template-parts/sections/featured', 'chef');
                /** END - FEATURED CHEF */

                /** SECTION - ABOUT US */
                get_template_part('template-parts/sections/about', 'us');
                /** END - ABOUT US */
                ?>
        </div>

</main>

<?php get_footer(); ?>