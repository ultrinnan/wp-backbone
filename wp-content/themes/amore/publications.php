<?php
/*
Template Name: Publications
*/
get_header(); ?>
	<div class="container-fluid publications-page center">
		<h2 class="page-heading">Публикации</h2>
		<div>
			<div class="content">


<?php // Display blog posts on any page
$temp = $wp_query; $wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('category_id=175&showposts=6&paged='.$paged);

while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="col-sm-4 col-md-4 articles">
				<div class="article">
					<a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <p class="title on-page"><?php the_title(); ?></p>
            <?php the_excerpt(); ?>
            <span><?php the_time('d.m.Y') ?></span>
            					</a>
				</div>				
				</div>
<?php endwhile; ?>
<div class="clearfix"></div>
<div style="margin: 7px 0; text-align: center; font-weight: bold; color: grey;">
    <?php
    /*global $wp_query;*/

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text'    => __('Ранее'),
        'next_text'    => __('Позднее')
    ) );
    ?>
</div>

<?php wp_reset_postdata(); ?>

				<div class="stars-holder">
					<img src="<?php bloginfo('template_url'); ?>/images/stars.png" alt="">
				</div>
			</div> <!-- content -->
		</div>
	</div>	
<?php get_footer(); ?>