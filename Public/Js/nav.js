$(function(){
	$(".nav_1").hover(function(){
		$(this).children("ul").slideDown();
	},function(){
		$(this).children("ul").slideUp();
	})
})