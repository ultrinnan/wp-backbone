<?php
get_header();
?>
<section>
    <div>
        front page content here
    </div>
    <div>
        <h1><?php pll_e('Shevchenko Museum'); ?></h1>
    </div>
    <div>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<!-- footer -->
<?php get_footer(); ?>