function myElementsHeight(t){$(window).load(function(){var e=0;$(t).each(function(){$(this).height()>e&&(e=$(this).height())}),$(t).height(e)})}function fform(t,e){$(".fform-container .title-korona").html(t),$("#form-title").val(t),$("#form-block").val(e)}function sendMyForm(t,e,n){jQuery(document).ready(function(o){o("#"+t).submit(function(){var i=o(this).serialize();return o.ajax({type:"POST",url:"/mail/"+e+".php",data:i,success:function(e){"OK"==e?(result='<h3 class="title-korona">'+n+"</h3>",o("#"+t).html(result),yaCounter37231515.reachGoal("send-form"),yaCounter37172860.reachGoal("send-form")):(result="нее",o("#"+t).html(result))}}),!1})})}jQuery.fn.getTitle=function(){var t=jQuery("a.fancybox");jQuery.each(t,function(){var t=jQuery(this).children("img").attr("title");jQuery(this).attr("title",t)})};var thumbnails=jQuery("a:has(img)").not(".nolightbox").filter(function(){return/\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr("href"))}),posts=jQuery(".item-images");posts.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()});var post=jQuery(".post");post.each(function(){jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+post.index(this)).getTitle()}),jQuery("a.fancybox").fancybox({helpers:{overlay:{locked:!1}}}),function(t){t(function(){t("ul#nav-tab").on("click","li:not(.active)",function(){t(this).addClass("active").siblings().removeClass("active").closest("div.tabs").find("div.portfolio-gallery").removeClass("active").eq(t(this).index()).addClass("active")})})}(jQuery),myElementsHeight(".foo-content"),$(".burger-menu").click(function(){$(this).toggleClass("active"),$(".pro-menu").slideToggle()}),$(".menu-item-has-children>a").click(function(){$(window).width()<768&&$(this).next(".sub-menu").slideToggle()}),$(document).ready(function(){$(".pro-menu li").on("click","a.scroll",function(t){t.preventDefault();var e=$(this).attr("href"),n=$(e).offset().top;$("body,html").animate({scrollTop:n},500)})}),sendMyForm("myform","myform","Спасибо, скоро мы с Вами свяжемся!"),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>300?$(".to-top").fadeIn():$(".to-top").fadeOut()}),$(".to-top").click(function(){return $("body,html").animate({scrollTop:0},400),!1})});
//# sourceMappingURL=script-min.js.map