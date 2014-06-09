a$(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: true,
		touch: false,
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

	$(document).on('click', '.btn-contact', function(e){
		e.preventDefault();
		$this = $(this);
		data = $this.parent().serialize();
		title = $('.title-contact');

		$.ajax({
			type: 'POST',
			url: '/contact',
			data: data,
			beforeSend: function(){
				$this.text('Enviando');
			},
		}).done(function(data){
			if(data.created_at)
			{
				$this.parent().fadeOut();
				title.text('Gracias, pronto nos pondremos en contacto con usted.');

			} else {
				title.text('Envíanos un Mensaje');
				$this.text('Enviar');
				$.each(data, function(key, val){
					alertify.error(val);
				});
			}
		});
	});


});
