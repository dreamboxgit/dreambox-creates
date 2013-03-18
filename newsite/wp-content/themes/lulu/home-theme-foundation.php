<?php
/*
Template Name: Home Theme Foundation
*/
?>

<?php get_header(); ?>

<!-- ROW SLIDER BLOCK -->
<div class="row" id="slider-block">
	
	<!-- TWELVE -->
	<div class="twelve columns">
		
		<?php require (TEMPLATEPATH . '/framework/includes/sliders/flex.php'); ?>
		
	<!-- END TWELVE -->
	</div>
	
<!-- ROW SLIDER BLOCK -->	
</div>

<!-- INFO BLOCK WRAP -->
<div id="info-block-wrap">
	
	<!-- ROW INFO BLOCK -->
	<div class="row" id="info-block">
	
		<?php require (TEMPLATEPATH . '/framework/includes/sliders/info.php'); ?>
	
	<!-- END ROW -->	
	</div>

<!-- END INFO BLOCK WRAP -->
</div>

<!-- BLOCK TITLE -->
<div class="block-title">

		<?php if ( $latestblog = get_option('of_latest_blog_tagline') ) { ?>
	
		<h4><span class="dash">&mdash;</span>&nbsp;<?php echo stripslashes ( $latestblog ); ?>&nbsp;<span class="dash">&mdash;</span></h4>
	
		<?php } else { ?>

		<h4><span class="dash">&mdash;</span>&nbsp;Latest Blog Items&nbsp;<span class="dash">&mdash;</span></h4>
	
		<?php } ?>
		
		<?php if (get_option('of_stars') == 'true') { ?>

		<br/>&#9733;
		
		<?php } ?>
		
<!-- END BLOCK TITLE -->
</div>
	
<!-- ROW CAROUSEL BLOCK -->
<div class="row" id="carousel-block">
	
	<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-blog.php'); ?>

<!-- END ROW CAROUSEL BLOCK -->
</div>

<?php if (get_option('of_media') == 'true') { ?>

<!-- LOGO BLOCK -->
<div id="logo-block-wrap">

	<div class="block-title">
	
		<?php if ( $clients = get_option('of_clients_tagline') ) { ?>
	
		<h4><span class="dash">&mdash;</span>&nbsp;<?php echo stripslashes ( $clients ); ?>&nbsp;<span class="dash">&mdash;</span></h4>
	
		<?php } else { ?>

		<h4><span class="dash">&mdash;</span>&nbsp;Our Awesome Clients&nbsp;<span class="dash">&mdash;</span></h4>
	
		<?php } ?>
		
		<?php if (get_option('of_stars') == 'true') { ?>
		
		<br/>&#9733;
		
		<?php } ?>
		
	</div>

	<!-- ROW -->
	<div class="row" id="logo-block">

		<?php require (TEMPLATEPATH . '/framework/includes/sliders/slider-logo.php'); ?>

	<!-- END ROW -->
	</div>

<!-- END LOGO BLOCK -->
</div>

<?php } ?>

<?php get_footer(); ?>