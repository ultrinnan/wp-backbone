<?php get_header(); ?>

<section>
    <div>
        <h1><?php printf( __( 'Search Results for: %s', 'bestgates-wp' ), get_search_query() ); ?></h1>
    </div>
    <div>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>