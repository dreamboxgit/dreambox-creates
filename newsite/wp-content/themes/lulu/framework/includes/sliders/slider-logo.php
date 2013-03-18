<!-- CAROUSEL -->
<div id="carousel" class="es-carousel-wrapper">

	<!-- ES CAROUSEL -->
	<div class="es-carousel">
						
		<ul>

		<?php query_posts( 'post_type=logos&posts_per_page=-1'.'&paged='.$paged); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php $thumbm = get_post_thumbnail_id(); $imagem = vt_resize( $thumbm,'' , 120, 120, true ); ?>

		<?php $infourl = get_post_meta($post->ID, 'siiimple_info_url', true); ?>

			<li>

			<?php if ( $infourl ) { ?>

				<a href="<?php echo ( $infourl ); ?>" rel="alternate" data-placement="above" title="<?php the_title(); ?>" data-content="<?php the_excerpt(); ?>">

			<?php } else { ?>

				<a href="<?php the_permalink(); ?>" rel="alternate" data-placement="above" title="<?php the_title(); ?>" data-content="<?php the_excerpt(); ?>">

			<?php } ?>

				<img src="<?php echo $imagem[url]; ?>" width="<?php echo $imagem[width]; ?>" height="<?php echo $imagem[height]; ?>" alt="image"/>

				</a>	
	
			</li>

			<?php endwhile; ?>

			<?php endif; ?>

		</ul>

	<!-- END ES-CAROUSEL -->
	</div>

<!-- END CAROUSEL -->
</div>