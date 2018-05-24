$(function() {

	"use strict";

	
	$('.custom-select').selectmenu();
	$('.ui-selectmenu-menu').customScroll();


	// Mobile menu
	$(".nav").click(function() {
		$(this).toggleClass("nav-expanded");
	});


	$('#js-info-toggle').click(function() {
		$('.header__contacts').slideToggle();
	});

	$('#rounded-label').click(function() {
		$('.price__search-type').toggleClass('price__search-type--active');

	});


});
