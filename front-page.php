<?php get_header(); ?>
    <div class="main_box">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div id="feed_container">
                    <h1>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <?php the_category(); ?>
            </div>
            <hr>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
