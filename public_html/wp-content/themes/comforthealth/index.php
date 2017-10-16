<? /*
* Template name: Blog
*/

 get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="blog-page">
	<?php
		$count = 0;
		// Start the loop.
		while ( have_posts() ) : the_post();?>

			<? if($count == 0): ?>

				<article class="single-blog banner <?= ( $count == 0 ? 'featured' : '') ?>" style="background-image:url('<? the_post_thumbnail_url('full'); ?>');">
					<div class="container">
						<header class="v-center">
							<h1 class="banner__title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h1>
							<footer class="banner__author">
								<? $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_the_author_meta('email') ) ) ) . "?s=50"?>
								
								<span class="avatar"><img src="<?= $grav_url; ?>"> By <?=get_the_author_meta('display_name');?> on <?= the_time('jS F Y')?></span>
								<div>
									<a href="<? the_permalink();?> " class="btn outline">Read more</a>
								</div>
							</footer>
						</header>
					</div>
				</article>
			<? else: ?>

				<? if( $count == 1) : echo '<section class="all-posts"><div class="container">'; endif; ?>
				<article class="single-blog masonry">
					<figure class="blog__figure" style="background-image: url('<? the_post_thumbnail_url('large'); ?>') ">
						<?$cats = get_the_category();?>
						<? foreach ($cats as $cat):?>
							<a href="#" class="cat-tags"><?= $cat->name; ?></a>
						<?endforeach;?>
					</figure>
					<div class="blog__content">
						<header>
							<h2 class="blog__title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>	
						</header>
						<? the_excerpt(); ?>	
						<footer style="position:relative; padding: 2rem 0;">
							<?/* $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( get_the_author_meta('email') ) ) ) . "?s=50"?>
							<span class="avatar"><img src="<?= $grav_url; ?>">*/?>
							 By <?=get_the_author_meta('display_name');?></span>
							<a href="<? the_permalink();?> " class="btn right" style="margin-top:20px">Read more</a>
						</footer>
					</div>
				</article>
			<? endif; ?>
			
		<?
		$count++;
		// End the loop.
		endwhile;?>
		</div></section>
	</section>
		<div class="navigation-pagination">
		<?// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'twentysixteen' ),
			'next_text'          => __( 'Next page', 'twentysixteen' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
		) );?>
		</div>
<?
endif;

get_footer();
		?>
