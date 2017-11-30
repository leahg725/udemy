<?php get_header(); ?>

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

				<!-- Post Content
                ============================================= -->
				<div class="postcontent nobottommargin clearfix">
					<?php 
					if( have_posts() ) :
						while( have_posts() ) : the_post(); 
							$author_ID = get_the_author_meta('ID');
							$author_url = get_author_posts_url( $author_ID );

					?>
							<div class="single-post nobottommargin">

		                        <!-- Single Post
		                        ============================================= -->
		                        <div class="entry clearfix">

		                            <!-- Entry Title
		                            ============================================= -->
		                            <div class="entry-title">
		                                <h2><?php the_title(); ?></h2>
		                            </div><!-- .entry-title end -->

		                            <!-- Entry Image
		                            ============================================= -->
		                            <?php 
										if( has_post_thumbnail() ) : ?>
		                            		<div class="entry-image">
			                                	<a href="<?php the_permalink(); ?>">
			                                		<?php the_post_thumbnail( 'full' ); ?>
			                                	</a>		                                
		                            		</div>
		                            <?php endif; ?> <!-- .entry-image end -->

		                            <!-- Entry Content
		                            ============================================= -->
		                            <div class="entry-content notopmargin">

		                                <?php 

		                                the_content(); 
		                                wp_link_pages( array(
											'before'           => '<p class="text-center">' . __( 'Pages:', 'udemy' ),
											'after'            => '</p>',
										) );

		                                ?>
		                                <!-- Post Single - Content End -->

		                                <div class="clear"></div>

		                            </div>
		                        </div><!-- .entry end -->

		                        <?php 

		                        if( comments_open() || get_comments_number() ) :
		                        	comments_template(); 
		                        endif;

		                        ?>
		                    </div>
		                <?php endwhile;
		            endif; ?>

				</div><!-- .postcontent end -->
				<?php get_sidebar(); ?>

			</div>

		</div>

	</section><!-- #content end -->

<?php get_footer(); ?>