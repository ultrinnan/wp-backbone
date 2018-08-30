<?php 
/*
Template Name: Salon_Page
*/
get_header(); ?>
	<div class="container-fluid salon-page center">
		<div class="content">
			<h2 class="page-heading">Страница салона</h2>
			<div class="row about-salon">
				<div class="col-md-7">
					<img src="<?php bloginfo('template_url'); ?>/images/salon-photo1.jpg" alt="">
				</div>
				<div class="col-md-5">
			<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
					<!-- <p>Страница салона Amore Beauty – это еще одно важное направление нашей компании. Мы проводим индивидуальное обучение по наращиванию и дизайну ногтей, маникюру, педикюру, работе с гель-лаками, наращиванию ресниц и эпиляции.</p>
					<p>В связи с узкой специализацией нашего салона, мы очень серьйозно подходим к подбору мастеров. У нас работают только профессиональные мастера ногтевого сервиса с опытом работы, более того, все они проходят специальное дополнительное обучение и постоянно повышают квалификацию. Многие практикующие мастера сами преподают. Именно поэтому нашим мастерам можно доверять.</p>
					<p>Профессионалы знают, что для оказания качественной услуги нужен не только опыт и квалификация, но и хорошие материалы. Мы используем только проверенные высококачественные проверенные и сертифицированные материалы. Это такие известные брен</p> -->
				</div>
			</div>
			<h3>Мастера салона</h3>
			<div class="row masters">
				<div class="col-sm-6 col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/images/master-photo1.jpg" alt="">
					<h6>Ксения Чумак</h6>
					<p>Ведущий мастер по моделированию и дизайну ногтей, преподаватель и разработчик учебных программ учебного центра Amore Beauty, инструктор учебного центра AmoreShop, Киев.</p>
				</div>
				<div class="col-sm-6 col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/images/master-photo1.jpg" alt="">
					<h6>Ксения Чумак</h6>
					<p>Ведущий мастер по моделированию и дизайну ногтей, преподаватель и разработчик учебных программ учебного</p>
				</div>
			</div>
			<div class="row masters">
				<div class="col-sm-6 col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/images/master-photo1.jpg" alt="">
					<h6>Ксения Чумак</h6>
					<p>Ведущий мастер по моделированию и дизайну ногтей, преподаватель и разработчик учебных программ учебного центра Amore Beauty, инструктор учебного центра AmoreShop, Киев.инструктор учебного центра AmoreShop, Киев.инструктор учебного центра AmoreShop, Киев.инструктор учебного центра AmoreShop, Киев.</p>
				</div>
				<div class="col-sm-6 col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/images/master-photo1.jpg" alt="">
					<h6>Ксения Чумак</h6>
					<p>Ведущий мастер по моделированию и дизайну ногтей, преподаватель и разработчик учебных программ учебного центра Amore Beauty, инструктор учебного центра AmoreShop, Киев.</p>
				</div>
			</div>
		</div> <!-- content -->

		<div class="row center-bottom">
			<h3>Услуги салона</h3>
			<div class="col-sm-4 col-md-4">
				<table class="table">
					<tr>
						<td><span>Покрытие гель-лаком</span><br><em>(Kodi, IBD, Gelish, Koto, G.la Color, EzFlow, Naomi)</em></td>
						<td><p>Однотонное 130 грн. Френч 150 грн.</p></td>
					</tr>
					<tr>
						<td><span>Покрытие гель-лаком Кошачий глаз</span></td>
						<td><p>10 ногтей – 180 грн. 1 ноготь – 15 грн.</p></td>
					</tr>
					<tr>
						<td><span>Укрепление ногтей CND Brisa Lite</span><br><em>(без покрытия)</em></td>
						<td><p>150 грн.</p></td>
					</tr>
					<tr>
						<td><span>Укрепление ногтей GelishHarmony </span><br><em>(без покрытия)</em></td>
						<td><p>100 грн.</p></td>
					</tr>
					<tr>
						<td><span>Снятие гель-лака <em>(в т.ч.Shellac)</em></span></td>
						<td><p>50 грн. / 40 грн. (при покрытии)</p></td>
					</tr>
					<tr>
						<td><span>Покрытие ногтей Vinylux</span></td>
						<td><p>60 грн. </p></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4 col-md-4">
				<table class="table">
					<tr>
						<td><span>Покрытие гель-лаком</span><br><em>(Kodi, IBD, Gelish, Koto, G.la Color, EzFlow, Naomi)</em></td>
						<td><p>Однотонное 130 грн. Френч 150 грн.</p></td>
					</tr>
					<tr>
						<td><span>Покрытие гель-лаком Кошачий глаз</span></td>
						<td><p>10 ногтей – 180 грн. 1 ноготь – 15 грн.</p></td>
					</tr>
					<tr>
						<td><span>Укрепление ногтей CND Brisa Lite</span><br><em>(без покрытия)</em></td>
						<td><p>150 грн.</p></td>
					</tr>
					<tr>
						<td><span>Укрепление ногтей GelishHarmony </span><br><em>(без покрытия)</em></td>
						<td><p>100 грн.</p></td>
					</tr>
					<tr>
						<td><span>Снятие гель-лака <em>(в т.ч.Shellac)</em></span></td>
						<td><p>50 грн. / 40 грн. (при покрытии)</p></td>
					</tr>
					<tr>
						<td><span>Покрытие ногтей Vinylux</span></td>
						<td><p>60 грн. </p></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-4 col-md-4">
				<table class="table">
					<tr>
						<td><span>Покрытие гель-лаком</span><br><em>(Kodi, IBD, Gelish, Koto, G.la Color, EzFlow, Naomi)</em></td>
						<td><p>Однотонное 130 грн. Френч 150 грн.</p></td>
					</tr>
					<tr>
						<td><span>Покрытие гель-лаком Кошачий глаз</span></td>
						<td><p>10 ногтей – 180 грн. 1 ноготь – 15 грн.</p></td>
					</tr>
					<tr>
						<td><span>Укрепление ногтей CND Brisa Lite</span><br><em>(без покрытия)</em></td>
						<td><p>150 грн.</p></td>
					</tr>
					<tr>
						<td><span>Укрепление ногтей GelishHarmony </span><br><em>(без покрытия)</em></td>
						<td><p>100 грн.</p></td>
					</tr>
					<tr>
						<td><span>Снятие гель-лака <em>(в т.ч.Shellac)</em></span></td>
						<td><p>50 грн. / 40 грн. (при покрытии)</p></td>
					</tr>
					<tr>
						<td><span>Покрытие ногтей Vinylux</span></td>
						<td><p>60 грн. </p></td>
					</tr>
				</table>
			</div>
		</div> <!-- center-bottom -->

		<div class="map-container">
			<img src="<?php bloginfo('template_url'); ?>/images/map1.jpg" alt="">
		</div> <!-- map-container -->

	</div> <!-- salon-page-center -->
<?php get_footer(); ?>