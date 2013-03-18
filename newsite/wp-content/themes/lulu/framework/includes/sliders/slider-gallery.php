<!-- BEGIN MAIN ISOTOPE -->
<div id="isotope2">

<!-- MY QUERY -->
<?php $homenum = get_option('of_gallery_num'); ?>

<?php query_posts( 'post_type=gallery&posts_per_page='.$homenum.'&paged='.$paged); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $thumb = get_post_thumbnail_id(); ?>
<?php $image = vt_resize( $thumb,'' , 260, 135, true );?>
<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>
<?php $vimeo = get_post_meta($post->ID, 'siiimple_vimeo', true);?>
<?php $terms_l = get_the_terms ($post->id, 'gallery_sorting'); ?>
<?php $fullsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>

<div class="four columns <?php unset($term_links);
					$sPattern = '/\s*/m';
					$sReplace = '';
					foreach ($terms_l as $term) {
					$term_links[] = preg_replace( $sPattern, $sReplace, $term->name); }
					$on_draught = join(" ", $term_links);
					echo $on_draught; 
					?>">

	<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>

	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

	<?php wpe_excerpt('wpe_excerptlength_100', 'wpe_excerptmore'); ?>

	<div class="clear">&nbsp;</div>

	<ul class="blog-meta">

		<li class="enlarge"><a href="<?php echo $fullsrc[0]; ?>" id="zoom" data-placement="above" rel="external" title="Zoom Image">View Image</a></li>

		<li class="visit"><a href="<?php the_permalink(); ?>" data-placement="above" rel="external" title="<?php the_title(); ?>">Visit Post</a></li>

	</ul>

</div>

<?php endwhile; ?>

<?php endif; ?>

</div>

<div class="clear"></div>

<!-- PAGINATION -->
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>