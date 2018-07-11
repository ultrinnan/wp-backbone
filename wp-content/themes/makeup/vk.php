<?php 
/*
Template Name: vk
*/
get_header(); ?>
<div class="container">
  	<div class="row">
    	<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
			<section style="padding: 20px;">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
			        <?php the_content(); ?>
				<?php endwhile; endif; ?>
        <?php function_exists('vkComments') ? vkComments() : '' ?>
			</section>
		</div>
 	</div>
</div>
<?php get_footer(); ?>