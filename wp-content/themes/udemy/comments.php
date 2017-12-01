<?php 

if(post_password_required()) :
	return;
endif;

?>

<!-- Comments
============================================= -->
<div id="comments" class="clearfix">
	<?php
	if(have_comments()) : ?>

		<h3 id="comments-title"><span><?php comments_number(); ?></span></h3>

	    <!-- Comments List
	    ============================================= -->
	    <ol class="commentlist clearfix">
	    	<?php
	    	foreach($comments as $comment) : ?>
		        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		            <div id="comment-<?php comment_ID(); ?>" class="comment-wrap clearfix">
		                <div class="comment-meta">
		                    <div class="comment-author vcard">
								<span class="comment-avatar clearfix">
									<?php echo get_avatar($comment, 60); ?>
								</span>
		                    </div>
		                </div>
		                <div class="comment-content clearfix">
		                    <div class="comment-author">
		                    	<?php comment_author(); ?>
		                    	<span><a href="<?php comment_link(); ?>" title="Permalink to this comment"><?php comment_date(); ?> at <?php comment_time(); ?></a></span>
		                    </div>
		       				<?php comment_text(); ?>
		                </div>
		                <div class="clear"></div>
		            </div>
		        </li>
		    <?php 
		    endforeach; 

		    the_comments_pagination()
		    ?>

	    </ol><!-- .commentlist end -->

	<?php 
	endif; ?>

    <div class="clear"></div>

    <?php

    comment_form( array(
    	'comment_field' => 
    		'<div class="col_full">
                <label for="comment">' . __( 'Comment', 'udemy' ) . '</label>
                <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
            </div>',
        'fields' => array(
        	'author' => 
        		'<div class="col_one_third">
                	<label for="author">' . __( 'Name', 'udemy' ) . '</label>
                	<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
            	</div>',
        	'email' => 
        		'<div class="col_one_third">
                	<label for="email">' . __( 'E-mail', 'udemy' ) . '</label>
                	<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
            	</div>',
        	'url' => 
        		'<div class="col_one_third col_last">
                	<label for="url">' . __( 'Website', 'udemy' ) . '</label>
                	<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
            	</div>'
        ),
        'class_submit' => 'button button-3d nomargin',
        'label_submit' => __( 'SUBMIT COMMENT', 'udemy' ),
        'title_reply' => __( 'Leave a <span>comment</span>', 'udemy' )
    ) );

    ?>

</div><!-- #comments end -->