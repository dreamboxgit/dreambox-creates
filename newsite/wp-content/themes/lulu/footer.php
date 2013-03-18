	<!-- MAIN FOOTER -->
	<div class="main" id="footer-bottom">
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>

		<?php if ( $footer = get_option('of_footer') ) { ?>
		
			<p class="footer-base"><?php echo stripslashes ( $footer) ; ?></p>
		
		<?php } else { ?>

			<!-- BEGIN footer -->
			<p class="footer-base"><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress <?php bloginfo('version'); ?></a> <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>. <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. --></p>
		
		<?php } ?>

	<!-- MAIN FOOTER -->
	</div>
		
		<?php wp_footer(); ?>
		
		<!-- END MAIN WRAP -->
		</div>

	</body>

</html>