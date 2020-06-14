

<footer>
    <div class="frame-inner">
    <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'bottom-nav',
                    'menu_class' => 'bottom-nav'
                )
            );
        ?>
        <p class="font-header copyright">© <?php echo date("Y"); ?> Copyright Brian Burkard. </p>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>