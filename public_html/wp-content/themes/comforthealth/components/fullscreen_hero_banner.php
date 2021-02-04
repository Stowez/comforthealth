<?
	if (get_sub_field('background_image_or_colour') == 'image') {
		$style = "background-image: url('".get_sub_field('background_image')."')";
	} else {
		$style = "background-color: ".get_sub_field('background_colour');
	}
	?>




<section class="fullscreen-hero fullscreen-hero--center <?= (get_sub_field('background_image_or_colour') == 'image' ? 'darkOverlay' : 'lightCmpt') ?> <?= (get_sub_field('half_height') ? 'half--hero' : '')?>" style="<?= $style ?>">

	<?if(is_front_page()){?>
		<div class="videoContainer">
			<iframe class="videoContainer__video" width="1920" height="1080" src="https://www.youtube.com/embed/t25gS8Mjlak?modestbranding=1&autoplay=1&controls=0&fs=0&loop=1&rel=0&mute=1&showinfo=0&disablekb=1" frameborder="0"></iframe>
		</div>
	<?};?>
	<div class="container">
	<?if (is_front_page()) :?>
			<h2><a href="/booking/" class="book-now-button">Book Now</a></h2>
		<?endif;?>
	
		<?php
			if ( function_exists('yoast_breadcrumb') && get_sub_field('half_height') && !get_sub_field('hide_breadcrumbs')) {
				yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}
		?>
		<img src="<? the_sub_field('logo_icon'); ?>">
		<article class="content content--center">

			<? the_sub_field('content_block'); ?>
			<?if (get_sub_field('include_video_button')) :?>
				<a class="btn outline video" href="https://www.youtube.com/embed/RbV9RcT0xOQ?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1" data-featherlight="iframe" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-style="display:block;border:none;height:80vh;width:80vw;"><? the_sub_field('play_button_text'); ?></a>
			<?endif;?>
		</article>
	</div>
	<a href="#" id="scrollNext"><i class="fa fa-angle-double-right"></i></a>
	
</section>
<? if( isset($_REQUEST['play'])  && !isset($_COOKIE['played']) && $_COOKIE['played'] !== 1 ) {?>
<div class="featherlight featherlight-iframe mimic" style="display: block; background:rgba(0,0,0,0.8)"><div class="featherlight-content"><button class="featherlight-close-icon featherlight-close" aria-label="Close">✕</button><iframe src="https://www.youtube.com/embed/RbV9RcT0xOQ?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allow="autoplay; encrypted-media" autplay allowfullscreen="true" style="display:block;border:none;height:80vh;width:80vw;" class="featherlight-inner"></iframe></div></div>
	<script>
		$( document ).ready(function() {
			$('.mimic .featherlight-close').on('click', function() {
				$('.mimic').remove();
			});

			window.addEventListener("keydown", function(event) {
				if(event.which == 27) {
					$('.mimic').remove();
				}
			});
		});
	</script>
<?}?>
