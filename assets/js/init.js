$(window).on('load', function(){
	$(".button-collapse").sideNav();
	var age = new Date;
	age = age.getFullYear() - 1998;
	$('#age').html(age);
});