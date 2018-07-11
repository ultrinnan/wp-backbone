<?php 
/*
Template Name: Write online
*/
get_header(); ?>
	 <div class="container-fluid contacts center">
		<div class="content">
			<h2 class="page-heading">Записаться к нам ОНЛАЙН</h2>
			<div class="row">
				<div class="col-sm-8 col-md-8" style="padding:20px;">
					<form id="contact" action="<?php bloginfo('template_url'); ?>/mail.php" method="POST">
						<label for="name">Ваше имя</label>
						<input type="text" class="text-field" name="name" required>
						<label for="phone">Номер телефона</label>
						<input type="text" class="text-field" name="phone" required>
						<label for="email">Емейл (желательно)</label>
						<input type="text" class="text-field" name="email">
						<label for="text1">Примечание</label>
						<textarea name="text1" id="text1"></textarea>
						<span>Введите код:</span>
						<span id="capt-img"></span>
						<input name="md5" type="hidden">
						<!-- <span id="aspm"></span> -->
						<input type="text" id="capture">
						<input type="submit" class="submit hvr-rectangle-in" value="отправить">
					</form>
					<script>
// функция для генерации случайных чисел в диапазоне от m до n
function randomNumber(m,n){
    m = parseInt(m);
    n = parseInt(n);
    return Math.floor( Math.random() * (n - m + 1) ) + m;
};

var aspmA = randomNumber(1,23); // генерируем число
var aspmB = randomNumber(1,23); // генерируем число
var sumAB = aspmA + aspmB;  // вычисляем сумму
document.getElementById('capt-img').innerHTML = aspmA + ' + ' + aspmB ;  // показываем пользователю выражение
					
					$(".submit").click(function() {
							// $("#contact").submit();
						// var capture = $("#capture").val();
						// if (capture == sumAB) {
						// 	console.log('should work');
							alert('Спасибо за Ваше письмо!');
						// } else {
						// 	alert('Неправильно введена сумма чисел');
						// 	location.reload();
						// }
					});
					</script>
				</div>
			</div>			
		</div> <!-- content -->

	</div> <!-- contacts -->
	<?php get_footer(); ?>