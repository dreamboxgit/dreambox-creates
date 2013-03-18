<?php get_header(); ?>

<div class="row" id="single-block">

	<?php if (have_posts()) : ?>
	
	<div class="twelve columns" id="single-top">

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<h1 id="single-title">Archive for the &#8216;<?php single_cat_title(); ?><br/><span class="single-star">&#9733;</span></h1>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h1 id="single-title">Posts Tagged &#8216;<?php single_tag_title(); ?><br/><span class="single-star">&#9733;</span></h1>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h1 id="single-title">Archive for <?php the_time('F jS, Y'); ?><br/><span class="single-star">&#9733;</span></h1>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h1 id="single-title">Archive for <?php the_time('F, Y'); ?><br/><span class="single-star">&#9733;</span></h1>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h1 id="single-title">Archive for <?php the_time('Y'); ?><br/><span class="single-star">&#9733;</span></h1>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h1 id="single-title">Author Archive<br/><span class="single-star">&#9733;</span></h1>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h1 id="single-title">Blog Archives<br/><span class="single-star">&#9733;</span></h1>
	<?php } ?>
	
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
		
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

<?php get_footer(); ?>