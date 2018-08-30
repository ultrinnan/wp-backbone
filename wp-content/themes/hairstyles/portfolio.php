<?php 
/*
Template Name: Portfolio
*/
get_header(); ?>
<div class="container gen">
	<div class="row">
	
	<div class="clearfix"></div>
    	<div class="col-md-12 portf">
			<span style="font-size: 40px; color: #444343">Портфолио</span><br>
			<span style="display: block; width: 130px; height: 1px; background-color: #444343; margin: 5px auto 0px;"></span><br>
			<div class="clearfix"></div>
			<?php $posts = get_posts ("category=3&orderby=date&numberposts=99"); ?>
			<?php if ($posts) : ?>
			<?php $i=0; ?>
			<?php foreach ($posts as $post) : setup_postdata ($post); $i++ ?>
				<div class="portf-model">
					<?php the_post_thumbnail('portf-img', array('class' => 'miniature-news')); ?>
					<div class="portf-model-hover">
					<?php
					if ( in_category('3') ) {
					?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?> ">
						<span class="portf_more">Посмотреть отзыв</span>
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
<div class="clearfix"></div>
<script>
	$(document).ready(function(){
		console.log('work');
		/*if($('.portf-model')) {
			alert('da');
		}*/
		$('.portf-model').hover(
			function() {
				$(this).children('.portf-model-hover').fadeIn();
			}, function() {
				$(this).children('.portf-model-hover').fadeOut();
			}
		);
		/*.hover(function(){
			$(this).children('.portf-model-hover').fadeIn();
		},
		{
			$(this).children('.portf-model-hover').fadeOut();
		});*/

	});
</script>

<?php get_footer(); ?>