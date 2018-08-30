<?php 
/*
Template Name: Services
*/
get_header(); ?>
<div class="container gen">
	<div class="row">
	<span class="line"></span>
    	<div class="col-md-12">
			<?php $posts = get_posts ("category=2&orderby=date&numberposts=99"); ?> 
			<?php if ($posts) : ?>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
			 
				<div class="block">
					<div class="name2"> 
						<a href="<?php the_permalink(); ?> ">
							<?php the_post_thumbnail('portf-img', array('class' => 'miniature-news')); ?>
						</a>
						<span style="font-size: 13px; color: #787878">Услуги</span><br>
						<span style="display: block; width: 20px; height: 2px; background-color: #7cd6b9; margin: 5px 0 0px;"></span>
						<span style="margin:0"><?php the_title(); ?><span>
					</div>
					<div>
					<?php 
					if ( in_category('2') ) { 
						the_excerpt();
						?>
						<a href="<?php the_permalink(); ?> ">
						<span class="more"><span class="more_img"> </span>Подробнее</span>
						</a>
					<?php	
					} 
					?>
					</div>
				</div>
			 
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>