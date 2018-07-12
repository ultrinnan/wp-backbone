<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-heading"><?php single_cat_title(); ?></h2>
            <section style="padding: 20px; line-height: 30px;">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <div class="clearfix" style="margin: 8px; padding: 8px;">
                        <h2><strong><?php the_title(); ?></strong></h2>
                        <div>
                            <img style="max-width: 200px; float: left; margin: 0 24px 24px 0;" src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                        <?php the_content(); ?>
                        <a href="<?php the_permalink(); ?> ">
                            <span>Read more</span>
                        </a>
                    </div>
                <?php endwhile; endif; ?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
