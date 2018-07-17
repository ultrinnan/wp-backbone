<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=<?php bloginfo('charset'); ?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/adaptive.css" media="(max-width: 1200px)"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
	<script src="https://apis.google.com/js/platform.js" async defer>{lang: 'ru'}</script>
</head>
<body class="flowered">
	<header>
		<a href="#" id="mob-menu">меню сайта</a>
		<a href="#" class="left-btn pull-left"></a>
		<a href="#" class="right-btn pull-right"></a>
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
		<a href="<?=get_home_url();?>" class="logo">MakeUp by Margaret</a>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'menu_class' => 'main-nav',
            'container' => false,
        ]);?>
	</header>
	<?php
		if (!is_front_page()) echo '<div class="breadcrumbs"><a href="/index.php">главная ></a></div>';
	?>