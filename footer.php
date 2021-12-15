<?php wp_footer(); ?>
</body>
<footer>
    <nav>
        <?php wp_nav_menu( array(
            'theme_location' => 'footerMenuLocationOne',
            'fallback_cb' => false
        ) ); ?>
    </nav>

    <nav>
        <?php wp_nav_menu( array(
            'theme_location' => 'footerMenuLocationTwo',
            'fallback_cb' => false
        ) ); ?>
    </nav>
</footer>
</html>