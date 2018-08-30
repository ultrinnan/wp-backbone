<?php get_header(); ?>
<div class="container">
  	<div class="row">
    	<div class="col-md-12">
			<h2 class="page-heading"><?php the_title(); ?></h2>
			<section style="padding: 20px; line-height: 30px;">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
			        <?php the_content(); ?>
				<?php endwhile; endif; ?>
			</section>
		</div>
 	</div>
</div>
<?php get_footer(); ?>