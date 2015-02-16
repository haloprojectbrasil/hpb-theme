<?php get_header(); ?>
  <div class="header">
    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" width="100%"/></a>
  </div>
    <div class="main_box">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>">
            <div class="box-front">
                <div id="thumb-img">
	                <?php
	                    if ( has_post_thumbnail() ) {
	                        echo get_the_post_thumbnail();
	                        }
	                    else {
	                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/thumbnail-default.svg" />';
	                    }
	                ?>
	            </div>
                <div id="box-front-text">
                    <h1>
                    <?php the_title(); ?>
                    </h1>
                    <?php the_category(); ?>
                    <?php the_author(); ?>
                    <?php the_date(); ?>
                </div>
        </div>
    </a>
    <?php endwhile; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
