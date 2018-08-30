	<?php 
/*
Template Name: Price_new
*/
get_header(); ?>
<div class="container-fluid price-page center">
		<div class="content">
			<h2 class="page-heading"><?php the_title(); ?></h2>

		<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
			
		</div>
	</div>	<!-- price-page -->
	<?php get_footer(); ?>