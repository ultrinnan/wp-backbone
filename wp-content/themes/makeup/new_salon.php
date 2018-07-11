<?php 
/*
Template Name: New_Salon
*/
get_header(); ?>
	<div class="container-fluid new-salon-page">
		<div class="content">
			<h2 class="page-heading">Новый салон Amore Beauty на Леси Украинки!</h2>
			<div class="greeting">
			<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
<!-- 				<p>Дорогие наши, любимые клиенточки и клиенты! Мы открыли ещё один салон в самом центре Киева, по адресу бул. Леси Украинки 3.</p>
<p>Мы уже подобрали команду настоящих профессионалов, чтобы как всегда радовать Вас хорошим сервисом, доступными ценами и всеми самыми современными процедурами и услугами.</p>
<p>Первым нашим посетительницам и посетителям мы дарим скидку-20% на все услуги. Скидка действует с 11 по 17 сентября включительно!</p> -->
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 anim fadeInLeft">
					<img src="<?php bloginfo('template_url'); ?>/images/bg-img4.png" alt="">
					<h6>маникюр и педикюр</h6>
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
				<div class="col-sm-6 col-md-6 anim fadeInRight">
					<img src="<?php bloginfo('template_url'); ?>/images/bg-img6.jpg" alt="">
					<h6>Косметология</h6>
					<table class="table">
						<tr>
							<td><span>Наращивание ресниц поштучно</span><br><em>(материалы премиум класса Vivienne Kodi)</em></td>
							<td>360 грн.</td>
						</tr>
						<tr>
							<td><span>Extra Volume: Двойное тройное наращивание</span><br>(2D или 3D эффект)</td>
							<td>600 грн.</td>
						</tr>
						<tr>
							<td><span>Нижнее наращивание ресниц. Коррекция</span></td>
							<td>130 грн.</td>
						</tr>
						<tr>
							<td><span>Коррекция ресниц до 3 недель</span></td>
							<td>200 грн.</td>
						</tr>
						<tr>
							<td><span>Снятие ресниц</span></td>
							<td>100 грн.</td>
						</tr>
						<tr>
							<td><span>Наращивание ресниц поштучно</span><br><em>(материалы премиум класса Vivienne Kodi)</em></td>
							<td>360 грн.</td>
						</tr>
						<tr>
							<td><span>Extra Volume: Двойное тройное наращивание</span><br>(2D или 3D эффект)</td>
							<td>600 грн.</td>
						</tr>
						<tr>
							<td><span>Нижнее наращивание ресниц. Коррекция</span></td>
							<td>130 грн.</td>
						</tr>
						<tr>
							<td><span>Коррекция ресниц до 3 недель</span></td>
							<td>200 грн.</td>
						</tr>
						<tr>
							<td><span>Снятие ресниц</span></td>
							<td>100 грн.</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>