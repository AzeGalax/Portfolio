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
});