<div class="flex-container">
	
	<div id="second-slider" class="flexslider">
		 
		 <ul class="slides">
		 
		 		<!-- thumb -->
		    	
		 		<?php if($thumb != '') : ?>
		    	
		    	<li>
		    		
		    	<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
		    	
		    	</li>
		    	
		    	<?php endif; ?>
		    	
		    	<!-- s1 -->
		    	
		    	<?php if($s1 != '') : ?>
		    	
		    	<li>

					<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $s1; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
				</li>
		
				<?php endif; ?>
			
				<!-- s2 -->
				
				<?php if($s2 != '') : ?>
				
				<li>
			
					<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $s2; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
				</li>
			
				<?php endif; ?>
			
				
				
				<!-- s3 -->
				
				<?php if($s3 != '') : ?>
				
				<li>
			
					<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $s3; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
				</li>
			
				<?php endif; ?>
				
				
				
				<!-- s4 -->
				
				<?php if($s4 != '') : ?>
				
				<li>
			
					<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $s4; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
				</li>
			
				<?php endif; ?>
				
				
				
				<!-- s5 -->
				
				<?php if($s5 != '') : ?>
				
				<li>
			
					<img src="<?php bloginfo('template_directory'); ?>/framework/scripts/timthumb.php?src=<?php echo $s5; ?>&amp;h=350&amp;w=990&amp;zc=1" alt="<?php the_title(); ?>" width="990" height="350" />
					
				</li>
			
				<?php endif; ?>
				
 		
 		</ul>
		  
	</div>
	 	
</div>