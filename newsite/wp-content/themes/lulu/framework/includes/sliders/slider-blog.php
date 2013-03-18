<!-- MY QUERY -->
<?php $args=array( 'showposts' => 3 );  $my_query = new WP_Query($args); ?>
<?php if ( $my_query->have_posts() ) { while ($my_query->have_posts()) : $my_query->the_post(); ?> 

<?php $thumb = get_post_thumbnail_id(); ?>
<?php $image = vt_resize( $thumb,'' , 260, 135, true );?>
<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>
<?php $fullsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>

<div class="four columns">

	<?php if ( $video ) { ?>

	<iframe src="<?php echo get_post_meta($post->ID, "siiimple_video", $single = true); ?>" width="260" height="135" style="border:0; margin-bottom:0"></iframe>
	
	<?php } else { ?>
	
	<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
	
	<?php } ?>

	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

	<?php wpe_excerpt('wpe_excerptlength_100', 'wpe_excerptmore'); ?>

</div>

<?php endwhile; } //while ($my_query) ?>


