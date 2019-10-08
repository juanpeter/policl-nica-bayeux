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
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:400,700&display=swap" rel="stylesheet">
		
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

			<div class="fade-in"></div>
			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/policlinicaBayeux.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav role="navigation">
						<?php /*html5blank_nav();*/ ?>
						<ul>
							<a href="#">
								<li>Home</li>
							</a>
							<a href="#description">
								<li>Quem Somos</li>
							</a>
							<a href="#pictures">
								<li>Estrutura</li>
							</a>
							<a href="#exams-specialities">
								<li>Exames</li>
							</a>
							<a href="#results">
								<li>Resultados</li>
							</a>
							<li id="menu-button">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
									<g>
										<g>
										<path d="M2.252,10.271h58.871c1.124,0,2.034-0.91,2.034-2.034c0-1.123-0.91-2.034-2.034-2.034H2.252    c-1.124,0-2.034,0.911-2.034,2.034C0.218,9.36,1.128,10.271,2.252,10.271z"/>
										<path d="m61.123,30.015h-58.871c-1.124,0-2.034,0.912-2.034,2.035 0,1.122 0.91,2.034 2.034,2.034h58.871c1.124,0 2.034-0.912 2.034-2.034-7.10543e-15-1.123-0.91-2.035-2.034-2.035z"/>
										<path d="m61.123,53.876h-58.871c-1.124,0-2.034,0.91-2.034,2.034 0,1.123 0.91,2.034 2.034,2.034h58.871c1.124,0 2.034-0.911 2.034-2.034-7.10543e-15-1.124-0.91-2.034-2.034-2.034z"/>
										</g>
									</g>
								</svg>
							</li>
							<!-- <li>
								<?php //get_sidebar(); ?>
							</li> -->
						</ul>

					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
