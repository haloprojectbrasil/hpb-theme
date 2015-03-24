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
        <?php comments_template(); ?>
    </div>
<?php endwhile; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php endif; ?>
<?php get_footer(); ?>
