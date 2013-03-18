<?php get_header(); ?>

		<div class="row" id="single-block">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<?php $thumb = get_post_thumbnail_id(); ?>
			<?php $image = vt_resize( $thumb,'' , 990, 350, true );?>
			<?php $screenshot = get_post_meta($post->ID, 'siiimple_screenshot', true); ?>
			<?php $screenshott = get_post_meta($post->ID, 'siiimple_screenshott', true); ?>
			<?php $screenshottt = get_post_meta($post->ID, 'siiimple_screenshottt', true); ?>
			<?php $screenshotttt = get_post_meta($post->ID, 'siiimple_screenshotttt', true); ?>
			<?php $screenshottttt = get_post_meta($post->ID, 'siiimple_screenshottttt', true); ?>

				<div class="twelve columns" id="single">
	
					<h1 id="single-title"><?php the_title(); ?>
					
					<?php if (get_option('of_stars') == 'true') { ?>
					<br/><span class="single-star">&#9733;</span>
					<?php } ?>
					
					</h1>
					
		
					<div class="flex-container">
	
						<div id="second-slider" class="flexslider">
		 
		 					<ul class="slides">
		 
		 						<!-- thumb -->
		    					<?php if($thumb) { ?>
		    	
		    						<li>
		    		
		    							<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
		    	
		    						</li>
		    	
		    					<?php } ?>
		    	
		    					<!-- s1 -->
		    	
		    					<?php if( $screenshot ) { ?>
		    	
		    						<li>

										<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $screenshot; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
									</li>
		
								<?php } ?>
				
								<?php if( $screenshott ) { ?>
		    	
		    						<li>

										<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $screenshott; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
									</li>
		
								<?php } ?>
				
								<?php if( $screenshottt ) { ?>
		    	
		    						<li>

										<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $screenshottt; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
									</li>
		
								<?php } ?>
				
								<?php if( $screenshotttt ) { ?>
		    	
		    						<li>

										<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $screenshotttt; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
									</li>
		
								<?php } ?>
				
								<?php if( $screenshottttt ) { ?>
		    	
		    						<li>

										<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $screenshottttt; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
									</li>
		
								<?php } ?>
		
							</ul>
		  
						</div>
	 	
					</div>
	
				</div>
	
				<?php if ($screenshot) { ?>
	<div class="clear" style="height:45px;"></div>
	<?php } else { ?>
	<div class="clear" style="height:20px;"></div>
	<?php } ?>
	
				<div class="three columns" id="single-sidebar">
	
					<?php require (TEMPLATEPATH . '/framework/includes/single-sidebar.php'); ?>
	
				</div>
	
				<div class="nine columns" id="single-bottom">
	
					<span class="comments-wrap"><?php the_content(); ?></span>
		
				</div>

			</div>
		
		</div>
	
		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>
	
		<div class="block-title">

			<h4><span class="dash">&mdash;</span>&nbsp;Latest Blog Items&nbsp;<span class="dash">&mdash;</span></h4>

			<br/>&#9733;

		</div>
	
		<div class="row page-blog" id="carousel-block">
	
			<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-blog.php'); ?>
	
		</div>

		<div id="logo-block-wrap">

			<div class="block-title">
			
				<h4><span class="dash">&mdash;</span>&nbsp;Our Awesome Clients&nbsp;<span class="dash">&mdash;</span></h4><br/>&#9733;
				
			</div>

			<div class="row" id="logo-block">

				<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-logo.php'); ?>

			</div>

		</div>
	
<?php get_footer(); ?>