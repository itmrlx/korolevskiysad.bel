<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	
	<!-- header -->
	<div class="wrapper header-wr">
		<div class="container header-top-container">
			<div class="row">
				<div class="col-xs-2 logo-container">
					<?php if(get_field('m_logo','option')): ?>
						<a class="logo" href="/"><img src="<?php the_field('m_logo','option'); ?>" alt="Королевский сад"></a>
					<?php endif; ?>
				</div>
				<div class="col-xs-8 menu-container">
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<?php if(is_home()): ?>
						<ul class="pro-menu">
							<li><a href="/">Главная</a>
							<li class="menu-item-has-children"><a href="/services/">Услуги</a>
								<?php 
									$args = array(
									  'theme_location'  => 'sub-menu',
									  'container'       => '', 
									  'menu_class'      => 'sub-menu', 
									);
									wp_nav_menu( $args );
								?>
							</li>
							<li><a href="#portfolio" class="scroll">Портфолио</a></li>
							<li><a href="#video" class="scroll">3D видео</a></li>
							<li><a href="/category/news/">Статьи</a></li>
							<li><a href="/bank-idey">Банк идей</a></li>
						</ul>
					<?php else: ?>
						<ul class="pro-menu">
							<li><a href="/">Главная</a>
							<li class="menu-item-has-children"><a href="/services/">Услуги</a>
								<?php 
									$args = array(
									  'theme_location'  => 'sub-menu',
									  'container'       => '', 
									  'menu_class'      => 'sub-menu', 
									);
									wp_nav_menu( $args );
								?>
							</li>
							<li><a href="/#portfolio">Портфолио</a></li>
							<li><a href="/#video">3D видео</a></li>
							<li><a href="/category/news/">Статьи</a></li>
							<li><a href="/bank-idey">Банк идей</a></li>
						</ul>
					<?php endif; ?>
				</div>
				<div class="col-xs-2 phone-container">
					<p class="phone"><?php the_field('m_phone','option'); ?></p>
					<p class="adres"><?php the_field('m_adres','option'); ?></p>
				</div>
			</div>
		</div>
	</div>