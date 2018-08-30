<?php get_header(); ?>
<script>
	$("#name").hide();
</script>
<div class="container content">
	<div class="row">
		<div class="col-md-12" id="girls">
			<span style="font-size: 55px; margin: 135px 0 0; display: block;">Кристина Борисенко</span><br>
			<span style="font-size: 30px; margin: -65px 0 0; display: block;">Ваш партнер в персональном стиле</span><br>
			<span style="font-size: 24px; display: block; padding: 0px 330px; line-height: 1;">Прически и стильный образ с  помощью персонального стилиста</span><br>
			<a href="/st/?p=30"><span style="display: inline-block; color: black; background-color: #ff5c61; padding: 0px 20px;">Посмотреть</span></a><br>
			<a href="#join"><img style="margin-top: 160px;" src="<?php bloginfo('template_url'); ?>/images/arrow.png"></a>
		</div>
	</div>
</div>
<script>
var linkNav = document.querySelectorAll('[href^="#join"]'),
    V = 1;  // скорость, может иметь дробное значение через точку
for (var i = 0; i < linkNav.length; i++) {
  linkNav[i].addEventListener('click', function(e) {
    e.preventDefault();
    var w = window.pageYOffset,  // прокрутка
        hash = this.href.replace(/[^#]*(.*)/, '$1');  // id элемента, к которому нужно перейти
        t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
        start = null;
    requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
    function step(time) {
      if (start === null) start = time;
      var progress = time - start,
          r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
      window.scrollTo(0,r);
      if (r != w + t) {
        requestAnimationFrame(step)
      } else {
        location.hash = hash  // URL с хэшем
      }
    }
  }, false);
}
</script>
<div class="container-fluid content gen">
	<div class="row">
		<div class="col-md-12" style="background-color: #e7f3f2; padding: 60px 300px">
			<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div style="margin: 30px auto; display: table;">
				<span id="join">Присоединяйтесь к сообществам!</span><br>
				<div class="social">
					<a target="_blank" href="https://facebook.com"><img src="<?php bloginfo('template_url'); ?>/images/fb.png"><br><i class="fa fa-facebook"></i></a>
				</div>
				<div class="social">
					<a target="_blank" href="https://instagram.com/"><img src="<?php bloginfo('template_url'); ?>/images/insta.png"><br><i class="fa fa-instagram"></i></a>
				</div>
				<div class="social">
					<a target="_blank" href="https://ru.pinterest.com/"><img src="<?php bloginfo('template_url'); ?>/images/pin.png"><br><i class="fa fa-pinterest-p"></i></a>
				</div>
				<div class="social">
					<a target="_blank" href="https://twitter.com"><img src="<?php bloginfo('template_url'); ?>/images/tweet.png"><br><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>