<?
get_header();
?>

<?php if ( have_posts() ) : ?>
	<section class="blog-page">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>


				<article class="single-blog single-post">
					<div class="banner">
						<div class="container">
							<header>
								<nav>
								<?$cats = get_the_category();?>
								<? foreach ($cats as $cat):?>
									<a href="#<?= $cat->slug; ?>" class="cat-tags"><?= $cat->name; ?></a>
								<?endforeach;?>
								</nav>
								<h1 class="banner__title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h1>
								<footer class="banner__author">
									<? $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_the_author_meta('email') ) ) ) . "?s=50"?>
									
									<span class="avatar"><img src="<?= $grav_url; ?>"> By <?=get_the_author_meta('display_name');?> on <?= the_time('jS F Y')?></span>
								</footer>
							</header>
						</div>
					</div>
					<div class="content__body">
						<div class="container">
							<figure class="featured featured__single" style="background-image: url('<? the_post_thumbnail_url('full'); ?>');">
							</figure>	
							<div class="the__content">
								<? the_content(); ?>	
							</div>
							
						</div>
					</div>				
				</article>

			
		<?
		$count++;
		endwhile;?>
	</section>
<?endif;

get_footer();
?>
