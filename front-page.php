<?php get_header(); ?>
  <div class="header">
    <a href="<?php echo get_site_url(); ?>">
      <img class="header-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" width="100%"/>
      <img class="header-img-mobile" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo-HPB.png" width="100%"/>
    </a>
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
                    <h2>
                    <?php the_title(); ?>
                    </h2>
                    <div class="innerCategory">
                        <?php the_category(); ?>
                    </div>
                    <?php the_author(); ?>,
                    <?php the_date(); ?>
                </div>
        </div>
    </a>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
<center>
<div class="postSet">
    <?php previous_posts_link(); ?>  <?php next_posts_link(); ?>
</div>
</center>
<?php get_footer(); ?>
