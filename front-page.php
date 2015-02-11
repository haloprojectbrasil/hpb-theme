<?php get_header(); ?>
  <div class="header">
    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" width="100%"/></a>
  </div>
  <!-- 
 <div class="slide-arc">

<input checked type=radio name=slider id=slide1 />
		<input type=radio name=slider id=slide2 />
		<input type=radio name=slider id=slide3 />
		<input type=radio name=slider id=slide4 />
		<input type=radio name=slider id=slide5 />

<div id=slides>
		<div id=overflow>
			<div class=inner>

					<article>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imagens/img1.jpg" />
					</article>

					<article>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imagens/img2.jpg" />
					</article>

					<article>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imagens/img3.jpg" />
					</article>

					<article>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imagens/img4.jpg" />
					</article>

					<article>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imagens/img5.jpg" />
					</article>

				</div>

			</div>

		</div>


		 Controlos 

		<div id=controls>

			<label for=slide1></label>
			<label for=slide2></label>
			<label for=slide3></label>
			<label for=slide4></label>
			<label for=slide5></label>

		</div>
</div>
-->
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
