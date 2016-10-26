<?php get_header(); ?>

	<div class="container">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
			<div class="h1 title-korona"><?php the_title(); ?></div>
			<?php the_content(); ?>
		</div>
		
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>