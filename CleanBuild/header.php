<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <meta name="theme-color" content="#fff">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>

	<?php edit_post_link(); ?>

	<body <?php body_class(); ?> >

		<div id="container">

			<header class="main-header">
				<div class="container table">
					<div class="logo td">
						<a href="/" title="Return to the homepage">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/graphics/logo.png" alt="Site Logo">
						</a>
					</div>
					<div class="desk-menu td">
						<?php wp_nav_menu(array('menu' => 'Main Menu', 'container' => false)); ?>
					</div>
				</div>
			</header>