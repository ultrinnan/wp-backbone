<?php 
/*
Template Name: Bio
*/
get_header(); ?>
<div class="container gen">
	<div class="row">
	<span class="line"></span>
    	<div class="col-md-5">
			<img class="bio" src="<?php bloginfo('template_url'); ?>/images/bio.png">
		</div>
		<div class="col-md-7">
			<section  class="bio">
			<span style="font-weight: lighter; font-family: arial;">ТОП-СТИЛИСТ</span><br>
			<span style="    font-size: 170%; line-height: 1.4em;">Кристина<br>
			Борисенко</span><br><br>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>