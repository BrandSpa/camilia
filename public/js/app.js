$(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: true,
		touch: true,
		useCSS: false,
		directionNav: false
	});

	var element = document;
	var hammeropen = Hammer(element).on("swiperight", function(event) {
		$.sidr();
	});

	var hammerclose = Hammer(element).on("swipeleft", function(event) {
		$.sidr('close');
	});

	$('.open-menu').sidr();

});
