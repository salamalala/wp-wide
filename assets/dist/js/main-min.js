var emptyPTag=function(){$("p:empty").remove(),$("p > img").unwrap()},mobileMenu=function(){var a=$("#js-mobile-menu").unbind();$("#js-navigation-menu").removeClass("show"),a.on("click",function(a){a.preventDefault(),$(this).toggleClass("close"),$("#js-navigation-menu").toggle("slide",function(){$("#js-navigation-menu").is(":hidden")&&$("#js-navigation-menu").removeAttr("style")})})},sectionAnimationTriggered=function(){var a=new ScrollMagic.Controller;$(".news section").each(function(b){var c=b++;b>1&&new ScrollMagic.Scene({triggerElement:".news section:nth-child("+c+")",reverse:!1}).setClassToggle(".news section:nth-child("+c+")","news__item--animation").addTo(a)}),new ScrollMagic.Scene({triggerElement:".news section:last-child",reverse:!1}).setClassToggle(".news section:last-child","news__item--animation").addTo(a)},stickyHeaderElements=function(a){$(window).scroll(function(){var b=$(a),c=$(window).scrollTop();c>=250?b.addClass("fixed"):b.removeClass("fixed")})};$(function(){emptyPTag(),mobileMenu(),sectionAnimationTriggered(),stickyHeaderElements(".nav"),stickyHeaderElements(".language")});