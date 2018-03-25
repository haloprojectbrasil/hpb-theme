<?php get_header(); ?>
<header id="header">
    <div id="firstheader">
        <img src="<?php header_image(); ?>" class="header-img">
    </div>
</header>
<br>
<div class="row medium-10 medium-offset-1">
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
    <div class="small-12 text-center" id="prevnext">
        <?php previous_posts_link(); ?> <?php next_posts_link(); ?>
    </div>
</div><?php get_footer(); ?>
