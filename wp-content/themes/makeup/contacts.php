<?php 
/*
Template Name: Contacts
*/
get_header(); ?>
	 <div class="container-fluid contacts center">
		<div class="content">
			<h2 class="page-heading">Контактная информация</h2>
			<div class="row">
				<div class="col-sm-6 col-md-6">
			<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
				</div> 
				<div class="col-sm-6 col-md-6">
					<h4>Обратная связь:</h4>
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

		<div class="map-container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.8102173576717!2d30.5099290160804!3d50.40737439834842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf310efc2c01%3A0xebded2547e458034!2z0KfQtdGA0LLQvtC90L7Qt9C-0YDRj9C90LjQuSDQv9GA0L7RgdC_LiwgMTE5LCAxNDQsINCa0LjRl9Cy!5e0!3m2!1sru!2sua!4v1449169673134" width="50%" height="600" frameborder="0" style="border:0; float:left;" allowfullscreen></iframe>

			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2542.8986506702213!2d30.50879855557674!3d50.40572637170737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0L8t0YIg0JrRgNCw0YHQvdC-0LfQstC10LfQtNC90YvQuSAxMTk!5e0!3m2!1sru!2sua!4v1452803431514" width="50%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> -->

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.2581049209334!2d30.526609916081156!3d50.43629289626551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf01153fa95b%3A0x24605cb41c1c067e!2z0LHRg9C7LiDQm9C10YHRliDQo9C60YDQsNGX0L3QutC4LCAzLCDQmtC40ZfQsg!5e0!3m2!1sru!2sua!4v1452803278773" width="50%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div> <!-- map-container -->

	</div> <!-- contacts -->
	<?php get_footer(); ?>