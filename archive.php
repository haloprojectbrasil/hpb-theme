<?php get_header(); ?>

<div class="row medium-10 medium-offset-1">
    <h2>
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
    </h2>

    <div class="row columns">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="medium-4 small-12 column post-container">
                <a href="<?php the_permalink(); ?>">
                    <div class="post-frontpage">
                        <div class="something-thumb">
                            <div class="thumb" style="
                                  height: 250px;
                                  background-image: url('<?php
                                    if (get_the_post_thumbnail_url() != '') echo the_post_thumbnail_url();
                                    else echo esc_url( get_template_directory_uri() ) . '/img/halo-array.jpg';
                                   ?>');
                                  background-position: center center;
                                  background-repeat: no-repeat;
                                  background-size: cover;
                                  overflow:hidden;
                            ">
                            </div>
                            <div class="title-frontpage">
                                <span class="text"><?php the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
    </div>
    <div class="row align-center">
        <div class="small-2 columns text-center" id="prevnext">
            <?php previous_posts_link(); ?> <?php next_posts_link(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
