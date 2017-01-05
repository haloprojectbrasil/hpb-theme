<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_title(); ?>
            <?php the_category(); ?>
        <?php the_author(); ?>,
        <?php the_date(); ?>
            <?php the_content(); ?>
        <?php comments_template(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
