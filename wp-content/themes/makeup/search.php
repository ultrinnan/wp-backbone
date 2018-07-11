<?php get_header(); ?>
<div class="container">
  	<div class="row">
    	<div class="col-md-12">
			<h2 class="page-heading"><?php printf( __('Результаты поиска по запросу: "%s"', 'default'), get_search_query() ); ?></h2>
			<section style="padding: 20px; line-height: 30px;">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_excerpt(); ?></p>
					<hr>
				<?php endwhile;	else:?>
					<p><?php echo __('Упс, ничего не найдено', 'makeup'); ?></p>
				<?php endif; 
				the_posts_pagination( array(
				'prev_text'          => __( 'Предыдущая', 'makeup' ),
				'next_text'          => __( 'Следующая', 'makeup' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'стр.', 'makeup' ) . ' </span>',
			) );?>
			</section>
		</div>
 	</div>
</div>
<?php get_footer(); ?>