<!-- Footer
    ============================================= -->
	<footer id="footer" class="dark">

		<!-- Copyrights
        ============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col_half">
					Copyrights &copy; 2017 All Rights Reserved by Jasko Koyn Inc.<br>
					<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
				</div>

				<div class="col_half col_last tright">
					<div class="fright clearfix">
						<?php if(get_theme_mod('lu_facebook_handle')) : ?>
							<a href="https://facebook.com/<?php echo get_theme_mod('lu_facebook_handle'); ?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
						<?php endif; ?>
						<?php if(get_theme_mod('lu_twitter_handle')) : ?>
							<a href="https://twitter.com/<?php echo get_theme_mod('lu_twitter_handle'); ?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
						<?php endif; ?>
					</div>

					<div class="clear"></div>
					<?php if(get_theme_mod('lu_email')) : ?><i class="icon-envelope2"></i> <?php echo get_theme_mod('lu_email'); ?> <span class="middot">&middot;</span><?php endif;  if(get_theme_mod('lu_phone_number')) : ?><i class="icon-headphones"></i> <?php echo get_theme_mod('lu_phone_number'); endif; ?>
				</div>

			</div>

		</div><!-- #copyrights end -->

	</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>


<?php wp_footer(); ?>

</body>
</html>
