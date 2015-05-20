$(function(){

	//higlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
	$("#schedule a:contains('Schedule')").parent().addClass('active');
	$("#artists a:contains('Artists')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');		

	$("ul.nav li.dropdown").hover(function(){
		$(".dropdown-menu", this).fadeIn();
	}, function() {
		$(".dropdown-menu", this).fadeOut('fast');
	});//hover
}); //jQuery is loaded