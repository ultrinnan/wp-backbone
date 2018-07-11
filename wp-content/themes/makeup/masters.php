		<?php 
/*
Template Name: Masters
*/
get_header(); ?>
			<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
	<!-- <div class="container-fluid masters-page center">
		<div class="content">
			<h2 class="page-heading">Наши мастера</h2>
			<div class="master">
				<div class="info-box">
					<img src="<?php bloginfo('template_url'); ?>/images/master-photo2.jpg" alt="">
					<h6>Ксения Чумак</h6>
					<p>Ведущий мастер по моделированию и дизайну ногтей, преподаватель и разработчик учебных программ учебного центра Amore Beauty, инструктор учебного центра AmoreShop, Киев.</p>
					<a href="/obuchenie/" class="but-tn">Курсы преподавателя</a>
				</div>
				<div class="diplomas">
					<h6>Дипломы мастера</h6>
					<div class="diplomas-box">
						<a href="<?php bloginfo('template_url'); ?>/images/diploma.jpg" data-lightbox="diploma1"><img src="<?php bloginfo('template_url'); ?>/images/diploma.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" data-lightbox="diploma1"><img src="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" alt=""></a>
					</div>
				</div>
				<div class="works">
					<h6>Работы мастера</h6>
					<div class="carousel2 short">
						<a href="<?php bloginfo('template_url'); ?>/images/nails1.jpg" data-lightbox="nails"><img src="<?php bloginfo('template_url'); ?>/images/nails1.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails2.jpg" data-lightbox="nails"><img src="<?php bloginfo('template_url'); ?>/images/nails2.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails3.jpg" data-lightbox="nails"><img src="<?php bloginfo('template_url'); ?>/images/nails3.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails4.jpg" data-lightbox="nails"><img src="<?php bloginfo('template_url'); ?>/images/nails4.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails5.jpg" data-lightbox="nails"><img src="<?php bloginfo('template_url'); ?>/images/nails5.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails4.jpg" data-lightbox="nails"><img src="<?php bloginfo('template_url'); ?>/images/nails4.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<div class="master">
				<div class="info-box">
					<img src="<?php bloginfo('template_url'); ?>/images/master-photo3.jpg" alt="">
					<h6>Девушка мастер</h6>
					<p>Ведущий мастер по моделированию и дизайну ногтей, преподаватель и разработчик учебных программ учебного центра Amore Beauty, инструктор учебного центра AmoreShop, Киев.</p>
					<a href="/obuchenie/" class="but-tn">Курсы преподавателя</a>
				</div>
				<div class="diplomas">
					<h6>Дипломы мастера</h6>
					<div class="carousel2 short">
						<a href="<?php bloginfo('template_url'); ?>/images/diploma.jpg" data-lightbox="diploma"><img src="<?php bloginfo('template_url'); ?>/images/diploma.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" data-lightbox="diploma"><img src="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/diploma.jpg" data-lightbox="diploma"><img src="<?php bloginfo('template_url'); ?>/images/diploma.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" data-lightbox="diploma"><img src="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/diploma.jpg" data-lightbox="diploma"><img src="<?php bloginfo('template_url'); ?>/images/diploma.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" data-lightbox="diploma"><img src="<?php bloginfo('template_url'); ?>/images/diploma2.jpg" alt=""></a>
					</div>
				</div>
				<div class="works">
					<h6>Работы мастера</h6>
					<div class="carousel2 short">
						<a href="<?php bloginfo('template_url'); ?>/images/nails1.jpg" data-lightbox="nails1"><img src="<?php bloginfo('template_url'); ?>/images/nails1.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails2.jpg" data-lightbox="nails1"><img src="<?php bloginfo('template_url'); ?>/images/nails2.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails3.jpg" data-lightbox="nails1"><img src="<?php bloginfo('template_url'); ?>/images/nails3.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails4.jpg" data-lightbox="nails1"><img src="<?php bloginfo('template_url'); ?>/images/nails4.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails5.jpg" data-lightbox="nails1"><img src="<?php bloginfo('template_url'); ?>/images/nails5.jpg" alt=""></a>
						<a href="<?php bloginfo('template_url'); ?>/images/nails4.jpg" data-lightbox="nails1"><img src="<?php bloginfo('template_url'); ?>/images/nails4.jpg" alt=""></a>
					</div>
				</div>
			</div>	
		</div>	
	</div>	<!-- masters-page -->-->
	<?php get_footer(); ?>