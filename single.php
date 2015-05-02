<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="box">
        <h1>
        <?php the_title(); ?>
        </h1>
        <div class="innerCategory">
            <?php the_category(); ?>
        </div>
        <?php the_author(); ?>,
        <?php the_date(); ?>
        <div class="innerText">
            <?php the_content(); ?>
        </div>
        <?php comments_template(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
