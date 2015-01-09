<?php get_header(); ?>
<center>
  <div class="header">
    <a href="<?php echo get_site_url(); ?>"><img src="wp-content/themes/hpb/img/logo.png" width="100%"/></a>
  </div>
</center>
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
