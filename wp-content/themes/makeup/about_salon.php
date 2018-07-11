	<?php 
/*
Template Name: About
*/
get_header(); ?>
	<div class="container-fluid about-salon-page center">
		<div class="content">
			<h2 class="page-heading">О салоне</h2>
			<div class="row">
				<!-- <div class="col-md-6">
					<p>Как хочется быть красивой и ухоженной! Как нужен красивый маникюр и педикюр! Как тяжело найти и выбрать хорошего мастера! Как мы Вас понимаем!<br>
					Маникюрный салон Amore Beauty – это специализированная студия ногтевого сервиса. Услуги, на которых мы специализируемся:</p>
					<h6>Услуги, на которых мы специализируемся:</h6>
					<ul>
						<li>– наращивание и дизайн ногтей гелем,</li>
						<li>– маникюр и педикюр всех видов,</li>
						<li>– покрытие ногтей гель-лаками Shellac (шеллак) и другими гель-лаками,</li>
						<li>– СПА процедуры для рук и ног.</li>
						<li>– наращивание ресниц,</li>
						<li>– восковая эпиляция,</li>
						<li>– полуперманентная тушь и биозавивка ресниц.</li>
					</ul>
				</div>
				<div class="col-md-6">
					<p>Школа ногтей Amore Beauty – это еще одно важное направление нашей компании. Мы проводим индивидуальное обучение по наращиванию и дизайну ногтей, маникюру, педикюру, работе с гель-лаками, наращиванию ресниц и эпиляции.</p>
					<p>В связи с узкой специализацией нашего салона, мы очень серьйозно подходим к подбору мастеров. У нас работают только профессиональные мастера ногтевого сервиса с опытом работы, более того, все они проходят специальное дополнительное обучение и постоянно повышают квалификацию. Многие практикующие мастера сами преподают. Именно поэтому нашим мастерам можно доверять.</p>
					<p>Профессионалы знают, что для оказания качественной услуги нужен не только опыт и квалификация, но и хорошие материалы. Мы используем только проверенные высококачественные проверенные и сертифицированные материалы. Это такие известные брен</p>
				</div> -->
			<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
			</div>	
			<div class="row salon-photo-block">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<img src="<?php bloginfo('template_url'); ?>/images/salon-photo2.jpg" alt="">
					<img class="no-margin" src="<?php bloginfo('template_url'); ?>/images/salon-photo3.jpg" alt="">
					<img class="no-margin" src="<?php bloginfo('template_url'); ?>/images/salon-photo4.jpg" alt="">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<img src="<?php bloginfo('template_url'); ?>/images/salon-photo5.jpg" alt="">
					<img class="no-margin" src="<?php bloginfo('template_url'); ?>/images/salon-photo6.jpg" alt="">
				</div>
			</div> 		
		</div> <!-- content -->
	</div> <!-- about-salon-page -->

<?php get_footer(); ?>
