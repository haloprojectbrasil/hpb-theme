<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<header id="header">
    <div id="firstheader">
        <img src="<?php header_image(); ?>" class="header-img show-for-medium">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo-HPB -invertido.png" class="header-img-mobile  show-for-small-only">
    </div>
</header>
    <div class="row" style="margin-top: 1em;">
        <div class="medium-10 medium-offset-1 column">
            <?php if ( have_posts() ) : ?>
            <?php $temp_query = clone $wp_query; ?>
            <!-- <h2><i class="fi-web"></i> Principais Matérias</h2> -->
            <h2><i class="fi-bookmark"></i> Principais Matérias</h2>
                <div class="row medium-uncollapse large-collapse">
                    <?php query_posts( 'category_name=Destaque&posts_per_page=3' ); $count=0; ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                       <?php $count++; ?>
                       <?php if ($count == 1): ?>
                       <div class="medium-8 column featured-container something-thumb" style="height: 400px">
                           <a href="<?php the_permalink(); ?>">
                               <div class="featured-thumb" style="
                                    height: 100%;
                                    background-image: url('<?php echo the_post_thumbnail_url(); ?>');
                                    background-position: center center;
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    overflow:hidden;
                                 ">
                                    <div class="featured-texts" id="ftd-<?php echo $count; ?>">
                                        <div class="title-featured featured-one"><?php the_title(); ?></div>
                                        <div class="ftd-lorem theone">
                                            <?php
                                            $content = get_the_content();
                                            $short_content = mb_substr($content, 0, 150);
                                            echo $short_content . '....<br><b>Continue lendo</b>';
                                            ?>
                                        </div>
                                    </div>
                               </div>
                           </a>
                       </div>
                       <?php else: ?>
                        <div class="medium-4 column featured-container something-thumb" style="height: 200px">
                            <a href="<?php the_permalink(); ?>">
                                <div class="featured-thumb" style="
                                     height: 100%;
                                     background-image: url('<?php echo the_post_thumbnail_url(); ?>');
                                     background-position: center center;
                                     background-repeat: no-repeat;
                                     background-size: cover;
                                     overflow:hidden;
                                  ">
                                     <div class="featured-texts" id="ftd-<?php echo $count; ?>">
                                         <div class="title-featured"><?php the_title(); ?></div>
                                         <div class="ftd-lorem">
                                             <?php
                                             $content = get_the_content();
                                             $short_content = mb_substr($content, 0, 150);
                                             echo $short_content . '....<br><b>Continue lendo</b>';
                                             ?>
                                         </div>
                                     </div>
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                </div>

                    <?php query_posts( 'category_name=Notícias&posts_per_page=6' ); ?>
                    <hr>
                    <h2><i class="fi-megaphone"></i> Últimas Notícias</h2>
                    <div class="row">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="medium-4 small-12 column post-container" style="height: 250px;">
                                <a href="<?php the_permalink(); ?>">
                                <div class="post-frontpage">
                                    <div class="something-thumb">
                                        <div class="thumb" style="
                                              height: 100%;
                                              background-image: url('<?php echo the_post_thumbnail_url(); ?>');
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
                    <hr>

                    <div class="row">
                        <div class="medium-8 columns">
                            <h2><i class="fi-compass"></i> Halo, o Universo e Tudo Mais</h2>
                            <?php query_posts( 'category_name=Universo&posts_per_page=6' ); ?>
                            <div class="row">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="medium-4 small-12 column post-container" style="height: 250px;">
                                        <a href="<?php the_permalink(); ?>">
                                        <div class="post-frontpage">
                                            <div class="something-thumb">
                                                <div class="thumb" style="
                                                      height: 100%;
                                                      background-image: url('<?php echo the_post_thumbnail_url(); ?>');
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
                            <hr>
                            <h2><i class="fi-torsos-all-female"></i> Comunidade</h2>
                            <?php query_posts( 'category_name=Comunidade&posts_per_page=6' ); ?>
                            <div class="row">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="medium-4 small-12 column post-container">
                                        <a href="<?php the_permalink(); ?>">
                                        <div class="post-frontpage">
                                            <div class="something-thumb">
                                                <div class="thumb" style="
                                                      height: 250px;
                                                      background-image: url('<?php echo the_post_thumbnail_url(); ?>');
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
                        </div>
                        <?php get_sidebar(); ?>
                    </div>


                <?php $wp_query = clone $temp_query; ?>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <?php get_footer(); ?>
