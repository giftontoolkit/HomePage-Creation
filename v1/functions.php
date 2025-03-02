<?php
// Enqueue Styles using style.css located in theme directory
function myTM_enqueue_assets_css() {
    // Enqueue style.css
    wp_enqueue_style('myTM-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myTM_enqueue_assets_css');

// TailwindCSS PayCDN
function myTM_enqueue_tailwindcss_cdn() {
    wp_enqueue_script(
        'tailwindcss-cdn', // Unique handle for your script
        'https://unpkg.com/@tailwindcss/browser@4', // URL of the script
        array(), // Dependencies (none in this case)
        null, // Version (null to let WordPress handle it)
        false // Load in the <head> (false) or before </body> (true)
    );
}
add_action('wp_enqueue_scripts', 'myTM_enqueue_tailwindcss_cdn');


// Header Color Customization
function myTM_customize_register_header_color($wp_customize) {
    // Backgroud-Color Customization
    // Creating Background-Color
    $wp_customize->add_setting('header_background_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving Background-Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color', array(
        'label' => __('Header Background Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'header_background_color',
    )));

    // Text-Color Customization
    // Creating Text-Color
    $wp_customize->add_setting('header_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving Text-Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color', array(
        'label' => __('Header Text Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'header_text_color',
    )));
}
add_action('customize_register', 'myTM_customize_register_header_color');

// Apply Customizations via Inline CSS
function myTM_custom_styles_header_color() {
    ?>
    <style type="text/css">
        .landing-header {
            background-color: <?php echo esc_attr(get_theme_mod('header_background_color', '#000000')); ?>;
            color: <?php echo esc_attr(get_theme_mod('header_text_color', '#ffffff')); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'myTM_custom_styles_header_color');



// Navbar-Color Customization
function myTM_customize_register_navbar_color($wp_customize) {
    // Navbar-Backgroud-Color Customization
    // Creating Background-Color
    $wp_customize->add_setting('navbar_background_color', array(
        'default' => '#096abf',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving Background-Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_background_color', array(
        'label' => __('NavBar Background Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'navbar_background_color',
    )));

    // Navbar_Text-Color Customization
    // Creating navbar_Text-Color
    $wp_customize->add_setting('navbar_text_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving navbar_Text-Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_text_color', array(
        'label' => __('NavBar Text Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'navbar_text_color',
    )));

    // For hover
    // Navbar-Hover Color Customization
    // Creating Navbar-Hover Color Setting
    $wp_customize->add_setting('navbar_hover_color', array(
        'default' => '#ffffff', // Default hover color (e.g., a light blue)
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving Navbar-Hover Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_hover_color', array(
        'label' => __('NavBar Hover Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'navbar_hover_color',
    )));
}
add_action('customize_register', 'myTM_customize_register_navbar_color');

// Apply Customizations via Inline CSS
function myTM_custom_styles_navbar_color() {
    ?>
    <style type="text/css">
        .navbar-header {
            background-color: <?php echo esc_attr(get_theme_mod('navbar_background_color', '#096abf')); ?>;
            color: <?php echo esc_attr(get_theme_mod('navbar_text_color', '#000000')); ?>;
        }
        .navbar-header a:hover { /* Or whatever element you want to style */
            color: <?php echo esc_attr(get_theme_mod('navbar_hover_color', '#ffffff')); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'myTM_custom_styles_navbar_color');


// Footer Customization
function myTM_customize_footer($wp_customize) {
    // Footer Section
    $wp_customize->add_section('myTM_footer_section', array(
        'title' => __('Footer', 'myTM-theme'),
        'priority' => 120,
    ));
    // Footer Text Setting
    $wp_customize->add_setting('footer_text_setting', array(
        'default' => __('© 2023 GiftonToolKit, All Rights Reserved.', 'myTM-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    // Saving Footer Text using Control
    $wp_customize->add_control('footer_text_control', array(
        'label' => __('Footer Text', 'myTM-theme'),
        'section' => 'myTM_footer_section',
        'settings' => 'footer_text_setting',
        'type' => 'text',
    ));
}
add_action('customize_register', 'myTM_customize_footer');


// Footer-Color Customization
function myTM_customize_register_footer_color($wp_customize) {
    // Footer-Backgroud-Color Customization
    // Creating Background-Color
    $wp_customize->add_setting('footer_background_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving Background-Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color', array(
        'label' => __('Footer Background Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'footer_background_color',
    )));

    // Footer_Text-Color Customization
    // Creating footer_Text-Color
    $wp_customize->add_setting('footer_text_color', array(
        'default' => '#6B7280',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving footer_Text-Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
        'label' => __('Footer Text Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'footer_text_color',
    )));

    // For hover
    // footer-Hover Color Customization
    // Creating footer-Hover Color Setting
    $wp_customize->add_setting('footer_hover_color', array(
        'default' => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    // Saving footer-Hover Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_hover_color', array(
        'label' => __('Footer Text Hover Color', 'myTM-theme'),
        'section' => 'colors',
        'settings' => 'footer_hover_color',
    )));
}
add_action('customize_register', 'myTM_customize_register_footer_color');

// Apply Customizations via Inline CSS
function myTM_custom_styles_footer_color() {
    ?>
    <style type="text/css">
        .footer-class {
            background-color: <?php echo esc_attr(get_theme_mod('footer_background_color', '#000000')); ?>;
            color: <?php echo esc_attr(get_theme_mod('footer_text_color', '#6B7280')); ?>;
        }
        .footer-class a:hover { /* Or whatever element you want to style */
            color: <?php echo esc_attr(get_theme_mod('footer_hover_color', '#ffffff')); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'myTM_custom_styles_footer_color');

?>