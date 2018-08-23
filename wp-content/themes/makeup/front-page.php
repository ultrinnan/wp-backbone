<?php get_header(); ?>
	<div class="container-fluid main-top">
		<div class="row">
			<div class="col-md-4">
				<h1 class="anim fadeInLeft">MakeUp by Margaret</h1>
				<p class="anim fadeInLeft" data-wow-delay="1s">Красота в удовольствие</p>
				<address class="anim fadeInLeft" data-wow-delay="1.5s">
					<!--<p>г. Киев, проспект Краснозвездный<br>119 оф. 144 (метро Демеевская)</p>-->
					<p>г. Киев, бул. Леси Украинки, 3 оф 127<br>(метро Кловская)</p>
				</address>
				<div class="register anim fadeInUp" data-wow-delay="2s">
					<p>Запись по телефонам</p>
					<p><strong>(095)</strong> 700-30-37;</p>
					<p><strong>(096)</strong> 325-13-85;</p>
                    <!--	<p><strong>(063)</strong> 985-09-92;</p>
                        <p><strong>(044)</strong> 246-41-61;</p> -->
					<a href='/zapis-onlajn/'><button class="but-tn">записаться онлайн</button></a>
				</div>
				<a href="/akcii-i-skidki/" class="action-link">акции и скидки ></a>
			</div>
			<div class="col-md-8" id="main-slider">
				<div class="wrapper">
	               <div id="ei-slider" class="ei-slider">
		               <?php
                            echo do_shortcode('[smartslider3 slider=1]');
		               ?>
	                </div><!-- ei-slider -->
                </div><!--  wrapper -->
			</div>
		</div>
	</div> <!-- main-top -->

	<div class="container-fluid main center">
		<div class="row center-top">
			<div class="col-md-4">
				<div class="dct">
					<h5>Акции и скидки</h5>
					<!--<p>г. Киев, проспект Краснозвездный,<br>119 оф. 144</p>-->
					<a href="/2015/09/2812/" class="but-tn">подробнее</a>
				</div>
				<a href="/2015/09/2812/" class="full-box"></a>
			</div>
			<div class="col-md-4">
				<div class="dct">
					<h5>Портфолио</h5>
					<!--<p>г. Киев, бул. Леси Украинки,<br>3 оф 127</p>-->
					<a href="/2015/08/lesi/" class="but-tn">подробнее</a>
				</div>
				<a href="/2015/08/lesi/" class="full-box"></a>
			</div>
			<div class="col-md-4">
				<div class="dct">
					<h5>Услуги и цены</h5>
					<!--<p>г. Киев, проспект Краснозвездный,<br>119 оф. 144</p>-->
					<a href="/obuchenie/" class="but-tn">подробнее</a>
				</div>
				<a href="/obuchenie/" class="full-box"></a>
			</div>
		</div>
		<div class="row center-bottom">
			<div class="col-sm-12 col-md-12 anim fadeInUp services">

				<h6><?=__('Услуги визажиста и бровиста');?></h6>
                <?php $price = get_page_by_path('price');
                if ($price) {
                    echo $price->post_content;
                } else {
                    echo 'Please create page with path "price"';
                }
                ?>
<!--				<table class="table">-->
<!--					<tr>-->
<!--						<td><span>Наращивание ресниц поштучно</span><br><em>(материалы премиум класса Vivienne Kodi)</em></td>-->
<!--						<td>360 грн.</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td><span>Extra Volume: Двойное тройное наращивание</span><br>(2D или 3D эффект)</td>-->
<!--						<td>600 грн.</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td><span>Нижнее наращивание ресниц. Коррекция</span></td>-->
<!--						<td>130 грн.</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td><span>Коррекция ресниц до 3 недель</span></td>-->
<!--						<td>200 грн.</td>-->
<!--					</tr>-->
<!--					<tr>-->
<!--						<td><span>Снятие ресниц</span></td>-->
<!--						<td>100 грн.</td>-->
<!--					</tr>-->
<!--				</table>-->

			</div>
		</div> <!-- center-bottom -->
	</div> <!-- main-center -->
	<section class="second">
		<h2 class="anim slideInLeft">MakeUp by Margaret это:</h2>
		<div class="ader anim flipInX" data-wow-delay="0.5s">высокий<br>уровень<br>обслуживания</div>
		<div class="ader anim flipInX" data-wow-delay="1s">качественная<br>косметика</div>
		<div class="ader anim flipInX" data-wow-delay="1.5s">удобное<br>расположение</div>
		<div class="ader anim flipInX" data-wow-delay="2s">доступные<br>цены</div>
		<div class="ader anim flipInX" data-wow-delay="2.5s">выезд<br>мастера<br>на дом</div>
		<!--<div class="ader anim flipInX" data-wow-delay="3s">школа подготовки<br>мастеров</div>-->
		<div class="ader anim flipInX" data-wow-delay="3s">новые<br>технологии и<br>тренды</div>
	</section> <!-- second -->

	<section class="third">
		<h2><?=__('Свежие работы')?></h2>
		<div class="row">
			<div class="content">
                <div class="articles">
                <?php $posts = get_posts ("category=news&orderby=date&numberposts=6"); ?>
			<?php foreach ($posts as $post) : ?>
                    <div class="article">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <?php //the_excerpt(); //превью?>
                        <p class="title"><?php the_title(); ?></p>
                        </a>
                    </div>
			<?php endforeach; ?>
                </div>
            </div>
		</div>
	</section> <!-- third -->

	<section class="reviews">
		<h2><?=__('Последние отзывы');?></h2>
        <?php
        $feedbacks = new WP_Query([
            'post_type' => 'feedbacks',
            'posts_per_page' => 6,
        ]);

        if ( $feedbacks->have_posts() ) {
            $f_row = '';
            while ( $feedbacks->have_posts() ) {
                $feedbacks->the_post();

                $f_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : '';
                $f_title = get_the_title();
                $f_text = get_the_excerpt();

                $f_row .= <<<ROW
<div class="item">
    <img src="$f_thumbnail" alt="$f_title">
    <p class="user-name">$f_title<br></p>
    <p class="quote">$f_text</p>
</div>
ROW;
            }
        }
        //restore original post data
        wp_reset_postdata();
        ?>
        <div class="content">
			<div class="carousel1">
			<?=$f_row;?>
		</div>
		</div>
        <div class="but-block">
            <?php
            if (!get_page_by_path('feedback')){
                echo '<p>Please create page with path "feedback" and template "Feedback page"</p>';
            } else {
                echo '<a href="/feedback/" class="but-tn">больше отзывов</a>';
                echo '<a href="/feedback/#send_form" class="but-tn">добавить отзыв</a>';
            }
            ?>
        </div>
    </section> <!-- reviews -->

	<div class="description-bottom">
		<div class="content">
			<section style="line-height: 20px">
			<p>Макияж позволяет скрыть некоторые недостатки кожи, визуально скорректировать форму лица с помощью техники контурирования. В зависимости от типа внешности в макияже различают палитры цветов. Например, для типа внешности Лето показаны серо-розовые и голубые тона. Правильный макияж помогает подчеркнуть красоту глаз. Макияж глаз подбирают в зависимости от цвета глаз и волос. Существует несколько разновидностей макияжа: дневной и вечерний, антивозрастной макияж, театральный. У каждого вида макияжа своя техника выполнения. Отдельная разновидность — стойкий или перманентный макияж.
            </p>
			</section>
		</div>
		<h3>makeup by Margaret</h3>
	</div> <!-- description-bottom -->
<?php get_footer(); ?>