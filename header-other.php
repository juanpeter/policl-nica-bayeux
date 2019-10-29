<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Google Fonts: Roboto + Roboto Slab -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:100,400,700&display=swap" rel="stylesheet">
    
    <!-- AOS scroll CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php wp_head(); ?>
    <script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>

</head>
<body <?php body_class(); ?>>
    <div class="se-pre-con">
        <div class="loader"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/policlinicaBayeux.png" alt="Logo">
    </div>

        <div class="fade-in"></div>
        <!-- header -->
        <header class="header clear" role="banner">

        <nav class="navbar fixed-top">
            <a href="<?php echo home_url(); ?>"> Voltar a página principal</a> 
        <!-- logo -->
            <a class='navbar-brand logo' href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/policlinicaBayeux.png" alt="Logo" class="logo-img">
            </a>
        <!-- /logo -->
        </nav>
            <!-- /nav -->

        </header>
        <!-- /header -->
