<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="box">
        <h1>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <div class="innerCategory">
            <?php the_category(); ?>
        </div>
        <?php the_author(); ?>
        <?php the_date(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<center>
<div class="postSet">
    <?php previous_posts_link(); ?>  <?php next_posts_link(); ?>
</div>
</center>
<?php get_footer(); ?>
