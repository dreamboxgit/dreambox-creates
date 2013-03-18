<div class="flex-container">
	
	<div id="main-slider" class="flexslider">
		 
		 <ul class="slides">
		 
		<?php query_posts( 'post_type=slider&posts_per_page=-1'.'&paged='.$paged); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php $thumbs = get_post_thumbnail_id(); $images = vt_resize( $thumbs,'' , 990, 350, true ); ?>
		<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>
		
		<?php if ( $video ) { ?>
		 		
		 		<li id="fitvid">
		 		
		 		<iframe src="<?php echo get_post_meta($post->ID, "siiimple_video", $single = true); ?>" width="990" height="350" style="border:0; margin-bottom:10px"></iframe>
		 		
		 		<p class="flex-caption"><?php the_title(); ?></p>
		    
		    	<h1 class="tagline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		    		
		    	<?php wpe_excerpt('wpe_excerptlength__teaser100', 'wpe_excerptmore'); ?>
		 		
		 		</li>
		 		
		 <?php } ?>
		    	
		    <li>
		    		
		    	<img src="<?php echo $images[url]; ?>" width="<?php echo $images[width]; ?>" height="<?php echo $images[height]; ?>" alt="image"/>
		    		
		    	<p class="flex-caption"><?php the_title(); ?></p>
		    
		    	<h1 class="tagline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		    		
		    	<?php wpe_excerpt('wpe_excerptlength__teaser100', 'wpe_excerptmore'); ?>
 
    		</li>
		    	
		<?php endwhile; ?>
    	<?php endif; ?>
		    
		</ul>
		  
	</div>
	 	
</div>