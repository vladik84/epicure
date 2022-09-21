<footer class="site-footer container">
    <div class="footer-content">
        <?php

        $args = array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'footer-menu'
        );
        wp_nav_menu($args);
        
        ?>
    </div>
</footer>
<?php wp_footer() ?>