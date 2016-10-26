<?php /*
template name: Галерея
*/ ?>
<?php get_header(); ?>

	<div class="container">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="post gallery-post">
			<div class="h1 title-korona"><?php the_title(); ?></div>
			<div class="row">
			<?php  $images = get_field('gallery'); if( $images ):foreach( $images as $image ): ?>
				<div class="col-xs-4">
					<a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal-page'>
						<img src="<?php echo $image['sizes']['page']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
				</div>
			<?php endforeach; endif; ?>
			</div>
		</div>
		
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>