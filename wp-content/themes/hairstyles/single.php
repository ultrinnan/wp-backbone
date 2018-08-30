<?php get_header(); ?>
<div class="container gen">
  <div class="row">
    	<div class="col-md-12">
		<div style="margin: 0px 10px">
		<div class="main-heading">
		<h1 style="font-family: arial; font-weight: bolder;"><?php the_title(); ?></h1>
		</div>
		<section>
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
	        <?php the_content(); ?>
		<?php endwhile; endif; ?>
		</section>
		</div>
	</div>
  </div>
</div>
<?php get_footer(); ?>