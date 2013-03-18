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
	<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>

	<div class="twelve columns" id="single">
	
		<h1 id="single-title"><?php the_title(); ?><br/><span class="single-star">&#9733;</span></h1>
		
		<div class="flex-container">
	
			<div id="second-slider" class="flexslider">
		 
		 		<ul class="slides">
		 		
		 		<?php if ( $video ) { ?>
		 		
		 		<li id="fitvid">
		 		
		 		<iframe src="<?php echo get_post_meta($post->ID, "siiimple_video", $single = true); ?>" width="990" height="350" style="border:0; margin-bottom:10px"></iframe>
		 		
		 		</li>
		 
		 		<!-- thumb -->
		    	
		 		<?php } elseif ($thumb && !$video) { ?>
		    	
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
	
	<div class="nine columns text" id="single-bottom">
	
		<span class="comments-wrap"><?php the_content(); ?></span>
		
		<div id="authorbox">
   			
   			<?php if (function_exists('get_avatar')) { echo get_avatar(get_the_author_meta('user_email'), '50'); }?>
   		
   		<div>
      
      	<!-- CATEGORY -->
      	
      	<h4>About <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('display_name'); ?></a></h4>
      
      	<p>
      	<?php the_author_meta('description'); ?> 
      	<br/>Posted on <?php the_time('M jS, Y') ?> 
      	<?php $categories_list = get_the_category_list( __( ', ', 'framework' ) ); if ( '' != $categories_list ) { ?>
		<?php echo $categories_list; ?><?php } ?>
		<?php the_tags( '', '&nbsp;, ', ''); ?></p>
      
      	 
   </div>

</div>
		
	<?php comments_template('', true); ?>
	
	</div>
	
	<div class="three columns" id="single-sidebar">
	
	<?php require (TEMPLATEPATH . '/framework/includes/single-sidebar.php'); ?>
	
	</div>
	
	<div class="clear"></div>
	
	<div class="block-title rp">

		<h4><span class="dash">&mdash;</span>&nbsp;Related Posts&nbsp;<span class="dash">&mdash;</span></h4>

		<br/>&#9733;

	</div>

<div class="row" id="carousel-block">
	
	<?php require (TEMPLATEPATH . '/framework/includes/related-posts.php'); ?>

</div>
	
</div>

<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
	
<div class="clear"></div>

<?php get_footer(); ?>