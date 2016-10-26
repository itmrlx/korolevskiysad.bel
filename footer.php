	<!-- map -->
	<div class="wrapper map-wr">
		<div id="map"></div>
	</div>

	<!-- footer -->
	<footer class="footer-wr" style="background-image: url(<?php the_field('foofon','option'); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 rec-container">
					<div class="rec foo-content">
						<?php the_field('requi','option'); ?>
					</div>
				</div>
				<div class="col-xs-3 col-xs-offset-6 contacts-container">
					<div class="contacts foo-content">
						<h2 class="title centered">Контакты</h2>
						<hr>
						<p><strong>Телефон:</strong> <?php the_field('m_phone','option'); ?></p>
						<p><strong>Адрес:</strong> <?php the_field('m_adres','option'); ?></p>
						<hr>
						<p class="centered"><strong>Мы в соц. сетях</strong></p>
						<div class="socials-container">
							<a target="_blank" href="<?php the_field('m_vk','option'); ?>" class="vk">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 548.4 312" style="enable-background:new 0 0 548.4 312;" xml:space="preserve">
									<path d="M545.5,282.2c-0.7-1.4-1.3-2.6-1.9-3.6c-9.6-17.1-27.7-38.1-54.6-62.9l-0.6-0.6l-0.3-0.3l-0.3-0.3h-0.3
									c-12.2-11.6-19.9-19.3-23.1-23.3c-5.9-7.6-7.3-15.3-4-23c2.3-5.9,10.8-18.3,25.7-37.3c7.8-10.1,14-18.1,18.5-24.2
									C537.5,63,551.8,35,547.4,23l-1.7-2.9c-1.2-1.8-4.1-3.3-8.9-4.8s-10.8-1.6-18.2-0.6l-82.3,0.5c-1.4-0.5-3.3-0.5-5.7,0.1l-3.8,0.8
									l-1.4,0.7l-1.2,0.9c-1,0.5-2,1.5-3.2,3c-1.1,1.4-2.1,3.1-2.8,5c-9,22.9-19.2,44.3-30.6,64c-7,11.8-13.5,21.9-19.4,30.6
									c-5.9,8.6-10.9,15-14.9,19s-7.6,7.4-10.9,9.8c-3.3,2.5-5.8,3.5-7.5,3.1l-4.8-1.2c-2.6-1.7-4.8-4-6.4-7c-1.6-2.9-2.7-6.7-3.3-11.1
									c-0.5-4.5-0.9-8.4-1-11.6c-0.1-3.3,0-7.8,0.2-13.7s0.3-9.9,0.3-12c0-7.3,0.1-15.1,0.4-23.5s0.5-15.2,0.7-20.1
									c0.2-4.9,0.3-10.2,0.3-15.7s-0.3-9.9-1-13c-0.6-3.1-1.6-6.2-3-9.1c-1.3-2.9-3.3-5.2-5.8-6.8s-5.8-2.9-9.5-3.9
									c-10.1-2.3-23-3.5-38.6-3.7c-35.4-0.4-58.2,1.9-68.3,6.9c-4,2.1-7.6,4.9-10.8,8.6c-3.4,4.2-3.9,6.5-1.4,6.9
									c11.4,1.7,19.5,5.8,24.3,12.2l1.7,3.4c1.3,2.4,2.6,6.8,4,13.1c1.3,6.3,2.2,13.2,2.5,20.7c1,13.9,1,25.7,0,35.6
									c-0.9,9.9-1.8,17.6-2.7,23s-2.1,10-3.9,13.4c-1.8,3.4-2.9,5.5-3.5,6.3c-0.5,0.7-1,1.2-1.4,1.4c-2.5,0.9-5,1.4-7.7,1.4
									s-5.9-1.3-9.7-4s-7.8-6.3-11.9-11c-4.1-4.7-8.7-11.2-13.8-19.5c-5.1-8.4-10.5-18.2-16-29.6l-4.5-8.2c-2.9-5.3-6.8-13.1-11.7-23.2
									c-4.9-10.2-9.3-19.9-13.1-29.4c-1.5-4-3.8-7.1-6.8-9.2l-1.5-0.9c-0.9-0.7-2.4-1.5-4.5-2.4c-2.1-0.8-4.3-1.4-6.6-1.8L18,14.2
									c-8,0-13.4,1.8-16.3,5.4l-1,1.9c-0.6,1-0.9,2.5-0.9,4.6s0.6,4.6,1.7,7.7c11.6,26.9,24,52.8,37.5,77.6c13.4,24.8,25.1,44.9,35,60
									s20,29.5,30.3,43s17.1,22.1,20.4,25.9c3.3,3.8,6,6.6,7.9,8.5l7.1,6.8c4.6,4.5,11.3,10,20.2,16.4c8.9,6.4,18.7,12.6,29.4,18.7
									c10.8,6.2,23.3,11.2,37.6,15.1s28.2,5.4,41.7,4.7h32.9c6.7-0.6,11.7-2.7,15.2-6.3l1.1-1.5c0.8-1.2,1.5-2.9,2.1-5.3
									c0.7-2.4,1-5,1-7.9c-0.2-8.1,0.4-15.5,1.9-22c1.5-6.5,3.1-11.5,4.9-14.8s3.9-6.1,6.2-8.4c2.3-2.3,3.9-3.7,4.9-4.2s1.7-0.8,2.3-1
									c4.6-1.5,9.9,0,16.1,4.5s12,10,17.4,16.6c5.4,6.6,11.9,13.9,19.5,22s14.3,14.3,20,18.2l5.7,3.4c3.8,2.3,8.8,4.4,14.9,6.3
									s11.4,2.4,16,1.5l73.1-1.1c7.2,0,12.9-1.2,16.8-3.6c4-2.4,6.3-5,7.1-7.8c0.7-2.8,0.8-6.1,0.1-9.7c-0.7-3.6-1.3-6.1-2-7.5
									L545.5,282.2z"/>
								</svg>
							</a>
							<a target="_blank" href="<?php the_field('m_facebook','option'); ?>" class="fb">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.1 96.1">
								  <path d="M72.1 0H59.6c-14 0-23.1 9.3-23.1 23.7v10.9H24c-1.1 0-2 .9-2 2v15.8c0 1.1.9 2 2 2h12.5v39.9c0 1.1.9 2 2 2h16.4c1.1 0 2-.9 2-2v-40h14.7c1.1 0 2-.9 2-2V36.5c0-.5-.2-1-.6-1.4s-.9-.6-1.4-.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7H72c1.1 0 2-.9 2-2V2c0-1.1-.8-2-1.9-2z"/>
								</svg>
							</a>
							<a target="_blank" href="<?php the_field('m_instagram','option'); ?>" class="in">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 97.4 97.4" style="enable-background:new 0 0 97.4 97.4;" xml:space="preserve">
								<path d="M12.5,0h72.4c6.9,0,12.5,5.1,12.5,12.5v72.4c0,7.4-5.6,12.5-12.5,12.5H12.5C5.6,97.4,0,92.3,0,84.9V12.5C0,5.1,5.6,0,12.5,0
									z M70.9,10.8c-2.4,0-4.4,2-4.4,4.4v10.5c0,2.4,2,4.4,4.4,4.4h11c2.4,0,4.4-2,4.4-4.4V15.2c0-2.4-2-4.4-4.4-4.4H70.9z M86.4,41.2
									h-8.6c0.8,2.6,1.3,5.4,1.3,8.3c0,16.2-13.6,29.3-30.3,29.3c-16.8,0-30.3-13.1-30.3-29.3c0-2.9,0.4-5.7,1.3-8.4h-8.9v41.1
									c0,2.1,1.8,3.9,3.9,3.9h67.8c2.1,0,3.9-1.8,3.9-3.9L86.4,41.2L86.4,41.2z M48.8,29.5c-10.8,0-19.6,8.5-19.6,19
									c0,10.5,8.8,18.9,19.6,18.9s19.5-8.5,19.5-19C68.3,38,59.6,29.5,48.8,29.5L48.8,29.5z"/>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- copyright -->
	<div class="wrapper copy-wr">
		<div class="container">
			<div class="webber">
				Copyright &copy; <?php echo date('Y'); ?> Королевский Сад - Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-black.svg" alt="Webber создание сайтов">Webber Studio</a>
			</div>
		</div>
	</div>

	<!-- modal -->
	<div id="fform" style="display: none;">
		<form id="myform" class="fform-container">
			<h3 class="title-korona">Форма</h3>
			<div class="form-group">
				<label>Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Телефон:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" />
			</div>
			<div class="form-group" style="display:none;">
				<label>for robots:</label>
				<input class="form-control" type="text" name="email" />
				<input class="form-control" type="text" id="form-title" name="title" />
				<input class="form-control" type="text" id="form-block" name="block" />
			</div>
			<div class="centered">
				<button type="submit" class="btn btn-green">Отправить</button>
			</div>
		</form>
	</div>

	<!-- back to home -->
	<?php if(!is_home()): ?>
		<a href="/" class="back-to-home">На главную</a>
	<?php else: ?>
		<div class="back-to-home to-top">Вверх</div>
	<?php endif; ?>

<!-- 	<script type="text/javascript"
                src="//cdn.callbackhunter.com/cbh.js?hunter_code=c7627e922f4dcc68ce1f68855b3cba3d" charset="UTF-8"></script> -->
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-2.2.3-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
<!-- Yandex.Metrika counter my --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37231515 = new Ya.Metrika({ id:37231515, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37231515" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	<!-- Yandex.Metrika counter not --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37172860 = new Ya.Metrika({ id:37172860, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37172860" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-77982152-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
	<?php wp_footer(); ?>
</body>
</html>