<?php
// var_dump('hello');
// var_dump($_POST);
// die;
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['text1'];
	$error = '';
	if(!$name) {$error .= 'Возможно вы указали свое имя? ';}
	if(!$phone) {$error .= 'Возможно вы не указали свой телефон. ';}
	// if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Возможно вы забыли написать сообщение :) ';}
	if(!$error) {
		$address = "salon@amorebeauty.com.ua";
		$sub = "Новое письмо с сайта";
		$mes = "Имя: ".$name."\n\nТелефон: ".$phone."\n\nСообщение: ".$message."\n\n";
		$send = mail($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {
			$mess = 'Спасибо за ваше письмо!';
		}
			// header('Location: /');
	}
	else $mess = $error;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Спасибо!</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body style="text-align: center; background: url(/wp-content/themes/amore/images/flow-bg3.png) 0% 0px no-repeat;     font-family: 'Open Sans', sans-serif;">
	<h1><?=$mess;?></h1>
	<h3>Вы будете перенаправлены назад через пару секунд</h3>
	<script>
	  setTimeout( 'location="/";', 3000 );
	</script>

</body>
</html>