<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body class="font-sans m-0 p-0 leading-relaxed">

    <?php get_template_part('header/landing-header'); ?>
    <?php get_template_part('header/navbar-header'); ?>

    <section id="features" class="features py-12">
        <div class="container w-11/12 max-w-7xl mx-auto p-5 text-center">
            <h2>Why Choose GIFTON?</h2>
            <div class="feature-item bg-[#f7f7f7] my-2 p-5 rounded">
                <h3>Customizable Themes</h3>
                <p>Build your brand identity with fully customizable designs.</p>
            </div>
            <div class="feature-item bg-[#f7f7f7] my-2 p-5 rounded">
                <h3>Powerful Plugins</h3>
                <p>Extend your store functionality with custom plugins.</p>
            </div>
            <div class="feature-item bg-[#f7f7f7] my-2 p-5 rounded">
                <h3>Optimized for Speed</h3>
                <p>Fast loading pages to ensure a seamless shopping experience.</p>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
    
</body>
</html>