<?php get_header(); ?>
<div class="box-nav">
<i class="fa fa-archive fa-1x"></i>&nbsp;&nbsp;
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
    <?php echo single_cat_title(); ?>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    Arquivo de <?php the_time('j \d\e F \d\e Y'); ?>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    Arquivo de <?php the_time('F \d\e Y'); ?>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    Arquivo de <?php the_time('Y'); ?>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
    Arquivo do Autor
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    Arquivo do Blog
<?php } ?>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>">
    <div class="archive_box">
        <?php
            if ( has_post_thumbnail() ) {
            	echo get_the_post_thumbnail();
                }
            else {
            	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/thumbnail-default.svg" />';
            }
        ?>
        <div id="archive_content">
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
<?php endif; ?>
<center>
<div class="postSet">
    <?php previous_posts_link(); ?>  <?php next_posts_link(); ?>
</div>
</center>

<?php get_footer(); ?>
