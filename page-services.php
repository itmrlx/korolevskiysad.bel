<?php /*
template name: Услуги
*/ ?>

<?php get_header(); ?>

	<div class="container">
		<h1 class="h1 title-korona">Услуги</h1>
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="row services-page">
			<div class="col-xs-4 item-service">
				<div class="img-container img1"></div>
				<h2 class="title">Посадка дома на участок</h2>
				<div class="desc">Одна из наших услуг, которая необходима для дальнейшей реализации и рационального использования средств на решение ландшафта рельефа участка.</div>
				<div class="centered">
					<a href="/posadka-doma-na-uchastok/" class="btn btn-green">Смотреть подробнее</a>
				</div>
			</div>
			<div class="col-xs-4 item-service">
				<div class="img-container img2"></div>
				<h2 class="title">Проектирование</h2>
				<div class="desc">Предварительный проект ландшафта дает возможность взглянуть на всю картину предстоящих работ в целом, выявить все нюансы и подчеркнуть детали, скрыть из виду нежелательные объекты.</div>
				<div class="centered">
					<a href="/proektirovanie/" class="btn btn-green">Смотреть подробнее</a>
				</div>
			</div>
			<div class="col-xs-4 item-service">
				<div class="img-container img3"></div>
				<h2 class="title">Уникальное мощение</h2>
				<div class="desc">Авторское мощение подойдёт для людей, желающих выделиться особой индивидуальностью, для людей творческих профессий которые в мощении могут запечатлеть частичку своего вдохновения.</div>
				<div class="centered">
					<a href="/unikalnoemoschenie/" class="btn btn-green">Смотреть подробнее</a>
				</div>
			</div>
			<div class="col-xs-4 item-service">
				<div class="img-container img4"></div>
				<h2 class="title">Выполнение строительных работ</h2>
				<div class="desc">У нас в арсенале всегда имеются новые технологии и материалы, чтобы осуществить все возможные и невозможные Ваши прихоти.</div>
				<div class="centered">
					<a href="/vyipolnenie-stroitelnyih-rabot/" class="btn btn-green">Смотреть подробнее</a>
				</div>
			</div>
			<div class="col-xs-4 item-service">
				<div class="img-container img5"></div>
				<h2 class="title">Профессиональный уход за садом</h2>
				<div class="desc">Сделаем полную перепланировку с изменением дорожек и тропинок, создадим новые функциональные зоны. Например: детскую площадку, беседку с местом для барбекю перед баней, декоративный огородик с травами.</div>
				<div class="centered">
					<a href="/uhodzasadom/" class="btn btn-green">Смотреть подробнее</a>
				</div>
			</div>
			<div class="col-xs-4 item-service">
				<div class="img-container img6"></div>
				<h2 class="title">Генплан участка</h2>
				<div class="desc">Генеральный план в общем смысле — проектный документ, на основании которого осуществляется планировка, застройка, реконструкция и иные виды градостроительного освоения территорий.</div>
				<div class="centered">
					<a href="/genplan-uchastka/" class="btn btn-green">Смотреть подробнее</a>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>