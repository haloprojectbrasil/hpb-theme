<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="toptitle-post" style="background-image: url('<?php
  if (get_the_post_thumbnail_url() != '') echo the_post_thumbnail_url();
  else echo esc_url( get_template_directory_uri() ) . '/img/halo-array.jpg';
 ?>');">
<!-- <div class="toptitle-post" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/halo-array.jpg');"> -->
    <h2><?php the_title(); ?></h2>
    <div class="category-frontpage">
        <?php the_category(); ?>
    </div>

</div>
<div class="row page-row align-center" style="margin-top: -14em;">
    <div class="medium-8 small-12 column small-centered">
        <div class="medium-12 callout page-callout">
            <?php the_content(); ?>
            <?php comments_template(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
