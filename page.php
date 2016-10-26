<?php get_header(); ?>

	<div class="container">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
			<div class="h1 title-korona"><?php the_title(); ?></div>
			<?php if (is_page('genplan-uchastka')): ?>
				<div class="row sserv">
					<div class="col-xs-4">
						<div class="serv-block">
							<div class="header">
								<span><a href="/pdf/1.pdf"></a>Генплан</span>
								<div class="clearfix"></div>
								<a href="#fform" class="btn btn-green fancybox" onklick="fform('Генплан это','Генплан это');">Узнать цену</a>
							</div>
							<div class="packs">
								<div class="pac">
									<ul>
										<li><a href="/pdf/2.pdf" target="_blank" class="pdf"></a> Дендроплан</li>
										<li><a href="/pdf/3.pdf" target="_blank" class="pdf"></a> Посадочный чертеж</li>
										<li><a href="/pdf/4.pdf" target="_blank" class="pdf"></a> Разбивочный чертеж</li>
									</ul>
									<div class="centered">
										<a href="#fform" class="btn btn-green fancybox" onklick="fform('Генплан 1','Генплан 1');">Узнать цену</a>
									</div>
								</div>
								<div class="pac">
									<ul>
										<li><a href="/pdf/5.pdf" target="_blank" class="pdf"></a>Вертикальная планировка</li>
									</ul>
									<div class="centered">
										<a href="#fform" class="btn btn-green fancybox" onklick="fform('Генплан 2','Генплан 2');">Узнать цену</a>
									</div>
								</div>
								<div class="pac">
									<ul>
										<li><a href="/pdf/6.pdf" target="_blank" class="pdf"></a>План элементов вертикальной планировки их сечения</li>
										<li><a href="/pdf/7.pdf" target="_blank" class="pdf"></a>Разбивочно-привязочный чертеж элементов вертикальной планировки</li>
										<li><a href="/pdf/8.pdf" target="_blank" class="pdf"></a>Проект рисунка мощения</li>
										<li><a href="/pdf/9.pdf" target="_blank" class="pdf"></a>Схема освещения</li>
										<li><a href="/pdf/10.pdf" target="_blank" class="pdf"></a>План ливневой, дренажной канализации</li>
										<li><a href="/pdf/11.pdf" target="_blank" class="pdf"></a>Автополив бесплатно</li>
										<!-- <li><a href="/pdf/12.pdf" target="_blank" class="pdf"></a>Детальная разработка водных сооружений, альпинариев, МАФ, навесов, террас и т.д.</li>
 -->									</ul>
									<div class="centered">
										<a href="#fform" class="btn btn-green fancybox" onklick="fform('Генплан 3','Генплан 3');">Узнать цену</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-8">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="clearfix"></div>
			<?php else: ?>
				<?php the_content(); ?>
			<?php endif; ?>
			<div class="clearfix"></div>
			<?php $cnts = 0; ?>
			<?php if( have_rows('service_gallery') ):while ( have_rows('service_gallery') ) : the_row(); ?>
				<?php $cnts++; ?>
				<?php $gsimg = get_sub_field('service_gallery_img'); ?>
				<div class="col-xs-4 image-sgallery">
					<a href="<?php echo $gsimg['url']; ?>" class="fancybox" data-fancybox-group='gs<?=$cnts; ?>'>
						<img src="<?php echo $gsimg['sizes']['pgallery']; ?>" alt="<?php echo $gsimg['alt']; ?>">
					</a>
					<p class="centered"><?php echo $gsimg['title']; ?></p>
				</div>

				<?php  $images = get_sub_field('service_gallery_gallery'); if( $images ):foreach( $images as $image ): ?>
						<a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gs<?=$cnts; ?>'></a>
				<?php endforeach; endif; ?>
			<?php endwhile; endif; ?>
			<div class="clearfix"></div>
			<?php if (!is_page('genplan-uchastka')): ?>
				<div class="centered">
					<a href="#fform" class="btn btn-green fancybox" onclick="fform('Узнать подробнее', 'Страница <?php the_title(); ?>')">Узнать подробнее</a>
				</div>
			<?php endif; ?>
		</div>
		
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>