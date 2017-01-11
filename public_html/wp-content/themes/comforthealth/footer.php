<div class="footerNav">
	<div class="container">
		<div class="row">
			<div class="col col-3">
				<h4>Comforthealth</h4>
				<? wp_nav_menu(array('menu' => 'footer-menu')); ?>		 
			</div>
			<div class="col col-3">
				<h4>Physiotherapy Services</h4>
				<? wp_nav_menu(array('menu' => 'footer-menu-2')); ?>		 
			</div>
			<div class="col col-3">
				<h4>Other Services</h4>
				<? wp_nav_menu(array('menu' => 'footer-menu-3')); ?>		 
			</div>
			<div class="col col-3">
				<h4>More</h4>
				<? wp_nav_menu(array('menu' => 'footer-menu-4')); ?>		 
			</div>
		</div>
	</div>
</div>
<footer class="sitefooter">
	<div class="container content content--center">
		<p>Comfort Health All Rights Reserved</p>
	</div>
</footer>

<? wp_footer();?>