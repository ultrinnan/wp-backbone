<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 */

get_header(); ?>
<section>
    <div>
        <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
    </div>
    <div>
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

        <?php get_search_form(); ?>
    </div>
</section>
<?php get_footer(); ?>
