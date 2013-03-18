<?php  //for use in the loop, list 5 post titles related to first tag on current post
  $backup = $post;  // backup the current object
  $tags = wp_get_post_tags($post->ID);
  $tagIDs = array();
  if ($tags) {
    $tagcount = count($tags);
    for ($i = 0; $i < $tagcount; $i++) {
      $tagIDs[$i] = $tags[$i]->term_id;
    }
    $args=array(
      'tag__in' => $tagIDs,
      'post__not_in' => array($post->ID),
      'showposts'=>3,
      'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <?php $thumbr= get_post_thumbnail_id(); ?>
	  <?php $imager = vt_resize( $thumbr,'' , 260, 135, true );?>
	  <?php $fullsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>
	   
	<div class="four columns">

	<img src="<?php echo $imager[url]; ?>" width="<?php echo $imager[width]; ?>" height="<?php echo $imager[height]; ?>" alt="image"/>

	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

	<?php wpe_excerpt('wpe_excerptlength_100', 'wpe_excerptmore'); ?>

</div>
      <?php endwhile;
    } else { ?>
      <h2 class="no-related-posts">No related posts found!</h2>
    <?php }
  }
  $post = $backup;  // copy it back
  wp_reset_query(); // to use the original query again
?>
