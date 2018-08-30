<?php
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset=<?php bloginfo('charset'); ?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" media="screen" />
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>  
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<div class="container-fluid header">
		<div class="row">
			<div class="col-md-12">
				<div class="menu">
					<a href="/st/?p=4">Обо мне</a>
					<a href="/st/?p=30">Услуги</a>
					<a href="/st/?p=47">Потфолио</a>
					<a href="/st/?p=7">Отзывы</a>
					<span class="phone">+3 096 452 17 80</span>
					<a id="contact" href="/st/?p=52">Контакты</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="name">
				<a href="/st">Кристина Борисенко</a>
			</div>
		</div>
	</div>
	