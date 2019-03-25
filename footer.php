<?php wp_footer(); ?>

<footer class="fixed-bottom">
    <div class="container-fluid">

        <?php wp_nav_menu(

            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'navigation'
            )

        ); ?>
    </div>
</footer>
</body>
</html>