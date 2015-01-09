<?php get_header(); ?>
<center>
  <div class="header">
    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" width="100%"/></a>
  </div>
</center>
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
