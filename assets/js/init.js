$(window).on('load', function(){
	$('.loader').fadeOut(function(){
		$(this).remove();
	});
	$(".button-collapse").sideNav();
	var age = new Date;
	age = age.getFullYear() - 1998;
	$('#age').html(age);
	$('.tocontact').click(function(){
		$('a#linkcontact').trigger("click");
	});
	window.hide_alert = function hide_alert(){
		if($('.warning').length){
			var delay = 0;
			$('.warning > div').each(function(){
				delay += 5000;
				$(this).delay(delay).fadeOut(function(){
					$(this).remove();
				});
			});
		}
	}
	hide_alert();
	var contentH = $(window).innerHeight() - ($('header').innerHeight() + $('footer').innerHeight());
	$('main').css('min-height', contentH);
});