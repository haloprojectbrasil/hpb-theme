<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_category(); ?>
        <?php the_author(); ?>
        <?php the_date(); ?>
<?php endwhile; ?>
<?php endif; ?>
    <?php previous_posts_link(); ?>  <?php next_posts_link(); ?>
<?php get_footer(); ?>
