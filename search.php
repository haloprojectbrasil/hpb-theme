<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="box">
        <h1>
        <?php the_title(); ?>
        </h1>
        <?php the_category(); ?>
        <?php the_author(); ?>
        <?php the_date(); ?>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
