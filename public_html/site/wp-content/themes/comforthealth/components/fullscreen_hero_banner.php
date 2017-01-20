<?
	if (get_sub_field('background_image_or_colour') == 'image') {
		$style = "background-image: url('".get_sub_field('background_image')."')";
	} else {
		$style = "background-color: ".get_sub_field('background_colour');
	}
?>



<section class="fullscreen-hero fullscreen-hero--center <?= (get_sub_field('background_image_or_colour') == 'image' ? 'darkOverlay' : 'lightCmpt') ?> <?= (get_sub_field('half_height') ? 'half--hero' : '')?>" style="<?= $style ?>">
	<div class="container">

		<?php
			if ( function_exists('yoast_breadcrumb') && get_sub_field('half_height') && !get_sub_field('hide_breadcrumbs')) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}
		?>
		<img src="<? the_sub_field('logo_icon'); ?>">
		<article class="content content--center">

			<? the_sub_field('content_block'); ?>
		</article>
	</div>

	<a href="#" id="scrollNext"><i class="fa fa-angle-double-right"></i></a>
</section>