<?php
/*
Template Name: Lulu Gallery
*/
?>

<?php get_header(); ?>

<!-- INFO BLOCK WRAP -->
<div id="gallery-block-wrap">

<!-- ROW INFO BLOCK -->
<div class="row" id="single-block">

	<!-- TWELVE COLUMNS -->
	<div class="twelve columns" id="single-top">
	
		<?php if ( $gallerytag = get_option('of_gallery_tagline') ) { ?>
	
		<h1 id="single-title"><?php echo stripslashes ( $gallerytag); ?>
		
		<?php if (get_option('of_stars') == 'true') { ?>
		
		<br/><span class="single-star">&#9733;</span></h1>
		
		<?php } ?>
	
		<?php } else { ?>

		<h1 id="single-title">Welcome To Our Gallery<br/><span class="single-star">&#9733;</span></h1>
	
		<?php } ?>
		
	<!-- END TWELVE COLUMNS -->
	</div>

<!-- ROW INFO BLOCK -->
</div>

</div>

<div class="row" id="gallery-sort">

	<div class="twelve columns">

		<!-- BEGIN FILTERS -->
		<ul id="filters">
	
			<!-- BEGIN FILTER -->
			<li id="filter-title">
		
			<?php if ( $porttag = get_option('of_port_tagline') ) { ?>
	
			<?php echo stripslashes ( $porttag) ; ?>
	
			<?php } else { ?> Filter <?php } ?>
	
			<!-- END FILTER -->	
			</li>
		
			<!-- LI -->
			<li id="all"><a class="active" href="#" data-filter="*">All</a></li>
		
			<?php 
			$terms = get_terms("gallery_sorting");
			$count = count($terms);
			if ( $count > 0 ){
			$sPattern = '/\s*/m';
			$sReplace = '';
			foreach ( $terms as $term ) {
			$isoTax = preg_replace( $sPattern, $sReplace, $term->name);
			echo '<li><a href="#" data-filter=".' . $isoTax . '">' . $term->name . '</a></li>';
				}
			} 
			?>

		<!-- END FILTERS -->
		</ul>
		
	</div>

</div>

<div id="gallery-wrap">
	
<div class="row" id="carousel-block">
	
	<!-- BEGIN MAIN ISOTOPE -->
	<div id="isotope2">

		<!-- MY QUERY -->
		<?php $homenum = get_option('of_gallery_num'); ?>

		<?php query_posts( 'post_type=gallery&posts_per_page='.$homenum.'&paged='.$paged); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php $thumb = get_post_thumbnail_id(); ?>
		<?php $image = vt_resize( $thumb,'' , 260, 135, true );?>
		<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>
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

		<?php if ( $video ) { ?>

		<iframe src="<?php echo get_post_meta($post->ID, "siiimple_video", $single = true); ?>" width="260" height="135" style="border:0; margin-bottom:0"></iframe>
	
		<?php } else { ?>
		
		<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
		
		<?php } ?>

		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

		<?php wpe_excerpt('wpe_excerptlength_100', 'wpe_excerptmore'); ?>

		

	</div>

	<?php endwhile; ?>

	<?php endif; ?>

</div>

<div class="clear"></div>

<!-- PAGINATION -->
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
	
</div>

</div>

<div id="logo-block-wrap">

	<div class="block-title">
	
		<?php if ( $clients = get_option('of_clients_tagline') ) { ?>
	
		<h4><span class="dash">&mdash;</span>&nbsp;<?php echo stripslashes ( $clients ); ?>&nbsp;<span class="dash">&mdash;</span></h4>
	
		<?php } else { ?>

		<h4><span class="dash">&mdash;</span>&nbsp;Our Awesome Clients&nbsp;<span class="dash">&mdash;</span></h4>
	
		<?php } ?>
		
		<br/>&#9733;
		
	</div>

<div class="row" id="logo-block">

	<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-logo.php'); ?>

</div>


<?php get_footer(); ?>