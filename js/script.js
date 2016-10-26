// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
	var arr = jQuery("a.fancybox");
	jQuery.each(arr, function() {
		var title = jQuery(this).children("img").attr("title");
		jQuery(this).attr('title',title);
	})
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".item-images"); //find post
posts.each(function() {
	jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
var post = jQuery(".post"); //find post
post.each(function() {
	jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+post.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
	helpers : {
		overlay : {
			locked : false // try changing to true and scrolling around the page
		}
	}
});

// tabs
(function($) {
	$(function() {
		$('ul#nav-tab').on('click', 'li:not(.active)', function() {
			$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('div.tabs').find('div.portfolio-gallery').removeClass('active').eq($(this).index()).addClass('active');
		});
	});
})(jQuery);

// elements height
function myElementsHeight(class) {
	$(window).load(function() {
		var maxHeight = 0;
		$(class).each(function(){
			if ( $(this).height() > maxHeight ) 
			{
				maxHeight = $(this).height();
			}
		});
		$(class).height(maxHeight);
	});
}
// myElementsHeight('.tarif-item');
myElementsHeight('.foo-content');

// burger menu
$('.burger-menu').click(function () {
	$(this).toggleClass('active');
	$('.pro-menu').slideToggle();
});
$('.menu-item-has-children>a').click(function(e) {
	if($(window).width() < 768){
		$(this).next('.sub-menu').slideToggle();
	}
});
// slow scroll menu
$(document).ready(function(){
	$(".pro-menu li").on("click","a.scroll", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 500);
	});
});

// modal form
function fform(title,block) {
	$('.fform-container .title-korona').html(title);
	$('#form-title').val(title);
	$('#form-block').val(block);
}
function sendMyForm(myclass, myfile, mytext) {
	jQuery(document).ready(function($) {
		$('#'+myclass).submit(function() {
			var str = $(this).serialize();
			$.ajax({
				type: 'POST',
				url: '/mail/'+myfile+'.php',
				data: str,
				success: function(msg){
					if(msg == 'OK'){
						result = '<h3 class="title-korona">'+mytext+'</h3>';
						$('#'+myclass).html(result);
						yaCounter37231515.reachGoal('send-form');
						yaCounter37172860.reachGoal('send-form');
					}else{
						result = 'нее';
						$('#'+myclass).html(result);
					}
				}
			});
			return false;
		});
	});
};

sendMyForm('myform', 'myform', 'Спасибо, скоро мы с Вами свяжемся!');

// scroll to top
$(document).ready(function(){
	$(window).scroll(function(){if ($(this).scrollTop() > 300){$('.to-top').fadeIn();}else{$('.to-top').fadeOut();}});
	$('.to-top').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
});


$('.portfolio-slider').slick({
	dots: true,
	lazyLoad: 'ondemand',
	infinite: true,
	speed: 300,
	fade: true,
	slidesToShow: 1,
	customPaging: function (slider, i) {
		return  (i + 1) + '/' + slider.slideCount;
	}
});