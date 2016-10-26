<?php get_header(); ?>
	
	<!-- header title -->
	<div class="wrapper header-image-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 block-left">
					<h1><?php the_field('m2_title','option'); ?> <br><span><?php the_field('m2_title2','option'); ?></span></h1>
				</div>
				<div class="col-xs-6 block-right">
					<h2><?php the_field('m2_title3','option'); ?></h2>
					<p><?php the_field('m2_desc','option'); ?></p>
					<a href="/genplan-uchastka/" class="btn btn-green">Начать с генплана</a>
				</div>
			</div>
		</div>
	</div>

	<!-- about us -->
	<div class="container about-us-container">
		<div class="col-xs-6">
			<div class="text-container">
				<div class="title"><?php the_field('m3_title','option'); ?></div>
				<div class="text">
					<?php the_field('m3_desc','option'); ?>
				</div>
			</div>
			<div class="centered">
				<a href="#fform" class="btn btn-green fancybox" onclick="fform('Получить бесплатную консультацию', 'О нас')">Получить бесплатную<br>консультацию</a>
			</div>
			<div class="centered">
				<img src="<?php bloginfo('template_url'); ?>/img/uchastok.png" alt="О нас">
			</div>
		</div>
		<div class="col-xs-6">
			<h2 class="title-korona">Наша команда</h2>
			<div class="row peoples">
				<div class="col-xs-4">
					<?php $pimg1 = get_field('m4_photo1','option'); ?>
					<img class="img-p" src="<?php echo $pimg1['sizes']['thumbnail']; ?>" alt="<?php the_field('m4_name1','option'); ?>">
					<header class="title"><?php the_field('m4_name1','option'); ?></header>
					<p class="prof"><?php the_field('m4_spec1','option'); ?></p>
					<a href="<?php the_field('m4_cert1','option'); ?>" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/certificate.svg" alt="certificate" height="40"></a>
				</div>
				<div class="col-xs-4">
					<?php $pimg2 = get_field('m4_photo2','option'); ?>
					<img class="img-p" src="<?php echo $pimg2['sizes']['thumbnail']; ?>" alt="<?php the_field('m4_name2','option'); ?>">
					<header class="title"><?php the_field('m4_name2','option'); ?></header>
					<p class="prof"><?php the_field('m4_spec2','option'); ?></p>
					<a href="<?php the_field('m4_cert2','option'); ?>" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/certificate.svg" alt="certificate" height="40"></a>
				</div>
				<div class="col-xs-4">
					<?php $pimg3 = get_field('m4_photo3','option'); ?>
					<img class="img-p" src="<?php echo $pimg3['sizes']['thumbnail']; ?>" alt="<?php the_field('m4_name3','option'); ?>">
					<header class="title"><?php the_field('m4_name3','option'); ?></header>
					<p class="prof"><?php the_field('m4_spec3','option'); ?></p>
					<a href="<?php the_field('m4_cert3','option'); ?>" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/certificate.svg" alt="certificate" height="40"></a>
				</div>
				<div class="col-xs-4 col-xs-offset-2">
					<?php $pimg4 = get_field('m4_photo4','option'); ?>
					<img class="img-p" src="<?php echo $pimg4['sizes']['thumbnail']; ?>" alt="<?php the_field('m4_name4','option'); ?>">
					<header class="title"><?php the_field('m4_name4','option'); ?></header>
					<p class="prof"><?php the_field('m4_spec4','option'); ?></p>
					<a href="<?php the_field('m4_cert4','option'); ?>" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/certificate.svg" alt="certificate" height="40"></a>
				</div>
				<div class="col-xs-4">
					<?php $pimg5 = get_field('m4_photo5','option'); ?>
					<img class="img-p" src="<?php echo $pimg5['sizes']['thumbnail']; ?>" alt="<?php the_field('m4_name5','option'); ?>">
					<header class="title"><?php the_field('m4_name5','option'); ?></header>
					<p class="prof"><?php the_field('m4_spec5','option'); ?></p>
					<a href="<?php the_field('m4_cert5','option'); ?>" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/certificate.svg" alt="certificate" height="40"></a>
				</div>
			</div>
		</div>
	</div>

	<!-- portfolio -->
	<div class="tabs">
		<div class="wrapper portfolio-header-wr" id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<h2 class="title">Наши работы</h2>
					</div>
					<div class="col-xs-8">
						<ul id="nav-tab">
							<li class="active"><?php the_field('m5_class1','option'); ?></li>
							<li><?php the_field('m5_class2','option'); ?></li>
							<li><?php the_field('m5_class3','option'); ?></li>
							<li><?php the_field('m5_class4','option'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- tabs -->
		<div class="wrapper portfolio-gallery active">
			<div class="container">
				<div class="img-wr-1-2">
					<?php $m_cl_img1 = get_field('m_cl_img1','option'); ?>
					<a href="<?php echo $m_cl_img1['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img1['sizes']['medium']; ?>)"></a>
					<?php $m_cl_img2 = get_field('m_cl_img2','option'); ?>
					<a href="<?php echo $m_cl_img2['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img2['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-3">
					<?php $m_cl_img3 = get_field('m_cl_img3','option'); ?>
					<a href="<?php echo $m_cl_img3['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img3['sizes']['large']; ?>)"></a>
				</div>
				<div class="img-wr-4-5">
					<?php $m_cl_img4 = get_field('m_cl_img4','option'); ?>
					<a href="<?php echo $m_cl_img4['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img4['sizes']['medium']; ?>)"></a>
					<?php $m_cl_img5 = get_field('m_cl_img5','option'); ?>
					<a href="<?php echo $m_cl_img5['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img5['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-6">
					<?php $m_cl_img6 = get_field('m_cl_img6','option'); ?>
					<a href="<?php echo $m_cl_img6['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img6['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-7">
					<?php $m_cl_img7 = get_field('m_cl_img7','option'); ?>
					<a href="<?php echo $m_cl_img7['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img7['sizes']['medium']; ?>)"></a>
				</div>
				<div class="fancybox img-wr-8">
					<?php $m_cl_img8 = get_field('m_cl_img8','option'); ?>
					<a href="<?php echo $m_cl_img8['url']; ?>" class="fancybox img-container" data-fancybox-group='gal1-1' style="background-image: url(<?php echo $m_cl_img8['sizes']['medium']; ?>)"></a>
					<?php  $m_cl_gal1 = get_field('m_cl_gal1','option'); if( $m_cl_gal1 ):foreach( $m_cl_gal1 as $image ): ?><a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal1-1'></a><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="wrapper portfolio-gallery">
			<div class="container">
				<div class="img-wr-1-2">
					<?php $m_cl2_img1 = get_field('m_cl2_img1','option'); ?>
					<a href="<?php echo $m_cl2_img1['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img1['sizes']['medium']; ?>)"></a>
					
					<?php $m_cl2_img2 = get_field('m_cl2_img2','option'); ?>
					<a href="<?php echo $m_cl2_img2['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img2['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-3">
					<?php $m_cl2_img3 = get_field('m_cl2_img3','option'); ?>
					<a href="<?php echo $m_cl2_img3['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img3['sizes']['large']; ?>)"></a>
				</div>
				<div class="img-wr-4-5">
					<?php $m_cl2_img4 = get_field('m_cl2_img4','option'); ?>
					<a href="<?php echo $m_cl2_img4['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img4['sizes']['medium']; ?>)"></a>
					<?php $m_cl2_img5 = get_field('m_cl2_img5','option'); ?>
					<a href="<?php echo $m_cl2_img5['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img5['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-6">
					<?php $m_cl2_img6 = get_field('m_cl2_img6','option'); ?>
					<a href="<?php echo $m_cl2_img6['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img6['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-7">
					<?php $m_cl2_img7 = get_field('m_cl2_img7','option'); ?>
					<a href="<?php echo $m_cl2_img7['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img7['sizes']['medium']; ?>)"></a>
				</div>
				<div class="fancybox img-wr-8">
					<?php $m_cl2_img8 = get_field('m_cl2_img8','option'); ?>
					<a href="<?php echo $m_cl2_img8['url']; ?>" class="fancybox img-container" data-fancybox-group='gal2-1' style="background-image: url(<?php echo $m_cl2_img8['sizes']['medium']; ?>)"></a>
					<?php  $m_cl2_gal1 = get_field('m_cl2_gal1','option'); if( $m_cl2_gal1 ):foreach( $m_cl2_gal1 as $image ): ?><a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal2-1'></a><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="wrapper portfolio-gallery">
			<div class="container">
				<div class="img-wr-1-2">
					<?php $m_cl3_img1 = get_field('m_cl3_img1','option'); ?>
					<a href="<?php echo $m_cl3_img1['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img1['sizes']['medium']; ?>)"></a>
					<?php $m_cl3_img2 = get_field('m_cl3_img2','option'); ?>
					<a href="<?php echo $m_cl3_img2['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img2['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-3">
					<?php $m_cl3_img3 = get_field('m_cl3_img3','option'); ?>
					<a href="<?php echo $m_cl3_img3['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img3['sizes']['large']; ?>)"></a>
				</div>
				<div class="img-wr-4-5">
					<?php $m_cl3_img4 = get_field('m_cl3_img4','option'); ?>
					<a href="<?php echo $m_cl3_img4['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img4['sizes']['medium']; ?>)"></a>
					<?php $m_cl3_img5 = get_field('m_cl3_img5','option'); ?>
					<a href="<?php echo $m_cl3_img5['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img5['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-6">
					<?php $m_cl3_img6 = get_field('m_cl3_img6','option'); ?>
					<a href="<?php echo $m_cl3_img6['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img6['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-7">
					<?php $m_cl3_img7 = get_field('m_cl3_img7','option'); ?>
					<a href="<?php echo $m_cl3_img7['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img7['sizes']['medium']; ?>)"></a>
				</div>
				<div class="fancybox img-wr-8">
					<?php $m_cl3_img8 = get_field('m_cl3_img8','option'); ?>
					<a href="<?php echo $m_cl3_img8['url']; ?>" class="fancybox img-container" data-fancybox-group='gal3-1' style="background-image: url(<?php echo $m_cl3_img8['sizes']['medium']; ?>)"></a>
					<?php  $m_cl3_gal1 = get_field('m_cl3_gal1','option'); if( $m_cl3_gal1 ):foreach( $m_cl3_gal1 as $image ): ?><a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal3-1'></a><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="wrapper portfolio-gallery">
			<div class="container">
				<div class="img-wr-1-2">
					<?php $m_cl4_img1 = get_field('m_cl4_img1','option'); ?>
					<a href="<?php echo $m_cl4_img1['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img1['sizes']['medium']; ?>)"></a>
					<?php $m_cl4_img2 = get_field('m_cl4_img2','option'); ?>
					<a href="<?php echo $m_cl4_img2['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img2['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-3">
					<?php $m_cl4_img3 = get_field('m_cl4_img3','option'); ?>
					<a href="<?php echo $m_cl4_img3['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img3['sizes']['large']; ?>)"></a>
				</div>
				<div class="img-wr-4-5">
					<?php $m_cl4_img4 = get_field('m_cl4_img4','option'); ?>
					<a href="<?php echo $m_cl4_img4['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img4['sizes']['medium']; ?>)"></a>
					<?php $m_cl4_img5 = get_field('m_cl4_img5','option'); ?>
					<a href="<?php echo $m_cl4_img5['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img5['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-6">
					<?php $m_cl4_img6 = get_field('m_cl4_img6','option'); ?>
					<a href="<?php echo $m_cl4_img6['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img6['sizes']['medium']; ?>)"></a>
				</div>
				<div class="img-wr-7">
					<?php $m_cl4_img7 = get_field('m_cl4_img7','option'); ?>
					<a href="<?php echo $m_cl4_img7['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img7['sizes']['medium']; ?>)"></a>
				</div>
				<div class="fancybox img-wr-8">
					<?php $m_cl4_img8 = get_field('m_cl4_img8','option'); ?>
					<a href="<?php echo $m_cl4_img8['url']; ?>" class="fancybox img-container" data-fancybox-group='gal4-1' style="background-image: url(<?php echo $m_cl4_img8['sizes']['medium']; ?>)"></a>
					<?php  $m_cl4_gal1 = get_field('m_cl4_gal1','option'); if( $m_cl4_gal1 ):foreach( $m_cl4_gal1 as $image ): ?><a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal4-1'></a><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- presentation -->
	<div class="wrapper presentation-wr">
		<div class="container">
			<h2 class="title"><?php the_field('mpresent_title','option'); ?></h2>
			<div class="centered">
				<a href="/services/" class="btn btn-green">Посмотреть</a>
			</div>
		</div>
	</div>

	<!-- 3d video -->
	<div class="wrapper video-wr" id="video">
		<div class="container">
			<div class="video-container">
				<div class="title-block">
					<h2 class="title-korona">3D видео</h2>
				</div>
				<div class="row video-items">
					<div class="col-xs-6">
						<?php $imgvid1 = get_field('video_img_1','option'); ?>
						<div class="video-item-container" style="background-image: url(<?php echo $imgvid1['sizes']['medium'] ?>);">
							<a href="#video1" class="video-item fancybox">
								<div class="title"><?php the_field('video_desc1','option'); ?></div>
							</a>
							<div id="video1" style="display: none;">
								<div class="modal-video"><?php the_field('video_kod1','option'); ?></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<?php $imgvid2 = get_field('video_img_2','option'); ?>
						<div class="video-item-container" style="background-image: url(<?php echo $imgvid2['sizes']['medium'] ?>);">
							<a href="#video2" class="video-item fancybox">
								<div class="title"><?php the_field('video_desc2','option'); ?></div>
							</a>
							<div id="video2" style="display: none;">
								<div class="modal-video"><?php the_field('video_kod2','option'); ?></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<?php $imgvid3 = get_field('video_img_3','option'); ?>
						<div class="video-item-container" style="background-image: url(<?php echo $imgvid3['sizes']['medium'] ?>);">
							<a href="#video3" class="video-item fancybox">
								<div class="title"><?php the_field('video_desc3','option'); ?></div>
							</a>
							<div id="video3" style="display: none;">
								<div class="modal-video"><?php the_field('video_kod3','option'); ?></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6">
						<?php $imgvid4 = get_field('video_img_4','option'); ?>
						<div class="video-item-container" style="background-image: url(<?php echo $imgvid4['sizes']['medium'] ?>);">
							<a href="#video4" class="video-item fancybox">
								<div class="title"><?php the_field('video_desc4','option'); ?></div>
							</a>
							<div id="video4" style="display: none;">
								<div class="modal-video"><?php the_field('video_kod4','option'); ?></div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="centered btn-container-wr">
				<div class="btn-container">
					<a href="#fform" class="btn btn-green fancybox" onclick="fform('Получить беспланую консультацию', '3d видео')">Получить беспланую<br>консультацию</a>
					<a href="<?php the_field('prim1','option'); ?>" class="btn btn-green fancybox" data-fancybox-group='gal-prim'>Посмотреть примеры<br>проектов</a>
							<?php $prim2 = get_field('prim2','option'); if( $prim2 ):foreach( $prim2 as $image ): ?>
								<a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal-prim'></a>
							<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- our professionals -->
<!-- 	<div class="container professionals-container">
		<h2 class="title"><?php the_field('spec_title','option'); ?><br><span><?php the_field('spec_title2','option'); ?></span></h2>
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="counter-container">
					<div class="row">
						<div class="col-xs-3">
							<div class="title"><?php the_field('spec_c1','option'); ?></div>
							<p class="desc">Опыт работы</p>
						</div>
						<div class="col-xs-3">
							<div class="title"><?php the_field('spec_c2','option'); ?></div>
							<p class="desc">Завершенных проектов</p>
						</div>
						<div class="col-xs-3">
							<div class="title"><?php the_field('spec_c3','option'); ?></div>
							<p class="desc">Гектаров земли облагорожено</p>
						</div>
						<div class="col-xs-3">
							<div class="title"><?php the_field('spec_c4','option'); ?></div>
							<p class="desc">Довольных клиентов</p>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div> -->

	<!-- tarifs -->
<!-- 	<div class="container tarifs-container">
		<h2 class="title-korona">Пакеты услуг</h2>
		<div class="row">
			<div class="col-xs-3">
				<div class="tarif-item">
					<header class="header"><?php the_field('service_title1','option'); ?></header>
					<div class="text">
						<?php the_field('service_desc1','option'); ?>
					</div>
				</div>
				<div class="centered">
					<a href="#fform" class="btn btn-primary fancybox" onclick="fform('<?php the_field('service_title1','option'); ?>', 'Пакеты услуг')">Получить стоимость</a>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="tarif-item">
					<header class="header"><?php the_field('service_title2','option'); ?></header>
					<div class="text">
						<?php the_field('service_desc2','option'); ?>
					</div>
				</div>
				<div class="centered">
					<a href="#fform" class="btn btn-primary fancybox" onclick="fform('<?php the_field('service_title2','option'); ?>', 'Пакеты услуг')">Получить стоимость</a>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="tarif-item">
					<header class="header"><?php the_field('service_title3','option'); ?></header>
					<div class="text">
						<?php the_field('service_desc3','option'); ?>
					</div>
				</div>
				<div class="centered">
					<a href="#fform" class="btn btn-primary fancybox" onclick="fform('<?php the_field('service_title3','option'); ?>', 'Пакеты услуг')">Получить стоимость</a>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="tarif-item">
					<header class="header"><?php the_field('service_title4','option'); ?></header>
					<div class="text">
						<?php the_field('service_desc4','option'); ?>
					</div>
				</div>
				<div class="centered">
					<a href="#fform" class="btn btn-primary fancybox" onclick="fform('<?php the_field('service_title4','option'); ?>', 'Пакеты услуг')">Получить стоимость</a>
				</div>
			</div>
		</div>
	</div> -->

	<!-- how we work -->
<!-- 	<div class="wrapper how-we-work-wr">
		<div class="container">
			<div class="how-container">
				<div class="title-block">
					<h2 class="title-korona">Как мы работаем?</h2>
					<div class="row">
						<div class="col-xs-4 how how1">
							<div class="img"></div>
							<div class="desc">Составление технического задания</div>
							<a href="#fform" class="btn btn-primary fancybox" onclick="fform('Получить звонок', 'Как мы работаем?')">Получить звонок</a>
						</div>
						<div class="col-xs-4 how how2">
							<div class="img"></div>
							<div class="desc">Создание дизайн проекта</div>
						</div>
						<div class="col-xs-4 how how3">
							<div class="img"></div>
							<div class="desc">Проект участка</div>
							<a href="<?php the_field('prim1','option'); ?>" class="btn btn-primary alignright fancybox" data-fancybox-group='gal-prim'>Посмотреть примеры</a>
							<?php $prim2 = get_field('prim2','option'); if( $prim2 ):foreach( $prim2 as $image ): ?>
								<a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal-prim'></a>
							<?php endforeach; endif; ?>
						</div>
						<div class="col-xs-4 col-xs-offset-2 how how4">
							<div class="img"></div>
							<div class="desc">Воплощение проекта на участке</div>
						</div>
						<div class="col-xs-4 how how5">
							<div class="img"></div>
							<div class="desc">Выполнение строительных работ</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- solutions -->
	<div class="wrapper tarifs-container">
		<div class="container solutions-container">
			<div class="row">
				<div class="col-xs-5">
					<h2 class="title"><?php the_field('sol_title','option'); ?></h2>
					<div class="desc">
						<?php the_field('sol_desc','option'); ?>
					</div>
					<a href="#fform" class="btn btn-green fancybox" onclick="fform('Хочу так!', '<?php the_field('sol_title','option'); ?>')">Хочу так!</a>
				</div>
				<div class="col-xs-7">
					<div class="row">
						<div class="col-xs-6">
							<?php $solimg1 = get_field('sol_img1','option'); ?>
							<a href="<?php echo $solimg1['url'] ?>" data-fancybox-group='gal-solution' class="img img1 fancybox" style="background-image: url(<?php echo $solimg1['sizes']['medium'] ?>);"></a>
							<?php $solimg2 = get_field('sol_img2','option'); ?>
							<a href="<?php echo $solimg2['url'] ?>" data-fancybox-group='gal-solution' class="img img2 fancybox" style="background-image: url(<?php echo $solimg2['sizes']['medium'] ?>);"></a>
						</div>
						<div class="col-xs-6">
							<?php $solimg3 = get_field('sol_img3','option'); ?>
							<a href="<?php echo $solimg3['url'] ?>" data-fancybox-group='gal-solution' class="img img3 fancybox" style="background-image: url(<?php echo $solimg3['sizes']['medium'] ?>);"></a>
							<?php $solimg4 = get_field('sol_img4','option'); ?>
							<a href="<?php echo $solimg4['url'] ?>" data-fancybox-group='gal-solution' class="img img4 fancybox" style="background-image: url(<?php echo $solimg4['sizes']['medium'] ?>);"></a>
							<?php $solimg5 = get_field('sol_img5','option'); ?>
							<a href="<?php echo $solimg5['url'] ?>" data-fancybox-group='gal-solution' class="img img5 fancybox" style="background-image: url(<?php echo $solimg5['sizes']['medium'] ?>);"></a>
						</div>
						<?php $sol_gal = get_field('sol_gal','option'); if( $sol_gal ):foreach( $sol_gal as $image ): ?>
							<a href="<?php echo $image['url']; ?>" class="fancybox" data-fancybox-group='gal-solution'></a>
						<?php endforeach; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>