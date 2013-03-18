<?php get_header(); ?>

<!-- INFO BLOCK WRAP -->
<div id="blog-block-wrap">

<!-- ROW INFO BLOCK -->
<div class="row" id="single-block">

	<div class="twelve columns" id="single-top">
	
		<?php if ( $blogtag = get_option('of_blog_tagline') ) { ?>
		
		<h1 id="single-title"><?php echo stripslashes ( $blogtag); ?>
		
		<?php if (get_option('of_stars') == 'true') { ?>
		<br/><span class="single-star">&#9733;</span>
		<?php } ?>
		
		</h1>

		<?php } else { ?>
	
		<h1 id="single-title">Welcome To Our Blog
		
		<?php if (get_option('of_stars') == 'true') { ?>
		<br/><span class="single-star">&#9733;</span>
		<?php } ?>
		
		</h1>
		
		<?php } ?>
		
	</div>

</div>

</div>

<!-- ROW INFO BLOCK -->
<div class="row" id="loop-block">

<!-- THREE -->
<div class="three columns" id="single-sidebar">
	
	<?php require (TEMPLATEPATH . '/framework/includes/single-sidebar.php'); ?>
	
<!-- END THREE -->
</div>

<!-- BEGIN IF -->
<?php if (have_posts()) : ?>

<!-- BEGIN WHILE -->
<?php while (have_posts()) : the_post(); ?>

<!-- THUMB -->
<?php $thumb = get_post_thumbnail_id(); $image = vt_resize( $thumb,'' , 205, 205, true ); ?>
<?php $fullsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>
<?php $video = get_post_meta($post->ID, 'siiimple_video', true);?>

<!-- NINE -->
<div class="nine columns">

	<?php if ( $video ) { ?>

	<iframe src="<?php echo get_post_meta($post->ID, "siiimple_video", $single = true); ?>" id="fitvid" width="205" height="205" style="border:0;float:left;margin-right:20px; margin-bottom:20px"></iframe>
	
	<?php } else { ?>

	<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
	
	<?php } ?>
	
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	
	<ul class="blog-meta">

		<li class="date"><a href="<?php the_permalink(); ?>" data-placement="above" rel="external" title="Date Posted"><?php the_time('M jS, Y') ?></a></li>
		
		<li class="enlarge"><a href="<?php echo $fullsrc[0]; ?>" class="zoom" data-placement="above" rel="external" title="Zoom Image">View Image</a></li>

		<li class="visit"><a href="<?php the_permalink(); ?>" data-placement="above" rel="external" title="<?php the_title(); ?>">Visit Post</a></li>

	</ul>

	
	<?php wpe_excerpt('wpe_excerptlength_200', 'wpe_excerptmore'); ?>
	

<!-- END NINE -->
</div>

<!-- END loop -->
<?php endwhile; ?>

<!-- END IF -->
<?php endif; ?>

<div class="clear"></div>

<!-- PAGINATION -->
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>

<!-- END ROW LOOP BLOCK -->
</div>

<?php get_footer(); ?>