<?php
/*
Template Name: Feedback page
 */
get_header(); ?>
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

        <?php
        $feedbacks = new WP_Query([
            'post_type' => 'feedbacks',
        ]);

        if ( $feedbacks->have_posts() ) {
            $f_row = '';
            while ( $feedbacks->have_posts() ) {
                $feedbacks->the_post();

                $f_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : '';
                $f_title = get_the_title();
                $f_text = get_the_excerpt();

                $f_row .= <<<ROW
<div class="row">
    <div class="f_row">
        <div class="f_image">
            <img src="$f_thumbnail" alt="$f_title">
        </div>
        <div class="f_main">
            <div class="f_title">$f_title</div>
            <div class="f_text">$f_text</div>
        </div>
    </div>
</div>
ROW;
            }
        }
        //restore original post data
        wp_reset_postdata();

        echo $f_row;
        ?>

        <div id="send_form">
            <h2><?=__('Оставьте ваш отзыв')?></h2>
            <?php
            if ( shortcode_exists( 'contact-form-7' ) ) {
                echo do_shortcode('[contact-form-7 id="57" title="Contact form 1"]');
            } else {
                if (is_user_logged_in()){
                    echo 'Please check if Contact Form 7 plugin was enabled and form has ID 1';
                }
            }
            ?>
        </div>


    </div>
<?php get_footer(); ?>