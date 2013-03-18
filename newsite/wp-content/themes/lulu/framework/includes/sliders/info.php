<?php query_posts( 'post_type=info&posts_per_page=3'.'&paged='.$paged); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $thumb = get_post_thumbnail_id(); $image = vt_resize( $thumb,'' , 80, 80, true ); ?>
<?php $info = get_post_meta($post->ID, 'siiimple_info', true); ?>
<?php $infourl = get_post_meta($post->ID, 'siiimple_info_url', true); ?>
<?php $btn = get_post_meta($post->ID, 'siiimple_btn', true); ?>

<div class="four columns">

   <?php if ( $thumb ) { ?>
   
   <img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
   
   <?php } elseif ($info) { ?> 
   
  <?php echo ( do_shortcode( get_post_meta( $post->ID , 'siiimple_info' , true ) ) ); ?>
  
  <div class="clear"></div>
   
   <?php } ?> 
   
	<h4><a href="<?php echo ( $infourl ); ?>"><?php the_title(); ?></a></h4>

   <?php the_content(); ?>
    
    <?php if ( $infourl ) { ?>
  
  	<a href="<?php echo ( $infourl ); ?>" class="nice small radius blue button"><?php if ( $btn ) { ?><?php echo ($btn); ?><?php } else { ?>Learn More<?php } ?></a>
  
 	<?php } else { ?>
    
    <a href="<?php the_permalink(); ?>" class="nice small radius blue button"><?php if ( $btn ) { ?><?php echo ($btn); ?><?php } else { ?>Learn More<?php } ?></a>
    
    <?php } ?>
   
</div>
 
<?php endwhile; ?>
            
<!-- END IF -->
<?php endif; ?>