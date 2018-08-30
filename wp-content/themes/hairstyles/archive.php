<?php get_header(); ?>
	<div class="container"><div class="row">
		<div class="col-md-12">
		<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</div>
	</div>
	</div>
<div class="container gen">
  <div class="row">
    	<div class="col-md-12">
		<div class="main-heading">
		<h1><?php the_title(); ?></h1>
		</div>
		<section>
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
	        <?php the_content(); ?>
		<?php endwhile; endif; ?>
		</section>
	</div>
  </div>
</div>
<?php get_footer(); ?>