<?php get_header(); ?>

	<div class="container">
		<div class="h1 title-korona">Статьи</div>
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?=get_the_date(); ?></span></h2>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary alignright">Подробнее</a>
			<div class="clearfix"></div>
			<hr>
		</div>
		
		<?php endwhile; ?>
		<div class="centered">
			<?php if(function_exists('proPagination')) { proPagination(); } ?>
		</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>