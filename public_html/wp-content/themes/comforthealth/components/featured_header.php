<section class="featured-header content--center" style="background-image: url('<? the_sub_field('background_image'); ?>')";>
	
	<? if (get_sub_field('link_to_booking') ) { ?>
		<h2 class="booking"><a href="/booking"><? the_sub_field('title'); ?></a></h2>
	<?} else {?>
		<h2><? the_sub_field('title'); ?></h2>
	<?}?>
</section>