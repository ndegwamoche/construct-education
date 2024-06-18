<h1>Construct Education WordPress Theme</h1>
    <p>Welcome to the Construct Education WordPress theme. This theme is developed as part of the recruitment process at Construct Education.</p>
    <h2>Theme Information</h2>
    <p><strong>Theme Name:</strong> Construct Education</p>
    <p><strong>Author:</strong> Martin Ndegwa Moche</p>
    <p><strong>Version:</strong> 1.0.0</p>
    <p><strong>Theme URI:</strong> <a href="https://github.com/ndegwamoche/construct-education">https://github.com/ndegwamoche/construct-education</a></p>
    <p><strong>Author URI:</strong> <a href="https://github.com/ndegwamoche/">https://github.com/ndegwamoche/</a></p>
  <h2>Installation</h2>
    <ol>
        <li>Download the theme from the <a href="https://github.com/ndegwamoche/construct-education">GitHub repository</a>.</li>
        <li>Extract the downloaded zip file.</li>
        <li>Upload the extracted folder to your WordPress themes directory (<code>/wp-content/themes/</code>).</li>
        <li>Log in to your WordPress admin dashboard and navigate to <strong>Appearance > Themes</strong>.</li>
        <li>Activate the <strong>Construct Education</strong> theme.</li>
    </ol>
    <h2>Theme Features</h2>
    <ul>
        <li>Custom title support</li>
        <li>Post thumbnails support</li>
        <li>Custom logo support</li>
        <li>Custom menus (Primary and Footer menus)</li>
        <li>Page excerpt support</li>
        <li>Enqueued styles and scripts (Google Fonts, Bootstrap, Flickity)</li>
    </ul>
     <section>
            <h2>Project Overview</h2>
            <p>This project involves converting a provided Figma design into a fully functional WordPress website. The Figma design can be accessed <a target="_blank" href="https://www.figma.com/design/MCqnZoZ0N5YxX1bBrqQSIF/Design---Dev-Task?node-id=0-1&t=BJGkDnqf5i1PkdZH-0">here</a>. The design consists of multiple sections including headers, buttons, image placeholders, content sections, and a footer.</p>
         <img src='https://github.com/ndegwamoche/construct-education/blob/main/screenshot.png'/>
        </section>
    <h2>File Structure</h2>
    <p>The theme includes the following main files:</p>
    <ul>
        <li><strong>functions.php</strong> - Contains all the theme setup functions and definitions.</li>
        <li><strong>header.php</strong> - Contains the header section of the theme.</li>
        <li><strong>footer.php</strong> - Contains the footer section of the theme.</li>
        <li><strong>styles.css</strong> - Contains all the custom CSS styles for the theme.</li>
        <li><strong></strong> - The main template file that includes the header, footer, and main content sections.</li>
    </ul>
    <h2>Header Section (header.php)</h2>
    <pre>
        &lt;!DOCTYPE html&gt;
        &lt;html &lt;?php language_attributes(); ?&gt;&gt;
        &lt;head&gt;
            &lt;meta charset="&lt;?php bloginfo('charset'); ?&gt;"&gt;
            &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
            &lt;?php wp_head(); ?&gt;
        &lt;/head&gt;
        &lt;body &lt;?php body_class(); ?&gt;&gt;
            &lt;nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light"&gt;
                &lt;div class="container"&gt;
                    &lt;?php if ( has_custom_logo() ) : ?&gt;
                        &lt;div class="navbar-brand"&gt;
                            &lt;?php the_custom_logo(); ?&gt;
                        &lt;/div&gt;
                    &lt;?php else : ?&gt;
                        &lt;a class="navbar-brand" href="&lt;?php echo home_url(); ?&gt;"&gt;&lt;?php bloginfo('name'); ?&gt;&lt;/a&gt;
                    &lt;?php endif; ?&gt;
                    &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="&lt;?php esc_attr_e('Toggle navigation', 'construct-education'); ?&gt;"&gt;
                        &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;?php
                    wp_nav_menu(array(
                        'theme_location'  => 'menu-1',
                        'depth'           => 2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarResponsive',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                    ?&gt;
                &lt;/div&gt;
            &lt;/nav&gt;
        &lt;/body&gt;
        &lt;/html&gt;
    </pre>
    <h2>Footer Section (footer.php)</h2>
    <pre>
        &lt;footer class="footer"&gt;
            &lt;div class="container"&gt;
                &lt;div class="row"&gt;
                    &lt;div class="col-lg-4 col-md-6 col-sm-12"&gt;
                        &lt;?php the_custom_logo(); ?&gt;
                        &lt;p class="logo"&gt;Your footer description or address here&lt;/p&gt;
                        &lt;div class="social-icons"&gt;
                            &lt;a href="#"&gt;&lt;i class="fab fa-facebook-f"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;a href="#"&gt;&lt;i class="fab fa-twitter"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;a href="#"&gt;&lt;i class="fab fa-linkedin-in"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="col-lg-2 col-md-6 col-sm-12 links-column"&gt;
                        &lt;?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu-1',
                            'walker'         => new Custom_Walker_Nav_Menu(),
                        ));
                        ?&gt;
                    &lt;/div&gt;
                    &lt;div class="col-lg-2 col-md-6 col-sm-12 links-column"&gt;
                        &lt;?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu-2',
                            'walker'         => new Custom_Walker_Nav_Menu(),
                        ));
                        ?&gt;
                    &lt;/div&gt;
                    &lt;div class="col-lg-2 col-md-6 col-sm-12 links-column"&gt;
                        &lt;?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu-3',
                            'walker'         => new Custom_Walker_Nav_Menu(),
                        ));
                        ?&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="row"&gt;
                    &lt;div class="col-12"&gt;
                        &lt;p class="bottom-text"&gt;&copy; &lt;?php echo date("Y"); ?&gt; &lt;?php bloginfo('name'); ?&gt;. All Rights Reserved.&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/footer&gt;
    </pre>
    
<?php
get_footer();
    </pre>
    <h2>CSS Styles (styles.css)</h2>
    <pre>
        /*!
        Theme Name: Construct Education
        Theme URI: https://github.com/ndegwamoche/construct-education
        Author: Martin Ndegwa Moche
        Author URI: https://github.com/ndegwamoche/
        Description: I developed this theme as part of my participation in the recruitment process at Construct Education.
        Version: 1.0.0
        */
        body {
            font-family: 'Open Sans', sans-serif !important;
        }
        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            font-family: 'Open Sans', sans-serif !important;
        }
        .font-alt {
            font-family: 'Open Sans', sans-serif !important;
        }
        #mainNav .navbar-brand {
            font-family: 'Open Sans', sans-serif !important;
        }
        #mainNav .navbar-nav .nav-item .nav-link {
            color: #1e3d79 !important;
            font-weight: 650;
        }
        .navbar-light .navbar-toggler-icon {
            background-image: url('assets/icons/menu.png');
        }
        .btn-primary {
            background-color: #1e3d79 !important;
            border-radius: 0px;
        }
        .main-header {
            display: none;
        }
        .new-header {
            background-color: #1e3d79;
        }
    </pre>
    <h2>Usage</h2>
    <p>After activating the theme, you can customize it via the WordPress Customizer by navigating to <strong>Appearance > Customize</strong>. Here you can set your site's title, tagline, and logo.</p>
    <p>To manage menus, go to <strong>Appearance > Menus</strong> and create or assign menus to the theme's primary and footer menu locations.</p>
    <h2>Support</h2>
    <p>If you encounter any issues or have any questions about the theme, please visit the <a href="https://github.com/ndegwamoche/construct-education">GitHub repository</a> and open an issue.</p>
    <p>Thank you for using the Construct Education WordPress theme!</p>
