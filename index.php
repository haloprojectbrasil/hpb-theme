<?php get_header(); ?>
    <a href="<?php echo get_site_url(); ?>">
      <img class="header-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" width="100%"/>
    </a>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>">
	                <?php
	                    if ( has_post_thumbnail() ) {
	                        echo get_the_post_thumbnail();
	                        }
	                    else {
	                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/thumbnail-default.svg" />';
	                    }
	                ?>
                    <?php the_title(); ?>
                        <?php the_category(); ?>
                    <?php the_author(); ?>,
                    <?php the_date(); ?>
    </a>
    <?php endwhile; ?>
    <?php endif; ?>
<?php get_sidebar(); ?>
    <?php previous_posts_link(); ?>  <?php next_posts_link(); ?>
<?php get_footer(); ?>
