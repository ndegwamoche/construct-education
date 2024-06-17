<?php

/**
 * Footer
 * 
 * @link hhttps://github.com/ndegwamoche/construct-education
 *
 * @package construct-education
 */
?>

<footer class="footer bg-blue text-center text-md-left text-white py-5">
    <div class="container">

        <div class="row text-center">
            <div class="col-12 logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/logo_light.png')) ?>" alt="Bottom logo" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 links-column text-md-left">
                <?php
                if (has_nav_menu('footer-menu-1')) {
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'theme_location' => 'footer-menu-1',
                            'walker' => new Custom_Walker_Nav_Menu(),
                        )
                    );
                }
                ?>
            </div>
            <div class="col-md-4 links-column  text-md-center">
                <?php
                if (has_nav_menu('footer-menu-2')) {
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'theme_location' => 'footer-menu-2',
                            'walker' => new Custom_Walker_Nav_Menu(),
                        )
                    );
                }
                ?>
            </div>
            <div class="col-md-4 links-column  text-md-right">
                <?php
                if (has_nav_menu('footer-menu-3')) {
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'theme_location' => 'footer-menu-3',
                            'walker' => new Custom_Walker_Nav_Menu(),
                        )
                    );
                }
                ?>
            </div>
        </div>

        <!-- Social Icons Section -->
        <div class="row text-left social-icons mt-5">
            <div class="col-12">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/facebook.png')) ?>" alt="facebook" class="mr-4">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/instagram.png')) ?>" alt="instagram" class="mr-4">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/x.png')) ?>" alt="x" class="mr-4">
            </div>
        </div>
        <!-- Bottom Text Section -->
        <div class="row text-left bottom-text">
            <div class="col-12">
                <p>Cursus commodo vitae faucibus hac. Sem pretium lacus nunc urna commodo feugiat lacus.</p>
                <p>Massa a faucibus porttitor est maecenas aliquet.</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

</body>

</html>