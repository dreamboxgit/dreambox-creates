<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
	<div class="row" id="single-block">
	
		<div class="twelve columns" id="single-top">

			<h1 id="single-title">Search Results
			
			<?php if (get_option('of_stars') == 'true') { ?>
				
				<br/><span class="single-star">&#9733;</span>
		
			<?php } ?>
			
			</h1>

		</div>
	
	</div>
	
	<div id="gallery-wrap">
	
<div class="row" id="carousel-block">	

	<?php while (have_posts()) : the_post(); ?>
	
		<?php $thumb = get_post_thumbnail_id(); ?>
		<?php $image = vt_resize( $thumb,'' , 260, 135, true );?>
		<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>
		<?php $terms_l = get_the_terms ($post->id, 'gallery_sorting'); ?>
		<?php $fullsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>

			<div class="four columns">
		
		<?php if ( $video ) { ?>

		<iframe src="<?php echo get_post_meta($post->ID, "siiimple_video", $single = true); ?>" width="260" height="135" style="border:0; margin-bottom:0"></iframe>
	
		<?php } else { ?>
		
		<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
		
		<?php } ?>

		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

		<?php wpe_excerpt('wpe_excerptlength_100', 'wpe_excerptmore'); ?>

		<div class="clear">&nbsp;</div>

		<ul class="blog-meta">

			<li class="enlarge"><a href="<?php echo $fullsrc[0]; ?>" class="zoom" data-placement="above" rel="external" title="Zoom Image">View Image</a></li>

			<li class="visit"><a href="<?php the_permalink(); ?>" data-placement="above" rel="external" title="<?php the_title(); ?>">Visit Post</a></li>

		</ul>

	</div>
		
		<?php endwhile; ?>

		</div>

<div class="clear"></div>

<!-- PAGINATION -->
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
	
</div>

</div>

<div id="logo-block-wrap">

	<div class="block-title"><h4><span class="dash">&mdash;</span>&nbsp;Our Awesome Clients&nbsp;<span class="dash">&mdash;</span></h4><br/>&#9733;</div>

<div class="row" id="logo-block">

	<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-logo.php'); ?>

</div>		
	
<?php else : ?>

	<div class="row" id="single-block">
	
		<div class="twelve columns" id="single-top">

			<h1 id="single-title">Nothing here, sorry!<br/><span class="single-star">&#9733;</span></h1>

		</div>
	
	</div>
	
	<div id="logo-block-wrap">

	<div class="block-title"><h4><span class="dash">&mdash;</span>&nbsp;Our Awesome Clients&nbsp;<span class="dash">&mdash;</span></h4><br/>&#9733;</div>

<div class="row" id="logo-block">

	<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-logo.php'); ?>

</div>	

<?php endif; ?>


<?php get_footer(); ?>